<?php
/* Smarty version 3.1.39, created on 2021-02-26 19:53:39
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/api.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60399813e7a747_66256889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9cf83df265db3433e5d602757694450d1722d74' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/api.tpl',
      1 => 1591204506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60399813e7a747_66256889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130628119960399813e6c150_28532151', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_130628119960399813e6c150_28532151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_130628119960399813e6c150_28532151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-lg-12">

            <div class="panel">
                <div class="panel-container">
                    <div class="panel-content">
                        <label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Application URL'];?>
:</label>
                        <input type="text" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
">
                    </div>

                </div>


            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add API Access'];?>
</h2>

                </div>

                <div class="panel-container" id="ibox_form">
                    <div class="panel-content">
                        <form class="form-horizontal" method="post" id="tform" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/api_post/">



                            <div class="form-group">
                                <label for="label" class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Label'];?>
</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="label" name="label">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" id="submit" class="btn btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                                </div>
                            </div>
                        </form>
                    </div>




                </div>
            </div>
        </div>



    </div>

    <div class="row">


        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['API Access'];?>
</h5>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <table class="table table-bordered sys_table">
                            <thead>
                            <tr>
                                <th width="20%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Label'];?>
</th>
                                <th width="60%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['API Key'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>

                            </tr>
                            </thead>
                            <tbody>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                <tr>
                                    <td> <?php echo $_smarty_tpl->tpl_vars['ds']->value['label'];?>
 </td>
                                    <td><input class="form-control input-sm" type="text" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['apikey'];?>
"></td>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/api_regen/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-success"><i class="fal fa-refresh"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Re Generate Key'];?>
</a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/api_delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-danger"><i class="fal fa-trash-alt"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                                    </td>
                                </tr>

                                <?php
}
if ($_smarty_tpl->tpl_vars['ds']->do_else) {
?>
                                <tr>

                                    <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
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

    <input type="hidden" id="_lan_no_results_found" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
">
<?php
}
}
/* {/block "content"} */
}
