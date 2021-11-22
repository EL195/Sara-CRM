<?php
/* Smarty version 3.1.39, created on 2021-05-10 07:43:40
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/contact_form_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60991c6cb3e7c6_13001270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b2bb42f1c78183e9d5a65316b96861288b1c51a' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/contact_form_fields.tpl',
      1 => 1620647019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60991c6cb3e7c6_13001270 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mb-3">
    <label>Audience</label>
    <select class="custom-select">
        <option value="--">--</option>
    </select>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label>First Name</label>
            <input class="form-control" name="first_name">
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label>Last Name</label>
            <input class="form-control" name="last_name">
        </div>
    </div>
</div>

<div class="mb-3">
    <label>Email</label>
    <input class="form-control" name="email">
</div>

<div class="mb-3">
    <label>Phone Number</label>
    <input class="form-control" name="phone_number">
</div>
<?php }
}
