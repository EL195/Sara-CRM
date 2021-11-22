<?php
/* Smarty version 3.1.39, created on 2021-08-22 14:58:10
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/assets_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61229e42081b71_77071235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c67c42c822f80231addd6c7b197d90df2ed52e59' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/assets_list.tpl',
      1 => 1629658686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61229e42081b71_77071235 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110389190961229e4206aed1_01529311', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159797147361229e4206e003_83757571', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85735766261229e4207ae08_99919665', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_110389190961229e4206aed1_01529311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_110389190961229e4206aed1_01529311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />
    <style>
        <?php if (empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }
        <?php }?>

    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_159797147361229e4206e003_83757571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_159797147361229e4206e003_83757571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-lg-3">
            <div class="card border m-lg-0 mb-3">
                <div class="card-body">
                    <h2 class="card-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Assets'];?>
</h2>
                    <div class="hr-line-dashed"></div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
assets/asset" class="btn btn-primary btn-block add_asset"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add an asset'];?>
</a>


                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
assets/list"><i class="fal fa-folder"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['All categories'];?>
</a></li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                        <li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
assets/list/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"><i class="fal fa-folder"></i> <?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</a></li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <div class="card-body mb-3">
                    <?php if ($_smarty_tpl->tpl_vars['selected_category']->value) {?>
                        <a href="javascript:;" id="btnNewCategory" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New category'];?>
</a>
                        <a href="javascript:;" onclick="confirmThenGoToUrl(event,'delete/asset-category/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
');" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                    <?php } else { ?>
                        <a href="javascript:;" id="btnNewCategory" class="btn btn-primary btn-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New category'];?>
</a>
                    <?php }?>
                </div>
            </div>




        </div>
        <div class="col-lg-9">

            <div class="panel mb-3">
                <div class="panel-container">
                    <div class="panel-content">

                        <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
: <span class="amount"><?php echo $_smarty_tpl->tpl_vars['assets_value']->value;?>
</span></h3>

                        <div class="hr-line-dashed"></div>

                        <div class="table-responsive">
                            <table class="table table-striped" id="clx_datatable">
                                <thead style="background: #f0f2ff">
                                <tr>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date purchased'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Supported until'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assets']->value, 'asset');
$_smarty_tpl->tpl_vars['asset']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['asset']->value) {
$_smarty_tpl->tpl_vars['asset']->do_else = false;
?>
                                    <tr>
                                        <td  data-value="<?php echo $_smarty_tpl->tpl_vars['asset']->value->id;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
assets/asset/<?php echo $_smarty_tpl->tpl_vars['asset']->value->id;?>
"><strong><?php echo $_smarty_tpl->tpl_vars['asset']->value->name;?>
</strong></a> </td>
                                        <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['asset']->value->date_purchased));?>
</td>
                                        <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['asset']->value->supported_until));?>
</td>
                                        <td class="amount"><?php echo $_smarty_tpl->tpl_vars['asset']->value->price;?>
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
/* {block 'script'} */
class Block_85735766261229e4207ae08_99919665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_85735766261229e4207ae08_99919665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
>


        $(function() {

            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
                    dom:
                    /*	--- Layout Structure
                        --- Options
                        l	-	length changing input control
                        f	-	filtering input
                        t	-	The table!
                        i	-	Table information summary
                        p	-	pagination control
                        r	-	processing display element
                        B	-	buttons
                        R	-	ColReorder
                        S	-	Select

                        --- Markup
                        < and >				- div element
                        <"class" and >		- div with a class
                        <"#id" and >		- div with an ID
                        <"#id.class" and >	- div with an ID and a class

                        --- Further reading
                        https://datatables.net/reference/option/dom
                        --------------------------------------
                     */
                        "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        /*{
                        	extend:    'colvis',
                        	text:      'Column Visibility',
                        	titleAttr: 'Col visibility',
                        	className: 'mr-sm-3'
                        },*/
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF',
                            titleAttr: 'Generate PDF',
                            className: 'btn-danger btn-sm mr-1'
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Excel',
                            titleAttr: 'Generate Excel',
                            className: 'btn-success btn-sm mr-1'
                        },
                        {
                            extend: 'csvHtml5',
                            text: 'CSV',
                            titleAttr: 'Generate CSV',
                            className: 'btn-primary btn-sm mr-1'
                        },
                        {
                            extend: 'copyHtml5',
                            text: 'Copy',
                            titleAttr: 'Copy to clipboard',
                            className: 'btn-dark btn-sm mr-1'
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            titleAttr: 'Print Table',
                            className: 'btn-secondary btn-sm'
                        }
                    ],
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

            $('.has-tooltip').tooltip();

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

            $('#btnNewCategory').click(function (e) {
                e.preventDefault();


                bootbox.prompt({
                    title: "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Category Name'];?>
",
                    buttons: {
                        'cancel': {
                            label: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
'
                        },
                        'confirm': {
                            label: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['OK'];?>
'
                        }
                    },
                    callback: function(result) {
                        if (result === null) {

                        } else {
                            $.post( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
assets/category-post", { category: result } ).done(function() {
                                location.reload();
                            });
                        }
                    }
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
