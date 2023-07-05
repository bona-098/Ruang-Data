@extends('layout.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-70">
                    <div class="card  ">
                        <div class="card-body ">
                            <a href="{{ asset('images/performance/' . $performance_chart) }}" target="_blank">
                                <img src="{{ asset('images/performance/' . $performance->foto) }}"
                                    style="width: 100%; max-width: 100%;" alt="gambar"></a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-70">
                    <div class="card">
                        <div class="card-title">
                            <h4>Yearly Sales </h4>

                        </div>
                        <div class="sales-chart">
                            <canvas id="sales-chart"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
        </div><!-- /.container-fluid -->

        <script type="text/javascript">
            //Sales chart
            var ctx = document.getElementById("sales-chart");
            ctx.height = 150;
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                        "Oktober", "November", "Desember"
                    ],
                    type: 'line',
                    defaultFontFamily: 'Montserrat',
                    datasets: [{
                            label: "Target RKAP",
                            data: {!! json_encode($target_rkap_data) !!},
                            backgroundColor: 'transparent',
                            borderColor: 'rgba(220, 53, 69, 0.75)',
                            borderWidth: 3,
                            pointStyle: 'circle',
                            pointRadius: 5,
                            pointBorderColor: 'transparent',
                            pointBackgroundColor: 'rgba(220, 53, 69, 0.75)',
                        },
                        {
                            label: "Target RKM",
                            data: {!! json_encode($target_rkm_data) !!},
                            backgroundColor: 'transparent',
                            borderColor: 'rgba(0, 123, 255, 0.75)',
                            borderWidth: 3,
                            pointStyle: 'circle',
                            pointRadius: 5,
                            pointBorderColor: 'transparent',
                            pointBackgroundColor: 'rgba(0, 123, 255, 0.75)',
                        },
                        {
                            label: "ACH",
                            data: {!! json_encode($target_ach_data) !!},
                            backgroundColor: 'transparent',
                            borderColor: 'rgba(40, 167, 69, 0.75)',
                            borderWidth: 3,
                            pointStyle: 'circle',
                            pointRadius: 5,
                            pointBorderColor: 'transparent',
                            pointBackgroundColor: 'rgba(40, 167, 69, 0.75)',
                        }
                    ]
                },
                options: {
                    responsive: true,

                    tooltips: {
                        mode: 'index',
                        titleFontSize: 12,
                        titleFontColor: '#000',
                        bodyFontColor: '#000',
                        backgroundColor: '#fff',
                        titleFontFamily: 'Montserrat',
                        bodyFontFamily: 'Montserrat',
                        cornerRadius: 3,
                        intersect: false,
                    },
                    legend: {
                        display: false,
                        labels: {
                            usePointStyle: true,
                            fontFamily: 'Montserrat',
                        },
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            scaleLabel: {
                                display: false,
                                labelString: 'Month'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Value'
                            }
                        }]
                    },
                    title: {
                        display: false,
                        text: 'Normal Legend'
                    }
                }
            });
        </script>

    </section>
@endsection
