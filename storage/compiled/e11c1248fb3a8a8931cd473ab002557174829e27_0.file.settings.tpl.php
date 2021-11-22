<?php
/* Smarty version 3.1.39, created on 2021-03-05 16:22:25
  from '/Users/razib/Documents/valet/business-suite/apps/20i/views/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6042a1119fb750_79612825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e11c1248fb3a8a8931cd473ab002557174829e27' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/20i/views/settings.tpl',
      1 => 1614979343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6042a1119fb750_79612825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5460716366042a1119d3dc8_21568777', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6507978036042a1119faea1_86036413', "script");
?>

<?php }
/* {block "content"} */
class Block_5460716366042a1119d3dc8_21568777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5460716366042a1119d3dc8_21568777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="max-width: 800px; width: 100%" class="mx-auto">
        <div class="card">
            <div class="card-body">
                <h3>20i Default Parameters</h3>
                <div class="hr-line-dashed"></div>
                <form id="form_main">
                    <div class="mb-3">
                        <label>Address</label>
                        <input class="form-control" name="address" value="<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'app_20i_default_address');?>
">
                    </div>
                    <div class="mb-3">
                        <label>City</label>
                        <input class="form-control" name="city" value="<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'app_20i_default_city');?>
">
                    </div>
                    <div class="mb-3">
                        <label>Postal Code</label>
                        <input class="form-control" name="postal_code" value="<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'app_20i_default_postal_code');?>
">
                    </div>
                    <div class="mb-3">
                        <label>State</label>
                        <input class="form-control" name="state" value="<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'app_20i_default_state');?>
">
                    </div>
                    <div class="mb-3">
                        <label>Country</label>
                        <select class="custom-select" id="countries" name="country">
                            <option value="">--</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['iso_3166_1_alpha3'];?>
"
                                <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['app_20i_default_country']) && $_smarty_tpl->tpl_vars['config']->value['app_20i_default_country'] === $_smarty_tpl->tpl_vars['country']->value['iso_3166_1_alpha3']) {?>
                                    selected
                                <?php }?>
                                ><?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Phone</label>
                        <input class="form-control" name="phone" value="<?php echo get_or_default($_smarty_tpl->tpl_vars['config']->value,'app_20i_default_phone');?>
">
                    </div>

                    <button class="btn btn-primary" id="btn_save">Save</button>

                </form>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_6507978036042a1119faea1_86036413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_6507978036042a1119faea1_86036413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {
            $('#countries').select2();

            let $form_main = $('#form_main');
            let $btn_save = $('#btn_save');

            $form_main.on('submit',function (event) {
                event.preventDefault();
                $btn_save.prop('disabled',true);
                $.post(base_url + '20i/app/save-settings', $form_main.serialize())
                    .done(function (data) {
                        $btn_save.prop('disabled',false);
                        toastr.success('Saved!');
                    });
            });

        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
