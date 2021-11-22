<?php
/* Smarty version 3.1.39, created on 2021-05-10 17:59:34
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6099acc6beb494_55091749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3093a2822815b50beb55e1476f0acd676c6eb33' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/dashboard.tpl',
      1 => 1620514192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6099acc6beb494_55091749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7713771216099acc6bc9cc6_39794809', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1556548556099acc6bcba25_03076764', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15414489186099acc6be83b3_53032877', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_7713771216099acc6bc9cc6_39794809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_7713771216099acc6bc9cc6_39794809',
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
class Block_1556548556099acc6bcba25_03076764 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1556548556099acc6bcba25_03076764',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-6">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6 mb-3">
                    <div class="card" style="background: #FAE292;">
                        <div class="card-body text-center statistics-info">
                            <div class="icon icon-shape bg-gradient-pink text-white rounded-circle shadow">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                            </div>
                            <h6 class="mt-4 mb-1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total value of Active Orders'];?>
</h6>
                            <h2 class="mb-2 number-font"><?php echo formatCurrency($_smarty_tpl->tpl_vars['total_active_order_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h2>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6">
                    <div class="card" style="background: #E7FFBD;">
                        <div class="card-body text-center statistics-info">
                            <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            </div>
                            <h6 class="mt-4 mb-1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid Invoice Amount'];?>
</h6>
                            <h2 class="mb-2 number-font"><?php echo formatCurrency($_smarty_tpl->tpl_vars['total_paid_invoice_amount']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h2>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6 mt-3">
                    <div class="card" style="background: #ffe1e2;">
                        <div class="card-body text-center statistics-info">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-circle"><circle cx="12" cy="12" r="10"></circle><polyline points="16 12 12 8 8 12"></polyline><line x1="12" y1="16" x2="12" y2="8"></line></svg>
                            </div>
                            <h6 class="mt-4 mb-1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Orders'];?>
</h6>
                            <h2 class="mb-2  number-font"><?php echo $_smarty_tpl->tpl_vars['total_orders']->value;?>
</h2>


                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6 mt-3">
                    <div class="card" style="background: #DBD9FC;">
                        <div class="card-body text-center statistics-info">
                            <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </div>
                            <h6 class="mt-4 mb-1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Customers'];?>
</h6>
                            <h2 class="mb-2  number-font"><?php echo $_smarty_tpl->tpl_vars['total_customers']->value;?>
</h2>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="card" style="background: #c2d5ff;">

                <div class="p-3">
                    <h3 class="mb-0">
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Orders'];?>

                    </h3>
                    <h5 class="mt-2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total last 7 days'];?>
 <?php echo formatCurrency($_smarty_tpl->tpl_vars['total_last_7_days']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                </div>

                <div id="orders_chart" class="mb-3"></div>

            </div>
        </div><!-- COL END -->
    </div>



    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
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
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
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
tickets/admin/view/<?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->id;?>
" class="font-weight-bold">
                                        <?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->tid;?>

                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
tickets/admin/view/<?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->id;?>
" class="font-weight-bold">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['recent_ticket']->value->subject, ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['recent_ticket']->value->userid;?>
/summary/">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['recent_ticket']->value->account, ENT_QUOTES, 'UTF-8', true);?>

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
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Orders'];?>
</h3>
                    <div class="hr-line-dashed"></div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Order</th>
                            <th>Domain</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Status</th>
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
hostbilling/order/<?php echo $_smarty_tpl->tpl_vars['recent_order']->value->id;?>
/" class="font-weight-bold">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['recent_order']->value->tracking_id, ENT_QUOTES, 'UTF-8', true);?>

                                    </a>
                                </td>
                                <td>
                                    <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['recent_order']->value->domain, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

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


    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Invoices'];?>
</h3>
                    <div class="hr-line-dashed"></div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_invoices']->value, 'recent_invoice');
$_smarty_tpl->tpl_vars['recent_invoice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_invoice']->value) {
$_smarty_tpl->tpl_vars['recent_invoice']->do_else = false;
?>

                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['recent_invoice']->value->id;?>
/">
                                        <?php echo cloudonex_get_invoice_number($_smarty_tpl->tpl_vars['recent_invoice']->value);?>

                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['recent_invoice']->value->userid;?>
/summary/">
                                        <?php echo $_smarty_tpl->tpl_vars['recent_invoice']->value->account;?>

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
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Clients'];?>
</h3>
                    <div class="hr-line-dashed"></div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>

                            </th>
                            <th>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>

                            </th>
                            <th>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>

                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_customers']->value, 'recent_customer');
$_smarty_tpl->tpl_vars['recent_customer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_customer']->value) {
$_smarty_tpl->tpl_vars['recent_customer']->do_else = false;
?>

                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['recent_customer']->value->id;?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['recent_customer']->value->account;?>

                                    </a>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['recent_customer']->value->email;?>

                                </td>


                                <td>
                                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_customer']->value->created_at));?>

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




<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_15414489186099acc6be83b3_53032877 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_15414489186099acc6be83b3_53032877',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {
            let orders_chart_options = {
                chart: {
                    type: 'area',
                    height: 265,
                    sparkline: {
                        enabled: true
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 2,
                },
                series: [{
                    name: 'sales',
                    data: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders_for_chart']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
,
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ]
                }],
                xaxis: {
                    categories: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders_for_chart']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                        '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
',
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ],
                    low: 0,
                    offsetX: 0,
                    offsetY: 0,
                    show: false,
                    labels: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    axisBorder: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    markers: {
                        strokeWidth: 3,
                        colors: "#ffffff",
                        strokeColors: [ '#7366ff' , '#f73164' ],
                        hover: {
                            size: 6,
                        }
                    },
                },
                yaxis: {
                    low: 0,
                    offsetX: 0,
                    offsetY: 0,
                    show: false,
                    labels: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                    axisBorder: {
                        low: 0,
                        offsetX: 0,
                        show: false,
                    },
                },
                grid: {
                    show: false,
                    padding: {
                        left: 0,
                        right: 0,
                        bottom: 0,
                        top: 35
                    }
                },
                colors: [ '#7366ff' , '#f73164' ],
                fill: {
                    type:"gradient",
                    gradient: {
                        type: "vertical",
                        shadeIntensity: 1,
                        inverseColors: !1,
                        opacityFrom: .40,
                        opacityTo: .05,
                        stops: [45, 100]
                    }
                },
                legend: {
                    show: false,
                },
                tooltip: {
                    x: {
                        format: 'MM'
                    },
                },
            };

            let chart = new ApexCharts(document.querySelector("#orders_chart"), orders_chart_options);
            chart.render();
        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
