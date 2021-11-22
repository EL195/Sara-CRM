<?php
/* Smarty version 3.1.39, created on 2021-03-19 17:53:12
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/ps_modal_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60551d48180432_71364890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40d756451155fb4a9ecadb2d57d9c32a9b07d1c5' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/ps_modal_list.tpl',
      1 => 1606812643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60551d48180432_71364890 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                        <tr>
                            <td><input type="checkbox" class="si"></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
</td>

                            <td class="price"><?php echo formatCurrency($_smarty_tpl->tpl_vars['ds']->value['sales_price'],$_smarty_tpl->tpl_vars['config']->value['home_currency'],$_smarty_tpl->tpl_vars['format_currency_override']->value);?>
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
