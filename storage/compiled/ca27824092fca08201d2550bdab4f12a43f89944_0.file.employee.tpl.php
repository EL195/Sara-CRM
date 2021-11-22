<?php
/* Smarty version 3.1.39, created on 2021-06-25 08:08:34
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/employee.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d5c7420ae0d0_05059885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca27824092fca08201d2550bdab4f12a43f89944' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/employee.tpl',
      1 => 1592518168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d5c7420ae0d0_05059885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74988922560d5c74208d8e5_63045456', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142174980260d5c7420aa2d8_40504332', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_74988922560d5c74208d8e5_63045456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_74988922560d5c74208d8e5_63045456',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-body">
                    <div class="panel-hdr">
                        <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add an employee'];?>
</h2>
                    </div>

                 <div class="panel-container">
                     <div class="panel-content">
                         <form method="post" id="mainForm">
                             <div class="form-group">
                                 <label for="inputName"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                                 <input class="form-control" id="inputName" name="name" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->name;?>
" <?php }?>>
                             </div>


                             <div class="form-group">
                                 <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>
                                 <input class="form-control" type="email" name="email" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->email;?>
" <?php }?>>
                             </div>

                             <div class="form-group">
                                 <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>
                                 <input class="form-control" type="text" name="phone" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->phone;?>
" <?php }?>>
                             </div>


                             <div class="form-group">
                                 <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Job title'];?>
</label>
                                 <input class="form-control" name="job_title" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->job_title;?>
" <?php }?>>
                             </div>

                             <div class="form-group">
                                 <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
                                 <input class="form-control" name="address" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->address_line_1;?>
" <?php }?>>
                             </div>

                             <div class="form-group">
                                 <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</label>
                                 <input class="form-control" name="city" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->city;?>
" <?php }?>>
                             </div>

                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</label>
                                         <input class="form-control" name="state" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->state;?>
" <?php }?>>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
</label>
                                         <input class="form-control" name="zip" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->zip;?>
" <?php }?>>
                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</label>
                                 <select class="form-control" name="country">
                                     <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?>
                                         <?php echo Countries::all($_smarty_tpl->tpl_vars['employee']->value->country);?>

                                     <?php } else { ?>
                                         <?php echo Countries::all($_smarty_tpl->tpl_vars['config']->value['country']);?>

                                     <?php }?>
                                 </select>
                             </div>

                             <div class="form-group">
                                 <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Joined'];?>
</label>
                                 <input class="form-control" name="date_hired" datepicker
                                        data-date-format="yyyy-mm-dd" data-auto-close="true"  <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->date_hired;?>
" <?php } else { ?> value="<?php echo date('Y-m-d');?>
" <?php }?>>
                             </div>

                             <div class="form-group">
                                 <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Pay frequency'];?>
</label>
                                 <select class="form-control" name="pay_frequency">
                                     <option value="Monthly" <?php if ($_smarty_tpl->tpl_vars['employee']->value && $_smarty_tpl->tpl_vars['employee']->value->pay_frequency == 'Monthly') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Monthly'];?>
</option>
                                     <option value="Hourly" <?php if ($_smarty_tpl->tpl_vars['employee']->value && $_smarty_tpl->tpl_vars['employee']->value->pay_frequency == 'Hourly') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hourly'];?>
</option>
                                 </select>
                             </div>


                             <div class="form-group">
                                 <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</label>
                                 <input class="form-control amount" name="amount" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->amount;?>
" <?php }?>>
                             </div>


                             <div class="form-group">
                                 <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Summary'];?>
</label>
                                 <textarea class="form-control" rows="10" name="summary"><?php if ($_smarty_tpl->tpl_vars['employee']->value) {
echo $_smarty_tpl->tpl_vars['employee']->value->summary;
}?></textarea>
                             </div>

                             <div class="form-group">
                                 <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Facebook Profile'];?>
</label>
                                 <input class="form-control" type="text" name="facebook" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->facebook;?>
" <?php }?>>
                             </div>

                             <div class="form-group">
                                 <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Linkedin Profile'];?>
</label>
                                 <input class="form-control" type="text" name="linkedin" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->linkedin;?>
" <?php }?>>
                             </div>

                             <div class="form-group">
                                 <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Twitter'];?>
</label>
                                 <input class="form-control" type="text" name="twitter" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->linkedin;?>
" <?php }?>>
                             </div>

                             <div class="form-group">
                                 <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?>
                                     <input type="hidden" name="employee_id" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->id;?>
">
                                     <input type="hidden" name="file_link" id="file_link" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->image;?>
">
                                 <?php } else { ?>
                                     <input type="hidden" name="file_link" id="file_link" value="">
                                 <?php }?>

                                 <button class="btn btn-primary" id="btnSubmit" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                             </div>
                         </form>
                     </div>
                 </div>




                </div>
            </div>
        </div>


            <div class="col-md-6">

                <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?>
                <div class="panel">
                    <div class="panel-hdr">
                        <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</h2>
                        <div class="panel-toolbar">
                            <a href="javascript:;" onclick="confirmThenGoToUrl(event,'delete/employee/<?php echo $_smarty_tpl->tpl_vars['employee']->value->id;?>
');" class="btn btn-danger">Delete</a>
                        </div>
                    </div>

                </div>
                <?php }?>

                <div class="panel">
                    <div class="panel-container">
                        <div class="panel-content">
                            <div class="panel-body" id="ibox_form">

                                <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Image'];?>
</h3>

                                <div class="hr-line-dashed"></div>

                                <form action="" class="dropzone" id="upload_container">

                                    <div class="dz-message">
                                        <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Drop File Here'];?>
</h3>
                                        <br />
                                        <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Click to Upload'];?>
</span>
                                    </div>

                                </form>

                                <div class="hr-line-dashed"></div>

                                                            </div>
                        </div>
                    </div>

                </div>


                <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['employee_proficiencies'])) && $_smarty_tpl->tpl_vars['config']->value['employee_proficiencies'] == 1) {?>

                    <div class="panel">
                        <div class="panel-body">
                            <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Proficiencies'];?>
</h3>
                            <div class="hr-line-dashed"></div>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departments']->value, 'department');
$_smarty_tpl->tpl_vars['department']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->do_else = false;
?>

                                <div class="checkbox" style="margin-bottom: 20px;">
                                    <div class="i-checks"><label> <input name="sales_edit" class="ib_checkbox" type="checkbox" value="yes"> <span style="margin-left: 15px;"><?php echo $_smarty_tpl->tpl_vars['department']->value->dname;?>
</span></label></div>
                                </div>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        </div>
                    </div>

                <?php }?>


            </div>





    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_142174980260d5c7420aa2d8_40504332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_142174980260d5c7420aa2d8_40504332',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





    <?php echo '<script'; ?>
>

        Dropzone.autoDiscover = false;

        $(function () {


            // $('.i-checks').iCheck({
            //     checkboxClass: 'icheckbox_square-blue',
            //     radioClass: 'iradio_square-blue'
            // });
            //
            // $('input[type=radio][name=user_type]').on('ifClicked', function(event){
            //     var ib_selected = this.value;
            //     var perms_checkbox = $('.ib_checkbox');
            //     if (ib_selected == 'Admin') {
            //         perms_checkbox.iCheck('check');
            //         perms_checkbox.iCheck('disable');
            //     } else {
            //         perms_checkbox.iCheck('enable');
            //         perms_checkbox.iCheck('uncheck');
            //     }
            // });


            var btn_submit = $('#btnSubmit');

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

            var $file_link = $("#file_link");

            var upload_resp;

            var ib_file = new Dropzone("#upload_container",
                {
                    url: base_url + "hrm/upload-employee-image/",
                    maxFiles: 1
                }
            );


            ib_file.on("sending", function() {

                btn_submit.prop('disabled', true);

            });

            ib_file.on("success", function(file,response) {

                btn_submit.prop('disabled', false);

                upload_resp = response;

                if(upload_resp.success == 'Yes'){

                    toastr.success('<?php echo $_smarty_tpl->tpl_vars['_L']->value['Uploaded Successfully'];?>
');
                    $file_link.val(upload_resp.file);


                }
                else{
                    toastr.error(upload_resp.msg);
                }


            });




            btn_submit.click(function (e) {
                e.preventDefault();

                $.post( "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hrm/employee-post", $('#mainForm').serialize() ).done(function() {
                    window.location = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
hrm/employees';
                }).fail(function(data) {
                    toastr.error(data.responseText);
                });
            });
        })

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
