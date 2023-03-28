@extends('layout.layout')
@section('content')
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
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
                            <h2>{{ $karyawan->count() }}</h2>
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
    </div>

    {{-- Data Tabel mulai baru --}}
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Karyawan</h4>
            {{-- <h6 class="card-subtitle">Data table example</h6> --}}
            <div class="table-responsive ">
                <table text-align: left; id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Nama</th>
                            <th>Nik</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Start date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawan as $k)
                            
                        <tr>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fa fa-cog"></i>
                                    action
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#myModal"
                                    href="#">Detail</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#myModal"
                                    href="#">Update</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#myModal"
                                    href="#">Delete</a>
                                </div>
                            </div>
                        </td>
                        <td>{{ $k->nama_karyawan }}</td>
                        <td>{{$k->nik}}</td>
                        <td>{{$k->jabatan}}</td>
                        <td>{{$k->unit_kerja }}</td>
                        <td>{{$k->umur }}</td>
                        <td> 13 Maret 2023 </td>
                        <td> 13 Maret 2023asa </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- Selesai --}}

    <!-- /# row -->
    {{-- KONTEN MODAL --}}
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Modal Title</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Modal content goes here.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    {{-- KONTEN MODAL --}}
    {{-- Selesai --}}
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-title">
                    <h4>Yearlyssss Sales </h4>
                </div>
                <div class="sales-chart">
                    <canvas id="sales-chart"></canvas>
                </div>
            </div>
        </div>
        <!-- /# column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-title">
                    <h4>Team Total Completed </h4>
                </div>
                <div class="sales-chart">
                    <canvas id="team-chart"></canvas>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
    </div>
    <!-- /# row -->
    <div class="row">
        <!-- Bar Chart -->
        <div class="col-sm-12 col-md-6">
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
        <!-- Radar Chart -->
        <div class="col-sm-12 col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Rader chart</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <canvas id="radarChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Line Chart -->
        <div class="col-sm-12 col-md-8">
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
        <!-- Pie Chart -->
        <div class="col-sm-6 col-md-4">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Pie chart</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Doughnut Chart -->
        <div class="col-sm-6 col-md-4">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Doughut chart</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <canvas id="doughutChart"></canvas>
                </div>
            </div>
        </div>
        <!-- Polar Chart -->
        <div class="col-sm-6 col-md-4">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Polar chart</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <canvas id="polarChart"></canvas>
                </div>
            </div>
        </div>
        <!-- Single Bar Chart -->
        <div class="col-sm-6 col-md-4">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Single Bar Chart</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <canvas id="singelBarChart"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection



<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/XvoPHh0Jo9Lp4+p" crossorigin="anonymous">
</script>

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
