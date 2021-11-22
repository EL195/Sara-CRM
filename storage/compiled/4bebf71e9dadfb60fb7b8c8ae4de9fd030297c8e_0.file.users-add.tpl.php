<?php
/* Smarty version 3.1.39, created on 2021-04-19 11:35:29
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/users-add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607da34197bb56_65657910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bebf71e9dadfb60fb7b8c8ae4de9fd030297c8e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/users-add.tpl',
      1 => 1591268315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607da34197bb56_65657910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1400983463607da34196e712_43590822', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1400983463607da34196e712_43590822 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1400983463607da34196e712_43590822',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New User'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-post">
                            <div class="form-group">
                                <label for="username"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
 (<?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
)</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>

                            <div class="form-group">
                                <label for="fullname"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full Name'];?>
</label>
                                <input type="text" class="form-control" id="fullname" name="fullname">
                            </div>

                            <div class="form-group">
                                <label for="phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>

                            <div class="form-group">
                                <label for="phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Alternative Email'];?>
</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>

                            <div class="form-group">
                                <label for="phone"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Mobile Phone'];?>
</label>
                                <input type="text" class="form-control" id="mobile_phone" name="mobile_phone">
                            </div>

                            <div class="form-group">
                                                                                                                                
                                                                
                                <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['User'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>

                                <div class="i-checks"><label> <input type="radio" value="Admin" name="user_type" checked> <i></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Full Administrator'];?>
 </label></div>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
$_smarty_tpl->tpl_vars['role']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->do_else = false;
?>
                                    <div class="i-checks"><label> <input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
" name="user_type"> <i></i> <?php echo $_smarty_tpl->tpl_vars['role']->value['rname'];?>
 </label></div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                            </div>




                            <div class="form-group">
                                <label for="password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <div class="form-group">
                                <label for="cpassword"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm Password'];?>
</label>
                                <input type="password" class="form-control" id="cpassword" name="cpassword">
                            </div>


                            
                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                                                                        
                                                                                                                                            
                                                                                                                                                                                                    

                                                                                                                

                                                                                                                
                                                                                                                
                                                                                                                
                                                                                                                

                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
                        </form>
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
