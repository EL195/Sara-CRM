<?php
/* Smarty version 3.1.39, created on 2021-03-12 12:18:59
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/layouts/canvas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604ba28344be31_50700416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5c3e72d1b79e1c7eaca348e5eb5558ee000fea2' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/layouts/canvas.tpl',
      1 => 1615569535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604ba28344be31_50700416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
if ((isset($_smarty_tpl->tpl_vars['config']->value['base_layout']))) {?>
    
    <?php } else { ?>
    
<?php }?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1566065608604ba283449da9_65222182', "head_extras_from_layout");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_557655640604ba28344a966_59862688', "content_body");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2015036625604ba28344b744_66707674', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['config']->value['base_layout']);
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/base.tpl");
}
/* {block "head_extras_from_layout"} */
class Block_1566065608604ba283449da9_65222182 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_extras_from_layout' => 
  array (
    0 => 'Block_1566065608604ba283449da9_65222182',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <style>
        .pristine-error.text-help {
            color: red;
        }
        @media (min-width: 992px){
            .clx-fixed-navigation:not(.clx-navigation-type-top):not(.nav-function-hidden):not(.nav-function-minify) .page-content-wrapper {
                padding-left: 0;
            }
        }
    </style>
<?php
}
}
/* {/block "head_extras_from_layout"} */
/* {block "content"} */
class Block_984393984604ba28344ade5_61295293 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "content"} */
/* {block "content_body"} */
class Block_557655640604ba28344a966_59862688 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_body' => 
  array (
    0 => 'Block_557655640604ba28344a966_59862688',
  ),
  'content' => 
  array (
    0 => 'Block_984393984604ba28344ade5_61295293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_984393984604ba28344ade5_61295293', "content", $this->tplIndex);
?>


<?php
}
}
/* {/block "content_body"} */
/* {block "script"} */
class Block_2015036625604ba28344b744_66707674 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2015036625604ba28344b744_66707674',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {



        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
