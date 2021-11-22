<?php
/* Smarty version 3.1.39, created on 2021-08-22 14:40:26
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/crm_groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61229a1a801062_30356634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a94d4ffc76489ec2fd1f8c2d57ef09c19eed4256' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/crm_groups.tpl',
      1 => 1629657624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61229a1a801062_30356634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156166558961229a1a7f2c61_17231151', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56332906661229a1a7f5907_52154480', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2596872361229a1a7ff225_09254326', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_156166558961229a1a7f2c61_17231151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_156166558961229a1a7f2c61_17231151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if (empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
        <style>
            .table-striped tbody tr:nth-of-type(odd) {
                background-color: #F7F9FC;
            }
        </style>
    <?php }?>

<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_56332906661229a1a7f5907_52154480 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_56332906661229a1a7f5907_52154480',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Groups'];?>
</h2>
                    <div class="panel-toolbar">
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-success" id="add_new_group"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Group'];?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reorder/groups/" class="btn btn-sm btn-primary"><i class="fal fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Reorder'];?>
</a>
                        </div>


                    </div>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <div class="thead-light">
                            <table class="table table-striped">
                                <th><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>
</strong></th>
                                <th class="float-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gs']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                                    <tr>
                                        <td><strong><?php echo $_smarty_tpl->tpl_vars['g']->value['gname'];?>
</strong></td>

                                         <td>
                                             <div class="btn-group float-right">
                                                 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/find_by_group/<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
/" class="btn btn-sm btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['List Contacts'];?>
</a>
                                                 <a href="#" class="btn btn-sm btn-warning edit_group" id="e<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['g']->value['gname'];?>
"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>

                                                 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-delete/<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" id="g<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" class="btn btn-sm btn-danger cdelete"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                                             </div>


                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </table>
                        </div>



                    </div>

                    <br>
                    <br>


                </div>
            </div>



        </div>



    </div>

    <input type="hidden" name="_msg_add_new_group" id="_msg_add_new_group" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Group'];?>
">
    <input type="hidden" name="_msg_group_name" id="_msg_group_name" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Group Name'];?>
">
    <input type="hidden" name="_msg_edit" id="_msg_edit" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
">
    <input type="hidden" name="_msg_ok" id="_msg_ok" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['OK'];?>
">
    <input type="hidden" name="_msg_cancel" id="_msg_cancel" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
">


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_2596872361229a1a7ff225_09254326 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2596872361229a1a7ff225_09254326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(document).ready(function () {

            var _url = $("#_url").val();








            var _msg_add_new_group = $("#_msg_add_new_group").val();
            var _msg_group_name = $("#_msg_group_name").val();
            var _msg_edit = $("#_msg_edit").val();
            var _msg_ok = $("#_msg_ok").val();
            var _msg_cancel = $("#_msg_cancel").val();


            var ib_form_bootbox = "<form class=\"form-horizontal push-10\" method=\"post\" onsubmit=\"return false;\">\n    <div class=\"form-group\">\n        <div class=\"col-xs-12\">\n            <div class=\"form-material floating\">\n                <input class=\"form-control\" type=\"text\" id=\"group_name\" name=\"group_name\">\n                <label for=\"envato_api_key\">" + _msg_group_name + "</label>\n                           </div>\n        </div>\n    </div>\n\n</form>";


            var box =   bootbox.dialog({
                    title: _msg_add_new_group,
                    message: ib_form_bootbox,
                    buttons: {
                        success: {
                            label: "Save",
                            className: "btn-primary",
                            callback: function () {
                                // var name = $('#name').val();
                                // var answer = $("input[name='awesomeness']:checked").val();
                                // Example.show("Hello " + name + ". You've chosen <b>" + answer + "</b>");

                                var group_name_val = $('#group_name').val();

                                $.post(  _url + "contacts/add_group/", { group_name: group_name_val })
                                    .done(function( data ) {

                                        if ($.isNumeric(data)) {

                                            location.reload();

                                        }

                                        else {
                                            bootbox.alert(data);
                                        }

                                    });


                            }
                        }
                    },
                    show: false
                }
            );





            $("#add_new_group").click(function(e){

                e.preventDefault();

                box.modal('show');


            });


            box.on("shown.bs.modal", function() {

                var group_name = $('#group_name');
                setTimeout(function(){
                    group_name.focus();
                }, 1000);

            });


            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/crm-group/" + id;
                    }
                });
            });


            $(".edit_group").click(function (e) {
                e.preventDefault();

                var eid = this.id;

                // alert(eid);

                var gname = $( this ).attr( "data-name" );





                bootbox.prompt({
                    title: _msg_edit,
                    value: gname,
                    buttons: {
                        'cancel': {
                            label: _msg_cancel
                        },
                        'confirm': {
                            label: _msg_ok
                        }
                    },
                    callback: function(result) {
                        if (result === null) {

                        } else {
                            // alert(result);
                            $.post(  _url + "contacts/group_edit/", { id: eid, gname: result })
                                .done(function( data ) {
                                    location.reload();
                                });
                        }
                    }
                });

            });




        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
