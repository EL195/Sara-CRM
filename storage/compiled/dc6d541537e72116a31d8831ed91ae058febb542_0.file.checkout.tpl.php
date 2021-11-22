<?php
/* Smarty version 3.1.39, created on 2021-06-17 10:00:19
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cb5573953a74_29320202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc6d541537e72116a31d8831ed91ae058febb542' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/checkout.tpl',
      1 => 1623938413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cb5573953a74_29320202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15616601660cb55739361a5_61678798', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78845260460cb5573952fa9_45978353', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl");
}
/* {block "content"} */
class Block_15616601660cb55739361a5_61678798 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15616601660cb55739361a5_61678798',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <div class="container">

        <div class="bg-white shadow p-4">

            <h1><?php echo $_smarty_tpl->tpl_vars['_L']->value['Checkout'];?>
</h1>

            <div class="hr-line-dashed"></div>

            <?php if (count($_smarty_tpl->tpl_vars['items']->value) || !empty($_smarty_tpl->tpl_vars['shopping_cart_items']->value['domains'])) {?>


                <table class="table table-bordered">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <tr>
                            <td>
                                <h3><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</h3>

                                <div class="hr-line-dashed"></div>

                                <div class="mb-3">
                                    <label><?php echo __('Billing Cycle');?>
</label>
                                    <select class="custom-select mt-2 select_payment_term" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" >
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, get_available_item_pricing_terms($_smarty_tpl->tpl_vars['item']->value), 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
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
                                </div>


                                <?php if ($_smarty_tpl->tpl_vars['item']->value->require_domain_name) {?>

                                    <div class="mb-3">
                                        <label><?php echo __('Enter Your Domain');?>
</label>
                                        <input class="form-control hosting_set_domain_name" name="domain_name" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"
                                                <?php if ((isset($_smarty_tpl->tpl_vars['shopping_cart_items']->value['hosting'][$_smarty_tpl->tpl_vars['item']->value->id]['domain_name']))) {?>
                                                    value="<?php echo $_smarty_tpl->tpl_vars['shopping_cart_items']->value['hosting'][$_smarty_tpl->tpl_vars['item']->value->id]['domain_name'];?>
"
                                                <?php }?>
                                        >
                                        <p>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/domain-register/"><?php echo __('Register a new domain?');?>
</a>
                                        </p>
                                    </div>

                                <?php }?>



                            </td>
                            <td class="text-right">
                                <p>
                                    <strong><?php echo formatCurrency($_smarty_tpl->tpl_vars['shopping_cart_items']->value['hosting'][$_smarty_tpl->tpl_vars['item']->value->id]['price'],$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</strong>
                                </p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/remove-shopping-cart-item/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" class="btn mt-3 btn-danger btn-icon waves-effect waves-themed"><i class="fal fa-trash-alt"></i> </a>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['shopping_cart_items']->value['domains'])) {?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shopping_cart_items']->value['domains'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>

                            <tr>
                                <td>
                                    <h5><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</h5>

                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['term'] == 1) {?>
                                        1 <?php echo __('year');?>

                                        <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['value']->value['term'];?>
 <?php echo __('years');?>

                                    <?php }?>

                                </td>
                                <td class="text-right">
                                    <p>
                                        <strong><?php echo formatCurrency($_smarty_tpl->tpl_vars['value']->value['price'],$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</strong>
                                    </p>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/remove-shopping-cart-domain/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="btn mt-3 btn-danger btn-icon waves-effect waves-themed"><i class="fal fa-trash-alt"></i> </a>
                                </td>
                            </tr>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <?php }?>


                    <tr>
                        <td class="text-right">
                            <h4><?php echo __('Total');?>
:</h4>
                        </td>
                        <td class="text-right" style="width: 150px;">
                            <h4><?php echo formatCurrency($_smarty_tpl->tpl_vars['shopping_cart']->value->total,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h4>
                        </td>
                    </tr>

                </table>


                <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/checkout-commit"><?php echo __('Pay Now');?>
</a>

                    <?php } else { ?>


                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/login/">
                            <h5 class="text-info"><?php echo __('I already have an account');?>
</h5>
                        </a>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/register/">
                        <h5 class="text-info"><?php echo __('Or create an account');?>
</h5>
                    </a>

                <?php }?>


                <div class="hr-line-dashed"></div>
                <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/"><?php echo __('Continue Shopping');?>
</a>
                <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/delete-shopping-cart"><?php echo __('Empty Shopping Cart');?>
</a>



            <?php } else { ?>

                <?php echo __('No items in the shopping cart.');?>


                <div class="hr-line-dashed"></div>

                <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/"><?php echo __('Go to Homepage');?>
</a>

            <?php }?>




        </div>

    </div>







<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_78845260460cb5573952fa9_45978353 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_78845260460cb5573952fa9_45978353',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            $('.select_payment_term').on('change',function () {
                let that = $(this);
                window.location = base_url + 'client/shopping-cart-update-term/' + that.data('id') + '/' + that.val();
            });

            $('.hosting_set_domain_name').on('keyup paste',function () {
                let that = $(this);
                $.post( base_url + 'client/set-domain-for-hosting', {
                    id: that.data('id'),
                    domain: that.val(),
                });

            });

        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
