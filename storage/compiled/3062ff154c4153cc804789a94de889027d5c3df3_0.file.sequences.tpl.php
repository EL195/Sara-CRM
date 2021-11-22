<?php
/* Smarty version 3.1.39, created on 2021-06-02 09:00:08
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/sequences.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b780d86a2a82_57609297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3062ff154c4153cc804789a94de889027d5c3df3' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/sequences.tpl',
      1 => 1622638805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:marketing_crm/admin/form_fields/sequence.tpl' => 1,
  ),
),false)) {
function content_60b780d86a2a82_57609297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176669528160b780d86969d9_09084607', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40921726360b780d86a2073_91535592', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_176669528160b780d86969d9_09084607 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_176669528160b780d86969d9_09084607',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">
            <h3>Sequences</h3>
        </div>
        <div class="col-md-6 text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sp_modal_form">New Sequence</button>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">

            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>Sequence</th>
                    <th class="text-right">Manage</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sequences']->value, 'sequence');
$_smarty_tpl->tpl_vars['sequence']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sequence']->value) {
$_smarty_tpl->tpl_vars['sequence']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['sequence']->value->name;?>
</td>
                        <td class="text-right">
                            <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/sequence-builder/<?php echo $_smarty_tpl->tpl_vars['sequence']->value->id;?>
">Builder</a>
                            <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/edit-sequence/<?php echo $_smarty_tpl->tpl_vars['sequence']->value->id;?>
">Edit</a>
                            <button class="btn btn-danger" onclick="confirmThenGoToUrl(event,'marketing/delete-sequence/<?php echo $_smarty_tpl->tpl_vars['sequence']->value->id;?>
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
                            Add New Sequence
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="sp_result_div"></div>
                        <?php $_smarty_tpl->_subTemplateRender('file:marketing_crm/admin/form_fields/sequence.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
class Block_40921726360b780d86a2073_91535592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_40921726360b780d86a2073_91535592',
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
                $.post(base_url + 'marketing/save-sequence',$form_main.serialize()).done(function () {
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
