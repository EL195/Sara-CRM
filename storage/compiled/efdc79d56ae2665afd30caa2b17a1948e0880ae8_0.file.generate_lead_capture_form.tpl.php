<?php
/* Smarty version 3.1.39, created on 2021-06-04 07:39:14
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/form_fields/generate_lead_capture_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ba10e28068a3_59433496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efdc79d56ae2665afd30caa2b17a1948e0880ae8' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/form_fields/generate_lead_capture_form.tpl',
      1 => 1622806281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ba10e28068a3_59433496 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['form']->value->header_title) {?>
    <h3><?php echo $_smarty_tpl->tpl_vars['form']->value->header_title;?>
</h3>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['form']->value->header_text) {?>
    <div class="mb-3">
        <?php echo $_smarty_tpl->tpl_vars['form']->value->header_text;?>

    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['form']->value->has_first_name) {?>
    <div class="mb-3">
        <label for="first_name">
            <?php if ($_smarty_tpl->tpl_vars['form']->value->label_first_name) {?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value->label_first_name;?>

                <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['fields']->value['first_name']['default']['name'];?>

            <?php }?>
        </label>
        <input class="form-control" name="first_name" id="first_name">
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['form']->value->has_last_name) {?>
    <div class="mb-3">
        <label for="last_name">
            <?php if ($_smarty_tpl->tpl_vars['form']->value->label_last_name) {?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value->label_last_name;?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['fields']->value['last_name']['default']['name'];?>

            <?php }?>
        </label>
        <input class="form-control" name="last_name" id="last_name">
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['form']->value->has_email) {?>
    <div class="mb-3">
        <label for="email">
            <?php if ($_smarty_tpl->tpl_vars['form']->value->label_email) {?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value->label_email;?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['fields']->value['email']['default']['name'];?>

            <?php }?>
        </label>
        <input class="form-control" name="email" id="email">
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['form']->value->has_phone) {?>
    <div class="mb-3">
        <label for="phone">
            <?php if ($_smarty_tpl->tpl_vars['form']->value->label_phone) {?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value->label_phone;?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['fields']->value['phone']['default']['name'];?>

            <?php }?>
        </label>
        <input class="form-control" name="phone" id="phone">
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['form']->value->has_company) {?>
    <div class="mb-3">
        <label for="company">
            <?php if ($_smarty_tpl->tpl_vars['form']->value->label_company) {?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value->label_company;?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['fields']->value['company']['default']['name'];?>

            <?php }?>
        </label>
        <input class="form-control" name="company" id="company">
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['form']->value->has_employees) {?>
    <div class="mb-3">
        <label for="employees">
            <?php if ($_smarty_tpl->tpl_vars['form']->value->label_employees) {?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value->label_employees;?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['fields']->value['employees']['default']['name'];?>

            <?php }?>
        </label>
        <input class="form-control" name="employees" id="employees">
    </div>
<?php }?>





<?php if ($_smarty_tpl->tpl_vars['form']->value->has_website) {?>
    <div class="mb-3">
        <label for="website">
            <?php if ($_smarty_tpl->tpl_vars['form']->value->label_website) {?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value->label_website;?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['fields']->value['website']['default']['name'];?>

            <?php }?>
        </label>
        <input class="form-control" name="website" id="website">
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['form']->value->has_address_line_1) {?>
    <div class="mb-3">
        <label for="address_line_1">
            <?php if ($_smarty_tpl->tpl_vars['form']->value->label_address_line_1) {?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value->label_address_line_1;?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['fields']->value['address_line_1']['default']['name'];?>

            <?php }?>
        </label>
        <input class="form-control" name="address_line_1" id="address_line_1">
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['form']->value->has_address_line_2) {?>
    <div class="mb-3">
        <label for="address_line_2">
            <?php if ($_smarty_tpl->tpl_vars['form']->value->label_address_line_2) {?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value->label_address_line_2;?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['fields']->value['address_line_2']['default']['name'];?>

            <?php }?>
        </label>
        <input class="form-control" name="address_line_2" id="address_line_2">
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['form']->value->has_city) {?>
    <div class="mb-3">
        <label for="city">
            <?php if ($_smarty_tpl->tpl_vars['form']->value->label_city) {?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value->label_city;?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['fields']->value['city']['default']['name'];?>

            <?php }?>
        </label>
        <input class="form-control" name="city" id="city">
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['form']->value->has_state) {?>
    <div class="mb-3">
        <label for="state">
            <?php if ($_smarty_tpl->tpl_vars['form']->value->label_state) {?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value->label_state;?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['fields']->value['state']['default']['name'];?>

            <?php }?>
        </label>
        <input class="form-control" name="state" id="state">
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['form']->value->has_postal_code) {?>
    <div class="mb-3">
        <label for="postal_code">
            <?php if ($_smarty_tpl->tpl_vars['form']->value->label_postal_code) {?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value->label_postal_code;?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['fields']->value['postal_code']['default']['name'];?>

            <?php }?>
        </label>
        <input class="form-control" name="postal_code" id="postal_code">
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['form']->value->has_country) {?>
    <div class="mb-3">
        <label for="country">
            <?php if ($_smarty_tpl->tpl_vars['form']->value->label_country) {?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value->label_country;?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['fields']->value['country']['default']['name'];?>

            <?php }?>
        </label>
        <input class="form-control" name="country" id="country">
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['form']->value->has_notes) {?>
    <div class="mb-3">
        <label for="notes">
            <?php if ($_smarty_tpl->tpl_vars['form']->value->label_notes) {?>
                <?php echo $_smarty_tpl->tpl_vars['form']->value->label_notes;?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['fields']->value['notes']['default']['name'];?>

            <?php }?>
        </label>
        <input class="form-control" name="notes" id="notes">
    </div>
<?php }?>

<?php }
}
