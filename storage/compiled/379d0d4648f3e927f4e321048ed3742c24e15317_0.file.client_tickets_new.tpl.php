<?php
/* Smarty version 3.1.39, created on 2021-02-26 12:22:32
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_tickets_new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60392e586a75e7_19595281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '379d0d4648f3e927f4e321048ed3742c24e15317' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_tickets_new.tpl',
      1 => 1614360148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60392e586a75e7_19595281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32151637060392e5869a328_03807679', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33691053360392e586a6350_49200208', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "content"} */
class Block_32151637060392e5869a328_03807679 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_32151637060392e5869a328_03807679',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <div class="panel mx-auto" style="width: 100%; max-width: 800px;">

        <div class="panel-container">
            <div class="panel-content">
                <section id="ib_box">
                    <div>
                        <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
                            <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

                        <?php }?>




                        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/create_post/" id="iform" name="iform">



                            <div class="form-group">
                                <label for="account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full_Name'];?>
</label>
                                <input type="text" class="form-control" id="account" name="account" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
" disabled>
                            </div>

                            <div class="form-group">
                                <label for="email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
" disabled>
                            </div>



                            <div class="form-group">
                                <label for="subject"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</label>
                                <input type="text" class="form-control" id="subject" name="subject">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="department"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Department'];?>
</label>
                                        <select class="custom-select" id="department" name="department" size="1">

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
                                                <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">

                                        <label for="urgency"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Priority'];?>
</label>
                                        <select class="custom-select" id="urgency" name="urgency" size="1">
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
                                <label for="message"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                                <textarea id="message" class="form-control sysedit" name="message"></textarea>
                                <div class="help-block"><a data-toggle="modal" href="#modal_add_item"><i class="fal fa-paperclip"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Attach File'];?>
</a> </div>
                            </div>



                            <input type="hidden" name="attachments" id="attachments" value="">
                            <button type="submit" id="ib_form_submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        </form>


                    </div>
                </section>
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
class Block_33691053360392e586a6350_49200208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_33691053360392e586a6350_49200208',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        Dropzone.autoDiscover = false;
        $(function() {

            var _url = $("#_url").val();

            var $ib_form_submit = $("#ib_form_submit");

            var $create_ticket = $("#create_ticket");
            var $ib_box = $("#ib_box");


            $('.sysedit').redactor({
                buttonsHide: ['html'],
            });


            var upload_resp;


            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "client/tickets/upload_file/",
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
                $.post( _url + "client/tickets/add_post/", { subject: $("#subject").val(), department: $("#department").val(), urgency: $("#urgency").val(), message: $('#message').val(), attachments: $("#attachments").val()} )
                    .done(function( data ) {

                        if(data.success == "Yes"){
                            window.location.href = _url + "client/tickets/view/" + data.tid + "/";
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
