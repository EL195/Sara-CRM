<?php
/* Smarty version 3.1.39, created on 2021-04-12 06:10:44
  from '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/alpha/whois.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60741ca48b8b58_41234665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f198d2900c5479bb54fb8244bffedec805d8d41' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/frontend/alpha/whois.tpl',
      1 => 1618222072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60741ca48b8b58_41234665 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74841826160741ca48b3726_48491634', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./layout.tpl");
}
/* {block "content"} */
class Block_74841826160741ca48b3726_48491634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_74841826160741ca48b3726_48491634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <body>

    <div class="hero-image-2 ">
        <div class="" >

            <div class="row ">
                <div class="mx-auto">
                    <div class="row " style="margin-top: 65px">
                        <div class="col-md-12">
                            <h1 class="text-center mx-auto font-weight-bolder my-3 " style="color:#fff; ">Start your dream project</h1>
                        </div>
                    </div>

                    <form id="form_domain_search" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/whois-post/" class="mx-auto" style="max-width: 700px; width: 100%">
                        <div class="row mt-3">
                            <div class="col-md-10">
                                <input class="form-control input-domain-search" id="domain_name" name="domain_name" placeholder="Search your domain name" type="text">
                                <?php echo csrf_field();?>

                                <button class="btn btn-domain-submit" id="btn_domain_submit"><i class="fal fa-search"></i></button>
                            </div>
                            <div class="col-md-2">
                                <a class="btn-large btn btn-primary btn-rounded" href="">
                                    Search
                                </a>

                            </div>
                        </div>

                </div>
                </form>



            </div>
        </div>



    </div>

    </div>









    </body>

<?php
}
}
/* {/block "content"} */
}
