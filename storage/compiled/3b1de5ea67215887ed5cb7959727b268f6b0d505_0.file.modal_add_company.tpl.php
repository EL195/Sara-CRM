<?php
/* Smarty version 3.1.39, created on 2021-04-20 19:16:46
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/modal_add_company.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607f60de437ac6_48706790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b1de5ea67215887ed5cb7959727b268f6b0d505' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/modal_add_company.tpl',
      1 => 1595764369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607f60de437ac6_48706790 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <div class="panel shadow-none mb-0">
        <div class="panel-hdr">
            <h2>
                <?php if ($_smarty_tpl->tpl_vars['f_type']->value == 'edit') {?>
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Company'];?>

                <?php }?>
            </h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <form class="form-horizontal" id="ib_modal_form">


                    <div class="row">
                        <div class="col-md-6">



                            <div class="form-group">
                                <label for="company_name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
<small class="red">*</small></label>

                                <div><input type="text" id="company_name" name="company_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['company_name'];?>
">

                                </div>


                            </div>


                            <div class="form-group">
                                <label for="code"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Code'];?>
<small class="red">*</small></label>

                                <div><input type="text" id="code" name="code" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['code'];?>
">

                                </div>


                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>


                                <div class="form-group">
                                    <label for="business_number"><?php echo $_smarty_tpl->tpl_vars['config']->value['label_business_number'];?>
</label>

                                    <div><input type="text" id="business_number" name="business_number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['business_number'];?>
">

                                    </div>


                                </div>


                            <?php }?>


                            <div class="form-group"><label for="url"><?php echo $_smarty_tpl->tpl_vars['_L']->value['URL'];?>
</label>

                                <div><input type="text" id="url" name="url" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
">

                                </div>


                            </div>


                            <div class="form-group"><label for="email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>
                                <div>
                                    <input type="text" id="email" name="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['email'];?>
">
                                </div>






                            </div>


                            <div class="form-group"><label for="phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>

                                <div><input type="text" id="phone" name="phone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['phone'];?>
">

                                </div>


                            </div>


                            <?php if ($_smarty_tpl->tpl_vars['config']->value['fax_field'] == '1') {?>


                                <div class="form-group"><label for="fax"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Fax'];?>
</label>

                                    <div><input type="text" id="fax" name="fax" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['fax'];?>
">

                                    </div>


                                </div>



                            <?php }?>









                        </div>

                        <div class="col-md-6">

                            <div class="form-group"><label for="logo_url"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo URL'];?>
</label>

                                <div><input type="text" id="logo_url" name="logo_url" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['logo_url'];?>
">

                                </div>


                            </div>

                            <div class="form-group"><label for="c_address1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>

                                <input type="text" id="c_address1" name="address1" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['address1'];?>
">


                            </div>

                            <div class="form-group"><label for="c_city"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</label>

                                <div><input type="text" id="c_city" name="city" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['city'];?>
">

                                </div>


                            </div>

                            <div class="form-group"><label for="c_state"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</label>


                                <div><input type="text" id="c_state" name="state" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['state'];?>
"></div>


                            </div>

                            <div class="form-group"><label for="c_zip"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
</label>

                                <input type="text" id="c_zip" name="zip" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['zip'];?>
">


                            </div>

                            <div class="form-group"><label for="c_country"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</label>

                                <select name="country" id="c_country" class="form-control country">
                                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Country'];?>
</option>
                                    <?php echo $_smarty_tpl->tpl_vars['countries']->value;?>

                                </select>


                            </div>



                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary modal_submit mt-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                            </div>
                        </div>
                    </div>



                    <input type="hidden" name="f_type" id="f_type" value="<?php echo $_smarty_tpl->tpl_vars['f_type']->value;?>
">
                    <input type="hidden" name="cid" id="cid" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['cid'];?>
">

                </form>
            </div>
        </div>
    </div>
</div>
<?php }
}
