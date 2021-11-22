<?php
/* Smarty version 3.1.39, created on 2021-05-11 05:42:12
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/form_fields/sequence.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609a5174dc5231_21531583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99bbe9316e02bcb07a24e2ce477e9531217a4646' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/form_fields/sequence.tpl',
      1 => 1620726111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609a5174dc5231_21531583 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mb-3">
    <label>Name</label>
    <input class="form-control" name="name"
            <?php if (!empty($_smarty_tpl->tpl_vars['selected_sequence']->value)) {?>
                value="<?php echo $_smarty_tpl->tpl_vars['selected_sequence']->value->name;?>
"
            <?php }?>
    >
</div>
<?php }
}
