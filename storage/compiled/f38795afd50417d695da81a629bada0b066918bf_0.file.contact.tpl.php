<?php
/* Smarty version 3.1.39, created on 2021-06-02 07:17:53
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/form_fields/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b768e18d2037_38392473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f38795afd50417d695da81a629bada0b066918bf' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/form_fields/contact.tpl',
      1 => 1622632670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b768e18d2037_38392473 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mb-3">
    <label>Audience</label>
    <select class="custom-select" name="audience_id">
        <option value="">--</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['audiences']->value, 'audience');
$_smarty_tpl->tpl_vars['audience']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['audience']->value) {
$_smarty_tpl->tpl_vars['audience']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['audience']->value->id;?>
"
            <?php if (!empty($_smarty_tpl->tpl_vars['contact']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['contact']->value->audience_id == $_smarty_tpl->tpl_vars['audience']->value->id) {?>
                    selected
                <?php }?>
            <?php }?>
            ><?php echo $_smarty_tpl->tpl_vars['audience']->value->name;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label>First Name</label>
            <input class="form-control" name="first_name"
            <?php if (!empty($_smarty_tpl->tpl_vars['contact']->value)) {?>
                value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->first_name;?>
"
            <?php }?>
            >
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label>Last Name</label>
            <input class="form-control" name="last_name"
                    <?php if (!empty($_smarty_tpl->tpl_vars['contact']->value)) {?>
                        value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->last_name;?>
"
                    <?php }?>
            >
        </div>
    </div>
</div>

<div class="mb-3">
    <label>Email</label>
    <input class="form-control" name="email"
            <?php if (!empty($_smarty_tpl->tpl_vars['contact']->value)) {?>
                value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->email;?>
"
            <?php }?>
    >
</div>

<div class="mb-3">
    <label>Phone Number</label>
    <input class="form-control" name="phone_number"
            <?php if (!empty($_smarty_tpl->tpl_vars['contact']->value)) {?>
                value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->phone_number;?>
"
            <?php }?>
    >
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['contact']->value)) {?>
   <input type="hidden" name="id"  value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
">
<?php }
}
}
