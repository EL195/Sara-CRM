<?php
/* Smarty version 3.1.39, created on 2021-09-28 15:05:18
  from '/Users/razib/Documents/valet/business-suite/apps/squareup/views/includes/top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6153676e18f0e2_83070392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdfcdc5939200ee6cddf8b7c533d14e1e9cc94d9' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/squareup/views/includes/top.tpl',
      1 => 1632855916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6153676e18f0e2_83070392 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row mb-3">
    <div class="col-sm-6">
        <?php if ($_smarty_tpl->tpl_vars['selected_integration']->value) {?>
            <h3><?php echo $_smarty_tpl->tpl_vars['selected_integration']->value->name;?>
</h3>
        <?php } else { ?>
            <p>
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
wcsuite/app/store/">
                    Please add a store.
                </a>
            </p>
        <?php }?>
    </div>
    <div class="col-sm-6 text-right">
        <select class="custom-select" id="switch_store" name="switch_store" style="max-width: 250px;">
            <option value="">Choose a Store...</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['integrations']->value, 'integration');
$_smarty_tpl->tpl_vars['integration']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['integration']->value) {
$_smarty_tpl->tpl_vars['integration']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['integration']->value->id;?>
"
                        <?php if ($_smarty_tpl->tpl_vars['selected_integration']->value && $_smarty_tpl->tpl_vars['selected_integration']->value->id === $_smarty_tpl->tpl_vars['integration']->value->id) {?>
                            selected
                        <?php }?>
                ><?php echo $_smarty_tpl->tpl_vars['integration']->value->name;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <option value="---AddNewStore---">Add New Store</option>
        </select>
    </div>
</div>


<?php }
}
