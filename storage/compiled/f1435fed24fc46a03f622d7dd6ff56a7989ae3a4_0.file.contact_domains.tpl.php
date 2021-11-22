<?php
/* Smarty version 3.1.39, created on 2021-02-19 08:31:27
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/contact_domains.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_602fbdaf3d7ef6_14219623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1435fed24fc46a03f622d7dd6ff56a7989ae3a4' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/contact_domains.tpl',
      1 => 1613428213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602fbdaf3d7ef6_14219623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_263005532602fbdaf3d1e76_76556982', "inner_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/admin/contact_base.tpl");
}
/* {block "inner_content"} */
class Block_263005532602fbdaf3d1e76_76556982 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'inner_content' => 
  array (
    0 => 'Block_263005532602fbdaf3d1e76_76556982',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Tracking ID</th>
            <th>Domain</th>
            <th>Next Due Date</th>
            <th>Amount</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'recent_domain');
$_smarty_tpl->tpl_vars['recent_domain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_domain']->value) {
$_smarty_tpl->tpl_vars['recent_domain']->do_else = false;
?>

            <tr>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/domain-order/<?php echo $_smarty_tpl->tpl_vars['recent_domain']->value->id;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['recent_domain']->value->tracking_id;?>

                    </a>
                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['recent_domain']->value->domain;?>

                </td>

                <td>

                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_domain']->value->created_at));?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['recent_domain']->value->amount;?>

                </td>
                <td>
                    <?php echo cloudonex_get_invoice_status_with_badge($_smarty_tpl->tpl_vars['recent_domain']->value->status);?>

                </td>

            </tr>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


        </tbody>
    </table>


<?php
}
}
/* {/block "inner_content"} */
}
