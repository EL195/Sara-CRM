<?php
/* Smarty version 3.1.39, created on 2021-08-31 10:15:43
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_expense.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612e398f0fe346_71065697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50dc859061c2973245b1753d2f286d2d7e180329' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_expense.tpl',
      1 => 1607295443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612e398f0fe346_71065697 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <div class="panel shadow-none mb-0">
        <div class="panel-hdr">
            <h2>
                <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Expense'];?>

            </h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">

                <form class="form-horizontal" method="post" id="project_expense_form" role="form">
                    <div class="form-group">
                        <label for="account"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</span></label>
                        <select id="account" name="account_id" class="form-control">
                            <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose an Account'];?>
</option>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accounts']->value, 'account');
$_smarty_tpl->tpl_vars['account']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['account']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['account']->value->account;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="code"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Code'];?>
</span></label>
                        <input type="text" class="form-control" id="code" name="code" value="<?php echo predict_next_serial($_smarty_tpl->tpl_vars['config']->value,'expense');?>
">
                    </div>



                    <div class="form-group">
                        <label for="description"><span class="h6 "><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</span></label>
                        <input type="text" class="form-control" id="description" name="description">


                    </div>




                    <div class="row my-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="date"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</span></label>
                                <input type="text" class="form-control datepicker"  value="<?php echo date('Y-m-d');?>
" name="date" id="date" data-date-format="yyyy-mm-dd" data-auto-close="true">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="currency"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency'];?>
</span></label>
                                <select id="currency" name="currency" class="form-control">

                                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['iso_code'];?>
" <?php if ($_smarty_tpl->tpl_vars['config']->value['home_currency'] == $_smarty_tpl->tpl_vars['currency']->value['iso_code']) {?>selected<?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]))) {?>
                                            data-a-sign="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['symbol'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['thousands_separator'];?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['decimal_mark'];?>
" <?php if (($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['symbol_first'] == true)) {?> data-p-sign="p" <?php } else { ?> data-p-sign="s" <?php }?>
                                                <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['iso_code'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="amount"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</span></label>
                                <input type="text" class="form-control amount" id="amount" name="amount">
                            </div>
                        </div>
                    </div>













                    <div class="row my-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="company"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</span></label>
                                <select id="company" name="company_id" class="form-control">
                                    <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['company']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['company']->value->company_name;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="payee"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payee'];?>
</span></label>
                                <select id="payee" name="payee" class="form-control">
                                    <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Contact'];?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payees']->value, 'payee');
$_smarty_tpl->tpl_vars['payee']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payee']->value) {
$_smarty_tpl->tpl_vars['payee']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['payee']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['payee']->value->account;?>
 <?php if ($_smarty_tpl->tpl_vars['payee']->value->email) {?> (<?php echo $_smarty_tpl->tpl_vars['payee']->value->email;?>
) <?php }?></option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="staff_id"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Staff'];?>
</span></label>
                                <select id="staff_id" name="staff_id" class="form-control">
                                    <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffs']->value, 'staff');
$_smarty_tpl->tpl_vars['staff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['staff']->value) {
$_smarty_tpl->tpl_vars['staff']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['staff']->value->fullname;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>
                        </div>
                    </div>




                    <div class="row my-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cats"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Category'];?>
</span></label>
                                <select id="cats" name="category" class="form-control">
                                    <option value="Uncategorized"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Uncategorized'];?>
</option>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pmethod"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</span></label>
                                <select id="pmethod" name="method" class="form-control">
                                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Payment Method'];?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['methods']->value, 'method');
$_smarty_tpl->tpl_vars['method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['method']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['method']->value->name;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <label for="status"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</span></label>
                        <select class="form-control" name="status" id="status">
                            <option value="Cleared"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cleared'];?>
</option>
                            <option value="Uncleared"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Uncleared'];?>
</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ref"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Ref'];?>
#</span></label>
                        <input type="text" class="form-control" id="ref" name="ref">
                    </div>




                    <div class="form-group">
                        <input type="hidden" name="attachments" id="attachments" value="">
                        <input type="hidden" name="project_id" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['project']->value->id;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
">
                        <button type="submit" id="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
<?php }
}
