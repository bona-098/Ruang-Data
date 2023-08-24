@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4 id="projectTitle" data-toggle="modal" data-target="#formModal">Performansi Project Solution
                                </h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <canvas id="myChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formModalLabel">Performansi Project Solution</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="{{ route('dashboard.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="bulan">Bulan:</label>
                                <select id="bulan" name="bulan" class="form-control">
                                    <option value="januari">Januari</option>
                                    <option value="februari">Februari</option>
                                    <option value="maret">Maret</option>
                                    <option value="april">April</option>
                                    <option value="mei">Mei</option>
                                    <option value="juni">Juni</option>
                                    <option value="juli">Juli</option>
                                    <option value="agustus">Agustus</option>
                                    <option value="september">September</option>
                                    <option value="oktober">Oktober</option>
                                    <option value="november">November</option>
                                    <option value="desember">Desember</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="target">Nilai Target:</label>
                                <input type="number" id="target" name="target" class="form-control" required>
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
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Perbandingan Jumlah Nilai</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <canvas id="myChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Perbandingan Jumlah Proyek</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <canvas id="myChart3"></canvas>
                        </div>
                    </div>
                </div>
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

    <script type="text/javascript">
        //BARCHART TESTING


        function isMobileDevice() {
            return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
        }

        const formatterchart1 = (value) => {
            if (value >= 1000000000) {
                return (value / 1000000000).toFixed(1) + ' M';
            } else if (value >= 1000000) {
                return (value / 1000000).toFixed(1) + ' Jt';
            } else if (value >= 1000) {
                return (value / 1000).toFixed(1) + ' K';
            } else {
                return value.toFixed(0);
            }
        };



        function setChartHeight() {
            const chartCanvas1 = document.getElementById('myChart1');
            const chartCanvas2 = document.getElementById('myChart2');
            const chartCanvas3 = document.getElementById('myChart3');
            const chartCanvasManarBpp = document.getElementById('ManarBpp');
            const chartCanvasManarKaltim = document.getElementById('ManarKaltim');
            const chartCanvasManarKalselteng = document.getElementById('ManarKalselteng');
            const chartCanvasManarKalbar = document.getElementById('ManarKalbar');
            const chartHeightMobile = 300; // Sesuaikan tinggi sesuai kebutuhan untuk perangkat mobile
            const chartHeightDesktop = 240; // Sesuaikan tinggi sesuai kebutuhan untuk perangkat desktop

            // Set tinggi grafik berdasarkan lebar perangkat
            if (window.innerWidth <= 767) {
                chartCanvas1.style.height = chartHeightMobile + 'px';
                chartCanvas2.style.height = chartHeightMobile + 'px';
                chartCanvas3.style.height = chartHeightMobile + 'px';
                chartCanvasManarBpp.style.height = chartHeightMobile + 'px';
                chartCanvasManarKaltim.style.height = chartHeightMobile + 'px';
                chartCanvasManarKalselteng.style.height = chartHeightMobile + 'px';
                chartCanvasManarKalbar.style.height = chartHeightMobile + 'px';
            } else {
                chartCanvas1.style.height = chartHeightDesktop + 'px';
                chartCanvas2.style.height = chartHeightDesktop + 'px';
                chartCanvas3.style.height = chartHeightDesktop + 'px';
                chartCanvasManarBpp.style.height = chartHeightDesktop + 'px';
                chartCanvasManarKaltim.style.height = chartHeightDesktop + 'px';
                chartCanvasManarKalselteng.style.height = chartHeightDesktop + 'px';
                chartCanvasManarKalbar.style.height = chartHeightDesktop + 'px';
            }
        }

        // Panggil fungsi pada saat halaman dimuat
        setChartHeight();
        // Panggil fungsi setiap kali jendela diubah ukurannya
        window.addEventListener('resize', setChartHeight);
        //target vs realisasi
        const ctx1 = document.getElementById('myChart1').getContext('2d');
        const chart1 = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                        label: 'Target',
                        data: [{{ $tjanuari }}, {{ $tfebruari }}, {{ $tmaret }},
                            {{ $tapril }}, {{ $tmei }}, {{ $tjuni }},
                            {{ $tjuli }}, {{ $tagustus }}, {{ $tseptember }},
                            {{ $toktober }}, {{ $tnovember }}, {{ $tdesember }}
                        ],
                        backgroundColor: 'rgba(0, 123, 255, 0.9)',
                        borderColor: 'rgba(0, 123, 255, 0.9)',
                        borderWidth: 1
                    },
                    {
                        label: 'Realisasi',
                        data: [{{ $rjanuari }}, 15115000000, 14856000000, 20572000000, 28117000000, 0, 0, 0, 0, 0, 0,
                            0
                        ],
                        backgroundColor: 'rgba(64, 64, 64, 1.0)',
                        borderColor: 'rgba(64, 64, 64, 1.0)',
                        borderWidth: 1
                    }
                ]
            },
            plugins: [ChartDataLabels],
            options: {
                categoryPercentage: 1,
                barPercentage: 0.3,
                responsive: true, // Untuk membuat grafik responsif
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        grace: '5%',
                        ticks: {
                            callback: function(value, index, values) {
                                return formatterchart1(value);
                            }
                        }
                    }
                },
                plugins: {
                    datalabels: {
                        anchor: 'end',
                        align: 'top',
                        formatter: function(value) { // Perbaiki di sini
                            return formatterchart1(value);
                        }
                    }
                }
            }
        });
        const formatter = (value) => {
            if (isMobileDevice()) {
                if (value >= 1000000000) {
                    return (value / 1000000000).toFixed(1) + ' M';
                } else {
                    return value.toFixed(0); // Tampilkan nilai bulat jika tidak mencapai 1 Miliar
                }
            } else {
                if (value >= 1000000000) {
                    return (value / 1000000000).toFixed(1) + ' M';
                } else if (value >= 1000000) {
                    return (value / 1000000).toFixed(1) + ' M';
                } else if (value >= 1000) {
                    return (value / 1000).toFixed(1) + ' K';
                } else {
                    return value.toFixed(0);
                }
            }
        };
        const ctx2 = document.getElementById('myChart2').getContext('2d');
        console.log(ctx2);
        const chart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Telkom', 'Telkom Group', 'Enterprise', 'Goverment'],
                datasets: [{
                        label: 'nilai_project',
                        data: [{{ $telkomAkru }}, {{ $telkomGroupAkru }}, {{ $enterpriseAkru }},
                            {{ $governanceAkru }}
                        ],
                        backgroundColor: 'rgba(75, 192, 192, 0.5)',
                        borderColor: 'rgba(75, 192, 192, 0.5)',
                        borderWidth: 1
                    },
                    {
                        label: 'sudah_akru',
                        data: [{{ $telkomSudahAkru }}, {{ $telkomGroupSudahAkru }},
                            {{ $enterpriseSudahAkru }},
                            {{ $governanceSudahAkru }}
                        ],
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 0.5)',
                        borderWidth: 1,

                    },
                    {
                        label: 'sisa_belum_akru',
                        data: [{{ $telkomBelumAkru }}, {{ $telkomGroupBelumAkru }},
                            {{ $enterpriseBelumAkru }},
                            {{ $governanceBelumAkru }}
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
                responsive: true, // Untuk membuat grafik responsif
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        grace: '50%',
                        ticks: {
                            callback: function(value, index, values) {
                                return formatter(value);
                            }
                        }
                    }
                },
                plugins: {
                    datalabels: {
                        anchor: 'end',
                        align: 'top',
                        formatter: function(value) {
                            return formatter(value);
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
                        data: [{{ $telkomDone }}, {{ $telkomProgress }}, {{ $telkomBelumMulai }}],
                        backgroundColor: 'rgba(75, 192, 192, 0.5)',
                        borderColor: 'rgba(75, 192, 192, 0.5)',
                        borderWidth: 1
                    },
                    {
                        label: 'Telkom Group',
                        data: [{{ $telkomGroupDone }}, {{ $telkomGroupProgress }},
                            {{ $telkomGroupBelumMulai }}
                        ],
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 0.5)',
                        borderWidth: 1
                    },
                    {
                        label: 'Enterprise',
                        data: [{{ $enterpriseDone }}, {{ $enterpriseProgress }},
                            {{ $enterpriseBelumMulai }}
                        ],
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 0.5)',
                        borderWidth: 1
                    },
                    {
                        label: 'Goverment',
                        data: [{{ $governanceDone }}, {{ $governanceProgress }},
                            {{ $governanceBelumMulai }}
                        ],
                        backgroundColor: 'rgba(255, 255, 0, 0.5)',
                        borderColor: 'rgba(255, 255, 0, 0.5)',
                        borderWidth: 1
                    }
                ]
            },
            plugins: [ChartDataLabels],
            options: {
                categoryPercentage: 1,
                barPercentage: 0.5,
                responsive: true, // Untuk membuat grafik responsif
                maintainAspectRatio: false,
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
                            {{ $prospekTelkom }},
                            {{ $prospekSubsidiaries }},
                            {{ $prospekEnterprise }},
                            {{ $prospekGovernment }}
                        ],
                        backgroundColor: 'rgba(0, 128, 0, 0.5)',
                        borderColor: 'rgba(0, 128, 0, 0.5)',
                        borderWidth: 1
                    },
                    {
                        label: 'Potensi',
                        data: [
                            {{ $potensiTelkom }},
                            {{ $potensiSubsidiaries }},
                            {{ $potensiEnterprise }},
                            {{ $potensiGovernment }}
                        ],
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 0.5)',
                        borderWidth: 1
                    },
                    {
                        label: 'On hand',
                        data: [
                            {{ $onhandTelkom }},
                            {{ $onhandSubsidiaries }},
                            {{ $onhandEnterprise }},
                            {{ $onhandGovernment }}
                        ],
                        backgroundColor: 'rgba(255, 255, 0, 0.5)',
                        borderColor: 'rgba(255, 255, 0, 0.5)',
                        borderWidth: 1
                    },
                    {
                        label: 'Out',
                        data: [
                            {{ $outTelkom }},
                            {{ $outSubsidiaries }},
                            {{ $outEnterprise }},
                            {{ $outGovernment }}
                        ],
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 0.5)',
                        borderWidth: 1
                    }
                ]
            },
            plugins: [ChartDataLabels],
            options: {
                responsive: true, // Untuk membuat grafik responsif
                maintainAspectRatio: false,
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
                            {{ $ktprospekTelkom }},
                            {{ $ktprospekSubsidiaries }},
                            {{ $ktprospekEnterprise }},
                            {{ $ktprospekGovernment }}
                        ],
                        backgroundColor: 'rgba(0, 128, 0, 0.5)',
                        borderColor: 'rgba(0, 128, 0, 0.5)',
                        borderWidth: 1
                    },
                    {
                        label: 'Potensi',
                        data: [
                            {{ $ktpotensiTelkom }},
                            {{ $ktpotensiSubsidiaries }},
                            {{ $ktpotensiEnterprise }},
                            {{ $ktpotensiGovernment }},
                        ],
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 0.5)',
                        borderWidth: 1
                    },
                    {
                        label: 'Onhand',
                        data: [
                            {{ $ktonhandTelkom }},
                            {{ $ktonhandSubsidiaries }},
                            {{ $ktonhandEnterprise }},
                            {{ $ktonhandGovernment }}
                        ],
                        backgroundColor: 'rgba(255, 255, 0, 0.5)',
                        borderColor: 'rgba(255, 255, 0, 0.5)',
                        borderWidth: 1
                    },
                    {
                        label: 'Out',
                        data: [
                            {{ $ktoutTelkom }},
                            {{ $ktoutSubsidiaries }},
                            {{ $ktoutEnterprise }},
                            {{ $ktoutGovernment }}
                        ],
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 0.5)',
                        borderWidth: 1
                    }
                ]
            },
            plugins: [ChartDataLabels],
            options: {
                responsive: true, // Untuk membuat grafik responsif
                maintainAspectRatio: false,
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
                            {{ $ksprospekTelkom }},
                            {{ $ksprospekSubsidiaries }},
                            {{ $ksprospekEnterprise }},
                            {{ $ksprospekGovernment }}
                        ],
                        backgroundColor: 'rgba(0, 128, 0, 0.5)',
                        borderColor: 'rgba(0, 128, 0, 0.5)',
                        borderWidth: 1
                    },
                    {
                        label: 'Potensi',
                        data: [
                            {{ $kspotensiTelkom }},
                            {{ $kspotensiSubsidiaries }},
                            {{ $kspotensiEnterprise }},
                            {{ $kspotensiGovernment }}
                        ],
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 0.5)',
                        borderWidth: 1
                    },
                    {
                        label: 'Onhand',
                        data: [
                            {{ $ksonhandTelkom }},
                            {{ $ksonhandSubsidiaries }},
                            {{ $ksonhandEnterprise }},
                            {{ $ksonhandGovernment }}
                        ],
                        backgroundColor: 'rgba(255, 255, 0, 0.5)',
                        borderColor: 'rgba(255, 255, 0, 0.5)',
                        borderWidth: 1
                    },
                    {
                        label: 'Out',
                        data: [
                            {{ $ksoutTelkom }},
                            {{ $ksoutSubsidiaries }},
                            {{ $ksoutEnterprise }},
                            {{ $ksoutGovernment }}
                        ],
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 0.5)',
                        borderWidth: 1
                    }
                ]
            },
            plugins: [ChartDataLabels],
            options: {
                responsive: true, // Untuk membuat grafik responsif
                maintainAspectRatio: false,
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
                            {{ $kbprospekTelkom }},
                            {{ $kbprospekSubsidiaries }},
                            {{ $kbprospekEnterprise }},
                            {{ $kbprospekGovernment }}
                        ],
                        backgroundColor: 'rgba(0, 128, 0, 0.5)',
                        borderColor: 'rgba(0, 128, 0, 0.5)',
                        borderWidth: 1
                    },
                    {
                        label: 'Potensi',
                        data: [
                            {{ $kbpotensiTelkom }},
                            {{ $kbpotensiSubsidiaries }},
                            {{ $kbpotensiEnterprise }},
                            {{ $kbpotensiGovernment }}
                        ],
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 0.5)',
                        borderWidth: 1
                    },
                    {
                        label: 'Onhand',
                        data: [
                            {{ $kbonhandTelkom }},
                            {{ $kbonhandSubsidiaries }},
                            {{ $kbonhandEnterprise }},
                            {{ $kbonhandGovernment }}
                        ],
                        backgroundColor: 'rgba(255, 255, 0, 0.5)',
                        borderColor: 'rgba(255, 255, 0, 0.5)',
                        borderWidth: 1
                    },
                    {
                        label: 'Out',
                        data: [
                            {{ $kboutTelkom }},
                            {{ $kboutSubsidiaries }},
                            {{ $kboutEnterprise }},
                            {{ $kboutGovernment }}
                        ],
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 0.5)',
                        borderWidth: 1
                    }
                ]
            },
            plugins: [ChartDataLabels],
            options: {
                responsive: true, // Untuk membuat grafik responsif
                maintainAspectRatio: false,
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
