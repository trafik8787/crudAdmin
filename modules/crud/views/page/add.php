<?php defined('SYSPATH') or die('No direct script access.'); ?>



<script>
    $(document).on('click', '#loading-example-btn', function(){

        tinyMCE.triggerSave();

        var btn = $(this);
        btn.button('loading');

        $.ajax({
            type: "GET",
            dataType: "html",
            url: "add",
            data: $('#w-form-add').serialize()
//            success: function(response) {
//
//            }
        }).always(function () {
                btn.button('reset');
        });
    });



</script>

<?//die(print_r($add_property['type_field']))?>

<div class="container">
    <div class="row">
        <div class="col-md-8">

            <form id="w-form-add" class="form-horizontal" role="form" action="" method="get" enctype="multipart/form-data">

                <?foreach ($add_property['field'] as  $name_fild):?>

                    <div class="form-group">

                        <?if (isset($add_property['name_colums_table_show'][$name_fild])):?>
                                <label for="<?=$name_fild?>" class="col-sm-2 control-label"><?=$add_property['name_colums_table_show'][$name_fild]?></label>
                            <?else:?>
                                <label for="<?=$name_fild?>" class="col-sm-2 control-label"><?=$name_fild?></label>
                        <?endif?>

                        <div class="col-sm-10">

                            <? //переопределение типов полей полей
                                if (!empty($add_property['new_type_field'][$name_fild])) {

                                    if ($add_property['new_type_field'][$name_fild]['type_field']  == 'textarea') {
                                        $add_property['type_field'][$name_fild] = array('tag' => 'textarea');
                                    } else {
                                        $add_property['type_field'][$name_fild] = $add_property['new_type_field'][$name_fild]['type_field'];
                                    }


                                    if (!empty($add_property['new_type_field'][$name_fild]['field_value'])) {
                                        $value_fild =  $add_property['new_type_field'][$name_fild]['field_value'];
                                    }

                                }
                            ?>

                            <?//присваивание типов полей?>
                            <?if (is_array($add_property['type_field'][$name_fild])):?>

                                <?if ($add_property['type_field'][$name_fild]['tag'] == 'textarea'):?>

                                    <textarea
                                    class="form-control <?if (empty($add_property['disable_editor'][$name_fild])) echo 'add-editor' //добавляем клас если полю не отключен редактор?>"
                                    name="<?=$name_fild?>"
                                    id="<?=$name_fild?>"></textarea>

                                <?endif?>

                                <?else:?>

                            <?php
                            if ($add_property['type_field'][$name_fild] != 'checkbox') {
                                $clas = 'form-control';
                                $checked = '';
                            } else {
                                $clas = '';

                            }
                            ?>



                            <input
                                    class="<?=$clas?>"
                                    <?=$checked?>
                                    type="<?=$add_property['type_field'][$name_fild]?>"
                                    name="<?=$name_fild?>"
                                    value=""
                                    id="<?=$name_fild?>"
                                    />

                            <?endif?>





<!--                            <input type="text" class="form-control" id="--><?//=$name_fild?><!--" name="--><?//=$name_fild?><!--" value=""/>-->
                        </div>

                    </div>
                <?endforeach?>


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="hidden" name="obj" value="<?=$add_property['obj']?>"/>
                        <input type="hidden"  name="add"/>
                        <button type="submit" class="btn btn-default btn-lg"><?=__('LANG_SAVE')?> <span class="glyphicon glyphicon-floppy-disk"></span></button>
                        <button type="button" id="loading-example-btn" data-loading-text="<?=__('LANG_BUTTON_LOAD_APLY')?>" class="btn btn-primary btn-lg"><?=__('LANG_BUTTON_APLY')?> <span class="glyphicon glyphicon-floppy-saved"></span></button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

