<?php
/* Smarty version 3.1.39, created on 2021-06-24 06:01:04
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/wrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d457e0e7afc1_53971026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1475c1be499c82dff0c2f13ef9f170b8d0749c05' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/wrapper.tpl',
      1 => 1556267287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../".((string)$_smarty_tpl->tpl_vars[\'plugin_directory\']->value)."/views/".((string)$_smarty_tpl->tpl_vars[\'_include\']->value).".tpl' => 1,
  ),
),false)) {
function content_60d457e0e7afc1_53971026 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87948431960d457e0e73524_39433948', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_87948431960d457e0e73524_39433948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_87948431960d457e0e73524_39433948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../../../".((string)$_smarty_tpl->tpl_vars['plugin_directory']->value)."/views/".((string)$_smarty_tpl->tpl_vars['_include']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "content"} */
}
