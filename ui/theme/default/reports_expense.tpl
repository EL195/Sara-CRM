{extends file="$layouts_admin"}

{block name="content"}
    <div class="row">


        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>{$_L['Expense Reports']} </h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        {foreach $currencies as $currency}

                            <h4>{$_L['Expense Summary']} [ {$currency->iso_code} ]</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                                        <div class="">
                                            <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                                {$currency->symbol}{$total_expense_all_time}
                                                <small class="m-0 l-h-n">{$_L['Total Expense']}</small>
                                            </h5>
                                            <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>


                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                                        <div class="details">
                                            <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                                {$currency->symbol}{Transaction::totalAmount('Expense',$currency->id,'current_month',$all_data)}
                                                <small class="m-0 l-h-n">{$_L['Total Expense This Month']}  </small>
                                            </h5>
                                            <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>


                                        </div>
                                    </div>

                                </div>


                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="p-3 bg-primary-200 rounded overflow-hidden position-relative text-white mb-g">                           <div>
                                            <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                                {$currency->symbol}{Transaction::totalAmount('Income',$currency->id,'last_30_days',$all_data)}
                                                <small class="m-0 l-h-n">{$_L['Total Expense Last 30 days']}  </small>
                                            </h5>
                                            <i class="fal fa-credit-card position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>


                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">                           <div>
                                            <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                                {$currency->symbol}{Transaction::totalAmount('Expense',$currency->id,'last_30_days',$all_data)}
                                                <small class="m-0 l-h-n">{$_L['Total Expense This Week']}  </small>
                                            </h5>
                                            <i class="fal fa-globe position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>


                                        </div>
                                    </div>
                                </div>
                            </div>


                        {/foreach}
                        <hr>
                        <h2>{$_L['Last_20_Expense']}</h2>
                        <hr>
                        <table class="table table-striped table-bordered">
                            <th>{$_L['Date']}</th>
                            <th>{$_L['Account']}</th>
                            <th>{$_L['Type']}</th>
                            <th>{$_L['Category']}</th>
                            <th class="text-right">{$_L['Amount']}</th>
                            <th>{$_L['Payee']}</th>



                            <th>{$_L['Description']}</th>

                            <th class="text-right">{$_L['Cr']}</th>


                            {foreach $d as $ds}
                                <tr>
                                    <td>{date( $config['df'], strtotime($ds['date']))}</td>
                                    <td>{$ds['account']}</td>
                                    <td>{ib_lan_get_line($ds['type'])}</td>
                                    <td>{if $ds['category'] == 'Uncategorized'}{$_L['Uncategorized']} {else} {$ds['category']} {/if}</td>
                                    <td class="text-right">{$config['currency_code']} {number_format($ds['amount'],2,$config['dec_point'],$config['thousands_sep'])}</td>
                                    <td>{$ds['payee']}</td>



                                    <td>{$ds['description']}</td>

                                    <td class="text-right">{$config['currency_code']} {number_format($ds['dr'],2,$config['dec_point'],$config['thousands_sep'])}</td>


                                </tr>
                            {/foreach}



                        </table>
                        <hr>

                        <div id="expense_by_month"></div>
                        <hr>

                        <h2>{$_L['Expense by Category']}</h2>

                        <div id="category_pie_chart"></div>

                    </div>
                </div>
            </div>


        </div>





        <!-- Widget-2 end-->
    </div>
{/block}

{block name="script"}


    <script>
        jQuery(document).ready(function() {



            $('.amount').autoNumeric('init', {


                dGroup: 3,
                aPad: true,
                pSign: 'p',
                aDec: '{$config['dec_point']}',
                aSep: '{$config['thousands_sep']}',
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'

            });


            var expense_by_months = {
                chart: { height: 500, type: "area", zoom: { enabled: !1 } },
                colors: ["#5A8DEE", "#FDAC41", "#FF5B5C", "#39DA8A", "#00CFDD"],
                dataLabels: { enabled: !1 },
                stroke: { curve: "straight" },
                series: [{ name: "{$_L['Expense']}", data: [{foreach $m_data as $d}
                        {$d['value']},
                        {/foreach}] }],
                title: { text: "{$_L['Reports by Month']}", align: "left"},
                grid: { row: { colors: ["#f3f3f3", "transparent"], opacity: .5 } },
                xaxis: { categories: [
                        {foreach $m_data as $d}
                        "{$d['month']}",
                        {/foreach}
                    ] },
                yaxis: { tickAmount: 5 }
            };

            new ApexCharts(document.querySelector("#expense_by_month"), expense_by_months).render();


            var category_pie_chart_options = {
                chart: { type: "donut", height: 500 },
                colors: ["#5A8DEE", "#FDAC41", "#FF5B5C", "#39DA8A", "#00CFDD"],
                labels: [
                    {foreach $cat_data as $d}
                    '{$d['category']}',
                    {/foreach}
                ],
                series: [
                    {foreach $cat_data as $d}
                    {$d['value']},
                    {/foreach}
                ],
                legend: { itemMargin: { horizontal: 2 } },
                responsive: [ { breakpoint: 576, options: { chart: { width: 300 }, legend: { position: "bottom" } } }]
            };

            new ApexCharts(document.querySelector("#category_pie_chart"), category_pie_chart_options).render();

        });

    </script>

{/block}
