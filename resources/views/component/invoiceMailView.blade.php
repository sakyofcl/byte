<head>

    <style>
        .invoice {
            width: 580px;
            margin: 20px auto;
            padding: 20px 0 30px 0;
            border: 1px solid #dbdbdb;
        }

        .invoice-content {
            margin: 0 auto;
        }

        .invoice-header {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 10px;
            background-color: white;
            border-radius: 6px;
        }

        .invoice-header-text {
            margin: 0;
            font-size: 20px;
            color: white;
            text-transform: uppercase;
            text-align: center;
            letter-spacing: 7.64px;
            line-height: 23px;
        }

        .invoice-company-logo img {
            height: 60px;
            height: 50px;
        }

        .invoice-info {
            display: flex;
            justify-content: space-between;
            margin: 7px 0 10px;
            font-weight: 100;
            color: lightgrey;
            border-bottom: 1px solid;
        }

        .invoice-info .order-id {
            font-weight: bold;
            color: black;
            padding-left: 10px;
            margin-bottom: 5px;
            font-size: 14px;
            font-family: 'Roboto';
        }

        .invoice-company {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 13px;
        }

        .invoice-company-info {
            display: flex;
            flex-direction: column;
            font-size: 13px;
        }

        .invoice-month-header {
            width: 150px;
            margin-bottom: 25px;
            border-bottom: #e4e4e4 1px solid;
        }

        .invoice-table {
            margin-bottom: 25px;
        }

        .invoice-total {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .invoice-total-wrapper {
            width: 100%;
            display: flex;
            justify-content: flex-end;
        }

        .invoice-total h2 {
            margin-bottom: 0;
            color: #000;
            font-size: 15px;
            margin-top: 0;
        }

        footer {
            text-align: center;
        }

        footer span {
            display: block;
            font-weight: 400;
        }

        .order-date {
            color: #000;
            padding-right: 10px;
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 14px;
            font-family: 'Roboto';
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
            display: table;
            text-indent: initial;
            border-spacing: 2px;
            border-color: grey;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
        }

        thead {
            display: table-header-group;
            vertical-align: middle;
            border-color: inherit;
        }

        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
            font-size: 14px;
            font-family: 'Roboto';
        }

        .table td,
        .table th {
            padding: .75rem;
            border-top: 1px solid #dee2e6;
        }

        th {
            display: table-cell;
            font-weight: bold;
        }

        tbody {
            display: table-row-group;
            vertical-align: middle;
            border-color: inherit;
        }

        .table td,
        .table th {
            padding: .75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        td {
            display: table-cell;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="invoice bg-white w-100">
        <div class="invoice-content bg-white ml-0 mr-0 w-100 p-2" id="invoice">

            <div class="invoice-header" style="align-items:center;justify-content:center;">
                <div class="invoice-company-logo pl-1 pr-1">
                    <img src="http://www.byte.lk/assets/images/logo/logo.png" style="display:block" />
                </div>
            </div>
            <h4 style="text-align:center;font-size:25px;font-weight:bold;margin-top:0;margin-bottom: 1rem;">
                Thanks for your order!
            </h4>

            <div class="invoice-info" style="justify-content:space-between;">

                <div class="order-id">ORDER ID : BO-{{$user->oid}}</div>
                <div class="order-date">{{$user->date}}</div>

            </div>

            <div class="invoice-company">
                <div class="invoice-company-info text-left" style="padding-left: 10px;">
                    <span style="font-weight:bold;">Delivery address :</span>
                    <span>{{$user->name}},</span>
                    <span>{{$ship->street}} | {{$ship->province}},</span>
                    <span>{{$ship->city}}. PO:{{$ship->zip}},</span>
                    <span>{{$user->phone}},</span>
                    <span>{{$user->email}}.</span>
                </div>
            </div>

            <table class="table table-striped invoice-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th style="text-align:center">Product</th>
                        <th style="text-align:center">Qty</th>
                        <th style="text-align:center">Unit rate</th>
                        <th style="text-align:center">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach($product as $item)
                    <tr>
                        <td style="text-align:center">{{$i}}</td>
                        <td style="text-align:center">{{$item['name']}}</td>
                        <td style="text-align:center">{{$item['qty']}}</td>
                        <td style="text-align:center">{{number_format($item['price'],2)}}</td>
                        <td style="text-align:right">Rs.{{number_format($item['price']*$item['qty'],2)}}</td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                </tbody>

            </table>
            <div class="invoice-total-wrapper" style="justify-content: flex-end;">
                <div style="width:50%;padding-right:10px;padding-left:10px;">
                    <div class="invoice-total" style="justify-content:space-between;">
                        <span>Sub total</span>
                        <?php $subtotal = 0 ?>
                        @foreach($product as $item)
                        <?php $subtotal = $subtotal + $item['price'] * $item['qty']; ?>
                        @endforeach
                        <span>Rs.{{number_format($subtotal,2)}}</span>
                    </div>
                    <div class="invoice-total" style="justify-content:space-between;">
                        <span>Discount(coupon)</span>
                        <span>{{number_format(0,2)}}</span>
                    </div>
                    <div class="invoice-total" style="justify-content:space-between;">
                        <span>Shiping fee</span>
                        <span>{{number_format(0,2)}}</span>
                    </div>
                    <div class="invoice-total" style="justify-content:space-between;">
                        <h2>Total</h2>
                        <?php
                        $discount = 0;
                        $ship_fee = 0;
                        ?>
                        <h2>Rs.{{number_format($subtotal+$ship_fee-$discount,2)}}</h2>
                    </div>

                </div>
            </div>



            <footer>
                <p style="text-align:center;color:#313131;padding-top: 20px;">
                    <span>www.byte.lk | info@byte.lk | 076 237 0000</span>
                </p>
            </footer>

        </div>
    </div>
</body>