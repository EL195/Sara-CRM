<?php
/* Smarty version 3.1.39, created on 2021-08-22 14:29:08
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/contacts_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6122977470b247_94310872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da335f83065c3429a67a37ad4dc4891271b2961e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/contacts_list.tpl',
      1 => 1629656946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6122977470b247_94310872 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_279948702612297746f0047_66906093', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_655472198612297746f5c80_57387888', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_245764353612297747087e2_14072684', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_279948702612297746f0047_66906093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_279948702612297746f0047_66906093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />
    <style>

        <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>

        <?php } else { ?>
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

        <?php }?>

    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_655472198612297746f5c80_57387888 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_655472198612297746f5c80_57387888',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-md-12">
            <div class="panel">

                <div class="panel-hdr">
                    <?php if ($_smarty_tpl->tpl_vars['type']->value == 'supplier') {?>
                        <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Suppliers'];?>
</h2>
                    <?php } else { ?>
                        <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Customers'];?>
</h2>
                    <?php }?>

                    <div class="panel-toolbar">
                        <div class="btn-group">

                            <?php if ($_smarty_tpl->tpl_vars['type']->value == 'supplier') {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/add/supplier" class="btn btn-sm btn-success"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Supplier'];?>
</a>
                                <?php } else { ?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/add/" class="btn btn-sm btn-success"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Customer'];?>
</a>
                            <?php }?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/import_csv/" class="btn btn-sm btn-warning"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Import'];?>
</a>
                        </div>



                    </div>
                </div>


                <div class="panel-container show">


                    <div class="panel-content">
                        <div class="table-responsive" id="ib_data_panel">


                            <table class="table table-striped w-100"  id="clx_datatable">
                                <thead
                                        <?php if (empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                                            style="background: #f0f2ff"

                                        <?php }?>
                                >
                                <tr class="heading">
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Image'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>

                                    <?php if ($_smarty_tpl->tpl_vars['show_company_column']->value) {?>

                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
</th>

                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['show_group_column']->value) {?>

                                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>
</th>

                                    <?php }?>


                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</th>
                                    <th class="text-right" style="width: 80px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>


                                </thead>


                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->iteration = 0;
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
$_smarty_tpl->tpl_vars['contact']->iteration++;
$__foreach_contact_0_saved = $_smarty_tpl->tpl_vars['contact'];
?>
                                    <tr>
                                        <td data-order="<?php echo $_smarty_tpl->tpl_vars['contact']->iteration;?>
">
                                           <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
"><?php echo sp_get_contact_image($_smarty_tpl->tpl_vars['contact']->value);?>
</a>
                                        </td>
                                        <td>
                                            <a class="h6" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
">
                                                <strong>
                                                    <?php echo $_smarty_tpl->tpl_vars['contact']->value->account;?>

                                                </strong>

                                                <?php if ($_smarty_tpl->tpl_vars['contact']->value->code) {?>
                                                    <br>
                                                    <?php echo $_smarty_tpl->tpl_vars['contact']->value->code;?>

                                                <?php }?>

                                            </a>
                                        </td>

                                        <?php if ($_smarty_tpl->tpl_vars['show_company_column']->value) {?>

                                            <td class="text-info h6">
                                                <?php echo $_smarty_tpl->tpl_vars['contact']->value->company;?>

                                            </td>

                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['show_group_column']->value) {?>

                                            <td class="text-info h6">
                                                <?php echo $_smarty_tpl->tpl_vars['contact']->value->gname;?>

                                            </td>

                                        <?php }?>

                                        <td class="text-info h6">
                                            <?php echo $_smarty_tpl->tpl_vars['contact']->value->email;?>

                                        </td>
                                        <td class="h6">
                                            <?php echo $_smarty_tpl->tpl_vars['contact']->value->phone;?>

                                        </td>
                                        <td>
                                            <div class="btn-group float-right">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
" class="btn btn-primary btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
" data-placement="top"><i class="fal fa-user-alt"></i> </a>

                                                <?php if ($_smarty_tpl->tpl_vars['has_edit_permission']->value) {?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
/edit/" class="btn btn-info btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
" data-placement="top"><i class="fal fa-pencil"></i> </a>
                                                <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['has_delete_permission']->value) {?>
                                                    <a href="#" onclick="confirmThenGoToUrl(event,'contacts/delete/<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
')"  class="btn btn-danger btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
" data-placement="top"><i class="fal fa-trash-alt"></i> </a>
                                                <?php }?>

                                            </div>
                                        </td>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['contact'] = $__foreach_contact_0_saved;
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
class Block_245764353612297747087e2_14072684 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_245764353612297747087e2_14072684',
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
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
