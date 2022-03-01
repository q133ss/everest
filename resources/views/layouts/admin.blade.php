<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/admin_assets/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/admin_assets/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/admin_assets/assets/libs/css/style.css">
    <link rel="stylesheet" href="/admin_assets/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="/admin_assets/assets/vendor/vector-map/jqvmap.css">
    <link rel="stylesheet" href="/admin_assets/assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css">
    <link rel="stylesheet" href="/admin_assets/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title> @yield('title') </title>
</head>

<body>
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="index.html">Everest</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item">
{{--                        <div id="custom-search" class="top-search-bar">--}}
{{--                            <input class="form-control" type="text" placeholder="Search..">--}}
{{--                        </div>--}}
                    </li>
{{--                    <li class="nav-item dropdown notification">--}}
{{--                        <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>--}}
{{--                        <ul class="dropdown-menu dropdown-menu-right notification-dropdown">--}}
{{--                            <li>--}}
{{--                                <div class="notification-title"> Notification</div>--}}
{{--                                <div class="notification-list">--}}
{{--                                    <div class="list-group">--}}
{{--                                        <a href="#" class="list-group-item list-group-item-action active">--}}
{{--                                            <div class="notification-info">--}}
{{--                                                <div class="notification-list-user-img"><img src="/admin_assets/assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>--}}
{{--                                                <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.--}}
{{--                                                    <div class="notification-date">2 min ago</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                        <a href="#" class="list-group-item list-group-item-action">--}}
{{--                                            <div class="notification-info">--}}
{{--                                                <div class="notification-list-user-img"><img src="/admin_assets/assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>--}}
{{--                                                <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham</span>is now following you--}}
{{--                                                    <div class="notification-date">2 days ago</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                        <a href="#" class="list-group-item list-group-item-action">--}}
{{--                                            <div class="notification-info">--}}
{{--                                                <div class="notification-list-user-img"><img src="/admin_assets/assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>--}}
{{--                                                <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository--}}
{{--                                                    <div class="notification-date">2 min ago</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                        <a href="#" class="list-group-item list-group-item-action">--}}
{{--                                            <div class="notification-info">--}}
{{--                                                <div class="notification-list-user-img"><img src="/admin_assets/assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>--}}
{{--                                                <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.--}}
{{--                                                    <div class="notification-date">2 min ago</div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <div class="list-footer"> <a href="#">View all notifications</a></div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown connection">--}}
{{--                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>--}}
{{--                        <ul class="dropdown-menu dropdown-menu-right connection-dropdown">--}}
{{--                            <li class="connection-list">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">--}}
{{--                                        <a href="#" class="connection-item"><img src="/admin_assets/assets/images/github.png" alt="" > <span>Github</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">--}}
{{--                                        <a href="#" class="connection-item"><img src="/admin_assets/assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">--}}
{{--                                        <a href="#" class="connection-item"><img src="/admin_assets/assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">--}}
{{--                                        <a href="#" class="connection-item"><img src="/admin_assets/assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">--}}
{{--                                        <a href="#" class="connection-item"><img src="/admin_assets/assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">--}}
{{--                                        <a href="#" class="connection-item"><img src="/admin_assets/assets/images/slack.png" alt="" > <span>Slack</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <div class="conntection-footer"><a href="#">More</a></div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/admin_assets/assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                <span class="status"></span><span class="ml-2">Available</span>
                            </div>
                            <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.index')}}" class="nav-link"><i class="fa fa-fw fa-user-circle"></i>Главная</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('admin.section_cat.index')}}" class="nav-link"><i class="fa fa-fw fa-user-circle"></i>Категории секций</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                            <div id="submenu-1" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                                        <div id="submenu-1-2" class="collapse submenu" style="">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="index.html">E Commerce Dashboard</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="ecommerce-product.html">Product List</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="ecommerce-product-single.html">Product Single</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="ecommerce-product-checkout.html">Product Checkout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard-finance.html">Finance</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="dashboard-sales.html">Sales</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                                        <div id="submenu-1-1" class="collapse submenu" style="">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="dashboard-influencer.html">Influencer</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="influencer-finder.html">Influencer Finder</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="influencer-profile.html">Influencer Profile</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid  dashboard-content">
            <!-- ============================================================== -->
            <!-- pagehader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h3 class="mb-2"> @yield('title') </h3>
                        <p class="pageheader-text">Lorem ipsum dolor sit ametllam fermentum ipsum eu porta consectetur adipiscing elit.Nullam vehicula nulla ut egestas rhoncus.</p>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- pagehader  -->
            <!-- ============================================================== -->
            @if (\Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {!! \Session::get('success') !!}
                </div>
            @endif
            @if (\Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {!! \Session::get('error') !!}
            </div>
            @endif
           @yield('content')
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
{{--        <div class="footer">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">--}}
{{--                        Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">--}}
{{--                        <div class="text-md-right footer-links d-none d-sm-block">--}}
{{--                            <a href="javascript: void(0);">About</a>--}}
{{--                            <a href="javascript: void(0);">Support</a>--}}
{{--                            <a href="javascript: void(0);">Contact Us</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 js-->
<script src="/admin_assets/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstrap bundle js-->
<script src="/admin_assets/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js-->
<script src="/admin_assets/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- chartjs js-->
<script src="/admin_assets/assets/vendor/charts/charts-bundle/Chart.bundle.js"></script>
<script src="/admin_assets/assets/vendor/charts/charts-bundle/chartjs.js"></script>
<script src="/admin_assets/custom.js"></script>
<!-- main js-->
<script src="/admin_assets/assets/libs/js/main-js.js"></script>
<!-- jvactormap js-->
<script src="/admin_assets/assets/vendor/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="/admin_assets/assets/vendor/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- sparkline js-->
<script src="/admin_assets/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
<script src="/admin_assets/assets/vendor/charts/sparkline/spark-js.js"></script>
<!-- dashboard sales js-->
<script src="/admin_assets/assets/libs/js/dashboard-sales.js"></script>
</body>

</html>
