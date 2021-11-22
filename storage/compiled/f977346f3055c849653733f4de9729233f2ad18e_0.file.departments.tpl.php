<?php
/* Smarty version 3.1.39, created on 2021-06-29 08:37:09
  from '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/departments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db13f517ce24_32108781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f977346f3055c849653733f4de9729233f2ad18e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/departments.tpl',
      1 => 1612373106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db13f517ce24_32108781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114537463260db13f516c821_48166685', "content");
?>







<?php }
/* {block "content"} */
class Block_114537463260db13f516c821_48166685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_114537463260db13f516c821_48166685',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row mb-3">



        <div class="col-md-12">



            <div class="card">
                <div class="card-body">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/add-department" class="btn btn-primary add_event waves-effect waves-light">Add Department</a>

                </div>

            </div>
        </div>



    </div>

    <div class="row">



        <div class="col-md-12">



            <div class="card">

                <div class="card-body">



                    <div class="table-responsive">
                        <table class="table table-striped table-light">
                            <thead>
                            <tr>
                                <th class="bold h6 text-muted">Name</th>
                                <th class="bold h6 text-muted">Total Employees</th>
                                <th class="bold h6 text-muted"></th>

                                <th class="text-right text-muted bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departments']->value, 'department');
$_smarty_tpl->tpl_vars['department']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->do_else = false;
?>

                                <tr>
                                    <td class="h6">
                                        <?php echo $_smarty_tpl->tpl_vars['department']->value->title;?>



                                    </td>
                                    <td>

                                        <?php if (!empty($_smarty_tpl->tpl_vars['employees']->value[$_smarty_tpl->tpl_vars['department']->value->id])) {?>
                                            <?php echo count($_smarty_tpl->tpl_vars['employees']->value[$_smarty_tpl->tpl_vars['department']->value->id]);?>

                                        <?php }?>
                                    </td>
                                    <td>



                                        <?php if (!empty($_smarty_tpl->tpl_vars['employees']->value[$_smarty_tpl->tpl_vars['department']->value->id])) {?>
                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">

                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employees']->value[$_smarty_tpl->tpl_vars['department']->value->id], 'employee');
$_smarty_tpl->tpl_vars['employee']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employee']->value) {
$_smarty_tpl->tpl_vars['employee']->do_else = false;
?>

                                                    <a href="#" class="btn-m-s">
                                                        <?php if ($_smarty_tpl->tpl_vars['employee']->value->image) {?>
                                                            <img alt="image" class="profile-image-sm rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/employees/<?php echo $_smarty_tpl->tpl_vars['employee']->value->image;?>
">
                                                        <?php } else { ?>

                                                            <span class="clx-avatar"><?php echo $_smarty_tpl->tpl_vars['employee']->value['name'][0];
echo $_smarty_tpl->tpl_vars['employee']->value['name'][1];?>
</span>

                                                        <?php }?>

                                                    </a>

                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>




                                            </div>
                                        <?php }?>

                                    </td>


                                    <td class="text-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/edit-department/<?php echo $_smarty_tpl->tpl_vars['department']->value->id;?>
" class="btn btn-info">Edit</a>

                                        <a href="#" onclick="confirmThenGoToUrl(event,'a-hrm/app/delete-department/<?php echo $_smarty_tpl->tpl_vars['department']->value->id;?>
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
