{extends file="$layouts_admin"}

{block name="head"}

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />
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
        .text-warning{
            color: #FB6340!important;
        }
        .text-primary{
            color: #10CDEF!important;
        }
    </style>
{/block}

{block name="content"}
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-container">
                    <div class="panel-content">



                        <div class="row">
                            <div class="col-md-3 col-sm-6">

                                <form>
                                    <div class="form-group">
                                        <label for="reportrange">{$_L['Date Range']}</label>
                                        <input type="text" name="reportrange" class="form-control" id="reportrange">
                                    </div>

                                    <div class="form-group">
                                        <label for="tr_type">Transaction {$_L['Type']}</label>
                                        <select id="tr_type" name="tr_type" class="form-control">
                                            <option value="">{$_L['All']}</option>
                                            <option value="Income" {if $tr_type eq 'Income'}selected{/if}>{$_L['Income']}</option>
                                            <option value="Expense" {if $tr_type eq 'Expense'}selected{/if}>{$_L['Expense']}</option>
                                            <option value="Transfer" {if $tr_type eq 'Transfer'}selected{/if}>{$_L['Transfer']}</option>
                                            <option value="Equity" {if $tr_type eq 'Transfer'}selected{/if}>{$_L['Equity']}</option>
                                        </select>
                                    </div>

                                    <div class="form-group" id="block_expense_type">
                                        <label for="tr_type">Expense {$_L['Type']}</label>
                                        <select id="tr_type" name="tr_type" class="form-control">
                                            <option value="">{$_L['All']}</option>
                                            {foreach $expense_types as $expense_type}
                                                <option value="{$expense_type->name}">{$expense_type->name}</option>
                                            {/foreach}
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="account">{$_L['Account']}</label>
                                        <select id="account" name="account" class="form-control">
                                            <option value="">{$_L['All']}</option>
                                            {foreach $a as $as}
                                                <option value="{$as['account']}" {if $p_account eq ($as['id'])}selected="selected" {/if}>{$as['account']}</option>
                                            {/foreach}
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="cid">{$_L['Contact']}</label>
                                        <select id="cid" name="cid" class="form-control">
                                            <option value="">{$_L['All']}</option>
                                            {foreach $c as $cs}
                                                <option value="{$cs['id']}"
                                                        {if $p_cid eq ($cs['id'])}selected="selected" {/if}>{$cs['account']} {if $cs['email'] neq ''}- {$cs['email']}{/if}</option>
                                            {/foreach}

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="category">{$_L['Category']}</label>
                                        <select id="category" name="category" class="form-control">
                                            <option value="">{$_L['All']}</option>
                                            {foreach $categories as $category}
                                                <option value="{$category->id}">{$category->name}</option>
                                            {/foreach}

                                        </select>
                                    </div>





                                    <button type="submit" id="ib_filter" class="btn btn-primary">Filter</button>

                                    <br>
                                </form>


                            </div>
                            <div class="col-md-9 col-sm-6 ib_right_panel">


                                <div class="table-responsive" id="ib_data_panel">


                                    <table class="table table-bordered table-hover display" id="ib_dt">
                                        <thead>
                                        <tr class="heading">
                                            <th>{$_L['ID']}</th>
                                            <th>{$_L['Date']}</th>
                                            <th>{$_L['Account']}</th>
                                            <th>{$_L['Type']}</th>

                                            <th class="text-right">{$_L['Amount']}</th>

                                            <th>{$_L['Description']}</th>
                                            <th class="text-right">
                                                {$_L['Dr']}
                                                ({$home_currency->iso_code})
                                            </th>
                                            <th class="text-right">
                                                {$_L['Cr']}
                                                ({$home_currency->iso_code})
                                            </th>

                                            <th>{$_L['Manage']}</th>
                                        </tr>
                                        </thead>

                                        <tfoot>
                                        <tr>
                                            <th colspan="6" style="text-align:right">{$_L['Total']}:</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        </tfoot>

                                    </table>
                                </div>

                            </div>
                        </div>








                    </div>
                </div>
            </div>

        </div>


    </div> <!-- Row end-->



{/block}


{block name="script"}

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>

    <script>
        $(function () {
            var $block_expense_type = $("#block_expense_type");
            $block_expense_type.hide();

            $("#tr_type").on('change',function () {
                if($(this).val() == 'Expense'){
                    $block_expense_type.show('slow');
                }
                else{
                    $block_expense_type.hide('slow');
                }
            });

            var $ib_data_panel = $("#ib_data_panel");

            $ib_data_panel.block({ message:block_msg });

            var $cid = $('#cid');

            var $account = $("#account");

            var $category = $("#category");

            $category.select2({

            });

            $cid.select2({

            });

            $account.select2({

            });


            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            var $reportrange = $("#reportrange");

            $reportrange.daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                locale: {
                    format: 'YYYY/MM/DD'
                }
            }, cb);

            cb(start, end);





            var ib_dt = $('#ib_dt').DataTable( {

                "serverSide": true,
                "ajax": {
                    "url": base_url + "transactions/tr_list/",
                    "type": "POST",
                    "data": function ( d ) {

                        d.tr_type = $('#tr_type').val();
                        d.reportrange = $reportrange.val();
                        d.cid = $cid.val();
                        d.account = $account.val();
                        d.category = $category.val();

                    }
                },
                "language": {
                    "emptyTable": "{$_L['No items to display']}",
                    "info":      "{$_L['Showing _START_ to _END_ of _TOTAL_ entries']}",
                    "infoEmpty":      "{$_L['Showing 0 to 0 of 0 entries']}",
                    buttons: {
                        pageLength: '{$_L['Show all']}'
                    },
                    searchPlaceholder: "{__('Search')}"
                },
                "pageLength": 10,
                responsive: true,
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
                    "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'l><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                buttons: [

                    {
                        extend: 'pdfHtml5',
                        text: 'PDF',
                        titleAttr: 'Generate PDF',
                        className: 'btn-danger btn-sm mr-1'
                    },
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        titleAttr: 'Generate Excel',
                        className: 'btn-success btn-sm mr-1'
                    },
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
                        className: 'btn-dark btn-sm mr-1'
                    },
                    {
                        extend: 'print',
                        text: 'Print',
                        titleAttr: 'Print Table',
                        className: 'btn-secondary btn-sm'
                    }
                ],
                fixedHeader: {
                    headerOffset: 50
                },
                lengthMenu: [
                    [ 10, 25, 50, -1 ],
                    [ '10 rows', '25 rows', '50 rows', 'Show all' ]
                ],
                "columnDefs": [
                    { "orderable": false, "targets": 8 }
                ],
                "order": [[ 0, 'desc' ]],
                "scrollX": true,
                "initComplete": function () {
                    $ib_data_panel.unblock();
                },
                "footerCallback": function ( row, data, start, end, display ) {
                    var api = this.api(), data;

                    // Remove the formatting to get integer data for summation
                    var intVal = function ( i ) {
                        return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '')*1 :
                            typeof i === 'number' ?
                                i : 0;
                    };

                    // Total over all pages
                    total = api
                        .column( 6 )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Total over this page
                    pageTotal = api
                        .column( 6, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    pageTotal_2 = api
                        .column( 7, { page: 'current'} )
                        .data()
                        .reduce( function (a, b) {
                            return intVal(a) + intVal(b);
                        }, 0 );

                    // Update footer
                    $( api.column( 6 ).footer() ).html(
                       // '$'+pageTotal +' ( $'+ total +' total)'
                        pageTotal.toFixed(2)

                    );
                    $( api.column( 7 ).footer() ).html(
                        // '$'+pageTotal +' ( $'+ total +' total)'
                        pageTotal_2.toFixed(2)

                    );
                }
            } );

            var $ib_filter = $("#ib_filter");



            $ib_filter.on('click', function(e) {
                e.preventDefault();

                $ib_data_panel.block({ message:block_msg });

                ib_dt.ajax.reload(
                    function () {
                        $ib_data_panel.unblock();
                    }
                );


            });



        })
    </script>
{/block}
