{extends file="$layouts_admin"}
{block name="content"}



    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>{$_L['Attendance']}</h2>
                    <div class="panel-toolbar">
                        <div class="form-group">
                            <input class="form-control" id="inputDate" style="min-width: 200px;" name="date"
                                   data-date-format="yyyy-mm-dd" data-auto-close="true"  value="{$date}">
                        </div>
                    </div>
                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <h3>{$_L['Mark Attendance']}</h3>
                        <p>{date( $config['df'], strtotime($date))}</p>
                        <div class="hr-line-dashed"></div>

                        <div class="col-md-12">


                            <table class="table table-bordered table-hover sys_table footable" data-filter="#foo_filter" data-page-size="50">
                                <thead>
                                <tr>
                                    <th width="200px;">{$_L['Name']}</th>
                                    <th width="100px;">{$_L['Status']}</th>
                                    <th>{$_L['Note']}</th>
                                </tr>
                                </thead>
                                <tbody>

                                {foreach $employees as $employee}
                                    <tr>
                                        <td>{$employee->name} </td>
                                        <td>

                                            <label class="switch s-icons s-outline s-outline-primary">
                                                <input type="checkbox" id="attendance_{$employee->id}" class="attendance_checkbox"
                                                {if isset($attendances[$employee->id]) && $attendances[$employee->id]->is_present}
                                                    checked
                                                {/if}
                                                >
                                                <span class="slider round"></span>
                                            </label>

                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input class="form-control attendance_note" id="attendance_note_{$employee->id}" {if isset($attendances[$employee->id])}
                                                value="{$attendances[$employee->id]->note}"
                                                        {/if}>
                                            </div>
                                        </td>
                                    </tr>
                                {/foreach}

                                </tbody>


                            </table>

                        </div>

                    </div>






                </div>
            </div>
        </div>
    </div>



{/block}

{block name=script}
    <script>
        $(function () {

            var $inputDate = $('#inputDate');

            $inputDate.datepicker();

            $inputDate.on('change',function () {
                window.location = '{$_url}hrm/attendance/' + $inputDate.val()
            });

            $('.attendance_checkbox').on('change', function() {
                let employee_id = this.id;
                let present;
                if(this.checked){
                    present = 'yes';
                }
                else{
                    present = 'no';
                }

                $.post( base_url + "hrm/set-attendance", { employee_id: employee_id, present: present, date: $inputDate.val() })
                    .done(function( data ) {
                        toastr.success('{$_L['Updated']}');
                    });
            });


            $('.attendance_note').on('change', function() {
                let employee_id = this.id;
                let note = $(this).val();

                $.post( base_url + "hrm/set-attendance-note", { employee_id: employee_id, note: note, date: $inputDate.val() })
                    .done(function( data ) {
                        toastr.success('{$_L['Updated']}');
                    });
            });


        })
    </script>


{/block}
