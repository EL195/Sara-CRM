<?php
/* Smarty version 3.1.39, created on 2021-04-19 11:01:55
  from '/Users/razib/Documents/valet/business-suite/apps/uae_tax/views/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607d9b638a2038_91435758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5062e34c2f13ff3c4b918be85d7cd25e9d4c1faa' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/uae_tax/views/settings.tpl',
      1 => 1618844513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607d9b638a2038_91435758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1232332757607d9b63897a26_95099331', "content");
?>

<?php }
/* {block "content"} */
class Block_1232332757607d9b63897a26_95099331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1232332757607d9b63897a26_95099331',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2>Settings</h2>
        </div>

        <div class="panel-container">
            <div class="panel-content">

                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
uae_tax/app/settings-post">
                            <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
</h4>
                            <div class="form-group">
                                <label for="uae_vat_emirate">Emirate</label>
                                <select class="form-control" name="uae_vat_emirate" id="uae_vat_emirate">
                                    <option value="Abu Dhabi" <?php if ($_smarty_tpl->tpl_vars['config']->value['uae_vat_emirate'] == 'Abu Dhabi') {?>selected<?php }?>>Abu Dhabi</option>
                                    <option value="Dubai" <?php if ($_smarty_tpl->tpl_vars['config']->value['uae_vat_emirate'] == 'Dubai') {?>selected<?php }?>>Dubai</option>
                                    <option value="Sharjah" <?php if ($_smarty_tpl->tpl_vars['config']->value['uae_vat_emirate'] == 'Sharjah') {?>selected<?php }?>>Sharjah</option>
                                    <option value="Ajman" <?php if ($_smarty_tpl->tpl_vars['config']->value['uae_vat_emirate'] == 'Ajman') {?>selected<?php }?>>Ajman</option>
                                    <option value="Umm Al Quwain" <?php if ($_smarty_tpl->tpl_vars['config']->value['uae_vat_emirate'] == 'Umm Al Quwain') {?>selected<?php }?>>Umm Al Quwain</option>
                                    <option value="Ras Al Khaimah" <?php if ($_smarty_tpl->tpl_vars['config']->value['uae_vat_emirate'] == 'Ras Al Khaimah') {?>selected<?php }?>>Ras Al Khaimah</option>
                                    <option value="Fujairah" <?php if ($_smarty_tpl->tpl_vars['config']->value['uae_vat_emirate'] == 'Fujairah') {?>selected<?php }?>>Fujairah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="uae_vat_trn">TRN</label>
                                <input class="form-control" name="uae_vat_trn" id="uae_vat_trn" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['uae_vat_trn'];?>
">
                                <span class="help-block">15 digit TRN</span>
                            </div>
                            <div class="form-group">
                                <label for="uae_vat_reg_date">Registration Date</label>
                                <input class="form-control" name="uae_vat_reg_date" id="uae_vat_reg_date" class="form-control" datepicker
                                       data-date-format="yyyy-mm-dd" data-auto-close="true" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['uae_vat_reg_date'];?>
">
                            </div>
                            <div class="form-group">
                                <label for="uae_vat_period">Periodicity</label>
                                <select class="form-control" id="uae_vat_period" name="uae_vat_period">
                                    <option value="m" <?php if ($_smarty_tpl->tpl_vars['config']->value['uae_vat_period'] == 'm') {?>selected<?php }?>>Monthly</option>
                                    <option value="q"  <?php if ($_smarty_tpl->tpl_vars['config']->value['uae_vat_period'] == 'q') {?>selected<?php }?>>Quarterly</option>
                                    <option value="y"  <?php if ($_smarty_tpl->tpl_vars['config']->value['uae_vat_period'] == 'y') {?>selected<?php }?>>Yearly</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="uae_vat_default">Default VAT Rate</label>
                                <select class="form-control" name="uae_vat_default" id="uae_vat_default">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['taxes']->value, 'tax');
$_smarty_tpl->tpl_vars['tax']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tax']->value) {
$_smarty_tpl->tpl_vars['tax']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['tax']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['tax']->value->is_default) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['tax']->value->name;?>
 [<?php echo $_smarty_tpl->tpl_vars['tax']->value->rate;?>
%]</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Save</button>
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
