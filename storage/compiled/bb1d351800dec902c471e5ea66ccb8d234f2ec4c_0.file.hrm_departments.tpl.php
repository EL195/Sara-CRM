<?php
/* Smarty version 3.1.39, created on 2021-06-30 09:57:20
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hrm_departments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60dc7840226527_68077882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb1d351800dec902c471e5ea66ccb8d234f2ec4c' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hrm_departments.tpl',
      1 => 1625061221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60dc7840226527_68077882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68416507060dc78402255d3_61290419', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174151260760dc7840225f42_08801386', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_68416507060dc78402255d3_61290419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_68416507060dc78402255d3_61290419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_174151260760dc7840225f42_08801386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_174151260760dc7840225f42_08801386',
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
