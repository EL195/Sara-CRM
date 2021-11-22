<?php
/* Smarty version 3.1.39, created on 2021-06-20 17:04:39
  from '/Users/razib/Documents/valet/business-suite/apps/freight/views/client_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cfad678a6689_30721280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd880569d6b77d65cc9b762c66ef0b458cc6af855' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/freight/views/client_orders.tpl',
      1 => 1601240278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cfad678a6689_30721280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68104077960cfad6789f701_64545133', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163654377660cfad678a0e50_62862496', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199777701960cfad678a6098_05967705', "script");
?>

<?php }
/* {block "head"} */
class Block_68104077960cfad6789f701_64545133 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_68104077960cfad6789f701_64545133',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_163654377660cfad678a0e50_62862496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_163654377660cfad678a0e50_62862496',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-md-12">
            <div class="panel">

                <div class="panel-container show">


                    <div class="panel-content">
                        <div class="table-responsive" id="ib_data_panel">


                            <table class="table table-striped w-100"  id="clx_datatable">
                                <thead style="background: #f0f2ff">
                                <tr class="heading">

                                    <th>Date</th>
                                    <th>Status</th>
                                    <th class="text-right" style="width: 80px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>


                                </thead>


                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                                    <tr>

                                        <td class="text-info h6">
                                            <?php echo $_smarty_tpl->tpl_vars['order']->value->date;?>

                                        </td>
                                        <td class="h6">
                                            <?php echo $_smarty_tpl->tpl_vars['order']->value->status;?>

                                        </td>
                                        <td>
                                            <div class="btn-group float-right">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
freight/client/view-order/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" class="btn btn-primary btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
" data-placement="top"><i class="fal fa-list"></i> </a>
                                            </div>
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

    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_199777701960cfad678a6098_05967705 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_199777701960cfad678a6098_05967705',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<?php
}
}
/* {/block "script"} */
}
