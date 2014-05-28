<?php defined('SYSPATH') or die('No direct script access.'); ?>



<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="/modules/crud/js/DataTables-1.10.0/media/css/jquery.dataTables.css">
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="/modules/crud/js/DataTables-1.10.0/media/js/jquery.js"></script>
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="/modules/crud/js/DataTables-1.10.0/media/js/jquery.dataTables.js"></script>
<script src="/modules/crud/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/modules/crud/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="/modules/crud/css/bootstrap.min.css">
<link rel="stylesheet" href="/modules/crud/css/style.css">

<script>


    $(document).ready( function () {
        $('#table-crud').DataTable({

//            "columnDefs": [ {
//                "targets": -1,
//                "data": null,
//                "defaultContent": "<button>Click!</button><button>Click2!</button>"
//            } ]


        });


        $('.edit').click(function() {
            $(this).parent().submit();
        });

        $('.delete').click(function() {
            $(this).parent().submit();
        });

        $('.new-action').click(function() {
            $(this).parent().submit();
        });


    } );

</script>




<?if ($table_propery['activ_operation']['add'] != true ):?>
    <tr>
        <form action="/<?=Kohana::$config->load('crudconfig.base_url')?>/add" method="get">
            <input type="hidden" name="obj" value="<?=$table_propery['obj_serial']?>"/>
            <button type="submit"><?=__('LAND_ADD')?></button>
        </form>

    </tr>
<?endif?>

<table id="table-crud" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <?foreach ($table_propery['name_colums_table_show'] as $rows_column):?>
                <th>
                    <?=$rows_column['COLUMN_NAME']?>
                </th>
            <?endforeach?>

            <?//если все кнопки отключены отключаем поле операций?>
            <?if ($table_propery['activ_operation']['edit']!= true or $table_propery['add_action_url_icon'] != '' or $table_propery['activ_operation']['delete'] != true):?>
                <th><?=__('LANG_ACTION')?></th>
            <?endif?>
        </tr>
    </thead>

    <tbody>
        <?foreach ($table_propery['query'] as $rows_query):?>
            <tr>

                <?foreach ($table_propery['name_colums_table'] as $rows_column):?>
                    <td>
                        <?=$rows_query[$rows_column['COLUMN_NAME']]?>
                    </td>

                <?endforeach?>

                <?//если все кнопки отключены отключаем поле операций?>
                <?if ($table_propery['activ_operation']['edit']!= true or $table_propery['add_action_url_icon'] != '' or $table_propery['activ_operation']['delete'] != true):?>

                    <td>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <?=__('LANG_ACTION')?> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">

                                <li>
                                    <? if($table_propery['activ_operation']['edit'] != true):?>
                                        <form id="form-edit" action="/<?=Kohana::$config->load('crudconfig.base_url')?>/edit" method="get">
                                            <input type="hidden" name="obj" value="<?=$table_propery['obj_serial']?>"/>
                                            <input type="hidden" name="id" value="<?=Encrypt::instance()->encode($rows_query[$table_propery['key_primary']])?>"/>
                                            <a href="#" class="edit"><span class="glyphicon glyphicon-edit"></span> <?=__('LANG_EDIT')?></a>
                                        </form>
                                    <?endif?>
                                </li>



                                <?if($table_propery['add_action_url_icon'] != ''):?>

                                    <?foreach ($table_propery['add_action_url_icon'] as $rows_action):?>
                                        <li>
                                            <form action="/<?=Kohana::$config->load('crudconfig.base_url')?>/new/<?=$rows_action['url']?>" method="post">
                                                <input type="hidden" name="obj" value="<?=$table_propery['obj_serial']?>"/>
                                                <input type="hidden" name="func" value="<?=$rows_action['name_function']?>">
                                                <input type="hidden" name="id" value="<?=Encrypt::instance()->encode($rows_query[$table_propery['key_primary']])?>"/>
                                                <a href="#" class="new-action"><span class="<?=$rows_action['icon']?>"></span> <?=$rows_action['name_action']?></a>
                                            </form>
                                        </li>
                                    <?endforeach?>
                                <?endif?>




                                <li class="divider"></li>

                                <li>

                                    <? if($table_propery['activ_operation']['delete'] != true):?>
                                        <form id="form-delete" action="/<?=Kohana::$config->load('crudconfig.base_url')?>/delete" method="post">

                                            <input type="hidden" name="id" value="<?=Encrypt::instance()->encode($rows_query[$table_propery['key_primary']])?>"/>
                                            <input type="hidden" name="obj" value="<?=$table_propery['obj_serial']?>"/>
                                            <a href="#" class="delete"><span class="glyphicon glyphicon-remove-circle"></span> <?=__('LANG_DELETE')?></a>
                                        </form>
                                    <?endif?>


                                </li>
                            </ul>
                        </div>

                    </td>

                <?endif?>

            </tr>

        <?endforeach?>

    </tbody>
</table>
