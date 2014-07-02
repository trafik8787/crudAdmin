<?php defined('SYSPATH') or die('No direct script access.'); ?>

<?//print_r(unserialize($value_fild))?>
<?
    if (!empty($value_fild)) {

        try {

            $value_fild = unserialize($value_fild); ?>

            <?if (!empty($value_fild)):?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>File</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?$exemple_id = uniqid()?>
                    <? foreach ($value_fild as $row): ?>

                         <tr>
                           <td>
                               <a class="example-image-link" href="<?=$row?>" data-lightbox="example-<?=$exemple_id?>" data-title="Optional caption."><img width="70" src="<?=$row?>" alt=""></a>
                               <input type="hidden" name="editfile-<?=$name_fied?>[]" value="<?=$row?>">
                           </td>

                           <td><a class="w-delete" href="#">del</a></td>
                        </tr>
                    <?endforeach?>
                    </tbody>
                </table>
            <?endif?>

       <? } catch (Exception $e) { ?>

            <img width="200" src="<?=$value_fild?>" alt="">

       <? } ?>

    <?}?>

<?if (!empty($multiple)):?>

    <div class="w-input-form">
        <div class="entry input-group">
            <input type="file"  name="<?=$name_fied?>[]"/>
            <span class="input-group-btn">
                <button class="btn btn-success btn-add" type="button">
                    <span class="glyphicon glyphicon-plus" style="padding: 3px"></span>
                </button>
            </span>
        </div>
    </div>

<?else:?>

    <div class="w-input-form">
        <div class="entry input-group">
            <input type="file"  name="<?=$name_fied?>"/>
        </div>
    </div>

<?endif?>

