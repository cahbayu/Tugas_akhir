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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
        <span class="d-none d-lg-block">NiceAdmin</span>
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

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
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
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
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
              
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#" onclick="showData('master')">Master</a></li>
                    <li><a class="dropdown-item" href="#" onclick="showData('slave1')">Slave 1</a></li>
                    <li><a class="dropdown-item" href="#" onclick="showData('slave2')">Slave 2</a></li>
                    <li><a class="dropdown-item" href="#" onclick="showData('slave3')">Slave 3</a></li>
                  </ul>
                </div>
              
                <div class="card-body">
                  <h5 class="card-title">Paket Data <span id="data-title">| Master</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-activity"></i>
                    </div>
                    <div class="ps-1" id="humidity-data">
                      <!-- Data kelembaban akan ditampilkan di sini -->
                      <h6 id="master-humidity">Master : 6000 B</h6>
                      <h6 id="slave1-humidity">Slave 1: 1000 B</h6>
                      <h6 id="slave2-humidity">Slave 2: 2000 B</h6>
                      <h6 id="slave3-humidity">Slave 3: 3000 B</h6>
                    </div>
                  </div>
              
                  <!-- Garis pemisah -->
                  <hr>
              
                  <!-- Bagian total kelembaban -->
                  <div class="mt-3">
                    <h6 id="total-humidity">Total Byte: 6000 B (Rata-Rata)</h6>
                  </div>
                </div>
              
              </div>
            </div>   
            
            <script>
              function showData(selection) {
                let title = document.getElementById("data-title");
                let masterHumidity = document.getElementById("master-humidity");
                let slave1Humidity = document.getElementById("slave1-humidity");
                let slave2Humidity = document.getElementById("slave2-humidity");
                let slave3Humidity = document.getElementById("slave3-humidity");
                let total = document.getElementById("total-humidity");
              
                // Reset visibility of all humidity data
                slave1Humidity.style.display = 'block';
                slave2Humidity.style.display = 'block';
                slave3Humidity.style.display = 'block';
                masterHumidity.style.display = 'block';
              
                if (selection === 'master') {
                  title.innerHTML = '| Master';
                  masterHumidity.innerHTML = `Master: 6000 B`;
                  slave1Humidity.innerHTML = `Slave 1: 1000 B`;
                  slave2Humidity.innerHTML = `Slave 2: 2000 B`;
                  slave3Humidity.innerHTML = `Slave 3: 3000 B`;
                  total.innerHTML = 'Total Byte: 6000 B (Rata-Rata)';
                } else if (selection === 'slave1') {
                  title.innerHTML = '| Slave 1';
                  masterHumidity.style.display = 'none'; // Hide master data
                  slave1Humidity.innerHTML = `Slave 1: 1000 B`;
                  slave2Humidity.innerHTML = `Slave 2: 2000 B`;
                  slave3Humidity.innerHTML = `Slave 3: 3000 B`;
                  total.innerHTML = 'Total Byte: 6000 B (Rata-Rata)';
                } else if (selection === 'slave2') {
                  title.innerHTML = '| Slave 2';
                  masterHumidity.style.display = 'none'; // Hide master data
                  slave1Humidity.style.display = 'none'; // Hide Slave 1
                  slave2Humidity.innerHTML = `Slave 2: 2000 B`;
                  slave3Humidity.innerHTML = `Slave 3: 3000`;
                  total.innerHTML = 'Total Byte: 6000 B (Rata-Rata)';
                } else if (selection === 'slave3') {
                  title.innerHTML = '| Slave 3';
                  masterHumidity.style.display = 'none'; // Hide master data
                  slave1Humidity.style.display = 'none'; // Hide Slave 1
                  slave2Humidity.style.display = 'none'; // Hide Slave 2
                  slave3Humidity.innerHTML = `Slave 3: 3000 B`;
                  total.innerHTML = 'Total Byte: 6000 B (Rata-Rata)';
                }
              }
            </script>
            
          
           <!-- Revenue Card -->
           <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
          
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
                  <li><a class="dropdown-item" href="#" onclick="showDataRevenue('master')">Master</a></li>
                  <li><a class="dropdown-item" href="#" onclick="showDataRevenue('slave1')">Slave 1</a></li>
                  <li><a class="dropdown-item" href="#" onclick="showDataRevenue('slave2')">Slave 2</a></li>
                  <li><a class="dropdown-item" href="#" onclick="showDataRevenue('slave3')">Slave 3</a></li>
                </ul>
              </div>
          
              <div class="card-body">
                <h5 class="card-title">Log <span id="revenue-title">| Master</span></h5>
          
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
          
          <script>
            function showDataRevenue(selection) {
              let title = document.getElementById("revenue-title");
              let masterRevenue = document.getElementById("master-revenue");
              let slave1Revenue = document.getElementById("slave1-revenue");
              let slave2Revenue = document.getElementById("slave2-revenue");
              let slave3Revenue = document.getElementById("slave3-revenue");
              let total = document.getElementById("total-revenue");
          
              // Hide all data initially
              masterRevenue.style.display = 'none';
              slave1Revenue.style.display = 'none';
              slave2Revenue.style.display = 'none';
              slave3Revenue.style.display = 'none';
          
              if (selection === 'master') {
                title.innerHTML = '| Master';
                masterRevenue.style.display = 'block';  // Show Master
                slave1Revenue.style.display = 'block';  // Show Slave 1
                slave2Revenue.style.display = 'block';  // Show Slave 2
                slave3Revenue.style.display = 'block';  // Show Slave 3
                total.innerHTML = 'Total: 3660'; // Adjust total for Master (sum of all Slaves)
              } else if (selection === 'slave1') {
                title.innerHTML = '| Slave 1';
                slave1Revenue.style.display = 'block';  // Show Slave 1
                slave2Revenue.style.display = 'block';  // Show Slave 2
                slave3Revenue.style.display = 'block';  // Show Slave 3
                total.innerHTML = 'Total: 3660'; // Adjust total for Slave 1 (sum of all)
              } else if (selection === 'slave2') {
                title.innerHTML = '| Slave 2';
                slave2Revenue.style.display = 'block';  // Show Slave 2
                slave3Revenue.style.display = 'block';  // Show Slave 3
                total.innerHTML = 'Total: 2440'; // Adjust total for Slave 2 (sum of Slave 2 and Slave 3)
              } else if (selection === 'slave3') {
                title.innerHTML = '| Slave 3';
                slave3Revenue.style.display = 'block';  // Show Slave 3
                total.innerHTML = 'Total: 1220'; // Adjust total for Slave 3 (only Slave 3)
              }
            }
          </script>

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#" onclick="showPacketLoss('master')">Master</a></li>
                    <li><a class="dropdown-item" href="#" onclick="showPacketLoss('slave1')">Slave 1</a></li>
                    <li><a class="dropdown-item" href="#" onclick="showPacketLoss('slave2')">Slave 2</a></li>
                    <li><a class="dropdown-item" href="#" onclick="showPacketLoss('slave3')">Slave 3</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Packetloss <span id="packetloss-title">| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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

            <script>
              function showPacketLoss(selection) {
                let title = document.getElementById("packetloss-title");
                let masterPacketloss = document.getElementById("master-packetloss");
                let slave1Packetloss = document.getElementById("slave1-packetloss");
                let slave2Packetloss = document.getElementById("slave2-packetloss");
                let slave3Packetloss = document.getElementById("slave3-packetloss");
                let total = document.getElementById("total-packetloss");

                // Hide all data initially
                masterPacketloss.style.display = 'none';
                slave1Packetloss.style.display = 'none';
                slave2Packetloss.style.display = 'none';
                slave3Packetloss.style.display = 'none';

                if (selection === 'master') {
                  title.innerHTML = '| Master';
                  masterPacketloss.style.display = 'block';  // Show Master
                  slave1Packetloss.style.display = 'block';  // Show Slave 1
                  slave2Packetloss.style.display = 'block';  // Show Slave 2
                  slave3Packetloss.style.display = 'block';  // Show Slave 3
                  total.innerHTML = 'Total Packetloss: 0,75% (156)'; // Adjust total for Master
                } else if (selection === 'slave1') {
                  title.innerHTML = '| Slave 1';
                  slave1Packetloss.style.display = 'block';  // Show Slave 1
                  slave2Packetloss.style.display = 'block';  // Show Slave 2
                  slave3Packetloss.style.display = 'block';  // Show Slave 3
                  total.innerHTML = 'Total Packetloss: 0,75% (156)'; // Adjust total for Slave 1
                } else if (selection === 'slave2') {
                  title.innerHTML = '| Slave 2';
                  slave2Packetloss.style.display = 'block';  // Show Slave 2
                  slave3Packetloss.style.display = 'block';  // Show Slave 3
                  total.innerHTML = 'Total Packetloss: 0,50% (104)'; // Adjust total for Slave 2
                } else if (selection === 'slave3') {
                  title.innerHTML = '| Slave 3';
                  slave3Packetloss.style.display = 'block';  // Show Slave 3
                  total.innerHTML = 'Total Packetloss: 0,25% (52)'; // Adjust total for Slave 3
                }
              }
            </script>
            <!-- Reports -->
            <div class="col-12">
              <div class="card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="" data-value="hourly">Per Jam</a></li>
                    <li><a class="dropdown-item" href="" data-value="daily">Per Hari</a></li>
                    <li><a class="dropdown-item" href="" data-value="monthly">Per Bulan</a></li>
                  </ul>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>
                  <!-- Line Chart -->
                  <div id="reportsChart"></div>
                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      // Data untuk per jam, per hari, dan per bulan
                      const jsonData = {
                        hourly: [
                          { time: "00:00", bytes: 80, slave1: 20, slave2: 30, slave3: 25 },
                          { time: "01:00", bytes: 80, slave1: 22, slave2: 32, slave3: 28 },
                          { time: "02:00", bytes: 80, slave1: 25, slave2: 35, slave3: 30 },
                          // Tambah data hingga 24 jam
                        ],
                        daily: [
                          { time: "Day 1", bytes: 100, slave1: 70, slave2: 65, slave3: 60 },
                          { time: "Day 2", bytes: 100, slave1: 75, slave2: 70, slave3: 65 },
                          { time: "Day 3", bytes: 100, slave1: 68, slave2: 62, slave3: 58 },
                          // Tambah data hingga 30 hari
                        ],
                        monthly: [
                          { time: "January", bytes: 150, slave1: 74, slave2: 67, slave3: 82 },
                          { time: "February", bytes: 150, slave1: 70, slave2: 66, slave3: 79 },
                          { time: "March", bytes: 150, slave1: 68, slave2: 65, slave3: 75 },
                          // Tambah data hingga 12 bulan
                        ]
                      };
              
                      // Fungsi untuk mengambil data berdasarkan rentang waktu
                      const getDataByRange = (range) => {
                        const data = jsonData[range];
                        const categories = data.map(entry => entry.time);
                        const byteData = data.map(entry => entry.bytes);
                        const slave1Data = data.map(entry => entry.slave1);
                        const slave2Data = data.map(entry => entry.slave2);
                        const slave3Data = data.map(entry => entry.slave3);
                        const totalBytesData = data.map(entry => entry.bytes + entry.slave1 + entry.slave2 + entry.slave3); // Total Bytes Data
              
                        return { categories, byteData, slave1Data, slave2Data, slave3Data, totalBytesData };
                      };
              
                      // Inisialisasi Chart
                      let chart = new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [
                          { name: "Total Bytes", data: [], type: 'line' }, // Total Bytes series
                          { name: "Master", data: [] },
                          { name: "Slave 1", data: [] },
                          { name: "Slave 2", data: [] },
                          { name: "Slave 3", data: [] }
                        ],
                        chart: {
                          height: 350,
                          type: 'line',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#FF1493', '#1E90FF', '#32CD32', '#FF8C00', '#8A2BE2'],
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          categories: [],
                        },
                        yaxis: {
                          title: {
                            text: 'Bytes Data'
                          }
                        },
                        tooltip: {
                      shared: true,
                      intersect: false,
                      y: {
                          formatter: function (value, { series, seriesIndex, dataPointIndex, w }) {
                              if (seriesIndex === 0) {
                                  return "Byte Data: " + value + " B";  // Menampilkan byte data untuk Bytes Data
                              } else {
                                  // Mendapatkan nilai kelembaban
                                  const moisture = w.config.series[seriesIndex].data[dataPointIndex];
                                  
                                  // Menampilkan byte dan persentase kelembaban
                                  return "Sensor " + seriesIndex + ": " + value + " B, " + moisture + "%";
                              }
                          }
                      }
                  }
                      });
              
                      chart.render();
              
                      // Fungsi untuk memperbarui chart berdasarkan rentang waktu
                      const updateChart = (range) => {
                        const { categories, byteData, slave1Data, slave2Data, slave3Data, totalBytesData } = getDataByRange(range);
                        chart.updateOptions({
                          xaxis: { categories },
                          series: [
                            { name: "Total Bytes", data: totalBytesData, type: 'line' }, // Total Bytes series
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
          <div class="card-body pb-0">
            <h5 class="card-title">Soil Moisture Levels <span>| Today</span></h5>
            <!-- Mengurangi tinggi minimum dan mengubah radius -->
            <div id="trafficChart" style="min-height: 300px;" class="echart"></div>
        
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChart")).setOption({
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    top: '5%',
                    left: 'center'
                  },
                  series: [{
                    name: 'Soil Moisture Levels',
                    type: 'pie',
                    radius: ['70%', '40%'],  // Mengubah radius agar lebih kecil
                    avoidLabelOverlap: false,
                    label: {
                      show: false,  // Menyembunyikan label di luar lingkaran
                      position: 'outside'
                    },
                    emphasis: {
                      label: {
                        show: false  // Menyembunyikan label saat pie dihover
                      }
                    },
                    labelLine: {
                      show: false  // Menyembunyikan garis label di luar lingkaran
                    },
                    data: [{
                        value: 80,
                        name: 'Slave 1: 80%'
                      },
                      {
                        value: 70,
                        name: 'Slave 2: 70%'
                      },
                      {
                        value: 60,
                        name: 'Slave 3: 60%'
                      }
                    ]
                  }]
                });
              });

            </script>
          </div>
        </div><!-- End Soil Moisture Levels -->
        
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Packet Loss</h5>
      
            <!-- Dropdown untuk memilih rentang waktu -->
            <select id="timeRangePacketLoss" class="form-select mb-3">
              <option value="hourly">Per Jam</option>
              <option value="daily">Per Hari</option>
              <option value="monthly">Per Bulan</option>
            </select>
      
            <!-- Area Chart -->
            <div id="areaChart" style="min-height: 300px;"></div>
      
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                const jsonData = {
                  hourly: Array.from({ length: 24 }, (_, i) => ({
                    time: `${i}:00`,
                    sent: Math.floor(Math.random() * 100 + 900),
                    lost: Math.floor(Math.random() * 10 + 5)
                  })),
                  daily: Array.from({ length: 30 }, (_, i) => ({
                    time: `Day ${i + 1}`,
                    sent: Math.floor(Math.random() * 3000 + 27000),
                    lost: Math.floor(Math.random() * 50 + 100)
                  })),
                  monthly: Array.from({ length: 12 }, (_, i) => ({
                    time: `Month ${i + 1}`,
                    sent: Math.floor(Math.random() * 100000 + 800000),
                    lost: Math.floor(Math.random() * 500 + 3000)
                  }))
                };
      
                const getDataByRange = (range) => {
                  const data = jsonData[range];
                  const categories = data.map(entry => entry.time);
                  const sentData = data.map(entry => entry.sent);
                  const lostData = data.map(entry => entry.lost);
      
                  return { categories, sentData, lostData };
                };
      
                let chart = new ApexCharts(document.querySelector("#areaChart"), {
                  series: [
                    { name: "Total Data Terkirim", data: [] },
                    { name: "Packet Loss", data: [] }
                  ],
                  chart: {
                    height: 300,
                    type: 'line',
                    zoom: { enabled: true }
                  },
                  dataLabels: { enabled: false },
                  stroke: { curve: 'smooth' },
                  xaxis: { categories: [] },
                  tooltip: {
                    shared: true,
                    intersect: false
                  },
                  colors: ['#00b894', '#d63031'],
                  grid: {
                    row: { colors: ['#f3f3f3', 'transparent'], opacity: 0.5 }
                  }
                });
      
                chart.render();
      
                const updateChart = (range) => {
                  const { categories, sentData, lostData } = getDataByRange(range);
                  chart.updateOptions({
                    xaxis: { categories },
                    series: [
                      { name: "Total Data Terkirim", data: sentData },
                      { name: "Packet Loss", data: lostData }
                    ]
                  });
                };
      
                document.getElementById('timeRangePacketLoss').addEventListener('change', (e) => {
                  updateChart(e.target.value);
                });
      
                updateChart('hourly');
              });
            </script>
          </div>
        </div>
      
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