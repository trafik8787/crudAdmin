<?php defined('SYSPATH') or die('No direct script access.'); ?>



<?if (!empty($multiple)):?>

    <?
        if(!empty($value_fild)) {

            try {
                $arr_value = unserialize($value_fild);
            } catch (Exception $e) {
                $arr_value = $value_fild;
            }

        }
    ?>

<div class="w-input-form">

    <?foreach ($arr_value as $row):?>
        <div class="entry input-group">
            <input class="form-control" type="<?=$type_field?>" name="<?=$name_fied?>[]" value="<?=$row?>">
                <span class="input-group-btn">
                    <button class="btn btn-remove btn-danger" type="button"><span class="glyphicon glyphicon-minus" style="padding: 3px"></span></button>
                </span>
        </div>
    <?endforeach?>

    <div class="entry input-group">
        <input <?=$attr?> class="form-control"
                          type="<?=$type_field?>"
                          name="<?=$name_fied?>[]"
                          value=""/>
            <span class="input-group-btn">
                <button class="btn btn-success btn-add" type="button">
                    <span class="glyphicon glyphicon-plus" style="padding: 3px"></span>
                </button>
            </span>
    </div>
</div>


<?else:?>
<input <?=$attr?> class="form-control"
                  type="<?=$type_field?>"
                  name="<?=$name_fied?>"
                  value="<?if (!empty($value_fild)) echo $value_fild?>"
                  id="<?=$name_fied?>"/>
<?endif?>