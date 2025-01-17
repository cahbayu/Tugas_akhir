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

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

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
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ auth()->user()->name }}</h6>
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
                            <a class="dropdown-item d-flex align-items-center" href="users-profile">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
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
                    <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-slave1" >
                            <i class="bi bi-circle"></i><span>Slave1</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-slave2" class="active">
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
                            <i class="bi bi-circle"></i><span>Data Tables</span>
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
            <h1>Data Slave 2</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Slave 2</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Kelembaban <span id="data-title">| Slave 2</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-moisture"></i>
                                </div>
                                <div class="ps-1" id="humidity-data">
                                    <h6 id="slave1-humidity">
                                        Slave 2 : {{ $averageHumidity !== 'N/A' ? $averageHumidity . '%' : 'N/A' }}
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body mt-4">
                            <h5 class="card-title">Paket Data <span id="data-title">| Slave 1</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-activity"></i>
                                </div>
                                <div class="ps-1" id="data-packet">
                                    <h6 id="slave1-packet">
                                        Slave 2 : {{ $totalPayload !== 'N/A' ? $totalPayload . ' B' : 'N/A' }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3 col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body mt-4">
                            <h5 class="card-title">Log <span id="data-title">| Slave 2</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-card-checklist"></i>
                                </div>

                                <div class="ps-3" id="revenue-data">
                                    <h6 id="slave1-revenue">
                                        Slave 2 : {{ $logTotal !== 'N/A' ? $logTotal : 'N/A' }}
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xxl-3 col-xl-12">
                    <div class="card info-card customers-card">
                        <div class="card-body mt-4">
                            <h5 class="card-title">Packetloss <span id="data-title">| Slave 2</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-graph-down-arrow"></i>
                                </div>

                                <div class="ps-3" id="packetloss-data">
                                    <h6 id="slave1-packetloss">
                                        Slave 2 : {{ $packetLoss !== 'N/A' ? $packetLoss . '%' : 'N/A' }}
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body mt-4">
                            <h5 class="card-title">Data Payload <span id="data-title">| Slave 2</span></h5>
                            <!-- Line Chart -->
                            <div id="lineChart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    const lineChartData = @json($lineChartData);

                                    const categories = Object.keys(lineChartData);
                                    const data = Object.values(lineChartData);

                                    const chart = new ApexCharts(document.querySelector("#lineChart"), {
                                        series: [{
                                            name: "Payload Size",
                                            data
                                        }],
                                        chart: {
                                            height: 350,
                                            type: 'line',
                                            zoom: {
                                                enabled: true
                                            }
                                        },
                                        colors: ['#FF6B6B'],
                                        dataLabels: {
                                            enabled: false
                                        },
                                        stroke: {
                                            curve: 'smooth'
                                        },
                                        xaxis: {
                                            categories,
                                            title: {
                                                text: "Time (HH:mm)"
                                            }
                                        },
                                        yaxis: {
                                            title: {
                                                text: "Payload Size (Bytes)"
                                            },
                                            labels: {
                                                formatter: function(value) {
                                                    return value + " B";
                                                }
                                            }
                                        },
                                        tooltip: {
                                            shared: true,
                                            intersect: false,
                                            y: {
                                                formatter: function(value) {
                                                    return value + " B";
                                                }
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

                            <!-- Filter Dropdown -->
                            <div class="filter mb-3" id="timeRangeloss">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#"
                                            onclick="showPacketLoss('hourly'); return false;">Per Jam</a></li>
                                    <li><a class="dropdown-item" href="#"
                                            onclick="showPacketLoss('daily'); return false;">Per Hari</a></li>
                                    <li><a class="dropdown-item" href="#"
                                            onclick="showPacketLoss('monthly'); return false;">Per Bulan</a></li>
                                </ul>
                            </div>

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
                                        }));
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
                                            <th>NO</th>
                                            <th>Nama Sensor</th>
                                            <th>Kelembaban</th>
                                            <th>Tanggal & Waktu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($latestSensorData as $index => $data)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $data['sensor_name'] }}</td>
                                                <td>{{ $data['moisture_value'] }}%</td>
                                                <td>{{ $data['created_at'] }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">Tidak ada data sensor terbaru.
                                                </td>
                                            </tr>
                                        @endforelse
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
