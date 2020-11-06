<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ url('/') }}/assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings mr-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock mr-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out mr-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">
                <li class="menu-title">Navigation</li>
                <li>
                    <a href="#sidebarDashboards" data-toggle="collapse">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="badge badge-success badge-pill float-right">4</span>
                        <span> Proposal </span>
                    </a>
                    <div class="collapse" id="sidebarDashboards">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('proposal.tambah-proposal') }}">Tulis Proposal</a>
                            </li>
                            <li>
                                <a href="{{ route('proposal.index') }}">Semua Proposal</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('anggota.index') }}">
                        <i class="fa fa-user-friends"></i>
                        <span> Anggota </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('daftar-proposal') }}">
                        <i class="fa fa-chart-line"></i>
                        <span> Analisys Survey </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('kondisi.daftar-proposal') }}">
                        <i class="fa fa-chart-line"></i>
                        <span> Analisys Kondisi </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('survey-kondisi.daftar-proposal') }}">
                        <i class="fa fa-chart-line"></i>
                        <span> Survey Kondisi </span>
                    </a>
                </li>

                <li>
                    <a href="apps-calendar.html">
                        <i class="mdi mdi-cog"></i>
                        <span> Pengaturan </span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
