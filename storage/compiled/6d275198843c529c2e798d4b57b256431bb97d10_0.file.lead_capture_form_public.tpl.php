<?php
/* Smarty version 3.1.39, created on 2021-06-05 10:19:29
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/lead_capture_form_public.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bb87f1a36c87_80971480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d275198843c529c2e798d4b57b256431bb97d10' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/lead_capture_form_public.tpl',
      1 => 1622902757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:marketing_crm/admin/form_fields/generate_lead_capture_form.tpl' => 2,
  ),
),false)) {
function content_60bb87f1a36c87_80971480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25688252660bb87f1a20ef3_33641059', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129765048460bb87f1a25ab6_78474979', "content_body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21167789560bb87f1a36259_22829699', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "marketing_crm/layouts/base.tpl");
}
/* {block "head"} */
class Block_25688252660bb87f1a20ef3_33641059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_25688252660bb87f1a20ef3_33641059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



        <style>

            <?php if ($_smarty_tpl->tpl_vars['action']->value == 'embed') {?>


            .clx-navigation-type-top .page-wrapper {
                display: block;
            }

            .page-inner, .page-wrapper {
                display: block;
            }

            <?php } else { ?>

            @media (min-width: 992px){
                .clx-fixed-navigation:not(.clx-navigation-type-top):not(.nav-function-hidden):not(.nav-function-minify) .page-content-wrapper {
                    padding-left: 0;
                }
            }

            <?php }?>


        </style>




<?php
}
}
/* {/block "head"} */
/* {block "content_body"} */
class Block_129765048460bb87f1a25ab6_78474979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_body' => 
  array (
    0 => 'Block_129765048460bb87f1a25ab6_78474979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if ($_smarty_tpl->tpl_vars['action']->value == 'embed') {?>

        <div id="sp_result_div"></div>
        <form id="lead_capture_form">
            <?php $_smarty_tpl->_subTemplateRender('file:marketing_crm/admin/form_fields/generate_lead_capture_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <input type="hidden" name="uuid" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->uuid;?>
">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php } else { ?>

        <div class="page-content-wrapper bg-transparent m-0">
            <div class="height-10 w-100 shadow-sm px-4 bg-brand-gradient">
                <div class="d-flex align-items-center container p-0">
                    <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9 border-0">
                        <a href="<?php echo APP_URL;?>
" class="page-logo-link press-scale-down d-flex align-items-center">
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
                                <span class="page-logo-text mr-1"><?php echo $_smarty_tpl->tpl_vars['config']->value['logo_text'];?>
</span>
                            <?php } else { ?>
                                 
                            <?php }?>
                        </a>
                    </div>




                </div>
            </div>
            <div class="flex-1">
                <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">

                    <div class="card">
                        <div class="card-body">
                            <div id="sp_result_div"></div>
                            <form id="lead_capture_form">

                                <?php $_smarty_tpl->_subTemplateRender('file:marketing_crm/admin/form_fields/generate_lead_capture_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                <input type="hidden" name="uuid" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->uuid;?>
">

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>


                    <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center">
                        &copy; <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>

                    </div>
                </div>
            </div>
        </div>

    <?php }?>


<?php
}
}
/* {/block "content_body"} */
/* {block "script"} */
class Block_21167789560bb87f1a36259_22829699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_21167789560bb87f1a36259_22829699',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {

            let $btn_submit = $('#btn_submit');
            let $form_main = $('#lead_capture_form');
            let $sp_result_div = $('#sp_result_div');

            $form_main.on('submit',function (event) {
                event.preventDefault();
                $btn_submit.prop('disabled',true);
                $.post(base_url + 'form/save',$form_main.serialize()).done(function (data) {

                }).fail(function (data) {
                    let errors = $.parseJSON(data.responseText);
                    $btn_submit.prop('disabled',false);
                    let html = '';
                    $.each(errors, function(key,value) {
                        html += '<div class="alert alert-danger">'+ value +'</div>'
                    });

                    $sp_result_div.html(html);

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
