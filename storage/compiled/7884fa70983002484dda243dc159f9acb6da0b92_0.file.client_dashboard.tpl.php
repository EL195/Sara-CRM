<?php
/* Smarty version 3.1.39, created on 2021-06-20 17:04:00
  from '/Users/razib/Documents/valet/business-suite/apps/freight/views/client_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cfad40a250c4_33209394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7884fa70983002484dda243dc159f9acb6da0b92' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/freight/views/client_dashboard.tpl',
      1 => 1600851488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cfad40a250c4_33209394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43173599460cfad40a10fa1_57317465', "head");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47574886560cfad40a11f32_38183111', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50344162660cfad40a21d61_13823495', "script");
?>

<?php }
/* {block "head"} */
class Block_43173599460cfad40a10fa1_57317465 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_43173599460cfad40a10fa1_57317465',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }

        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
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
            color: #2CCE89!important;
        }
        label{
            font-size: 14px;
            font-weight: 700;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_47574886560cfad40a11f32_38183111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_47574886560cfad40a11f32_38183111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-md-4">
            <div class="panel">


                <div class="panel-container">
                    <div class="panel-content">
                        <div class="text-center">

                            <?php if ($_smarty_tpl->tpl_vars['user']->value->img) {?>
                                <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/<?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value->img;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" style="max-width: 130px;"class="rounded-circle m-t-xs img-fluid avatar-xl mb-4" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                            <?php } else { ?>
                                <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
/ui/lib/img/default-user-avatar.png" class="profile-image rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
">
                            <?php }?>


                            <h3 class="h2"><?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
</h3>

                            <?php if ($_smarty_tpl->tpl_vars['config']->value['add_fund'] == '1' && $_smarty_tpl->tpl_vars['config']->value['add_fund_client'] == '1') {?>


                                <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Your Current Balance'];?>
: <span class="amount text-success"><?php echo $_smarty_tpl->tpl_vars['user']->value->balance;?>
</span></h5>
                                <hr>
                                <a href="javascript:void(0)" class="btn btn-primary add_fund"><i class="fal fa-plus"></i> Add Fund</a>
                                <hr>


                            <?php }?>

                            <address>

                                <br>


                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28px" height="28px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="30" height="30"/>
                                        <path d="M11.914857,14.1427403 L14.1188827,11.9387145 C14.7276032,11.329994 14.8785122,10.4000511 14.4935235,9.63007378 L14.3686433,9.38031323 C13.9836546,8.61033591 14.1345636,7.680393 14.7432841,7.07167248 L17.4760882,4.33886839 C17.6713503,4.14360624 17.9879328,4.14360624 18.183195,4.33886839 C18.2211956,4.37686904 18.2528214,4.42074752 18.2768552,4.46881498 L19.3808309,6.67676638 C20.2253855,8.3658756 19.8943345,10.4059034 18.5589765,11.7412615 L12.560151,17.740087 C11.1066115,19.1936265 8.95659008,19.7011777 7.00646221,19.0511351 L4.5919826,18.2463085 C4.33001094,18.1589846 4.18843095,17.8758246 4.27575484,17.613853 C4.30030124,17.5402138 4.34165566,17.4733009 4.39654309,17.4184135 L7.04781491,14.7671417 C7.65653544,14.1584211 8.58647835,14.0075122 9.35645567,14.3925008 L9.60621621,14.5173811 C10.3761935,14.9023698 11.3061364,14.7514608 11.914857,14.1427403 Z" fill="#000000"/>
                                    </g>
                                </svg>
                                <span class="text-info h5"> <?php echo $_smarty_tpl->tpl_vars['user']->value->phone;?>
</span>




                                <br>

                                <span class="h5"><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</span>
                                <?php if ($_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>
                                    <br>

                                    <br>

                                    <strong class="h6"><?php echo $_smarty_tpl->tpl_vars['config']->value['label_business_number'];?>
</strong> <?php echo $_smarty_tpl->tpl_vars['user']->value->business_number;?>

                                    <br>

                                <?php }?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cf']->value, 'cfs');
$_smarty_tpl->tpl_vars['cfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cfs']->value) {
$_smarty_tpl->tpl_vars['cfs']->do_else = false;
?>
                                    <br>
                                    <strong class="h6"><?php echo $_smarty_tpl->tpl_vars['cfs']->value['fieldname'];?>
: </strong> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['cfs']->value['id'],$_smarty_tpl->tpl_vars['user']->value->id);?>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                
                                                                                                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->company != '') {?>
                                    <?php echo $_smarty_tpl->tpl_vars['user']->value->company;?>

                                    <br>
                                    <?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>

                                    <br>
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>

                                    <br>
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->address;?>
 <br>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->city;?>
 <br>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->state;?>
 - <?php echo $_smarty_tpl->tpl_vars['user']->value->zip;?>
 <br>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->country;?>






                            </address>

                            <div class="mt-3">
                                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/shipping-addresses">Final Delivery Addresses</a>
                            </div>


                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-8">
            <div class="panel">

                <div class="panel-container">
                    <div class="panel-content">

                        <?php echo Widget::getWidgetContent('client-auth-page-widget');?>





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
class Block_50344162660cfad40a21d61_13823495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_50344162660cfad40a21d61_13823495',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {


            $('.amount').autoNumeric('init', {

                aSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 ',
                dGroup: <?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
,
                aPad: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
,
                pSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
',
                aDec: '<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
',
                aSep: '<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
',
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'

            });

            $(".add_fund").click(function (e) {
                e.preventDefault();

                bootbox.prompt({
                    title: "Enter Amount",
                    value: "",
                    buttons: {
                        'cancel': {
                            label: 'Cancel'
                        },
                        'confirm': {
                            label: 'OK'
                        }
                    },
                    callback: function(result) {
                        if (result === null) {

                        } else {

                            $.redirectPost(base_url + "client/add_fund/",{ amount: result});

                        }
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
