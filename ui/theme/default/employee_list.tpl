{extends file="$layouts_admin"}

{block name="head"}
    <style>
        .contact-box {
            {if $config['nstyle'] == 'dark_mode'}
            background-color: rgba(255,255,255,.05);
            border: 1px solid #394156;
        {else}
            background-color: #ffffff;
            border: 1px solid #e7eaec;
        {/if}
            padding: 20px;
            margin-bottom: 20px;
        }

        .contact-box > a {
            color: inherit;
        }




        .avatar-xl {
            height: 6rem;
            width: 6rem;

        }



        .user-stacked{
            margin: 3px 1px 1px -11px;
            border: 2px solid #fff;
            border-radius: 50%;
        }

        .user-stacked .profile-image{
            width: 40px;
            height: 40px;
        }

        .arrow-none.dropdown-toggle:after {
            content: none!important;
        }



    </style>
{/block}
{block name="content"}

    <div class="subheader">
        <h1 class="subheader-title">
         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24"/>
                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                </g>
            </svg> {$_L['Employees']} <span class='fw-300'></span>
        </h1>
        <div class="subheader-block d-lg-flex align-items-center">
            <a href="{$_url}hrm/employee" class="btn btn-primary">{$_L['Add an employee']}</a>
        </div>

    </div>
    <div class="row">


        {foreach $employees as $employee}
            <div class="col-lg-4">
                <div class="panel">
                    <div class="panel-container">
                        <div class="panel-content">
                            <div class="text-center" href="{$_url}hrm/employee/{$employee->id}">

                                {if $employee->image}
                                    <img alt="image" class="rounded-circle m-t-xs img-fluid avatar-xl mb-4" src="{$app_url}storage/employees/{$employee->image}">
                                {else}
                                    <img alt="image" class="rounded-circle m-t-xs img-fluid avatar-xl mb-4" src="{$app_url}storage/employees/employee_default.png">
                                {/if}


                                <h3><strong>{$employee->name}</strong></h3>
                                <div class="m-t-xs text-muted">
                                    {$employee->job_title}
                                </div>
                                <div class="mt-4 text-center demo mb-4">

                                    {if $employee->facebook}
                                        <a href="{$employee->facebook}" target="_blank" class="fs-xl" style="color:#3b5998">
                                            <svg height="48px" id="Layer_1" style="enable-background:new 0 0 67 67;" version="1.1" viewBox="0 0 67 67" width="67px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M29.765,50.32h6.744V33.998h4.499l0.596-5.624h-5.095  l0.007-2.816c0-1.466,0.14-2.253,2.244-2.253h2.812V17.68h-4.5c-5.405,0-7.307,2.729-7.307,7.317v3.377h-3.369v5.625h3.369V50.32z   M34,64C17.432,64,4,50.568,4,34C4,17.431,17.432,4,34,4s30,13.431,30,30C64,50.568,50.568,64,34,64z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#3A589B;"/></svg>
                                        </a>
                                    {/if}

                                    {if $employee->twitter}
                                        <a href="{$employee->twitter}" target="_blank" class="fs-xl" style="color:#38A1F3">
                                            <svg height="48px" id="Layer_1" style="enable-background:new 0 0 67 67;" version="1.1" viewBox="0 0 67 67" width="67px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M38.167,22.283c-2.619,0.953-4.274,3.411-4.086,6.101  l0.063,1.038l-1.048-0.127c-3.813-0.487-7.145-2.139-9.974-4.915l-1.383-1.377l-0.356,1.017c-0.754,2.267-0.272,4.661,1.299,6.271  c0.838,0.89,0.649,1.017-0.796,0.487c-0.503-0.169-0.943-0.296-0.985-0.233c-0.146,0.149,0.356,2.076,0.754,2.839  c0.545,1.06,1.655,2.097,2.871,2.712l1.027,0.487l-1.215,0.021c-1.173,0-1.215,0.021-1.089,0.467  c0.419,1.377,2.074,2.839,3.918,3.475l1.299,0.444l-1.131,0.678c-1.676,0.976-3.646,1.526-5.616,1.567  C20.775,43.256,20,43.341,20,43.405c0,0.211,2.557,1.397,4.044,1.864c4.463,1.377,9.765,0.783,13.746-1.568  c2.829-1.674,5.657-5,6.978-8.221c0.713-1.715,1.425-4.851,1.425-6.354c0-0.975,0.063-1.102,1.236-2.267  c0.692-0.678,1.341-1.419,1.467-1.631c0.21-0.403,0.188-0.403-0.88-0.043c-1.781,0.636-2.033,0.551-1.152-0.402  c0.649-0.678,1.425-1.907,1.425-2.267c0-0.063-0.314,0.042-0.671,0.233c-0.377,0.212-1.215,0.53-1.844,0.72l-1.131,0.361l-1.027-0.7  c-0.566-0.381-1.361-0.805-1.781-0.932C40.766,21.902,39.131,21.944,38.167,22.283z M34,64C17.432,64,4,50.568,4,34  C4,17.431,17.432,4,34,4s30,13.431,30,30C64,50.568,50.568,64,34,64z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#598DCA;"/></svg>
                                        </a>
                                    {/if}

                                    {if $employee->linkedin}
                                        <a href="{$employee->linkedin}" target="_blank" class="fs-xl" style="color:#0077B5">
                                            <svg height="48px" id="Layer_1" style="enable-background:new 0 0 67 67;" version="1.1" viewBox="0 0 67 67" width="67px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M49.837,48.137V36.425c0-6.275-3.35-9.195-7.816-9.195  c-3.604,0-5.219,1.983-6.119,3.374V27.71h-6.79c0.09,1.917,0,20.427,0,20.427h6.79V36.729c0-0.609,0.044-1.219,0.224-1.655  c0.49-1.22,1.607-2.483,3.482-2.483c2.458,0,3.44,1.873,3.44,4.618v10.929H49.837z M21.959,24.922c2.367,0,3.842-1.57,3.842-3.531  c-0.044-2.003-1.475-3.528-3.797-3.528s-3.841,1.524-3.841,3.528c0,1.961,1.474,3.531,3.753,3.531H21.959z M33,64  C16.432,64,3,50.568,3,34C3,17.431,16.432,4,33,4s30,13.431,30,30C63,50.568,49.568,64,33,64z M25.354,48.137V27.71h-6.789v20.427  H25.354z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#D8D9D8;"/></svg>
                                        </a>

                                    {/if}



                                </div>

                                <p><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M11.575,21.2 C6.175,21.2 2.85,17.4 2.85,12.575 C2.85,6.875 7.375,3.05 12.525,3.05 C17.45,3.05 21.125,6.075 21.125,10.85 C21.125,15.2 18.825,16.925 16.525,16.925 C15.4,16.925 14.475,16.4 14.075,15.65 C13.3,16.4 12.125,16.875 11,16.875 C8.25,16.875 6.85,14.925 6.85,12.575 C6.85,9.55 9.05,7.1 12.275,7.1 C13.2,7.1 13.95,7.35 14.525,7.775 L14.625,7.35 L17,7.35 L15.825,12.85 C15.6,13.95 15.85,14.825 16.925,14.825 C18.25,14.825 19.025,13.725 19.025,10.8 C19.025,6.9 15.95,5.075 12.5,5.075 C8.625,5.075 5.05,7.75 5.05,12.575 C5.05,16.525 7.575,19.1 11.575,19.1 C13.075,19.1 14.625,18.775 15.975,18.075 L16.8,20.1 C15.25,20.8 13.2,21.2 11.575,21.2 Z M11.4,14.525 C12.05,14.525 12.7,14.35 13.225,13.825 L14.025,10.125 C13.575,9.65 12.925,9.425 12.3,9.425 C10.65,9.425 9.45,10.7 9.45,12.375 C9.45,13.675 10.075,14.525 11.4,14.525 Z" fill="#000000"/>
                                        </g>
                                    </svg> {$employee->email}</p>
                                <address>
                                    <strong>
                                        {if $employee->pay_frequency == 'Monthly'}
                                            {$_L['Monthly']}
                                        {elseif $employee->pay_frequency == 'Hourly'}
                                            {$_L['Hourly']}
                                        {else}
                                            {$employee->pay_frequency}
                                        {/if}
                                        | <span class="amount text-success">{$employee->amount}</span> </strong><br>
                                    <strong>{$_L['Date Joined']}: </strong> <span class="text-warning">{date( $config['df'], strtotime($employee->date_hired))}</span><br>
                                    <div class="hr-line-dashed"></div>
                                    {if $employee->address_line_1 != ''}{$employee->address_line_1} <br> {/if} {if $employee->city != ''}{$employee->city} <br>
                                    {/if} {if $employee->state != ''}{$employee->state}{/if} {if $employee->zip != ''}{$employee->zip}{/if} <br>

                                    {if $employee->phone != ''}
                                        <abbr title="Phone">P:</abbr> {$employee->phone}
                                    {/if}


                                </address>

                                <div>
                                    <a href="{$_url}hrm/employee/{$employee->id}" class="btn btn-warning">{$_L['View']}</a>
                                </div>


                            </div>

                        </div>
                    </div>

                </div>
            </div>



            {foreachelse}

            <p>No data to display</p>
        {/foreach}



    </div>





{/block}

{block name=script}

    <script type="text/javascript" src="{$app_url}ui/lib/numeric.js"></script>

    <script>

        $(function () {

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
        })

    </script>


{/block}
