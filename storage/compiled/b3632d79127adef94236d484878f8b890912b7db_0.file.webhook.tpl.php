<?php
/* Smarty version 3.1.39, created on 2021-06-05 08:38:12
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/webhook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bb70344c2667_59537056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3632d79127adef94236d484878f8b890912b7db' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/webhook.tpl',
      1 => 1622896682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bb70344c2667_59537056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126347233760bb70344bd057_10612352', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151623588660bb70344c1cb6_51201849', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_126347233760bb70344bd057_10612352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_126347233760bb70344bd057_10612352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3><?php echo $_smarty_tpl->tpl_vars['webhook']->value->name;?>
</h3>
                    <div class="hr-line-dashed"></div>
                   <h5>To capture lead, Send a POST request to-</h5>
                    <code><?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
webhook/<?php echo $_smarty_tpl->tpl_vars['webhook']->value->uuid;?>
</code>

                    <div class="mt-3">
                        <h5 class="mb-3">With Parameters-</h5>

                        <p><strong>secret:</strong> <?php echo $_smarty_tpl->tpl_vars['webhook']->value->secret;?>
</p>
                        <p><strong>first_name:</strong> First Name</p>
                        <p><strong>last_name:</strong> Last Name</p>
                        <p><strong>email:</strong> Email</p>
                        <p><strong>phone_number:</strong> Phone Number</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_151623588660bb70344c1cb6_51201849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_151623588660bb70344c1cb6_51201849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
