<?php defined('SYSPATH') or die('No direct script access.'); ?>

<select <?=$attr?> class="form-control" name="<?=$name_fied?>" id="">
    <?//проверяем вляется ли переменная масивом?>
    <?if(is_array($value_fild)):?>
        <?foreach ($value_fild as $val => $row):?>
            <option value="<?=$val?>" <?if ($origin_value_fild == $val):?> selected <?endif?>><?=$row?></option>
        <?endforeach?>
    <?else:?>
        <option value="<?=$value_fild?>"><?=$value_fild?></option>
    <?endif?>
</select>