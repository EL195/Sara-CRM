<?php
/* Smarty version 3.1.39, created on 2021-03-09 06:28:17
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client-quote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60475bd19e8799_06067170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99c32824a81384a960b8304cc0027b0d9383a774' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client-quote.tpl',
      1 => 1606241281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60475bd19e8799_06067170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86092608960475bd19c35f1_74791421', "content_body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/base.tpl");
}
/* {block "content_body"} */
class Block_86092608960475bd19c35f1_74791421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_body' => 
  array (
    0 => 'Block_86092608960475bd19c35f1_74791421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="mx-auto" style="max-width: 980px; width: 100%; margin-top: 50px;">
        <section class="panel">

            <div class="panel-container">
                <div class="panel-content">

                    <div class="invoice">
                        <header class="clearfix">
                            <div class="text-right">

                                <br>



                                <div class="btn-group">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/qpdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" class="btn btn-primary"><i class="fal fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View PDF'];?>
</a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/qpdf/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
/dl/" class="btn btn-info"><i class="fal fa-file-pdf-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download PDF'];?>
</a>



                                    <?php if (($_smarty_tpl->tpl_vars['d']->value['stage'] != 'Accepted')) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/q_accept/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accept'];?>
</a>
                                    <?php }?>

                                    <?php if (($_smarty_tpl->tpl_vars['d']->value['stage'] != 'Lost')) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/q_decline/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/token_<?php echo $_smarty_tpl->tpl_vars['d']->value['vtoken'];?>
" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Decline'];?>
</a>
                                    <?php }?>
                                </div>





                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-md">
                                    <h2 class="h2 mt-none mb-sm text-dark text-bold"><?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
</h2>
                                    <h4 class="h4 m-none text-dark text-bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quote'];?>
 #<?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['d']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 <?php }?></h4>

                                </div>

                            </div>
                        </header>
                        <div class="bill-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bill-to">
                                        <p class="h5 mb-xs text-dark text-semibold"><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recipient'];?>
:</strong></p>
                                        <address>
                                            <?php if ($_smarty_tpl->tpl_vars['a']->value['company'] != '') {?>
                                                <?php echo $_smarty_tpl->tpl_vars['a']->value['company'];?>

                                                <br>
                                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['ATTN'];?>
: <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

                                                <br>
                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>

                                                <br>
                                            <?php }?>

                                            <?php echo $_smarty_tpl->tpl_vars['a']->value['address'];?>
 <br>
                                            <?php echo $_smarty_tpl->tpl_vars['a']->value['city'];?>
 <br>
                                            <?php echo $_smarty_tpl->tpl_vars['a']->value['state'];?>
 - <?php echo $_smarty_tpl->tpl_vars['a']->value['zip'];?>
 <br>
                                            <?php echo $_smarty_tpl->tpl_vars['a']->value['country'];?>

                                            <br>
                                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['phone'];?>

                                            <br>
                                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['a']->value['email'];?>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cf']->value, 'cfs');
$_smarty_tpl->tpl_vars['cfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cfs']->value) {
$_smarty_tpl->tpl_vars['cfs']->do_else = false;
?>
                                                <br>
                                                <strong><?php echo $_smarty_tpl->tpl_vars['cfs']->value['fieldname'];?>
: </strong> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['cfs']->value['id'],$_smarty_tpl->tpl_vars['a']->value['id']);?>

                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                            <?php echo $_smarty_tpl->tpl_vars['x_html']->value;?>

                                        </address>





                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="bill-data text-right">

                                        <div class="ib">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];?>
" alt="Logo" style="margin-bottom: 15px;">

                                        </div>

                                        <address class="ib mr-xlg">
                                            <?php echo $_smarty_tpl->tpl_vars['config']->value['caddress'];?>

                                        </address>

                                        <p class="mb-none mt-lg">
                                            <span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Created'];?>
:</span>
                                            <span class="value"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['datecreated']));?>
</span>
                                        </p>
                                        <p class="mb-none">
                                            <span class="text-dark"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expiry Date'];?>
:</span>
                                            <span class="value"><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['d']->value['validuntil']));?>
</span>
                                        </p>
                                        <h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['d']->value['total'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
 </h2>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>

                                <strong><?php echo $_smarty_tpl->tpl_vars['d']->value['subject'];?>
</strong>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php echo $_smarty_tpl->tpl_vars['d']->value['proposal'];?>

                                <hr>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered invoice-items">
                                <thead>
                                <tr class="h4 text-dark">
                                    <th id="cell-id" class="text-semibold">#</th>
                                    <th id="cell-item" class="text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>

                                    <th id="cell-price" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Price'];?>
</th>
                                    <th id="cell-qty" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quantity'];?>
</th>
                                    <th id="cell-total" class="text-center text-semibold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['itemcode'];?>
</td>
                                        <td class="text-semibold text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>

                                        <td class="text-center nowrap"><?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['item']->value['amount'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
</td>
                                        <td class="text-center nowrap"><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
                                        <td class="text-center nowrap"><?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['item']->value['total'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </tbody>
                            </table>
                        </div>

                        <div class="invoice-summary">
                            <div class="row">
                                <div class="col-sm-4 offset-md-8">
                                    <table class="table h5 text-dark">
                                        <tbody>
                                        <tr class="b-top-none">
                                            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subtotal'];?>
</td>
                                            <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['d']->value['subtotal'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
</td>
                                        </tr>
                                        <?php if (($_smarty_tpl->tpl_vars['d']->value['discount']) != '0.00') {?>
                                            <tr>
                                                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Discount'];?>
</td>
                                                <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['d']->value['discount'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
</td>
                                            </tr>
                                        <?php }?>
                                        <tr>
                                            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['d']->value['taxname'];?>
</td>
                                            <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['d']->value['tax1'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
</td>
                                        </tr>

                                        <tr class="h4">
                                            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Grand Total'];?>
</td>
                                            <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['d']->value['total'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php echo $_smarty_tpl->tpl_vars['d']->value['customernotes'];?>

                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </section>
    </div>
<?php
}
}
/* {/block "content_body"} */
}
