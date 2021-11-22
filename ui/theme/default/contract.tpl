{extends file="$layouts_admin"}
{block name="content"}

    <div class="mx-auto" style="max-width: 800px; width: 100%;">


        <div class="row">
            <div class="col-md-12">
                <div class="panel" id="clx_form_box">
                    <div class="panel-hdr">
                        {if $contract}
                            <h2><span class="h5">{$contract->name}</span></h2>
                        {else}
                            <h2>{{__('Contract')}}</h2>
                        {/if}
                    </div>
                    <div class="panel-container">
                        <div class="panel-content">
                            <form method="post" id="mainForm" action="{$_url}contracts/contract-save">


                                <div class="form-group">
                                    <label for="inputTitle">{$_L['Title']}</label>
                                    <input class="form-control" name="title" required id="inputTitle" data-pristine-required data-pristine-required-message="{$_L['This field is required']}" {if $contract}value="{$contract->title}"{/if} >
                                </div>



                                <div class="form-row mb-3">

                                    {if has_access($user->roleid,'contracts','all_data')}

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="admin_id">{$_L['Owner']}</label>
                                                <select class="form-control" data-pristine-required data-pristine-required-message="{$_L['This field is required']}" id="owner_id" name="owner_id">
                                                    <option value="0">{$_L['None']}</option>
                                                    {foreach $staffs as $staff}
                                                        <option value="{$staff->id}"
                                                                {if $contract}
                                                                    {if !empty($contract->owner_id) && ($staff->id == $contract->owner_id)}
                                                                        selected

                                                                    {/if}
                                                                {else}
                                                                    {if $user->id == $staff->id}
                                                                        selected
                                                                    {/if}
                                                                {/if}
                                                        >{$staff->fullname}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>

                                    {/if}

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="contact_id">{$_L['Customer']}</label>
                                            <select class="form-control" data-pristine-required data-pristine-required-message="{$_L['This field is required']}" id="contact_id" name="contact_id">
                                                <option value="0">{$_L['None']}</option>
                                                {foreach $contacts as $contact}
                                                    <option value="{$contact->id}"
                                                            {if !empty($contract->contact_id) && ($contact->id == $contract->contact_id)}
                                                                selected

                                                            {/if}
                                                    >{$contact->account}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                {$_L['Start Date']}
                                            </label>
                                            <input type="text" class="form-control"  value="{date('Y-m-d')}" name="start_date" id="start_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" data-pristine-required data-pristine-required-message="{$_L['This field is required']}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{__('Expiration Date')}</label>
                                            <input type="text" class="form-control"  value="{date('Y-m-d',strtotime('+1 year'))}" name="expiration_date" id="expiration_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" data-pristine-required data-pristine-required-message="{$_L['This field is required']}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="type">{$_L['Type']}</label>
                                            <select class="form-control" name="type" id="type">
                                                {foreach $contract_types as $key => $value}
                                                    <option value="{{$key}}">{{$value}}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    </div>

                                </div>


                                <div class="form-row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="currency">{$_L['Currency']}</label>
                                            <select id="currency" name="currency" class="form-control">

                                                {foreach $currencies as $currency}
                                                    <option value="{$currency['iso_code']}" {if $config['home_currency'] eq $currency['iso_code']}selected{/if}
                                                            {if isset($currencies_all[$currency['iso_code']])}
                                                        data-a-sign="{$currencies_all[$currency['iso_code']]['symbol']}" data-a-sep="{$currencies_all[$currency['iso_code']]['thousands_separator']}" data-a-dec="{$currencies_all[$currency['iso_code']]['decimal_mark']}" {if ($currencies_all[$currency['iso_code']]['symbol_first'] == true)} data-p-sign="p" {else} data-p-sign="s" {/if}
                                                            {/if}>{$currency['iso_code']}</option>
                                                {/foreach}


                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{$_L['Amount']}</label>
                                            <input class="form-control" name="amount" id="amount" data-pristine-required data-pristine-required-message="{$_L['This field is required']}"
                                            {if $contract}
                                                value="{numberFormatUsingCurrency($contract->amount,$contract->currency)}"
                                            {/if}
                                            >
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="content">{$_L['Description']}</label>
                                    <textarea id="content" class="form-control" name="description" rows="10">{if $contract}{$contract->description}{/if}</textarea>
                                </div>





                                <div class="form-group">

                                    {if $contract}
                                        <input type="hidden" name="id" value="{$contract->id}">
                                    {else}
                                        <input type="hidden" name="id" value="">
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






{/block}


{block name="script"}



    <script>


        $(function () {

            var form = document.getElementById("mainForm");
            var pristine = new Pristine(form);

            $('#content').redactor(
                {
                    minHeight: 200, // pixels
                    plugins: ['fontcolor']
                }
            );

            $("#contact_id").select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );



            $('[data-toggle="datepicker"]').datepicker();

            $("#mainForm").submit(function (e) {

                e.preventDefault();

                if(pristine.validate())
                {
                    $('#clx_form_box').block({ message:block_msg });

                    $.post('{$_url}contracts/contract', $( "#mainForm" ).serialize())
                        .done(function (data) {
                            window.location = '{$_url}contracts';
                        }).fail(function(error) {
                        $('#clx_form_box').unblock();
                        $.each(error.response.data, function(key, value) {
                            toastr.error(value);
                        });
                    });
                }

            });



        });

    </script>
{/block}
