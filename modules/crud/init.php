<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: Vitalik
 * Date: 07.05.14
 * Time: 23:13
 * To change this template use File | Settings | File Templates.
 */
Route::set('test', Kohana::$config->load('crudconfig.base_url'))
    ->defaults(array(
    'controller' => 'test',
    'action'     => 'index',
));

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

Route::set('NewAction', Kohana::$config->load('crudconfig.base_url').'/new(/<urlnew>(/<id>))')
    ->defaults(array(
    'controller' => 'crud',
    'action'     => 'newAction',
));

