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
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-slave1" class="active">
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
            <div class="card-body">
              <h5 class="card-title">Kelembaban <span id="data-title">| Slave 1</span></h5>
          
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-moisture"></i>
                </div>
                <div class="ps-1" id="humidity-data">
                  <h6 id="slave1-humidity">Slave 1: 75%</h6>
                </div>
              </div>
            </div>
          
          </div>
        </div>

        <div class="col-xxl-3 col-md-6">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">Paket Data <span id="data-title">| Master</span></h5>
          
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-activity"></i>
                </div>
                <div class="ps-1" id="humidity-data">
                  <!-- Data kelembaban akan ditampilkan di sini -->
                  <h6 id="slave1-humidity">Slave 1: 1000 B</h6>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xxl-3 col-md-6">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title">Log <span id="revenue-title">| Master</span></h5>
        
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-card-checklist"></i>
                </div>
        
                <div class="ps-3" id="revenue-data">
                  <h6 id="slave1-revenue">Slave 1: 1220</h6>
                </div>
              </div>
            </div>
        
          </div>
        </div>
        
        <div class="col-xxl-3 col-xl-12">
          <div class="card info-card customers-card">
             <div class="card-body">
              <h5 class="card-title">Packetloss <span id="packetloss-title">| This Year</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-graph-down-arrow"></i>
                </div>

                <div class="ps-3" id="packetloss-data">
                  <h6 id="slave1-packetloss">Slave 1 : 0,25% (52)</h6>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Data Salve 1</h5>
            
                <!-- Dropdown untuk memilih rentang waktu -->
                <select id="timeRange" class="form-select mb-3">
                  <option value="hourly">Per Jam</option>
                  <option value="daily">Per Hari</option>
                  <option value="monthly">Per Bulan</option>
                </select>
            
                <!-- Line Chart -->
                <div id="lineChart"></div>
            
                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    // Contoh Data JSON per Jam, Hari, dan Bulan
                    const jsonData = {
                      hourly: [
                        { time: "00:00", bytes: 100, moisture: [75, 68, 80, 72] },
                        { time: "01:00", bytes: 100, moisture: [76, 70, 79, 71] },
                        { time: "02:00", bytes: 100, moisture: [78, 72, 85, 75] },
                        // Tambah data hingga 24 jam...
                      ],
                      daily: [
                        { time: "Day 1", bytes: 500, moisture: [70, 65, 78, 68] },
                        { time: "Day 2", bytes: 500, moisture: [72, 68, 80, 70] },
                        // Tambah hingga 30 hari...
                      ],
                      monthly: [
                        { time: "January", bytes: 1000, moisture: [74, 67, 82, 71] },
                        { time: "February", bytes: 1000, moisture: [73, 66, 81, 70] },
                        // Tambah hingga 12 bulan...
                      ]
                    };
            
                    // Fungsi untuk mengambil data berdasarkan rentang waktu
                    const getDataByRange = (range) => {
                      const data = jsonData[range];
                      const categories = data.map(entry => entry.time);
                      const byteData = data.map(entry => entry.bytes);
                      const moistureData = Array.from({ length: 4 }, (_, i) =>
                        data.map(entry => entry.moisture[i])
                      );
            
                      return { categories, byteData, moistureData };
                    };
            
                    // Inisialisasi Chart
                    let chart = new ApexCharts(document.querySelector("#lineChart"), {
                      series: [
                        { name: "Bytes Data", data: [] },
                        { name: "Sensor 1", data: [] },
                        { name: "Sensor 2", data: [] },
                        { name: "Sensor 3", data: [] },
                        { name: "Sensor 4", data: [] }
                      ],
                      chart: {
                        height: 350,
                        type: 'line',
                        zoom: { enabled: true }
                      },
                      colors: ['#FF6B6B', '#4ECDC4', '#556270', '#C7F464', '#FFCC5C'],
                      dataLabels: { enabled: false },
                      stroke: { curve: 'smooth' },
                      xaxis: { categories: [] },
                      yaxis: {
                        title: { text: "Bytes Data" },
                        labels: {
                          formatter: function (value) {
                            return value + " B";  // Byte satuan
                          }
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
                      const { categories, byteData, moistureData } = getDataByRange(range);
                      chart.updateOptions({
                        xaxis: { categories },
                        series: [
                          { name: "Bytes Data", data: byteData },
                          { name: "Sensor 1", data: moistureData[0] },
                          { name: "Sensor 2", data: moistureData[1] },
                          { name: "Sensor 3", data: moistureData[2] },
                          { name: "Sensor 4", data: moistureData[3] }
                        ]
                      });
                    };
            
                    // Event Listener untuk Dropdown Rentang Waktu
                    document.getElementById('timeRange').addEventListener('change', (e) => {
                      updateChart(e.target.value);
                    });
            
                    // Muat Data Default (Per Jam)
                    updateChart('hourly');
                  });
                </script>
                <!-- End Line Chart -->
              </div>
            </div> 

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
                <div id="areaChart"></div>
            
                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    // Contoh data JSON (data per jam, hari, dan bulan)
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
            
                    // Fungsi untuk mengambil data sesuai rentang waktu
                    const getDataByRange = (range) => {
                      const data = jsonData[range];
                      const categories = data.map(entry => entry.time);
                      const sentData = data.map(entry => entry.sent);
                      const lostData = data.map(entry => entry.lost);
            
                      return { categories, sentData, lostData };
                    };
            
                    // Inisialisasi chart
                    let chart = new ApexCharts(document.querySelector("#areaChart"), {
                      series: [
                        { name: "Total Data Terkirim", data: [] },
                        { name: "Packet Loss", data: [] }
                      ],
                      chart: {
                        height: 350,
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
            
                    // Fungsi untuk memperbarui chart berdasarkan rentang waktu
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
            
                    // Event listener untuk dropdown rentang waktu Packet Loss
                    document.getElementById('timeRangePacketLoss').addEventListener('change', (e) => {
                      updateChart(e.target.value);
                    });
            
                    // Muat data default (per jam)
                    updateChart('hourly');
                  });
                </script>
              </div>
            </div>
            
          <div class="card" >
            <div class="card-body">
              <h5 class="card-title">Data sensor Slave1</h5>
              <!-- Default Table -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th><b>S</b>ensor1</th>
                    <th><b>S</b>ensor2</th>
                    <th><b>S</b>ensor3</th>
                    <th><b>S</b>ensor4</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>37%</td>
                    <td>37%</td>
                    <td>37%</td>
                    <td>37%</td>
                    <td>2005/02/11</td>
                  </tr>
                  <tr>
                    <td>37%</td>
                    <td>37%</td>
                    <td>37%</td>
                    <td>37%</td>
                    <td>1999/04/07</td>
                  </tr>
                  <tr>
                    <td>37%</td>
                    <td>37%</td>
                    <td>37%</td>
                    <td>37%</td>
                    <td>2005/09/08</td>
                  </tr>
                  <tr>
                    <td>37%</td>
                    <td>37%</td>
                    <td>37%</td>
                    <td>37%</td>
                    <td>2009/29/11</td>
                  </tr>
                  <tr>
                    <td>37%</td>
                    <td>37%</td>
                    <td>37%</td>
                    <td>37%</td>
                    <td>2005/09/08</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Default Table Example -->
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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