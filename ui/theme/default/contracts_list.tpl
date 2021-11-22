{extends file="$layouts_admin"}

{block name="content"}

    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-window'></i> {$_L['Contracts']}

        </h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">


                <div class="panel-container">
                    <div class="panel-content">
                        <div class="table-responsive">

                            <table id="clx_datatable" class="table table-striped w-100 sys_table">
                                <thead style="background: #f0f2ff">
                                <tr>
                                    <th>{$_L['Title']}</th>
                                    <th>{$_L['Type']}</th>
                                    <th>{$_L['Amount']}</th>
                                    <th>{$_L['Customer']}</th>
                                    <th>{$_L['Start Date']}</th>
                                    <th>{__('Expiration Date')}</th>
                                    <th>{$_L['Status']}</th>
                                    <th>{$_L['Manage']}</th>

                                </tr>
                                </thead>
                                <tbody>

                                {foreach $contracts as $contract}
                                    <tr>

                                        <td data-value="{$contract->id}" data-order="{$contract@iteration}">
                                            <a target="_blank" href="{$_url}contracts/view/{$contract->id}/{$contract->uuid}">{$contract->title}</a>
                                        </td>

                                        <td>
                                            {if !empty($contract_types[$contract->type])}
                                                {$contract_types[$contract->type]}
                                            {/if}
                                        </td>
                                        <td>
                                            {formatCurrency($contract->amount,$contract->currency)}
                                        </td>
                                        <td>
                                            {if isset($contacts[$contract->contact_id])}
                                                <a href="{$base_url}contacts/view/{$contract->contact_id}/summary/">{$contacts[$contract->contact_id]->account}</a>
                                            {/if}
                                        </td>

                                        <td data-value="{strtotime($contract->start_date)}">
                                            {date( $config['df'], strtotime($contract->start_date))}
                                        </td>
                                        <td data-value="{strtotime($contract->expiration_date)}">
                                            {date( $config['df'], strtotime($contract->expiration_date))}
                                        </td>

                                        <td>
                                            {if $contract->party_two_signed}
                                                <span class="badge badge-success">{__('Signed')}</span>
                                                {else}
                                                <span class="badge badge-danger">{__('Not Signed')}</span>
                                            {/if}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a target="_blank" href="{$_url}contracts/view/{$contract->id}/{$contract->uuid}" class="btn btn-primary btn-icon" data-toggle="tooltip" data-placement="top" title="{$_L['View']}"><i class="fal fa-file-alt"></i></a>

                                                <a href="{$_url}contracts/edit/{$contract->id}/" class="btn btn-info btn-icon" data-toggle="tooltip" data-placement="top" title="{$_L['Edit']}"><i class="fal fa-file-edit"></i></a>

                                                <a href="javascript:;" class="btn btn-danger btn-icon" onclick="confirmThenGoToUrl(event,'contracts/delete/{$contract->id}')" data-toggle="tooltip" data-placement="top" title="{$_L['Delete']}"><i class="fal fa-trash-alt"></i></a>

                                            </div>
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
    </div>
{/block}

{block name=script}

    <script>

        $(function () {
            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
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
        });

    </script>


{/block}
