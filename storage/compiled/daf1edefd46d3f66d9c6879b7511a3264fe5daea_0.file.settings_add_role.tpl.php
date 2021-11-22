<?php
/* Smarty version 3.1.39, created on 2021-11-21 13:51:02
  from '/Users/pondo2/Sites/sara_suite/ui/theme/default/settings_add_role.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619a9516c00a84_40015954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daf1edefd46d3f66d9c6879b7511a3264fe5daea' => 
    array (
      0 => '/Users/pondo2/Sites/sara_suite/ui/theme/default/settings_add_role.tpl',
      1 => 1633628023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619a9516c00a84_40015954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1513101714619a9516bf2544_57297529', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1513101714619a9516bf2544_57297529 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1513101714619a9516bf2544_57297529',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Role'];?>
</h5>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/add_role_post/" method="post" accept-charset="utf-8">
                            <div class="form-group"><label for="rname" class="control-label"> <small class="req text-danger">* </small>Role Name</label><input type="text" id="rname" name="rname" class="form-control" autofocus></div>

                            <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['role_all_data_help_text'];?>
</p>

                            <div class="hr-line-dashed"></div>


                            <div class="table-responsive">
                                <div class="table-responsive">
                                    <table class="table table-bordered roles no-margin">
                                        <thead>
                                        <tr>
                                            <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Permission'];?>
</th>
                                            <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</th>
                                            <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</th>
                                            <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create'];?>
</th>
                                            <th class="text-center text-danger bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</th>
                                            <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Data'];?>
</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permissions']->value, 'permission');
$_smarty_tpl->tpl_vars['permission']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['permission']->value) {
$_smarty_tpl->tpl_vars['permission']->do_else = false;
?>

                                            <tr data-id="<?php echo $_smarty_tpl->tpl_vars['permission']->value['id'];?>
">
                                                <td class="bold"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['permission']->value['pname']);?>
</td>
                                                <td class="text-center">

                                                    <div class="custom-control custom-switch">
                                                        <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_view" type="checkbox" class="custom-control-input" id="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_view">
                                                        <label class="custom-control-label" for="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_view"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</label>
                                                    </div>


                                                </td>
                                                <td class="text-center">
                                                    <div class="custom-control custom-switch">
                                                        <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_edit" type="checkbox" class="custom-control-input" id="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_edit">
                                                        <label class="custom-control-label" for="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_edit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</label>
                                                    </div>
                                                </td>
                                                <td class="text-center">

                                                    <div class="custom-control custom-switch">
                                                        <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_create" type="checkbox" class="custom-control-input" id="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_create">
                                                        <label class="custom-control-label" for="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_create"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create'];?>
</label>
                                                    </div>

                                                </td>
                                                <td class="text-center">
                                                    <div class="custom-control custom-switch">
                                                        <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_delete" type="checkbox" class="custom-control-input" id="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_delete">
                                                        <label class="custom-control-label" for="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_delete"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input name="<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_all_data" type="checkbox" class="custom-control-input" id="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_all_data">
                                                        <label class="custom-control-label" for="checkbox_<?php echo $_smarty_tpl->tpl_vars['permission']->value['shortname'];?>
_all_data"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Data'];?>
</label>
                                                    </div>
                                                </td>
                                            </tr>

                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                        </tbody>
                                    </table>

                                    <button class="btn btn-primary" type="submit" id="submit"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>                        </div>

                            </div>

                        </form>
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
