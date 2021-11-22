<?php
/* Smarty version 3.1.39, created on 2021-08-22 17:37:22
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/contracts_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6122c392b45aa4_71221808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fe7485861f80dc7f8c192284b6adbe2b2135922' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/contracts_summary.tpl',
      1 => 1629668214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6122c392b45aa4_71221808 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14977108726122c392b44652_73416325', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2711011966122c392b452e0_60040643', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_14977108726122c392b44652_73416325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14977108726122c392b44652_73416325',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_2711011966122c392b452e0_60040643 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2711011966122c392b452e0_60040643',
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
