<?php defined('SYSPATH') or die('No direct script access.'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/modules/crud/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/modules/crud/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="/modules/crud/css/bootstrap.min.css">

<div class="container">
    <div class="row">
        <div class="col-md-8">

            <form class="form-horizontal" role="form" action="" method="get" enctype="multipart/form-data">

                <?foreach ($edit_property['field'] as $name_fied => $value_fild):?>
                    <?if ($name_fied != 'id'):?>
                        <div class="form-group">
                            <?if (isset($edit_property['name_colums_table_show'][$name_fied])):?>

                                <label for="<?=$edit_property['name_colums_table_show'][$name_fied]?>" class="col-sm-2 control-label"><?=$edit_property['name_colums_table_show'][$name_fied]?></label>

                            <?else:?>

                                <label for="<?=$name_fied?>" class="col-sm-2 control-label"><?=$name_fied?></label>

                            <?endif?>
                            <div class="col-sm-10">
                                <input class="form-control"  name="<?=$name_fied?>" value="<?=$value_fild?>" id="<?=$name_fied?>"/>
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
                        <button type="submit" name="edit" class="btn btn-default btn-lg">Сохранить <span class="glyphicon glyphicon-floppy-disk"></span></button>
                    </div>
                </div>

            </form>


        </div>
    </div>
</div>

