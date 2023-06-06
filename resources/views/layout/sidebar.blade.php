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

                <li> <a class="" href="{{ route('mitra.index') }}" aria-expanded="false"><i class="fa fa-handshake-o"></i><span
                            class="hide-menu">Mitra</span></a>
                </li>
                <li> <a class="" href="#" aria-expanded="false"><i
                            class="fa fa-users"></i><span class="hide-menu">Costumer</span></a>
                </li>
                <li> <a class="" href="{{ route('karyawan.index') }}"aria-expanded="false"><i
                            class="fa fa-users"></i><span class="hide-menu">Karyawan</span></a>
                </li>
                <li> <a class="" href="{{ route('project.index') }}"aria-expanded="false"><i
                            class="fa fa-wpforms"></i><span class="hide-menu">Project</span></a>
                </li>
                <li> <a class="" href="{{route('performance.index')}}" aria-expanded="false"><i
                            class="fa fa-bar-chart-o"></i><span class="hide-menu">Perfomance</span></a>


                </li>


                {{-- <li> <a class="has-arrow" data-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-wpforms"></i><span
                            class="hide-menu">Project<span
                                class="label label-rouded label-primary pull-right">2</span></span></a>
                    <ul class="collapse" id="collapseExample">
                        <li><a href="{{ route('projectlop.index') }}">LOP </a></li>
                    </ul>
                </li> --}}

                <li> <a class="" href="{{ route('sales.index') }}" aria-expanded="false"><i
                            class="fa fa-tags"></i><span class="hide-menu">Sales</span></a>
                </li>
                <li> <a class="" href="{{ route('gedung.index') }}" aria-expanded="false"><i
                            class="fa fa-dropbox"></i><span class="hide-menu">Data Gudang</span></a>
                </li>
                <li> <a class="" href="#" aria-expanded="false"><i
                            class="fa fa-users"></i><span class="hide-menu">Personil</span></a>
                </li>
                <li> <a class="" href="{{ route('perangkat.index') }}" aria-expanded="false"><i
                            class="fa fa-tv"></i><span class="hide-menu">Perangkat</span></a>
                </li>
                <li> <a class="" href="#" aria-expanded="false"><i
                            class="fa fa-user-secret"></i><span class="hide-menu">Kategori karyawan tes satu
                            dua</span></a>
                </li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>