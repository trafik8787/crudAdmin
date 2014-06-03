<?php defined('SYSPATH') or die('No direct script access.'); ?>




<script>


    $(document).ready( function () {


        $('#table-crud').DataTable({
            "pagingType": "full_numbers"
            //"paging":   false
//            "processing": true,
//            "serverSide": true,
//            "ajax": "/admin"


        });

        $('.w-ter').click(function(){
            $.ajax({ // описываем наш запрос
                type: "GET", // будем передавать данные через POST
                dataType: "JSON", // указываем, что нам вернется JSON
                url: "ajax/testAjax", // запрос отправляем на контроллер Ajax метод addarticle
                data: "obj=sdfsdfsd&text=sdfsdfsdf", // передаем данные из формы
                success: function(response) { // когда получаем ответ
                    alert(response);
                    console.log(response);
                    //$('.w-ter').text(response.test);
                }
            });
            return false;
        });

//        $('#table-crud').on( 'page.dt',   function (qwe) {
//            console.log($('select[name="table-crud_length"]').val());
//        }).dataTable();


//        $('#example').dataTable( {
//            "processing": true,
//            "serverSide": true,
//            "ajax": "/admin"
//        } );

    } );

</script>


<!--<table id="example" class="display" cellspacing="0" width="100%">-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th>First name</th>-->
<!--        <th>Last name</th>-->
<!---->
<!--    </tr>-->
<!--    </thead>-->
<!---->
<!--    <tfoot>-->
<!--    <tr>-->
<!--        <th>First name</th>-->
<!--        <th>Last name</th>-->
<!---->
<!--    </tr>-->
<!--    </tfoot>-->
<!--</table>-->

<a class="w-ter" href="#">ter</a>


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
                                            <input type="hidden" name="id" value="<?=$rows_query[$table_propery['key_primary']]?>"/>
                                            <button type="submit" class="edit"><span class="glyphicon glyphicon-edit"></span> <?=__('LANG_EDIT')?></button>

                                        </form>
                                    <?endif?>
                                </li>



                                <?if($table_propery['add_action_url_icon'] != ''):?>

                                    <?foreach ($table_propery['add_action_url_icon'] as $rows_action):?>
                                        <li>
                                            <form action="/<?=Kohana::$config->load('crudconfig.base_url')?>/new/<?=$rows_action['url']?>" method="post">
                                                <input type="hidden" name="obj" value="<?=$table_propery['obj_serial']?>"/>
                                                <input type="hidden" name="func" value="<?=$rows_action['name_function']?>">
                                                <input type="hidden" name="id" value="<?=$rows_query[$table_propery['key_primary']]?>"/>
                                                <button type="submit" class="new-action"><span class="<?=$rows_action['icon']?>"></span> <?=$rows_action['name_action']?></button>

                                            </form>
                                        </li>
                                    <?endforeach?>
                                <?endif?>




                                <li class="divider"></li>

                                <li>

                                    <? if($table_propery['activ_operation']['delete'] != true):?>
                                        <form id="form-delete" action="/<?=Kohana::$config->load('crudconfig.base_url')?>/delete" method="post">

                                            <input type="hidden" name="id" value="<?=$rows_query[$table_propery['key_primary']]?>"/>
                                            <input type="hidden" name="obj" value="<?=$table_propery['obj_serial']?>"/>
                                            <button type="submit" class="delete"><span class="glyphicon glyphicon-remove-circle"></span> <?=__('LANG_DELETE')?></button>

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
