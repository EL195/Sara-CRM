{extends file="$layouts_admin"}

{block name="content"}

    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-body">
                    <div class="panel-hdr">
                        <h2>{$_L['Add an employee']}</h2>
                    </div>

                 <div class="panel-container">
                     <div class="panel-content">
                         <form method="post" id="mainForm">
                             <div class="form-group">
                                 <label for="inputName">{$_L['Name']}</label>
                                 <input class="form-control" id="inputName" name="name" {if $employee} value="{$employee->name}" {/if}>
                             </div>


                             <div class="form-group">
                                 <label>{$_L['Email']}</label>
                                 <input class="form-control" type="email" name="email" {if $employee} value="{$employee->email}" {/if}>
                             </div>

                             <div class="form-group">
                                 <label>{$_L['Phone']}</label>
                                 <input class="form-control" type="text" name="phone" {if $employee} value="{$employee->phone}" {/if}>
                             </div>


                             <div class="form-group">
                                 <label>{$_L['Department']}</label>
                                 <select class="custom-select" name="department_id">
                                     <option value="">--</option>
                                     {foreach $departments as $department}

                                     {/foreach}
                                 </select>
                             </div>


                             <div class="form-group">
                                 <label>{$_L['Job title']}</label>
                                 <input class="form-control" name="job_title" {if $employee} value="{$employee->job_title}" {/if}>
                             </div>

                             <div class="form-group">
                                 <label>{$_L['Address']}</label>
                                 <input class="form-control" name="address" {if $employee} value="{$employee->address_line_1}" {/if}>
                             </div>

                             <div class="form-group">
                                 <label>{$_L['City']}</label>
                                 <input class="form-control" name="city" {if $employee} value="{$employee->city}" {/if}>
                             </div>

                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label>{$_L['State Region']}</label>
                                         <input class="form-control" name="state" {if $employee} value="{$employee->state}" {/if}>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label>{$_L['ZIP Postal Code']}</label>
                                         <input class="form-control" name="zip" {if $employee} value="{$employee->zip}" {/if}>
                                     </div>
                                 </div>
                             </div>

                             <div class="form-group">
                                 <label>{$_L['Country']}</label>
                                 <select class="form-control" name="country">
                                     {if $employee}
                                         {Countries::all($employee->country)}
                                     {else}
                                         {Countries::all($config['country'])}
                                     {/if}
                                 </select>
                             </div>

                             <div class="form-group">
                                 <label>{$_L['Date Joined']}</label>
                                 <input class="form-control" name="date_hired" datepicker
                                        data-date-format="yyyy-mm-dd" data-auto-close="true"  {if $employee} value="{$employee->date_hired}" {else} value="{date('Y-m-d')}" {/if}>
                             </div>

                             <div class="form-group">
                                 <label>{$_L['Pay frequency']}</label>
                                 <select class="form-control" name="pay_frequency">
                                     <option value="Monthly" {if $employee && $employee->pay_frequency == 'Monthly'} selected{/if}>{$_L['Monthly']}</option>
                                     <option value="Hourly" {if $employee && $employee->pay_frequency == 'Hourly'} selected{/if}>{$_L['Hourly']}</option>
                                 </select>
                             </div>


                             <div class="form-group">
                                 <label>{$_L['Amount']}</label>
                                 <input class="form-control amount" name="amount" {if $employee} value="{$employee->amount}" {/if}>
                             </div>


                             <div class="form-group">
                                 <label>{$_L['Summary']}</label>
                                 <textarea class="form-control" rows="10" name="summary">{if $employee}{$employee->summary}{/if}</textarea>
                             </div>

                             <div class="form-group">
                                 <label>{$_L['Facebook Profile']}</label>
                                 <input class="form-control" type="text" name="facebook" {if $employee} value="{$employee->facebook}" {/if}>
                             </div>

                             <div class="form-group">
                                 <label>{$_L['Linkedin Profile']}</label>
                                 <input class="form-control" type="text" name="linkedin" {if $employee} value="{$employee->linkedin}" {/if}>
                             </div>

                             <div class="form-group">
                                 <label>{$_L['Twitter']}</label>
                                 <input class="form-control" type="text" name="twitter" {if $employee} value="{$employee->linkedin}" {/if}>
                             </div>

                             <div class="form-group">
                                 {if $employee}
                                     <input type="hidden" name="employee_id" value="{$employee->id}">
                                     <input type="hidden" name="file_link" id="file_link" value="{$employee->image}">
                                 {else}
                                     <input type="hidden" name="file_link" id="file_link" value="">
                                 {/if}

                                 <button class="btn btn-primary" id="btnSubmit" type="submit">{$_L['Save']}</button>
                             </div>
                         </form>
                     </div>
                 </div>




                </div>
            </div>
        </div>


            <div class="col-md-6">

                {if $employee}
                <div class="panel">
                    <div class="panel-hdr">
                        <h2>{$_L['Delete']}</h2>
                        <div class="panel-toolbar">
                            <a href="javascript:;" onclick="confirmThenGoToUrl(event,'delete/employee/{$employee->id}');" class="btn btn-danger">Delete</a>
                        </div>
                    </div>

                </div>
                {/if}

                <div class="panel">
                    <div class="panel-container">
                        <div class="panel-content">
                            <div class="panel-body" id="ibox_form">

                                <h3>{$_L['Image']}</h3>

                                <div class="hr-line-dashed"></div>

                                <form action="" class="dropzone" id="upload_container">

                                    <div class="dz-message">
                                        <h3> <i class="fal fa-cloud-upload"></i>  {$_L['Drop File Here']}</h3>
                                        <br />
                                        <span class="note">{$_L['Click to Upload']}</span>
                                    </div>

                                </form>

                                <div class="hr-line-dashed"></div>

                                {*<a href="#" class="btn btn-danger">Remove image</a>*}
                            </div>
                        </div>
                    </div>

                </div>


                {if isset($config['employee_proficiencies']) && $config['employee_proficiencies'] == 1}

                    <div class="panel">
                        <div class="panel-body">
                            <h3>{$_L['Proficiencies']}</h3>
                            <div class="hr-line-dashed"></div>

                            {foreach $departments as $department}

                                <div class="checkbox" style="margin-bottom: 20px;">
                                    <div class="i-checks"><label> <input name="sales_edit" class="ib_checkbox" type="checkbox" value="yes"> <span style="margin-left: 15px;">{$department->dname}</span></label></div>
                                </div>

                            {/foreach}


                        </div>
                    </div>

                {/if}


            </div>





    </div>

{/block}

{block name=script}




    <script>

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

                aSign: '{$config['currency_code']} ',
                dGroup: {$config['thousand_separator_placement']},
                aPad: {$config['currency_decimal_digits']},
                pSign: '{$config['currency_symbol_position']}',
                aDec: '{$config['dec_point']}',
                aSep: '{$config['thousands_sep']}',
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

                    toastr.success('{$_L['Uploaded Successfully']}');
                    $file_link.val(upload_resp.file);


                }
                else{
                    toastr.error(upload_resp.msg);
                }


            });




            btn_submit.click(function (e) {
                e.preventDefault();

                $.post( "{$_url}hrm/employee-post", $('#mainForm').serialize() ).done(function() {
                    window.location = '{$_url}hrm/employees';
                }).fail(function(data) {
                    toastr.error(data.responseText);
                });
            });
        })

    </script>


{/block}
