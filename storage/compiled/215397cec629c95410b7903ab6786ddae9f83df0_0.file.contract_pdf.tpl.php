<?php
/* Smarty version 3.1.39, created on 2021-10-07 08:33:53
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/contract_pdf.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615ee931b48268_42878246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '215397cec629c95410b7903ab6786ddae9f83df0' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/contract_pdf.tpl',
      1 => 1633610026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615ee931b48268_42878246 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>

    <style>

        /*

        PDF library using PHP have some limitations and all CSS properties may not support. Before Editing this file, Please create a backup, so that You can restore this.

        The location of this file is here- system/lib/invoices/pdf-x2.php

        */

        * {
            margin: 0;
            padding: 0;
        }

        body {
            /*

            Important: Do not Edit Font Name, Unless you are sure. It's required for PDF Rendering Properly

            */

            font: 14px/1.4 Helvetica, Arial, sans-serif;


            /*

            Font Name End

            */
        }

        #page-wrap {
            width: 800px;
            margin: 0 auto;
        }

        table {
            border-collapse: collapse;
        }

        table td, table th {
            border: 1px solid black;
            padding: 5px;
        }


        #customer {
            overflow: hidden;
        }

        #logo {
            text-align: right;
            float: right;
            position: relative;
            margin-top: 25px;
            border: 1px solid #fff;
            max-width: 540px;
            overflow: hidden;
        }

        #meta {
            margin-top: 1px;
            width: 100%;
            float: right;
        }

        #meta td {
            text-align: right;
        }

        #meta td.meta-head {
            text-align: left;
            background: #eee;
        }

        #meta td textarea {
            width: 100%;
            height: 20px;
            text-align: right;
        }

        #items {
            clear: both;
            width: 100%;
            margin: 30px 0 0 0;
            border: 1px solid black;
        }

        #items th {
            background: #eee;
        }

        #items textarea {
            width: 80px;
            height: 50px;
        }

        #items tr.item-row td {
            vertical-align: top;
        }

        #items td.description {
            width: 300px;
        }

        #items td.item-name {
            width: 175px;
        }

        #items td.description textarea, #items td.item-name textarea {
            width: 100%;
        }

        #items td.total-line {
            border-right: 0;
            text-align: right;
        }

        #items td.total-value {
            border-left: 0;
            padding: 10px;
        }

        #items td.total-value textarea {
            height: 20px;
            background: none;
        }

        #items td.balance {
            background: #eee;
        }

        #items td.blank {
            border: 0;
        }

        #terms {
            text-align: left;
            margin: 20px 0 0 0;
        }

        #terms h5 {
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 10px;
            border-bottom: 1px solid black;
            padding: 0 0 8px 0;
            margin: 0 0 8px 0;
        }

        #terms textarea {
            width: 100%;
            text-align: center;
        }

        #items td.blank {
            border: 0;
        }

    </style>

</head>

<body>

<div id="page-wrap">

    <table width="100%">
        <tr>
            <td style="border: 0;  text-align: left" width="62%">
                <span style="font-size: 18px; color: #2f4f4f"><strong><?php echo __('Contract');?>
</strong></span>
            </td>
            <td style="border: 0;  text-align: right" width="62%">
                <div id="logo" style="font-size:18px">
                    <img id="image" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];?>
" alt="logo"/> <br> <br>
                    <?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
 <br>
                    <?php echo $_smarty_tpl->tpl_vars['config']->value['caddress'];?>
              </div>
            </td>
        </tr>


    </table>

    <h2><?php echo $_smarty_tpl->tpl_vars['contract']->value->title;?>
</h2>

    <hr>


    <div id="customer">

        <table id="meta">
            <tr>
                <td rowspan="5" style="border: 1px solid white; border-right: 1px solid black; text-align: left"
                    width="62%">

                    <?php if ($_smarty_tpl->tpl_vars['contact']->value) {?>

                        <?php if ($_smarty_tpl->tpl_vars['contact']->value->company) {?>
                            <?php echo $_smarty_tpl->tpl_vars['contact']->value->company;?>
 <br>
                        <?php }?>

                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['ATTN'];?>
: Maria Elizabeth <br>

                        <?php echo getContactFormattedAddress($_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['contact']->value);?>

                    <?php }?>


                </td>
                <td class="meta-head"><?php echo __('ID');?>
 #</td>
                <td><?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
</td>
            </tr>

            <tr>

                <td class="meta-head"><?php echo __('Start Date');?>
</td>
                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['contract']->value->start_date));?>
</td>
            </tr>
            <tr>

                <td class="meta-head"><?php echo __('Expiration Date');?>
</td>
                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['contract']->value->expiration_date));?>
</td>
            </tr>

            <tr>

                <td class="meta-head"><?php echo __('Amount');?>
</td>

                <td>
                    <div class="due"><?php echo formatCurrency($_smarty_tpl->tpl_vars['contract']->value->amount,$_smarty_tpl->tpl_vars['contract']->value->currency);?>
</div>
                </td>
            </tr>

        </table>

    </div>

    <hr>

    <div style="margin-bottom: 20px;">
        <?php echo $_smarty_tpl->tpl_vars['contract']->value->description;?>

    </div>


    <table width="100%">
        <tr>
            <td style="border: 0;  text-align: left" width="62%">
                <div style="margin: 20px;">

                    <hr>
                    <?php echo __('Authorised Signature');?>

                </div>
            </td>
            <td style="border: 0;  text-align: right" width="62%">
                <div style="margin: 20px;">
                    <?php if ($_smarty_tpl->tpl_vars['contract']->value->party_two_sign) {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['contract']->value->party_two_sign;?>
" />
                    <?php }?>
                    <hr>
                    <?php echo __('Customer Signature');?>

                </div>
            </td>
        </tr>


    </table>



</div>

</body>

</html>
<?php }
}
