<?php
/* Smarty version 3.1.39, created on 2021-06-07 01:17:29
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/lead_capture_form_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bdabe987f5f4_50047170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '986a597a5a412a10867d2fc5dfcf09627019e031' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/lead_capture_form_view.tpl',
      1 => 1623043047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:marketing_crm/admin/form_fields/generate_lead_capture_form.tpl' => 1,
  ),
),false)) {
function content_60bdabe987f5f4_50047170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154989038360bdabe9879221_04825095', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93407959760bdabe987f0b6_30909452', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_154989038360bdabe9879221_04825095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_154989038360bdabe9879221_04825095',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1><?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
</h1>
                    <div class="hr-line-dashed"></div>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/form/<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
" class="btn btn-primary mb-3">Edit</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
form/view/<?php echo $_smarty_tpl->tpl_vars['form']->value->uuid;?>
" target="_blank" class="btn btn-primary mb-3">Share</a>
                    <a  href="#" onclick="confirmThenGoToUrl(event,'marketing/delete-form/<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
')"  class="btn btn-danger mb-3">Delete</a>

                    <div class="hr-line-dashed"></div>

                    <div class="mb-3">
                        <h5 class="mb-3">Link</h5>
                        <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
form/view/<?php echo $_smarty_tpl->tpl_vars['form']->value->uuid;?>
" onClick="this.setSelectionRange(0, this.value.length)">
                    </div>

                    <h5 class="mb-3">Embed</h5>

                    <div class="mb-3">
                        <code><?php echo $_smarty_tpl->tpl_vars['embed_code']->value;?>
</code>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1>Form Preview</h1>
                    <div class="hr-line-dashed"></div>

                    <?php $_smarty_tpl->_subTemplateRender('file:marketing_crm/admin/form_fields/generate_lead_capture_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_93407959760bdabe987f0b6_30909452 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_93407959760bdabe987f0b6_30909452',
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
