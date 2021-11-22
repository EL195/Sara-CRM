<?php
/* Smarty version 3.1.39, created on 2021-06-17 10:01:00
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/knowledgebase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cb559c8d2526_98026049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96e3da3434cdcab963855842d9de7b0af79636e8' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/knowledgebase.tpl',
      1 => 1623712482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cb559c8d2526_98026049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167716266760cb559c8cace3_69808269', "content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl");
}
/* {block "content"} */
class Block_167716266760cb559c8cace3_69808269 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_167716266760cb559c8cace3_69808269',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="card mx-auto" style="width: 800px">


        <div class="card-body">

            <h1 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Articles'];?>
 </h1>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['knowledgebases_group_relations']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>

                <?php if (!empty($_smarty_tpl->tpl_vars['knowledgebases_groups']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>
                    <h2 class="my-3"><?php echo $_smarty_tpl->tpl_vars['knowledgebases_groups']->value[$_smarty_tpl->tpl_vars['key']->value]->gname;?>
</h2>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'kb_relation');
$_smarty_tpl->tpl_vars['kb_relation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['kb_relation']->value) {
$_smarty_tpl->tpl_vars['kb_relation']->do_else = false;
?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['knowledgebases']->value[$_smarty_tpl->tpl_vars['kb_relation']->value->kbid])) {?>
                            <p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/view-article/<?php echo $_smarty_tpl->tpl_vars['kb_relation']->value->kbid;?>
/"><strong><?php echo $_smarty_tpl->tpl_vars['knowledgebases']->value[$_smarty_tpl->tpl_vars['kb_relation']->value->kbid]->title;?>
</strong></a>
                            </p>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php }?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>





        </div>
    </div>


<?php
}
}
/* {/block "content"} */
}
