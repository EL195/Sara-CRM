<?php
/* Smarty version 3.1.39, created on 2021-08-22 15:10:44
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/purchase_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6122a134999401_94451013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e36ac1e74b1aa74c190eafa2d81ed6450435fb3' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/purchase_list.tpl',
      1 => 1629659442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6122a134999401_94451013 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31274676122a134966634_16889886', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10552508796122a13496a464_14904328', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12867687566122a134995457_71589103', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_31274676122a134966634_16889886 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_31274676122a134966634_16889886',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <style>
        <?php if (empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
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
            color: #2CCE89!important;
        }
        <?php }?>
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_10552508796122a13496a464_14904328 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10552508796122a13496a464_14904328',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-3">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-meadow">
                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 "><?php echo $_smarty_tpl->tpl_vars['invoice_paid_amount']->value;?>
</span>
                        </h3>
                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</small>
                    </div>
                    <div class="icon">
                        <i class="fal fa-calendar-check-o"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                                            <span style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value['Paid']['percentage'];?>
%;" class="progress-bar progress-bar-primary bg-green-meadow">
                                                <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['p']->value['Paid']['percentage'];?>
%</span>
                                            </span>
                    </div>
                    <div class="progress-status">
                        <div class="progress-status-title"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Percentage'];?>
 </div>
                        <div class="progress-status-number"> <?php echo $_smarty_tpl->tpl_vars['p']->value['Paid']['percentage'];?>
% </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-red">
                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 "><?php echo $_smarty_tpl->tpl_vars['invoice_un_paid_amount']->value;?>
</span>
                        </h3>
                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Unpaid'];?>
</small>
                    </div>
                    <div class="icon">
                        <i class="fal fa-calendar-check-o"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                                            <span style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value['Unpaid']['percentage'];?>
%;" class="progress-bar progress-bar-primary bg-red">
                                                <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['p']->value['Unpaid']['percentage'];?>
%</span>
                                            </span>
                    </div>
                    <div class="progress-status">
                        <div class="progress-status-title"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Percentage'];?>
 </div>
                        <div class="progress-status-number"> <?php echo $_smarty_tpl->tpl_vars['p']->value['Unpaid']['percentage'];?>
% </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-blue">
                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 "><?php echo $_smarty_tpl->tpl_vars['invoice_partially_paid_amount']->value;?>
</span>
                        </h3>
                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Partially Paid'];?>
</small>
                    </div>
                    <div class="icon">
                        <i class="fal fa-calendar-check-o"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                                            <span style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value['Partially Paid']['percentage'];?>
%;" class="progress-bar progress-bar-primary green-sharp">
                                                <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['p']->value['Partially Paid']['percentage'];?>
%</span>
                                            </span>
                    </div>
                    <div class="progress-status">
                        <div class="progress-status-title"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Percentage'];?>
 </div>
                        <div class="progress-status-number"> <?php echo $_smarty_tpl->tpl_vars['p']->value['Partially Paid']['percentage'];?>
% </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dashboard-stat2 ">
                <div class="display">
                    <div class="number">
                        <h3 class="font-blue-hoki">
                            <span class="amount" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 "><?php echo $_smarty_tpl->tpl_vars['invoice_cancelled_amount']->value;?>
</span>
                        </h3>
                        <small><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancelled'];?>
</small>
                    </div>
                    <div class="icon">
                        <i class="fal fa-calendar-check-o"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                                            <span style="width: <?php echo $_smarty_tpl->tpl_vars['p']->value['Cancelled']['percentage'];?>
%;" class="progress-bar progress-bar-primary bg-blue-hoki">
                                                <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['p']->value['Cancelled']['percentage'];?>
%</span>
                                            </span>
                    </div>
                    <div class="progress-status">
                        <div class="progress-status-title"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Percentage'];?>
 </div>
                        <div class="progress-status-number"> <?php echo $_smarty_tpl->tpl_vars['p']->value['Cancelled']['percentage'];?>
% </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">

                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Purchase Orders'];?>
</h2>


                    <div class="panel-toolbar">
                        <div class="btn-group">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
purchases/add/" class="btn btn-sm btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Purchase Order'];?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/purchases/" class="btn btn-sm btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View Reports'];?>
</a>
                        </div>
                    </div>
                </div>

                <div class="panel-container">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table table-striped" id="clx_datatable">
                                <thead style="background: #f0f2ff">
                                <tr>
                                    <th class="h6">#</th>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Issued at'];?>
</th>
                                    <th class="h6">
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>

                                    </th>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                                    <th class="text-right" width="120px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
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
                                        <td data-value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><a class="h6" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
purchases/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['ds']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
 <?php }?></a> </td>
                                        <td ><a class="h6 text-info"href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
purchases/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</a> </td>
                                        <td><?php echo formatCurrency($_smarty_tpl->tpl_vars['ds']->value['total'],$_smarty_tpl->tpl_vars['ds']->value['currency_iso_code']);?>
</td>
                                        <td data-value="<?php echo strtotime($_smarty_tpl->tpl_vars['ds']->value['date']);?>
"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                                                                <td>


                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Unpaid') {?>
                                                <span class="badge badge-dot"><i class="bg-danger"></i><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Paid') {?>
                                                <span class="badge badge-dot"><i class="bg-success"></i><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Partially Paid') {?>
                                                <span class="badge badge-dot"><i class="bg-info"></i><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Cancelled') {?>
                                                <span class="badge- badge-dot"><i class="bg-warning"></i><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>
</span>
                                            <?php } else { ?>
                                                <?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['status']);?>

                                            <?php }?>


                                        </td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['r'] == '0') {?>
                                                <span class="badge badge-success"><i class="fal fa-dot-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Onetime'];?>
</span>
                                            <?php } else { ?>
                                                <span class="label label-info"><i class="fal fa-repeat"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Recurring'];?>
</span>
                                            <?php }?>
                                        </td>
                                        <td class="text-right">


                                            <div class="btn-group">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
purchases/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
"><i class="fal fa-file"></i></a>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
purchases/clone/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Clone'];?>
"><i class="fal fa-clone"></i></a>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
purchases/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
"><i class="fal fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm cdelete" id="iid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fal fa-trash-alt"></i></a>
                                            </div>


                                        </td>
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
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_12867687566122a134995457_71589103 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_12867687566122a134995457_71589103',
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

            $clx_body = $('#cloudonex_body');

            $clx_body.on('click', '.cdelete', function(e){

                e.preventDefault();
                var id = this.id;
                bootbox.confirm("<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
", function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/purchase/" + id;
                    }
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
