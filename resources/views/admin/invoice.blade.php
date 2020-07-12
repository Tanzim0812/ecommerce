<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Example 1</title>
    <link rel="stylesheet" href="style.css" media="all" />
</head>
<style>
    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }

    a {
        color: #5D6975;
        text-decoration: underline;
    }

    body {
        position: relative;

        margin: 0 auto;
        color: #001028;
        background: #FFFFFF;
        font-family: Arial, sans-serif;
        font-size: 12px;
        font-family: Arial;

    }

    header {
        padding: 10px 0;
        margin-bottom: 30px;
    }

    #logo {
        text-align: left;
        margin-bottom: 10px;
    }

    #logo img {
        width: 90px;
    }
    #orderid {
       font-size: 16px;
        padding: 3px;
        border-bottom: 1px solid lightgrey;
    }

    h4 {
        border-top: 1px solid  #5D6975;
        border-bottom: 1px solid  #5D6975;
        color: #5D6975;
        font-size: 2.4em;
        line-height: 1.4em;
        font-weight: normal;
        text-align: center;
        margin: 0 0 20px 0;
        background: url({{asset('files/admin/images/dimension.png')}});
    }

    #project {
        float: left;
    }

    #project span {
        color: #5D6975;
        text-align: left;
        width: 52px;
        margin-right: 10px;
        margin-top: 15px;
        display: inline-block;
        font-size: 0.8em;
    }

    #company {
        float: right;
        text-align: left;


    }
    #company span{
        color: #5D6975;
        display: inline-block;
        font-size: 0.8em;
    }

    #project div,
    #company div {
        white-space: nowrap;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px;
    }

    table tr:nth-child(2n-1) td {
        background: #F5F5F5;
    }

    table th,
    table td {
        text-align: center;
    }

    table th {
        padding: 5px 20px;
        color: #5D6975;
        border-bottom: 1px solid #C1CED9;
        white-space: nowrap;
        font-weight: normal;
    }

    table .service,
    table .desc {
        text-align: left;
    }

    table td {
        padding: 20px;
        text-align: right;
    }

    table td.service,
    table td.desc {
        vertical-align: top;
    }

    table td.unit,
    table td.qty,
    table td.total {
        font-size: 1.2em;
    }

    table td.grand {
        border-top: 1px solid #5D6975;;
    }

    #notices .notice {
        color: #5D6975;
        font-size: 1.2em;

    }

    footer {
        color: #5D6975;
        width: 100%;
        height: 30px;
        position: absolute;
        bottom: 0;
        border-top: 1px solid #C1CED9;
        padding: 8px 0;
        text-align: center;
    }
</style>
<body>
<header class="clearfix">

<h4>Invoice</h4>
    <div id="logo">
        <span> <img src="{{asset('files/admin/images/logo.jpg')}}"></span>
        <p style="float: right">
            <a href="https://www.facebook.com/Olpokenakata" style="color: deepskyblue">facebook.com/Olpokenakata</a>
        </p>

    </div>
<hr style="color: white">

    <div id="company" class="clearfix">
        <div id="orderid">Order ID:  <b>#EC-{{$show->id}}</b></div>
        <div><span>Payment type</span> {{strtoupper($show->payment_method)}}</div>
        <div><span>Payment status</span>@if($show->payment_method =='cash_in') Cash on delivery @elseif($show->is_paid == 0) Unpaid @else Paid @endif</div>
        <div><span>Order placed</span> {{date_format($show->created_at,'d-m-Y')}}</div>
    </div>

    <div id="project">

        <div><b>Name</b>: {{$show->name}} </div>
        <div><b>Phone</b>: 0{{$show->phone}} <br /> <b>Email</b>: {{$show->email}}</div>
        <div><b>Address</b>: {{$show->district}}, {{$show->upazilla}} | {{$show->full_address}}</div>
        <div></div>

    </div>
</header>
<main>
    <table>
        <thead>
        <tr>
            <th class="service">Product</th>
            <th>PRICE</th>
            <th>Quantity</th>
            <th>TOTAL</th>
        </tr>
        </thead>
        <tbody>
        @php
            //ekhan theke ami $total_price variable ta dhorsi
                $total_price=0;
        @endphp
        @foreach($show->cart as $cart)
        <tr>
            <td class="service">{{$cart->product->title}}</td>
              <td class="unit">{{$cart->product->offer_price}} Tk</td>
            <td class="qty">{{$cart->product_qty}} pcs </td>
            <td class="total">{{ ($cart->product->offer_price)*($cart->product_qty) }} Tk</td>
            @php
                $total_price += ($cart->product_qty)*($cart->product->offer_price);
            @endphp
        </tr>
        @endforeach


        <tr>
            <td colspan="3">SUBTOTAL</td>
            <td class="total">{{$total_price}} Tk</td>
        </tr>

        <tr>
            <td colspan="3">Delivery charge</td>
            <td class="total">{{$cart->order->shipping_cost}} Tk</td>
        </tr>

        <tr>
            <td colspan="3" class="grand total">GRAND TOTAL</td>
            <td class="grand total">{{($total_price)+($cart->order->shipping_cost)}} Tk</td>
        </tr>

        </tbody>
    </table>
    <div id="notices" style="margin-top: 100px">

        <span style="border-top: 1px solid grey;float: left">Signature of Customer.</span>
        <span style="border-top: 1px solid grey;float: right">Signature of Authority.</span>
    </div>
</main>
<footer>
    Does your product has Warrenty? Confirm that the Warrenty seal is placed. Keep the invoice safe for Warrenty issues.
</footer>
</body>
</html>
