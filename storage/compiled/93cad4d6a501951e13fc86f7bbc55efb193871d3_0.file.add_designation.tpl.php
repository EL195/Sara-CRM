<?php
/* Smarty version 3.1.39, created on 2021-06-29 08:37:18
  from '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/add_designation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db13fe1b92b0_45734753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93cad4d6a501951e13fc86f7bbc55efb193871d3' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/add_designation.tpl',
      1 => 1611513510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db13fe1b92b0_45734753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210528327060db13fe1b3008_20682437', "content");
?>

<?php }
/* {block "content"} */
class Block_210528327060db13fe1b3008_20682437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_210528327060db13fe1b3008_20682437',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">



        <div class="col-md-12">



            <div class="card">

                <div class="card-body">

                    <h3>Add Designation</h3>

                    <hr>

                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/save-designation">

                        <?php if ($_smarty_tpl->tpl_vars['selected_designation']->value) {?>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['selected_designation']->value->id;?>
">
                        <?php }?>



                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" name="title" id="title"
                                    <?php if ($_smarty_tpl->tpl_vars['selected_designation']->value) {?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['selected_designation']->value->title;?>
"

                                    <?php }?>
                            >
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
