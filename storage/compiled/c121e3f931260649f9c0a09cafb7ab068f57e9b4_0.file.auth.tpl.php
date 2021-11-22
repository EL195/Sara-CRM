<?php
/* Smarty version 3.1.39, created on 2021-06-17 10:40:33
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cb5ee1eb0e25_47929153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c121e3f931260649f9c0a09cafb7ab068f57e9b4' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/auth.tpl',
      1 => 1623940816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cb5ee1eb0e25_47929153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95932250460cb5ee1e97989_99220428', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82848783360cb5ee1e9b037_95097219', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101453410060cb5ee1ea85a3_87693942', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl");
}
/* {block "head"} */
class Block_95932250460cb5ee1e97989_99220428 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_95932250460cb5ee1e97989_99220428',
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


    <?php if ($_smarty_tpl->tpl_vars['config']->value['recaptcha'] == '1' && !empty($_smarty_tpl->tpl_vars['config']->value['recaptcha_sitekey'])) {?>
        <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?render=<?php echo $_smarty_tpl->tpl_vars['config']->value['recaptcha_sitekey'];?>
"><?php echo '</script'; ?>
>
    <?php }?>

<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_82848783360cb5ee1e9b037_95097219 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_82848783360cb5ee1e9b037_95097219',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="flex-1">
        <div class="container">

            <?php if ($_smarty_tpl->tpl_vars['type']->value == 'client_auth') {?>

                <div class="mx-auto" style="max-width: 440px;">
                    <div class="card p-4 mt-5" style="box-shadow: 1px 0 20px rgba(0, 0, 0, .08);">

                        <h1 class="fw-300 mb-3 text-center">
                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Login'];?>

                        </h1>

                        <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
                            <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

                        <?php }?>

                        <form method="post" class="mt-3" id="form_client_auth" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/auth/">
                            <div class="form-group">
                                <label class="form-label" for="username"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Address'];?>
</label>
                                <input id="username" name="username" class="form-control form-control-lg" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
                                <input type="password" id="password" name="password" class="form-control form-control-lg" required>
                            </div>


                            <div class="form-group">
                                <button type="submit" id="btn_client_auth" class="btn btn-primary btn-block btn-lg"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Login'];?>
</button>
                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['config']->value['allow_customer_registration'] == '1') {?>
                                <div class="form-group mb-0">
                                    <div class="col-sm-12 text-center">
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Dont have an account'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/register/" class="text-info m-l-5"><b><?php echo $_smarty_tpl->tpl_vars['_L']->value['Register'];?>
</b></a>
                                    </div>
                                </div>
                            <?php }?>

                            <div class="text-center">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/forgot_pw/" id="to-recover" class="text-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Forgot password'];?>
</a>
                            </div>



                        </form>




                    </div>
                </div>


            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'client_password_reset') {?>
                <div class="mx-auto" style="max-width: 440px;">
                    <div class="card p-4">

                        <h1 class="fw-300 mb-3 text-center">
                            <?php echo __('Password Reset');?>

                        </h1>

                        <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
                            <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

                        <?php }?>

                        <form method="post" class="mt-3" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/forgot_pw_post/">
                            <div class="form-group">
                                <label class="form-label" for="username"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Address'];?>
</label>
                                <input id="username" name="username" class="form-control form-control-lg" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block btn-lg"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reset Password'];?>
</button>
                            </div>
                        </form>

                        <?php if ($_smarty_tpl->tpl_vars['config']->value['allow_customer_registration'] == '1') {?>
                            <div class="form-group mt-3">
                                <div class="col-sm-12 text-center">
                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Dont have an account'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/register/" class="text-info m-l-5"><b><?php echo $_smarty_tpl->tpl_vars['_L']->value['Register'];?>
</b></a>
                                </div>
                            </div>
                        <?php }?>




                    </div>
                </div>

            <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'client_register') {?>

                <div class="mx-auto" style="max-width: 440px;">
                    <div class="card p-4">

                        <h1 class="fw-300 mb-3 text-center">
                            <?php echo __('Register');?>

                        </h1>

                        <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
                            <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

                        <?php }?>

                        <form method="post" id="form_client_register" class="mt-3" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/register_post/">

                            <div class="form-group">
                                <label class="form-label" for="fullname"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full_Name'];?>
</label>
                                <input id="fullname" name="fullname" class="form-control form-control-lg" required>
                            </div>


                            <div class="form-group">
                                <label class="form-label" for="email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Address'];?>
</label>
                                <input id="email" name="email" class="form-control form-control-lg" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
                                <input type="password" id="password" name="password" class="form-control form-control-lg" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="password2"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm_Password'];?>
</label>
                                <input type="password" id="password2" name="password2" class="form-control form-control-lg" required>
                            </div>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra_fields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>

                                <div class="form-group">
                                    <label for="field_<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" class="form-label"><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</label>
                                    <input type="text" class="form-control form-control-lg" id="field_<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
">
                                </div>



                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <div class="form-group">
                                <button type="submit" id="btn_client_register" class="btn btn-primary btn-block btn-lg"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Register'];?>
</button>
                            </div>
                        </form>

                        <div class="form-group mt-3">
                            <div class="col-sm-12 text-center">
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Already registered'];?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/login/" class="text-info m-l-5"><b><?php echo $_smarty_tpl->tpl_vars['_L']->value['Login'];?>
</b></a>
                            </div>
                        </div>




                    </div>
                </div>

            <?php }?>


            <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center">
                &copy; <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_101453410060cb5ee1ea85a3_87693942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_101453410060cb5ee1ea85a3_87693942',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {

            var $modal = $('#cloudonex_body');

            <?php if ($_smarty_tpl->tpl_vars['type']->value == 'admin_auth') {?>
            let $form_admin_auth = $('#form_admin_auth');
            let $btn_admin_auth = $('#btn_admin_auth');

            $form_admin_auth.on('submit',function (e) {
                e.preventDefault();

                $btn_admin_auth.disabled = true;

                <?php if ($_smarty_tpl->tpl_vars['config']->value['recaptcha'] == '1' && !empty($_smarty_tpl->tpl_vars['config']->value['recaptcha_sitekey'])) {?>

                grecaptcha.ready(function() {
                    grecaptcha.execute('<?php echo $_smarty_tpl->tpl_vars['config']->value['recaptcha_sitekey'];?>
', { action: 'submit' }).then(function(token) {
                        $.post( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
login/post/<?php if ((isset($_smarty_tpl->tpl_vars['after']->value))) {
echo $_smarty_tpl->tpl_vars['after']->value;?>
/<?php }?>", {
                            username: $('#username').val(),
                            password: $('#password').val(),
                            token: token,
                        })
                            .done(function( data ) {
                                window.location = data.redirect_url;
                            }).fail(function(data) {
                            $btn_admin_auth.disabled = false;
                            toastr.error(data.responseText);
                        });
                    });
                });

                <?php } else { ?>

                $.post( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
login/post/<?php if ((isset($_smarty_tpl->tpl_vars['after']->value))) {
echo $_smarty_tpl->tpl_vars['after']->value;?>
/<?php }?>", {
                    username: $('#username').val(),
                    password: $('#password').val(),
                })
                    .done(function( data ) {
                        window.location = data.redirect_url;
                    }).fail(function(data) {
                    $btn_admin_auth.disabled = false;
                    toastr.error(data.responseText);
                });

                <?php }?>


            });

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['type']->value == 'client_auth') {?>

            let $form_client_auth = $('#form_client_auth');
            let $btn_client_auth = $('#btn_client_auth');

            $form_client_auth.on('submit',function (e) {
                e.preventDefault();

                $btn_client_auth.disabled = true;

                <?php if ($_smarty_tpl->tpl_vars['config']->value['recaptcha'] == '1' && !empty($_smarty_tpl->tpl_vars['config']->value['recaptcha_sitekey'])) {?>

                grecaptcha.ready(function() {
                    grecaptcha.execute('<?php echo $_smarty_tpl->tpl_vars['config']->value['recaptcha_sitekey'];?>
', { action: 'submit' }).then(function(token) {
                        $.post( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/auth/", {
                            username: $('#username').val(),
                            password: $('#password').val(),
                            token: token,
                        })
                            .done(function( data ) {
                                window.location = data.redirect_url;
                            }).fail(function(data) {
                            $btn_client_auth.disabled = false;
                            toastr.error(data.responseText);
                        });
                    });
                });

                <?php } else { ?>

                $.post( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/auth/", {
                    username: $('#username').val(),
                    password: $('#password').val(),
                })
                    .done(function( data ) {
                        window.location = data.redirect_url;
                    }).fail(function(data) {
                    $btn_client_auth.disabled = false;
                    toastr.error(data.responseText);
                });

                <?php }?>


            });

            <?php if ((isset($_smarty_tpl->tpl_vars['admin']->value)) && $_smarty_tpl->tpl_vars['admin']->value) {?>

            $('#login_as_admin').on('click',function () {
                window.location = base_url + 'login/';
            });

            $('#btn_edit_content').on('click',function (e) {
                e.preventDefault();

                $.fancybox.open({
                    src  : base_url + 'settings/client-auth-page-widget',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#edit_content').redactor();
                        },
                        modal: true,
                    }
                });

            });

            $modal.on('click', '.modal_submit', function(e){

                e.preventDefault();

                $.post( base_url + "settings/client-auth-page-widget-save/", $("#clx_modal_form").serialize())
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            location.reload();

                        }

                        else {
                            toastr.error(data);
                        }

                    });

            });

            <?php }?>


            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['type']->value == 'client_register') {?>

            let $form_client_register = $('#form_client_register');
            let $btn_client_register = $('#btn_client_register');

            $form_client_register.on('submit',function (e) {
                e.preventDefault();

                $btn_client_register.disabled = true;

                <?php if ($_smarty_tpl->tpl_vars['config']->value['recaptcha'] == '1' && !empty($_smarty_tpl->tpl_vars['config']->value['recaptcha_sitekey'])) {?>

                grecaptcha.ready(function() {
                    grecaptcha.execute('<?php echo $_smarty_tpl->tpl_vars['config']->value['recaptcha_sitekey'];?>
', { action: 'submit' }).then(function(token) {
                        $.post( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/register_post/", {
                            fullname: $('#fullname').val(),
                            email: $('#email').val(),
                            password: $('#password').val(),
                            password2: $('#password2').val(),
                            token: token,
                        })
                            .done(function( data ) {
                                window.location = data.redirect_url;
                            }).fail(function(data) {
                            $btn_client_register.disabled = false;
                            toastr.error(data.responseText);
                        });
                    });
                });

                <?php } else { ?>

                $.post( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/register_post/", {
                    fullname: $('#fullname').val(),
                    email: $('#email').val(),
                    password: $('#password').val(),
                    password2: $('#password2').val(),
                })
                    .done(function( data ) {
                        window.location = data.redirect_url;
                    }).fail(function(data) {
                    $btn_client_register.disabled = false;
                    toastr.error(data.responseText);
                });

                <?php }?>


            });

            <?php }?>

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
