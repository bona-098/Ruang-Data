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

        {{-- Selesai --}}
        <div class="row">
            <div class="col-sm-12 col-md-7 ">
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
            <!-- Pie Chart -->
            {{-- <div class="col-sm-6 col-md-4">
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
            </div> --}}
        </div>
        <div class="row">
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
            <!-- Radar Chart -->
            {{-- <div class="col-sm-12 col-md-6">
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
            </div> --}}
        </div>
        {{-- <div class="row">
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
        </div> --}}
    </div>
@endsection