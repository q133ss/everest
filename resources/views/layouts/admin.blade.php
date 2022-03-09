<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>@yield('title') | Панель администратора</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/admin_assets/assets/images/favicon.ico">

    <!-- App css -->
    <link href="/admin_assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin_assets/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/admin_assets/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin_assets/assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="/admin_assets/assets/js/modernizr.min.js"></script>

</head>


<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">

        <div class="slimscroll-menu" id="remove-scroll">

            <!-- LOGO -->
{{--            <div class="topbar-left">--}}
{{--                <a href="index.html" class="logo">--}}
{{--                            <span>--}}
{{--                                <img src="https://portfolio.codegamma.ru/projects/everest/img/logo.svg" alt="" height="22">--}}
{{--                            </span>--}}
{{--                    <i>--}}
{{--                        <img src="/admin_assets/assets/images/logo_sm.png" alt="" height="28">--}}
{{--                    </i>--}}
{{--                </a>--}}
{{--            </div>--}}

            <!-- User box -->
            <div class="user-box" style="padding: 35px 25px 25px 25px;">
                <div class="user-img">
                    <img src="/admin_assets/assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                </div>
                <h5><a href="#">Иван Иванов</a> </h5>
                <p class="text-muted">Администратор</p>
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <!--<li class="menu-title">Navigation</li>-->

                    <li>
                        <a href="{{route('admin.index')}}">
                            <i class="fi-air-play"></i><span> Главная </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('admin.orders')}}">
                            <i class="fi-air-play"></i><span> Заявки </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('admin.news.index')}}">
                            <i class="mdi mdi-newspaper"></i><span> Новости </span>
                        </a>
                    </li>

                    <li class="menu-title">Секции</li>
                    <li>
                        <a href="{{route('admin.section_cat.index')}}">
                            <i class="mdi mdi-collage"></i><span> Категории секций </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('admin.section.index')}}">
                            <i class="mdi mdi-dumbbell"></i><span> Секции </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('admin.trainer.index')}}">
                            <i class="mdi mdi-human-greeting"></i><span> Тренеры </span>
                        </a>
                    </li>

                    <li class="menu-title">Расписание</li>

                    <li>
                        <a href="#">
                            <i class="mdi mdi-calendar-blank"></i><span> Недели </span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="mdi mdi-calendar-text"></i><span> Расписание </span>
                        </a>
                    </li>

                    <li class="menu-title">Настройки</li>

                    <li>
                        <a href="#">
                            <i class="mdi mdi-settings"></i><span> Настройки </span>
                        </a>
                    </li>

{{--                    <li>--}}
{{--                        <a href="javascript: void(0);" class=""><i class="mdi mdi-account-multiple"></i> <span> Тренеры </span> <span class="menu-arrow"></span></a>--}}
{{--                        <ul class="nav-second-level" aria-expanded="false">--}}
{{--                            <li><a href="apps-calendar.html">Calendar</a></li>--}}
{{--                            <li><a href="apps-tickets.html">Tickets</a></li>--}}
{{--                            <li><a href="apps-taskboard.html">Task Board</a></li>--}}
{{--                            <li><a href="apps-task-detail.html">Task Detail</a></li>--}}
{{--                            <li><a href="apps-contacts.html">Contacts</a></li>--}}
{{--                            <li><a href="apps-projects.html">Projects</a></li>--}}
{{--                            <li><a href="apps-companies.html">Companies</a></li>--}}
{{--                            <li><a href="apps-file-manager.html">File Manager</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

                </ul>

            </div>
            <!-- Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <div class="content-page">

        <!-- Top Bar Start -->
        <div class="topbar">

            <nav class="navbar-custom">



                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="dripicons-menu"></i>
                        </button>
                    </li>
                    <li>
                        <div class="page-title-box">
                            <h4 class="page-title">@yield('title') </h4>
                        </div>
                    </li>

                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->



        <!-- Start Page content -->
        <div class="content">

            <div class="container-fluid">
                @if (\Session::has('success'))
                <div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {!! \Session::get('success') !!}
                </div>
                @endif

                @if (\Session::has('error'))
                <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {!! \Session::get('error') !!}
                </div>
                @endif

                @yield('content')
            </div>
            <!--- end row -->

        </div> <!-- container -->

    </div> <!-- content -->


</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->



<!-- jQuery  -->
<script src="/admin_assets/assets/js/jquery.min.js"></script>
<script src="/admin_assets/assets/js/popper.min.js"></script>
<script src="/admin_assets/assets/js/bootstrap.min.js"></script>
<script src="/admin_assets/assets/js/metisMenu.min.js"></script>
<script src="/admin_assets/assets/js/waves.js"></script>
<script src="/admin_assets/assets/js/jquery.slimscroll.js"></script>

<!-- App js -->
<script src="/admin_assets/assets/js/jquery.core.js"></script>
<script src="/admin_assets/assets/js/jquery.app.js"></script>
<script src="/admin_assets/custom.js"></script>

</body>
</html>
