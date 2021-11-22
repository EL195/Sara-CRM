<?php
/* Smarty version 3.1.39, created on 2021-09-24 05:18:11
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/settings_client_auth_page_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d97d360c4e6_67419749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c25e23d9e022ffe9da452530cc11a094db289ac1' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/settings_client_auth_page_widget.tpl',
      1 => 1593427507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614d97d360c4e6_67419749 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="max-width: 800px;" class="mx-auto">
    <div class="panel mb-0 rounded-0">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <form id="clx_modal_form">
                    <div class="form-group">
                        <textarea id="edit_content" name="content" class="form-control"><?php echo Widget::getWidgetContent('client-auth-page-widget');?>
</textarea>
                    </div>
                    <div class="form-group">
                        <button type="button" id="btn_save_content" class="btn btn-primary modal_submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                        <button type="button" class="btn btn-danger" onclick="$.fancybox.close();"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }
}
