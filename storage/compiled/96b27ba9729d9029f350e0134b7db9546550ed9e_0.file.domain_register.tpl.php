<?php
/* Smarty version 3.1.39, created on 2021-06-17 09:52:58
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/domain_register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cb53ba3cc529_86947957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96b27ba9729d9029f350e0134b7db9546550ed9e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/client/domain_register.tpl',
      1 => 1623937970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cb53ba3cc529_86947957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22537496060cb53ba3c5475_24712885', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208788863660cb53ba3c62d9_69310015', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146178578060cb53ba3cb990_86302955', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "hostbilling/layouts/client.tpl");
}
/* {block "head"} */
class Block_22537496060cb53ba3c5475_24712885 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_22537496060cb53ba3c5475_24712885',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style>
        .input-domain-search{
            padding: 20px 12px 20px 12px;
            width: 85%;
            float: left;
            display: table-cell;
            border-radius: 10px 0 0 10px;
            -moz-border-radius: 10px 0 0 10px;
            -webkit-border-radius: 10px 0 0 10px;
            border-color: #EBEBEB;
            background: #EBEBEB;
            height: 56px;
            font-size: 1.25rem;
        }
        .input-domain-search-extension{
            height: 56px;
            font-size: 20px;
            border-color: #EBEBEB;


        }
        .btn-domain-search{
            font-size: 20px;
            height: 56px;
            border: none;
            width: 80px;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_208788863660cb53ba3c62d9_69310015 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_208788863660cb53ba3c62d9_69310015',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="container">


        <div class="mx-auto" style="max-width: 800px; width: 100%; ">

            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center my-3" style="font-size: 30px"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Start your domain name search'];?>
</h1>
                </div>
            </div>


                <div class="row mt-3">
                    <div class="col-md-12">

                        <form id="form_domain_search" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/whois-post/">

                            <div class="input-group mb-3">
                                <input type="text" class="form-control input-domain-search" name="domain_name" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Enter domain name...'];?>
">
                                <div class="input-group-append">
                                    <select class="custom-select input-domain-search-extension" name="extension">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domain_extensions']->value, 'domain_extension');
$_smarty_tpl->tpl_vars['domain_extension']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['domain_extension']->value) {
$_smarty_tpl->tpl_vars['domain_extension']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['domain_extension']->value->extension;?>
"><?php echo $_smarty_tpl->tpl_vars['domain_extension']->value->extension;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <button class="btn btn-primary btn-domain-search" id="btn_domain_submit" type="submit"><i class="fal fa-search"></i></button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12" id="domain_search_result" style="display: none;">

                    </div>
                </div>


        </div>


    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_146178578060cb53ba3cb990_86302955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_146178578060cb53ba3cb990_86302955',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            let $form_domain_search = $('#form_domain_search');
            let $domain_search_result = $('#domain_search_result');
            let $btn_domain_submit = $('#btn_domain_submit');
            let $cloudonex_body = $('#cloudonex_body');
            $form_domain_search.on('submit',function (event) {
                event.preventDefault();
                $btn_domain_submit.prop('disabled',true);
                axios.post(base_url + 'client/domain-register-post',$form_domain_search.serialize()).then(function (response) {
                    $btn_domain_submit.prop('disabled',false);
                    $domain_search_result.show();
                    $domain_search_result.html('<div class="card"><div class="card-body">' + response.data + '</div></div>');
                }).catch(function (error) {

                    $btn_domain_submit.prop('disabled',false);

                    $.each(error.response.data, function(key, value) {
                        toastr.error(value);
                    });

                });

            });



        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
