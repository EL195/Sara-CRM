<?php
/* Smarty version 3.1.39, created on 2021-08-02 18:06:14
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61086c56d77729_11195856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef13511d0f75f6111b99d35865c214b048c8fdf6' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/order.tpl',
      1 => 1627941969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61086c56d77729_11195856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143757954161086c56d1bb42_53286743', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58338497061086c56d1d419_56899445', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81872750961086c56d756a6_77661849', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_143757954161086c56d1bb42_53286743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_143757954161086c56d1bb42_53286743',
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
        padding: 10px;
        text-align: center;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: .357rem!important;

        font-weight: 600
    }
    .icon {
        width: 2.5rem;
        height: 2.5rem;
        color:#7367F0 ;
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
        border-radius: .357rem!important;
    }
    .bg-gradient-red {
        background: linear-gradient(
                87deg
                , #f5365c 0, #f56036 100%) !important;
    }

    .bg-gradient-success {
        background: #E9F9EE !important;
        color: #27C76F;
    }
    .bg-gradient-blue {
        background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(7,13,46,1) 0%, rgba(41,20,110,1) 44%, rgba(35,10,112,1) 50%, rgba(69,28,144,1) 100%, rgba(215,246,247,1) 100%); !important;

    }
    .bg-gradient-pink {
        background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(204,147,5,1) 0%, rgba(189,123,10,1) 100%, rgba(237,227,200,1) 100%, rgba(240,133,219,1) 100%, rgba(215,246,247,1) 100%);

    }
    .bg-gradient-primary {
        background: linear-gradient(
                87deg
                , #008060 0, #825ee4 100%) !important;
    }
    .bg-info {
        background: #EFEDFD !important;
    }
    .clx-avatar {
        display: inline-block;
        font-size: 1.3em;
        width: 42px;
        height: 42px;
        line-height: 2;
        text-align: center;
        border-radius: 0%;
        background: #eee5ff;
        vertical-align: middle;
        color: #a47dfd;
    }
    .text-light {
        color: #ced4da !important;
    }
    .table-info{
        background-color: #EFEDFD;
    }

    .alert-primary .close, .bg-light-primary {
        color: #7367F0!important;
    }




    .user-info-title {
        width: 11.785rem;
    }
</style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_58338497061086c56d1d419_56899445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_58338497061086c56d1d419_56899445',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <!-- User Card starts-->
        <div class="col-md-12">
            <div class="card user-card">
                <div class="card-body" >
                    <h2><?php echo $_smarty_tpl->tpl_vars['plan']->value->name;?>
 [<?php echo $_smarty_tpl->tpl_vars['order']->value->tracking_id;?>
]</h2>
                    <div class="hr-line-dashed"></div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
                            <div class="user-info-wrapper">

                                <div class="d-flex flex-wrap my-50 mb-2">
                                    <div class="user-info-title text-muted">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>



                                        <span class="card-text user-info-title text-muted font-weight-bold mb-0 ml-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</span>
                                    </div>
                                    <p class="card-text mb-0">
                                        <?php echo $_smarty_tpl->tpl_vars['order']->value->date;?>


                                    </p>
                                </div>
                                <div class="d-flex flex-wrap my-50 mb-2">
                                    <div class="user-info-title text-muted">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                                        <span class="card-text user-info-title text-muted  font-weight-bold mb-0 ml-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tracking Id'];?>
</span>
                                    </div>
                                    <p class="card-text mb-0"><?php echo $_smarty_tpl->tpl_vars['order']->value->tracking_id;?>
</p>
                                </div>
                                <div class="d-flex flex-wrap my-50 mb-2">
                                    <div class="user-info-title text-muted">



                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="card-text user-info-title text-muted  font-weight-bold mb-0 ml-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client'];?>
</span>
                                    </div>
                                    <p class="card-text mb-0">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['contact']->value['account'])) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['contact']->value['account'];?>

                                        <?php }?>
                                    </p>
                                </div>
                                <div class="d-flex flex-wrap my-50 mb-2">
                                    <div class="user-info-title text-muted">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                        <span class="card-text user-info-title text-muted font-weight-bold mb-0 ml-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</span>
                                    </div>
                                    <p class="card-text mb-0">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['contact']->value['address'])) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['contact']->value['address'];?>

                                        <?php }?>

                                    </p>
                                </div>
                                <div class="d-flex flex-wrap mb-2">
                                    <div class="user-info-title text-muted">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                                        <span class="card-text user-info-title  text-muted font-weight-bold mb-0 ml-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</span>
                                    </div>
                                    <p class="card-text mb-0">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['contact']->value['city'])) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['contact']->value['city'];?>

                                        <?php }?>
                                    </p>
                                </div>
                                <div class="d-flex flex-wrap mb-2">
                                    <div class="user-info-title text-muted">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-flag"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>

                                        <span class="card-text user-info-title  text-muted font-weight-bold mb-0 ml-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</span>
                                    </div>
                                    <p class="card-text mb-0">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['contact']->value['country'])) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['contact']->value['country'];?>

                                        <?php }?>
                                    </p>
                                </div>

                            </div>

                        </div>
                        <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
                            <div class="user-info-wrapper">


                                <div class="d-flex flex-wrap my-50 mb-2">
                                    <div class="user-info-title text-muted">


                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                        <span class="card-text user-info-title text-muted  font-weight-bold mb-0 ml-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</span>
                                    </div>
                                    <p class="card-text mb-0">
                                        <?php echo $_smarty_tpl->tpl_vars['order']->value->total;?>

                                    </p>
                                </div>
                                <div class="d-flex flex-wrap my-50 mb-2">
                                    <div class="user-info-title text-muted">


                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-compass"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
                                        <span class="card-text user-info-title text-muted  font-weight-bold mb-0 ml-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Number'];?>
</span>
                                    </div>
                                    <p class="card-text mb-0"><?php echo $_smarty_tpl->tpl_vars['order']->value->invoice_id;?>
</p>
                                </div>
                                <div class="d-flex flex-wrap my-50 mb-2">
                                    <div class="user-info-title text-muted">


                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                        <span class="card-text user-info-title text-muted font-weight-bold mb-0 ml-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</span>
                                    </div>
                                    <p class="card-text mb-0">
                                        <?php echo cloudonex_get_order_status_with_badge($_smarty_tpl->tpl_vars['order']->value->status);?>

                                       </p>
                                </div>
                                <div class="d-flex flex-wrap mb-2">
                                    <div class="user-info-title text-muted">


                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>
                                        <span class="card-text user-info-title  text-muted font-weight-bold mb-0 ml-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</span>
                                    </div>
                                    <p class="card-text mb-0"><?php ob_start();
echo __($_smarty_tpl->tpl_vars['order']->value->type);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</p>
                                </div>
                                <div class="d-flex flex-wrap mb-2">
                                    <div class="user-info-title text-muted">


                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>

                                        <span class="card-text user-info-title  text-muted font-weight-bold mb-0 ml-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Domain'];?>
</span>
                                    </div>
                                    <p class="card-text mb-0"><?php echo $_smarty_tpl->tpl_vars['order']->value->domain;?>
</p>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <?php if ($_smarty_tpl->tpl_vars['order']->value->status != 'Active') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/set-order-status/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
/approve" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Approve Order'];?>
</a>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['order']->value->status != 'Pending') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/set-order-status/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
/pending" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Pending'];?>
</a>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['order']->value->status != 'Cancelled') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/set-order-status/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
/cancel" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel Order'];?>
</a>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['order']->value->status != 'Fraud' && $_smarty_tpl->tpl_vars['order']->value->status != 'Active') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/set-order-status/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
/fraud" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Set as Fraud'];?>
</a>
                    <?php }?>


                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'hostbilling/delete-order/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
');" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete Order'];?>
</a>


                    <?php if ($_smarty_tpl->tpl_vars['order']->value->status == 'Active') {?>

                        <div class="hr-line-dashed"></div>



                        <div class="row">
                            <div class="col-md-4">

                                <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Automations'];?>
</h3>

                                <hr>

                                <div class="mb-3">
                                    <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Automation Server'];?>
</label>
                                    <select class="custom-select" id="automation_server">
                                        <option value=""><?php echo __('None');?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hosting_servers']->value, 'hosting_server');
$_smarty_tpl->tpl_vars['hosting_server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hosting_server']->value) {
$_smarty_tpl->tpl_vars['hosting_server']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['hosting_server']->value->id;?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['hosting_server']->value->id === $_smarty_tpl->tpl_vars['order']->value->server_id) {?>
                                                selected
                                                <?php } elseif (!empty($_smarty_tpl->tpl_vars['server']->value) && $_smarty_tpl->tpl_vars['server']->value->id == $_smarty_tpl->tpl_vars['hosting_server']->value->id) {?>
                                                selected
                                            <?php }?>
                                            ><?php echo $_smarty_tpl->tpl_vars['hosting_server']->value->name;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>

                                <?php if (!$_smarty_tpl->tpl_vars['order']->value->automation_run) {?>

                                    <?php if ($_smarty_tpl->tpl_vars['server']->value) {?>


                                        <form id="form_automation">

                                            <h4 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['server']->value->name;?>
</h4>




                                            <?php if ($_smarty_tpl->tpl_vars['server']->value->type === 'cpanel') {?>
                                                <h5 class="mb-3">cPanel</h5>

                                                <div class="mb-3">
                                                    <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Domain'];?>
</label>
                                                    <input class="form-control" id="automation_input_domain" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->domain;?>
" name="domain">
                                                </div>

                                                <div class="mb-3">
                                                    <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
                                                    <input class="form-control" id="automation_input_username" name="username">
                                                </div>
                                                <div class="mb-3">
                                                    <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>
                                                    <input class="form-control" name="email" value="<?php if (!empty($_smarty_tpl->tpl_vars['contact']->value->email)) {
echo $_smarty_tpl->tpl_vars['contact']->value->email;
}?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="password" id="automation_input_password" aria-label="Password" aria-describedby="btn_regenerate_password">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-default waves-effect waves-themed" type="button" id="btn_regenerate_password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Regenerate Password'];?>
</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label><?php echo __('Package');?>
</label>
                                                    <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['plan']->value->api_name;?>
" name="plan">
                                                </div>


                                                <?php } elseif ($_smarty_tpl->tpl_vars['server']->value->type === 'directadmin') {?>

                                                    <h5 class="mb-3">DirectAdmin</h5>

                                                    <div class="mb-3">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Domain'];?>
</label>
                                                        <input class="form-control" id="automation_input_domain" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->domain;?>
" name="domain">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
                                                        <input class="form-control" id="automation_input_username" name="username">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>
                                                        <input class="form-control" name="email" value="<?php if (!empty($_smarty_tpl->tpl_vars['contact']->value->email)) {
echo $_smarty_tpl->tpl_vars['contact']->value->email;
}?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="password" id="automation_input_password" aria-label="Password" aria-describedby="btn_regenerate_password">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-outline-default waves-effect waves-themed" type="button" id="btn_regenerate_password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Regenerate Password'];?>
</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label><?php echo __('Package');?>
</label>
                                                        <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['plan']->value->api_name;?>
" name="plan">
                                                    </div>


                                                <div class="mb-3">
                                                    <label><?php echo __('IP');?>
</label>
                                                    <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['server']->value->host;?>
" name="ip">
                                                </div>


                                            <?php } else { ?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['domain'])) {?>

                                                    <div class="mb-3">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['domain']['label'];?>
</label>
                                                        <input class="form-control" id="automation_input_domain" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->domain;?>
" name="domain">
                                                    </div>


                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['first_name'])) {?>

                                                    <div class="mb-3">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['first_name']['label'];?>
</label>
                                                        <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['first_name'];?>
" name="first_name">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['first_name']['help_block'])) {?>
                                                            <p><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['first_name']['help_block'];?>
</p>
                                                        <?php }?>

                                                    </div>

                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['last_name'])) {?>

                                                    <div class="mb-3">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['last_name']['label'];?>
</label>
                                                        <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['last_name'];?>
" name="last_name">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['last_name']['help_block'])) {?>
                                                            <p><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['last_name']['help_block'];?>
</p>
                                                        <?php }?>

                                                    </div>

                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['address'])) {?>

                                                    <div class="mb-3">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['address']['label'];?>
</label>
                                                        <input class="form-control"
                                                               <?php if (!empty($_smarty_tpl->tpl_vars['contact']->value['address'])) {?>
                                                                   value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['address'];?>
"
                                                                   <?php } elseif (!empty($_smarty_tpl->tpl_vars['form_fields']->value['address']['default'])) {?>
                                                                   value="<?php echo $_smarty_tpl->tpl_vars['form_fields']->value['address']['default'];?>
"
                                                               <?php }?>
                                                               name="address">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['address']['help_block'])) {?>
                                                            <p><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['address']['help_block'];?>
</p>
                                                        <?php }?>

                                                    </div>

                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['city'])) {?>

                                                    <div class="mb-3">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['city']['label'];?>
</label>
                                                        <input class="form-control"
                                                                <?php if (!empty($_smarty_tpl->tpl_vars['contact']->value['city'])) {?>
                                                                    value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['city'];?>
"
                                                                <?php } elseif (!empty($_smarty_tpl->tpl_vars['form_fields']->value['city']['default'])) {?>
                                                                    value="<?php echo $_smarty_tpl->tpl_vars['form_fields']->value['city']['default'];?>
"
                                                                <?php }?>
                                                               name="city">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['city']['help_block'])) {?>
                                                            <p><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['city']['help_block'];?>
</p>
                                                        <?php }?>

                                                    </div>

                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['state'])) {?>

                                                    <div class="mb-3">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['state']['label'];?>
</label>
                                                        <input class="form-control"
                                                                <?php if (!empty($_smarty_tpl->tpl_vars['contact']->value['state'])) {?>
                                                                    value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['state'];?>
"
                                                                <?php } elseif (!empty($_smarty_tpl->tpl_vars['form_fields']->value['state']['default'])) {?>
                                                                    value="<?php echo $_smarty_tpl->tpl_vars['form_fields']->value['state']['default'];?>
"
                                                                <?php }?>
                                                               name="state">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['state']['help_block'])) {?>
                                                            <p><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['state']['help_block'];?>
</p>
                                                        <?php }?>

                                                    </div>

                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['zip'])) {?>

                                                    <div class="mb-3">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['zip']['label'];?>
</label>
                                                        <input class="form-control"
                                                                <?php if (!empty($_smarty_tpl->tpl_vars['contact']->value['zip'])) {?>
                                                                    value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['zip'];?>
"
                                                                <?php } elseif (!empty($_smarty_tpl->tpl_vars['form_fields']->value['zip']['default'])) {?>
                                                                    value="<?php echo $_smarty_tpl->tpl_vars['form_fields']->value['zip']['default'];?>
"
                                                                <?php }?>
                                                               name="zip">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['zip']['help_block'])) {?>
                                                            <p><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['zip']['help_block'];?>
</p>
                                                        <?php }?>

                                                    </div>

                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['country'])) {?>

                                                    <div class="mb-3">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['country']['label'];?>
</label>
                                                        <input class="form-control"
                                                                <?php if (!empty($_smarty_tpl->tpl_vars['contact']->value['country'])) {?>
                                                                    value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['country'];?>
"
                                                                <?php } elseif (!empty($_smarty_tpl->tpl_vars['form_fields']->value['country']['default'])) {?>
                                                                    value="<?php echo $_smarty_tpl->tpl_vars['form_fields']->value['country']['default'];?>
"
                                                                <?php }?>
                                                               name="country">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['country']['help_block'])) {?>
                                                            <p><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['country']['help_block'];?>
</p>
                                                        <?php }?>

                                                    </div>

                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['email'])) {?>

                                                    <div class="mb-3">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['email']['label'];?>
</label>
                                                        <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['email'];?>
" name="email">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['email']['help_block'])) {?>
                                                            <p><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['email']['help_block'];?>
</p>
                                                        <?php }?>

                                                    </div>

                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['phone'])) {?>

                                                    <div class="mb-3">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['phone']['label'];?>
</label>
                                                        <input class="form-control"
                                                                <?php if (!empty($_smarty_tpl->tpl_vars['contact']->value['phone'])) {?>
                                                                    value="<?php echo $_smarty_tpl->tpl_vars['contact']->value['phone'];?>
"
                                                                <?php } elseif (!empty($_smarty_tpl->tpl_vars['form_fields']->value['phone']['default'])) {?>
                                                                    value="<?php echo $_smarty_tpl->tpl_vars['form_fields']->value['phone']['default'];?>
"
                                                                <?php }?>
                                                               name="phone">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['phone']['help_block'])) {?>
                                                            <p><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['phone']['help_block'];?>
</p>
                                                        <?php }?>

                                                    </div>

                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['username'])) {?>

                                                    <div class="mb-3">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['username']['label'];?>
</label>
                                                        <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->username;?>
" name="username">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['username']['help_block'])) {?>
                                                            <p><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['username']['help_block'];?>
</p>
                                                        <?php }?>

                                                    </div>

                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['password'])) {?>

                                                    <label><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['password']['label'];?>
</label>

                                                    <?php if ($_smarty_tpl->tpl_vars['order']->value->password) {?>

                                                        <div class="mb-3">

                                                            <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->password;?>
" name="password">
                                                            <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['password']['help_block'])) {?>
                                                                <p><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['password']['help_block'];?>
</p>
                                                            <?php }?>

                                                        </div>

                                                        <?php } else { ?>

                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="password" id="automation_input_password" aria-label="Password" aria-describedby="btn_regenerate_password">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-outline-default waves-effect waves-themed" type="button" id="btn_regenerate_password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Regenerate Password'];?>
</button>
                                                            </div>
                                                        </div>
                                                    <?php }?>





                                                <?php }?>

                                                <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['plan'])) {?>

                                                    <div class="mb-3">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['plan']['label'];?>
</label>
                                                        <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['plan']->value->api_name;?>
" name="plan">
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['form_fields']->value['plan']['help_block'])) {?>
                                                        <p><?php echo $_smarty_tpl->tpl_vars['form_fields']->value['plan']['help_block'];?>
</p>
                                                        <?php }?>

                                                    </div>

                                                <?php }?>



                                            <?php }?>

                                            <button class="btn btn-primary" id="btn_automation_create_account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create Account'];?>
</button>

                                            <input type="hidden" name="order_id" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
                                            <input type="hidden" name="action" value="create_account">

                                        </form>





                                        <?php } else { ?>

                                        <p> <?php echo $_smarty_tpl->tpl_vars['_L']->value['No server/hosting provider is defined for this Hosting Plan,'];?>

                                             <br>
                                            <?php if ($_smarty_tpl->tpl_vars['plan']->value) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/hosting/<?php echo $_smarty_tpl->tpl_vars['plan']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Hosting Plan'];?>
</a>
                                            <?php }?>
                                        </p>

                                    <?php }?>



                                    <?php } else { ?>




                                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Credentials'];?>
</h5>

                                    <div class="hr-line-dashed"></div>

                                    <?php if (!empty($_smarty_tpl->tpl_vars['order']->value->login_url)) {?>
                                        <p>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['order']->value->login_url;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['order']->value->login_url;?>
</a>
                                        </p>
                                    <?php }?>

                                    <?php if (!empty($_smarty_tpl->tpl_vars['order']->value->username)) {?>
                                        <div class="mb-3">
                                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
                                            <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->username;?>
">
                                        </div>
                                    <?php }?>

                                    <?php if (!empty($_smarty_tpl->tpl_vars['order']->value->password)) {?>
                                        <div class="mb-3">
                                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
                                            <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->password;?>
">
                                        </div>
                                    <?php }?>

                                <?php }?>


                            </div>

                            <div class="col-md-8">
                                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order'];?>
</h4>
                                <hr>
                                <form method="post" id="form_main">

                                    <div class="mb-3">
                                        <label for="login_type"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
                                        <select class="custom-select" name="login_type" id="login_type">
                                            <option value=""><?php echo __('None');?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supported_server_types']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"

                                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->login_type == $_smarty_tpl->tpl_vars['key']->value) {?>
                                                            selected
                                                        <?php }?>

                                                ><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="login_url"><?php echo __('URL');?>
</label>
                                        <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->login_url;?>
" name="login_url" id="login_url">
                                    </div>

                                    <div class="mb-3">
                                        <label for="hosting_order_username"><?php echo __('Username');?>
</label>
                                        <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->username;?>
" name="username" id="hosting_order_username">
                                    </div>

                                    <div class="mb-3">
                                        <label for="hosting_order_password"><?php echo __('Password');?>
</label>
                                        <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->password;?>
" name="password" id="hosting_order_password">
                                    </div>


                                    <h5 class="my-3"><?php echo __('Activation Message');?>
</h5>
                                    <div class="mb-3">
                                        <label for="activation_subject"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</label>
                                        <input type="text" class="form-control" id="activation_subject" name="activation_subject" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->activation_subject;?>
">
                                    </div>
                                    <div class="mb-3">
                                        <label for="activation_message"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Message'];?>
</label>
                                        <textarea class="form-control" id="activation_message" name="activation_message" rows="3"><?php echo $_smarty_tpl->tpl_vars['order']->value->activation_message;?>
</textarea>
                                    </div>

                                    <input type="hidden" name="order_id" id="order_id" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">

                                    <button type="submit" id="btn_activation_message_save" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                                    <button type="submit" id="btn_activation_message_send" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Send'];?>
</button>

                                </form>
                            </div>
                        </div>



                    <?php }?>






                </div>
            </div>

        </div>

    </div>


<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_81872750961086c56d756a6_77661849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_81872750961086c56d756a6_77661849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        function generateRandomPassword(letters, numbers, either) {
            let chars = [
                "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz", // letters
                "0123456789", // numbers
                "*@#" // either
            ];

            return [letters, numbers, either].map(function(len, i) {
                return Array(len).fill(chars[i]).map(function(x) {
                    return x[Math.floor(Math.random() * x.length)];
                }).join('');
            }).concat().join('').split('').sort(function(){
                return 0.5-Math.random();
            }).join('')
        }

        $(function () {
            $('#activation_message').redactor(
                {
                    minHeight: 200
                }
            );

            let $btn_activation_message_save = $('#btn_activation_message_save');
            let $btn_activation_message_send = $('#btn_activation_message_send');
            let $form_main = $('#form_main');

            $btn_activation_message_save.on('click',function (event) {
                event.preventDefault();
                $btn_activation_message_save.prop('disabled',true);
                axios.post(base_url + 'hostbilling/save-order',$form_main.serialize()).then(function (response) {
                    $btn_activation_message_save.prop('disabled',false);

                    toastr.success('Saved.');

                }).catch(function (error) {

                    $btn_activation_message_save.prop('disabled',false);

                    $.each(error.response.data, function(key, value) {
                        toastr.error(value);
                    });

                });
            });

            $btn_activation_message_send.on('click',function (event) {
                event.preventDefault();
                $btn_activation_message_send.prop('disabled',true);
                axios.post(base_url + 'hostbilling/save-and-send-order-email',$form_main.serialize()).then(function (response) {
                    $btn_activation_message_send.prop('disabled',false);

                    toastr.success('Email Sent.');

                }).catch(function (error) {

                    $btn_activation_message_send.prop('disabled',false);

                    $.each(error.response.data, function(key, value) {
                        toastr.error(value);
                    });

                });
            });

            let $btn_automation_create_account = $('#btn_automation_create_account');
            let $form_automation = $('#form_automation');

            $form_automation.on('submit',function (event) {
                event.preventDefault();
                $btn_automation_create_account.prop('disabled',true);
                $.post(base_url + 'hostbilling/run-automation', $form_automation.serialize())
                    .done(function (data) {
                        $btn_automation_create_account.prop('disabled',false);
                        location.reload();
                    }).fail(function(data) {
                    $btn_automation_create_account.prop('disabled',false);
                    let errors = $.parseJSON(data.responseText);
                    $.each(errors, function(key, value) {
                        toastr.error(value);
                    });
                });



            });



            let $btn_regenerate_password = $('#btn_regenerate_password');
            let $automation_input_password = $('#automation_input_password');
            $automation_input_password.val(generateRandomPassword(8,3,2));
            $btn_regenerate_password.on('click',function () {
                $automation_input_password.val(generateRandomPassword(8,3,2));
            });

            let $automation_input_domain = $('#automation_input_domain');
            let $automation_input_username = $('#automation_input_username');

            if($automation_input_domain.val())
                {
                    $automation_input_username.val($automation_input_domain.val().split('.')[0].substring(0,8));
                }

            let $automation_server = $('#automation_server');
            $automation_server.on('change',function () {
                $.post(base_url + 'hostbilling/change-automation-server-for-order', {
                    order_id: <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
,
                    server_id: $automation_server.val(),
                })
                    .done(function (data) {

                        toastr.success('Updated!');

                    }).fail(function(data) {
                    toastr.error('Unable to change!');
                });
            });




        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
