<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: Vitalik
 * Date: 09.05.14
 * Time: 1:04
 * To change this template use File | Settings | File Templates.
 */

class Controller_Test extends Controller_Main {

    public function action_index() {

        $this->template->render = self::asd()->render();

    }

    public static  function asd () {
        $crud = new Cruds;
        $crud->load_table('articles');
        $crud->show_name_column(array('id' => 'Nace', 'title' => 'Title')); //переименование полей таблицы вывода
        $crud->callback_befor_delete('call_del');
        $crud->callback_after_delete('call_after_del');
        $crud->show_columns(array('id', 'title', 'author', 'date', 'content_short'));
        //$crud->remove_delete();
        //$crud->remove_edit();
        //$crud->set_where('id','=', 3,1);
        $crud->callback_befor_edit('call_bef_edit');
        $crud->callback_before_insert('cal_bef_inser');
        $crud->callback_after_insert('cal_insert_inser');

        $crud->add_action('addAction', 'Ban', 'ban/actionAdd');
        $crud->add_action('addAction2', 'Ban2', 'ban/actionAdd2');

        return $crud;
    }

    public static function call_del ($key = null) {

       // return $key['id']+1;
    }

    public static function call_after_del ($key_array = null) {

    }

    public static function call_bef_edit ($new_array = null, $old_array = null) {
        if ($new_array['author'] == 123) {
            $new_array['author'] = 'fghfgnbyhjyjsdyhstyj';
        }

        return $new_array;
    }

    public static function addAction ($key_array = null) {
        //die(print_r($key_array));
    }

    public static function addAction2 ($key_array = null) {
        die(print_r($key_array));
    }

    public static function  cal_bef_inser ($key_array = null) {
       if ( $key_array['title'] == 123) {
           $key_array['title'] = 'ggggggggggggggggggggggggg';
       }
        return $key_array;
    }


    public static function cal_insert_inser ($key_array = null) {

    }

}