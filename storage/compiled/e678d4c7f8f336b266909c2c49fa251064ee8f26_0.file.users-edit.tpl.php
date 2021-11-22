<?php
/* Smarty version 3.1.39, created on 2021-04-20 20:05:48
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/users-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607f6c5c9a0e30_03206619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e678d4c7f8f336b266909c2c49fa251064ee8f26' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/users-edit.tpl',
      1 => 1618963542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607f6c5c9a0e30_03206619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_530020382607f6c5c977ad0_91092700', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_729591655607f6c5c97b0c5_67868130', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1052667329607f6c5c99bcf6_08934202', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_530020382607f6c5c977ad0_91092700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_530020382607f6c5c977ad0_91092700',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['d']->value['img'] != '') {?>

        <style>
            #croppic{

                background-image: url(<?php echo $_smarty_tpl->tpl_vars['app_url']->value;
echo $_smarty_tpl->tpl_vars['d']->value['img'];?>
);

            }
        </style>

    <?php }?>


<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_729591655607f6c5c97b0c5_67868130 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_729591655607f6c5c97b0c5_67868130',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="mx-auto" style="max-width: 800px;">
        <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit-post">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-hdr">
                            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit User'];?>
</h2>

                        </div>
                        <div class="panel-container" id="application_ajaxrender">
                            <div class="panel-content">
                                <div class="form-group">
                                    <label for="username"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
                                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
">
                                </div>

                                <div class="form-group">
                                    <label for="fullname"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full Name'];?>
</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['fullname'];?>
">
                                </div>
                                <div class="form-group">
                                    <label for="phonenumber"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>
                                    <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['phonenumber'];?>
">
                                </div>
                                <div class="form-group">
                                    <label for="user_language"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Default_Language'];?>
</label>
                                    <select class="form-control" name="user_language" id="user_language">


                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
" <?php if ($_smarty_tpl->tpl_vars['selected_language']->value == $_smarty_tpl->tpl_vars['language']->value['iso_code']) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                    </select>
                                </div>

                                <div class="form-group">
                                    <div id="croppic"></div>

                                    <button type="button" id="cropContainerHeaderButton" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Upload Picture'];?>
</button>
                                                                        <button type="button" id="no_image" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['_L']->value['No Image'];?>
</button>
                                </div>
                                <div class="form-group">
                                    <label for="fullname"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Picture'];?>
</label>
                                    <input type="text" class="form-control picture" id="picture" readonly name="picture" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['img'];?>
">
                                </div>

                                <?php if (($_smarty_tpl->tpl_vars['user']->value['id']) != ($_smarty_tpl->tpl_vars['d']->value['id'])) {?>
                                    <div class="form-group">


                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['User'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>

                                        <div class="i-checks"><label> <input type="radio" value="Admin" name="user_type" <?php if ($_smarty_tpl->tpl_vars['d']->value->user_type == 'Admin') {?>checked<?php }?>> <i></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Full Administrator'];?>
 </label></div>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
$_smarty_tpl->tpl_vars['role']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->do_else = false;
?>
                                            <div class="i-checks"><label> <input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
" name="user_type" <?php if ($_smarty_tpl->tpl_vars['d']->value->roleid == $_smarty_tpl->tpl_vars['role']->value['id']) {?>checked<?php }?>> <i></i> <?php echo $_smarty_tpl->tpl_vars['role']->value['rname'];?>
 </label></div>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    </div>
                                <?php }?>

                                <div class="form-group">
                                    <label for="password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['password_change_help'];?>
</span>
                                </div>

                                <div class="form-group">
                                    <label for="cpassword"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm Password'];?>
</label>
                                    <input type="password" class="form-control" id="cpassword" name="cpassword">
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->roleid == 0) {?>

                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Job title'];?>
</label>
                                        <input class="form-control" name="job_title" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->job_title;?>
">
                                    </div>

                                    <div class="form-group">
                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
                                        <input class="form-control" name="address" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->address_line_1;?>
">
                                    </div>

                                    <div class="form-group">
                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</label>
                                        <input class="form-control" name="city" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->city;?>
">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</label>
                                                <input class="form-control" name="state" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->state;?>
">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
</label>
                                                <input class="form-control" name="zip" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->zip;?>
">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</label>
                                        <select class="form-control" name="country">
                                            <?php if ($_smarty_tpl->tpl_vars['d']->value->country != '') {?>
                                                <?php echo Countries::all($_smarty_tpl->tpl_vars['d']->value->country);?>

                                            <?php } else { ?>
                                                <?php echo Countries::all($_smarty_tpl->tpl_vars['config']->value['country']);?>

                                            <?php }?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Joined'];?>
</label>
                                        <input class="form-control" name="date_hired" datepicker
                                               data-date-format="yyyy-mm-dd" data-auto-close="true" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->date_hired;?>
">
                                    </div>

                                    <div class="form-group">
                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Pay frequency'];?>
</label>
                                        <select class="form-control" name="pay_frequency">
                                            <option value="Monthly" <?php if ($_smarty_tpl->tpl_vars['d']->value->pay_frequency == 'Monthly') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Monthly'];?>
</option>
                                            <option value="Hourly" <?php if ($_smarty_tpl->tpl_vars['d']->value->pay_frequency == 'Hourly') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hourly'];?>
</option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</label>
                                        <input class="form-control amount" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['d']->value->amount;?>
">
                                    </div>


                                    <div class="form-group">
                                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Summary'];?>
</label>
                                        <textarea class="form-control" rows="10" name="summary"><?php echo $_smarty_tpl->tpl_vars['d']->value->summary;?>
</textarea>
                                    </div>


                                <?php }?>



                                <?php echo csrf_field();?>

                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                                <button type="submit" class="btn btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>



                            </div>



                        </div>
                    </div>



                </div>


                <div class="col-md-12">



                    <div class="panel" id="ui_settings">

                        <div id="application_ajaxrender">
                            <div class="panel-hdr">
                                <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Notifications'];?>
</h2>
                            </div>


                            <div class="panel-container">
                                <div class="panel-content">
                                    <table class="table table-hover table-bordered">
                                        <tbody>


                                        <tr>
                                            <td width="80%"><label for="config_email_notify"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
 </label></td>
                                            <td> <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['user']->value->email_notify == '1') {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_email_notify"></td>
                                        </tr>

                                        <tr>
                                            <td width="80%"><label for="config_sms_notify"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMS'];?>
 </label></td>
                                            <td> <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['user']->value->sms_notify == '1') {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_sms_notify"></td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>



                        </div>
                    </div>




                    <?php if ($_smarty_tpl->tpl_vars['user']->value->roleid == 0) {?>

                        <div class="panel">

                            <div class="panel-hdr">
                                <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Departments'];?>
</h2>
                            </div>

                            <div class="panel-container">
                                <div class="panel-content">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departments']->value, 'department');
$_smarty_tpl->tpl_vars['department']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->do_else = false;
?>

                                        <div class="mb-3">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input on_change_department" id="department_<?php echo $_smarty_tpl->tpl_vars['department']->value->id;?>
"
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['assigned_departments']->value[$_smarty_tpl->tpl_vars['department']->value->id]))) {?> checked<?php }?>
                                                >
                                                <label class="custom-control-label" for="department_<?php echo $_smarty_tpl->tpl_vars['department']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['department']->value->dname;?>
</label>
                                            </div>
                                        </div>


                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>



                        </div>

                    <?php }?>





                </div>



            </div>

        </form>
    </div>



<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_1052667329607f6c5c99bcf6_08934202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1052667329607f6c5c99bcf6_08934202',
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

        $('#config_email_notify').change(function() {

            $('#ui_settings').block({ message: null });


            if($(this).prop('checked')){

                $.post( base_url+'settings/set_notify/', { opt: "email_notify", val: "1" })
                    .done(function( data ) {
                        $('#ui_settings').unblock();
                        location.reload();
                    });

            }
            else{
                $.post( _url+'settings/set_notify/', { opt: "email_notify", val: "0" })
                    .done(function( data ) {
                        $('#ui_settings').unblock();
                        location.reload();
                    });
            }
        });

        $('#config_sms_notify').change(function() {

            $('#ui_settings').block({ message: null });


            if($(this).prop('checked')){

                $.post( base_url+'settings/set_notify/', { opt: "sms_notify", val: "1" })
                    .done(function( data ) {
                        $('#ui_settings').unblock();
                        location.reload();
                    });

            }
            else{
                $.post( _url+'settings/set_notify/', { opt: "sms_notify", val: "0" })
                    .done(function( data ) {
                        $('#ui_settings').unblock();
                        location.reload();
                    });
            }
        });


        var _url = $("#_url").val();


        var croppicHeaderOptions = {

            uploadUrl: _url + 'sys_imgcrop/save/',
            cropData:{
                "email":1,
                "rnd":"rnd"
            },
            cropUrl:  _url + 'sys_imgcrop/crop/',
            outputUrlId:'picture',
            customUploadButtonId:'cropContainerHeaderButton',
            modal:false,
            loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
            onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
            onAfterImgUpload: function(){ console.log('onAfterImgUpload') },
            onImgDrag: function(){ console.log('onImgDrag') },
            onImgZoom: function(){ console.log('onImgZoom') },
            onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') },
            onAfterImgCrop:function(){ console.log('onAfterImgCrop') }
        }
        var croppic = new Croppic('croppic', croppicHeaderOptions);


        var sysrender = $('#application_ajaxrender');




        sysrender.on('click', '#no_image', function(e){
            e.preventDefault();
            $('#picture').val('');

        });

        sysrender.on('click', '#more_submit', function(e){
            e.preventDefault();


            $('#ibox_form').block({ message: null });
            var _url = $("#_url").val();
            $.post(_url + 'contacts/edit-more/', {
                cid: $('#cid').val(),
                picture: $('#picture').val(),
                facebook: $('#facebook').val(),
                google: $('#google').val(),
                linkedin: $('#linkedin').val()

            })
                .done(function (data) {

                    setTimeout(function () {
                        var sbutton = $("#more_submit");
                        var _url = $("#_url").val();
                        if ($.isNumeric(data)) {

                            window.location = _url + 'contacts/view/' + data + '/';
                        }
                        else {
                            $('#ibox_form').unblock();

                            $("#emsgbody").html(data);
                            $("#emsg").show("slow");
                        }
                    }, 2000);
                });

        });


        $('.on_change_department').on('change',function () {
            let that = $(this);
            let id = that.attr('id');
            let status = 0;
            if(that.prop('checked'))
                {
                    status = 1;
                }
            $.post(base_url + 'settings/set-user-ticket-department/', {
                department_id: id,
                user_id: <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
,
                status: status,
            })
                .done(function (data) {
                    toastr.success('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Updated'];?>
');
                });
        });



    })

<?php echo '</script'; ?>
>


<?php
}
}
/* {/block "script"} */
}
