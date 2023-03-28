@extends('layout.layout')
@section('content')
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                {{-- Data tabel costumer Mulai --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Karyawan</h4>
                                {{-- <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6> --}}
                                <div class="table-responsive m-t-40">
                                    <table  class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Nik</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Kota Lahir</th>
                                                <th>Agama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jalan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        {{-- <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Nik</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Kota Lahir</th>
                                                <th>Agama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jalan</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot> --}}
                                        <tbody>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td><a href=""class="btn btn-sm btn-success">Detail</a></td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td><a href=""class="btn btn-sm btn-success">Detail</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Data tabel costumer akhir --}}
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

                <!-- End PAge Content -->
            </div>
@endsection