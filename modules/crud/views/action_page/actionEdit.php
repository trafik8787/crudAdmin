<?php defined('SYSPATH') or die('No direct script access.'); ?>

<div class="w-buton-form">
    <form action="/<?=Kohana::$config->load('crudconfig.base_url')?>/edit" method="get">
        <input type="hidden" name="obj" value="<?=$obj?>"/>
        <input type="hidden" name="id" value="<?=$id?>"/>
        <button type="submit" data-obj="<?=$obj?>" data-id="<?=$id?>" class="edit btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> <?=__('LANG_EDIT')?></button>
    </form>
</div>