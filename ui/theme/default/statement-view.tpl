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
    <div class="row">

        <div class="col-md-12">

            <div class="panel">
                <div class="panel-hdr">
                    <h2>{$account} {$_L['Statement']} [{date( $config['df'], strtotime($fdate))} - {date( $config['df'], strtotime($tdate))}]</h2>
                    <div class="panel-toolbar">
                        <form class="form-horizontal mr-3" method="post" action="{$_url}export/printable" target="_blank">
                            <input type="hidden" name="fdate" value="{$fdate}">
                            <input type="hidden" name="tdate" value="{$tdate}">
                            <input type="hidden" name="stype" value="{$stype}">
                            <input type="hidden" name="account" value="{$account}">
                            <button type="submit" class="btn btn-primary"> {$_L['Export for Print']}</button>

                        </form>
                        <form class="form-horizontal" method="post" action="{$_url}export/pdf">
                            <input type="hidden" name="fdate" value="{$fdate}">
                            <input type="hidden" name="tdate" value="{$tdate}">
                            <input type="hidden" name="stype" value="{$stype}">
                            <input type="hidden" name="account" value="{$account}">
                            <button type="submit" class="btn btn-primary"> {$_L['Export to PDF']}</button>
                        </form>
                    </div>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <table class="table table-striped table-bordered sys_table">
                            <th>{$_L['Date']}</th>




                            <th class="h6">{$_L['Description']}</th>
                            <th class="text-right">{$_L['Dr']}</th>
                            <th class="text-right">{$_L['Cr']}</th>
{*                            <th class="text-right">{$_L['Balance']}</th>*}


                            {foreach $d as $ds}
                                <tr>
                                    <td>{date( $config['df'], strtotime($ds['date']))}</td>
                                    <td class="h6">{$ds['description']}</td>


                                    <td class="text-right h6 text-danger">{$config['currency_code']} {number_format($ds['dr'],2,$config['dec_point'],$config['thousands_sep'])}</td>
                                    <td class="text-right h6 text-success">{$config['currency_code']} {number_format($ds['cr'],2,$config['dec_point'],$config['thousands_sep'])}</td>
{*                                    <td class="text-right">{$config['currency_code']} {number_format($ds['cr'],2,$config['dec_point'],$config['thousands_sep'])}</td>*}


                                </tr>
                            {/foreach}



                        </table>
                        <div class="row">
                            <div>
                                &nbsp;
                            </div>
                            <div class="col-md-6" style="text-align: right"> </div>
                            <div class="col-md-6" style="text-align: right"> </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>



        <!-- Widget-2 end-->
    </div>
    <!-- Row end-->


    <!-- Row end-->


    <!-- Row end-->
{/block}
