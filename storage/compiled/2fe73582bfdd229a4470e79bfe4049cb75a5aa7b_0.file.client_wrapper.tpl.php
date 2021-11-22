<?php
/* Smarty version 3.1.39, created on 2021-06-20 17:04:00
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_wrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cfad40a054c6_68153756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fe73582bfdd229a4470e79bfe4049cb75a5aa7b' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_wrapper.tpl',
      1 => 1608204698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../".((string)$_smarty_tpl->tpl_vars[\'_pd\']->value)."/views/".((string)$_smarty_tpl->tpl_vars[\'include\']->value).".tpl' => 1,
    'file:../../../".((string)$_smarty_tpl->tpl_vars[\'_pd\']->value)."/views/".((string)$_smarty_tpl->tpl_vars[\'_include\']->value).".tpl' => 1,
  ),
),false)) {
function content_60cfad40a054c6_68153756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['include']->value))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:../../../".((string)$_smarty_tpl->tpl_vars['_pd']->value)."/views/".((string)$_smarty_tpl->tpl_vars['include']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif ((isset($_smarty_tpl->tpl_vars['_include']->value))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:../../../".((string)$_smarty_tpl->tpl_vars['_pd']->value)."/views/".((string)$_smarty_tpl->tpl_vars['_include']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
}
