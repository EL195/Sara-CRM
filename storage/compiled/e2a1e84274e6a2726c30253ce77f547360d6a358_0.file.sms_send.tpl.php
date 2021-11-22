<?php
/* Smarty version 3.1.39, created on 2021-02-20 15:00:40
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/sms_send.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60316a68db2989_35176394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2a1e84274e6a2726c30253ce77f547360d6a358' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/sms_send.tpl',
      1 => 1597096719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60316a68db2989_35176394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195874415160316a68daa0d3_31674168', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163235297260316a68db1df0_57233636', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_195874415160316a68daa0d3_31674168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_195874415160316a68daa0d3_31674168',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="mx-auto" style="width: 100%; max-width: 600px;">
        <div class="panel panel-default">

            <div class="panel-hdr">
                <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Send SMS'];?>
</h2>
            </div>

            <div class="panel-container">
                <div class="panel-content">

                    <div id="result"></div>

                    <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sms/init/send_post/" method="post" id="iform">

                        <div class="form-group">
                            <label for="from"><?php echo $_smarty_tpl->tpl_vars['_L']->value['From'];?>
 </label>
                            <input type="text" name="from" id="from" class="form-control " value="<?php echo $_smarty_tpl->tpl_vars['config']->value['sms_sender_name'];?>
">
                        </div>

                        <div class="form-group"><label for="sms_to"><?php echo $_smarty_tpl->tpl_vars['_L']->value['To'];?>
 </label>
                            <input type="text" name="sms_to" id="sms_to" class="form-control ">

                            <span class="help-block"><a data-toggle="modal" href="#modal_find_contact">| Or Choose from Contact</a> </span>
                        </div>


                        <div class="form-group"><label for="sms_type"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
 </label>
                            <select class="form-control" name="sms_type" id="sms_type">
                                <option value="text">Plain Text</option>
                                <option value="flash">Flash Message</option>
                                <option value="unicode" selected>Unicode</option>
                                <option value="wap">Wap Push</option>
                                <option value="vcal">vcal / vcard</option>
                                <option value="binary">Binary</option>
                            </select>
                        </div>


                        <?php if ($_smarty_tpl->tpl_vars['config']->value['sms_api_handler'] == 'Msg91') {?>

                            <div class="form-group"><label for="sms_route">Route</label>
                                <select class="form-control" name="sms_route" id="sms_route">
                                    <option value="4">Transactional</option>
                                    <option value="1">Promotional</option>
                                </select>
                            </div>

                        <?php }?>


                        <div class="form-group"><label for="message"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMS'];?>
 </label>
                            <textarea class="form-control" name="message" id="message" rows="4"></textarea>

                            <p class="help-block" id="sms-counter">
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Remaining'];?>
: <span class="remaining"></span> | <?php echo $_smarty_tpl->tpl_vars['_L']->value['Length'];?>
: <span class="length"></span> | <?php echo $_smarty_tpl->tpl_vars['_L']->value['Messages'];?>
: <span class="messages"></span>
                            </p>
                        </div>


                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" id="send"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Send'];?>
</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>


    <div class="modal fade" id="modal_find_contact" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Contact'];?>

                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">

                    <select id="cid" name="cid" class="form-control">
                        <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Search Contact'];?>
...</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'cs');
$_smarty_tpl->tpl_vars['cs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
$_smarty_tpl->tpl_vars['cs']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['phone'];?>
"><?php echo $_smarty_tpl->tpl_vars['cs']->value['account'];?>
 - <?php echo $_smarty_tpl->tpl_vars['cs']->value['phone'];?>
  <?php if ($_smarty_tpl->tpl_vars['cs']->value['email'] != '') {?> [ <?php echo $_smarty_tpl->tpl_vars['cs']->value['email'];?>
 ]<?php }?></option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </select>

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
class Block_163235297260316a68db1df0_57233636 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_163235297260316a68db1df0_57233636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            var _url = $("#_url").val();

            var send = $("#send");

            var result = $("#result");

            var iform = $( "#iform" );

            $('#message').countSms('#sms-counter');

            var $modal = $('#ajax-modal');

            var $modal_find_contact = $("#modal_find_contact");


            var $cid = $('#cid');

            var $sms_to = $("#sms_to");


            function ib_s2() {

                return  $cid.select2({

                });



            }

            ib_s2();


            $modal_find_contact.on('shown.bs.modal', function() {


                ib_s2().select2('open');





            });


            $cid.on("change", function() {



                $sms_to.val($cid.val());

                $modal_find_contact.modal('hide');

            });






            send.on('click', function(e) {


                e.preventDefault();

                iform.block({ message: null });


                $.post( _url + "sms/init/send_post/", iform.serialize())
                    .done(function (data) {

                        iform.unblock();

                        result.html(data);

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
