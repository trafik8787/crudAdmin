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
    //выборка по id или без него
    public function select_all_where ($table, $id = null) {

        if ($id != null) {
        return DB::select()->from($table)
            ->where('id', '=', $id)
            ->execute()->as_array();

        } else {
            return DB::select()->from($table)
                ->execute()->as_array();
        }
    }

    public function set_where ($table, $column = 'id', $operator = '=', $id = null) {

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
        return DB::delete($table)
            ->where('id', '=', $id)
            ->execute();
    }

    //ОБНОВЛЕНЕ
    public function update ($table, $field, $id) {
        DB::update($table)
            ->set($field)
            ->where('id', '=', $id)
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
            'SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab');
        $name_colums_table->param(':tab', $table);
        return $name_colums_table->execute()->as_array();
    }

    public function information_table ($table) {
        $name_colums_table = DB::query(Database::SELECT,
            'SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = :tab');
        $name_colums_table->param(':tab', $table);
        return $name_colums_table->execute()->as_array();
    }


}