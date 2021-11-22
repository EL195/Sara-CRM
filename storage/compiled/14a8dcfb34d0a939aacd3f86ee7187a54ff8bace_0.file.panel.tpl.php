<?php
/* Smarty version 3.1.39, created on 2021-03-31 18:24:29
  from '/Users/razib/Documents/valet/business-suite/apps/widepay/views/panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6064f69d332052_59709871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14a8dcfb34d0a939aacd3f86ee7187a54ff8bace' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/widepay/views/panel.tpl',
      1 => 1617229466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6064f69d332052_59709871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16241886476064f69d327681_49289467', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8139486366064f69d3287f5_08900918', "content_body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11481161206064f69d331628_56576775', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/base.tpl");
}
/* {block "head"} */
class Block_16241886476064f69d327681_49289467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_16241886476064f69d327681_49289467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <style>
        @media (min-width: 992px){
            .clx-fixed-navigation:not(.clx-navigation-type-top):not(.nav-function-hidden):not(.nav-function-minify) .page-content-wrapper {
                padding-left: 0;
            }
        }
    </style>


<?php
}
}
/* {/block "head"} */
/* {block "content_body"} */
class Block_8139486366064f69d3287f5_08900918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_body' => 
  array (
    0 => 'Block_8139486366064f69d3287f5_08900918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="page-content-wrapper bg-transparent m-0">
        <div class="height-10 w-100 shadow-sm px-4 bg-brand-gradient">
            <div class="d-flex align-items-center container p-0">
                <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9 border-0">
                    <a href="<?php echo APP_URL;?>
" class="page-logo-link press-scale-down d-flex align-items-center">
                        <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_square']))) {?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_square'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" aria-roledescription="logo">
                        <?php } else { ?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/storage/system/logo-512x512.png?v=2" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" aria-roledescription="logo">
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_text']))) {?>
                            <span class="page-logo-text mr-1"><?php echo $_smarty_tpl->tpl_vars['config']->value['logo_text'];?>
</span>
                        <?php } else { ?>
                             
                        <?php }?>
                    </a>
                </div>


            </div>
        </div>
        <div class="flex-1">
            <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">

                <div class="mx-auto" style="max-width: 600px;">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h3 class="text-muted">Fatura</h3>
                                    <h2><?php echo cloudonex_get_invoice_number($_smarty_tpl->tpl_vars['invoice']->value);?>
</h2>
                                </div>
                                <div class="col text-right">
                                    <h3 class="text-muted">Valor</h3>
                                    <h2><?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
</h2>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <h3><?php echo $_smarty_tpl->tpl_vars['contact']->value->account;?>
</h3>
                            <div class="hr-line-dashed"></div>

                            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
widepay/payments/process/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/token_<?php echo $_smarty_tpl->tpl_vars['invoice']->value->vtoken;?>
/">
                                <div class="form-group">
                                    <label>Forma</label>
                                    <select class="form-control" name="forma" id="forma">
                                        <option value="Boleto">Boleto</option>
                                        <option value="Cartão">Cartão</option>
                                    </select>
                                </div>

                                <div class="form-group" id="vencimentoDiv">
                                    <label>Vencimento</label>
                                    <input type="text" class="form-control" id="vencimento" readonly name="vencimento" value="<?php echo $_smarty_tpl->tpl_vars['v_date']->value;?>
">
                                </div>

                                <div class="form-group">
                                    <label>Pessoa</label>
                                    <select class="form-control" name="pessoa" id="pessoa">
                                        <option value="Física">Física</option>
                                        <option value="Jurídica">Jurídica</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Tipo</label>
                                    <select class="form-control" name="type" id="type">
                                        <option value="cpf">CPF</option>
                                        <option value="cnpj">CNPJ</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>CPF / CNPJ</label>
                                    <input type="text" name="business_number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->business_number;?>
">
                                </div>

                                <button class="btn btn-primary" type="submit">Continuar</button>

                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/token_<?php echo $_smarty_tpl->tpl_vars['invoice']->value->vtoken;?>
/" class="btn btn-danger">Cancel</a>

                            </form>

                        </div>
                    </div>
                </div>

                <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center">
                    &copy; <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>

                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content_body"} */
/* {block "script"} */
class Block_11481161206064f69d331628_56576775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_11481161206064f69d331628_56576775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {

            var $forma = $('#forma');
            $forma.on('change',function () {
                var forma = $forma.val();

                if(forma === 'Cartão') {
                    $('#vencimentoDiv').hide('slow');
                }
                else{
                    $('#vencimentoDiv').show('slow');
                }

            });

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
