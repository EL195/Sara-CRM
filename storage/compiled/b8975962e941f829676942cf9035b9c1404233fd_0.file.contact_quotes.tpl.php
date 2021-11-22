<?php
/* Smarty version 3.1.39, created on 2021-02-19 08:31:35
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/contact_quotes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_602fbdb7d2e703_70441962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8975962e941f829676942cf9035b9c1404233fd' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/contact_quotes.tpl',
      1 => 1613423479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602fbdb7d2e703_70441962 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_646886729602fbdb7d28da7_23950382', "inner_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/admin/contact_base.tpl");
}
/* {block "inner_content"} */
class Block_646886729602fbdb7d28da7_23950382 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'inner_content' => 
  array (
    0 => 'Block_646886729602fbdb7d28da7_23950382',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
</th>
        </tr>
        </thead>
        <tbody>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quotes']->value, 'recent_quote');
$_smarty_tpl->tpl_vars['recent_quote']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_quote']->value) {
$_smarty_tpl->tpl_vars['recent_quote']->do_else = false;
?>

            <tr>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/view/7/<?php echo $_smarty_tpl->tpl_vars['recent_quote']->value->id;?>
">
                        <?php echo cloudonex_get_invoice_number($_smarty_tpl->tpl_vars['recent_quote']->value);?>

                    </a>
                </td>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['recent_quote']->value->userid;?>
/summary/">
                        <?php echo $_smarty_tpl->tpl_vars['recent_quote']->value->account;?>

                    </a>
                </td>
                <td>
                    <?php echo cloudonex_get_invoice_status_with_badge($_smarty_tpl->tpl_vars['recent_quote']->value->status);?>

                </td>
                <td>
                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_quote']->value->created_at));?>

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
