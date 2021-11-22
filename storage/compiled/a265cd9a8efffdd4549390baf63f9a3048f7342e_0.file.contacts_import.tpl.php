<?php
/* Smarty version 3.1.39, created on 2021-05-11 02:16:41
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/contacts_import.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609a21491bc4c1_13401458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a265cd9a8efffdd4549390baf63f9a3048f7342e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/contacts_import.tpl',
      1 => 1620713727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609a21491bc4c1_13401458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_271720088609a21491b86e8_85951204', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1832572042609a21491bb048_11628125', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_271720088609a21491b86e8_85951204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_271720088609a21491b86e8_85951204',
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
contacts/import/" class="dropzone" id="upload_container">

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
class Block_1832572042609a21491bb048_11628125 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1832572042609a21491bb048_11628125',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>
        Dropzone.autoDiscover = false;
        $(function() {
            var clx_upload = new Dropzone("#upload_container",
                {
                    url: base_url + "contacts/upload-csv",
                    maxFiles: 1,
                    acceptedFiles: ".csv"
                }
            );

            clx_upload.on("success", function(file) {

                var _msg_importing = $('#_msg_importing').val();
                $('#uploading_inside').block({
                    message: "<h3>Importing...</h3>" ,
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

                $.post(base_url + 'contacts/import-action/<?php echo $_smarty_tpl->tpl_vars['audience']->value->id;?>
', {

                    name: file.name

                })
                    .done(function (data) {

                        window.location.replace(base_url + "contacts/list/");


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
