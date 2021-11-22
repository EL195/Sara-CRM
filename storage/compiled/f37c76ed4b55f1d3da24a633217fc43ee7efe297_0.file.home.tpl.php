<?php
/* Smarty version 3.1.39, created on 2021-03-24 16:44:42
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/agency_crm/client/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605ba4bab992d8_17791515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f37c76ed4b55f1d3da24a633217fc43ee7efe297' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/agency_crm/client/home.tpl',
      1 => 1616618674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605ba4bab992d8_17791515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77735555605ba4bab951a4_95397552', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_759497245605ba4bab98c37_07691285', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "agency_crm/layouts/client.tpl");
}
/* {block "content"} */
class Block_77735555605ba4bab951a4_95397552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_77735555605ba4bab951a4_95397552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="bg-primary">
        <div class="container">
            <!-- Hero Section -->
            <div class="row align-items-center no-gutters">
                <div class="col-xl-5 col-lg-6 col-md-12">
                    <div class="py-5 py-lg-0">
                        <h1 class="text-white display-4 font-weight-bold">Welcome to Geeks UI
                            Learning Application
                        </h1>
                        <p class="text-white-50 mb-4 lead">
                            Hand-picked Instructor and expertly crafted courses, designed for the modern students and entrepreneur.
                        </p>
                        <a href="pages/course-filter-list.html" class="btn btn-success">Browse Courses</a>
                        <a href="pages/sign-in.html" class="btn btn-white">Are You Instructor?</a>
                    </div>
                </div>
                <div class=" col-xl-7 col-lg-6 col-md-12 text-lg-right text-center">
                    <img src="assets/images/hero/hero-img.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <h1 class="text-center my-3">Products & Services</h1>

        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>

                <div class="col-md-3 col-xs">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/items/<?php echo $_smarty_tpl->tpl_vars['group']->value->slug;?>
/" class="m-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3><?php echo $_smarty_tpl->tpl_vars['group']->value->name;?>
</h3>
                            </div>
                        </div>
                    </a>
                </div>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-3">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/whois/" class="m-3">
                    <div class="card">
                        <div class="card-body">

                            <div class="text-center">
                                <img style="max-width: 120px;" src="<?php echo APP_URL;?>
/ui/theme/default/hostbilling/img/whois.png">
                                <h3 class="mt-3">WHOIS Lookup</h3>
                            </div>

                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/kb/" class="m-3">
                    <div class="card">
                        <div class="card-body">

                            <div class="text-center">
                                <img style="max-width: 120px;" src="<?php echo APP_URL;?>
/ui/theme/default/hostbilling/img/file.png">
                                <h3 class="mt-3">Knowledgebase</h3>
                            </div>

                        </div>
                    </div>
                </a>
            </div>


        </div>





    </div>




<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_759497245605ba4bab98c37_07691285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_759497245605ba4bab98c37_07691285',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
