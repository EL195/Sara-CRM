<?php
/* Smarty version 3.1.39, created on 2021-08-31 07:45:48
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/tickets_admin_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612e166c700f15_90393806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b167a4bd89081461301719878dad60dd821aee8e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/tickets_admin_view.tpl',
      1 => 1623941466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612e166c700f15_90393806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_745114253612e166c698975_74828491', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1281450941612e166c6ec5e3_41636397', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_745114253612e166c698975_74828491 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_745114253612e166c698975_74828491',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <div class="row">
        <div class="col">
            <h2><?php echo $_smarty_tpl->tpl_vars['d']->value->subject;?>
</h2>
        </div>
        <div class="col text-right">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/list/" class="btn btn-primary btn-sm" style="margin-bottom: 15px;"><i
                        class="fal fa-long-arrow-left"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Back to the List'];?>
</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">



            <div class="card border" id="t_options">

                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item active" role="presentation"><a data-toggle="tab" class="nav-link active" href="#details"><i class="fal fa-th"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Details'];?>
</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#tasks"><i class="fal fa-tasks"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Tasks'];?>
</a></li>

                    </ul>
                </div>




                <div class="card-body">




                    <div class="tab-content">
                        <div id="details" class="tab-pane fade show active ib-tab-box">


                            <div class="row mt-3">
                                <div class="col">
                                    <div> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Priority'];?>
:
                                        <?php if ($_smarty_tpl->tpl_vars['d']->value->urgency == 'Medium' || $_smarty_tpl->tpl_vars['d']->value->urgency == 'High') {?>
                                            <span class="badge badge-outline text-uppercase badge-outline-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['d']->value->urgency);?>
</span>
                                        <?php } else { ?>
                                            <span class="badge badge-outline text-uppercase badge-outline-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['d']->value->urgency);?>
</span>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="col">
                                    <div> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
: <span id="inline_status"><?php echo $_smarty_tpl->tpl_vars['d']->value->status;?>
</span></div>
                                </div>
                            </div>




                            <hr>
                            <p><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Ticket'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['d']->value->tid;?>
</p>
                            <p><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
:</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['d']->value->userid;?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value->account;?>
</a></p>



                            <hr>




                            <a class="btn btn-primary" href="#" id="add_reply"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Reply'];?>
</a>

                            <?php if ($_smarty_tpl->tpl_vars['can_edit_sales']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['invoice']->value) {?>
                                    <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" id="add_reply"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View Invoice'];?>
</a>
                                <?php } else { ?>
                                    <a class="btn btn-success" id="convertToInvoice" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create Invoice'];?>
</a>
                                <?php }?>
                            <?php }?>


                            <a class="cdelete btn btn-danger" href="#" id="t<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
"><i class="fal fa-trash-alt"></i> </a>

                            <hr>

                            <div class="form-group">
                                <label for="editable_department"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Department'];?>
</label>
                                <select class="form-control" id="editable_department" name="editable_department" size="1">
                                    <option value="None">None</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departments']->value, 'dep');
$_smarty_tpl->tpl_vars['dep']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dep']->value) {
$_smarty_tpl->tpl_vars['dep']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['dep']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['department']->value == $_smarty_tpl->tpl_vars['dep']->value['dname']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['dep']->value['dname'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Assigned to'];?>
</label>
                                <select class="form-control" id="editable_assigned_to" name="editable_assigned_to" size="1">
                                    <option value="None"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ads']->value, 'ad');
$_smarty_tpl->tpl_vars['ad']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ad']->value) {
$_smarty_tpl->tpl_vars['ad']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['ad']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value->aid == $_smarty_tpl->tpl_vars['ad']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ad']->value['fullname'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="editable_status"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</label>
                                <select class="form-control" id="editable_status" name="editable_status" size="1">
                                    <option value="Open" <?php if ($_smarty_tpl->tpl_vars['d']->value->status == 'Open') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Open'];?>
</option>
                                    <option value="On Hold" <?php if ($_smarty_tpl->tpl_vars['d']->value->status == 'On Hold') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['On Hold'];?>
</option>
                                    <option value="Escalated" <?php if ($_smarty_tpl->tpl_vars['d']->value->status == 'Escalated') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Escalated'];?>
</option>
                                    <option value="Closed" <?php if ($_smarty_tpl->tpl_vars['d']->value->status == 'Closed') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Closed'];?>
</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="editable_cc"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>
                                <input class="form-control" type="text" id="editable_email" name="editable_email" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->email;?>
">
                            </div>

                            <div class="form-group">
                                <label for="editable_cc"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cc'];?>
</label>
                                <input class="form-control" type="text" id="editable_cc" name="editable_cc" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->cc;?>
">
                            </div>

                            <div class="form-group">
                                <label for="editable_bcc"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Bcc'];?>
</label>
                                <input class="form-control" type="text" id="editable_bcc" name="editable_bcc" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->bcc;?>
">
                            </div>

                            <div class="form-group">
                                <label for="editable_phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>
                                <input class="form-control" type="text" id="editable_phone" name="editable_phone" value="<?php if ($_smarty_tpl->tpl_vars['c']->value) {
echo $_smarty_tpl->tpl_vars['c']->value->phone;
}?>">
                            </div>





                            <input type="hidden" name="tid" id="tid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
">



                            <form>

                                <hr>

                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Note'];?>
</label>
                                    <textarea class="form-control" name="notes" id="notes" rows="3"><?php echo $_smarty_tpl->tpl_vars['d']->value->notes;?>
</textarea>
                                </div>

                                <button type="submit" id="btn_save_note" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>

                            </form>


                            <hr>

                            <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Previous Conversations'];?>
</h4>


                            <?php if (count($_smarty_tpl->tpl_vars['o_tickets']->value) > 1) {?>

                                <table class="table table-hover">

                                    <tbody>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['o_tickets']->value, 'o_ticket');
$_smarty_tpl->tpl_vars['o_ticket']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o_ticket']->value) {
$_smarty_tpl->tpl_vars['o_ticket']->do_else = false;
?>

                                        <?php if ($_smarty_tpl->tpl_vars['o_ticket']->value['id'] == $_smarty_tpl->tpl_vars['d']->value->id) {?>
                                            <?php continue 1;?>
                                        <?php }?>

                                        <tr>
                                            <td>
                                                <em><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['o_ticket']->value['created_at']));?>
</em>
                                                <br>
                                                <p><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/view/<?php echo $_smarty_tpl->tpl_vars['o_ticket']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['o_ticket']->value['subject'];?>
</a></p>
                                                <span class="label label-default inline-block"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
: <?php echo $_smarty_tpl->tpl_vars['d']->value->status;?>
 </span>

                                            </td>
                                        </tr>


                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    </tbody>
                                </table>

                            <?php } else { ?>

                               <span class="mt-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>
</span>

                            <?php }?>

                        </div>


                        <div id="tasks" class="tab-pane fade ib-tab-box">


                            <form id="ib_add_group" class="form-horizontal push-10-t push-10" method="post">

                                <div class="form-group">
                                    <label for="task_subject"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Task'];?>
</label>
                                    <input class="form-control" type="text" id="task_subject" name="task_subject">
                                </div>



                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <button class="btn btn-primary" id="btn_add_task" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                                        <div id="tasks_tools"  style="display: none;">
                                            <hr>

                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success no-shadow" id="btn_mark_tasks_completed" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Mark as Completed'];?>
"><i class="fal fa-check"></i></button>
                                                <button type="button" class="btn btn-primary no-shadow" id="btn_mark_tasks_not_started" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Mark as Not Started'];?>
"><i class="fal fa-clock"></i></button>
                                                <button type="button" class="btn btn-danger no-shadow" id="btn_delete_tasks" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fal fa-trash-alt"></i></button>
                                            </div>


                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div id="tasks_list">

                            </div>


                        </div>

                    </div>





                </div>

            </div>

        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12" id="create_ticket">


                    <!-- The time line -->
                    <ul class="timeline">
                        <!-- timeline time label -->
                        <li class="time-label">
                  <span>
                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value->created_at));?>

                  </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>



                            <?php if ($_smarty_tpl->tpl_vars['d']->value->admin != '0') {?>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == 'gravatar') {?>
                                    <img src="http://www.gravatar.com/avatar/<?php echo md5(($_smarty_tpl->tpl_vars['user']->value['email']));?>
?s=30"
                                         class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                                <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                                    <img class="img-time-line" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" alt="">
                                <?php } else { ?>
                                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['account'];?>
">
                                <?php }?>

                            <?php } elseif (($_smarty_tpl->tpl_vars['c']->value)) {?>

                                <?php if ($_smarty_tpl->tpl_vars['c']->value->img == 'gravatar') {?>
                                    <img src="http://www.gravatar.com/avatar/<?php echo md5(($_smarty_tpl->tpl_vars['user']->value['email']));?>
?s=30"
                                         class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                                <?php } elseif ($_smarty_tpl->tpl_vars['c']->value->img == '') {?>
                                    <img class="img-time-line" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" alt="">
                                <?php } else { ?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['c']->value->img;?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['account'];?>
">
                                <?php }?>

                            <?php } else { ?>



                            <?php }?>


                            <div class="timeline-item">



                                <h3 class="timeline-header"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['d']->value->account;?>
</a></h3>

                                <div class="timeline-body">
                                    <?php echo $_smarty_tpl->tpl_vars['d']->value->message;?>

                                    <hr>

                                    <a href="#" class="btn btn-warning t_edit" data-toggle="tooltip"
                                       data-placement="top" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
" id="et<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
"><i
                                                class="fal fa-pencil"></i> </a>
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


                                <?php if ($_smarty_tpl->tpl_vars['reply']->value['admin'] != '0') {?>
                                    <img src="<?php echo getAdminImage($_smarty_tpl->tpl_vars['reply']->value['admin'],30);?>
" class="img-time-line">
                                <?php } elseif (($_smarty_tpl->tpl_vars['c']->value)) {?>

                                    <?php if ($_smarty_tpl->tpl_vars['c']->value->img == '') {?>
                                        <img class="img-time-line" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png"
                                             alt="">
                                    <?php } else { ?>
                                        <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
/<?php echo $_smarty_tpl->tpl_vars['c']->value->img;?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['account'];?>
">
                                    <?php }?>

                                <?php } else { ?>



                                <?php }?>

                                <div class="timeline-item">


                                    <h3 class="timeline-header"><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['reply']->value['replied_by'];?>
</a></h3>

                                    <div class="timeline-body" <?php if ($_smarty_tpl->tpl_vars['reply']->value['reply_type'] == 'internal') {?> style="background: #FFF6D9;" <?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['reply']->value['message'];?>


                                        <hr>

                                        <a href="#" class="btn btn-warning reply_edit"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
" id="er<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
"><i
                                                    class="fal fa-pencil"></i> </a> &nbsp;
                                        <a href="#" class="btn btn-danger reply_delete"
                                           data-toggle="tooltip" data-placement="top" title=""
                                           data-original-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
" id="dr<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
"><i
                                                    class="fal fa-trash-alt"></i> </a> &nbsp;

                                        <?php if ($_smarty_tpl->tpl_vars['reply']->value['reply_type'] == 'internal') {?> <a href="#" class="btn btn-primary no-shadow reply_make_public"
                                                                                   data-toggle="tooltip" data-placement="top" title=""
                                                                                   data-original-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Public'];?>
" id="rp<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
"><i
                                                    class="fal fa-globe"></i> </a> <?php }?>

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
                  <span class="bg-green" id="section_add_reply">
                   <?php echo __('Add Reply');?>

                  </span>
                        </li>
                        <li>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                                <img class="img-time-line" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" alt="">
                            <?php } else { ?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['img'];?>
" class="img-time-line" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['account'];?>
">
                            <?php }?>

                            <div class="timeline-item">


                                <div class="timeline-body">
                                    <form class="form-horizontal push-10-t push-10" method="post">

                                        <ul class="nav nav-pills mb-3"  role="tablist">
                                            <li class="nav-item"><a id="reply_public" class="nav-link active" href="#"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</a></li>
                                            <li class="nav-item"><a id="reply_internal" class="nav-link" href="#"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Internal'];?>
</a></li>
                                        </ul>

                                        <div class="form-group">
                                            <div class="col-xs-12">

                                            <textarea id="content" class="form-control sysedit"
                                                      name="content"></textarea>
                                                <div class="help-block">
                                                    <a data-toggle="modal" href="#modal_add_item"><i
                                                                class="fal fa-paperclip"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Attach File'];?>
</a>
                                                    | <a data-toggle="modal" href="#modal_predefined_replies"><i
                                                                class="fal fa-align-left"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Predefined Reply'];?>
</a>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <div class="col-xs-12">

                                                <input type="hidden" name="attachments" id="attachments" value="">
                                                <input type="hidden" name="f_tid" id="f_tid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
">
                                                <input type="hidden" name="cid" id="cid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->userid;?>
">

                                                <button class="btn btn-primary" id="ib_form_submit" type="submit"><i
                                                            class="fal fa-send push-5-r"></i> Submit
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







    <div id="modal_predefined_replies" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Predefined Replies'];?>
</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-hover sys_table" id="clx_datatable">
                        <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['predefined_replies']->value, 'predefined_replie');
$_smarty_tpl->tpl_vars['predefined_replie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['predefined_replie']->value) {
$_smarty_tpl->tpl_vars['predefined_replie']->do_else = false;
?>
                            <tr>
                                <td><a href="javascript:;" onclick="setPreDefinedContent(event,'<?php echo $_smarty_tpl->tpl_vars['predefined_replie']->value->id;?>
');"><?php echo $_smarty_tpl->tpl_vars['predefined_replie']->value->title;?>
</a> </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>

                        <tfoot>
                        <tr>
                            <td>
                                <ul class="pagination">
                                </ul>
                            </td>
                        </tr>
                        </tfoot>

                    </table>
                </div>
            </div>
        </div>

    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1281450941612e166c6ec5e3_41636397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1281450941612e166c6ec5e3_41636397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <?php echo '<script'; ?>
>

        Dropzone.autoDiscover = false;
        $(function() {

            var tid = <?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
;

            $( ".mmnt" ).each(function() {
                var ut = $( this ).html();
                $( this ).html(moment.unix(ut).fromNow());
            });

            var _url = $("#_url").val();

            var $ib_form_submit = $("#ib_form_submit");

            var $create_ticket = $("#create_ticket");

            $('#clx_datatable').dataTable(
                {
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No items to display'];?>
",
                        "info":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                        "infoEmpty":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing 0 to 0 of 0 entries'];?>
",
                        buttons: {
                            pageLength: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Show all'];?>
'
                        },
                        searchPlaceholder: "<?php echo __('Search');?>
"
                    },
                }
            );



            $('#content').redactor(
                {
                    minHeight: 200,
                }
            );

            var $modal = $('#cloudonex_body');

            var reply_type = 'public';


            var upload_resp;


            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "tickets/client/upload_file/",
                    maxFiles: 10,
                    acceptedFiles: "image/jpeg,image/png,image/gif"
                }
            );

            ib_file.on("sending", function() {

                $ib_form_submit.prop('disabled', true);

            });


            // Ticket convert to invoice

            $('#convertToInvoice').on('click',function (e) {
                e.preventDefault();

                bootbox.confirm('Are you sure?', function (yes) {
                    if(yes)
                        {
                            window.location = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/create-from-ticket/<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
';
                        }
                });

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
                $create_ticket.block({ message: block_msg });
                $.post( _url + "tickets/admin/add_reply/", {  message: $('#content').val(), reply_type: reply_type, attachments: $("#attachments").val(), f_tid: $("#f_tid").val()} )
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


            $("#add_reply").on('click', function(e) {
                e.preventDefault();

                $('html, body').animate({
                    scrollTop: $("#section_add_reply").offset().top - 60
                }, 500);



            });

            $('#notes').redactor(
                {
                    minHeight: 150, // pixels
                    plugins: ['fontcolor']
                }
            );

            $("#btn_save_note").on('click', function(e) {
                e.preventDefault();

                $('#t_options').block({ message: null });

                $.post(base_url + 'tickets/admin/save_note', {
                    tid: $('#tid').val(),

                    notes: $('#notes').val()

                })
                    .done(function () {
                        toastr.success(_L['Saved Successfully']);
                        $('#t_options').unblock();

                    });

            });

            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "tickets/admin/delete/" + id;
                    }
                });
            });


            $(".t_edit").click(function (e) {
                e.preventDefault();
                var id = this.id;


                $.fancybox.open({
                    src  : base_url + 'tickets/admin/edit_modal/'+id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#edit_content').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                    }
                });

            });


            $(".reply_edit").click(function (e) {
                e.preventDefault();
                var id = this.id;

                $.fancybox.open({
                    src  : base_url + 'tickets/admin/edit_modal/'+id+'/reply',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#edit_content').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                    }
                });


            });



            $('[data-toggle="tooltip"]').tooltip();

            // $modal.on('hidden.bs.modal', function () {
            //     location.reload();
            // });

            $modal.on('click', '.update_ticket_message', function(e){

                e.preventDefault();


                $.post( _url + "tickets/admin/edit_modal_post/", {
                    tid: $('#edit_tid').val(),
                    type: $('#edit_type').val(),
                    message:  $('#edit_content').val(),

                })
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {

                            toastr.error(data);
                        }

                    });

            });


            $(".reply_delete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "tickets/admin/delete_reply/" + id;
                    }
                });
            });






            $("#editable_cc").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_cc',{ id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Saved Successfully'];?>
');

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            $("#editable_bcc").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_bcc',{ id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Saved Successfully'];?>
');

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            $("#editable_email").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_email',{ id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Saved Successfully'];?>
');

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            $("#editable_phone").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_phone',{ id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Saved Successfully'];?>
');

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            $("#editable_hour").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_hour',{ id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Saved Successfully'];?>
');

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });

            $("#editable_minute").on("blur",function(e){
                $.post(base_url + 'tickets/admin/update_minute',{ id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Saved Successfully'];?>
');

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            $("#editable_department").on("change",function(e){
                $.post(base_url + 'tickets/admin/update_department',{ id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Saved Successfully'];?>
');

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });


            $('#editable_assigned_to').select2({

            })
                .on("change", function (e) {

                    $.post(base_url + 'tickets/admin/update_assigned_to',{
                        id: <?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
, value: $("#editable_assigned_to option:selected").val()
                    },function (data) {
                        if ($.isNumeric(data)) {

                            toastr.success('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Saved Successfully'];?>
');

                        }

                        else {

                            toastr.error(data);
                        }
                    })
                });


            // $("#editable_assigned_to").on("change",function(e){
            //
            // });

            $("#editable_status").on("change",function(e){
                $.post(base_url + 'tickets/admin/update_status',{ id: tid, value: $(this).val()},function (data) {
                    if ($.isNumeric(data)) {

                        toastr.success('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Saved Successfully'];?>
');

                        $("#inline_status").html($("#editable_status option:selected").text());

                    }

                    else {

                        toastr.error(data);
                    }
                })
            });





            var $reply_public = $("#reply_public");
            var $reply_internal = $("#reply_internal");


            $reply_public.click(function (e) {
                e.preventDefault();
                $(this).addClass('active');
                $reply_internal.removeClass('active');
                reply_type = 'public';
                $('#content').closest('.redactor-box').find('.redactor-editor').css({
                    backgroundColor: '#FFFFFF'
                });
            });


            $reply_internal.click(function (e) {
                e.preventDefault();
                $(this).addClass('active');
                $reply_public.removeClass('active');
                reply_type = 'internal';
                $('#content').closest('.redactor-box').find('.redactor-editor').css({
                    backgroundColor: '#FFF6D9'
                });
            });


            $(".reply_make_public").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "tickets/admin/reply_make_public/" + id;
                    }
                });
            });

            function loadTasks() {

                $("#tasks_list").html(block_msg);

                $.get( base_url + "tickets/admin/tasks_list/<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id;?>
", function( data ) {

                    $("#tasks_list").html(data);



                    $('.task-checkbox').on('change', function (event) {


                        var i_check_id = $(this)[0].id;

                        if($(this)[0].checked){

                            $.get(base_url + 'tickets/admin/set_task_completed/'+i_check_id,function () {
                                loadTasks();
                            });

                        }
                        else{

                            $.get(base_url + 'tickets/admin/set_task_not_started/'+i_check_id,function () {
                                loadTasks();
                            });

                        }

                    });

                });
            }


            loadTasks();


            $("#btn_add_task").click(function (e) {
                e.preventDefault();


                if($("#task_subject").val() == ''){

                    $("#task_subject").focus();

                }

                else {

                    $("#btn_add_task").prop('disabled', true);

                    $.post( base_url + "tasks/post/", { title: $("#task_subject").val(), rel_type: 'Ticket', tid: '<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id;?>
', rel_id: '<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id;?>
', cid: <?php echo $_smarty_tpl->tpl_vars['ticket']->value->userid;?>
, priority: '<?php echo $_smarty_tpl->tpl_vars['ticket']->value->urgency;?>
' })
                        .done(function( data ) {

                            $("#btn_add_task").prop('disabled', false);

                            if ($.isNumeric(data)) {

                                $("#task_subject").val('');

                                loadTasks();

                            }
                            else{
                                toastr.error(data);
                            }

                        });

                }
            });

            var task_id;

            function has_selected_task_items() {
                if($('.selected').length > 0){

                    $("#tasks_tools").show(200);

                }
                else{
                    $("#tasks_tools").hide(200);
                }
            }

            $("#tasks_list").on('click', '.task_item', function () {

                task_id = this.id;



                if($("#" + task_id).hasClass('selected')){
                    $("#" + task_id).removeClass('selected');
                }
                else{
                    $("#" + task_id).addClass('selected');
                }

                has_selected_task_items();


                // alert(task_id);


            });

            $("#btn_mark_tasks_completed").on('click',function (e) {
                e.preventDefault();
                var arrayOfIds = $.map($(".selected"), function(n, i){
                    return n.id;
                });

                $("#btn_mark_tasks_completed").prop('disabled', true);

                $.post( base_url + "tickets/admin/do_task/", { action: 'completed', ids: arrayOfIds })
                    .done(function( data ) {

                        $("#btn_mark_tasks_completed").prop('disabled', false);

                        loadTasks();

                        $("#tasks_tools").hide(200);

                    });

            });


            $("#btn_mark_tasks_not_started").on('click',function (e) {
                e.preventDefault();
                var arrayOfIds = $.map($(".selected"), function(n, i){
                    return n.id;
                });

                $("#btn_mark_tasks_completed").prop('disabled', true);

                $.post( base_url + "tickets/admin/do_task/", { action: 'not_started', ids: arrayOfIds })
                    .done(function( data ) {

                        $("#btn_mark_tasks_completed").prop('disabled', false);

                        loadTasks();

                        $("#tasks_tools").hide(200);

                    });

            });


            $("#btn_delete_tasks").on('click',function (e) {
                e.preventDefault();

                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        var arrayOfIds = $.map($(".selected"), function(n, i){
                            return n.id;
                        });

                        $("#btn_delete_tasks").prop('disabled', true);

                        $.post( base_url + "tickets/admin/do_task/", { action: 'delete', ids: arrayOfIds })
                            .done(function( data ) {

                                $("#btn_delete_tasks").prop('disabled', false);

                                loadTasks();

                                $("#tasks_tools").hide(200);

                            });
                    }
                });



            });





        });

        function setPreDefinedContent(event,predefined_reply_id) {

            $('#modal_predefined_replies').modal('hide');

            $.get( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/admin/get-predefined-reply/" + predefined_reply_id, function( data ) {

                $('#content').redactor('code.set', data);

            });


        }

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
