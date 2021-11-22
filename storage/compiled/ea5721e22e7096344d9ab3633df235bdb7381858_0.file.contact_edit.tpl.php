<?php
/* Smarty version 3.1.39, created on 2021-08-04 11:56:15
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/contact_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610ab89f545ed1_63639629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea5721e22e7096344d9ab3633df235bdb7381858' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/contact_edit.tpl',
      1 => 1613470226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610ab89f545ed1_63639629 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_947204699610ab89f4f94b1_77961231', "inner_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2095499074610ab89f545097_46443037', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/admin/contact_base.tpl");
}
/* {block "inner_content"} */
class Block_947204699610ab89f4f94b1_77961231 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'inner_content' => 
  array (
    0 => 'Block_947204699610ab89f4f94b1_77961231',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="alert alert-danger" id="emsg" style="display: none;">
        <span id="emsgbody"></span>
    </div>

    <form class="form-horizontal" id="edit_form">

        <div class="form-group"><label for="account"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account Name'];?>
</span></label>

            <input type="text" id="account" name="account" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->account;?>
">
        </div>

        <div class="row mt-2">
            <div class="col-md-6 ">
                <div class="form-group"><label for="code"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Code'];?>
</span></label>

                    <input type="text" id="code" name="code" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->code;?>
">
                </div>

            </div>
            <div class="col-md-6 ">
                <div class="form-group h6"><label for="company_id"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</span></label>

                    <select id="company_id" name="company_id" class="form-control">
                        <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['contact']->value->cid == ($_smarty_tpl->tpl_vars['company']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>


            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-6">
                <div class="form-group h6"><label for="edit_email"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</span></label>

                    <input type="text" id="edit_email" name="edit_email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['email'];?>
">
                </div>


            </div>
            <div class="col-md-6">
                <div class="form-group h6"><label for="edit_secondary_email"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Secondary Email'];?>
</span></label>
                    <input type="text" id="edit_secondary_email" name="secondary_email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['secondary_email'];?>
">
                </div>


            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-6">
                <div class="form-group h6"><label for="phone"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</span></label>

                    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['phone'];?>
">
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-group h6"><label for="company_id"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Owner'];?>
</span></label>

                    <select class="form-control" name="owner_id" id="owner_id">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['owners']->value, 'owner');
$_smarty_tpl->tpl_vars['owner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['owner']->value) {
$_smarty_tpl->tpl_vars['owner']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['owner']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['owner']->value->id == $_smarty_tpl->tpl_vars['contact']->value->o) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['owner']->value->fullname;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

            </div>
        </div>



        <?php if ($_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>

            <div class="form-group h6">

                <label for="business_number"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['config']->value['label_business_number'];?>
</span></label>

                <input type="text" id="business_number" name="business_number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['business_number'];?>
">
            </div>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['fax_field']) {?>

            <div class="form-group h6"><label for="phone"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Fax'];?>
</span></label>

                <input type="text" id="fax" name="fax" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['fax'];?>
">
            </div>

        <?php }?>


        <div class="form-group h6"><label for="address"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</span></label>

            <input type="text" id="address" name="address" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['address'];?>
">
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <div class="form-group h6"><label for="city"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</span></label>

                    <input type="text" id="city" name="city" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['city'];?>
">
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-group h6"><label for="state"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</span></label>
                    <input type="text" id="state" name="state" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['state'];?>
">
                </div>

            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="form-group h6"><label for="zip"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
 </span></label>
                    <input type="text" id="zip" name="zip" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['zip'];?>
">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group h6"><label for="country"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</span></label>
                    <select name="country" id="country" class="form-control">
                        <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Country'];?>
</option>
                        <?php echo $_smarty_tpl->tpl_vars['countries']->value;?>

                    </select>
                </div>

            </div>
        </div>



        <div class="row mt-2">
            <div class="col-md-7">
                <div class="form-group h6"><label for="group"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>
 </span></label>
                    <select class="form-control" name="group" id="group">
                        <option value="0" <?php if (($_smarty_tpl->tpl_vars['contact']->value['gid']) == 0) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gs']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['contact']->value['gid']) == ($_smarty_tpl->tpl_vars['g']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['g']->value['gname'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>


            </div>
            <div class="col-md-5">
                <?php if ($_smarty_tpl->tpl_vars['config']->value['accounting'] == '1') {?>

                    <div class="form-group"><label class="col-md-2 control-label h6" for="currency"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency'];?>
</span></label>
                        <select id="currency" name="currency" class="form-control">

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
"
                                        <?php if (($_smarty_tpl->tpl_vars['contact']->value['currency']) == ($_smarty_tpl->tpl_vars['currency']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['cname'];?>
</option>
                                <?php
}
if ($_smarty_tpl->tpl_vars['currency']->do_else) {
?>
                                <option value="0"><?php echo $_smarty_tpl->tpl_vars['config']->value['home_currency'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </select>
                    </div>

                <?php }?>
            </div>
        </div>












        <?php if ($_smarty_tpl->tpl_vars['config']->value['client_dashboard'] == '1') {?>

            <?php if ($_smarty_tpl->tpl_vars['config']->value['customer_custom_username']) {?>

                <div class="form-group h6"><label for="username"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
 </span></label>

                    <input type="text" id="username" name="username" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['username'];?>
">
                </div>


            <?php }?>


            <div class="form-group h6"><label for="password"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</span> </label>

                <input type="password" id="password" name="password" class="form-control" autocomplete="new-password">

                <span class="help-block text-info h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['password_change_help'];?>
</span>
            </div>

        <?php }?>



        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fs']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
            <div class="form-group"><label for="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['fieldname'];?>
</label>
                <?php if (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'text') {?>


                    <input type="text" id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control" value="<?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['contact']->value['id']) != '') {?> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['contact']->value['id']);
}?>">
                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                    <?php }?>

                <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'password') {?>

                    <input type="password" id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control" value="<?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['contact']->value['id']) != '') {?> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['contact']->value['id']);
}?>">
                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                    <?php }?>

                <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'dropdown') {?>
                    <select id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(',',$_smarty_tpl->tpl_vars['f']->value['fieldoptions']), 'fo');
$_smarty_tpl->tpl_vars['fo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fo']->value) {
$_smarty_tpl->tpl_vars['fo']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['fo']->value;?>
" <?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['contact']->value['id']) == $_smarty_tpl->tpl_vars['fo']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['fo']->value;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                    <?php }?>

                <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'textarea') {?>

                    <textarea id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control" rows="3"><?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['contact']->value['id']) != '') {?> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['contact']->value['id']);
}?></textarea>
                    <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                    <?php }?>

                <?php } else { ?>
                <?php }?>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <div class="form-group"><label for="cid"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</span> </label>

            <div class="checkbox">
                <label>
                    <input type="checkbox" class="custom-checkbox" name="customer" value="Customer" <?php if ($_smarty_tpl->tpl_vars['contact']->value->type == 'Customer,Supplier' || $_smarty_tpl->tpl_vars['contact']->value->type == 'Customer') {?> checked <?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>

                </label>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['config']->value['suppliers'] == '1') {?>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" class="custom-checkbox" name="supplier" value="Supplier"  <?php if ($_smarty_tpl->tpl_vars['contact']->value->type == 'Customer,Supplier' || $_smarty_tpl->tpl_vars['contact']->value->type == 'Supplier') {?> checked <?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Supplier'];?>

                    </label>
                </div>
            <?php }?>
        </div>

        <div class="form-group"><label for="tags"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tags'];?>
</span></label>

            <select name="tags[]" id="tags"  class="form-control" multiple="multiple">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['tag']->value['text'],$_smarty_tpl->tpl_vars['contacttags']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </select>
        </div>



        <div class="form-group">
            <button class="btn btn-primary" type="submit" id="submit"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
        </div>



        <input type="hidden" name="fcid" id="fcid" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
">


    </form>


<?php
}
}
/* {/block "inner_content"} */
/* {block "script"} */
class Block_2095499074610ab89f545097_46443037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2095499074610ab89f545097_46443037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {

            $("#country").select2();


            $('#tags').select2({
                tags: true,
                tokenSeparators: [','],
            });

            $('#company_id').select2();


            let $edit_form = $('#edit_form');

            $edit_form.on('submit',function (event) {
                event.preventDefault();
                $.post(base_url + 'contacts/edit-post/', $edit_form.serialize())
                    .done(function (data) {

                        if ($.isNumeric(data)) {

                            location.reload();
                        }
                        else {

                            $("#emsgbody").html(data);
                            $("#emsg").show("slow");
                        }
                    });
            });


        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
