<?php
/* Smarty version 3.1.39, created on 2021-03-20 09:01:35
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/ps_modal_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6055f22fa0f698_60086285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8be2db9bcce76bd1b1920fa7efd879e77ccf276b' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/ps_modal_list.tpl',
      1 => 1616245289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6055f22fa0f698_60086285 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mx-auto" style="max-width: 800px;">
    <div class="panel mb-0 rounded-0">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Products n Services'];?>
</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <table class="table table-striped table-bordered" id="modal_items_table">
                    <thead>
                    <tr>
                        <th width="10%">#</th>
                        <th width="20%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Code'];?>
</th>
                        <th width="55%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Name'];?>
</th>

                        <th width="15%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products_and_services']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <tr>
                            <td><input type="checkbox" class="si"></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</td>

                            <td class="price"><?php echo formatCurrency(get_pricing_term_first_price($_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl->tpl_vars['config']->value['home_currency'],$_smarty_tpl->tpl_vars['format_currency_override']->value);?>
</td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                    </tbody>
                </table>

                <div class="form-group">
                    <button type="button" data-dismiss="modal" class="btn"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
                    <button class="btn btn-primary update"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select'];?>
</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
