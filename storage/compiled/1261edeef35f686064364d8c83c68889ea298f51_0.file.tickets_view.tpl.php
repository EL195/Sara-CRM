<?php
/* Smarty version 3.1.39, created on 2021-06-17 10:33:21
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/tickets_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cb5d31d7f718_15686968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1261edeef35f686064364d8c83c68889ea298f51' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/tickets_view.tpl',
      1 => 1623940378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cb5d31d7f718_15686968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170636636960cb5d31d603d8_84801783', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193358086060cb5d31d7db53_90850059', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "content"} */
class Block_170636636960cb5d31d603d8_84801783 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_170636636960cb5d31d603d8_84801783',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!-- row -->
    <div class="row">
        <div class="col-md-12" id="create_ticket">

            <h3><?php echo $_smarty_tpl->tpl_vars['d']->value->subject;?>
</h3>


            <ul class="timeline">
                <li class="time-label">
                  <span>
                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value->created_at));?>

                  </span>
                </li>

                <li>

                    <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == 'gravatar') {?>
                        <img src="http://www.gravatar.com/avatar/<?php echo md5(($_smarty_tpl->tpl_vars['user']->value['email']));?>
?s=30" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                        <img class="img-time-line" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" alt="">
                    <?php } else { ?>
                        <img src="<?php echo APP_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['account'];?>
">
                    <?php }?>

                    <div class="timeline-item">

                        <h3 class="timeline-header"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['d']->value->account;?>
</a></h3>

                        <div class="timeline-body">
                            <?php echo $_smarty_tpl->tpl_vars['d']->value->message;?>

                        </div>

                        <?php if (($_smarty_tpl->tpl_vars['d']->value->attachments) != '') {?>
                            <div class="timeline-footer">
                                <?php echo Tickets::gen_link_attachments($_smarty_tpl->tpl_vars['d']->value->attachments);?>

                            </div>
                        <?php }?>


                    </div>
                </li>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['replies']->value, 'reply');
$_smarty_tpl->tpl_vars['reply']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
$_smarty_tpl->tpl_vars['reply']->do_else = false;
?>
                    <li class="time-label">
                  <span>
                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['reply']->value['created_at']));?>

                  </span>
                    </li>
                    <li>
                        <i class="fal fa-envelope bg-blue"></i>

                        <div class="timeline-item">


                            <h3 class="timeline-header"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['reply']->value['replied_by'];?>
</a></h3>

                            <div class="timeline-body">
                                <?php echo $_smarty_tpl->tpl_vars['reply']->value['message'];?>

                            </div>

                            <?php if (($_smarty_tpl->tpl_vars['reply']->value['attachments']) != '') {?>
                                <div class="timeline-footer">
                                    <?php echo Tickets::gen_link_attachments($_smarty_tpl->tpl_vars['reply']->value['attachments']);?>

                                </div>
                            <?php }?>


                        </div>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <!-- END timeline item -->
                <!-- timeline item -->
                <li class="time-label">
                  <span>
                   <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Reply'];?>

                  </span>
                </li>
                <li>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == 'gravatar') {?>
                        <img src="http://www.gravatar.com/avatar/<?php echo md5(($_smarty_tpl->tpl_vars['user']->value['email']));?>
?s=30" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                        <img class="img-time-line" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" alt="">
                    <?php } else { ?>
                        <img src="<?php echo APP_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['account'];?>
">
                    <?php }?>

                    <div class="timeline-item">



                        <div class="timeline-body">
                            <form id="create_ticket" class="form-horizontal push-10-t push-10" method="post">






                                <div class="form-group">
                                    <div class="col-xs-12">

                                        <textarea id="content"  class="form-control" name="content"></textarea>
                                        <div class="help-block"><a data-toggle="modal" href="#modal_add_item"><i class="fal fa-paperclip"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Attach File'];?>
</a> </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">

                                        <input type="hidden" name="attachments" id="attachments" value="">
                                        <input type="hidden" name="f_tid" id="f_tid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
">

                                        <button class="btn btn-primary" id="ib_form_submit" type="submit"><i class="fal fa-send push-5-r"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </li>

                <li>
                    <i class="fal fa-life-ring bg-gray"></i>
                </li>
            </ul>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->


    <div id="modal_add_item" class="modal fade" tabindex="-1" data-width="600" style="display: none;">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Add File</h4>
        </div>
        <div class="modal-body">
            <div class="row">



                <div class="col-md-12">
                    <form action="" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i>  Drop File Here</h3>
                            <br />
                            <span class="note">Or Click to Upload</span>
                        </div>

                    </form>


                </div>




            </div>
        </div>
        <div class="modal-footer">

            <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>

        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_193358086060cb5d31d7db53_90850059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_193358086060cb5d31d7db53_90850059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        Dropzone.autoDiscover = false;
        $(function () {

            $( ".mmnt" ).each(function() {
                var ut = $( this ).html();
                $( this ).html(moment.unix(ut).fromNow());
            });

            var _url = base_url;

            var $ib_form_submit = $("#ib_form_submit");

            var $create_ticket = $("#create_ticket");


            $('#content').redactor({
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
                $create_ticket.block({ message: block_msg });
                $.post( _url + "client/tickets/add_reply/", {  message: $('#content').val(), attachments: $("#attachments").val(), f_tid: $("#f_tid").val()} )
                    .done(function( data ) {

                        if(data.success == "Yes"){
                            location.reload();
                        }

                        else {
                            $create_ticket.unblock();
                            toastr.error(data.msg);
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
