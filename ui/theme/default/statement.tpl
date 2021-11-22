{extends file="$layouts_admin"}

{block name="content"}
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>{$_L['View Statement']}</h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <form class="form-horizontal" method="post" action="{$_url}reports/statement-view" id="tform" role="form">
                            <div class="form-group">
                                <label for="description">{$_L['Account']}</label>
                                <select id="account" name="account">
                                    <option value="">{$_L['Choose an Account']}</option>
                                    {foreach $d as $ds}
                                        <option value="{$ds['account']}">{$ds['account']}</option>
                                    {/foreach}


                                </select>
                            </div>



                            <div class="form-group">
                                <label for="fdate">{$_L['From Date']}</label>
                                <input type="text" class="form-control"  value="{$tdate}" name="fdate" id="fdate" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                            </div>

                            <div class="form-group">
                                <label for="tdate">{$_L['To Date']}</label>
                                <input type="text" class="form-control"  value="{$mdate}" name="tdate" id="tdate" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true">
                            </div>
                            <div class="form-group">
                                <label for="stype">{$_L['Type']}</label>
                                <select id="stype" name="stype" class="form-control">
                                    <option value="all" selected="selected">{$_L['All Transactions']}</option>
                                    <option value="credit">{$_L['Credit']}</option>
                                    <option value="debit">{$_L['Debit']}</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="submit" class="btn btn-primary">{$_L['View Statement']}</button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>



        </div>



    </div>




{/block}

{block name="script"}

    <script>
        $(function () {

            $("#account").select2();
            $("#cats").select2();
            $("#pmethod").select2();
            $("#payer").select2();
            $('#dp1').datepicker({
                format: 'yyyy-mm-dd'
            });
            $('#dp2').datepicker({
                format: 'yyyy-mm-dd'
            });

        });
    </script>
{/block}
