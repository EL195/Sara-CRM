<?php
/* Smarty version 3.1.39, created on 2021-05-26 10:55:30
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/choose_server_type.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ae61625e72e8_77062975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7ced52b6dddcab44558d3de409bae53ccb54378' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/choose_server_type.tpl',
      1 => 1616965247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ae61625e72e8_77062975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174642020060ae61625e1249_18398069', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121594792960ae61625e6cc1_36314507', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_174642020060ae61625e1249_18398069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_174642020060ae61625e1249_18398069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h1><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Server Type'];?>
</h1>
    <div class="hr-line-dashed"></div>

    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_server_types']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <div class="col-md-3">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/server/0/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                    <div class="card">
                        <div class="card-body">
                            <h2><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</h2>
                        </div>
                    </div>
                </a>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>



<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_121594792960ae61625e6cc1_36314507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_121594792960ae61625e6cc1_36314507',
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
