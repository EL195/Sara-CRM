<?php
/* Smarty version 3.1.39, created on 2021-10-07 11:56:00
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/subscription_plan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f1890a46423_19836918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69af9e072fbaceea1c8fd28907e309e5f316fa3f' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/subscription_plan.tpl',
      1 => 1633622128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615f1890a46423_19836918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1429785802615f1890a32c66_90223039', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64644547615f1890a44bb0_18554700', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1429785802615f1890a32c66_90223039 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1429785802615f1890a32c66_90223039',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3><?php echo __('New Subscription Plan');?>
</h3>
                <div class="hr-line-dashed"></div>

                <form id="form_main" method="post">

                    <div class="mb-3">
                        <label for="input_title"><?php ob_start();
echo __('Title');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</label>
                        <input class="form-control" name="title" id="input_title"
                                <?php if (!empty($_smarty_tpl->tpl_vars['plan']->value)) {?>
                                    value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['plan']->value->title;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
"
                                <?php }?>
                        >
                    </div>


                    <div class="mb-3">
                        <label for="input_slug"><?php ob_start();
echo __('Slug');
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</label>
                        <div class="input-group">
                            <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
subscriptions/subscribe/</span>
                            <input type="text" aria-label="Slug" name="slug" id="input_slug" class="form-control"
                                    <?php if (!empty($_smarty_tpl->tpl_vars['plan']->value)) {?>
                                        value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['plan']->value->slug;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
"
                                    <?php }?>
                            >
                        </div>
                    </div>



                    <div class="mb-3">
                        <label for="input_price"><?php ob_start();
echo __('Price');
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</label>
                        <input class="form-control" name="price" id="input_price"
                                <?php if (!empty($_smarty_tpl->tpl_vars['plan']->value)) {?>
                                    value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['plan']->value->price;
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
"
                                <?php }?>
                        >
                    </div>

                    <div class="mb-3">
                        <label for="input_button_text"><?php ob_start();
echo __('Button Text');
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</label>
                        <input class="form-control" name="button_text" id="input_button_text"
                                <?php if (!empty($_smarty_tpl->tpl_vars['plan']->value)) {?>
                                    value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['plan']->value->button_text;
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
"
                                <?php }?>
                        >
                    </div>

                    <div class="mb-3">
                        <label for="input_stripe_pricing_id"><?php ob_start();
echo __('Stripe Pricing Id');
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</label>
                        <input class="form-control" name="stripe_pricing_id" id="input_stripe_pricing_id"
                                <?php if (!empty($_smarty_tpl->tpl_vars['plan']->value)) {?>
                                    value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['plan']->value->stripe_pricing_id;
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
"
                                <?php }?>
                        >
                    </div>

                    <div class="mb-3">
                        <label for="input_description"><?php ob_start();
echo __('Description');
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
</label>
                        <textarea class="form-control" rows="5" id="input_description" name="description"><?php if (!empty($_smarty_tpl->tpl_vars['plan']->value)) {
ob_start();
echo $_smarty_tpl->tpl_vars['plan']->value->description;
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;
}?></textarea>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Features'];?>
</h4>

                    <div id="div_features">

                        <?php if (!empty($_smarty_tpl->tpl_vars['plan']->value) && $_smarty_tpl->tpl_vars['plan']->value->features) {?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['plan']->value->features), 'feature_line');
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

                    <?php if (!empty($_smarty_tpl->tpl_vars['plan']->value)) {?>

                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['plan']->value->id;?>
">

                    <?php }?>

                    <button id="btn_plan" type="submit" class="btn btn-primary"><?php ob_start();
echo __('Save');
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
</button>
                </form>

            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_64644547615f1890a44bb0_18554700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_64644547615f1890a44bb0_18554700',
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

            let $form_main = $('#form_main');

            $form_main.on('submit',function (event) {
                event.preventDefault();

                axios.post(base_url + 'subscriptions/plan',$form_main.serialize()).then(function (response) {
                    window.location = base_url + 'subscriptions/plan/' + response.data.id;
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
