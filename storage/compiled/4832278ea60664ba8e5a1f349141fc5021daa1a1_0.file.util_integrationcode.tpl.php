<?php
/* Smarty version 3.1.39, created on 2021-05-21 06:56:16
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/util_integrationcode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a791d00f84b0_87734884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4832278ea60664ba8e5a1f349141fc5021daa1a1' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/util_integrationcode.tpl',
      1 => 1593420191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a791d00f84b0_87734884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144915289460a791d00f4438_99114418', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122612958760a791d00f4ed8_79677395', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125652899760a791d00f79c2_56983907', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_144915289460a791d00f4438_99114418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_144915289460a791d00f4438_99114418',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/themes/prism.min.css" />
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_122612958760a791d00f4ed8_79677395 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_122612958760a791d00f4ed8_79677395',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-md-8 col-xs-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Integration Code'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Login'];?>
</h4>
                        <pre><code class="language-html"><?php echo $_smarty_tpl->tpl_vars['form_client_login']->value;?>
</code></pre>
                        <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Registration'];?>
</h4>
                        <pre><code class="language-html"><?php echo $_smarty_tpl->tpl_vars['form_client_register']->value;?>
</code></pre>
                    </div>


                </div>
            </div>
        </div>



    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_125652899760a791d00f79c2_56983907 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_125652899760a791d00f79c2_56983907',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/prism.min.js"><?php echo '</script'; ?>
>

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
