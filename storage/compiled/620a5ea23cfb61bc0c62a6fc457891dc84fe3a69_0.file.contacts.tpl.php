<?php
/* Smarty version 3.1.39, created on 2021-06-02 07:23:18
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/contacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b76a26104303_31097724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '620a5ea23cfb61bc0c62a6fc457891dc84fe3a69' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/contacts.tpl',
      1 => 1622632995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:marketing_crm/admin/form_fields/contact.tpl' => 1,
  ),
),false)) {
function content_60b76a26104303_31097724 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90166549760b76a260f31a1_27623805', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132879031560b76a26102b29_63329785', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_90166549760b76a260f31a1_27623805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_90166549760b76a260f31a1_27623805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">
            <h3>Contacts</h3>
        </div>
        <div class="col-md-6 text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_edit_contact">New Contact</button>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <form id="filter_form">

                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label>Audience/List</label>
                            <select class="custom-select" name="audience_id">
                                <option value="">All</option>
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
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label>First Name</label>
                            <input class="form-control" name="first_name">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label>Last Name</label>
                            <input class="form-control" name="last_name">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label>Email</label>
                            <input class="form-control" name="email">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label>Subscription Status</label>
                            <select class="custom-select" name="subscription_status">
                                <option value="">All</option>
                                <option value="Subscribed">Subscribed</option>
                                <option value="Unsubscribed">Unsubscribed</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label>Phone Number</label>
                            <input class="form-control" name="phone_number">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Filter</button>
                    </div>
                </div>

            </form>

            <div id="div_contacts_table" class="mt-3">

            </div>

        </div>
    </div>


    <div class="modal fade" id="modal_edit_contact" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form id="form_main">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Add New Contact
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="sp_result_div"></div>
                        <?php $_smarty_tpl->_subTemplateRender('file:marketing_crm/admin/form_fields/contact.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="btn_submit">Save</button>
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
class Block_132879031560b76a26102b29_63329785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_132879031560b76a26102b29_63329785',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        function getTable() {
            let $div_contacts_table = $('#div_contacts_table');
            $div_contacts_table.html('<h4>Loading...</h4>');
            $.post( base_url + "contacts/render-table", $('#filter_form').serialize())
                .done(function( data ) {
                    $div_contacts_table.html(data);
                    $('#clx_data_table').dataTable();
                });
        }

        $(function () {
            getTable();
            $('#filter_form').on('submit',function (event) {
                event.preventDefault();
                getTable();
            });

            let $btn_submit = $('#btn_submit');
            let $form_main = $('#form_main');
            let $sp_result_div = $('#sp_result_div');

            $form_main.on('submit',function (event) {
                event.preventDefault();
                $btn_submit.prop('disabled',true);
                $.post(base_url + 'contacts/save-contact',$form_main.serialize()).done(function () {
                    $form_main.trigger("reset");
                    $btn_submit.prop('disabled',false);
                    $sp_result_div.html('<div class="alert alert-success">Contact Added.</div>');
                    getTable();
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


            let $cloudonex_body = $('#cloudonex_body');

            $cloudonex_body.on('click', '.view_contact', function(event){
                event.preventDefault();

                let that = $(this);

                let id = that.attr('data-id');

                $.fancybox.open({
                    src  : base_url + 'contacts/view-contact/' + id,
                    type : 'ajax',
                    opts : {
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    }
                });

            });

            $cloudonex_body.on('submit', '.form_view_contact', function(event){
                event.preventDefault();
                let $btn_modal_save = $('#btn_modal_save');
                $btn_modal_save.prop('disabled',true);
                $.post(base_url + 'contacts/save-contact',$('#form_view_contact').serialize()).done(function () {
                    getTable();
                    $.fancybox.close();
                }).fail(function (data) {
                    let errors = $.parseJSON(data.responseText);
                    $btn_modal_save.prop('disabled',false);
                    let html = '';
                    $.each(errors, function(key,value) {
                        html += '<div class="alert alert-danger">'+ value +'</div>'
                    });

                    $('#sp_modal_result_div').html(html);

                });


            });

            $cloudonex_body.on('click', '.delete_contact', function(event){
                event.preventDefault();

                let that = $(this);

                let id = that.attr('data-id');

                confirmThenGoToUrl(event,'contacts/delete/' + id);

            });


        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
