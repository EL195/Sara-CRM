<?php
/* Smarty version 3.1.39, created on 2021-05-03 13:31:59
  from '/Users/razib/Documents/valet/business-suite/apps/uae_tax/views/audit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6090338f75a646_92434973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e84ce7c6aed1b8a3b2162ce92d84a15c0c4457aa' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/uae_tax/views/audit.tpl',
      1 => 1620063116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6090338f75a646_92434973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_263492026090338f7591e5_11587183', "content");
?>

<?php }
/* {block "content"} */
class Block_263492026090338f7591e5_11587183 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_263492026090338f7591e5_11587183',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="panel">
        <div class="panel-hdr">
            <h2>VAT Audit Report</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <div class="ibox-content">

                    <div style="max-width: 400px;">
                        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
uae_tax/app/download_audit_file">
                            <div class="form-group">
                                <label>Audit start date</label>
                                <input class="form-control" datepicker
                                       data-date-format="yyyy-mm-dd" data-auto-close="true" name="from_date">
                            </div>

                            <div class="form-group">
                                <label>Audit end date</label>
                                <input class="form-control" datepicker
                                       data-date-format="yyyy-mm-dd" data-auto-close="true" name="to_date">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Generate</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
}
