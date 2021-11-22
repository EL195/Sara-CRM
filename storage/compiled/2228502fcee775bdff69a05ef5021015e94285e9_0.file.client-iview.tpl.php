<?php
/* Smarty version 3.1.39, created on 2021-10-07 07:43:05
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client-iview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615edd495a6647_27574338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2228502fcee775bdff69a05ef5021015e94285e9' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client-iview.tpl',
      1 => 1629322921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615edd495a6647_27574338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/razib/Documents/valet/business-suite/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),));
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1478699562615edd4951c5c5_43207120', 'style');
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
            max-width: 980px;
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


        .table.invoice-items{
            border: 1px solid #dee2e6;
        }

        .table.invoice-items td, .table.invoice-items th {
            border: 1px solid #dee2e6;
        }


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

                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-right">

                                <?php if ($_smarty_tpl->tpl_vars['has_login_token']->value) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dashboard/" class="btn btn-primary ml-sm no-shadow no-border"><i class="fal fa-long-arrow-left"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Back to Client Area'];?>
</a>
                                <?php }?>

                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/dl/" class="btn btn-primary buttons-pdf ml-sm"><i class="fal fa-file-pdf-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download PDF'];?>
</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/view/" class="btn btn-primary buttons-excel ml-sm"><i class="fal fa-file-text-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View PDF'];?>
</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
iview/print/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" target="_blank" class="btn btn-primary buttons-print ml-sm"><i class="fal fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Printable Version'];?>
</a>
                            </div>

                            <div class="hr-line-dashed"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mt-md">
                            <h2 class="h2 mt-none mb-sm text-dark text-bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['INVOICE'];?>
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
                                <h3 class="alert alert-info"><?php echo __($_smarty_tpl->tpl_vars['d']->value['status']);?>
</h3>
                            <?php }?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['d']->value['title'])) && $_smarty_tpl->tpl_vars['d']->value['title'] != '') {?>
                                <h4><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</h4>
                                <hr>
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
" alt="<?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
" class="img-fluid"  style="margin-bottom: 15px;">

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
                                <p class="h5 mb-xs text-dark text-semibold"><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoiced To'];?>
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

                                    <?php echo getContactFormattedAddress($_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['a']->value);?>

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
                                        <?php if ($_smarty_tpl->tpl_vars['cfs']->value['showinvoice'] == 'No') {?>
                                            <?php continue 1;?>
                                        <?php }?>
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
                                    <span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</span>
                                    <span class="value"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['date']));?>
</span>
                                </p>
                                <p class="mb-none">
                                    <span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
:</span>
                                    <span class="value"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['duedate']));?>
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




                                    <?php if ($_smarty_tpl->tpl_vars['render']->value === 'delivery') {?>

                                        <div class="col-md-6 float-right">
                                            <div class="bill-to">
                                                <p class="h5 mb-xs text-dark text-semibold"><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delivery To'];?>
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

                                                    <?php echo getContactFormattedAddress($_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['a']->value);?>

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
                                                        <?php if ($_smarty_tpl->tpl_vars['cfs']->value['showinvoice'] == 'No') {?>
                                                            <?php continue 1;?>
                                                        <?php }?>
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


                                        <?php } else { ?>


                                        <form class="my-3" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipay/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
">

                                            <?php if (count($_smarty_tpl->tpl_vars['payment_gateways']->value) == 1) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_gateways']->value, 'pg');
$_smarty_tpl->tpl_vars['pg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pg']->value) {
$_smarty_tpl->tpl_vars['pg']->do_else = false;
?>
                                                    <input type="hidden" id="paymentGateway" name="pg" value="<?php echo $_smarty_tpl->tpl_vars['pg']->value->processor;?>
">
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php } else { ?>
                                                <div class="form-group has-success">
                                                    <select class="form-control" name="pg" id="paymentGateway">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_gateways']->value, 'pg');
$_smarty_tpl->tpl_vars['pg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pg']->value) {
$_smarty_tpl->tpl_vars['pg']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['pg']->value->processor;?>
"><?php echo $_smarty_tpl->tpl_vars['pg']->value->name;?>
</option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                </div>
                                            <?php }?>
                                            <div class="form-group">
                                                <button type="submit" id="btnPayNow" class="btn btn-primary"><i class="fal fa-credit-card"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Pay Now'];?>
</button>
                                            </div>

                                        </form>





                                    <?php }?>



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

                                <?php if ((isset($_smarty_tpl->tpl_vars['payment_gateways_by_processor']->value['stripe']))) {?>

                                    <div id="stripeDiv" style="display: none; margin-bottom: 25px; margin-top: 15px; padding: 15px; background: #f5f5f6;">


                                        <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/payment-stripe" method="post" id="payment-form">
                                            <div class="form-row">
                                                <label for="card-element">
                                                    Credit or debit card
                                                </label>
                                                <div id="card-element" class="form-control">
                                                    <!-- A Stripe Element will be inserted here. -->
                                                </div>

                                                <!-- Used to display form errors. -->
                                                <div id="card-errors" role="alert"></div>
                                            </div>

                                            <input type="hidden" name="invoice_id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                                            <input type="hidden" name="view_token" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
">
                                            <button class="btn btn-primary" id="btnStripeSubmit" style="margin-top: 20px;">Submit Payment</button>

                                        </form>
                                    </div>

                                <?php }?>


                                <?php }?>


                            </div>
                        </div>
                    </div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['quote']->value) {?>

                        <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote'];?>
: <?php echo $_smarty_tpl->tpl_vars['quote']->value->id;?>
</h4>

                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <?php echo $_smarty_tpl->tpl_vars['quote']->value->proposal;?>

                            <hr>
                        </div>
                    </div>
                <?php }?>

                <div class="table-responsive">

                    <?php if ($_smarty_tpl->tpl_vars['config']->value['tax_system'] == 'India') {?>

                        <table class="table table-bordered invoice-items">
                            <thead>
                            <tr class="text-dark">
                                <th id="cell-id" class="text-semibold">S/L</th>
                                <th id="cell-item" class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>
                                <th class="text-semibold">HSN / SAC</th>
                                <th id="cell-price" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                                <th id="cell-qty" class="text-center text-semibold"><?php if ($_smarty_tpl->tpl_vars['d']->value['show_quantity_as'] == '' || $_smarty_tpl->tpl_vars['d']->value['show_quantity_as'] == '1') {
echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];
} else {
echo $_smarty_tpl->tpl_vars['d']->value['show_quantity_as'];
}?></th>
                                <th class="text-right">Taxable Value</th>


                                <?php if ($_smarty_tpl->tpl_vars['d']->value['is_same_state']) {?>

                                    <th class="text-right">CGST</th>
                                    <th class="text-right">SGST/UTGST</th>
                                    <th class="text-right">GST</th>

                                <?php } else { ?>

                                    <th class="text-right">IGST</th>

                                <?php }?>




                                <th id="cell-total" class="text-right text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
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
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['itemcode'] != '') {?>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['itemcode'];?>

                                        <?php } else { ?>
                                            <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                        <?php }?>
                                    </td>
                                    <td class="text-semibold text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
                                    <td class="text-semibold text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value['tax_code'];?>
</td>
                                    <td class="text-center amount" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['d']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
                                    <td class="text-right">
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['discount_amount'] != '0.00') {?>

                                            Total: <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['data_a_sign']->value;?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['data_a_dec']->value;?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['data_a_sep']->value;?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['data_p_sign']->value;?>
"><?php echo ($_smarty_tpl->tpl_vars['item']->value['amount']*$_smarty_tpl->tpl_vars['item']->value['qty']);?>
</span>


                                            <br>
                                            Discount: <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['data_a_sign']->value;?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['data_a_dec']->value;?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['data_a_sep']->value;?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['data_p_sign']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['discount_amount'];?>
</span>
                                            <br>
                                            Taxable amount: <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['data_a_sign']->value;?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['data_a_dec']->value;?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['data_a_sep']->value;?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['data_p_sign']->value;?>
"><?php echo ($_smarty_tpl->tpl_vars['item']->value['amount']*$_smarty_tpl->tpl_vars['item']->value['qty'])-$_smarty_tpl->tpl_vars['item']->value['discount_amount'];?>
</span>

                                        <?php } else { ?>
                                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['data_a_sign']->value;?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['data_a_dec']->value;?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['data_a_sep']->value;?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['data_p_sign']->value;?>
"><?php echo ($_smarty_tpl->tpl_vars['item']->value['amount']*$_smarty_tpl->tpl_vars['item']->value['qty']);?>
</span>

                                        <?php }?>


                                    </td>


                                    <?php if ($_smarty_tpl->tpl_vars['d']->value['is_same_state']) {?>

                                        <td class="text-right">
                                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['data_a_sign']->value;?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['data_a_dec']->value;?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['data_a_sep']->value;?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['data_p_sign']->value;?>
"><?php echo gstIndiaSplitTaxValue($_smarty_tpl->tpl_vars['item']->value['total'],$_smarty_tpl->tpl_vars['item']->value['tax_rate']);?>
</span>
                                            <br>
                                            @<?php echo round($_smarty_tpl->tpl_vars['item']->value['tax_rate']/2,2);?>
%
                                        </td>
                                        <td class="text-right">
                                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['data_a_sign']->value;?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['data_a_dec']->value;?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['data_a_sep']->value;?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['data_p_sign']->value;?>
"><?php echo gstIndiaSplitTaxValue($_smarty_tpl->tpl_vars['item']->value['total'],$_smarty_tpl->tpl_vars['item']->value['tax_rate']);?>
</span>
                                            <br>
                                            @<?php echo round($_smarty_tpl->tpl_vars['item']->value['tax_rate']/2,2);?>
%
                                        </td>
                                        <td class="text-right">
                                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['data_a_sign']->value;?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['data_a_dec']->value;?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['data_a_sep']->value;?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['data_p_sign']->value;?>
"><?php echo round($_smarty_tpl->tpl_vars['item']->value['taxamount'],2);?>
</span> <br>
                                            @<?php echo round($_smarty_tpl->tpl_vars['item']->value['tax_rate'],2);?>
%

                                        </td>

                                    <?php } else { ?>



                                        <td class="text-right">
                                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['data_a_sign']->value;?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['data_a_dec']->value;?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['data_a_sep']->value;?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['data_p_sign']->value;?>
"><?php echo round((($_smarty_tpl->tpl_vars['item']->value['tax_rate']*($_smarty_tpl->tpl_vars['item']->value['qty']*$_smarty_tpl->tpl_vars['item']->value['amount']))/100),2);?>
</span> <br>
                                            @<?php echo round($_smarty_tpl->tpl_vars['item']->value['tax_rate'],2);?>
%

                                        </td>

                                    <?php }?>




                                    <td class="text-right amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['data_a_sign']->value;?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['data_a_dec']->value;?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['data_a_sep']->value;?>
" data-p-sign="<?php echo $_smarty_tpl->tpl_vars['data_p_sign']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['total']+$_smarty_tpl->tpl_vars['item']->value['taxamount'];?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>

                    <?php } else { ?>

                        <table class="table table-bordered invoice-items">
                            <thead>
                            <tr class="text-dark">
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
                                    <td class="text-center amount"><?php echo formatCurrency($_smarty_tpl->tpl_vars['item']->value['amount'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code'],$_smarty_tpl->tpl_vars['format_currency_override']->value);?>
</td>
                                    <td class="text-center"><?php echo numberFormatUsingCurrency($_smarty_tpl->tpl_vars['item']->value['qty'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code'],0);?>
</td>
                                    <td class="text-center amount"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value['total']+$_smarty_tpl->tpl_vars['item']->value['taxamount']),$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>

                    <?php }?>



                </div>
                <div class="invoice-summary">
                    <div class="row">
                        <div class="col-sm-4 offset-md-8 ">
                            <table class="table h5 text-dark">
                                <tbody>
                                <tr class="b-top-none">
                                    <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sub Total'];?>
</td>
                                    <td class="text-left"><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['subtotal'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                </tr>

                                <?php if (($_smarty_tpl->tpl_vars['d']->value['discount']) != '0.00') {?>
                                    <tr>
                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
</td>
                                        <td class="text-left"><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['discount'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                    </tr>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['config']->value['tax_system'] == 'India') {?>
                                    <tr>
                                        <td colspan="2">GST</td>
                                        <td class="text-left"><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['tax'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                    </tr>
                                <?php } else { ?>



                                    <tr>
                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['TAX'];?>
</td>
                                        <td class="text-left"><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['tax'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                    </tr>



                                <?php }?>

                                <?php if (($_smarty_tpl->tpl_vars['d']->value['credit']) != '0.00') {?>
                                    <tr>
                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</td>
                                        <td class="text-left"><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['total'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
</td>
                                        <td class="text-left"><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['credit'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                    </tr>
                                    <tr class="h4">
                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount Due'];?>
</td>
                                        <td class="text-left"><?php echo formatCurrency($_smarty_tpl->tpl_vars['i_due']->value,$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
</td>
                                    </tr>
                                <?php } else { ?>
                                    <tr class="h4">
                                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Grand Total'];?>
</td>
                                        <td class="text-left"><?php echo formatCurrency($_smarty_tpl->tpl_vars['d']->value['total'],$_smarty_tpl->tpl_vars['d']->value['currency_iso_code']);?>
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


            <div class="hr-line-dashed"></div>





                <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['invoice_client_can_attach_signature'])) && $_smarty_tpl->tpl_vars['config']->value['invoice_client_can_attach_signature'] == 1) {?>



                    <div class="row">
                        <div class="col-md-12">
                            <div id="signaturePadArea">

                            </div>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4><?php echo __('Sign above');?>
</h4>
                        </div>
                        <div class="col-md-6 text-right">
                            <button type="button" id="clearSignature" class="btn btn-danger btn-sm"><?php echo __('Clear signature');?>
</button>
                        </div>
                    </div>

                <?php }?>


        </div>
    </section>



</div>



<input type="hidden" id="_url" name="_url" value="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
">
<input type="hidden" id="_df" name="_df" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['df'];?>
">
<input type="hidden" id="_lan" name="_lan" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['language'];?>
">


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



<?php if (APP_STAGE == 'Dev') {?>
    <?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
/ui/theme/default/js/app.min.js?v=<?php echo _raid();?>
"><?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
/ui/theme/default/js/app.min.js?v=2"><?php echo '</script'; ?>
>
<?php }?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_600146709615edd4959c652_25657251', 'script');
?>


<?php echo '<script'; ?>
>
    $(function () {
        $('.amount').autoNumeric('init');
    });
<?php echo '</script'; ?>
>

<?php if ((isset($_smarty_tpl->tpl_vars['config']->value['invoice_client_can_attach_signature'])) && $_smarty_tpl->tpl_vars['config']->value['invoice_client_can_attach_signature'] == 1) {?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/jSignature.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>



        $(function () {

            var $signaturePadArea = $("#signaturePadArea");

            $signaturePadArea.jSignature({
                color:"#000",


            });

            <?php if ($_smarty_tpl->tpl_vars['d']->value['signature_data_base64'] != '') {?>

            $signaturePadArea.jSignature("setData","<?php echo $_smarty_tpl->tpl_vars['d']->value['signature_data_base64'];?>
");

            <?php }?>

            $signaturePadArea.bind('change', function(e){
                var signData = $signaturePadArea.jSignature("getData");
                $.post( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/save-invoice-signature", {
                    invoice_id: '<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
',
                    view_token: '<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
',
                    signData: signData,
                });
            });


            $('#clearSignature').on('click',function () {
                $signaturePadArea.jSignature("reset");
            });



        });
    <?php echo '</script'; ?>
>

<?php }?>

<?php echo '<script'; ?>
>
    jQuery(document).ready(function() {
        // initiate layout and plugins

        var $paymentGateway = $('#paymentGateway');

        <?php if ((isset($_smarty_tpl->tpl_vars['xjq']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['xjq']->value;?>

        <?php }?>

        if(document.getElementById('btnPayNow'))
            {

                $('#btnPayNow').on('click',function (e) {
                    <?php echo $_smarty_tpl->tpl_vars['plugin_extra_js']->value;?>


                    <?php if ((isset($_smarty_tpl->tpl_vars['payment_gateways_by_processor']->value['stripe']))) {?>

                    $stripeDiv = $('#stripeDiv');

                    if($paymentGateway.val() === 'stripe')
                        {
                            e.preventDefault();

                            $stripeDiv.show('slow');
                        }



                    <?php }?>

                });


                <?php if ((isset($_smarty_tpl->tpl_vars['payment_gateways_by_processor']->value['stripe']))) {?>

                // Create a Stripe client.
                var stripe = Stripe('<?php echo $_smarty_tpl->tpl_vars['payment_gateways_by_processor']->value['stripe']['value'];?>
');

// Create an instance of Elements.
            var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
                base: {
                    color: '#32325d',
                    lineHeight: '18px',
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };

// Create an instance of the card Element.
            var card = elements.create('card', { style: style });

// Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

// Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

// Handle form submission.
            var form = document.getElementById('payment-form');
            var $btnStripeSubmit = $('#btnStripeSubmit');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                $btnStripeSubmit.prop('disabled',true);
                stripe.createToken(card).then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                        $btnStripeSubmit.prop('disabled',false);
                    } else {
                        // Send the token to your server.
                        stripeTokenHandler(result.token);

                    }
                });
            });

// Submit the form with the token ID.
            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();



            }

            <?php }?>
            }


    });

<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['config']->value['footer_scripts'];?>

</body>

</html>
<?php }
/* {block 'style'} */
class Block_1478699562615edd4951c5c5_43207120 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_1478699562615edd4951c5c5_43207120',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style'} */
/* {block 'script'} */
class Block_600146709615edd4959c652_25657251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_600146709615edd4959c652_25657251',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'script'} */
}
