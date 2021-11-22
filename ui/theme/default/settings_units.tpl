{extends file="$layouts_admin"}

{block name="content"}
    <div class="row">



        <div class="col-md-12">



            <div class="panel">
                <div class="panel-hdr">
                    <h2>Units</h2>
                    <div class="panel-toolbar">

                        <a href="#" class="btn btn-success add_item" id="add_unit"><i class="fal fa-plus"></i> {$_L['Create New']}</a>


                    </div>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="bold">{$_L['Unit']}</th>
                                    <th class="bold">{$_L['Type']}</th>
                                    <th class="text-center bold">{$_L['Manage']}</th>
                                </tr>
                                </thead>
                                <tbody>


                                {if count($units) > 0}

                                    {foreach $units as $unit}
                                        <tr data-id="{$unit['id']}">
                                            <td> <a class="cedit" id="ae{$unit['id']}" href="#">{$unit['name']}</a>

                                            </td>
                                            <td>{$unit['type']}</td>
                                            <td class="text-right">
                                                <a href="{$_url}" id="be{$unit['id']}" class="btn btn-dark cedit" data-toggle="tooltip" title="{$_L['Edit']}"><i class="fal fa-pencil"></i> </a>


                                                <a href="#" class="btn btn-danger cdelete" id="c{$unit['id']}" data-toggle="tooltip" title="{$_L['Delete']}"><i class="fal fa-trash-alt"></i> </a>
                                            </td>

                                        </tr>
                                    {/foreach}

                                    {else}
                                    <tr>
                                        <td colspan="3">
                                            {$_L['No Data Available']}
                                        </td>
                                    </tr>
                                {/if}







                                </tbody>
                            </table>
                        </div>
                    </div>





                </div>


            </div>
        </div>



    </div>


{/block}

{block name="script"}
    <script>
        $(function() {

            function modal_after_show() {
                $('#modal_submit').on('click', function(e){

                    e.preventDefault();

                    $('#modal_form').block();

                    $.post( base_url + "settings/add_unit/", $("#ib_modal_form").serialize())
                        .done(function( data ) {

                            if ($.isNumeric(data)) {

                                location.reload();

                            }

                            else {
                                $('#modal_form').unblock();
                                toastr.error(data);
                            }

                        });

                });
            }

            var _url = $("#_url").val();


            $('.add_item').on('click', function(e){

                e.preventDefault();

                $.fancybox.open({
                    src  :  base_url + 'settings/modal_unit/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            modal_after_show();
                        }
                    }
                });

            });





            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/unit/" + id + '/';
                    }
                });
            });


            $(".cedit").click(function (e) {
                e.preventDefault();
                var id = this.id;

                $.fancybox.open({
                    src  :  _url + 'settings/modal_unit/'+ id + '/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            modal_after_show();
                        }
                    }
                });


            });




        });
    </script>
{/block}
