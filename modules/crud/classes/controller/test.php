<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: Vitalik
 * Date: 09.05.14
 * Time: 1:04
 * To change this template use File | Settings | File Templates.
 *
 *
 *
 *
 *
 *  $crud->set_field_type('content_short', array('file', 'uploads', 'pre_', 'views', 'img'),'', '');
 *
 * Первый параметр - название поля
 * Второй параметр - тип поля принимает принимает строковою (text,chekbox,radio,textarea,) или масив для поля передачи файла
 *  array первый параметр - тип поля,
 * второй - директория сохранения файла,
 * третий - префикс для названия файла,
 * четвертый - принимает флаг vievs для вывода картинок в таблице
 * пятый - может принимать два параметра img - для загрузки others - для других файлов
 *
 * третий параметр - принимает значение поля по дефолту может принимать масив для чекбоксов и радио array('y' => 'Да', 'n' => 'Нет', 'ner' => 'Незнаю')
 * четвертый параметр  - multiple поля множественного выбора
 * пятый - масив атрибутов поля
*/

class Controller_Test extends Controller {

    public function action_index() {

        $this->response->body(self::asd()->render());

    }


    public static  function asd () {
        $crud = new Cruds;
        $crud->load_table('city');

        $crud->set_lang('ru');
        //$crud->load_table('test');
       $crud->show_name_column(array('id' => 'ID', 'name' => 'Название')); //переименование полей таблицы вывода
       // $crud->callback_befor_delete('call_del');
       // $crud->callback_after_delete('call_after_del');
        //$crud->show_columns('idRT', 'title', 'author');
        //$crud->remove_delete();
       // $crud->remove_add ();
        //$crud->remove_edit();
        //$crud->set_where('name_en','=', "'Dimona'");

        //$crud->callback_befor_edit('call_bef_edit');
        $crud->callback_before_insert('cal_bef_inser');
        $crud->callback_after_insert('cal_insert_inser');

       //$crud->set_field_type('name_en', 'select',  $crud->relation_one('test', 'deskription','idd'), '');
        //$crud->set_field_type('name_en', array('file', 'uploads', 'pre_', 'views', 'img'),'', 'multiple');
        //$crud->set_field_type('status', 'checkbox', array('y' => 'Да', 'n' => 'Нет', 'ner' => 'Незнаю'));
       // $crud->set_field_type('status', 'select', array('' => 'Вибрать', 'y' => 'Да', 'n' => 'Нет', 'ner' => 'Незнаю'),'multiple');
        //$crud->set_field_type('content_short', array('file', 'uploads', 'pre_', 'views', 'img'),'', '');


        //$crud->set_field_type('title', 'select', array('y' => 'Да', 'n' => 'Нет', 'ner' => 'Незнаю'));
        //$crud->set_field_type('author', 'text', 'y');
        //$crud->set_field_type('status', 'checkbox');

        //$crud->relation_one('content_short', 'test', 'deskription');

        //$crud->disable_search();
       $crud->disable_editor('name');
        $crud->disable_editor('name_en');
        $crud->disable_editor('region_en');
        $crud->disable_editor('region');
       // $crud->enable_export();
        $crud->enable_delete_group();

        //$crud->add_field('name', 'name_en');
        //$crud->edit_fields('name', 'name_en');

       // $crud->add_action('addAction', 'Ban', 'ban/actionAdd', 'glyphicon glyphicon-tower');
      //  $crud->add_action('addAction2', 'Ban2', 'ban/actionAdd2');

        //$test = Model::factory('All')->information_table($crud->table);//[0]->COLUMN_NAME;
        //die(print_r(Kohana::$config->load('crudconfig.database')));

        return $crud;
    }

    public static function call_del ($key = null) {

        //die(var_dump($key));
       // return 9;
       //return false;
    }

    public static function call_after_del ($key_array = null) {
        //die(print_r($key_array));
    }

    public static function call_bef_edit ($new_array = null, $old_array = null) {
       //$new_array['author'] = $old_array['idRT'] . $new_array['author'];
        //$old_array['name'] = 'Beit ShemeshBeit ShemeshBeit Shemesh';
        //return false;
    }

    public static function addAction ($key_array = null) {
        //die(print_r($key_array));
    }

    public static function addAction2 ($key_array = null) {
        die(print_r($key_array));
    }

    public static function  cal_bef_inser ($key_array = null) {

        //$key_array['name'] = 'o;jifkjv;lbkosghpodafgkjpogfk[g';
        //die(print_r($key_array));
//       if ( $key_array['title'] == 123) {
//           $key_array['title'] = 'ggggggggggggggggggggggggg';
//       }
       //die($key_array['name']);
        //return $key_array;
    }


    public static function cal_insert_inser ($key_array = null) {
        //die(print_r($key_array));
    }



}