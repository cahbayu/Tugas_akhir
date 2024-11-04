<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tables / Data - NiceAdmin Bootstrap Template</title>
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

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
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
      <h1>LOG</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">LOG</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
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
              <h5 class="card-title">Packetloss <span id="data-title">| Master</span></h5>

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


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data</h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th style="text-align: center;">No</th>
                    <th style="text-align: center;">Node</th>
                    <th style="text-align: center;">Data Sensor</th>
                    <th style="text-align: center;">Ukuran Paket Data</th>
                    <th style="text-align: center;">Packetloss</th>
                    <th  style="text-align: center;" data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr style="text-align: center;">
                      <td>1</td>
                      <td>Slave 1</td>
                      <td>
                          <div>Sensor 1: 80</div>
                          <div>Sensor 2: 80</div>
                          <div>Sensor 3: 80</div>
                          <div>Sensor 4: 80</div>
                      </td>
                      <td>30</td> <!-- Ukuran pake data untuk Slave 1 -->
                      <td>5%</td> <!-- Nilai packet loss -->
                      <td data-type="date" data-format="YYYY/DD/MM">2024/22/10</td> <!-- Tanggal mulai -->
                  </tr>
                  <tr style="text-align: center;">
                    <td>2</td>
                    <td>Slave 2</td>
                    <td>
                        <div>Sensor 1: 80</div>
                        <div>Sensor 2: 80</div>
                        <div>Sensor 3: 80</div>
                        <div>Sensor 4: 80</div>
                    </td>
                    <td>30</td> <!-- Ukuran pake data untuk Slave 1 -->
                    <td>5%</td> <!-- Nilai packet loss -->
                    <td data-type="date" data-format="YYYY/DD/MM">2024/22/10</td> <!-- Tanggal mulai -->
                </tr>
                <tr style="text-align: center;">
                  <td>3</td>
                  <td>Slave 3</td>
                  <td>
                      <div>Sensor 1: 80</div>
                      <div>Sensor 2: 80</div>
                      <div>Sensor 3: 80</div>
                      <div>Sensor 4: 80</div>
                  </td>
                  <td>30</td> <!-- Ukuran pake data untuk Slave 1 -->
                  <td>5%</td> <!-- Nilai packet loss -->
                  <td data-type="date" data-format="YYYY/DD/MM">2024/22/10</td> <!-- Tanggal mulai -->
              </tr>
              <tr style="text-align: center;">
                <td>4</td>
                <td>Slave 1</td>
                <td>
                    <div>Sensor 1: 80</div>
                    <div>Sensor 2: 80</div>
                    <div>Sensor 3: 80</div>
                    <div>Sensor 4: 80</div>
                </td>
                <td>30</td> <!-- Ukuran pake data untuk Slave 1 -->
                <td>5%</td> <!-- Nilai packet loss -->
                <td data-type="date" data-format="YYYY/DD/MM">2024/22/10</td> <!-- Tanggal mulai -->
            </tr>
            <tr style="text-align: center;">
              <td>5</td>
              <td>Slave 2</td>
              <td>
                  <div>Sensor 1: 80</div>
                  <div>Sensor 2: 80</div>
                  <div>Sensor 3: 80</div>
                  <div>Sensor 4: 80</div>
              </td>
              <td>30</td> <!-- Ukuran pake data untuk Slave 1 -->
              <td>5%</td> <!-- Nilai packet loss -->
              <td data-type="date" data-format="YYYY/DD/MM">2024/22/10</td> <!-- Tanggal mulai -->
          </tr>
              </tbody>
          </table>
              </table>
              <!-- End Table with stripped rows -->

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