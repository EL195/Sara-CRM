<?php
/* Smarty version 3.1.39, created on 2021-05-11 01:38:07
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/form_fields/audience.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609a183f225ea2_68773231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '830bc3f732c8af5dc5ace2401a6d655141674320' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/form_fields/audience.tpl',
      1 => 1620711484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609a183f225ea2_68773231 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mb-3">
    <label>Name</label>
    <input class="form-control" name="name"
    <?php if (!empty($_smarty_tpl->tpl_vars['selected_audience']->value)) {?>
        value="<?php echo $_smarty_tpl->tpl_vars['selected_audience']->value->name;?>
"
    <?php }?>
    >
</div>
<?php }
}
