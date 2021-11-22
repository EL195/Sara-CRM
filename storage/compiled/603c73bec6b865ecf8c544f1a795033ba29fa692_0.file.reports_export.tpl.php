<?php
/* Smarty version 3.1.39, created on 2021-11-21 14:09:01
  from '/Users/pondo2/Sites/sara_suite/ui/theme/default/reports_export.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619a994d59c428_49720762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '603c73bec6b865ecf8c544f1a795033ba29fa692' => 
    array (
      0 => '/Users/pondo2/Sites/sara_suite/ui/theme/default/reports_export.tpl',
      1 => 1633628023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619a994d59c428_49720762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_436297355619a994d58f3e1_32105338', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1122367006619a994d59bc86_05669148', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_436297355619a994d58f3e1_32105338 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_436297355619a994d58f3e1_32105338',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Export'];?>
</h2>


        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <h1><?php echo $_smarty_tpl->tpl_vars['total_customers']->value;?>
</h1>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/export-customers" class="btn btn-primary"><i class="fal fa-file-excel-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Export'];?>
</a>
                    </div>



                </div>
            </div>
        </div>


        <div class="col-lg-3">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Transactions'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <h1><?php echo $_smarty_tpl->tpl_vars['total_transactions']->value;?>
</h1>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/export-transactions" class="btn btn-primary"><i class="fal fa-file-excel-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Export'];?>
</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <h1><?php echo $_smarty_tpl->tpl_vars['total_invoices']->value;?>
</h1>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/export-invoices" class="btn btn-primary"><i class="fal fa-file-excel-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Export'];?>
</a>
                    </div>

                </div>
            </div>
        </div>

                                                                                                            
                                                            </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_1122367006619a994d59bc86_05669148 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1122367006619a994d59bc86_05669148',
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
