<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin pizza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets-admin\images\logo-pizza.png')}}">

    <!-- App css -->
    <link href="{{ asset('assets-admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets-admin/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets-admin/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables/select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">


</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">

            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light change" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('assets-admin/images/users/avatar-4.jpg') }}" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                           {{$user_name}} <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h6 class="m-0">
                               Xin chào!
                            </h6>
                        </div>

                        <!-- item-->
                        <a href="{{route('admin.info')}}" class="dropdown-item notify-item">
                            <i class="dripicons-user"></i>
                            <span>Thông tin tài khoản</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="{{url('admin/logout')}}" class="dropdown-item notify-item">
                            <i class="dripicons-power"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

            </ul>

            <ul class="list-unstyled menu-left mb-0">

                <li class="float-left">
                    <button class="button-menu-mobile open-left disable-btn">
                        <i class="fe-menu"></i>
                    </button>
                </li>
                <li class="app-search d-none d-sm-block">
                    <form>
                        <div class="input-group">
                            <input style="background-color:#333333" type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!-- LOGO -->
                <a href="{{route('admin.dashboard')}}" class="logo text-center mb-4">
                    <span class="logo-lg">
                        <img src="{{asset('assets-admin\images\logo-pizza.png')}}" alt="" height="40">
                    </span>

                </a>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="{{route('admin.dashboard')}}">
                                <i class="fe-truck"></i>
                                <span> Đơn Hàng</span>
                            </a>
                        </li>

                        <!-- -- Nhân viên --- -->
                        <li>
                            <a href="javascript: void(0);">
                                <i class="fe-user"></i>
                                <span> Người dùng + nv </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">

                                <li>
                                    <a href="{{route('admin.user-management')}}">Người dùng</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.employee-management')}}">Nhân viên công ty</a>
                                </li>
                            </ul>
                        </li>



                        <li>
                            <a href="javascript: void(0);">
                                <i class="fe-shopping-cart"></i>
                                <span> Sản phẩm </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{route('admin.list-product')}}">Danh sách sản phẩm</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.view-category-product')}}">Danh mục sản phẩm</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.add-product')}}">Thêm sản phẩm</a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="fe-edit"></i>
                                <span> Bài viết </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{route('admin.list-post')}}">Danh sách bài viết</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.view-category-post')}}">Danh mục bài viết</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.add-post')}}">Thêm bài viết</a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="{{route('home')}}">
                                <span> Giao diện user</span>
                            </a>
                        </li>

                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>

        <!-- content -->
        @yield('content')

    </div>



    <script src="{{ asset('assets-admin/js/vendor.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('assets-admin/libs/chart-js/Chart.bundle.min.js') }}"></script>

    <!-- Sparkline charts -->
    <script src="{{ asset('assets-admin/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Dashboard js -->
    <script src="{{ asset('assets-admin/js/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets-admin/js/app.min.js') }}"></script>


    <!-- datatable js -->
    <script src="{{ asset('assets-admin/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/datatables/dataTables.select.min.js') }}"></script>

    <!-- Datatables init -->
    <script src="{{ asset('assets-admin/js/pages/datatables.init.js') }}"></script>
    <script src="{{asset('assets-admin/js/showimage-input.js')}}"></script>






</body>

</html>
