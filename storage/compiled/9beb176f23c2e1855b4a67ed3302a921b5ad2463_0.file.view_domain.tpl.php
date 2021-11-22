<?php
/* Smarty version 3.1.39, created on 2021-02-26 14:07:53
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/view_domain.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_603947097d35b0_39450087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9beb176f23c2e1855b4a67ed3302a921b5ad2463' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/view_domain.tpl',
      1 => 1613558851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603947097d35b0_39450087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_651087882603947097cfff8_16819849', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2098075583603947097d2fb5_11942543', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl");
}
/* {block "content"} */
class Block_651087882603947097cfff8_16819849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_651087882603947097cfff8_16819849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="card">
        <div class="card-body">
            <h3><?php echo $_smarty_tpl->tpl_vars['order']->value->tracking_id;?>
</h3>
            <div class="hr-line-dashed"></div>
            <strong>Status:</strong> <?php echo cloudonex_get_order_status_with_badge($_smarty_tpl->tpl_vars['order']->value->status);?>

            <div class="mt-3">
                <h4><?php echo $_smarty_tpl->tpl_vars['order']->value->activation_subject;?>
</h4>
            </div>
            <div class="mt-3">
                <?php echo $_smarty_tpl->tpl_vars['order']->value->activation_message;?>

            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_2098075583603947097d2fb5_11942543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2098075583603947097d2fb5_11942543',
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
