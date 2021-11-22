<?php
/* Smarty version 3.1.39, created on 2021-06-02 09:09:19
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/sequence_step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b782ff57e7f4_06368272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dad32b226d7caf024536a6a53b04122fc97cd007' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/sequence_step.tpl',
      1 => 1622639341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b782ff57e7f4_06368272 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125622202360b782ff57d827_15346403', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185205410160b782ff57e140_94398821', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_125622202360b782ff57d827_15346403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_125622202360b782ff57d827_15346403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_185205410160b782ff57e140_94398821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_185205410160b782ff57e140_94398821',
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
