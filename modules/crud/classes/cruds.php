<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: Vitalik
 * Date: 08.05.14
 * Time: 14:01
 */

class Cruds {


    public $table; //название таблицы
    private $name_colums_table; //названия полей таблицы
    public $new_name_column; //переименованые названия полей
    public $render = null; //рендер
    public $key_primary; //хранит первичный ключ таблицы

    public $name_function = null;
    //хранит массив вызова обьекта Cruds
    public  $class_metod = null;
    public $column_array = null; //определение вызова метода определения полей таблицы
    private $remove_delete = null; //уброать кнопку удалить
    private $remove_edit = null; //уброать кнопку редактировать
    private $remove_add = null; //уброать кнопку добавить

    private $set_where = null;

    public $add_field = null; //поля которые будут видны при добавлении
    public $edit_fields = null; //поля которые будут видны при редактировании
    public $add_action = null; //добавить екшен



    //хуки
    public $callback_befor_delete = null; //перед удалением
    public $callback_after_delete = null; //после удаления
    public $callback_befor_edit = null; //перед обновлением
    public $callback_before_insert = null; //перед добавлением
    public $callback_after_insert = null; //после добавления


    public function  load_table ($table) {
        $this->table = $table;

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
        return $about;
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
    private function select_table () {
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
            $name_colums_table_show = $this->show_name_column($this->new_name_column);
        } else {
            $name_colums_table_show = $this->name_colums_table;
        }



        //масив параметров для сериализации
        $object_serial = array('table' => $this->table,
            'callback_functions_array' => $this->class_metod
        );

        //имя поля первичного ключа
        $this->key_primary = Model::factory('All')->information_table($this->table, true)[0]->COLUMN_NAME;

        return array(
            'query' => $query,
            'key_primary' => $this->key_primary,
            'add_insert' => 'asd',
            'add_action_url_icon' => $this->add_action, //добавление екшенов
            'activ_operation' => array('delete' => $this->remove_delete,
                                        'edit' => $this->remove_edit,
                                        'add' => $this->remove_add), //передача состояния кнопок удаления редактирования добавления
            'name_colums_table' => $this->name_colums_table,
            'name_colums_table_show' => $name_colums_table_show, //названия полей таблицы
            'obj_serial' => base64_encode(serialize($object_serial)) //передача сериализованого обьекта
        );
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



    //типы полей по умолчанию
    public function shows_type_input_default ($information_shem) {

        $retuyr = array('varchar' => array('tag' => 'textarea'),
                        'text' => 'text',
                        'date' => 'date',
                        'int' => 'number',
                        'bigint' => 'number',
                        'tinyint' => 'number',
                        'smallint' => 'number',
                        'mediumint' => 'number',
                        'float' => 'number',
                        'double' => 'number',
                        'bool'=> 'checkbox',
                        'boolean' => 'checkbox',
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
                        'timestamp' => 'date');


        foreach($information_shem as $row) {
            //все кроме первичного ключа
            if ($row['COLUMN_KEY'] != 'PRI') {
                $new[$row['COLUMN_NAME']] = $retuyr[$row['DATA_TYPE']];
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


    public function set_load_1N () {

    }






}

//
//$MYSQL_TYPES=Array(
//    // INTEGER
//    // byte — кол-во байт на хранение,
//    // max/min — предельные значения,
//    // umax/umin — беззнаковые предельные значения
//    'int'=>Array('byte'=>4, 'min'=>-2147483648, 'max'=>2147483647, 'umin'=>0, 'umax'=>4294967295),
//    'bigint'=>Array('byte'=>8, 'min'=>-9223372036854775808, 'max'=>9223372036854775807, 'umin'=>0, 'umax'=>18446744073709551615),
//    'tinyint'=>Array('byte'=>1, 'min'=>-128, 'max'=>127, 'umin'=>0, 'umax'=>255),
//    'smallint'=>Array('byte'=>2, 'min'=>-32768, 'max'=>32767, 'umin'=>0, 'umax'=>65535),
//    'mediumint'=>Array('byte'=>3, 'min'=>-8388608, 'max'=>8388607, 'umin'=>0, 'umax'=>16777215),
//
//    // DECIMAL   DECIMAL(M,D) m — кол-во цифр (max 65 цифр), d — сколько из них могут быть после запятой
//    // min_byte/max_byte — краевые значения размера поля в байтах,
//    // byte_formula — формула вычисления размерности
//    // length — максимальное кол-во цифр
//    'decimal'=>Array('min_byte'=>2, 'max_byte'=>67, 'byte_formula'=>'(D==0?(M+1):(M+2)', 'length'=>65),
//    'dec'=>Array('min_byte'=>2, 'max_byte'=>67, 'byte_formula'=>'D==0?(M+1):(M+2)', 'length'=>65),
//    'numeric'=>Array('min_byte'=>2, 'max_byte'=>67, 'byte_formula'=>'D==0?(M+1):(M+2)', 'length'=>65),
//
//    // FLOAT DOUBLE
//    // Внимание! Не храните денежные значения в этих полях!!! Деньги надо хранить — в DECIMAL
//    // у FLOAT ТОЧНОСТЬ ТОЛЬКО 7 ЦИФР!!! (все остальные цифры «смазываются»)
//    // у DOUBLE ТОЧНОСТЬ ТОЛЬКО 15 ЦИФР!!! (все остальные цифры «смазываются»)
//    // byte — кол-во байт для хранения поля (по-умолчанию)
//    // max_byte — максимальное кол-во байт для хранения
//    // negative_min/negative_max — минмаксы для отрицательных чисел
//    // positive_min/positive_max — минмаксы для положительных чисел
//    'float'=>Array('byte'=>4, 'max_byte'=>8, 'negative_min'=>-3.402823466E+38, 'negative_max'=>-1.175494351E-38, 'positive_min'=>1.175494351E-38, 'positive_max'=>3.402823466E+38),
//    'double'=>Array('byte'=>8, 'negative_min'=>-1.7976931348623157E+308, 'negative_max'=>-2.2250738585072014E-308, 'positive_min'=>2.2250738585072014E-308, 'positive_max'=>1.7976931348623157E+308),
//
//    // BOOLEAN
//    // сами все поймете
//    'bool'=>Array('byte'=>1, 'true'=>1, 'false'=>0),
//    'boolean'=>Array('byte'=>1, 'true'=>1, 'false'=>0),
//
//    // VARCHAR
//    // byte — кол-во байт отведенных для хранения (можно задать меньше)
//    // min_byte — минимальное кол-во байт в которых может храниться поле (если длина равна 1)
//// В MYSQL 5.0.3 и выше, VARCHAR может быть до 65,535 символов!!!
//    // length — максимальная длина символов в поле
//    'varchar'=>Array('byte'=>256, 'min_byte'=>2, 'length'=>255),
//    'char'=>Array('byte'=>256, 'min_byte'=>2, 'length'=>255),
//
//    // TEXT
//    // byte — кол-во байт для хранения поля
//    // min_byte — минимальное кол-во байт для хранения одного символа (если длина поля равна 1)
//    // length — максимальное количество символов в поле
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
//    // byte — кол-во байт для хранения значения поля
//    // mask — стандартная маска ввода значения (есть куча других вариантов, о них читайте в мануале)
//    // min/max — минимальные максимальные значения дат которые сохраняют поля
//    'datetime'=>Array('byte'=>8, 'mask'=>'YYYY-MM-DD HH:MM:SS', 'min'=>'1000-01-01 00:00:00', 'max'=>'9999-12-31 23:59:59'),
//    'date'=>Array('byte'=>3, 'mask'=>'YYYY-MM-DD', 'min'=>'1000-01-01', 'max'=>'9999-12-31'),
//    'time'=>Array('byte'=>3, 'min'=>'-838:59:59', 'max'=>'838:59:59'),
//    'year'=>Array('byte'=>1, 'min'=>1901, 'max'=>2155),
//    'timestamp'=>Array('byte'=>4, 'mask'=>Array(14=>'YYYYMMDDHHMMSS',12=>'YYMMDDHHMMSS',10=>'YYMMDDHHMM',8=>'YYYYMMDD',6=>'YYMMDD',4=>'YYMM',2=>'YY'), 'min'=>1970, 'max'=>2036 ),
//
//    // ENUM
//    // byte — кол-во байт на хранение поля
//    // max_byte — максимальное кол-во байт, которое можно достигнуть при максимальном кол-ве элементов
//    // max_number_of_element — кол-во элементов, которое может содержать поле
//    'enum'=>Array('byte'=>1, 'max_byte'=>2, 'max_number_of_element'=>65535),
//    'set'=>Array('byte'=>1, 'max_byte'=>8, 'max_number_of_element'=>64)
//);* This source code was highlighted with Source Code Highlighter.



?>