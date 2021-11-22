<?php
/* Smarty version 3.1.39, created on 2021-08-23 15:29:09
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/statement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6123f705e77a57_56645926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c716ccce340d4b80b14da7f03a66ced03038f81' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/statement.tpl',
      1 => 1592808403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6123f705e77a57_56645926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2626635476123f705e70579_69567668', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2437382056123f705e771e1_34257957', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_2626635476123f705e70579_69567668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2626635476123f705e70579_69567668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['View Statement'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/statement-view" id="tform" role="form">
                            <div class="form-group">
                                <label for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</label>
                                <select id="account" name="account">
                                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose an Account'];?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>



                            <div class="form-group">
                                <label for="fdate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['From Date'];?>
</label>
                                <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['tdate']->value;?>
" name="fdate" id="fdate" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                            </div>

                            <div class="form-group">
                                <label for="tdate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['To Date'];?>
</label>
                                <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['mdate']->value;?>
" name="tdate" id="tdate" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                            </div>
                            <div class="form-group">
                                <label for="stype"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
                                <select id="stype" name="stype" class="form-control">
                                    <option value="all" selected="selected"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All Transactions'];?>
</option>
                                    <option value="credit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Credit'];?>
</option>
                                    <option value="debit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Debit'];?>
</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View Statement'];?>
</button>
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
/* {block "script"} */
class Block_2437382056123f705e771e1_34257957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2437382056123f705e771e1_34257957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>
        $(function () {

            $("#account").select2();
            $("#cats").select2();
            $("#pmethod").select2();
            $("#payer").select2();
            $('#dp1').datepicker({
                format: 'yyyy-mm-dd'
            });
            $('#dp2').datepicker({
                format: 'yyyy-mm-dd'
            });

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
