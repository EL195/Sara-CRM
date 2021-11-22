<?php
/* Smarty version 3.1.39, created on 2021-05-23 07:29:14
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/broadcast.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aa3c8a2da4f4_13128438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85f3e22ee39032d2a540d7ccb1000d87f93bcafd' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/broadcast.tpl',
      1 => 1621769295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aa3c8a2da4f4_13128438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148800253960aa3c8a2d22b9_05416927', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71949506460aa3c8a2d81f0_33459742', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_148800253960aa3c8a2d22b9_05416927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_148800253960aa3c8a2d22b9_05416927',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="mx-auto" style="max-width: 800px;">
                <div class="card">
                    <div class="card-body">
                        <h3>Broadcast Email</h3>
                        <form id="form_main">

                            <div id="sp_result_div"></div>

                            <div class="mb-3">
                                <label>Send to the Audience</label>
                                <select class="custom-select" id="select_audience" name="audience">
                                    <option value="">--</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['audiences']->value, 'audience');
$_smarty_tpl->tpl_vars['audience']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['audience']->value) {
$_smarty_tpl->tpl_vars['audience']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['audience']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['audience']->value->name;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                                <p class="mt-3" id="audience_help"></p>
                            </div>
                            <h3 class="mb-3">Preview Email</h3>

                            <div class="mb-3">
                                <label>Search a Contact to Preview</label>
                                <select class="form-control" id="select2_remote">

                                </select>
                            </div>

                            <div class="mt-2" id="email_preview"></div>
                            <button type="submit" id="btn_submit" class="btn btn-primary">Confirm & Queue Sending</button>

                            <input type="hidden" name="campaign_id" value="<?php echo $_smarty_tpl->tpl_vars['campaign']->value->id;?>
">

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_71949506460aa3c8a2d81f0_33459742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_71949506460aa3c8a2d81f0_33459742',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            let $select2_remote = $('#select2_remote');
            let $select_audience = $('#select_audience');
            let $audience_help = $('#audience_help');
            let $email_preview = $('#email_preview');

            $select2_remote.select2({
                ajax: {
                    url: base_url + 'marketing/select2-search-contact',
                    type: 'POST',
                    data: function (params) {
                        return {
                            term: params.term,
                            page: params.page || 1
                        };
                    }
                }
            });

            $select2_remote.on('change',function () {
                $.get( base_url + "marketing/preview-email-for-contact/<?php echo $_smarty_tpl->tpl_vars['campaign']->value->id;?>
/" + $select2_remote.val(), function( data ) {
                    $email_preview.html(data);
                });
            });


            $select_audience.on('change',function () {
                $.getJSON( base_url + "marketing/audience-info/" + $select_audience.val(), function( data ) {
                    $audience_help.html('This email will broadcast to ' + data.total_contacts +' contacts.');
                }).fail(function(response) {
                    ray(response);
                });
            });


            let $btn_submit = $('#btn_submit');
            let $form_main = $('#form_main');
            let $sp_result_div = $('#sp_result_div');

            $form_main.on('submit',function (event) {
                event.preventDefault();
                $btn_submit.prop('disabled',true);
                $.post(base_url + 'marketing/broadcast',$form_main.serialize()).done(function (data) {
                    window.location = base_url + 'marketing/email-broadcast-flow';
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
