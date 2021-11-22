<?php
/* Smarty version 3.1.39, created on 2021-02-19 08:31:28
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/contact_tickets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_602fbdb035adc5_78298684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab744352df9ddf659917801c3a283c0d3663b13b' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/contact_tickets.tpl',
      1 => 1613423337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602fbdb035adc5_78298684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_976165295602fbdb0353061_62045796', "inner_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/admin/contact_base.tpl");
}
/* {block "inner_content"} */
class Block_976165295602fbdb0353061_62045796 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'inner_content' => 
  array (
    0 => 'Block_976165295602fbdb0353061_62045796',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <a href="#" class="btn btn-primary mb-3">Create New Ticket</a>

    <?php if (count($_smarty_tpl->tpl_vars['tickets']->value)) {?>

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Ticket'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Last Update'];?>
</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tickets']->value, 'recent_ticket');
$_smarty_tpl->tpl_vars['recent_ticket']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_ticket']->value) {
$_smarty_tpl->tpl_vars['recent_ticket']->do_else = false;
?>
                <tr>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tickets/admin/view/<?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->id;?>
" class="font-weight-bold">
                            <?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->tid;?>

                        </a>
                    </td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tickets/admin/view/<?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->id;?>
" class="font-weight-bold">
                            <?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->subject;?>

                        </a>
                    </td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->userid;?>
/summary/">
                            <?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->account;?>

                        </a>
                    </td>
                    <td>
                        <?php echo cloudonex_get_ticket_status_with_badge($_smarty_tpl->tpl_vars['recent_ticket']->value->status);?>

                    </td>
                    <td>
                        <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_ticket']->value->updated_at));?>

                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>

    <?php }?>


<?php
}
}
/* {/block "inner_content"} */
}
