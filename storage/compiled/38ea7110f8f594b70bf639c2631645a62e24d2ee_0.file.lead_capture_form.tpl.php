<?php
/* Smarty version 3.1.39, created on 2021-06-05 05:49:00
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/lead_capture_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bb488c18ac45_57557039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38ea7110f8f594b70bf639c2631645a62e24d2ee' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/lead_capture_form.tpl',
      1 => 1622809766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bb488c18ac45_57557039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111464272160bb488c16eca6_86415559', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160052216460bb488c18a086_91608614', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_111464272160bb488c16eca6_86415559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_111464272160bb488c16eca6_86415559',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="mx-auto" style="max-width: 800px;">
                <div class="card">
                    <div class="card-body">
                        <h3>Form Properties</h3>
                        <form id="form_main">
                            <div id="sp_result_div"></div>
                            <div class="mb-3">
                                <label>Name</label>
                                <input class="form-control" name="name"
                                <?php if ($_smarty_tpl->tpl_vars['form']->value) {?>
                                    value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
"
                                <?php }?>
                                >
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

                                                <?php if ($_smarty_tpl->tpl_vars['form']->value) {?>

                                                    <?php if ($_smarty_tpl->tpl_vars['form']->value->audience_id === $_smarty_tpl->tpl_vars['audience']->value->id) {?>
                                                        selected
                                                    <?php }?>

                                                <?php }?>

                                        ><?php echo $_smarty_tpl->tpl_vars['audience']->value->name;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>Header Title</label>
                                <input class="form-control" name="header_title"
                                        <?php if ($_smarty_tpl->tpl_vars['form']->value) {?>
                                            value="<?php echo $_smarty_tpl->tpl_vars['form']->value->header_title;?>
"
                                        <?php }?>
                                >
                            </div>

                            <div class="mb-3">
                                <label>Header Text</label>
                                <textarea class="form-control" name="header_text"><?php if ($_smarty_tpl->tpl_vars['form']->value) {
echo $_smarty_tpl->tpl_vars['form']->value->header_text;
}?></textarea>
                            </div>


                            <h4 class="mb-3">Form Fields</h4>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_fields']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                <div class="mb-3">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="has_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="custom-control-input connect_with" id="has_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                                               <?php if ($_smarty_tpl->tpl_vars['form']->value) {?>
                                                   <?php if (sp_if_exist_and_true($_smarty_tpl->tpl_vars['form']->value,"has_".((string)$_smarty_tpl->tpl_vars['key']->value))) {?>
                                                       checked
                                                   <?php }?>
                                                   <?php } else { ?>
                                                   <?php if ($_smarty_tpl->tpl_vars['value']->value['default']['checked']) {?>
                                                       checked
                                                   <?php }?>
                                               <?php }?>

                                               data-connected-to="div_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                                        >
                                        <label class="custom-control-label" for="has_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['default']['name'];?>
</label>
                                    </div>
                                </div>
                                <div id="div_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"

                                        <?php if ($_smarty_tpl->tpl_vars['form']->value) {?>
                                            <?php if (!sp_if_exist_and_true($_smarty_tpl->tpl_vars['form']->value,"has_".((string)$_smarty_tpl->tpl_vars['key']->value))) {?>
                                                style="display: none;"
                                            <?php }?>
                                        <?php } else { ?>
                                            <?php if (!$_smarty_tpl->tpl_vars['value']->value['default']['checked']) {?>
                                                style="display: none;"
                                            <?php }?>
                                        <?php }?>
                                >
                                    <div class="mb-3">
                                        <label for="input_div_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
</label>
                                        <input class="form-control" name="label_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="input_div_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                                               value="<?php echo sp_get_value($_smarty_tpl->tpl_vars['form']->value,"label_".((string)$_smarty_tpl->tpl_vars['key']->value),$_smarty_tpl->tpl_vars['value']->value['default']['name']);?>
"
                                        >
                                    </div>

                                    <div class="mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="required_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="required_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                                                    <?php if ($_smarty_tpl->tpl_vars['form']->value) {?>
                                                        <?php if (sp_if_exist_and_true($_smarty_tpl->tpl_vars['form']->value,"required_".((string)$_smarty_tpl->tpl_vars['key']->value))) {?>
                                                            checked
                                                        <?php }?>
                                                    <?php } else { ?>
                                                        <?php if ($_smarty_tpl->tpl_vars['value']->value['default']['required']) {?>
                                                            checked
                                                        <?php }?>
                                                    <?php }?>
                                            >
                                            <label class="custom-control-label" for="required_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">Required</label>
                                        </div>
                                    </div>

                                </div>

                                <hr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <div class="mb-3">
                                <label>Button Label</label>
                                <input class="form-control" name="label_submit_button"
                                        <?php if ($_smarty_tpl->tpl_vars['form']->value) {?>
                                            value="<?php echo $_smarty_tpl->tpl_vars['form']->value->label_submit_button;?>
"
                                        <?php }?>
                                >
                            </div>



                            <h4 class="mb-3">Rules</h4>

                            <div class="mb-3">
                                <label>After Submission Action</label>
                                <select class="custom-select" name="submission_action">

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, LeadCaptureForm::getAvailableFormSubmissionActions(), 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>

                                        <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['form']->value) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['form']->value->submission_action == $_smarty_tpl->tpl_vars['key']->value) {?>
                                                selected
                                            <?php }?>
                                        <?php }?>
                                        ><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>

                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </select>
                            </div>


                            <h4 class="mb-3">Resources</h4>

                            <div class="mb-3">
                                <label>Document</label>
                                <select class="custom-select" name="document_id">

                                    <option value="0">None</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['documents']->value, 'document');
$_smarty_tpl->tpl_vars['document']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['document']->value) {
$_smarty_tpl->tpl_vars['document']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['document']->value->id;?>
"

                                                <?php if ($_smarty_tpl->tpl_vars['form']->value) {?>

                                                    <?php if ($_smarty_tpl->tpl_vars['form']->value->document_id === $_smarty_tpl->tpl_vars['document']->value->id) {?>
                                                        selected
                                                    <?php }?>

                                                <?php }?>

                                        ><?php echo $_smarty_tpl->tpl_vars['document']->value->title;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>Video Url</label>
                                <input class="form-control" name="video_url"
                                        <?php if ($_smarty_tpl->tpl_vars['form']->value) {?>
                                            value="<?php echo $_smarty_tpl->tpl_vars['form']->value->video_url;?>
"
                                        <?php }?>
                                >
                            </div>

                            <div class="mb-3">
                                <label>Page Url</label>
                                <input class="form-control" name="page_url"
                                        <?php if ($_smarty_tpl->tpl_vars['form']->value) {?>
                                            value="<?php echo $_smarty_tpl->tpl_vars['form']->value->page_url;?>
"
                                        <?php }?>
                                >
                            </div>

                            <div class="mb-3">
                                <label>After Submission Text</label>
                                <textarea class="form-control" name="after_submission_text"><?php if ($_smarty_tpl->tpl_vars['form']->value) {
echo $_smarty_tpl->tpl_vars['form']->value->after_submission_text;
}?></textarea>
                            </div>



                            <div class="hr-line-dashed"></div>

                            <?php if ($_smarty_tpl->tpl_vars['form']->value) {?>
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
                            <?php }?>

                            <input type="hidden" name="form_type" value="<?php echo $_smarty_tpl->tpl_vars['form_type']->value;?>
">

                            <button class="btn btn-primary" id="btn_submit">Save</button>

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
class Block_160052216460bb488c18a086_91608614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_160052216460bb488c18a086_91608614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            let $connect_with = $('.connect_with');

            $connect_with.on('change',function () {

                let that = $(this);

                let connected_with = that.attr('data-connected-to');


                if(that.is(":checked"))
                    {
                        let $connected_with = $('#' + connected_with);
                        $connected_with.show('fast');
                        $('#input_' + connected_with).focus();

                    }
                else{
                    $('#' + connected_with).hide('slow');
                }

            });

            let $btn_submit = $('#btn_submit');
            let $form_main = $('#form_main');
            let $sp_result_div = $('#sp_result_div');

            $form_main.on('submit',function (event) {
                event.preventDefault();
                $btn_submit.prop('disabled',true);
                $.post(base_url + 'marketing/save-form',$form_main.serialize()).done(function (data) {
                    window.location = base_url + 'marketing/form/' + data.id;
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
