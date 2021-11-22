<?php
/* Smarty version 3.1.39, created on 2021-05-28 06:18:42
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/ajax.contact-emails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b0c382e8ce73_50780198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7fe380e5caa4bdb2f87e74b58e3d970e931829d' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/ajax.contact-emails.tpl',
      1 => 1592548729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b0c382e8ce73_50780198 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mail-box">


    <div class="mail-body">

        <form class="form-horizontal" method="get">
            <div class="form-group"><label><?php echo $_smarty_tpl->tpl_vars['_L']->value['To'];?>
:</label>

                <input type="text" id="toemail" name="toemail" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
" disabled>
            </div>
            <div class="form-group"><label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
:</label>

                <input type="text" id="subject" name="subject" class="form-control" value="">
            </div>
        </form>

    </div>

    <div class="mail-text mt-3">

        <div class="form-group">
            <textarea id="content"  class="form-control sysedit" name="content"></textarea>
        </div>

        <div class="clearfix"></div>
    </div>

    <div class="mail-body mb-3">
        <div class="row">
            <div class="col-md-10">
                <a href="#" class="choose_from_template" id="choose_from_template"><i class="fal fa-file-alt"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose from Template'];?>
</a>
            </div>
            <div class="col-md-2 text-right">
                <button type="submit" id="send_email"  class="btn btn-sm btn-primary"><i class="fal fa-paper-plane-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Send'];?>
</button>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>



</div>

<table class="table table-bordered table-hover sys_table">
    <thead>
    <tr>


        <th width="80%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>

    </tr>
    </thead>
    <tbody>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['e']->value, 'is');
$_smarty_tpl->tpl_vars['is']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['is']->value) {
$_smarty_tpl->tpl_vars['is']->do_else = false;
?>
        <tr>


            <td><?php echo $_smarty_tpl->tpl_vars['is']->value['subject'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['is']->value['date'];?>
</td>

        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </tbody>
</table>
<?php }
}
