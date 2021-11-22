<?php
/* Smarty version 3.1.39, created on 2021-10-07 07:24:16
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/contract.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615ed8e0611668_14781731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df3b270b29e5e7498f189e761adeacca0e1b571a' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/contract.tpl',
      1 => 1633605808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615ed8e0611668_14781731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_290662743615ed8e05e6e70_83264432', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_506482726615ed8e060fe66_71884465', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_290662743615ed8e05e6e70_83264432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_290662743615ed8e05e6e70_83264432',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="mx-auto" style="max-width: 800px; width: 100%;">


        <div class="row">
            <div class="col-md-12">
                <div class="panel" id="clx_form_box">
                    <div class="panel-hdr">
                        <?php if ($_smarty_tpl->tpl_vars['contract']->value) {?>
                            <h2><span class="h5"><?php echo $_smarty_tpl->tpl_vars['contract']->value->name;?>
</span></h2>
                        <?php } else { ?>
                            <h2><?php ob_start();
echo __('Contract');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</h2>
                        <?php }?>
                    </div>
                    <div class="panel-container">
                        <div class="panel-content">
                            <form method="post" id="mainForm" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contracts/contract-save">


                                <div class="form-group">
                                    <label for="inputTitle"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</label>
                                    <input class="form-control" name="title" required id="inputTitle" data-pristine-required data-pristine-required-message="<?php echo $_smarty_tpl->tpl_vars['_L']->value['This field is required'];?>
" <?php if ($_smarty_tpl->tpl_vars['contract']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['contract']->value->title;?>
"<?php }?> >
                                </div>



                                <div class="form-row mb-3">

                                    <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'contracts','all_data')) {?>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="admin_id"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Owner'];?>
</label>
                                                <select class="form-control" data-pristine-required data-pristine-required-message="<?php echo $_smarty_tpl->tpl_vars['_L']->value['This field is required'];?>
" id="owner_id" name="owner_id">
                                                    <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffs']->value, 'staff');
$_smarty_tpl->tpl_vars['staff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['staff']->value) {
$_smarty_tpl->tpl_vars['staff']->do_else = false;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->id;?>
"
                                                                <?php if ($_smarty_tpl->tpl_vars['contract']->value) {?>
                                                                    <?php if (!empty($_smarty_tpl->tpl_vars['contract']->value->owner_id) && ($_smarty_tpl->tpl_vars['staff']->value->id == $_smarty_tpl->tpl_vars['contract']->value->owner_id)) {?>
                                                                        selected

                                                                    <?php }?>
                                                                <?php } else { ?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['user']->value->id == $_smarty_tpl->tpl_vars['staff']->value->id) {?>
                                                                        selected
                                                                    <?php }?>
                                                                <?php }?>
                                                        ><?php echo $_smarty_tpl->tpl_vars['staff']->value->fullname;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>

                                    <?php }?>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="contact_id"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</label>
                                            <select class="form-control" data-pristine-required data-pristine-required-message="<?php echo $_smarty_tpl->tpl_vars['_L']->value['This field is required'];?>
" id="contact_id" name="contact_id">
                                                <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['contact']->value->id;?>
"
                                                            <?php if (!empty($_smarty_tpl->tpl_vars['contract']->value->contact_id) && ($_smarty_tpl->tpl_vars['contact']->value->id == $_smarty_tpl->tpl_vars['contract']->value->contact_id)) {?>
                                                                selected

                                                            <?php }?>
                                                    ><?php echo $_smarty_tpl->tpl_vars['contact']->value->account;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Start Date'];?>

                                            </label>
                                            <input type="text" class="form-control"  value="<?php echo date('Y-m-d');?>
" name="start_date" id="start_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" data-pristine-required data-pristine-required-message="<?php echo $_smarty_tpl->tpl_vars['_L']->value['This field is required'];?>
">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><?php echo __('Expiration Date');?>
</label>
                                            <input type="text" class="form-control"  value="<?php echo date('Y-m-d',strtotime('+1 year'));?>
" name="expiration_date" id="expiration_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" data-pristine-required data-pristine-required-message="<?php echo $_smarty_tpl->tpl_vars['_L']->value['This field is required'];?>
">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="type"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
                                            <select class="form-control" name="type" id="type">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contract_types']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                                    <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['key']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>

                                </div>


                                <div class="form-row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="currency"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency'];?>
</label>
                                            <select id="currency" name="currency" class="form-control">

                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['iso_code'];?>
" <?php if ($_smarty_tpl->tpl_vars['config']->value['home_currency'] == $_smarty_tpl->tpl_vars['currency']->value['iso_code']) {?>selected<?php }?>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]))) {?>
                                                        data-a-sign="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['symbol'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['thousands_separator'];?>
" data-a-dec="<?php echo $_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['decimal_mark'];?>
" <?php if (($_smarty_tpl->tpl_vars['currencies_all']->value[$_smarty_tpl->tpl_vars['currency']->value['iso_code']]['symbol_first'] == true)) {?> data-p-sign="p" <?php } else { ?> data-p-sign="s" <?php }?>
                                                            <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['iso_code'];?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</label>
                                            <input class="form-control" name="amount" id="amount" data-pristine-required data-pristine-required-message="<?php echo $_smarty_tpl->tpl_vars['_L']->value['This field is required'];?>
"
                                            <?php if ($_smarty_tpl->tpl_vars['contract']->value) {?>
                                                value="<?php echo numberFormatUsingCurrency($_smarty_tpl->tpl_vars['contract']->value->amount,$_smarty_tpl->tpl_vars['contract']->value->currency);?>
"
                                            <?php }?>
                                            >
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="content"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                                    <textarea id="content" class="form-control" name="description" rows="10"><?php if ($_smarty_tpl->tpl_vars['contract']->value) {
echo $_smarty_tpl->tpl_vars['contract']->value->description;
}?></textarea>
                                </div>





                                <div class="form-group">

                                    <?php if ($_smarty_tpl->tpl_vars['contract']->value) {?>
                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['contract']->value->id;?>
">
                                    <?php } else { ?>
                                        <input type="hidden" name="id" value="">
                                    <?php }?>

                                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                                </div>

                            </form>
                        </div>



                    </div>

                </div>

            </div>
        </div>

    </div>






<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_506482726615ed8e060fe66_71884465 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_506482726615ed8e060fe66_71884465',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <?php echo '<script'; ?>
>


        $(function () {

            var form = document.getElementById("mainForm");
            var pristine = new Pristine(form);

            $('#content').redactor(
                {
                    minHeight: 200, // pixels
                    plugins: ['fontcolor']
                }
            );

            $("#contact_id").select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );



            $('[data-toggle="datepicker"]').datepicker();

            $("#mainForm").submit(function (e) {

                e.preventDefault();

                if(pristine.validate())
                {
                    $('#clx_form_box').block({ message:block_msg });

                    $.post('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contracts/contract', $( "#mainForm" ).serialize())
                        .done(function (data) {
                            window.location = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contracts';
                        }).fail(function(error) {
                        $('#clx_form_box').unblock();
                        $.each(error.response.data, function(key, value) {
                            toastr.error(value);
                        });
                    });
                }

            });



        });

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
