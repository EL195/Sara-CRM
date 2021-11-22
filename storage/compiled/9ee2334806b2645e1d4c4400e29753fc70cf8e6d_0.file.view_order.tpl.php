<?php
/* Smarty version 3.1.39, created on 2021-05-27 08:26:28
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/view_order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60af8ff4c979e0_95479836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ee2334806b2645e1d4c4400e29753fc70cf8e6d' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/view_order.tpl',
      1 => 1622118327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60af8ff4c979e0_95479836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165064499660af8ff4c85258_96682430', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56609925860af8ff4c97196_29347346', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl");
}
/* {block "content"} */
class Block_165064499660af8ff4c85258_96682430 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_165064499660af8ff4c85258_96682430',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="card">
        <div class="card-body">
            <h3><?php echo $_smarty_tpl->tpl_vars['order']->value->tracking_id;?>
</h3>
            <div class="hr-line-dashed"></div>
            <strong><?php echo __('Status');?>
:</strong> <?php echo cloudonex_get_order_status_with_badge($_smarty_tpl->tpl_vars['order']->value->status);?>



            <?php if (count($_smarty_tpl->tpl_vars['buttons']->value)) {?>

                <div class="my-3">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buttons']->value, 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;
echo $_smarty_tpl->tpl_vars['button']->value['link'];?>
/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
/" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['button']->value['text'];?>
</a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['order']->value->login_url) {?>
                <div class="mt-3">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['order']->value->login_url;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['order']->value->login_url;?>
</a>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['order']->value->username) {?>
                <div class="mt-3">
                    <strong><?php echo __('Username');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['order']->value->username;?>

                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['order']->value->password) {?>
                <div class="mt-3">
                    <strong><?php echo __('Password');?>
:</strong> <span id="password_view_holder"><a href="#" id="view_password" data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value->password;?>
"><?php echo __('View');?>
</a></span>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['order']->value->login_url && $_smarty_tpl->tpl_vars['order']->value->username && $_smarty_tpl->tpl_vars['order']->value->password) {?>

                <?php if ($_smarty_tpl->tpl_vars['order']->value->login_type == 'cpanel') {?>

                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['order']->value->login_url;?>
/login/" target="_blank">
                        <input type="hidden" name="user" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->username;?>
">
                        <input type="hidden" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->password;?>
">
                        <input type="hidden" name="port" value="2083">
                        <input type="hidden" name="login" value="1">
                        <button type="submit" class="btn btn-primary mt-3"><?php echo __('Login');?>
</button>
                    </form>

                <?php }?>

            <?php }?>





            <div class="mt-3">
                <h4><?php echo $_smarty_tpl->tpl_vars['order']->value->activation_subject;?>
</h4>
            </div>
            <div class="mt-3">
                <?php echo $_smarty_tpl->tpl_vars['order']->value->activation_message;?>

            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_56609925860af8ff4c97196_29347346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_56609925860af8ff4c97196_29347346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {
            let $view_password = $('#view_password');
            let $password_view_holder = $('#password_view_holder');

            $view_password.on('click',function (event) {
                event.preventDefault();
                let password = $view_password.attr('data-value');
                $password_view_holder.html('<code>' + password + '</code>')
            });

        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
