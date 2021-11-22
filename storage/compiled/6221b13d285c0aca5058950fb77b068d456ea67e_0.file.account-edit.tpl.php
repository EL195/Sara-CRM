<?php
/* Smarty version 3.1.39, created on 2021-04-15 06:57:26
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/account-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60781c16e29b53_41655536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6221b13d285c0aca5058950fb77b068d456ea67e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/account-edit.tpl',
      1 => 1613490850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60781c16e29b53_41655536 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174205652560781c16e23da5_00717316', "content");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_174205652560781c16e23da5_00717316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_174205652560781c16e23da5_00717316',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="widget-1 col-md-6 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit_Account'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/edit-post">
                            <div class="form-group">
                                <label for="account"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Title'];?>
</label>
                                <input type="text" class="form-control" id="account" name="account" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->account;?>
">
                            </div>
                            <div class="form-group">
                                <label for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                                <input type="text" class="form-control" id="description" name="description" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->description;?>
">
                            </div>


                            <div class="form-group">
                                <label for="account_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account Number'];?>
</label>
                                <input type="text" class="form-control" id="account_number" name="account_number" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->account_number;?>
">
                            </div>

                            <div class="form-group">
                                <label for="contact_person"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Contact Person'];?>
</label>
                                <input type="text" class="form-control" id="contact_person" name="contact_person" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->contact_person;?>
">
                            </div>

                            <div class="form-group">
                                <label for="contact_phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>
                                <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->contact_phone;?>
">
                            </div>

                            <div class="form-group">
                                <label for="ib_url"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Internet Banking URL'];?>
</label>
                                <input type="text" class="form-control" id="ib_url" name="ib_url" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->ib_url;?>
">
                            </div>


                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                            <button type="submit" class="btn btn-primary"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        </form>
                    </div>


                </div>
            </div>
        </div> <!-- Widget-1 end-->

        <!-- Widget-2 end-->
    </div>
<?php
}
}
/* {/block "content"} */
}
