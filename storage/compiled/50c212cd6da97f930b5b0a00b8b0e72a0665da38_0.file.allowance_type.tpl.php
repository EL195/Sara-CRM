<?php
/* Smarty version 3.1.39, created on 2021-06-29 08:37:42
  from '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/allowance_type.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db14162acc36_10794507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50c212cd6da97f930b5b0a00b8b0e72a0665da38' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/allowance_type.tpl',
      1 => 1612174816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db14162acc36_10794507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51535162460db14162a5ed4_07455761', "content");
?>







<?php }
/* {block "content"} */
class Block_51535162460db14162a5ed4_07455761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_51535162460db14162a5ed4_07455761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row mb-3">



        <div class="col-md-12">



            <div class="card">
                <div class="card-body">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/add-allowance" class="btn btn-primary add_event waves-effect waves-light">Add Allowance</a>

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

                                <th class="text-right text-muted bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allowance_types']->value, 'allowance_type');
$_smarty_tpl->tpl_vars['allowance_type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['allowance_type']->value) {
$_smarty_tpl->tpl_vars['allowance_type']->do_else = false;
?>

                                <tr>
                                    <td class="h6">
                                        <?php echo $_smarty_tpl->tpl_vars['allowance_type']->value->title;?>



                                    </td>

                                    <td class="text-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/edit-allowance/<?php echo $_smarty_tpl->tpl_vars['allowance_type']->value->id;?>
" class="btn btn-info">Edit</a>

                                        <a href="#" onclick="confirmThenGoToUrl(event,'a-hrm/app/delete-department/<?php echo $_smarty_tpl->tpl_vars['allowance_type']->value->id;?>
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
