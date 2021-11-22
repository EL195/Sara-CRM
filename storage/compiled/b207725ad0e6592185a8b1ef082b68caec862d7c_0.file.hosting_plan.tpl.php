<?php
/* Smarty version 3.1.39, created on 2021-05-27 06:50:31
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/hosting_plan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60af79774215d7_65720967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b207725ad0e6592185a8b1ef082b68caec862d7c' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/hosting_plan.tpl',
      1 => 1622112629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60af79774215d7_65720967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147859545860af79773edf10_00873582', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172937491660af797741fe70_93403991', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_147859545860af79773edf10_00873582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_147859545860af79773edf10_00873582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col">

            <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value) {?>
               <h3><?php echo __('Edit');?>
</h3>
                <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['type']->value === 'service') {?>
                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Service'];?>
</h3>
                <?php } else { ?>
                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Hosting Plan'];?>
</h3>
                <?php }?>
            <?php }?>

        </div>
        <div class="col text-right">
            <a
                    <?php if ($_smarty_tpl->tpl_vars['type']->value === 'service') {?>
                        href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/services"
                    <?php } else { ?>
                        href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/hosting-plans"
                    <?php }?>
                    class="btn btn-sm btn-danger mb-3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Back to the List'];?>
</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">


            <div class="card">
                <div class="card-body">

                    <form id="form_save_service">

                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                            <input class="form-control" name="name" <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['hosting_plan']->value->name;?>
" <?php }?> >
                        </div>

                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>
</label>
                            <select class="custom-select" name="group_id">
                                <option value="">--</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value->id;?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value->group_id === $_smarty_tpl->tpl_vars['group']->value->id) {?>
                                                    selected
                                                <?php }?>
                                            <?php }?>
                                    ><?php echo $_smarty_tpl->tpl_vars['group']->value->name;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>



                        <?php if ($_smarty_tpl->tpl_vars['type']->value === 'hosting') {?>

                            <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Pricing'];?>
</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Keep blank to disable any of the terms.'];?>
</p>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Monthly'];?>
</label>
                                        <input class="form-control" name="price_monthly"
                                               <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value && $_smarty_tpl->tpl_vars['hosting_plan']->value->price_monthly > 0) {?>value="<?php echo numberFormatUsingCurrency($_smarty_tpl->tpl_vars['hosting_plan']->value->price_monthly,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
" <?php }?>
                                        >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quarterly'];?>
</label>
                                        <input class="form-control" name="price_quarterly"
                                               <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value && $_smarty_tpl->tpl_vars['hosting_plan']->value->price_quarterly > 0) {?>value="<?php echo numberFormatUsingCurrency($_smarty_tpl->tpl_vars['hosting_plan']->value->price_quarterly,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
" <?php }?>
                                        >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Half Yearly'];?>
</label>
                                        <input class="form-control" name="price_half_yearly"
                                               <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value && $_smarty_tpl->tpl_vars['hosting_plan']->value->price_half_yearly > 0) {?>value="<?php echo numberFormatUsingCurrency($_smarty_tpl->tpl_vars['hosting_plan']->value->price_half_yearly,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
" <?php }?>
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Yearly'];?>
</label>
                                        <input class="form-control" name="price_yearly"
                                               <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value && $_smarty_tpl->tpl_vars['hosting_plan']->value->price_yearly > 0) {?>value="<?php echo numberFormatUsingCurrency($_smarty_tpl->tpl_vars['hosting_plan']->value->price_yearly,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
" <?php }?>
                                        >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Two years'];?>
</label>
                                        <input class="form-control" name="price_two_years"
                                               <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value && $_smarty_tpl->tpl_vars['hosting_plan']->value->price_two_years > 0) {?>value="<?php echo numberFormatUsingCurrency($_smarty_tpl->tpl_vars['hosting_plan']->value->price_two_years,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
" <?php }?>
                                        >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Three years'];?>
</label>
                                        <input class="form-control" name="price_three_years"
                                               <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value && $_smarty_tpl->tpl_vars['hosting_plan']->value->price_three_years > 0) {?>value="<?php echo numberFormatUsingCurrency($_smarty_tpl->tpl_vars['hosting_plan']->value->price_three_years,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
" <?php }?>
                                        >
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>


                        <?php } else { ?>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Service Fee'];?>
</label>
                                        <input class="form-control" name="one_time_fee"
                                               <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value && $_smarty_tpl->tpl_vars['hosting_plan']->value->one_time_fee > 0) {?>value="<?php echo numberFormatUsingCurrency($_smarty_tpl->tpl_vars['hosting_plan']->value->one_time_fee,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
" <?php }?>
                                        >
                                    </div>
                                </div>
                            </div>



                        <?php }?>



                        <div class="hr-line-dashed"></div>

                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                            <textarea class="form-control" name="description" id="description"><?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value && $_smarty_tpl->tpl_vars['hosting_plan']->value->description) {
echo $_smarty_tpl->tpl_vars['hosting_plan']->value->description;
}?></textarea>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['type']->value === 'hosting') {?>

                            <div class="mb-3">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="allow_free_domain" value="1" id="allow_free_domain"
                                            <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value && $_smarty_tpl->tpl_vars['hosting_plan']->value->allow_free_domain) {?>
                                                checked
                                            <?php }?>
                                    >
                                    <label class="custom-control-label" for="allow_free_domain"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Allow Free Domain?'];?>
</label>
                                </div>
                            </div>

                        <?php }?>


                        <div class="mb-3">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" name="require_domain_name" value="1" id="require_domain_name"
                                        <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value && $_smarty_tpl->tpl_vars['hosting_plan']->value->require_domain_name) {?>
                                            checked
                                        <?php }?>
                                >
                                <label class="custom-control-label" for="require_domain_name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Require Domain Name?'];?>
</label>
                            </div>
                        </div>


                        <div class="mb-3">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" name="plan_is_featured" value="1" id="plan_is_featured"
                                        <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value && $_smarty_tpl->tpl_vars['hosting_plan']->value->is_featured) {?>
                                            checked
                                        <?php }?>
                                >
                                <label class="custom-control-label" for="plan_is_featured"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Featured?'];?>
</label>
                            </div>
                        </div>



                        <?php if ($_smarty_tpl->tpl_vars['type']->value === 'hosting') {?>

                            <div class="hr-line-dashed"></div>

                            <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Automation'];?>
</h4>

                            <div class="mb-3">
                                <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Server/Hosting Provider'];?>
</label>
                                <select class="custom-select" name="hosting_provider_id">
                                    <option value="">--</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servers']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
"
                                                <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value->hosting_provider_id === $_smarty_tpl->tpl_vars['server']->value->id) {?>
                                                        selected
                                                    <?php }?>
                                                <?php }?>
                                        ><?php echo $_smarty_tpl->tpl_vars['server']->value->name;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan API Name'];?>
</label>
                                <input class="form-control" name="api_name"
                                       <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['hosting_plan']->value->api_name;?>
" <?php }?>
                                >
                                <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enter the automation package/plan name.'];?>
</span>
                            </div>

                        <?php }?>


                        <div class="hr-line-dashed"></div>
                        <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Features'];?>
</h4>

                        <div id="div_features">

                            <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value && $_smarty_tpl->tpl_vars['hosting_plan']->value->features) {?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['hosting_plan']->value->features), 'feature_line');
$_smarty_tpl->tpl_vars['feature_line']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature_line']->value) {
$_smarty_tpl->tpl_vars['feature_line']->do_else = false;
?>
                                    <div class="mb-3">
                                        <input class="form-control" name="features[]" value="<?php echo $_smarty_tpl->tpl_vars['feature_line']->value;?>
">
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <?php } else { ?>

                                <div class="mb-3">
                                    <input class="form-control" name="features[]">
                                </div>

                            <?php }?>


                        </div>

                        <div class="my-3">
                            <button id="btn_add_features" type="button" class="btn btn-success btn-icon waves-effect waves-themed"><i class="fal fa-plus"></i> </button>
                        </div>

                        <div class="hr-line-dashed"></div>


                        <div class="mb-3">

                            <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value) {?>
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['hosting_plan']->value->id;?>
">
                            <?php }?>

                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">

            <?php if ($_smarty_tpl->tpl_vars['hosting_plan']->value) {?>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="input_item_details"><?php echo __('Item Details');?>
:</label>
                            <input type="text" class="form-control mb-3" id="input_item_details" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/item/<?php echo $_smarty_tpl->tpl_vars['hosting_plan']->value->slug;?>
">
                        </div>
                        <div class="mb-3">
                            <label for="input_cart_link"><?php echo __('Link to the Cart');?>
:</label>
                            <input type="text" class="form-control mb-3" id="input_cart_link" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/buy-now/<?php echo $_smarty_tpl->tpl_vars['hosting_plan']->value->slug;?>
">
                        </div>
                    </div>
                </div>
            <?php }?>

        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_172937491660af797741fe70_93403991 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_172937491660af797741fe70_93403991',
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

            $('#description').redactor(
                {
                    minHeight: 200 // pixels
                }
            );

            let $form_save_service = $('#form_save_service');

            $form_save_service.on('submit',function (event) {
                event.preventDefault();

                axios.post(base_url + 'hostbilling/<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
',$form_save_service.serialize()).then(function (response) {
                    window.location = base_url + 'hostbilling/<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
/' + response.data.id;
                }).catch(function (error) {

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
