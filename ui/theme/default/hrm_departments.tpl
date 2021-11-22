{extends file="$layouts_admin"}

{block name="content"}

    <div class="row mb-3">



        <div class="col-md-12">



            <div class="card">
                <div class="card-body">

                    <a href="{$_url}a-hrm/app/add-department" class="btn btn-primary add_event waves-effect waves-light">Add Department</a>

                </div>

            </div>
        </div>



    </div>

    <div class="row">



        <div class="col-md-12">



            <div class="card">

                <div class="card-body">



                    <div class="table-responsive">
                        <table class="table table-striped table-light">
                            <thead>
                            <tr>
                                <th class="bold h6 text-muted">Name</th>
                                <th class="bold h6 text-muted">Total Employees</th>
                                <th class="bold h6 text-muted"></th>

                                <th class="text-right text-muted bold">{$_L['Manage']}</th>
                            </tr>
                            </thead>
                            <tbody>


                            {foreach $departments as $department}

                                <tr>
                                    <td class="h6">
                                        {$department->title}


                                    </td>
                                    <td>

                                        {if !empty($employees[$department->id])}
                                            {count($employees[$department->id])}
                                        {/if}
                                    </td>
                                    <td>



                                        {if !empty($employees[$department->id])}
                                            <div class="fs-sm d-flex align-items-center flex-row-reverse">

                                                {foreach $employees[$department->id] as $employee}

                                                    <a href="#" class="btn-m-s">
                                                        {if $employee->image}
                                                            <img alt="image" class="profile-image-sm rounded-circle" src="{$app_url}storage/employees/{$employee->image}">
                                                        {else}

                                                            <span class="clx-avatar">{$employee['name'][0]}{$employee['name'][1]}</span>

                                                        {/if}

                                                    </a>

                                                {/foreach}




                                            </div>
                                        {/if}

                                    </td>


                                    <td class="text-right">
                                        <a href="{$_url}a-hrm/app/edit-department/{$department->id}" class="btn btn-info">Edit</a>

                                        <a href="#" onclick="confirmThenGoToUrl(event,'a-hrm/app/delete-department/{$department->id}')" class="btn btn-danger">Delete</a>
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




{/block}







