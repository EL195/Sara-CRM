<?php
/* Smarty version 3.1.39, created on 2021-02-20 15:00:33
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60316a61c62662_88077109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99e536f475685e09b949e7fe748575cf7d786c7c' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_list.tpl',
      1 => 1596221994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60316a61c62662_88077109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39566743260316a61c4b316_03645740', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9321210460316a61c4c150_82912249', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79601614660316a61c61d74_57632326', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_39566743260316a61c4b316_03645740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_39566743260316a61c4b316_03645740',
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
            color: #2CCE89!important;}
        .text-danger{
            color: #F6365B!important;
        }

    </style>


<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_9321210460316a61c4c150_82912249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9321210460316a61c4c150_82912249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="subheader">
        <h1 class="subheader-title">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <path d="M8.40093151,17 L5,17 C3.34314575,17 2,15.1568542 2,13.5 C2,11.8431458 3.34314575,10 5,10 L6,10 L6,8 L21,8 L21,11.5 C21,15.6421356 17.6421356,19 13.5,19 C11.5309185,19 9.73907026,18.2411745 8.40093151,17 Z M6.86504659,15 C6.38614142,14.0940164 6.08736465,13.0781211 6.01640228,12 L5,12 C4.44771525,12 4,12.9477153 4,13.5 C4,14.0522847 4.44771525,15 5,15 L6.86504659,15 Z" fill="#000000"/>
                        <rect fill="#000000" opacity="0.3" x="6" y="21" width="15" height="2" rx="1"/>
                        <path d="M8.11576273,0 L9.27322553,1.15267194 C8.41777098,2.01168201 8.42065331,3.40153019 9.27966338,4.25698473 C9.35322262,4.3302395 9.4318859,4.39818368 9.51506091,4.46030566 L10,4.82249831 L9.02250371,6.13126634 L8.53756462,5.76907368 C8.39249331,5.66072242 8.25529121,5.54221626 8.12699144,5.41444753 C6.62873232,3.92238985 6.62370505,1.49825912 8.11576273,0 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                        <path d="M13.1157627,1 L14.2732255,2.15267194 C13.417771,3.01168201 13.4206533,4.40153019 14.2796634,5.25698473 C14.3532226,5.3302395 14.4318859,5.39818368 14.5150609,5.46030566 L15,5.82249831 L14.0225037,7.13126634 L13.5375646,6.76907368 C13.3924933,6.66072242 13.2552912,6.54221626 13.1269914,6.41444753 C11.6287323,4.92238985 11.6237051,2.49825912 13.1157627,1 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                        <path d="M18.1157627,0 L19.2732255,1.15267194 C18.417771,2.01168201 18.4206533,3.40153019 19.2796634,4.25698473 C19.3532226,4.3302395 19.4318859,4.39818368 19.5150609,4.46030566 L20,4.82249831 L19.0225037,6.13126634 L18.5375646,5.76907368 C18.3924933,5.66072242 18.2552912,5.54221626 18.1269914,5.41444753 C16.6287323,3.92238985 16.6237051,1.49825912 18.1157627,0 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                    </g>
                </svg>

            Projects <span class='fw-300'></span>
        </h1>
        <div class="subheader-block d-lg-flex align-items-center">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/project" class="btn btn-primary">Create New Project</a>
        </div>

    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="tabs-container">



                <div class="row">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'project');
$_smarty_tpl->tpl_vars['project']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['project']->do_else = false;
?>

                        <div class="col-lg-4">

                            <div class="panel">

                                <div class="panel-container">



                                        <div class="panel-content">

                                            <div class="d-flex justify-content-between">
                                                <h3><span class="h4"><?php echo $_smarty_tpl->tpl_vars['project']->value->name;?>
</span></h3>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <circle fill="#000000" cx="12" cy="5" r="2"/>
                                                                <circle fill="#000000" cx="12" cy="12" r="2"/>
                                                                <circle fill="#000000" cx="12" cy="19" r="2"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" style="">

                                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/view/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</a>

                                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/project/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
projects/delete/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>

                                                    </div>
                                                </div>
                                            </div>



                                            <p class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                                        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 L7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                                                    </g>
                                                </svg>
                                                <?php if ($_smarty_tpl->tpl_vars['project']->value->contact_id && (isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['project']->value->contact_id]))) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['project']->value->contact_id]->account;?>

                                                <?php }?></p>


                                            <?php if ($_smarty_tpl->tpl_vars['project']->value->status == 'Completed') {?>
                                                <span class="badge badge-outline text-uppercase badge-outline-success mb-4"><?php echo $_smarty_tpl->tpl_vars['project']->value->status;?>
</span>
                                                <?php } else { ?>
                                                <span class="badge badge-outline text-uppercase badge-outline-danger mb-4"><?php echo $_smarty_tpl->tpl_vars['project']->value->status;?>
</span>
                                            <?php }?>




                                            <?php if ($_smarty_tpl->tpl_vars['project']->value->budget) {?>
                                                <p class="mb-2">Budget: <span><?php echo formatCurrency($_smarty_tpl->tpl_vars['project']->value->budget,$_smarty_tpl->tpl_vars['project']->value->currency);?>
</span></p>
                                            <?php }?>




                                            <p class="text-muted mb-4"><?php echo $_smarty_tpl->tpl_vars['project']->value->summary;?>
</p>


                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="mb-2">
                                                        <i class="fal fa-calendar"></i> <strong><span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Start Date'];?>
</span></strong>
                                                    </div>
                                                    <span class="badge badge-outline text-uppercase badge-outline-success"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['project']->value->start_date));?>
</span>
                                                </div>
                                                <div class="col">
                                                    <div class="mb-2">
                                                        <i class="fal fa-calendar"></i> <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</strong>
                                                    </div>
                                                    <span class="badge badge-outline text-uppercase badge-outline-danger"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['project']->value->due_date));?>
</span>
                                                </div>
                                            </div>



                                            <?php if ($_smarty_tpl->tpl_vars['project']->value->members) {?>
                                                <div class="fs-sm d-flex align-items-center my-3">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['project']->value->members), 'member');
$_smarty_tpl->tpl_vars['member']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->do_else = false;
?>
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['member']->value]))) {?>
                                                            <a href="javascript:;" class="btn-m-s user-stacked">

                                                                <?php if ($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['member']->value]->img) {?>
                                                                    <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/<?php ob_start();
echo $_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['member']->value]->img;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" class="profile-image rounded-circle" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['member']->value]->fullname;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
">
                                                                <?php } else { ?>
                                                                    <span class="clx-avatar"><?php echo sp_get_contact_image($_smarty_tpl->tpl_vars['staffs']->value[$_smarty_tpl->tpl_vars['member']->value]);?>
</span>
                                                                <?php }?>

                                                            </a>
                                                        <?php }?>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </div>
                                            <?php }?>


                                            <?php if ((isset($_smarty_tpl->tpl_vars['tasks_status']->value[$_smarty_tpl->tpl_vars['project']->value->id]))) {?>

                                                <p class="mb-2 font-weight-semibold"><?php echo round(($_smarty_tpl->tpl_vars['tasks_status']->value[$_smarty_tpl->tpl_vars['project']->value->id]['completed']*100)/$_smarty_tpl->tpl_vars['tasks_status']->value[$_smarty_tpl->tpl_vars['project']->value->id]['total']);?>
% <?php echo $_smarty_tpl->tpl_vars['_L']->value['tasks completed'];?>
. <span class="float-right">
                                                    <?php echo $_smarty_tpl->tpl_vars['tasks_status']->value[$_smarty_tpl->tpl_vars['project']->value->id]['completed'];?>
/<?php echo $_smarty_tpl->tpl_vars['tasks_status']->value[$_smarty_tpl->tpl_vars['project']->value->id]['total'];?>
</span></p>


                                                <div class="progress mb-3" style="height: 7px;">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($_smarty_tpl->tpl_vars['tasks_status']->value[$_smarty_tpl->tpl_vars['project']->value->id]['completed']*100)/$_smarty_tpl->tpl_vars['tasks_status']->value[$_smarty_tpl->tpl_vars['project']->value->id]['total']);?>
%;">
                                                    </div>
                                                </div>

                                            <?php }?>










                                        </div>




                                </div>



                            </div>

                        </div>

                        <?php
}
if ($_smarty_tpl->tpl_vars['project']->do_else) {
?>

                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>
</h2>
                                </div>
                            </div>
                        </div>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                </div>































            </div>
        </div>
    </div>


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_79601614660316a61c61d74_57632326 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_79601614660316a61c61d74_57632326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <?php echo '<script'; ?>
>


        $(function () {




        });

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
