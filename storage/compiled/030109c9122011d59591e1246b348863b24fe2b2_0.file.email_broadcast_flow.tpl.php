<?php
/* Smarty version 3.1.39, created on 2021-05-23 08:25:31
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/email_broadcast_flow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aa49bb780b69_60272209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '030109c9122011d59591e1246b348863b24fe2b2' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/email_broadcast_flow.tpl',
      1 => 1621772728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aa49bb780b69_60272209 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186052830160aa49bb771807_67756804', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36745451360aa49bb77fea8_38132671', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_186052830160aa49bb771807_67756804 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_186052830160aa49bb771807_67756804',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="card">
        <div class="card-body">
            <h3>Email Flow</h3>

            <ul class="nav nav-tabs nav-tabs-clean mb-3" role="tablist">
                <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'all') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/email-broadcast-flow/all/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All'];?>
</a></li>
                <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'pending') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/email-broadcast-flow/pending/">Pending</a></li>
                <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'delivered') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/email-broadcast-flow/delivered/">Delivered</a></li>
                <li class="nav-item"><a class="nav-link  <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'bounced') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/email-broadcast-flow/bounced/">Bounced</a></li>
            </ul>

            <table class="table table-bordered" id="clx_datatable">
                <thead>
                <tr>
                    <th>Recipient</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th class="text-right">Date & Time</th>
                    <th class="text-right">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marketing_emails']->value, 'marketing_email');
$_smarty_tpl->tpl_vars['marketing_email']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marketing_email']->value) {
$_smarty_tpl->tpl_vars['marketing_email']->do_else = false;
?>
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['marketing_email']->value->email;?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['marketing_email']->value->subject;?>

                        </td>
                        <td>
                            <?php if (!$_smarty_tpl->tpl_vars['marketing_email']->value->sent) {?>
                                <span class="badge badge-warning">Pending</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['marketing_email']->value->bounced) {?>
                                <span class="badge badge-danger">Bounced</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['marketing_email']->value->sent) {?>
                                <span class="badge badge-success">Delivered</span>
                                <?php } else { ?>
                                --
                            <?php }?>
                        </td>
                        <td class="text-right">
                            <?php echo $_smarty_tpl->tpl_vars['marketing_email']->value->created_at->format('M d, h:i A');?>

                        </td>
                        <td class="text-right">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/delete-email/<?php echo $_smarty_tpl->tpl_vars['marketing_email']->value->id;?>
" class="btn btn-danger btn-icon rounded-circle">
                                <i class="fal fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>

        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_36745451360aa49bb77fea8_38132671 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_36745451360aa49bb77fea8_38132671',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
                }
            );
        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
