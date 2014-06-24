<?php defined('SYSPATH') or die('No direct script access.'); ?>

<script>
$(document).on('click', '.w-cheked-status', function() {
    if ($(this).prop('checked') == true){
        $('.w-hide-status').val(1);
    } else {
        $('.w-hide-status').val(0);
    }
});
</script>
<?print_r($attr)?>
<div class="checkbox">

    <?if(is_array($value_fild)):?>
        <?
            if(!empty($origin_value_fild)) {

                try {

                    $arr_value = unserialize($origin_value_fild);

                } catch (Exception $e) {
                    $arr_value = $origin_value_fild;
                }

            }


        ?>

        <?if ($type_field == 'checkbox') :?>

            <?foreach ($value_fild as $val => $row):?>

                <label><input <?=$attr?> type="checkbox" name="<?=$name_fied.'['.$val.']'?>" <?if (isset($arr_value[$val])):?> checked <?endif?> value="<?=$val?>"/> <?=$row?></label><br/>

            <?endforeach?>

        <?elseif ($type_field == 'radio'):?>

            <?foreach ($value_fild as $val => $row):?>

                <label><input <?=$attr?> type="radio" name="<?=$name_fied?>" <?if ($arr_value == $val):?> checked <?endif?> value="<?=$val?>"/> <?=$row?></label><br/>

            <?endforeach?>

        <?endif?>


    <?else:?>

        <?if ($value_fild != 0):?>
            <input <?=$attr?> class="w-cheked-status" type="checkbox" checked value=""/>
        <?else:?>
            <input <?=$attr?> class="w-cheked-status" type="checkbox" value=""/>
        <?endif?>

        <input class="w-hide-status" name="<?=$name_fied?>" type="hidden" value=""/>

    <?endif?>
</div>
