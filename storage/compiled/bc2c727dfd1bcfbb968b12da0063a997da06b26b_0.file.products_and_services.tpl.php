<?php
/* Smarty version 3.1.39, created on 2021-08-31 10:10:15
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/products_and_services.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612e3847740b65_07578387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc2c727dfd1bcfbb968b12da0063a997da06b26b' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/products_and_services.tpl',
      1 => 1623941353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612e3847740b65_07578387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1105727931612e384771e7b6_18906987', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1562384987612e384773b4a6_60116514', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_225637420612e384771ef44_24821071 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_1105727931612e384771e7b6_18906987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1105727931612e384771e7b6_18906987',
  ),
  'head' => 
  array (
    0 => 'Block_225637420612e384771ef44_24821071',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_225637420612e384771ef44_24821071', "head", $this->tplIndex);
?>



    <div class="row">



        <div class="col-md-12">



            <div class="panel">

                <div class="panel-hdr">
                    <h2><?php if ($_smarty_tpl->tpl_vars['action']->value == 'products') {?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Products'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Services'];?>
 <?php }?></h2>

                    <div class="panel-toolbar">

                        <div class="btn-group">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/p-new" class="btn btn-primary"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Product'];?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ps/s-new" class="btn btn-success"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Service'];?>
</a>
                        </div>

                    </div>
                </div>

                <div class="panel-container show">

                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table table-striped w-100" id="clx_datatable">
                                <thead style="background:#f0f2ff" >
                                <tr>
                                    <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Number'];?>
</th>
                                    <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Image'];?>
</th>
                                    <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                                    <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Price'];?>
</th>
                                    <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cost Price'];?>
</th>
                                    <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                    <tr>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->item_number;?>

                                        </td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['item']->value->image) {?>
                                                <img alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
" class="img-fluid" src="<?php echo APP_URL;?>
/storage/items/thumb<?php echo $_smarty_tpl->tpl_vars['item']->value->image;?>
">
                                                <?php } else { ?>
                                                <img alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
" class="img-fluid" src="<?php echo APP_URL;?>
/ui/lib/img/item_placeholder.png">
                                            <?php }?>
                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>

                                        </td>
                                        <td>
                                            <?php echo formatCurrency($_smarty_tpl->tpl_vars['item']->value->sales_price,$_smarty_tpl->tpl_vars['config']->value['home_currency'],$_smarty_tpl->tpl_vars['format_currency_override']->value);?>

                                        </td>
                                        <td>

                                            <?php echo formatCurrency($_smarty_tpl->tpl_vars['item']->value->cost_price,$_smarty_tpl->tpl_vars['config']->value['home_currency'],$_smarty_tpl->tpl_vars['format_currency_override']->value);?>


                                        </td>
                                        <td>

                                            <div class="btn-group float-right">

                                                <?php if ($_smarty_tpl->tpl_vars['can_edit']->value) {?>
                                                    <a href="javascript:;" id="edit_item_<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" class="btn edit_item btn-primary btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
" data-placement="top"><i class="fal fa-pencil"></i> </a>
                                                <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['action']->value == 'products') {?>
                                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
inventory/barcode/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" class="btn btn-dark btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Barcode'];?>
" data-placement="top"><i class="fal fa-barcode"></i> </a>
                                                <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['can_delete']->value) {?>

                                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'delete/ps/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
')"  class="btn btn-danger btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
" data-placement="top"><i class="fal fa-trash-alt"></i> </a>

                                                <?php }?>

                                            </div>

                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                                </tbody>


                            </table>
                        </div>
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
class Block_1562384987612e384773b4a6_60116514 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1562384987612e384773b4a6_60116514',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {
            var $modal = $('#cloudonex_body');
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No items to display'];?>
",
                        "info":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                        "infoEmpty":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing 0 to 0 of 0 entries'];?>
",
                        buttons: {
                            pageLength: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Show all'];?>
'
                        },
                        searchPlaceholder: "<?php echo __('Search');?>
"
                    },
                }
            );

            $modal.on('click', '.edit_item', function(e){
                e.preventDefault();
                var vid = this.id;
                var id = vid.replace("edit_item_", "");
                id = id.replace("t", "");


                $.fancybox.open({
                    src  :  base_url + 'ps/edit-form/' + id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
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
                                vMin: '-9999999999999999.00',

                                <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['decimal_places_products_and_services']))) {?>
                                mDec: <?php echo $_smarty_tpl->tpl_vars['config']->value['decimal_places_products_and_services'];?>
,
                                <?php }?>

                            });

                            $('#description').redactor(
                                {
                                    minHeight: 200 // pixels
                                }
                            );

                            //  new Clipboard('.ib_btn_copy');

                            var $file_link = $("#file_link");
                            var ib_submit = $("#update");

                            var ib_file = new Dropzone("#upload_container",
                                {
                                    url: base_url + "ps/upload/",
                                    maxFiles: 1
                                }
                            );


                            ib_file.on("sending", function() {

                                ib_submit.prop('disabled', true);

                            });

                            ib_file.on("success", function(file,response) {

                                ib_submit.prop('disabled', false);

                                upload_resp = response;

                                if(upload_resp.success == 'Yes'){

                                    toastr.success(upload_resp.msg);
                                    // $file_link.val(upload_resp.file);
                                    $('#file_link_image').val(upload_resp.file);


                                }
                                else{
                                    toastr.error(upload_resp.msg);
                                }


                            });

                        },
                        touch: false,
                        autoFocus: false,
                    },
                });
            });

            $modal.on('click', '#update', function(event){
                event.preventDefault();
                $.post(base_url + 'ps/edit-post/', $('#edit_form').serialize(), function(data){
                    if ($.isNumeric(data)) {

                        location.reload();
                    }
                    else {

                        toastr.error(data);

                    }

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
