<?php
/* Smarty version 3.1.39, created on 2021-06-29 08:39:30
  from '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/company_policy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db1482683534_72547087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9835e2db67f35ca7e4acef2810634b6bcc65d6d9' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/company_policy.tpl',
      1 => 1612042217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db1482683534_72547087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72899441760db148267bdc1_59019298', "content");
?>







<?php }
/* {block "content"} */
class Block_72899441760db148267bdc1_59019298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_72899441760db148267bdc1_59019298',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row mb-3">



        <div class="col-md-12">



            <div class="card">
                <div class="card-body">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/add-company-policy" class="btn btn-primary add_event waves-effect waves-light">Add Company Policy</a>

                </div>

            </div>
        </div>



    </div>

    <div class="row">



        <div class="col-md-12">



            <div class="card">

                <div class="card-body">



                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead>
                            <tr>
                                <th class="bold">Title</th>

                                <th class="text-right bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['company_policies']->value, 'company_policy');
$_smarty_tpl->tpl_vars['company_policy']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company_policy']->value) {
$_smarty_tpl->tpl_vars['company_policy']->do_else = false;
?>
                                <tr>
                                    <td>

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
notes/app/view/<?php echo $_smarty_tpl->tpl_vars['company_policy']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['company_policy']->value->title;?>
</a>

                                    </td>

                                    <td class="text-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/edit-company-policy/<?php echo $_smarty_tpl->tpl_vars['company_policy']->value->id;?>
" class="btn btn-info">Edit</a>

                                        <a href="" onclick="confirmThenGoToUrl(event,'a-hrm/app/delete-company-policy/<?php echo $_smarty_tpl->tpl_vars['company_policy']->value->id;?>
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
