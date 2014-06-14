<?php defined('SYSPATH') or die('No direct script access.'); ?>


<script>


    $(document).ready( function () {





        var table = $('#example').dataTable({
            "pagingType": "full_numbers",
            "processing": true,
            "serverSide": true,
            "sLengthSelect": "form-control",
            "sDom": '<"top"l<?=$table_propery['activ_operation']['search']?>>rt<"bottom"ip><"clear">',//<"clear">
            /*
             l - Показать  записей
             f - поиск
             rt - таблица
             ip - итформация и  пагинация
            */

            "bAutoWidth": false,

            "oLanguage": {
                "sProcessing": "<img src='<?=Kohana::$config->load('crudconfig.base_url')?>/media/css/loader.GIF'>",
                "sZeroRecords": "<?=__('LANG_NO_RECORD')?>",
                "sInfo": "<?=__('LANG_INFO')?>",
                "sLengthMenu": "<?=__('LANG_MENY')?>",
                "sSearch": "<?=__('LANG_SEARCH')?>",
                "sInfoEmpty": "No entries to show",




                "oPaginate": {
                    "sNext": "<?=__('LANG_NEXT')?>",
                    "sLast": "<?=__('LANG_LAST')?>",
                    "sFirst": "<?=__('LANG_FIRST')?>",
                    "sPrevious": "<?=__('LANG_PREVIONS')?>"

                }
            },



            "aoColumnDefs": [
                {
                    "aTargets": [-1],
                    "bSortable": false,
                    "bSearchable": false
                },
                {
                    "aTargets": [0],
                    "bSortable": false,
                    "bSearchable": false

                }

            ],



            "ajax": {
                "url": "ajax/showTableAjax",
                "data": function ( d ) {
                    d.obj = $('input[name="obj"]').val();

                }
            }

        });


        $('#table-crud').DataTable({
            "pagingType": "full_numbers"

        });

        //удаление group
        $('.w-del-array').click(function(){
            var chek = $('.w-chec-table:checked').serialize();
            var objecr = $('input[name="obj"]').val();
            $.ajax({ // описываем наш запрос
                type: "POST", // будем передавать данные через POST
                dataType: "JSON", // указываем, что нам вернется JSON
                url: "/admin/delete", // запрос отправляем на контроллер Ajax метод addarticle
                data: chek+"&obj="+objecr+"&del_arr=1", // передаем данные из формы
                success: function(response) { // когда получаем ответ
                    //alert(response);
                    //console.log(response);

                    //table.row($(this)).remove().draw(false);
                    //$('.w-ter').text(response.test);
                }
            });

            var inD = new Array();

            $('tr').each(function(i){
                i = i-2;
                if ($(this).hasClass('selected')) {
                    inD.push(i);
                }
            });

            table.fnDeleteRow(inD);
            return false;
        });




        //edit
        $(document).on('click', '.edit', function(){
            $.ajax({ // описываем наш запрос
                type: "GET", // будем передавать данные через POST
                dataType: "HTML", // указываем, что нам вернется JSON
                url: "/admin/edit", // запрос отправляем на контроллер Ajax метод addarticle
                data: "obj="+$(this).data('obj')+"&id="+$(this).data('id'), // передаем данные из формы
                success: function(response) { // когда получаем ответ
                    //alert(response);
                    //console.log(response);
                    $('.conteiner-crud').html(response);
                    //table.row($(this)).remove().draw(false);
                    //$('.w-ter').text(response.test);
                }
            });

            return false;
        });



        //cecbox
        $(document).on('click', '.w-chec-table-all-top', function(){
            $('.w-chec-table').trigger('click');

            state = $(this).prop('checked');
            if(state) {
                $('.w-del-array').prop('disabled', false);
            } else {
                $('.w-del-array').prop('disabled', true);
            }
        });

        $(document).on('click', '.w-chec-table', function(){
            state = $(this).prop('checked');

            $(this).parents('tr').toggleClass('selected');

            if(state) {
                $('.w-del-array').prop('disabled', false);
            } else {
                $('.w-del-array').prop('disabled', true);
            }
        });


//        $('#table-crud').on( 'page.dt',   function (qwe) {
//            console.log($('select[name="table-crud_length"]').val());
//        }).dataTable();


    } );



</script>

<a href="#" class="qwe">qwe</a>
<?//=mb_detect_encoding('בית')?>
<!--add-->
<?if ($table_propery['activ_operation']['add'] != true ):?>

    <div class="w-buton-form">
        <form action="/<?=Kohana::$config->load('crudconfig.base_url')?>/add" method="get">
            <input type="hidden" name="obj" value="<?=$table_propery['obj_serial']?>"/>
            <button type="submit" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus-sign"></span> <?=__('LAND_ADD')?></button>
        </form>
    </div>

<?endif?>

<div class="w-buton-form">
        <input type="hidden" name="obj" value="<?=$table_propery['obj_serial']?>"/>
        <input type="hidden" name="del_arr" value="1">
        <button type="submit" disabled class="delete btn btn-danger btn-sm w-del-array"><span class="glyphicon glyphicon-remove-circle"></span> <?=__('LANG_DELETE')?></button>
</div>

<table id="example" class="display" cellspacing="0" width="100%">
    <thead>

    <tr>
            <th><input type="checkbox" class="w-chec-table-all-top"></th>
        <?foreach ($table_propery['name_colums_table_show'] as $rows_column):?>
            <th>
                <?=$rows_column['COLUMN_NAME']?>
            </th>
        <?endforeach?>

        <?if ($table_propery['activ_operation']['edit']!= true or $table_propery['add_action_url_icon'] != '' or $table_propery['activ_operation']['delete'] != true):?>
            <th></th>
        <?endif?>
    </tr>
    </thead>

    <tfoot>
    <tr>
        <th>#</th>
        <?foreach ($table_propery['name_colums_table_show'] as $rows_column):?>
        <th>
            <?=$rows_column['COLUMN_NAME']?>
        </th>
        <?endforeach?>

        <?if ($table_propery['activ_operation']['edit']!= true or $table_propery['add_action_url_icon'] != '' or $table_propery['activ_operation']['delete'] != true):?>
            <th></th>
        <?endif?>

    </tr>
    </tfoot>
</table>




<?//if ($table_propery['activ_operation']['add'] != true ):?>
<!--    <tr>-->
<!--        <form action="/--><?//=Kohana::$config->load('crudconfig.base_url')?><!--/add" method="get">-->
<!--            <input type="hidden" name="obj" value="--><?//=$table_propery['obj_serial']?><!--"/>-->
<!--            <button type="submit">--><?//=__('LAND_ADD')?><!--</button>-->
<!--        </form>-->
<!---->
<!--    </tr>-->
<?//endif?>
<!---->
<!--<table id="table-crud" class="display" cellspacing="0" width="100%">-->
<!--    <thead>-->
<!--        <tr>-->
<!--            --><?//foreach ($table_propery['name_colums_table_show'] as $rows_column):?>
<!--                <th>-->
<!--                    --><?//=$rows_column['COLUMN_NAME']?>
<!--                </th>-->
<!--            --><?//endforeach?>
<!---->
<!--            --><?////если все кнопки отключены отключаем поле операций?>
<!--            --><?//if ($table_propery['activ_operation']['edit']!= true or $table_propery['add_action_url_icon'] != '' or $table_propery['activ_operation']['delete'] != true):?>
<!--                <th>--><?//=__('LANG_ACTION')?><!--</th>-->
<!--            --><?//endif?>
<!--        </tr>-->
<!--    </thead>-->
<!---->
<!--    <tbody>-->
<!--        --><?//foreach ($table_propery['query'] as $rows_query):?>
<!--            <tr>-->
<!---->
<!--                --><?//foreach ($table_propery['name_colums_table'] as $rows_column):?>
<!--                    <td>-->
<!--                        --><?//=$rows_query[$rows_column['COLUMN_NAME']]?>
<!--                    </td>-->
<!---->
<!--                --><?//endforeach?>
<!---->
<!--                --><?////если все кнопки отключены отключаем поле операций?>
<!--                --><?//if ($table_propery['activ_operation']['edit']!= true or $table_propery['add_action_url_icon'] != '' or $table_propery['activ_operation']['delete'] != true):?>
<!---->
<!--                    <td>-->
<!---->
<!--                        <div class="btn-group">-->
<!--                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">-->
<!--                                --><?//=__('LANG_ACTION')?><!-- <span class="caret"></span>-->
<!--                            </button>-->
<!--                            <ul class="dropdown-menu" role="menu">-->
<!---->
<!--                                <li>-->
<!--                                    --><?// if($table_propery['activ_operation']['edit'] != true):?>
<!--                                        <form id="form-edit" action="/--><?//=Kohana::$config->load('crudconfig.base_url')?><!--/edit" method="get">-->
<!--                                            <input type="hidden" name="obj" value="--><?//=$table_propery['obj_serial']?><!--"/>-->
<!--                                            <input type="hidden" name="id" value="--><?//=$rows_query[$table_propery['key_primary']]?><!--"/>-->
<!--                                            <button type="submit" class="edit"><span class="glyphicon glyphicon-edit"></span> --><?//=__('LANG_EDIT')?><!--</button>-->
<!---->
<!--                                        </form>-->
<!--                                    --><?//endif?>
<!--                                </li>-->
<!---->
<!---->
<!---->
<!--                                --><?//if($table_propery['add_action_url_icon'] != ''):?>
<!---->
<!--                                    --><?//foreach ($table_propery['add_action_url_icon'] as $rows_action):?>
<!--                                        <li>-->
<!--                                            <form action="/--><?//=Kohana::$config->load('crudconfig.base_url')?><!--/new/--><?//=$rows_action['url']?><!--" method="post">-->
<!--                                                <input type="hidden" name="obj" value="--><?//=$table_propery['obj_serial']?><!--"/>-->
<!--                                                <input type="hidden" name="func" value="--><?//=$rows_action['name_function']?><!--">-->
<!--                                                <input type="hidden" name="id" value="--><?//=$rows_query[$table_propery['key_primary']]?><!--"/>-->
<!--                                                <button type="submit" class="new-action"><span class="--><?//=$rows_action['icon']?><!--"></span> --><?//=$rows_action['name_action']?><!--</button>-->
<!---->
<!--                                            </form>-->
<!--                                        </li>-->
<!--                                    --><?//endforeach?>
<!--                                --><?//endif?>
<!---->
<!---->
<!---->
<!---->
<!--                                <li class="divider"></li>-->
<!---->
<!--                                <li>-->
<!---->
<!--                                    --><?// if($table_propery['activ_operation']['delete'] != true):?>
<!--                                        <form id="form-delete" action="/--><?//=Kohana::$config->load('crudconfig.base_url')?><!--/delete" method="post">-->
<!---->
<!--                                            <input type="hidden" name="id" value="--><?//=$rows_query[$table_propery['key_primary']]?><!--"/>-->
<!--                                            <input type="hidden" name="obj" value="--><?//=$table_propery['obj_serial']?><!--"/>-->
<!--                                            <button type="submit" class="delete"><span class="glyphicon glyphicon-remove-circle"></span> --><?//=__('LANG_DELETE')?><!--</button>-->
<!---->
<!--                                        </form>-->
<!--                                    --><?//endif?>
<!---->
<!---->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!---->
<!--                    </td>-->
<!---->
<!---->
<!--                --><?//endif?>
<!---->
<!--            </tr>-->
<!---->
<!--        --><?//endforeach?>
<!---->
<!--    </tbody>-->
<!--</table>-->
