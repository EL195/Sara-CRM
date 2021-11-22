<?php
/* Smarty version 3.1.39, created on 2021-03-09 07:08:54
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60476556c07090_95177500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f56df2f506023c47e47118b056051a968779aad' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/item.tpl',
      1 => 1615291732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60476556c07090_95177500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102800054160476556bf13c8_23616049', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26024656060476556c068f2_53411844', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl");
}
/* {block "content"} */
class Block_102800054160476556bf13c8_23616049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_102800054160476556bf13c8_23616049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <div class="mx-auto" style="width: 100%; max-width: 800px;">
        <div class="bg-white shadow p-4 pricing_block">
            <div class="pb-2">
                <h1 class="m-0"><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</h1>
                <?php if ($_smarty_tpl->tpl_vars['item']->value->one_time_fee && $_smarty_tpl->tpl_vars['item']->value->one_time_fee > 0) {?>
                    <h5 class="m-0 h1 selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->one_time_fee),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                    <p class="selected_term">One Time</p>

                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_monthly && $_smarty_tpl->tpl_vars['item']->value->price_monthly > 0) {?>
                    <h5 class="m-0 h1 selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_monthly),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                    <p class="selected_term">Monthly</p>

                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_yearly && $_smarty_tpl->tpl_vars['item']->value->price_yearly > 0) {?>
                    <h5 class="m-0 h1 selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_yearly),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                    <p class="selected_term">Yearly</p>

                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_quarterly && $_smarty_tpl->tpl_vars['item']->value->price_quarterly > 0) {?>
                    <h5 class="m-0 h1 selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_quarterly),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                    <p class="selected_term">Quarterly</p>

                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_half_yearly && $_smarty_tpl->tpl_vars['item']->value->price_half_yearly > 0) {?>
                    <h5 class="m-0 h1 selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_half_yearly),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                    <p class="selected_term">Half Yearly</p>

                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->two_years && $_smarty_tpl->tpl_vars['item']->value->two_years > 0) {?>
                    <h5 class="m-0 h1 selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->two_years),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                    <p class="selected_term">Two Years</p>

                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_three_years && $_smarty_tpl->tpl_vars['item']->value->price_three_years > 0) {?>
                    <h5 class="m-0 h1 selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_three_years),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                    <p class="selected_term">Three Years</p>
                <?php }?>

                <?php if (count(get_available_item_pricing_terms($_smarty_tpl->tpl_vars['item']->value)) > 1) {?>

                    <select class="custom-select my-2 select_payment_term" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" data-slug="<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
" >
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, get_available_item_pricing_terms($_smarty_tpl->tpl_vars['item']->value), 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                            <option data-price="<?php echo formatCurrency($_smarty_tpl->tpl_vars['value']->value['price'],$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
" data-term="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                                    <?php if ((isset($_smarty_tpl->tpl_vars['shopping_cart_items']->value['hosting'][$_smarty_tpl->tpl_vars['item']->value->id]['term'])) && ($_smarty_tpl->tpl_vars['shopping_cart_items']->value['hosting'][$_smarty_tpl->tpl_vars['item']->value->id]['term'] === $_smarty_tpl->tpl_vars['key']->value)) {?>
                                        selected
                                    <?php }?>
                            ><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
 <?php echo formatCurrency($_smarty_tpl->tpl_vars['value']->value['price'],$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>

                <?php }?>

            </div>

            <?php if ($_smarty_tpl->tpl_vars['item']->value->features && count(json_decode($_smarty_tpl->tpl_vars['item']->value->features))) {?>
                <ul class="list-unstyled clx-list-with-padding">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['item']->value->features), 'feature_line');
$_smarty_tpl->tpl_vars['feature_line']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature_line']->value) {
$_smarty_tpl->tpl_vars['feature_line']->do_else = false;
?>
                        <li class="pl-1"><i class="fal fa-check mr-2"></i> <?php echo $_smarty_tpl->tpl_vars['feature_line']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            <?php }?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/buy-now/<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
" class="btn btn-primary btn_buy_now">Buy Now</a>
            <div class="hr-line-dashed"></div>

            <?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>






        </div>
    </div>





<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_26024656060476556c068f2_53411844 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_26024656060476556c068f2_53411844',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {
            $('.select_payment_term').on('change',function () {
                let that = $(this);

                that.closest('.pricing_block').find('.selected_price').html(that.find(':selected').data('price'));
                that.closest('.pricing_block').find('.selected_term').html(that.find(':selected').data('term'));
                that.closest('.pricing_block').find('.btn_buy_now').attr('href',base_url + 'client/buy-now/' + that.data('slug') + '/' + that.find(':selected').data('term'));

            });
        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
