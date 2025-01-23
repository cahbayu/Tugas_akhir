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
                                <div class="card-body" style="min-height: 208px;"">
                                    <h5 class="card-title">Kelembaban</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-moisture"></i>
                                        </div>
                                        <div class="ps-3" id="humidity-data">
                                            @foreach ($nodeHumidityData as $nodeType => $humidity)
                                                @if ($nodeType == 'master')
                                                    @continue
                                                @endif
                                                <h6 id="slave-{{ $nodeType }}-humidity">Node {{ $nodeType }}:
                                                    {{ $humidity ?? 'N/A' }}%</h6>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- Garis pemisah -->
                                    <hr>
                                    <div class="mt-3">
                                        <h6 id="total-revenue">Rata-rata Kelembaban: {{ $totalAverageHumidity }}%
                                        </h6>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body" >
                                    <h5 class="card-title">Log</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-card-checklist"></i>
                                        </div>

                                        <div class="ps-3" id="revenue-data">
                                            <!-- Data revenue akan ditampilkan di sini -->
                                            @foreach ($nodes as $node)
                                                <h6 id="master-revenue">{{ $node->node_type }} :
                                                    {{ $node->logs->where('received_data', '!=', 0)->count() }}</h6>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Garis pemisah -->
                                    <hr>

                                    <!-- Bagian total data -->
                                    <div class="mt-3">
                                        <h6 id="total-revenue">Total: {{ $logTotal }}</h6>
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
                                            @foreach ($packetLossData as $nodeType => $packetLoss)
                                                <h6 id="{{ strtolower($nodeType) }}-packetloss">
                                                    {{ $nodeType }}: {{ $packetLoss }}
                                                </h6>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Garis pemisah -->
                                    <hr>

                                    <!-- Bagian total packet loss -->
                                    <div class="mt-3">
                                        <h6 id="total-packetloss">
                                            Total Packetloss: {{ $totalPacketLoss }}%
                                        </h6>
                                    </div>
                                </div>



                            </div>
                        </div>

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Data Yang Diterima</h5>
                                    
                                    <div class="filter mb-3">
                                        <a class="icon" href="#" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>
                                            <li><a class="dropdown-item" href="#" data-value="hourly">Per Jam</a></li>
                                            <li><a class="dropdown-item" href="#" data-value="daily">Per Hari</a></li>
                                            <li><a class="dropdown-item" href="#" data-value="monthly">Per Bulan</a></li>
                                        </ul>
                                    </div>
                         
                                    <div id="areaChart"></div>
                         
                                    <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        const chart = new ApexCharts(document.querySelector("#areaChart"), {
                                            series: [
                                                { name: 'Total Data', data: [] },
                                                { name: 'Master', data: [] },
                                                { name: 'Slave 1', data: [] },
                                                { name: 'Slave 2', data: [] },
                                                { name: 'Slave 3', data: [] }
                                            ],
                                            chart: {
                                                height: 350,
                                                type: 'line',
                                                zoom: { enabled: true },
                                                toolbar: { show: false },
                                                animations: { enabled: true, easing: 'linear' }
                                            },
                                            markers: { size: 4 },
                                            colors: ['#800080','#FF1493', '#1E90FF', '#32CD32', '#FF8C00'],
                                            stroke: { curve: 'smooth', width: 2 },
                                            xaxis: { categories: [] },
                                            yaxis: {
                                                title: { text: 'Jumlah Data Diterima' },
                                                min: 0,
                                                forceNiceScale: true,
                                                decimalsInFloat: 0,
                                                labels: { formatter: (val) => Math.max(0, Math.floor(val)) }
                                            },
                                            tooltip: {
                                                shared: true,
                                                intersect: false,
                                                y: {
                                                    formatter: (value) => `${Math.floor(value)} data`
                                                }
                                            },
                                            grid: {
                                                row: { colors: ['transparent', 'transparent'], opacity: 0.5 }
                                            }
                                        });
                         
                                        chart.render();
                         
                                        function updateChart(range = 'hourly') {
                                            fetch(`/api/soil-moisture-data?range=${range}`)
                                                .then(response => response.json())
                                                .then(({nodes}) => {
                                                    if(!nodes || nodes.length === 0) return;
                                                    
                                                    const timestamps = nodes[0].data[0].timestamps;
                                                    let totalByTimestamp = new Array(timestamps.length).fill(0);
                         
                                                    nodes.forEach(node => {
                                                        node.data[0].data_count.forEach((count, i) => {
                                                            totalByTimestamp[i] += count;
                                                        });
                                                    });
                         
                                                    const series = [{
                                                        name: 'Total Data',
                                                        data: totalByTimestamp
                                                    }];
                         
                                                    nodes.forEach(node => {
                                                        series.push({
                                                            name: node.node_type === 'master' ? 'Master' : 
                                                                  node.node_type === 'slave1' ? 'Slave 1' : 
                                                                  node.node_type === 'slave2' ? 'Slave 2' : 'Slave 3',
                                                            data: node.data[0].data_count
                                                        });
                                                    });
                         
                                                    chart.updateOptions({
                                                        xaxis: { categories: timestamps },
                                                        series: series
                                                    });
                                                })
                                                .catch(error => console.error('Error:', error));
                                        }
                         
                                        // Initial load
                                        updateChart();
                                        
                                        // Auto update every 5 seconds
                                        setInterval(() => updateChart(), 5000);
                         
                                        // Filter handler
                                        document.querySelectorAll('.dropdown-item').forEach(item => {
                                            item.addEventListener('click', (e) => {
                                                e.preventDefault();
                                                const range = e.target.getAttribute('data-value');
                                                updateChart(range);
                                            });
                                        });
                                    });
                                    </script>
                                </div>
                            </div>
                         </div><!-- End Reports -->
                        <!-- End Reports -->

                        <!-- Recent Sales -->
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
                                                    <td colspan="4" class="text-center">Tidak ada data sensor
                                                        terbaru.</td>
                                                </tr>
                                            @endforelse
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
                                <ul id="nodeStatusList" class="list-group">
                                    <!-- Data akan diupdate secara otomatis -->
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
                        async function fetchNodeStatus() {
                            try {
                                const response = await fetch('/node-status');
                                const data = await response.json();

                                const list = document.getElementById('nodeStatusList');
                                list.innerHTML = ''; // Kosongkan list sebelum mengisi ulang

                                data.forEach(node => {
                                    const listItem = document.createElement('li');
                                    listItem.className = 'list-group-item d-flex justify-content-between align-items-center';
                                    listItem.innerHTML = `
                                        ${node.node_type}
                                        <span class="badge ${node.online === 'Ya' ? 'bg-success' : 'bg-danger'}">
                                            ${node.online === 'Ya' ? 'Online' : 'Offline'}
                                        </span>
                                    `;
                                    list.appendChild(listItem);
                                });
                            } catch (error) {
                                console.error('Error fetching node status:', error);
                            }
                        }

                        // Refresh data setiap 5 detik
                        setInterval(fetchNodeStatus, 5000);

                        // Panggil pertama kali saat halaman dimuat
                        fetchNodeStatus();
                    </script>

                    <div class="card">
                        <div class="card-body pb-0">
                            <h5 class="card-title">Paket Data</h5>
                            <div id="trafficChart" style="min-height: 300px; margin: 20px 0;" class="echart"></div>
                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    const packetData = @json($packetData);

                                    // Format data untuk ECharts
                                    const chartData = packetData.map(item => ({
                                        value: item.total_payload_size,
                                        name: `${item.node_name}: ${item.total_payload_size} B`
                                    }));

                                    echarts.init(document.querySelector("#trafficChart")).setOption({
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        legend: {
                                            top: '-1%',
                                            left: 'center'
                                        },
                                        series: [{
                                            name: 'Paket Data',
                                            type: 'pie',
                                            radius: ['70%', '45%'],
                                            avoidLabelOverlap: false,
                                            label: {
                                                show: false,
                                                position: 'outside'
                                            },
                                            emphasis: {
                                                label: {
                                                    show: false
                                                }
                                            },
                                            labelLine: {
                                                show: false
                                            },
                                            data: chartData
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
        document.querySelectorAll('.chart-filter').forEach(item => {
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
