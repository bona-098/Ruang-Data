@extends('layout.layout')
@section('content')
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
        {{-- Selesai --}}
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
                                <canvas id="barChart"></canvas>
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
                                <canvas id="barChart2"></canvas>

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
                                <h4>Total Nilai Project</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Belum Akru</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <canvas id="pieChart2"></canvas>
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
@endsection
<script type="text/javascript">
    //Barchart2
    document.addEventListener("DOMContentLoaded", function() {
        var ctx = document.getElementById("barChart2");
        var telkomAkru = {!! json_encode($telkomAkru) !!};
        var telkomGroupAkru = {!! json_encode($telkomGroupAkru) !!};
        var exmaAkru = {!! json_encode($exmaAkru) !!};
        var enterpriseAkru = {!! json_encode($enterpriseAkru) !!};

        var telkomSudahAkru = {!! json_encode($telkomsudahakru) !!};
        var telkomGroupSudahAkru = {!! json_encode($telkomGroupsudahkru) !!};
        var exmaSudahAkru = {!! json_encode($exmasudahakru) !!};
        var enterpriseSudahAkru = {!! json_encode($enterprisesudahakru) !!};

        var telkomBelumAkru = {!! json_encode($telkombelumakru) !!};
        var telkomGroupBelumAkru = {!! json_encode($telkomGroupbelumakru) !!};
        var exmaBelumAkru = {!! json_encode($exmabelumakru) !!};
        var enterpriseBelumAkru = {!! json_encode($enterprisebelumakru) !!};
        var myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["Telkom", "Telkom Group", "Exma", "Enterprise"],
                datasets: [{
                        label: "Sudah Akru",
                        data: [telkomSudahAkru, telkomGroupSudahAkru, exmaSudahAkru,
                            enterpriseSudahAkru
                        ],
                        backgroundColor: "rgba(54, 162, 235, 0.5)",
                    },
                    {
                        label: "Sisa Belum Akru",
                        data: [telkomBelumAkru, telkomGroupBelumAkru, exmaBelumAkru,
                            enterpriseBelumAkru
                        ],
                        backgroundColor: "rgba(255, 99, 132, 0.5)",
                    },
                    {
                        label: "Akru",
                        data: [telkomAkru, telkomGroupAkru, exmaAkru, enterpriseAkru],
                        backgroundColor: "rgba(75, 192, 192, 0.5)",
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


    // bar chart
    var ctx = document.getElementById("barChart");
    //    ctx.height = 200;
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "Agustus", "September",
                "Oktober", "November", "Desember"
            ],
            datasets: [{
                    label: "Target",
                    data: [65, 59, 80, 81, 56, 55, 40, 90, 15, 56, 43, 56],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                },
                {
                    label: "Realisasi",
                    data: [28, 48, 40, 19, 86, 27, 90, 15, 52, 53, 95, 57],
                    borderColor: "rgba(64, 64, 64, 1.0)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0,0,0,0.07)"
                },
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            onClick: function(event, elements) {
                if (elements.length > 0) {
                    var index = elements[0].index;
                    var data = myChart.data.datasets[1].data[index];
                    // Misalnya, mengambil data dari dataset pertama
                    // Tampilkan data di dalam modal
                    document.getElementById("modalData").innerHTML = "Data: " + data;
                    $('#dataModal').modal('show');
                }
            }
        }
    });
</script>