{extends file="$layouts_admin"}


{block name="content"}

    <div class="row">
        <div class="col-md-12">

            <div class="panel">

                <div class="panel-container">
                    <div class="panel-content">


                        <table class="table table-bordered table-hover sys_table" id="clx_datatable">
                            <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Date</th>
                                <th>Account</th>
                                <th>Description</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>

                            {foreach $transactions as $transaction}
                                <tr>
                                    <td>
                                        <a class="btn btn-primary" href="{$_url}transactions/mark-cleared/{$transaction->id}" data-toggle="tooltip" data-placement="top" title="{$_L['Mark as cleared']}"><i class="fal fa-check"></i> </a>
                                    </td>
                                    <td  data-value="{$transaction->id}">
                                        {date( $config['df'], strtotime($transaction->date))}
                                    </td>
                                    <td>{$transaction->account}</td>
                                    <td>{$transaction->description}</td>
                                    <td>{formatCurrency($transaction->amount,$transaction->currency_iso_code)}</td>

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
        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    "language": {
                        "emptyTable": "{$_L['No items to display']}",
                        "info":      "{$_L['Showing _START_ to _END_ of _TOTAL_ entries']}",
                        "infoEmpty":      "{$_L['Showing 0 to 0 of 0 entries']}",
                        buttons: {
                            pageLength: '{$_L['Show all']}'
                        },
                        searchPlaceholder: "{__('Search')}"
                    },
                }
            );

            $('.has-tooltip').tooltip();
        });
    </script>
{/block}
