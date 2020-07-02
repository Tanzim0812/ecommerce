@extends('layout.websitelayout')
@section('content')

 @include('admin.messageshow')
<!-- ============================================== HEADER ============================================== -->


<!-- ============================================== HEADER : END ============================================== -->
<div class="product-comparison">
    <div>
        <h1 class="page-title text-center heading-title">Product List</h1>

        <div class="table-responsive">
            <table class="table compare-table inner-top-vs">
                <tbody>


                @foreach($subgroup->chunk(4) as $chunk) <!-- chunk is used to show 4 items per row -->

                <tr>

                    @foreach($chunk as $pro)
                        <td style="background-color: whitesmoke">

                            <div class="product">
                                <div class="product-image" style="background-color: #e6e6e6">
                                    <div id="discountshow">
                                        <b>{{sprintf('%.2f',(($pro->previous_price-$pro->offer_price)/$pro->previous_price)*100) }} % off</b>
                                    </div>


                                    <div class="image" >
                                        <a href="{{route('product',$pro->id)}}" target="_blank">
                                            <img alt="" style="width: 329px;height: 200px" src="{{asset('files/uploads/'.$pro->image)}}">
                                        </a>
                                    </div>

                                    <div class="product-info text-center">
                                        <h3 class="name"><strong><a href="{{route('product',$pro->id)}}">{{$pro->title}}</a></strong></h3>
                                    </div>
                                    <div class="product-price">

                                        <span class="price">{{$pro->offer_price}} ৳</span>
                                        <span class="price-before-discount">{{$pro->previous_price}} ৳</span>
                                    </div>

                                    <div class="action text-center">
                                        @include('layout.cart')
                                    </div>

                                </div>
                            </div>
                        </td>
                    @endforeach


                </tr>
                @endforeach



                </tbody></table>

        </div>






        </div>
    </div>

<!-- ============================================================= FOOTER ============================================================= -->

<!-- ============================================================= FOOTER : END============================================================= -->



@endsection
