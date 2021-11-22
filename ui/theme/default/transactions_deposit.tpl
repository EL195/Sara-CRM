{extends file="$layouts_admin"}

{block name="head"}

    {if empty($config['admin_dark_theme'])}
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
    {/if}


{/block}




{block name="content"}

    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>{$_L['Add Deposit']}</h2>

                </div>
                <div class="panel-container" id="ibox_form">

                    <div class="panel-content">

                        <div class="alert alert-danger" id="emsg">
                            <span id="emsgbody"></span>
                        </div>

                        <form class="form-horizontal" method="post" id="tform" role="form">

                            <div class="form-group">
                                <label for="account"><span class="h6">{$_L['Account']}</span></label>
                                <select id="account" name="account" class="form-control">
                                    <option value="">{$_L['Choose an Account']}</option>
                                    {foreach $d as $ds}
                                        <option value="{$ds['id']}">{$ds['account']}</option>
                                    {/foreach}


                                </select>
                            </div>

                            <div class="form-group">
                                <label for="code"><span class="h6">{$_L['Code']}</span></label>
                                <input type="text" class="form-control" id="code" name="code" value="{predict_next_serial($config,'income')}">
                            </div>

                            <div class="form-group">
                                <label for="date"><span class="h6">{$_L['Date']}</span></label>
                                <input type="text" class="form-control"  value="{$mdate}" name="date" id="date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                            </div>

                            <div class="form-group">
                                <label for="description"><span class="h6">{$_L['Description']}</span></label>
                                <input type="text" class="form-control" id="description" name="description">
                                <div class="help-block"><a data-toggle="modal" href="#modal_add_item"><i class="fal fa-paperclip"></i><span class="h6">{$_L['Attach File']}</span> </a> </div>
                            </div>


                            <div class="form-group">
                                <label for="currency"><span class="h6">{$_L['Currency']}</span></label>
                                <select id="currency" name="currency" class="form-control">

                                    {foreach $currencies as $currency}
                                        <option value="{$currency['iso_code']}" {if $config['home_currency'] eq $currency['iso_code']}selected{/if}
                                                {if isset($currencies_all[$currency['iso_code']])}
                                            data-a-sign="{$currencies_all[$currency['iso_code']]['symbol']}" data-a-sep="{$currencies_all[$currency['iso_code']]['thousands_separator']}" data-a-dec="{$currencies_all[$currency['iso_code']]['decimal_mark']}" {if ($currencies_all[$currency['iso_code']]['symbol_first'] == true)} data-p-sign="p" {else} data-p-sign="s" {/if}
                                                {/if}>{$currency['iso_code']}</option>
                                    {/foreach}


                                </select>
                            </div>


                            <div class="form-group">
                                <label  for="amount"><span class="h6">{$_L['Amount']}</span></label>
                                <input type="text" class="form-control" id="amount" name="amount">
                            </div>




                            <div class="form-horizontal" >
                                <div class="form-group">
                                    <label for="cats"><span class="h6">{$_L['Category']}</span></label>
                                    <select id="cats" name="cats" class="form-control">
                                        <option value="Uncategorized">{$_L['Uncategorized']}</option>

                                        {foreach $cats as $cat}
                                            <option value="{$cat['name']}">{$cat['name']}</option>
                                        {/foreach}


                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tags"><span class="h6">{$_L['Tags']}</span></label>
                                    <select name="tags[]" id="tags"  class="form-control" multiple="multiple">
                                        {foreach $tags as $tag}
                                            <option value="{$tag['text']}">{$tag['text']}</option>
                                        {/foreach}

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="company"><span class="h6">{$_L['Company']}</span></label>
                                    <select id="company" name="company" class="form-control">
                                        <option value="">{$_L['None']}</option>
                                        {foreach $companies as $company}
                                            <option value="{$company->id}">{$company->company_name}</option>
                                        {/foreach}


                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="payer"><span class="h6">{$_L['Payer']}</span></label>
                                    <select id="payer" name="payer" class="form-control">
                                        <option value="">{$_L['Choose Contact']}</option>
                                        {foreach $p as $ps}
                                            <option value="{$ps['id']}">{$ps['account']}</option>
                                        {/foreach}


                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="staff_id"><span class="h6">{$_L['Staff']}</span></label>
                                    <select id="staff_id" name="staff_id" class="form-control">
                                        <option value="0">{$_L['None']}</option>
                                        {foreach $staffs as $staff}
                                            <option value="{$staff->id}">{$staff->fullname}</option>
                                        {/foreach}


                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="pmethod"><span class="h6">{$_L['Method']}</span></label>
                                    <select id="pmethod" name="pmethod" class="form-control">
                                        <option value="">{$_L['Select Payment Method']}</option>
                                        {foreach $pms as $pm}
                                            <option value="{$pm['name']}">{$pm['name']}</option>
                                        {/foreach}


                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="status"><span class="h6">{$_L['Status']}</span></label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="Cleared">{$_L['Cleared']}</option>
                                        <option value="Uncleared">{$_L['Uncleared']}</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="ref"><span class="h6">{$_L['Ref']}#</span></label>
                                    <input type="text" class="form-control" id="ref" name="ref">
                                    <span class="help-block">{$_L['ref_example']}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type="hidden" name="attachments" id="attachments" value="">

                                    <button type="submit" id="submit" class="btn btn-primary mt-3">{$_L['Submit']}</button>
                                </div>
                            </div>
                        </form>

                    </div>





                </div>
            </div>




        </div>

        {if has_access($user->roleid,'transactions','view')}

            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="panel">
                    <div class="panel-hdr">
                        <h2>{$_L['Recent Deposits']}</h2>

                    </div>

                    <div class="panel-container">
                        <div class="panel-content">

                            <table class="table table-bordered table-striped sys_table">
                                <thead {if empty($config['admin_dark_theme'])}
                                    style="background:#f0f2ff"
                                        {/if}>
                                <tr>
                                    <th class="h6">{$_L['Account']}</th>
                                    <th class="h6" width="50%">{$_L['Description']}</th>
                                    <th class="h6">{$_L['Amount']}</th>

                                </tr>
                                </thead>
                                <tbody>

                                {foreach $tr as $trs}
                                    <tr>

                                        <td class="h6">{$trs['account']}</td>

                                        <td class="h6 text-info"><a href="{$_url}transactions/manage/{$trs['id']}/">
                                                {if $trs['attachments'] neq ''}
                                                    <i class="fal fa-paperclip"></i>
                                                {/if}
                                                <span class="text-info"> {$trs['description']} </span>





                                            </a>
                                            {if $trs['code'] neq ''}
                                                <br>
                                                {$trs['code']}
                                            {/if}

                                            {if $trs['company_id'] neq '0' && isset($companies_by_ids[$trs['company_id']])}
                                                <br>
                                                {$companies_by_ids[$trs['company_id']]->company_name}
                                            {/if}

                                        </td>
                                        <td class="amount text-success h6"
                                                {if isset($currencies_all[$trs['currency_iso_code']])}
                                                    data-a-sign="{$currencies_all[$trs['currency_iso_code']]['symbol']}" data-a-sep="{$currencies_all[$trs['currency_iso_code']]['thousands_separator']}" data-a-dec="{$currencies_all[$trs['currency_iso_code']]['decimal_mark']}" {if ($currencies_all[$trs['currency_iso_code']]['symbol_first'] == true)} data-p-sign="p" {else} data-p-sign="s" {/if}
                                                {/if}
                                        >{$trs['amount']}</td>
                                    </tr>
                                {/foreach}

                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>

        {/if}



    </div>


    <input type="hidden" id="_lan_no_results_found" value="{$_L['No results found']}">


    <div class="modal fade" id="modal_add_item" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        {$_L['Attach File']}
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i>  {$_L['Drop File Here']}</h3>
                            <br />
                            <span class="note">{$_L['Click to Upload']}</span>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{$_L['Close']}</button>
                </div>
            </div>
        </div>
    </div>




{/block}

{block name="script"}


    <script>

        Dropzone.autoDiscover = false;

        jQuery(document).ready(function() {


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




            $('[data-toggle="datepicker"]').datepicker(

            );


            $("#account").select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );

            $("#company").select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );

            $("#cats").select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );
            $("#pmethod").select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );
            $("#payer").select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );

            $('#tags').select2({
                tags: true,
                tokenSeparators: [','],
                language: {
                    noResults: function () {
                        return $("#_lan_no_results_found").val();
                    }
                }
            });


            $("#emsg").hide();


            var _url = $("#_url").val();


            var upload_resp;

            var $ib_form_submit = $("#submit");


            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "transactions/handle_attachment/",
                    maxFiles: 1,
                    acceptedFiles: "image/*,application/pdf"
                }
            );


            ib_file.on("sending", function() {

                $ib_form_submit.prop('disabled', true);

            });

            ib_file.on("success", function(file,response) {

                $ib_form_submit.prop('disabled', false);

                upload_resp = response;

                if(upload_resp.success == 'Yes'){

                    toastr.success(upload_resp.msg);
                    // $file_link.val(upload_resp.file);
                    // files.push(upload_resp.file);
                    //
                    // console.log(files);

                    $('#attachments').val(function(i,val) {
                        return val + (!val ? '' : ',') + upload_resp.file;
                    });


                }
                else{
                    toastr.error(upload_resp.msg);
                }







            });


            $ib_form_submit.click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message: null });
                var _url = $("#_url").val();
                $.post(_url + 'transactions/deposit-post/', {


                    account: $('#account').val(),
                    date: $('#date').val(),

                    amount: $('#amount').val(),
                    cats: $('#cats').val(),
                    description: $('#description').val(),
                    attachments: $('#attachments').val(),
                    tags: $('#tags').val(),
                    payer: $('#payer').val(),
                    pmethod: $('#pmethod').val(),
                    ref: $('#ref').val(),
                    currency: $currency.val(),
                    status: $('#status').val(),
                    code: $('#code').val(),
                    company: $('#company').val(),
                    staff_id: $('#staff_id').val(),

                })
                    .done(function (data) {
                        var sbutton = $("#submit");
                        var _url = $("#_url").val();
                        if ($.isNumeric(data)) {

                            location.reload();
                        }
                        else {
                            $('#ibox_form').unblock();
                            var body = $("html, body");
                            body.animate({ scrollTop:0 }, '1000', 'swing');
                            $("#emsgbody").html(data);
                            $("#emsg").show("slow");
                        }
                    });
            });




        });



    </script>
{/block}
