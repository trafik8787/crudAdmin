<?php defined('SYSPATH') or die('No direct script access.'); ?>



<div class="container">
    <div class="row">
        <div class="col-md-8">

            <form class="form-horizontal" role="form" action="" method="get" enctype="multipart/form-data">

                <?foreach ($edit_property['field'] as $name_fied => $value_fild):?>
                    <?if ($name_fied != $edit_property['key_primary']):?>
                        <div class="form-group">
                            <?if (isset($edit_property['name_colums_table_show'][$name_fied])):?>

                                <label for="<?=$edit_property['name_colums_table_show'][$name_fied]?>" class="col-sm-2 control-label"><?=$edit_property['name_colums_table_show'][$name_fied]?></label>

                            <?else:?>

                                <label for="<?=$name_fied?>" class="col-sm-2 control-label"><?=$name_fied?></label>

                            <?endif?>
                            <div class="col-sm-10">

                                <? //переопределение типов полей полей
                                    if (!empty($edit_property['new_type_field'][$name_fied])) {

                                        if ($edit_property['new_type_field'][$name_fied]['type_field']  == 'textarea') {
                                            $edit_property['type_field'][$name_fied] = array('tag' => 'textarea');
                                        } else {
                                            $edit_property['type_field'][$name_fied] = $edit_property['new_type_field'][$name_fied]['type_field'];
                                        }


                                        if (!empty($edit_property['new_type_field'][$name_fied]['field_value'])) {
                                               $value_fild =  $edit_property['new_type_field'][$name_fied]['field_value'];
                                        }

                                    }
                                ?>

                                <?//присваивание типов полей?>

                                <?if (is_array($edit_property['type_field'][$name_fied])):?>

                                    <?if ($edit_property['type_field'][$name_fied]['tag'] == 'textarea'):?>

                                        <<?=$edit_property['type_field'][$name_fied]['tag']?>
                                        class="form-control <?if (empty($edit_property['disable_editor'][$name_fied])) echo 'add-editor' //добавляем клас если полю не отключен редактор?>"
                                        name="<?=$name_fied?>"
                                        id="<?=$name_fied?>">
                                            <?=$value_fild?>
                                        </<?=$edit_property['type_field'][$name_fied]['tag']?>>

                                    <?endif?>

                                <?else:?>

                                    <?php
                                        if ($edit_property['type_field'][$name_fied] != 'checkbox') {
                                            $clas = 'form-control';
                                            $checked = '';
                                        } else {
                                            $clas = '';
                                            if ($value_fild == 1) {
                                                $checked = 'checked';
                                            }
                                        }
                                    ?>



                                    <input
                                           class="<?=$clas?>"
                                           <?=$checked?>
                                           type="<?=$edit_property['type_field'][$name_fied]?>"
                                           name="<?=$name_fied?>"
                                           value="<?=$value_fild?>"
                                           id="<?=$name_fied?>"
                                    />

                                <?endif?>

                            </div>
                        </div>
                    <?else:?>

                        <?//id в скрытом поле?>
                        <input type="hidden"  name="<?=$name_fied?>" value="<?=$value_fild?>">

                    <?endif?>
                <?endforeach?>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="hidden" name="obj" value="<?=$edit_property['obj']?>"/>
                        <button type="submit" name="edit" class="btn btn-success btn-lg"><?=__('LANG_SAVE')?> <span class="glyphicon glyphicon-floppy-disk"></span></button>
                    </div>
                </div>

            </form>


        </div>
    </div>
</div>

