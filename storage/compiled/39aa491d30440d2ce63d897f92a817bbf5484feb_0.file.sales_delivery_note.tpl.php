<?php
/* Smarty version 3.1.39, created on 2021-07-29 15:21:01
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/sales_delivery_note.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6102ff9dd1a7d6_25127343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39aa491d30440d2ce63d897f92a817bbf5484feb' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/sales_delivery_note.tpl',
      1 => 1592545225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6102ff9dd1a7d6_25127343 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4006552336102ff9dd0f6d2_92188145', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4148973496102ff9dd196e2_66579843', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_4006552336102ff9dd0f6d2_92188145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4006552336102ff9dd0f6d2_92188145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="panel">
            <div class="panel-body">

                <h3>New Delivery Challan</h3>

                <div class="hr-line-dashed"></div>

                <form>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>
                                <select class="form-control">
                                    <option>None</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Number #</label>
                                <input class="form-control" value="DC-000<?php echo predictNextRow('delivery_notes');?>
">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Reference</label>
                                <input class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive m-t">

                                <table class="table table-bordered invoice-table" id="invoice_items">
                                    <thead>
                                    <tr>

                                        <th width="30%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Name'];?>
</th>
                                        <th>Height</th>
                                        <th>Width</th>
                                        <th><?php if ($_smarty_tpl->tpl_vars['config']->value['show_quantity_as'] == '') {
echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];
} else {
echo $_smarty_tpl->tpl_vars['config']->value['show_quantity_as'];
}?></th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>



                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <textarea class="form-control item_name" name="desc[]" rows="3"></textarea>
                                            <input type="hidden" name="item_code[]" value=""></td>
                                        <td><input type="text" class="form-control qty" value="" name="height[]"></td>
                                        <td><input type="text" class="form-control qty" value="" name="width[]"></td>
                                        <td><input type="text" class="form-control qty" value="" name="qty[]"></td>
                                        <td><input type="text" class="form-control item_price" name="amount[]" value="">
                                        </td>


                                        <td class="ltotal"><input type="text" class="form-control lvtotal" readonly=""
                                                                  value=""></td>
                                    </tr>

                                    </tbody>
                                </table>

                            </div>



                            <button type="button" class="btn btn-primary" id="blank-add"><i
                                        class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add blank Line'];?>
</button>
                            <button type="button" class="btn btn-primary" id="item-add"><i
                                        class="fal fa-search"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product OR Service'];?>
</button>
                            <button type="button" class="btn btn-danger" id="item-remove"><i
                                        class="fal fa-minus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</button>

                            <div class="hr-line-dashed"></div>

                            <table class="table invoice-total">

                                <tbody>



                                <tr>
                                    <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TOTAL'];?>
 :</strong></td>
                                    <td id="total" class="amount">0.00
                                    </td>
                                </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_4148973496102ff9dd196e2_66579843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_4148973496102ff9dd196e2_66579843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
