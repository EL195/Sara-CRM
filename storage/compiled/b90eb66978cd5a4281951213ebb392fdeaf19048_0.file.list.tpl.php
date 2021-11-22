<?php
/* Smarty version 3.1.39, created on 2021-04-30 18:39:50
  from '/Users/razib/Documents/valet/business-suite/apps/notes/views/list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608c8736abf115_05547760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b90eb66978cd5a4281951213ebb392fdeaf19048' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/notes/views/list.tpl',
      1 => 1607564885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608c8736abf115_05547760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_277189966608c8736aac6f2_34340778', "content");
?>







<?php }
/* {block "content"} */
class Block_277189966608c8736aac6f2_34340778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_277189966608c8736aac6f2_34340778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row mb-3">



        <div class="col-md-12">



            <div class="card">
                <div class="card-body">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
notes/app/add" class="btn btn-primary add_event waves-effect waves-light">Add Note</a>

                </div>

            </div>
        </div>



    </div>

    <div class="row">



        <div class="col-md-12">



            <div class="card">

                <div class="card-body">



                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="bold">Note Title</th>

                                <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notes']->value, 'note');
$_smarty_tpl->tpl_vars['note']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->do_else = false;
?>
                                <tr>
                                    <td>

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
notes/app/view/<?php echo $_smarty_tpl->tpl_vars['note']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['note']->value->title;?>
</a>

                                    </td>

                                    <td class="text-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
notes/app/edit/<?php echo $_smarty_tpl->tpl_vars['note']->value->id;?>
" class="btn btn-info">Edit</a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
notes/app/delete/<?php echo $_smarty_tpl->tpl_vars['note']->value->id;?>
" class="btn btn-danger">Delete</a>
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
