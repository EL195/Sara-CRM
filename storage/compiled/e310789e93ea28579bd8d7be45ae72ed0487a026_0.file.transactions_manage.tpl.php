<?php
/* Smarty version 3.1.39, created on 2021-05-12 19:56:11
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/transactions_manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609c6b1b7761f5_03420424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e310789e93ea28579bd8d7be45ae72ed0487a026' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/transactions_manage.tpl',
      1 => 1612643223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609c6b1b7761f5_03420424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1368044942609c6b1b73a1e7_58649964', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1874583069609c6b1b774377_44305083', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_1368044942609c6b1b73a1e7_58649964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1368044942609c6b1b73a1e7_58649964',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-hdr">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Transaction'];?>
 - [#<?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['t']->value['type']);?>
-<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
]</h5>

                </div>
                <div class="panel-container" id="ibox_form">
                    <div class="panel-content">
                        <div class="alert alert-danger" id="emsg">
                            <span id="emsgbody"></span>
                        </div>

                        <form class="form-horizontal" method="post" id="tform" role="form">
                            <div class="form-group">
                                <label for="account" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</label>
                                <select id="account" name="account" class="form-control" disabled>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
" <?php if ($_smarty_tpl->tpl_vars['ds']->value['account'] == $_smarty_tpl->tpl_vars['t']->value['account']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</label>
                                <input type="text" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['t']->value['date'];?>
" name="date" id="date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                            </div>

                            <div class="form-group">
                                <label for="description" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                                <input type="text" class="form-control" id="description" name="description" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['description'];?>
">
                            </div>

                            <div class="form-group">
                                <label for="amount" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</label>
                                <input type="text" class="form-control amount" id="amount"  data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 " data-d-group="2" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['amount'];?>
"  name="amount" disabled>
                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['t']->value['type'] != 'In' && $_smarty_tpl->tpl_vars['t']->value['type'] != 'Out' && $_smarty_tpl->tpl_vars['t']->value['type'] != 'Transfer') {?>
                                <div class="form-group">
                                    <label for="cats" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Category'];?>
</label>
                                    <select id="cats" name="cats" class="form-control">
                                        <option value="Uncategorized"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Uncategorized'];?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['cat']->value['name'] == $_smarty_tpl->tpl_vars['t']->value['category']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                    </select>
                                </div>
                            <?php } else { ?>
                                <input type="hidden" name="cats" id="cats" value="">
                            <?php }?>



                            <div class="form-group">
                                <label for="tags" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tags'];?>
</label>
                                <select name="tags[]" id="tags"  class="form-control" multiple="multiple">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['tag']->value['text'],$_smarty_tpl->tpl_vars['dtags']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tag']->value['text'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </select>
                            </div>
                                                                                                                                                                                                                                

                            <div class="form-group">
                                <label for="company" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</label>
                                <select id="company" name="company" class="form-control">
                                    <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['company']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['t']->value->company_id == $_smarty_tpl->tpl_vars['company']->value->id) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['company']->value->company_name;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['t']->value['type'] == 'Income') {?>
                                <div class="form-group">
                                    <label for="payer" ><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payer'];?>
</label>
                                    <div>
                                        <select id="payer" name="payer" class="s2 form-control">
                                            <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Contact'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value, 'ps');
$_smarty_tpl->tpl_vars['ps']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['t']->value['payerid']) == ($_smarty_tpl->tpl_vars['ps']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['ps']->value['account'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                        </select>
                                        <input type="hidden" name="payee" id="payee" value="0">

                                    </div>
                                </div>

                            <?php } elseif ($_smarty_tpl->tpl_vars['t']->value['type'] == 'Expense') {?>
                                <div class="form-group">
                                    <label for="payee" ><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payee'];?>
</label>

                                    <select id="payee" name="payee" class="s2 form-control">
                                        <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Contact'];?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value, 'ps');
$_smarty_tpl->tpl_vars['ps']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ps']->value) {
$_smarty_tpl->tpl_vars['ps']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['t']->value['payeeid']) == ($_smarty_tpl->tpl_vars['ps']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['ps']->value['account'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                    </select>
                                    <input type="hidden" name="payer" id="payer" value="0">

                                </div>
                            <?php }?>

                            <div class="form-group">
                                <label for="staff_id" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Staff'];?>
</label>
                                <select id="staff_id" name="staff_id" class="form-control">
                                    <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staffs']->value, 'staff');
$_smarty_tpl->tpl_vars['staff']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['staff']->value) {
$_smarty_tpl->tpl_vars['staff']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['staff']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['staff']->value->id == $_smarty_tpl->tpl_vars['t']->value['staff_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['staff']->value->fullname;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>


                            <div class="form-group">
                                <label for="pmethod" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</label>
                                <select id="pmethod" name="pmethod" class="form-control">

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pms']->value, 'pm');
$_smarty_tpl->tpl_vars['pm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pm']->value) {
$_smarty_tpl->tpl_vars['pm']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['pm']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['pm']->value['name'] == $_smarty_tpl->tpl_vars['t']->value['method']) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['pm']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ref" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Ref'];?>
#</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ref" name="ref" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['ref'];?>
">
                                    <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ref_example'];?>
</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <input type="hidden" name="trid" id="trid" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
">
                                    <input type="hidden" id="trtype" name="trtype" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['type'];?>
">
                                    <button type="submit" id="submit" class="btn btn-primary"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                                </div>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>

        <div class="col-md-8">



            <?php if (($_smarty_tpl->tpl_vars['t']->value['type'] == 'Income') || ($_smarty_tpl->tpl_vars['t']->value['type'] == 'Expense')) {?>
                <div class="panel">
                    <div class="panel-hdr">
                        <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Print'];?>
</h5>

                    </div>
                    <div class="panel-container">
                        <div class="panel-content">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/receipt/<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['t']->value['vid'];?>
" target="_blank" class="btn btn-success"><i class="fal fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Receipt'];?>
</a>

                        </div>

                        
                    </div>
                </div>
            <?php }?>


            <?php if ($_smarty_tpl->tpl_vars['t']->value['attachments'] != '') {?>
                <div class="ibox float-e-margins">

                    <div class="ibox-content">

                        <?php echo Misc::transaction_attachment($_smarty_tpl->tpl_vars['t']->value['attachments']);?>


                    </div>
                </div>
            <?php }?>


            <div class="panel">
                <div class="panel-hdr">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</h5>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['tr_delete_warning'];?>
</p>
                        <form role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/delete-post/">





                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
">

                            <button type="submit" class="btn btn-danger"><i class="fal fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</button>
                        </form>
                    </div>




                </div>
            </div>


        </div>

    </div>

    <input type="hidden" id="_lan_no_results_found" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
">
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1874583069609c6b1b774377_44305083 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1874583069609c6b1b774377_44305083',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {

            $('.amount').autoNumeric('init');



            $("#account").select2({

                language: {
                    noResults: function () {
                        return $("#_lan_no_results_found").val();
                    }
                }
            });



            $("#pmethod").select2({

                language: {
                    noResults: function () {
                        return $("#_lan_no_results_found").val();
                    }
                }
            });

            $("#company").select2({

                language: {
                    noResults: function () {
                        return $("#_lan_no_results_found").val();
                    }
                }
            });

            $(".s2").select2({

                language: {
                    noResults: function () {
                        return $("#_lan_no_results_found").val();
                    }
                }
            });

            $('#tags').select2({
                tags: true,
                tokenSeparators: [','],

                language: {
                    noResults: function () {
                        return $("#_lan_no_results_found").val();
                    }
                }
            });

            // $("#a_hide").hide();
            $("#emsg").hide();
            // $("#a_toggle").click(function(e){
            //     e.preventDefault();
            //     $("#a_hide").toggle( "slow" );
            // });


            var trtype =  $('#trtype').val();
            trtype = trtype.toLowerCase();

            var _url = $("#_url").val();

            $("#submit").click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message: null });
                var _url = $("#_url").val();
                $.post(_url + 'transactions/edit-post/', {



                    date: $('#date').val(),

                    id: $('#trid').val(),
                    cats: $('#cats').val(),
                    description: $('#description').val(),
                    tags: $('#tags').val(),

                    pmethod: $('#pmethod').val(),
                    payee: $('#payee').val(),
                    payer: $('#payer').val(),
                    ref: $('#ref').val(),
                    company: $('#company').val(),
                    staff_id: $('#staff_id').val(),

                })
                    .done(function (data) {

                        var sbutton = $("#submit");
                        var _url = $("#_url").val();
                        if ($.isNumeric(data)) {

                            location.reload();
                        }
                        else {
                            $('#ibox_form').unblock();
                            var body = $("html, body");
                            body.animate({ scrollTop:0 }, '1000', 'swing');
                            $("#emsgbody").html(data);
                            $("#emsg").show("slow");
                        }
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
