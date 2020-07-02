@extends('layout.websitelayout')
@section('content')
<!-- ============================================== HEADER ============================================== -->


<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a style="color:black" href="{{route('home')}}">Home</a></li>
                <li class='active'>Shopping Cart</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
    <div class="container">
        @include('admin.messageshow')
        <div class="row ">
            <div class="shopping-cart">
                <div class="shopping-cart-table ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="cart-romove item">Si no</th>
                                <th class="cart-description item">Image</th>
                                <th class="cart-product-name item">Product Name</th>
                                <th class="cart-qty item">Quantity</th>
                                <th class="cart-sub-total item">Subtotal</th>
                                <th class="cart-total last-item">Grandtotal</th>
                                <th class="cart-romove item">Remove</th>
                            </tr>
                            </thead><!-- /thead -->
                            <tfoot>

                            <tr>

                                <td colspan="7">
                                    <div class="shopping-cart-btn">
							<span class="">
								<a href="{{route('home')}}" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
								<a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a>
							</span>
                                    </div><!-- /.shopping-cart-btn -->
                                </td>
                            </tr>
                            </tfoot>

                            <tbody>
                            @php
                            $total_price=0;
                            @endphp
                            @foreach(\App\cart::totalcarts() as $cart)

                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td class="cart-image">
                                    <a class="entry-thumbnail" href="detail.html">
                                        <img src="{{asset('files/uploads/'.$cart->product->image)}}" alt="">
                                    </a>
                                </td>
                                <td class="cart-product-name-info">
                                    <h4 class='cart-product-description'><a href="detail.html">{{$cart->product->title }}</a></h4>
                                    <!--  <div class="row">
                                          <div class="col-sm-4">
                                              <div class="rating rateit-small"></div>
                                          </div>
                                          <div class="col-sm-8">
                                              <div class="reviews">
                                                  (06 Reviews)
                                              </div>
                                          </div>
                                      </div> /.row
                                    <div class="cart-product-info">
                                        <span class="product-color">COLOR:<span>Blue</span></span>
                                    </div>-->
                                </td>


                                <td class="cart-product-quantity">
                                        <form class="form-inline" method="post" action="{{route('cart-update',$cart->id)}}">
                                            @csrf
                                            <input type="hidden" name="id">
                                            <input class="" type="number" min="1" name="product_qty" value="{{$cart->product_qty}}" style="max-width:50px">
                                            <button class="btn-group-sm btn-success" type="submit">&#10004</button>
                                        </form>
                                </td>

                                <td class="cart-product-sub-total"><span class="cart-sub-total-price">৳ {{$cart->product->offer_price}}</span></td>
                                @php
                                    $total_price += ($cart->product_qty)*($cart->product->offer_price);
                                @endphp
                                <td class="cart-product-grand-total"><span class="cart-grand-total-price">৳ {{($cart->product_qty)*($cart->product->offer_price)}}</span></td>
                                <td class="romove-item"><a href="{{route('cart-delete',$cart->id)}}" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>

                            </tr>


                            @endforeach

                            </tbody><!-- /tbody -->
                        </table><!-- /table -->
                    </div>
                </div><!-- /.shopping-cart-table -->
                <!--  <div class="col-md-4 col-sm-12 estimate-ship-tax">
                      <table class="table">
                          <thead>
                          <tr>
                              <th>
                                  <span class="estimate-title">Estimate shipping and tax</span>
                                  <p>Enter your destination to get shipping and tax.</p>
                              </th>
                          </tr>
                          </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label class="info-title control-label">Country <span>*</span></label>

                                </div>
                                <div class="form-group">
                                    <label class="info-title control-label">State/Province <span>*</span></label>

                                </div>
                                <div class="form-group">
                                    <label class="info-title control-label">Zip/Postal Code</label>
                                    <input type="text" class="form-control unicase-form-control text-input" placeholder="">
                                </div>
                                <div class="pull-right">
                                    <span>hi</span>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div> /.estimate-ship-tax -->

             <!--   <div class="col-md-4 col-sm-12 estimate-ship-tax">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <span class="estimate-title">Discount Code</span>
                                <p>Enter your coupon code if you have one..</p>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control unicase-form-control text-input" placeholder="You Coupon..">
                                </div>
                                <div class="clearfix pull-right">
                                    <button type="submit" class="btn-upper btn btn-primary">APPLY COUPON</button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>.....estimate-ship-tax -->

                <div class="col-md-4 col-sm-12 cart-shopping-total">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>

                                <div class="cart-grand-total">
                                    Grand Total<span class="inner-left-md"><b>৳ {{$total_price}}</b></span>
                                </div>

                            </th>
                        </tr>
                        </thead><!-- /thead -->
                        <tbody>
                        <tr>
                            <td>
                                <div class="cart-checkout-btn pull-right">
                                    <a href="{{route('checkout')}}" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</a>
                                    <span style="color: red;margin-top: 2px">*Delivery Charge will be added with total price</span>
                                </div>
                            </td>
                        </tr>
                        </tbody><!-- /tbody -->
                    </table><!-- /table -->
                </div><!-- /.cart-shopping-total -->			</div><!-- /.shopping-cart -->
        </div> <!-- /.row -->

        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->


@endsection



