<?php
/* Smarty version 3.1.39, created on 2021-04-07 19:49:43
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/sms_caster/client/schedule_sms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606e4517dc2e44_89393207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f1dcc260613ed3c0819a786d5cab2e865c2ad4c' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/sms_caster/client/schedule_sms.tpl',
      1 => 1617839381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606e4517dc2e44_89393207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_398750615606e4517dc0468_91748197', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_599184110606e4517dc26e9_52512798', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "sms_caster/layouts/client.tpl");
}
/* {block "content"} */
class Block_398750615606e4517dc0468_91748197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_398750615606e4517dc0468_91748197',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div style="max-width: 800px; width: 100%;" class="mx-auto">
        <div class="card">
            <div class="card-body">
                <h3>Schedule Bulk SMS</h3>
                <div class="hr-line-dashed"></div>

                <form>
                    <div class="form-group">
                        <label>Date & Time</label>
                        <input class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Group</label>
                        <select class="custom-select">
                            <option value="">--</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" name="message" id="message" rows="4"></textarea>

                        <p class="help-block" id="sms-counter">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Remaining'];?>
: <span class="remaining"></span> | <?php echo $_smarty_tpl->tpl_vars['_L']->value['Length'];?>
: <span class="length"></span> | <?php echo $_smarty_tpl->tpl_vars['_L']->value['Messages'];?>
: <span class="messages"></span>
                        </p>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Schedule</button>
                    </div>
                </form>

            </div>
        </div>
    </div>






<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_599184110606e4517dc26e9_52512798 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_599184110606e4517dc26e9_52512798',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {
            $('#message').countSms('#sms-counter');
        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
