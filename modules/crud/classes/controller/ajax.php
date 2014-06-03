<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: Vitalik
 * Date: 31.05.14
 * Time: 17:18
 */

class Controller_Ajax extends Controller {

    public function action_testAjax () {

        $re = array('draw' => 1,
                    'recordsTotal' => 57,
                    'recordsFiltered' => 57,
                    'data' => array(
                        array('Airi','<div>sdfsdf</div>'),
                        array('Angelica','Angelica')

                    ));

       echo json_encode($re);

    }


    public function action_media () {

        $file = $this->request->param('file');

        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $file = substr($file, 0, -(strlen($ext) + 1));

        //$file = Kohana::find_file('media', $file, $ext);

        $file = Kohana::find_file('media', $file, $ext);


        die(file_get_contents($file));
        //$viev_edit = View::factory('page/style');
       // $viev_edit->style = file_get_contents($file);
        // Check if the browser sent an "if-none-match: <etag>" header, and tell if the file hasn't changed
        $this->response->check_cache(sha1($this->request->uri()).filemtime($file), $this->request);

        // Send the file content as the response
        //echo file_get_contents($file);
        $this->response->body(file_get_contents($file));

        // Set the proper headers to allow caching
        //$this->response->headers('content-type',  File::mime_by_ext($ext));
        //$this->response->headers('last-modified', date('r', filemtime($file)));


    }

}