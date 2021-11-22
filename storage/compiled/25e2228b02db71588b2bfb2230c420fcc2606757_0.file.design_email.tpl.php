<?php
/* Smarty version 3.1.39, created on 2021-05-17 12:06:07
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/design_email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a2946f1708a4_15413396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25e2228b02db71588b2bfb2230c420fcc2606757' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/design_email.tpl',
      1 => 1621267564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a2946f1708a4_15413396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112351196560a2946f16a969_00209068', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132802994560a2946f16fb22_42651365', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_112351196560a2946f16a969_00209068 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_112351196560a2946f16a969_00209068',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">



        <div class="col-md-12">



            <div class="card">

                <div class="card-body">

                    <h1>Design Email</h1>

                    <hr>

                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
marketing/save-design-email">
                        <?php if ($_smarty_tpl->tpl_vars['selected_campaign']->value) {?>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['selected_campaign']->value->id;?>
">
                        <?php }?>


                        <div class="form-group">
                            <label for="title">Subject</label>
                            <input class="form-control" name="subject" <?php if ($_smarty_tpl->tpl_vars['selected_campaign']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['selected_campaign']->value->subject;?>
"
                                    <?php }?> id="title">
                        </div>

                        <div class="form-group">
                            <label for="contents">Message</label>
                            <textarea class="form-control" rows="10" id="body" name="body"><?php if ($_smarty_tpl->tpl_vars['selected_campaign']->value) {
echo $_smarty_tpl->tpl_vars['selected_campaign']->value->body_html;
}?></textarea>
                        </div>

                        <button class="btn btn-primary" type="submit">Save</button>

                    </form>


                </div>
            </div>
        </div>



    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_132802994560a2946f16fb22_42651365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_132802994560a2946f16fb22_42651365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <?php echo '<script'; ?>
>


        $(function () {


            $('#body').redactor(
                {
                    minHeight: 200, // pixels
                    plugins: ['fontcolor']
                }
            );







        });

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
