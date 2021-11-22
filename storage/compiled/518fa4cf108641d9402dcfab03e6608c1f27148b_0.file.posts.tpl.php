<?php
/* Smarty version 3.1.39, created on 2021-04-28 15:36:05
  from '/Users/razib/Documents/valet/business-suite/apps/blog/views/posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6089b925abe717_17295088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '518fa4cf108641d9402dcfab03e6608c1f27148b' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/blog/views/posts.tpl',
      1 => 1619638563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6089b925abe717_17295088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3853358176089b925abd655_36087412', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_3853358176089b925abd655_36087412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3853358176089b925abd655_36087412',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row mb-3">
        <div class="col">
            <h3>Posts</h3>
        </div>
        <div class="col text-right">
            <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
blog/app/post">Add New Post</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">




        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
