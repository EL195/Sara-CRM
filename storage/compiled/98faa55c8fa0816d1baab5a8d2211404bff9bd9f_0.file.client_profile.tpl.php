<?php
/* Smarty version 3.1.39, created on 2021-02-26 13:48:15
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6039426fe651d5_26483931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98faa55c8fa0816d1baab5a8d2211404bff9bd9f' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_profile.tpl',
      1 => 1613557924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6039426fe651d5_26483931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19187095746039426fe423f6_80827266', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20167794026039426fe44049_09618166', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2757516006039426fe643e1_22796843', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "head"} */
class Block_19187095746039426fe423f6_80827266 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_19187095746039426fe423f6_80827266',
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

</style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_20167794026039426fe44049_09618166 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20167794026039426fe44049_09618166',
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


                            <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] == '') {?>
                                <a href="javascript:;" onclick="upload_profile_picture();"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/img/default-user-avatar.png" class="img-circle" style="max-width: 128px;" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
"></a>
                            <?php } else { ?>
                                <a href="javascript:;" onclick="upload_profile_picture();">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;
echo $_smarty_tpl->tpl_vars['user']->value->img;?>
" class="rounded-circle m-t-xs img-fluid avatar-xl mb-4" style="max-width: 128px;" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
">
                                </a>
                            <?php }?>

                            <form enctype="multipart/form-data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/profile-picture-upload" id="form_profile_picture">
                                <input type="file" id="file_profile_picture" name="file" style="display: none;" />
                            </form>

                            <h3 style="margin-top: 20px; margin-bottom: 20px;"><span class="h2"><?php echo $_smarty_tpl->tpl_vars['user']->value->account;?>
</span></h3>

                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['user']->value->phone;?>

                            <br>
                            <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>


                            <?php if ($_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>

                                <br>

                                <strong><?php echo $_smarty_tpl->tpl_vars['config']->value['label_business_number'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['user']->value->business_number;?>


                            <?php }?>
                            <br>
                            <br>

                            <address>
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

                                <br>


                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cf']->value, 'cfs');
$_smarty_tpl->tpl_vars['cfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cfs']->value) {
$_smarty_tpl->tpl_vars['cfs']->do_else = false;
?>
                                    <br>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['cfs']->value['fieldname'];?>
: </strong> <?php echo get_custom_field_value($_smarty_tpl->tpl_vars['cfs']->value['id'],$_smarty_tpl->tpl_vars['user']->value->id);?>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </address>


                            <a class="btn btn-warning" href="javascript:;" onclick="upload_profile_picture();"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Upload Picture'];?>
</a>

                            <?php if ($_smarty_tpl->tpl_vars['user']->value['img'] != '') {?>
                                <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/remove-profile-picture"><?php echo $_smarty_tpl->tpl_vars['_L']->value['No Image'];?>
</a>


                            <?php }?>

                            <br>

                             <?php if (!empty($_smarty_tpl->tpl_vars['config']->value['shipping_address'])) {?>
                                 <a class="btn btn-warning mt-3" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/shipping-addresses"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Shipping Addresses'];?>
</a>
                             <?php }?>



                        </div>


                    </div>
                </div>


            </div>
        </div>
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-hdr">

                    <h2><span class="h5"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit Profile'];?>
</span></h2>

              </div>
                <div class="panel-container">
                    <div class="panel-content">


                        <form class="form-horizontal" id="iform">

                            <div class="form-group"><label  for="account"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account Name'];?>
</span></label>

                                <input type="text" id="account" name="account" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['account'];?>
">
                            </div>

                            <div class="form-group"><label  for="company"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
</span></label>

                                <input type="text" id="company" name="company" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['company'];?>
">
                            </div>

                            <div class="form-group"><label  for="edit_email"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</span></label>

                                <input type="text" id="edit_email" name="edit_email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
">
                            </div>
                            <div class="form-group"><label  for="phone"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</span></label>

                                <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['phone'];?>
">
                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['config']->value['show_business_number'] == '1') {?>

                                <div class="form-group">

                                    <label for="business_number"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['config']->value['label_business_number'];?>
</span> </label>

                                    <input type="text" id="business_number" name="business_number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['business_number'];?>
">
                                </div>

                            <?php }?>

                            <?php if (!(isset($_smarty_tpl->tpl_vars['hide_client_address']->value))) {?>

                                <div class="form-group"><label  for="address"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</span></label>

                                    <input type="text" id="address" name="address" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['address'];?>
">
                                </div>
                                <div class="form-group"><label  for="city"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</span></label>

                                    <input type="text" id="city" name="city" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['city'];?>
">
                                </div>
                                <div class="form-group"><label  for="state"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</span></label>

                                    <input type="text" id="state" name="state" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['state'];?>
">
                                </div>
                                <div class="form-group"><label for="zip"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
</span> </label>

                                    <input type="text" id="zip" name="zip" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['zip'];?>
">
                                </div>
                                <div class="form-group"><label  for="country"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</span></label>

                                    <select name="country" id="country" class="form-control">
                                        <option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Country'];?>
</option>
                                        <?php echo $_smarty_tpl->tpl_vars['countries']->value;?>

                                    </select>
                                </div>

                            <?php }?>





                            <div class="form-group"><label  for="password"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
 </span></label>

                                <input type="password" id="password" name="password" class="form-control">

                                <span class="help-block text-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['password_change_help'];?>
</span>

                            </div>



                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" id="submit"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                            </div>

                        </form>


                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="row">

    <div class="col-md-4">

    <div class="panel">




    </div>
    </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_2757516006039426fe643e1_22796843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2757516006039426fe643e1_22796843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>

        var $file_profile_picture = $("#file_profile_picture");

        function upload_profile_picture()
        {
            $file_profile_picture.click();
        }

        $(function () {


            $file_profile_picture.change(function() {
                $('#form_profile_picture').submit();
            });


            var btn_form_action = $("#submit");


            var iform = $('#iform');


            var _url = $("#_url").val();

            btn_form_action.on('click', function(e) {
                e.preventDefault();
                iform.block({ message: block_msg });
                $.post( _url + "client/profile_edit_post/", iform.serialize())
                    .done(function (data) {
                        if ($.isNumeric(data)) {

                            location.reload();

                        }
                        else {



                            // OR

                            iform.unblock();


                            toastr.error(data)





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
