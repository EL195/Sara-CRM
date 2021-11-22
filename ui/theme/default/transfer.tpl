{extends file="$layouts_admin"}


{block name="head"}

    <style>

{if empty($config['admin_dark_theme'])}
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
{/if}


    </style>


{/block}

{block name="content"}
    <div class="row">
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>{$_L['New Transfer']}</h2>

                </div>

                <div class="panel-container show">
                    <div class="panel-content" id="ibox_form">
                        <div class="alert alert-danger" id="emsg">
                            <span id="emsgbody"></span>
                        </div>
                        <form class="form-horizontal" method="post" id="tform" role="form">
                            <div class="form-group">
                                <label for="faccount"><span class="h6">{$_L['From']}</span></label>
                                <select id="faccount" name="faccount" class="form-control">
                                    <option value=""><span class="h6"></span>{$_L['Choose an Account']}</option>
                                    {foreach $d as $ds}
                                        <option value="{$ds['id']}">{$ds['account']}</option>
                                    {/foreach}


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="taccount"><span class="h6">{$_L['To']}</span></label>
                                <select id="taccount" name="taccount" class="form-control">
                                    <option value=""><span class="h6">{$_L['Choose an Account']}</span></option>
                                    {foreach $d as $ds}
                                        <option value="{$ds['id']}">{$ds['account']}</option>
                                    {/foreach}


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date"><span class="h6">{$_L['Date']}</span></label>
                                <input type="text" class="form-control"  value="{$mdate}" name="date" id="date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                            </div>

                            <div class="form-group">
                                <label for="description"><span class="h6">{$_L['Description']}</span></label>
                                <input type="text" class="form-control" id="description" name="description">
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
                                <label for="amount"><span class="h6">{$_L['Amount']}</span></label>
                                <input type="text" class="form-control amount" id="amount" name="amount">
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
                                <label for="pmethod"><span class="h6">{$_L['Method']}</span></label>
                                <select id="pmethod" name="pmethod" class="form-control">
                                    <option value="">{$_L['Select Payment Method']}</option>
                                    {foreach $pms as $pm}
                                        <option value="{$pm['name']}">{$pm['name']}</option>
                                    {/foreach}


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ref"><span class="h6">{$_L['Ref']}</span></label>
                                <input type="text" class="form-control" id="ref" name="ref">
                                <span class="help-block">{$_L['ref_example']}</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="submit" class="btn btn-primary">{$_L['Submit']}</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-8">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>{$_L['Recent Transfers']}</h2>

                </div>

                <div class="panel-container show">
                    <div class="panel-content">

                        <table class="table table-bordered table-striped sys_table">
                            <thead {if empty($config['admin_dark_theme'])}
                                style="background:#f0f2ff"
                                    {/if}>
                            <tr>
                                <th class="h6">{$_L['Account']}</th>
                                <th class="h6">{$_L['Description']}</th>
                                <th class="h6">{$_L['Amount']}</th>

                            </tr>
                            </thead>
                            <tbody>

                            {foreach $tr as $trs}
                                <tr>
                                    <td><span class="h6">{$trs['account']}</span></td>
                                    <td><a href="{$_url}transactions/manage/{$trs['id']}/"><span class="text-info" >{$trs['description']}</span></a> </td>
                                    <td class="amount">{$trs['amount']}</td>
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


{block name="script"}
    <script>
        $(document).ready(function () {

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

            $("#faccount").select2({

            });
            $("#taccount").select2({

            });
            $("#pmethod").select2({

            });


            $('#tags').select2({
                tags: true,
                tokenSeparators: [','],

            });


            $("#emsg").hide();



            var _url = $("#_url").val();




            $("#submit").click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message: null });
                var _url = $("#_url").val();
                $.post(_url + 'transactions/transfer-post/', {


                    faccount: $('#faccount').val(),
                    taccount: $('#taccount').val(),
                    date: $('#date').val(),

                    amount: $('#amount').val(),

                    description: $('#description').val(),
                    tags: $('#tags').val(),

                    pmethod: $('#pmethod').val(),
                    ref: $('#ref').val(),
                    currency: $currency.val()

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
