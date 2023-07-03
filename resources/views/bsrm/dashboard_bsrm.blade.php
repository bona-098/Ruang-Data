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
                                <h4>Manar Kalimantan Timur</h4>
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
        const ctx4 = document.getElementById('ManarBpp').getContext('2d');
        const ctx5 = document.getElementById('ManarKaltim').getContext('2d');
        const ctx6 = document.getElementById('ManarKalselteng').getContext('2d');
        const ctx7 = document.getElementById('ManarKalbar').getContext('2d');
        const chart1 = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                        label: 'Target',
                        data: [200, 2368, 6903, 13754, 19187, 25746, 35271, 42273, 49091, 62615, 80553, 110512],
                        backgroundColor: 'rgba(0, 123, 255, 0.9)',
                        borderColor: 'rgba(0, 123, 255, 0.9)',
                        borderWidth: 1
                    },
                    {
                        label: 'Realisasi',
                        data: [710, 15115, 14856, 20572, 28117, 0, 0, 0, 0, 0, 0, 0],
                        backgroundColor: 'rgba(64, 64, 64, 1.0)',
                        borderColor: 'rgba(64, 64, 64, 1.0)',
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
                        data: [32, 29, 12],
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

        const chart5 = new Chart(ctx5, {
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

        const chart6 = new Chart(ctx6, {
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

        const chart7 = new Chart(ctx7, {
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

        document.getElementById('ManarBpp').addEventListener('click', function(event) {
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
     
        document.getElementById('ManarKaltim').addEventListener('click', function(event) {
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

        document.getElementById('ManarKalselteng').addEventListener('click', function(event) {
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

        document.getElementById('ManarKalbar').addEventListener('click', function(event) {
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
        
    </script>

    {{-- <script type="text/javascript">
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
                        data: [200, 2368, 6903, 13754, 19187, 25746, 35271, 42273, 49091, 62615, 80553, 110512],
                        borderColor: "rgba(0, 123, 255, 0.9)",
                        borderWidth: "0",
                        backgroundColor: "rgba(0, 123, 255, 0.5)"
                    },
                    {
                        label: "Realisasi",
                        data: [710, 15115, 14856, 20572, 28117, 0, 0, 0, 0, 0, 0, 0],
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
                    labels: ["Telkom", "Telkom Group", "Enterprise"],
                    datasets: [{
                            label: "Nilai Project",
                            data: [telkomAkru, telkomGroupAkru, enterpriseAkru],
                            backgroundColor: "rgba(75, 192, 192, 0.5)",
                        },
                        {
                            label: "Sudah Akru",
                            data: [telkomSudahAkru, telkomGroupSudahAkru,
                                enterpriseSudahAkru
                            ],
                            backgroundColor: "rgba(54, 162, 235, 0.5)",
                        },
                        {
                            label: "Sisa Belum Akru",
                            data: [telkomBelumAkru, telkomGroupBelumAkru,
                                enterpriseBelumAkru
                            ],
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

        //Barchart3
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById("barChart3");
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
                    labels: ["Done", "Progress", "Belum Mulai"],
                    datasets: [{
                            label: "Telkom",
                            data: [10000, 8000, 5000],
                            backgroundColor: "rgba(75, 192, 192, 0.5)",
                        },
                        {
                            label: "Telkom Group",
                            data: [9000, 5000, 2450],
                            backgroundColor: "rgba(54, 162, 235, 0.5)",
                        },
                        {
                            label: "Enterprise",
                            data: [15000, 10000, 1000],
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

        //Barchart4
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById("ChartManarBpp");
            // var telkomAkru = {!! json_encode($telkomAkru) !!};
            // var telkomGroupAkru = {!! json_encode($telkomGroupAkru) !!};
            // var exmaAkru = {!! json_encode($exmaAkru) !!};
            // var enterpriseAkru = {!! json_encode($enterpriseAkru) !!};

            // var telkomSudahAkru = {!! json_encode($telkomsudahakru) !!};
            // var telkomGroupSudahAkru = {!! json_encode($telkomGroupsudahkru) !!};
            // var exmaSudahAkru = {!! json_encode($exmasudahakru) !!};
            // var enterpriseSudahAkru = {!! json_encode($enterprisesudahakru) !!};

            // var telkomBelumAkru = {!! json_encode($telkombelumakru) !!};
            // var telkomGroupBelumAkru = {!! json_encode($telkomGroupbelumakru) !!};
            // var exmaBelumAkru = {!! json_encode($exmabelumakru) !!};
            // var enterpriseBelumAkru = {!! json_encode($enterprisebelumakru) !!};
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
            // var telkomAkru = {!! json_encode($telkomAkru) !!};
            // var telkomGroupAkru = {!! json_encode($telkomGroupAkru) !!};
            // var exmaAkru = {!! json_encode($exmaAkru) !!};
            // var enterpriseAkru = {!! json_encode($enterpriseAkru) !!};

            // var telkomSudahAkru = {!! json_encode($telkomsudahakru) !!};
            // var telkomGroupSudahAkru = {!! json_encode($telkomGroupsudahkru) !!};
            // var exmaSudahAkru = {!! json_encode($exmasudahakru) !!};
            // var enterpriseSudahAkru = {!! json_encode($enterprisesudahakru) !!};

            // var telkomBelumAkru = {!! json_encode($telkombelumakru) !!};
            // var telkomGroupBelumAkru = {!! json_encode($telkomGroupbelumakru) !!};
            // var exmaBelumAkru = {!! json_encode($exmabelumakru) !!};
            // var enterpriseBelumAkru = {!! json_encode($enterprisebelumakru) !!};
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
            // var telkomAkru = {!! json_encode($telkomAkru) !!};
            // var telkomGroupAkru = {!! json_encode($telkomGroupAkru) !!};
            // var exmaAkru = {!! json_encode($exmaAkru) !!};
            // var enterpriseAkru = {!! json_encode($enterpriseAkru) !!};

            // var telkomSudahAkru = {!! json_encode($telkomsudahakru) !!};
            // var telkomGroupSudahAkru = {!! json_encode($telkomGroupsudahkru) !!};
            // var exmaSudahAkru = {!! json_encode($exmasudahakru) !!};
            // var enterpriseSudahAkru = {!! json_encode($enterprisesudahakru) !!};

            // var telkomBelumAkru = {!! json_encode($telkombelumakru) !!};
            // var telkomGroupBelumAkru = {!! json_encode($telkomGroupbelumakru) !!};
            // var exmaBelumAkru = {!! json_encode($exmabelumakru) !!};
            // var enterpriseBelumAkru = {!! json_encode($enterprisebelumakru) !!};
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
            // var telkomAkru = {!! json_encode($telkomAkru) !!};
            // var telkomGroupAkru = {!! json_encode($telkomGroupAkru) !!};
            // var exmaAkru = {!! json_encode($exmaAkru) !!};
            // var enterpriseAkru = {!! json_encode($enterpriseAkru) !!};

            // var telkomSudahAkru = {!! json_encode($telkomsudahakru) !!};
            // var telkomGroupSudahAkru = {!! json_encode($telkomGroupsudahkru) !!};
            // var exmaSudahAkru = {!! json_encode($exmasudahakru) !!};
            // var enterpriseSudahAkru = {!! json_encode($enterprisesudahakru) !!};

            // var telkomBelumAkru = {!! json_encode($telkombelumakru) !!};
            // var telkomGroupBelumAkru = {!! json_encode($telkomGroupbelumakru) !!};
            // var exmaBelumAkru = {!! json_encode($exmabelumakru) !!};
            // var enterpriseBelumAkru = {!! json_encode($enterprisebelumakru) !!};
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
    </script> --}}
@endsection
