<?php defined('SYSPATH') or die('No direct script access.'); ?>


<form action="" method="get" enctype="multipart/form-data">
    <table border="1">
        <?foreach ($edit_property['field'] as $name_fied => $value_fild):?>
        <tr>
            <td><?=$name_fied?></td>
            <td><input type="text" name="<?=$name_fied?>" value="<?=$value_fild?>"/></td>
        </tr>
       <?endforeach?>
        <tr>
            <input type="hidden" name="obj" value="<?=$edit_property['obj']?>"/>
            <td colspan="2"><button name="edit" type="submit">Сохранить</button></td>
        </tr>
    </table>
</form>