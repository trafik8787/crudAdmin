<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Base {


    public function action_index() {

        $id = $this->request->param('id');
        $content = View::factory('/pages/about');

        $content->id = $id;
        $this->template->content = $content;
    }


    public function action_about () {




    }
}