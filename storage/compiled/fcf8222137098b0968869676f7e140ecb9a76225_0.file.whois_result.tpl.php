<?php
/* Smarty version 3.1.39, created on 2021-06-17 09:50:48
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/whois_result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cb5338536177_23995997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcf8222137098b0968869676f7e140ecb9a76225' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/whois_result.tpl',
      1 => 1623937839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cb5338536177_23995997 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['result']->value->domainName)) {?>
    <h1 class="mb-3"><?php echo $_smarty_tpl->tpl_vars['result']->value->domainName;?>
</h1>
<?php }?>

<h4>Registration Details</h4>
<div class="hr-line-dashed mt-0"></div>
<?php if (!empty($_smarty_tpl->tpl_vars['result']->value->creationDate)) {?>
    <div class="mb-2">
        <strong><?php echo __('Registered at');?>
:</strong> <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],$_smarty_tpl->tpl_vars['result']->value->creationDate);?>

    </div>

<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['result']->value->expirationDate)) {?>
    <div class="mb-2">
        <strong><?php echo __('Expiration date');?>
:</strong> <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],$_smarty_tpl->tpl_vars['result']->value->expirationDate);?>

    </div>

<?php }?>


<?php if (!empty($_smarty_tpl->tpl_vars['result']->value->owner)) {?>
    <div class="mb-2">
        <strong><?php echo __('Owner');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['result']->value->owner;?>

    </div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['result']->value->registrar)) {?>
    <div class="mb-2">
        <strong><?php echo __('Registrar');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['result']->value->registrar;?>

    </div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['result']->value->nameServers)) {?>

    <h4 class="mt-3"><?php echo __('Nameservers');?>
</h4>
    <div class="hr-line-dashed mt-0"></div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value->nameServers, 'name_server');
$_smarty_tpl->tpl_vars['name_server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name_server']->value) {
$_smarty_tpl->tpl_vars['name_server']->do_else = false;
?>
        <div class="mb-2">
            <strong><?php echo $_smarty_tpl->tpl_vars['name_server']->value;?>
</strong>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }?>

<?php }
}
