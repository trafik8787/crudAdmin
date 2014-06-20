<?php defined('SYSPATH') or die('No direct script access.'); ?>

<div class="w-buton-form">
    <form action="/<?=Kohana::$config->load('crudconfig.base_url')?>/delete" method="post">
        <input type="hidden" name="id" value="<?=$id?>"/>
        <input type="hidden" name="obj" value="<?=$obj?>"/>
        <button type="submit"  class="delete del-fal btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove-circle"></span> <?=__('LANG_DELETE')?></button>
    </form>
</div>