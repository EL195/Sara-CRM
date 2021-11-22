<?php
/* Smarty version 3.1.39, created on 2021-06-29 08:37:03
  from '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db13ef5d6cd9_03654506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26b74b56be907a869e6bb95becb8f9c70d4c454e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/dashboard.tpl',
      1 => 1617100257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db13ef5d6cd9_03654506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168236277460db13ef59b839_76730871', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4851286360db13ef59e985_63630037', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172848457760db13ef5d6304_84457228', 'script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_168236277460db13ef59b839_76730871 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_168236277460db13ef59b839_76730871',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


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
            color: #2CCE89!important;
        }

        .icon-shape {
            padding: 12px;
            text-align: center;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        .icon {
            width: 3rem;
            height: 3rem;
        }

        .text-white {
            color: #fff !important;
        }
        .shadow {
            box-shadow: 0 0 2rem 0 rgba(136, 152, 170, 0.15) !important;
        }
        .rounded-circle, .avatar.rounded-circle img {
            border-radius: 50% !important;
        }
        .bg-gradient-red {
            background: linear-gradient(
                    87deg
                    , #f5365c 0, #f56036 100%) !important;
        }

        .bg-gradient-success {
            background: linear-gradient(
                    87deg
                    , #2dce89 0, #2dcecc 100%) !important;
        }
        .bg-gradient-info {
            background: linear-gradient(
                    87deg
                    , #11cdef 0, #1171ef 100%) !important;
        }

        .bg-gradient-blue {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(7,13,46,1) 0%, rgba(41,20,110,1) 44%, rgba(35,10,112,1) 50%, rgba(69,28,144,1) 100%, rgba(215,246,247,1) 100%); !important;

        }
        .bg-gradient-pink {
            background: linear-gradient(90deg, rgba(10,6,68,1) 0%, rgba(204,147,5,1) 0%, rgba(189,123,10,1) 100%, rgba(237,227,200,1) 100%, rgba(240,133,219,1) 100%, rgba(215,246,247,1) 100%);

        }






    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_4851286360db13ef59e985_63630037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4851286360db13ef59e985_63630037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




            <div class="row">
                <div class="col-md-3">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Employees</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo $_smarty_tpl->tpl_vars['total_employees']->value;?>
</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="fal fa-user fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Departments</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo $_smarty_tpl->tpl_vars['total_departments']->value;?>
</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                                        <i class="fal fa-home fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Designations</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo $_smarty_tpl->tpl_vars['designations']->value;?>
</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                                        <i class="fal fa-badge-sheriff fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Trainers</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo $_smarty_tpl->tpl_vars['trainers']->value;?>
</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                        <i class="fal fa-users fa-2x"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

    <div class="row mt-3">



        <div class="col-md-8">

            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="mb-0 ">New Employees</h3>
                </div>

                <div class="card-body">



                    <table class="table table-striped w-100"  id="clx_datatable"">
                    <thead>
                    <tr class="heading">
                        <th  class="text-muted h6">Employee</th>
                        <th  class="text-muted h6">Job Title</th>
                        <th class="text-muted h6">Salary</th>
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


                       </td>
                <td class="h6">
                    <div class="col">
                        <div class="row h5">
                            <?php if ((isset($_smarty_tpl->tpl_vars['designations']->value[$_smarty_tpl->tpl_vars['employee']->value->designation]))) {?>
                                <?php echo $_smarty_tpl->tpl_vars['designations']->value[$_smarty_tpl->tpl_vars['employee']->value->designation]->title;?>

                            <?php }?>
                        </div>
                        <div class="row h5 text-muted">
                            <?php echo $_smarty_tpl->tpl_vars['employee']->value->country;?>

                        </div>


                    </div>


                </td>

                <td>
                    <div class="col">
                        <div class="row h5">
                            <?php echo $_smarty_tpl->tpl_vars['employee']->value->salary;?>

                        </div>
                        <div class="row h5 text-muted">
                            <?php echo $_smarty_tpl->tpl_vars['employee']->value->pay_frequency;?>

                        </div>

                    </div>

                </td>
                <td class="text-info h5"><?php echo $_smarty_tpl->tpl_vars['employee']->value->date_joined;?>
</td>
                <td>
                    <div class="float-right">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/view/<?php echo $_smarty_tpl->tpl_vars['employee']->value->id;?>
" class="btn btn-primary  btn-sm btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
" data-placement="top"><i class="fal fa-user-alt"></i> </a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/edit-employee/<?php echo $_smarty_tpl->tpl_vars['employee']->value->id;?>
" class="btn  btn-sm btn-info btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
" data-placement="top"><i class="fal fa-pencil"></i> </a>
                        <a href="#" onclick="confirmThenGoToUrl(event,'a-hrm/app/delete-employee/<?php echo $_smarty_tpl->tpl_vars['employee']->value->id;?>
')" class="btn btn-danger btn-sm btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
" data-placement="top"><i class="fal fa-trash-alt"></i> </a>
                    </div>
                </td>


                </tr>


                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </tbody>
                </table>

            </div>
        </div><!-- COL END -->


    </div>



</div>
    <div class="row mt-3">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="mb-0">Leaves</h3>
                </div>

                <div class="card-body">



                    <table class="table table-striped w-100"  id="clx_datatable">
                        <thead>
                        <tr class="heading">
                            <th  class="text-muted h6">Image</th>
                            <th  class="text-muted h6">Employee</th>
                            <th  class="text-muted h6">Leave Type</th>
                            <th  class="text-muted h6">Date</th>
                            <th  class="text-muted h6">Status</th>
                            <th  class="text-muted h6 text-right">Manage</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leaves']->value, 'leave');
$_smarty_tpl->tpl_vars['leave']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['leave']->value) {
$_smarty_tpl->tpl_vars['leave']->do_else = false;
?>
                            <tr>

                                <td>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['employees']->value[$_smarty_tpl->tpl_vars['leave']->value->employee_id]))) {?>


                                        <?php if (!empty($_smarty_tpl->tpl_vars['employees']->value[$_smarty_tpl->tpl_vars['leave']->value->employee_id]->image)) {?>
                                            <img alt="image" class="clx-avatar" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/employees/<?php echo $_smarty_tpl->tpl_vars['employees']->value[$_smarty_tpl->tpl_vars['leave']->value->employee_id]->image;?>
">
                                        <?php } else { ?>



                                            <span class="clx-avatar"><?php echo $_smarty_tpl->tpl_vars['employees']->value[$_smarty_tpl->tpl_vars['leave']->value->employee_id]['name'][0];
echo $_smarty_tpl->tpl_vars['employees']->value[$_smarty_tpl->tpl_vars['leave']->value->employee_id]['name'][1];?>
</span>

                                        <?php }?>


                                    <?php }?>






                                </td>
                                <td class="h6">

                                    <?php if ((isset($_smarty_tpl->tpl_vars['employees']->value[$_smarty_tpl->tpl_vars['leave']->value->employee_id]))) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['employees']->value[$_smarty_tpl->tpl_vars['leave']->value->employee_id]->name;?>

                                    <?php }?>

                                </td>
                                <td class="h6">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['leave_type']->value[$_smarty_tpl->tpl_vars['leave']->value->type_id]))) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['leave_type']->value[$_smarty_tpl->tpl_vars['leave']->value->type_id]->title;?>

                                    <?php }?>


                                </td>

                                <td class="h6">
                                    <?php echo $_smarty_tpl->tpl_vars['leave']->value->date;?>


                                </td>
                                <td class="text-info h5"></td>
                                <td>
                                    <div class=" float-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/view-leave/<?php echo $_smarty_tpl->tpl_vars['leave']->value->id;?>
" class="btn  btn-sm btn-primary btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
" data-placement="top"><i class="fal fa-user-alt"></i> </a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/edit-leave/<?php echo $_smarty_tpl->tpl_vars['leave']->value->id;?>
" class="btn btn-sm btn-info btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
" data-placement="top"><i class="fal fa-pencil"></i> </a>

                                        <a href="#" onclick="confirmThenGoToUrl(event,'a-hrm/app/delete-leave/<?php echo $_smarty_tpl->tpl_vars['leave']->value->id;?>
')" class="btn btn-sm btn-danger btn-icon waves-effect waves-themed has-tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
" data-placement="top"><i class="fal fa-trash-alt"></i> </a>
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
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="mb-0"> Recent Notices</h3>
                </div>

                <div class="card-body">



                    <div class="table-responsive">
                        <table class="table table-striped table-light">
                            <thead>
                            <tr>
                                <th class="bold h6 text-muted">Title</th>
                                <th class="bold h6 text-muted">Date</th>

                                <th class="text-right text-muted bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notices']->value, 'notice');
$_smarty_tpl->tpl_vars['notice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notice']->value) {
$_smarty_tpl->tpl_vars['notice']->do_else = false;
?>

                                <tr>
                                    <td class="h6">
                                        <?php echo $_smarty_tpl->tpl_vars['notice']->value->title;?>



                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['notice']->value->date;?>





                                    </td>


                                    <td class="text-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/edit-notice-board/<?php echo $_smarty_tpl->tpl_vars['notice']->value->id;?>
" class="btn btn-icon btn-sm btn-info"><i class="fal fa-pencil-alt"></i> </a>

                                        <a href="#" onclick="confirmThenGoToUrl(event,'a-hrm/app/delete-notice-board/<?php echo $_smarty_tpl->tpl_vars['notice']->value->id;?>
')" class="btn btn-icon btn-sm btn-danger"><i class="fal fa-trash-alt"></i></a>
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


        </div><!-- COL END -->


    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_172848457760db13ef5d6304_84457228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_172848457760db13ef5d6304_84457228',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
