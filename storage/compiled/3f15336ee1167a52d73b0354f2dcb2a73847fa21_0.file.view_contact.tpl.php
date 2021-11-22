<?php
/* Smarty version 3.1.39, created on 2021-06-02 07:17:25
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/view_contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b768c50e2fa2_74028608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f15336ee1167a52d73b0354f2dcb2a73847fa21' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/view_contact.tpl',
      1 => 1622632476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:marketing_crm/admin/form_fields/contact.tpl' => 1,
  ),
),false)) {
function content_60b768c50e2fa2_74028608 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <div class="panel shadow-none mb-0">
        <div class="panel-hdr">
            <h2>
                <?php echo $_smarty_tpl->tpl_vars['contact']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['contact']->value->last_name;?>

            </h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <form class="form-horizontal form_view_contact" id="form_view_contact">
                    <div id="sp_modal_result_div"></div>
                    <?php $_smarty_tpl->_subTemplateRender('file:marketing_crm/admin/form_fields/contact.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" id="btn_modal_save" class="btn btn-primary modal_submit mt-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                            </div>
                        </div>
                    </div>




                </form>
            </div>
        </div>
    </div>
</div>
<?php }
}
