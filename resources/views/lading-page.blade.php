<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Topologi Mesh Master-Slave untuk Sensor Soil Moisture</title>
  <meta content="Penerapan topologi mesh pada master-slave untuk pengiriman data sensor soil moisture." name="description">
  <meta content="mesh network, master-slave, soil moisture, ESP32" name="keywords">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <style>
    body {
      font-family: 'Roboto', sans-serif;
      color: #fff;
      
    }

    .header {
      background-color: rgba(255, 255, 255, 0.582);
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      padding: 10px 0;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .header.scrolled {
      background-color: rgba(255, 255, 255, 1);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    .header .nav-link {
      color: #333;
      padding: 10px 15px;
      position: relative;
      transition: color 0.3s;
    }

    .header .nav-link:hover {
      color: #2196f3;
    }

    .header .nav-link:after {
      content: "";
      display: block;
      position: absolute;
      left: 50%;
      bottom: -5px;
      transform: translateX(-50%);
      width: 0;
      height: 3px;
      background: #2196f3;
      transition: width 0.3s ease;
    }

    .header .nav-link:hover:after {
      width: 100%;
    }

    .hero-section {
      background: linear-gradient(rgba(22, 62, 113, 0.6), rgba(0, 0, 0, 0.8)), url("assets/img/bacgound.jpeg") center center / cover no-repeat;
      color: #fff;
      text-align: center;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .hero-section h1 {
      font-size: 3rem;
      font-weight: 700;
    }

    .about-section {
      background-color: #ffffff;
      color: #333;
      border-radius: 8px;
      padding: 40px;
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .features-section {
      background-color: #3f6685;
      border-radius: 8px;
      padding: 60px 0;
      color: #000000;
    }

    .node-container {
      display: flex;
      justify-content: center;
      margin-top: 30px;
    }

    .node {
      width: 100px;
      height: 100px;
      margin: 10px;
      border-radius: 50%;
      background-color: #2196f3;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      color: white;
      font-weight: bold;
      transition: all 0.5s ease;
      opacity: 0;
      transform: scale(0.8);
    }

    .node.active {
      opacity: 1;
      transform: scale(1);
      background-color: #1976d2;
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
    }

    .features-card {
      background: #fff;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }

    .features-card:hover {
      transform: translateY(-5px);
    }

    .login-section {
      padding: 60px 0;
      background-color: #f9f9f9;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .login-section h2 {
      margin-bottom: 30px;
    }

    .form-control {
      border: 1px solid #2196f3;
      transition: border-color 0.3s;
    }

    .form-control:focus {
      border-color: #1976d2;
      box-shadow: 0 0 5px rgba(25, 118, 210, 0.5);
    }

    .btn-primary {
      background-color: #2196f3;
      border: none;
      transition: background-color 0.3s;
    }

    .btn-primary:hover {
      background-color: #1976d2;
    }

    .login-buttons .btn-oval {
      border-radius: 25px;
      padding: 15px 30px;
      font-size: 1.1rem;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">RoleFlex</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#about">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#features">Fitur</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages-login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container text-center">
        <h1>Topologi Mesh Master-Slave</h1>
        <p class="lead">Solusi cerdas untuk pemantauan kelembaban tanah berbasis IoT.</p>
        <div class="login-buttons mt-4">
            <a href="pages-login" class="btn btn-oval btn-primary mt-2 mx-2">Login</a>
            <a href="#about" class="btn btn-oval btn-outline-light mt-2 mx-2">Pelajari Lebih Lanjut</a>
        </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="section about-section">
    <div class="container">
      <h2 class="fw-bold">Tentang Proyek Ini</h2>
      <p class="mt-3">
          Proyek ini dirancang untuk membangun jaringan mesh pintar yang mampu memantau kelembaban tanah secara real-time. Menggunakan topologi master-slave yang saling terhubung, setiap perangkat dalam jaringan dapat berkomunikasi dan bertukar data secara efisien, memastikan informasi yang akurat dan konsisten. Dengan teknologi ini, pemantauan kelembaban tanah menjadi lebih mudah, stabil, dan andal — ideal untuk berbagai kebutuhan pertanian modern dan konservasi sumber daya alam. Jaringan ini tidak hanya mendukung pemantauan kondisi tanah tetapi juga menyediakan backup otomatis. Jika perangkat utama mengalami masalah, perangkat lain akan mengambil alih, menjaga sistem tetap berfungsi tanpa gangguan.
      </p>
      <h3 class="fw-bold">Simulasi Node</h3>
      <div class="node-container">
        <div class="node" id="master">Master</div>
        <div class="node" id="slave1">Slave 1</div>
        <div class="node" id="slave2">Slave 2</div>
        <div class="node" id="slave3">Slave 3</div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="section features-section">
    <div class="container text-center">
      <h2 class="fw-bold">Fitur Utama</h2>
      <div class="row mt-5">
        <div class="col-md-4">
          <div class="features-card">
            <h3>Konektivitas</h3>
            <p>Konektivitas tanpa batas antara master dan slave, menjamin pertukaran data yang efisien.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="features-card">
            <h3>Stabilitas</h3>
            <p>Backup otomatis untuk menjaga sistem tetap berfungsi meskipun ada node yang mati.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="features-card">
            <h3>Pemantauan Real-Time</h3>
            <p>Data kelembaban tanah yang akurat dan terkini untuk pengambilan keputusan yang lebih baik.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center mt-3">
    <div class="container">
      <p class="text-muted">&copy; Copyright <strong><span>Awal Cahyo</span></strong>. All Rights Reserved
    </div>
  </footer>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    // Effect on scroll
    window.addEventListener('scroll', function () {
      const header = document.querySelector('.header');
      header.classList.toggle('scrolled', window.scrollY > 0);
    });

    // Node rotation simulation
    const nodes = ['master', 'slave1', 'slave2', 'slave3'];
    let currentNodeIndex = 0;

    function activateNode() {
      // Deactivate all nodes
      nodes.forEach(node => {
        document.getElementById(node).classList.remove('active');
      });

      // Activate the current node
      document.getElementById(nodes[currentNodeIndex]).classList.add('active');

      // Update the index for the next node
      currentNodeIndex = (currentNodeIndex + 1) % nodes.length;

      // Set a timeout to activate the next node
      setTimeout(activateNode, 2000); // Change every 2 seconds
    }

    // Start the node rotation
    activateNode();
  </script>
</body>
</html>
