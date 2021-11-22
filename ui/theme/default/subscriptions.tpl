{extends file="$layouts_admin"}

{block name="content"}

    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-window'></i> {$_L['Subscriptions']}

        </h1>
    </div>



    <div class="row">
        <div class="col-md-12">

            <div class="panel">

                <div class="panel-hdr">




                    <h2>{$_L['Invoices']}</h2>


                    <div class="panel-toolbar">

                        <div class="btn-group">
                            <a href="{$_url}subscriptions/add" class="btn btn-primary  btn-sm"> {$_L['New Subscription']}</a>
                        </div>

                    </div>
                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <ul class="nav nav-tabs nav-tabs-clean mb-3" role="tablist">
                            <li class="nav-item"><a class="nav-link {if $tab == '' || $tab == 'active'}active{/if}" href="{$base_url}subscriptions/list">{$_L['Active']}</a></li>
                            <li class="nav-item"><a class="nav-link  {if $tab == 'paid'}active{/if}" href="{$base_url}subscriptions/list/inactive">{$_L['Inactive']}</a></li>
                            <li class="nav-item"><a class="nav-link {if $tab == 'cancelled'}active{/if}" href="{$base_url}subscriptions/list/suspended">{$_L['Suspended']}</a></li>
                            <li class="nav-item"><a class="nav-link {if $tab == 'all' }}active{/if}" href="{$base_url}subscriptions/list/all">{$_L['All']}</a></li>
                        </ul>

                        <div class="table-responsive">

                            <table id="clx_datatable" class="table table-striped w-100 sys_table footable">
                                <thead style="background: #f0f2ff">
                                <tr>
                                    <th>#</th>
                                    <th>{$_L['Customer']}</th>
                                    <th>{__('Subscription Plan')}</th>
                                    <th>{$_L['Start Date']}</th>
                                    <th>{__('Next Renewal Date')}</th>
                                    <th>
                                        {$_L['Status']}
                                    </th>
                                    <th>{$_L['Type']}</th>
                                    <th class="text-right" width="140px;">{$_L['Manage']}</th>
                                </tr>
                                </thead>
                                <tbody>

                                {foreach $subscriptions as $subscription}

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

{block name="script"}



    <script>
        $(function () {

            var $modal = $('#cloudonex_body');

            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
                    dom:
                    /*	--- Layout Structure
                        --- Options
                        l	-	length changing input control
                        f	-	filtering input
                        t	-	The table!
                        i	-	Table information summary
                        p	-	pagination control
                        r	-	processing display element
                        B	-	buttons
                        R	-	ColReorder
                        S	-	Select

                        --- Markup
                        < and >				- div element
                        <"class" and >		- div with a class
                        <"#id" and >		- div with an ID
                        <"#id.class" and >	- div with an ID and a class

                        --- Further reading
                        https://datatables.net/reference/option/dom
                        --------------------------------------
                     */
                        "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        {
                            extend: 'csvHtml5',
                            text: 'CSV',
                            titleAttr: 'Generate CSV',
                            className: 'btn-primary btn-sm mr-1'
                        },
                        {
                            extend: 'copyHtml5',
                            text: 'Copy',
                            titleAttr: 'Copy to clipboard',
                            className: 'btn-warning btn-sm mr-1'
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            titleAttr: 'Print Table',
                            className: 'btn-secondary btn-sm'
                        }
                    ],
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


            $modal.on('click', '.cdelete', function(e){

                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are You Sure?", function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/invoice/" + id;
                    }
                });


            });





        });
    </script>
{/block}
