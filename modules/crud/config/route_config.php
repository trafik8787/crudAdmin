<?php defined('SYSPATH') or die('No direct script access');
/**
 * Created by PhpStorm.
 * User: Vitalik
 * Date: 15.01.2015
 * Time: 23:10
 */

Route::set('delete', Kohana::$config->load('crudconfig.base_url').'/delete')
    ->defaults(array(
        'controller' => 'crud',
        'action'     => 'delete',
    ));

Route::set('edit', Kohana::$config->load('crudconfig.base_url').'/edit')
    ->defaults(array(
        'controller' => 'crud',
        'action'     => 'edit',
    ));

Route::set('add', Kohana::$config->load('crudconfig.base_url').'/add')
    ->defaults(array(
        'controller' => 'crud',
        'action'     => 'add',
    ));

Route::set('show_views', Kohana::$config->load('crudconfig.base_url').'/show_views')
    ->defaults(array(
        'controller' => 'crud',
        'action'     => 'show_views',
    ));

Route::set('NewAction', Kohana::$config->load('crudconfig.base_url').'/new(/<urlnew>(/<id>))')
    ->defaults(array(
        'controller' => 'crud',
        'action'     => 'newAction',
    ));

Route::set('newAjax', Kohana::$config->load('crudconfig.base_url').'/ajax/showTableAjax')
    ->defaults(array(
        'controller' => 'ajax',
        'action'     => 'showTableAjax',
    ));

//static
Route::set('docs/media', Kohana::$config->load('crudconfig.base_url').'/media(/<file>)', array('file' => '.+'))
    ->defaults(array(
        'controller' => 'ajax',
        'action'     => 'media',
        'file'       => NULL,
    ));