<?php
/* Smarty version 3.1.39, created on 2021-08-14 07:16:26
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6117a60a1ed3b5_15779194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8a067daf9ea0b2650eadc882651496e0564a0de' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/home.tpl',
      1 => 1623712482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6117a60a1ed3b5_15779194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21118707466117a60a1e2e04_60693634', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10542261306117a60a1ecdb2_65159845', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl");
}
/* {block "content"} */
class Block_21118707466117a60a1e2e04_60693634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21118707466117a60a1e2e04_60693634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <div class="container">

        <h1 class="text-center my-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Products n Services'];?>
</h1>

        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>

                <div class="col-md-3 col-xs">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/items/<?php echo $_smarty_tpl->tpl_vars['group']->value->slug;?>
/" class="m-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3><?php echo $_smarty_tpl->tpl_vars['group']->value->name;?>
</h3>
                            </div>
                        </div>
                    </a>
                </div>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-3">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/whois/" class="m-3">
                    <div class="card">
                        <div class="card-body">

                            <div class="text-center">
                                <img style="max-width: 120px;" src="<?php echo APP_URL;?>
/ui/theme/default/hostbilling/img/whois.png">
                                <h3 class="mt-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['WHOIS Lookup'];?>
</h3>
                            </div>

                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/kb/" class="m-3">
                    <div class="card">
                        <div class="card-body">

                            <div class="text-center">
                                <img style="max-width: 120px;" src="<?php echo APP_URL;?>
/ui/theme/default/hostbilling/img/file.png">
                                <h3 class="mt-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Knowledgebase'];?>
</h3>
                            </div>

                        </div>
                    </div>
                </a>
            </div>


        </div>





    </div>




<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_10542261306117a60a1ecdb2_65159845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_10542261306117a60a1ecdb2_65159845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
