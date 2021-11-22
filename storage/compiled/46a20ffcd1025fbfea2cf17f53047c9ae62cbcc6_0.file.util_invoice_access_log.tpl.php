<?php
/* Smarty version 3.1.39, created on 2021-08-23 15:12:06
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/util_invoice_access_log.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6123f30627eeb2_43196188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46a20ffcd1025fbfea2cf17f53047c9ae62cbcc6' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/util_invoice_access_log.tpl',
      1 => 1623941518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6123f30627eeb2_43196188 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7035143306123f30624eba7_89912746', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8144282696123f30624f944_54265000', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165491276123f30627c5c3_35849529', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_7035143306123f30624eba7_89912746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_7035143306123f30624eba7_89912746',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_8144282696123f30624f944_54265000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8144282696123f30624f944_54265000',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Records'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['found'];?>

                        . <?php echo $_smarty_tpl->tpl_vars['_L']->value['Page'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['page'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['of'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['lastpage'];?>
. </h2>
                    


                </div>
                <div class="panel-container" id="application_ajaxrender">
                    <div class="panel-content">
                        <div class="table-responsive">

                            <table class="table table-bordered sys_table" id="clx_datatable">
                                <thead style="background: #f0f2ff">
                                <tr>

                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['IP'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Browser'];?>
</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                    <tr>

                                        <td><?php echo date(($_smarty_tpl->tpl_vars['config']->value['df']).(' H:i:s'),strtotime($_smarty_tpl->tpl_vars['ds']->value['viewed_at']));?>
</td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['customer'];?>
</a> </td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
invoices/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['iid'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['iid'];?>
</a> </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['ip'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['country'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['city'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['browser'];?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>

                        </div>

                    </div>




                    <?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>


                </div>


            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_165491276123f30627c5c3_35849529 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_165491276123f30627c5c3_35849529',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php echo '<script'; ?>
>
        $(function() {

            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No items to display'];?>
",
                        "info":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                        "infoEmpty":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing 0 to 0 of 0 entries'];?>
",
                        buttons: {
                            pageLength: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Show all'];?>
'
                        },
                        searchPlaceholder: "<?php echo __('Search');?>
"
                    },

                }
            );

            $('.has-tooltip').tooltip();
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
