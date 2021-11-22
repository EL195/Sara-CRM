<?php
/* Smarty version 3.1.39, created on 2021-08-22 14:49:13
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/transfer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61229c2966e360_80327799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0d4dc2ea480e16bb945a21d62a499f43ceda8bb' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/transfer.tpl',
      1 => 1629658150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61229c2966e360_80327799 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124950230561229c29649543_32122680', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65214041961229c2964e2f8_25525788', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190248046261229c2966b2c1_73800843', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_124950230561229c29649543_32122680 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_124950230561229c29649543_32122680',
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
<?php }?>


    </style>


<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_65214041961229c2964e2f8_25525788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_65214041961229c2964e2f8_25525788',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['New Transfer'];?>
</h2>

                </div>

                <div class="panel-container show">
                    <div class="panel-content" id="ibox_form">
                        <div class="alert alert-danger" id="emsg">
                            <span id="emsgbody"></span>
                        </div>
                        <form class="form-horizontal" method="post" id="tform" role="form">
                            <div class="form-group">
                                <label for="faccount"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['From'];?>
</span></label>
                                <select id="faccount" name="faccount" class="form-control">
                                    <option value=""><span class="h6"></span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose an Account'];?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="taccount"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['To'];?>
</span></label>
                                <select id="taccount" name="taccount" class="form-control">
                                    <option value=""><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose an Account'];?>
</span></option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</span></label>
                                <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['mdate']->value;?>
" name="date" id="date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                            </div>

                            <div class="form-group">
                                <label for="description"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</span></label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>

                            <div class="form-group">
                                <label for="currency"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency'];?>
</span></label>
                                <select id="currency" name="currency" class="form-control">

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['iso_code'];?>
" <?php if ($_smarty_tpl->tpl_vars['config']->value['home_currency'] == $_smarty_tpl->tpl_vars['currency']->value['iso_code']) {?>selected<?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]))) {?>
                                            data-a-sign="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['symbol'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['thousands_separator'];?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['decimal_mark'];?>
" <?php if (($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['symbol_first'] == true)) {?> data-p-sign="p" <?php } else { ?> data-p-sign="s" <?php }?>
                                                <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['iso_code'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>

                            <div class="form-group">
                                <label for="amount"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</span></label>
                                <input type="text" class="form-control amount" id="amount" name="amount">
                            </div>



                            <div class="form-group">
                                <label for="tags"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tags'];?>
</span></label>
                                <select name="tags[]" id="tags"  class="form-control" multiple="multiple">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="pmethod"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</span></label>
                                <select id="pmethod" name="pmethod" class="form-control">
                                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Payment Method'];?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pms']->value, 'pm');
$_smarty_tpl->tpl_vars['pm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pm']->value) {
$_smarty_tpl->tpl_vars['pm']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['pm']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['pm']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ref"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Ref'];?>
</span></label>
                                <input type="text" class="form-control" id="ref" name="ref">
                                <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ref_example'];?>
</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-8">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recent Transfers'];?>
</h2>

                </div>

                <div class="panel-container show">
                    <div class="panel-content">

                        <table class="table table-bordered table-striped sys_table">
                            <thead <?php if (empty($_smarty_tpl->tpl_vars['config']->value['admin_dark_theme'])) {?>
                                style="background:#f0f2ff"
                                    <?php }?>>
                            <tr>
                                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                                <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>

                            </tr>
                            </thead>
                            <tbody>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tr']->value, 'trs');
$_smarty_tpl->tpl_vars['trs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['trs']->value) {
$_smarty_tpl->tpl_vars['trs']->do_else = false;
?>
                                <tr>
                                    <td><span class="h6"><?php echo $_smarty_tpl->tpl_vars['trs']->value['account'];?>
</span></td>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['trs']->value['id'];?>
/"><span class="text-info" ><?php echo $_smarty_tpl->tpl_vars['trs']->value['description'];?>
</span></a> </td>
                                    <td class="amount"><?php echo $_smarty_tpl->tpl_vars['trs']->value['amount'];?>
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
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_190248046261229c2966b2c1_73800843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_190248046261229c2966b2c1_73800843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {

            var $currency = $('#currency');
            var $amount = $("#amount");


            function clxAmountSingleFieldAutoNumeric(amountId) {
                $(amountId).autoNumeric('destroy');
                $(amountId).autoNumeric('init', {
                    aSign: $currency.find(':selected').data('a-sign'),
                    dGroup: <?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
,
                    aPad: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
,
                    pSign: $currency.find(':selected').data('p-sign'),
                    aDec: $currency.find(':selected').data('a-dec'),
                    aSep: $currency.find(':selected').data('a-sep'),
                    vMax: '9999999999999999.00',
                    vMin: '-9999999999999999.00'

                });
            }

            $currency.on('change',function (event) {
                clxAmountSingleFieldAutoNumeric('#amount');
            });



            clxAmountSingleFieldAutoNumeric('#amount');

            function ib_autonumeric() {
                $('.amount').autoNumeric('init', {
                    vMax: '9999999999999999.00',
                    vMin: '-9999999999999999.00'

                });

            }


            ib_autonumeric();

            $("#faccount").select2({

            });
            $("#taccount").select2({

            });
            $("#pmethod").select2({

            });


            $('#tags').select2({
                tags: true,
                tokenSeparators: [','],

            });


            $("#emsg").hide();



            var _url = $("#_url").val();




            $("#submit").click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message: null });
                var _url = $("#_url").val();
                $.post(_url + 'transactions/transfer-post/', {


                    faccount: $('#faccount').val(),
                    taccount: $('#taccount').val(),
                    date: $('#date').val(),

                    amount: $('#amount').val(),

                    description: $('#description').val(),
                    tags: $('#tags').val(),

                    pmethod: $('#pmethod').val(),
                    ref: $('#ref').val(),
                    currency: $currency.val()

                })
                    .done(function (data) {
                        var sbutton = $("#submit");
                        var _url = $("#_url").val();
                        if ($.isNumeric(data)) {

                            location.reload();
                        }
                        else {
                            $('#ibox_form').unblock();
                            var body = $("html, body");
                            body.animate({ scrollTop:0 }, '1000', 'swing');
                            $("#emsgbody").html(data);
                            $("#emsg").show("slow");
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
