<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Pages</title>
    <link rel="icon" href="{!! asset('/storage/uploads/interface_images/icon.ico') !!}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/bootstrap/css/bootstrap.min.css')}}">
    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/admin_interface/css/font-awesome/font-awesome.min.css')}}">
    <!-- MetisMenu CSS -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/admin_interface/css/metisMenu/metisMenu.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/admin_interface/css/sb-admin/sb-admin-2.css')}}">
    <!-- Upload Css -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/admin_interface/css/uploads.css')}}">
    <!-- Style -->
    <link rel="stylesheet" type="text/css" media="all" href="{{URL::asset('public/admin_interface/css/admin_style.css')}}">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/admin_interface/css/datatables/dataTables.bootstrap.css')}}">


<!-- SCRIPT -->
    <!-- jQuery -->
    <script type="text/javascript" src="{{URL::asset('public/jquery/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('public/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Validate -->
    <script type="text/javascript" src="{{URL::asset('public/jquery/jquery.validate.min.js')}}"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{URL::asset('public/admin_interface/js/metisMenu/metisMenu.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{URL::asset('public/admin_interface/js/sb-admin-2.js')}}"></script>

    <!-- Ckeditor and Ckfinder -->
    <script type="text/javascript" src="{{URL::asset('public/ckeditor/ckeditor.js')}}" ></script>
    <script type="text/javascript" src="{{URL::asset('public/ckfinder/ckfinder.js')}}" ></script>

    <!-- /jQuery -->

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top admin_navbar" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('admin.index')}}">STUDYING ENGLISH</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- USER -->
               
                <!-- END USER -->

                <!-- Login and Register -->
                
                <!-- End Login and Register -->
            </ul>


            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <!-- Dashboard -->
                        <li>
                            <a href="{{route('home')}}"><i class="glyphicon glyphicon-home"></i> Home User</a>
                        </li>

                        <li>
                            <a href="{{route('admin.index')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <!-- Tables -->
                         <li>
                            <a href=""><i class="fa fa-table fa-fw "></i> Tables <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse in">
                                <li>
                                    <a href="{{route('admin.user.show')}}">Users</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.banhang.show')}}">Ban Hang</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.suachua.show')}}">Sua Chua</a>
                                </li>
                                <li>
                                    <a href="{{route('admin.lapgiativi.show')}}">Lap gia tivi</a>
                                </li>
                            </ul>
                        </li>

                        <!-- Forms Add  -->
                        <li>
                            <a href=""><i class="fa fa-edit fa-fw"></i> Add <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a data-toggle="modal" id="add_user_header">Users</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" id="add_cate_header">Categories</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" id="add_detail_header">Details</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

       <div id="page-wrapper">
            <!-- Show Flash Message -->
                <!-- Show Flash -->
                <div class="col-md-6 col-md-offset-3">

                </div>
                <script type="text/javascript">$('h3.flash').delay(3000).slideUp();</script>

            <!-- End Show Flash Message -->

            @yield('content')
        </div>

    </div>


        <!-- DataTables JavaScript -->
        <script type="text/javascript" src="{{URL::asset('public/admin_interface/js/datatables/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('public/admin_interface/js/datatables/dataTables.bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('public/admin_interface/js/datatables/dataTables.responsive.js')}}"></script>
        <!-- Admin JavaScript -->

        <script type="text/javascript" src="{{URL::asset('public/admin_interface/js/admin_user_checkbox.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('public/admin_interface/js/admin_banhang_checkbox.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('public/admin_interface/js/admin_suachua_checkbox.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('public/admin_interface/js/admin_lapgiativi_checkbox.js')}}"></script>



</body>
</html>