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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template/') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/') }}/dist/css/adminlte.min.css">
    <link href="{{ asset('template/') }}/css/helper.css" rel="stylesheet">
    <link href="{{ asset('template/') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('template/') }}/css/modal.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/') }}/css/lib/bootstrap/bootstrap.min.css">
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0/dist/chartjs-plugin-datalabels.min.js">
    </script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/echarts@5.2.2/dist/echarts.min.js"></script> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> --}}


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="fix-header fix-sidebar">
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
                        <!-- Search -->
                        {{-- <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  "
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li> --}}
                        <!-- Language -->
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>
                            <div class="dropdown-menu animated zoomIn">
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ca"></i>
                                    Canada</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i>
                                    French</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> China</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a>
                            </div>
                        </li> --}}
                        <!-- Messages -->
                        {{-- <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted  "
                                href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fa fa-th-large"></i></a>
                            <div class="dropdown-menu animated zoomIn">
                                <ul class="mega-dropdown-menu row">


                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1"
                                                    placeholder="Enter Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-lg-3 col-xlg-3 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    This Is Another Link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    This Is Another Link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- Comment -->
                        {{-- <li class="nav-item dropdown">
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
                        </li> --}}
                        <!-- End Comment -->
                        <!-- Messages -->
                        {{-- <li class="nav-item dropdown">
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
                                                <div class="user-img"> <img src="images/users/default.jpg" alt="user"
                                                        class="img-circle"> <span
                                                        class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>John Doe</h5> <span class="mail-desc">I've sung a song! See you
                                                        at</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="images/users/default.jpg" alt="user"
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
                        </li> --}}
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img
                                    src="{{ asset('storage/foto/default.jpg') }}" alt="user"
                                    class="profile-pic" /></a>
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
        @include('layout.sidebar')
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


            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="{{ asset('storage/foto/' . ($karyawan->foto ? $karyawan->foto : 'default.jpg')) }}"
                                            alt="User profile picture"
                                            style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover;">
                                    </div>
                                    <h3 class="profile-username text-center">{{ $karyawan->nama_karyawan }}</h3>

                                    <p class="text-muted text-center">{{ $karyawan->jabatan }}</p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Band Kelas</b> <a class="float-right">
                                                @forelse($jobHistories->sortByDesc('tgl_jabat') as $history)
                                                    {{ $history->band }}
                                                @empty
                                                    No job histories available
                                                @endforelse
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <b>Masa Band</b>
                                            <a class="float-right" id="masa-band"></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Masa Awal Kerja</b> <a class="float-right" id="masa-kerja"></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Masa Pensiun</b> <a class="float-right" id="masa-pensiun"></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Umur</b> <a class="float-right" id="umur"></a>
                                        </li>
                                    </ul>



                                    {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- About Me Box -->
                            {{-- <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">About Me</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fa fa-book"></i> Education</strong>

                                    <p class="text-muted">
                                        B.S. in Computer Science from the University of Tennessee at Knoxville
                                    </p>

                                    <hr>

                                    <strong><i class="fa fa-map-marker"></i> Location</strong>

                                    <p class="text-muted">Malibu, California</p>

                                    <hr>

                                    <strong><i class="fa fa-pencil"></i> Skills</strong>

                                    <p class="text-muted">
                                        <span class="tag tag-danger">UI Design</span>
                                        <span class="tag tag-success">Coding</span>
                                        <span class="tag tag-info">Javascript</span>
                                        <span class="tag tag-warning">PHP</span>
                                        <span class="tag tag-primary">Node.js</span>
                                    </p>

                                    <hr>

                                    <strong><i class="fa fa-file"></i> Notes</strong>

                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Etiam fermentum
                                        enim neque.</p>
                                </div>
                                <!-- /.card-body -->
                            </div> --}}
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#pribadi"
                                                data-toggle="tab">Pribadi</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#keluarga"
                                                data-toggle="tab">Keluarga</a></li>
                                        <li class="nav-item"><a class="nav-link " href="#job"
                                                data-toggle="tab">Job</a></li>
                                        <li class="nav-item"><a class="nav-link " href="#job_history"
                                                data-toggle="tab">Job History</a></li>
                                        <li class="nav-item"><a class="nav-link " href="#pendidikan"
                                                data-toggle="tab">Pendidikan</a></li>
                                        <li class="nav-item"><a class="nav-link " href="#pelatihan"
                                                data-toggle="tab">Pelatihan</a></li>
                                        <li class="nav-item"><a class="nav-link " href="#keterampilan"
                                                data-toggle="tab">Keterampilan</a></li>
                                        <li class="nav-item"><a class="nav-link " href="#prestasi"
                                                data-toggle="tab">Prestasi</a></li>
                                        <li class="nav-item"><a class="nav-link " href="#talent_review"
                                                data-toggle="tab">Talent Review</a></li>
                                        <li class="nav-item"><a class="nav-link " href="#catatan"
                                                data-toggle="tab">Catatan</a></li>
                                        <li class="nav-item"><a class="nav-link " href="#other"
                                                data-toggle="tab">Lain-lain</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">

                                        <div class="active tab-pane" id="pribadi">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card ">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Pribadi</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal"
                                                                    data-target="#ModalEditPribadi">
                                                                    Edit Pribadi
                                                                </button>
                                                            </div>
                                                            <!-- /.card-tools -->
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">Tanggal
                                                                    Lahir</label>
                                                                <div class="col-lg-8">
                                                                    <span
                                                                        class="fw-semibold text-gray-800 fs-6">{{ $karyawan->tgl_lahir }}</span>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">Kota
                                                                    Lahir</label>
                                                                <div class="col-lg-8">
                                                                    <span
                                                                        class="fw-semibold text-gray-800 fs-6">{{ $karyawan->kota_lahir }}</span>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">Jenis
                                                                    Kelamin</label>
                                                                <div class="col-lg-8">
                                                                    <span
                                                                        class="fw-semibold text-gray-800 fs-6">{{ $karyawan->jenis_kelamin }}</span>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">Alamat
                                                                    Domisili</label>
                                                                <div class="col-lg-8">
                                                                    <span
                                                                        class="fw-semibold text-gray-800 fs-6">{{ $karyawan->alamat }}</span>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-7">
                                                                <label
                                                                    class="col-lg-4 fw-semibold text-muted">Agama</label>
                                                                <div class="col-lg-8">
                                                                    <span
                                                                        class="fw-semibold text-gray-800 fs-6">{{ $karyawan->agama }}</span>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-7">
                                                                <label
                                                                    class="col-lg-4 fw-semibold text-muted">Suku</label>
                                                                <div class="col-lg-8">
                                                                    <span
                                                                        class="fw-semibold text-gray-800 fs-6">{{ $karyawan->suku }}</span>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">Golongan
                                                                    Darah</label>
                                                                <div class="col-lg-8">
                                                                    <span
                                                                        class="fw-semibold text-gray-800 fs-6">{{ $karyawan->golongan_darah }}</span>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">Kontak
                                                                    Darurat</label>
                                                                <div class="col-lg-8">
                                                                    <span
                                                                        class="fw-semibold text-gray-800 fs-6">{{ $karyawan->kontak_darurat }}</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- /# column -->
                                            </div>
                                        </div>

                                        <div class="modal fade" id="ModalEditPribadi" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" data-backdrop="static"
                                            data-keyboard="false" aria-hidden="true">
                                            <div
                                                class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data
                                                            Pribadi</h5>
                                                        @if ($errors->any())
                                                            <span class="text-danger" style="font-size: 0.9em;">
                                                                {{ $errors->first() }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('karyawan.update_pribadi', $karyawan->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="card-body">
                                                                <div class="form-body">
                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="tgl_lahir"
                                                                                    class="control-label">Tanggal
                                                                                    Lahir</label>
                                                                                <input type="date" id="tgl_lahir"
                                                                                    value="{{ $karyawan->tgl_lahir }}"
                                                                                    name="tgl_lahir"
                                                                                    class="form-control"
                                                                                    placeholder="dd/mm/yyyy"
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
                                                                                <label for="kota_lahir"
                                                                                    class="control-label">Kota
                                                                                    Lahir</label>
                                                                                <input type="text" id="kota_lahir"
                                                                                    value="{{ $karyawan->kota_lahir }}"
                                                                                    name="kota_lahir"
                                                                                    class="form-control"
                                                                                    @error('kota_lahir') is-invalid @enderror
                                                                                    value="{{ old('kota_lahir') }}">
                                                                                @error('kota_lahir')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                                <small class="form-control-feedback">
                                                                                </small>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="jenis_kelamin"
                                                                                    class="control-label">Jenis
                                                                                    Kelamin</label>
                                                                                <select
                                                                                    class="form-control custom-select @error('jenis_kelamin') is-invalid @enderror"
                                                                                    id="jenis_kelamin"
                                                                                    name="jenis_kelamin">
                                                                                    <option value="">Pilih Jenis
                                                                                        Kelamin</option>
                                                                                    <option value="Laki-laki"
                                                                                        {{ old('jenis_kelamin') == 'Laki-laki' || (isset($karyawan) && $karyawan->jenis_kelamin == 'Laki-laki') ? 'selected' : '' }}>
                                                                                        Laki-laki</option>
                                                                                    <option value="Perempuan"
                                                                                        {{ old('jenis_kelamin') == 'Perempuan' || (isset($karyawan) && $karyawan->jenis_kelamin == 'Perempuan') ? 'selected' : '' }}>
                                                                                        Perempuan</option>
                                                                                </select>
                                                                                @error('jenis_kelamin')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror

                                                                                @error('jenis_kelamin')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-6 ">
                                                                            <div class="form-group">
                                                                                <label for="alamat">Alamat</label>
                                                                                <input type="text"
                                                                                    value="{{ $karyawan->alamat }}"
                                                                                    class="form-control"
                                                                                    name="alamat"@error('alamat') is-invalid @enderror
                                                                                    value="{{ old('alamat') }}">
                                                                                @error('alamat')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="agama"
                                                                                    class="control-label">Agama</label>
                                                                                <select
                                                                                    class="form-control custom-select @error('agama') is-invalid @enderror"
                                                                                    id="agama" name="agama">
                                                                                    <option value="">Pilih Agama
                                                                                    </option>
                                                                                    <option value="Islam"
                                                                                        {{ old('agama') == 'Islam' || $karyawan->agama == 'Islam' ? 'selected' : '' }}>
                                                                                        Islam</option>
                                                                                    <option value="katolik"
                                                                                        {{ old('agama') == 'Katolik' || $karyawan->agama == 'Katolik' ? 'selected' : '' }}>
                                                                                        Kristen Katolik</option>
                                                                                    <option value="kristen protestan"
                                                                                        {{ old('agama') == 'Kristen protestan' || $karyawan->agama == 'Kristen protestan' ? 'selected' : '' }}>
                                                                                        Kristen Protestan</option>
                                                                                    <option value="hindu"
                                                                                        {{ old('agama') == 'Hindu' || $karyawan->agama == 'Hindu' ? 'selected' : '' }}>
                                                                                        Hindu</option>
                                                                                    <option value="budha"
                                                                                        {{ old('agama') == 'Budha' || $karyawan->agama == 'Budha' ? 'selected' : '' }}>
                                                                                        Budha</option>
                                                                                    <option value="kong hucuh"
                                                                                        {{ old('agama') == 'Kong hucuh' || $karyawan->agama == 'Kong Hucuh' ? 'selected' : '' }}>
                                                                                        Kong Hucu</option>
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
                                                                                <label class="control-label">Kontak
                                                                                    Darurat</label>
                                                                                <input type="text"
                                                                                    value="{{ $karyawan->kontak_darurat }}"
                                                                                    name="kontak_darurat"
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


                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="suku">suku</label>
                                                                                <input type="text"
                                                                                    value="{{ $karyawan->suku }}"
                                                                                    class="form-control"
                                                                                    id="suku" name="suku">
                                                                                @error('suku')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="golongan_darah"
                                                                                    class="control-label">Golongan
                                                                                    Darah</label>
                                                                                <select
                                                                                    class="form-control custom-select @error('golongan_darah') is-invalid @enderror"
                                                                                    id="golongan_darah"
                                                                                    name="golongan_darah">
                                                                                    <option value="">Pilih
                                                                                        Golongan Darah</option>
                                                                                    <option value="A"
                                                                                        {{ old('golongan_darah') == 'A' || $karyawan->golongan_darah == 'A' ? 'selected' : '' }}>
                                                                                        A</option>
                                                                                    <option value="AB"
                                                                                        {{ old('golongan_darah') == 'AB' || $karyawan->golongan_darah == 'AB' ? 'selected' : '' }}>
                                                                                        AB</option>
                                                                                    <option value="B"
                                                                                        {{ old('golongan_darah') == 'B' || $karyawan->golongan_darah == 'B' ? 'selected' : '' }}>
                                                                                        B</option>
                                                                                    <option value="O"
                                                                                        {{ old('golongan_darah') == 'O' || $karyawan->golongan_darah == 'O' ? 'selected' : '' }}>
                                                                                        O</option>
                                                                                </select>
                                                                                @error('golongan_darah')
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
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="keluarga">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card ">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Keluarga</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal"
                                                                    data-target="#ModalEditKeluarga">
                                                                    Edit Keluarga
                                                                </button>
                                                            </div>
                                                            <!-- /.card-tools -->
                                                        </div>
                                                        <!-- /.card-header -->

                                                        <div class="card-body p-9">
                                                            @if ($data_keluarga->isEmpty())
                                                                <div class="row mb-7">
                                                                    <div class="col-lg-12">
                                                                        <span class="fw-bold fs-6 text-gray-800">Tidak
                                                                            ada data keluarga.</span>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                @foreach ($data_keluarga as $keluarga)
                                                                    <div class="row mb-7">
                                                                        <label
                                                                            class="col-lg-4 fw-semibold text-muted">Status
                                                                            Nikah</label>
                                                                        <div class="col-lg-8">
                                                                            <span
                                                                                class="fw-bold fs-6 text-gray-800">{{ $keluarga->status_nikah }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-7">
                                                                        <label
                                                                            class="col-lg-4 fw-semibold text-muted">Tanggal
                                                                            Nikah</label>
                                                                        <div class="col-lg-8">
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $keluarga->tgl_nikah }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-7">
                                                                        <label
                                                                            class="col-lg-4 fw-semibold text-muted">Tanggungan
                                                                            Keluarga</label>
                                                                        <div class="col-lg-8">
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $keluarga->tanggungan_keluarga }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-7">
                                                                        <label
                                                                            class="col-lg-4 fw-semibold text-muted">Nomor
                                                                            Kartu Keluarga</label>
                                                                        <div class="col-lg-8">
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $keluarga->nomor_kartu_keluarga }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-7">
                                                                        <label
                                                                            class="col-lg-4 fw-semibold text-muted">Nama
                                                                            Pasangan (Suami/Istri)</label>
                                                                        <div class="col-lg-8">
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $keluarga->nama_pasangan }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-7">
                                                                        <label
                                                                            class="col-lg-4 fw-semibold text-muted">Nama
                                                                            Anak Pertama</label>
                                                                        <div class="col-lg-8">
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $keluarga->nama_anak_pertama }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-7">
                                                                        <label
                                                                            class="col-lg-4 fw-semibold text-muted">Tanggal
                                                                            Lahir Anak Pertama</label>
                                                                        <div class="col-lg-8">
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $keluarga->tgl_lahir_anak_pertama }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-7">
                                                                        <label
                                                                            class="col-lg-4 fw-semibold text-muted">Nama
                                                                            Anak Kedua</label>
                                                                        <div class="col-lg-8">
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $keluarga->nama_anak_kedua }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-7">
                                                                        <label
                                                                            class="col-lg-4 fw-semibold text-muted">Tanggal
                                                                            Lahir Anak Kedua</label>
                                                                        <div class="col-lg-8">
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $keluarga->tgl_lahir_anak_kedua }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-7">
                                                                        <label
                                                                            class="col-lg-4 fw-semibold text-muted">Nama
                                                                            Anak Ketiga</label>
                                                                        <div class="col-lg-8">
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $keluarga->nama_anak_ketiga }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-7">
                                                                        <label
                                                                            class="col-lg-4 fw-semibold text-muted">Tanggal
                                                                            Lahir Anak Ketiga</label>
                                                                        <div class="col-lg-8">
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $keluarga->tgl_lahir_anak_ketiga }}</span>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="ModalEditKeluarga" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" data-backdrop="static"
                                            data-keyboard="false" aria-hidden="true">
                                            <div
                                                class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data
                                                            Keluarga</h5>
                                                        @if ($errors->any())
                                                            <span class="text-danger" style="font-size: 0.9em;">
                                                                {{ $errors->first() }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('karyawan.update_keluarga', $karyawan->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="card-body">
                                                                <div class="form-body">
                                                                    <div class="row p-t-20">

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="status_nikah"
                                                                                    class="control-label">Status
                                                                                    Menikah</label>
                                                                                <select
                                                                                    class="form-control custom-select"
                                                                                    id="status_nikah"
                                                                                    name="status_nikah">
                                                                                    <option value="">Pilih Status
                                                                                        Menikah</option>
                                                                                    <option value="Menikah"
                                                                                        {{ $karyawan->status_nikah == 'Menikah' ? 'selected' : '' }}>
                                                                                        Menikah</option>
                                                                                    <option value="Belum Menikah"
                                                                                        {{ $karyawan->status_nikah == 'Belum Menikah' ? 'selected' : '' }}>
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
                                                                                <label for="tgl_lahir"
                                                                                    class="control-label">Tanggal
                                                                                    Nikah</label>
                                                                                <input type="date" id="tgl_nikah"
                                                                                    value="{{ $karyawan->tgl_nikah }}"
                                                                                    name="tgl_nikah"
                                                                                    class="form-control"
                                                                                    placeholder="dd/mm/yyyy"
                                                                                    @error('tgl_nikah') is-invalid @enderror
                                                                                    value="{{ old('tgl_nikah') }}">
                                                                                @error('tgl_nikah')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="jumlah_anak">Jumlah
                                                                                    Anak</label>
                                                                                <input type="number" min="0"
                                                                                    class="form-control"
                                                                                    id="jumlah_anak"
                                                                                    name="jumlah_anak">
                                                                                @error('jumlah_anak')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6 ">
                                                                            <div class="form-group">
                                                                                <label for="alamat">Nomor Kartu
                                                                                    keluarga</label>
                                                                                <input type="text"
                                                                                    value="{{ $karyawan->nomor_kartu_keluarga }}"
                                                                                    class="form-control"
                                                                                    name="nomor_kartu_keluarga"@error('nomor_kartu_keluarga') is-invalid @enderror
                                                                                    value="{{ old('nomor_kartu_keluarga') }}">
                                                                                @error('nomor_kartu_keluarga')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="nama_pasangan">Nama
                                                                                    Pasangan</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    id="nama_pasangan"
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
                                                                                <label class="control-label">Nama Anak
                                                                                    Pertama</label>
                                                                                <input type="text"
                                                                                    value="{{ $karyawan->nama_anak_pertama }}"
                                                                                    name="nama_anak_pertama"
                                                                                    class="form-control"
                                                                                    @error('nama_anak_pertama') is-invalid @enderror
                                                                                    value="{{ old('nama_anak_pertama') }}">
                                                                                @error('nama_anak_pertama')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="tgl_lahir"
                                                                                    class="control-label">Tanggal Lahir
                                                                                    Anak
                                                                                    Pertama</label>
                                                                                <input type="date"
                                                                                    id="tgl_lahir_anak_pertama"
                                                                                    value="{{ $karyawan->tgl_lahir_anak_pertama }}"
                                                                                    name="tgl_lahir_anak_pertama"
                                                                                    class="form-control"
                                                                                    placeholder="dd/mm/yyyy"
                                                                                    @error('tgl_lahir_anak_pertama') is-invalid @enderror
                                                                                    value="{{ old('tgl_lahir_anak_pertama') }}">
                                                                                @error('tgl_lahir_anak_pertama')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Nama Anak
                                                                                    Kedua</label>
                                                                                <input type="text"
                                                                                    value="{{ $karyawan->nama_anak_kedua }}"
                                                                                    name="nama_anak_kedua"
                                                                                    class="form-control"
                                                                                    @error('nama_anak_kedua') is-invalid @enderror
                                                                                    value="{{ old('nama_anak_kedua') }}">
                                                                                @error('nama_anak_kedua')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="tgl_lahir"
                                                                                    class="control-label">Tanggal Lahir
                                                                                    Anak
                                                                                    Kedua</label>
                                                                                <input type="date"
                                                                                    id="tgl_lahir_anak_kedua"
                                                                                    value="{{ $karyawan->tgl_lahir_anak_kedua }}"
                                                                                    name="tgl_lahir_anak_kedua"
                                                                                    class="form-control"
                                                                                    placeholder="dd/mm/yyyy"
                                                                                    @error('tgl_lahir_anak_kedua') is-invalid @enderror
                                                                                    value="{{ old('tgl_lahir_anak_kedua') }}">
                                                                                @error('tgl_lahir_anak_kedua')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Nama Anak
                                                                                    Ketiga</label>
                                                                                <input type="text"
                                                                                    value="{{ $karyawan->nama_anak_ketiga }}"
                                                                                    name="nama_anak_ketiga"
                                                                                    class="form-control"
                                                                                    @error('nama_anak_ketiga') is-invalid @enderror
                                                                                    value="{{ old('nama_anak_ketiga') }}">
                                                                                @error('nama_anak_ketiga')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="tgl_lahir"
                                                                                    class="control-label">Tanggal Lahir
                                                                                    Anak
                                                                                    Ketiga</label>
                                                                                <input type="date"
                                                                                    id="tgl_lahir_anak_ketiga"
                                                                                    value="{{ $karyawan->tgl_lahir_anak_ketiga }}"
                                                                                    name="tgl_lahir_anak_ketiga"
                                                                                    class="form-control"
                                                                                    placeholder="dd/mm/yyyy"
                                                                                    @error('tgl_lahir_anak_ketiga') is-invalid @enderror
                                                                                    value="{{ old('tgl_lahir_anak_ketiga') }}">
                                                                                @error('tgl_lahir_anak_ketiga')
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
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="job">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Job</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal" data-target="#ModalEditJob">
                                                                    Edit Job
                                                                </button>
                                                            </div>
                                                            <!-- /.card-tools -->
                                                        </div>
                                                        <!-- /.card-header -->

                                                        <div class="card-body p-9">
                                                            <!-- NIK TelkomProperty -->
                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">NIK
                                                                    TelkomProperty</label>
                                                                <div class="col-lg-8">
                                                                    @if ($karyawan->datakerjakaryawans->isNotEmpty())
                                                                        @foreach ($karyawan->datakerjakaryawans as $dataKerja)
                                                                            <span
                                                                                class="fw-bold fs-6 text-gray-800">{{ $dataKerja->nik }}</span><br>
                                                                        @endforeach
                                                                    @else
                                                                        <span class="text-muted">Tidak ada data
                                                                            NIK</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <!-- NIK TelkomGroup -->
                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">NIK
                                                                    TelkomGroup</label>
                                                                <div class="col-lg-8">
                                                                    @if ($karyawan->datakerjakaryawans->isNotEmpty())
                                                                        @foreach ($karyawan->datakerjakaryawans as $dataKerja)
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $dataKerja->telkomgroup }}</span>
                                                                        @endforeach
                                                                    @else
                                                                        <span class="text-muted">Tidak ada data NIK
                                                                            TelkomGroup</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <!-- Nama Posisi (Jabatan) -->
                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">Nama
                                                                    Posisi (Jabatan)</label>
                                                                <div class="col-lg-8">
                                                                    @if ($karyawan->datakerjakaryawans->isNotEmpty())
                                                                        @foreach ($karyawan->datakerjakaryawans as $dataKerja)
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $dataKerja->jabatan }}</span>
                                                                        @endforeach
                                                                    @else
                                                                        <span class="text-muted">Tidak ada data
                                                                            Jabatan</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <!-- Unit Kerja -->
                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">Unit
                                                                    Kerja</label>
                                                                <div class="col-lg-8">
                                                                    @if ($karyawan->datakerjakaryawans->isNotEmpty())
                                                                        @foreach ($karyawan->datakerjakaryawans as $dataKerja)
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $dataKerja->unit_kerja }}</span><br>
                                                                        @endforeach
                                                                    @else
                                                                        <span class="text-muted">Tidak ada data Unit
                                                                            Kerja</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <!-- Lokasi Kerja -->
                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">Lokasi
                                                                    Kerja</label>
                                                                <div class="col-lg-8">
                                                                    @if ($karyawan->datakerjakaryawans->isNotEmpty())
                                                                        @foreach ($karyawan->datakerjakaryawans as $dataKerja)
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">
                                                                                {{ $dataKerja->lokasi_kerja ?? 'Tidak Diketahui' }}
                                                                            </span><br>
                                                                        @endforeach
                                                                    @else
                                                                        <span class="text-muted">Tidak ada data Lokasi
                                                                            Kerja</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <!-- Band Position -->
                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">Band
                                                                    Position</label>
                                                                <div class="col-lg-8">
                                                                    @if ($karyawan->datakerjakaryawans->isNotEmpty())
                                                                        @foreach ($karyawan->datakerjakaryawans as $dataKerja)
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $dataKerja->band_kelas_posisi }}</span><br>
                                                                        @endforeach
                                                                    @else
                                                                        <span class="text-muted">Tidak ada data Band
                                                                            Position</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <!-- Tanggal Level -->
                                                            {{-- <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">Tanggal
                                                                    Level</label>
                                                                <div class="col-lg-8">
                                                                    @if ($karyawan->datakerjakaryawans->isNotEmpty())
                                                                        @foreach ($karyawan->datakerjakaryawans as $dataKerja)
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $dataKerja->tanggal_level }}</span><br>
                                                                        @endforeach
                                                                    @else
                                                                        <span class="text-muted">Tidak ada data Tanggal
                                                                            Level</span>
                                                                    @endif
                                                                </div>
                                                            </div> --}}

                                                            <!-- Tanggal Mulai Kerja -->
                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">Tanggal
                                                                    Mulai Kerja</label>
                                                                <div class="col-lg-8">
                                                                    @if ($karyawan->datakerjakaryawans->isNotEmpty())
                                                                        @foreach ($karyawan->datakerjakaryawans as $dataKerja)
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $dataKerja->tgl_bergabung }}</span><br>
                                                                        @endforeach
                                                                    @else
                                                                        <span class="text-muted">Tidak ada data Tanggal
                                                                            Mulai Kerja</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <!-- Status Karyawan -->
                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">Status
                                                                    Karyawan</label>
                                                                <div class="col-lg-8">
                                                                    @if ($karyawan->datakerjakaryawans->isNotEmpty())
                                                                        @foreach ($karyawan->datakerjakaryawans as $dataKerja)
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">Karyawan
                                                                                Tetap</span><br>
                                                                        @endforeach
                                                                    @else
                                                                        <span class="text-muted">Tidak ada data Status
                                                                            Karyawan</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <!-- Nomor SK Pengangkatan Karyawan Tetap -->
                                                            {{-- <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">Nomor SK
                                                                    Pengangkatan Karyawan Tetap</label>
                                                                <div class="col-lg-8">
                                                                    @foreach ($karyawan->datakerjakaryawans as $dataKerja)
                                                                        @if (!empty($dataKerja->nomor_sk))
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $dataKerja->nomor_sk }}</span><br>
                                                                        @else
                                                                            <span class="text-muted">Tidak ada data
                                                                                Nomor SK</span>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div> --}}



                                                            {{-- <!-- No. Kontrak -->
                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">No.
                                                                    Kontrak
                                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                                        title="No Kontrak Khusus Kontrak">
                                                                        <i class="ki-duotone ki-information fs-7">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                            <span class="path3"></span>
                                                                        </i>
                                                                    </span>
                                                                </label>
                                                                <div class="col-lg-8">
                                                                    @if ($karyawan->datakerjakaryawans->isNotEmpty())
                                                                        @foreach ($karyawan->datakerjakaryawans as $dataKerja)
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $dataKerja->no_kontrak }}</span><br>
                                                                        @endforeach
                                                                    @else
                                                                        <span class="text-muted">Tidak ada data No.
                                                                            Kontrak</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <!-- Mulai Kontrak -->
                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">Mulai
                                                                    Kontrak
                                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                                        title="Tanggal Mulai Kontrak">
                                                                        <i class="ki-duotone ki-information fs-7">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                            <span class="path3"></span>
                                                                        </i>
                                                                    </span>
                                                                </label>
                                                                <div class="col-lg-8">
                                                                    @if ($karyawan->datakerjakaryawans->isNotEmpty())
                                                                        @foreach ($karyawan->datakerjakaryawans as $dataKerja)
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $dataKerja->mulai_kontrak }}</span><br>
                                                                        @endforeach
                                                                    @else
                                                                        <span class="text-muted">Tidak ada data Mulai
                                                                            Kontrak</span>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                            <!-- Akhir Kontrak -->
                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">Akhir
                                                                    Kontrak
                                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                                        title="Tanggal Akhir Kontrak">
                                                                        <i class="ki-duotone ki-information fs-7">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                            <span class="path3"></span>
                                                                        </i>
                                                                    </span>
                                                                </label>
                                                                <div class="col-lg-8">
                                                                    @if ($karyawan->datakerjakaryawans->isNotEmpty())
                                                                        @foreach ($karyawan->datakerjakaryawans as $dataKerja)
                                                                            <span
                                                                                class="fw-semibold text-gray-800 fs-6">{{ $dataKerja->akhir_kontrak }}</span><br>
                                                                        @endforeach
                                                                    @else
                                                                        <span class="text-muted">Tidak ada data Akhir
                                                                            Kontrak</span>
                                                                    @endif
                                                                </div>
                                                            </div> --}}
                                                        </div>


                                                        <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="ModalEditJob" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" data-backdrop="static"
                                            data-keyboard="false" aria-hidden="true">
                                            <div
                                                class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Job
                                                            History</h5>
                                                        @if ($errors->any())
                                                            <span class="text-danger" style="font-size: 0.9em;">
                                                                {{ $errors->first() }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('karyawan.add_job_history') }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="karyawan_id"
                                                                value="{{ $karyawan->id }}">
                                                            <div class="card-body">
                                                                <div class="form-body">
                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">NIK
                                                                                    Telpro</label>
                                                                                <input type="number" name="nik"
                                                                                    min="0"
                                                                                    class="form-control"
                                                                                    @error('nik') is-invalid @enderror
                                                                                    value="{{ $karyawan->nik }}">
                                                                                @error('nik')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="kota_lahir"
                                                                                    class="control-label">NIK Telkom
                                                                                    Group</label>
                                                                                <input type="text"
                                                                                    name="nik_telpro"
                                                                                    class="form-control"
                                                                                    @error('nik_telpro') is-invalid @enderror
                                                                                    value="{{ $karyawan->telkomgroup }}">
                                                                                @error('nik_telpro')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                                <small class="form-control-feedback">
                                                                                </small>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="jabatan">Nama
                                                                                    Jabatan</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    id="jabatan"
                                                                                    name="jabatan"@error('jabatan') is-invalid @enderror
                                                                                    value="{{ $karyawan->jabatan }}">
                                                                                @error('jabatan')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="unit_kerja"
                                                                                    class="control-label">Unit
                                                                                    Kerja</label>
                                                                                <select
                                                                                    class="form-control custom-select @error('unit_kerja') is-invalid @enderror"
                                                                                    id="unit_kerja" name="unit_kerja">
                                                                                    <option value="">Pilih Unit
                                                                                        Kerja</option>
                                                                                    <option
                                                                                        value="General Manager Regional"
                                                                                        {{ old('unit_kerja') == 'General Manager Regional' || (isset($karyawan) && $karyawan->unit_kerja == 'General Manager Regional') ? 'selected' : '' }}>
                                                                                        General Manager Regional
                                                                                    </option>
                                                                                    <option
                                                                                        value="Manager Marketing, Sales & Solution"
                                                                                        {{ old('unit_kerja') == 'Manager Marketing, Sales & Solution' || (isset($karyawan) && $karyawan->unit_kerja == 'Manager Marketing, Sales & Solution') ? 'selected' : '' }}>
                                                                                        Manager Marketing, Sales &
                                                                                        Solution</option>
                                                                                    <option
                                                                                        value="Manager Planning & Delivery"
                                                                                        {{ old('unit_kerja') == 'Manager Planning & Delivery' || (isset($karyawan) && $karyawan->unit_kerja == 'Manager Planning & Delivery') ? 'selected' : '' }}>
                                                                                        Manager Planning & Delivery
                                                                                    </option>
                                                                                    <option
                                                                                        value="Manager Operation & Maintenance"
                                                                                        {{ old('unit_kerja') == 'Manager Operation & Maintenance' || (isset($karyawan) && $karyawan->unit_kerja == 'Manager Operation & Maintenance') ? 'selected' : '' }}>
                                                                                        Manager Operation & Maintenance
                                                                                    </option>
                                                                                    <option
                                                                                        value="Manager Business Support & Risk Management"
                                                                                        {{ old('unit_kerja') == 'Manager Business Support & Risk Management' || (isset($karyawan) && $karyawan->unit_kerja == 'Manager Business Support & Risk Management') ? 'selected' : '' }}>
                                                                                        Manager Business Support & Risk
                                                                                        Management</option>
                                                                                    <option value="Area Kaltimtara"
                                                                                        {{ old('unit_kerja') == 'Area Kaltimtara' || (isset($karyawan) && $karyawan->unit_kerja == 'Area Kaltimtara') ? 'selected' : '' }}>
                                                                                        Area Kaltimtara</option>
                                                                                    <option value="Area Kalselteng"
                                                                                        {{ old('unit_kerja') == 'Area Kalselteng' || (isset($karyawan) && $karyawan->unit_kerja == 'Area Kalselteng') ? 'selected' : '' }}>
                                                                                        Area Kalselteng</option>
                                                                                    <option value="Area Kalbar"
                                                                                        {{ old('unit_kerja') == 'Area Kalbar' || (isset($karyawan) && $karyawan->unit_kerja == 'Area Kalbar') ? 'selected' : '' }}>
                                                                                        Area Kalbar</option>
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
                                                                                <label class="control-label">Kelas Band
                                                                                    Posisi</label>
                                                                                <select
                                                                                    class="form-control custom-select @error('band_kelas_posisi') is-invalid @enderror"
                                                                                    name="band_kelas_posisi">
                                                                                    <option value="">Pilih Kelas
                                                                                        Band Posisi</option>
                                                                                    <option value="I"
                                                                                        {{ old('band_kelas_posisi') == 'I' || (isset($karyawan) && $karyawan->band_kelas_posisi == 'I') ? 'selected' : '' }}>
                                                                                        I</option>
                                                                                    <option value="II"
                                                                                        {{ old('band_kelas_posisi') == 'II' || (isset($karyawan) && $karyawan->band_kelas_posisi == 'II') ? 'selected' : '' }}>
                                                                                        II</option>
                                                                                    <option value="III"
                                                                                        {{ old('band_kelas_posisi') == 'III' || (isset($karyawan) && $karyawan->band_kelas_posisi == 'III') ? 'selected' : '' }}>
                                                                                        III</option>
                                                                                    <option value="IV"
                                                                                        {{ old('band_kelas_posisi') == 'IV' || (isset($karyawan) && $karyawan->band_kelas_posisi == 'IV') ? 'selected' : '' }}>
                                                                                        IV</option>
                                                                                    <option value="V"
                                                                                        {{ old('band_kelas_posisi') == 'V' || (isset($karyawan) && $karyawan->band_kelas_posisi == 'V') ? 'selected' : '' }}>
                                                                                        V</option>
                                                                                    <option value="VI"
                                                                                        {{ old('band_kelas_posisi') == 'VI' || (isset($karyawan) && $karyawan->band_kelas_posisi == 'VI') ? 'selected' : '' }}>
                                                                                        VI</option>
                                                                                    <option value="VII"
                                                                                        {{ old('band_kelas_posisi') == 'VII' || (isset($karyawan) && $karyawan->band_kelas_posisi == 'VII') ? 'selected' : '' }}>
                                                                                        VII</option>
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
                                                                                <label
                                                                                    for="tgl_bergabung">tgl_bergabung</label>
                                                                                <input type="date"
                                                                                    class="form-control"
                                                                                    id="tgl_bergabung"
                                                                                    value="{{ $karyawan->tgl_bergabung }}"
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
                                                                                <label for="nomor_sk">Nomor Surat
                                                                                    Keputusan</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    id="suku"
                                                                                    value="{{ $karyawan->nomor_sk }}"
                                                                                    name="nomor_sk">
                                                                                @error('nomor_sk')
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
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="job_history">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card ">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Job History</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal"
                                                                    data-target="#ModalAddJobHistory">
                                                                    Tambah Job History
                                                                </button>
                                                            </div>
                                                            <!-- /.card-tools -->
                                                        </div>
                                                        <!-- /.card-header -->

                                                        <div class="card-body p-9">
                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-hover table-bordered table-striped">
                                                                    <thead>
                                                                        <tr class="text-center">
                                                                            <th>Nama Jabatan</th>
                                                                            <th>Tanggal Menjabat</th>
                                                                            <th>Lokasi Penempatan</th>
                                                                            <th>Band Posisi</th>
                                                                            <th>Lampiran Jabatan</th>
                                                                            <th>Actions</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @forelse($jobHistories->sortByDesc('tgl_jabat') as $history)
                                                                            <!-- Mengurutkan berdasarkan tanggal terbaru -->
                                                                            <tr>
                                                                                <td>{{ $history->nama }}</td>
                                                                                <td>{{ $history->tgl_jabat }}</td>
                                                                                <td>{{ $history->lokasi }}</td>
                                                                                <td>{{ $history->band }}</td>
                                                                                <td>
                                                                                    @if ($history->lampiran)
                                                                                        <a href="{{ asset('storage/' . $history->lampiran) }}"
                                                                                            class="btn btn-secondary btn-sm"
                                                                                            download>Download</a>
                                                                                    @else
                                                                                        <span
                                                                                            class="badge bg-warning text-dark">Belum
                                                                                            ada file</span>
                                                                                    @endif
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    <button type="button"
                                                                                        class="btn btn-light btn-sm"
                                                                                        data-toggle="modal"
                                                                                        data-target="#ModalEditJobHistory">
                                                                                        Edit
                                                                                    </button>

                                                                                    <button
                                                                                        class="btn btn-danger btn-sm"
                                                                                        data-bs-toggle="modal"
                                                                                        data-bs-target="#commonDelete"
                                                                                        onclick="set_common_delete('{{ $history->id }}','riwayat_jabatan');">
                                                                                        Delete
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                        @empty
                                                                            <tr>
                                                                                <td colspan="6"
                                                                                    class="text-center">Tidak ada data
                                                                                    riwayat jabatan.</td>
                                                                            </tr>
                                                                        @endforelse
                                                                    </tbody>
                                                                </table>

                                                            </div>

                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="ModalAddJobHistory" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" data-backdrop="static"
                                            data-keyboard="false" aria-hidden="true">
                                            <div
                                                class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Job
                                                            History</h5>
                                                        @if ($errors->any())
                                                            <span class="text-danger" style="font-size: 0.9em;">
                                                                {{ $errors->first() }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('karyawan.add_job_history') }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="karyawan_id"
                                                                value="{{ $karyawan->id }}">
                                                            <div class="card-body">
                                                                <div class="form-body">
                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="tgl_lahir"
                                                                                    class="control-label">Tanggal
                                                                                    Menjabat</label>
                                                                                <input type="date" name="tgl_jabat"
                                                                                    class="form-control"
                                                                                    placeholder="dd/mm/yyyy"
                                                                                    @error('tgl_jabat') is-invalid @enderror
                                                                                    value="{{ old('tgl_jabat') }}">
                                                                                @error('tgl_jabat')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="kota_lahir"
                                                                                    class="control-label">Nama
                                                                                    Jabatan</label>
                                                                                <input type="text" name="nama"
                                                                                    class="form-control"
                                                                                    @error('nama') is-invalid @enderror
                                                                                    value="{{ old('nama') }}">
                                                                                @error('nama')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                                <small class="form-control-feedback">
                                                                                </small>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6 ">
                                                                            <div class="form-group">
                                                                                <label for="lokasi">Lokasi
                                                                                    Penempatan</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    name="lokasi"@error('lokasi') is-invalid @enderror
                                                                                    value="{{ old('lokasi') }}">
                                                                                @error('lokasi')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Kelas Band
                                                                                    Posisi</label>
                                                                                <select
                                                                                    class="form-control custom-select"
                                                                                    name="band">
                                                                                    <option value="">Pilih Kelas
                                                                                        Band Posisi</option>
                                                                                    <option value="I"
                                                                                        {{ old('band') == 'I' ? 'selected' : '' }}>
                                                                                        I
                                                                                    </option>
                                                                                    <option value="II"
                                                                                        {{ old('band') == 'II' ? 'selected' : '' }}>
                                                                                        II
                                                                                    </option>
                                                                                    <option value="III"
                                                                                        {{ old('band') == 'III' ? 'selected' : '' }}>
                                                                                        III
                                                                                    </option>
                                                                                    <option value="IV"
                                                                                        {{ old('band') == 'IV' ? 'selected' : '' }}>
                                                                                        IV
                                                                                    </option>
                                                                                    <option value="V"
                                                                                        {{ old('band') == 'V' ? 'selected' : '' }}>
                                                                                        V
                                                                                    </option>
                                                                                    <option value="VI"
                                                                                        {{ old('band') == 'VI' ? 'selected' : '' }}>
                                                                                        VI
                                                                                    </option>
                                                                                    <option value="VII"
                                                                                        {{ old('band') == 'VII' ? 'selected' : '' }}>
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
                                                                                <label
                                                                                    for="file_rekening_bank">Lampiran
                                                                                    Sk</label>
                                                                                <input type="file"
                                                                                    class="form-control"
                                                                                    id="lampiran" name="lampiran">
                                                                                @error('lampiran')
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
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="ModalEditJobHistory" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" data-backdrop="static"
                                            data-keyboard="false" aria-hidden="true">
                                            <div
                                                class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Job
                                                            History</h5>
                                                        @if ($errors->any())
                                                            <span class="text-danger" style="font-size: 0.9em;">
                                                                {{ $errors->first() }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('karyawan.add_job_history') }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="karyawan_id"
                                                                value="{{ $karyawan->id }}">
                                                            <div class="card-body">
                                                                <div class="form-body">
                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="tgl_lahir"
                                                                                    class="control-label">Tanggal
                                                                                    Menjabat</label>
                                                                                <input type="date" name="tgl_jabat"
                                                                                    class="form-control"
                                                                                    placeholder="dd/mm/yyyy"
                                                                                    @error('tgl_jabat') is-invalid @enderror
                                                                                    value="{{ old('tgl_jabat') }}">
                                                                                @error('tgl_jabat')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="kota_lahir"
                                                                                    class="control-label">Nama
                                                                                    Jabatan</label>
                                                                                <input type="text" name="nama"
                                                                                    class="form-control"
                                                                                    @error('nama') is-invalid @enderror
                                                                                    value="{{ old('nama') }}">
                                                                                @error('nama')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                                <small class="form-control-feedback">
                                                                                </small>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6 ">
                                                                            <div class="form-group">
                                                                                <label for="lokasi">Lokasi
                                                                                    Penempatan</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    name="lokasi"@error('lokasi') is-invalid @enderror
                                                                                    value="{{ old('lokasi') }}">
                                                                                @error('lokasi')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Kelas Band
                                                                                    Posisi</label>
                                                                                <select
                                                                                    class="form-control custom-select"
                                                                                    name="band">
                                                                                    <option value="">Pilih Kelas
                                                                                        Band Posisi</option>
                                                                                    <option value="I"
                                                                                        {{ old('band') == 'I' ? 'selected' : '' }}>
                                                                                        I
                                                                                    </option>
                                                                                    <option value="II"
                                                                                        {{ old('band') == 'II' ? 'selected' : '' }}>
                                                                                        II
                                                                                    </option>
                                                                                    <option value="III"
                                                                                        {{ old('band') == 'III' ? 'selected' : '' }}>
                                                                                        III
                                                                                    </option>
                                                                                    <option value="IV"
                                                                                        {{ old('band') == 'IV' ? 'selected' : '' }}>
                                                                                        IV
                                                                                    </option>
                                                                                    <option value="V"
                                                                                        {{ old('band') == 'V' ? 'selected' : '' }}>
                                                                                        V
                                                                                    </option>
                                                                                    <option value="VI"
                                                                                        {{ old('band') == 'VI' ? 'selected' : '' }}>
                                                                                        VI
                                                                                    </option>
                                                                                    <option value="VII"
                                                                                        {{ old('band') == 'VII' ? 'selected' : '' }}>
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
                                                                                <label
                                                                                    for="file_rekening_bank">Lampiran
                                                                                    Sk</label>
                                                                                <input type="file"
                                                                                    class="form-control"
                                                                                    id="lampiran" name="lampiran">
                                                                                @error('lampiran')
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
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="pendidikan">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card ">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Pendidikan</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal"
                                                                    data-target="#ModalAddPendidikan">
                                                                    Tambah Pendidikan
                                                                </button>
                                                            </div>
                                                            <!-- /.card-tools -->
                                                        </div>
                                                        <!-- /.card-header -->

                                                        <div class="card-body p-9">
                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-hover table-bordered table-striped">
                                                                    <thead>
                                                                        <tr class="text-center">
                                                                            <th>Jenjang Pendidikan</th>
                                                                            <th>Nama Institusi</th>
                                                                            <th>Jurusan</th>
                                                                            <th>Tahun Lulus</th>
                                                                            <th>Lampiran Pendukung</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($pendidikan as $edu)
                                                                            <tr>
                                                                                <td>{{ $edu->jenjang_pendidikan }}
                                                                                </td>
                                                                                <td>{{ $edu->nama_institusi }}</td>
                                                                                <td>{{ $edu->jurusan }}</td>
                                                                                <td>{{ $edu->tahun_lulus == '0000' ? 'Tidak Diketahui' : $edu->tahun_lulus }}
                                                                                </td>

                                                                                <td>
                                                                                    <span
                                                                                        class="badge badge-warning">Belum
                                                                                        ada file</span>
                                                                                </td>
                                                                                <td>
                                                                                    <a class="btn btn-warning btn-flex btn-center btn-sm"
                                                                                        data-toggle="modal"
                                                                                        data-target="#ModalEditPendidikan"
                                                                                        onclick="set_common_delete('35','skill');">Edit</a>
                                                                                    <a class="btn btn-danger btn-flex btn-center btn-sm"
                                                                                        data-toggle="modal"
                                                                                        data-target="#ModalDeletePendidikan"
                                                                                        onclick="set_common_delete('35','skill');">Delete</a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                        <!-- Tambahkan lebih banyak baris di sini sesuai kebutuhan -->
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="ModalAddPendidikan" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" data-backdrop="static"
                                            data-keyboard="false" aria-hidden="true">
                                            <div
                                                class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah
                                                            Pendidikan</h5>
                                                        @if ($errors->any())
                                                            <span class="text-danger" style="font-size: 0.9em;">
                                                                {{ $errors->first() }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('karyawan.add_pendidikan') }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="karyawan_id"
                                                                value="{{ $karyawan->id }}">
                                                            <div class="card-body">
                                                                <div class="form-body">
                                                                    <div class="row p-t-20">

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="kota_lahir"
                                                                                    class="control-label">Nama
                                                                                    Institusi</label>
                                                                                <input required type="text"
                                                                                    name="nama_institusi"
                                                                                    class="form-control"
                                                                                    @error('nama_institusi') is-invalid @enderror
                                                                                    value="{{ old('nama_institusi') }}">
                                                                                @error('nama_institusi')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                                <small class="form-control-feedback">
                                                                                </small>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Jenjang
                                                                                    Pendidikan</label>
                                                                                <select
                                                                                    class="form-control custom-select"
                                                                                    name="jenjang_pendidikan">
                                                                                    <option value="">Pilih
                                                                                        Jenjang Pendidikan</option>
                                                                                    <option value="S2">S2</option>
                                                                                    <option value="S1">S1</option>
                                                                                    <option value="Diploma III">Diploma
                                                                                        III</option>
                                                                                    <option value="SMK/SLTA Kejuruan">
                                                                                        SMK/SLTA Kejuruan</option>
                                                                                </select>
                                                                                @error('jenjang_pendidikan')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6 ">
                                                                            <div class="form-group">
                                                                                <label>Jurusan</label>
                                                                                <input required type="text"
                                                                                    class="form-control"
                                                                                    name="jurusan"@error('jurusan') is-invalid @enderror
                                                                                    value="{{ old('jurusan') }}">
                                                                                @error('jurusan')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Tahun Lulus</label>
                                                                                <input required type="number"
                                                                                    class="form-control"
                                                                                    name="tahun_lulus" min="1900"
                                                                                    max="{{ date('Y') }}"
                                                                                    placeholder="Masukkan tahun lulus">
                                                                                @error('tahun_lulus')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Lampiran Sk</label>
                                                                                <input type="file"
                                                                                    class="form-control"
                                                                                    name="lampiran_pendukung">
                                                                                @error('lampiran_pendukung')
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
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="ModalEditPendidikan" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" data-backdrop="static"
                                            data-keyboard="false" aria-hidden="true">
                                            <div
                                                class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit
                                                            Pendidikan</h5>
                                                        @if ($errors->any())
                                                            <span class="text-danger" style="font-size: 0.9em;">
                                                                {{ $errors->first() }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="modal-body">
                                                        @foreach ($pendidikan as $edu)
                                                            <form method="POST"
                                                                action="{{ route('karyawan.update_pendidikan', $edu->id) }}"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="karyawan_id"
                                                                    value="{{ $edu->id }}">
                                                                <div class="card-body">
                                                                    <div class="form-body">
                                                                        <div class="row p-t-20">

                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="kota_lahir"
                                                                                        class="control-label">Nama
                                                                                        Institusi</label>
                                                                                    <input required type="text"
                                                                                        name="nama_institusi"
                                                                                        class="form-control"
                                                                                        @error('nama_institusi') is-invalid @enderror
                                                                                        value="{{ $edu->nama_institusi }}">
                                                                                    @error('nama_institusi')
                                                                                        <div
                                                                                            class="alert alert-danger mt-2">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                    <small
                                                                                        class="form-control-feedback">
                                                                                    </small>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label
                                                                                        class="control-label">Jenjang
                                                                                        Pendidikan</label>
                                                                                    <select
                                                                                        class="form-control custom-select"
                                                                                        name="jenjang_pendidikan">
                                                                                        <option value="">Pilih
                                                                                            Jenjang Pendidikan</option>
                                                                                        <option value="S2"
                                                                                            {{ $edu->jenjang_pendidikan == 'S2' ? 'selected' : '' }}>
                                                                                            S2
                                                                                        </option>
                                                                                        <option value="S1"
                                                                                            {{ $edu->jenjang_pendidikan == 'S1' ? 'selected' : '' }}>
                                                                                            S1
                                                                                        </option>
                                                                                        <option value="Diploma III"
                                                                                            {{ $edu->jenjang_pendidikan == 'Diploma III' ? 'selected' : '' }}>
                                                                                            Diploma III</option>
                                                                                        <option
                                                                                            value="SMK/SLTA Kejuruan"
                                                                                            {{ $edu->jenjang_pendidikan == 'SMK/SLTA Kejuruan' ? 'selected' : '' }}>
                                                                                            SMK/SLTA Kejuruan</option>
                                                                                    </select>
                                                                                    @error('jenjang_pendidikan')
                                                                                        <div
                                                                                            class="alert alert-danger mt-2">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>


                                                                            <div class="col-md-6 ">
                                                                                <div class="form-group">
                                                                                    <label>Jurusan</label>
                                                                                    <input required type="text"
                                                                                        class="form-control"
                                                                                        name="jurusan"@error('jurusan') is-invalid @enderror
                                                                                        value="{{ $edu->jurusan }} ">
                                                                                    @error('jurusan')
                                                                                        <div
                                                                                            class="alert alert-danger mt-2">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label>Tahun Lulus</label>
                                                                                    <input required type="number"
                                                                                        class="form-control"
                                                                                        name="tahun_lulus"
                                                                                        min="0000"
                                                                                        max="{{ date('Y') }}"
                                                                                        placeholder="Masukkan tahun lulus"
                                                                                        value="{{ $edu->tahun_lulus }}">
                                                                                    @error('tahun_lulus')
                                                                                        <div
                                                                                            class="alert alert-danger mt-2">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label>Lampiran Sk</label>
                                                                                    <input type="file"
                                                                                        class="form-control"
                                                                                        name="lampiran_pendukung">
                                                                                    @error('lampiran_pendukung')
                                                                                        <div
                                                                                            class="alert alert-danger mt-2">
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
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <button type="submit"
                                                            class="btn btn-primary">Simpan</button>
                                                    </div>
                                                    </form>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="ModalDeletePendidikan" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" data-backdrop="static"
                                            data-keyboard="false" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi
                                                            Hapus</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah Anda yakin ingin menghapus data pendidikan ini?</p>
                                                        @foreach ($pendidikan as $edu)
                                                            <form id="deleteForm" method="POST"
                                                                action="{{ route('karyawan.destroy_pendidikan', $edu->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                        @endforeach
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="pelatihan">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card ">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Pelatihan</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal"
                                                                    data-target="#ModalAddPelatihan">
                                                                    Tambah Pelatihan
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body p-9">
                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-hover table-bordered table-striped">
                                                                    <thead>
                                                                        <tr class="text-center">
                                                                            <th>Nama Pelatihan</th>
                                                                            <th>Tanggal Mulai Pelatihan</th>
                                                                            <th>Tanggal Akhir Pelatihan</th>
                                                                            <th>Nama Penyelenggara</th>
                                                                            <th>Lampiran Pendukung</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @if ($pelatihan->isEmpty())
                                                                            <tr>
                                                                                <td colspan="6"
                                                                                    style="text-align: center;">Tidak
                                                                                    ada data</td>
                                                                            </tr>
                                                                        @else
                                                                            @foreach ($pelatihan as $pel)
                                                                                <tr>
                                                                                    <td>{{ $pel->nama_pelatihan }}
                                                                                    </td>
                                                                                    <td>{{ $pel->tanggal_mulai }}</td>
                                                                                    <td>{{ $pel->tanggal_akhir }}</td>
                                                                                    <td>{{ $pel->nama_penyelenggara }}
                                                                                    </td>
                                                                                    <td>
                                                                                        @if ($pel->lampiran_pendukung)
                                                                                            <a href="{{ asset('storage/' . $pel->lampiran_pendukung) }}"
                                                                                                class="badge badge-success"
                                                                                                target="_blank">Lihat
                                                                                                File</a>
                                                                                        @else
                                                                                            <span
                                                                                                class="badge badge-warning">Belum
                                                                                                ada file</span>
                                                                                        @endif
                                                                                    </td>

                                                                                    <td>
                                                                                        <button
                                                                                            class="btn btn-warning btn-flex btn-center btn-sm edit-btn"
                                                                                            data-toggle="modal"
                                                                                            data-target="#ModalEditPelatihan{{ $pel->id }}"
                                                                                            data-id="{{ $pel->id }}"
                                                                                            data-nama="{{ $pel->nama_pelatihan }}"
                                                                                            data-penyelenggara="{{ $pel->nama_penyelenggara }}"
                                                                                            data-tanggal_mulai="{{ $pel->tanggal_mulai }}"
                                                                                            data-tanggal_akhir="{{ $pel->tanggal_akhir }}">
                                                                                            Edit
                                                                                        </button>
                                                                                        <a class="btn btn-danger btn-flex btn-center btn-sm"
                                                                                            data-toggle="modal"
                                                                                            data-target="#ModalDeletePelatihan{{ $pel->id }}">Delete</a>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        @endif
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="ModalAddPelatihan" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" data-backdrop="static"
                                            data-keyboard="false" aria-hidden="true">
                                            <div
                                                class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah
                                                            Pelatihan</h5>
                                                        @if ($errors->any())
                                                            <span class="text-danger" style="font-size: 0.9em;">
                                                                {{ $errors->first() }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('karyawan.add_pelatihan') }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="karyawan_id"
                                                                value="{{ $karyawan->id }}">
                                                            <div class="card-body">
                                                                <div class="form-body">
                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Nama
                                                                                    Pelatihan</label>
                                                                                <input required type="text"
                                                                                    name="nama_pelatihan"
                                                                                    class="form-control @error('nama_pelatihan') is-invalid @enderror"
                                                                                    value="{{ old('nama_pelatihan') }}">
                                                                                @error('nama_pelatihan')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Nama
                                                                                    Penyelenggara</label>
                                                                                <input required type="text"
                                                                                    name="nama_penyelenggara"
                                                                                    class="form-control @error('nama_penyelenggara') is-invalid @enderror"
                                                                                    value="{{ old('nama_penyelenggara') }}">
                                                                                @error('nama_penyelenggara')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Tanggal Mulai</label>
                                                                                <input required type="date"
                                                                                    class="form-control"
                                                                                    name="tanggal_mulai"
                                                                                    placeholder="Masukkan tanggal mulai">
                                                                                @error('tanggal_mulai')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Tanggal Akhir</label>
                                                                                <input required type="date"
                                                                                    class="form-control"
                                                                                    name="tanggal_akhir"
                                                                                    placeholder="Masukkan tanggal akhir">
                                                                                @error('tanggal_akhir')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Lampiran Sertifikat</label>
                                                                                <input type="file"
                                                                                    class="form-control"
                                                                                    name="lampiran_pendukung">
                                                                                @error('lampiran_pendukung')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Tutup</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="keterampilan">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Keterampilan</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal"
                                                                    data-target="#ModalAddKeterampilan">
                                                                    Tambah Keterampilan
                                                                </button>
                                                            </div>
                                                            <!-- /.card-tools -->
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body p-9">
                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-hover table-bordered table-striped">
                                                                    <thead>
                                                                        <tr class="text-center">
                                                                            <th>Nama Keterampilan</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @if ($keterampilan->isEmpty())
                                                                            <tr>
                                                                                <td colspan="2"
                                                                                    class="text-center">Tidak ada data
                                                                                </td>
                                                                            </tr>
                                                                        @else
                                                                            @foreach ($keterampilan as $terampil)
                                                                                <tr>
                                                                                    <td>{{ $terampil->nama_keterampilan }}
                                                                                    </td>
                                                                                    <td>
                                                                                        <a class="btn btn-warning btn-flex btn-center btn-sm"
                                                                                            data-toggle="modal"
                                                                                            data-target="#ModalEditKeterampilan{{ $terampil->id }}">Edit</a>
                                                                                        <a class="btn btn-danger btn-flex btn-center btn-sm"
                                                                                            data-toggle="modal"
                                                                                            data-target="#ModalDeleteKeterampilan{{ $terampil->id }}">Delete</a>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        @endif
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="ModalAddKeterampilan" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" data-backdrop="static"
                                            data-keyboard="false" aria-hidden="true">
                                            <div
                                                class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah
                                                            Keterampilan</h5>
                                                        @if ($errors->any())
                                                            <span class="text-danger" style="font-size: 0.9em;">
                                                                {{ $errors->first() }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('karyawan.add_keterampilan') }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="karyawan_id"
                                                                value="{{ $karyawan->id }}">
                                                            <div class="card-body">
                                                                <div class="form-body">
                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Nama
                                                                                    Keterampilan</label>
                                                                                <input required type="text"
                                                                                    name="nama_keterampilan"
                                                                                    class="form-control"
                                                                                    @error('nama_keterampilan') is-invalid @enderror
                                                                                    value="{{ old('nama_keterampilan') }}">
                                                                                @error('nama_keterampilan')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                                <small class="form-control-feedback">
                                                                                </small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <button type="submit"
                                                            class="btn btn-primary">Simpan</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="prestasi">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card ">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Prestasi</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal"
                                                                    data-target="#ModalAddPrestasi">
                                                                    Tambah Prestasi
                                                                </button>
                                                            </div>
                                                            <!-- /.card-tools -->
                                                        </div>
                                                        <!-- /.card-header -->

                                                        <div class="card-body p-9">
                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-hover table-bordered table-striped">
                                                                    <thead>
                                                                        <tr class="text-center">
                                                                            <th>Nama Event</th>
                                                                            <th>Nama Penghargaan</th>
                                                                            <th>Tahun Penghargaan</th>
                                                                            <th>Lampiran Penghargaan</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @if ($prestasi->isEmpty())
                                                                            <tr>
                                                                                <td colspan="6"
                                                                                    style="text-align: center;">Tidak
                                                                                    ada data</td>
                                                                            </tr>
                                                                        @else
                                                                            @foreach ($prestasi as $pres)
                                                                                <tr>
                                                                                    <td>{{ $pres->nama_event }}
                                                                                    </td>
                                                                                    <td>{{ $pres->nama_penghargaan }}
                                                                                    </td>
                                                                                    <td>{{ $pres->tahun_penghargaan }}
                                                                                    </td>
                                                                                    <td>
                                                                                        @if ($pres->lampiran_penghargaan)
                                                                                            <a href="{{ asset('storage/' . $pres->lampiran_penghargaan) }}"
                                                                                                class="badge badge-success"
                                                                                                target="_blank">Lihat
                                                                                                File</a>
                                                                                        @else
                                                                                            <span
                                                                                                class="badge badge-warning">Belum
                                                                                                ada file</span>
                                                                                        @endif
                                                                                    </td>

                                                                                    <td>
                                                                                        <button
                                                                                            class="btn btn-warning btn-flex btn-center btn-sm edit-btn"
                                                                                            data-toggle="modal"
                                                                                            data-target="#ModalEditPrestasi{{ $pres->id }}"
                                                                                            data-id="{{ $pres->id }}">
                                                                                            Edit
                                                                                        </button>
                                                                                        <a class="btn btn-danger btn-flex btn-center btn-sm"
                                                                                            data-toggle="modal"
                                                                                            data-target="#ModalEditPrestasi{{ $pres->id }}">Delete</a>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        @endif
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="ModalAddPrestasi" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" data-backdrop="static"
                                            data-keyboard="false" aria-hidden="true">
                                            <div
                                                class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah
                                                            Penghargaan</h5>
                                                        @if ($errors->any())
                                                            <span class="text-danger" style="font-size: 0.9em;">
                                                                {{ $errors->first() }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('karyawan.add_prestasi') }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="karyawan_id"
                                                                value="{{ $karyawan->id }}">
                                                            <div class="card-body">
                                                                <div class="form-body">
                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Nama
                                                                                    Event</label>
                                                                                <input required type="text"
                                                                                    name="nama_event"
                                                                                    class="form-control @error('nama_event') is-invalid @enderror"
                                                                                    value="{{ old('nama_event') }}">
                                                                                @error('nama_event')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Nama
                                                                                    Penghargaan</label>
                                                                                <input required type="text"
                                                                                    name="nama_penghargaan"
                                                                                    class="form-control @error('nama_penghargaan') is-invalid @enderror"
                                                                                    value="{{ old('nama_penghargaan') }}">
                                                                                @error('nama_penghargaan')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Tahun</label>
                                                                                <input required type="text"
                                                                                    class="form-control"
                                                                                    name="tahun_penghargaan"
                                                                                    placeholder="Masukkan tahun"
                                                                                    pattern="\d{4}"
                                                                                    title="Masukkan tahun dalam format 4 digit"
                                                                                    value="{{ old('tahun_penghargaan') }}">
                                                                                @error('tahun_penghargaan')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Lampiran Penghargaan</label>
                                                                                <input type="file"
                                                                                    class="form-control"
                                                                                    name="lampiran_penghargaan">
                                                                                @error('lampiran_penghargaan')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Tutup</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="talent_review">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card ">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Talent Review / Assesment</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal"
                                                                    data-target="#ModalAddTalent">
                                                                    Tambah
                                                                </button>
                                                            </div>
                                                            <!-- /.card-tools -->
                                                        </div>
                                                        <!-- /.card-header -->

                                                        <div class="card-body p-9">
                                                            <div class="table-responsive">
                                                                <table
                                                                    class="table table-hover table-bordered table-striped">
                                                                    <thead>
                                                                        <tr class="text-center">
                                                                            <th>Tanggal</th>
                                                                            <th>Talent Review / Assesment</th>
                                                                            <th>Status</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @if ($talent->isEmpty())
                                                                            <tr>
                                                                                <td colspan="6"
                                                                                    style="text-align: center;">Belum
                                                                                    ada data talent.</td>
                                                                            </tr>
                                                                        @else
                                                                            @foreach ($talent as $tel)
                                                                                <tr>
                                                                                    <td>{{ $tel->tanggal_talent }}
                                                                                    </td>
                                                                                    <td>{{ $tel->talent }}
                                                                                    </td>
                                                                                    <td>
                                                                                        @if ($tel->status == 'LULUS')
                                                                                            <span
                                                                                                class="badge badge-primary">{{ $tel->status }}</span>
                                                                                        @elseif($tel->status == 'TIDAK LULUS')
                                                                                            <span
                                                                                                class="badge badge-danger">{{ $tel->status }}</span>
                                                                                        @else
                                                                                            <span
                                                                                                class="badge badge-secondary">{{ $tel->status }}</span>
                                                                                        @endif
                                                                                    </td>

                                                                                    <td>
                                                                                        <button
                                                                                            class="btn btn-warning btn-flex btn-center btn-sm edit-btn"
                                                                                            data-toggle="modal"
                                                                                            data-target="#ModalEditTalent{{ $tel->id }}">
                                                                                            Edit
                                                                                        </button>
                                                                                        <a class="btn btn-danger btn-flex btn-center btn-sm"
                                                                                            data-toggle="modal"
                                                                                            data-target="#ModalDeleteTalent{{ $tel->id }}">Delete</a>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        @endif
                                                                    </tbody>

                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="ModalAddTalent" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" data-backdrop="static"
                                            data-keyboard="false" aria-hidden="true">
                                            <div
                                                class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah
                                                            Talent</h5>
                                                        @if ($errors->any())
                                                            <span class="text-danger" style="font-size: 0.9em;">
                                                                {{ $errors->first() }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('karyawan.add_talent') }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="karyawan_id"
                                                                value="{{ $karyawan->id }}">
                                                            <div class="card-body">
                                                                <div class="form-body">
                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Tanggal
                                                                                    Talent</label>
                                                                                <input required type="date"
                                                                                    name="tanggal_talent"
                                                                                    class="form-control"
                                                                                    @error('tanggal_talent') is-invalid @enderror
                                                                                    value="{{ old('tanggal_talent') }}">
                                                                                @error('tanggal_talent')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                                <small class="form-control-feedback">
                                                                                </small>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    class="control-label">Status</label>
                                                                                <select
                                                                                    class="form-control custom-select"
                                                                                    name="status" required>
                                                                                    <option value="">Pilih
                                                                                        Status</option>
                                                                                    <option value="LULUS">Lulus
                                                                                    </option>
                                                                                    <option value="TIDAK LULUS">Tidak
                                                                                        Lulus</option>
                                                                                </select>
                                                                                @error('status')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Talent
                                                                                    Review / Assesment</label>
                                                                                <select
                                                                                    class="form-control custom-select"
                                                                                    name="talent" required>
                                                                                    <option value="">Pilih
                                                                                        Talent Review / Assesment
                                                                                    </option>
                                                                                    <option value="Talent Review">
                                                                                        Talent Review</option>
                                                                                    <option value="Assesment">
                                                                                        Assesment</option>
                                                                                </select>
                                                                                @error('talent')
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
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <button type="submit"
                                                            class="btn btn-primary">Simpan</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="catatan">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card ">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Catatan</h4>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal"
                                                                    data-target="#ModalAddCatatan">
                                                                    Tambah catatan
                                                                </button>
                                                            </div>
                                                            <!-- /.card-tools -->
                                                        </div>
                                                        <!-- /.card-header -->
                                                        @foreach ($catatan as $note)
                                                            <div class="post">
                                                                <br>
                                                                <div class="user-block">
                                                                    <img class="img-circle img-bordered-sm"
                                                                        src="{{ asset('storage/foto/default.jpg') }}"
                                                                        alt="user image">


                                                                    <span class="username">
                                                                        <a href="#">
                                                                            {{ $note->user ? $note->user->name : 'Unknown User' }}
                                                                            <!-- Fallback if user is null -->
                                                                        </a>
                                                                    </span>
                                                                    <span class="description">
                                                                        {{ $note->user ? $note->user->role : 'Unknown User' }}-
                                                                        {{ $note->created_at->diffForHumans() }}</span>
                                                                </div>

                                                                <p>
                                                                    {{ $note->catatan }}
                                                                    <!-- Ganti 'content' dengan kolom yang sesuai -->
                                                                </p>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="modal fade" id="ModalAddCatatan" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" data-backdrop="static"
                                            data-keyboard="false" aria-hidden="true">
                                            <div
                                                class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah
                                                            Catatan</h5>
                                                        @if ($errors->any())
                                                            <span class="text-danger" style="font-size: 0.9em;">
                                                                {{ $errors->first() }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('karyawan.add_catatan') }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="karyawan_id"
                                                                value="{{ $karyawan->id }}">
                                                            <div class="card-body">
                                                                <div class="form-body">
                                                                    <div class="row p-t-20">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    class="control-label">Catatan</label>
                                                                                <input required type="text"
                                                                                    name="catatan"
                                                                                    class="form-control"
                                                                                    @error('catatan') is-invalid @enderror
                                                                                    value="{{ old('catatan') }}">
                                                                                @error('catatan')
                                                                                    <div class="alert alert-danger mt-2">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                                <small class="form-control-feedback">
                                                                                </small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <button type="submit"
                                                            class="btn btn-primary">Simpan</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="other">
                                            <!-- The timeline -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card ">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Other</h3>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-primary"
                                                                    data-toggle="modal"
                                                                    data-target="#ModalTambahKaryawan">
                                                                    Edit Other
                                                                </button>
                                                            </div>
                                                            <!-- /.card-tools -->
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row mb-7">
                                                                <label
                                                                    class="col-lg-4 fw-semibold text-muted">NPWP</label>
                                                                <div class="col-lg-8">
                                                                    <span
                                                                        class="fw-semibold text-gray-800 fs-6">{{ $karyawan->npwp }}</span>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">BPJS
                                                                    Kesehatan</label>
                                                                <div class="col-lg-8">
                                                                    <span
                                                                        class="fw-semibold text-gray-800 fs-6">{{ $karyawan->bpjs_kesehatan }}</span>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">BPJS
                                                                    Ketenagakerjaan</label>
                                                                <div class="col-lg-8">
                                                                    <span
                                                                        class="fw-semibold text-gray-800 fs-6">{{ $karyawan->bpjs_ketenagakerjaan }}</span>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-7">
                                                                <label
                                                                    class="col-lg-4 fw-semibold text-muted">Telkomedika</label>
                                                                <div class="col-lg-8">
                                                                    <span
                                                                        class="fw-semibold text-gray-800 fs-6">{{ $karyawan->telkomedika }}</span>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-7">
                                                                <label class="col-lg-4 fw-semibold text-muted">Nama
                                                                    Bank</label>
                                                                <div class="col-lg-8">
                                                                    <span
                                                                        class="fw-semibold text-gray-800 fs-6">{{ $karyawan->suku }}</span>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-7">
                                                                <label
                                                                    class="col-lg-4 fw-semibold text-muted">Rekening
                                                                    Bank</label>
                                                                <div class="col-lg-8">
                                                                    <span
                                                                        class="fw-semibold text-gray-800 fs-6">{{ $karyawan->rekening_bank }}</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- /# column -->
                                            </div>
                                            <!-- /.row -->

                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <!-- End Container fluid  -->
        <!-- footer -->
        <footer class="footer"> © 2018 All rights reserved. Template designed by <a
                href="https://colorlib.com">Colorlib</a></footer>
        <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->

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
    {{-- <script src="{{ asset('template/') }}/js/lib/chart-js/chartjs-init-demo.js"></script> --}}
    <!--Custom JavaScript -->
    <script src="{{ asset('template/') }}/js/custom.min.js"></script>
    <script src="{{ asset('template/') }}/js/lib/datatables/datatables.min.js"></script>
    <script
        src="{{ asset('template/') }}/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js">
    </script>
    {{-- <script src="{{ asset('template/') }}/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js">
    </script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js">
    </script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js">
    </script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js">
    </script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js">
    </script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js">
    </script> --}}
    <script src="{{ asset('template/') }}/js/lib/datatables/datatables-init.js"></script>


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
    <script>
        // Ambil data tanggal dari PHP ke JavaScript
        const tglBergabung = "{{ $karyawan->tgl_bergabung }}";
        const tanggalMulaiKerja = tglBergabung ? new Date(tglBergabung) : null;
        const tanggalLahir = new Date("{{ $karyawan->tgl_lahir }}");

        // Fungsi untuk menghitung masa kerja
        function hitungMasaKerja(startDate) {
            const today = new Date();
            let years = today.getFullYear() - startDate.getFullYear();
            let months = today.getMonth() - startDate.getMonth();
            let days = today.getDate() - startDate.getDate();

            if (days < 0) {
                months--;
                days += new Date(today.getFullYear(), today.getMonth(), 0).getDate();
            }

            if (months < 0) {
                years--;
                months += 12;
            }

            return `${years} Tahun ${months} Bulan ${days} Hari`;
        }

        // Cek apakah tanggal mulai kerja ada
        const masaKerja = tanggalMulaiKerja ? hitungMasaKerja(tanggalMulaiKerja) : '-';

        // Fungsi untuk menghitung umur
        function hitungUmur(birthDate) {
            const today = new Date();
            let ageYears = today.getFullYear() - birthDate.getFullYear();
            let ageMonths = today.getMonth() - birthDate.getMonth();
            let ageDays = today.getDate() - birthDate.getDate();

            if (ageDays < 0) {
                ageMonths--;
                ageDays += new Date(today.getFullYear(), today.getMonth(), 0).getDate();
            }

            if (ageMonths < 0) {
                ageYears--;
                ageMonths += 12;
            }

            return `${ageYears} Tahun ${ageMonths} Bulan ${ageDays} Hari`;
        }

        // Fungsi untuk menghitung masa pensiun
        function hitungMasaPensiun(birthDate) {
            const retirementAge = 56;
            const retirementDate = new Date(birthDate);
            retirementDate.setFullYear(retirementDate.getFullYear() + retirementAge);

            const bulan = [
                "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                "Juli", "Agustus", "September", "Oktober", "November", "Desember"
            ];
            const day = retirementDate.getDate();
            const month = bulan[retirementDate.getMonth()];
            const year = retirementDate.getFullYear();

            return `${day} ${month} ${year}`; // Format: DD NamaBulan YYYY
        }

        // Menghitung umur dan masa pensiun
        const umur = hitungUmur(tanggalLahir);
        const masaPensiun = hitungMasaPensiun(tanggalLahir);

        // Menampilkan hasil di elemen HTML
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("masa-kerja").innerText = masaKerja;
            document.getElementById("umur").innerText = umur;
            document.getElementById("masa-pensiun").innerText = masaPensiun;
        });

        // Ambil tanggal terbaru dari variabel PHP
        const latestJobDate = @json($latestJobHistoryDate);

        function calculateDuration(startDate) {
            const start = new Date(startDate);
            const end = new Date(); // Hari ini

            let years = end.getFullYear() - start.getFullYear();
            let months = end.getMonth() - start.getMonth();
            let days = end.getDate() - start.getDate();

            // Jika hari negatif, kurangi bulan
            if (days < 0) {
                months--;
                const lastMonth = new Date(end.getFullYear(), end.getMonth(), 0);
                days += lastMonth.getDate();
            }

            // Jika bulan negatif, kurangi tahun
            if (months < 0) {
                years--;
                months += 12;
            }

            return {
                years,
                months,
                days
            };
        }

        // Hitung masa jabatan
        const masaJabatan = latestJobDate ? calculateDuration(latestJobDate) : {
            years: 0,
            months: 0,
            days: 0
        };

        // Menampilkan hasil di HTML
        document.getElementById('masa-band').innerText =
            `${masaJabatan.years} tahun, ${masaJabatan.months} bulan, ${masaJabatan.days} hari`;
    </script>






    @foreach ($pelatihan as $pel)
        <div class="modal fade" id="ModalEditPelatihan{{ $pel->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit
                            Pelatihan</h5>
                        @if ($errors->any())
                            <span class="text-danger" style="font-size: 0.9em;">
                                {{ $errors->first() }}
                            </span>
                        @endif
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('karyawan.update_pelatihan', $pel->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="karyawan_id" value="{{ $karyawan->id }}">
                            <div class="card-body">
                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nama
                                                    Pelatihan</label>
                                                <input required type="text" name="nama_pelatihan"
                                                    class="form-control @error('nama_pelatihan') is-invalid @enderror"
                                                    value="{{ $pel->nama_pelatihan }}">
                                                @error('nama_pelatihan')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nama
                                                    Penyelenggara</label>
                                                <input required type="text" name="nama_penyelenggara"
                                                    class="form-control @error('nama_penyelenggara') is-invalid @enderror"
                                                    value="{{ $pel->nama_penyelenggara }}">
                                                @error('nama_penyelenggara')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal Mulai</label>
                                                <input required type="date" class="form-control"
                                                    name="tanggal_mulai" value="{{ $pel->tanggal_mulai }}">
                                                @error('tanggal_mulai')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tanggal Akhir</label>
                                                <input required type="date" class="form-control"
                                                    name="tanggal_akhir" value="{{ $pel->tanggal_akhir }}">
                                                @error('tanggal_akhir')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Lampiran Sertifikat</label>
                                                <input type="file" class="form-control"
                                                    name="lampiran_pendukung">
                                                @error('lampiran_pendukung')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ModalDeletePelatihan{{ $pel->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Konfirmasi Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data pelatihan ini?</p>
                        <form method="POST" action="{{ route('karyawan.destroy_pelatihan', $pel->id) }}">
                            @csrf
                            @method('DELETE')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                    </form> <!-- Make sure this is properly closed -->
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($keterampilan as $terampil)
        <div class="modal fade" id="ModalEditKeterampilan{{ $terampil->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit
                            Keterampilan
                        </h5>
                        @if ($errors->any())
                            <span class="text-danger" style="font-size: 0.9em;">
                                {{ $errors->first() }}
                            </span>
                        @endif
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('karyawan.update_keterampilan', $terampil->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="karyawan_id" value="{{ $karyawan->id }}">
                            <div class="card-body">
                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Nama
                                                    Keterampilan</label>
                                                <input required type="text" name="nama_keterampilan"
                                                    class="form-control"
                                                    @error('nama_keterampilan') is-invalid @enderror
                                                    value="{{ $terampil->nama_keterampilan }}">
                                                @error('nama_keterampilan')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <small class="form-control-feedback">
                                                </small>
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

        <div class="modal fade" id="ModalDeleteKeterampilan{{ $terampil->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data keterampilan ini?</p>
                        <form id="deleteForm{{ $terampil->id }}" method="POST"
                            action="{{ route('karyawan.destroy_keterampilan', $terampil->id) }}">
                            @csrf
                            @method('DELETE')
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($prestasi as $pres)
        <div class="modal fade" id="ModalEditPrestasi{{ $pres->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit
                            Penghargaan</h5>
                        @if ($errors->any())
                            <span class="text-danger" style="font-size: 0.9em;">
                                {{ $errors->first() }}
                            </span>
                        @endif
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('karyawan.update_prestasi', $pres->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="karyawan_id" value="{{ $karyawan->id }}">
                            <div class="card-body">
                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nama
                                                    Event</label>
                                                <input required type="text" name="nama_event"
                                                    class="form-control @error('nama_event') is-invalid @enderror"
                                                    value="{{ $pres->nama_event }}">
                                                @error('nama_event')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nama
                                                    Penghargaan</label>
                                                <input required type="text" name="nama_penghargaan"
                                                    class="form-control @error('nama_penghargaan') is-invalid @enderror"
                                                    value="{{ $pres->nama_penghargaan }}">
                                                @error('nama_penghargaan')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Tahun</label>
                                                <input required type="text" class="form-control"
                                                    name="tahun_penghargaan" placeholder="Masukkan tahun"
                                                    pattern="\d{4}" title="Masukkan tahun dalam format 4 digit"
                                                    value="{{ $pres->tahun_penghargaan }}">
                                                @error('tahun_penghargaan')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Lampiran Penghargaan</label>
                                                <input type="file" class="form-control"
                                                    name="lampiran_penghargaan">
                                                @error('lampiran_penghargaan')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($talent as $tel)
        <div class="modal fade" id="ModalDeleteTalent{{ $tel->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Konfirmasi Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data talent ini?</p>
                        <form method="POST" action="{{ route('karyawan.destroy_talent', $tel->id) }}">
                            @csrf
                            @method('DELETE')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                    </form> <!-- Make sure this is properly closed -->
                </div>
            </div>
        </div>



        <div class="modal fade" id="ModalEditTalent{{ $tel->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit
                            Talent</h5>
                        @if ($errors->any())
                            <span class="text-danger" style="font-size: 0.9em;">
                                {{ $errors->first() }}
                            </span>
                        @endif
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('karyawan.update_talent', $tel->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="karyawan_id" value="{{ $karyawan->id }}">
                            <div class="card-body">
                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Tanggal
                                                    Talent</label>
                                                <input required type="date" name="tanggal_talent"
                                                    class="form-control @error('tanggal_talent') is-invalid @enderror"
                                                    value="{{ $tel->tanggal_talent }}">
                                                @error('tanggal_talent')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Status</label>
                                                <select class="form-control custom-select" name="status">
                                                    <option value="">Pilih
                                                        Status</option>
                                                    <option value="LULUS"
                                                        {{ $tel->status == 'LULUS' ? 'selected' : '' }}>
                                                        Lulus</option>
                                                    <option value="TIDAK LULUS"
                                                        {{ $tel->status == 'TIDAK LULUS' ? 'selected' : '' }}>
                                                        Tidak Lulus</option>
                                                </select>
                                                @error('status')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Talent
                                                    Review / Assesment</label>
                                                <select class="form-control custom-select" name="talent" required>
                                                    <option value="">Pilih
                                                        Talent Review / Assesment
                                                    </option>
                                                    <option value="Talent Review"
                                                        {{ $tel->talent == 'Talent Review' ? 'selected' : '' }}>
                                                        Talent Review</option>
                                                    <option
                                                        value="Assesment"{{ $tel->talent == 'Assesment' ? 'selected' : '' }}>
                                                        Assesment</option>
                                                </select>
                                                @error('talent')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    @endforeach

    @foreach ($catatan as $note)
        <div class="modal fade" id="ModalEditCatatan{{ $note->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit
                            Catatan
                        </h5>
                        @if ($errors->any())
                            <span class="text-danger" style="font-size: 0.9em;">
                                {{ $errors->first() }}
                            </span>
                        @endif
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('karyawan.update_catatan', $note->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="karyawan_id" value="{{ $karyawan->id }}">
                            <div class="card-body">
                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Catatan</label>
                                                <input required type="text" name="catatan" class="form-control"
                                                    @error('catatan') is-invalid @enderror
                                                    value="{{ $note->catatan }}">
                                                @error('catatan')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <small class="form-control-feedback">
                                                </small>
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

        <div class="modal fade" id="ModalDeleteCatatan{{ $note->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data catatan ini?</p>
                        <form id="deleteForm{{ $note->id }}" method="POST"
                            action="{{ route('karyawan.destroy_catatan', $note->id) }}">
                            @csrf
                            @method('DELETE')
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach





</body>

</html>
