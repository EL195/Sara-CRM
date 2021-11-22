<?php
/* Smarty version 3.1.39, created on 2021-06-05 07:03:59
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bb5a1f65c7d2_43259309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e120c3605648ac28afc28b209b5885ef43549de' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/dashboard.tpl',
      1 => 1622891037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bb5a1f65c7d2_43259309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107989201260bb5a1f6461b2_42660155', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207096743760bb5a1f649da4_72440244', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150448612460bb5a1f653b83_64527902', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_107989201260bb5a1f6461b2_42660155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_107989201260bb5a1f6461b2_42660155',
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
        .bg-gradient-white {
            background: #fff !important;
        }


        .bg-gradient-info {
            background: #E7FAFD !important;
        }

        .bg-gradient-blue {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(7,13,46,1) 0%, rgba(41,20,110,1) 44%, rgba(35,10,112,1) 50%, rgba(69,28,144,1) 100%, rgba(215,246,247,1) 100%); !important;

        }
        .bg-gradient-pink {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(204,147,5,1) 0%, rgba(189,123,10,1) 100%, rgba(237,227,200,1) 100%, rgba(240,133,219,1) 100%, rgba(215,246,247,1) 100%);

        }
        .bg-gradient-purple {
            background: #6B6AD9 !important;

        }

        .chart-widget-list p {
            border-bottom: 1px solid #f1f3fa;
            margin-bottom: .5rem;
            padding-bottom: .5rem;
        }
        .bg-gradient-success {
            background: linear-gradient(
                    87deg
                    , #2dce89 0, #2dcecc 100%) !important;
        }
        .bg-gradient-info {
            background: #E7FAFD !important;
        }

        .bg-gradient-blue {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(7,13,46,1) 0%, rgba(41,20,110,1) 44%, rgba(35,10,112,1) 50%, rgba(69,28,144,1) 100%, rgba(215,246,247,1) 100%); !important;

        }
        .bg-gradient-pink {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(204,147,5,1) 0%, rgba(189,123,10,1) 100%, rgba(237,227,200,1) 100%, rgba(240,133,219,1) 100%, rgba(215,246,247,1) 100%);

        }
        .bg-gradient-white {
            background: #fff !important;
        }
        .bg-gradient-primary {
            background: linear-gradient(
                    87deg
                    , #008060 0, #825ee4 100%) !important;
        }
        .bg-info {
            background: #EFEDFD !important;
        }
        .bg-danger {
            background: #FDEAEB !important;
        }
        .clx-avatar {
            display: inline-block;
            font-size: 1.3em;
            width: 42px;
            height: 42px;
            line-height: 2.5em;
            text-align: center;
            border-radius: 50%;
            background: #4009a7;
            vertical-align: middle;
            color: #fbfbfb;
        }
        .text-light {
            color: #ced4da !important;
        }


        .bg-gradient-success {
            background: #E9F9EE !important;
            color: #27C76F;
        }

        .user-info-title {
            width: 11.785rem;
        }
        .badge-outline-info{
            background: #EFEDFD!important;
            color:#7367F0!important;
        }

        .badge-success{
            background: #CEF9DC!important;
            color:#24C76F!important;
        }
        .badge-danger{
            background: #FDEAEB!important;
            color:#EA5455!important;
        }

        .badge-outline-warning{
            background: #FFF4E9!important;
            color:#FFA045!important;

        }

        .bg-gradient-success {
            background: linear-gradient(
                    87deg
                    , #2dce89 0, #2dcecc 100%) !important;
        }
        .bg-gradient-info {
            background: #E7FAFD !important;
        }

        .bg-gradient-blue {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(7,13,46,1) 0%, rgba(41,20,110,1) 44%, rgba(35,10,112,1) 50%, rgba(69,28,144,1) 100%, rgba(215,246,247,1) 100%); !important;

        }
        .bg-gradient-pink {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(204,147,5,1) 0%, rgba(189,123,10,1) 100%, rgba(237,227,200,1) 100%, rgba(240,133,219,1) 100%, rgba(215,246,247,1) 100%);

        }
        .bg-gradient-white {
            background: #fff !important;
        }
        .bg-gradient-primary {
            background: linear-gradient(
                    87deg
                    , #008060 0, #825ee4 100%) !important;
        }
        .bg-info {
            background: #EFEDFD !important;
        }
        .bg-danger {
            background: #FDEAEB !important;
        }
        .clx-avatar {
            display: inline-block;
            font-size: 1.3em;
            width: 42px;
            height: 42px;
            line-height: 2.5em;
            text-align: center;
            border-radius: 50%;
            background: #4009a7;
            vertical-align: middle;
            color: #fbfbfb;
        }
        .text-light {
            color: #ced4da !important;
        }


        .bg-gradient-success {
            background: #E9F9EE !important;
            color: #27C76F;
        }

        .user-info-title {
            width: 11.785rem;
        }
        .badge-outline-info{
            background: #EFEDFD!important;
            color:#7367F0!important;
        }

        .badge-success{
            background: #CEF9DC!important;
            color:#24C76F!important;
        }
        .badge-danger{
            background: #FDEAEB!important;
            color:#EA5455!important;
        }

        .badge-outline-warning{
            background: #FFF4E9!important;
            color:#FFA045!important;

        }




    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_207096743760bb5a1f649da4_72440244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_207096743760bb5a1f649da4_72440244',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>









    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="card text-white" style="background: #FCA241;">

                        <div class="card-body">

                            <div class="float-right">
                                <div class="icon  icon-shape bg-gradient-white  rounded-circle shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#00C8F5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>



                                </div>
                            </div>
                            <h5 class="fw-normal mt-0 text-white" title="Revenue"> Contacts</h5>
                            <h3 class="mt-3 mb-3 text-white "><?php echo $_smarty_tpl->tpl_vars['total_contacts']->value;?>
</h3>

                        </div>
                    </div>
                </div>




                <div class="col-md-6">
                    <div class="card  text-white" style="background: #6A66DF" >
                        <div class="card-body">
                            <div class="float-right">
                                <div class="icon  icon-shape bg-gradient-white rounded-circle shadow">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#624FC6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mouse-pointer"><path d="M3 3l7.07 16.97 2.51-7.39 7.39-2.51L3 3z"></path><path d="M13 13l6 6"></path></svg>



                                </div>
                            </div>
                            <h5 class="fw-normal text-white mt-0" title="Revenue">Audiences</h5>
                            <h3 class="mt-3 mb-3 text-white"><?php echo $_smarty_tpl->tpl_vars['total_audiences']->value;?>
</h3>

                        </div>
                    </div>
                </div>




            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Email Sending Volumes</h4>
                            <div id="email_sending_volume" class="apex-charts"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="row ">
                <div class="col-md-6">
                    <div class="card widget-flat text-white" style="background: #69A1FF;">
                        <div class="card-body">
                            <div class="float-right">

                                <div class="icon icon-shape bg-gradient-white text-white rounded-circle shadow">


                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#727DF5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>


                                </div>
                            </div>
                            <h5 class="fw-normal mt-0 text-white " title="Revenue">SMS Sent</h5>
                            <h3 class="mt-3 mb-3 font-weight-bold  text-white"><?php echo $_smarty_tpl->tpl_vars['total_sms_sent']->value;?>
</h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card widget-flat  text-white" style="background: #2ADE70">
                        <div class="card-body">
                            <div class="float-right">
                                <div class="icon icon-shape bg-gradient-white text-white rounded-circle shadow">


                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2CDF70" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </div>
                            </div>
                            <h5 class="fw-normal text-white mt-0" title="Revenue">Email Sent</h5>
                            <h3 class="mt-3 mb-3 text-white"><?php echo $_smarty_tpl->tpl_vars['total_email_sent']->value;?>
</h3>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <h5>Email Delivery Status</h5>

                            <div id="email_delivery_status" class="apex-charts mb-4 mt-4"></div>


                            <div class="chart-widget-list">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#0B19A9" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                                    </svg> Delivered
                                    <span class="float-right"><?php echo $_smarty_tpl->tpl_vars['total_delivered_email']->value;?>
</span>
                                </p>
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffbc00" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                        <circle cx="8" cy="8" r="8"/>
                                    </svg> Pending
                                    <span class="float-right"><?php echo $_smarty_tpl->tpl_vars['total_pending_email']->value;?>
</span>
                                </p>
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fa5c7c" class="bi bi-circle-fill" viewBox="0 0 16 16">
                                        <circle cx="8" cy="8" r="8"/>
                                    </svg> Bounced
                                    <span class="float-right"><?php echo $_smarty_tpl->tpl_vars['total_bounced_email']->value;?>
</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>

    </div>









    <div class="row mt-3">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3>Recent Contacts</h3>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_contacts']->value, 'recent_contact');
$_smarty_tpl->tpl_vars['recent_contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recent_contact']->value) {
$_smarty_tpl->tpl_vars['recent_contact']->do_else = false;
?>

                            <tr>
                                <td>
                                    <a class="text-success h5" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['recent_contact']->value->id;?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['recent_contact']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['recent_contact']->value->last_name;?>

                                    </a>
                                </td>
                                <td class="text-info h5">
                                    <?php echo $_smarty_tpl->tpl_vars['recent_contact']->value->email;?>

                                </td>


                                <td>
                                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['recent_contact']->value->created_at));?>

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
                    <h4>Lead Acquisition</h4>
                    <div id="lead_acquisition_chart" class="apex-charts"></div>
                </div>
            </div>
        </div>

    </div>




<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_150448612460bb5a1f653b83_64527902 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_150448612460bb5a1f653b83_64527902',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            let email_delivery_status_chart_options = {
                chart: { height: 210, type: "donut" },
                legend: { show: !1 },
                stroke: { colors: ["transparent"] },
                series: [<?php echo $_smarty_tpl->tpl_vars['total_delivered_email']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['total_pending_email']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['total_bounced_email']->value;?>
],
                labels: ["Delivered", "Pending", "Bounced"],
                colors: ["#0B19A9", "#ffbc00", "#fa5c7c"],
                responsive: [
                    {
                        breakpoint: 480,
                        options: { chart: { width: 200 }, legend: { position: "bottom" } },
                    },
                ],
            };


            new ApexCharts(document.querySelector("#email_delivery_status"), email_delivery_status_chart_options).render();

            let email_sending_volume_options = {
                chart: { height: 340, type: "area",
                    toolbar: {
                        show: false
                    }
                    },
                dataLabels: { enabled: !1 },
                stroke: { curve: "smooth", width: 4 },
                series: [
                    {
                        name: "Total Email Sent",
                        data: [
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['email_sending_volume']->value, 'email_sent');
$_smarty_tpl->tpl_vars['email_sent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email_sent']->value) {
$_smarty_tpl->tpl_vars['email_sent']->do_else = false;
?>
                            <?php echo $_smarty_tpl->tpl_vars['email_sent']->value['email_sent'];?>
,
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        ],
                    },
                ],
                zoom: { enabled: !1 },
                legend: { show: !1 },
                colors: ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"],
                xaxis: {
                    type: "string",
                    categories: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['email_sending_volume']->value, 'email_sent');
$_smarty_tpl->tpl_vars['email_sent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email_sent']->value) {
$_smarty_tpl->tpl_vars['email_sent']->do_else = false;
?>
                            '<?php echo $_smarty_tpl->tpl_vars['email_sent']->value['month_translation'];?>
',
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ],
                    tooltip: { enabled: !1 },
                    axisBorder: { show: !1 },
                    labels: { },
                },
                yaxis: {
                    labels: {
                        formatter: function (e) {
                            return e;
                        },
                        offsetX: -15,
                    },
                },
                fill: {
                    type: "gradient",
                    gradient: {
                        type: "vertical",
                        shadeIntensity: 1,
                        inverseColors: !1,
                        opacityFrom: 0.45,
                        opacityTo: 0.05,
                        stops: [45, 100],
                    },
                },
            };

            new ApexCharts(document.querySelector("#email_sending_volume"), email_sending_volume_options).render();

            let lead_acquisition_chart_options = {
                chart: {
                    height: 318,

                    type: "bar",

                    dropShadow: { enabled: !0, opacity: 0.2, blur: 7, left: -7, top: 7 },
                    toolbar: {
                        show: false
                    },

                },
                dataLabels: { enabled: !1 },
                stroke: { curve: "smooth", width: 3 },

                plotOptions: {
                    bar: {
                        columnWidth: '30%',
                    }
                },

                series: [
                    { name: "Total", data: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lead_acquisitions']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                                <?php echo $_smarty_tpl->tpl_vars['data']->value['contact_count'];?>
,
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        ] },
                ],

                colors: ["#0acf97", "#fa5c7c", "#ffbc00"],
                endingShape: 'rounded',
                startingShape: "rounded",
                zoom: { enabled: !1 },
                legend: { show: !1 },
                xaxis: {
                    type: "string",
                    categories: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lead_acquisitions']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                        "<?php echo $_smarty_tpl->tpl_vars['data']->value['day'];?>
",
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ],
                    tooltip: { enabled: !1 },
                    axisBorder: { show: !1 },
                },
                yaxis: {
                    labels: {
                        formatter: function (e) {
                            return e;
                        },
                        offsetX: -15,
                    },
                },
            };

            new ApexCharts(document.querySelector("#lead_acquisition_chart"), lead_acquisition_chart_options).render();


        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
