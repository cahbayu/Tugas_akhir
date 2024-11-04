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
      background: linear-gradient(135deg, #b3e5fc, #81d4fa);
    }

    .section {
      padding: 40px 0;
    }

    .hero-section {
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url("assets/img/background.jpg") center center / cover no-repeat;
      color: #fff;
      text-align: center;
      height: 70vh;
      display: flex;
      align-items: center;
      justify-content: center;
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
      padding: 60px;
      border-radius: 8px;
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
      background-color: #2196f3; /* Warna biru */
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
      background-color: #1976d2; /* Warna biru lebih gelap untuk node aktif */
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
    }

    .node h5 {
      margin-top: 15px;
      font-weight: 600;
      color: #fff;
      transition: all 0.5s;
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
      border: 1px solid #2196f3; /* Biru untuk border */
      transition: border-color 0.3s;
    }

    .form-control:focus {
      border-color: #1976d2; /* Biru lebih gelap saat fokus */
      box-shadow: 0 0 5px rgba(25, 118, 210, 0.5);
    }

    .btn-primary {
      background-color: #2196f3; /* Biru untuk tombol */
      border: none;
      transition: background-color 0.3s;
    }

    .btn-primary:hover {
      background-color: #1976d2; /* Biru lebih gelap saat hover */
    }
  </style>
</head>

<body>
  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container text-center">
      <h1>Topologi Mesh Master-Slave</h1>
      <p class="lead">Solusi cerdas untuk pemantauan kelembaban tanah berbasis IoT.</p>
      <div class="login-buttons mt-4">
        <a href="pages-login" class="btn btn-primary mt-2 mx-2">Login</a>
        <a href="#about" class="btn btn-outline-light mt-2 mx-2">Pelajari Lebih Lanjut</a>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="section about-section">
    <div class="container">
      <h2 class="fw-bold">Tentang Proyek Ini</h2>
      <p class="mt-3">Proyek ini menerapkan jaringan topologi mesh dengan konsep master-slave untuk memantau kelembaban tanah.</p>
      
      <h3 class="fw-bold">Simulasi Node</h3>
      <div class="node-container">
        <div id="node1" class="node active">Master</div>
        <div id="node2" class="node">Slave 1</div>
        <div id="node3" class="node">Slave 2</div>
        <div id="node4" class="node">Slave 3</div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="section features-section">
    <div class="container">
      <h2 class="fw-bold">Fitur Utama</h2>
      <div class="row mt-5 text-center">
        <div class="col-md-4 icon-box">
          <i class="bi bi-diagram-3-fill" style="font-size: 50px; color: #2196f3;"></i>
          <h5>Konektivitas Fleksibel</h5>
          <p>Setiap node terhubung stabil dengan ESP32 dalam struktur jaringan mesh.</p>
        </div>
        <div class="col-md-4 icon-box">
          <i class="bi bi-moisture" style="font-size: 50px; color: #2196f3;"></i>
          <h5>Pemantauan Kelembaban</h5>
          <p>Data kelembaban tanah dikumpulkan untuk membantu pengambilan keputusan agrikultur.</p>
        </div>
        <div class="col-md-4 icon-box">
          <i class="bi bi-shield-lock-fill" style="font-size: 50px; color: #2196f3;"></i>
          <h5>Keamanan Data</h5>
          <p>Data disimpan dengan aman untuk meminimalkan risiko kehilangan informasi penting.</p>
        </div>
      </div>
    </div>
  </section>
  
  <script>
    // Animasi pergantian node menggunakan JavaScript
    const nodes = document.querySelectorAll('.node');
    let activeIndex = 0;

    function changeNode() {
      // Menghapus kelas aktif dari node saat ini
      nodes[activeIndex].classList.remove('active');

      // Memperbarui indeks aktif untuk node berikutnya
      activeIndex = (activeIndex + 1) % nodes.length;

      // Menambahkan kelas aktif ke node berikutnya
      nodes[activeIndex].classList.add('active');
    }

    // Set interval untuk pergantian node setiap 2 detik
    setInterval(changeNode, 2000);
  </script>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
