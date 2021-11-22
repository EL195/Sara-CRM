<?php
/* Smarty version 3.1.39, created on 2021-06-29 08:37:43
  from '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/deduction.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db14178ff543_49415999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '481293e9a4ef159cc78b8fa7981d6802bcec9fb3' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/deduction.tpl',
      1 => 1612176417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db14178ff543_49415999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19538703760db14178f9ef7_50330468', "content");
?>







<?php }
/* {block "content"} */
class Block_19538703760db14178f9ef7_50330468 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19538703760db14178f9ef7_50330468',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row mb-3">



        <div class="col-md-12">



            <div class="card">
                <div class="card-body">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/add-deduction" class="btn btn-primary add_event waves-effect waves-light">Add Deduction Type</a>

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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deduction_types']->value, 'deduction_type');
$_smarty_tpl->tpl_vars['deduction_type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['deduction_type']->value) {
$_smarty_tpl->tpl_vars['deduction_type']->do_else = false;
?>

                                <tr>
                                    <td class="h6">
                                        <?php echo $_smarty_tpl->tpl_vars['deduction_type']->value->title;?>



                                    </td>

                                    <td class="text-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/edit-deduction/<?php echo $_smarty_tpl->tpl_vars['deduction_type']->value->id;?>
" class="btn btn-info">Edit</a>

                                        <a href="#" onclick="confirmThenGoToUrl(event,'a-hrm/app/delete-department/<?php echo $_smarty_tpl->tpl_vars['deduction_type']->value->id;?>
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
