<?php
/* Smarty version 3.1.39, created on 2021-06-04 08:34:29
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/webhooks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ba1dd53ce458_99735776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c7c4068843a47a82c22340d7529966fd13480a4' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/webhooks.tpl',
      1 => 1622810058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ba1dd53ce458_99735776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92144413660ba1dd53c47b5_91830272', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200411810760ba1dd53cd948_00788126', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_92144413660ba1dd53c47b5_91830272 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_92144413660ba1dd53c47b5_91830272',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3>Create Webhooks</h3>
                    <p>Capture leads using webhooks. Create a webhook and send a post request to this webhook.</p>

                    <form id="form_main">
                        <div id="sp_result_div"></div>
                        <div class="mb-3">
                            <label>Name</label>
                            <input class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label>Select Audience</label>
                            <select class="custom-select" name="audience_id">

                                <option value="">None</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['audiences']->value, 'audience');
$_smarty_tpl->tpl_vars['audience']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['audience']->value) {
$_smarty_tpl->tpl_vars['audience']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['audience']->value->id;?>
"



                                    ><?php echo $_smarty_tpl->tpl_vars['audience']->value->name;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>

                        <button class="btn btn-primary" id="btn_submit">Save</button>

                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3>Webhooks</h3>

                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th>Webhook</th>
                            <th class="text-right">Manage</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['webhooks']->value, 'webhook');
$_smarty_tpl->tpl_vars['webhook']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['webhook']->value) {
$_smarty_tpl->tpl_vars['webhook']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['webhook']->value->name;?>
</td>
                                <td class="text-right">
                                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/webhook-instructions/<?php echo $_smarty_tpl->tpl_vars['webhook']->value->id;?>
">Instructions</a>
                                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/webhooks/<?php echo $_smarty_tpl->tpl_vars['webhook']->value->id;?>
">Edit</a>
                                    <button class="btn btn-danger" onclick="confirmThenGoToUrl(event,'marketing/delete-webhook/<?php echo $_smarty_tpl->tpl_vars['webhook']->value->id;?>
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
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_200411810760ba1dd53cd948_00788126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_200411810760ba1dd53cd948_00788126',
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
                $.post(base_url + 'marketing/save-webhook',$form_main.serialize()).done(function (data) {
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
