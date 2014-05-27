<?php defined('SYSPATH') or die('No direct script access.'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/modules/crud/js/bootstrap.min.js"></script>
<script src="/modules/crud/js/tinymce/jquery.tinymce.min.js"></script>
<script src="/modules/crud/js/tinymce/tinymce.min.js"></script>
<script src="/modules/crud/js/app.js"></script>
<link rel="stylesheet" href="/modules/crud/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="/modules/crud/css/bootstrap.min.css">

<div class="container">
    <div class="row">
        <div class="col-md-8">

            <form class="form-horizontal" role="form" action="" method="get" enctype="multipart/form-data">

                <?foreach ($add_property['field'] as  $name_fild):?>
                    <div class="form-group">

                        <?if (isset($add_property['name_colums_table_show'][$name_fild])):?>
                                <label for="<?=$name_fild?>" class="col-sm-2 control-label"><?=$add_property['name_colums_table_show'][$name_fild]?></label>
                            <?else:?>
                                <label for="<?=$name_fild?>" class="col-sm-2 control-label"><?=$name_fild?></label>
                        <?endif?>

                        <div class="col-sm-10">

                            <? //переопределение типов полей полей
                                if (!empty($add_property['new_type_field'][$name_fied])) {

                                    if ($add_property['new_type_field'][$name_fied]['type_field']  == 'textarea') {
                                        $add_property['type_field'][$name_fied] = array('tag' => 'textarea');
                                    } else {
                                        $add_property['type_field'][$name_fied] = $add_property['new_type_field'][$name_fied]['type_field'];
                                    }


                                    if (!empty($add_property['new_type_field'][$name_fied]['field_value'])) {
                                        $value_fild =  $add_property['new_type_field'][$name_fied]['field_value'];
                                    }

                                }
                            ?>

                            <?//присваивание типов полей?>
                            <?if (is_array($add_property['type_field'][$name_fied])):?>

                                <?if ($add_property['type_field'][$name_fied]['tag'] == 'textarea'):?>

                                    <<?=$add_property['type_field'][$name_fied]['tag']?>
                                    class="form-control <?if (empty($add_property['disable_editor'][$name_fied])) echo 'add-editor' //добавляем клас если полю не отключен редактор?>"
                                    name="<?=$name_fied?>"
                                    id="<?=$name_fied?>"/>

                                    </<?=$add_property['type_field'][$name_fied]['tag']?>>

                                    <?endif?>

                                <?else:?>

                            <?php
                            if ($add_property['type_field'][$name_fied] != 'checkbox') {
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
                                    type="<?=$add_property['type_field'][$name_fied]?>"
                                    name="<?=$name_fied?>"
                                    value=""
                                    id="<?=$name_fied?>"
                                    />

                            <?endif?>





<!--                            <input type="text" class="form-control" id="--><?//=$name_fild?><!--" name="--><?//=$name_fild?><!--" value=""/>-->
                        </div>

                    </div>
                <?endforeach?>


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="hidden" name="obj" value="<?=$add_property['obj']?>"/>
                        <button type="submit" name="add" class="btn btn-default btn-lg"><?=__('LANG_SAVE')?> <span class="glyphicon glyphicon-floppy-disk"></span></button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

