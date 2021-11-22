<?php
/* Smarty version 3.1.39, created on 2021-08-14 06:44:36
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61179e94aaeb12_39470081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '332295b8293c573eb3e3a2ec5077e41c132de3b2' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/dashboard.tpl',
      1 => 1627592098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61179e94aaeb12_39470081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100132400961179e94a62577_96299121', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21357445161179e94a661f9_23749116', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80993672461179e94aae461_71464967', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl");
}
/* {block "head"} */
class Block_100132400961179e94a62577_96299121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_100132400961179e94a62577_96299121',
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

        .icon-shape {
            padding: 12px;
            text-align: center;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        .icon {
            width: 3rem;
            height: 3rem;
        }
        .text-white {
            color: #fff !important;
        }
        .shadow {
            box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15) !important;
        }
        .rounded-circle, .avatar.rounded-circle img {
            border-radius: 50% !important;
        }
        .bg-gradient-red {
            background: linear-gradient(
                    87deg
                    , #f5365c 0, #f56036 100%) !important;
        }

        .bg-gradient-success {
            background: linear-gradient(
                    87deg
                    , #2dce89 0, #2dcecc 100%) !important;
        }
        .bg-gradient-info {
            background: linear-gradient(
                    87deg
                    , #11cdef 0, #1171ef 100%) !important;
        }

        .bg-gradient-blue {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(7,13,46,1) 0%, rgba(41,20,110,1) 44%, rgba(35,10,112,1) 50%, rgba(69,28,144,1) 100%, rgba(215,246,247,1) 100%); !important;

        }
        .bg-gradient-pink {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(204,147,5,1) 0%, rgba(189,123,10,1) 100%, rgba(237,227,200,1) 100%, rgba(240,133,219,1) 100%, rgba(215,246,247,1) 100%);

        }






    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_21357445161179e94a661f9_23749116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21357445161179e94a661f9_23749116',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>







            <div class="row">

                <div class="col-md-4 ">
                    <div class="card">


                        <div class="card-body">
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
/ui/lib/img/default-user-avatar.png" class="rounded-circle shadow-2 img-thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                                <?php }?>


                                <h3 class="h2"><?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
</h3>



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
                                    <br>
                                    <?php if ($_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>
                                        <br>

                                        <strong class="h6"><?php echo $_smarty_tpl->tpl_vars['config']->value['label_business_number'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['user']->value->business_number;?>



                                    <?php }?>


                                   <div class="mt-3">
                                       <?php if ($_smarty_tpl->tpl_vars['user']->value->company != '') {?>
                                           <?php echo $_smarty_tpl->tpl_vars['user']->value->company;?>

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

                                   </div>





                                </address>


                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/hosting-orders/">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0"><?php echo __('Services');?>
</h5>
                                                <span class="h2 font-weight-bold mb-0"><?php echo $_smarty_tpl->tpl_vars['hosting_orders_count']->value;?>
</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                                                    <i class="fal fa-database fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/tickets/all">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0"><?php echo __('Tickets');?>
</h5>
                                                <span class="h2 font-weight-bold mb-0"><?php echo $_smarty_tpl->tpl_vars['tickets_count']->value;?>
</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                                    <i class="fal fa-phone fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="col-md-3">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/invoices/">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</h5>
                                                <span class="h2 font-weight-bold mb-0"><?php echo $_smarty_tpl->tpl_vars['invoices_count']->value;?>
</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-pink text-white rounded-circle shadow">
                                                    <i class="fal fa-credit-card fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/domain-orders/">
                                <div class="card card-stats">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0"><?php echo __('Domains');?>
</h5>
                                                <span class="h2 font-weight-bold mb-0"><?php echo $_smarty_tpl->tpl_vars['domains_count']->value;?>
</span>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                                                    <i class="fal fa-arrow-alt-right fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="card mt-3">
                        <div class="card-header">


                            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Invoices'];?>
</h2>


                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices']->value, 'recent_invoice');
$_smarty_tpl->tpl_vars['recent_invoice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_invoice']->value) {
$_smarty_tpl->tpl_vars['recent_invoice']->do_else = false;
?>

                                        <tr>
                                            <td>
                                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['recent_invoice']->value->id;?>
/token_<?php echo $_smarty_tpl->tpl_vars['recent_invoice']->value->vtoken;?>
/">
                                                    <?php echo cloudonex_get_invoice_number($_smarty_tpl->tpl_vars['recent_invoice']->value);?>

                                                </a>
                                            </td>
                                            <td>
                                                <?php echo cloudonex_get_invoice_status_with_badge($_smarty_tpl->tpl_vars['recent_invoice']->value->status);?>

                                            </td>
                                            <td>
                                                <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_invoice']->value->date));?>

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




    <div class="row mt-3">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Orders'];?>
</h3>
                    <div class="hr-line-dashed"></div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order'];?>
</th>
                            <th> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Domain'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_orders']->value, 'recent_order');
$_smarty_tpl->tpl_vars['recent_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_order']->value) {
$_smarty_tpl->tpl_vars['recent_order']->do_else = false;
?>

                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/view-order/<?php echo $_smarty_tpl->tpl_vars['recent_order']->value->id;?>
/" class="font-weight-bold">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['recent_order']->value->tracking_id, ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                </td>
                                <td>
                                    <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['recent_order']->value->domain, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>

                                </td>
                                <td>
                                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_order']->value->created_at));?>

                                </td>
                                <td>
                                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['recent_order']->value->total,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                                </td>
                                <td>
                                    <?php echo cloudonex_get_order_status_with_badge($_smarty_tpl->tpl_vars['recent_order']->value->status);?>

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

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Domains'];?>
</h3>
                    <div class="hr-line-dashed"></div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Domain'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_domains']->value, 'recent_order');
$_smarty_tpl->tpl_vars['recent_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_order']->value) {
$_smarty_tpl->tpl_vars['recent_order']->do_else = false;
?>

                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/view-domain/<?php echo $_smarty_tpl->tpl_vars['recent_order']->value->id;?>
/" class="font-weight-bold">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['recent_order']->value->tracking_id, ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                </td>
                                <td>
                                    <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['recent_order']->value->domain, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>

                                </td>
                                <td>
                                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_order']->value->created_at));?>

                                </td>
                                <td>
                                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['recent_order']->value->total,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                                </td>
                                <td>
                                    <?php echo cloudonex_get_order_status_with_badge($_smarty_tpl->tpl_vars['recent_order']->value->status);?>

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


    <div class="card mt-3">
        <div class="card-body">
            <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Tickets'];?>
</h3>
            <div class="hr-line-dashed"></div>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Ticket'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Last Update'];?>
</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_tickets']->value, 'recent_ticket');
$_smarty_tpl->tpl_vars['recent_ticket']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_ticket']->value) {
$_smarty_tpl->tpl_vars['recent_ticket']->do_else = false;
?>
                    <tr>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/tickets/view/<?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->tid;?>
" class="font-weight-bold">
                                <?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->tid;?>

                            </a>
                        </td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/tickets/view/<?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->tid;?>
" class="font-weight-bold">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['recent_ticket']->value->subject, ENT_QUOTES, 'UTF-8', true);?>

                            </a>
                        </td>
                        <td>
                            <?php echo cloudonex_get_ticket_status_with_badge(htmlspecialchars($_smarty_tpl->tpl_vars['recent_ticket']->value->status, ENT_QUOTES, 'UTF-8', true));?>

                        </td>
                        <td>
                            <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_ticket']->value->updated_at));?>

                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>




<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_80993672461179e94aae461_71464967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_80993672461179e94aae461_71464967',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
