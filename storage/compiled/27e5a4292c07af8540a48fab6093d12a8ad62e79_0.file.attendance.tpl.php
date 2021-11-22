<?php
/* Smarty version 3.1.39, created on 2021-06-29 08:37:39
  from '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/attendance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db14135bea62_48343865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27e5a4292c07af8540a48fab6093d12a8ad62e79' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/attendance.tpl',
      1 => 1611756097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db14135bea62_48343865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155963883560db14135b18f9_73242720', "head_extras_from_layout");
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25351484160db14135b3193_55911228', "content");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103114431260db14135bdd10_92480842', "script");
?>





s<?php }
/* {block "head_extras_from_layout"} */
class Block_155963883560db14135b18f9_73242720 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_extras_from_layout' => 
  array (
    0 => 'Block_155963883560db14135b18f9_73242720',
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
class Block_25351484160db14135b3193_55911228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_25351484160db14135b3193_55911228',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>















    <div class="row mb-3">



        <div class="col-md-12">



            <div class="card">
                <div class="card-body">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/timesheet" class="btn btn-primary add_event waves-effect waves-light">Time Sheet</a>



                </div>

            </div>
        </div>



    </div>


    <div class="row">



        <div class="col-md-12">



            <div class="card">

                <div class="card-body">



                    <div class="table-responsive">
                        <table class="table table-striped w-100" id="clx_datatable">
                            <thead>
                            <tr>
                                <th class="bold h6 text-muted">Employee</th>
                                <th class="bold h6 text-muted">Date</th>
                                <th class="bold h6 text-muted">Status</th>
                                <th class="bold h6 text-muted">Clock In</th>

                                <th class="bold h6 text-muted">Clock Out</th>
                                <th class="bold h6 text-muted">Clock In IP</th>
                                <th class="bold h6 text-muted">Clock Out IP</th>

                                <th class="bold h6 text-muted text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timesheets']->value, 'timesheet');
$_smarty_tpl->tpl_vars['timesheet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['timesheet']->value) {
$_smarty_tpl->tpl_vars['timesheet']->do_else = false;
?>

                                <tr>
                                    <td class="h6">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['employees']->value[$_smarty_tpl->tpl_vars['timesheet']->value->employee_id]))) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['employees']->value[$_smarty_tpl->tpl_vars['timesheet']->value->employee_id]->name;?>

                                        <?php }?>
                                    </td>
                                    <td>
                                       <?php echo date('D m Y',strtotime($_smarty_tpl->tpl_vars['timesheet']->value->clockin_time));?>

                                    </td>
                                    <td></td>
                                    <td class="h6 text-success"><?php echo $_smarty_tpl->tpl_vars['timesheet']->value->clockin_time;?>
</td>
                                    <td class="h6 text-danger"><?php echo $_smarty_tpl->tpl_vars['timesheet']->value->clockout_time;?>
</td>
                                    <td class="h6"><?php echo $_smarty_tpl->tpl_vars['timesheet']->value->clockin_ip;?>
</td>
                                    <td class="h6"><?php echo $_smarty_tpl->tpl_vars['timesheet']->value->clockout_ip;?>
</td>


                                    <td class="text-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/edit-employee/" class="btn btn-info btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
" data-placement="top"><i class="fal fa-pencil"></i> </a>
                                        <a href="#" onclick="confirmThenGoToUrl(event,'a-hrm/app/delete-employee/')" class="btn btn-danger btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
" data-placement="top"><i class="fal fa-trash-alt"></i> </a>
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




<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_103114431260db14135bdd10_92480842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_103114431260db14135bdd10_92480842',
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
