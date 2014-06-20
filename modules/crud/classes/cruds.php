<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: Vitalik
 * Date: 08.05.14
 * Time: 14:01
 */

class Cruds extends Controller_Main {


    public $table; //название таблицы
    private $name_colums_table; //названия полей таблицы
    public $new_name_column; //переименованые названия полей
    public $render = null; //рендер
    public $key_primary; //хранит первичный ключ таблицы

    public  $set_lang = 'en'; //язык

    public $name_function = null;
    //хранит массив вызова обьекта Cruds
    public  $class_metod = null;
    public $column_array = null; //определение вызова метода определения полей таблицы
    private $remove_delete = null; //уброать кнопку удалить
    private $remove_edit = null; //уброать кнопку редактировать
    private $remove_add = null; //уброать кнопку добавить

    public $disable_editor = array(); //отключение редактора
    private $disable_search = 'f'; //отключение поиска по таблице
    private $enable_delete_group; //включить груповое удаление


    private $set_where = null;
    public $set_field_type = array(); //типы полей

    private $object_serial; //масив параметров для сериализации

    public $add_field = null; //поля которые будут видны при добавлении
    public $edit_fields = null; //поля которые будут видны при редактировании
    public $add_action = null; //добавить екшен

    public $name_colums_table_show; //названия полей
    public $name_colums_ajax; //название полей для аякса

    //хуки
    public $callback_befor_delete = null; //перед удалением
    public $callback_after_delete = null; //после удаления
    public $callback_befor_edit = null; //перед обновлением
    public $callback_before_insert = null; //перед добавлением
    public $callback_after_insert = null; //после добавления


    public function __construct () {
        parent::before();

    }


    public function  load_table ($table) {
        $this->table = $table;

        //установка языка
        //определяем точку вызова
        $debug = debug_backtrace();

        $this->class_metod = array('function' => $debug[1]['function'],
            'class' => $debug[1]['class'],
            'callback_function_name' => __FUNCTION__
        );

    }
    //отображаемые столбцы
    public function show_columns () {
        $this->column_array = func_get_args();
    }

    //метот блокирования кнопки удалить
    public function remove_delete () {
        $this->remove_delete = true;
    }

    //метот блокирования кнопки редактировать
    public function remove_edit () {
        $this->remove_edit = true;
    }

    public function set_where ($colum, $operation, $value) {
        $this->set_where = array('colum' => $colum,
            'operation' =>  $operation,
            'value' => $value);
    }

    //метод рендера круда
    public function render () {

        //вид круда
        $about = View::factory('/page/page');

        //передача  в вид содержимого таблицы метода select_table
        $about->table_propery = $this->select_table();

        $this->render = true;
        //возвращает  отрендереный вид

        //установка язика
        I18n::lang($this->set_lang);

        //загрузка статики
        $this->static_style();


        $this->template->render = $about;

        return $this->template;
    }


    public function static_style () {

        $media = Route::get('docs/media');

        $styles = array(
            $media->uri(array('file' => 'js/DataTables-1.10.0/media/css/jquery.dataTables.css')) => 'screen',
            $media->uri(array('file' => 'css/bootstrap-theme.min.css')) => 'screen',
            $media->uri(array('file' => 'css/bootstrap.min.css')) => 'screen',
            $media->uri(array('file' => 'css/style.css')) => 'screen',
            $media->uri(array('file' => 'js/DataTables-1.10.0/extensions/TableTools/css/dataTables.tableTools.min.css'))=> 'screen',
            //$media->uri(array('file' => 'js/DataTables-1.10.0/extensions/FixedHeader/css/dataTables.fixedHeader.min.css'))=> 'screen'
        );

        $this->template->styles = $styles;

        // Add scripts
        $scripts = array(
            $media->uri(array('file' => 'js/DataTables-1.10.0/media/js/jquery.js')),
            $media->uri(array('file' => 'js/DataTables-1.10.0/media/js/jquery.dataTables.js')),
            $media->uri(array('file' => 'js/tinymce/jquery.tinymce.min.js')),
            $media->uri(array('file' => 'js/tinymce/tinymce.min.js')),
            $media->uri(array('file' => 'js/bootstrap.min.js')),
            $media->uri(array('file' => 'js/app.js')),
            $media->uri(array('file' => 'js/DataTables-1.10.0/extensions/TableTools/js/dataTables.tableTools.min.js')),
            //$media->uri(array('file' => 'js/DataTables-1.10.0/extensions/FixedHeader/js/dataTables.fixedHeader.min.js')),
            //'/js/DataTables-1.10.0/extensions/TableTools/swf/copy_csv_xls_pdf.swf',
            $media->uri(array('file' => 'css/loader.GIF')) => 'screen'



        );

        $this->template->scripts = $scripts;

        return array('scripts' => $scripts, 'styles' => $styles);

    }


    //метод переименования полей
    public function show_name_column($new_name_column = array()) {
        //если метод вызван
        if ($new_name_column != '') {
            $this->new_name_column = $new_name_column;
        }

        if ($this->name_colums_table != '') {

            foreach ($this->name_colums_table as $key => $row) {

                if (isset($this->new_name_column[$row['COLUMN_NAME']])) {
                    $tmp[$key] = array('COLUMN_NAME' => $this->new_name_column[$row['COLUMN_NAME']]);
                } else {
                    $tmp[$key] = array('COLUMN_NAME' => $row['COLUMN_NAME']);
                }

            }
            return $tmp;
        }

    }



    //метод запроса на выборку данных таблицы
    public function select_table () {
        //возвращает названия полей таблицы

        $this->name_colums_table = Model::factory('All')->name_count($this->table);

        //определяем какие поля будут выводится
        if ($this->column_array != null) {
            // print_r($this->name_colums_table);
            foreach ($this->name_colums_table as $colums_table){
                foreach ($this->column_array as $colum){
                    if ($colums_table['COLUMN_NAME'] == $colum) {
                        $new_colums[] = array('COLUMN_NAME' => $colum);
                    }
                }

            }
            //переопределяем обьект
            $this->name_colums_table = $new_colums;
        }

        //название полей для передачи в модель аякс
        $this->name_colums_ajax = $this->name_colums_table;


        //вывод записей по обьекту set_where
        if ($this->set_where == null) {
            //выборка всех записей таблицы
            $query = Model::factory('All')->select_all_where($this->table);
        } else {
            $query = Model::factory('All')->set_where($this->table,
                $this->set_where['colum'],
                $this->set_where['operation'],
                $this->set_where['value']);
        }


        //назначение имен полям
        if ($this->new_name_column != '') {
            //если вызов состоялся то метод переиницыализируется
            $this->name_colums_table_show = $this->show_name_column($this->new_name_column);
        } else {
            $this->name_colums_table_show = $this->name_colums_table;
        }



        //масив параметров для сериализации
        $this->object_serial = array('table' => $this->table,
            'callback_functions_array' => $this->class_metod
        );

        //имя поля первичного ключа
        $key_primary = Model::factory('All')->information_table($this->table, true);
        $this->key_primary = $key_primary[0]->COLUMN_NAME;


        return array(
            'query' => $query,
            'key_primary' => $this->key_primary,
            //'add_insert' => 'asd',
            'add_action_url_icon' => $this->add_action, //добавление екшенов
            'activ_operation' => array('delete' => $this->remove_delete,
                'edit' => $this->remove_edit,
                'add' => $this->remove_add,
                'search' => $this->disable_search,
                'enable_delete_group' => $this->enable_delete_group), //передача состояния кнопок удаления редактирования добавления
            'name_colums_table' => $this->name_colums_table,
            'name_colums_table_show' => $this->name_colums_table_show, //названия полей таблицы
            'obj_serial' => base64_encode(serialize($this->object_serial)) //передача сериализованого обьекта
        );
    }







    //обработка аякс запроса пагинация сортировка поиск возвращает JSON
    public function ajax_query ($get) {

        $count = Model::factory('All')->count_table($this->table);
         //die($count);

        //если колонка с чекбоксами то добавляем в первый елемент масива первый столбик дублируем 0 и 1 одинаковы
        if ($this->enable_delete_group) {
            $column[0] = $this->name_colums_ajax[0]['COLUMN_NAME'];
        }

        //колонки таблицы для отображения
        foreach ($this->name_colums_ajax as $key => $rows_column) {
            //если добавляется колонка групового удаления делаем перещет номером колонок


            $column[] = $rows_column['COLUMN_NAME'];
        }

        //die(print_r($column));

        //поле для сортировки
        $order_column = $column[$get['order'][0]['column']];

        //принимаем тип сортировки asc или DESC
        $order_by = $get['order'][0]['dir'];
        //строка поиска
        $search_like = $get['search']['value'];

        $obj = base64_encode(serialize($this->object_serial));
        //подготовка из масива в строку полей для передачи в модель

        $query = Model::factory('All')->paginationAjax(
            $get['length'], //сколько записей нужно выбрать
            $get['start'], //с какой записи начать выборку
            $this->table, //имя таблицы
            $order_column, //название поля по которому будет идти сортировка
            $order_by, //тип сортировки ASK DESK
            $search_like, //строка поиска
            $column); //поля таблицы

        //иницыализация языкового класса
        I18n::lang($this->set_lang);


        foreach ($query['query'] as $rows) {
            //редактировать
            if ($this->remove_edit !== true) {

                $data = array(
                    'obj' => $obj,
                    'id' => $rows[$this->key_primary],
                );
                //добавляем форму
                $htm_edit = View::factory('action_page/actionEdit', $data);

            } else {
                $htm_edit = '';
            }

            //новые екшены
            $htm_action = '';
            if ($this->add_action != '') {
                foreach ($this->add_action as $rows_action) {

                    $data = array(
                        'url' => $rows_action['url'],
                        'obj' => $obj,
                        'id' => $rows[$this->key_primary],
                        'name_function' => $rows_action['name_function'],
                        'icon' => $rows_action['icon'],
                        'name_action' => $rows_action['name_action']
                    );

                    $htm_action .= View::factory('action_page/actionNewAction', $data);

                }
            } else {
                $htm_action = '';
            }

            //удалить
            if ($this->remove_delete !== true) {

                $data = array(
                    'obj' => $obj,
                    'id' => $rows[$this->key_primary],
                );
                //добавляем форму
                $htm_delete = View::factory('action_page/actionDel', $data);

            } else {
                $htm_delete = '';
            }

            //удаляем все теги перед выводом в таблицу
            $rows = array_map(array($this, 'no_tag'), $rows);


            $tmp_array = array_values(array_intersect_key($rows,array_flip($column)));
            //кнопки удалить редактировать и новых екшенов

            if ($this->enable_delete_group) {
                //добавляем в начало масива чекбоксы
                array_unshift($tmp_array, '<input type="checkbox" class="w-chec-table" name="id_del_array[]" value="'.$rows[$this->key_primary].'">');
            }

            $tmp_array[] = $htm_edit.$htm_action.$htm_delete;
            $dataQuery[] = $tmp_array;



            //array_unshift($dataQuery, array('<input type="checkbox">'));

        }

        //количество записей после поиска
        if ($search_like != '')  {
            $record_count = $query['count'];
        } else {
            $record_count = $count[0]['COUNT(*)'];
        }

        //если в базе ничего не найдено то присваиваем пустое значение
        if (empty($query['query'])) {
            $record_count = 0;
            $dataQuery = '';
        }

        $re = array('draw' => $get['draw'],
            'recordsTotal' => $count[0]['COUNT(*)'], //всего записей в таблице
            'recordsFiltered' => $record_count, //оставшиееся количество после поиска

            'data' => $dataQuery); //данные для отображения в таблице

        echo json_encode($re);
    }



    private function no_tag ($n) {
        return strip_tags($n);
    }



//    callback

    //перед удалением
    public function callback_befor_delete ($name_function, $render = null) {
        //проверяем запускается ли из екшенов и определяем метод

        if ($render = 'true') {
            $data = call_user_func(array($this->class_metod['class'],
                $name_function));
        }

        if (@$data === false) {
            $this->callback_befor_delete = false;
        } else  {
            $this->callback_befor_delete = array('name_function' => $name_function);
        }

    }

    //после удаления
    public function callback_after_delete ($name_function) {

        $this->callback_after_delete = array('name_function' => $name_function);
    }


    //перед обновлением
    public function callback_befor_edit ($name_function, $render = null) {
        //определяем метод
        if ($render == 'true') {
            $data = call_user_func(array($this->class_metod['class'],
                $name_function));
        }

        if (@$data === false) {
            $this->callback_befor_edit = false;
        } else {
            $this->callback_befor_edit = array('name_function' => $name_function);
        }
    }

    //добавить екшен
    public function add_action ($name_function, $name_action, $url, $icon = null) {

        if ($this->render === true) {
            call_user_func(array($this->class_metod['class'],
                $name_function));
        }

        //Route::set('custom1', array('Controller_Crud', 'NewAction'), 'admin/new(/<bar>)'); // class::static()
        $this->add_action[] = array('name_function' => $name_function,
            'name_action' => $name_action,
            'url' => $url,
            'icon' => $icon);


    }


    public function set_lang ($lang) {
        $this->set_lang = $lang;

    }


    //типы полей по умолчанию
    public function shows_type_input_default ($information_shem) {

        $retuyr = array('varchar' => array('tag' => 'textarea'),
            'text' => 'text',
            'date' => 'date',
            'int' => 'number',
            'bigint' => 'number',
            'tinyint' => 'checkbox',
            'smallint' => 'number',
            'mediumint' => 'number',
            'float' => 'number',
            'double' => 'number',
            'bool'=> 'checkbox',
            'boolean' => 'checkbox',
            'bit' => 'checkbox',
            'char' =>  array('tag' => 'textarea'),
            'tinytext' => 'text',
            'mediumtext' => array('tag' => 'textarea'),
            'longtext' => array('tag' => 'textarea'),
            'tinyblob' => 'text',
            'blob' => 'text',
            'mediumblob' => array('tag' => 'textarea'),
            'longblob' => array('tag' => 'textarea'),
            'datetime' => 'datetime',
            'time' => 'time',
            'year' => 'month',
            'timestamp' => 'datetime');



        foreach($information_shem as $row) {
            //все кроме первичного ключа
            if ($row['COLUMN_KEY'] != 'PRI') {
                if (isset($retuyr[$row['DATA_TYPE']])) {
                    $new[$row['COLUMN_NAME']] = $retuyr[$row['DATA_TYPE']];
                } else {
                    $new[$row['COLUMN_NAME']] = 'text';
                }
            }
        }

        return $new;
    }





    //хук добавить
    public function callback_before_insert ($name_function, $render = null) {


        if ($render == 'true') {
            $data = call_user_func(array($this->class_metod['class'],
                $name_function));
        }

        if (@$data === false) {
            $this->callback_before_insert = false;
        } else {
            $this->callback_before_insert = array('name_function' => $name_function);

        }

    }


    public function callback_after_insert ($name_function) {

        $this->callback_after_insert = array('name_function' => $name_function);
    }

    //отображение полей при добавлении
    public function add_field () {
        $this->add_field = func_get_args();
    }

    //отображение полей при редактировании
    public function edit_fields () {
        $this->edit_fields = func_get_args();
    }

    //удаляет кнопку добавить
    public function remove_add () {
        $this->remove_add = true;
    }

    //типы полей
    public function set_field_type ($field_name, $type_field, $field_value = null) {
        //все вызовы в один масив аргументов
        $this->set_field_type[$field_name] = array(
            'type_field' => $type_field,
            'field_value' => $field_value
        );

    }

    //отключение редактора
    public function disable_editor ($field_name) {
        $this->disable_editor[$field_name] = true;
    }

    //отключение поиска по таблице
    public function disable_search () {
        $this->disable_search = null;
    }

    //включить груповое удаление
    public function enable_delete_group () {
        $this->enable_delete_group = true;
    }

    public function set_load_1N () {

    }






}

//
//$MYSQL_TYPES=Array(
//    // INTEGER
//    // byte - кол-во байт на хранение,
//    // max/min - предельные значения,
//    // umax/umin - беззнаковые предельные значения
//    'int'=>Array('byte'=>4, 'min'=>-2147483648, 'max'=>2147483647, 'umin'=>0, 'umax'=>4294967295),
//    'bigint'=>Array('byte'=>8, 'min'=>-9223372036854775808, 'max'=>9223372036854775807, 'umin'=>0, 'umax'=>18446744073709551615),
//    'tinyint'=>Array('byte'=>1, 'min'=>-128, 'max'=>127, 'umin'=>0, 'umax'=>255),
//    'smallint'=>Array('byte'=>2, 'min'=>-32768, 'max'=>32767, 'umin'=>0, 'umax'=>65535),
//    'mediumint'=>Array('byte'=>3, 'min'=>-8388608, 'max'=>8388607, 'umin'=>0, 'umax'=>16777215),
//
//    // DECIMAL   DECIMAL(M,D) m - кол-во цифр (max 65 цифр), d - сколько из них могут быть после запятой
//    // min_byte/max_byte - краевые значения размера поля в байтах,
//    // byte_formula - формула вычисления размерности
//    // length - максимальное кол-во цифр
//    'decimal'=>Array('min_byte'=>2, 'max_byte'=>67, 'byte_formula'=>'(D==0?(M+1):(M+2)', 'length'=>65),
//    'dec'=>Array('min_byte'=>2, 'max_byte'=>67, 'byte_formula'=>'D==0?(M+1):(M+2)', 'length'=>65),
//    'numeric'=>Array('min_byte'=>2, 'max_byte'=>67, 'byte_formula'=>'D==0?(M+1):(M+2)', 'length'=>65),
//
//    // FLOAT DOUBLE
//    // Внимание! Не храните денежные значения в этих полях!!! Деньги надо хранить - в DECIMAL
//    // у FLOAT ТОЧНОСТЬ ТОЛЬКО 7 ЦИФР!!! (все остальные цифры <смазываются>)
//    // у DOUBLE ТОЧНОСТЬ ТОЛЬКО 15 ЦИФР!!! (все остальные цифры <смазываются>)
//    // byte - кол-во байт для хранения поля (по-умолчанию)
//    // max_byte - максимальное кол-во байт для хранения
//    // negative_min/negative_max - минмаксы для отрицательных чисел
//    // positive_min/positive_max - минмаксы для положительных чисел
//    'float'=>Array('byte'=>4, 'max_byte'=>8, 'negative_min'=>-3.402823466E+38, 'negative_max'=>-1.175494351E-38, 'positive_min'=>1.175494351E-38, 'positive_max'=>3.402823466E+38),
//    'double'=>Array('byte'=>8, 'negative_min'=>-1.7976931348623157E+308, 'negative_max'=>-2.2250738585072014E-308, 'positive_min'=>2.2250738585072014E-308, 'positive_max'=>1.7976931348623157E+308),
//
//    // BOOLEAN
//    // сами все поймете
//    'bool'=>Array('byte'=>1, 'true'=>1, 'false'=>0),
//    'boolean'=>Array('byte'=>1, 'true'=>1, 'false'=>0),
//
//    // VARCHAR
//    // byte - кол-во байт отведенных для хранения (можно задать меньше)
//    // min_byte - минимальное кол-во байт в которых может храниться поле (если длина равна 1)
//// В MYSQL 5.0.3 и выше, VARCHAR может быть до 65,535 символов!!!
//    // length - максимальная длина символов в поле
//    'varchar'=>Array('byte'=>256, 'min_byte'=>2, 'length'=>255),
//    'char'=>Array('byte'=>256, 'min_byte'=>2, 'length'=>255),
//
//    // TEXT
//    // byte - кол-во байт для хранения поля
//    // min_byte - минимальное кол-во байт для хранения одного символа (если длина поля равна 1)
//    // length - максимальное количество символов в поле
//    'tinytext'=>Array('byte'=>256, 'min_byte'=>2, 'length'=>255),
//    'text'=>Array('byte'=>65537, 'min_byte'=>3, 'length'=>65535),
//    'mediumtext'=>Array('byte'=>16777218, 'min_byte'=>4, 'length'=>16777215),
//    'longtext'=>Array('byte'=>4294967300, 'min_byte'=>5, 'length'=>4294967296),
//    'tinyblob'=>Array('byte'=>256, 'min_byte'=>2, 'length'=>255),
//    'blob'=>Array('byte'=>65537, 'min_byte'=>3, 'length'=>65535),
//    'mediumblob'=>Array('byte'=>16777219, 'min_byte'=>4, 'length'=>16777215),
//    'longblob'=>Array('byte'=>4294967300, 'min_byte'=>5, 'length'=>4294967296),
//
//    // DATETIME
//    // byte - кол-во байт для хранения значения поля
//    // mask - стандартная маска ввода значения (есть куча других вариантов, о них читайте в мануале)
//    // min/max - минимальные максимальные значения дат которые сохраняют поля
//    'datetime'=>Array('byte'=>8, 'mask'=>'YYYY-MM-DD HH:MM:SS', 'min'=>'1000-01-01 00:00:00', 'max'=>'9999-12-31 23:59:59'),
//    'date'=>Array('byte'=>3, 'mask'=>'YYYY-MM-DD', 'min'=>'1000-01-01', 'max'=>'9999-12-31'),
//    'time'=>Array('byte'=>3, 'min'=>'-838:59:59', 'max'=>'838:59:59'),
//    'year'=>Array('byte'=>1, 'min'=>1901, 'max'=>2155),
//    'timestamp'=>Array('byte'=>4, 'mask'=>Array(14=>'YYYYMMDDHHMMSS',12=>'YYMMDDHHMMSS',10=>'YYMMDDHHMM',8=>'YYYYMMDD',6=>'YYMMDD',4=>'YYMM',2=>'YY'), 'min'=>1970, 'max'=>2036 ),
//
//    // ENUM
//    // byte - кол-во байт на хранение поля
//    // max_byte - максимальное кол-во байт, которое можно достигнуть при максимальном кол-ве элементов
//    // max_number_of_element - кол-во элементов, которое может содержать поле
//    'enum'=>Array('byte'=>1, 'max_byte'=>2, 'max_number_of_element'=>65535),
//    'set'=>Array('byte'=>1, 'max_byte'=>8, 'max_number_of_element'=>64)
//);* This source code was highlighted with Source Code Highlighter.



?>