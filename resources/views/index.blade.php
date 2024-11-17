<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
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
                <img src="assets/img/logo.png" alt="">
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
                        <span class="d-none d-md-block dropdown-toggle ps-2">Awal Cahyo B.A</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Awal Cahyo B.A</h6>
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
                <a class="nav-link " href="index">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-slave1">
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
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-9">
                    <div class="row">

                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Kelembaban</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-moisture"></i>
                                        </div>
                                        <div class="ps-3" id="humidity-data">
                                            <!-- Iterasi melalui nodeHumidityData untuk menampilkan kelembaban setiap node -->
                                            @foreach ($nodeHumidityData as $nodeId => $humidity)
                                                <h6 id="slave{{ $nodeId }}-humidity">Node {{ $nodeId }}:
                                                    {{ $humidity ?? 'N/A' }}%</h6>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Garis pemisah -->
                                    <hr>

                                    <!-- Bagian total kelembaban rata-rata -->
                                    <div class="mt-3">
                                        @php
                                            $averageHumidity = count($nodeHumidityData)
                                                ? round(array_sum($nodeHumidityData) / count($nodeHumidityData), 2)
                                                : 'N/A';
                                        @endphp
                                        <h6 id="total-humidity">Total Kelembaban: {{ $averageHumidity }}% (Rata-Rata)
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Log</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-card-checklist"></i>
                                        </div>

                                        <div class="ps-3" id="revenue-data">
                                            <!-- Data revenue akan ditampilkan di sini -->
                                            <h6 id="master-revenue">Master : 3660</h6>
                                            <h6 id="slave1-revenue">Slave 1: 1220</h6>
                                            <h6 id="slave2-revenue">Slave 2: 1220</h6>
                                            <h6 id="slave3-revenue">Slave 3: 1220</h6>
                                        </div>
                                    </div>

                                    <!-- Garis pemisah -->
                                    <hr>

                                    <!-- Bagian total data -->
                                    <div class="mt-3">
                                        <h6 id="total-revenue">Total: 3660</h6>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Packetloss</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-graph-down-arrow"></i>
                                        </div>

                                        <div class="ps-3" id="packetloss-data">
                                            <!-- Data packet loss akan ditampilkan di sini -->
                                            <h6 id="master-packetloss">Master : 0,25% (52)</h6>
                                            <h6 id="slave1-packetloss">Slave 1: 0,25% (52)</h6>
                                            <h6 id="slave2-packetloss">Slave 2: 0,25% (52)</h6>
                                            <h6 id="slave3-packetloss">Slave 3: 0,25% (52)</h6>
                                        </div>
                                    </div>

                                    <!-- Garis pemisah -->
                                    <hr>

                                    <!-- Bagian total packetloss -->
                                    <div class="mt-3">
                                        <h6 id="total-packetloss">Total Packetloss: 0,75% (156)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="" data-value="hourly">Per Jam</a>
                                        </li>
                                        <li><a class="dropdown-item" href="" data-value="daily">Per Hari</a>
                                        </li>
                                        <li><a class="dropdown-item" href="" data-value="monthly">Per
                                                Bulan</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Packet loss</h5>
                                    <!-- Line Chart -->
                                    <div id="reportsChart"></div>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            // Data untuk per jam, per hari, dan per bulan
                                            const jsonData = {
                                                hourly: [
                                                    { time: "00:00", Totaldataterkirim: 80, slave1: 20, slave2: 30, slave3: 25 },
                                                    { time: "01:00", Totaldataterkirim: 80, slave1: 22, slave2: 32, slave3: 28 },
                                                    { time: "02:00", Totaldataterkirim: 80, slave1: 25, slave2: 35, slave3: 30 },
                                                    { time: "03:00", Totaldataterkirim: 80, slave1: 25, slave2: 35, slave3: 30 },
                                                    { time: "04:00", Totaldataterkirim: 80, slave1: 25, slave2: 35, slave3: 30 },
                                                    { time: "05:00", Totaldataterkirim: 80, slave1: 25, slave2: 35, slave3: 30 },
                                                    // Tambah data hingga 24 jam
                                                ],
                                                daily: [
                                                    { time: "Day 1", Totaldataterkirim: 100, slave1: 70, slave2: 65, slave3: 60 },
                                                    { time: "Day 2", Totaldataterkirim: 100, slave1: 75, slave2: 70, slave3: 65 },
                                                    { time: "Day 3", Totaldataterkirim: 100, slave1: 68, slave2: 62, slave3: 58 },
                                                    // Tambah data hingga 30 hari
                                                ],
                                                monthly: [
                                                    { time: "January", Totaldataterkirim: 150, slave1: 74, slave2: 67, slave3: 82 },
                                                    { time: "February", Totaldataterkirim: 150, slave1: 70, slave2: 66, slave3: 79 },
                                                    { time: "March", Totaldataterkirim: 150, slave1: 68, slave2: 65, slave3: 75 },
                                                    // Tambah data hingga 12 bulan
                                                ]
                                            };
                                
                                            // Fungsi untuk mengambil data berdasarkan rentang waktu
                                            const getDataByRange = (range) => {
                                                const data = jsonData[range];
                                                const categories = data.map(entry => entry.time);
                                                const byteData = data.map(entry => entry.Totaldataterkirim);
                                                const slave1Data = data.map(entry => entry.slave1);
                                                const slave2Data = data.map(entry => entry.slave2);
                                                const slave3Data = data.map(entry => entry.slave3);
                                                const TotalDataTerkirim = data.map(entry => entry.Totaldataterkirim + entry.slave1 + entry.slave2 + entry.slave3); // Total Data sent (not in bytes)
                                
                                                return {
                                                    categories,
                                                    byteData,
                                                    slave1Data,
                                                    slave2Data,
                                                    slave3Data,
                                                    TotalDataTerkirim
                                                };
                                            };
                                
                                            // Inisialisasi Chart
                                            let chart = new ApexCharts(document.querySelector("#reportsChart"), {
                                                series: [
                                                    { name: "Total Data Terkirim", data: [], type: 'line' }, // Total Data series
                                                    { name: "Master", data: [] },
                                                    { name: "Slave 1", data: [] },
                                                    { name: "Slave 2", data: [] },
                                                    { name: "Slave 3", data: [] }
                                                ],
                                                chart: {
                                                    height: 350,
                                                    type: 'line',
                                                    toolbar: { show: false }
                                                },
                                                markers: { size: 4 },
                                                colors: ['#FF1493', '#1E90FF', '#32CD32', '#FF8C00', '#8A2BE2'],
                                                stroke: { curve: 'smooth', width: 2 },
                                                xaxis: { categories: [] },
                                                yaxis: { title: { text: 'Total Data Terkirim' } },
                                                tooltip: {
                                                    shared: true,
                                                    intersect: false,
                                                    y: {
                                                        formatter: function(value, { series, seriesIndex, dataPointIndex, w }) {
                                                            if (seriesIndex === 0) {
                                                                return "Total Data Terkirim: " + value; // Menampilkan total data terkirim
                                                            } else {
                                                                // Menampilkan nilai data per slave
                                                                return + (seriesIndex) + ": " + value;
                                                            }
                                                        }
                                                    }
                                                }
                                            });
                                
                                            chart.render();
                                
                                            // Fungsi untuk memperbarui chart berdasarkan rentang waktu
                                            const updateChart = (range) => {
                                                const {
                                                    categories,
                                                    byteData,
                                                    slave1Data,
                                                    slave2Data,
                                                    slave3Data,
                                                    TotalDataTerkirim
                                                } = getDataByRange(range);
                                                chart.updateOptions({
                                                    xaxis: { categories },
                                                    series: [
                                                        { name: "Total Data Terkirim", data: TotalDataTerkirim, type: 'line' }, // Total Data series
                                                        { name: "Master", data: byteData },
                                                        { name: "Slave 1", data: slave1Data },
                                                        { name: "Slave 2", data: slave2Data },
                                                        { name: "Slave 3", data: slave3Data }
                                                    ]
                                                });
                                            };
                                
                                            // Event Listener untuk Dropdown Rentang Waktu
                                            document.querySelectorAll('.dropdown-item').forEach(item => {
                                                item.addEventListener('click', (e) => {
                                                    const range = e.target.getAttribute('data-value');
                                                    updateChart(range);
                                                });
                                            });
                                
                                            // Muat Data Default (Per Jam)
                                            updateChart('hourly');
                                        });
                                    </script>
                                    <!-- End Line Chart -->
                                </div>
                                
                                
                                
                            </div>

                        </div><!-- End Reports -->
                        <!-- End Reports -->


                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Data Kelembaban Sensor <span id="slave-title">

                                            <table class="table datatable">
                                                <thead>
                                                    <tr>
                                                        <th><b>N</b>O</th>
                                                        <th>Nama sensor</th>
                                                        <th>Kelembaban</th>
                                                        <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Default data for Slave 1 -->
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Sensor 1</td>
                                                        <td>60%</td>
                                                        <td>2005/02/11</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Sensor 2</td>
                                                        <td>60%</td>
                                                        <td>2005/02/11</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Sensor 3</td>
                                                        <td>60%</td>
                                                        <td>2005/02/11</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Sensor 4</td>
                                                        <td>60%</td>
                                                        <td>2005/02/11</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Sensor 5</td>
                                                        <td>60%</td>
                                                        <td>2005/02/11</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Sensor 6</td>
                                                        <td>60%</td>
                                                        <td>2005/02/11</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Sensor 7</td>
                                                        <td>60%</td>
                                                        <td>2005/02/11</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Sensor 8</td>
                                                        <td>60%</td>
                                                        <td>2005/02/11</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Sensor 9</td>
                                                        <td>60%</td>
                                                        <td>2005/02/11</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>Sensor 10</td>
                                                        <td>60%</td>
                                                        <td>2005/02/11</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>Sensor 11</td>
                                                        <td>60%</td>
                                                        <td>2005/02/11</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>Sensor 12</td>
                                                        <td>60%</td>
                                                        <td>2005/02/11</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body pb-4">
                            <h5 class="card-title">Node Status <span></h5>
                            <div class="node-status">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Master Node
                                        <span class="badge bg-success">Online</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Slave 1
                                        <span class="badge bg-success">Online</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Slave 2
                                        <span class="badge bg-danger">Offline</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Slave 3
                                        <span class="badge bg-success">Online</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <style>
                        .node-status {
                            background-color: #f9f9f9;
                            /* Warna latar belakang yang lembut */
                            border-radius: 0.5rem;
                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                        }

                        .list-group-item {
                            border: none;
                            padding: 12px 20px;
                            font-size: 16px;
                        }

                        .list-group-item:hover {
                            background-color: #e9ecef;
                            /* Warna latar belakang saat hover */
                        }

                        .badge {
                            font-size: 0.8rem;
                        }
                    </style>

                    <script>
                        const nodeStatus = {
                            master: true,
                            slave1: true,
                            slave2: false,
                            slave3: true
                        };

                        document.addEventListener("DOMContentLoaded", () => {
                            const statuses = {
                                master: document.querySelector(".list-group-item:nth-child(1) .badge"),
                                slave1: document.querySelector(".list-group-item:nth-child(2) .badge"),
                                slave2: document.querySelector(".list-group-item:nth-child(3) .badge"),
                                slave3: document.querySelector(".list-group-item:nth-child(4) .badge")
                            };

                            for (const node in nodeStatus) {
                                if (nodeStatus[node]) {
                                    statuses[node].innerText = "Online";
                                    statuses[node].classList.remove("bg-danger");
                                    statuses[node].classList.add("bg-success");
                                } else {
                                    statuses[node].innerText = "Offline";
                                    statuses[node].classList.remove("bg-success");
                                    statuses[node].classList.add("bg-danger");
                                }
                            }
                        });
                    </script>

                    <div class="card">
                        <div class="card-body pb-0">
                            <h5 class="card-title">paket data</h5>
                            <!-- Mengurangi tinggi minimum dan mengubah radius -->
                            <div id="trafficChart" style="min-height: 300px; margin: 20px 0;" class="echart"></div>
                            <!-- Menambahkan margin -->

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    echarts.init(document.querySelector("#trafficChart")).setOption({
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        legend: {
                                            top: '-1%',
                                            left: 'center'
                                        },
                                        series: [{
                                            name: 'Paket data',
                                            type: 'pie',
                                            radius: ['70%', '45%'], // Mengubah radius untuk memberikan lebih banyak jarak
                                            avoidLabelOverlap: false,
                                            label: {
                                                show: false, // Menyembunyikan label di luar lingkaran
                                                position: 'outside'
                                            },
                                            emphasis: {
                                                label: {
                                                    show: false // Menyembunyikan label saat pie dihover
                                                }
                                            },
                                            labelLine: {
                                                show: false // Menyembunyikan garis label di luar lingkaran
                                            },
                                            data: [{
                                                    value: 80,
                                                    name: 'Master: 80 B'
                                                },
                                                {
                                                    value: 70,
                                                    name: 'Slave 1: 70 B'
                                                },
                                                {
                                                    value: 60,
                                                    name: 'Slave 2: 60 B'
                                                },
                                                {
                                                    value: 60,
                                                    name: 'Slave 3: 60 B'
                                                }
                                            ]
                                        }]
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <!-- End Soil Moisture Levels -->

                </div><!-- End Right side columns -->

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
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-php-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <script>
        // Menghentikan link agar tidak membawa halaman kembali ke atas
        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault(); // Mencegah tindakan default
                const range = this.getAttribute('data-value');
                console.log("Filter dipilih:", range);
                // Tambahkan logika untuk memperbarui chart atau melakukan aksi lain
            });
        });
    </script>

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
