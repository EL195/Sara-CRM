<?php
/* Smarty version 3.1.39, created on 2021-06-29 08:39:32
  from '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/add_company_policy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db1484342b50_83045964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bdaed0f56744e8e0f9f6c3a5ec5cc82474d7576' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/add_company_policy.tpl',
      1 => 1611678371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db1484342b50_83045964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157051000360db148433f402_54370267', "content");
?>

<?php }
/* {block "content"} */
class Block_157051000360db148433f402_54370267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_157051000360db148433f402_54370267',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">



        <div class="col-md-12">



            <div class="card">

                <div class="card-body">

                    <h3>Add Company Policy</h3>

                    <hr>

                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/add-company-policy-save">
                        <?php if ($_smarty_tpl->tpl_vars['selected_company_policy']->value) {?>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['selected_company_policy']->value->id;?>
">
                        <?php }?>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" name="title" id="title"


                                    <?php if ($_smarty_tpl->tpl_vars['selected_company_policy']->value) {?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['selected_company_policy']->value->title;?>
"

                                    <?php }?> >
                        </div>

                        <div class="form-group">
                            <label for="contents">Contents</label>
                            <textarea class="form-control" rows="10" id="contents" name="description"><?php if ($_smarty_tpl->tpl_vars['selected_company_policy']->value) {
echo $_smarty_tpl->tpl_vars['selected_company_policy']->value->description;
}?></textarea>
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
