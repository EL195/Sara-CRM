<?php
/* Smarty version 3.1.39, created on 2021-09-19 08:56:27
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/contacts_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6147337b49ae80_21235400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4da6ad153bc775b70910e1c32d7cfc85d851da3d' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/contacts_add.tpl',
      1 => 1631378385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6147337b49ae80_21235400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11724298566147337b458b45_96887422', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16578496706147337b45aa07_11184330', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5957660216147337b498719_39544405', "script");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_11724298566147337b458b45_96887422 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_11724298566147337b458b45_96887422',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_16578496706147337b45aa07_11184330 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16578496706147337b45aa07_11184330',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">

        <div class="col-md-12">



            <div class="panel">
                <div class="panel-hdr">
                    <h2><span></span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Contact'];?>
</h2>
                    <div class="panel-toolbar">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/import_csv/" class="btn btn-primary"><i class="fal fa-upload"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Import Contacts'];?>
</a>
                    </div>

                </div>

                <div class="panel-container show" id="ibox_form">

                    <div class="panel-content">

                        <div class="px-2">
                            <div class="alert alert-danger" id="emsg">
                                <span id="emsgbody"></span>
                            </div>

                            <form id="rform">

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group row">
                                            <label for="account" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full Name'];?>
</span><span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" id="account" name="account" class="form-control" autofocus>
                                            </div>
                                        </div>


                                        
                                        
                                        
                                        
                                        <div class="form-group row">
                                            <label for="code" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Code'];?>
</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" id="code" name="code" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['predict_customer_number']->value;?>
">
                                            </div>
                                        </div>




                                        
                                        
                                        
                                        <div class="form-group row">
                                            <label for="display_name" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['config']->value['contact_extra_field'];?>
</span> </label>
                                            <div class="col-sm-9">
                                                <input type="text" id="display_name" name="display_name" class="form-control">
                                            </div>
                                        </div>


                                        


                                        

                                        
                                        <div class="form-group row">
                                            <label for="cid" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</span> </label>
                                            <div class="col-sm-9">
                                                <select id="cid" name="cid" class="form-control">
                                                    <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['c_selected_id']->value == ($_smarty_tpl->tpl_vars['company']->value['id'])) {?>selected<?php }?>>
                                                            <?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>

                                                        </option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>



                                        


                                                                                                                                                                                                                                                


                                        



                                        <?php if ($_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>
                                            <div class="form-group row">
                                                <label for="business_number" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['config']->value['label_business_number'];?>
</span> </label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="business_number" name="business_number" class="form-control">
                                                </div>
                                            </div>

                                            
                                            

                                            
                                        <?php }?>

                                        <div class="form-group row">
                                            <label for="type" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</span> </label>
                                            <div class="col-sm-9">
                                                <div class="custom-control my-2 custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="defaultChecked" name="customer" value="Customer" <?php if ($_smarty_tpl->tpl_vars['contact_type']->value == 'customer') {?>checked<?php }?>>
                                                    <label class="custom-control-label" for="defaultChecked"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</span></label>
                                                </div>

                                                <div class="custom-control my-2 custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="input_supplier" name="supplier" value="Supplier" <?php if ($_smarty_tpl->tpl_vars['contact_type']->value == 'supplier') {?>checked<?php }?>>
                                                    <label class="custom-control-label" for="input_supplier"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Supplier'];?>
</span></label>
                                                </div>

                                            </div>
                                        </div>




                                        
                                                                                                                                                                
                                                                                                                                                                

                                        



                                        
                                        
                                        



                                        
                                        
                                        



                                        
                                        
                                        


                                        <?php if ($_smarty_tpl->tpl_vars['config']->value['fax_field'] == '1') {?>

                                            <div class="form-group row">
                                                <label for="fax" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Fax'];?>
</span></label>
                                                <div class="col-sm-9">

                                                    <input type="text" id="fax" name="fax" class="form-control">


                                                </div>
                                            </div>


                                            
                                            
                                            
                                        <?php }?>



                                        <div class="form-group row">
                                            <label for="address" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="address" name="address" class="form-control">


                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="city" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="city" name="city" class="form-control">


                                            </div>
                                        </div>




                                        
                                        
                                        
                                        <div class="form-group row">
                                            <label for="state" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="state" name="state" class="form-control">


                                            </div>
                                        </div>


                                        
                                        
                                        
                                        <div class="form-group row">
                                            <label for="zip" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="zip" name="zip" class="form-control">
                                            </div>
                                        </div>



                                        
                                        
                                                                                <div class="form-group row">
                                            <label for="country" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <select name="country" id="country" class="form-control">
                                                    <option value=""><span></span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Country'];?>
</option>
                                                    <?php echo $_smarty_tpl->tpl_vars['countries']->value;?>

                                                </select>
                                            </div>
                                        </div>



                                        


                                                                                                                                                                

                                        
                                        
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fs']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
                                            <div class="form-group row">
                                                <label class="form-label col-sm-3" for="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['f']->value['fieldname'];?>
</span></label>
                                                <?php if (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'text') {?>


                                                    <div class="col-sm-9">

                                                        <input type="text" id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control">
                                                        <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                                                            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                                                        <?php }?>
                                                    </div>





                                                <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'password') {?>


                                                    <input type="password" id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control">
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
"><?php echo $_smarty_tpl->tpl_vars['fo']->value;?>
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
" class="form-control" rows="3"></textarea>
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

                                        
                                                                                                                                                                                                                                                
                                                                                                                                                            </div>
                                    <div class="col-md-6 col-sm-12">

                                        <div class="form-group row">
                                            <label for="email" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="email" name="email" class="form-control">


                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="secondary_email" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Secondary Email'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="secondary_email" name="secondary_email" class="form-control">


                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="text" id="phone" name="phone" class="form-control">


                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="currency" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <select id="currency" name="currency" class="form-control">

                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
"
                                                                <?php if ($_smarty_tpl->tpl_vars['config']->value['home_currency'] == ($_smarty_tpl->tpl_vars['currency']->value['cname'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['cname'];?>
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
                                        </div>


                                        <div class="form-group row">
                                            <label for="group" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>
 </span></label>
                                            <div class="col-sm-9">

                                                <select class="form-control" name="group" id="group">
                                                    <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gs']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['g_selected_id']->value == ($_smarty_tpl->tpl_vars['g']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['g']->value['gname'];?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                                <span class="help-block "><a href="#" id="add_new_group" class="text-info"> <span class="h6 text-info"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Group'];?>
</a></span> </span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="owner_id" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Owner'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <select class="form-control" name="owner_id" id="owner_id">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['owners']->value, 'owner');
$_smarty_tpl->tpl_vars['owner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['owner']->value) {
$_smarty_tpl->tpl_vars['owner']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['owner']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['owner']->value->id == $_smarty_tpl->tpl_vars['user']->value->id) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['owner']->value->fullname;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>



                                        

                                                                                                                                                                                                        
                                        



                                        <?php if ($_smarty_tpl->tpl_vars['config']->value['customer_custom_username']) {?>

                                            <div class="form-group row">
                                                <label for="zip" class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
 </span></label>
                                                <div class="col-sm-9">

                                                    <input type="text" id="username" name="username" class="form-control">
                                                </div>
                                            </div>

                                            
                                            

                                                                                    <?php }?>

                                        <div class="form-group row">
                                            <label for="password"class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</span> </label>
                                            <div class="col-sm-9">

                                                <input type="password" id="password" name="password" class="form-control">
                                            </div>
                                        </div>

                                        
                                        

                                                                                <div class="form-group row">
                                            <label for="cpassword"class="col-sm-3"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm Password'];?>
</span></label>
                                            <div class="col-sm-9">

                                                <input type="password" id="cpassword" name="cpassword" class="form-control">
                                            </div>
                                        </div>






                                        <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['add_contact_remove_welcome_email']))) {?>


                                            <input type="hidden" name="send_client_signup_email" id="send_client_signup_email" value="No">
                                        <?php } else { ?>

                                            <div class="form-group row">
                                                <label for="cpassword"class="col-sm-3"></label>
                                                <div class="col-sm-9">

                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" name="send_client_signup_email" class="custom-control-input" id="send_client_signup_email">
                                                        <label class="custom-control-label" for="send_client_signup_email"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome Email'];?>
</span></label>
                                                    </div>
                                                </div>
                                            </div>


                                        <?php }?>




                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">


                                            <button class="btn btn-primary mt-3 mr-3" type="submit" id="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>


                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>




<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_5957660216147337b498719_39544405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_5957660216147337b498719_39544405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $(".progress").hide();
            $("#emsg").hide();
            var _url = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
';





            $('#tags').select2({
                tags: true,
                tokenSeparators: [','],
                theme: "bootstrap"
            });

            var $cid = $('#cid');

            $cid.select2();

            $country = $("#country");

            $country.select2();


            //
            $("#submit").click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message:block_msg });
                $.post(base_url + 'contacts/add-post/', $( "#rform" ).serialize())
                    .done(function (data) {
                        var sbutton = $("#submit");
                        if ($.isNumeric(data)) {

                            window.location = base_url + 'contacts/view/' + data;
                        }
                        else {
                            $('#ibox_form').unblock();
                            var body = $("html, body");
                            body.animate({ scrollTop:0 }, '1000', 'swing');
                            $("#emsgbody").html(data);
                            $("#emsg").show("slow");
                        }
                    });
            });





            <?php if ($_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>


            var $business_number = $("#business_number");

            var $address = $("#address");

            var $city = $("#city");

            var $state = $("#state");

            var $zip = $("#zip");



            function getBusinessDetails() {

                if($cid.val() === '0'){
                   // $business_number.val('');
                    return;
                }

                $.getJSON( base_url + "contacts/get_company_details/" +  $cid.val(), function( data ) {

                    console.log(data);

                    if(data.success === false){

                    }
                    else{

                        $business_number.val(data.business_number);

                        $address.val(data.address1);

                        $city.val(data.city);

                        $state.val(data.state);

                        $zip.val(data.zip);

                        $country.val(data.country).trigger('change');

                    }

                });
            }

            getBusinessDetails();


            $cid.change(function () {

                getBusinessDetails();


            });


            <?php }?>






            var ib_form_bootbox = "<form class=\"form-horizontal push-10\" method=\"post\" onsubmit=\"return false;\">\n    <div class=\"form-group\">\n        <div class=\"col-xs-12\">\n            <div class=\"form-material floating\">\n                <input class=\"form-control\" type=\"text\" id=\"group_name\" name=\"group_name\">\n                \n                           </div>\n        </div>\n    </div>\n\n</form>";


            var box =   bootbox.dialog({
                    title: 'Add new group',
                    message: ib_form_bootbox,
                    buttons: {
                        success: {
                            label: "Save",
                            className: "btn-primary",
                            callback: function () {
                                // var name = $('#name').val();
                                // var answer = $("input[name='awesomeness']:checked").val();
                                // Example.show("Hello " + name + ". You've chosen <b>" + answer + "</b>");

                                var group_name_val = $('#group_name').val();

                                if(group_name_val != ''){


                                    $.post( _url + "contacts/add_group/", { group_name: group_name_val })
                                        .done(function( data ) {

                                            if ($.isNumeric(data)) {

                                                window.location = _url + 'contacts/add/customer/' + data + '/' + $cid.val();

                                            }

                                            else {
                                                bootbox.alert(data);
                                            }

                                        });


                                }


                            }
                        }
                    },
                    show: false
                }
            );





            $("#add_new_group").click(function(e){

                e.preventDefault();

                box.modal('show');


            });





        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
