<?php
/* Smarty version 3.1.39, created on 2021-11-21 13:47:30
  from '/Users/pondo2/Sites/sara_suite/ui/theme/default/kb_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619a944246a046_67663067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff4db045b05efd8a58fecc8e4a8f3d19f1442530' => 
    array (
      0 => '/Users/pondo2/Sites/sara_suite/ui/theme/default/kb_edit.tpl',
      1 => 1633628023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619a944246a046_67663067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1583381751619a9442462098_29043936', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_697561205619a9442463166_44075143', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_416878835619a9442468bc7_41656639', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_1583381751619a9442462098_29043936 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1583381751619a9442462098_29043936',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }

        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d;
        }

    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_697561205619a9442463166_44075143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_697561205619a9442463166_44075143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row kb-page">

        <div class="col-md-8" id="kb_add_area">
            <div class="panel">

                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Article'];?>
</h2>
                </div>


                <div class="panel-container">
                    <div class="panel-content">


                        <form id="ib_form" class="form-horizontal push-10-t push-10" method="post">

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material floating">

                                        <label for="title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</label>

                                        <input class="form-control" type="text" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
" autofocus>


                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-xs-12">
                                    <textarea class="form-control" id="description" name="description" rows="3"><?php echo $_smarty_tpl->tpl_vars['val']->value['description'];?>
</textarea>
                                </div>
                            </div>





                            <div class="form-group">
                                <div class="col-xs-12">




                                    
                                    <input type="hidden" name="kbid" id="kbid" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">

                                    <button class="btn btn-primary" id="ib_form_submit" type="submit"><i class="fal fa-send push-5-r"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-4">

            <div class="panel">

                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>
</h2>
                </div>

                <div class="panel-container">
                    <div class="panel-content">


                        <form id="ib_add_group" class="form-horizontal push-10-t push-10" method="post">

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-material floating">
                                        <label for="gname"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group Name'];?>
</label>
                                        <input class="form-control" type="text" id="gname" name="gname">

                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary" id="ib_add_group_submit" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                                </div>
                            </div>
                        </form>


                        <div id="div_groups" class="mt-3">

                        </div>



                    </div>
                </div>


            </div>

            <div class="panel panel-default">

                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Latest Articles'];?>
</h2>
                </div>

                <div class="panel-container">
                    <div class="panel-content">


                        <div>

                            <ul class="list-group">

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kbs']->value, 'kb');
$_smarty_tpl->tpl_vars['kb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['kb']->value) {
$_smarty_tpl->tpl_vars['kb']->do_else = false;
?>

                                    <li class="list-group-item"><a href="javascript:void(0)" id="k<?php echo $_smarty_tpl->tpl_vars['kb']->value['id'];?>
" class="kb_view h6"> <?php echo $_smarty_tpl->tpl_vars['kb']->value['title'];?>
 </a></li>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_416878835619a9442468bc7_41656639 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_416878835619a9442468bc7_41656639',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <?php echo '<script'; ?>
>
        function deleteKb(kbid) {
            bootbox.confirm(_L['are_you_sure'], function(result) {
                if(result){
                    window.location.href = base_url + "kb/a/delete/" + kbid;
                }
            });
        }

        function loadKbGroups() {

            var $div_groups = $("#div_groups");

            $div_groups.html();

            $.get( base_url + "kb/a/ajax_groups/"+$("#kbid").val(), function( data ) {

                $div_groups.html(data);

            });

        }

        $(function() {

            loadKbGroups();

            $('#description').redactor(
                {
                    minHeight: 200 // pixels
                }
            );

            var ib_form_submit = $("#ib_form_submit");

            var kb_add_area = $("#kb_add_area");

            ib_form_submit.on('click', function(e) {
                e.preventDefault();
                kb_add_area.block({ message: block_msg });
                var selected_groups = [];

                $('.clx_input_groups').filter(':checked').each(function() {
                    selected_groups.push(this.id);
                });


                $.post( base_url + "kb/a/save/", { title: $("#title").val(), description: $('#description').val(), kbid: $("#kbid").val(),groups: selected_groups })
                    .done(function (data) {
                        if ($.isNumeric(data)) {

                            window.location = base_url + 'kb/a/edit/' + data;

                        }
                        else {
                            kb_add_area.unblock();
                            toastr.error(data);

                        }
                    });

            });


            $(".kb_view").on('click',function (e) {
                e.preventDefault();


                $.fancybox.open({
                    src  :  base_url + "kb/a/a_view/"+this.id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {

                        }
                    },
                });

            });

            $("#ib_add_group_submit").on('click',function (e) {
                e.preventDefault();

                $("#ib_add_group").block();

                $.post(base_url + 'kb/a/group_create/', { gname: $("#gname").val()}, function (data) {

                    $("#ib_add_group").unblock();

                    $("#gname").val('');

                    loadKbGroups();

                })

            })


        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
