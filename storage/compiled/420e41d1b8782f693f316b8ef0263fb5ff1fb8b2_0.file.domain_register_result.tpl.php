<?php
/* Smarty version 3.1.39, created on 2021-06-17 09:59:28
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/domain_register_result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cb5540223503_49847464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '420e41d1b8782f693f316b8ef0263fb5ff1fb8b2' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/domain_register_result.tpl',
      1 => 1623938347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cb5540223503_49847464 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['available']->value) {?>
    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Congratulation'];?>
<mark><?php echo $_smarty_tpl->tpl_vars['domain_name_full']->value;?>
</mark>
        <?php echo $_smarty_tpl->tpl_vars['_L']->value['is available'];?>
.</h3>

    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/buy-now-domain/">

        <input type="hidden" name="extension" value="<?php echo $_smarty_tpl->tpl_vars['extension']->value;?>
">
        <input type="hidden" name="domain_name" value="<?php echo $_smarty_tpl->tpl_vars['domain_name']->value;?>
">

        <div class="my-3">
            <select class="custom-select" name="term">
                <option value="1">1 <?php echo __('year');?>
 - <?php echo formatCurrency($_smarty_tpl->tpl_vars['domain_price']->value->register,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</option>
                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 2;
if ($_smarty_tpl->tpl_vars['i']->value <= 10) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= 10; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
 <?php echo __('years');?>
 - <?php echo formatCurrency($_smarty_tpl->tpl_vars['domain_price']->value->register*$_smarty_tpl->tpl_vars['i']->value,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</option>
                <?php }
}
?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary domain_buy_now"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Buy Now'];?>
</button>
    </form>

    <?php } else { ?>
    <h3 class="text-muted mb-0"><?php echo $_smarty_tpl->tpl_vars['domain_name_full']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['is not available, try another domain.'];?>
</h3>
<?php }
}
}
