<?php
/* Smarty version 3.1.39, created on 2021-04-16 05:27:28
  from '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/alpha/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60795880cd3b01_43320954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75ba42bcd509c706bf6ede8c4f9696d9a137ca3e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/alpha/layout.tpl',
      1 => 1618222276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60795880cd3b01_43320954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php if (APP_STAGE == 'Dev') {?>
        <link rel="stylesheet" href="<?php echo APP_URL;?>
/ui/theme/frontend/alpha/css/style.css?v=<?php echo Str::random();?>
" />
    <?php } else { ?>
        <link rel="stylesheet" href="<?php echo APP_URL;?>
/ui/theme/frontend/alpha/css/style.css?v=2" />
    <?php }?>






    <title>HostBilling</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .hero-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?php echo APP_URL;?>
/ui/theme/frontend/alpha/img/pic1.jpg");
            height: 50%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        .hero-image-2 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?php echo APP_URL;?>
/ui/theme/frontend/alpha/img/pic4.jpg");
            height: 50%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .hero-text button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 10px 25px;
            color: black;
            background-color: #ddd;
            text-align: center;
            cursor: pointer;
        }

        .hero-text button:hover {
            background-color: #555;
            color: white;
        }
        .fd .search {
            display: flex;
        }
        .search {
            position: relative;
        }
        *, *:before, *:after {
            box-sizing: border-box;
        }
        user agent stylesheet
        form {
            display: block;
            margin-top: 0em;
        }
        .topbar {
            padding-right: 15px;
            padding-left: 15px;
            color: #fff;
        }
        body {
            font-family: 'Lato', sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #111;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
        }
        html {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }
        .form-control {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 2.5;
            opacity: 0.8;
            color: #212529;}
        .btn-large{
            line-height: 2.5;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }




        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }


        @media (min-width: 768px)
            [dir] .ga {
                margin-bottom: 70px;
            }
            [dir] .ga {
                text-align: center;
            }
            [dir] h2 {
                margin: 0 0 calc(16px * 1.5);
            }
            h2 {
                font-size: calc(16px * 1.75);
            }
            h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
                font-family: inherit;
                font-weight: 400;
                line-height: 1.2;
                color: inherit;
            }
            *, *:before, *:after {
                box-sizing: border-box;
            }
            user agent stylesheet
            h2 {
                display: block;
                font-size: 1.5em;
                margin-block-start: 0.83em;
                margin-block-end: 0.83em;
                margin-inline-start: 0px;
                margin-inline-end: 0px;
                font-weight: bold;
            }
            body {
                font-family: 'Lato', sans-serif;
                font-size: 16px;
                line-height: 1.5;
                color: #111;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
            }

    </style>
</head>
<body>


<!-- header -->
<header class="header header-light">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="index.html" class="navbar-brand mr-8">
                <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" aria-roledescription="logo">
            </a>



            <button class="navbar-toggler burger" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Home
                        </a>
                    </li>

                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown-1">

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>

                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/items/<?php echo $_smarty_tpl->tpl_vars['group']->value->slug;?>
/"><?php echo $_smarty_tpl->tpl_vars['group']->value->name;?>
</a>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Domains
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown-1">

                            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/whois/">WHOIS Lookup</a>
                            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/domain-register/">Register Domain</a>

                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/kb/">
                            Knowledgebase
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Contact
                        </a>
                    </li>

                </ul>
                <a href="" class="action btn btn-primary ms-auto"><svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Client Area</a>
            </div>
        </nav>
    </div>
</header>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46555627860795880cd1c66_15693833', "content");
?>





<footer class="border-top">
    <div class="container">
        <div class="row justify-content-between gutter-2 gutter-lg-6">
            <div class="col-lg-4">
                <a href="index.html" class="navbar-brand"><img src="<?php ob_start();
echo APP_URL;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_default'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" alt="Logo"></a>
                <p class="mt-2 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="col-lg-7">
                <div class="row gutter-4">
                    <div class="col-md-4">
                        <span class="eyebrow text-muted mb-2 d-flex">Menu</span>
                        <ul class="nav nav-minimal nav-minimal-sm flex-md-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Careers</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <span class="eyebrow text-muted mb-2 d-flex">Follow us</span>
                        <ul class="nav nav-minimal nav-minimal-sm flex-md-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Instagram</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Facebook</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Twitter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Linkedin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Youtube</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <span class="eyebrow text-muted mb-2 d-flex">Docs</span>
                        <ul class="nav nav-minimal nav-minimal-sm flex-md-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Get started</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Components</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Changelog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between gutter-1 gutter-lg-6">
            <div class="col-md-6 col-lg-4 order-md-2 text-md-right">
                <span class="small text-muted">5th Avenue, New York USA 10255</span>
            </div>
            <div class="col-md-6 col-lg-3 order-md-1">
                <p class="small text-muted">Copyrights © 2021</p>
            </div>
        </div>
    </div>
</footer>



<?php echo '<script'; ?>
 src="assets/js/vendor.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/app.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
/* {block "content"} */
class Block_46555627860795880cd1c66_15693833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_46555627860795880cd1c66_15693833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
