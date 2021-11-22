<?php
/* Smarty version 3.1.39, created on 2021-03-24 16:01:22
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/ajax.contact-summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605b9a92cd4d08_67941455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf1ff0f2a3a90b6566ca3128db8d06712025a505' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/ajax.contact-summary.tpl',
      1 => 1597096719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605b9a92cd4d08_67941455 (Smarty_Internal_Template $_smarty_tpl) {
?>




<div class="row">
    <div class="col-md-6 text-black">

        <div>
            <br>



            <strong class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full Name'];?>
: </strong> <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>
 <br>
            <?php if (($_smarty_tpl->tpl_vars['d']->value['company']) != '') {?>
                <strong class="h5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
: </strong> <?php echo $_smarty_tpl->tpl_vars['d']->value['company'];?>
 <br>
            <?php }?>

            <strong class="h5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['email']) != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
 <?php } else { ?> N/A <?php }?> <br>

            <?php if ($_smarty_tpl->tpl_vars['d']->value['secondary_email'] != '') {?>

                <strong class="h5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Secondary Email'];?>
: </strong> <?php echo $_smarty_tpl->tpl_vars['d']->value['secondary_email'];?>
 <br>

            <?php }?>

            <strong class="h5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['phone']) != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['phone'];?>
 <?php } else { ?> N/A <?php }?> <br>

            <?php if ($_smarty_tpl->tpl_vars['config']->value['fax_field'] == '1') {?>
                <strong class="h5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Fax'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['fax']) != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['fax'];?>
 <?php } else { ?> N/A <?php }?> <br>
            <?php }?>

            <strong class="h5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['address']) != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['address'];?>
 <?php } else { ?> N/A <?php }?> <br>
            <strong class="h5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['city']) != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['city'];?>
 <?php } else { ?> N/A <?php }?> <br>
            <strong class="h5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['state']) != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['state'];?>
 <?php } else { ?> N/A <?php }?> <br>
            <strong class="h5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['zip']) != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['zip'];?>
 <?php } else { ?> N/A <?php }?> <br>
            <strong class="h5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['country']) != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['country'];?>
 <?php } else { ?> N/A <?php }?> <br>
            <strong class="h5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tags'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['tags']) != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['tags'];?>
 <?php } else { ?> N/A <?php }?> <br>
            <strong class="h5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>
: </strong> <?php if (($_smarty_tpl->tpl_vars['d']->value['gname']) != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['gname'];?>
 <?php } else { ?> N/A <?php }?> <br>


            <p class="mt-3">
                <strong class="h5 text-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Primary Contact'];?>
?</strong>
            </p>
        <div class="form-group mb-3">

            <label class="switch s-icons s-outline s-outline-primary">
                <input type="checkbox" id="is_primary_contact" <?php if ($_smarty_tpl->tpl_vars['d']->value['is_primary_contact'] == '1') {?>checked<?php }?>>
                <span class="slider round"></span>
            </label>

        </div>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cf']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>

                <strong><?php echo $_smarty_tpl->tpl_vars['c']->value['fieldname'];?>
: </strong> <?php if (get_custom_field_value($_smarty_tpl->tpl_vars['c']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']) != '') {?> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['c']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']);?>
 <?php } else { ?> N/A <?php }?> <br>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
    </div>
    <div class="col-md-6">
        <div class="p-2">
            <div class="form-group">
                <textarea class="form-control" id="contact_note" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Contact Notes'];?>
..." rows="6"><?php echo $_smarty_tpl->tpl_vars['d']->value['notes'];?>
</textarea>
            </div>



        </div>
    </div>
</div>




<hr>

<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
/edit/" class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>


<?php if ($_smarty_tpl->tpl_vars['config']->value['add_fund'] == '1') {?>
    <hr>

    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
 : <span class="amount"><?php echo $_smarty_tpl->tpl_vars['d']->value->balance;?>
</span></h3>
    <a href="javascript:void(0)" class="btn btn-primary add_fund"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Fund'];?>
</a>
    <a href="javascript:void(0)" class="btn btn-danger return_fund"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Return Fund'];?>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['config']->value['client_dashboard'] == '1') {?>
    <hr>

    <?php if ($_smarty_tpl->tpl_vars['d']->value->autologin != '') {?>
        <form class="form-horizontal" method="post">
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="form-group h5">
                        <label for="auto_login_url"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Auto Login URL'];?>
</label>
                        <input class="form-control" type="text" id="auto_login_url" name="auto_login_url" value="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/autologin/<?php echo $_smarty_tpl->tpl_vars['d']->value->autologin;?>
">
                    </div>
                    <p class="help-block">
                        <a class="h6 text-info" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/autologin/<?php echo $_smarty_tpl->tpl_vars['d']->value->autologin;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Login As Customer'];?>
</a> |
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/revoke_auto_login/<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Revoke Auto Login'];?>
</a> |
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/gen_auto_login/<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Re Generate URL'];?>
</a>
                    </p>
                </div>
            </div>

        </form>

        <?php echo $_smarty_tpl->tpl_vars['extra_html_1']->value;?>


    <?php } else { ?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/gen_auto_login/<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
/" class="md-btn md-btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Create Auto Login URL'];?>
</a>
    <?php }
}?>






<?php if ($_smarty_tpl->tpl_vars['config']->value['accounting'] == '1') {?>
    <hr>


    <table class="table table-striped margin bottom invoice-total">
        <thead>
        <tr>

            <th class="h5" colspan="3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accounting Summary'];?>
</th>

        </tr>
        </thead>
        <tbody>
        <tr>

            <td class="h5"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Income'];?>

            </td>
            <td class="text-center"><span class="h5 text-success amount" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
" data-a-pad="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 " data-d-group="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
"><?php echo $_smarty_tpl->tpl_vars['ti']->value;?>
</span></td>

        </tr>
        <tr>

            <td class="h5"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Expense'];?>

            </td>
            <td class="text-center"><span class="h5 text-danger amount" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
" data-a-pad="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 " data-d-group="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
"><?php echo $_smarty_tpl->tpl_vars['te']->value;?>
</span></td>


        </tr>



        </tbody>
    </table>

    <table class="table invoice-total">
        <tbody>

        <tr>
            <td class="h5"><strong><?php echo $_smarty_tpl->tpl_vars['happened']->value;?>
 </strong></td>
            <td class="text-center"><strong><span class=" h5 text-info amount" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
" data-a-pad="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 " data-d-group="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
" ><?php echo $_smarty_tpl->tpl_vars['d_amount']->value;?>
</span></strong></td>
        </tr>
        </tbody>
    </table>
<?php }
}
}
