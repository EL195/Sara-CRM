<?php
/* Smarty version 3.1.39, created on 2021-02-20 15:00:43
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/sms_sent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60316a6b647ca2_65680229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bf6f4cf71e2759e4174b09bf9d2e732c61d4f3b' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/sms_sent.tpl',
      1 => 1592545225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60316a6b647ca2_65680229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194729442960316a6b6402d2_35455647', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_194729442960316a6b6402d2_35455647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_194729442960316a6b6402d2_35455647',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Records'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['found'];?>

                        . <?php echo $_smarty_tpl->tpl_vars['_L']->value['Page'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['page'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['of'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['lastpage'];?>
. </h2>




                </div>

                <div class="panel-container">
                    <div class="panel-content" id="application_ajaxrender">


                        <table class="table table-bordered sys_table" id="sys_logs">
                            <thead>
                            <tr>
                                <th width="5%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ID'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sent To'];?>
</th>
                                <th width="60%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Message'];?>
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
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</td>
                                    <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['created_at']));?>
</td>
                                    <td><?php echo urldecode($_smarty_tpl->tpl_vars['ds']->value['sms_to']);?>
</td>
                                    <td><?php echo urldecode($_smarty_tpl->tpl_vars['ds']->value['sms']);?>
</td>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
delete/sms/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-danger btn-sm"><i class="fal fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a></td>

                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>

                        <?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>


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
