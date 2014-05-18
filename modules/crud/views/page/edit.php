<?php defined('SYSPATH') or die('No direct script access.'); ?>


<form action="" method="get" enctype="multipart/form-data">
    <table border="1">
        <?foreach ($edit_property['field'] as $name_fied => $value_fild):?>
            <?if ($name_fied != 'id'):?>
                <tr>
                    <?if (isset($edit_property['name_colums_table_show'][$name_fied])):?>
                        <td><?=$edit_property['name_colums_table_show'][$name_fied]?></td>
                    <?else:?>
                        <td><?=$name_fied?></td>
                    <?endif?>
                    <td><input type="text" name="<?=$name_fied?>" value="<?=$value_fild?>"/></td>
                </tr>
            <?else:?>
                <?//id в скрытом поле?>
                <input type="hidden"  name="<?=$name_fied?>" value="<?=$value_fild?>">
            <?endif?>
       <?endforeach?>
        <tr>
            <input type="hidden" name="obj" value="<?=$edit_property['obj']?>"/>
            <td colspan="2"><button name="edit" type="submit">Сохранить</button></td>
        </tr>
    </table>
</form>