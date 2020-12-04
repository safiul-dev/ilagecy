<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-brand">
                <a href="index.html" class="logo">
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <!-- Light Logo icon -->
                        {{-- <img src="../../assets/images/logo-icon.png" alt="homepage"
                            class="light-logo" /> --}}
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                        <!-- Light Logo text -->
                        <span class="text-white">Wellnuss</span>
                        {{-- <img src="../../assets/images/logo-text.png"
                            class="light-logo" alt="homepage" /> --}}
                    </span>
                </a>
                <a class="sidebartoggler d-none d-md-block" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                    <i
                        class="mdi mdi-toggle-switch mdi-toggle-switch-off font-20"></i>

                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            {{-- <a class="topbartoggler d-block d-md-none waves-effect waves-light"
                href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ti-more"></i>
            </a> --}}
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <!-- <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="mdi mdi-menu font-24"></i>
                            </a>
                        </li> -->
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item search-box">
                    <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-magnify font-20 mr-1"></i>
                            <div class="ml-1 d-none d-sm-block">
                                <span>Search</span>
                            </div>
                        </div>
                    </a>
                    <form class="app-search position-absolute">
                        <input type="text" class="form-control" placeholder="Search &amp; enter">
                        <a class="srh-btn">
                            <i class="ti-close"></i>
                        </a>
                    </form>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    {{-- <a class="nav-link dropdown-toggle waves-effect waves-dark"
                        href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="font-22 mdi mdi-email-outline"></i>

                    </a>
                    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                        <span class="with-arrow">
                            <span class="bg-danger"></span>
                        </span>
                        <ul class="list-style-none">
                            <li>
                                <div class="drop-title text-white bg-danger">
                                    <h4 class="m-b-0 m-t-5">5 New</h4>
                                    <span class="font-light">Messages</span>
                                </div>
                            </li>
                            <li>
                                <div class="message-center message-body">
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                        <span class="user-img">
                                            <img src="../../assets/images/users/1.jpg" alt="user"
                                                class="rounded-circle">
                                            <span class="profile-status online pull-right"></span>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                        <span class="user-img">
                                            <img src="../../assets/images/users/2.jpg" alt="user"
                                                class="rounded-circle">
                                            <span class="profile-status busy pull-right"></span>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Sonu Nigam</h5>
                                            <span class="mail-desc">I've sung a song! See you at</span>
                                            <span class="time">9:10 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                        <span class="user-img">
                                            <img src="../../assets/images/users/3.jpg" alt="user"
                                                class="rounded-circle">
                                            <span class="profile-status away pull-right"></span>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Arijit Sinh</h5>
                                            <span class="mail-desc">I am a singer!</span>
                                            <span class="time">9:08 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                        <span class="user-img">
                                            <img src="../../assets/images/users/4.jpg" alt="user"
                                                class="rounded-circle">
                                            <span class="profile-status offline pull-right"></span>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center link text-dark" href="javascript:void(0);">
                                    <b>See all e-Mails</b>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </li>
                <li class="nav-item dropdown border-right">
                    {{-- <a class="nav-link dropdown-toggle waves-effect waves-dark"
                        href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-bell-outline font-22"></i>
                        <span class="badge badge-pill badge-info noti">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                        <span class="with-arrow">
                            <span class="bg-primary"></span>
                        </span>
                        <ul class="list-style-none">
                            <li>
                                <div class="drop-title bg-primary text-white">
                                    <h4 class="m-b-0 m-t-5">4 New</h4>
                                    <span class="font-light">Notifications</span>
                                </div>
                            </li>
                            <li>
                                <div class="message-center notifications">
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                        <span class="btn btn-danger btn-circle">
                                            <i class="fa fa-link"></i>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Luanch Admin</h5>
                                            <span class="mail-desc">Just see the my new admin!</span>
                                            <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                        <span class="btn btn-success btn-circle">
                                            <i class="ti-calendar"></i>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Event today</h5>
                                            <span class="mail-desc">Just a reminder that you have event</span>
                                            <span class="time">9:10 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                        <span class="btn btn-info btn-circle">
                                            <i class="ti-settings"></i>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Settings</h5>
                                            <span class="mail-desc">You can customize this template as you want</span>
                                            <span class="time">9:08 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item">
                                        <span class="btn btn-primary btn-circle">
                                            <i class="ti-user"></i>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center m-b-5 text-dark" href="javascript:void(0);">
                                    <strong>Check all notifications</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{-- <i class="fa fa-power-off m-r-5 m-l-5"></i>
                        --}}
                        Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle" width="40">
                        <span class="m-l-5 font-medium d-none d-sm-inline-block">{{ auth()->user()->name }} <i
                                class="mdi mdi-chevron-down"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <span class="with-arrow">
                            <span class="bg-primary"></span>
                        </span>
                        <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                            <div class="">
                                <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle" width="60">
                            </div>
                            <div class="m-l-10">
                                <h4 class="m-b-0">{{ auth()->user()->name }}</h4>
                                <p class=" m-b-0">{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                        <div class="profile-dis scrollable">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                </li> --}}
            </ul>
        </div>
    </nav>
</header>
