<?php
/* Smarty version 3.1.39, created on 2021-10-05 18:10:33
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/modal_lead.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615ccd596b3231_00630453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd6ba3bbec1e3b35340b4ca5bc1f5143e48a6f4c' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/modal_lead.tpl',
      1 => 1594210124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615ccd596b3231_00630453 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <div class="panel shadow-none mb-0 rounded-0">
        <div class="panel-hdr">
            <h2>
                <?php if ($_smarty_tpl->tpl_vars['act']->value == 'edit') {?>
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>

                <?php } elseif ($_smarty_tpl->tpl_vars['act']->value == 'view') {?>
                    <?php echo $_smarty_tpl->tpl_vars['lead']->value->salutation;?>
 <?php echo $_smarty_tpl->tpl_vars['lead']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['lead']->value->middle_name;?>
 <?php echo $_smarty_tpl->tpl_vars['lead']->value->last_name;?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Lead'];?>

                <?php }?>
            </h2>
        </div>

        <div class="panel-container">
            <div class="panel-content">



                <?php if ($_smarty_tpl->tpl_vars['act']->value == 'edit' || $_smarty_tpl->tpl_vars['act']->value == 'new') {?>

                    <form class="form-horizontal" id="ib_modal_form">


                        <div class="row">


                            <div class="col-md-12">



                                <div class="form-group"><label for="status"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</label>
                                    <select class="custom-select" id="status" name="status">

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ls']->value, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['act']->value == 'edit') {?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['sname'];?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value['status'] == $_smarty_tpl->tpl_vars['s']->value['sname']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['s']->value['sname'];?>
</option>
                                            <?php } else { ?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['sname'];?>
" <?php if ($_smarty_tpl->tpl_vars['s']->value['is_default'] == '1') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['s']->value['sname'];?>
</option>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    </select>
                                </div>


                                <div class="form-row mb-3">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="salutation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Salutation'];?>
</label>
                                            <select class="custom-select" id="salutation" name="salutation">
                                                <option value="None">--<?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
--</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['salutations']->value, 'salutation');
$_smarty_tpl->tpl_vars['salutation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['salutation']->value) {
$_smarty_tpl->tpl_vars['salutation']->do_else = false;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['act']->value == 'edit') {?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['salutation']->value['sname'];?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value['salutation'] == $_smarty_tpl->tpl_vars['salutation']->value['sname']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['salutation']->value['sname'];?>
</option>
                                                    <?php } else { ?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['salutation']->value['sname'];?>
"><?php echo $_smarty_tpl->tpl_vars['salutation']->value['sname'];?>
</option>
                                                    <?php }?>

                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group"><label for="first_name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['First Name'];?>
</label>
                                            <input type="text" id="first_name" name="first_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['first_name'];?>
">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group"><label for="last_name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Last Name'];?>
<small class="red">*</small></label>

                                            <input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['last_name'];?>
">

                                        </div>
                                    </div>
                                </div>







                                <div class="form-group"><label for="title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</label>
                                    <input type="text" id="title" name="title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
">
                                </div>

                                <div class="form-group"><label for="company"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</label>
                                    <select class="custom-select" id="company" name="company">
                                        <option value="None">--<?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
--</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value['company'] == $_smarty_tpl->tpl_vars['company']->value['company_name']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>

                                <div class="form-group"><label for="email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>
                                    <input type="text" id="email" name="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['email'];?>
">
                                </div>

                                <div class="form-group"><label for=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>
                                    <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['phone'];?>
">
                                </div>



                                <div class="form-group"><label for="source"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Source'];?>
</label>
                                    <select class="custom-select" id="source" name="source">
                                        <option value="None">--<?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
--</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sources']->value, 'source');
$_smarty_tpl->tpl_vars['source']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['source']->value) {
$_smarty_tpl->tpl_vars['source']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['source']->value['sname'];?>
"><?php echo $_smarty_tpl->tpl_vars['source']->value['sname'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>


                                <div class="form-group"><label for="industry"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Industry'];?>
</label>
                                    <select class="custom-select" id="industry" name="industry">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['industries']->value, 'industry');
$_smarty_tpl->tpl_vars['industry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['industry']->value) {
$_smarty_tpl->tpl_vars['industry']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['industry']->value['industry'];?>
" <?php if ($_smarty_tpl->tpl_vars['val']->value['industry'] == $_smarty_tpl->tpl_vars['industry']->value['industry']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['industry']->value['industry'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>


                                                                                                                                                                
                                                                                                                                                                


                                <fieldset>
                                    <legend><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</legend>

                                    <div class="form-group"><label for="street"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Street'];?>
</label>
                                        <textarea class="form-control" id="street" name="street" rows="2"></textarea>
                                    </div>

                                    <div class="form-group"><label for="city"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</label>
                                        <input type="text" id="company" name="city" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['city'];?>
">
                                    </div>

                                    <div class="form-group"><label for="state"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</label>
                                        <input type="text" id="state" name="state" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['state'];?>
">
                                    </div>

                                    <div class="form-group"><label for="zip"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
</label>
                                        <input type="text" id="zip" name="zip" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['zip'];?>
">
                                    </div>

                                    <div class="form-group"><label for="country"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</label>
                                        <input type="text" id="country" name="country" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['country'];?>
">
                                    </div>

                                </fieldset>

                                <fieldset class="mt-3">
                                    <legend><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</legend>

                                    <div class="form-group"><label for="memo"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Memo'];?>
</label>
                                        <textarea class="form-control" id="memo" name="memo" rows="4"></textarea>
                                    </div>


                                </fieldset>



                            </div>




                        </div>




                        <input type="hidden" name="act" id="act" value="<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
">
                        <input type="hidden" name="lid" id="lid" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['lid'];?>
">

                        <div class="form-group">
                            <button class="btn btn-primary modal_submit my-3" type="submit" id="modal_submit"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                        </div>

                    </form>


                <?php } else { ?>


                    <div class="row">
                        <div class="col-md-3 ib_profile_width">

                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/profile-place-holder.jpg" class="rounded-circle img-fluid" alt=" ">

                        </div>

                        <div class="col-md-9">

                            <h5><?php echo $_smarty_tpl->tpl_vars['lead']->value->salutation;?>
 <?php echo $_smarty_tpl->tpl_vars['lead']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['lead']->value->middle_name;?>
 <?php echo $_smarty_tpl->tpl_vars['lead']->value->last_name;?>
</h5>


                            <div id="application_ajaxrender" style="min-height: 200px;">
                                <p>

                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full Name'];?>
: </strong> <?php echo $_smarty_tpl->tpl_vars['lead']->value->salutation;?>
 <?php echo $_smarty_tpl->tpl_vars['lead']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['lead']->value->middle_name;?>
 <?php echo $_smarty_tpl->tpl_vars['lead']->value->last_name;?>
 <br>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
: </strong> <?php echo $_smarty_tpl->tpl_vars['lead']->value->company;?>
 <br>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
: </strong>  <?php echo $_smarty_tpl->tpl_vars['lead']->value->email;?>
  <br>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
: </strong>  <?php echo $_smarty_tpl->tpl_vars['lead']->value->phone;?>
  <br>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
: </strong>  <?php echo $_smarty_tpl->tpl_vars['lead']->value->street;?>
  <br>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
: </strong>  <?php echo $_smarty_tpl->tpl_vars['lead']->value->city;?>
  <br>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
: </strong>  <?php echo $_smarty_tpl->tpl_vars['lead']->value->state;?>
  <br>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
: </strong>  <?php echo $_smarty_tpl->tpl_vars['lead']->value->zip;?>
  <br>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
: </strong>  <?php echo $_smarty_tpl->tpl_vars['lead']->value->country;?>
  <br>




                                </p>

                                <hr>

                                <a href="#" class="btn btn-primary act_convert_to_customer"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Convert to Customer'];?>
</a>

                                <input type="hidden" name="v_lid" id="v_lid" value="<?php echo $_smarty_tpl->tpl_vars['lead']->value->id;?>
">

                                <hr>

                                <textarea class="form-control" id="v_memo" name="v_memo" rows="6"><?php echo $_smarty_tpl->tpl_vars['lead']->value->memo;?>
</textarea>

                                <button type="button" id="memo_update" class="btn btn-primary btn-block mt-3 act_memo_update"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>


                            </div>



                        </div>

                    </div>




                <?php }?>




            </div>
        </div>

    </div>
</div>
<?php }
}
