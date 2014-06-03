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



}