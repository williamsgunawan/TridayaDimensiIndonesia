<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kotak Hijau Utama</title>
  <style>
    /* Reset and base styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      color: #333;
      overflow-x: hidden;
    }
    
    img {
      max-width: 100%;
      height: auto;
    }
    
    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* Navbar */
    .navbar-container {
      background-color: #F9F5F6;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      position: sticky;
      top: 0;
      z-index: 100;
    }
    
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 20px;
    }
    
    .navbar-brand {
      display: flex;
      align-items: center;
      text-decoration: none;
      color: #008B4B;
      font-weight: bold;
      font-size: 24px;
    }
    
    .logo {
      width: 60px;
      margin-right: 12px;
    }
    
    .navbar-nav {
      display: flex;
      list-style: none;
      gap: 30px;
    }
    
    .nav-link {
      text-decoration: none;
      color: #555;
      font-weight: bold;
      padding: 8px 0;
      transition: all 0.3s;
      position: relative;
      font-size: 16px;
      white-space: nowrap;
    }
    
    .nav-link:hover,
    .nav-link.active {
      color: #3498db;
    }
    
    .nav-link.active::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 3px;
      background-color: #008B4B;
    }
    
    /* Mobile menu toggle - hidden on desktop */
    .menu-toggle {
      display: none;
      flex-direction: column;
      cursor: pointer;
      padding: 5px;
      z-index: 102;
    }
    
    .menu-toggle span {
      height: 3px;
      width: 25px;
      background: #2c3e50;
      margin-bottom: 5px;
      border-radius: 2px;
      transition: 0.3s;
    }

    /* Hero Section */
    .hero {
      position: relative;
      width: 100%;
      height: 70vh;
      min-height: 500px;
      max-height: 600px;
      overflow: hidden;
    }
    
    .hero-bg {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: bottom;
    }
    
    .hero-content {
      position: absolute;
      top: 50%;
      left: 5%;
      transform: translateY(-50%);
      color: white;
      width: 76%;
      max-width: 900px;
    }
    
    .hero-heading {
      font-size: 48px;
      margin-bottom: 20px;
      line-height: 1.2;
    }
    
    .hero-body {
      font-size: 24px;
      line-height: 1.4;
    }

    /* Vision Mission Strategy Section */
    .vision-mission {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 40px;
      margin: -60px 0 60px;
      padding: 0 20px;
    }
    
    .vision-item {
      text-align: center;
      padding: 40px 20px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      z-index: 1;
    }
    
    .vision-item img {
      width: 100px;
      height: 100px;
      margin-bottom: 20px;
    }
    
    .vision-item h3 {
      color: #008B4B;
      font-size: 28px;
      margin-bottom: 15px;
    }
    
    .vision-item p {
      font-size: 16px;
      line-height: 1.6;
    }

    /* Section Header */
    .section-header {
      text-align: center;
      margin: 60px 0 40px;
      color: #008B4B;
      position: relative;
    }
    
    .section-header h2 {
      font-size: 36px;
      font-weight: bold;
      display: inline-block;
      background: white;
      padding: 0 30px;
      position: relative;
      z-index: 1;
    }
    
    .section-header::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      height: 3px;
      background: #008B4B;
      transform: translateY(-50%);
    }

    /* Values Section */
    .values-intro {
      text-align: center;
      font-size: 18px;
      margin-bottom: 50px;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
      padding: 0 20px;
    }

    .values-grid {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 30px;
      margin-bottom: 60px;
      padding: 0 20px;
    }
    
    .value-item {
      text-align: center;
    }
    
    .value-item img {
      width: 80px;
      height: 80px;
      margin-bottom: -30px;
    }
    
    .value-item h4 {
      color: #036E3C;
      font-size: 16px;
      font-weight: normal;
      margin-bottom: 10px;
      min-height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .value-item p {
      font-size: 14px;
      line-height: 1.5;
    }

    /* Scope of Services */
    .scope-intro {
      text-align: center;
      font-size: 18px;
      margin-bottom: 50px;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
      padding: 0 20px;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 30px;
      margin-bottom: 60px;
      padding: 0 20px;
    }
    
    .service-card {
      background: white;
      color: black;
      padding: 30px 20px;
      border-radius: 10px;
      border: 2px solid #008B4B;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s ease;
    }
    
    .service-card:hover {
      transform: translateY(-5px);
    }
    
    .service-header {
      display: flex;
      align-items: flex-start;
      gap: 15px;
      margin-bottom: 15px;
    }
    
    .service-header img {
      width: 50px;
      height: 50px;
    }
    
    .service-header h3 {
      color: #008B4B;
      font-size: 16px;
      font-weight: bold;
      margin: 0;
      line-height: 1.3;
    }
    
    .service-card p {
      font-size: 14px;
      line-height: 1.6;
      opacity: 0.9;
      margin-bottom: 20px;
    }
    
    .learn-more {
      color: #27ae60;
      text-decoration: none;
      font-weight: bold;
      font-size: 14px;
      transition: all 0.3s ease;
      display: inline-block;
    }
    
    .learn-more:hover {
      color: #219653;
      text-decoration: underline;
      transform: translateX(5px);
    }

    /* Map Section */
    .map-section {
      text-align: center;
      margin: 60px 0;
    }
    
    .map-section img {
      max-width: 100%;
      border-radius: 8px;
    }

    /* Clients Section */
    .clients-section {
      text-align: center;
      margin: 60px 0;
    }
    
    .clients-intro {
      font-size: 18px;
      margin-bottom: 40px;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
      padding: 0 20px;
    }

    /* Footer */
    .footer {
      background-color: #00733E;
      color: white;
      padding: 60px 0 40px;
      margin-top: 80px;
    }
    
    .footer-content {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 40px;
    }
    
    .footer h3 {
      font-size: 20px;
      margin-bottom: 20px;
    }
    
    .footer p {
      font-size: 16px;
      margin-bottom: 10px;
      line-height: 1.5;
    }

    /* ===== MOBILE STYLES ===== */
    @media (max-width: 768px) {
      .container {
        padding: 0 15px;
      }
      
      /* Mobile Navbar */
      .navbar {
        padding: 12px 15px;
      }
      
      .navbar-brand {
        font-size: 18px;
      }
      
      .logo {
        width: 40px;
        margin-right: 8px;
      }
      
      .menu-toggle {
        display: flex;
      }
      
      .navbar-nav {
        position: fixed;
        top: 0;
        right: -100%;
        width: 80%;
        max-width: 300px;
        height: 100vh;
        background: white;
        flex-direction: column;
        box-shadow: -5px 0 15px rgba(0,0,0,0.1);
        display: flex;
        z-index: 101;
        gap: 0;
        margin-top: 0;
        padding-top: 80px;
        transition: right 0.3s ease;
      }
      
      .navbar-nav.active {
        right: 0;
      }
      
      .nav-item {
        width: 100%;
        border-bottom: 1px solid #eee;
      }
      
      .nav-link {
        display: block;
        padding: 18px 20px;
        font-size: 18px;
        width: 100%;
        text-align: left;
      }

      /* Hero Section */
      .hero {
        height: 50vh;
        min-height: 400px;
      }
      
      .hero-content {
        width: 90%;
        left: 5%;
      }
      
      .hero-heading {
        font-size: 32px;
      }
      
      .hero-body {
        font-size: 18px;
      }

      /* Vision Mission Strategy */
      .vision-mission {
        grid-template-columns: 1fr;
        gap: 30px;
        margin: -30px 0 40px;
        padding: 0 15px;
      }
      
      .vision-item {
        padding: 30px 20px;
      }
      
      .vision-item img {
        width: 80px;
        height: 80px;
      }
      
      .vision-item h3 {
        font-size: 24px;
      }

      /* Section Header */
      .section-header {
        margin: 40px 0 30px;
      }
      
      .section-header h2 {
        font-size: 28px;
        padding: 0 20px;
      }

      /* Values Section */
      .values-intro {
        font-size: 16px;
        margin-bottom: 40px;
        padding: 0 15px;
      }

      .values-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        padding: 0 15px;
      }
      
      .value-item img {
        width: 60px;
        height: 60px;
      }
      
      .value-item h4 {
        font-size: 14px;
        min-height: 50px;
      }

      /* Scope of Services */
      .scope-intro {
        font-size: 16px;
        margin-bottom: 40px;
        padding: 0 15px;
      }

      .services-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        padding: 0 15px;
      }
      
      .service-card {
        padding: 20px 15px;
      }
      
      .service-header {
        gap: 10px;
      }
      
      .service-header img {
        width: 40px;
        height: 40px;
      }
      
      .service-header h3 {
        font-size: 14px;
      }

      /* Footer */
      .footer-content {
        grid-template-columns: 1fr;
        gap: 30px;
      }
      
      .footer h3 {
        font-size: 18px;
      }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
      .hero {
        height: 40vh;
        min-height: 300px;
      }

      .hero-heading {
        font-size: 24px;
      }

      .hero-body {
        font-size: 16px;
      }

      .section-header h2 {
        font-size: 24px;
      }

      .values-grid {
        grid-template-columns: 1fr;
      }

      .services-grid {
        grid-template-columns: 1fr;
      }

      .vision-item h3 {
        font-size: 20px;
      }

      .values-intro,
      .scope-intro,
      .clients-intro {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <div class="navbar-container">
    <div class="container">
      <nav class="navbar">
        <a href="{{ url('/kotakhijauutama') }}" class="navbar-brand">
          <img src="{{ asset('assets/khu_logo.png') }}" class="logo" alt="Kotak Hijau Utama Logo">
          PT. KOTAK HIJAU UTAMA
        </a>
        
        <div class="menu-toggle" id="menuToggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
        
        <ul class="navbar-nav" id="navbarNav">
          <li class="nav-item">
            <a href="{{ url('/kotakhijauutama') }}" class="nav-link active">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/kotakhijauutama/program') }}" class="nav-link">Program</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/kotakhijauutama/services') }}" class="nav-link">Services</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <div class="hero">
    <img src="{{ asset('assets/khu_homebanner.png') }}" alt="background Image" class="hero-bg">
    <div class="hero-content">
      <h1 class="hero-heading">People. Service. Performance.</h1>
      <p class="hero-body">Kami menyediakan tenaga kerja profesional dan layanan pendukung operasional yang berfokus pada kualitas, efisiensi, dan kepercayaan.</p>
    </div>
  </div>

  <!-- Vision Mission Strategy Section -->
  <div class="container">
    <div class="vision-mission">
      <div class="vision-item">
        <img src="{{ asset('assets/khu_visi.png') }}" alt="Visi Icon">
        <h3>Visi</h3>
        <p>Menjadi perusahaan yang terus berkembang dan diakui sebagai perusahaan penyedia jasa yang berkualitas di Indonesia.</p>
      </div>
      <div class="vision-item">
        <img src="{{ asset('assets/khu_misi.png') }}" alt="Misi Icon">
        <h3>Misi</h3>
        <p>Memberikan jasa pelayanan yang berkualitas kepada setiap partner kerja dengan efisiensi dan efektivitas.</p>
      </div>
      <div class="vision-item">
        <img src="{{ asset('assets/khu_strat.png') }}" alt="Strategi Icon">
        <h3>Strategi</h3>
        <p>Terus meningkatkan kemampuan individu dan tim serta selalu belajar dari pengalaman agar menjadi lebih ahli.</p>
      </div>
    </div>
  </div>

  <!-- Values Section -->
  <div class="container">
    <div class="section-header">
      <h2>Our Values</h2>
    </div>

    <div class="values-intro">
      <p>Di balik setiap layanan yang kami berikan, terdapat nilai-nilai yang kami pegang teguh sebagai pedoman bekerja dan melayani dengan sepenuh hati.</p>
    </div>

    <div class="values-grid">
      <div class="value-item">
        <img src="{{ asset('assets/khu_01.png') }}" alt="Kualitas & Profesionalisme">
        <h4>Kualitas & Profesionalisme</h4>
        <p>Kami berkomitmen memberikan pelayanan terbaik dengan standar profesional tinggi di setiap langkah kerja.</p>
      </div>
      <div class="value-item">
        <img src="{{ asset('assets/khu_02.png') }}" alt="Pembelajaran & Pengembangan">
        <h4>Pembelajaran & Pengembangan</h4>
        <p>Kami terus tumbuh melalui pembelajaran, inovasi, dan pengalaman agar selalu menjadi yang terdepan di bidang kami.</p>
      </div>
      <div class="value-item">
        <img src="{{ asset('assets/khu_03.png') }}" alt="Kepuasan Pelanggan">
        <h4>Kepuasan Pelanggan</h4>
        <p>Kami mendengar, memahami, dan melayani dengan sepenuh hati agar terciptanya kepercayaan dan kepuasan mitra kerja.</p>
      </div>
      <div class="value-item">
        <img src="{{ asset('assets/khu_04.png') }}" alt="Perbaikan Berkelanjutan">
        <h4>Perbaikan Berkelanjutan</h4>
        <p>Kami percaya kesuksesan berawal dari keberanian untuk selalu memperbaiki dan menyempurnakan setiap proses.</p>
      </div>
      <div class="value-item">
        <img src="{{ asset('assets/khu_05.png') }}" alt="Tanggung Jawab & Keandalan">
        <h4>Tanggung Jawab & Keandalan</h4>
        <p>Kami menjalankan setiap tugas dengan integritas, ketepatan, dan tanggung jawab penuh terhadap hasil yang kami berikan.</p>
      </div>
    </div>
  </div>

  <!-- Scope of Services Section -->
  <div class="container">
    <div class="section-header">
      <h2>Scope of Services</h2>
    </div>

    <div class="scope-intro">
      <p>Kami menyediakan berbagai layanan profesional untuk mendukung kebutuhan operasional perusahaan Anda. Kami berkomitmen memberikan solusi tenaga kerja yang <b>andal, efisien,</b> dan <b>berkualitas</b> melalui beragam bidang layanan berikut.</p>
    </div>

    <div class="services-grid">
      <div class="service-card">
        <div class="service-header">
          <img src="{{ asset('assets/khu_security.png') }}" alt="Security Services">
          <h3>Security Services</h3>
        </div>
        <p>Perlindungan aset dan personel secara komprehensif 24/7 untuk memastikan lingkungan kerja dan property yang aman.</p>
        <a href="{{ url('/kotakhijauutama/services') }}#security" class="learn-more">Pelajari Lebih Lanjut →</a>
      </div>
      <div class="service-card">
        <div class="service-header">
          <img src="{{ asset('assets/khu_housekeeping.png') }}" alt="Housekeeping Services">
          <h3>Housekeeping Services</h3>
        </div>
        <p>Layanan kebersihan profesional dan menyeluruh untuk menjaga keindahan, sanitasi, dan kenyamanan lingkungan Anda.</p>
        <a href="{{ url('/kotakhijauutama/services') }}#housekeeping" class="learn-more">Pelajari Lebih Lanjut →</a>
      </div>
      <div class="service-card">
        <div class="service-header">
          <img src="{{ asset('assets/khu_office.png') }}" alt="Office & Facility Services">
          <h3>Office & Facility Services</h3>
        </div>
        <p>Pengelolaan operasional dan pemeliharaan fasilitas kantor (gedung, AC, listrik) agar berfungsi optimal setiap saat.</p>
        <a href="{{ url('/kotakhijauutama/services') }}#office" class="learn-more">Pelajari Lebih Lanjut →</a>
      </div>
      <div class="service-card">
        <div class="service-header">
          <img src="{{ asset('assets/khu_front.png') }}" alt="Front Office Services">
          <h3>Front Office Services</h3>
        </div>
        <p>Layanan penyambutan dan administrasi profesional yang menciptakan kesan positif pertama bagi tamu Anda.</p>
        <a href="{{ url('/kotakhijauutama/services') }}#front" class="learn-more">Pelajari Lebih Lanjut →</a>
      </div>
    </div>
  </div>

  <!-- Office Section -->
  <div class="container">
    <div class="section-header">
      <h2>Our Office</h2>
    </div>

    <div class="map-section">
      <img src="{{ asset('assets/khu_officemap.png') }}" alt="Office Map">
    </div>
  </div>

  <!-- Clients Section -->
  <div class="container">
    <div class="section-header">
      <h2>Our Clients</h2>
    </div>

    <div class="clients-intro">
      <p>Telah dipercaya oleh <b>berbagai perusahaan</b> sebagai <b>mitra profesional</b> dalam penyediaan layanan tenaga kerja dan operasional kantor.</p>
    </div>

    <div class="clients-section">
      <img src="{{ asset('assets/khu_clients.png') }}" alt="Our Clients">
    </div>
  </div>

  <!-- Footer -->
  <div class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="company-info">
          <h3>Kotak Hijau Utama</h3>
          <p>Graha Enka Deli, Jl. Buncit Raya</p>
          <p>No.12 12, RT.12/RW.12, Kalibata,</p>
          <p>Kec. Pancoran, Kota Jakarta Selatan,</p>
          <p>Daerah Khusus Ibukota Jakarta</p>
          <p>12740</p>
        </div>
        <div class="perusahaan">
          <h3>Perusahaan</h3>
          <p>Tridaya Dimensi Indonesia</p>
          <p>Indodaya Alihtama</p>
          <p>BursaKarir</p>
        </div>
        <div class="contact-details">
          <h3>Contact Details</h3>
          <p>Phone : +62 881-0101-83823</p>
          <p>Email : marketing@kotak-hijau.com</p>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Mobile menu toggle
    const menuToggle = document.getElementById('menuToggle');
    const navbarNav = document.getElementById('navbarNav');
    
    menuToggle.addEventListener('click', function(event) {
      event.stopPropagation();
      navbarNav.classList.toggle('active');
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
      if (!event.target.closest('.navbar') && navbarNav.classList.contains('active')) {
        navbarNav.classList.remove('active');
      }
    });
    
    // Close menu when clicking on a link
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
      link.addEventListener('click', function() {
        navbarNav.classList.remove('active');
      });
    });
  </script>
</body>
</html>