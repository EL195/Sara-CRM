<?php
/* Smarty version 3.1.39, created on 2021-04-19 12:03:41
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_tasks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607da9dd55b515_92740364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db1f3ab4ce26a899f25202dfd6980b6485e6532f' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_tasks.tpl',
      1 => 1597096719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607da9dd55b515_92740364 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1320809466607da9dd508b66_72709125', "project_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1164704784607da9dd5580a0_19880918', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "project_base.tpl");
}
/* {block "project_content"} */
class Block_1320809466607da9dd508b66_72709125 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'project_content' => 
  array (
    0 => 'Block_1320809466607da9dd508b66_72709125',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="panel-hdr">
                <button class="btn btn-primary add_task"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Task'];?>
</button>
            </div>
            <div class="hr-line-dashed"></div>
        </div>
    </div>

    <div class="row">


        <div class="col-md-12" id="kanbanCanvas">

            <div style="overflow: auto;">

                <div style="min-width: 1545px; max-width: 1545px;">


                    <div class="panel panel-deep-orange kanban-col">
                        <div class="panel-hdr bg-danger-600">

                            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Not Started'];?>
</h2>

                        </div>

                        <div class="panel-body">
                            <div id="not_started" class="kanban-centered kanban-droppable-area">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks_not_started']->value, 'tns');
$_smarty_tpl->tpl_vars['tns']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tns']->value) {
$_smarty_tpl->tpl_vars['tns']->do_else = false;
?>
                                    <article class="kanban-entry cursor-move" id="item_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" class="v_item"><?php echo $_smarty_tpl->tpl_vars['tns']->value['title'];?>
</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">

                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['cid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['cid'] != '' && (isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account;?>

                                                            </div>

                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['tid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['tid'] != '' && (isset($_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: <?php echo $_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid;?>

                                                            </div>

                                                        <?php }?>



                                                        <img src="<?php echo getAdminImage($_smarty_tpl->tpl_vars['tns']->value['aid']);?>
" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="<?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>
"> <?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>



                                                    </div>


                                                    <div class="col-md-12">

                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
: <span class="mmnt"><?php ob_start();
echo $_smarty_tpl->tpl_vars['tns']->value['created_at'];
$_prefixVariable1 = ob_get_clean();
echo strtotime($_prefixVariable1);?>
</span></small> <br>
                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
: <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['tns']->value['due_date']));?>
</small>

                                                        <?php if ((isset($_smarty_tpl->tpl_vars['tns']->value['priority']))) {?>
                                                            <br>
                                                            <?php if (strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'critical' || strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'high') {?>
                                                                <span class="label label-danger">
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']]))) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?>
                                                    </span>
                                                            <?php } else { ?>
                                                                <span class="label label-info"><?php if ((isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']]))) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                            <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?></span>
                                                            <?php }?>

                                                        <?php }?>
                                                                                                                                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>


                    </div>

                    <div class="panel panel-primary kanban-col">
                        <div class="panel-hdr bg-primary-600">

                            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['In Progress'];?>
</h2>

                        </div>
                        <div class="panel-body">
                            <div id="in_progress" class="kanban-centered kanban-droppable-area">


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks_in_progress']->value, 'tns');
$_smarty_tpl->tpl_vars['tns']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tns']->value) {
$_smarty_tpl->tpl_vars['tns']->do_else = false;
?>
                                    <article class="kanban-entry cursor-move" id="item_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" class="v_item"><?php echo $_smarty_tpl->tpl_vars['tns']->value['title'];?>
</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['cid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['cid'] != '' && (isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account;?>

                                                            </div>

                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['tid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['tid'] != '' && (isset($_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: <?php echo $_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid;?>

                                                            </div>

                                                        <?php }?>
                                                        <img src="<?php echo getAdminImage($_smarty_tpl->tpl_vars['tns']->value['aid']);?>
" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="<?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>
"> <?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>



                                                    </div>


                                                    <div class="col-md-12">

                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
: <span class="mmnt"><?php ob_start();
echo $_smarty_tpl->tpl_vars['tns']->value['created_at'];
$_prefixVariable2 = ob_get_clean();
echo strtotime($_prefixVariable2);?>
</span></small> <br>
                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
: <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['tns']->value['due_date']));?>
</small>

                                                        <?php if ((isset($_smarty_tpl->tpl_vars['tns']->value['priority']))) {?>
                                                            <br>
                                                            <?php if (strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'critical' || strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'high') {?>
                                                                <span class="label label-danger">
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']]))) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?>
                                                    </span>
                                                            <?php } else { ?>
                                                                <span class="label label-info"><?php if ((isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']]))) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                            <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?></span>
                                                            <?php }?>

                                                        <?php }?>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </div>
                        </div>

                    </div>
                    <!--sütun bitiş-->
                    <!--sütun başlangıç-->
                    <div class="panel panel-light-green kanban-col">
                        <div class="panel-hdr bg-success-600">

                            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Completed'];?>
</h2>

                        </div>
                        <div class="panel-body">
                            <div id="completed" class="kanban-centered kanban-droppable-area">


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks_completed']->value, 'tns');
$_smarty_tpl->tpl_vars['tns']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tns']->value) {
$_smarty_tpl->tpl_vars['tns']->do_else = false;
?>
                                    <article class="kanban-entry cursor-move" id="item_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" class="v_item"><?php echo $_smarty_tpl->tpl_vars['tns']->value['title'];?>
</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['cid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['cid'] != '' && (isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account;?>

                                                            </div>

                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['tid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['tid'] != '' && (isset($_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: <?php echo $_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid;?>

                                                            </div>

                                                        <?php }?>
                                                        <img src="<?php echo getAdminImage($_smarty_tpl->tpl_vars['tns']->value['aid']);?>
" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="<?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>
"> <?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>



                                                    </div>


                                                    <div class="col-md-12">

                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
: <span class="mmnt"><?php ob_start();
echo $_smarty_tpl->tpl_vars['tns']->value['created_at'];
$_prefixVariable3 = ob_get_clean();
echo strtotime($_prefixVariable3);?>
</span></small> <br>
                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
: <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['tns']->value['due_date']));?>
</small>

                                                        <?php if ((isset($_smarty_tpl->tpl_vars['tns']->value['priority']))) {?>
                                                            <br>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['tns']->value['priority']))) {?>
                                                                <br>
                                                                <?php if (strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'critical' || strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'high') {?>
                                                                    <span class="label label-danger">
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']]))) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?>
                                                    </span>
                                                                <?php } else { ?>
                                                                    <span class="label label-info"><?php if ((isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']]))) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                            <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?></span>
                                                                <?php }?>

                                                            <?php }?>

                                                        <?php }?>
                                                                                                                                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </div>
                        </div>

                    </div>

                    <div class="panel panel-blue-grey kanban-col">
                        <div class="panel-hdr bg-dark">

                            <h2 class="text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Deferred'];?>
</h2>

                        </div>
                        <div class="panel-body">
                            <div id="deferred" class="kanban-centered kanban-droppable-area">


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks_deferred']->value, 'tns');
$_smarty_tpl->tpl_vars['tns']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tns']->value) {
$_smarty_tpl->tpl_vars['tns']->do_else = false;
?>
                                    <article class="kanban-entry cursor-move" id="item_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" class="v_item"><?php echo $_smarty_tpl->tpl_vars['tns']->value['title'];?>
</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['cid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['cid'] != '' && (isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account;?>

                                                            </div>

                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['tid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['tid'] != '' && (isset($_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: <?php echo $_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid;?>

                                                            </div>

                                                        <?php }?>
                                                        <img src="<?php echo getAdminImage($_smarty_tpl->tpl_vars['tns']->value['aid']);?>
" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="<?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>
"> <?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>



                                                    </div>


                                                    <div class="col-md-12">

                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
: <span class="mmnt"><?php ob_start();
echo $_smarty_tpl->tpl_vars['tns']->value['created_at'];
$_prefixVariable4 = ob_get_clean();
echo strtotime($_prefixVariable4);?>
</span></small> <br>
                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
: <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['tns']->value['due_date']));?>
</small>

                                                        <?php if ((isset($_smarty_tpl->tpl_vars['tns']->value['priority']))) {?>
                                                            <br>
                                                            <?php if (strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'critical' || strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'high') {?>
                                                                <span class="label label-danger">
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']]))) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?>
                                                    </span>
                                                            <?php } else { ?>
                                                                <span class="label label-info"><?php if ((isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']]))) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                            <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?></span>
                                                            <?php }?>

                                                        <?php }?>
                                                                                                                                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </div>
                        </div>

                    </div>

                    <div class="panel panel-grey kanban-col" style="border-right: 1px solid #ffffff;">
                        <div class="panel-hdr bg-gray-900">

                            <h2 class="text-white"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Waiting on someone else'];?>
</h2>

                        </div>
                        <div class="panel-body">
                            <div id="waiting_on_someone" class="kanban-centered kanban-droppable-area">


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks_waiting']->value, 'tns');
$_smarty_tpl->tpl_vars['tns']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tns']->value) {
$_smarty_tpl->tpl_vars['tns']->do_else = false;
?>
                                    <article class="kanban-entry cursor-move" id="item_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" draggable="true">
                                        <div class="kanban-entry-inner">
                                            <div class="kanban-label">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a href="javascript:void(0)" id="v_<?php echo $_smarty_tpl->tpl_vars['tns']->value['id'];?>
" class="v_item"><?php echo $_smarty_tpl->tpl_vars['tns']->value['title'];?>
</a>
                                                        <hr>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['cid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['cid'] != '' && (isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                <?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['tns']->value['cid']][0]->account;?>

                                                            </div>

                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->tpl_vars['tns']->value['tid'] != 0 && $_smarty_tpl->tpl_vars['tns']->value['tid'] != '' && (isset($_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid))) {?>
                                                            <div style="margin-bottom: 15px;">
                                                                Ticket: <?php echo $_smarty_tpl->tpl_vars['tickets']->value[$_smarty_tpl->tpl_vars['tns']->value['tid']][0]->tid;?>

                                                            </div>

                                                        <?php }?>
                                                        <img src="<?php echo getAdminImage($_smarty_tpl->tpl_vars['tns']->value['aid']);?>
" class="img-circle" style="max-width: 30px; margin-bottom: 5px;" alt="<?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>
"> <?php echo $_smarty_tpl->tpl_vars['tns']->value['created_by'];?>



                                                    </div>


                                                    <div class="col-md-12">

                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created'];?>
: <span class="mmnt"><?php ob_start();
echo $_smarty_tpl->tpl_vars['tns']->value['created_at'];
$_prefixVariable5 = ob_get_clean();
echo strtotime($_prefixVariable5);?>
</span></small> <br>
                                                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
: <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['tns']->value['due_date']));?>
</small>

                                                        <?php if ((isset($_smarty_tpl->tpl_vars['tns']->value['priority']))) {?>
                                                            <br>
                                                            <?php if (strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'critical' || strtolower($_smarty_tpl->tpl_vars['tns']->value['priority']) == 'high') {?>
                                                                <span class="label label-danger">
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']]))) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?>
                                                    </span>
                                                            <?php } else { ?>
                                                                <span class="label label-info"><?php if ((isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']]))) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['tns']->value['priority']];?>

                                                            <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['tns']->value['priority'];?>

                                                        <?php }?></span>
                                                            <?php }?>

                                                        <?php }?>
                                                                                                                                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </article>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
<?php
}
}
/* {/block "project_content"} */
/* {block "script"} */
class Block_1164704784607da9dd5580a0_19880918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1164704784607da9dd5580a0_19880918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            var $kanbanCanvas = $('#kanbanCanvas');


            $modal = $("#cloudonex_body");

            for (var a = dragula($(".kanban-droppable-area").toArray()), r = a.containers, o = r.length, l = 0; l < o; l++)$(r[l]).addClass("dragula dragula-vertical");
            a.on("drop", function (a, r, o, l) {


                var item = a.id;
                var target = r.id;

                $.post(base_url + 'tasks/set_status/',{ task_id : item, target: target },function (data) {
                    //   $(".kanban-col").unblock();

                })

            });

            $( ".mmnt" ).each(function() {
                //   alert($( this ).html());
                var ut = $( this ).html();
                $( this ).html(moment.unix(ut).fromNow());
            });



            $(".add_task").on('click',function (e) {
                e.preventDefault();


                $.fancybox.open({
                    src  :  base_url + 'tasks/create/0/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {

                            var $start_date = $('#start_date');

                            $start_date.datepicker();

                            var $due_date = $('#due_date');

                            $due_date.datepicker();

                            $("#cid").select2();
                        }
                    },
                });


            });



            $modal.on('click', '.modal_submit', function(e){

                e.preventDefault();


                $.post( base_url + "tasks/post/", $("#ib-modal-form").serialize())
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            window.location = base_url + 'projects/tasks/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
';

                        }

                        else {

                            toastr.error(data);
                        }

                    });

            });


            // $kanbanCanvas.on('click','.v_item',function (e) {
            //     e.preventDefault();
            //     $('body').modalmanager('loading');
            //
            //     $modal.load( base_url + 'tasks/view/'+this.id, '', function(){
            //
            //         $modal.modal();
            //
            //
            //
            //
            //     });
            // });

            $kanbanCanvas.on('click','.v_item',function (e) {
                e.preventDefault();

                $.fancybox.open({
                    src  :  base_url + 'tasks/view/'+this.id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {


                        }
                    },
                });

            });




            $modal.on('click', '.c_delete', function(e){
                e.preventDefault();
                var tid = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){

                        $.get( base_url + "delete/tasks/"+tid, function( data ) {
                            location.reload();
                        });


                    }
                });

            });

            $modal.on('click', '.c_edit', function(e) {
                e.preventDefault();
                var tid = this.id;

                $.fancybox.open({
                    src: base_url + 'tasks/create/' + tid,
                    type: 'ajax',
                    opts: {
                        afterShow: function (instance, current) {

                            $('#description').redactor();

                            $('#title').keyup(function () {

                                var live_val = $(this).val();
                                if (live_val == '') {
                                    $("#txt_modal_header").html(jq_title);
                                } else {
                                    $("#txt_modal_header").html(live_val);
                                }


                            });
                            $("#cid").select2();
                            var $start_date = $('#start_date');


                            $start_date.datepicker({
                                dateFormat: 'yyyy-mm-dd',
                            });


                            var $due_date = $('#due_date');

                            $due_date.datepicker({
                                dateFormat: 'yyyy-mm-dd',
                            });




                        },
                        touch: false,
                        autoFocus: false,


                    }

                });
            });


            // $modal.on('click', '.c_edit', function(e){
            //     e.preventDefault();
            //     var tid = this.id;
            //
            //     $('body').modalmanager('loading');
            //
            //     $modal.load( base_url + 'tasks/create/'+tid, '', function(){
            //
            //         $('body').modalmanager('loading');
            //         $modal.modal();
            //         ib_editor("#description");
            //         var ib_date_picker_options = {
            //             format: ib_date_format_picker
            //         };
            //
            //
            //         var jq_title = $('#title').val();
            //
            //         $('#title').keyup(function () {
            //
            //             var live_val = $(this).val();
            //             if(live_val == ''){
            //                 $("#txt_modal_header").html(jq_title);
            //             }
            //             else{
            //                 $("#txt_modal_header").html(live_val);
            //             }
            //
            //
            //         });
            //
            //         var $start_date = $('#start_date');
            //
            //         $start_date.datetimepicker({
            //             format: 'YYYY-MM-DD'
            //         });
            //
            //         var $due_date = $('#due_date');
            //
            //         $due_date.datetimepicker({
            //             format: 'YYYY-MM-DD'
            //         });
            //
            //
            //         $("#cid").select2({
            //             theme: "bootstrap"
            //         });
            //
            //
            //     });
            //
            // });
            //
            //




        });
    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block "script"} */
}
