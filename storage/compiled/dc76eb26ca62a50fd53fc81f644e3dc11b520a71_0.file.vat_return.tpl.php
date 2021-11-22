<?php
/* Smarty version 3.1.39, created on 2021-04-19 13:07:58
  from '/Users/razib/Documents/valet/business-suite/apps/uae_tax/views/vat_return.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607db8ee759911_67578599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc76eb26ca62a50fd53fc81f644e3dc11b520a71' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/uae_tax/views/vat_return.tpl',
      1 => 1618852076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607db8ee759911_67578599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_945361479607db8ee757880_92547880', "content");
?>


<?php }
/* {block "content"} */
class Block_945361479607db8ee757880_92547880 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_945361479607db8ee757880_92547880',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2>Dashboard</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">

                <h3 class="text-center">Generate VAT Return</h3>
                <p class="text-center">
                    Your first Tax Return will be generated from the start date configured in Tax settings

                </p>

                <p class="text-center">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
uae_tax/app/generate_return" class="btn btn-primary">Generate VAT Return</a>
                </p>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
