<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Topologi Mesh Master-Slave untuk Sensor Soil Moisture</title>
  <meta content="Penerapan topologi mesh pada master-slave untuk pengiriman data sensor soil moisture." name="description">
  <meta content="mesh network, master-slave, soil moisture, ESP32" name="keywords">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      color: #444;
      overflow-x: hidden;
    }

    /* Header Styles */
    .header {
      background-color: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      padding: 15px 0;
      transition: all 0.4s ease;
    }

    .header.scrolled {
      background-color: #fff;
      box-shadow: 0 2px 20px rgba(0,0,0,0.1);
      padding: 10px 0;
    }

    .header .nav-link {
      color: #333;
      font-weight: 500;
      padding: 8px 20px;
      border-radius: 20px;
      transition: all 0.3s ease;
    }

    .header .nav-link:hover {
      color: #2196f3;
      background: rgba(33, 150, 243, 0.1);
      transform: translateY(-2px);
    }

    /* Hero Section - Minimalist Version */
    .hero-section {
      height: 70vh;
      display: flex;
      align-items: center;
      background: linear-gradient(135deg, rgba(16, 85, 158, 0.9), rgba(0, 0, 0, 0.8)), 
                url("assets/img/bacgound.jpeg") center/cover;
      padding: 80px 0;
    }

    .hero-content {
      max-width: 500px;
      margin-right: auto;
      animation: fadeInUp 1s ease forwards;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* About Section - Side by Side */
    .about-section {
      padding: 80px 0;
      background-color: #ffffff;
      position: relative;
      overflow: hidden;
    }

    .about-content {
      display: flex;
      align-items: center;
      gap: 50px;
    }

    .about-text {
      flex: 1;
      padding-right: 30px;
    }

    .about-image {
      flex: 1;
      position: relative;
    }

    .node-visualization {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    /* Node Styles */
    .node-container {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .node {
      width: 80px;
      height: 80px;
      background: linear-gradient(135deg, #2196f3, #1976d2);
      border-radius: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: 600;
      font-size: 0.9rem;
      position: relative;
      transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      transform-style: preserve-3d;
    }

    .node::before {
      content: '';
      position: absolute;
      inset: -2px;
      background: linear-gradient(45deg, #00ff88, #2196f3, #ff0058);
      border-radius: 17px;
      z-index: -1;
      opacity: 0;
      transition: opacity 0.5s;
    }

    .node.active {
      transform: scale(1.1) translateZ(20px);
    }

    .node.active::before {
      opacity: 1;
      animation: borderGlow 2s linear infinite;
    }

    @keyframes borderGlow {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    /* Features Section */
    .features-section {
      background-color: #f8f9fa;
      padding: 80px 0;
    }

    .features-card {
      background: white;
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
      height: 100%;
    }

    .features-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(90deg, #2196f3, #00ff88);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.4s ease;
    }

    .features-card:hover {
      transform: translateY(-10px);
    }

    .features-card:hover::before {
      transform: scaleX(1);
    }

    .features-card i {
      font-size: 3rem;
      background: linear-gradient(135deg, #2196f3, #00ff88);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 1rem;
    }

    /* Button Styles */
    .btn-oval {
      padding: 12px 35px;
      border-radius: 30px;
      font-weight: 500;
      letter-spacing: 0.5px;
      position: relative;
      overflow: hidden;
      transition: all 0.4s ease;
    }

    .btn-oval::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      background: rgba(255,255,255,0.2);
      border-radius: 50%;
      transform: translate(-50%, -50%);
      transition: width 0.6s ease, height 0.6s ease;
    }

    .btn-oval:hover::before {
      width: 300px;
      height: 300px;
    }

    .btn-oval:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }

    /* Footer */
    footer {
      background-color: #fff;
      padding: 20px 0;
      box-shadow: 0 -2px 20px rgba(0,0,0,0.05);
    }

    /* Responsive Design */
    @media (max-width: 992px) {
      .about-content {
        flex-direction: column;
      }

      .about-text, .about-image {
        width: 100%;
        padding: 20px;
      }

      .hero-section {
        text-align: center;
      }

      .hero-content {
        margin: 0 auto;
      }
    }

    @media (max-width: 768px) {
      .node {
        width: 70px;
        height: 70px;
        font-size: 0.8rem;
      }

      .features-card {
        margin-bottom: 20px;
      }
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">Proyek IoT</a>
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
    <div class="container">
      <div class="hero-content">
        <h1 class="display-4 fw-bold text-white">Topologi Mesh Master-Slave</h1>
        <p class="lead text-white-50">Solusi cerdas untuk pemantauan kelembaban tanah berbasis IoT.</p>
        <div class="login-buttons mt-4">
          <a href="pages-login" class="btn btn-oval btn-primary mt-2 me-2">Login</a>
          <a href="#about" class="btn btn-oval btn-outline-light mt-2">Pelajari Lebih Lanjut</a>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about-section">
    <div class="container">
      <div class="about-content">
        <div class="about-text">
          <h2 class="fw-bold mb-4">Tentang Proyek Ini</h2>
          <p class="text-muted">
            Proyek ini dirancang untuk membangun jaringan mesh pintar yang mampu memantau kelembaban tanah secara real-time. 
            Menggunakan topologi master-slave yang saling terhubung, setiap perangkat dalam jaringan dapat berkomunikasi 
            dan bertukar data secara efisien, memastikan informasi yang akurat dan konsisten.
          </p>
          <p class="text-muted">
            Dengan teknologi ini, pemantauan kelembaban tanah menjadi lebih mudah, stabil, dan andal — ideal untuk 
            berbagai kebutuhan pertanian modern dan konservasi sumber daya alam.
          </p>
        </div>
        <div class="about-image">
          <div class="node-visualization">
            <h3 class="fw-bold text-center mb-4">Simulasi Node</h3>
            <div class="node-container">
              <div class="node" id="master">Master</div>
              <div class="node" id="slave1">Slave 1</div>
              <div class="node" id="slave2">Slave 2</div>
              <div class="node" id="slave3">Slave 3</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="features-section">
    <div class="container">
      <h2 class="text-center fw-bold mb-5">Fitur Utama</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="features-card">
            <i class="bi bi-diagram-3-fill"></i>
            <h5>Konektivitas Fleksibel</h5>
            <p>Setiap node terhubung stabil dengan ESP32 dalam struktur jaringan mesh, memungkinkan komunikasi yang efisien.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="features-card">
            <i class="bi bi-moisture"></i>
            <h5>Pemantauan Kelembaban</h5>
            <p>Data kelembaban tanah dikumpulkan secara real-time dari semua slave, membantu pengambilan keputusan yang lebih baik dalam pertanian.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="features-card">
            <i class="bi bi-shield-lock-fill"></i>
            <h5>Keamanan Data</h5>
            <p>Data yang dikumpulkan dari sensor dilindungi dengan baik, memastikan integritas dan keamanan informasi penting.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center">
    <div class="container">
      <p class="text-muted mb-0">
        &copy; Copyright <strong><span>Awal Cahyo</span></strong>. All Rights Reserved
      </p>
    </div>
  </footer>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    // Header scroll effect
    window.addEventListener('scroll', function() {
      const header = document.querySelector('.header');
      header.classList.toggle('scrolled', window.scrollY > 0);
    });

    // Node animation
    const nodes = ['master', 'slave1', 'slave2', 'slave3'];
    let currentNodeIndex = 0;

    function activateNode() {
      nodes.forEach(node => {
        document.getElementById(node).classList.remove('active');
      });

      document.getElementById(nodes[currentNodeIndex]).classList.add('active');
      currentNodeIndex = (currentNodeIndex + 1) % nodes.length;
      setTimeout(activateNode, 2000);
    }

    activateNode();
  </script>
</body>
</html>