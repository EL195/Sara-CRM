<?php
/* Smarty version 3.1.39, created on 2021-06-29 08:38:46
  from '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/trip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db1456735357_65810415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e6b2c67b4044745bf9331e96f3cb29aa63a6e90' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/trip.tpl',
      1 => 1611676111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db1456735357_65810415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158016415460db145672ae81_88637725', "head_extras_from_layout");
?>






<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88535069060db145672c921_93028169', "content");
?>







<?php }
/* {block "head_extras_from_layout"} */
class Block_158016415460db145672ae81_88637725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_extras_from_layout' => 
  array (
    0 => 'Block_158016415460db145672ae81_88637725',
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
class Block_88535069060db145672c921_93028169 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_88535069060db145672c921_93028169',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row mb-3">



        <div class="col-md-12">



            <div class="card">
                <div class="card-body">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/add-trip" class="btn btn-primary add_event waves-effect waves-light">Add Trip</a>


                </div>

            </div>
        </div>



    </div>

    <div class="row">



        <div class="col-md-12">



            <div class="card">

                <div class="card-body">



                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="h6 text-muted">Employee</th>
                                <th class="h6 text-muted">Purpose</th>
                                <th class="h6 text-muted">Place</th>
                                <th class="h6 text-muted">Start</th>
                                <th class="h6 text-muted">End</th>
                                <th class="h6 text-muted">Description</th>


                                <th class="text-right bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trips']->value, 'trip');
$_smarty_tpl->tpl_vars['trip']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['trip']->value) {
$_smarty_tpl->tpl_vars['trip']->do_else = false;
?>
                                <tr>
                                    <td>


                                        <?php if ((isset($_smarty_tpl->tpl_vars['employees']->value[$_smarty_tpl->tpl_vars['trip']->value->employee_id]))) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['employees']->value[$_smarty_tpl->tpl_vars['trip']->value->employee_id]->name;?>

                                        <?php }?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['trip']->value->purpose;?>



                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['trip']->value->place;?>


                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['trip']->value->start_time;?>


                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['trip']->value->end_time;?>


                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['trip']->value->description;?>


                                    </td>

                                    <td class="text-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/edit-trip/<?php echo $_smarty_tpl->tpl_vars['trip']->value->id;?>
" class="btn btn-info">Edit</a>
                                        <a href=""  onclick="confirmThenGoToUrl(event,'a-hrm/app/delete-trip/<?php echo $_smarty_tpl->tpl_vars['trip']->value->id;?>
')" class="btn btn-danger">Delete</a>
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
}
