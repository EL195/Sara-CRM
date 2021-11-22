<?php
/* Smarty version 3.1.39, created on 2021-08-23 15:28:48
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_expenses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6123f6f0b029b7_25421389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7024782e4ca5f3bd1bff8abbe66d2c05f9b4d1d' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/projects_expenses.tpl',
      1 => 1623941353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6123f6f0b029b7_25421389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16416868436123f6f0aef6c1_29703357', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18936630046123f6f0af09a9_90573173', "project_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15483739036123f6f0afe3b1_64473438', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "project_base.tpl");
}
/* {block "head"} */
class Block_16416868436123f6f0aef6c1_29703357 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_16416868436123f6f0aef6c1_29703357',
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
        .text-warning{
            color: #FB6340!important;
        }
        .text-primary{
            color: #10CDEF!important;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "project_content"} */
class Block_18936630046123f6f0af09a9_90573173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'project_content' => 
  array (
    0 => 'Block_18936630046123f6f0af09a9_90573173',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row mb-3">
        <div class="col">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expenses'];?>
</h2>
        </div>

        <div class="col text-right">
            <a href="javascript:;" id="add_expense" class="btn btn-primary">New Expense</a>
        </div>



    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered" id="clx_datatable">
                <thead style="background: #f0f2ff">
                <tr>
                    <th class="h6">ID</th>
                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>



                    <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['expenses']->value, 'expense');
$_smarty_tpl->tpl_vars['expense']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['expense']->value) {
$_smarty_tpl->tpl_vars['expense']->do_else = false;
?>
                    <tr>
                        <td class="h6">
                            <?php echo $_smarty_tpl->tpl_vars['expense']->value->code;?>


                        </td>
                        <td class="h6"><?php echo $_smarty_tpl->tpl_vars['expense']->value->date;?>

                        </td>
                        <td class="h6">

                            <?php if ((isset($_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->tpl_vars['expense']->value->account_id]))) {?>
                                <?php echo $_smarty_tpl->tpl_vars['accounts']->value[$_smarty_tpl->tpl_vars['expense']->value->account_id]->account;?>

                            <?php }?>

                        </td>
                        <td class="h6">
                            <?php echo $_smarty_tpl->tpl_vars['expense']->value->type;?>


                        </td>
                        <td class="h6">
                            <?php echo formatCurrency($_smarty_tpl->tpl_vars['expense']->value->amount,$_smarty_tpl->tpl_vars['expense']->value->currency_iso_code);?>

                        </td>
                        <td class="h6 text-info"><?php echo $_smarty_tpl->tpl_vars['expense']->value->description;?>

                        </td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['expense']->value['id'];?>
" class="btn btn-primary btn-sm active text-right" role="button" aria-pressed="true">manage</a>

                        </td>



                    </tr>





                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                </tbody>



            </table>
        </div>
    </div>



<?php
}
}
/* {/block "project_content"} */
/* {block "script"} */
class Block_15483739036123f6f0afe3b1_64473438 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_15483739036123f6f0afe3b1_64473438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
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





           $('#add_expense').on('click',function (e) {
               e.preventDefault();

               $.fancybox.open({
                   src  :  base_url + 'projects/expense/<?php echo $_smarty_tpl->tpl_vars['project']->value->id;?>
',
                   type : 'ajax',
                   opts : {
                       afterShow : function( instance, current ) {
                           $(".datepicker").datepicker();
                           $("#account").select2({

                           });
                           $("#payee").select2({

                           });
                           $("#company").select2({

                           });
                       }
                   },
               });
           });


            var $modal = $('#cloudonex_body');

            $modal.on('click', '#submit', function(event){

                event.preventDefault();

                $.post(base_url + 'projects/save-expense', $('#project_expense_form').serialize()).done(function (data) {
                    location.reload();
                }).fail(function(data) {
                    toastr.error(data.responseText);
                });

            });





        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
