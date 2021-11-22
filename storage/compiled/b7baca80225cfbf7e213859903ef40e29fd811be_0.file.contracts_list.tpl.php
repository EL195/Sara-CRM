<?php
/* Smarty version 3.1.39, created on 2021-10-07 08:49:29
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/contracts_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615eecd9b81ec3_57308446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7baca80225cfbf7e213859903ef40e29fd811be' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/contracts_list.tpl',
      1 => 1633610966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615eecd9b81ec3_57308446 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_752350828615eecd9b5c0a4_08745556', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_575605855615eecd9b7eb49_87964797', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_752350828615eecd9b5c0a4_08745556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_752350828615eecd9b5c0a4_08745556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-window'></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Contracts'];?>


        </h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">


                <div class="panel-container">
                    <div class="panel-content">
                        <div class="table-responsive">

                            <table id="clx_datatable" class="table table-striped w-100 sys_table">
                                <thead style="background: #f0f2ff">
                                <tr>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Start Date'];?>
</th>
                                    <th><?php echo __('Expiration Date');?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contracts']->value, 'contract');
$_smarty_tpl->tpl_vars['contract']->iteration = 0;
$_smarty_tpl->tpl_vars['contract']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contract']->value) {
$_smarty_tpl->tpl_vars['contract']->do_else = false;
$_smarty_tpl->tpl_vars['contract']->iteration++;
$__foreach_contract_0_saved = $_smarty_tpl->tpl_vars['contract'];
?>
                                    <tr>

                                        <td data-value="<?php echo $_smarty_tpl->tpl_vars['contract']->value->id;?>
" data-order="<?php echo $_smarty_tpl->tpl_vars['contract']->iteration;?>
">
                                            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contracts/view/<?php echo $_smarty_tpl->tpl_vars['contract']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['contract']->value->uuid;?>
"><?php echo $_smarty_tpl->tpl_vars['contract']->value->title;?>
</a>
                                        </td>

                                        <td>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['contract_types']->value[$_smarty_tpl->tpl_vars['contract']->value->type])) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['contract_types']->value[$_smarty_tpl->tpl_vars['contract']->value->type];?>

                                            <?php }?>
                                        </td>
                                        <td>
                                            <?php echo formatCurrency($_smarty_tpl->tpl_vars['contract']->value->amount,$_smarty_tpl->tpl_vars['contract']->value->currency);?>

                                        </td>
                                        <td>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['contract']->value->contact_id]))) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['contract']->value->contact_id;?>
/summary/"><?php echo $_smarty_tpl->tpl_vars['contacts']->value[$_smarty_tpl->tpl_vars['contract']->value->contact_id]->account;?>
</a>
                                            <?php }?>
                                        </td>

                                        <td data-value="<?php echo strtotime($_smarty_tpl->tpl_vars['contract']->value->start_date);?>
">
                                            <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['contract']->value->start_date));?>

                                        </td>
                                        <td data-value="<?php echo strtotime($_smarty_tpl->tpl_vars['contract']->value->expiration_date);?>
">
                                            <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['contract']->value->expiration_date));?>

                                        </td>

                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['contract']->value->party_two_signed) {?>
                                                <span class="badge badge-success"><?php echo __('Signed');?>
</span>
                                                <?php } else { ?>
                                                <span class="badge badge-danger"><?php echo __('Not Signed');?>
</span>
                                            <?php }?>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contracts/view/<?php echo $_smarty_tpl->tpl_vars['contract']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['contract']->value->uuid;?>
" class="btn btn-primary btn-icon" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
"><i class="fal fa-file-alt"></i></a>

                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contracts/edit/<?php echo $_smarty_tpl->tpl_vars['contract']->value->id;?>
/" class="btn btn-info btn-icon" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
"><i class="fal fa-file-edit"></i></a>

                                                <a href="javascript:;" class="btn btn-danger btn-icon" onclick="confirmThenGoToUrl(event,'contracts/delete/<?php echo $_smarty_tpl->tpl_vars['contract']->value->id;?>
')" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fal fa-trash-alt"></i></a>

                                            </div>
                                        </td>


                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['contract'] = $__foreach_contract_0_saved;
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
/* {block 'script'} */
class Block_575605855615eecd9b7eb49_87964797 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_575605855615eecd9b7eb49_87964797',
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
        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
