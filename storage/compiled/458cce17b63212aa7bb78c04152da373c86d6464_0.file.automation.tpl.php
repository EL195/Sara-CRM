<?php
/* Smarty version 3.1.39, created on 2021-11-21 14:12:27
  from '/Users/pondo2/Sites/sara_suite/ui/theme/default/automation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619a9a1b15bca1_04290474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '458cce17b63212aa7bb78c04152da373c86d6464' => 
    array (
      0 => '/Users/pondo2/Sites/sara_suite/ui/theme/default/automation.tpl',
      1 => 1633628023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619a9a1b15bca1_04290474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_418447119619a9a1b155016_44521689', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_264338793619a9a1b15b0e1_06080450', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_418447119619a9a1b155016_44521689 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_418447119619a9a1b155016_44521689',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Automation'];?>
</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">

                        <h4 class="mb-3">Create CRON Job for to run every minute (* * * * * )</h4>

                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <input id="cron_value" type="text" class="form-control form-control-lg" value="php <?php echo getcwd();?>
/system/cron.php >> /dev/null 2>&1">
                        </div>
                        <div class="form-group">
                            <label>Or,</label>
                            <input id="cron_value" type="text" class="form-control form-control-lg" value="curl --silent <?php echo APP_URL;?>
/system/cron.php &>/dev/null">
                        </div>

                        <div class="form-group">
                            <label><?php echo __('Alternative');?>
 (<?php echo __('Daily');?>
)</label>
                            <input id="cron_value" type="text" class="form-control form-control-lg" value="curl --silent <?php echo APP_URL;?>
/system/cron_fallback_daily.php &>/dev/null">
                        </div>



                        <table class="table table-hover">
                            <tbody>



                            <tr>
                                <td width="80%">
                                    <label class="font-weight-bold" for="task_automatic_payment_reminder"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enable Automatic Payment Reminder'];?>
</label> <br>

                                </td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" class="clx_switch" id="task_automatic_payment_reminder" <?php if (get_option('task_automatic_payment_reminder') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%">
                                    <label class="font-weight-bold" for="task_daily_accounting_snapshot"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Generate Daily Accounting Snapshot'];?>
</label> <br>

                                </td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" class="clx_switch" id="task_daily_accounting_snapshot" <?php if (get_option('task_daily_accounting_snapshot') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>








                                                                                                                
                            </tbody>
                        </table>


                        <div class="form-group">
                            <label for="global_notifications_email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Send Notifications To'];?>
</label>
                            <input class="form-control" name="global_notifications_email" id="global_notifications_email" value="<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'global_notifications_email');?>
">
                        </div>

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
class Block_264338793619a9a1b15b0e1_06080450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_264338793619a9a1b15b0e1_06080450',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('.clx_switch').change(function() {

                let that = $(this);
                let value = 0;
                if(that.prop('checked')){

                    value = 1;

                }
                $.post( base_url+'settings/update_option/', { opt: that.attr('id'), val: value })
                    .done(function() {
                        location.reload();
                    });
            });

            $('#global_notifications_email').on('keyup paste',function () {
                let that = $(this);
                $.post( base_url+'settings/set-global-notification-email/', { email: that.val() });
            });
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
