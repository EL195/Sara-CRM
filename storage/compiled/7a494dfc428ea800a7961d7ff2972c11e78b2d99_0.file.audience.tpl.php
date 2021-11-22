<?php
/* Smarty version 3.1.39, created on 2021-05-13 16:28:19
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/audience.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609d8be31ecef1_03480544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a494dfc428ea800a7961d7ff2972c11e78b2d99' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/audience.tpl',
      1 => 1620937588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:marketing_crm/admin/form_fields/audience.tpl' => 1,
  ),
),false)) {
function content_609d8be31ecef1_03480544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157280514609d8be31dc327_73722892', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_226119501609d8be31ec380_35598470', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_157280514609d8be31dc327_73722892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_157280514609d8be31dc327_73722892',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h3 class="mb-3">Edit Audience</h3>
    <div class="card">
        <div class="card-body">
            <form id="form_main">
                <div id="sp_result_div"></div>
                <?php $_smarty_tpl->_subTemplateRender('file:marketing_crm/admin/form_fields/audience.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['selected_audience']->value->id;?>
">
                <button class="btn btn-primary" id="btn_submit" type="submit">Save</button>
            </form>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_226119501609d8be31ec380_35598470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_226119501609d8be31ec380_35598470',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {
            let $btn_submit = $('#btn_submit');
            let $form_main = $('#form_main');
            let $sp_result_div = $('#sp_result_div');

            $form_main.on('submit',function (event) {
                event.preventDefault();
                $btn_submit.prop('disabled',true);
                $.post(base_url + 'contacts/save-audience',$form_main.serialize()).done(function () {
                    location.reload();
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
/* {/block 'script'} */
}
