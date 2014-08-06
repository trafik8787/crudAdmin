<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: Vitalik
 * Date: 11.05.14
 * Time: 23:47
 * To change this template use File | Settings | File Templates.
 */
class Model_All extends Model
{
    protected  $key_primary;

    //выборка по id или без него
    public function select_all_where ($table, $id = null) {

        $key_primary = $this->information_table($table, true);
        $this->key_primary = $key_primary[0]->COLUMN_NAME;

        if ($id != null) {
        return DB::select()->from($table)
            ->where($this->key_primary, '=', $id)
            ->execute()->as_array();

        } else {
            return DB::select()->from($table)
                ->execute()->as_array();
        }
    }


    public function set_where ($table, $column , $operator, $id) {

        if ($id != null) {
            return DB::select()->from($table)
                ->where($column, $operator, $id)
                ->execute()->as_array();

        } else {
            return DB::select()->from($table)
                ->execute()->as_array();
        }
    }

    //удаление по id
    public function delete ($table, $id) {

        $key_primary = $this->information_table($table, true);
        $this->key_primary = $key_primary[0]->COLUMN_NAME;

        return DB::delete($table)
            ->where($this->key_primary, '=', $id)
            ->execute();
    }

    //удаление груповое
    public function group_delete ($table, $idArr) {

        $key_primary = $this->information_table($table, true);
        $this->key_primary = $key_primary[0]->COLUMN_NAME;
        //array('john', 'jane')
        return DB::delete($table)
            ->where($this->key_primary, 'IN', $idArr)
            ->execute();
    }

    //ОБНОВЛЕНЕ
    public function update ($table, $field, $id) {
        $key_primary = $this->information_table($table, true);
        $this->key_primary = $key_primary[0]->COLUMN_NAME;
        DB::update($table)
            ->set($field)
            ->where($this->key_primary, '=', $id)
            ->execute();
    }
    //добавление
    public function insert ($table, $column_table, $value_table) {
        return DB::insert($table, $column_table)
            ->values($value_table)
            ->execute();
    }

    //ПОЛУЧАЕМ названия ПОЛЯ ТАБЛИИЦЫ
    public function name_count ($table) {
        $name_colums_table = DB::query(Database::SELECT,
            'SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab AND TABLE_SCHEMA = :bas');
        $name_colums_table->param(':tab', $table);
        $name_colums_table->param(':bas', Kohana::$config->load('crudconfig.database'));

        return $name_colums_table->execute()->as_array();
    }

    public function information_table ($table, $key_primary = null) {

        if ($key_primary != null) {
            $key_primary = 'PRI';
            $name_colums_table = DB::query(Database::SELECT,
                'SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab AND TABLE_SCHEMA = :bas AND COLUMN_KEY = :key_primary');
            $name_colums_table->param(':tab', $table);
            $name_colums_table->param(':key_primary', $key_primary);
            $name_colums_table->param(':bas', Kohana::$config->load('crudconfig.database'));

            return $name_colums_table->as_object()->execute();
        } else {

            $name_colums_table = DB::query(Database::SELECT,
                'SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab AND TABLE_SCHEMA = :bas');
            $name_colums_table->param(':tab', $table);
            $name_colums_table->param(':bas', Kohana::$config->load('crudconfig.database'));

            return $name_colums_table->execute()->as_array();
        }


    }

    //количество записей
    public function count_table ($table) {

        $count_table =  DB::query(Database::SELECT,'SELECT COUNT(*) FROM '.$table);

        return $count_table->execute()->as_array();
    }


    //типы полей таблицы
    private function information_data_type ($table) {

    $data_type = DB::query(Database::SELECT, 'SELECT COLUMN_NAME,DATA_TYPE
                                                  FROM INFORMATION_SCHEMA.COLUMNS
                                                  WHERE table_name = :tab
                                                    AND TABLE_SCHEMA = :bas');
    $data_type->param(':tab', $table);
    $data_type->param(':bas', Kohana::$config->load('crudconfig.database'));

    foreach ($data_type->execute()->as_array() as $row) {
        $result[$row['COLUMN_NAME']] = $row['DATA_TYPE'];
    }


    return $result;
}


    //пагинация
    public function paginationAjax ($limit, $ofset = null, $table, $order_column, $order_by, $like = null, $column_like) {


       // die('sdfsdf');
        if ($ofset == '' or $ofset == null) {
            $ofset = 0;
        }

        if ($like != '' and $like !== null) {
            $i=0;
            $Sql ='';

           // if ($like == "'") {
                $like = str_replace ("'", "\'", $like);
                //$like = "\'";
           // }

            //получаем поля и тыпы к ним
            $name_type_column = $this->information_data_type($table);


                //die(print_r($name_type_column));

            foreach ($column_like as $key => $column) {
                $i++;
                if ($i >= 1) {
                    $or = ' OR ';
                } else {
                    $or = '';
                }

                if (count($column_like) == $i) {
                   $or = '';
                }

                if (mb_detect_encoding($like) != 'ASCII') {

                    if ($name_type_column[$column] != 'date') {

                        $Sql .= $column.' LIKE '. "'%".$like."%'" .$or ;
                    }

                } else {

                    $Sql .= $column.' LIKE '. "'%".$like."%'" .$or ;
                }



            }
            $likeSql = ' WHERE '.$Sql.' ';

        } else {
            $likeSql = '';
        }

        $query_count =  DB::query(Database::SELECT,
            'SELECT * FROM ' .$table.' '.$likeSql.' ')
            ->execute()
            ->as_array();

        $query = DB::query(Database::SELECT,
            'SELECT * FROM ' .$table.' '.$likeSql.' '.
            'ORDER BY '. $order_column.' '.$order_by.'
            LIMIT '.$ofset.','.$limit)
            ->execute()
            ->as_array();

        //count($query)
        return array('query' => $query, 'count' => count($query_count));
    }

    //получение данных из другой таблицы
    public function get_table_relativ ($Table, $field, $field_value) {

        $query = DB::query(Database::SELECT,
            'SELECT '.$field.','.$field_value.' FROM ' .$Table.'')
            ->execute()
            ->as_array();

//        foreach ($query as $rows) {
//            $result[$rows[$field]] = $rows[$field];
//        }
//

        if (!empty($query)) {

            foreach ($query as $rows) {
                $result[$rows[$field_value]] = $rows[$field];
            }

            return $result;
        } else {
            return false;
        }


    }



}