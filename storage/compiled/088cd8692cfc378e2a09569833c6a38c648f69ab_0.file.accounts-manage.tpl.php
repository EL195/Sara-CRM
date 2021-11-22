<?php
/* Smarty version 3.1.39, created on 2021-08-22 14:56:26
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/accounts-manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61229ddade3204_40456721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '088cd8692cfc378e2a09569833c6a38c648f69ab' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/accounts-manage.tpl',
      1 => 1629658584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61229ddade3204_40456721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90287567161229ddadc1b83_57519724', "head");
?>







<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194988974861229ddadc5d64_57353151', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111373181261229ddaddf998_14898843', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_90287567161229ddadc1b83_57519724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_90287567161229ddadc1b83_57519724',
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
       <?php }?>

    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_194988974861229ddadc5d64_57353151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_194988974861229ddadc5d64_57353151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage_Accounts'];?>
</h2>
                    <div class="panel-toolbar">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
accounts/add/" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Account'];?>
</a>
                    </div>
                </div>

                <div class="panel-container">
                    <div class="panel-content">



                        <table class="table table-striped table-bordered" id="clx_datatable">

                            <thead>
                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                            </tr>
                            </thead>


                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['balances']->value['banks'], 'bank');
$_smarty_tpl->tpl_vars['bank']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bank']->value) {
$_smarty_tpl->tpl_vars['bank']->do_else = false;
?>



                                <tr>
                                    <td>
                                        <h4><?php echo $_smarty_tpl->tpl_vars['bank']->value->account;?>
</h4>
                                    </td>
                                    <td>
                                        <?php if (((isset($_smarty_tpl->tpl_vars['balances']->value['balances'][$_smarty_tpl->tpl_vars['bank']->value->id])))) {?>



                                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Equity'];?>
 (<?php echo $_smarty_tpl->tpl_vars['_L']->value['Initial balance'];?>
): <?php echo formatCurrency($_smarty_tpl->tpl_vars['balances']->value['total_equity_bank'][$_smarty_tpl->tpl_vars['bank']->value->id],$_smarty_tpl->tpl_vars['balances']->value['home_currency']->iso_code);?>
</strong> <br>
                                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total in'];?>
: <?php echo formatCurrency($_smarty_tpl->tpl_vars['balances']->value['total_in_bank'][$_smarty_tpl->tpl_vars['bank']->value->id],$_smarty_tpl->tpl_vars['balances']->value['home_currency']->iso_code);?>
 </strong>  <br>
                                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total out'];?>
: <?php echo formatCurrency($_smarty_tpl->tpl_vars['balances']->value['total_out_bank'][$_smarty_tpl->tpl_vars['bank']->value->id],$_smarty_tpl->tpl_vars['balances']->value['home_currency']->iso_code);?>
 </strong>  <br>

                                            <hr>

                                            <strong> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
 (<?php echo $_smarty_tpl->tpl_vars['_L']->value['in home currency'];?>
) : <?php echo formatCurrency($_smarty_tpl->tpl_vars['balances']->value['balances'][$_smarty_tpl->tpl_vars['bank']->value->id],$_smarty_tpl->tpl_vars['balances']->value['home_currency']->iso_code);?>
</strong>

                                        <?php }?>
                                    </td>
                                    <td>


                                        <div class="btn-group">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/add-equity/<?php echo $_smarty_tpl->tpl_vars['bank']->value->id;?>
" class="btn btn-sm btn-primary"><i class="fal fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Record initial balance'];?>
</a>

                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/edit/<?php echo $_smarty_tpl->tpl_vars['bank']->value->id;?>
" class="btn btn-sm btn-warning"><i class="fal fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>

                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['bank']->value->ib_url;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 != '') {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['bank']->value->ib_url;?>
" target="_blank" class="btn btn-sm btn-primary"><i class="fal fa-globe"></i></a>
                                            <?php }?>

                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/delete/<?php echo $_smarty_tpl->tpl_vars['bank']->value->id;?>
" id="did<?php echo $_smarty_tpl->tpl_vars['bank']->value->id;?>
" class="cdelete btn btn-danger btn-sm"><i class="fal fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                                        </div>


                                    </td>
                                </tr>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>




                        </table>

                        <div class="hr-line-dashed"></div>

                        <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Net Worth'];?>
 - <?php echo formatCurrency($_smarty_tpl->tpl_vars['balances']->value['net_worth'],$_smarty_tpl->tpl_vars['balances']->value['home_currency']->iso_code);?>
</h3>

                    </div>
                </div>

            </div>



        </div>



    </div>


    <input type="hidden" id="_lan_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">


<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_111373181261229ddaddf998_14898843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_111373181261229ddaddf998_14898843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>
        $(function () {
            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                var lan_msg = $("#_lan_are_you_sure").val();
                bootbox.confirm(lan_msg, function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "accounts/delete/" + id + '/';
                    }
                });
            });

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

        })
    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block "script"} */
}
