<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: Vitalik
 * Date: 09.05.14
 * Time: 1:04
 * To change this template use File | Settings | File Templates.
 */

class Controller_Test extends Controller {

    public function action_index() {

        $this->response->body(self::asd()->render());

    }



    public static  function asd () {
        $crud = new Cruds;
        $crud->load_table('articles');

        //$crud->set_lang('ru');
        //$crud->load_table('test');
       //$crud->show_name_column(array('idRT' => 'Nace', 'title' => 'Title', 'author' => 'Author')); //переименование полей таблицы вывода
        $crud->callback_befor_delete('call_del');
        $crud->callback_after_delete('call_after_del');
        //$crud->show_columns('idRT', 'title', 'author');
        //$crud->remove_delete();
       // $crud->remove_add ();
        //$crud->remove_edit();
        //$crud->set_where('id','=', 3,1);
        $crud->callback_befor_edit('call_bef_edit');
        $crud->callback_before_insert('cal_bef_inser');
        $crud->callback_after_insert('cal_insert_inser');

        //$crud->set_field_type('content_short', 'text');
        //$crud->set_field_type('author', 'text');
        //$crud->set_field_type('title', 'text');
        //$crud->disable_search();
        $crud->disable_editor('title');
        $crud->enable_delete_group();
        //$crud->disable_editor('author');
        //$crud->disable_editor('content_short');
        //die(print_r($crud->set_field_type));
        //$crud->add_field('title', 'author', 'date');
       // $crud->edit_fields('title', 'author');

        $crud->add_action('addAction', 'Ban', 'ban/actionAdd', 'glyphicon glyphicon-tower');
        $crud->add_action('addAction2', 'Ban2', 'ban/actionAdd2');

        //$test = Model::factory('All')->information_table($crud->table);//[0]->COLUMN_NAME;
        //die(print_r(Kohana::$config->load('crudconfig.database')));

        return $crud;
    }

    public static function call_del ($key = null) {
        //die(print_r($key));
       // return $key['idRT'] +1;
       //return false;
    }

    public static function call_after_del ($key_array = null) {
        //die(print_r($key_array));
    }

    public static function call_bef_edit ($new_array = null, $old_array = null) {


        //$new_array['author'] = $old_array['idRT'];
        //return false;
    }

    public static function addAction ($key_array = null) {
        die(print_r($key_array));
    }

    public static function addAction2 ($key_array = null) {
        die(print_r($key_array));
    }

    public static function  cal_bef_inser ($key_array = null) {
//       if ( $key_array['title'] == 123) {
//           $key_array['title'] = 'ggggggggggggggggggggggggg';
//       }
//        return $key_array;
    }


    public static function cal_insert_inser ($key_array = null) {
        //die(print_r($key_array));
    }



}