<?php defined('SYSPATH') or die('No direct script access.'); ?>


<form action="" method="get" enctype="multipart/form-data">
    <table border="1">
        <?foreach ($add_property['field'] as  $name_fild):?>
        <tr>
            <?if (isset($add_property['name_colums_table_show'][$name_fild])):?>
                <td><?=$add_property['name_colums_table_show'][$name_fild]?></td>
            <?else:?>
                <td><?=$name_fild?></td>
            <?endif?>
            <td><input type="text" name="<?=$name_fild?>" value=""/></td>
        </tr>
        <?endforeach?>
        <tr>
            <input type="hidden" name="obj" value="<?=$add_property['obj']?>"/>
            <td colspan="2"><button name="add" type="submit">Сохранить</button></td>
        </tr>
    </table>
</form>