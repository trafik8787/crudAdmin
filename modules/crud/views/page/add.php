<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?print_r($add_property)?>
<form action="" method="get" enctype="multipart/form-data">
    <table border="1">
        <?foreach ($add_property['field'] as  $name_fild):?>
        <tr>
            <td><?=$name_fild?></td>
            <td><input type="text" name="<?=$name_fild?>" value=""/></td>
        </tr>
        <?endforeach?>
        <tr>
            <input type="hidden" name="obj" value="<?=$add_property['obj']?>"/>
            <td colspan="2"><button name="add" type="submit">Сохранить</button></td>
        </tr>
    </table>
</form>