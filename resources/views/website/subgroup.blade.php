@extends('layout.websitelayout')
@section('content')


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
                            <div class="product-image">
                                <div id="discountshow">
                                    <b>{{sprintf('%.2f',(($pro->previous_price-$pro->offer_price)/$pro->previous_price)*100) }} % off</b>
                                </div>


                                <div class="image ">
                                    <a href="{{route('product',$pro->id)}}">
                                        <img alt="" src="{{asset('files/uploads/'.$pro->image)}}">
                                    </a>
                                </div>

                                <div class="product-info text-left">
                                    <h3 class="name"><a href="{{route('product',$pro->id)}}">{{$pro->title}}</a></h3>
                                    <div class="product-price">

                                        <span class="price">{{$pro->offer_price}} ৳</span>
                                        <span class="price-before-discount">{{$pro->previous_price}} ৳</span>
                                    </div>
                                </div>

                                    <div class="action">
                                        <a class="lnk btn btn-primary" href="#">Add To Cart</a>
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
