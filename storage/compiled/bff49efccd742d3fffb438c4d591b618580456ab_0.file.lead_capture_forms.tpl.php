<?php
/* Smarty version 3.1.39, created on 2021-06-07 01:16:47
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/lead_capture_forms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bdabbf99a2b4_30557174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bff49efccd742d3fffb438c4d591b618580456ab' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/lead_capture_forms.tpl',
      1 => 1623042942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bdabbf99a2b4_30557174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88306175460bdabbf9907f8_37239996', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98104042860bdabbf999904_33548979', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_88306175460bdabbf9907f8_37239996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_88306175460bdabbf9907f8_37239996',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">
            <h3 class="mb-3">Lead Capture</h3>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/form/0/<?php echo $_smarty_tpl->tpl_vars['form_type']->value;?>
" class="btn btn-primary mb-3">New Form</a>
        </div>
    </div>

    <div class="row">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lead_capture_forms']->value, 'form');
$_smarty_tpl->tpl_vars['form']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['form']->value) {
$_smarty_tpl->tpl_vars['form']->do_else = false;
?>
            <div class="col-md-4">
                <div class="card my-3">
                    <div class="card-body">
                        <h4><?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
</h4>

                        <div class="mt-3">
                            <a class="btn btn-primary mb-3" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/form-view/<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">Manage</a>
                            <a class="btn btn-primary mb-3" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/form/<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">Edit</a>
                        </div>

                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_98104042860bdabbf999904_33548979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_98104042860bdabbf999904_33548979',
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
