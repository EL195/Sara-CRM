<?php
/* Smarty version 3.1.39, created on 2021-06-29 08:38:48
  from '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/add_trip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db1458005c82_57695662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08dd632bc0d56b627d47ff1a02714021639b1349' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/add_trip.tpl',
      1 => 1611675391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db1458005c82_57695662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54084162360db1457f364d7_80097803', "head");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202866869460db1457f39514_14510961', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118302219660db1458005371_93988085', "script");
?>



<?php }
/* {block "head"} */
class Block_54084162360db1457f364d7_80097803 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_54084162360db1457f364d7_80097803',
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
class Block_202866869460db1457f39514_14510961 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_202866869460db1457f39514_14510961',
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
                    <h2 class="h2">New Trip</h2>
                    <hr>


                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/add-trip-save">
                        <?php if ($_smarty_tpl->tpl_vars['selected_trip']->value) {?>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['selected_trip']->value->id;?>
">
                        <?php }?>

                        <div class="row">


                            <div class="col-md-6">
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

                                                    <?php if ($_smarty_tpl->tpl_vars['selected_trip']->value) {?>

                                                        <?php if ($_smarty_tpl->tpl_vars['selected_trip']->value->employee_id === $_smarty_tpl->tpl_vars['employee']->value->id) {?>
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


                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title"><span class="h5">Purpose of Visit</span></label>
                                    <input class="form-control" name="purpose" id="title"
                                            <?php if ($_smarty_tpl->tpl_vars['selected_trip']->value) {?>
                                                value="<?php echo $_smarty_tpl->tpl_vars['selected_trip']->value->type;?>
"
                                            <?php }?>
                                    >
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title"><span class="h5">Place</span></label>
                                    <input class="form-control" name="place" id="title"
                                            <?php if ($_smarty_tpl->tpl_vars['selected_trip']->value) {?>
                                                value="<?php echo $_smarty_tpl->tpl_vars['selected_trip']->value->cost;?>
"
                                            <?php }?>
                                    >
                                </div>


                            </div>
                        </div>







                        <div class="row mt-3 " id="start_time_container">
                            <div class="col-md-6">
                                <label for="startdate"> <span class="h5">Start</span></label>
                                <input class="form-control" name="start_time"
                                        <?php if ($_smarty_tpl->tpl_vars['selected_trip']->value) {?>
                                            value="<?php echo $_smarty_tpl->tpl_vars['selected_trip']->value->start_time;?>
"
                                        <?php } else { ?>
                                            value="<?php echo date('Y-m-d 12:00:00',strtotime('+1 day'));?>
"
                                        <?php }?>
                                       value="<?php echo date('Y-m-d');?>
"  id="start_time" data-date-format="yyyy-mm-dd" data-auto-close="true">


                            </div>
                            <div class="col-md-6">
                                <label for="enddate"><span class="h5">End</span></label>
                                <input class="form-control" name="end_time" id="end_time"
                                        <?php if ($_smarty_tpl->tpl_vars['selected_trip']->value) {?>
                                            value="<?php echo $_smarty_tpl->tpl_vars['selected_trip']->value->end_time;?>
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
                            <textarea class="form-control" rows="5" id="contents" name="description"><?php if ($_smarty_tpl->tpl_vars['selected_trip']->value) {
echo $_smarty_tpl->tpl_vars['selected_trip']->value->description;
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
class Block_118302219660db1458005371_93988085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_118302219660db1458005371_93988085',
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
            let $start_time = $("#start_time");
            $start_time.flatpickr({

                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });
            let $end_time = $("#end_time");
            $end_time.flatpickr({

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
