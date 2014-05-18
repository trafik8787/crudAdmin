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

    //хранит массив вызова обьекта Cruds
    public  $class_metod = null;
    public $column_array = null; //определение вызова метода определения полей таблицы
    private $remove_delete = null; //уброать кнопку удалить
    private $remove_edit = null; //уброать кнопку редактировать
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
            $query = Model::factory('All')->set_where($this->table, $this->set_where['colum'],
                $this->set_where['operation'], $this->set_where['value']);
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

        return array(
            'query' => $query,
            'add_insert' => 'asd',
            'add_action_url_icon' => $this->add_action, //добавление екшенов
            'activ_operation' => array('delete' => $this->remove_delete, 'edit' => $this->remove_edit), //передача состояния кнопок удаления редактирования добавления
            'name_colums_table' => $this->name_colums_table,
            'name_colums_table_show' => $name_colums_table_show, //названия полей таблицы
            'obj_serial' => base64_encode(serialize($object_serial)) //передача сериализованого обьекта
        );
    }















//    callback

    //перед удалением
    public function callback_befor_delete ($name_function) {
        //проверяем запускается ли из екшенов и определяем метод
        if ($this->render === true) {
            $data = call_user_func(array($this->class_metod['class'],
                $name_function));
        }

        if (@$data === false) {
            $this->callback_befor_delete = false;
        } else  {
            $this->callback_befor_delete = array('name_function' => $name_function);
        }

    }

    public function callback_after_delete ($name_function) {
        //определяем метод не принимаем от функции никаких значений ибо нефиг
        if ($this->render === true) {
            call_user_func(array($this->class_metod['class'],
                $name_function));
        }
        $this->callback_after_delete = array('name_function' => $name_function);
    }

    //перед обновлением
    public function callback_befor_edit ($name_function) {
        //определяем метод
        if ($this->render === true) {
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

    //хук добавить
    public function callback_before_insert ($name_function) {

        if ($this->render === true) {
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

        if ($this->render === true) {
            call_user_func(array($this->class_metod['class'],
                $name_function));
        }
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



}












class Registry
{
    /**
     * Статическое хранилище для данных
     */
    protected static $store = array();

    /**
     * Защита от создания экземпляров статического класса
     */
    protected function __construct() {}
    protected function __clone() {}

    /**
     * Проверяет существуют ли данные по ключу
     *
     * @param string $name
     * @return bool
     */
    public static function exists($name)
    {
        return isset(self::$store[$name]);
    }

    /**
     * Возвращает данные по ключу или null, если не данных нет
     *
     * @param string $name
     * @return unknown
     */
    public static function get($name)
    {
        return (isset(self::$store[$name])) ? self::$store[$name] : null;
    }

    /**
     * Сохраняет данные по ключу в статическом хранилище
     *
     * @param string $name
     * @param unknown $obj
     * @return unknown
     */
    public static function set($name, $obj)
    {
        self::$store[$name] = $obj;
        $GLOBALS['foo'] = self::$store[$name];
        return self::$store[$name];

    }

}






?>