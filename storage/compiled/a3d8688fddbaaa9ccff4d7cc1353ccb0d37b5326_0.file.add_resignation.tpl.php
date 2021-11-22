<?php
/* Smarty version 3.1.39, created on 2021-06-29 08:38:26
  from '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/add_resignation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db1442f315e9_37216115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3d8688fddbaaa9ccff4d7cc1353ccb0d37b5326' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/add_resignation.tpl',
      1 => 1612523407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db1442f315e9_37216115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210673023760db1442f245a3_24883600', "head");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196591978660db1442f26274_62223828', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49756431160db1442f30d38_57497377', "script");
?>



<?php }
/* {block "head"} */
class Block_210673023760db1442f245a3_24883600 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_210673023760db1442f245a3_24883600',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;

        }
        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, {
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
class Block_196591978660db1442f26274_62223828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_196591978660db1442f26274_62223828',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row mb-3">




        <div class="col-md-12">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/training" class="btn btn-primary add_event waves-effect waves-light">Trainings</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/add-trainer" class="btn btn-primary add_event waves-effect waves-light">Add Trainer</a>
                                    
        </div>



    </div>

    <div class="row">



        <div class="col-md-9">



            <div class="card">

                <div class="card-body">
                    <h2 class="h2">New Resignation</h2>
                    <hr>


                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/add-resignation-save">
                        <?php if ($_smarty_tpl->tpl_vars['selected_resignation']->value) {?>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['selected_resignation']->value->id;?>
">
                        <?php }?>

                        <div class="row">


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Related"><span class="h5"><span class="h6">Employee</span></span></label>
                                    <select name="employee_id" id="related"  class="form-control">



                                        <option value="0">None</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employees']->value, 'employee');
$_smarty_tpl->tpl_vars['employee']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employee']->value) {
$_smarty_tpl->tpl_vars['employee']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->id;?>
"

                                                    <?php if ($_smarty_tpl->tpl_vars['selected_resignation']->value) {?>

                                                        <?php if ($_smarty_tpl->tpl_vars['selected_resignation']->value->employee_id === $_smarty_tpl->tpl_vars['employee']->value->id) {?>
                                                            selected
                                                        <?php }?>

                                                    <?php }?>

                                            ><?php echo $_smarty_tpl->tpl_vars['employee']->value->name;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    </select>


                                </div>


                            </div>



                        </div>




                        <div class="row mt-3 " id="start_time_container">
                            <div class="col-md-6">
                                <label for="startdate"> <span class="h5">Notice Date</span></label>
                                <input class="form-control" name="notice_date"
                                        <?php if ($_smarty_tpl->tpl_vars['selected_resignation']->value) {?>
                                            value="<?php echo $_smarty_tpl->tpl_vars['selected_resignation']->value->notice_date;?>
"
                                        <?php } else { ?>
                                            value="<?php echo date('Y-m-d 12:00:00',strtotime('+1 day'));?>
"
                                        <?php }?>
                                       value="<?php echo date('Y-m-d');?>
"  id="notice_date" data-date-format="yyyy-mm-dd" data-auto-close="true">


                            </div>
                            <div class="col-md-6">
                                <label for="enddate"><span class="h5">Resignation</span></label>
                                <input class="form-control" name="resignation_date" id="resignation_date"
                                        <?php if ($_smarty_tpl->tpl_vars['selected_resignation']->value) {?>
                                            value="<?php echo $_smarty_tpl->tpl_vars['selected_resignation']->value->resignation_date;?>
"
                                        <?php } else { ?>
                                            value="<?php echo date('Y-m-d 13:00:00',strtotime('+1 day'));?>
"
                                        <?php }?>

                                       data-date-format="yyyy-mm-dd" data-auto-close="true">

                            </div>
                        </div>




                        <div class="form-group mt-3">
                            <label for="contents"><span class="h6">Description</span></label>
                            <textarea class="form-control" rows="5" id="contents" name="description"><?php if ($_smarty_tpl->tpl_vars['selected_resignation']->value) {
echo $_smarty_tpl->tpl_vars['selected_resignation']->value->description;
}?></textarea>

                        </div>

                        <button class="btn btn-primary" type="submit">Save</button>

                    </form>


                </div>
            </div>
        </div>



    </div>



<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_49756431160db1442f30d38_57497377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_49756431160db1442f30d38_57497377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/flatpickr"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function () {
            let $notice_date = $("#notice_date");
            $notice_date.flatpickr({

                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });
            let $resignation_date = $("#resignation_date");
            $resignation_date.flatpickr({

                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });

            $("#event-type").select2();
            $("#owner").select2();
            $("#related").select2();
            $("#trainer").select2();
        });

        $('#contents').redactor(
            {
                minHeight: 200, // pixels
                plugins: ['fontcolor']
            }
        );
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
