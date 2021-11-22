<?php
/* Smarty version 3.1.39, created on 2021-08-14 14:24:58
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/subscriptions_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61180a7a019f24_24187026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33d41af19ee783fee827ef8e90ceb1b4693bfe75' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/subscriptions_list.tpl',
      1 => 1628965423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61180a7a019f24_24187026 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13280035061180a7a018f66_20702381', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28274854761180a7a019907_47355676', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_13280035061180a7a018f66_20702381 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13280035061180a7a018f66_20702381',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_28274854761180a7a019907_47355676 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_28274854761180a7a019907_47355676',
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
