<?php
/* Smarty version 3.1.39, created on 2021-06-20 17:04:42
  from '/Users/razib/Documents/valet/business-suite/apps/freight/views/client_order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cfad6a335631_27565132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a959d6a2f2bee2aa42fa63d983e83346c134a718' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/freight/views/client_order.tpl',
      1 => 1601240768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cfad6a335631_27565132 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55132184560cfad6a32af28_86673220', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153941110160cfad6a3349b6_61350825', "script");
?>

<?php }
/* {block "content"} */
class Block_55132184560cfad6a32af28_86673220 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_55132184560cfad6a32af28_86673220',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2>Place New Order</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <form id="main_form" method="post">

                    <div class="mb-3">
                        <div class="form-group">
                            <select class="custom-select" name="shipping_address">
                                <option value="">Select Shipping Address</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_shipping_addresses']->value, 'shipping_address');
$_smarty_tpl->tpl_vars['shipping_address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_address']->value) {
$_smarty_tpl->tpl_vars['shipping_address']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->id;?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value->is_default) {?>
                                        selected
                                    <?php }?>
                                    ><?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->address_line_1;?>
, <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->city;?>
, <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->state;?>
 - <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->zip;?>
, <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->country;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="items_table">
                            <thead>
                            <tr>
                                <td>#</td>
                                <td>Product Description</td>
                                <td>Tracking Number</td>
                                <td>Qty/No. <br> Ctns</td>
                                <td>Courier Company</td>
                                <td>Declared Value</td>
                            </tr>
                            </thead>
                            <tbody id="table_tbody">
                            <tr>
                                <td>1</td>
                                <td>
                                    <input name="item_description[]" class="form-control">
                                </td>
                                <td>
                                    <input name="item_tracking_number[]" class="form-control">
                                </td>
                                <td>
                                    <input name="item_qty[]" class="form-control item_qty">
                                </td>
                                <td>
                                    <input name="item_courier_company[]" class="form-control">
                                </td>
                                <td>
                                    <input name="item_amount[]" class="form-control item_amount">
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="5" class="text-right">
                                    Total declare
                                </td>
                                <td>
                                    <span id="item_total">0.00</span>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="mt-3">
                        <div class="row">
                            <div class="col">
                                <button type="button" id="btn_add_row" class="btn btn-dark"><i class="fal fa-plus"></i> Add Row</button>
                            </div>
                            <div class="col text-right">
                                <button type="submit" id="btn_submit_order" class="btn btn-primary">Submit Order</button>
                            </div>
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
/* {block "script"} */
class Block_153941110160cfad6a3349b6_61350825 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_153941110160cfad6a3349b6_61350825',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            let row_count = 1;
            function get_row_content() {
                row_count ++;
                return '<tr>\n' +
                    '                            <td>'+ row_count +'</td>\n' +
                    '                            <td>\n' +
                    '                                <input name="item_description[]" class="form-control">\n' +
                    '                            </td>\n' +
                    '                            <td>\n' +
                    '                                <input name="item_tracking_number[]" class="form-control">\n' +
                    '                            </td>\n' +
                    '                            <td>\n' +
                    '                                <input name="item_qty[]" class="form-control item_qty">\n' +
                    '                            </td>\n' +
                    '                            <td>\n' +
                    '                                <input name="item_courier_company[]" class="form-control">\n' +
                    '                            </td>\n' +
                    '                            <td>\n' +
                    '                                <input name="item_amount[]" class="form-control item_amount">\n' +
                    '                            </td>\n' +
                    '                        </tr>';
            }

            $('#btn_add_row').on('click',function () {
                $('#table_tbody').append(get_row_content());
            });

            $('#items_table').on('change','.item_amount',function () {
                let total = 0;
                $('.item_amount').each(function () {
                    total += parseFloat($(this).val());
                });

                $('#item_total').html(total);

            });

            let $btn_submit = $('#btn_submit_order');
            let $main_form = $('#main_form');

            $btn_submit.on('click',function (e) {
                e.preventDefault();
                $btn_submit.prop('disabled',true);

                $.post( base_url + 'freight/client/save-order', $main_form.serialize())
                    .done(function( data ) {
                        $btn_submit.prop('disabled',false);

                      //  window.location = base_url + 'freight/client/orders';

                        location.reload();


                    }).fail(function (error) {
                    $btn_submit.prop('disabled',false);
                    toastr.error(error.responseText);
                });
            });

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
