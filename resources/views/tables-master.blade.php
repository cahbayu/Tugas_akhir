<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tables / General - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index" class="logo d-flex align-items-center">
                <span class="d-none d-lg-block">RoleFlex</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{auth()->user()->name}}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{auth()->user()->name}}</h6>
                            <span>User</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item d-flex align-items-center">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </button>
                            </form>
                        </li>


                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="index">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Records</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-master" class="active">
                            <i class="bi bi-circle"></i><span>Master</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-slave1" class=>
                            <i class="bi bi-circle"></i><span>Slave1</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-slave2">
                            <i class="bi bi-circle"></i><span>Slave2</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-slave3">
                            <i class="bi bi-circle"></i><span>Slave3</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-data">
                            <i class="bi bi-circle"></i><span>Data Log</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-register">
                    <i class="bi bi-card-list"></i>
                    <span>Register</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-login">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Login</span>
                </a>
            </li><!-- End Login Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Slave 1</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Slave 1</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body mt-4">
                            <h5 class="card-title">Paket Data <span id="data-title">| Master</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-activity"></i>
                                </div>
                                <div class="ps-1" id="data-packet">
                                    <h6 id="slave1-packet">
                                        Slave 1 : {{ $totalPayload !== 'N/A' ? $totalPayload . ' B' : 'N/A' }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body mt-4">
                            <h5 class="card-title">Log <span id="data-title">| Master</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-card-checklist"></i>
                                </div>

                                <div class="ps-3" id="revenue-data">
                                    <h6 id="slave1-revenue">
                                        Slave 1 : {{ $logTotal !== 'N/A' ? $logTotal : 'N/A' }}
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xxl-3 col-xl-12">
                    <div class="card info-card customers-card">
                        <div class="card-body mt-4">
                            <h5 class="card-title">Packetloss <span id="data-title">| Master</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-graph-down-arrow"></i>
                                </div>

                                <div class="ps-3" id="packetloss-data">
                                    <h6 id="slave1-packetloss">
                                        Slave 1 : {{ $packetLoss !== 'N/A' ? $packetLoss . '%' : 'N/A' }}
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body mt-4">
                            <h5 class="card-title">Data Payload <span id="data-title">| Master</span></h5>
                            <!-- Line Chart -->
                            <div id="lineChart"></div>

                            <script>
document.addEventListener("DOMContentLoaded", () => {
    const minuteData = @json($minuteData);
    const hourlyData = @json($hourlyData);
    
    // Transform data menggunakan datetime string
    const minuteSeries = Object.entries(minuteData).map(([time, data]) => ({
        x: data.datetime,  // Menggunakan datetime langsung
        y: data.payload_size
    })).sort((a, b) => new Date(a.x) - new Date(b.x));

    const hourlySeries = Object.entries(hourlyData).map(([time, data]) => ({
        x: data.datetime,  // Menggunakan datetime langsung
        y: data.payload_size
    })).sort((a, b) => new Date(a.x) - new Date(b.x));

    let currentSeries = hourlySeries;
    const zoomThreshold = 1000 * 60 * 60 * 3;

    const chart = new ApexCharts(document.querySelector("#lineChart"), {
        series: [{
            name: "Payload Size",
            data: currentSeries
        }],
        chart: {
            height: 350,
            type: 'line',
            zoom: {
                enabled: true,
                type: 'x',
                autoScaleYaxis: true
            },
            toolbar: {
                show: true,
                tools: {
                    download: true,
                    selection: true,
                    zoom: true,
                    zoomin: true,
                    zoomout: true,
                    pan: true,
                    reset: true
                }
            },
            events: {
                beforeZoom: (chartContext, { xaxis }) => {
                    const timeRange = xaxis.max - xaxis.min;
                    const newData = timeRange < zoomThreshold ? minuteSeries : hourlySeries;
                    
                    chart.updateSeries([{
                        name: "Payload Size",
                        data: newData
                    }]);
                    
                    return {
                        xaxis: {
                            min: xaxis.min,
                            max: xaxis.max
                        }
                    };
                },
                zoomed: (chartContext, { xaxis }) => {
                    const timeRange = xaxis.max - xaxis.min;
                    if (timeRange >= zoomThreshold && chart.w.globals.seriesData[0] === minuteSeries) {
                        chart.updateSeries([{
                            name: "Payload Size",
                            data: hourlySeries
                        }]);
                    }
                },
                beforeResetZoom: () => {
                    chart.updateSeries([{
                        name: "Payload Size",
                        data: hourlySeries
                    }]);
                }
            }
        },
        colors: ['#2E93fA'],
        stroke: {
            curve: 'smooth',
            width: 2
        },
        xaxis: {
            type: 'datetime',
            title: {
                text: "Time"
            },
            labels: {
                datetimeFormatter: {
                    year: 'yyyy',
                    month: 'MMM \'yy',
                    day: 'dd MMM',
                    hour: 'HH:mm'
                }
            }
        },
        yaxis: {
            title: {
                text: "Payload Size (Bytes)"
            },
            labels: {
                formatter: function(value) {
                    return Math.round(value) + " B";
                }
            }
        },
        tooltip: {
            x: {
                format: 'dd MMM yyyy HH:mm'
            },
            y: {
                formatter: function(value) {
                    return Math.round(value) + " B";
                }
            }
        },
        annotations: {
            yaxis: [{
                y: 0,
                borderColor: '#999',
                label: {
                    text: 'Zoom in untuk melihat data per menit',
                    style: {
                        color: "#333",
                        background: '#fff8e1'
                    }
                }
            }]
        },
        markers: {
            size: 4,
            hover: {
                size: 6
            }
        }
    });

    chart.render();
});
                            </script>
                            <!-- End Line Chart -->
                        </div>


                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Packet Loss</h5>


                            <!-- Area Chart -->
                            <div id="areaChart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    const packetLossData = @json($packetLossData);

                                    const getDataByRange = (range) => {
                                        const data = Object.entries(packetLossData).map(([key, value]) => ({
                                            time: key,
                                            sent: value.sent,
                                            lost: value.lost,
                                        }))
                                        .reverse();
                                        return {
                                            categories: data.map(d => d.time),
                                            sentData: data.map(d => d.sent),
                                            lostData: data.map(d => d.lost),
                                        };
                                    };

                                    let chart = new ApexCharts(document.querySelector("#areaChart"), {
                                        series: [{
                                                name: "Total Data Terkirim",
                                                data: []
                                            },
                                            {
                                                name: "Packet Loss",
                                                data: []
                                            },
                                        ],
                                        chart: {
                                            height: 350,
                                            type: 'line',
                                            zoom: {
                                                enabled: true
                                            },
                                        },
                                        stroke: {
                                            curve: 'smooth'
                                        },
                                        xaxis: {
                                            categories: []
                                        },
                                        tooltip: {
                                            shared: true,
                                            intersect: false
                                        },
                                        colors: ['#00b894', '#d63031'],
                                        grid: {
                                            row: {
                                                colors: ['#f3f3f3', 'transparent'],
                                                opacity: 0.5
                                            },
                                        },
                                    });

                                    chart.render();

                                    window.showPacketLoss = (range) => {
                                        const {
                                            categories,
                                            sentData,
                                            lostData
                                        } = getDataByRange(range);
                                        chart.updateOptions({
                                            xaxis: {
                                                categories
                                            },
                                            series: [{
                                                    name: "Total Data Terkirim",
                                                    data: sentData
                                                },
                                                {
                                                    name: "Packet Loss",
                                                    data: lostData
                                                },
                                            ],
                                        });
                                    };

                                    showPacketLoss('hourly');
                                });
                            </script>
                        </div>


                    </div>

                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">Data Kelembaban Sensor</h5>
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">Tipe Node</th>
                                            <th style="text-align: center;">Ukuran Paket Data</th>
                                            <th style="text-align: center;">Packetloss</th>
                                            <th style="text-align: center;" data-type="date" data-format="YYYY/DD/MM">
                                                Start Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($logs as $log)
                                            <tr style="text-align: center;">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $log->node_type }}</td>
                                                <td>{{ $log->payload_size }}</td>
                                                @php
                                                    $packetLoss = 0;
                                                    if ($log->expected_data > 0) {
                                                        $packetLoss = round((($log->expected_data - $log->received_data) / $log->expected_data) * 100, 2);
                                                    }
                                                @endphp
                                                <td>{{ $packetLoss }}%</td>
                                                <td>{{ $log->created_at }}</td>
                                            </tr>
                                        @endforeach
                                     </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                </div>
        </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Awal Cahyo</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
