<?php
/* Smarty version 3.1.39, created on 2021-06-20 17:04:00
  from '/Users/razib/Documents/valet/business-suite/apps/freight/views/freight_client_layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cfad40a57976_59167014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a43876454cf4a7e0d1d60ac55cf3b321bd856a69' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/freight/views/freight_client_layout.tpl',
      1 => 1609761869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cfad40a57976_59167014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81887539860cfad40a30fc3_31537357', "content_body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/base.tpl");
}
/* {block "content"} */
class Block_115823440360cfad40a557c3_48412974 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "content_body"} */
class Block_81887539860cfad40a30fc3_31537357 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_body' => 
  array (
    0 => 'Block_81887539860cfad40a30fc3_31537357',
  ),
  'content' => 
  array (
    0 => 'Block_115823440360cfad40a557c3_48412974',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <aside class="page-sidebar">
        <div class="page-logo">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
freight/client/dashboard/" class="page-logo-link d-flex align-items-center position-relative">

                <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_square']))) {?>
                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_square'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
" aria-roledescription="logo">
                <?php } else { ?>
                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
/storage/system/logo-512x512.png?v=2" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
" aria-roledescription="logo">
                <?php }?>


                <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_text']))) {?>
                    <span class="page-logo-text mr-1"><?php echo $_smarty_tpl->tpl_vars['config']->value['logo_text'];?>
</span>
                <?php } else { ?>
                     
                <?php }?>



            </a>
        </div>



        <nav id="js-primary-nav" class="primary-nav" role="navigation">

            <div class="info-card">
                <?php if ($_smarty_tpl->tpl_vars['user']->value->img) {?>
                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
/<?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->img;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
" class="profile-image rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
">
                <?php } else { ?>
                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
/ui/lib/img/default-user-avatar.png" class="profile-image rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
">
                <?php }?>


                <div class="info-card-text">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/profile" class="d-flex align-items-center text-white">
                                    <span class="text-truncate text-truncate-sm d-inline-block">
                                        <?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>

                                    </span>
                    </a>
                </div>

                <img src="<?php echo APP_URL;?>
/ui/theme/default/img/cover-2-lg.png" class="cover" alt="cover">

            </div>



            <ul id="js-nav-menu" class="nav-menu">

                <?php echo $_smarty_tpl->tpl_vars['client_extra_nav']->value[0];?>



                <li <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'dashboard') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
freight/client/dashboard/">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
                                <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
                                <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
                                <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
                            </g>
                        </svg>
                        <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</span></a></li>

                <li <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'forwarding_addresses') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
freight/client/forwarding-addresses/">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M10.9,2 C11.4522847,2 11.9,2.44771525 11.9,3 C11.9,3.55228475 11.4522847,4 10.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,16 C20,15.4477153 20.4477153,15 21,15 C21.5522847,15 22,15.4477153 22,16 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L10.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M24.0690576,13.8973499 C24.0690576,13.1346331 24.2324969,10.1246259 21.8580869,7.73659596 C20.2600137,6.12944276 17.8683518,5.85068794 15.0081639,5.72356847 L15.0081639,1.83791555 C15.0081639,1.42370199 14.6723775,1.08791555 14.2581639,1.08791555 C14.0718537,1.08791555 13.892213,1.15726043 13.7542266,1.28244533 L7.24606818,7.18681951 C6.93929045,7.46513642 6.9162184,7.93944934 7.1945353,8.24622707 C7.20914339,8.26232899 7.22444472,8.27778811 7.24039592,8.29256062 L13.7485543,14.3198102 C14.0524605,14.6012598 14.5269852,14.5830551 14.8084348,14.2791489 C14.9368329,14.140506 15.0081639,13.9585047 15.0081639,13.7695393 L15.0081639,9.90761477 C16.8241562,9.95755456 18.1177196,10.0730665 19.2929978,10.4469645 C20.9778605,10.9829796 22.2816185,12.4994368 23.2042718,14.996336 L23.2043032,14.9963244 C23.313119,15.2908036 23.5938372,15.4863432 23.9077781,15.4863432 L24.0735976,15.4863432 C24.0735976,15.0278051 24.0690576,14.3014082 24.0690576,13.8973499 Z" fill="#000000" fill-rule="nonzero" transform="translate(15.536799, 8.287129) scale(-1, 1) translate(-15.536799, -8.287129) "/>
                            </g>
                        </svg>
                        <span class="nav-link-text">Forwarding Addresses</span></a></li>


                <?php if ($_smarty_tpl->tpl_vars['user']->value->cid && $_smarty_tpl->tpl_vars['user']->value->is_primary_contact) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'company') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/company/">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" fill="#000000"/>
                                    <rect fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"/>
                                    <path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                            <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</span></a></li>
                <?php }?>


                <?php echo $_smarty_tpl->tpl_vars['client_extra_nav']->value[1];?>




                <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'orders') {?>active  open<?php }?>">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000"/>
                            </g>
                        </svg>
                        <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Orders'];?>
</span>
                    </a>
                    <ul>
                        <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'customers','create')) {?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
freight/client/orders/" >
                                    <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['My Orders'];?>
</span>
                                </a>
                            </li>
                        <?php }?>

                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
freight/client/order/">
                                <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Place New Order'];?>
</span>
                            </a>
                        </li>


                    </ul>
                </li>

                <?php echo $_smarty_tpl->tpl_vars['client_extra_nav']->value[2];?>





                <?php echo $_smarty_tpl->tpl_vars['client_extra_nav']->value[3];?>



                <li <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'downloads') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/downloads/">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"/>
                                <path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero"/>
                            </g>
                        </svg>
                        <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Documents'];?>
</span></a></li>




                <?php echo $_smarty_tpl->tpl_vars['client_extra_nav']->value[4];?>



                <li <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'invoices') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/invoices/">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2"/>
                                <rect fill="#000000" x="2" y="8" width="20" height="3"/>
                                <rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1"/>
                            </g>
                        </svg>
                        <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</span></a></li>




                <?php echo $_smarty_tpl->tpl_vars['client_extra_nav']->value[5];?>



                <?php echo $_smarty_tpl->tpl_vars['client_extra_nav']->value[6];?>



                <?php echo $_smarty_tpl->tpl_vars['client_extra_nav']->value[7];?>


                <li <?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'kb') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kb/c/">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"/>
                                <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"/>
                            </g>
                        </svg>
                        <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Knowledgebase'];?>
</span></a></li>


                <?php echo $_smarty_tpl->tpl_vars['client_extra_nav']->value[8];?>




                <li class="<?php if ($_smarty_tpl->tpl_vars['selected_navigation']->value == 'support') {?>active  open<?php }?>">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L5,18 C3.34314575,18 2,16.6568542 2,15 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 Z M6.16794971,10.5547002 C7.67758127,12.8191475 9.64566871,14 12,14 C14.3543313,14 16.3224187,12.8191475 17.8320503,10.5547002 C18.1384028,10.0951715 18.0142289,9.47430216 17.5547002,9.16794971 C17.0951715,8.86159725 16.4743022,8.98577112 16.1679497,9.4452998 C15.0109146,11.1808525 13.6456687,12 12,12 C10.3543313,12 8.9890854,11.1808525 7.83205029,9.4452998 C7.52569784,8.98577112 6.90482849,8.86159725 6.4452998,9.16794971 C5.98577112,9.47430216 5.86159725,10.0951715 6.16794971,10.5547002 Z" fill="#000000"/>
                            </g>
                        </svg>
                        <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tickets'];?>
</span>
                    </a>
                    <ul>
                        <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'customers','create')) {?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/new">
                                    <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Open New Ticket'];?>
</span>
                                </a>
                            </li>
                        <?php }?>

                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/all">
                                <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tickets'];?>
</span>
                            </a>
                        </li>


                    </ul>
                </li>






                <?php echo $_smarty_tpl->tpl_vars['client_extra_nav']->value[9];?>


                <li <?php if (route(1) == 'shipping-addresses') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/shipping-addresses/">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M4,7 L20,7 L20,19.5 C20,20.3284271 19.3284271,21 18.5,21 L5.5,21 C4.67157288,21 4,20.3284271 4,19.5 L4,7 Z M10,10 C9.44771525,10 9,10.4477153 9,11 C9,11.5522847 9.44771525,12 10,12 L14,12 C14.5522847,12 15,11.5522847 15,11 C15,10.4477153 14.5522847,10 14,10 L10,10 Z" fill="#000000"/>
                                <rect fill="#000000" opacity="0.3" x="2" y="3" width="20" height="4" rx="1"/>
                            </g>
                        </svg>
                        <span class="nav-link-text">Final Delivery Addresses</span></a></li>

                <li <?php if (route(1) == 'profile') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/profile/">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"/>
                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                            </g>
                        </svg>
                        <span class="nav-link-text"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Profile'];?>
</span></a></li>


            </ul>



        </nav>

    </aside>

    <div class="page-content-wrapper">
        <header class="page-header" role="banner">
            <div class="page-logo">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dashboard/" class="page-logo-link press-scale-down d-flex align-items-center position-relative">
                    <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_square']))) {?>
                        <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_square'];
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
" aria-roledescription="logo">
                    <?php } else { ?>
                        <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
/storage/system/logo-512x512.png?v=2" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
" aria-roledescription="logo">
                    <?php }?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_text']))) {?>
                        <span class="page-logo-text mr-1"><?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_text'];
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
</span>
                    <?php } else { ?>
                         
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
                        <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed" title="Lock Navigation">
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
                    <a href="#" data-toggle="dropdown" title="<?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
" class="header-icon d-flex align-items-center justify-content-center ml-2 cursor-pointer">

                        <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png"  class="profile-image rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
">
                        <?php } else { ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;
echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
"  class="profile-image rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
">
                        <?php }?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                        <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                            <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                            <span class="mr-2">

                                                <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" class="rounded-circle profile-image" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
">
                            <?php } else { ?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;
echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="rounded-circle profile-image" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
">
                                                <?php }?>
                                            </span>
                                <div class="info-card-text">
                                    <div class="fs-lg text-truncate text-truncate-lg"><?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
</div>
                                    <span class="text-truncate text-truncate-md opacity-80"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/profile" class="dropdown-item">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Profile'];?>

                        </a>



                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item pt-3 pb-3" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/logout">
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115823440360cfad40a557c3_48412974', "content", $this->tplIndex);
?>



        </main>

        <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>






    </div>

<?php
}
}
/* {/block "content_body"} */
}
