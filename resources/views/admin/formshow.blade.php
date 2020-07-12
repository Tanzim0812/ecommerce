@extends('layouts.app')
@section('content')

    @if($showw->cart->count() > 0)
    <div class="table-responsive">
        <table class="table table-bordered" style="border:1px solid wheat;max-width: 50%">
            <thead>
            <tr>
                <th class="cart-romove item">Cart no</th>
                <th class="cart-romove item">Product Id</th>
                <th class="cart-description item">Image</th>
                <th class="cart-product-name item">Product Name</th>
                <th class="cart-qty item">Quantity</th>
                <th class="cart-total last-item">Grandtotal</th>
                <th class="cart-total last-item">Delete</th>
            </tr>
            </thead><!-- /thead -->
            <tbody>
            @php
                //ekhan theke ami $total_price variable ta dhorsi
                    $total_price=0;
            @endphp

            @foreach($showw->cart as $cart)
                <tr>
                    <td>{{$cart->id}}</td>
                    <td>#IP-{{$cart->product->id}}</td>
                    <td class="cart-image">
                        <a class="entry-thumbnail" href="{{asset('files/uploads/'.$cart->product->image)}}" target="_blank">
                            <img style="width: 50px;height: 50px" src="{{asset('files/uploads/'.$cart->product->image)}}" alt="">
                        </a>
                    </td>
                    <td>{{$cart->product->title}}</td>
                    <td>
                        <form class="form-inline" method="post" action="{{route('update-order',$cart->id)}}">
                            @csrf

                            <input class="" type="number" min="1" name="product_qty" value="{{$cart->product_qty}}" style="max-width:50px">
                            <button class="btn-group-sm btn-success" type="submit">&#10004</button>
                        </form>
                    </td>
                    <td>{{$cart->product_qty*$cart->product->offer_price}}</td>
                    @php
                        $total_price += ($cart->product_qty)*($cart->product->offer_price);
                    @endphp
                    <td class="remove-item">
                        <a href="{{route('delete-order',$cart->id)}}" onclick="return confirm('Are you delete it?')" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a>
                    </td>






                </tr>

            @endforeach
            <span class="alert-success">Total {{$total_price}}</span>

            </tbody>

        </table>
    </div>
    @else
        <h3>nothing here</h3>
    @endif
@endsection
