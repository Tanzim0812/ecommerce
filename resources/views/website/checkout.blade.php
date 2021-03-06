@extends('layout.websitelayout')
@section('content')
    <!-- ============================================== HEADER ============================================== -->


    <!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a style="color:black" href="{{route('home')}}">Home</a></li>
                    <li class='active'>Checkout</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
        <div class="container">
            @include('admin.messageshow')
            <div class="row ">
                <div class="shopping-cart">
                    <div class="shopping-cart-table">
                        <div class="col-md-6 col-lg-6">
                            <h4 class="text-center" style="color:lightslategray"><i class="glyphicon glyphicon-shopping-cart"></i> Cart items</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered" style="border:1px solid wheat;max-width: 50%">
                                    <thead>
                                    <tr>
                                        <th class="cart-romove item">Si no</th>
                                        <th class="cart-description item">Image</th>
                                        <th class="cart-product-name item">Product Name</th>
                                        <th class="cart-qty item">Quantity</th>
                                        <th class="cart-total last-item">Grandtotal</th>
                                    </tr>
                                    </thead><!-- /thead -->
                                    <tbody>
                                    @php
                                    //ekhan theke ami $total_price variable ta dhorsi
                                        $total_price=0;
                                    @endphp

                                    @foreach(\App\cart::totalcarts() as $cart)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td class="cart-image">
                                            <a class="entry-thumbnail" href="{{asset('files/uploads/'.$cart->product->image)}}" target="_blank">
                                                <img style="width: 50px;height: 50px" src="{{asset('files/uploads/'.$cart->product->image)}}" alt="">
                                            </a>
                                        </td>
                                        <td>{{$cart->product->title}}</td>
                                        <td>{{$cart->product_qty}}</td>

                                        <td>{{$cart->product_qty*$cart->product->offer_price}}</td>
                                        @php
                                            $total_price += ($cart->product_qty)*($cart->product->offer_price);
                                        @endphp
                                    </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="cart-shopping-total">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>
                                            <div class="cart-grand-total">
                                                Product Price :
                                                <span class="inner-left-md">
                                                        <span id="cart_cost">{{$total_price}} ৳</span><!-- ei price hoilo ami koto takar shopping korsi-->
                                                </span>
                                            </div>
                                            <div class="cart-grand-total">
                                                Delivery Charge :
                                                <span class="inner-left-md">
                                                        <span id="delivery_charge">0 </span>৳
                                                </span>
                                            </div>
                                            <div class="cart-grand-total" style="color: #0f5d4d">
                                                Total Amount :
                                                <span class="inner-left-md"><b>
                                                        <span id="total_cost">{{$total_price}}</span>৳</b>
                                                    <!-- ei price hoilo amr deliverycharge+shopping cost shopping korsi-->

                                                </span>
                                            </div>

                                        </th>
                                    </tr>
                                    </thead><!-- /thead -->

                                </table><!-- /table -->







                                @foreach(\App\shippingcost::cost() as $co)
                                    <p class="{{'total'.$co->id}} total-option">
                                    </p>
                                @endforeach


                            </div>

                            <a style="margin-top: 2px" href="{{route('cart')}}" class="btn btn-upper btn-info pull-right outer-right-xs">Return to Cart</a>

                        </div>

                <!-------- address confirmation form------->

                        <div class="col-md-6 col-lg-6">
                            <div class="estimate-ship-tax">
                                <table class="table" style="background-color:antiquewhite">
                                    <thead>
                                    <tr>
                                        <th>
                                            <span class="estimate-title">Estimate shipping and tax</span>
                                            <p>Enter your destination to get shipping and tax.</p>
                                        </th>
                                    </tr>
                                    </thead><!-- /thead -->
                                    <tbody>
                                    <tr>
                                        <td>
                                            <form class="form-group" method="post" action="{{route('check-store')}}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="hidden" name="total_price" value="{{$total_price}}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="info-title control-label">Name <span>*</span></label>
                                                    <input type="text" name="name" class="form-control unicase-form-control text-input" value="{{\Illuminate\Support\Facades\Auth::check() ? \Illuminate\Support\Facades\Auth::user()->name : ''}}">
                                                </div>
                                                <div class="form-group">
                                                    <label class="info-title control-label">Phone <span>*</span></label>
                                                    <input type="tel" name="phone" class="form-control unicase-form-control text-input" value="{{Auth::check() ? Auth::user()->phone : ''}}" >
                                                    @error('phone')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label class="info-title control-label">Email </label>
                                                    <input type="email" name="email" class="form-control unicase-form-control text-input" value="{{ Auth::check() ? Auth::user()->email : ''}}">
                                                </div>
                                            <div class="form-group">
                                                <label class="info-title control-label">Division <span>*</span></label>
                                                <select onchange="totalcost()" class="form-control unicase-form-control selectpicker" name="shipping_cost" id="divison" >
                                                    <option value="0">--Select Division--</option>
                                                    @foreach(\App\shippingcost::cost() as $co)
                                                        <option value="{{$co->cost}}">{{$co->place}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label class="info-title control-label">District <span>*</span></label>
                                                <input type="text" name="district" class="form-control unicase-form-control text-input">
                                                @error('district')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                                <div class="form-group">
                                                    <label class="info-title control-label">Upazilla / Thana <span>*</span></label>
                                                    <input type="text" name="upazilla" class="form-control unicase-form-control text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label class="info-title control-label">Full address <span>*</span></label>
                                                    <input type="text" name="full_address" class="form-control unicase-form-control text-input" >
                                                </div>

                                            <div class="form-group">
                                                <label class="info-title control-label">Zip/Postal Code</label>
                                                <input type="text" name="postal_code" class="form-control unicase-form-control text-input" placeholder="">
                                            </div>
                                                <div class="form-group">
                                                    <label class="info-title control-label">Payment Method <span>*</span></label>
                                                    <select class="form-control unicase-form-control selectpicker" name="payment_method" id="paymentt" required >
                                                        <option value="0">--Select Payment Method--</option>
                                                        @foreach($payments as $row)
                                                            <option value="{{$row->shortname}}">{{$row->name}}</option>
                                                        @endforeach
                                                    </select>

                                                @foreach($payments as $row)
                                                    <div>
                                                        @if($row->shortname == 'cash_in')
                                                            <div id="payment-{{$row->shortname}}" class="hidden">
                                                                <h4>You will get your product in few days</h4>
                                                                <img class="img-responsive" src="{{asset('files/uploads/'.$row->image)}}" style="height: 100px;width: 300px">

                                                            </div>
                                                        @else
                                                            <div id="payment-{{$row->shortname}}" class="hidden">
                                                                <h4>Payment Type : {{$row->name}}</h4>
                                                                <img class="img-responsive" src="{{asset('files/uploads/'.$row->image)}}" style="height: 220px;width: 500px">
                                                                <div class="alert alert-success" >
                                                                    <h4>&#9755 Type <b>{{$row->dial_code}}</b>
                                                                        <br>&#9755 Select <b> {{$row->des}}</b> option
                                                                        <br>&#9755 Send the <u style="color: #3D3D3D">Total amount</u> to <b>{{$row->number}}</b>
                                                                        <br>&#9755 You will get a <i>transaction ID on return message</i>
                                                                        <br>&#9755 Type the transaction Id here</h4>
                                                                </div>
                                                                </div>

                                                        @endif
                                                    </div>
                                                @endforeach
                                                    <div class="alert alert-success hidden" id="bks">
                                                        <h5><u style="color: #3D3D3D">Total amount</u> you have to pay </h5><b>
                                                        <span id="total_cost11"> {{$total_price}}</span> Tk.</b>
                                                    </div>
                                                    <input type="text" name="trx_id" id="trx_id" class="form-control unicase-form-control text-input hidden" placeholder="Transaction Id">

                                                </div>
                                                <div class="form-group">
                                                    <label class="info-title control-label">Message</label>
                                                    <textarea class="form-control unicase-form-control text-input" name="message"></textarea>
                                                </div>
                                            <div class="pull-right">
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                            </form>
                                        </td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- /.estimate-ship-tax -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection
