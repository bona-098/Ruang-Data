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
    <link rel="icon" type="http://192.168.137.50:8000/template/image/png" sizes="16x16"
        href="template/images/favicon.png">
    <title>Projek Telkom</title>
    <!-- Bootstrap Core CSS -->

    <!-- Custom CSS -->
    <link href="http://192.168.137.50:8000/template/css/helper.css" rel="stylesheet">
    <link href="http://192.168.137.50:8000/template/css/style.css" rel="stylesheet">
    <link href="http://192.168.137.50:8000/template/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="http://192.168.137.50:8000/template/css/modal.css" rel="stylesheet">
    <link rel="stylesheet" href="http://192.168.137.50:8000/template/css/lib/bootstrap/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0/dist/chartjs-plugin-datalabels.min.js">
    </script>




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
        @media(max-width: 576px) {
            .sales-chart {
                padding-bottom: 100%;
                /* Tingkatkan tinggi grafik saat digunakan di smartphone */
            }

            .sales-chart canvas {
                width: 300px;
                height: 500px
            }

            .barChart canvas {
                position: absolute;
                width: 100px !important;
                height: 100% !important;
                top: 0;
                left: 0;
            }
        }
    </style>
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
        <div class="page-wrapper">

            <div class="container-fluid">
                <!-- Bar Chart -->
                <div class="col-lg-12 col-md-5">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Performansi Project Solution</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- /# column -->




                <!-- Bar Chart -->
                <div class="col-lg-12 col-md-5">
                    <div class="card">
                        <div class="panel-heading">
                            <div class="card-title">
                                <h4>Perbandingan Jumlah Nilai</h4>
                            </div>
                        </div>
                        <div class="sales-chart">
                            <canvas id="myChart2"></canvas>
                        </div>
                    </div>
                </div>

                <!-- /# column -->




                <!-- Bar Chart -->
                <div class="col-lg-12 col-md-5">
                    <div class="card">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Perbandingan Jumlah Proyek</h4>
                                </div>
                            </div>
                            <div class="sales-chart">
                                <canvas id="myChart3"></canvas>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# column -->


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
                                    <canvas id="ManarBpp"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Manar Kalimantan Timur dan Utara</h4>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="ManarKaltim"></canvas>
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
                                    <canvas id="ManarKalselteng"></canvas>
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
                                    <canvas id="ManarKalbar"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
            <script type="text/javascript">
                //BARCHART TESTING
                const ctx1 = document.getElementById('barChart').getContext('2d');
                const chart1 = new Chart(ctx1, {
                    type: 'bar',
                    data: {
                        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                            'Oktober', 'November', 'Desember'
                        ],
                        datasets: [{
                                label: 'Target',
                                data: [2.00, 2.368, 6.903, 13.754, 19.187, 25.746, 35.271, 42.273, 49.091, 62.615,
                                    80.553, 110.512
                                ],
                                backgroundColor: 'rgba(0, 123, 255, 0.9)',
                                borderColor: 'rgba(0, 123, 255, 0.9)',
                                borderWidth: 1
                            },
                            {
                                label: 'Realisasi',
                                data: [7.10, 15.115, 14.856, 20.572, 28.117, 0, 0, 0, 0, 0, 0, 0],
                                backgroundColor: 'rgba(64, 64, 64, 1.0)',
                                borderColor: 'rgba(64, 64, 64, 1.0)',
                                borderWidth: 1
                            }
                        ]
                    },
                    plugins: [ChartDataLabels],
                    options: {
                        categoryPercentage: 1,
                        barPercentage: 0.5,
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
                // document.getElementById('barChart').addEventListener('click', function(event) {
                //     const activePoints = chart1.getElementsAtEventForMode(event, 'nearest', {
                //         intersect: true
                //     }, true);

                //     if (activePoints.length > 0) {
                //         const firstPoint = activePoints[0];
                //         const label = chart1.data.labels[firstPoint.index];
                //         const category = chart1.data.datasets[firstPoint.datasetIndex].label;
                //         console.log("Label: " + label + ", Category: " + category);
                //         // Lakukan tindakan yang diinginkan berdasarkan label dan kategori yang diklik
                //         // Misalnya, arahkan pengguna ke halaman baru dengan query parameter sesuai label dan kategori
                //         const url = "?label=" + label + "&category=" + category;
                //         window.open(url, "_blank");
                //     }
                // });
                const ctx2 = document.getElementById('myChart2').getContext('2d');
                console.log(ctx2);
                const chart2 = new Chart(ctx2, {
                    type: 'bar',
                    data: {
                        labels: ['Telkom', 'Telkom Group', 'Enterprise', 'Goverment'],
                        datasets: [{
                                label: 'nilai_project',
                                data: [27652930175, 7849822738, 10396595361,
                                    0
                                ],
                                backgroundColor: 'rgba(75, 192, 192, 0.5)',
                                borderColor: 'rgba(75, 192, 192, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'sudah_akru',
                                data: [17870141678, 4943471737, 6069012197,
                                    0
                                ],
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 0.5)',
                                borderWidth: 1,

                            },
                            {
                                label: 'sisa_belum_akru',
                                data: [9782788497, 2906351001, 4163975164,
                                    0
                                ],
                                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                                borderColor: 'rgba(255, 99, 132, 0.5)',
                                borderWidth: 1
                            }
                        ]
                    },
                    plugins: [ChartDataLabels],
                    options: {
                        categoryPercentage: 1,
                        barPercentage: 0.5,
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    callback: function(value, index, values) {
                                        return numeral(value / 1000000000).format('0.0') + 'B';
                                    }
                                }
                            }
                        },
                        plugins: {
                            datalabels: {
                                anchor: 'end',
                                align: 'top',
                                formatter: function(value) {
                                    return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                                }
                            }
                        },
                        legend: {
                            position: 'top'
                        }
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
                        const sudahAkru = chart2.data.datasets[firstPoint.datasetIndex].data[firstPoint.index];

                        console.log("Label: " + label + ", Category: " + category + ", Sudah Akru: " + sudahAkru);

                        // Konstruksi URL dengan parameter filter
                        let url = "detail_chart_nilai?label=" + label + "&category=" + category + "&sudahAkru=" + sudahAkru;

                        // Buka halaman baru dengan URL yang dikonstruksi
                        window.open(url, "_blank");
                    }
                });


                const ctx3 = document.getElementById('myChart3').getContext('2d');
                const chart3 = new Chart(ctx3, {
                    type: 'bar',
                    data: {
                        labels: ['Done', 'Progress', 'Potensial'],
                        datasets: [{
                                label: 'Telkom',
                                data: [39, 4, 3],
                                backgroundColor: 'rgba(75, 192, 192, 0.5)',
                                borderColor: 'rgba(75, 192, 192, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Telkom Group',
                                data: [17, 0,
                                    1
                                ],
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Enterprise',
                                data: [13, 0,
                                    1
                                ],
                                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                                borderColor: 'rgba(255, 99, 132, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Goverment',
                                data: [0, 0,
                                    0
                                ],
                                backgroundColor: 'rgba(255, 255, 0, 0.5)',
                                borderColor: 'rgba(255, 255, 0, 0.5)',
                                borderWidth: 1
                            }
                        ]
                    },
                    plugins: [ChartDataLabels],
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                grace: '10%'
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
                document.getElementById('myChart3').addEventListener('click', function(event) {
                    const activePoints = chart3.getElementsAtEventForMode(event, 'nearest', {
                        intersect: true
                    }, true);

                    if (activePoints.length > 0) {
                        const firstPoint = activePoints[0];
                        const label = chart3.data.labels[firstPoint.index];
                        const category = chart3.data.datasets[firstPoint.datasetIndex].label;
                        console.log("Label: " + label + ", Category: " + category);
                        // Lakukan tindakan yang diinginkan berdasarkan label dan kategori yang diklik
                        // Misalnya, arahkan pengguna ke halaman baru dengan query parameter sesuai label dan kategori
                        const url = "detail_chart_projek?label=" + label + "&category=" + category;
                        window.open(url, "_blank");
                    }
                });
                const ctx4 = document.getElementById('ManarBpp').getContext('2d');
                const chart4 = new Chart(ctx4, {
                    type: 'bar',
                    data: {
                        labels: ['Telkom', 'Subsidiaries', 'Enterprise', 'Government'],
                        datasets: [{
                                label: 'Prospek',
                                data: [
                                    0,
                                    0,
                                    5,
                                    3
                                ],
                                backgroundColor: 'rgba(0, 128, 0, 0.5)',
                                borderColor: 'rgba(0, 128, 0, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Potensi',
                                data: [
                                    1,
                                    0,
                                    9,
                                    0
                                ],
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'On hand',
                                data: [
                                    5,
                                    9,
                                    28,
                                    1
                                ],
                                backgroundColor: 'rgba(255, 255, 0, 0.5)',
                                borderColor: 'rgba(255, 255, 0, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Out',
                                data: [
                                    0,
                                    0,
                                    5,
                                    1
                                ],
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
                                beginAtZero: true,
                                grace: '20%'
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

                document.getElementById('ManarBpp').addEventListener('click', function(event) {
                    const activePoints = chart4.getElementsAtEventForMode(event, 'nearest', {
                        intersect: true
                    }, true);

                    if (activePoints.length > 0) {
                        const firstPoint = activePoints[0];
                        const segment = chart4.data.labels[firstPoint.index];
                        const statusProject = chart4.data.datasets[firstPoint.datasetIndex].label;
                        console.log("Segment: " + segment + ", Status Project: " + statusProject);
                        const unitKerja = "Area Balikpapan";
                        const url = "detail_chart_sales?segment=" + segment + "&status_project=" + statusProject +
                            "&unit_kerja=" + unitKerja;
                        window.open(url, "_blank");
                    }
                });

                const ctx5 = document.getElementById('ManarKaltim').getContext('2d');
                const chart5 = new Chart(ctx5, {
                    type: 'bar',
                    data: {
                        labels: ['Telkom', 'Subsidiaries', 'Enterprise', 'Government'],
                        datasets: [{
                                label: 'Prospek',
                                data: [
                                    0,
                                    0,
                                    3,
                                    5
                                ],
                                backgroundColor: 'rgba(0, 128, 0, 0.5)',
                                borderColor: 'rgba(0, 128, 0, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Potensi',
                                data: [
                                    0,
                                    0,
                                    3,
                                    0,
                                ],
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Onhand',
                                data: [
                                    0,
                                    2,
                                    8,
                                    0
                                ],
                                backgroundColor: 'rgba(255, 255, 0, 0.5)',
                                borderColor: 'rgba(255, 255, 0, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Out',
                                data: [
                                    0,
                                    0,
                                    1,
                                    0
                                ],
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
                                beginAtZero: true,
                                grace: '20%'
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
                document.getElementById('ManarKaltim').addEventListener('click', function(event) {
                    const activePoints = chart5.getElementsAtEventForMode(event, 'nearest', {
                        intersect: true
                    }, true);

                    if (activePoints.length > 0) {
                        const firstPoint = activePoints[0];
                        const segment = chart4.data.labels[firstPoint.index];
                        const statusProject = chart4.data.datasets[firstPoint.datasetIndex].label;
                        console.log("Segment: " + segment + ", Status Project: " + statusProject);
                        const unitKerja = "Area Kaltim";
                        const url = "detail_chart_sales?segment=" + segment + "&status_project=" + statusProject +
                            "&unit_kerja=" + unitKerja;
                        window.open(url, "_blank");
                    }
                });
                const ctx6 = document.getElementById('ManarKalselteng').getContext('2d');
                const chart6 = new Chart(ctx6, {
                    type: 'bar',
                    data: {
                        labels: ['Telkom', 'Subsidiaries', 'Enterprise', 'Government'],
                        datasets: [{
                                label: 'Prospek',
                                data: [
                                    0,
                                    0,
                                    7,
                                    3
                                ],
                                backgroundColor: 'rgba(0, 128, 0, 0.5)',
                                borderColor: 'rgba(0, 128, 0, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Potensi',
                                data: [
                                    0,
                                    0,
                                    2,
                                    0
                                ],
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Onhand',
                                data: [
                                    0,
                                    6,
                                    6,
                                    0
                                ],
                                backgroundColor: 'rgba(255, 255, 0, 0.5)',
                                borderColor: 'rgba(255, 255, 0, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Out',
                                data: [
                                    0,
                                    0,
                                    0,
                                    0
                                ],
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
                                beginAtZero: true,
                                grace: '20%'
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
                document.getElementById('ManarKalselteng').addEventListener('click', function(event) {
                    const activePoints = chart6.getElementsAtEventForMode(event, 'nearest', {
                        intersect: true
                    }, true);

                    if (activePoints.length > 0) {
                        const firstPoint = activePoints[0];
                        const segment = chart4.data.labels[firstPoint.index];
                        const statusProject = chart4.data.datasets[firstPoint.datasetIndex].label;
                        console.log("Segment: " + segment + ", Status Project: " + statusProject);
                        const unitKerja = "Area Kalsel";
                        const url = "detail_chart_sales?segment=" + segment + "&status_project=" + statusProject +
                            "&unit_kerja=" + unitKerja;
                        window.open(url, "_blank");
                    }
                });
                const ctx7 = document.getElementById('ManarKalbar').getContext('2d');
                const chart7 = new Chart(ctx7, {
                    type: 'bar',
                    data: {
                        labels: ['Telkom', 'Subsidiaries', 'Enterprise', 'Government'],
                        datasets: [{
                                label: 'Prospek',
                                data: [
                                    0,
                                    0,
                                    8,
                                    3
                                ],
                                backgroundColor: 'rgba(0, 128, 0, 0.5)',
                                borderColor: 'rgba(0, 128, 0, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Potensi',
                                data: [
                                    0,
                                    0,
                                    0,
                                    0
                                ],
                                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                                borderColor: 'rgba(54, 162, 235, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Onhand',
                                data: [
                                    0,
                                    2,
                                    14,
                                    2
                                ],
                                backgroundColor: 'rgba(255, 255, 0, 0.5)',
                                borderColor: 'rgba(255, 255, 0, 0.5)',
                                borderWidth: 1
                            },
                            {
                                label: 'Out',
                                data: [
                                    0,
                                    0,
                                    0,
                                    0
                                ],
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
                                beginAtZero: true,
                                grace: '10%'
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
                document.getElementById('ManarKalbar').addEventListener('click', function(event) {
                    const activePoints = chart7.getElementsAtEventForMode(event, 'nearest', {
                        intersect: true
                    }, true);

                    if (activePoints.length > 0) {
                        const firstPoint = activePoints[0];
                        const segment = chart4.data.labels[firstPoint.index];
                        const statusProject = chart4.data.datasets[firstPoint.datasetIndex].label;
                        console.log("Segment: " + segment + ", Status Project: " + statusProject);
                        const unitKerja = "Area Kalbar";
                        const url = "detail_chart_sales?segment=" + segment + "&status_project=" + statusProject +
                            "&unit_kerja=" + unitKerja;
                        window.open(url, "_blank");
                    }
                });
                // Responsiveness
                function resizeChart() {
                    const container = document.querySelector('.sales-chart');
                    const aspectRatio = 0.75; // Sesuaikan dengan rasio tinggi/lebar grafik Anda

                    const width = container.offsetWidth;
                    const height = width * aspectRatio;

                    container.style.height = height + 'px';
                    chart2.resize();
                }

                resizeChart();

                window.addEventListener('resize', function() {
                    resizeChart();
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
    </div>


    <!-- End Wrapper -->
    <!-- All Jquery -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="http://192.168.137.50:8000/template/js/lib/bootstrap/js/popper.min.js"></script>


    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="http://192.168.137.50:8000/template/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="http://192.168.137.50:8000/template/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="http://192.168.137.50:8000/template/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>

    <script src="http://192.168.137.50:8000/template/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="http://192.168.137.50:8000/template/js/lib/chart-js/chartjs-init-demo.js"></script>
    <!--Custom JavaScript -->
    <script src="http://192.168.137.50:8000/template/js/custom.min.js"></script>
    <script src="http://192.168.137.50:8000/template/js/lib/datatables/datatables.min.js"></script>
    <script
        src="http://192.168.137.50:8000/template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js">
    </script>
    <script
        src="http://192.168.137.50:8000/template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js">
    </script>
    <script
        src="http://192.168.137.50:8000/template/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js">
    </script>
    <script
        src="http://192.168.137.50:8000/template/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js">
    </script>
    <script
        src="http://192.168.137.50:8000/template/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js">
    </script>
    <script
        src="http://192.168.137.50:8000/template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js">
    </script>
    <script
        src="http://192.168.137.50:8000/template/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js">
    </script>
    <script src="http://192.168.137.50:8000/template/js/lib/datatables/datatables-init.js"></script>

    <script src="http://192.168.137.50:8000/templatejs/lib/sweetalert/sweetalert.min.js"></script>
    <!-- scripit init-->
    <script src="http://192.168.137.50:8000/templatejs/lib/sweetalert/sweetalert.init.js"></script>

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
