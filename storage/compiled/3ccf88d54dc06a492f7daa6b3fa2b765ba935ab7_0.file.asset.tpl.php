<?php
/* Smarty version 3.1.39, created on 2021-04-23 19:25:34
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/asset.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6083576e5facf7_05532104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ccf88d54dc06a492f7daa6b3fa2b765ba935ab7' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/asset.tpl',
      1 => 1593418581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6083576e5facf7_05532104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16363168536083576e5da310_46650170', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3134746056083576e5f7a72_56691732', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_16363168536083576e5da310_46650170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16363168536083576e5da310_46650170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="mx-auto" style="max-width: 800px; width: 100%;">
        <div class="panel">
            <div class="panel-hdr">
                <h2>Add an asset</h2>
                <div class="panel-toolbar">
                    <?php if ($_smarty_tpl->tpl_vars['asset']->value) {?>
                        <a href="javascript:;" onclick="confirmThenGoToUrl(event,'delete/asset/<?php echo $_smarty_tpl->tpl_vars['asset']->value->id;?>
');" class="btn btn-danger">Delete</a>
                    <?php }?>
                </div>
            </div>
            <div class="panel-container">
                <div class="panel-content">
                    <form method="post" id="mainForm">
                        <div class="form-group">
                            <label for="inputName">Name*</label>
                            <input class="form-control" id="inputName" name="name" <?php if ($_smarty_tpl->tpl_vars['asset']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['asset']->value->name;?>
" <?php }?>>
                        </div>
                        <div class="form-group">
                            <label>Date purchased</label>
                            <input class="form-control" name="date_purchased" datepicker
                                   data-date-format="yyyy-mm-dd" data-auto-close="true"  <?php if ($_smarty_tpl->tpl_vars['asset']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['asset']->value->date_purchased;?>
" <?php } else { ?> value="<?php echo date('Y-m-d');?>
" <?php }?>>
                        </div>
                        <div class="form-group">
                            <label>Supported until / Warranty</label>
                            <input class="form-control" name="supported_until" datepicker
                                   data-date-format="yyyy-mm-dd" data-auto-close="true" <?php if ($_smarty_tpl->tpl_vars['asset']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['asset']->value->supported_until;?>
" <?php } else { ?> value="<?php echo date('Y-m-d',strtotime('+1 year'));?>
" <?php }?>>
                        </div>
                        <div class="form-group">
                            <label for="inputPrice">Price</label>
                            <input class="form-control amount" id="inputPrice" name="price"  <?php if ($_smarty_tpl->tpl_vars['asset']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['asset']->value->price;?>
" <?php }?>>
                        </div>
                        <div class="form-group">
                            <label for="inputSerial">Serial</label>
                            <input class="form-control" id="inputSerial" name="serial"  <?php if ($_smarty_tpl->tpl_vars['asset']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['asset']->value->serial;?>
" <?php }?>>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category_id">
                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['asset']->value && $_smarty_tpl->tpl_vars['asset']->value->category_id == $_smarty_tpl->tpl_vars['category']->value->id) {?> selected <?php }?>
                                    ><?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control" rows="10" name="notes"><?php if ($_smarty_tpl->tpl_vars['asset']->value) {
echo $_smarty_tpl->tpl_vars['asset']->value->notes;
}?></textarea>
                        </div>
                        <div class="form-group">
                            <?php if ($_smarty_tpl->tpl_vars['asset']->value) {?>
                                <input type="hidden" name="asset_id" value="<?php echo $_smarty_tpl->tpl_vars['asset']->value->id;?>
">
                            <?php }?>
                            <button class="btn btn-primary" id="btnSubmit" type="submit">Save</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_3134746056083576e5f7a72_56691732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_3134746056083576e5f7a72_56691732',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            $('.amount').autoNumeric('init', {

                aSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 ',
                dGroup: <?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
,
                aPad: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
,
                pSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
',
                aDec: '<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
',
                aSep: '<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
',
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'

            });

            $('#btnSubmit').click(function (e) {
                e.preventDefault();

                $.post( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
assets/asset-post", $('#mainForm').serialize() ).done(function() {
                    window.location = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
assets/list';
                }).fail(function(data) {
                    console.log(data.responseText);
                    spNotify(data.responseText,'error');
                });
            });
        })

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
