<?php
/* Smarty version 3.1.39, created on 2021-04-19 13:09:28
  from '/Users/razib/Documents/valet/business-suite/apps/uae_tax/views/payable_tax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607db948288c39_52958428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb4a9e7aa093cc5a19b3445bfc6cff08af5d24ce' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/uae_tax/views/payable_tax.tpl',
      1 => 1618844428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607db948288c39_52958428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1039892871607db9482874b9_94647141', "content");
?>


<?php }
/* {block "content"} */
class Block_1039892871607db9482874b9_94647141 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1039892871607db9482874b9_94647141',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2>Payable VAT</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">

                <h3>Total VAT Payable</h3>

                <h1>AED <?php echo $_smarty_tpl->tpl_vars['total_vat_payable']->value;?>
</h1>


            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
