<?php
/* Smarty version 3.1.39, created on 2021-09-28 15:05:18
  from '/Users/razib/Documents/valet/business-suite/apps/squareup/views/includes/base_js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6153676e19bfe9_09714669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e2095da45dabe9d0adffba42da247097cd4b7c8' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/squareup/views/includes/base_js.tpl',
      1 => 1632855892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6153676e19bfe9_09714669 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(function () {
        let $switch_store = $('#switch_store');
        $switch_store.on('change',function () {
            if($switch_store.val())
            {
                if($switch_store.val() === '---AddNewStore---')
                {
                    window.location = base_url + 'wcsuite/app/store/'
                }
                else{
                    window.location = base_url + 'wcsuite/app/make-default-integration/' + $switch_store.val();
                }
            }
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
