<?php
/* Smarty version 3.1.39, created on 2021-07-29 15:21:00
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/sales_delivery_notes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6102ff9c175612_52199397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '749e335f643ef891605b97918af283d0b166e275' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/sales_delivery_notes.tpl',
      1 => 1593420163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6102ff9c175612_52199397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14190933686102ff9c1642a3_50941153', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6525871906102ff9c173113_29642533', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_14190933686102ff9c1642a3_50941153 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14190933686102ff9c1642a3_50941153',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <h3 class="ibilling-page-header"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delivery Challans'];?>
</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sales/delivery_challan" class="btn btn-primary"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New'];?>
</a>

                    <div class="hr-line-dashed"></div>

                    <form class="form-horizontal" method="post" action="">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="fal fa-search"></span>
                                    </div>
                                    <input type="text" name="name" id="foo_filter" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
..."/>

                                </div>
                            </div>

                        </div>
                    </form>

                    <table class="table table-bordered table-hover sys_table footable" data-filter="#foo_filter" data-page-size="50">
                        <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Number'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['delivery_notes']->value, 'delivery_note');
$_smarty_tpl->tpl_vars['delivery_note']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['delivery_note']->value) {
$_smarty_tpl->tpl_vars['delivery_note']->do_else = false;
?>
                            <tr>
                                <td  data-value="<?php echo $_smarty_tpl->tpl_vars['asset']->value->id;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
assets/asset/<?php echo $_smarty_tpl->tpl_vars['asset']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['asset']->value->name;?>
</a> </td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['asset']->value->date_purchased));?>
</td>
                                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['asset']->value->supported_until));?>
</td>
                                <td class="amount"><?php echo $_smarty_tpl->tpl_vars['asset']->value->price;?>
</td>

                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>

                        <tfoot>
                        <tr>
                            <td colspan="5">
                                <ul class="pagination">
                                </ul>
                            </td>
                        </tr>
                        </tfoot>

                    </table>

                </div>
            </div>
        </div>
    </div>



<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_6525871906102ff9c173113_29642533 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_6525871906102ff9c173113_29642533',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/footable/js/footable.all.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/numeric.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>


        $(function() {

            $('.footable').footable();

            $('.amount').autoNumeric('init', {

                aSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 ',
                dGroup: <?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
,
                aPad: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
,
                pSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
',
                aDec: '<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
',
                aSep: '<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
',
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'

            });



        });



    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
