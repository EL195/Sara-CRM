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
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>{$_L['Reports Income Vs Expense']} </h2>

                </div>
                <div class="panel-container">
                    <div class="panel-content">

                        <h4>{$_L['Income Vs Expense']}</h4>
                        <hr>
                        <h5 class="text-success">{$_L['Total Income']}: {$config['currency_code']} {number_format($ai,2,$config['dec_point'],$config['thousands_sep'])}</h5>
                        <h5 class="text-danger">{$_L['Total Expense']}: {$config['currency_code']} {number_format($ae,2,$config['dec_point'],$config['thousands_sep'])}</h5>
                        <hr>
                        <h5>
                            {$_L['Income minus Expense']} = {$config['currency_code']} {number_format($aime,2,$config['dec_point'],$config['thousands_sep'])}
                        </h5>

                        <hr>
                        <h5 class="text-success">{$_L['Total Income This Month']}: {$config['currency_code']} {number_format($mi,2,$config['dec_point'],$config['thousands_sep'])}</h5>
                        <h5 class="text-danger">{$_L['Total Expense This Month']}: {$config['currency_code']} {number_format($me,2,$config['dec_point'],$config['thousands_sep'])}</h5>
                        <hr>
                        <h5>
                            {$_L['Income minus Expense']} = {$config['currency_code']} {number_format($mime,2,$config['dec_point'],$config['thousands_sep'])}

                        </h5>

                        <hr>

                    </div>




{*                    <h4>{$_L['Income Vs Expense This Year']}</h4>*}
{*                    <hr>*}
{*                    <div id="placeholder" class="flot-placeholder"></div>*}
{*                    <hr>*}


                </div>
            </div>
        </div>


    </div>
    <!-- Row end-->


    <!-- Row end-->


    <!-- Row end-->
{/block}
