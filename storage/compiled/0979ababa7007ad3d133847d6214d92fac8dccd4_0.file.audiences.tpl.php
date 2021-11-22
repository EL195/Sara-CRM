<?php
/* Smarty version 3.1.39, created on 2021-05-11 01:57:51
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/audiences.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609a1cdf54b0f3_10019979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0979ababa7007ad3d133847d6214d92fac8dccd4' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/audiences.tpl',
      1 => 1620712667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:marketing_crm/admin/form_fields/audience.tpl' => 1,
  ),
),false)) {
function content_609a1cdf54b0f3_10019979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1515507823609a1cdf545fd3_69487721', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1394600404609a1cdf54a624_63977639', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1515507823609a1cdf545fd3_69487721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1515507823609a1cdf545fd3_69487721',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">
            <h3>Audiences</h3>
        </div>
        <div class="col-md-6 text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sp_modal_form">New Audience</button>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">

            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Audience</th>
                    <th class="text-right">Manage</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['audiences']->value, 'audience');
$_smarty_tpl->tpl_vars['audience']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['audience']->value) {
$_smarty_tpl->tpl_vars['audience']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['audience']->value->name;?>
</td>
                        <td class="text-right">
                            <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/import/<?php echo $_smarty_tpl->tpl_vars['audience']->value->id;?>
">Import</a>
                            <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/edit-audience/<?php echo $_smarty_tpl->tpl_vars['audience']->value->id;?>
">Edit</a>
                            <button class="btn btn-danger" onclick="confirmThenGoToUrl(event,'contacts/delete-audience/<?php echo $_smarty_tpl->tpl_vars['audience']->value->id;?>
')">Delete</button>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>

        </div>
    </div>


    <div class="modal fade" id="sp_modal_form" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form id="form_main">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Add New Audience
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="sp_result_div"></div>
                        <?php $_smarty_tpl->_subTemplateRender('file:marketing_crm/admin/form_fields/audience.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" id="btn_submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_1394600404609a1cdf54a624_63977639 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1394600404609a1cdf54a624_63977639',
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
