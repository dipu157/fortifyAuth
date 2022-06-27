<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
        <title>Admin Template</title>
        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- morris CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/2.0.46/css/materialdesignicons.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ asset('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- You can change the theme colors from here -->
        <link href="{{ asset('css/colors/blue.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/switchery/dist/switchery.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
        
        <script src="{{ asset('plugins/jquery/jquery.min.js') }} "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
        <link href="{{ asset('plugins/multiselect/css/multi-select.css') }} " rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/calendar/dist/fullcalendar.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        
        <style>
        .notify {
        position: relative;
        top: -12px;
        right: -9px;
        }
        </style>
    </head>
    <body class="fix-header fix-sidebar card-no-border">
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        
        <div id="main-wrapper">
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                            <!-- Logo icon --><b>
                            <img src="{{ asset('images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                            <img src="{{ asset('images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
                            </b><span>
                                <img src="{{ asset('images/logo-text.JPG') }}" alt="homepage" class="dark-logo" />
                            <img src="{{ asset('images/logo-light-text.png') }}" class="light-logo" alt="homepage" /></span> </a>
                        </div>
                        <div class="navbar-collapse">
                            <ul class="navbar-nav mr-auto mt-md-0">
                                <!-- This is  -->
                                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                                <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                                <li class="nav-item dropdown">
                                    
                                    <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                    </a>
                                    <div class="dropdown-menu mailbox scale-up-left">
                                        <ul>
                                            <li>
                                                <div class="drop-title">Expire Notifications</div>
                                            </li>
                                            <li>
                                                <div class="message-center">
                                                    
                                                </div>
                                            </li>
                                            <li>
                                                <a class="nav-link text-center" href="#"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-medkit"></i>
                                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                    </a>
                                    <div class="dropdown-menu mailbox scale-up-left" aria-labelledby="2">
                                        <ul>
                                            <li>
                                                <div class="drop-title">Medicine Short List</div>
                                            </li>
                                            <li>
                                                <div class="message-center">
                                                    
                                                </div>
                                            </li>
                                            <li>
                                                <a class="nav-link text-center" href="#"> <strong>See all Short Medicine</strong> <i class="fa fa-angle-right"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <ul class="navbar-nav my-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('images/users/1.jpg') }}" alt="user" class="profile-pic" /></a>
                                    <div class="dropdown-menu dropdown-menu-right scale-up">
                                        <ul class="dropdown-user">
                                            <li>
                                                <div class="dw-user-box">
                                                    
                                                    <div class="u-img"><img src="{{ asset('images/users/2.jpg') }}" alt="user"></div>
                                                    <div class="u-text">
                                                        <h4>{{ Auth::user()->name }}</h4>
                                                        <p class="text-muted">{{ Auth::user()->email }}</p><a href="#" class="btn btn-rounded btn-danger btn-sm">Admin</a></div>
                                                </div>
                                                </li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="{{ route('change.password') }}"><i class="ti-user"></i> Change Password</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li>
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                        </ul>
                                        </div>
                                    </li>
                            </ul>
                            </div>
                </nav>
            </header>
                    <{{-- div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Reset Your Password</h4>

                                    @if(session()->has('success'))
                                    <strong class="text-success">{{ session()->get('success') }}</strong>
                                    @endif

                                    @if(session()->has('error'))
                                    <strong class="text-danger">{{ session()->get('error') }}</strong>
                                    @endif

                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <form action="{{ route('update.password') }}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="new-password" class="control-label">Current Password</label>
                                            <input type="password" name="current_password" class="form-control" id="new-current_password">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-password" class="control-label">New Password</label>
                                            <input type="password" name="password" class="form-control" id="new-password">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm-password" class="control-label">Confirm Password</label>
                                            <input type="password" name="confirm_password" class="form-control" id="confirm-password">
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}

            <!-- Sidebar Start  --> 
                <aside class="left-sidebar">
                        <!-- Sidebar scroll-->
                        <div class="scroll-sidebar">
                            <nav class="sidebar-nav">
                                <ul id="sidebarnav">
                                    <li class="nav-devider"></li>
                                    
                                    <li> <a href="{{ route('dashboard') }}" ><i class="fa fa-dashboard"></i><span class="hide-menu">Dashboard </span></a></li>
                                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">CRUD </span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="{{ route('crud.manage') }}">Manage CRUD </a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-building-o"></i><span class="hide-menu"> Inventory </span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="#">Manage Stock </a></li>
                                </ul>
                                </li>
                                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-bar-chart-o"></i><span class="hide-menu">Report </span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="#">Today's Report </a></li>
                                </ul>
                                </li>
                                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Employee </span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="#">Add Employee </a></li>
                                    <li><a href="#">Manage Employee </a></li>
                                </ul>
                                </li>
                                </ul>
                            </nav>
                            <!-- End Sidebar navigation -->
                        </div>
                    <!-- End Sidebar scroll-->
                </aside>
            <!-- Sidebar end  -->

			@yield('content')


            <!---- Footer Start --->
        </div>
    </body>
<!-- All Jquery -->
<!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset('plugins/moment/moment.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
        <!--Wave Effects -->
        <script src="{{ asset('js/waves.js') }} "></script>
        <!--Menu sidebar -->
        <script src="{{ asset('js/sidebarmenu.js') }}"></script>
        <!--stickey kit -->
        <script src="{{ asset('plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
        <!--Custom JavaScript -->
        <script src="{{ asset('js/custom.min.js') }}"></script>
        <script src="{{ asset('js/jquery.PrintArea.js') }}"></script>

        <script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>
        <!--morris JavaScript -->
        <script src="{{ asset('plugins/raphael/raphael-min.js') }}"></script>
        <script src="{{ asset('plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
        <!-- Editable -->
        <script src="{{ asset('plugins/jsgrid/db.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins/jsgrid/dist/jsgrid.min.js') }}"></script>
        <!-- This is data table -->
        <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <!-- start - This is for export functionality only -->
        <script src="{{ asset('export/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('export/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('export/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js') }}"></script>
        <script src="{{ asset('export/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>

        <script src="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('export/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js') }}"></script>
        <script src="{{ asset('export/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('export/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js') }} "></script>
        <script src="{{ asset('js/main.js') }}"></script>

        <script src="{{ asset('plugins/chartist-js/dist/chartist.min.js') }} "></script>
        <script src="{{ asset('plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }} "></script>
        <script src="{{ asset('js/dashboard3.js') }} "></script>
        <script src="{{ asset('plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
</html>