<?php
/* Smarty version 3.1.39, created on 2021-06-29 08:37:23
  from '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db14034d1125_05388579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae0c5dbf8f4e8ba1c9fb5706db4bdaa89e597066' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/add.tpl',
      1 => 1612609748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db14034d1125_05388579 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108987098460db14034a3c00_08761669', "head_extras_from_layout");
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109682882360db14034a5b67_37367448', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213927666060db14034ccf46_04647386', 'script');
?>

<?php }
/* {block "head_extras_from_layout"} */
class Block_108987098460db14034a3c00_08761669 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_extras_from_layout' => 
  array (
    0 => 'Block_108987098460db14034a3c00_08761669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

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
/* {/block "head_extras_from_layout"} */
/* {block "content"} */
class Block_109682882360db14034a5b67_37367448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_109682882360db14034a5b67_37367448',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <form method="post" id="mainForm">
        <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->id;?>
">
        <?php }?>

    <div class="row">


        <div class="col-md-6">
            <div class="panel">
                <div class="panel-body">
                    <div class="panel-hdr">
                        <h3>Personal</h3>
                    </div>

                    <div class="panel-container">
                        <div class="panel-content">





                                <div class="form-group h5">
                                    <label for="inputName"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                                    <input class="form-control" id="inputName" name="name" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->name;?>
" <?php }?>>
                                </div>

                                <div class="row">
                                    <div class="col">

                                        <div class="form-group h5">
                                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</label>
                                            <input class="form-control" type="email" name="email" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->email;?>
" <?php }?>>
                                        </div>


                                    </div>
                                    <div class="col">

                                        <div class="form-group h5">
                                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</label>
                                            <input class="form-control" type="text" name="phone" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->phone;?>
" <?php }?>>
                                        </div>



                                    </div>
                                </div>
                            <div class="row mt-3">
                                <div class="col">

                                    <div class="form-group h5">
                                        <label>Date of Birth</label>
                                        <input class="form-control" name="date_of_birth" datepicker
                                               data-date-format="yyyy-mm-dd" data-auto-close="true"  <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->date_of_birth;?>
" <?php } else { ?> value="<?php echo date('Y/m/d');?>
" <?php }?>>
                                    </div>


                                </div>
                                <div class="col">

                                    <div class="form-group h5">
                                        <label>Gender</label>
                                        <input class="form-control" type="text" name="gender" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->gender;?>
" <?php }?>>
                                    </div>



                                </div>
                            </div>
                            <div class="form-group h5 mt-3">
                                <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
                                <input class="form-control" type="text" name="password">
                            </div>


                                <div class=" row mt-3">
                                    <div class="col">
                                        <div class="form-group h5">
                                            <label>Department</label>

                                            <select id="department"name="department" class="form-control">
                                                <option value="0">None</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departments']->value, 'department');
$_smarty_tpl->tpl_vars['department']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->do_else = false;
?>

                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['department']->value->id;?>
"
                                                            <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?>

                                                                <?php if ($_smarty_tpl->tpl_vars['employee']->value->department === $_smarty_tpl->tpl_vars['department']->value->id) {?>
                                                                    selected
                                                                <?php }?>

                                                            <?php }?>

                                                    ><?php echo $_smarty_tpl->tpl_vars['department']->value->title;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col">
                                        <div class="form-group h5">
                                            <label>Designation</label>

                                            <select name="designation" id="designation"  class="form-control">
                                                <option value="0">None</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['designations']->value, 'designation');
$_smarty_tpl->tpl_vars['designation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['designation']->value) {
$_smarty_tpl->tpl_vars['designation']->do_else = false;
?>

                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['designation']->value->id;?>
"
                                                            <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?>

                                                                <?php if ($_smarty_tpl->tpl_vars['employee']->value->designation === $_smarty_tpl->tpl_vars['designation']->value->id) {?>
                                                                    selected
                                                                <?php }?>

                                                            <?php }?>

                                                    ><?php echo $_smarty_tpl->tpl_vars['designation']->value->title;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>

                                    </div>


                                </div>
                            <div class="form-group h5 mt-3">
                                <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date Joined'];?>
</label>
                                <input class="form-control" name="date_joined" datepicker
                                       data-date-format="yyyy-mm-dd" data-auto-close="true"  <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->date_joined;?>
" <?php } else { ?> value="<?php echo date('Y/m/d');?>
" <?php }?>>
                            </div>






                                <div class="form-group h5 mt-3">
                                    <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Summary'];?>
</label>
                                    <textarea class="form-control" rows="4" name="summary"><?php if ($_smarty_tpl->tpl_vars['employee']->value) {
echo $_smarty_tpl->tpl_vars['employee']->value->summary;
}?></textarea>
                                </div>


                                <div class="form-group h5">
                                    <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?>
                                        <input type="hidden" name="employee_id" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->id;?>
">
                                        <input type="hidden" name="file_link" id="file_link" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->image;?>
">
                                    <?php } else { ?>
                                        <input type="hidden" name="file_link" id="file_link" value="">
                                    <?php }?>


                                </div>

                        </div>
                    </div>



                </div>
            </div>
            <div class="panel">
                <div class="panel-hdr">
                    <h3>Social</h3>
                </div>
                <div class="panel-container">
                    <div class="panel-content">

                        <div class="form-group h5">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Facebook Profile'];?>
</label>
                            <input class="form-control" type="text" name="facebook" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->facebook;?>
" <?php }?>>
                        </div>

                        <div class="form-group h5">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Linkedin Profile'];?>
</label>
                            <input class="form-control" type="text" name="linkedin" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->linkedin;?>
" <?php }?>>
                        </div>

                        <div class="form-group h5">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Twitter'];?>
</label>
                            <input class="form-control" type="text" name="twitter" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->linkedin;?>
" <?php }?>>
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

                <div class="panel-hdr">
                    <h3>Bank Account</h3>
                </div>


                <div class="panel-container">
                    <div class="panel-content">
                        <div class="form-group h5 mt-3">
                            <label>Account Name</label>
                            <input class="form-control" name="account_name" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->address_line_1;?>
" <?php }?>>
                        </div>


                        <div class="form-group h5">
                            <label>Account Number</label>
                            <input class="form-control" name="account_number" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->city;?>
" <?php }?>>
                        </div>

                        <div class="row">
                            <div class="col-md-6 h5">
                                <div class="form-group">
                                    <label>Bank Name</label>
                                    <input class="form-control" name="bank_name" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->state;?>
" <?php }?>>
                                </div>
                            </div>
                            <div class="col-md-6 h5">
                                <div class="form-group">
                                    <label>Branch Name </label>
                                    <input class="form-control" name="branch_name" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->zip;?>
" <?php }?>>
                                </div>
                            </div>
                        </div>
                        <div class="form-group h5">
                            <label>Bank Identifier Code</label>
                            <input class="form-control" name="bank_code" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->zip;?>
" <?php }?>>
                        </div>
                        <div class="form-group h5">
                            <label>Tax Number</label>
                            <input class="form-control" name="tax_number" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->zip;?>
" <?php }?>>
                        </div>


                    </div>
                </div>

            </div>
            <div class="panel">

                <div class="panel-hdr">
                    <h3>Address</h3>
                </div>


                <div class="panel-container">
                    <div class="panel-content">
                        <div class="form-group h5 mt-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
                            <input class="form-control" name="address" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->address_line_1;?>
" <?php }?>>
                        </div>

                        <div class="form-group h5">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</label>
                            <input class="form-control" name="city" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->city;?>
" <?php }?>>
                        </div>

                        <div class="row">
                            <div class="col-md-6 h5">
                                <div class="form-group">
                                    <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</label>
                                    <input class="form-control" name="state" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->state;?>
" <?php }?>>
                                </div>
                            </div>
                            <div class="col-md-6 h5">
                                <div class="form-group">
                                    <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
</label>
                                    <input class="form-control" name="zip" <?php if ($_smarty_tpl->tpl_vars['employee']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['employee']->value->zip;?>
" <?php }?>>
                                </div>
                            </div>
                        </div>

                        <div class="form-group h5">
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


                    </div>
                </div>

            </div>













        </div>





    </div>
    <div class="row">

        <div class="col-md-6">

            <button class="btn btn-primary" id="btnSubmit" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>




        </div>


        </form>
        <div class="col-md-6">


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


        </div>

    </div>


<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_213927666060db14034ccf46_04647386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_213927666060db14034ccf46_04647386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/flatpickr"><?php echo '</script'; ?>
>


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

            $("#designation").select2();
            $("#department").select2();
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
a-hrm/app/save", $('#mainForm').serialize() ).done(function() {
                    window.location = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/list';
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
