<?php
/* Smarty version 3.1.39, created on 2021-06-07 08:23:43
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/layouts/base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be0fcfb1bb71_18693381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a5a81042870f8b856b44b51bf4cddfb99bec083' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/layouts/base.tpl',
      1 => 1623068610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be0fcfb1bb71_18693381 (Smarty_Internal_Template $_smarty_tpl) {
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
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->

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

        <?php }?>

        <link href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
default/css/themes/<?php echo $_smarty_tpl->tpl_vars['config']->value['nstyle'];?>
.css?v=<?php ob_start();
echo _raid();
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
default/marketing_crm/css/default.css?v=<?php ob_start();
echo _raid();
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
" rel="stylesheet">

    <?php } else { ?>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['rtl'] == '1') {?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
/ui/theme/default/css/app-rtl.min.css?v=26">
        <?php } else { ?>
            <link id="css_app" rel="stylesheet" media="screen, print" href="<?php ob_start();
echo APP_URL;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
/ui/theme/default/css/app.min.css?v=<?php echo $_smarty_tpl->tpl_vars['file_build']->value;?>
">
        <?php }?>

        <link href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
default/css/themes/<?php echo $_smarty_tpl->tpl_vars['config']->value['nstyle'];?>
.css?v=<?php echo $_smarty_tpl->tpl_vars['file_build']->value;?>
" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
default/marketing_crm/css/default.css?v=<?php echo $_smarty_tpl->tpl_vars['file_build']->value;?>
" rel="stylesheet">
    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195736561460be0fcfb028c7_45483793', 'head_extras_from_layout');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169949898660be0fcfb05c36_88894798', 'head');
?>



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

</head>
<body class="mod-bg-1 mod-nav-link" id="cloudonex_body">
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142706474460be0fcfb151c9_58857535', "content_body");
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
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
/ui/theme/default/js/app.min.js?v=<?php echo _raid();?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
/ui/lib/ray.js?v=3"><?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo '<script'; ?>
 src="<?php ob_start();
echo APP_URL;
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
/ui/theme/default/js/app.min.js?v=<?php echo $_smarty_tpl->tpl_vars['file_build']->value;?>
"><?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
>
    if (typeof window.ray === 'undefined') {
        window.ray = function() {
            console.log('ray is available only on the dev mode.')
        }
    }
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168916045460be0fcfb1a308_59446113', 'script');
?>


</body>
</html>
<?php }
/* {block 'head_extras_from_layout'} */
class Block_195736561460be0fcfb028c7_45483793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_extras_from_layout' => 
  array (
    0 => 'Block_195736561460be0fcfb028c7_45483793',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_extras_from_layout'} */
/* {block 'head'} */
class Block_169949898660be0fcfb05c36_88894798 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_169949898660be0fcfb05c36_88894798',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block "content_body"} */
class Block_142706474460be0fcfb151c9_58857535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_body' => 
  array (
    0 => 'Block_142706474460be0fcfb151c9_58857535',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content_body"} */
/* {block 'script'} */
class Block_168916045460be0fcfb1a308_59446113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_168916045460be0fcfb1a308_59446113',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'script'} */
}
