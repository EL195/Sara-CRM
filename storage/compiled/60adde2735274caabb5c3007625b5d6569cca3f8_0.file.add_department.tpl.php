<?php
/* Smarty version 3.1.39, created on 2021-06-29 08:37:10
  from '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/add_department.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db13f6b5efc5_69526287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60adde2735274caabb5c3007625b5d6569cca3f8' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/add_department.tpl',
      1 => 1611513495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db13f6b5efc5_69526287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59200598160db13f6b5ab95_17479626', "content");
?>

<?php }
/* {block "content"} */
class Block_59200598160db13f6b5ab95_17479626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_59200598160db13f6b5ab95_17479626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">



        <div class="col-md-12">



            <div class="card">

                <div class="card-body">

                    <h3>Add Department</h3>

                    <hr>

                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/save-department">

                        <?php if ($_smarty_tpl->tpl_vars['selected_department']->value) {?>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['selected_department']->value->id;?>
">
                        <?php }?>


                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" name="title" id="title"
                                    <?php if ($_smarty_tpl->tpl_vars['selected_department']->value) {?>
                                value="<?php echo $_smarty_tpl->tpl_vars['selected_department']->value->title;?>
"

                                    <?php }?>>
                        </div>


                        <button class="btn btn-primary" type="submit">Save</button>

                    </form>


                </div>
            </div>
        </div>



    </div>



<?php
}
}
/* {/block "content"} */
}
