<?php
/* Smarty version 3.1.39, created on 2021-06-02 07:22:08
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/contacts_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b769e0095a67_38485459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63ae820dea7db786c56f172be960fc682c56b7ab' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/contacts_table.tpl',
      1 => 1622632882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b769e0095a67_38485459 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table table-bordered table-hover sys_table"  id="clx_data_table">
    <thead>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</th>
        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
    </tr>
    </thead>
    <tbody>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>

        <tr>

            <td>
                <?php echo $_smarty_tpl->tpl_vars['contact']->value->first_name;?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['contact']->value->last_name;?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['contact']->value->email;?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['contact']->value->phone_number;?>

            </td>
            <td class="text-right">
                <a href="javascript:void(0);" data-id="<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
" class="btn btn-primary btn-icon rounded-circle view_contact">
                    <i class="fal fa-user"></i>
                </a>
                <a href="javascript:void(0);" data-id="<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
" class="btn btn-danger btn-icon rounded-circle delete_contact">
                    <i class="fal fa-trash"></i>
                </a>
            </td>

        </tr>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </tbody>



</table>
<?php }
}
