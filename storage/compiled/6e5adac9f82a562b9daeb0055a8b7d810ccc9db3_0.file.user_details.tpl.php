<?php
/* Smarty version 3.1.39, created on 2021-06-14 19:34:01
  from '/Users/razib/Documents/valet/business-suite/apps/hestia/views/user_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c7e769f39a77_72358121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e5adac9f82a562b9daeb0055a8b7d810ccc9db3' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/hestia/views/user_details.tpl',
      1 => 1614942672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c7e769f39a77_72358121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145031470860c7e769f1f131_44005871', "content");
?>

<?php }
/* {block "content"} */
class Block_145031470860c7e769f1f131_44005871 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_145031470860c7e769f1f131_44005871',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="card">
        <div class="card-body">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'user_details', false, 'username');
$_smarty_tpl->tpl_vars['user_details']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['username']->value => $_smarty_tpl->tpl_vars['user_details']->value) {
$_smarty_tpl->tpl_vars['user_details']->do_else = false;
?>
                <h3><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h3>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_details']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <div class="mb-2">
                        <strong><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
