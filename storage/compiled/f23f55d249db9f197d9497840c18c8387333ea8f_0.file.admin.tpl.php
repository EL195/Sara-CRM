<?php
/* Smarty version 3.1.39, created on 2021-04-07 17:23:17
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/sms/layouts/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606e22c55931e7_90292171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f23f55d249db9f197d9497840c18c8387333ea8f' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/sms/layouts/admin.tpl',
      1 => 1617830589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606e22c55931e7_90292171 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2109069243606e22c5518209_89387145', "head_extras_from_layout");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1419104744606e22c551b318_20186685', "content_body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "agency_crm/layouts/base.tpl");
}
/* {block "head_extras_from_layout"} */
class Block_2109069243606e22c5518209_89387145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_extras_from_layout' => 
  array (
    0 => 'Block_2109069243606e22c5518209_89387145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        var clx_admin_layout = 1;
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "head_extras_from_layout"} */
/* {block "content"} */
class Block_2014838667606e22c558ea69_58703284 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "content_body"} */
class Block_1419104744606e22c551b318_20186685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_body' => 
  array (
    0 => 'Block_1419104744606e22c551b318_20186685',
  ),
  'content' => 
  array (
    0 => 'Block_2014838667606e22c558ea69_58703284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <aside class="page-sidebar">
        <div class="page-logo">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" class="page-logo-link d-flex align-items-center position-relative">

                <?php if (empty($_smarty_tpl->tpl_vars['config']->value['header_show_logo_as'])) {?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_square']))) {?>
                        <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_square'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" aria-roledescription="logo">
                    <?php } else { ?>
                        <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/storage/system/logo-512x512.png?v=2" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" aria-roledescription="logo">
                    <?php }?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_text']))) {?>
                        <span class="page-logo-text mr-1"><?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_text'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</span>
                    <?php } else { ?>
                         
                    <?php }?>

                <?php } else { ?>

                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
" style="width: auto; max-height: 28px;" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" aria-roledescription="logo">

                <?php }?>



            </a>
        </div>

        <nav id="clx-primary-navigation" class="primary-nav" role="navigation">

            <div class="info-card">
                <?php if ($_smarty_tpl->tpl_vars['user']->value->img) {?>
                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
/<?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->img;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
" class="profile-image rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                <?php } else { ?>
                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
/ui/lib/img/default-user-avatar.png" class="profile-image rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                <?php }?>


                <div class="info-card-text">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="d-flex align-items-center text-white">
                                    <span class="text-truncate text-truncate-sm d-inline-block">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->fullname, ENT_QUOTES, 'UTF-8', true);?>

                                    </span>
                    </a>
                </div>

                <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['hide_cover_image'])) && $_smarty_tpl->tpl_vars['config']->value['hide_cover_image'] == 1) {?>

                <?php } else { ?>

                    <img src="<?php echo APP_URL;?>
/ui/theme/default/img/cover-2-lg.png" class="cover" alt="cover">

                <?php }?>



            </div>
            <ul id="clx-navigation-menu" class="nav-menu">

                <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[0];?>


                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'reports')) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'dashboard') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;
echo $_smarty_tpl->tpl_vars['config']->value['redirect_url'];?>
">

                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</span></a></li>
                <?php }?>

                <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[1];?>


                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'customers')) {?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'contacts') {?>active  open<?php }?>">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</span>
                        </a>
                        <ul>
                            <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'customers','create')) {?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/add">
                                        <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Customer'];?>
</span>
                                    </a>
                                </li>
                            <?php }?>

                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/list">
                                    <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Customers'];?>
</span>
                                </a>
                            </li>

                            <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'companies','view') && ($_smarty_tpl->tpl_vars['config']->value['companies'])) {?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/companies">
                                        <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Companies'];?>
</span>
                                    </a>
                                </li>
                            <?php }?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/groups">
                                    <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Groups'];?>
</span>
                                </a>
                            </li><li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/drive">
                                    <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Files'];?>
</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                <?php }?>


                <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[2];?>




                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'sales')) {?>

                    <?php if (($_smarty_tpl->tpl_vars['config']->value['invoicing'] == '1') || ($_smarty_tpl->tpl_vars['config']->value['quotes'] == '1')) {?>



                        <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'invoices') {?>active open<?php }?>">
                            <a href="#">


                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Billing'];?>
</span></a>
                            <ul>


                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/orders/"><span class="nav-link-text">Hosting Orders</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/domain-orders/"><span class="nav-link-text">Domain Orders</span></a></li>

                                <?php if ($_smarty_tpl->tpl_vars['config']->value['invoicing'] == '1') {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</span></a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Invoice'];?>
</span></a></li>

                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/list-recurring/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recurring Invoices'];?>
</span></a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/add/recurring/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Recurring Invoice'];?>
</span></a></li>
                                <?php }?>


                                <?php if ($_smarty_tpl->tpl_vars['config']->value['quotes'] == '1') {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/list"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quotes'];?>
</span></a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
quotes/new"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create New Quote'];?>
</span></a></li>
                                <?php }?>

                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/list/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accounts'];?>
</span></a></li>

                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/payments"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payments'];?>
</span></a></li>



                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_menu_admin']->value['sales'], 'sm_sales');
$_smarty_tpl->tpl_vars['sm_sales']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sm_sales']->value) {
$_smarty_tpl->tpl_vars['sm_sales']->do_else = false;
?>

                                    <?php echo $_smarty_tpl->tpl_vars['sm_sales']->value;?>



                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </ul>
                        </li>

                    <?php }?>

                <?php }?>



                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'support') && ($_smarty_tpl->tpl_vars['config']->value['support'])) {?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'support') {?>active open<?php }?>">
                        <a href="#">



                            <svg height="24px" xmlns='http://www.w3.org/2000/svg' class='ionicon' viewBox='0 0 512 512'><title>Chatbubbles</title><path d='M431 320.6c-1-3.6 1.2-8.6 3.3-12.2a33.68 33.68 0 012.1-3.1A162 162 0 00464 215c.3-92.2-77.5-167-173.7-167-83.9 0-153.9 57.1-170.3 132.9a160.7 160.7 0 00-3.7 34.2c0 92.3 74.8 169.1 171 169.1 15.3 0 35.9-4.6 47.2-7.7s22.5-7.2 25.4-8.3a26.44 26.44 0 019.3-1.7 26 26 0 0110.1 2l56.7 20.1a13.52 13.52 0 003.9 1 8 8 0 008-8 12.85 12.85 0 00-.5-2.7z' fill='none' stroke='currentColor' stroke-linecap='round' stroke-miterlimit='10' stroke-width='32'/><path d='M66.46 232a146.23 146.23 0 006.39 152.67c2.31 3.49 3.61 6.19 3.21 8s-11.93 61.87-11.93 61.87a8 8 0 002.71 7.68A8.17 8.17 0 0072 464a7.26 7.26 0 002.91-.6l56.21-22a15.7 15.7 0 0112 .2c18.94 7.38 39.88 12 60.83 12A159.21 159.21 0 00284 432.11' fill='none' stroke='currentColor' stroke-linecap='round' stroke-miterlimit='10' stroke-width='32'/></svg>

                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Support'];?>
</span></a>
                        <ul>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/create"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Open New Ticket'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/list"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tickets'];?>
</span></a></li>
                            <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'kb','create')) {?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kb/a/edit"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Article'];?>
</span></a></li>
                            <?php }?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kb/a/all"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Articles'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/predefined_replies"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Predefined Replies'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/departments"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Departments'];?>
</span></a></li>



                        </ul>
                    </li>


                <?php }?>







                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'products_n_services')) {?>


                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'products_and_services') {?>active open<?php }?>">
                        <a href="#">


                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>



                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Services'];?>
</span>
                        </a>
                        <ul>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/hosting-plans/"><span class="nav-link-text">Hosting Plans</span> </a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/services/"><span class="nav-link-text">Other Services</span> </a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/groups/"><span class="nav-link-text">Groups</span> </a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/domain-pricing/"><span class="nav-link-text">Domains</span> </a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/servers/"><span class="nav-link-text">Servers</span> </a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/domain-registration-providers/"><span class="nav-link-text">Domain Registration Providers</span> </a></li>
                        </ul>
                    </li>





                <?php }?>

                <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'documents' || $_smarty_tpl->tpl_vars['selected_navigation']->value == 'tasks' || $_smarty_tpl->tpl_vars['selected_navigation']->value == 'calendar') {?>active open<?php }?>">
                    <a href="#">



                        <svg height="22px" xmlns='http://www.w3.org/2000/svg' class='ionicon' viewBox='0 0 512 512'><title>Calendar</title><rect fill='none' stroke='currentColor' stroke-linejoin='round' stroke-width='32' x='48' y='80' width='416' height='384' rx='48'/><circle cx='296' cy='232' r='24'/><circle cx='376' cy='232' r='24'/><circle cx='296' cy='312' r='24'/><circle cx='376' cy='312' r='24'/><circle cx='136' cy='312' r='24'/><circle cx='216' cy='312' r='24'/><circle cx='136' cy='392' r='24'/><circle cx='216' cy='392' r='24'/><circle cx='296' cy='392' r='24'/><path fill='none' stroke='currentColor' stroke-linejoin='round' stroke-width='32' stroke-linecap='round' d='M128 48v32M384 48v32'/><path fill='none' stroke='currentColor' stroke-linejoin='round' stroke-width='32' d='M464 160H48'/></svg>



                        <span class="nav-link-text">Productivity</span>
                    </a>
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tasks/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tasks'];?>
</span> </a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
calendar/events/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Calendar'];?>
</span> </a></li>
                        <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'documents') && ($_smarty_tpl->tpl_vars['config']->value['documents'])) {?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
documents/"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Documents'];?>
</span> </a></li>
                        <?php }?>
                    </ul>
                </li>




                <?php echo $_smarty_tpl->tpl_vars['admin_extra_nav']->value[4];?>






                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'reports')) {?>



                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'reports') {?>active open<?php }?>">
                        <a href="#">

                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>

                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports'];?>
 </span></a>
                        <ul>



                            <?php if ($_smarty_tpl->tpl_vars['config']->value['accounting'] == '1') {?>

                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/invoices"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</span></a></li>

                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/income"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Reports'];?>
</span></a></li>




                            <?php }?>



                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/sales"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
</a></li>



                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_menu_admin']->value['reports'], 'sm_report');
$_smarty_tpl->tpl_vars['sm_report']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sm_report']->value) {
$_smarty_tpl->tpl_vars['sm_report']->do_else = false;
?>

                                <?php echo $_smarty_tpl->tpl_vars['sm_report']->value;?>



                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        </ul>
                    </li>

                <?php }?>

                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'utilities')) {?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'util') {?>active open<?php }?>">
                        <a href="#">

                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command"><path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path></svg>



                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Utilities'];?>
 </span></a>
                        <ul class="nav nav-second-level">


                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/backups"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Backup'];?>
</span></a></li>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/cronlogs"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['CRON Log'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/integrationcode"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Integration Code'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/sys_status"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['System Status'];?>
</span></a></li>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/invoice_access_log"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Access Log'];?>
</span></a></li>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/activity"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Activity Log'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/sent-emails"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Message Log'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sms/init/sent"><span class="nav-link-text">SMS Sent Log</span></a></li>

                            <?php if (($_smarty_tpl->tpl_vars['config']->value['password_manager']) && has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'password_manager')) {?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
password_manager"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password Manager'];?>
</span></a></li>
                            <?php }?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_menu_admin']->value['utilities'], 'sm_utility');
$_smarty_tpl->tpl_vars['sm_utility']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sm_utility']->value) {
$_smarty_tpl->tpl_vars['sm_utility']->do_else = false;
?>

                                <?php echo $_smarty_tpl->tpl_vars['sm_utility']->value;?>



                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        </ul>
                    </li>

                <?php }?>

                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'appearance')) {?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'appearance') {?>active open<?php }?>" id="li_appearance">
                        <a href="#">

                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>


                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Appearance'];?>
 </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/ui"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['User Interface'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/customize"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customize'];?>
</span></a></li>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_menu_admin']->value['appearance'], 'sm_appearance');
$_smarty_tpl->tpl_vars['sm_appearance']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sm_appearance']->value) {
$_smarty_tpl->tpl_vars['sm_appearance']->do_else = false;
?>

                                <?php echo $_smarty_tpl->tpl_vars['sm_appearance']->value;?>



                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/editor"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Editor'];?>
</span></a></li>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
appearance/themes"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Themes'];?>
</span></a></li>

                        </ul>
                    </li>

                <?php }?>

                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'plugins') && ($_smarty_tpl->tpl_vars['config']->value['plugins'])) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'plugins') {?>class="active open"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/plugins/">

                            <svg xmlns='http://www.w3.org/2000/svg' height="22px" class='ionicon' viewBox='0 0 512 512'><title>Cube</title><path d='M448 341.37V170.61A32 32 0 00432.11 143l-152-88.46a47.94 47.94 0 00-48.24 0L79.89 143A32 32 0 0064 170.61v170.76A32 32 0 0079.89 369l152 88.46a48 48 0 0048.24 0l152-88.46A32 32 0 00448 341.37z' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'/><path fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='32' d='M69 153.99l187 110 187-110M256 463.99v-200'/></svg>


                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plugins'];?>
</span></a></li>
                <?php }?>


                <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'settings')) {?>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'settings') {?>active open<?php }?>" id="li_settings">
                        <a href="#">

                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>


                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Settings'];?>
 </span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['General Settings'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Staff'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/roles"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Roles'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/localisation"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Localisation'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/currencies"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currencies'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pg"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payment Gateways'];?>
</span></a></li>

                            <?php if ($_smarty_tpl->tpl_vars['config']->value['accounting'] == '1') {?>

                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/income-categories"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Categories'];?>
</span></a></li>

                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/tags"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage Tags'];?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pmethods"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payment Methods'];?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tax/list"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Taxes'];?>
</span></a></li>
                            <?php }?>


                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/emls"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Settings'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/email-templates"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Templates'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sms/init/settings"><span class="nav-link-text">SMS Settings</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sms/init/templates"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMS Templates'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/customfields"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Custom Contact Fields'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/automation"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Automation Settings'];?>
</span></a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/api"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['API Access'];?>
</span></a></li>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_menu_admin']->value['settings'], 'sm_settings');
$_smarty_tpl->tpl_vars['sm_settings']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sm_settings']->value) {
$_smarty_tpl->tpl_vars['sm_settings']->do_else = false;
?>

                                <?php echo $_smarty_tpl->tpl_vars['sm_settings']->value;?>



                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/features"><span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Features'];?>
</span></a></li>








                        </ul>
                    </li>
                <?php }?>










            </ul>
        </nav>

    </aside>

    <div class="page-content-wrapper">
        <header class="page-header" role="banner">
            <div class="page-logo">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" class="page-logo-link press-scale-down d-flex align-items-center position-relative">

                    <?php if (empty($_smarty_tpl->tpl_vars['config']->value['header_show_logo_as'])) {?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_square']))) {?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_square'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
" aria-roledescription="logo">
                        <?php } else { ?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
/storage/system/logo-512x512.png?v=2" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
" aria-roledescription="logo">
                        <?php }?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_text']))) {?>
                            <span class="page-logo-text mr-1"><?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_text'];
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
</span>
                        <?php } else { ?>
                             
                        <?php }?>

                    <?php } else { ?>

                        <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
" style="width: auto; max-height: 28px;" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
" aria-roledescription="logo">

                    <?php }?>




                    <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                </a>
            </div>
            <!-- DOC: nav menu layout change shortcut -->
            <div class="hidden-md-down dropdown-icon-menu position-relative">
                <a href="#" class="header-btn btn js-waves-off svg-icon svg-icon-primary rounded-0" style="border: none;" data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="2" rx="1"></rect>
                            <rect fill="#000000" opacity="0.3" x="4" y="13" width="16" height="2" rx="1"></rect>
                            <path d="M5,9 L13,9 C13.5522847,9 14,9.44771525 14,10 C14,10.5522847 13.5522847,11 13,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L13,17 C13.5522847,17 14,17.4477153 14,18 C14,18.5522847 13.5522847,19 13,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z" fill="#000000"></path>
                        </g>
                    </svg>
                </a>
                <ul>
                    <li>
                        <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify" title="Minify Navigation">
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
    </g>
</svg></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn js-waves-off" data-action="toggle" data-class="clx-fixed-navigation" title="Lock Navigation">
                                <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <mask fill="white">
            <use xlink:href="#path-1"/>
        </mask>
        <g/>
        <path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000"/>
    </g>
</svg></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="hidden-lg-up">
                <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
        <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg></span>
                </a>
            </div>

            <div class="ml-auto d-flex">

                <div>
                    <a href="javascript:;" class="header-icon cursor-pointer" data-toggle="modal" data-target=".js-modal-notes">
                            <span style="color: #e0e6ed;"><svg height="20px" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text" viewBox="0 0 24 24">
  <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/>
  <path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/>
</svg></span>
                    </a>
                </div>

                <div>
                    <a href="javasctipt:;" id="get_activity" class="header-icon cursor-pointer" data-toggle="dropdown">
                            <span style="color: #e0e6ed;"><svg height="20px" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell" viewBox="0 0 24 24">
  <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0"/>
</svg></span>
                    </a>



                    <div class="dropdown-menu dropdown-menu-animated dropdown-xl">
                        <div class="dropdown-header bg-trans-gradient d-flex justify-content-center align-items-center rounded-top mb-2">
                            <h4 class="m-0 text-center color-white">
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Notifications'];?>

                            </h4>
                        </div>

                        <div class="custom-scroll h-100" id="activity_loaded">
                            <div class="text-center my-3">
                                <div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>
                            </div>
                        </div>
                        <div class="py-2 px-3 bg-faded d-block rounded-bottom text-center border-faded border-bottom-0 border-right-0 border-left-0">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/activity" class="fs-xs fw-500 ml-auto"><?php echo $_smarty_tpl->tpl_vars['_L']->value['See All Activity'];?>
</a>
                        </div>
                    </div>
                </div>

                <div>
                    <a href="#" data-toggle="dropdown" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->fullname, ENT_QUOTES, 'UTF-8', true);?>
" class="header-icon d-flex align-items-center justify-content-center ml-2 cursor-pointer">

                        <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png"  class="profile-image rounded-circle" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->fullname, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php } else { ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;
echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
"  class="profile-image rounded-circle" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->fullname, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php }?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                        <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                            <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                            <span class="mr-2">

                                                <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" class="rounded-circle profile-image" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->fullname, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php } else { ?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;
echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="rounded-circle profile-image" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->fullname, ENT_QUOTES, 'UTF-8', true);?>
">
                                                <?php }?>
                                            </span>
                                <div class="info-card-text">
                                    <div class="fs-lg text-truncate text-truncate-lg"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->fullname, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <span class="text-truncate text-truncate-md opacity-80"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="dropdown-item">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Profile'];?>

                        </a>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password" class="dropdown-item">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Change Password'];?>

                        </a>



                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item fw-500 pt-3 pb-3" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>

                        </a>
                    </div>
                </div>
            </div>
        </header>

        <main id="clx-page-content" role="main" class="page-content <?php if ((isset($_smarty_tpl->tpl_vars['page_content_extra_class']->value))) {?> <?php echo $_smarty_tpl->tpl_vars['page_content_extra_class']->value;?>
 <?php }?>">


            <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {
echo $_smarty_tpl->tpl_vars['notify']->value;
}?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2014838667606e22c558ea69_58703284', "content", $this->tplIndex);
?>



        </main>

        <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>


        <div class="modal fade js-modal-notes modal-backdrop-transparent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-right">
                <div class="modal-content h-100">
                    <div class="dropdown-header bg-primary-900 d-flex align-items-center w-100">
                        <h3 class="text-white mt-2 mb-1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Notes'];?>
</h3>
                        <button type="button" class="close text-white position-absolute pos-top pos-right p-2 m-1 mr-2" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body p-0 h-100 d-flex">
                        <textarea class="form-control rounded-0" id="clx_notes_clipboard" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Whats on your mind'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->notes, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </div>
                </div>
            </div>
        </div>



    </div>

<?php
}
}
/* {/block "content_body"} */
}
