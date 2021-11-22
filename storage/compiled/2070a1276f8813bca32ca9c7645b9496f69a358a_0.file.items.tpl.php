<?php
/* Smarty version 3.1.39, created on 2021-06-14 19:45:51
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c7ea2feb9dc2_50508549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2070a1276f8813bca32ca9c7645b9496f69a358a' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/items.tpl',
      1 => 1623712482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c7ea2feb9dc2_50508549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71167772060c7ea2fe984d3_35616499', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41272269760c7ea2feb94a4_22073196', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl");
}
/* {block "content"} */
class Block_71167772060c7ea2fe984d3_35616499 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_71167772060c7ea2fe984d3_35616499',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="container">


        <?php if ($_smarty_tpl->tpl_vars['group']->value && $_smarty_tpl->tpl_vars['group']->value->header_content) {?>
            <div class="my-3">
                <?php echo $_smarty_tpl->tpl_vars['group']->value->header_content;?>

            </div>
        <?php }?>

        <div class="row align-items-center">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <div class="col-sm-6 col-lg-4 my-3 pricing_block">
                    <div class="shadow-hover shadow-lg bg-white hover-top clx-pricing-table overflow-hidden <?php if ($_smarty_tpl->tpl_vars['item']->value->featured) {?>featured<?php }?> ">
                        <div class="pt-head position-relative z-index-1 p-4">
                            <h6 class="mb-2 text-white"><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</h6>

                            <?php if ($_smarty_tpl->tpl_vars['item']->value->one_time_fee && $_smarty_tpl->tpl_vars['item']->value->one_time_fee > 0) {?>
                                <h5 class="m-0 h1 text-white selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->one_time_fee),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                                <p class="text-white selected_term"><?php echo $_smarty_tpl->tpl_vars['_L']->value['One Time'];?>
</p>

                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_monthly && $_smarty_tpl->tpl_vars['item']->value->price_monthly > 0) {?>
                                <h5 class="m-0 h1 text-white selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_monthly),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                                <p class="text-white selected_term"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Monthly'];?>
</p>

                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_yearly && $_smarty_tpl->tpl_vars['item']->value->price_yearly > 0) {?>
                                <h5 class="m-0 h1 text-white selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_yearly),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                                <p class="text-white selected_term"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Yearly'];?>
</p>

                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_quarterly && $_smarty_tpl->tpl_vars['item']->value->price_quarterly > 0) {?>
                                <h5 class="m-0 h1 text-white selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_quarterly),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                                <p class="text-white selected_term"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quarterly'];?>
</p>

                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_half_yearly && $_smarty_tpl->tpl_vars['item']->value->price_half_yearly > 0) {?>
                                <h5 class="m-0 h1 text-white selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_half_yearly),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                                <p class="text-white selected_term"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Half Yearly'];?>
</p>

                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->two_years && $_smarty_tpl->tpl_vars['item']->value->two_years > 0) {?>
                                <h5 class="m-0 h1 text-white selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->two_years),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                                <p class="text-white selected_term"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Two Years'];?>
</p>

                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->price_three_years && $_smarty_tpl->tpl_vars['item']->value->price_three_years > 0) {?>
                                <h5 class="m-0 h1 text-white selected_price"><?php echo formatCurrency(($_smarty_tpl->tpl_vars['item']->value->price_three_years),$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h5>
                                <p class="text-white selected_term"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Three Years'];?>
</p>
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
                        <div class="p-4">


                            <?php if ($_smarty_tpl->tpl_vars['item']->value->features && count(json_decode($_smarty_tpl->tpl_vars['item']->value->features))) {?>
                                <ul class="list-unstyled clx-list-with-padding">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['item']->value->features), 'feature_line');
$_smarty_tpl->tpl_vars['feature_line']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature_line']->value) {
$_smarty_tpl->tpl_vars['feature_line']->do_else = false;
?>
                                        <li><i class="fal fa-check mr-2"></i> <?php echo $_smarty_tpl->tpl_vars['feature_line']->value;?>
</li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php }?>
                        </div>
                        <div class="hr-line-dashed m-0"></div>
                        <div class="p-4">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/buy-now/<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
" class="btn btn-primary btn_buy_now"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Buy Now'];?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/item/<?php echo $_smarty_tpl->tpl_vars['item']->value->slug;?>
" class="btn btn-secondary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Learn More'];?>
</a>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



        </div>

    </div>




<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_41272269760c7ea2feb94a4_22073196 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_41272269760c7ea2feb94a4_22073196',
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
