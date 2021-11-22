<?php
/* Smarty version 3.1.39, created on 2021-06-02 07:47:22
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/sms_broadcast_flow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b76fcada8980_75797934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bfdff1998751a0d3713eb8c168e062187dbe35b' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/sms_broadcast_flow.tpl',
      1 => 1622634433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b76fcada8980_75797934 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173447020160b76fcad95704_81706810', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202525002560b76fcada7d70_11850360', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_173447020160b76fcad95704_81706810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_173447020160b76fcad95704_81706810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="card">
        <div class="card-body">
            <h3>SMS Flow</h3>

            <ul class="nav nav-tabs nav-tabs-clean mb-3" role="tablist">
                <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'all') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/sms-broadcast-flow/all/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All'];?>
</a></li>
                <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'pending') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/sms-broadcast-flow/pending/">Pending</a></li>
                <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'delivered') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/sms-broadcast-flow/delivered/">Delivered</a></li>
                <li class="nav-item"><a class="nav-link  <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'bounced') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/sms-broadcast-flow/bounced/">Bounced</a></li>
            </ul>

            <table class="table table-bordered" id="clx_datatable">
                <thead>
                <tr>
                    <th>Recipient</th>
                    <th>message</th>
                    <th>Status</th>
                    <th class="text-right">Date & Time</th>
                    <th class="text-right">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marketing_sms']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['data']->value->phone_number;?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['data']->value->message;?>

                        </td>
                        <td>
                            <?php if (!$_smarty_tpl->tpl_vars['data']->value->sent) {?>
                                <span class="badge badge-warning">Pending</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['data']->value->bounced) {?>
                                <span class="badge badge-danger">Bounced</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['data']->value->sent) {?>
                                <span class="badge badge-success">Delivered</span>
                            <?php } else { ?>
                                --
                            <?php }?>
                        </td>
                        <td class="text-right">
                            <?php echo $_smarty_tpl->tpl_vars['data']->value->created_at->format('M d, h:i A');?>

                        </td>
                        <td class="text-right">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/delete-email/<?php echo $_smarty_tpl->tpl_vars['data']->value->id;?>
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
class Block_202525002560b76fcada7d70_11850360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_202525002560b76fcada7d70_11850360',
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
