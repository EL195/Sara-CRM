<?php
/* Smarty version 3.1.39, created on 2021-07-13 03:08:29
  from '/Users/razib/Documents/valet/business-suite/apps/freight/views/client_forwarding_addresses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ec932d8b7814_70072764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '352391bf29a12c8549f143ffce2e216b9271203e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/freight/views/client_forwarding_addresses.tpl',
      1 => 1625565444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ec932d8b7814_70072764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141634501060ec932d8a4622_28395123', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132141470560ec932d8b6f11_31663904', "script");
?>

<?php }
/* {block "content"} */
class Block_141634501060ec932d8a4622_28395123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_141634501060ec932d8a4622_28395123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <?php if ($_smarty_tpl->tpl_vars['selected_shipping_address']->value) {?>
                        <h2><?php echo $_smarty_tpl->tpl_vars['selected_shipping_address']->value->label;?>
</h2>
                    <?php } else { ?>
                        <h2>Your Chinese Shipping Addresses</h2>
                    <?php }?>

                    <div class="panel-toolbar">
                        <select class="custom-select" name="switch_address" id="switch_address">
                            <option value="">Switch Address</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping_addresses']->value, 'shipping_address');
$_smarty_tpl->tpl_vars['shipping_address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_address']->value) {
$_smarty_tpl->tpl_vars['shipping_address']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['selected_shipping_address']->value && $_smarty_tpl->tpl_vars['selected_shipping_address']->value->id == $_smarty_tpl->tpl_vars['shipping_address']->value->id) {?>disabled<?php }?> ><?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->label;?>
 <?php if ($_smarty_tpl->tpl_vars['selected_shipping_address']->value && $_smarty_tpl->tpl_vars['selected_shipping_address']->value->id == $_smarty_tpl->tpl_vars['shipping_address']->value->id) {?>(Selected)<?php }?></option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <div class="panel-container">
                    <div class="panel-content">



                        <div class="panel-tag">
                            <ul>
                                <li>Select warehouse for Air freight or Sea freight before you make Taobao purchase.</li>
                                <li>Submit order after all your goods have been shipped out by sellers.</li>
                                <li>Warehouse staff uses your ID ( GS-XXXXX ) to identify your goods. Please paste it at the end of warehouse address as well.</li>
                            </ul>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['selected_shipping_address']->value) {?>

                            <div class="form-row form-group">
                                <label class="col-md-2" for="input_address_line_1">*地址信息:</label>
                                <div class="input-group col-md-10">
                                    <input type="text" id="input_address_line_1" value="<?php echo $_smarty_tpl->tpl_vars['selected_shipping_address']->value->address_line_1;?>
" class="form-control" >
                                    <div class="input-group-append">
                                        <button class="btn btn-dark action_copy_text" data-target="input_address_line_1" type="button">Copy</button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row form-group">
                                <label class="col-md-2" for="input_address_line_2">*详细地址:</label>
                                <div class="input-group col-md-10">
                                    <input type="text" id="input_address_line_2" value="<?php echo str_replace('{{Customer ID}}',$_smarty_tpl->tpl_vars['user']->value->code,$_smarty_tpl->tpl_vars['selected_shipping_address']->value->address_line_2);?>
" class="form-control" >
                                    <div class="input-group-append">
                                        <button class="btn btn-dark action_copy_text" data-target="input_address_line_2" type="button">Copy</button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row form-group">
                                <label class="col-md-2" for="input_zip">*邮政编码:</label>
                                <div class="input-group col-md-10">
                                    <input type="text" id="input_zip" value="<?php echo $_smarty_tpl->tpl_vars['selected_shipping_address']->value->zip;?>
" class="form-control" >
                                    <div class="input-group-append">
                                        <button class="btn btn-dark action_copy_text" data-target="input_zip" type="button">Copy</button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row form-group">
                                <label class="col-md-2" for="input_consignee">*收货人姓名:</label>
                                <div class="input-group col-md-10">
                                    <input type="text" id="input_consignee" value="<?php echo str_replace('{{Customer ID}}',$_smarty_tpl->tpl_vars['user']->value->code,$_smarty_tpl->tpl_vars['selected_shipping_address']->value->consignee);?>
" class="form-control" >
                                    <div class="input-group-append">
                                        <button class="btn btn-dark action_copy_text" data-target="input_consignee" type="button">Copy</button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row form-group">
                                <label class="col-md-2" for="input_phone">*手机号码:</label>
                                <div class="input-group col-md-10">
                                    <input type="text" id="input_phone" value="<?php echo $_smarty_tpl->tpl_vars['selected_shipping_address']->value->phone;?>
" class="form-control" >
                                    <div class="input-group-append">
                                        <button class="btn btn-dark action_copy_text" data-target="input_phone" type="button">Copy</button>
                                    </div>
                                </div>
                            </div>

                        <?php }?>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_132141470560ec932d8b6f11_31663904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_132141470560ec932d8b6f11_31663904',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $(".action_copy_text").click(function(){
                let target_id = $(this).data('target');
                $('#'+target_id).select();
                document.execCommand('copy');
                toastr.success('Copied!');
            });

            let $switch_address = $('#switch_address');

            $switch_address.on('change',function () {
                window.location = base_url + 'freight/client/forwarding-addresses/' + $switch_address.val();
            });



        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
