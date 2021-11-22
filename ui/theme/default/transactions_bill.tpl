{extends file="$layouts_admin"}
{block name="head"}

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

    </style>


{/block}




{block name="content"}

    <div id="panel-12" class="panel">
        <div class="panel-hdr">
            <h2>
                {$_L['Bills']} <span class="fw-300"><i></i></span>
            </h2>
            <div class="panel-toolbar">
                <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
            </div>
        </div>
        <div class="panel-container show">
            <div class="panel-content">
                <div class="row">
                    <div class="col-auto svg-icon svg-icon-primary">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link"   href="{$_url}transactions/bills" aria-controls="v-pills-home" aria-selected="true">
{*                                <i class="fal fa-home"></i>*}
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000"/>
                                    </g>
                                </svg>
                                <span class="hidden-sm-down ml-1">{$_L['Summary']}</span>
                            </a>
                            <a class="nav-link"   href="{$_url}transactions/bills-all"aria-controls="v-pills-profile" aria-selected="false">
{*                                <i class="fal fa-table"></i>*}
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"/>
                                    </g>
                                </svg>
                                <span class="hidden-sm-down ml-1"> {$_L['All']}</span>
                            </a>


                            <a class="nav-link active"  href="{$_url}transactions/bill/" aria-controls="v-pills-messages" aria-selected="false">
{*                                <i class="fal fa-plus"></i>*}
                               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/>
                                    </g>
                                </svg>

                                <span class="hidden-sm-down ml-1"> {$_L['Add a bill']}</span>
                            </a>



                        </div>
                    </div>
                    <div class="col">
                        <div class="tab-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger" id="emsg" style="display: none;">
                                        <span id="emsgbody"></span>
                                    </div>
                                    <form method="post" id="mainForm" action="{$_url}transactions/bill-save">
                                        <div class="form-group">
                                            <label for="inputTitle"><span class="h6">{$_L['Title']}<span></label>
                                            <input class="form-control" name="title" required id="inputTitle" data-pristine-required-message="{$_L['This field is required']}" {if $bill} value="{$bill->title}" {/if}>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="inputNextDate"><span class="h6">{$_L['Next Due Date']}</span></label>
                                                    <input class="form-control" datepicker
                                                           data-date-format="yyyy-mm-dd" data-auto-close="true" required name="next_date" id="inputNextDate" data-pristine-required-message="{$_L['This field is required']}" {if $bill} value="{$bill->next_date}" {/if}>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="inputRecurringType"><span class="h6">{$_L['Repeat Every']}</span></label>
                                                    <select class="form-control" required name="recurring_type" id="inputRecurringType" data-pristine-required-message="{$_L['This field is required']}">
                                                        <option value="Monthly" {if $bill && $bill->recurring_type == 'Monthly'} selected  {/if}>{$_L['Monthly']}</option>
                                                        <option value="Yearly" {if $bill && $bill->recurring_type == 'Yearly'} selected  {/if}>{$_L['Yearly']}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="currency"><span class="h6">{$_L['Currency']}</span></label>
                                                    <select class="form-control" required name="currency" id="currency" data-pristine-required-message="{$_L['This field is required']}">
                                                        {foreach $currencies as $currency}
                                                            <option value="{$currency['iso_code']}" {if $config['home_currency'] eq $currency['iso_code']}selected{/if}
                                                                    {if isset($currencies_all[$currency['iso_code']])}
                                                                        data-a-sign="{$currencies_all[$currency['iso_code']]['symbol']}" data-a-sep="{$currencies_all[$currency['iso_code']]['thousands_separator']}" data-a-dec="{$currencies_all[$currency['iso_code']]['decimal_mark']}" {if ($currencies_all[$currency['iso_code']]['symbol_first'] == true)} data-p-sign="p" {else} data-p-sign="s" {/if}
                                                                    {/if} {if $bill && $bill->currency == $currency['iso_code']} selected  {/if}>{$currency['iso_code']}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="amount"><span class="h6">{$_L['Amount']}</label>
                                                    <input class="form-control" required name="amount" id="amount" data-pristine-required-message="{$_L['This field is required']}"  {if $bill} value="{$bill->net_amount}" {/if}>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><span class="h6">{$_L['From Account']}</span></label>
                                                    <select class="form-control" name="from_account_id">
                                                        <option value="">{$_L['None']}</option>
                                                        {foreach $accounts as $account}
                                                            <option value="{$account->id}" {if $bill && $bill->from_account_id == $account->id} selected  {/if}>{$account->account}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label><span class="h6">{$_L['Payee']}</span></label>
                                                    <select class="form-control" name="contact_id" id="contact_id">
                                                        <option value="">{$_L['None']}</option>
                                                        {foreach $contacts as $contact}
                                                            <option value="{$contact->id}" {if $bill && $bill->contact_id == $contact->id} selected  {/if}>{$contact->account}</option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mt-3">
                                            <label><span class="h6">{$_L['Category']}</span></label>
                                            <select class="form-control" name="category_id" id="category_id">
                                                {foreach $categories as $category}
                                                    <option value="{$category->id}" {if $bill && $bill->category_id == $category->id} selected  {/if}>{$category->name}</option>
                                                {/foreach}
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="website"><span class="h6">{$_L['Website']}</span></label>
                                            <input class="form-control" name="website" id="website" {if $bill} value="{$bill->website}" {/if}>
                                        </div>


                                        <div class="form-group">

                                            {if $bill}
                                                <input type="hidden" name="bill_id" value="{$bill->id}">
                                            {else}
                                                <input type="hidden" name="bill_id" value="">
                                            {/if}

                                            <button type="submit" class="btn btn-primary">{$_L['Save']}</button>
                                        </div>

                                    </form>


                                </div>








                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







{/block}


{block name="script"}


    <script>


        $(function () {

            var form = document.getElementById("mainForm");
            var pristine = new Pristine(form);

            var $currency = $('#currency');
            var $amount = $("#amount");


            function clxAmountSingleFieldAutoNumeric(amountId) {
                $(amountId).autoNumeric('destroy');
                $(amountId).autoNumeric('init', {
                    aSign: $currency.find(':selected').data('a-sign'),
                    dGroup: {$config['thousand_separator_placement']},
                    aPad: {$config['currency_decimal_digits']},
                    pSign: $currency.find(':selected').data('p-sign'),
                    aDec: $currency.find(':selected').data('a-dec'),
                    aSep: $currency.find(':selected').data('a-sep'),
                    vMax: '9999999999999999.00',
                    vMin: '-9999999999999999.00'

                });
            }

            $currency.on('change',function (event) {
                clxAmountSingleFieldAutoNumeric('#amount');
            });



            clxAmountSingleFieldAutoNumeric('#amount');

            function ib_autonumeric() {
                $('.amount').autoNumeric('init', {
                    vMax: '9999999999999999.00',
                    vMin: '-9999999999999999.00'

                });

            }


            ib_autonumeric();

            $('#contact_id').select2({

            });

            $('#category_id').select2({

            });

            $("#mainForm").submit(function (e) {

                e.preventDefault();

                if(pristine.validate())
                {
                    $('#clx_form_box').block({ message:block_msg });

                    $.post('{$_url}transactions/bill-save', $( "#mainForm" ).serialize())
                        .done(function (data) {
                            if ($.isNumeric(data)) {

                                window.location = '{$_url}transactions/bills/';
                            }
                            else {
                                $('#clx_form_box').unblock();
                                var body = $("html, body");
                                body.animate({ scrollTop:0 }, '1000', 'swing');
                                $("#emsgbody").html(data);
                                $("#emsg").show("slow");
                            }
                        });
                }

            });

        });

    </script>
{/block}
