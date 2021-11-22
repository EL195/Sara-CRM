<?php
/* Smarty version 3.1.39, created on 2021-04-16 05:29:00
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607958dc181f56_68962494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0f7ed631f18004794e9140a448309de443f5f79' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/auth.tpl',
      1 => 1618565181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607958dc181f56_68962494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_962690149607958dc1582b8_68178700', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1428525625607958dc15b074_01791108', "content_body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1993158087607958dc176c63_66758851', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/base.tpl");
}
/* {block "head"} */
class Block_962690149607958dc1582b8_68178700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_962690149607958dc1582b8_68178700',
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
/* {block "content_body"} */
class Block_1428525625607958dc15b074_01791108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_body' => 
  array (
    0 => 'Block_1428525625607958dc15b074_01791108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="page-content-wrapper bg-transparent m-0">
        <div class="height-10 w-100 shadow-sm px-4 bg-brand-gradient">
            <div class="d-flex align-items-center container p-0">
                <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9 border-0">
                    <a href="<?php echo APP_URL;?>
" class="page-logo-link press-scale-down d-flex align-items-center">
                        <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_square']))) {?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_square'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" aria-roledescription="logo">
                        <?php } else { ?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/storage/system/logo-512x512.png?v=2" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" aria-roledescription="logo">
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_text']))) {?>
                            <span class="page-logo-text mr-1"><?php echo $_smarty_tpl->tpl_vars['config']->value['logo_text'];?>
</span>
                        <?php } else { ?>
                             
                        <?php }?>
                    </a>
                </div>

                <?php if (($_smarty_tpl->tpl_vars['type']->value == 'client_auth' || $_smarty_tpl->tpl_vars['type']->value == 'client_password_reset') && $_smarty_tpl->tpl_vars['config']->value['allow_customer_registration'] == '1') {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/register/" class="btn-link text-white ml-auto">
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Dont have an account'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['Register'];?>

                    </a>

                <?php }?>


            </div>
        </div>
        <div class="flex-1">
            <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">

                <?php if ($_smarty_tpl->tpl_vars['type']->value == 'admin_auth') {?>

                    <div class="mx-auto" style="max-width: 440px;">
                        <div class="card p-4">

                            <h1 class="mb-3 text-center">
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Login'];?>

                            </h1>

                            <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
                                <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

                            <?php }?>

                            <form method="post" id="form_admin_auth" class="mt-3" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
login/post/<?php if ((isset($_smarty_tpl->tpl_vars['after']->value))) {
echo $_smarty_tpl->tpl_vars['after']->value;?>
/<?php }?>">
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
                                    <button type="submit" id="btn_admin_auth" class="btn btn-primary btn-block btn-lg"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sign in'];?>
</button>
                                </div>
                            </form>

                            <div class="text-center mt-3">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
admin/forgot-pw/" id="to-recover" class="text-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Forgot password'];?>
</a>
                            </div>




                        </div>
                    </div>

                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'admin_password_reset') {?>

                    <div class="mx-auto" style="max-width: 440px;">
                        <div class="card p-4">

                            <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
                                <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

                            <?php }?>

                            <form method="post" class="mt-3" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
admin/forgot-pw-post/">
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

                            <div class="mt-3 text-center">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
admin/"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Back To Login'];?>
</a>
                            </div>

                        </div>
                    </div>

                    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'client_auth') {?>

                    <div class="row">
                        <div class="col col-md-6 col-lg-7">

                            <?php if ((isset($_smarty_tpl->tpl_vars['admin']->value)) && $_smarty_tpl->tpl_vars['admin']->value) {?>
                                <div class="my-3">
                                    <a href="javascript:;" id="btn_edit_content" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logout'];?>
</a>
                                </div>
                                <div class="hr-line-dashed"></div>
                            <?php }?>

                            <div style="font-size: 18px;" class="fw-300">

                                <?php echo Widget::getWidgetContent('client-auth-page-widget');?>


                            </div>



                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto">
                            <div class="card p-4" style="box-shadow: 1px 0 20px rgba(0, 0, 0, .08);">

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
                    </div>


                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == 'client_password_reset') {?>
                    <div class="mx-auto" style="max-width: 440px;">
                        <div class="card p-4">

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
    </div>
<?php
}
}
/* {/block "content_body"} */
/* {block "script"} */
class Block_1993158087607958dc176c63_66758851 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1993158087607958dc176c63_66758851',
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
                            _token: '<?php echo csrf_token();?>
',
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
                    _token: '<?php echo csrf_token();?>
',
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
                            _token: '<?php echo csrf_token();?>
',
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
                    _token: '<?php echo csrf_token();?>
',
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
