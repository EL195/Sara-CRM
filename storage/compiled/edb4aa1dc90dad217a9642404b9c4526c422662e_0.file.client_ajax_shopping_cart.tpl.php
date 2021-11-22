<?php
/* Smarty version 3.1.39, created on 2021-10-01 18:26:48
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_ajax_shopping_cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61578b28490707_42243524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edb4aa1dc90dad217a9642404b9c4526c422662e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_ajax_shopping_cart.tpl',
      1 => 1592432480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61578b28490707_42243524 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="panel">
    <div>

        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Shopping Cart'];?>
</h2>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value && $_smarty_tpl->tpl_vars['cart']->value->item_count > 0) {?>

            <div>



                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <div class="panel-container">
                                <div class="panel-content">
                                    <div>
                                        <div class="top-cart-item-image mb-2">
                                            <a href="#"><img src="<?php echo Cart::getItemImage($_smarty_tpl->tpl_vars['item']->value['id']);?>
" alt="Blue Shoulder Bag" class="img-fluid"></a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="#" class="t400"><span class="txt_cart_item_name"><?php echo strTrunc($_smarty_tpl->tpl_vars['item']->value['name']);?>
</span></a>

                                            <span class="top-cart-item-price"><?php echo ib_money_format($_smarty_tpl->tpl_vars['item']->value['price'],$_smarty_tpl->tpl_vars['config']->value);?>
 [Total: <?php echo ib_money_format($_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['item']->value['qty'],$_smarty_tpl->tpl_vars['config']->value);?>
]</span>
                                            <span class="top-cart-item-quantity">x <?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</span>
                                        </div>
                                    </div>



                                </div>
                            </div>





                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>




            </div>
            <div class="panel-container">
                <div class="panel-content">
                    <div class="top-cart-action clearfix" style="padding-bottom: 0;">

                        <span class="top-checkout-price t600 h3 text-right pull-right" style="color: #333;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
: <?php echo ib_money_format($_smarty_tpl->tpl_vars['cart']->value->total,$_smarty_tpl->tpl_vars['config']->value);?>
</span>





                    </div>
                </div>
            </div>






            <hr>
            <div class="panel-container">
                <div class="panel-content">
                    <a class="btn btn-danger text-right" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
cart/clear">Clear</a>
                    <a class="btn btn-primary text-right pull-right" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
cart/checkout">Checkout</a>

                    <?php } else { ?>

                    <p class="text-center" style="margin-top: 20px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Your Cart is empty'];?>
</p>

                    <hr>

                    <?php }?>
                </div>
            </div>



    </div>
</div>


<?php }
}
