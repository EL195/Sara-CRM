<?php
/* Smarty version 3.1.39, created on 2021-08-29 07:01:09
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612b68f5624948_79477329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd80c08d04ba8a1d13dc9e70b38919e697f032ce6' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/users.tpl',
      1 => 1623941505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612b68f5624948_79477329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1156196141612b68f55d98b7_62226734', "head");
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38726224612b68f55de534_84040258', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1951565709612b68f5621636_91380923', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_1156196141612b68f55d98b7_62226734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1156196141612b68f55d98b7_62226734',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />
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
class Block_38726224612b68f55de534_84040258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_38726224612b68f55de534_84040258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage_Users'];?>
</h2>

                    <div class="panel-toolbar">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-add" class="btn btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_New_User'];?>
</a>

                    </div>

                </div>
                <div class="panel-container">
                    <div class="panel-content">

                        <div class="table-responsive">
                            <table class="table table-striped" id="clx_datatable">
                                <thead style="background: #f0f2ff">
                                <tr>
                                    <th style="width: 60px;background: #f0f2ff"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Avatar'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Details'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>
                                </thead>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                    <tr>
                                        <td><?php if ($_smarty_tpl->tpl_vars['ds']->value['img'] == 'gravatar') {?>
                                                <img src="http://www.gravatar.com/avatar/<?php echo md5(($_smarty_tpl->tpl_vars['ds']->value['username']));?>
?s=60" class="img-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['img'] == '') {?>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" style="max-height: 60px;" alt="">
                                            <?php } else { ?>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ds']->value['img'];?>
" class="img-circle" style="max-height: 60px;" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['fullname'];?>
">
                                            <?php }?></td>
                                        <td class="h6">
                                            <?php echo $_smarty_tpl->tpl_vars['ds']->value['fullname'];?>

                                            <br>  <?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>

                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['phonenumber'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['phonenumber'];?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['address_line_1'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['address_line_1'];?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['address_line_2'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['address_line_2'];?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['city'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['city'];?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['state'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['state'];?>
 - <?php echo $_smarty_tpl->tpl_vars['ds']->value['zip'];?>

                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['country'] != '') {?>
                                                <br> <?php echo $_smarty_tpl->tpl_vars['ds']->value['country'];?>

                                            <?php }?>
                                        </td>

                                        <td class="h6 text-info">
                                            <?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['user_type']);?>


                                            <?php if ((isset($_smarty_tpl->tpl_vars['relations']->value[$_smarty_tpl->tpl_vars['ds']->value['id']]))) {?>
                                                <hr>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['relations']->value[$_smarty_tpl->tpl_vars['ds']->value['id']], 'relation');
$_smarty_tpl->tpl_vars['relation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['relation']->value) {
$_smarty_tpl->tpl_vars['relation']->do_else = false;
?>

                                                    <?php if ((isset($_smarty_tpl->tpl_vars['departments']->value[$_smarty_tpl->tpl_vars['relation']->value]))) {?>
                                                        <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['departments']->value[$_smarty_tpl->tpl_vars['relation']->value]->dname;?>
</span>
                                                    <?php }?>

                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>


                                        </td>
                                        <td>
                                            <div class="btn-group float-right">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-primary btn-sm"><i class="fal fa-pencil"></i> </a>
                                                <?php if (($_smarty_tpl->tpl_vars['_user']->value['username']) != ($_smarty_tpl->tpl_vars['ds']->value['username'])) {?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger btn-sm cdelete"><i class="fal fa-trash-alt"></i> </a>
                                                <?php }?>

                                            </div>

                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </table>
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
class Block_1951565709612b68f5621636_91380923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1951565709612b68f5621636_91380923',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php echo '<script'; ?>
>
        $(function () {
            $('#clx_datatable').dataTable({
                responsive: true,
                "language": {
                    "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No items to display'];?>
",
                    "info":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                    "infoEmpty":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing 0 to 0 of 0 entries'];?>
",
                    buttons: {
                        pageLength: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Show all'];?>
'
                    },
                    searchPlaceholder: "<?php echo __('Search');?>
"
                },
            });
        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
