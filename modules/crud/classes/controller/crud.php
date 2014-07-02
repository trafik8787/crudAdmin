<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: Vitalik
 * Date: 07.05.14
 * Time: 23:43
 * To change this template use File | Settings | File Templates.
 */

class Controller_Crud extends Controller_Main {

    protected $table;
    protected $id;
    protected $del_arr;
    protected $id_del_array;


    public function  action_delete () {

        $re = unserialize(base64_decode($_POST['obj']));
       //die(print_r($re));
        $retw = call_user_func(array($re['callback_functions_array']['class'],
            $re['callback_functions_array']['function']));
        //die($retw->callback_befor_delete);
        $this->id = Arr::get($_POST, 'id');

        //флаг для групового удаления
        $this->del_arr = Arr::get($_POST, 'del_arr');

        $this->id_del_array =  Arr::get($_POST, 'id_del_array');

        //die(print_r($this->id_del_array));

        //делаем запрос если хоть один хук обявлен
        if ($retw->callback_befor_delete != null or $retw->callback_after_delete != null) {
            //получаем масив строку таблицы которая должна быть удалена
            //переиницыализация хуков
            $retw->callback_befor_delete($retw->callback_befor_delete['name_function'], 'true');
            $retw->callback_after_delete($retw->callback_after_delete['name_function']);

            $query_array_del = Model::factory('All')->select_all_where($retw->table, $this->id);
        }


        //если хук определен возврящаем данные удаления
        if ($retw->callback_befor_delete != null) {
            //переиницыализация статического метода обработчика
            $callbackStatic = call_user_func(array($re['callback_functions_array']['class'],
                $retw->callback_befor_delete['name_function']), $query_array_del[0]);

            //если хук ничего не возвращает то присваивание нового параметра не будет
            if ($callbackStatic != '') {
                $this->id = $callbackStatic;
            }

        }




        if ($retw->callback_befor_delete !== false) {
            //удаляем
            if ($this->del_arr == 1) {
                $query =  Model::factory('All')->group_delete($retw->table, $this->id_del_array);
            } else {
                $query = Model::factory('All')->delete($retw->table, $this->id);
            }
        }

        //проверяем обявлен ли хук
        if ($retw->callback_after_delete != null) {
            call_user_func(array($re['callback_functions_array']['class'],
                $retw->callback_after_delete['name_function']), $query_array_del[0]);
        }


        Request::initial()->redirect(Kohana::$config->load('crudconfig.base_url')); //редирект на главную после операции

    }

    //
    private function uploads_dir_absolut($dir_path)
    {
        //пути
        return array('absolut' => DOCROOT . $dir_path . DIRECTORY_SEPARATOR,
                    'relative' => '/'. $dir_path . DIRECTORY_SEPARATOR
        );

    }



    public function action_edit () {

        if (isset($_POST['edit'])) {
             //die(print_r($_FILES));
            $re = unserialize(base64_decode($_POST['obj']));
        } else {
            $re = unserialize(base64_decode($_GET['obj']));
        }


        $retw = call_user_func(array($re['callback_functions_array']['class'],
            $re['callback_functions_array']['function']));

        //установка язика
        I18n::lang($retw->set_lang);

        //получаем первичный ключ
        $key_primary = Model::factory('All')->information_table($retw->table, true);
        $key_primary = $key_primary[0]->COLUMN_NAME;

        if (isset($_POST['edit'])) {
            $this->id = Arr::get($_POST, 'id');
        } else {
            $this->id = Arr::get($_GET, 'id');
        }



        if (isset($_POST['edit'])) {

            $this->id = Arr::get($_POST, $key_primary);

            $name_count = Model::factory('All')->name_count($retw->table);
            //перебори формирования массива для передачи в модель для обновления записей
            //ищем в масиве $_GET поля которые вернула модель name_count
            foreach ($name_count as $name_count_rows) {

                if (isset($_POST[$name_count_rows['COLUMN_NAME']])) {
                    //если это масив то сериализуем
                    if (is_array($_POST[$name_count_rows['COLUMN_NAME']])) {
                        $update[$name_count_rows['COLUMN_NAME']] = serialize($_POST[$name_count_rows['COLUMN_NAME']]);
                    } else {
                        $update[$name_count_rows['COLUMN_NAME']] = $_POST[$name_count_rows['COLUMN_NAME']];
                    }
                //если поля нету то проверяем масив $_FILES
                } else {

                    //если поле определено как file
                    if (!empty($retw->type_field_upload)) {
                        //die(print_r($retw->type_field_upload));
                        //получаем масив с типом поля и путь к дирикктории хранения файла
                        $dir_path = $retw->type_field_upload[$name_count_rows['COLUMN_NAME']];


                       //проверяем является ли масивом
                       if (is_array($_FILES[$name_count_rows['COLUMN_NAME']]['name'])) {


                           foreach ($_FILES[$name_count_rows['COLUMN_NAME']]['name'] as $key => $rows_name) {
                               //проверка на наличие отправляемого файла

                               if ($rows_name != '') {
                                   //расширение файла
                                   $type_file = '.'. strtolower(pathinfo($rows_name, PATHINFO_EXTENSION));
                                   //генерируем имя файла с префиксом
                                   $name_file =  $dir_path[2].uniqid().$type_file;
                                   //получаем абсолютный путь к директории храния файла
                                   $file_path = $this->uploads_dir_absolut($dir_path[1]);
                                    //сохранение файла
                                   $uploaded = Upload::save(array('tmp_name' => $_FILES[$name_count_rows['COLUMN_NAME']]['tmp_name'][$key]), $name_file, $file_path['absolut']);
                                   //создание масива относительных путей
                                   $file_update[] = $file_path['relative'].$name_file;
                               }
                           }

                           //hide поля с относительными путями к файлам
                           $colum_file = 'editfile-'.$name_count_rows['COLUMN_NAME'];
                           //проверяем не является ли масив с новыми файлами пустым
                           if (!empty($_POST[$colum_file]) and !empty($file_update)) {

                               $file_update = array_merge($file_update, $_POST[$colum_file]);

                           } elseif (empty($file_update) and !empty($_POST[$colum_file])) { //если поле file пустое то присваиваем только скрытые поля

                                $file_update = $_POST[$colum_file];

                           } elseif (empty($file_update) and empty($_POST[$colum_file])) { //если поле file  и скрытые поля пусты
                               $file_update = array();
                           }
                            //сохранение в базе
                           $update[$name_count_rows['COLUMN_NAME']] = serialize($file_update);

                           
                       } else {
                            //если не multiple

                            //расширение файла
                            $type_file = '.'. strtolower(pathinfo($_FILES[$name_count_rows['COLUMN_NAME']]['name'], PATHINFO_EXTENSION));

                            //генерация имени файла $dir_path[2] - префикс
                            $name_file =  $dir_path[2].uniqid().$type_file;
                            //получаем масив путей абсолютный и относительный
                            $file_path = $this->uploads_dir_absolut($dir_path[1]);

                            $uploaded = Upload::save($_FILES[$name_count_rows['COLUMN_NAME']], $name_file, $file_path['absolut']);

                            if ($uploaded)
                            {
                                //относительный путь к файлу запись в базу
                                $update[$name_count_rows['COLUMN_NAME']] = $file_path['relative'].$name_file;
                                // set file type

                            }
                       }


                    }

                }

            }


            //если хук определен
            if ($retw->callback_befor_edit !== null){

                $retw->callback_befor_edit($retw->callback_befor_edit['name_function'], 'true');
                //получаем масив строку таблицы которая должна быть редактирована
                $query_array_edit = Model::factory('All')->select_all_where($retw->table,$this->id);
               // die(print_r($retw->callback_befor_edit['name_function']));
                //если в хуке returm false
                if ($retw->callback_befor_edit !== false) {
                    //переиницыализация статического метода обработчика
                    $callbackStatic = call_user_func_array(array($re['callback_functions_array']['class'],
                        $retw->callback_befor_edit['name_function']), array($update, $query_array_edit[0]));

                    if ($callbackStatic != '') {
                        $update = $callbackStatic;
                    }
                }
            }

            if ($retw->callback_befor_edit !== false) {
                $query = Model::factory('All')->update($retw->table, $update,  $_POST[$key_primary]);
            }

            //die(print_r($update));
            Request::initial()->redirect(Kohana::$config->load('crudconfig.base_url'));
        }

        //вид edit
        $viev_edit = View::factory('page/edit');

        $fields = Model::factory('All')->select_all_where($retw->table,$this->id);
        $fields = $fields[0];

        //какие будут отображатся при редактировании
        if ($retw->edit_fields != null) {
            //вычисляяем пересечение масивов по ключам
            $field =  array_intersect_key($fields, array_flip($retw->edit_fields));
            $field[$key_primary] = $fields[$key_primary];
        } else {
            $field = $fields;
        }

        //типы полей на основе типов mysql
        $information_shem = Model::factory('All')->information_table($retw->table);
        $type_field = $retw->shows_type_input_default($information_shem);

        //полечаем значения для переопределения типов полей
        if (!empty($retw->set_field_type)) {
            $new_type_field = $retw->set_field_type;
        } else {
            $new_type_field = null;
        }

        //отключение редактора
        if (!empty($retw->disable_editor)) {
            $disable_editor = $retw->disable_editor;
        } else {
            $disable_editor = null;
        }


        $viev_edit->edit_property = array('field' => $field,
                                            'disable_editor' => $disable_editor, //отключение редактора
                                            'new_type_field' => $new_type_field, //типы полей для переопределения дефолтных
                                            'type_field' => $type_field, //типы полей по дефолту
                                            'key_primary' => $key_primary, //id первичный ключ
                                            'obj' => $_GET['obj'],
                                            'name_colums_table_show' => $retw->new_name_column); //передаем названия полей новые

        $this->template->render = $viev_edit;


        $crud_style = $retw->static_style();

        $this->template->scripts = $crud_style['scripts'];
        $this->template->styles = $crud_style['styles'];

    }






    //для новых экшенов
    public function action_newAction () {

        $re = unserialize(base64_decode($_POST['obj']));

        $retw = call_user_func(array($re['callback_functions_array']['class'],
            $re['callback_functions_array']['function']));

        $this->id = Arr::get($_POST, 'id');
        $retw->render = true;

        //die(print_r($retw->add_action));

        if ($retw->add_action != null) {

            $query_array_del = Model::factory('All')->select_all_where($retw->table,$this->id);

            call_user_func(array($re['callback_functions_array']['class'],
                Arr::get($_POST, 'func')), $query_array_del[0]);
        }


        Request::initial()->redirect(Kohana::$config->load('crudconfig.base_url'));

    }




    public function action_add () {


        $re = unserialize(base64_decode($_GET['obj']));
        //die(print_r($re));
        $retw = call_user_func(array($re['callback_functions_array']['class'],
            $re['callback_functions_array']['function']));

        //установка язика
        I18n::lang($retw->set_lang);

        //флаг для запуска колбеков только при срабатывании екшена
        $retw->render = true;

        $name_count = Model::factory('All')->name_count($retw->table);


        if (isset($_GET['add'])) {
            //die(print_r($_GET));
            foreach ($name_count as $name_count_rows) {

                if (isset($_GET[$name_count_rows['COLUMN_NAME']])) {
                    //подготовка масиивов для передачи в модель
                    $name_count_insert[] = $name_count_rows['COLUMN_NAME'];
                    $insert[$name_count_rows['COLUMN_NAME']] = $_GET[$name_count_rows['COLUMN_NAME']];
                }

            }


            if ($retw->callback_before_insert != null) {
                //переиницыалзация хука
                $retw->callback_before_insert($retw->callback_before_insert['name_function'], 'true');

                $insert_befor = $insert;
                $insert = call_user_func(array($re['callback_functions_array']['class'],
                    $retw->callback_before_insert['name_function']), $insert);

            }

            if ($retw->callback_before_insert !== false) {
                //если хук ничего не возвращает пишем введенные в форму данные
                if ($insert == ''){
                    $insert = $insert_befor;
                }
                //удаляем ключи из масивов
                $name_count_insert = array_values($name_count_insert);
                $insert_value = array_values($insert);
                $result = Model::factory('All')->insert($retw->table, $name_count_insert, $insert_value);

            }

            if ($retw->callback_after_insert != null) {
                //переиницыализация
                $retw->callback_after_insert($retw->callback_after_insert['name_function'], 'true');

                $query_array_del = Model::factory('All')->select_all_where($retw->table, $result[0]);
                call_user_func(array($re['callback_functions_array']['class'],
                    $retw->callback_after_insert['name_function']), $query_array_del[0]);

            }


            Request::initial()->redirect(Kohana::$config->load('crudconfig.base_url'));
        }


        //получаем первичный ключ
        $key_primary = Model::factory('All')->information_table($retw->table, true);
        $key_primary = $key_primary[0]->COLUMN_NAME;

        //создаем масив полей для вывода в форме добавления
        foreach ($name_count as $name_count_rows) {
            //не пишем поле id в масив
            if ($name_count_rows['COLUMN_NAME'] != $key_primary) {
                $fields[] = $name_count_rows['COLUMN_NAME'];
            }

        }

        //если определены поля которые должны отображатся при добавлении
        if ($retw->add_field != null) {
            //вычисляем схождение массивов
           $fields =  array_intersect($retw->add_field, $fields);
        }


        //типы полей на основе типов mysql
        $information_shem = Model::factory('All')->information_table($retw->table);
        $type_field = $retw->shows_type_input_default($information_shem);

        //полечаем значения для переопределения типов полей
        if (!empty($retw->set_field_type)) {
            $new_type_field = $retw->set_field_type;
        } else {
            $new_type_field = null;
        }


        //отключение редактора
        if (!empty($retw->disable_editor)) {
            $disable_editor = $retw->disable_editor;
        } else {
            $disable_editor = null;
        }

        $viev_add = View::factory('page/add');

        $viev_add->add_property = array('field' => $fields,
            'obj' => $_GET['obj'],
            'disable_editor' => $disable_editor, //отключение редактора
            'new_type_field' => $new_type_field, //типы полей для переопределения дефолтных
            'type_field' => $type_field, //типы полей по дефолту
            'name_colums_table_show' => $retw->new_name_column);

        $this->template->render = $viev_add;

        $crud_style = $retw->static_style();

        $this->template->scripts = $crud_style['scripts'];
        $this->template->styles = $crud_style['styles'];
    }


}