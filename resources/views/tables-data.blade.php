<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Records / Data - NiceAdmin Bootstrap Template</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
                        <a href="tables-data" class="active">
                            <i class="bi bi-circle"></i><span>Data Log</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Records Nav -->

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
            <h1>LOG</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item">Records</li>
                    <li class="breadcrumb-item active">LOG</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>
                                <li><a class="dropdown-item" href="#" onclick="showData('master')">Master</a>
                                </li>
                                <li><a class="dropdown-item" href="#" onclick="showData('slave1')">Slave 1</a>
                                </li>
                                <li><a class="dropdown-item" href="#" onclick="showData('slave2')">Slave 2</a>
                                </li>
                                <li><a class="dropdown-item" href="#" onclick="showData('slave3')">Slave 3</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Paket Data <span id="data-title">| Master</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-activity"></i>
                                </div>
                                <div class="ps-1" id="humidity-data">
                                    @forelse ($nodeData as $node)
                                        <h6 id="{{ strtolower($node['name']) }}-humidity">
                                            {{ ucfirst($node['name']) }}: {{ $node['payload_size'] }} B
                                        </h6>
                                    @empty
                                        <h6>Tidak ada data yang tersedia</h6>
                                    @endforelse
                                </div>
                            </div>

                            <!-- Garis pemisah -->
                            <hr>

                            <!-- Bagian total kelembaban -->
                            <div class="mt-3">
                                <h6 id="total-humidity">Total Byte: {{ $totalPayload }} B (Rata-Rata:
                                    {{ $averagePayload }} B)</h6>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="showDataRevenue('master')">Master</a></li>
                                <li><a class="dropdown-item" href="#" onclick="showDataRevenue('slave1')">Slave
                                        1</a></li>
                                <li><a class="dropdown-item" href="#" onclick="showDataRevenue('slave2')">Slave
                                        2</a></li>
                                <li><a class="dropdown-item" href="#" onclick="showDataRevenue('slave3')">Slave
                                        3</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Log <span id="revenue-title">| Master</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-card-checklist"></i>
                                </div>
                                <div class="ps-3" id="revenue-data">
                                    @forelse ($nodeData as $node)
                                        <h6 id="{{ strtolower($node['name']) }}-revenue">
                                            {{ ucfirst($node['name']) }}: {{ $node['log_count'] }}
                                        </h6>
                                    @empty
                                        <h6>Tidak ada log yang tersedia</h6>
                                    @endforelse
                                </div>
                            </div>

                            <!-- Garis pemisah -->
                            <hr>

                            <!-- Bagian total log -->
                            <div class="mt-3">
                                <h6 id="total-revenue">Total: {{ $totalLogs }}</h6>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12">
                    <div class="card info-card customers-card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>
                                <li><a class="dropdown-item" href="#"
                                        onclick="showPacketLoss('master')">Master</a></li>
                                <li><a class="dropdown-item" href="#" onclick="showPacketLoss('slave1')">Slave
                                        1</a></li>
                                <li><a class="dropdown-item" href="#" onclick="showPacketLoss('slave2')">Slave
                                        2</a></li>
                                <li><a class="dropdown-item" href="#" onclick="showPacketLoss('slave3')">Slave
                                        3</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Packetloss <span id="data-title">| Master</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-graph-down-arrow"></i>
                                </div>

                                <div class="ps-3" id="packetloss-data">
                                    @forelse ($nodeData as $node)
                                        <h6 id="{{ strtolower($node['name']) }}-packetloss">
                                            {{ ucfirst($node['name']) }}: {{ $node['packet_loss'] }}%
                                            ({{ $node['received_data'] }})
                                        </h6>
                                    @empty
                                        <h6>Tidak ada data packet loss tersedia</h6>
                                    @endforelse
                                </div>
                            </div>

                            <!-- Garis pemisah -->
                            <hr>

                            <!-- Bagian total packet loss -->
                            <div class="mt-3">
                                <h6 id="total-packetloss">
                                    Total Packetloss: {{ round($totalPacketLoss, 2) }}% ({{ $totalReceivedData }})
                                </h6>
                            </div>
                        </div>



                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-0">Data</h5>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <button onclick="exportTableToCSV('logs_data.csv')" class="btn btn-sm btn-outline-primary ms-auto me-3">
                                    <i class="bi bi-download"></i> Download
                                </button>
                            </div>        
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No</th>
                                        <th style="text-align: center;">Node</th>
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
                                                // Pastikan expected_data bukan nol untuk menghindari division by zero
                                                if ($log->expected_data > 0) {
                                                    $packetLoss = $log->expected_data - $log->received_data;
                                                    $packetLossPercentage = ($packetLoss / $log->expected_data) * 100;
                                                    $packetLossPercentage = round($packetLossPercentage, 2);
                                                } else {
                                                    $packetLossPercentage = '0'; // Jika expected_data nol, anggap tidak ada packet loss
                                                }

                                            @endphp
                                            <td>{{ $packetLossPercentage }}% </td>
                                            <td data-type="date" data-format="YYYY/DD/MM">{{ $log->created_at }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>
                    <script>
                        function exportTableToCSV(filename) {
                            // Ambil data dari database
                            var rows = [
                                ['No', 'Node', 'Ukuran Paket Data', 'Packetloss', 'Start Date'], // Header
                            ];

                            // Ambil semua baris data
                            document.querySelectorAll("table tbody tr").forEach((tr, index) => {
                                rows.push([
                                    index + 1,
                                    tr.children[1].innerText, // Node
                                    tr.children[2].innerText, // Ukuran Paket
                                    tr.children[3].innerText.replace('%', ''), // Packetloss (hapus %)
                                    tr.children[4].innerText // Date
                                ]);
                            });

                            // Format CSV
                            let csvContent = rows.map(row => row.join(',')).join('\n');
                            
                            // Download
                            var blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
                            var link = document.createElement("a");
                            if (link.download !== undefined) {
                                var url = URL.createObjectURL(blob);
                                link.setAttribute("href", url);
                                link.setAttribute("download", filename);
                                document.body.appendChild(link);
                                link.click();
                                document.body.removeChild(link);
                            }
                        }
                        </script>
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
