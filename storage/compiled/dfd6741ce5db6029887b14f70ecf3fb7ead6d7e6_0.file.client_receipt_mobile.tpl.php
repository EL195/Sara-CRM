<?php
/* Smarty version 3.1.39, created on 2021-05-12 19:58:27
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_receipt_mobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609c6ba36c68c5_87384443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfd6741ce5db6029887b14f70ecf3fb7ead6d7e6' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_receipt_mobile.tpl',
      1 => 1556267287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609c6ba36c68c5_87384443 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<style>
    body {
        font-family: 'Helvetica Neue', Helvetica, "Segoe UI", Arial, sans-serif;
        font-size: 13px;
    }
</style>

<div class="container" style="margin-top: 40px;">
    <div class="row">
        <div class="col-md-6 col-xs-6">&nbsp;</div>
        <div class="col-md-6 col-xs-6" style="text-align: right;">Date : <?php echo date($_smarty_tpl->tpl_vars['config']->value['df']);?>
</div>
    </div>
</div>

<div class="container" style="margin-top: 60px;">
    <div class="row">
        <div class="col-md-7 col-xs-7" style="text-align: right;">
            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];?>
" alt="Logo">
        </div>
        <div class="col-md-5 col-xs-5" style="text-align: right; padding-top: 20px;">
            <div style="font-size: 18px; font-weight: bold; padding-bottom: 6px;"> <?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
 </div>
            <div style="padding-bottom: 6px;"> <?php echo $_smarty_tpl->tpl_vars['config']->value['caddress'];?>
</div>
                    </div>
    </div>
</div>

<div class="container" style="margin-top: 60px;">
    <div class="row">
        <div style="text-align: center; font-size: 30px; font-weight: 300; letter-spacing: 3;"> TRANSACTION RECEIPT </div>
        <div style="text-align: center; font-size: 16px; font-weight: 500; letter-spacing: 1;"><b><?php if (($_smarty_tpl->tpl_vars['transaction']->value->type) == 'Expense') {?>Expense Voucher <?php } else { ?>Deposit Voucher<?php }?> </b> </div>
    </div>
</div>

<div class="container" style="margin-top: 60px;">
    <div class="row">
        <div class="title-section" style="font-size: 16px; letter-spacing: 1; border-bottom: 2px #666666 solid; padding-bottom: 10px;"><?php if (($_smarty_tpl->tpl_vars['transaction']->value->type) == 'Expense') {?>Spent TO <?php } else { ?>Recieved From<?php }?> </div>
        <table style="width: 100%; margin-top: 20px;">
            <thead style="letter-spacing: 1; font-weight: 300;">
            <tr>
                <td style="padding: 10px 0;"> NAME </td>
                                <td style="text-align: right;"> Transaction ID: # <?php echo $_smarty_tpl->tpl_vars['transaction']->value->id;?>
</td>
            </tr>
            </thead>
            <tbody style="font-size: 22px;">
            <tr>
                <td> <?php if ($_smarty_tpl->tpl_vars['transaction']->value->payer == '') {?> n/a <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['transaction']->value->payer;?>
 <?php }?> </td>
                                <td style="text-align: right;"> &nbsp; </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="container" style="margin-top: 60px;">
    <div class="row">
        <h4>For: <?php echo $_smarty_tpl->tpl_vars['transaction']->value->description;?>
</h4>
        <hr>
        <div class="title-section" style="font-size: 16px; letter-spacing: 1; border-bottom: 2px #666666 solid; padding-bottom: 10px;"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Transaction Details'];?>
  </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-6 col-xs-6">
                <div style="letter-spacing: 1; font-weight: 300; padding: 10px 0;"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
 </div>
                <div style="font-size: 22px; "> <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['transaction']->value->date));?>
 </div>
            </div>
            <div class="col-md-6 col-xs-6" style="text-align: right;">
                <div style="letter-spacing: 1; font-weight: 300; padding: 10px 0;"> REFERENCE </div>
                <div style="font-size: 22px;"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
: <?php echo $_smarty_tpl->tpl_vars['transaction']->value->method;?>
 <br>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['_L']->value['Ref'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
: <?php if ($_smarty_tpl->tpl_vars['transaction']->value->ref == '') {?>n/a<?php } else {
echo $_smarty_tpl->tpl_vars['transaction']->value->ref;
}?> </div>
            </div>
            <hr>
        </div>
        <hr style="border-top: 1px solid #666666;">
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-6 col-xs-6">
                <div style="letter-spacing: 1; font-weight: 300; padding: 10px 0;"> TRANSACTION AMOUNT </div>
                <div style="font-size: 22px;"> <?php echo ib_money_format($_smarty_tpl->tpl_vars['transaction']->value->amount,$_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['currency_symbol']->value);?>
 </div>
            </div>
                                                            <hr>
        </div>
        <hr style="border-top: 1px solid #666666;">
    </div>
</div>

<div class="container" style="margin-top: 50px; font-weight: 300;">
    <div class="col-md-12" style="text-align: center;">
        <div> Electronic Receipt. Generated On: <?php echo date($_smarty_tpl->tpl_vars['time_format']->value,time());?>
. </div>
        <div> If you think something is incorrect, please contact us - <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['config']->value['sysEmail'];?>
"><?php echo $_smarty_tpl->tpl_vars['config']->value['sysEmail'];?>
</a> </div>
    </div>
</div><?php }
}
