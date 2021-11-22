<?php
/* Smarty version 3.1.39, created on 2021-10-07 08:08:43
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/contracts_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615ee34b31cbb6_82002329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8126f031ac9c67ce093662af9ba07a2c47bac603' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/contracts_view.tpl',
      1 => 1633608520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615ee34b31cbb6_82002329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1273294612615ee34b30c9e6_62581236', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_942624919615ee34b3197f5_10155638', 'script');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/paper.tpl");
}
/* {block "content"} */
class Block_1273294612615ee34b30c9e6_62581236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1273294612615ee34b30c9e6_62581236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <h1><?php echo $_smarty_tpl->tpl_vars['contract']->value->title;?>
</h1>
                <?php if (!empty($_smarty_tpl->tpl_vars['contract_types']->value[$_smarty_tpl->tpl_vars['contract']->value->type])) {?>
                    <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['contract_types']->value[$_smarty_tpl->tpl_vars['contract']->value->type];?>
</p>
                <?php }?>
            </div>
            <div class="col-md-6 text-right">
                <button class="btn btn-success"><i class="fal fa-sign"></i> <?php echo __('Sign');?>
</button>
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contracts/download/<?php echo $_smarty_tpl->tpl_vars['contract']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['contract']->value->uuid;?>
" class="btn btn-primary"><i class="fal fa-file-pdf"></i> <?php echo __('Download');?>
</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <?php echo $_smarty_tpl->tpl_vars['contract']->value->description;?>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div id="signaturePadArea">

                                </div>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php echo __('Sign above');?>
</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="button" id="clearSignature" class="btn btn-danger btn-sm"><?php echo __('Clear signature');?>
</button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>

    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_942624919615ee34b3197f5_10155638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_942624919615ee34b3197f5_10155638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/jSignature.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>

        $(function () {

            var $signaturePadArea = $("#signaturePadArea");

            $signaturePadArea.jSignature({
                color:"#000",


            });

            <?php if ($_smarty_tpl->tpl_vars['contract']->value->party_two_sign != '') {?>

            $signaturePadArea.jSignature("setData","<?php echo $_smarty_tpl->tpl_vars['contract']->value->party_two_sign;?>
");

            <?php }?>

            $signaturePadArea.bind('change', function(e){
                var signData = $signaturePadArea.jSignature("getData");
                $.post( "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contracts/save-signature/<?php echo $_smarty_tpl->tpl_vars['contract']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['contract']->value->uuid;?>
", {
                    signData: signData,
                });
            });


            $('#clearSignature').on('click',function () {
                $signaturePadArea.jSignature("reset");
            });

        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
