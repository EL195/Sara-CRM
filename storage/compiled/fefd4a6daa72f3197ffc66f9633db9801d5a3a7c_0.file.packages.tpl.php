<?php
/* Smarty version 3.1.39, created on 2021-02-27 07:59:02
  from '/Users/razib/Documents/valet/business-suite/apps/20i/views/packages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_603a42169cc920_26639740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fefd4a6daa72f3197ffc66f9633db9801d5a3a7c' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/20i/views/packages.tpl',
      1 => 1614430737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603a42169cc920_26639740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_492414137603a42169bf692_33398849', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1943461158603a42169cbfc2_73336469', "script");
?>

<?php }
/* {block "content"} */
class Block_492414137603a42169bf692_33398849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_492414137603a42169bf692_33398849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="card">
        <div class="card-body">
            <h3>List Packages</h3>
            <div class="hr-line-dashed"></div>
            <table class="table table-hover" id="clx_datatable">
                <thead>
                <tr>
                    <th>Domain</th>
                    <th>Package Type</th>
                    <th>Stack Users</th>
                    <th>Created</th>
                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packages']->value, 'package');
$_smarty_tpl->tpl_vars['package']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->do_else = false;
?>
                    <tr>
                        <td>
                            <?php if (!empty($_smarty_tpl->tpl_vars['package']->value->name)) {?>
                                <?php echo $_smarty_tpl->tpl_vars['package']->value->name;?>

                            <?php }?>
                        </td>
                        <td>
                            <?php if (!empty($_smarty_tpl->tpl_vars['package']->value->packageTypeName)) {?>
                                <?php echo $_smarty_tpl->tpl_vars['package']->value->packageTypeName;?>

                            <?php }?>
                        </td>
                        <td>
                            <?php if (!empty($_smarty_tpl->tpl_vars['package']->value->stackUsers)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['package']->value->stackUsers, 'stack_user');
$_smarty_tpl->tpl_vars['stack_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stack_user']->value) {
$_smarty_tpl->tpl_vars['stack_user']->do_else = false;
?>
                                    <?php echo $_smarty_tpl->tpl_vars['stack_user']->value;?>
 <br>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </td>
                        <td>
                            <?php if (!empty($_smarty_tpl->tpl_vars['package']->value->created)) {?>
                                <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['package']->value->created));?>

                            <?php }?>
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
/* {block "script"} */
class Block_1943461158603a42169cbfc2_73336469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1943461158603a42169cbfc2_73336469',
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
                }
            );
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
