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
    <link rel="icon" type="{{ asset('template/') }}/image/png" sizes="16x16"
        href="template/images/favicon.png">
    <title>Projek Telkom</title>
    <!-- Bootstrap Core CSS -->

    <!-- Custom CSS -->
    <link href="{{ asset('template/') }}/css/helper.css" rel="stylesheet">
    <link href="{{ asset('template/') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('template/') }}/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="{{ asset('template/') }}/css/modal.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/') }}/css/lib/bootstrap/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0/dist/chartjs-plugin-datalabels.min.js"></script>
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

                        <!-- Language -->

                        <!-- Messages -->

                        <!-- End Messages -->
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
                                    <li><a href="/profile"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <form id="logout-form" action="http://192.168.137.1:8000/logout"
                                            method="POST" style="display: none;">
                                            <input type="hidden" name="_token"
                                                value="T7TyIoXVYPpLud06QS0WvRAMdydtdViKzgllQ5Oh">
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
                        <li> <a href="http://192.168.137.1:8000/dashboard" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Dashboard </span></a>
                        </li>
                        <li> <a class="" href="http://192.168.137.1:8000/mitra" aria-expanded="false"><i
                                    class="fa fa-handshake-o"></i><span class="hide-menu">Mitra</span></a>
                        </li>
                        <li> <a class="" href="http://192.168.137.1:8000/karyawan"aria-expanded="false"><i
                                    class="fa fa-users"></i><span class="hide-menu">Karyawan</span></a>
                        </li>
                        <li> <a class="" href="http://192.168.137.1:8000/project"aria-expanded="false"><i
                                    class="fa fa-wpforms"></i><span class="hide-menu">Project</span></a>
                        </li>
                        <li> <a class="" href="http://192.168.137.1:8000/performance" aria-expanded="false"><i
                                    class="fa fa-bar-chart-o"></i><span class="hide-menu">Perfomance</span></a>
                        </li>
                        <li> <a class="" href="http://192.168.137.1:8000/sales" aria-expanded="false"><i
                                    class="fa fa-tags"></i><span class="hide-menu">Sales</span></a>
                        </li>
                        <li> <a class="" href="http://192.168.137.1:8000/gedung" aria-expanded="false"><i
                                    class="fa fa-building"></i><span class="hide-menu">Data Gedung</span></a>
                        </li>
                        <li> <a class="" href="http://192.168.137.1:8000/perangkat" aria-expanded="false"><i
                                    class="fa fa-users"></i><span class="hide-menu">Personil</span></a>
                        </li>
                        <li> <a class="" href="http://192.168.137.1:8000/perangkat" aria-expanded="false"><i
                                    class="fa fa-tv"></i><span class="hide-menu">Perangkat</span></a>
                        </li>
                        <li> <a class="" href="http://192.168.137.1:8000/pengguna" aria-expanded="false"><i
                                    class="fa fa-tv"></i><span class="hide-menu">Data Pengguna</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div> <!-- End Left Sidebar  -->
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
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-bar-chart-o f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>568120</h2>
                                    <a href="https://www.youtube.com/watch?v=6_UhNE5qVX4">
                                        <p class="m-b-0">Perfomance</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-handshake-o f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>1178</h2>
                                    <p class="m-b-0">Mitra</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-users f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>1231</h2>
                                    <p class="m-b-0">Karyawan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-users f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>847</h2>
                                    <p class="m-b-0">Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Project</h1>
                        <div class="row">
                            <!-- Bar Chart -->
                            <div class="col-lg-12 col-md-5">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Target VS Realisasi</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <canvas id="myChart1"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Project</h1>
                        <div class="row">
                            <!-- Bar Chart -->
                            <div class="col-lg-12 col-md-5">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Jumlah VS Sudah VS Belum</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <canvas id="myChart2"></canvas>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Project</h1>
                        <div class="row">
                            <!-- Bar Chart -->
                            <div class="col-lg-12 col-md-5">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Jumlah VS Sudah VS Belum</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <canvas id="myChart3"></canvas>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Manar Balikpapan</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="myChart4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Manar Kalimantan Timur</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="ChartManarKaltim"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Manar Kalimantan Selatan dan Tengah</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="ChartManarKalselteng"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Manar Kalimantan Barat</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="ChartManarKalbar"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Top 5 xxxx</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="singelBarChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Top 5 xxxx</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="singelBarChart2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Top 5 xxxx</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="singelBarChart3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <div class="row">
                    <!-- Line Chart -->
                    <div class="col-sm-6 col-md-4">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Line chart</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Line Chart -->
                    <div class="col-sm-6 col-md-4">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Line chart</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <canvas id="lineChart1"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Line Chart -->
                    <div class="col-sm-6 col-md-4">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Line chart</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <canvas id="lineChart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Bar Chart 3 batang -->
                    <div class="col-sm-11 col-md-6">
                        <div class="card">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Bar chart</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="barChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bar Chart -->
                    <div class="col-sm-11 col-md-6">
                        <div class="card">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Bar chart</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="barChart1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                //BARCHART TESTING
                const ctx1 = document.getElementById('myChart1').getContext('2d');
                const ctx2 = document.getElementById('myChart2').getContext('2d');
                const ctx3 = document.getElementById('myChart3').getContext('2d');
                const ctx4 = document.getElementById('myChart4').getContext('2d');

                const chart1 = new Chart(ctx1, {
                    type: 'bar',
                    data: {
                        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                            'Oktober', 'November', 'Desember'
                        ],
                        datasets: [{
                                label: 'Target',
                                data: [12, 19, 3, 5, 2, 3, 12, 43, 30, 45, 21, 23],
                                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                                borderColor: 'rgba(255, 99, 132, 1)',
                                borderWidth: 1
                            },
                            {
                                label: 'Realisasi',
                                data: [10, 15, 7, 12, 8, 5, 16, 35, 27, 30, 18, 20],
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            }
                        ]
                    },
                    plugins: [ChartDataLabels],
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        plugins: {
                            datalabels: {
                                anchor: 'end',
                                align: 'top',
                                formatter: function(value) {
                                    return value;
                                }
                            }
                        }
                    }
                });

                const chart2 = new Chart(ctx2, {
                    type: 'bar',
                    data: {
                        labels: ['Telkom', 'Telkom Group', 'Enterprise'],
                        datasets: [{
                                label: 'Nilai Project',
                                data: [100, 100, 100],
                                backgroundColor: 'rgba(75, 192, 192, 0.5)',
                                borderColor: 'rgba(75, 192, 192, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Sudah Akru',
                                data: [28, 25, 14],
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Sisa Belum Akru',
                                data: [28, 25, 14],
                                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                                borderColor: 'rgba(255, 99, 132, 0.5)',
                                borderWidth: 1
                            }
                        ]
                    },
                    plugins: [ChartDataLabels],
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        plugins: {
                            datalabels: {
                                anchor: 'end',
                                align: 'top',
                                formatter: function(value) {
                                    return value;
                                }
                            }
                        }
                    }
                });

                const chart3 = new Chart(ctx3, {
                    type: 'bar',
                    data: {
                        labels: ['Done', 'Progress', 'Belum Mulai'],
                        datasets: [{
                                label: 'Telkom',
                                data: [32, 29, 12],
                                backgroundColor: 'rgba(75, 192, 192, 0.5)',
                                borderColor: 'rgba(75, 192, 192, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Telkom Group',
                                data: [28, 25, 14],
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Enterprise',
                                data: [28, 25, 14],
                                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                                borderColor: 'rgba(255, 99, 132, 0.5)',
                                borderWidth: 1
                            }
                        ]
                    },
                    plugins: [ChartDataLabels],
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        plugins: {
                            datalabels: {
                                anchor: 'end',
                                align: 'top',
                                formatter: function(value) {
                                    return value;
                                }
                            }
                        }
                    }
                });

                const chart4 = new Chart(ctx4, {
                    type: 'bar',
                    data: {
                        labels: ['Enterpries', 'Government', 'Subsidiaries','Telkom'],
                        datasets: [{
                                label: 'Prospek',
                                data: [32, 29, 12,21],
                                backgroundColor: 'rgba(0, 128, 0, 0.5)',
                                borderColor: 'rgba(0, 128, 0, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Potensi',
                                data: [28, 25, 14,32],
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Onhand',
                                data: [28, 25, 14,23],
                                backgroundColor: 'rgba(255, 255, 0, 0.5)',
                                borderColor: 'rgba(255, 255, 0, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Out',
                                data: [28, 25, 14,21],
                                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                                borderColor: 'rgba(255, 99, 132, 0.5)',
                                borderWidth: 1
                            }
                        ]
                    },
                    plugins: [ChartDataLabels],
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        plugins: {
                            datalabels: {
                                anchor: 'end',
                                align: 'top',
                                formatter: function(value) {
                                    return value;
                                }
                            }
                        }
                    }
                });

                // Event listener untuk meng-handle klik pada batang grafik
                document.getElementById('myChart1').addEventListener('click', function(event) {
                    const activePoints = chart1.getElementsAtEventForMode(event, 'nearest', {
                        intersect: true
                    }, true);

                    if (activePoints.length > 0) {
                        const firstPoint = activePoints[0];
                        const label = chart1.data.labels[firstPoint.index];
                        const category = chart1.data.datasets[firstPoint.datasetIndex].label;
                        console.log("Label: " + label + ", Category: " + category);
                        // Lakukan tindakan yang diinginkan berdasarkan label dan kategori yang diklik
                        // Misalnya, arahkan pengguna ke halaman baru dengan query parameter sesuai label dan kategori
                        window.location.href = "label=" + label + "&category=" + category;
                    }
                });

                document.getElementById('myChart2').addEventListener('click', function(event) {
                    const activePoints = chart2.getElementsAtEventForMode(event, 'nearest', {
                        intersect: true
                    }, true);

                    if (activePoints.length > 0) {
                        const firstPoint = activePoints[0];
                        const label = chart2.data.labels[firstPoint.index];
                        const category = chart2.data.datasets[firstPoint.datasetIndex].label;
                        console.log("Label: " + label + ", Category: " + category);
                        // Lakukan tindakan yang diinginkan berdasarkan label dan kategori yang diklik
                        // Misalnya, arahkan pengguna ke halaman baru dengan query parameter sesuai label dan kategori
                        window.location.href = "halaman-baru.html?label=" + label + "&category=" + category;
                    }
                });

                document.getElementById('myChart3').addEventListener('click', function(event) {
                    const activePoints = chart2.getElementsAtEventForMode(event, 'nearest', {
                        intersect: true
                    }, true);

                    if (activePoints.length > 0) {
                        const firstPoint = activePoints[0];
                        const label = chart2.data.labels[firstPoint.index];
                        const category = chart2.data.datasets[firstPoint.datasetIndex].label;
                        console.log("Label: " + label + ", Category: " + category);
                        // Lakukan tindakan yang diinginkan berdasarkan label dan kategori yang diklik
                        // Misalnya, arahkan pengguna ke halaman baru dengan query parameter sesuai label dan kategori
                        window.location.href = "halaman-baru.html?label=" + label + "&category=" + category;
                    }
                });

                document.getElementById('myChart4').addEventListener('click', function(event) {
                    const activePoints = chart2.getElementsAtEventForMode(event, 'nearest', {
                        intersect: true
                    }, true);

                    if (activePoints.length > 0) {
                        const firstPoint = activePoints[0];
                        const label = chart2.data.labels[firstPoint.index];
                        const category = chart2.data.datasets[firstPoint.datasetIndex].label;
                        console.log("Label: " + label + ", Category: " + category);
                        // Lakukan tindakan yang diinginkan berdasarkan label dan kategori yang diklik
                        // Misalnya, arahkan pengguna ke halaman baru dengan query parameter sesuai label dan kategori
                        window.location.href = "halaman-baru.html?label=" + label + "&category=" + category;
                    }
                });
             

                //Barchart4
                document.addEventListener("DOMContentLoaded", function() {
                    var ctx = document.getElementById("ChartManarBpp");
                    // var telkomAkru = 0;
                    // var telkomGroupAkru = 0;
                    // var exmaAkru = 0;
                    // var enterpriseAkru = 0;

                    // var telkomSudahAkru = 0;
                    // var telkomGroupSudahAkru = 0;
                    // var exmaSudahAkru = 0;
                    // var enterpriseSudahAkru = 0;

                    // var telkomBelumAkru = 0;
                    // var telkomGroupBelumAkru = 0;
                    // var exmaBelumAkru = 0;
                    // var enterpriseBelumAkru = 0;
                    var myChart = new Chart(ctx, {
                        type: "bar",
                        data: {
                            labels: ["Enterpries", "Government", "Subsidiaries", "Telkom"],
                            datasets: [{
                                    label: "Prospek",
                                    data: [100, 80, 50, 25],
                                    backgroundColor: "rgba(0, 128, 0, 0.5)",
                                },
                                {
                                    label: "Potensi",
                                    data: [90, 50, 40, 60],
                                    backgroundColor: "rgba(54, 162, 235, 0.5)",
                                },
                                {
                                    label: "Onhand",
                                    data: [15, 10, 10, 10],
                                    backgroundColor: "rgba(255, 255, 0, 0.5)",
                                },
                                {
                                    label: "Out",
                                    data: [15, 10, 10, 53],
                                    backgroundColor: "rgba(255, 99, 132, 0.5)",
                                },
                            ],
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                    },
                                }],
                            },
                        },
                    });

                    myChart.options.onClick = function(event, elements) {
                        if (elements.length > 0) {
                            var dataIndex = elements[0]._index;
                            var label = myChart.data.labels[dataIndex];

                            // Open new page with the label as a parameter
                            window.open("/project");
                        }
                    };
                });

                //Barchart5
                document.addEventListener("DOMContentLoaded", function() {
                    var ctx = document.getElementById("ChartManarKaltim");
                    // var telkomAkru = 0;
                    // var telkomGroupAkru = 0;
                    // var exmaAkru = 0;
                    // var enterpriseAkru = 0;

                    // var telkomSudahAkru = 0;
                    // var telkomGroupSudahAkru = 0;
                    // var exmaSudahAkru = 0;
                    // var enterpriseSudahAkru = 0;

                    // var telkomBelumAkru = 0;
                    // var telkomGroupBelumAkru = 0;
                    // var exmaBelumAkru = 0;
                    // var enterpriseBelumAkru = 0;
                    var myChart = new Chart(ctx, {
                        type: "bar",
                        data: {
                            labels: ["Enterpries", "Government", "Subsidiaries", "Telkom"],
                            datasets: [{
                                    label: "Prospek",
                                    data: [10000, 8000, 5000, 2500],
                                    backgroundColor: "rgba(0, 128, 0, 0.5)",
                                },
                                {
                                    label: "Potensi",
                                    data: [9000, 5000, 2450, 6000],
                                    backgroundColor: "rgba(54, 162, 235, 0.5)",
                                },
                                {
                                    label: "Onhand",
                                    data: [15000, 10000, 1000, 1000],
                                    backgroundColor: "rgba(255, 255, 0, 0.5)",
                                },
                                {
                                    label: "Out",
                                    data: [15000, 10000, 1000, 5310],
                                    backgroundColor: "rgba(255, 99, 132, 0.5)",
                                },
                            ],
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                    },
                                }],
                            },
                        },
                    });

                    myChart.options.onClick = function(event, elements) {
                        if (elements.length > 0) {
                            var dataIndex = elements[0]._index;
                            var label = myChart.data.labels[dataIndex];

                            // Open new page with the label as a parameter
                            window.open("/project");
                        }
                    };
                });

                //Barchart6
                document.addEventListener("DOMContentLoaded", function() {
                    var ctx = document.getElementById("ChartManarKalselteng");
                    // var telkomAkru = 0;
                    // var telkomGroupAkru = 0;
                    // var exmaAkru = 0;
                    // var enterpriseAkru = 0;

                    // var telkomSudahAkru = 0;
                    // var telkomGroupSudahAkru = 0;
                    // var exmaSudahAkru = 0;
                    // var enterpriseSudahAkru = 0;

                    // var telkomBelumAkru = 0;
                    // var telkomGroupBelumAkru = 0;
                    // var exmaBelumAkru = 0;
                    // var enterpriseBelumAkru = 0;
                    var myChart = new Chart(ctx, {
                        type: "bar",
                        data: {
                            labels: ["Enterpries", "Government", "Subsidiaries", "Telkom"],
                            datasets: [{
                                    label: "Prospek",
                                    data: [10000, 8000, 5000, 2500],
                                    backgroundColor: "rgba(0, 128, 0, 0.5)",
                                },
                                {
                                    label: "Potensi",
                                    data: [9000, 5000, 2450, 6000],
                                    backgroundColor: "rgba(54, 162, 235, 0.5)",
                                },
                                {
                                    label: "Onhand",
                                    data: [15000, 10000, 1000, 1000],
                                    backgroundColor: "rgba(255, 255, 0, 0.5)",
                                },
                                {
                                    label: "Out",
                                    data: [15000, 10000, 1000, 5310],
                                    backgroundColor: "rgba(255, 99, 132, 0.5)",
                                },
                            ],
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                    },
                                }],
                            },
                        },
                    });

                    myChart.options.onClick = function(event, elements) {
                        if (elements.length > 0) {
                            var dataIndex = elements[0]._index;
                            var label = myChart.data.labels[dataIndex];

                            // Open new page with the label as a parameter
                            window.open("/project");
                        }
                    };
                });

                //Barchart7
                document.addEventListener("DOMContentLoaded", function() {
                    var ctx = document.getElementById("ChartManarKalbar");
                    // var telkomAkru = 0;
                    // var telkomGroupAkru = 0;
                    // var exmaAkru = 0;
                    // var enterpriseAkru = 0;

                    // var telkomSudahAkru = 0;
                    // var telkomGroupSudahAkru = 0;
                    // var exmaSudahAkru = 0;
                    // var enterpriseSudahAkru = 0;

                    // var telkomBelumAkru = 0;
                    // var telkomGroupBelumAkru = 0;
                    // var exmaBelumAkru = 0;
                    // var enterpriseBelumAkru = 0;
                    var myChart = new Chart(ctx, {
                        type: "bar",
                        data: {
                            labels: ["Enterpries", "Government", "Subsidiaries", "Telkom"],
                            datasets: [{
                                    label: "Prospek",
                                    data: [10000, 8000, 5000, 2500],
                                    backgroundColor: "rgba(0, 128, 0, 0.5)",
                                },
                                {
                                    label: "Potensi",
                                    data: [9000, 5000, 2450, 6000],
                                    backgroundColor: "rgba(54, 162, 235, 0.5)",
                                },
                                {
                                    label: "Onhand",
                                    data: [15000, 10000, 1000, 1000],
                                    backgroundColor: "rgba(255, 255, 0, 0.5)",
                                },
                                {
                                    label: "Out",
                                    data: [15000, 10000, 1000, 5310],
                                    backgroundColor: "rgba(255, 99, 132, 0.5)",
                                },
                            ],
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                    },
                                }],
                            },
                        },
                    });

                    myChart.options.onClick = function(event, elements) {
                        if (elements.length > 0) {
                            var dataIndex = elements[0]._index;
                            var label = myChart.data.labels[dataIndex];

                            // Open new page with the label as a parameter
                            window.open("/project");
                        }
                    };
                });
            </script>
           
        </div>

        <!-- End Container fluid  -->
        <!-- footer -->
        <footer class="footer"> © 2018 All rights reserved. Template designed by <a
                href="https://colorlib.com">Colorlib</a></footer>
        <!-- End footer -->
    </div>
    <!-- End Page wrapper  -->
    


    <!-- End Wrapper -->
    <!-- All Jquery -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('template/') }}/js/lib/bootstrap/js/popper.min.js"></script>


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
    {{-- <script src="{{ asset('template/') }}/js/lib/datatables/datatables.min.js"></script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="{{ asset('template/') }}/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="{{ asset('template/') }}/js/lib/datatables/datatables-init.js"></script> --}}

    <script src="{{ asset('template/') }}js/lib/sweetalert/sweetalert.min.js"></script>
    <!-- scripit init-->
    <script src="{{ asset('template/') }}js/lib/sweetalert/sweetalert.init.js"></script>

    <!-- Bootstrap CSS -->


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/XvoPHh0Jo9Lp4+p" crossorigin="anonymous">
    </script>

    <!-- Popper.js -->




    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>






</body>

</html>
