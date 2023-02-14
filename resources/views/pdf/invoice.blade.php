<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $invoice->invoice_num }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 3px
        }
    </style>

</head>

<body>
    <table style="width:100%">
        <thead>
            <tr>
                <th colspan="11">
                    <span style="font-size:22pt;color:#ff0000;">SIM</span><span style="font-size:22pt;">RAK</span>
                    ENTERPRISE<br />SUPPLYING
                    QUALITY PRODUCTS<br />CONTACT : 01866-519376
                </th>
            </tr>
        </thead>
        <tbody>
            <tr style="height: 26px">
                <td colspan="2">BUYER NAME</td>
                <td colspan="6">{{ $invoice->buyer_name }}</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="height: 26px">
                <td colspan="2">SELLER NAME</td>
                <td colspan="6">{{ $invoice->seller_name }}</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="height: 26px">
                <td colspan="2">SUPPLIER</td>
                <td colspan="6">{{ $invoice->supplier }}</td>
                <td colspan="3" rowspan="6">
                    <div style="display:flex;justify-content:center">
                        <img
                            src="https://chart.googleapis.com/chart?choe=ISO-8859-1&&chld=L|0&cht=qr&chs=150x150&chl={{ $invoice->qr_code }}">
                    </div>
                </td>
            </tr>
            <tr style="height: 26px">
                <td colspan="2">FACTORY</td>
                <td colspan="6">{{ $invoice->factory }}</td>
            </tr>
            <tr style="height: 26px">
                <td colspan="2">TRADEMARK</td>
                <td colspan="6">{{ $invoice->trademark }}</td>
            </tr>
            <tr style="height: 26px">
                <td colspan="2">DATE</td>
                <td colspan="6">{{ $invoice->date }}</td>
            </tr>
            <tr style="height: 26px">
                <td colspan="2">LOCATION</td>
                <td colspan="6">{{ $invoice->location }}</td>
            </tr>
            <tr style="height: 26px">
                <td colspan="2">TYPE</td>
                <td colspan="6">{{ $invoice->type }}</td>
            </tr>
            <tr style="height: 26px">
                <td colspan="2">PIECES</td>
                <td colspan="6">8000</td>
                <td colspan="3">{{ $invoice->invoice_num }}</td>
            </tr>
            <tr style="height: 26px">
                <td colspan="11"></td>
            </tr>
            <tr style="height: 26px">
                <td></td>
                <td colspan="9" style="text-align:center">PRICING</td>
                <td></td>
            </tr>
            <tr style="height: 26px">
                <td></td>
                <td>NO</td>
                <td colspan="2">PIECES</td>
                <td colspan="2">UNIT PRICE</td>
                <td colspan="2">TOTAL PRICE</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="height: 26px">
                <td></td>
                <td>1</td>
                <td colspan="2">{{ $invoice->pieces_one }}</td>
                <td colspan="2">{{ $invoice->unit_one }}</td>
                <td colspan="2">{{ $invoice->sum_one }}</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="height: 26px">
                <td></td>
                <td>2</td>
                <td colspan="2">{{ $invoice->pieces_two }}</td>
                <td colspan="2">{{ $invoice->unit_two }}</td>
                <td colspan="2">{{ $invoice->sum_two }}</td>
                <td colspan="3" rowspan="2">{{ $invoice->total }}</td>
            </tr>
            <tr style="height: 26px">
                <td></td>
                <td>3</td>
                <td colspan="2">{{ $invoice->pieces_three }}</td>
                <td colspan="2">{{ $invoice->unit_three }}</td>
                <td colspan="2">{{ $invoice->sum_three }}</td>
            </tr>
            <tr style="height: 26px">
                <td></td>
                <td>4</td>
                <td colspan="2">{{ $invoice->pieces_four }}</td>
                <td colspan="2">{{ $invoice->unit_four }}</td>
                <td colspan="2">{{ $invoice->sum_four }}</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="height: 26px">
                <td colspan="11"></td>
            </tr>
            <tr style="height: 26px">
                <td colspan="2">BUYER NAME</td>
                <td colspan="6">{{ $invoice->buyer_name }}</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="height: 26px">
                <td colspan="2">SELLER NAME</td>
                <td colspan="6">{{ $invoice->seller_name }}</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="height: 26px">
                <td colspan="2">SUPPLIER</td>
                <td colspan="6">{{ $invoice->supplier }}</td>
                <td colspan="3" rowspan="6" style="min-width:150px">
                    <div style="">
                        <img
                            src="https://chart.googleapis.com/chart?choe=ISO-8859-1&&chld=L|0&cht=qr&chs=150x150&chl={{ $invoice->qr_code }}">
                    </div>
                </td>
            </tr>
            <tr style="height: 26px">
                <td colspan="2">FACTORY</td>
                <td colspan="6">{{ $invoice->factory }}</td>
            </tr>
            <tr style="height: 26px">
                <td colspan="2">TRADEMARK</td>
                <td colspan="6">{{ $invoice->trademark }}</td>
            </tr>
            <tr style="height: 26px">
                <td colspan="2">DATE</td>
                <td colspan="6">{{ $invoice->date }}</td>
            </tr>
            <tr style="height: 26px">
                <td colspan="2">LOCATION</td>
                <td colspan="6">{{ $invoice->location }}</td>
            </tr>
            <tr style="height: 26px">
                <td colspan="2">TYPE</td>
                <td colspan="6">{{ $invoice->type }}</td>
            </tr>
            <tr style="height: 26px">
                <td colspan="2">PIECES</td>
                <td colspan="6">8000</td>
                <td colspan="3">{{ $invoice->invoice_num }}</td>
            </tr>
            <tr style="height: 21px">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr style="height: 15px">
                <td colspan="11" style="height: 60px">

                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
