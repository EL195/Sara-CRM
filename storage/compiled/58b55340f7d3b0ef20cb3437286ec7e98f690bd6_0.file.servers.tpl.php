<?php
/* Smarty version 3.1.39, created on 2021-04-02 10:17:51
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/servers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6067278f2f4e20_27487675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58b55340f7d3b0ef20cb3437286ec7e98f690bd6' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/servers.tpl',
      1 => 1616965247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6067278f2f4e20_27487675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5838244876067278f2e46f9_35492087', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1154382926067278f2f47a1_44106277', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_5838244876067278f2e46f9_35492087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5838244876067278f2e46f9_35492087',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Servers'];?>
</h3>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/choose-server-type/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Server'];?>
</a>
            </div>
        </div>

        <div class="hr-line-dashed"></div>
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servers']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
                <tr>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/server/<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['server']->value->type;?>
</a>
                    </td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/server/<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['server']->value->name;?>
</a>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['server']->value->type === 'cpanel') {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/server-list-accounts/<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
/" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Accounts'];?>
</a>
                            <?php } else { ?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['buttons_for_server_type']->value[$_smarty_tpl->tpl_vars['server']->value->type])) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buttons_for_server_type']->value[$_smarty_tpl->tpl_vars['server']->value->type], 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
                                    <a

                                            <?php if (!empty($_smarty_tpl->tpl_vars['button']->value['external_link'])) {?>
                                                href="<?php echo $_smarty_tpl->tpl_vars['button']->value['external_link'];?>
"
                                                <?php } elseif (!empty($_smarty_tpl->tpl_vars['button']->value['link'])) {?>
                                                href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;
echo $_smarty_tpl->tpl_vars['button']->value['link'];?>
/<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
/"
                                            <?php }?>

                                            <?php if (!empty($_smarty_tpl->tpl_vars['button']->value['target'])) {?>
                                                target="<?php echo $_smarty_tpl->tpl_vars['button']->value['target'];?>
"
                                            <?php }?>


                                             class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['button']->value['name'];?>
</a>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        <?php }?>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/server/<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
/" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                        <a href="javascript:;" class="btn btn-danger" onclick="confirmThenGoToUrl(event,'hostbilling/delete-server/<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
')">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>

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
class Block_1154382926067278f2f47a1_44106277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1154382926067278f2f47a1_44106277',
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
