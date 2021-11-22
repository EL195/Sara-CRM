<?php
/* Smarty version 3.1.39, created on 2021-05-11 01:56:19
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/import_contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609a1c83e2d282_07797912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b30492f170081be510df0d906a461f7422ae91f' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/import_contact.tpl',
      1 => 1620712577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609a1c83e2d282_07797912 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1401558239609a1c83e29834_73426147', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_753247819609a1c83e2c066_17590508', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1401558239609a1c83e29834_73426147 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1401558239609a1c83e29834_73426147',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-8">
            <h3>Import to <?php echo $_smarty_tpl->tpl_vars['audience']->value->name;?>
</h3>
        </div>
        <div class="col-md-4 text-right">
            <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/download-sample-csv">Download Sample CSV File</a>
        </div>
    </div>

    <div class="panel panel-default mt-3" id="uploading_inside">
        <div class="panel-body">
            <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/csv_upload/" class="dropzone" id="upload_container">

                <div class="dz-message">
                    <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Drop CSV File Here'];?>
</h3>
                    <br />
                    <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Or Click to Upload'];?>
</span>
                </div>

            </form>

        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_753247819609a1c83e2c066_17590508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_753247819609a1c83e2c066_17590508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>
        Dropzone.autoDiscover = false;
        $(function() {
            var _url = $("#_url").val();
            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "contacts/csv_upload/",
                    maxFiles: 1,
                    acceptedFiles: ".csv"
                }
            );

            //ib_file.on("addedfile", function(file) {
            //
            //});

            ib_file.on("success", function(file) {

                var _msg_importing = $('#_msg_importing').val();
                $('#uploading_inside').block({
                    message: "<h3>" + _msg_importing +"</h3>" ,
                    css: {
                        padding:        0,
                        margin:         0,
                        width:          '30%',
                        top:            '40%',
                        left:           '35%',
                        textAlign:      'center',
                        color:          '#FFFFFF',
                        border:         '0',
                        backgroundColor:'transparent',
                        cursor:         'wait'
                    }
                });
                //   $('#uploading_inside').block({ message: null });

                var _url = $("#_url").val();

                $.post(_url + 'contacts/csv_uploaded/', {

                    name: file.name

                })
                    .done(function (data) {
                        //location.reload();

                        window.location.replace(_url + "contacts/list/");


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
