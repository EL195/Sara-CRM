<?php
/* Smarty version 3.1.39, created on 2021-04-08 08:49:41
  from '/Users/razib/Documents/valet/business-suite/apps/whmcs_import/views/init.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606efbe5758d68_35159909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8df4b36fe1ea2fbde8fb7f033f49709160226b5d' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/whmcs_import/views/init.tpl',
      1 => 1617886167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606efbe5758d68_35159909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_981117113606efbe57559a8_79144647', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_730329501606efbe5758654_58819001', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_981117113606efbe57559a8_79144647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_981117113606efbe57559a8_79144647',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h2 class="mb-3">WHMCS Import</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4>API Credentials</h4>
                    <div class="hr-line-dashed"></div>
                    <form>
                        <div class="form-group">
                            <label>WHMCS URL</label>
                            <input class="form-control" name="whmcs_import_url" value="<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'whmcs_import_url');?>
">
                        </div>
                        <div class="form-group">
                            <label>WHMCS API Identifier</label>
                            <input class="form-control" name="whmcs_import_api_identifier" value="<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'whmcs_import_api_identifier');?>
">
                        </div>
                        <div class="form-group">
                            <label>WHMCS API Secret</label>
                            <input class="form-control" name="whmcs_import_api_secret" value="<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'whmcs_import_api_identifier');?>
">
                        </div>
                        <button class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4>Import</h4>
                    <div class="hr-line-dashed"></div>
                    <p>Click on Which Item would you like to Import.</p>
                    <div class="btn-group" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-primary">Customers</button>
                        <button type="button" class="btn btn-primary">Invoices</button>
                        <button type="button" class="btn btn-primary">Orders</button>
                        <button type="button" class="btn btn-primary">Servers</button>
                        <button type="button" class="btn btn-primary">Users</button>
                    </div>

                    <div class="my-3">
                        <textarea class="form-control" placeholder="Import Log..." rows="15"></textarea>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_730329501606efbe5758654_58819001 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_730329501606efbe5758654_58819001',
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
