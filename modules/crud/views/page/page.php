<?php defined('SYSPATH') or die('No direct script access.'); ?>


<?//print_r($table_propery)?>

<table border="1">
    <tr>
        <?foreach ($table_propery['name_colums_table_show'] as $rows_column):?>
            <td>
                <?=$rows_column['COLUMN_NAME']?>
            </td>
        <?endforeach?>
    </tr>

    <?foreach ($table_propery['query'] as $rows_query):?>
        <tr>

            <?foreach ($table_propery['name_colums_table'] as $rows_column):?>
                <td>
                    <?=$rows_query[$rows_column['COLUMN_NAME']]?>
                </td>

            <?endforeach?>
            <td>
                <? if($table_propery['activ_operation']['delete'] != true):?>
                    <form action="/admin/delete" method="post">

                        <input type="hidden" name="id" value="<?=Encrypt::instance()->encode($rows_query['id'])?>"/>
                        <input type="hidden" name="obj" value="<?=$table_propery['obj_serial']?>"/>
                       <button type="submit">Del</button>
                    </form>
                <?endif?>

                <? if($table_propery['activ_operation']['edit'] != true):?>
                    <form action="/admin/edit" method="get">
                        <input type="hidden" name="obj" value="<?=$table_propery['obj_serial']?>"/>
                        <input type="hidden" name="id" value="<?=Encrypt::instance()->encode($rows_query['id'])?>"/>
                        <button type="submit">Edit</button>
                    </form>
                <?endif?>
                    <!-- новые екшены-->
                <?if($table_propery['add_action_url_icon'] != ''):?>

                    <?foreach ($table_propery['add_action_url_icon'] as $rows_action):?>
                        <form action="/admin/new/<?=$rows_action['url']?>" method="post">
                            <input type="hidden" name="obj" value="<?=$table_propery['obj_serial']?>"/>
                            <input type="hidden" name="func" value="<?=$rows_action['name_function']?>">
                            <input type="hidden" name="id" value="<?=Encrypt::instance()->encode($rows_query['id'])?>"/>
                            <button type="submit"><?=$rows_action['name_action']?></button>
                        </form>
                    <?endforeach?>
                <?endif?>
            </td>

        </tr>

    <?endforeach?>
    <tr>
        <form action="/admin/add" method="get">
            <input type="hidden" name="obj" value="<?=$table_propery['obj_serial']?>"/>
            <button type="submit">Add</button>
        </form>

    </tr>

</table>
