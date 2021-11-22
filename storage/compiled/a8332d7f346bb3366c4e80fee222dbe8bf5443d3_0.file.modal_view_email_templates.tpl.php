<?php
/* Smarty version 3.1.39, created on 2021-05-28 06:18:48
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/modal_view_email_templates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b0c388639a96_48896931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8332d7f346bb3366c4e80fee222dbe8bf5443d3' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/modal_view_email_templates.tpl',
      1 => 1592549777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b0c388639a96_48896931 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mx-auto" style="max-width: 800px;">
    <div class="panel mb-0 rounded-0">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Templates'];?>
</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <table class="table table-bordered filter-table" id="tbl_email_templates">
                    <thead>
                    <tr>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                        <th width="60%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tpls']->value, 'tpl');
$_smarty_tpl->tpl_vars['tpl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tpl']->value) {
$_smarty_tpl->tpl_vars['tpl']->do_else = false;
?>

                        <tr>

                            <td><?php echo $_smarty_tpl->tpl_vars['tpl']->value['tplname'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['tpl']->value['subject'];?>
</td>
                            <td><a href="#" class="btn btn-primary eml_select btn-icon" id="es<?php echo $_smarty_tpl->tpl_vars['tpl']->value['id'];?>
"><i class="fal fa-clone"></i> </a> </td>

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

<?php }
}
