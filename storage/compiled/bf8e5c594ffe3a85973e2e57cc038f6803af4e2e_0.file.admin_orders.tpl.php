<?php
/* Smarty version 3.1.39, created on 2021-06-20 17:03:21
  from '/Users/razib/Documents/valet/business-suite/apps/freight/views/admin_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cfad195f2084_14262368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf8e5c594ffe3a85973e2e57cc038f6803af4e2e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/freight/views/admin_orders.tpl',
      1 => 1599974326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cfad195f2084_14262368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147461638260cfad195e65f4_38698435', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213981830260cfad195e80e2_83902483', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36206682860cfad195f1400_37870442', "script");
?>

<?php }
/* {block "head"} */
class Block_147461638260cfad195e65f4_38698435 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_147461638260cfad195e65f4_38698435',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />
    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;

        }
        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d;
        }


        .text-info{
            color: #6772E5!important;
        }
        .text-success{
            color: #2CCE89!important;}

        .text-danger{
            color: #F6365B!important;
        }
        .text-warning{
            color: #FB6340!important;
        }
        .text-primary{
            color: #10CDEF!important;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_213981830260cfad195e80e2_83902483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_213981830260cfad195e80e2_83902483',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-md-12">
            <div class="panel">

                <div class="panel-container show">


                    <div class="panel-content">
                        <div class="table-responsive" id="ib_data_panel">


                            <table class="table table-striped w-100"  id="clx_datatable">
                                <thead style="background: #f0f2ff">
                                <tr class="heading">
                                    <th>Order #</th>
                                    <th>Customer</th>

                                    <th>Date</th>
                                    <th>Status</th>
                                    <th class="text-right" style="width: 80px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>


                                </thead>


                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->iteration = 0;
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
$_smarty_tpl->tpl_vars['order']->iteration++;
$__foreach_order_0_saved = $_smarty_tpl->tpl_vars['order'];
?>
                                    <tr>
                                        <td data-order="<?php echo $_smarty_tpl->tpl_vars['order']->iteration;?>
">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
freight/view-order/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</a>
                                        </td>
                                        <td>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['order']->value->contact_id]))) {?>
                                                <a class="h6" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['order']->value->contact_id;?>
">
                                                    <strong>
                                                        <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['order']->value->contact_id]->account;?>

                                                    </strong>

                                                </a>
                                            <?php }?>
                                        </td>



                                        <td class="text-info h6">
                                            <?php echo $_smarty_tpl->tpl_vars['order']->value->date;?>

                                        </td>
                                        <td class="h6">
                                            <?php echo $_smarty_tpl->tpl_vars['order']->value->status;?>

                                        </td>
                                        <td>
                                            <div class="btn-group float-right">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
freight/admin/view-order/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" class="btn btn-primary btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
" data-placement="top"><i class="fal fa-list"></i> </a>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
freight/admin/order-pdf/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
/D" class="btn btn-primary btn-icon waves-effect waves-themed has-tooltip" data-title="Download PDF" data-placement="top"><i class="fal fa-download"></i> </a>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
freight/admin/order-pdf/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
/I/" target="_blank" class="btn btn-primary btn-icon waves-effect waves-themed has-tooltip" data-title="View PDF" data-placement="top"><i class="fal fa-file-pdf"></i> </a>
                                                <a href="#" onclick="confirmThenGoToUrl(event,'freight/admin/delete-order/<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
')"  class="btn btn-danger btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
" data-placement="top"><i class="fal fa-trash-alt"></i> </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['order'] = $__foreach_order_0_saved;
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
class Block_36206682860cfad195f1400_37870442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_36206682860cfad195f1400_37870442',
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
                    ]
                }
            );

            $('.has-tooltip').tooltip();
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
