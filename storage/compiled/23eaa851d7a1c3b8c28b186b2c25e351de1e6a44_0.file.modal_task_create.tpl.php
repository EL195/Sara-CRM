<?php
/* Smarty version 3.1.39, created on 2021-04-19 12:04:26
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/modal_task_create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607daa0a0b8255_04097567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23eaa851d7a1c3b8c28b186b2c25e351de1e6a44' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/modal_task_create.tpl',
      1 => 1592476305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607daa0a0b8255_04097567 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mx-auto" style="max-width: 800px;">
    <div class="panel mb-0 rounded-0">
        <div class="panel-hdr">
            <h2>
                <?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
                    <?php echo $_smarty_tpl->tpl_vars['task']->value['title'];?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New'];?>

                <?php }?>
            </h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <form id="ib-modal-form" method="post">

                    <div class="form-group">
                        <label for="title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['title'];?>
">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="start_date"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Start Date'];?>
</label>
                            <input type="text" class="form-control" id="start_date" name="start_date" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['started'];?>
">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="due_date"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</label>
                            <input type="text" class="form-control" id="due_date" name="due_date" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['due_date'];?>
">
                        </div>
                    </div>


                    <div class="form-row mb-3">
                        <div class='form-group col-md-6'>
                            <label for="cid">Related customer</label>

                            <select id="cid" name="cid" class="form-control">
                                <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Contact'];?>
...</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'cs');
$_smarty_tpl->tpl_vars['cs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cs']->value) {
$_smarty_tpl->tpl_vars['cs']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value->id;?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['task']->value['cid'] == ($_smarty_tpl->tpl_vars['cs']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cs']->value->account;?>
 <?php if ($_smarty_tpl->tpl_vars['cs']->value->email != '') {?>- <?php echo $_smarty_tpl->tpl_vars['cs']->value->email;
}?></option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </select>

                        </div>
                    </div>




                    <div class="form-group">
                        <label for="subject"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                        <textarea class="form-control" id="description" name="description" rows="10"><?php echo $_smarty_tpl->tpl_vars['task']->value['description'];?>
</textarea>
                    </div>



                    <input type="hidden" id="project_id" name="project_id" value="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
">
                    <input type="hidden" id="status" name="status" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['status'];?>
">
                    <input type="hidden" id="task_id" name="task_id" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
">
                    <input type="hidden" name="project_id" value="<?php echo $_smarty_tpl->tpl_vars['project_id']->value;?>
">

                    <button type="submit" class="btn btn-primary modal_submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>

                </form>
            </div>
        </div>
    </div>
</div>

<?php }
}
