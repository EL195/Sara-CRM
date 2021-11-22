<?php
/* Smarty version 3.1.39, created on 2021-06-17 10:01:30
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/view_article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cb55badd7d56_13480512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9286534f032305c9547c6d86020c017655e8f371' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/view_article.tpl',
      1 => 1623936862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cb55badd7d56_13480512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19375565560cb55badd56e5_91621036', "content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl");
}
/* {block "content"} */
class Block_19375565560cb55badd56e5_91621036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19375565560cb55badd56e5_91621036',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <div class="mx-auto" style="width: 800px">

        <a class="btn btn-primary my-3" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/kb/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Back to the List'];?>
</a>

        <div class="card">

            <div class="card-body">

                <h1 class="text-center mb-3"> <?php echo $_smarty_tpl->tpl_vars['article']->value->title;?>
 </h1>
                <p>
                    <?php echo $_smarty_tpl->tpl_vars['article']->value->description;?>

                </p>


            </div>

        </div>



    </div>


<?php
}
}
/* {/block "content"} */
}
