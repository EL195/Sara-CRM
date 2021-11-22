<?php
/* Smarty version 3.1.39, created on 2021-06-25 08:09:04
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/tickets_departments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d5c760e66ad3_88658001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c7b0d23712378c3b6e86c9413f492a2118cfde3' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/tickets_departments.tpl',
      1 => 1596718216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d5c760e66ad3_88658001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127945546660d5c760e59fa5_83775929', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55750494660d5c760e5afa7_25771433', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41149920260d5c760e658a1_52213911', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_127945546660d5c760e59fa5_83775929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_127945546660d5c760e59fa5_83775929',
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
        .text-info{
            color: #6772E5!important;
        }
        .text-success{
            color: #2CCE89!important;}

        .text-danger{
            color: #F6365B!important;
        }
        .text-warning{
            color: #FB6340!important;
        }
        .text-primary{
            color: #10CDEF!important;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_55750494660d5c760e5afa7_25771433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_55750494660d5c760e5afa7_25771433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Support Ticket Departments'];?>
</h2>

                    <div class="panel-toolbar">
                        <div class="btn-group">
                            <a data-toggle="modal" href="#modal_add_item" class="btn btn-success mb-md"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Department'];?>
</a>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/departments_reorder/" class="btn btn-primary mb-md"><i class="fal fa-arrows"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Reorder'];?>
</a>
                        </div>
                    </div>

                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <table class="table table-striped sys_table">
                            <thead style="background: #f0f2ff">
                            <tr>

                                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Department Name'];?>
</th>

                                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</th>
                                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                                <th class="text-right h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                                <tr>

                                    <td class="h6"><?php echo $_smarty_tpl->tpl_vars['d']->value['dname'];?>
</td>

                                    <td class="h6 text-info"><?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
</td>

                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['d']->value['hidden'] == 'Yes') {?>
                                            <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Inactive'];?>
</span>
                                        <?php } else { ?>
                                            <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Active'];?>
</span>
                                        <?php }?>

                                    </td>

                                    <td class="text-right">

                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info btn-sm item_edit" id="e<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                                            <a href="#" class="btn btn-danger btn-sm cdelete" onclick="confirmThenGoToUrl(event,'tickets/admin/delete_department/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
')"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                                        </div>

                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </tbody>
                        </table>

                    </div>
                </div>


            </div>



        </div>



    </div>


    <div class="modal fade" id="modal_add_item" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Department'];?>
</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="ib_modal_form">


                        <div class="form-group">
                            <label for="department_name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                            <input type="text" name="department_name" class="form-control" id="department_name">
                        </div>



                        <div class="form-group">
                            <label for="email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="host"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Host'];?>
</label>
                            <input type="text" class="form-control" id="host" name="host">
                        </div>

                        <div class="form-group">
                            <label for="password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="form-group">
                            <label for="port">IMAP Port</label>
                            <input type="text" class="form-control" id="port" name="port">
                        </div>



                        <div class="form-group">
                            <label for="encryption">Encryption</label>
                            <label class="radio-inline">
                                <input type="radio" name="encryption" value="tls"> TLS
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="encryption" value="ssl"> SSL
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="encryption" value=""> No Encryption
                            </label>
                        </div>



                        <hr>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="hidden" name="hidden" value="1"> Hide from client?
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="delete_after_import" name="delete_after_import" value="1"> Delete mail after import?
                                </label>
                            </div>
                        </div>



                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
                    <button type="button" id="btn_modal_action" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                </div>
            </div>
        </div>
    </div>




<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_41149920260d5c760e658a1_52213911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_41149920260d5c760e658a1_52213911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo '<script'; ?>
>
    $(function() {

        var _url = base_url;

        $btn_modal_action = $("#btn_modal_action");

        $modal_add_item = $("#modal_add_item");

        $btn_modal_action.on('click', function(e) {
            e.preventDefault();
            $modal_add_item.block({ message: block_msg });
            $.post( _url + "tickets/admin/departments_post/", $("#ib_modal_form").serialize())
                .done(function( data ) {

                    if ($.isNumeric(data)) {

                        location.reload();

                    }

                    else {
                        $modal_add_item.unblock();
                        toastr.error(data);
                    }

                });

        });










        var $modal = $('#cloudonex_body');

        $('.item_edit').on('click', function(e){
            e.preventDefault();
            var id = this.id;
            $.fancybox.open({
                src  : base_url + 'tickets/admin/edit_department/'+ id + '/',
                type : 'ajax',
                opts : {
                    afterShow : function( instance, current ) {
                        $('#edit_content').redactor();
                    },
                    touch: false,
                    autoFocus: false,
                }
            });

        });




        $modal.on('click', '.test_imap', function(e){
            e.preventDefault();
            $.post( base_url + "tickets/admin/imap_test/", $("#edit_form").serialize())
                .done(function( data ) {

                    if ($.isNumeric(data)) {
                        $.fancybox.close()
                        toastr.success("Connected Successfully");

                    }

                    else {
                        $.fancybox.close()
                        toastr.error(data);
                    }

                });


        });


        $modal.on('click', '.edit_submit', function(e){
            e.preventDefault();

            $.post( _url + "tickets/admin/departments_edit/", $("#edit_form").serialize())
                .done(function( data ) {

                    if ($.isNumeric(data)) {

                        location.reload();

                    }

                    else {
                        $.fancybox.close();
                        toastr.error(data);
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
