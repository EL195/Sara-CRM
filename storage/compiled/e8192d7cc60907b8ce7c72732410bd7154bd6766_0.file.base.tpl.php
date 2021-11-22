<?php
/* Smarty version 3.1.39, created on 2021-03-24 16:00:50
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/agency_crm/layouts/base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605b9a72c398a3_50224906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8192d7cc60907b8ce7c72732410bd7154bd6766' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/agency_crm/layouts/base.tpl',
      1 => 1616616048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605b9a72c398a3_50224906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en" <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['font_size'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['config']->value['font_size'];?>
" <?php }?>>
<head>
    <meta charset="utf-8">
    <title>
        <?php echo $_smarty_tpl->tpl_vars['_title']->value;?>

    </title>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="msapplication-tap-highlight" content="no">
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
    <?php echo '<script'; ?>
>
        const cloudonex_csrf_token = '<?php echo csrf_token();?>
';
    <?php echo '</script'; ?>
>

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
            <style>
                .nav-menu li a>svg {
                    margin-left: .75rem;
                }
            </style>
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
            <style>
                .nav-menu li a>svg {
                    margin-right: .75rem;
                }
            </style>
        <?php }?>

    <?php } else { ?>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['rtl'] == '1') {?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
/ui/theme/default/css/app-rtl.min.css">
            <style>
                .nav-menu li a>svg {
                    margin-left: .75rem;
                }
            </style>
        <?php } else { ?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
/ui/theme/default/css/app.min.css">
            <style>
                .nav-menu li a>svg {
                    margin-right: .75rem;
                }
            </style>
        <?php }?>
    <?php }?>


    <style>

        body {
            font-size: 14px;
            color: #2b2b2b;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            color: #2b2b2b;
        }
        .nav-menu li.active {
            background: #D9D7FC;
        }

        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu > li.active a {
            color: #542ABB;
        }
        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu > li a {
            color:  #542ABB;
        }
        .clx-navigation-type-top .page-header {
            background-color: #542ABB;
        }

        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu > li > ul {
            background: #fff;
        }
        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu > li > ul li a {
            color: rgba(255, 255, 255, 0.7);
        }
        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu > li > ul li a {
            color: #000;
        }
        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu>li>a>.collapse-sign>em:before {
            color: #542ABB;
        }
        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu > li.active > ul li a {
            color: #000;
        }
        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu>li>ul {
            top: 2.5rem;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu>li>a>.nav-link-text {
            font-weight: 700;
        }
        .alert.alert-danger.fade{
            opacity: 1;
        }
        .alert.alert-success.fade{
            opacity: 1;
        }

        #ribbon-container {
            position: absolute;
            right: -15px;
        }


        #ribbon-container:before {
            content: "";
            height: 0;
            width: 0;
            display: block;
            position: absolute;
            top: 3px;
            left: 0;
            border-top: 20px solid rgba(0,0,0,.3);
            border-bottom: 20px solid rgba(0,0,0,.3);
            border-right: 20px solid rgba(0,0,0,.3);
            border-left: 20px solid transparent;
        }
        #ribbon-container a {
            display: block;
            padding: 12px;
            position: relative;
            background: #0089d0;
            overflow: visible;
            height: 40px;
            margin-left: 29px;
            color: #fff;
            text-decoration: none;
        }
        #ribbon-container a:before {
            content: "";
            height: 0;
            width: 0;
            display: block;
            position: absolute;
            top: 0;
            left: -20px;
            border-top: 20px solid #0089d0;
            border-bottom: 20px solid #0089d0;
            border-right: 20px solid transparent;
            border-left: 20px solid transparent;
        }
        #ribbon-container a:after {
            content: "";
            height: 0;
            width: 0;
            display: block;
            position: absolute;
            bottom: -15px;
            right: 0;
            border-top: 15px solid #004a70;
            border-right: 15px solid transparent;
        }



        .pristine-error.text-help {
            color: red;
        }

        .clx-navigation-type-top .page-sidebar {
            background: #6969FF;
        }


        .clx-navigation-type-top .page-sidebar {
            background: #fff;
        }

        .svg-fill-white svg{
            fill: white;
        }

        .page-content-wrapper{
            background: #EBF1F6;
        }

    </style>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_475428981605b9a72c2eca5_68237241', 'head_extras_from_layout');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_830699777605b9a72c2f5f7_95704459', 'head');
?>



    <style>
        .clx-navigation-type-top .page-sidebar .primary-nav .nav-menu > li > ul li:hover > a {
            color: #6969FF;
        }
        .header-icon:not(.btn)[data-toggle=dropdown][data-toggle=dropdown]:after {
            background: #4c8ec4;
        }

        .card{
            border-radius: 12px;
            border: none;
            box-shadow: 0 4px 24px 0 rgb(34 41 47 / 10%);
        }
        .clx-list-with-padding li{
            position: relative;
            padding: 8px 0 8px 25px;
            font-size: 16px;
        }


        .clx-pricing-table .pt-head:after {
            content: "";
            position: absolute;
            top: -50px;
            left: -20px;
            right: -10px;
            bottom: 0;
            background: #4C3FB9;
            z-index: -1;
            transform: rotate(
                    -7deg
            );
        }
        .z-index-1 {
            z-index: 1;
        }

        .clx-pricing-table.featured .pt-head:after {
            background: #15db95;
        }

        label{
            font-weight: bold;
        }

        .nav-menu li a>svg {
            margin-right: .75rem;
        }

        .nav-menu li.active>a {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .table.invoice-items{
            border: 1px solid #dee2e6;
        }

        .table.invoice-items td, .table.invoice-items th {
            border: 1px solid #dee2e6;
        }

        .nav-menu li {
            margin: 10px 15px;
        }

        .bg-brand-gradient, .nav-footer, .page-logo, .page-sidebar {
            background-image: none;
            background-color: #fff;
        }

        .nav-menu li.active>a, .nav-menu li a:hover, .nav-menu li.open>a, .nav-menu li>ul li a:hover, .nav-menu li a:focus {
            color: #fff;
            background-color: #3D40F5;
            box-shadow: 0 0 10px 1px rgb(115 103 240 / 70%);
            border-radius: 4px;
        }

        .nav-menu li a, .nav-menu li>ul li a {
            color: #000;
        }

        .nav-menu li>ul {
            background-color: #F7F6FE;
        }

        .nav-menu li>ul li a {
            padding: .8125rem 2rem;
        }

        .page-logo-text {
            color: #333;
            font-weight: 700;
        }


    </style>

    <?php echo '<script'; ?>
>
        var base_url = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
';
        var block_msg = '<div class="md-preloader text-center"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>';
    <?php echo '</script'; ?>
>



    <?php echo '<script'; ?>
>
        window.clx = {
            base_url: '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
',
            i18n: {
                yes: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
',
                no: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
',
                are_you_sure: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
'
            },
            theme_options: false,
        };
        var _L = [];
        _L['Save'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
';
        _L['Submit'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
';
        _L['Loading'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Loading'];?>
';
        _L['OK'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['OK'];?>
';
        _L['Cancel'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
';
        _L['Close'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
';
        _L['are_you_sure'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
';
        _L['Saved Successfully'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Saved Successfully'];?>
';
        _L['Empty'] = '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Empty'];?>
';
    <?php echo '</script'; ?>
>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['append_to_the_head_in_the_base_layout']->value, 'append_to_the_head_in_the_base_layout_content');
$_smarty_tpl->tpl_vars['append_to_the_head_in_the_base_layout_content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['append_to_the_head_in_the_base_layout_content']->value) {
$_smarty_tpl->tpl_vars['append_to_the_head_in_the_base_layout_content']->do_else = false;
?>
        <?php echo $_smarty_tpl->tpl_vars['append_to_the_head_in_the_base_layout_content']->value;?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</head>
<body class="clx-fixed-header clx-fixed-navigation" id="cloudonex_body">
<?php echo '<script'; ?>
>
    'use strict';

    var classHolder = document.getElementsByTagName("BODY")[0],
        themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            { },
        themeURL = themeSettings.themeURL || '',
        themeOptions = themeSettings.themeOptions || '';
    if (themeSettings.themeOptions)
    {
        classHolder.className = themeSettings.themeOptions;
    }
    else
    {
    }
    var saveSettings = function()
    {
        themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
        {
            return /^(nav|header|footer|mod|display)-/i.test(item);
        }).join(' ');
        localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
    }
    var resetSettings = function()
    {
        localStorage.setItem("themeSettings", "");
    }

<?php echo '</script'; ?>
>


<div class="page-wrapper">

    <div class="page-inner">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1343935901605b9a72c362f4_99969288', "content_body");
?>

    </div>

</div>



<input type="hidden" id="_url" name="_url" value="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
">
<input type="hidden" id="_df" name="_df" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['df'];?>
">

<?php if (APP_STAGE == 'Dev') {?>
    <?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
/ui/theme/default/js/app.min.js?v=<?php echo _raid();?>
"><?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
/ui/theme/default/js/app.min.js"><?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
>
    (function (factory) {
        if (typeof define === "function" && define.amd) {
            define(["jquery"], factory);
        } else {
            factory(jQuery);
        }
    })(function ($) {

        "use strict";

        $.fn.datepicker.setDefaults({
            autoClose: false,
            dateFormat: "mm/dd/yy",
            days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
            daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
            months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            showMonthAfterYear: false,
            viewStart: 0, // days
            weekStart: 0, // Sunday
            yearSuffix: ""
        });
    });
<?php echo '</script'; ?>
>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1687419944605b9a72c387f3_85998141', 'script');
?>


</body>
</html>
<?php }
/* {block 'head_extras_from_layout'} */
class Block_475428981605b9a72c2eca5_68237241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_extras_from_layout' => 
  array (
    0 => 'Block_475428981605b9a72c2eca5_68237241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_extras_from_layout'} */
/* {block 'head'} */
class Block_830699777605b9a72c2f5f7_95704459 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_830699777605b9a72c2f5f7_95704459',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block "content_body"} */
class Block_1343935901605b9a72c362f4_99969288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_body' => 
  array (
    0 => 'Block_1343935901605b9a72c362f4_99969288',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content_body"} */
/* {block 'script'} */
class Block_1687419944605b9a72c387f3_85998141 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1687419944605b9a72c387f3_85998141',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'script'} */
}
