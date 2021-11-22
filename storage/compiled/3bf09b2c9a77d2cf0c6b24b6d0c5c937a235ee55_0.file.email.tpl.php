<?php
/* Smarty version 3.1.39, created on 2021-05-23 07:50:40
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aa4190cf90d2_50274714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bf09b2c9a77d2cf0c6b24b6d0c5c937a235ee55' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/email.tpl',
      1 => 1621770638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60aa4190cf90d2_50274714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33168384860aa4190ceebd3_87160623', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_33168384860aa4190ceebd3_87160623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_33168384860aa4190ceebd3_87160623',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">



        <div class="col-md-5">



            <div class="card">

                <div class="card-body">

                    <h1>Add Email Campaign</h1>

                    <hr>

                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
marketing/save-campaign">

                        <?php if ($_smarty_tpl->tpl_vars['selected_campaign']->value) {?>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['selected_campaign']->value->id;?>
">
                        <?php }?>

                        <div class="form-group">
                            <label for="title"><strong>Name</strong></label>
                            <input class="form-control" name="name" <?php if ($_smarty_tpl->tpl_vars['selected_campaign']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['selected_campaign']->value->name;?>
"
                                    <?php }?> id="name">
                        </div>




                        <button class="btn btn-primary" type="submit">Save</button>

                    </form>


                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="bold">Name</th>

                                <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['campaigns']->value, 'campaign');
$_smarty_tpl->tpl_vars['campaign']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['campaign']->value) {
$_smarty_tpl->tpl_vars['campaign']->do_else = false;
?>
                                <tr>
                                    <td>

                                        <?php echo $_smarty_tpl->tpl_vars['campaign']->value->name;?>


                                    </td>

                                    <td class="text-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
marketing/broadcast-email/<?php echo $_smarty_tpl->tpl_vars['campaign']->value->id;?>
" class="btn btn-success">Broadcast</a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
marketing/design-email/<?php echo $_smarty_tpl->tpl_vars['campaign']->value->id;?>
" class="btn btn-secondary">Design Email</a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
marketing/edit-email/<?php echo $_smarty_tpl->tpl_vars['campaign']->value->id;?>
" class="btn btn-primary">Edit</a>
                                        <a href="" onclick="confirmThenGoToUrl(event,'marketing/delete-email-campaign/<?php echo $_smarty_tpl->tpl_vars['campaign']->value->id;?>
')" class="btn btn-danger">Delete</a>
                                    </td>

                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>






                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>



    </div>
<?php
}
}
/* {/block "content"} */
}
