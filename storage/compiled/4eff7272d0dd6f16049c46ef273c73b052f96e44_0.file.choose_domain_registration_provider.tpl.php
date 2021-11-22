<?php
/* Smarty version 3.1.39, created on 2021-02-22 09:34:03
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/choose_domain_registration_provider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6033c0db01ed08_65341056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4eff7272d0dd6f16049c46ef273c73b052f96e44' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/choose_domain_registration_provider.tpl',
      1 => 1614004435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6033c0db01ed08_65341056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8356047496033c0db01b2f4_94702080', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14197860226033c0db01e713_82234946', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_8356047496033c0db01b2f4_94702080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8356047496033c0db01b2f4_94702080',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1>Choose Service Provider</h1>
    <div class="hr-line-dashed"></div>

    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_domain_registration_providers']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <div class="col-md-3">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/domain-registration-provider/0/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                    <div class="card">
                        <div class="card-body">
                            <h2><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</h2>
                        </div>
                    </div>
                </a>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>



<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_14197860226033c0db01e713_82234946 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_14197860226033c0db01e713_82234946',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
