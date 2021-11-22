<?php
/* Smarty version 3.1.39, created on 2021-04-02 10:17:45
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/domain_pricing.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606727897eaa17_47058539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e23c599c53b27903f6dfabedc51cd449e1c4c20e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/domain_pricing.tpl',
      1 => 1616965247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606727897eaa17_47058539 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_803754833606727897d8098_81375667', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_481111363606727897e98c4_63991229', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_803754833606727897d8098_81375667 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_803754833606727897d8098_81375667',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Extension/TLD'];?>
</h3>
                    <form id="form_save_domain_price">
                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Extension'];?>
</label>
                            <input class="form-control" name="extension"
                                   <?php if ($_smarty_tpl->tpl_vars['selected_domain_price']->value) {?>
                                       value="<?php echo $_smarty_tpl->tpl_vars['selected_domain_price']->value->extension;?>
"
                                   <?php }?>
                            >
                            <span>e.g. (.com)</span>
                        </div>

                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Registration Price'];?>
</label>
                            <input class="form-control" name="register"
                                    <?php if ($_smarty_tpl->tpl_vars['selected_domain_price']->value) {?>
                                        value="<?php echo numberFormatUsingCurrency($_smarty_tpl->tpl_vars['selected_domain_price']->value->register,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
"
                                    <?php }?>
                            >
                        </div>
                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Transfer Price'];?>
</label>
                            <input class="form-control" name="transfer"
                                    <?php if ($_smarty_tpl->tpl_vars['selected_domain_price']->value) {?>
                                        value="<?php echo numberFormatUsingCurrency($_smarty_tpl->tpl_vars['selected_domain_price']->value->transfer,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
"
                                    <?php }?>
                            >
                        </div>
                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Renewal Price'];?>
</label>
                            <input class="form-control" name="renew"
                                    <?php if ($_smarty_tpl->tpl_vars['selected_domain_price']->value) {?>
                                        value="<?php echo numberFormatUsingCurrency($_smarty_tpl->tpl_vars['selected_domain_price']->value->renew,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
"
                                    <?php }?>
                            >
                        </div>
                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Registration Provider'];?>
</label>
                            <select class="form-control" name="registration_provider_id">
                                <option value="">--</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domain_registration_providers']->value, 'domain_registration_provider');
$_smarty_tpl->tpl_vars['domain_registration_provider']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['domain_registration_provider']->value) {
$_smarty_tpl->tpl_vars['domain_registration_provider']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->id;?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['selected_domain_price']->value) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['selected_domain_price']->value->registration_provider_id === $_smarty_tpl->tpl_vars['domain_registration_provider']->value->id) {?>
                                                    selected
                                                <?php }?>
                                            <?php }?>
                                    ><?php echo $_smarty_tpl->tpl_vars['domain_registration_provider']->value->name;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="mb-3">

                            <?php if ($_smarty_tpl->tpl_vars['selected_domain_price']->value) {?>
                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['selected_domain_price']->value->id;?>
">
                            <?php }?>

                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="clx_datatable">

                        <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Extension'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Registration Price'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Transfer Price'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Renewal Price'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                        </tr>
                        </thead>


                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domain_prices']->value, 'domain_price');
$_smarty_tpl->tpl_vars['domain_price']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['domain_price']->value) {
$_smarty_tpl->tpl_vars['domain_price']->do_else = false;
?>



                            <tr>
                                <td>
                                    <h4><?php echo $_smarty_tpl->tpl_vars['domain_price']->value->extension;?>
</h4>
                                </td>
                                <td>
                                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['domain_price']->value->register,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                                </td>
                                <td>
                                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['domain_price']->value->transfer,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                                </td>
                                <td>
                                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['domain_price']->value->renew,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>


                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
hostbilling/domain-pricing/<?php echo $_smarty_tpl->tpl_vars['domain_price']->value->id;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'hostbilling/delete-domain-pricing/<?php echo $_smarty_tpl->tpl_vars['domain_price']->value->id;?>
')" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                                </td>
                            </tr>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>




                    </table>
                </div>
            </div>
        </div>
    </div>


<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_481111363606727897e98c4_63991229 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_481111363606727897e98c4_63991229',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>
",
                    },
                }
            );

            $('#whois_server').select2();

            let $form_save_domain_price = $('#form_save_domain_price');

            $form_save_domain_price.on('submit',function (event) {
                event.preventDefault();

                axios.post(base_url + 'hostbilling/domain-pricing',$form_save_domain_price.serialize()).then(function (response) {

                    location.reload();

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
