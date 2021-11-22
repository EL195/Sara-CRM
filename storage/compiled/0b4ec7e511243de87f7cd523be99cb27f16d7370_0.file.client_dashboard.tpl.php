<?php
/* Smarty version 3.1.39, created on 2021-04-16 05:28:55
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607958d7b38bb3_87915624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b4ec7e511243de87f7cd523be99cb27f16d7370' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_dashboard.tpl',
      1 => 1596221994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607958d7b38bb3_87915624 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_397578774607958d7afe874_19144460', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173324872607958d7affaf2_18532697', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1946318097607958d7b35631_86110805', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "head"} */
class Block_397578774607958d7afe874_19144460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_397578774607958d7afe874_19144460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }

        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d;
        }
        .text-info{
            color: #6772E5!important;
        }
        .text-success{
            color: #2CCE89!important;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_173324872607958d7affaf2_18532697 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_173324872607958d7affaf2_18532697',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">

        <div class="col-md-4">
            <div class="panel">


                <div class="panel-container">
                    <div class="panel-content">
                        <div class="text-center">

                            <?php if ($_smarty_tpl->tpl_vars['user']->value->img) {?>
                                <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/<?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->img;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" style="max-width: 130px;"class="rounded-circle m-t-xs img-fluid avatar-xl mb-4" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                            <?php } else { ?>
                                <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
/ui/lib/img/default-user-avatar.png" class="profile-image rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                            <?php }?>


                            <h3 class="h2"><?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
</h3>

                            <?php if ($_smarty_tpl->tpl_vars['config']->value['add_fund'] == '1' && $_smarty_tpl->tpl_vars['config']->value['add_fund_client'] == '1') {?>


                                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Your Current Balance'];?>
: <span class="amount text-success"><?php echo $_smarty_tpl->tpl_vars['user']->value->balance;?>
</span></h5>
                                <hr>
                                <a href="javascript:void(0)" class="btn btn-primary add_fund"><i class="fal fa-plus"></i> Add Fund</a>
                                <hr>


                            <?php }?>

                            <address>

                                <br>


                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28px" height="28px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="30" height="30"/>
                                        <path d="M11.914857,14.1427403 L14.1188827,11.9387145 C14.7276032,11.329994 14.8785122,10.4000511 14.4935235,9.63007378 L14.3686433,9.38031323 C13.9836546,8.61033591 14.1345636,7.680393 14.7432841,7.07167248 L17.4760882,4.33886839 C17.6713503,4.14360624 17.9879328,4.14360624 18.183195,4.33886839 C18.2211956,4.37686904 18.2528214,4.42074752 18.2768552,4.46881498 L19.3808309,6.67676638 C20.2253855,8.3658756 19.8943345,10.4059034 18.5589765,11.7412615 L12.560151,17.740087 C11.1066115,19.1936265 8.95659008,19.7011777 7.00646221,19.0511351 L4.5919826,18.2463085 C4.33001094,18.1589846 4.18843095,17.8758246 4.27575484,17.613853 C4.30030124,17.5402138 4.34165566,17.4733009 4.39654309,17.4184135 L7.04781491,14.7671417 C7.65653544,14.1584211 8.58647835,14.0075122 9.35645567,14.3925008 L9.60621621,14.5173811 C10.3761935,14.9023698 11.3061364,14.7514608 11.914857,14.1427403 Z" fill="#000000"/>
                                    </g>
                                </svg>
                                <span class="text-info h5"> <?php echo $_smarty_tpl->tpl_vars['user']->value->phone;?>
</span>




                                <br>

                                <span class="h5"><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</span>
                                <?php if ($_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>
                                    <br>

                                    <br>

                                    <strong class="h6"><?php echo $_smarty_tpl->tpl_vars['config']->value['label_business_number'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['user']->value->business_number;?>

                                    <br>

                                <?php }?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cf']->value, 'cfs');
$_smarty_tpl->tpl_vars['cfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cfs']->value) {
$_smarty_tpl->tpl_vars['cfs']->do_else = false;
?>
                                    <br>
                                    <strong class="h6"><?php echo $_smarty_tpl->tpl_vars['cfs']->value['fieldname'];?>
: </strong> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['cfs']->value['id'],$_smarty_tpl->tpl_vars['user']->value->id);?>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                
                                                                                                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->company != '') {?>
                                    <?php echo $_smarty_tpl->tpl_vars['user']->value->company;?>

                                    <br>
                                    <?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>

                                    <br>
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>

                                    <br>
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->address;?>
 <br>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->city;?>
 <br>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->state;?>
 - <?php echo $_smarty_tpl->tpl_vars['user']->value->zip;?>
 <br>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->country;?>






                            </address>


                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-8">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Orders'];?>
</h2>
                </div>

                <div class="panel-container">
                    <div class="panel-content">
                        <div class="table-responsive">

                            <table class="table table-striped sys_table">
                                <thead>
                                <tr>

                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>


                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order'];?>
 #</th>


                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>

                                    <tr>

                                        <td> <?php ob_start();
echo $_smarty_tpl->tpl_vars['order']->value->date_added;
$_prefixVariable4 = ob_get_clean();
echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_prefixVariable4));?>
 </td>


                                        <td>

                                            <a class="text-info h6" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/order_view/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['order']->value->ordernum;?>
/"><?php echo $_smarty_tpl->tpl_vars['order']->value->ordernum;?>
</a>

                                        </td>




                                        <td class="amount h6" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 "><?php echo $_smarty_tpl->tpl_vars['order']->value->amount;?>
</td>

                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['order']->value->status == 'Active') {?>
                                                <span class="badge badge-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['order']->value->status]);?>
</span>
                                            <?php } else { ?>
                                                <span class="badge badge-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['order']->value->status]);?>
</span>
                                            <?php }?>
                                        </td>
                                    </tr>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </tbody>



                            </table>

                        </div>
                    </div>
                </div>

            </div>



        </div>


    </div>



    <div class="row">

        <div class="col-md-12">

            <div class="panel">
                <div class="panel-hdr">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Transactions'];?>
</h5>

                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <div class="table-responsive">
                            <table class="table table-striped sys_table">
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>


                                <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>

                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['t']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                    <tr class="<?php if ($_smarty_tpl->tpl_vars['ds']->value['cr'] == '0.00') {?>table-warning <?php } else { ?>table-info<?php }?>">
                                        <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                        <td class="h6"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>

                                        <td class="text-right amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['amount'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>

                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                            </table>
                        </div>



                    </div>
                </div>

            </div>




        </div>

    </div>

    <div class="row">

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">


                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Invoices'];?>
</h2>


                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <div class="table-responsive">

                            <table class="table table-striped sys_table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</th>
                                    <th>
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>

                                    </th>

                                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                    <tr>
                                        <td><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['ds']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
 <?php }?></a> </td>
                                        <td class=" h6 text-info"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
 </td>
                                        <td class="amount h6" data-a-sign="<?php if ($_smarty_tpl->tpl_vars['ds']->value['currency_symbol'] == '') {?> <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['currency_symbol'];
}?> "><?php echo $_smarty_tpl->tpl_vars['ds']->value['total'];?>
</td>
                                        <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                        <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['duedate']));?>
</td>
                                        <td>

                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Unpaid') {?>
                                                <span class="badge badge-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Paid') {?>
                                                <span class="badge badge-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Partially Paid') {?>
                                                <span class="badge badge-info"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Cancelled') {?>
                                                <span class="label"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                            <?php } else { ?>
                                                <?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>

                                            <?php }?>



                                        </td>

                                        <td class="text-right">
                                            <div class="btn-group">
                                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/" class="btn btn-primary btn-xs"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</a>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/ipdf/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/dl/" class="btn btn-secondary btn-xs"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download'];?>
</a>
                                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
iview/print/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/" class="btn btn-danger btn-xs"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Print'];?>
</a>
                                            </div>


                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </tbody>



                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-12">


            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Quotes'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table sys_table">
                                <thead>
                                <tr>

                                    <th width="40%" class="h6 "><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Created'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expiry Date'];?>
</th>
                                    
                                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['q']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                    <tr>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/q/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/" target="_blank"><span class="h6 text-info"><?php echo $_smarty_tpl->tpl_vars['ds']->value['subject'];?>
</span> </a> </td>
                                        <td class="amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['total'];?>
</td>
                                        <td class="h6 text-info"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['datecreated']));?>
</td>
                                        <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['validuntil']));?>
</td>


                                        <td class="text-right">
                                            <div class="btn-group">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/q/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/" target="_blank" class="btn btn-primary btn-xs"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</a>

                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/qpdf/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/dl/" class="btn btn-secondary btn-xs" > <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download'];?>
</a>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/qpdf/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['ds']->value['vtoken'];?>
/" target="_blank" class="btn btn-danger btn-xs"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Print'];?>
</a>
                                            </div>


                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </tbody>
                            </table>
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
class Block_1946318097607958d7b35631_86110805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1946318097607958d7b35631_86110805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {

            $('.amount').autoNumeric('init', {

                aSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 ',
                dGroup: <?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
,
                aPad: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
,
                pSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
',
                aDec: '<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
',
                aSep: '<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
',
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'

            });

            $(".add_fund").click(function (e) {
                e.preventDefault();

                bootbox.prompt({
                    title: "Enter Amount",
                    value: "",
                    buttons: {
                        'cancel': {
                            label: 'Cancel'
                        },
                        'confirm': {
                            label: 'OK'
                        }
                    },
                    callback: function(result) {
                        if (result === null) {

                        } else {

                            $.redirectPost(base_url + "client/add_fund/",{ amount: result});

                        }
                    }
                });

            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
