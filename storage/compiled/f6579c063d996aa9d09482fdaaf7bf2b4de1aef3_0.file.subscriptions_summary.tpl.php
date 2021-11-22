<?php
/* Smarty version 3.1.39, created on 2021-08-22 15:13:04
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/subscriptions_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6122a1c0a5c4b7_68318948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6579c063d996aa9d09482fdaaf7bf2b4de1aef3' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/subscriptions_summary.tpl',
      1 => 1629659582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6122a1c0a5c4b7_68318948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20701621946122a1c0a5b086_97916052', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7910868446122a1c0a5bd08_45655517', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_20701621946122a1c0a5b086_97916052 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20701621946122a1c0a5b086_97916052',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_7910868446122a1c0a5bd08_45655517 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_7910868446122a1c0a5bd08_45655517',
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
