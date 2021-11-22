<?php
/* Smarty version 3.1.39, created on 2021-06-29 08:39:08
  from '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/view-recruitment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db146c0fc8e5_70437798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d2f5b842b02d3423dc6bfe34cf346ac919d7e89' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/view-recruitment.tpl',
      1 => 1612523745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db146c0fc8e5_70437798 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83479499960db146c0f8770_23760017', "content");
?>


<?php }
/* {block "content"} */
class Block_83479499960db146c0f8770_23760017 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_83479499960db146c0f8770_23760017',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <body style="margin: 0; padding: 0; width: 100%; word-break: break-word; -webkit-font-smoothing: antialiased; --bg-opacity: 1; background-color: #eceff1; background-color: rgba(236, 239, 241, var(--bg-opacity));">
    <div style="display: none;"><?php echo $_smarty_tpl->tpl_vars['recruitment']->value->title;?>
</div>
    <div role="article" aria-roledescription="email" aria-label="Welcome to PixInvent 👋" lang="en">
        <table style="font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; width: 100%;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
                <td align="center" style="--bg-opacity: 1; background-color: #eceff1; background-color: rgba(236, 239, 241, var(--bg-opacity)); font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif;" bgcolor="rgba(236, 239, 241, var(--bg-opacity))">
                    <table class="sm-w-full" style="font-family: 'Montserrat',Arial,sans-serif; width: 600px;" width="600" cellpadding="0" cellspacing="0" role="presentation">
                        <tr>


                            </div>
                            <td class="sm-py-32 sm-px-24" style="font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; padding: 48px; text-align: center;" align="center">
                                <div class="ib">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
storage/system/<?php echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];?>
" alt="Logo" >
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="sm-px-24" style="font-family: 'Montserrat',Arial,sans-serif;min-width: 400px">
                                <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                    <tr>
                                        <td class="sm-px-24" style="--bg-opacity: 1; background-color: #ffffff; background-color: rgba(255, 255, 255, var(--bg-opacity)); border-radius: 4px; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; font-size: 14px; line-height: 24px; padding: 48px; text-align: left; --text-opacity: 1; color: #626262; color: rgba(98, 98, 98, var(--text-opacity));" bgcolor="rgba(255, 255, 255, var(--bg-opacity))" align="left">
                                            <p class="sm-leading-32" style="font-weight: 600; font-size: 20px; margin: 0 0 24px; --text-opacity: 1; color: #263238; color: rgba(38, 50, 56, var(--text-opacity));">
                                                <?php echo $_smarty_tpl->tpl_vars['recruitment']->value->title;?>

                                            </p>
                                            <p style="margin: 24px 0;">
                                                <span style="font-weight: 600;">Description</span>
                                                <?php echo $_smarty_tpl->tpl_vars['recruitment']->value->description;?>


                                            </p>


                                            <table class="mb-3" style="font-family: 'Montserrat',Arial,sans-serif;" cellpadding="0" cellspacing="0" role="presentation">
                                                <tr>
                                                    <td style="mso-padding-alt: 16px 24px; --bg-opacity: 1; background-color: #7367f0; background-color: rgba(115, 103, 240, var(--bg-opacity)); border-radius: 4px; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif;" bgcolor="rgba(115, 103, 240, var(--bg-opacity))">
                                                        <a  href="" style="display: block; font-weight: 600; font-size: 14px; line-height: 100%; padding: 16px 24px; --text-opacity: 1; color: #ffffff; color: rgba(255, 255, 255, var(--text-opacity)); text-decoration: none;">Apply for the Job &rarr;</a>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table style="font-family: 'Montserrat',Arial,sans-serif; width: 100%;" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                                <tr>
                                                    <td style="font-family: 'Montserrat',Arial,sans-serif; padding-top: 32px; padding-bottom: 32px;">
                                                        <div style="--bg-opacity: 1; background-color: #eceff1; background-color: rgba(236, 239, 241, var(--bg-opacity)); height: 1px; line-height: 1px;">&zwnj;</div>
                                                    </td>
                                                </tr>
                                            </table>
                                            <p style="margin: 0 0 16px;">
                                                Should you have any question?
                                                <a href="" class="hover-underline" style="--text-opacity: 1; color: #7367f0; color: rgba(115, 103, 240, var(--text-opacity)); text-decoration: none;">Contact us</a>.
                                            </p>
                                            <p style="margin: 0 0 16px;">Thanks, <br><?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>
  Team</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: 'Montserrat',Arial,sans-serif; height: 20px;" height="20"></td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; font-size: 12px; padding-left: 48px; padding-right: 48px; --text-opacity: 1; color: #eceff1; color: rgba(236, 239, 241, var(--text-opacity));">


                                            <p style="--text-opacity: 1; color: #263238; color: rgba(38, 50, 56, var(--text-opacity));">
                                                Use of our service and website is subject to our
                                                <a href="#" class="hover-underline" style="--text-opacity: 1; color: #7367f0; color: rgba(115, 103, 240, var(--text-opacity)); text-decoration: none;">Terms of Use</a> and
                                                <a href="#" class="hover-underline" style="--text-opacity: 1; color: #7367f0; color: rgba(115, 103, 240, var(--text-opacity)); text-decoration: none;">Privacy Policy</a>.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-family: 'Montserrat',Arial,sans-serif; height: 16px;" height="16"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    </body>

<?php
}
}
/* {/block "content"} */
}
