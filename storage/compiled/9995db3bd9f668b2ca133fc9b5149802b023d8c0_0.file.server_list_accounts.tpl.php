<?php
/* Smarty version 3.1.39, created on 2021-03-12 08:03:39
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/server_list_accounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604b66ab7b2b78_03678531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9995db3bd9f668b2ca133fc9b5149802b023d8c0' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/server_list_accounts.tpl',
      1 => 1615554211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604b66ab7b2b78_03678531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_280208187604b66ab7a5900_59594685', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171268594604b66ab7b1b05_93798646', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_280208187604b66ab7a5900_59594685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_280208187604b66ab7a5900_59594685',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h3>List Accounts</h3>
                        </div>
                        <div class="col text-right">
                            <?php if ($_smarty_tpl->tpl_vars['server']->value->type == 'cpanel') {?>
                                <button id="btn_sync_accounts" class="btn btn-primary">Sync Accounts</button>
                            <?php }?>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                            <div class="alert alert-danger">
                                <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>

                        <?php if (count($_smarty_tpl->tpl_vars['accounts']->value) > 0) {?>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Domain</th>
                                    <th>Plan</th>
                                    <th>Email</th>
                                    <th>Disk Used</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accounts']->value, 'account');
$_smarty_tpl->tpl_vars['account']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->do_else = false;
?>
                                    <tr>
                                        <td>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['account']->value['domain'])) {?>
                                                <strong><?php echo $_smarty_tpl->tpl_vars['account']->value['domain'];?>
</strong>
                                            <?php }?>
                                        </td>
                                        <td>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['account']->value['plan'])) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['account']->value['plan'];?>

                                            <?php }?>
                                        </td>
                                        <td>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['account']->value['email'])) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['account']->value['email'];?>

                                            <?php }?>
                                        </td>
                                        <td>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['account']->value['diskused'])) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['account']->value['diskused'];?>

                                            <?php }?>
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                            <?php } else { ?>
                            <p>No data available.</p>
                        <?php }?>


                    <?php }?>
                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_171268594604b66ab7b1b05_93798646 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_171268594604b66ab7b1b05_93798646',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            let $btn_sync_accounts = $('#btn_sync_accounts');
            $btn_sync_accounts.on('click',function (event) {
                event.preventDefault();

                $btn_sync_accounts.prop('disabled',true);

                $.post(base_url + 'hostbilling/sync-accounts/', {
                    id: <?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>

            })
                .done(function (data) {
                    $btn_sync_accounts.prop('disabled',false);
                    window.location = base_url + 'hostbilling/orders/';
                }).fail(function(data) {
                $btn_sync_accounts.prop('disabled',false);
                let errors = $.parseJSON(data.responseText);
                $.each(errors, function(key, value) {
                    toastr.error(value);
                });
            });

        });

        });


    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
