<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Base {


    public function action_index() {

        var_dump(Kohana_Request::detect_uri());
        $content = View::factory('/pages/about');
       // $content->editer = self::qwe()->edit_render(15);
        $content->table = self::asd()->render();

        $this->template->content = $content;
    }



    public static function  qwe () {
        $crud = new Cruds;
        $crud->load_table('city');
        $crud->set_lang('ru');
        $crud->disable_editor('name');
        $crud->disable_editor('name_en');
        $crud->disable_editor('region_en');
        $crud->disable_editor('region');

        $crud->set_field_type('name', 'text');

        $crud->validation('name', array('required' => true),
            array('required' => 'Это поле обязательно для заполнения'));

        return $crud;
    }


    public static function asd()
    {
        $crud = new Cruds;
        $crud->load_table('city');

        $crud->set_lang('ru');
        //$crud->load_table('test');
        $crud->show_name_column(array('id' => 'ID', 'name' => 'Название')); //переименование полей таблицы вывода

        $crud->set_field_type('name', 'text');

        //$crud->disable_search();
        $crud->disable_editor('name');
        $crud->disable_editor('name_en');
        $crud->disable_editor('region_en');
        $crud->disable_editor('region');
        // $crud->enable_export();
        //$crud->enable_delete_group();

        //добавляет кнопку просмотра передача необязательного параметра названия класа иконки
        $crud->show_views('glyphicon-search');

        //переопределяет значки кнопок редактировать
        $crud->icon_edit('glyphicon-pencil');
        //переопределяет значки кнопок удалить
        $crud->icon_delete('glyphicon-remove-circle');

        $crud->add_action('addAction', '', 'ban/actionAdd', 'glyphicon glyphicon-tower');


        return $crud;
    }


}