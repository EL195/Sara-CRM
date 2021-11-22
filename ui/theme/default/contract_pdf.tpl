<html>

<head>

    <style>

        /*

        PDF library using PHP have some limitations and all CSS properties may not support. Before Editing this file, Please create a backup, so that You can restore this.

        The location of this file is here- system/lib/invoices/pdf-x2.php

        */

        * {
            margin: 0;
            padding: 0;
        }

        body {
            /*

            Important: Do not Edit Font Name, Unless you are sure. It's required for PDF Rendering Properly

            */

            font: 14px/1.4 Helvetica, Arial, sans-serif;


            /*

            Font Name End

            */
        }

        #page-wrap {
            width: 800px;
            margin: 0 auto;
        }

        table {
            border-collapse: collapse;
        }

        table td, table th {
            border: 1px solid black;
            padding: 5px;
        }


        #customer {
            overflow: hidden;
        }

        #logo {
            text-align: right;
            float: right;
            position: relative;
            margin-top: 25px;
            border: 1px solid #fff;
            max-width: 540px;
            overflow: hidden;
        }

        #meta {
            margin-top: 1px;
            width: 100%;
            float: right;
        }

        #meta td {
            text-align: right;
        }

        #meta td.meta-head {
            text-align: left;
            background: #eee;
        }

        #meta td textarea {
            width: 100%;
            height: 20px;
            text-align: right;
        }

        #items {
            clear: both;
            width: 100%;
            margin: 30px 0 0 0;
            border: 1px solid black;
        }

        #items th {
            background: #eee;
        }

        #items textarea {
            width: 80px;
            height: 50px;
        }

        #items tr.item-row td {
            vertical-align: top;
        }

        #items td.description {
            width: 300px;
        }

        #items td.item-name {
            width: 175px;
        }

        #items td.description textarea, #items td.item-name textarea {
            width: 100%;
        }

        #items td.total-line {
            border-right: 0;
            text-align: right;
        }

        #items td.total-value {
            border-left: 0;
            padding: 10px;
        }

        #items td.total-value textarea {
            height: 20px;
            background: none;
        }

        #items td.balance {
            background: #eee;
        }

        #items td.blank {
            border: 0;
        }

        #terms {
            text-align: left;
            margin: 20px 0 0 0;
        }

        #terms h5 {
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 10px;
            border-bottom: 1px solid black;
            padding: 0 0 8px 0;
            margin: 0 0 8px 0;
        }

        #terms textarea {
            width: 100%;
            text-align: center;
        }

        #items td.blank {
            border: 0;
        }

    </style>

</head>

<body>

<div id="page-wrap">

    <table width="100%">
        <tr>
            <td style="border: 0;  text-align: left" width="62%">
                <span style="font-size: 18px; color: #2f4f4f"><strong>{__('Contract')}</strong></span>
            </td>
            <td style="border: 0;  text-align: right" width="62%">
                <div id="logo" style="font-size:18px">
                    <img id="image" src="{$app_url}storage/system/{$config['logo_default']}" alt="logo"/> <br> <br>
                    {$config['CompanyName']} <br>
                    {$config['caddress']}              </div>
            </td>
        </tr>


    </table>

    <h2>{$contract->title}</h2>

    <hr>


    <div id="customer">

        <table id="meta">
            <tr>
                <td rowspan="5" style="border: 1px solid white; border-right: 1px solid black; text-align: left"
                    width="62%">

                    {if $contact}

                        {if $contact->company}
                            {$contact->company} <br>
                        {/if}

                        {$_L['ATTN']}: Maria Elizabeth <br>

                        {getContactFormattedAddress($config,$contact)}
                    {/if}


                </td>
                <td class="meta-head">{__('ID')} #</td>
                <td>{$contact->id}</td>
            </tr>

            <tr>

                <td class="meta-head">{__('Start Date')}</td>
                <td>{date( $config['df'], strtotime($contract->start_date))}</td>
            </tr>
            <tr>

                <td class="meta-head">{__('Expiration Date')}</td>
                <td>{date( $config['df'], strtotime($contract->expiration_date))}</td>
            </tr>

            <tr>

                <td class="meta-head">{__('Amount')}</td>

                <td>
                    <div class="due">{formatCurrency($contract->amount,$contract->currency)}</div>
                </td>
            </tr>

        </table>

    </div>

    <hr>

    <div style="margin-bottom: 20px;">
        {$contract->description}
    </div>


    <table width="100%">
        <tr>
            <td style="border: 0;  text-align: left" width="62%">
                <div style="margin: 20px;">

                    <hr>
                    {__('Authorised Signature')}
                </div>
            </td>
            <td style="border: 0;  text-align: right" width="62%">
                <div style="margin: 20px;">
                    {if $contract->party_two_sign}
                        <img src="{$contract->party_two_sign}" />
                    {/if}
                    <hr>
                    {__('Customer Signature')}
                </div>
            </td>
        </tr>


    </table>



</div>

</body>

</html>
