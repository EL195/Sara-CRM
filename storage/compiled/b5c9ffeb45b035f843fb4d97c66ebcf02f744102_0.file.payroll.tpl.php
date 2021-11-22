<?php
/* Smarty version 3.1.39, created on 2021-06-29 08:37:45
  from '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/payroll.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db14193465f7_07491487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5c9ffeb45b035f843fb4d97c66ebcf02f744102' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/payroll.tpl',
      1 => 1612474409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db14193465f7_07491487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192375776660db1419339a45_68478814', "head_extras_from_layout");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134910595460db141933b3c4_64578165', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165239697260db1419345584_89091018', "script");
?>








<?php }
/* {block "head_extras_from_layout"} */
class Block_192375776660db1419339a45_68478814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_extras_from_layout' => 
  array (
    0 => 'Block_192375776660db1419339a45_68478814',
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
/* {/block "head_extras_from_layout"} */
/* {block "content"} */
class Block_134910595460db141933b3c4_64578165 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_134910595460db141933b3c4_64578165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row mb-3">



        <div class="col-md-12">



            <div class="card">
                <div class="card-body">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/add" class="btn btn-primary add_event waves-effect waves-light">Add Employee</a>

                </div>

            </div>
        </div>



    </div>

    <div class="row">



        <div class="col-md-12">



            <div class="card">

                <div class="card-body">



                    <table class="table table-striped w-100"  id="clx_datatable"">
                    <thead>
                    <tr class="heading">
                        <th  class="text-muted h6">Employee</th>
                        <th  class="text-muted h6">Department</th>
                        <th class="text-muted h6">Designation</th>
                        <th  class="text-muted h6">Date Joined</th>
                        <th  class="text-muted h6 text-right">Manage</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employees']->value, 'employee');
$_smarty_tpl->tpl_vars['employee']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employee']->value) {
$_smarty_tpl->tpl_vars['employee']->do_else = false;
?>
                    <tr>

                        <td>
                            <div class="row">
                                <div class=" mr-3 ml-3 " ">


                                <?php if ($_smarty_tpl->tpl_vars['employee']->value->image) {?>
                                    <img alt="image" class="clx-avatar" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/employees/<?php echo $_smarty_tpl->tpl_vars['employee']->value->image;?>
">
                                <?php } else { ?>

                                    <span class="clx-avatar"><?php echo $_smarty_tpl->tpl_vars['employee']->value['name'][0];
echo $_smarty_tpl->tpl_vars['employee']->value['name'][1];?>
</span>

                                <?php }?>


                            </div>
                            <div class="col">
                                <div class="row h5">
                                    <?php echo $_smarty_tpl->tpl_vars['employee']->value->name;?>

                                </div>
                                <div class="row h5 text-muted">
                                    <?php echo $_smarty_tpl->tpl_vars['employee']->value->email;?>

                                </div>

                            </div>

                </div>



                                </td>
                <td class="h6">
                    <div class="col">
                        <div class="row h5">
                            <?php if ((isset($_smarty_tpl->tpl_vars['departments']->value[$_smarty_tpl->tpl_vars['employee']->value->department]))) {?>
                                <?php echo $_smarty_tpl->tpl_vars['departments']->value[$_smarty_tpl->tpl_vars['employee']->value->department]->title;?>

                            <?php }?>
                        </div>



                    </div>


                </td>

                <td>
                    <div class="col">
                        <div class="row h5">
                            <?php if ((isset($_smarty_tpl->tpl_vars['designations']->value[$_smarty_tpl->tpl_vars['employee']->value->designation]))) {?>
                                <?php echo $_smarty_tpl->tpl_vars['designations']->value[$_smarty_tpl->tpl_vars['employee']->value->designation]->title;?>

                            <?php }?>
                        </div>
                        <div class="row h5 text-muted">

                        </div>

                    </div>

                </td>
                <td class="text-info h5"><?php echo $_smarty_tpl->tpl_vars['employee']->value->date_joined;?>
</td>
                <td>
                    <div class="btn-group float-right">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/salary-setting/<?php echo $_smarty_tpl->tpl_vars['employee']->value->id;?>
" class="btn btn-primary  waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
" data-placement="top">Set Salary </a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/run-payroll/<?php echo $_smarty_tpl->tpl_vars['employee']->value->id;?>
" class="btn btn-info  waves-effect waves-themed has-tooltip"  data-placement="top">Run Payroll </a>

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




<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_165239697260db1419345584_89091018 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_165239697260db1419345584_89091018',
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
