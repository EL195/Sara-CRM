<?php
/* Smarty version 3.1.39, created on 2021-05-04 16:14:00
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/hosting_plans.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6091ab0873dc87_12463517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55dad9cca46a63c90e1582482541906a03bf886c' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/hosting_plans.tpl',
      1 => 1617373357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6091ab0873dc87_12463517 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1399633596091ab087345b9_67737405', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11011103926091ab0873ce37_47864549', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1399633596091ab087345b9_67737405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1399633596091ab087345b9_67737405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">

        <div class="col-md-3">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
                <div class="card mb-3">
                    <div class="card-body">
                        <div style="padding: 80px;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M12 8v8M8 12h8"/>
                            </svg>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['type']->value === 'service') {?>
                            <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Service'];?>
</h4>
                            <?php } else { ?>
                            <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Hosting Plan'];?>
</h4>
                        <?php }?>
                    </div>
                </div>
            </a>
        </div>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hosting_plans']->value, 'hosting_plan');
$_smarty_tpl->tpl_vars['hosting_plan']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hosting_plan']->value) {
$_smarty_tpl->tpl_vars['hosting_plan']->do_else = false;
?>
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-body" style="min-height: 419px;">
                        <h2><?php echo $_smarty_tpl->tpl_vars['hosting_plan']->value->name;?>
</h2>

                        <div class="hr-line-dashed"></div>

                        <div class="mb-3">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, get_available_item_pricing_terms($_smarty_tpl->tpl_vars['hosting_plan']->value), 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                <p><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</p>
                                <h4><?php echo formatCurrency($_smarty_tpl->tpl_vars['value']->value['price'],$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h4>
                                <div class="hr-line-dashed"></div>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        </div>



                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hostbilling/<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['hosting_plan']->value->id;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                        <a href="#" id="delete_<?php echo $_smarty_tpl->tpl_vars['hosting_plan']->value->id;?>
" class="btn btn-danger confirm_delete"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>


<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_11011103926091ab0873ce37_47864549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_11011103926091ab0873ce37_47864549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {


            $btn_add_features = $('#btn_add_features');
            $div_features = $('#div_features');

            $btn_add_features.on('click',function () {
                $div_features.append('<div class="mb-3">\
                    <input class="form-control" name="features[]">\
                    </div>');
            });

            let $form_save_domain_price = $('#form_save_domain_price');

            $form_save_domain_price.on('submit',function (event) {
                event.preventDefault();

                axios.post(base_url + 'hostbilling/save-domain-price',$form_save_domain_price.serialize()).then(function (response) {

                }).catch(function (error) {

                    $.each(error.response.data, function(key, value) {
                        toastr.error(value);
                    });

                });



            });


            $(".confirm_delete").click(function (event) {
                event.preventDefault();
                let id = this.id;
                id = id.replace('delete_','');
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "hostbilling/delete-hosting-plan/" + id;
                    }
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
