

<!-------------------------------------Header and footer section-----(Connected with:views/website.home)------------------------------------>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Flipmart premium HTML5 & CSS3 Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('files/website/css/bootstrap.min.css')}}">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{asset('files/website/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('files/website/css/blue.css')}}">
    <link rel="stylesheet" href="{{asset('files/website/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('files/website/css/owl.transitions.css')}}">
    <link rel="stylesheet" href="{{asset('files/website/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('files/website/css/rateit.css')}}">
    <link rel="stylesheet" href="{{asset('files/website/css/bootstrap-select.min.css')}}">




    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{asset('files/website/css/font-awesome.css')}}">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">



                <div class="clearfix"></div>
            </div><!-- /.header-top-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo">
                        <a href="{{route('home')}}">

                            <img src="{{asset('files/website/images/logo.png')}}" alt="">

                        </a>
                    </div><!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->				</div><!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                    <!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form>
                            <div class="control-group">

                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown">

                                        <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>

                                        <ul class="dropdown-menu" role="menu" >


                                            <li role="presentation"><a role="menuitem" tabindex="-1" href=""></a>as</li>


                                        </ul>
                                    </li>
                                </ul>

                                <input class="search-field" placeholder="Search here..." />

                                <a class="search-button" href="#" ></a>

                            </div>
                        </form>
                    </div><!-- /.search-area -->
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->				</div><!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">

                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                    <div class="dropdown dropdown-cart">

                        <a href="{{route('cart')}}" class="dropdown-toggle lnk-cart">
                            <div class="items-cart-inner">
                                <div class="basket">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>

                                <div class="basket-item-count"><span class="count" id="">{{\App\cart::totalitems()}}</span></div>
                                <div class="total-price-basket">
                                    <span class="lbl">cart </span>
                                    <!--<span class="total-price">
						<span class="sign">$</span><span class="value">600.00</span>
					</span>-->
                                </div>


                            </div>
                        </a>
                     <!--   <ul class="dropdown-menu">
                            <li>
                                <div class="cart-item product-summary">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="image">
                                                <a href="detail.html"><img src="{//{asset('files/website/images/cart.jpg')}}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">

                                            <h3 class="name"><a href="index8a95.html?page-detail">Simple Product</a></h3>
                                            <div class="price">$600.00</div>
                                        </div>
                                        <div class="col-xs-1 action">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div> /.cart-item
                                <div class="clearfix"></div>
                                <hr>

                                <div class="clearfix cart-total">
                                    <div class="pull-right">

                                        <span class="text">Sub Total :</span><span class='price'>$600.00</span>

                                    </div>
                                    <div class="clearfix"></div>

                                    <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                </div><-- /.cart-total->


                            </li>
                        </ul> -->

                        <!-- /.dropdown-menu-->
                    </div><!-- /.dropdown-cart -->

                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
            </div><!-- /.row -->

        </div><!-- /.container -->

    </div><!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown yamm-fw">
                                    <a href="{{route('home')}}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a>

                                </li>

                                <li class="dropdown yamm mega-menu">
                                    <a href="{{route('home')}}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown"></a>
                                    <ul class="dropdown-menu container">
                                        <li>
                                            <div class="yamm-content ">
                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">

                                                        <ul class="links">
                                                            <li><a href=""></a></li>


                                                        </ul>
                                                    </div><!-- /.col -->



                                                </div>
                                            </div>

                                        </li>
                                    </ul>

                                </li>


                              <!--  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Pages</a>
                                    <ul class="dropdown-menu pages">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">

                                                    <div class="col-xs-12 col-menu">
                                                        <ul class="links">
                                                            <li><a href="home.html">Home</a></li>
                                                            <li><a href="category.html">Category</a></li>
                                                            <li><a href="detail.html">Detail</a></li>
                                                            <li><a href="shopping-cart.html">Shopping Cart Summary</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="blog.html">Blog</a></li>
                                                            <li><a href="blog-details.html">Blog Detail</a></li>
                                                            <li><a href="contact.html">Contact</a></li>
                                                            <li><a href="sign-in.html">Sign In</a></li>
                                                            <li><a href="my-wishlist.html">Wishlist</a></li>
                                                            <li><a href="terms-conditions.html">Terms and Condition</a></li>
                                                            <li><a href="track-orders.html">Track Orders</a></li>
                                                            <li><a href="product-comparison.html">Product-Comparison</a></li>
                                                            <li><a href="faq.html">FAQ</a></li>
                                                            <li><a href="404.html">404</a></li>

                                                        </ul>
                                                    </div>



                                                </div>
                                            </div>
                                        </li>



                                    </ul>
                                </li>
                                <li class="dropdown  navbar-right special-menu">
                                    <a href="#">Todays offer</a>
                                </li>-->


                            </ul><!-- /.navbar-nav -->
                            <div class="clearfix"></div>
                        </div><!-- /.nav-outer -->
                    </div><!-- /.navbar-collapse -->


                </div><!-- /.nav-bg-class -->
            </div><!-- /.navbar-default -->
        </div><!-- /.container-class -->

    </div><!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->

</header>

@yield('content')



<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">


    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Contact Us</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class="toggle-footer" style="">
                            <li class="media">
                                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                            <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                                </div>
                                <div class="media-body">
                                    <p>ThemesGround, 789 Main rd, Anytown, CA 12345 USA</p>
                                </div>
                            </li>

                            <li class="media">
                                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                                </div>
                                <div class="media-body">
                                    <p>+(888) 123-4567<br>+(888) 456-7890</p>
                                </div>
                            </li>

                            <li class="media">
                                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                                </div>
                                <div class="media-body">
                                    <span><a href="#">flipmart@themesground.com</a></span>
                                </div>
                            </li>

                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Customer Service</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="Contact us">My Account</a></li>
                            <li><a href="#" title="About us">Order History</a></li>
                            <li><a href="#" title="faq">FAQ</a></li>
                            <li><a href="#" title="Popular Searches">Specials</a></li>
                            <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Corporation</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a title="Your Account" href="#">About us</a></li>
                            <li><a title="Information" href="#">Customer Service</a></li>
                            <li><a title="Addresses" href="#">Company</a></li>
                            <li><a title="Addresses" href="#">Investor Relations</a></li>
                            <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Why Choose Us</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                            <li><a href="#" title="Blog">Blog</a></li>
                            <li><a href="#" title="Company">Company</a></li>
                            <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                            <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-padding social">
                <ul class="link">
                    <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
                    <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
                    <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
                    <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
                    <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
                    <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
                    <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="clearfix payment-methods">
                    <ul>
                        <li><img src="{{asset('files/website/images/payments/bkash.png')}}" alt=""></li>
                        <li><img src="{{asset('files/website/images/payments/rocket.png')}}" alt=""></li>
                        <li><img src="{{asset('files/website/images/payments/nagad.png')}}" alt=""></li>
                        <li><img src="{{asset('files/website/images/payments/4.png')}}" alt=""></li>
                        <li><img src="{{asset('files/website/images/payments/3.png')}}" alt=""></li>
                    </ul>
                </div><!-- /.payment-methods -->
            </div>
        </div>
    </div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= -->


<!-- For demo purposes – can be removed on production -->


<!-- For demo purposes – can be removed on production : End -->

<!-- JavaScripts placed at the end of the document so the pages load faster -->


<script src="{{asset('files/website/js/jquery-1.11.1.min.js')}}"></script>

<script src="{{asset('files/website/js/bootstrap.min.js')}}"></script>

<script src="{{asset('files/website/js/bootstrap-hover-dropdown.min.js')}}"></script>
<script src="{{asset('files/website/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('files/website/js/echo.min.js')}}"></script>
<script src="{{asset('files/website/js/jquery.easing-1.3.min.js')}}"></script>
<script src="{{asset('files/website/js/bootstrap-slider.min.js')}}"></script>
<script src="{{asset('files/website/js/jquery.rateit.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/website/js/lightbox.min.js')}}"></script>
<script src="{{asset('files/website/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('files/website/js/wow.min.js')}}"></script>
<script src="{{asset('files/website/js/scripts.js')}}"></script>

<script>
    //javascript function to get subgroupitem from groupitem with holding there id.
    $(document).ready(function(){
        $(".total-option").hide()

    })

    function totalcost(){
        var e = document.getElementById("divison");
        var fair = e.options[e.selectedIndex].value;
        var cost =  document.getElementById("cart_cost").innerText
        document.getElementById("delivery_charge").innerText = fair

        // alert( parseFloat(fair) + parseFloat(cost) )
        var result  = parseFloat(fair) + parseFloat(cost)
        var result2  = parseFloat(fair) + parseFloat(cost)
        document.getElementById("total_cost").innerHTML = result
        document.getElementById("total_cost11").innerText = result2
    }
</script>
<script>

    $('#paymentt').change(function () {
        $pay=$('#paymentt').val()
        if ($pay == '0'){
            $('#payment-cash_in').addClass('hidden');
            $('#bks').addClass('hidden');
            $('#payment-bkash').addClass('hidden');
            $('#payment-rocket').addClass('hidden');
            $('#payment-nagad').addClass('hidden');
            $('#trx_id').addClass('hidden');
        }
        if ($pay == 'cash_in'){
            $('#payment-cash_in').removeClass('hidden');
            $('#bks').addClass('hidden');
            $('#trx_id').addClass('hidden');
            $('#payment-bkash').addClass('hidden');
            $('#payment-rocket').addClass('hidden');
            $('#payment-nagad').addClass('hidden');
        }
        if($pay == 'bkash')
        {
            $('#payment-bkash').removeClass('hidden');
            $('#trx_id').removeClass('hidden');
            $('#bks').removeClass('hidden');

            //$('#rkt').addClass('hidden');
            //$('#ngd').addClass('hidden');
            $('#payment-cash_in').addClass('hidden');
            $('#payment-rocket').addClass('hidden');
            $('#payment-nagad').addClass('hidden');
        }
        if($pay == 'rocket')
        {
            $('#payment-rocket').removeClass('hidden');
            $('#trx_id').removeClass('hidden');
            //$('#rkt').removeClass('hidden');

            $('#bks').removeClass('hidden');
            //$('#ngd').addClass('hidden');
            $('#payment-bkash').addClass('hidden');
            $('#payment-cash_in').addClass('hidden');
            $('#payment-nagad').addClass('hidden');
        }
        if($pay == 'nagad')
        {
            $('#payment-nagad').removeClass('hidden');
            $('#trx_id').removeClass('hidden');
            //$('#ngd').removeClass('hidden');

            $('#bks').removeClass('hidden');
            //$('#rkt').addClass('hidden');
            $('#payment-bkash').addClass('hidden');
            $('#payment-cash_in').addClass('hidden');
            $('#payment-rocket').addClass('hidden');
        }
        //$('#paymentdiv').removeClass('hidden');
    })
</script>
<script>
   /* $.ajaxSetup({
        headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    function addtocart(product_id) {
        //alert(product_id)

        $.post( "",
            {
                product_id: product_id

            })
            .done(function( data ) {
                data = json.parse(data);
                if (data.status == 'success'){
                    $('#totalitems').html(data.totalitems);

                }

            });
    }*/
</script>


</body>

</html>
