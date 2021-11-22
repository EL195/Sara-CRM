<?php
/* Smarty version 3.1.39, created on 2021-09-20 06:33:06
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_purchase_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61486362133020_80798380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00a4111632b4e1246f55065a82a3c9fede4ac4e7' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_purchase_view.tpl',
      1 => 1596221994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61486362133020_80798380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>


<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $_smarty_tpl->tpl_vars['_L']->value['INVOICE'];?>
 - <?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['d']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 <?php }?></title>

    <link rel="icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/storage/system/<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'icon-32','icon-32x32.png');?>
" sizes="32x32" />
    <link rel="icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
/storage/system/<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'icon-192','icon-192x192.png');?>
" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?php ob_start();
echo APP_URL;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
/storage/system/<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'icon-180','icon-180x180.png');?>
" />
    <meta name="msapplication-TileImage" content="<?php ob_start();
echo APP_URL;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/storage/system/<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'icon-270','icon-270x270.png');?>
" />

    <?php if (APP_STAGE == 'Dev') {?>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['rtl'] == '1') {?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
/ui/theme/default/css/app-rtl.min.css?v=<?php ob_start();
echo _raid();
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
">
        <?php } else { ?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
/ui/theme/default/css/app.min.css?v=<?php ob_start();
echo _raid();
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
">

        <?php }?>

        <link href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
default/css/themes/<?php echo $_smarty_tpl->tpl_vars['config']->value['nstyle'];?>
.css?v=<?php ob_start();
echo _raid();
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" rel="stylesheet">

    <?php } else { ?>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['rtl'] == '1') {?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
/ui/theme/default/css/rtl-app.min.css?v=2">
        <?php } else { ?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
/ui/theme/default/css/app.min.css?v=2">
        <?php }?>

        <link href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
default/css/themes/<?php echo $_smarty_tpl->tpl_vars['config']->value['nstyle'];?>
.css?v=13" rel="stylesheet">
    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44603025614863620e2db1_99392686', 'style');
?>


    <?php echo '<script'; ?>
>
        var base_url = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
';
        var block_msg = '<div class="md-preloader text-center"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>';
    <?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->tpl_vars['config']->value['header_scripts'];?>


    <style type="text/css">
        body {

            background-color: #e9ebee;
            overflow-x: visible;
        }
        .paper {
            margin: 20px auto;
            width: 980px;
            /*border: 2px solid #DDD;*/
            background-color: #FFF;
            position: relative;

        }

        .fancybox-slide--iframe .fancybox-content {
            width  : 600px;
            max-width  : 80%;
            max-height : 80%;
            margin: 0;
        }

        .panel {

            /*box-shadow: none;*/

            -webkit-box-shadow: 0 10px 40px 0 rgba(18,106,211,.07), 0 2px 9px 0 rgba(18,106,211,.06);
            box-shadow: 0 10px 40px 0 rgba(18,106,211,.07), 0 2px 9px 0 rgba(18,106,211,.06);

        }

        .panel-body {
            padding: 25px;
        }

        <?php if ((isset($_smarty_tpl->tpl_vars['payment_gateways_by_processor']->value['stripe']))) {?>

        .StripeElement {
            background-color: white;
            height: 40px;
            padding: 10px 12px;
            border-radius: 4px;
            border: 1px solid transparent;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }

        <?php }?>




    </style>

    <?php if ((isset($_smarty_tpl->tpl_vars['payment_gateways_by_processor']->value['stripe']))) {?>
        <?php echo '<script'; ?>
 src="https://js.stripe.com/v3/"><?php echo '</script'; ?>
>
    <?php }?>

</head>

<body class="fixed-nav">

<div class="paper">
    <section class="panel">
        <div class="panel-body">
            <div class="invoice">
                <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
                    <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

                <?php }?>
                <header class="clearfix">

                    <div class="text-right">
                        <?php if (($_smarty_tpl->tpl_vars['d']->value['stage'] != 'Accepted')) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
supplier/p_accept/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" class="btn btn-primary ml-sm no-shadow no-border"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accept'];?>
</a>
                        <?php }?>

                        <?php if (($_smarty_tpl->tpl_vars['d']->value['stage'] != 'Declined')) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
supplier/p_decline/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" class="btn btn-danger ml-sm"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Decline'];?>
</a>
                        <?php }?>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 mt-md">
                            <h2 class="h2 mt-none mb-sm text-dark text-bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Purchase'];?>
</h2>
                            <h4 class="h4 m-none text-dark text-bold">#<?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['d']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 <?php }?></h4>
                            <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Unpaid') {?>
                                <h3 class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</h3>
                            <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Paid') {?>
                                <h3 class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</h3>
                            <?php } elseif ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Partially Paid') {?>
                                <h3 class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</h3>
                            <?php } else { ?>
                                <h3 class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['d']->value['status'];?>
</h3>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['config']->value['invoice_receipt_number'] == '1' && $_smarty_tpl->tpl_vars['d']->value['receipt_number'] != '') {?>
                                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Receipt Number'];?>
: <?php echo $_smarty_tpl->tpl_vars['d']->value['receipt_number'];?>
</h4>
                                <hr>
                            <?php }?>

                        </div>
                        <div class="col-sm-6 text-right mt-md mb-md">

                            <div class="ib">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];?>
" alt="Logo" style="margin-bottom: 15px;">
                            </div>

                            <address class="ib mr-xlg">
                                <strong><?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
</strong>
                                <br>
                                <?php echo $_smarty_tpl->tpl_vars['config']->value['caddress'];?>

                            </address>

                        </div>
                    </div>
                </header>
                <div class="bill-info">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="bill-to">
                                <p class="h5 mb-xs text-dark text-semibold"><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Supplier'];?>
</strong></p>
                                <address>
                                    <?php if ($_smarty_tpl->tpl_vars['a']->value['company'] != '') {?>
                                        <?php echo $_smarty_tpl->tpl_vars['a']->value['company'];?>

                                        <br>
                                        <?php if ($_smarty_tpl->tpl_vars['company']->value && $_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>

                                            <?php if ($_smarty_tpl->tpl_vars['company']->value->business_number != '') {?>
                                                <?php echo $_smarty_tpl->tpl_vars['config']->value['label_business_number'];?>
: <?php echo $_smarty_tpl->tpl_vars['company']->value->business_number;?>

                                                <br>
                                            <?php }?>
                                        <?php }?>
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['ATTN'];?>
: <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

                                        <br>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

                                        <br>
                                    <?php }?>
                                    <?php echo $_smarty_tpl->tpl_vars['a']->value['address'];?>
 <br>
                                    <?php echo $_smarty_tpl->tpl_vars['a']->value['city'];?>
 <br>
                                    <?php echo $_smarty_tpl->tpl_vars['a']->value['state'];?>
 - <?php echo $_smarty_tpl->tpl_vars['a']->value['zip'];?>
 <br>
                                    <?php echo $_smarty_tpl->tpl_vars['a']->value['country'];?>

                                    <br>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['phone'];?>

                                    <?php if ($_smarty_tpl->tpl_vars['config']->value['fax_field'] != '0' && $_smarty_tpl->tpl_vars['a']->value['fax'] != '') {?>
                                        <br>
                                        <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Fax'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['fax'];?>

                                    <?php }?>
                                    <br>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['email'];?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cf']->value, 'cfs');
$_smarty_tpl->tpl_vars['cfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cfs']->value) {
$_smarty_tpl->tpl_vars['cfs']->do_else = false;
?>
                                        <br>
                                        <strong><?php echo $_smarty_tpl->tpl_vars['cfs']->value['fieldname'];?>
: </strong> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['cfs']->value['id'],$_smarty_tpl->tpl_vars['a']->value['id']);?>

                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php echo $_smarty_tpl->tpl_vars['x_html']->value;?>

                                </address>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bill-data text-right">

                                <p class="mb-none">

                                    <span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Issued at'];?>
</span>

                                    
                                    <span class="value"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['date']));?>
</span>
                                </p>

                                                                                                                                        
                                <h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Total'];?>
: <?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['total'],$_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
 </h2>
                                <?php if (($_smarty_tpl->tpl_vars['d']->value['credit']) != '0.00') {?>
                                    <h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
: <?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['credit'],$_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</h2>
                                    <h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount Due'];?>
: <?php echo ib_money_format($_smarty_tpl->tpl_vars['i_due']->value,$_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</h2>
                                <?php }?>
                                <?php if ((($_smarty_tpl->tpl_vars['d']->value['status']) != 'Paid') && (ib_pg_count() != '0' && (($_smarty_tpl->tpl_vars['d']->value['status']) != 'Cancelled'))) {?>
                                    
                                                                                                                                                                                                                                                                                                                                                                                                        
                                    <?php if ($_smarty_tpl->tpl_vars['a']->value->balance > 0 && $_smarty_tpl->tpl_vars['d']->value->is_credit_invoice != 1) {?>
                                        <hr>
                                        <h3> Your Current Balance: <span class="amount"><?php echo $_smarty_tpl->tpl_vars['a']->value->balance;?>
</span> </h3>
                                        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/pay_with_credit/<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value->vtoken;?>
"> Pay with Credit</a>
                                        <hr>
                                    <?php }?>

                                <?php }?>

                                
                            </div>
                        </div>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['d']->value['subject'] != '') {?>
                        <div class="row">
                            <div class="col-md-12">
                                <hr>

                                <strong><?php echo $_smarty_tpl->tpl_vars['d']->value['subject'];?>
</strong>

                                <hr>

                            </div>
                        </div>
                    <?php }?>

                </div>

                <div class="table-responsive">
                    <table class="table invoice-items">
                        <thead>
                        <tr class="h4 text-dark">
                            <th id="cell-id" class="text-semibold">#</th>
                            <th id="cell-item" class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>

                            <th id="cell-price" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                                                        <th id="cell-qty" class="text-center text-semibold"><?php if ($_smarty_tpl->tpl_vars['d']->value['show_quantity_as'] == '' || $_smarty_tpl->tpl_vars['d']->value['show_quantity_as'] == '1') {
echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];
} else {
echo $_smarty_tpl->tpl_vars['d']->value['show_quantity_as'];
}?></th>
                            <th id="cell-total" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['itemcode'];?>
</td>
                                <td class="text-semibold text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>

                                <td class="text-center"><?php echo ib_money_format($_smarty_tpl->tpl_vars['item']->value['amount'],$_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
                                <td class="text-center"><?php echo ib_money_format($_smarty_tpl->tpl_vars['item']->value['total'],$_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>
                    </table>
                </div>

                <div class="invoice-summary">
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-8">
                            <table class="table h5 text-dark">
                                <tbody>
                                <tr class="b-top-none">
                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sub Total'];?>
</td>
                                    <td class="text-left"><?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['subtotal'],$_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
                                </tr>

                                <?php if (($_smarty_tpl->tpl_vars['d']->value['discount']) != '0.00') {?>
                                    <tr>
                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>

                                            <?php if ($_smarty_tpl->tpl_vars['d']->value['discount_type'] == 'p') {?>(<?php echo $_smarty_tpl->tpl_vars['d']->value['discount_value'];?>
%)<?php }?>
                                        </td>
                                        <td class="text-left"><?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['discount'],$_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
                                    </tr>
                                <?php }?>

                                <tr>
                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
</td>
                                    <td class="text-left"><?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['tax'],$_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
                                </tr>
                                <?php if (($_smarty_tpl->tpl_vars['d']->value['credit']) != '0.00') {?>
                                    <tr>
                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</td>
                                        <td class="text-left"><?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['total'],$_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
</td>
                                        <td class="text-left"><?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['credit'],$_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
                                    </tr>
                                    <tr class="h4">
                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount Due'];?>
</td>
                                        <td class="text-left"><?php echo ib_money_format($_smarty_tpl->tpl_vars['i_due']->value,$_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
                                    </tr>
                                <?php } else { ?>
                                    <tr class="h4">
                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Grand Total'];?>
</td>
                                        <td class="text-left"><?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['total'],$_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <?php if (($_smarty_tpl->tpl_vars['trs_c']->value != '')) {?>
                <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Related Transactions'];?>
</h3>
                <table class="table table-bordered sys_table">
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>


                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>

                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>




                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trs']->value, 'tr');
$_smarty_tpl->tpl_vars['tr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tr']->value) {
$_smarty_tpl->tpl_vars['tr']->do_else = false;
?>
                        <tr class="<?php if ($_smarty_tpl->tpl_vars['tr']->value['cr'] == '0.00') {?>warning <?php } else { ?>info<?php }?>">
                            <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['tr']->value['date']));?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tr']->value['account'];?>
</td>


                            <td class="text-right"><?php echo ib_money_format($_smarty_tpl->tpl_vars['tr']->value['amount'],$_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tr']->value['description'];?>
</td>




                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                </table>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['inv_files_c']->value != '') {?>

                <table class="table table-bordered table-hover sys_table">
                    <thead>
                    <tr>
                        <th class="text-right" data-sort-ignore="true" width="20px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>

                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['File'];?>
</th>

                        <th class="text-right" data-sort-ignore="true" width="170px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Download'];?>
</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inv_files']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>

                        <tr>

                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'jpg' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'png' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'gif') {?>
                                    <i class="fal fa-file-image-o"></i>
                                <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'pdf') {?>
                                    <i class="fal fa-file-pdf-o"></i>
                                <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'zip') {?>
                                    <i class="fal fa-file-archive-o"></i>
                                <?php } else { ?>
                                    <i class="fal fa-file"></i>
                                <?php }?>
                            </td>


                            <td>

                                <?php echo $_smarty_tpl->tpl_vars['ds']->value['title'];?>


                                <?php if ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'jpg' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'png' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'gif') {?>

                                    <hr>

                                    <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/docs/<?php echo $_smarty_tpl->tpl_vars['ds']->value['file_path'];?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['title'];?>
">

                                <?php }?>

                            </td>

                            <td class="text-right">

                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dl/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['ds']->value['file_dl_token'];?>
/" class="md-btn md-btn-primary"><i class="fal fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download'];?>
</a>

                            </td>


                        </tr>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </tbody>



                </table>

            <?php }?>

            <?php if (($_smarty_tpl->tpl_vars['d']->value['notes']) != '') {?>
                <div class="well m-t">
                    <?php echo $_smarty_tpl->tpl_vars['d']->value['notes'];?>

                </div>
            <?php }?>
            <div class="text-right">

                <br>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
supplier/dashboard/" class="btn btn-primary ml-sm no-shadow no-border"><i class="fal fa-long-arrow-left"></i> Back to Supplier Area</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
supplier/purchase_pdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/dl/" class="btn btn-primary buttons-pdf ml-sm"><i class="fal fa-file-pdf-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download PDF'];?>
</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
supplier/purchase_pdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/view/" class="btn btn-primary buttons-excel ml-sm"><i class="fal fa-file-text-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View PDF'];?>
</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
supplier/purchase_print/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" target="_blank" class="btn btn-primary buttons-print ml-sm"><i class="fal fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Printable Version'];?>
</a>
            </div>
        </div>
    </section>



</div>



<input type="hidden" id="_url" name="_url" value="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
">
<input type="hidden" id="_df" name="_df" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['df'];?>
">
<input type="hidden" id="_lan" name="_lan" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['language'];?>
">
<!-- END PRELOADER -->
<!-- Mainly scripts -->

<?php echo '<script'; ?>
>

    var _L = [];


    _L['Save'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
';
    _L['Submit'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
';
    _L['Loading'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Loading'];?>
';
    _L['Media'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Media'];?>
';
    _L['OK'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['OK'];?>
';
    _L['Cancel'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
';
    _L['Close'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
';
    _L['Close'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
';
    _L['are_you_sure'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
';
    _L['Saved Successfully'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Saved Successfully'];?>
';
    _L['Empty'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Empty'];?>
';

    var app_url = '<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
';
    var base_url = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
';

    <?php if (($_smarty_tpl->tpl_vars['config']->value['animate']) == '1') {?>
    var config_animate = 'Yes';
    <?php } else { ?>
    var config_animate = 'No';
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['jsvar']->value;?>

<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/cloudonex.js"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['config']->value['language'] != 'en') {?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/moment/moment-with-locales.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        moment.locale('<?php echo $_smarty_tpl->tpl_vars['config']->value['momentLocale'];?>
');
    <?php echo '</script'; ?>
>

<?php } else { ?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/moment/moment.min.js"><?php echo '</script'; ?>
>

<?php }?>




<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/app.js?ver=<?php echo $_smarty_tpl->tpl_vars['file_build']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/numeric.js?ver=<?php echo $_smarty_tpl->tpl_vars['file_build']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/toggle/bootstrap-toggle.min.js"><?php echo '</script'; ?>
>




<!-- iCheck -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/icheck/icheck.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
default/js/theme.js?ver=<?php echo $_smarty_tpl->tpl_vars['file_build']->value;?>
"><?php echo '</script'; ?>
>


<?php if ((isset($_smarty_tpl->tpl_vars['xfooter']->value))) {?>
    <?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13602241356148636212f199_54384237', 'script');
?>


<?php echo '<script'; ?>
>
    jQuery(document).ready(function() {
        // initiate layout and plugins

        matForms();

        <?php if ((isset($_smarty_tpl->tpl_vars['xjq']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['xjq']->value;?>

        <?php }?>

    });

<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['config']->value['footer_scripts'];?>

</body>

</html>
<?php }
/* {block 'style'} */
class Block_44603025614863620e2db1_99392686 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_44603025614863620e2db1_99392686',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style'} */
/* {block 'script'} */
class Block_13602241356148636212f199_54384237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_13602241356148636212f199_54384237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'script'} */
}
