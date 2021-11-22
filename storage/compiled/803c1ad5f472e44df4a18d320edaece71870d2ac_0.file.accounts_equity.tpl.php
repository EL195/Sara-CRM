<?php
/* Smarty version 3.1.39, created on 2021-04-15 06:55:43
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/accounts_equity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60781baf0d0bb8_69940981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '803c1ad5f472e44df4a18d320edaece71870d2ac' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/accounts_equity.tpl',
      1 => 1593549340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60781baf0d0bb8_69940981 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107277081160781baf0b2bf1_07999755', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82953983560781baf0cfac1_10371545', 'script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_107277081160781baf0b2bf1_07999755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_107277081160781baf0b2bf1_07999755',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['account']->value->account;?>
</h2>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form method="post" id="mainForm">

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>

                                <div class="form-group">
                                    <label for="balance_<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Initial Balance'];?>
 [ <?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
 ]</label>
                                    <input type="text" class="form-control amount" id="balance_<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" name="balance_<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value->iso_code]))) {?>
                                        data-a-sign="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value->iso_code]['symbol'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value->iso_code]['thousands_separator'];?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value->iso_code]['decimal_mark'];?>
" <?php if (($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value->iso_code]['symbol_first'] == true)) {?> data-p-sign="p" <?php } else { ?> data-p-sign="s" <?php }?>
                                    <?php }?> data-d-group="3">
                                </div>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <input type="hidden" name="account_id" value="<?php echo $_smarty_tpl->tpl_vars['account']->value->id;?>
">

                            <button class="btn btn-primary" type="submit" id="btnSubmit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>

                        </form>
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
class Block_82953983560781baf0cfac1_10371545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_82953983560781baf0cfac1_10371545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/numeric.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>

        $(function () {

            $('.amount').autoNumeric('init', {
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'
            });

            $('#btnSubmit').click(function (e) {
                e.preventDefault();
                $.post("<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/equity-post", $('#mainForm').serialize()).done(function () {
                    window.location = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/list';
                }).fail(function (data) {
                    spNotify(data.responseText, 'error');
                });

            });

        })

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
