@include('layouts.partials.header')
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

                                        <li><a href="{{ route('departmentIndex') }}">Department CRUD </a></li>
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

    @include('layouts.partials.footer')