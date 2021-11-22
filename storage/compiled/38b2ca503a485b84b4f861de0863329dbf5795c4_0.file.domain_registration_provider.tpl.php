<?php
/* Smarty version 3.1.39, created on 2021-04-02 10:17:58
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/domain_registration_provider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6067279605b935_73269842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38b2ca503a485b84b4f861de0863329dbf5795c4' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/domain_registration_provider.tpl',
      1 => 1616965247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6067279605b935_73269842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9898717046067279604fa40_63333360', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3395949676067279605ab35_89752066', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_9898717046067279604fa40_63333360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9898717046067279604fa40_63333360',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="mx-auto" style="width: 100%; max-width: 800px;">
        <div class="card">
            <div class="card-body">
                <?php if (!$_smarty_tpl->tpl_vars['domain_registration_provider']->value) {?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['available_domain_registration_providers']->value[$_smarty_tpl->tpl_vars['selected_type']->value]))) {?>
                        <h3>New Domain Registration Provider (<?php echo $_smarty_tpl->tpl_vars['available_domain_registration_providers']->value[$_smarty_tpl->tpl_vars['selected_type']->value]['name'];?>
)</h3>
                    <?php }?>

                    <?php } else { ?>

                    <h3><?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->name;?>
</h3>

                <?php }?>

                <div class="hr-line-dashed"></div>
                <form method="post" id="form_main">


                    <div class="mb-3">
                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                        <input class="form-control" name="name"
                        <?php if (!$_smarty_tpl->tpl_vars['domain_registration_provider']->value) {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['available_domain_registration_providers']->value[$_smarty_tpl->tpl_vars['selected_type']->value]))) {?>
                                value="<?php echo $_smarty_tpl->tpl_vars['available_domain_registration_providers']->value[$_smarty_tpl->tpl_vars['selected_type']->value]['name'];?>
"
                            <?php }?>

                            <?php } else { ?>

                            value="<?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->name;?>
"

                        <?php }?>
                        >
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['selected_type']->value === 'resellerclub' || $_smarty_tpl->tpl_vars['selected_type']->value === 'resell_biz') {?>

                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Reseller ID'];?>
</label>
                            <input class="form-control" name="username"
                            <?php if ($_smarty_tpl->tpl_vars['domain_registration_provider']->value) {?>
                                value="<?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->username;?>
"
                            <?php }?>
                            >
                        </div>

                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['API Key'];?>
</label>
                            <input class="form-control" name="api_key"
                                    <?php if ($_smarty_tpl->tpl_vars['domain_registration_provider']->value) {?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->api_key;?>
"
                                    <?php }?>
                            >
                        </div>

                        <?php } elseif ($_smarty_tpl->tpl_vars['selected_type']->value === 'name_com') {?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['selected_type']->value === 'godadday') {?>


                    <?php }?>

                    <div class="mb-3">
                        <?php if ($_smarty_tpl->tpl_vars['domain_registration_provider']->value) {?>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->id;?>
">
                            <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->type;?>
">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->id;?>
">
                        <?php } else { ?>
                            <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['selected_type']->value;?>
">
                        <?php }?>
                        <button class="btn btn-primary" id="btn_submit" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_3395949676067279605ab35_89752066 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_3395949676067279605ab35_89752066',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            let $form_main = $('#form_main');
            let $btn_submit = $('#btn_submit');

            $form_main.on('submit',function (event) {
                event.preventDefault();
                $btn_submit.prop('disabled',true);
                axios.post(base_url + 'hostbilling/domain_registration_provider/',$form_main.serialize()).then(function (response) {
                    $btn_submit.prop('disabled',false);

                    window.location = base_url + 'hostbilling/domain-registration-providers/'

                }).catch(function (error) {

                    $btn_submit.prop('disabled',false);

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
