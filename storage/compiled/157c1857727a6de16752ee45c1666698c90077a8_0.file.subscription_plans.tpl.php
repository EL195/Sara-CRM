<?php
/* Smarty version 3.1.39, created on 2021-10-07 12:23:17
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/subscription_plans.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f1ef5a8b6a1_22373148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '157c1857727a6de16752ee45c1666698c90077a8' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/subscription_plans.tpl',
      1 => 1633623795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615f1ef5a8b6a1_22373148 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1224994471615f1ef5a83b66_89115425', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1857876350615f1ef5a8afb5_03700726', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1224994471615f1ef5a83b66_89115425 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1224994471615f1ef5a83b66_89115425',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col">
            <div class="subheader">
                <h1 class="subheader-title">
                    <i class='subheader-icon fal fa-window'></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Subscriptions'];?>

                </h1>
            </div>
        </div>
        <div class="col text-right">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
subscriptions/plan" class="btn btn-primary  btn-sm"> <?php echo __('New Subscription Plan');?>
</a>
        </div>
    </div>


    <div class="row">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans']->value, 'plan');
$_smarty_tpl->tpl_vars['plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->do_else = false;
?>
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h2><?php echo $_smarty_tpl->tpl_vars['plan']->value->title;?>
</h2>

                        <div class="hr-line-dashed"></div>

                        <div class="mb-3">
                            <h4><?php echo formatCurrency($_smarty_tpl->tpl_vars['plan']->value->price,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h4>
                        </div>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
subscriptions/plan/<?php echo $_smarty_tpl->tpl_vars['plan']->value->id;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
subscriptions/subscribe/<?php echo $_smarty_tpl->tpl_vars['plan']->value->slug;?>
" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</a>
                        <a href="javascript:;" onclick="confirmThenGoToUrl(event,'subscriptions/delete-plan/<?php echo $_smarty_tpl->tpl_vars['plan']->value->id;?>
');" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1857876350615f1ef5a8afb5_03700726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1857876350615f1ef5a8afb5_03700726',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <?php echo '<script'; ?>
>
        $(function () {

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
