

<!doctype html>
<html lang="en" class="fixed left-sidebar-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Admin panel</title>
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('files/admin/favicon/apple-icon-120x120.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('files/admin/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('files/admin/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('files/admin/favicon/favicon-16x16.png')}}">
    <!--load progress bar-->
    <script src="{{asset('files/admin/vendor/pace/pace.min.js')}}"></script>
    <link href="{{asset('files/admin/vendor/pace/pace-theme-minimal.css')}}" rel="stylesheet" />

    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{asset('files/admin/vendor/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('files/admin/vendor/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('files/admin/vendor/animate.css/animate.css')}}">
    <!--SECTION css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.4/css/responsive.bootstrap.min.css">

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <!-- ========================================================= -->
    <!--Notification msj-->
    <link rel="stylesheet" href="{{asset('files/admin/vendor/toastr/toastr.min.css')}}">
    <!--Magnific popup-->
    <link rel="stylesheet" href="{{asset('files/admin/vendor/magnific-popup/magnific-popup.css')}}">
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{asset('files/admin/stylesheets/css/style.css')}}">




</head>

<body>
<div class="wrap">
    <!-- page HEADER -->
    <!-- ========================================================= -->
    <div class="page-header">
        <!-- LEFTSIDE header -->
        <div class="leftside-header">
            <div class="logo">
                <a href="{{route('admin')}}" class="on-click">
                    <img alt="logo" src="{{asset('files/admin/images/header-logo.png')}}" >
                </a>
            </div>
            <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
                <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>
        <!-- RIGHTSIDE header -->
        <div class="rightside-header">
            <div class="header-middle"></div>
            <!--SEARCH HEADERBOX-->
            <div class="header-section" id="search-headerbox">
                <input type="text" name="search" id="search" placeholder="Search...">
                <i class="fa fa-search search" id="search-icon" aria-hidden="true"></i>
                <div class="header-separator"></div>
            </div>
            <!--NOCITE HEADERBOX-->

            <!--USER HEADERBOX -->
            <div class="header-section" id="user-headerbox">
                <div class="user-header-wrap">
                    <div class="user-photo">
                        <img alt="profile photo" src="{{asset('files/admin/images/avatar/avatar_user.jpg')}}" >
                    </div>
                    <div class="user-info">
                        <span class="user-name">{{Auth::User()->name}}</span>
                        <span class="user-profile">Admin</span>
                    </div>
                    <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                    <i class="fa fa-minus icon-close" aria-hidden="true"></i>
                </div>
                <div class="user-options dropdown-box">
                    <div class="drop-content basic">
                        <ul>
                            <li> <a href="pages_user-profile.html"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                            <li> <a href="pages_lock-screen.html"><i class="fa fa-lock" aria-hidden="true"></i> Lock Screen</a></li>
                            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Configurations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-separator"></div>
            <!--Log out -->
            <div class="header-section">
                <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-toggle="tooltip" data-placement="left" title="Logout"><i class="fa fa-sign-out log-out" aria-hidden="true"></i></a>
                <form method="post" action="{{route('logout')}}" id="logout-form" style="display: none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <!-- page BODY -->
    <!-- ========================================================= -->
    <div class="page-body">
        <!-- LEFT SIDEBAR -->
        <!-- ========================================================= -->
        <div class="left-sidebar">
            <!-- left sidebar HEADER -->
            <div class="left-sidebar-header">
                <div class="left-sidebar-title">Navigation</div>
                <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                    <span></span>
                </div>
            </div>
            <!-- NAVIGATION -->
            <!-- ========================================================= -->
            <div id="left-nav" class="nano">
                <div class="nano-content">
                    <nav>
                        <ul class="nav nav-left-lines" id="main-nav">
                            <!--HOME-->
                            <li class="{{request()->is('admin') ? 'active-item':'' }} "><a href="{{route('admin')}}"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a></li>

                            <!--CHARTS-->
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-list-alt" aria-hidden="true"></i><span>Category</span> </a>
                                <ul class="nav child-nav level-1">
                                    <li class="{{request()->is('category/add-category') ? 'active-item':'' }} "><a href="{{route('add-category')}}">Add Category</a></li>
                                    <li class="{{request()->is('category/manage-category') ? 'active-item':'' }} "> <a href="{{route('manage-category')}}">Manage Category</a></li>
                                    <li><a href=""></a></li>
                                </ul>

                            </li>
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-list-alt" aria-hidden="true"></i><span>Group item</span> </a>
                                <ul class="nav child-nav level-1">
                                    <li class="{{request()->is('group/add-groupitem') ? 'active-item':'' }} "><a href="{{route('add-groupitem')}}">Add Group item</a></li>
                                    <li class="{{request()->is('group/manage-groupitem') ? 'active-item':'' }} "> <a href="{{route('manage-groupitem')}}">Manage Group item</a></li>
                                    <li class="{{request()->is('group/manage-subgroupitem','group/add-subgroupitem') ? 'active-item':'' }} "> <a href="{{route('manage-subgroupitem')}}">Manage Sub Group item</a></li>

                                </ul>

                            </li>

                            <li class="has-child-item close-item">
                                <a><i class="fa fa-list-alt" aria-hidden="true"></i><span>Slider Image</span> </a>
                                <ul class="nav child-nav level-1">
                                    <li class="{{request()->is('group/manage-slider') ? 'active-item':'' }} "><a href="{{route('manage-sliderimage')}}">Manage Slider Image</a></li>

                                </ul>

                            </li>

                            <li class="has-child-item close-item">
                                <a><i class="fa fa-list-alt" aria-hidden="true"></i><span>Product</span> </a>
                                <ul class="nav child-nav level-1">
                                    <li class="{{request()->is('productt/add-product') ? 'active-item':'' }} "><a href="{{route('add-product')}}">add product</a></li>

                                </ul>

                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- CONTENT -->
        <!-- ========================================================= -->
        <div class="content">
            <!-- content HEADER -->
            <!-- ========================================================= -->
            <div class="content-header">
                <!-- leftside content header -->
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{route('admin')}}">Home</a></li>
                    </ul>
                </div>
            </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
            @yield('content')
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->


            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

        <!-- RIGHT SIDEBAR -->
        <!-- =========================================================
        <div class="right-sidebar">
            <div class="right-sidebar-toggle" data-toggle-class="right-sidebar-opened" data-target="html">
                <i class="fa fa-cog fa-spin" aria-hidden="true"></i>
            </div>-->

</div>
<!--BASIC scripts-->
<!-- ========================================================= -->
<script src="{{asset('files/admin/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
<script src="{{asset('files/admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('files/admin/vendor/nano-scroller/nano-scroller.js')}}"></script>
<!--TEMPLATE scripts-->
<!-- ========================================================= -->
<script src="{{asset('files/admin/javascripts/template-script.min.js')}}"></script>
<script src="{{asset('files/admin/javascripts/template-init.min.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>
    $.validate({
        lang: 'es'
    });
</script>

<script>
//change status of category
    $('body').on('change', '#category_status', function () {
        var id = $(this).attr('data-id');
        if (this.checked) {
            var category_status = 1;
        } else {
            var category_status = 0;
        }
        $.ajax({
            url: 'category-status/' + id + '/' + category_status,
            method: 'get',
            success: function (result) {
                console.log(result);
            }
        });

    });
//change status of groupitem
    $('body').on('change', '#groupitem-status', function () {
        var id = $(this).attr('data-id');
        if (this.checked) {
            var groupitem_status = 1;
        } else {
            var groupitem_status = 0;
        }
        $.ajax({
            url: 'groupitem-status/' + id + '/' + groupitem_status,
            method: 'get',
            success: function (result) {
                console.log(result);
            }
        });

    });

</script>
<script>
    /*  $('body').on('click', '#deleteajax', function () {
          var id = $(this).attr('data-id');
          if (confirm('Are you?')) {
              $.ajax({
                  url: 'category-deleteajax/' + id,
                  method: 'get',
                  data: {id: id},
                  success: function (data) {

                      console.log(data);
                      setTimeout(function () {
                          alert('Deleted');
                          location.reload();
                          // $('#example').DataTable().ajax.reload();
                      },1000);

                  }

              });
          }
      });
      */

</script>

<script>
    //javascript function to get subgroupitem from groupitem with holding there id.
    $(document).ready(function(){
        $("#grouptime").change(function(){
            // alert($(this).val())
            var id=$(this).val()            //get the `id` of groupname
            $(".subgrpitem-option").hide()  //keep all the subgrpitem hide
            $(`.group${id}`).show()         //just show the `subgrp_name`,`id` based on parent `id`

        })
    })
</script>


<!-- SECTION script and examples-->
<!-- Datatable -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.4/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.4/js/responsive.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            responsive: true
        } );

        new $.fn.dataTable.FixedHeader( table );
    } );
</script>



<!-- ========================================================= -->
<!--Notification msj-->
<script src="{{asset('files/admin/vendor/toastr/toastr.min.js')}}"></script>
<!--morris chart-->
<script src="{{asset('files/admin/vendor/chart-js/chart.min.js')}}"></script>
<!--Gallery with Magnific popup-->
<script src="{{asset('files/admin/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<!--Examples-->
<script src="{{asset('files/admin/javascripts/examples/dashboard.js')}}"></script>





</body>

</html>
