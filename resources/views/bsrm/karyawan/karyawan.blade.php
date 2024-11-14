{{-- @extends('layout.layout') --}}
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
    {{-- <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template/') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    {{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/') }}/dist/css/adminlte.min.css">
    <link href="{{ asset('template/') }}/css/helper.css" rel="stylesheet">
    <link href="{{ asset('template/') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('template/') }}/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="{{ asset('template/') }}/css/modal.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/') }}/css/lib/bootstrap/bootstrap.min.css">
</head>

<body class="fix-header fix-sidebar">
    @include('sweetalert::alert')
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2"
                stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b><img src="/template/images/logo.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        {{-- <span><img src="/template/images/logo-telkomproperty.png" height="13" width="72" alt="homepage" class="dark-logo" /></span> --}}
                        <span>Regional 6</span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  "
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  "
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted  " href="#"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="fa fa-bell"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">Just see the my new
                                                        admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-success btn-circle m-r-10"><i
                                                        class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just a
                                                        reminder that you have event</span> <span class="time">9:10
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>This is title</h5> <span class="mail-desc">You can customize
                                                        this template as you want</span> <span class="time">9:08
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i>
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>This is another title</h5> <span class="mail-desc">Just see the
                                                        my admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all
                                                notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                        <!-- Messages -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" id="2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="fa fa-envelope"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn"
                                aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/5.jpg" alt="user"
                                                        class="img-circle"> <span
                                                        class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my
                                                        admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/2.jpg" alt="user"
                                                        class="img-circle"> <span
                                                        class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>John Doe</h5> <span class="mail-desc">I've sung a song! See you
                                                        at</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/3.jpg" alt="user"
                                                        class="img-circle"> <span
                                                        class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Mr. John</h5> <span class="mail-desc">I am a singer!</span>
                                                    <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/4.jpg" alt="user"
                                                        class="img-circle"> <span
                                                        class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my
                                                        admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all
                                                e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img src="template/images/users/5.jpg "
                                    alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="/profile"><i class="ti-user"></i> {{ Auth::user()->name }}</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                        <a href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                    <li></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        {{-- <li> <a href="{{ route('dashboard.index') }}" aria-expanded="false"><i class="fa fa-tachometer"></i><span
                                    class="hide-menu">Dashboard </span></a>
                        </li> --}}
                        {{-- @canany(['bsrm', 'admin', 'viewer']) --}}
                        {{-- <li> <a class="" href="{{ route('performance.index') }}" aria-expanded="false"><i
                                    class="fa fa-bar-chart-o"></i><span class="hide-menu">Perfomance</span></a>
                        </li> --}}
                        {{-- @endcanany --}}
                        {{-- @canany(['bsrm', 'viewer', 'admin']) --}}
                        {{-- <li> <a class="" href="{{ route('mitra.index') }}" aria-expanded="false"><i
                                    class="fa fa-handshake-o"></i><span class="hide-menu">Mitra</span></a>
                        </li> --}}
                        {{-- @endcanany --}}
                        {{-- @canany(['bsrm', 'viewer', 'admin']) --}}
                        {{-- <li> <a class="" href="{{ route('monitoringpm.index') }}" aria-expanded="false"><i
                                    class="fa fa-handshake-o"></i><span class="hide-menu">Monitoring PM</span></a>
                        </li> --}}
                        {{-- @endcanany --}}
                        {{-- @canany(['bsrm', 'admin', 'viewer']) --}}
                        <li> <a class="" href="{{ route('karyawan.index') }}"aria-expanded="false"><i
                                    class="fa fa-users"></i><span class="hide-menu">Karyawan</span></a>
                        </li>
                        <li> <a class="" href="{{ route('pelatihan.index') }}"aria-expanded="false"><i
                                    class="fa fa-users"></i><span class="hide-menu">Pelatihan Karyawan</span></a>
                        </li>
                        <li> <a class="" href="{{ route('rekomendasi.index') }}"aria-expanded="false"><i
                                    class="fa fa-users"></i><span class="hide-menu">Rekomendasi Karyawan</span></a>
                        </li>
                        {{-- <li> <a class="" href="{{ route('calon_bpo.index') }}"aria-expanded="false"><i
                                    class="fa fa-users"></i><span class="hide-menu">Calon Bpo</span></a>
                        </li> --}}
                        {{-- @endcanany --}}
                        {{-- @canany(['project', 'admin', 'viewer']) --}}
                        {{-- <li> <a class="" href="{{ route('project.index') }}"aria-expanded="false"><i
                                    class="fa fa-wpforms"></i><span class="hide-menu">Project</span></a>
                        </li> --}}
                        {{-- @endcanany --}}
                        {{-- @canany(['marshal', 'admin', 'viewer']) --}}
                        {{-- <li> <a class="" href="{{ route('sales.index') }}" aria-expanded="false"><i
                                    class="fa fa-tags"></i><span class="hide-menu">Sales</span></a>
                        </li> --}}
                        {{-- @endcanany --}}
                        {{-- @canany(['oms', 'admin', 'viewer']) --}}
                        {{-- <li> <a class="" href="{{ route('gedung.index') }}" aria-expanded="false"><i
                                    class="fa fa-building"></i><span class="hide-menu">Data Gedung</span></a>
                        </li> --}}
                        {{-- @endcanany --}}
                        {{-- @canany(['admin', 'viewer']) --}}
                        {{-- <li> <a class="" href="{{ route('pengguna.index') }}" aria-expanded="false"><i
                                    class="fa fa-tv"></i><span class="hide-menu">Data Pengguna</span></a>
                        </li> --}}
                        {{-- @endcanany --}}
                        {{-- @canany(['admin', 'viewer']) --}}
                        {{-- <li> <a class="" href="{{ route('log-activity.logActivity') }}" aria-expanded="false"><i
                                    class="fa fa-history"></i><span class="hide-menu">History</span></a>
                        </li> --}}
                        {{-- @endcanany --}}
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>

        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>


            <div class="container-fluid">


                <div class="row">
                    <div class="col-md-6">
                        <!-- Widget: user widget style 2 -->
                        <div class="card card-widget ">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="card-header">
                                <!-- /.widget-user-image -->
                                @php
                                    $jumlahKaryawan = $karyawan->count();
                                @endphp

                                <h3 class="card-title">Karyawan Tetap - {{ $jumlahKaryawan }} Aktif</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-footer p-0">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-toggle="modal"
                                            data-target="#ModalKaryawanOrganik">
                                            Organik <span data-toggle="modal" data-target="#ModalKaryawanTetap"
                                                class="float-right badge bg-primary">1</span>
                                        </a>
                                    </li>
                                    @php
                                        // Daftar unit kerja yang ingin dihitung jumlahnya
                                        $unitKerja = [
                                            'General Manager Regional',
                                            'Manager Marketing, Sales & Solution',
                                            'Marketing, Sales & Solution',
                                            'Manager Planning & Delivery',
                                            'Planning & Delivery',
                                            'Manager Operation & Maintenance',
                                            'Operation & Maintenance',
                                            'Manager Business Support & Risk Management',
                                            'Business Support & Risk Management',
                                        ];

                                        // Filter karyawan berdasarkan unit kerja dan hitung jumlahnya
                                        $jumlah_karyawan_regional6 = $karyawan
                                            ->filter(function ($k) use ($unitKerja) {
                                                return in_array($k->unit_kerja, $unitKerja);
                                            })
                                            ->count();
                                    @endphp

                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-toggle="modal"
                                            data-target="#ModalKaryawanRegional6">
                                            Regional 6
                                            <span
                                                class="float-right badge bg-info">{{ $jumlah_karyawan_regional6 }}</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-toggle="modal"
                                            data-target="#ModalKaryawanAreaKaltimtara">
                                            Area Kalimantan Timur dan Utara <span data-toggle="modal"
                                                data-target="#ModalKaryawanAreaKaltimtara"
                                                class="float-right badge bg-primary">{{ $jumlah_karyawan_areakaltimtara }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-toggle="modal"
                                            data-target="#ModalKaryawanAreaKalselteng">
                                            Area Kalimantan Selatan dan Tengah <span data-toggle="modal"
                                                data-target="#ModalKaryawanAreaKalselteng"
                                                class="float-right badge bg-warning">{{ $jumlah_karyawan_areakalselteng }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-toggle="modal"
                                            data-target="#ModalKaryawanAreaKalbar">
                                            Area Kalimantan Barat <span data-toggle="modal"
                                                data-target="#ModalKaryawanAreaKalbar"
                                                class="float-right badge bg-danger">{{ $jumlah_karyawan_areakalbar }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-toggle="modal"
                                            data-target="#ModalKaryawanFormasiKosong">
                                            Formasi Kosong <span data-toggle="modal"
                                                class="float-right badge bg-danger">{{ $jumlahJabatan }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.widget-user -->
                    </div>

                    <div class="col-md-6">
                        <!-- Widget: user widget style 2 -->
                        <div class="card card-widget ">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="card-header">
                                <!-- /.widget-user-image -->
                                <h3 class="card-title">Pendidikan</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="card-footer p-0">
                                <ul class="nav flex-column">
                                    @php
                                        // Daftar unit kerja yang ingin dihitung jumlahnya
                                        $jenjang = ['S2'];

                                        // Filter karyawan berdasarkan unit kerja dan hitung jumlahnya
                                        $jumlah_karyawan_s2 = $karyawan
                                            ->filter(function ($k) use ($jenjang) {
                                                return in_array($k->jenjang_pendidikan, $jenjang);
                                            })
                                            ->count();
                                    @endphp
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-toggle="modal"
                                            data-target="#ModalKaryawanS2">
                                            S-2<span
                                                class="float-right badge bg-primary">{{ $jumlah_karyawan_s2 }}</span>
                                        </a>
                                    </li>
                                    @php
                                        // Daftar unit kerja yang ingin dihitung jumlahnya
                                        $jenjang = ['S1'];

                                        // Filter karyawan berdasarkan unit kerja dan hitung jumlahnya
                                        $jumlah_karyawan_s1 = $karyawan
                                            ->filter(function ($k) use ($jenjang) {
                                                return in_array($k->jenjang_pendidikan, $jenjang);
                                            })
                                            ->count();
                                    @endphp
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-toggle="modal"
                                            data-target="#ModalKaryawanS1">
                                            S-1/Sarjana <span
                                                class="float-right badge bg-info">{{ $jumlah_karyawan_s1 }}</span>
                                        </a>
                                    </li>
                                    @php
                                        // Daftar unit kerja yang ingin dihitung jumlahnya
                                        $jenjang = ['Diploma III'];

                                        // Filter karyawan berdasarkan unit kerja dan hitung jumlahnya
                                        $jumlah_karyawan_DIII = $karyawan
                                            ->filter(function ($k) use ($jenjang) {
                                                return in_array($k->jenjang_pendidikan, $jenjang);
                                            })
                                            ->count();
                                    @endphp
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-toggle="modal"
                                            data-target="#ModalKaryawanDiplomaIII">
                                            Diploma III/Sarjana Muda <span
                                                class="float-right badge bg-success">{{ $jumlah_karyawan_DIII }}</span>
                                        </a>
                                    </li>
                                    @php
                                        // Daftar unit kerja yang ingin dihitung jumlahnya
                                        $jenjang = ['SMK/SLTA Kejuruan'];

                                        // Filter karyawan berdasarkan unit kerja dan hitung jumlahnya
                                        $jumlah_karyawan_sekolah = $karyawan
                                            ->filter(function ($k) use ($jenjang) {
                                                return in_array($k->jenjang_pendidikan, $jenjang);
                                            })
                                            ->count();
                                    @endphp
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-toggle="modal"
                                            data-target="#ModalKaryawanSekolah">
                                            SMK/SLTA Kejuruan <span
                                                class="float-right badge bg-danger">{{ $jumlah_karyawan_sekolah }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.widget-user -->
                    </div>
                    <!-- /.col -->

                </div>


                <!-- /.row -->
                {{-- Data Tabel mulai baru --}}
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Karyawan</h4>
                        <br>
                        <br>
                        <!-- Button trigger modal -->
                        <!-- Button trigger modal -->
                        @canany(['bsrm', 'admin'])
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#ModalTambahKaryawan">
                                <i class="fa fa-user-plus"></i> Tambah Karyawan
                            </button>
                            {{-- <a button type="button" class="btn btn-primary" href="/import-karyawan">
                                <i class="fa fa-user-plus"></i> Import Karyawan
                                </button></a> --}}
                        @endcanany {{-- <h6 class="card-subtitle">Data table example</h6> --}}
                        <div class=" table-responsive">
                            <table text-align: left; id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="text-align: center; vertical-align: middle;">Foto</th>
                                        <th style="text-align: center; vertical-align: middle;">NIK Telpro / Group</th>
                                        {{-- <th style="white-space: nowrap;">NIK Telkom Group</th> --}}
                                        <th style="text-align: center; vertical-align: middle;">Nama Karyawan</th>
                                        {{-- <th style="white-space: nowrap;">jenis Kelamin</th> --}}
                                        <th style="text-align: center; vertical-align: middle;">Unit Kerja</th>
                                        <th style="text-align: center; vertical-align: middle;">Loker</th>
                                        <th style="text-align: center; vertical-align: middle;">Jabatan</th>
                                        <th style="text-align: center; vertical-align: middle;">Band</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($karyawan as $k)
                                        <tr>
                                            <td style="text-align: center; vertical-align: middle;">
                                                <div class="round-img">
                                                    <a href="">
                                                        <img src="{{ asset('storage/foto/' . ($k->foto ? $k->foto : 'default.jpg')) }}"
                                                            alt="">
                                                    </a>

                                                </div>
                                            </td>
                                            <td style="text-align: center; vertical-align: middle;">
                                                {{ $k->nik }} /
                                                {{ $k->telkomgroup }}</td>
                                            <td style="text-align: center; vertical-align: middle;">
                                                @if ($k->id)
                                                    <!-- Cek jika id ada -->
                                                    <a href="{{ route('karyawan.show', $k->id) }}"
                                                        style="color: black;">
                                                        {{ $k->nama_karyawan }}
                                                    </a>
                                                @else
                                                    <span>No ID</span> <!-- Tampilkan jika id kosong -->
                                                @endif
                                            </td>
                                            <td style="text-align: center; vertical-align: middle;">
                                                {{ $k->unit_kerja }}</td>
                                            <td style="text-align: center; vertical-align: middle;">
                                                {{ $k->lokasi_kerja }}
                                            </td>

                                            <td style="text-align: center; vertical-align: middle;">
                                                {{ $k->jabatan }}</td>
                                            <td style="text-align: center; vertical-align: middle;">
                                                {{ $k->band_kelas_posisi }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- Selesai --}}


                <!-- KONTEN MODAL TAMBAH KARYAWAN  -->
                <div class="modal fade" id="ModalTambahKaryawan" tabindex="-1" aria-labelledby="exampleModalLabel"
                    data-backdrop="static" data-keyboard="false" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Karyawan</h5>
                                @if ($errors->any())
                                    <span class="text-danger" style="font-size: 0.9em;">
                                        {{ $errors->first() }}
                                    </span>
                                @endif
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('karyawan.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-body">
                                            <div class="row p-t-20">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">NIK Telpro</label>
                                                        <input type="number" name="nik" min="0"
                                                            class="form-control" @error('nik') is-invalid @enderror
                                                            value="{{ old('nik') }}">
                                                        @error('nik')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">NIK Telkom Grup</label>
                                                        <input type="number" name="nik_telpro" min="0"
                                                            class="form-control"
                                                            @error('nik_telpro') is-invalid @enderror
                                                            value="{{ old('nik_telpro') }}">
                                                        @error('nik_telpro')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group has-danger">
                                                        <label for="nama_karyawan" class="control-label">Nama
                                                            Karyawan</label>
                                                        <input type="text" id="nama_karyawan"
                                                            class="form-control form-control-danger"
                                                            name="nama_karyawan"
                                                            @error('nama_karyawan') is-invalid @enderror
                                                            value="{{ old('nama_karyawan') }}">
                                                        @error('nama_karyawan')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="jenis_kelamin" class="control-label">Jenis
                                                            Kelamin</label>
                                                        <select
                                                            class="form-control custom-select @error('jenis_kelamin') is-invalid @enderror"
                                                            id="jenis_kelamin" name="jenis_kelamin">
                                                            <option value="">Pilih Jenis Kelamin</option>
                                                            <option value="laki-laki"
                                                                {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' }}>
                                                                Laki-laki</option>
                                                            <option value="perempuan"
                                                                {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>
                                                                Perempuan</option>
                                                        </select>
                                                        @error('jenis_kelamin')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tgl_lahir" class="control-label">Tanggal
                                                            Lahir</label>
                                                        <input type="date" id="tgl_lahir" name="tgl_lahir"
                                                            class="form-control" placeholder="dd/mm/yyyy"
                                                            @error('tgl_lahir') is-invalid @enderror
                                                            value="{{ old('tgl_lahir') }}">
                                                        @error('tgl_lahir')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="kota_lahir" class="control-label">Kota
                                                            Lahir</label>
                                                        <input type="text" id="kota_lahir" name="kota_lahir"
                                                            class="form-control"
                                                            @error('kota_lahir') is-invalid @enderror
                                                            value="{{ old('kota_lahir') }}">
                                                        @error('kota_lahir')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                        <small class="form-control-feedback"> </small>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="agama" class="control-label">Agama</label>
                                                        <select
                                                            class="form-control custom-select @error('agama') is-invalid @enderror"
                                                            id="agama" name="agama">
                                                            <option value="">Pilih Agama</option>
                                                            <option value="islam"
                                                                {{ old('agama') == 'islam' ? 'selected' : '' }}>Islam
                                                            </option>
                                                            <option value="katolik"
                                                                {{ old('agama') == 'katolik' ? 'selected' : '' }}>
                                                                Kristen Katolik
                                                            </option>
                                                            <option value="kristen protestan"
                                                                {{ old('agama') == 'kristen protestan' ? 'selected' : '' }}>
                                                                Kristen
                                                                Protestan</option>
                                                            <option value="hindu"
                                                                {{ old('agama') == 'hindu' ? 'selected' : '' }}>Hindu
                                                            </option>
                                                            <option value="budha"
                                                                {{ old('agama') == 'budha' ? 'selected' : '' }}>Budha
                                                            </option>
                                                            <option value="kong hucuh"
                                                                {{ old('agama') == 'kong hucuh' ? 'selected' : '' }}>
                                                                Kong Hucu
                                                            </option>
                                                        </select>
                                                        @error('agama')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="unit_kerja" class="control-label">Unit
                                                            Kerja</label>
                                                        <select
                                                            class="form-control custom-select @error('unit_kerja') is-invalid @enderror"
                                                            id="unit_kerja" name="unit_kerja">
                                                            <option value="">Pilih Unit Kerja</option>
                                                            <option value="General Manager Regional"
                                                                {{ old('unit_kerja') == 'General Manager Regional' ? 'selected' : '' }}>
                                                                General Manager Regional</option>
                                                            <option value="Manager Marketing, Sales & Solution"
                                                                {{ old('unit_kerja') == 'Manager Marketing, Sales & Solution' ? 'selected' : '' }}>
                                                                Manager Marketing, Sales & Solution</option>
                                                            <option value="Manager Planning & Delivery"
                                                                {{ old('unit_kerja') == 'Manager Planning & Delivery' ? 'selected' : '' }}>
                                                                Manager Planning & Delivery</option>
                                                            <option value="Manager Operation & Maintenance"
                                                                {{ old('unit_kerja') == 'Manager Operation & Maintenance' ? 'selected' : '' }}>
                                                                Manager Operation & Maintenance</option>
                                                            <option value="Manager Business Support & Risk Management"
                                                                {{ old('unit_kerja') == 'Manager Business Support & Risk Management' ? 'selected' : '' }}>
                                                                Manager Business Support & Risk Management</option>
                                                            <option value="Area Kaltimtara"
                                                                {{ old('unit_kerja') == 'Area Kaltimtara' ? 'selected' : '' }}>
                                                                Area
                                                                Kaltimtara</option>
                                                            <option value="Area Kalselteng"
                                                                {{ old('unit_kerja') == 'Area Kalselteng' ? 'selected' : '' }}>
                                                                Area
                                                                Kalselteng</option>
                                                            <option value="Area Kalbar"
                                                                {{ old('unit_kerja') == 'Area Kalbar' ? 'selected' : '' }}>
                                                                Area
                                                                Kalbar</option>
                                                        </select>
                                                        @error('unit_kerja')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Nomor HandPhone</label>
                                                        <input type="text" name="no_hp" class="form-control"
                                                            @error('no_hp') is-invalid @enderror
                                                            value="{{ old('no_hp') }}">
                                                        @error('no_hp')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Kontak Darurat</label>
                                                        <input type="text" name="kontak_darurat"
                                                            class="form-control"
                                                            @error('kontak_darurat') is-invalid @enderror
                                                            value="{{ old('kontak_darurat') }}">
                                                        @error('kontak_darurat')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>


                                            </div>


                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        <label for="alamat">Alamat</label>
                                                        <input type="text" class="form-control"
                                                            name="alamat"@error('alamat') is-invalid @enderror
                                                            value="{{ old('alamat') }}">
                                                        @error('alamat')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="loker">Loker</label>
                                                        <input type="text" class="form-control" id="loker"
                                                            name="loker">
                                                    </div>
                                                </div> --}}

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="jabatan">Jabatan</label>
                                                        <input type="text" class="form-control" id="jabatan"
                                                            name="jabatan"@error('jabatan') is-invalid @enderror
                                                            value="{{ old('jabatan') }}">
                                                        @error('jabatan')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Kelas Band Posisi</label>
                                                        <select class="form-control custom-select"
                                                            name="band_kelas_posisi">
                                                            <option value="">Pilih Kelas Band Posisi</option>
                                                            <option value="I"
                                                                {{ old('band_kelas_posisi') == 'I' ? 'selected' : '' }}>
                                                                I</option>
                                                            <option value="II"
                                                                {{ old('band_kelas_posisi') == 'II' ? 'selected' : '' }}>
                                                                II
                                                            </option>
                                                            <option value="III"
                                                                {{ old('band_kelas_posisi') == 'III' ? 'selected' : '' }}>
                                                                III
                                                            </option>
                                                            <option value="IV"
                                                                {{ old('band_kelas_posisi') == 'IV' ? 'selected' : '' }}>
                                                                IV
                                                            </option>
                                                            <option value="V"
                                                                {{ old('band_kelas_posisi') == 'V' ? 'selected' : '' }}>
                                                                V</option>
                                                            <option value="VI"
                                                                {{ old('band_kelas_posisi') == 'VI' ? 'selected' : '' }}>
                                                                VI
                                                            </option>
                                                            <option value="VII"
                                                                {{ old('band_kelas_posisi') == 'VII' ? 'selected' : '' }}>
                                                                VII
                                                            </option>
                                                        </select>
                                                        @error('band_kelas_posisi')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="status_nikah" class="control-label">Status
                                                            Menikah</label>
                                                        <select class="form-control custom-select" id="status_nikah"
                                                            name="status_nikah">
                                                            <option value="">Pilih Status Menikah</option>
                                                            <option value="Menikah"
                                                                {{ old('status_nikah') == 'Menikah' ? 'selected' : '' }}>
                                                                Menikah
                                                            </option>
                                                            <option value="Belum Menikah"
                                                                {{ old('status_nikah') == 'Belum Menikah' ? 'selected' : '' }}>
                                                                Belum Menikah</option>
                                                        </select>
                                                        @error('status_nikah')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nama_pasangan">Nama Pasangan</label>
                                                        <input type="text" class="form-control" id="nama_pasangan"
                                                            name="nama_pasangan">
                                                        @error('nama_pasangan')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="jumlah_anak">Jumlah Anak</label>
                                                        <input type="number" min="0" class="form-control"
                                                            id="jumlah_anak" name="jumlah_anak">
                                                        @error('jumlah_anak')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="golongan_darah" class="control-label">Golongan
                                                            Darah</label>
                                                        <select class="form-control custom-select" id="golongan_darah"
                                                            name="golongan_darah">
                                                            <option value="">Pilih Golongan Darah</option>
                                                            <option value="A">A</option>
                                                            <option value="AB">AB</option>
                                                            <option value="B">B</option>
                                                            <option value="O">O</option>
                                                        </select>
                                                        @error('golongan_darah')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="suku">suku</label>
                                                        <input type="text" class="form-control" id="suku"
                                                            name="suku">
                                                        @error('suku')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tgl_bergabung">tgl_bergabung</label>
                                                        <input type="date" class="form-control" id="tgl_bergabung"
                                                            name="tgl_bergabung">
                                                        @error('tgl_bergabung')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nomor_sk">Nomor Surat Keputusan</label>
                                                        <input type="text" class="form-control" id="suku"
                                                            name="nomor_sk">
                                                        @error('nomor_sk')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="surat_sk">Surat Keputusan</label>
                                                        <input type="file" class="form-control" id="surat_sk"
                                                            name="surat_sk">
                                                        @error('surat_sk')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="jenjang_pendidikan" class="control-label">Jenjang
                                                            Pendidikan</label>
                                                        <select class="form-control custom-select"
                                                            id="jenjang_pendidikan" name="jenjang_pendidikan">
                                                            <option value="">Pilih Jenjang Pendidikan</option>
                                                            <option value="S2">S2</option>
                                                            <option value="S1">S1</option>
                                                            <option value="Diploma III">Diploma III</option>
                                                            <option value="SMK/SLTA Kejuruan">SMK/SLTA Kejuruan
                                                            </option>
                                                        </select>
                                                        @error('jenjang_pendidikan')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="program_studi">Program Studi</label>
                                                        <input type="text" class="form-control" id="program_studi"
                                                            name="program_studi">
                                                        @error('program_studi')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="penyelenggara_pendidikan">Penyelenggara
                                                            Pendidikan</label>
                                                        <input type="text" class="form-control"
                                                            id="penyelenggara_pendidikan"
                                                            name="penyelenggara_pendidikan">
                                                    </div>
                                                    @error('penyelenggara_pendidikan')
                                                        <div class="alert alert-danger mt-2">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="ijazah">Ijazah</label>
                                                        <input type="file" class="form-control" id="ijazah"
                                                            name="ijazah">
                                                        @error('ijazah')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="bpjs_kesehatan">Nomor Bpjs Kesehatan</label>
                                                        <input type="text" class="form-control"
                                                            id="bpjs_kesehatan" name="nomor_bpjs_kesehatan">
                                                        @error('nomor_bpjs_kesehatan')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="file_bpjs_kesehatan">Bpjs Kesehatan</label>
                                                        <input type="file" class="form-control"
                                                            id="file_bpjs_kesehatan" name="file_bpjs_kesehatan">
                                                        @error('file_bpjs_kesehatan')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nomor_bpjs_ketenagakerjaan">Nomor Bpjs
                                                            Ketenagakerjaan</label>
                                                        <input type="text" class="form-control"
                                                            id="nomor_bpjs_ketenagakerjaan"
                                                            name="nomor_bpjs_ketenagakerjaan">
                                                        @error('nomor_bpjs_ketenagakerjaan')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="file_bpjs_ketenagakerjaan">Bpjs
                                                            Ketenagakerjaan</label>
                                                        <input type="file" class="form-control"
                                                            id="file_bpjs_ketenagakerjaan"
                                                            name="file_bpjs_ketenagakerjaan">
                                                        @error('file_bpjs_ketenagakerjaan')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nomor_telkomedika">Nomor Telkomedika</label>
                                                        <input type="text" class="form-control"
                                                            id="nomor_telkomedika" name="nomor_telkomedika">
                                                        @error('nomor_telkomedika')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="file_telkomedika">Telkomedika</label>
                                                        <input type="file" class="form-control"
                                                            id="file_telkomedika" name="file_telkomedika">
                                                        @error('file_telkomedika')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nomor_npwp">Nomor Npwp</label>
                                                        <input type="text" class="form-control" id="npwp"
                                                            name="nomor_npwp">
                                                        @error('nomor_npwp')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="npwp">File Npwp</label>
                                                        <input type="file" class="form-control" id="file_npwp"
                                                            name="file_npwp">
                                                        @error('file_npwp')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nomor_rekening_bank">Rekening Bank</label>
                                                        <input type="text" class="form-control"
                                                            id="nomor_rekening_bank" name="nomor_rekening_bank">
                                                        @error('nomor_rekening_bank')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="file_rekening_bank">Rekening Bank</label>
                                                        <input type="file" class="form-control"
                                                            id="file_rekening_bank" name="file_rekening_bank">
                                                        @error('file_rekening_bank')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="file_rekening_bank">Foto</label>
                                                        <input type="file" class="form-control" id="foto"
                                                            name="foto">
                                                        @error('foto')
                                                            <div class="alert alert-danger mt-2">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- KONTEN MODAL TAMBAH KARYAWAN  -->

                <!-- Modal Delete Mitra -->
                {{-- @foreach ($karyawan as $m)
                    @if (isset($m))
                        <div class="modal fade" id="ModalDeleteKaryawan{{ $m->id }}" tabindex="-1"
                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                                    </div>
                                    <div class="modal-body">
                                        Tindakan ini akan menghapus data tersebut dan data yang dihapus tidak dapat
                                        dikembalikan.
                                        Apakah
                                        Anda yakin ingin melanjutkan?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Batal</button>
                                        <form method="POST" action="{{ route('karyawan.destroy', $m->id) }}"
                                            id="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach --}}


                @php
                    $units = ['General Manager Regional'];

                    $karyawan_organik = $karyawan->filter(function ($k) use ($units) {
                        return in_array($k->unit_kerja, $units);
                    });
                @endphp
                <div class="modal fade" id="ModalKaryawanOrganik" tabindex="-1" aria-labelledby="exampleModalLabel"
                    data-backdrop="static" data-keyboard="false" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Karyawan Organik</h5>
                            </div>
                            <div class="modal-body">
                                <div class=" table-responsive">
                                    <table text-align: left; id="myTable" class="table table-bordered table-striped"
                                        style="font-size: 12px;">
                                        <thead>
                                            <tr>
                                                <th style="white-space: nowrap;">Foto</th>
                                                {{-- <th style="white-space: nowrap;">NIK Telkom Group</th> --}}
                                                <th style="white-space: nowrap;">Nama Karyawan</th>
                                                {{-- <th style="white-space: nowrap;">jenis Kelamin</th> --}}
                                                <th style="white-space: nowrap;">Jabatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($karyawan_organik as $k)
                                                <tr>
                                                    <td>
                                                        <div class="round-img">
                                                            <a href=""><img
                                                                    src="{{ asset('storage/foto/' . ($k->foto ? $k->foto : 'default.jpg')) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </td>
                                                    <td><a href="{{ route('karyawan.show', $k->id) }}"
                                                            style="color: black;">{{ $k->nama_karyawan }}</a></td>
                                                    <td style="white-space: nowrap;">{{ $k->jabatan }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @csrf

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                @php
                    $units = [
                        'General Manager Regional',
                        'Marketing, Sales & Solution',
                        'Planning & Delivery',
                        'Operation & Maintenance',
                        'Business Support & Risk Management',
                    ];

                    $karyawan_regional6 = $karyawan->filter(function ($k) use ($units) {
                        return in_array($k->unit_kerja, $units);
                    });
                @endphp

                <div class="modal fade" id="ModalKaryawanRegional6" tabindex="-1"
                    aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Karyawan Regional 6</h5>
                            </div>
                            <div class="modal-body">
                                <div class="table-responsive">
                                    <table text-align: left; id="myTable" class="table table-bordered table-striped"
                                        style="font-size: 12px;">
                                        <thead>
                                            <tr>
                                                <th style="white-space: nowrap;">Foto</th>
                                                <th style="white-space: nowrap;">Nama Karyawan</th>
                                                <th style="white-space: nowrap;">Jabatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($karyawan_regional6 as $k)
                                                <tr>
                                                    <td>
                                                        <div class="round-img">
                                                            <a href=""><img
                                                                    src="{{ asset('storage/foto/' . ($k->foto ? $k->foto : 'default.jpg')) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        @if ($k->id)
                                                            <!-- Cek jika id ada -->
                                                            <a href="{{ route('karyawan.show', $k->id) }}"
                                                                style="color: black;">
                                                                {{ $k->nama_karyawan }}
                                                            </a>
                                                        @else
                                                            <span>No ID</span> <!-- Tampilkan jika id kosong -->
                                                        @endif
                                                    </td>
                                                    <td style="white-space: nowrap;">{{ $k->jabatan }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @csrf
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                @php
                    $units = ['Area Kaltimtara'];

                    $karyawan_areakaltimtara = $karyawan->filter(function ($k) use ($units) {
                        return in_array($k->unit_kerja, $units);
                    });
                @endphp
                <div class="modal fade" id="ModalKaryawanAreaKaltimtara" tabindex="-1"
                    aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Karyawan Area Kaltimtara</h5>
                            </div>
                            <div class="modal-body">
                                <div class=" table-responsive">
                                    <table text-align: left; id="myTable" class="table table-bordered table-striped"
                                        style="font-size: 12px;">
                                        <thead>
                                            <tr>
                                                <th style="white-space: nowrap;">Foto</th>
                                                {{-- <th style="white-space: nowrap;">NIK Telkom Group</th> --}}
                                                <th style="white-space: nowrap;">Nama Karyawan</th>
                                                {{-- <th style="white-space: nowrap;">jenis Kelamin</th> --}}
                                                <th style="white-space: nowrap;">Jabatan</th>
                                                {{-- <th style="white-space: nowrap;">Unit Kerja</th>
                                                 
                                                <th>Jabatan</th>
                                                <th>Band</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($karyawan_areakaltimtara as $k)
                                                <tr>
                                                    <td>
                                                        <div class="round-img">
                                                            <a href=""><img
                                                                    src="{{ asset('storage/foto/' . ($k->foto ? $k->foto : 'default.jpg')) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </td>
                                                    </td>
                                                    <td><a href="{{ route('karyawan.show', $k->id) }}"
                                                            style="color: black;">{{ $k->nama_karyawan }}</a></td>
                                                    <td style="white-space: nowrap;">{{ $k->jabatan }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @csrf

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                @php
                    $units = ['Area Kalselteng'];

                    $karyawan_areakalselteng = $karyawan->filter(function ($k) use ($units) {
                        return in_array($k->unit_kerja, $units);
                    });
                @endphp
                <div class="modal fade" id="ModalKaryawanAreaKalselteng" tabindex="-1"
                    aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Karyawan Area Kalselteng</h5>
                            </div>
                            <div class="modal-body">
                                <div class=" table-responsive">
                                    <table text-align: left; id="myTable" class="table table-bordered table-striped"
                                        style="font-size: 12px;">
                                        <thead>
                                            <tr>
                                                <th style="white-space: nowrap;">Foto</th>
                                                {{-- <th style="white-space: nowrap;">NIK Telkom Group</th> --}}
                                                <th style="white-space: nowrap;">Nama Karyawan</th>
                                                {{-- <th style="white-space: nowrap;">jenis Kelamin</th> --}}
                                                <th style="white-space: nowrap;">Jabatan</th>
                                                {{-- <th style="white-space: nowrap;"></th>
                                                <th>Jabatan</th>
                                                <th>Band</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($karyawan_areakalselteng as $k)
                                                <tr>
                                                    <td>
                                                        <div class="round-img">
                                                            <a href=""><img
                                                                    src="{{ asset('storage/foto/' . ($k->foto ? $k->foto : 'default.jpg')) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </td>
                                                    <td><a href="{{ route('karyawan.show', $k->id) }}"
                                                            style="color: black;">{{ $k->nama_karyawan }}</a></td>
                                                    <td style="white-space: nowrap;">{{ $k->jabatan }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @csrf

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>


                @php
                    $units = ['Area Kalbar'];

                    $karyawan_areakalbar = $karyawan->filter(function ($k) use ($units) {
                        return in_array($k->unit_kerja, $units);
                    });
                @endphp
                <div class="modal fade" id="ModalKaryawanAreaKalbar" tabindex="-1"
                    aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Karyawan Area Kalbar</h5>
                            </div>
                            <div class="modal-body">
                                <div class=" table-responsive">
                                    <table text-align: left; id="myTable" class="table table-bordered table-striped"
                                        style="font-size: 12px;">
                                        <thead>
                                            <tr>
                                                <th style="white-space: nowrap;">Foto</th>

                                                {{-- <th style="white-space: nowrap;">NIK Telkom Group</th> --}}
                                                <th style="white-space: nowrap;">Nama Karyawan</th>
                                                {{-- <th style="white-space: nowrap;">jenis Kelamin</th> --}}
                                                <th style="white-space: nowrap;">Jabatan</th>
                                                {{-- <th style="white-space: nowrap;">Loker</th>
                                                <th>Jabatan</th>
                                                <th>Band</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($karyawan_areakalbar as $k)
                                                <tr>
                                                    <td>
                                                        <div class="round-img">
                                                            <a href=""><img
                                                                    src="{{ asset('storage/foto/' . ($k->foto ? $k->foto : 'default.jpg')) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </td>
                                                    </td>
                                                    <td><a href="{{ route('karyawan.show', $k->id) }}"
                                                            style="color: black;">{{ $k->nama_karyawan }}</a></td>
                                                    <td style="white-space: nowrap;">{{ $k->unit_kerja }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @csrf

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="ModalKaryawanFormasiKosong" tabindex="-1"
                    aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Formasi Kosong</h5>
                            </div>
                            <div class="modal-body">
                                <div class=" table-responsive">
                                    <table id="myTable" class="table table-bordered table-striped"
                                        style="font-size: 12px;">
                                        <thead>
                                            <tr>
                                                <th style="white-space: nowrap;">Unit</th>
                                                <th style="white-space: nowrap;">Jabatan</th>
                                                <th style="white-space: nowrap;">Wilayah Kerja</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($jabatanList && $jabatanList->count() > 0)
                                                @foreach ($jabatanList as $formasi)
                                                    <tr>
                                                        <!-- Akses nama unit yang ter-relasi -->
                                                        <td style="white-space: nowrap;">
                                                            {{ $formasi->unit ? $formasi->unit->nama : 'Unit Tidak Ditemukan' }}
                                                        </td>
                                                        <td style="white-space: nowrap;">{{ $formasi->nama }}</td>
                                                        <td style="white-space: nowrap;">
                                                            {{ $formasi->wilayah_kerja }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="2"
                                                        style="white-space: nowrap; text-align: center;">Semua
                                                        formasi tersedia.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                @csrf
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>


                @php
                    $jenjang = ['S2'];
                    $karyawan_s2 = $karyawan->filter(function ($k) use ($jenjang) {
                        return in_array($k->jenjang_pendidikan, $jenjang);
                    });
                @endphp
                <div class="modal fade" id="ModalKaryawanS2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    data-backdrop="static" data-keyboard="false" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Karyawan S2</h5>
                            </div>
                            <div class="modal-body">
                                <div class=" table-responsive">
                                    <table text-align: left; id="myTable" class="table table-bordered table-striped"
                                        style="font-size: 12px;">
                                        <thead>
                                            <tr>
                                                <th style="white-space: nowrap;">Foto</th>
                                                <th style="white-space: nowrap;">Nama Karyawan</th>
                                                <th style="white-space: nowrap;">Unit Kerja</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($karyawan_s2 as $k)
                                                <tr>
                                                    <td>
                                                        <div class="round-img">
                                                            <a href=""><img
                                                                    src="{{ asset('storage/foto/' . ($k->foto ? $k->foto : 'default.jpg')) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </td>
                                                    </td>
                                                    <td><a href="{{ route('karyawan.show', $k->id) }}"
                                                            style="color: black;">{{ $k->nama_karyawan }}</a></td>
                                                    <td>{{ $k->unit_kerja }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @csrf
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                @php
                    $jenjang = ['S1'];
                    $karyawan_s1 = $karyawan->filter(function ($k) use ($jenjang) {
                        return in_array($k->jenjang_pendidikan, $jenjang);
                    });
                @endphp
                <div class="modal fade" id="ModalKaryawanS1" tabindex="-1" aria-labelledby="exampleModalLabel"
                    data-backdrop="static" data-keyboard="false" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">karyawan S1</h5>
                            </div>
                            <div class="modal-body">
                                <div class=" table-responsive">
                                    <table text-align: left; id="myTable" class="table table-bordered table-striped"
                                        style="font-size: 12px;">
                                        <thead>
                                            <tr>
                                                <th style="white-space: nowrap;">Foto</th>
                                                {{-- <th style="white-space: nowrap;">NIK Telkom Group</th> --}}
                                                <th style="white-space: nowrap;">Nama Karyawan</th>
                                                {{-- <th style="white-space: nowrap;">jenis Kelamin</th> --}}
                                                <th style="white-space: nowrap;">Unit Kerja</th>
                                                {{--   <th>Jabatan</th>
                                                <th>Band</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($karyawan_s1 as $k)
                                                <tr>
                                                    <td>
                                                        <div class="round-img">
                                                            <a href=""><img
                                                                    src="{{ asset('storage/foto/' . ($k->foto ? $k->foto : 'default.jpg')) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </td>
                                                    <td><a href="{{ route('karyawan.show', $k->id) }}"
                                                            style="color: black;">{{ $k->nama_karyawan }}</a></td>
                                                    <td style="white-space: nowrap;">{{ $k->unit_kerja }}</td>
                                                    {{--  <td style="white-space: nowrap;">{{ $k->jabatan }}</td>
                                                    <td style="white-space: nowrap;">{{ $k->band_kelas_posisi }}</td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @csrf

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>


                @php
                    $jenjang = ['Diploma III'];
                    $karyawan_diploma = $karyawan->filter(function ($k) use ($jenjang) {
                        return in_array($k->jenjang_pendidikan, $jenjang);
                    });
                @endphp
                <div class="modal fade" id="ModalKaryawanDiplomaIII" tabindex="-1"
                    aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Karyawan DIII</h5>
                            </div>
                            <div class="modal-body">
                                <div class=" table-responsive">
                                    <table text-align: left; id="myTable" class="table table-bordered table-striped"
                                        style="font-size: 12px;">
                                        <thead>
                                            <tr>
                                                <th style="white-space: nowrap;">Foto</th>
                                                <th style="white-space: nowrap;">Nama Karyawan</th>
                                                {{-- <th style="white-space: nowrap;">jenis Kelamin</th> --}}
                                                <th style="white-space: nowrap;">Unit Kerja</th>
                                                {{-- <th style="white-space: nowrap;">Loker</th>
                                                <th>Jabatan</th>
                                                <th>Band</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($karyawan_diploma as $k)
                                                <tr>
                                                    <td>
                                                        <div class="round-img">
                                                            <a href=""><img
                                                                    src="{{ asset('storage/foto/' . ($k->foto ? $k->foto : 'default.jpg')) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </td>
                                                    <td><a href="{{ route('karyawan.show', $k->id) }}"
                                                            style="color: black;">{{ $k->nama_karyawan }}</a></td>
                                                    <td style="white-space: nowrap;">{{ $k->unit_kerja }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @csrf

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                @php
                    $jenjang = ['SMK/SLTA Kejuruan'];
                    $karyawan_sekolah = $karyawan->filter(function ($k) use ($jenjang) {
                        return in_array($k->jenjang_pendidikan, $jenjang);
                    });
                @endphp
                <div class="modal fade" id="ModalKaryawanSekolah" tabindex="-1" aria-labelledby="exampleModalLabel"
                    data-backdrop="static" data-keyboard="false" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Karyawan SLTA </h5>
                            </div>
                            <div class="modal-body">
                                <div class=" table-responsive">
                                    <table text-align: left; id="myTable" class="table table-bordered table-striped"
                                        style="font-size: 12px;">
                                        <thead>
                                            <tr>
                                                <th style="white-space: nowrap;">Foto</th>
                                                <th style="white-space: nowrap;">Nama Karyawan</th>
                                                {{-- <th style="white-space: nowrap;">jenis Kelamin</th> --}}
                                                <th style="white-space: nowrap;">Unit Kerja</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($karyawan_sekolah as $k)
                                                <tr>
                                                    <td>
                                                        <div class="round-img">
                                                            <a href=""><img
                                                                    src="{{ asset('storage/foto/' . ($k->foto ? $k->foto : 'default.jpg')) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </td>
                                                    <td><a href="{{ route('karyawan.show', $k->id) }}"
                                                            style="color: black; white-space:
                                                            nowrap;">{{ $k->nama_karyawan }}</a>
                                                    </td>
                                                    <td style="white-space: nowrap;">{{ $k->unit_kerja }}</td>
                                                    {{-- <td style="text-align: center; vertical-align: middle;">
                                                        @if ($k->unit_kerja == 'General Manager Regional' || $k->unit_kerja == 'Manager Marketing, Sales & Solution' || $k->unit_kerja == 'Manager Planning & Delivery' || $k->unit_kerja == 'Manager Operation & Maintenance' || $k->unit_kerja == 'Manager Business Support & Risk Management' || $k->unit_kerja == 'Area Kaltimtara')
                                                            Balikpapan
                                                        @elseif($k->unit_kerja == 'Area Kalselteng')
                                                            Banjarmasin
                                                        @elseif($k->unit_kerja == 'Area Kalbar')
                                                            Pontianak
                                                        @else
                                                           
                                                            Tidak Diketahui
                                                        @endif
                                                    </td>
                                                    <td style="white-space: nowrap;">{{ $k->jabatan }}</td>
                                                    <td style="white-space: nowrap;">{{ $k->band_kelas_posisi }}</td> --}}
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @csrf

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- End Container fluid  -->
        <!-- footer -->
        <footer class="footer"> © 2018 All rights reserved. Template designed by <a
                href="https://colorlib.com">Colorlib</a></footer>
        <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->
    </div>

    {{-- @stack('javascript') --}}
    <!-- End Wrapper -->
    <!-- All Jquery -->
    {{-- <script src="{{ asset('template/') }}/js/lib/jquery/jquery.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    <script src="{{ asset('template/') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/') }}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('template/') }}/dist/js/demo.js"></script> --}}
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('template/') }}/js/lib/bootstrap/js/popper.min.js"></script>
    {{-- <script src="{{ asset('template/') }}/js/lib/bootstrap/js/bootstrap.min.js"></script> --}}
    {{-- Bisa Klik Modal Tapi tidak bisa nutup modal --}}
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('template/') }}/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('template/') }}/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="{{ asset('template/') }}/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>

    <script src="{{ asset('template/') }}/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="{{ asset('template/') }}/js/lib/chart-js/chartjs-init-demo.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('template/') }}/js/custom.min.js"></script>
    <script src="{{ asset('template/') }}/js/lib/datatables/datatables.min.js"></script>
    {{-- <script src="{{ asset('template/') }}/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js">
    </script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js">
    </script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js">
    </script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js">
    </script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js">
    </script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js">
    </script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"> --}}
    </script>
    <script src="{{ asset('template/') }}/js/lib/datatables/datatables-init.js"></script>

    <script src="{{ asset('template/') }}js/lib/sweetalert/sweetalert.init.js"></script>

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

    <!-- jQuery -->
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/XvoPHh0Jo9Lp4+p" crossorigin="anonymous">
    </script> --}}

    <!-- Popper.js -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>  --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script> --}}

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    {{-- Gak bisa klik modal dropdown tapi bisa nutup modal --}}

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('template/') }}/css/modal.css"> --}}
    {{-- D:\GitHub\Projek Telkom\Ruang-Data\public\template\css\modal.css --}}

</body>
{{-- @include('layout.grafik') --}}

</html>

{{-- @section('content')
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
 
@endsection --}}
