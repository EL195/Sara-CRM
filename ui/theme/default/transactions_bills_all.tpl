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
                            <a class="nav-link" id="v-pills-home-tab" href="{$_url}transactions/bills" aria-controls="v-pills-home" aria-selected="true">
{*                                <i class="fal fa-home"></i>*}
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000"/>
                                    </g>
                                </svg>
                                <span class="hidden-sm-down ml-1"> {$_L['Summary']}</span>
                            </a>
                            <a class="nav-link active" id="v-pills-profile-tab"  href="{$_url}transactions/bills-all"  aria-controls="v-pills-profile" aria-selected="false">
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
                            <a class="nav-link" id="v-pills-messages-tab"  href="{$_url}transactions/bill"  aria-controls="v-pills-messages" aria-selected="false">
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
                                    <div class="table-responsive">
                                        <table class="table table-striped " id="clx_datatable">
                                            <thead>
                                            <tr>
                                                <th>{$_L['Title']}</th>
                                                <th>{$_L['Amount']}</th>
                                                <th>{$_L['Next Due Date']}</th>
                                                <th>{$_L['Manage']}</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            {foreach $bills as $bill}
                                                <tr>
                                                    <td  data-value="{$bill->id}">
                                                        <a href="{$_url}transactions/bill/{$bill->id}">
                                                           <span class="text-info h6">{$bill->title}</span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span class="h6">
                                                            {formatCurrency($bill->net_amount,$bill->currency)}
                                                        </span>
                                                        <br>

                                                        <div class="hr-line-dashed"></div>
                                                        {ib_lan_get_line($bill->recurring_type)}
                                                    </td>
                                                    <td>
                                                        {translate_date_string(date( 'D M d, Y', strtotime($bill->next_date)),$_L)}
                                                    </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="{$_url}transactions/bill/{$bill->id}" class="btn btn-info btn-icon" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fal fa-pencil"></i></a>
                                                            <a href="javascript:;" class="btn btn-danger btn-icon" onclick="confirmThenGoToUrl(event,'transactions/delete-bill/{$bill->id}');" data-toggle="tooltip" data-placement="top" title="{$_L['Delete']}"><i class="fal fa-trash"></i></a>
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
        });
    </script>
{/block}
