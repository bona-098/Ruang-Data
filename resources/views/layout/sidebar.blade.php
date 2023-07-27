<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-label">Home</li>
                <li> <a href="{{ route('dashboard.index') }}" aria-expanded="false"><i class="fa fa-tachometer"></i><span
                            class="hide-menu">Dashboard </span></a>
                </li>
                @canany(['bsrm', 'viewer', 'admin'])
                <li> <a class="" href="{{ route('mitra.index') }}" aria-expanded="false"><i class="fa fa-handshake-o"></i><span
                            class="hide-menu">Mitra</span></a>
                </li>
                @endcanany
                @canany(['bsrm', 'admin', 'viewer'])
                <li> <a class="" href="{{ route('karyawan.index') }}"aria-expanded="false"><i
                            class="fa fa-users"></i><span class="hide-menu">Karyawan</span></a>
                </li>
                @endcanany
                @canany(['project', 'admin', 'viewer'])
                <li> <a class="" href="{{ route('project.index') }}"aria-expanded="false"><i
                            class="fa fa-wpforms"></i><span class="hide-menu">Project</span></a>
                </li>
                @endcanany
                @canany(['bsrm', 'admin', 'viewer'])
                <li> <a class="" href="{{route('performance.index')}}" aria-expanded="false"><i
                            class="fa fa-bar-chart-o"></i><span class="hide-menu">Perfomance</span></a>
                </li>
                @endcanany
                @canany(['marshal', 'admin','viewer'])
                <li> <a class="" href="{{ route('sales.index') }}" aria-expanded="false"><i
                            class="fa fa-tags"></i><span class="hide-menu">Sales</span></a>
                </li>
                @endcanany
                @canany(['oms', 'admin','viewer'])
                <li> <a class="" href="{{ route('gedung.index') }}" aria-expanded="false"><i
                            class="fa fa-building"></i><span class="hide-menu">Data Gedung</span></a>
                </li>
                @endcanany
                @canany(['admin', 'viewer'])
                <li> <a class="" href="{{ route('pengguna.index') }}" aria-expanded="false"><i
                            class="fa fa-tv"></i><span class="hide-menu">Data Pengguna</span></a>
                </li>
                @endcanany
                @canany(['admin', 'viewer'])
                <li> <a class="" href="{{ route('log-activity.logActivity') }}" aria-expanded="false"><i
                            class="fa fa-history"></i><span class="hide-menu">History</span></a>
                </li>
                @endcanany
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>