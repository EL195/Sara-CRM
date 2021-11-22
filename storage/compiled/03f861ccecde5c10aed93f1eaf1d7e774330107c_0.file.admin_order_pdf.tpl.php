<?php
/* Smarty version 3.1.39, created on 2021-07-13 03:09:36
  from '/Users/razib/Documents/valet/business-suite/apps/freight/views/admin_order_pdf.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ec937075b3a3_47045758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03f861ccecde5c10aed93f1eaf1d7e774330107c' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/freight/views/admin_order_pdf.tpl',
      1 => 1607394052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ec937075b3a3_47045758 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order# <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</title>

    <style>

        * { margin: 0; padding: 0; }

        body {
            /*

            Important: Do not Edit Font Name, Unless you are sure. It's required for PDF Rendering Properly

            */


            font: 14px/1.4  dejavusanscondensed;


            /*

            Font Name End

            */
        }
        .invoice-box {
            max-width: 800px;
            margin: auto;
            /*padding: 30px;*/
            /*border: 1px solid #eee;*/
            /*box-shadow: 0 0 10px rgba(0, 0, 0, .15);*/
            font-size: 16px;
            line-height: 24px;
            /*font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;*/
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }



        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            <p>
                                Username: <?php echo $_smarty_tpl->tpl_vars['contact']->value->account;?>
 <br>
                                Email: <?php echo $_smarty_tpl->tpl_vars['contact']->value->email;?>
 <br>
                                Phone Number: <?php echo $_smarty_tpl->tpl_vars['contact']->value->phone;?>

                            </p>

                        </td>

                        <td>
                            <h1>ORDER</h1>
                            <br>
                            <p>Customer Id: <?php echo $_smarty_tpl->tpl_vars['contact']->value->code;?>
</p>
                            <p>Order Number: <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</p>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            <p>
                                Forwarding Warehouse:
                            </p>
                            <p>
                                <?php echo $_smarty_tpl->tpl_vars['forwarding_warehouse']->value->label;?>

                            </p>
                        </td>

                        <td>
                            <p>Date: <?php echo $_smarty_tpl->tpl_vars['order']->value->date;?>
</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                Final Delivery Address:
                            </p>
                            <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->address_line_1;?>
 <br>
                                    <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->address_line_2;?>
 <br>
                                    <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->city;?>
 <br>
                                    <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->state;?>
- <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->zip;?>
<br>
                                    <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->country;?>

                                </p>
                            <?php }?>
                        </td>

                        <td></td>
                    </tr>
                </table>
            </td>
        </tr>


        <tr>
            <td colspan="2">
                <table>
                    <tr class="heading">
                        <td>#</td>
                        <td>Product Description</td>
                        <td>Tracking Number</td>
                        <td>No. of Pieces , No. Packages</td>
                        <td>Courier Company</td>
                        <td>Declared Value (RMB)</td>
                    </tr>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$__foreach_item_0_saved = $_smarty_tpl->tpl_vars['item'];
?>
                        <tr class="item">
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->iteration;?>
</td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value->tracking_number;?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value->qty;?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value->courier_company;?>

                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value->amount;?>

                            </td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                    <tr class="total">
                        <td colspan="5" align="right">
                            <strong>Total declare (RMB)</strong>
                        </td>

                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['order']->value->total;?>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
<?php }
}
