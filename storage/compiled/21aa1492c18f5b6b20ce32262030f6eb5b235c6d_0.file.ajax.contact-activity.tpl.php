<?php
/* Smarty version 3.1.39, created on 2021-03-24 16:20:14
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/ajax.contact-activity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605b9efeb0b0c5_49255909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21aa1492c18f5b6b20ce32262030f6eb5b235c6d' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/ajax.contact-activity.tpl',
      1 => 1592547179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605b9efeb0b0c5_49255909 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="activity-post mb-xlg">
    <form method="get" action="/">
        <textarea name="message-text" class="form-control" id="msg" data-plugin-textarea-autosize="" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Activity'];?>
..." rows="1" style="overflow: hidden; word-wrap: break-word; resize: none; height: 200px;"></textarea>
        <input type="hidden" id="activity-type" value="">

    </form>
    <div class="compose-box-footer">
        <ul class="compose-toolbar">
            <li class="clickable"><a href="#"><i class="fal fa-envelope"></i></a></li>
            <li class="clickable"><a href="#"><i class="fal fa-phone"></i></a></li>
            <li class="clickable"><a href="#"><i class="fal fa-paper-plane"></i></a></li>
            <li class="clickable"><a href="#"><i class="fal fa-file-pdf"></i></a></li>
            <li class="clickable"><a href="#"><i class="fal fa-life-ring"></i></a></li>
            <li class="clickable"><a href="#"><i class="fal fa-credit-card"></i></a></li>
            <li class="clickable"><a href="#"><i class="fal fa-location-arrow"></i></a></li>
            <li class="clickable"><a href="#"><i class="fal fa-reply"></i></a></li>
            <li class="clickable"><a href="#"><i class="fal fa-tasks"></i></a></li>
            <li class="clickable"><a href="#"><i class="fal fa-truck"></i></a></li>
        </ul>
        <ul class="compose-btn">
            <li>

                <a class="btn btn-primary btn-sm" href="#" id="acf-post"><i class="fal fa-arrow-right"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Post'];?>
</a>
            </li>
        </ul>
    </div>
</section>
<div class="mt-3"> </div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ac']->value, 'acs');
$_smarty_tpl->tpl_vars['acs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['acs']->value) {
$_smarty_tpl->tpl_vars['acs']->do_else = false;
?>
    <div class="timeline-item">
        <div class="row">
            <div class="col-sm-3 col-md-2 date">
                <i class="<?php echo str_replace('fa fa-','fal fa-',$_smarty_tpl->tpl_vars['acs']->value['icon']);?>
"></i>
                <span class="sdate"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],$_smarty_tpl->tpl_vars['acs']->value['stime']);?>
</span>
                <br>
                <small class="text-navy"><span class="mmnt"><?php echo $_smarty_tpl->tpl_vars['acs']->value['stime'];?>
</span></small>
            </div>
            <div class="col-sm-9 col-md-10 content no-top-border">
                <p class="m-b-xs"><strong><?php echo $_smarty_tpl->tpl_vars['acs']->value['oname'];?>
</strong></p>

                <p><?php echo $_smarty_tpl->tpl_vars['acs']->value['msg'];?>
</p>
                <p>
                    <a href="#" class="btn btn-info btn-xs activity_edit" id="activity_<?php echo $_smarty_tpl->tpl_vars['acs']->value['id'];?>
"><i class="fal fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/activity-delete/<?php echo $_smarty_tpl->tpl_vars['acs']->value['cid'];?>
/<?php echo $_smarty_tpl->tpl_vars['acs']->value['id'];?>
" class="btn btn-danger btn-xs"><i class="fal fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                </p>

            </div>
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
