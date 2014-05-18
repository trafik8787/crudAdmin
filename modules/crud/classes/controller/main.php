<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: Vitalik
 * Date: 08.05.14
 * Time: 0:55
 * To change this template use File | Settings | File Templates.
 */
abstract class Controller_Main extends Controller_Template {

    public $template = 'main_template';



    public function before () {

        parent::before();
        View::set_global('title', 'Мой сайт');
        View::set_global('description', 'Самый лучший сайт');
        $this->template->content = '';
        $this->template->styles = '';
        $this->template->scripts = '';


    }


}