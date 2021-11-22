<?php
/* Smarty version 3.1.39, created on 2021-04-20 19:25:17
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/ajax.contact-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607f62dd1acc08_54770094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c22821c21e8d801782c82e619e4a17e754cd1b20' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/ajax.contact-edit.tpl',
      1 => 1613470032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607f62dd1acc08_54770094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1247604424607f62dd1782a7_00371686', "head");
?>


<form class="form-horizontal" id="rform">

    <div class="form-group"><label for="account"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account Name'];?>
</span></label>

        <input type="text" id="account" name="account" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>
">
    </div>

    <div class="row mt-2">
        <div class="col-md-6 ">
            <div class="form-group"><label for="code"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Code'];?>
</span></label>

                <input type="text" id="code" name="code" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['code'];?>
">
            </div>

        </div>
        <div class="col-md-6 ">
            <div class="form-group h6"><label for="company_id"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company'];?>
</span></label>

                <select id="company_id" name="company_id" class="form-control">
                    <option value="0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
$_smarty_tpl->tpl_vars['company']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
$_smarty_tpl->tpl_vars['company']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value->cid == ($_smarty_tpl->tpl_vars['company']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>


        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-6">
            <div class="form-group h6"><label for="edit_email"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</span></label>

                <input type="text" id="edit_email" name="edit_email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
">
            </div>


        </div>
        <div class="col-md-6">
            <div class="form-group h6"><label for="edit_secondary_email"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Secondary Email'];?>
</span></label>
                <input type="text" id="edit_secondary_email" name="secondary_email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['secondary_email'];?>
">
            </div>


        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-6">
            <div class="form-group h6"><label for="phone"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</span></label>

                <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['phone'];?>
">
            </div>

        </div>
        <div class="col-md-6">
            <div class="form-group h6"><label for="company_id"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Owner'];?>
</span></label>

                <select class="form-control" name="owner_id" id="owner_id">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['owners']->value, 'owner');
$_smarty_tpl->tpl_vars['owner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['owner']->value) {
$_smarty_tpl->tpl_vars['owner']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['owner']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['owner']->value->id == $_smarty_tpl->tpl_vars['d']->value->o) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['owner']->value->fullname;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>

        </div>
    </div>



    <?php if ($_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>

        <div class="form-group h6">

            <label for="business_number"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['config']->value['label_business_number'];?>
</span></label>

            <input type="text" id="business_number" name="business_number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['business_number'];?>
">
        </div>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['config']->value['fax_field']) {?>

        <div class="form-group h6"><label for="phone"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Fax'];?>
</span></label>

            <input type="text" id="fax" name="fax" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['fax'];?>
">
        </div>

    <?php }?>


    <div class="form-group h6"><label for="address"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</span></label>

        <input type="text" id="address" name="address" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['address'];?>
">
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <div class="form-group h6"><label for="city"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</span></label>

                <input type="text" id="city" name="city" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['city'];?>
">
            </div>

        </div>
        <div class="col-md-6">
            <div class="form-group h6"><label for="state"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</span></label>
                <input type="text" id="state" name="state" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['state'];?>
">
            </div>

        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-4">
            <div class="form-group h6"><label for="zip"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
 </span></label>
                <input type="text" id="zip" name="zip" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['zip'];?>
">
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group h6"><label for="country"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</span></label>
                <select name="country" id="country" class="form-control">
                    <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Country'];?>
</option>
                    <?php echo $_smarty_tpl->tpl_vars['countries']->value;?>

                </select>
            </div>

        </div>
    </div>



    <div class="row mt-2">
        <div class="col-md-7">
            <div class="form-group h6"><label for="group"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Group'];?>
 </span></label>
                <select class="form-control" name="group" id="group">
                    <option value="0" <?php if (($_smarty_tpl->tpl_vars['d']->value['gid']) == 0) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['None'];?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gs']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['d']->value['gid']) == ($_smarty_tpl->tpl_vars['g']->value['id'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['g']->value['gname'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>


        </div>
        <div class="col-md-5">
            <?php if ($_smarty_tpl->tpl_vars['config']->value['accounting'] == '1') {?>

                <div class="form-group"><label class="col-md-2 control-label h6" for="currency"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Currency'];?>
</span></label>
                    <select id="currency" name="currency" class="form-control">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['id'];?>
"
                                    <?php if (($_smarty_tpl->tpl_vars['d']->value['currency']) == ($_smarty_tpl->tpl_vars['currency']->value['id'])) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value['cname'];?>
</option>
                            <?php
}
if ($_smarty_tpl->tpl_vars['currency']->do_else) {
?>
                            <option value="0"><?php echo $_smarty_tpl->tpl_vars['config']->value['home_currency'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </select>
                </div>

            <?php }?>
        </div>
    </div>












    <?php if ($_smarty_tpl->tpl_vars['config']->value['client_dashboard'] == '1') {?>

    <?php if ($_smarty_tpl->tpl_vars['config']->value['customer_custom_username']) {?>

        <div class="form-group h6"><label for="username"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
 </span></label>

            <input type="text" id="username" name="username" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
">
        </div>


        <?php }?>


        <div class="form-group h6"><label for="password"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</span> </label>

            <input type="password" id="password" name="password" class="form-control" autocomplete="new-password">

            <span class="help-block text-info h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['password_change_help'];?>
</span>
        </div>

    <?php }?>



    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fs']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
        <div class="form-group"><label for="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['fieldname'];?>
</label>
            <?php if (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'text') {?>


                <input type="text" id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control" value="<?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']) != '') {?> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']);
}?>">
                <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                    <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                <?php }?>

            <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'password') {?>

                <input type="password" id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control" value="<?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']) != '') {?> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']);
}?>">
                <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                    <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                <?php }?>

            <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'dropdown') {?>
                <select id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(',',$_smarty_tpl->tpl_vars['f']->value['fieldoptions']), 'fo');
$_smarty_tpl->tpl_vars['fo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fo']->value) {
$_smarty_tpl->tpl_vars['fo']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['fo']->value;?>
" <?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']) == $_smarty_tpl->tpl_vars['fo']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['fo']->value;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                    <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                <?php }?>

            <?php } elseif (($_smarty_tpl->tpl_vars['f']->value['fieldtype']) == 'textarea') {?>

                <textarea id="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" name="cf<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="form-control" rows="3"><?php if (get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']) != '') {?> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['f']->value['id'],$_smarty_tpl->tpl_vars['d']->value['id']);
}?></textarea>
                <?php if (($_smarty_tpl->tpl_vars['f']->value['description']) != '') {?>
                    <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f']->value['description'];?>
</span>
                <?php }?>

            <?php } else { ?>
            <?php }?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <div class="form-group"><label for="cid"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</span> </label>

        <div class="checkbox">
            <label>
                <input type="checkbox" class="custom-checkbox" name="customer" value="Customer" <?php if ($_smarty_tpl->tpl_vars['d']->value->type == 'Customer,Supplier' || $_smarty_tpl->tpl_vars['d']->value->type == 'Customer') {?> checked <?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>

            </label>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['config']->value['suppliers'] == '1') {?>
            <div class="checkbox">
                <label>
                    <input type="checkbox" class="custom-checkbox" name="supplier" value="Supplier"  <?php if ($_smarty_tpl->tpl_vars['d']->value->type == 'Customer,Supplier' || $_smarty_tpl->tpl_vars['d']->value->type == 'Supplier') {?> checked <?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Supplier'];?>

                </label>
            </div>
        <?php }?>
    </div>

    <div class="form-group"><label for="tags"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tags'];?>
</span></label>

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
        <button class="btn btn-primary" type="submit" id="submit"><i class="fal fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
    </div>



    <input type="hidden" name="fcid" id="fcid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">


</form>
<?php }
/* {block "head"} */
class Block_1247604424607f62dd1782a7_00371686 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1247604424607f62dd1782a7_00371686',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />
    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;

        }
        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d;
        }


        .text-info{
            color: #6772E5!important;
        }
        .text-success{
            color: #2CCE89!important;}

        .text-danger{
            color: #F6365B!important;
        }
        .text-warning{
            color: #FB6340!important;
        }
        .text-primary{
            color: #10CDEF!important;
        }
    </style>
<?php
}
}
/* {/block "head"} */
}
