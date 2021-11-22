<?php
/* Smarty version 3.1.39, created on 2021-02-20 15:00:51
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/tickets_admin_create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60316a730ff1f7_83869405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccd8bfd667e413088820f6ef9828074c9b499928' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/tickets_admin_create.tpl',
      1 => 1596718216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60316a730ff1f7_83869405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131352911660316a730f3c71_45919913', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198146188960316a730fdf12_72071812', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_131352911660316a730f3c71_45919913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_131352911660316a730f3c71_45919913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">

        <div class="col-md-12">
            <div class="panel" id="ib_box">
                <div class="panel-hdr">


                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Open Ticket'];?>
</h2>


                </div>

                <div class="panel-container">
                    <div class="panel-content">


                        <form id="create_ticket" class="form-horizontal push-10-t push-10" method="post">

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <label for="cid"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>

                                    <select id="cid" name="cid" class="form-control">
                                        <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
...</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customers']->value, 'cs');
$_smarty_tpl->tpl_vars['cs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
$_smarty_tpl->tpl_vars['cs']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
"
                                                    <?php if ($_smarty_tpl->tpl_vars['p_cid']->value == ($_smarty_tpl->tpl_vars['cs']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
 <?php if ($_smarty_tpl->tpl_vars['cs']->value['email'] != '') {?>- <?php echo $_smarty_tpl->tpl_vars['cs']->value['email'];
}?></option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    </select>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="subject"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</label>
                                        <input class="form-control" type="text" id="subject" name="subject" autofocus>


                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="department"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Department'];?>
</label>
                                        <select class="form-control" id="department" name="department" size="1">

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deps']->value, 'dep');
$_smarty_tpl->tpl_vars['dep']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dep']->value) {
$_smarty_tpl->tpl_vars['dep']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dep']->value['dname'];?>
</option>
                                                <?php
}
if ($_smarty_tpl->tpl_vars['dep']->do_else) {
?>
                                                <option value="0">None</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                        </select>

                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="urgency"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Priority'];?>
</label>
                                        <select class="form-control" id="urgency" name="urgency" size="1">
                                            <option value="High"><?php echo $_smarty_tpl->tpl_vars['_L']->value['High'];?>
</option>
                                            <option value="Medium" selected><?php echo $_smarty_tpl->tpl_vars['_L']->value['Medium'];?>
</option>
                                            <option value="Low"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Low'];?>
</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group mt-3">
                                <label for="content"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Message'];?>
</label>
                                <textarea id="content"  class="form-control sysedit" name="content"></textarea>
                                <div class="help-block"><a data-toggle="modal" href="#modal_add_item"><i class="fal fa-paperclip"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Attach File'];?>
</a> </div>

                            </div>
                            <div class="form-group">
                                <input type="hidden" name="attachments" id="attachments" value="">

                                <button class="btn btn-primary" id="ib_form_submit" type="submit"><i class="fal fa-send push-5-r"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                            </div>
                        </form>



                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="modal fade" id="modal_add_item" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Attach File'];?>

                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Drop File Here'];?>
</h3>
                            <br />
                            <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Click to Upload'];?>
</span>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
                </div>
            </div>
        </div>
    </div>















<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_198146188960316a730fdf12_72071812 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_198146188960316a730fdf12_72071812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/redactor/redactor.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>

        Dropzone.autoDiscover = false;
        $(function () {
            $('#content').redactor(
                {
                    minHeight: 200 // pixels
                }
            );

            var _url = $("#_url").val();

            var $ib_form_submit = $("#ib_form_submit");

            var $create_ticket = $("#create_ticket");
            var $ib_box = $("#ib_box");




            $("#cid").select2({

                }
            );


            var upload_resp;


            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "tickets/admin/upload_file/",
                    maxFiles: 10,
                    acceptedFiles: "image/jpeg,image/png,image/gif"
                }
            );


            ib_file.on("sending", function() {

                $ib_form_submit.prop('disabled', true);

            });

            ib_file.on("success", function(file,response) {

                $ib_form_submit.prop('disabled', false);

                upload_resp = response;

                if(upload_resp.success == 'Yes'){

                    toastr.success(upload_resp.msg);
                    // $file_link.val(upload_resp.file);
                    // files.push(upload_resp.file);
                    //
                    // console.log(files);

                    $('#attachments').val(function(i,val) {
                        return val + (!val ? '' : ',') + upload_resp.file;
                    });


                }
                else{
                    toastr.error(upload_resp.msg);
                }







            });



            $ib_form_submit.on('click', function(e) {
                e.preventDefault();
                $ib_box.block({ message: block_msg });
                $.post( _url + "tickets/admin/add_post/", { cid: $("#cid").val(), subject: $("#subject").val(), department: $("#department").val(), urgency: $("#urgency").val(), message: $('#content').val(), attachments: $("#attachments").val()} )
                    .done(function( data ) {

                        if(data.success == "Yes"){
                            window.location.href = _url + "tickets/admin/view/" + data.id + "/";
                        }

                        else {
                            $ib_box.unblock();
                            toastr.error(data.msg);
                            //  console.log(data);
                        }

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
