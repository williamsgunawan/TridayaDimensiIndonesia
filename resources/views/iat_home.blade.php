<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Indodaya Alihtama</title>
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
      background-color: #ffffff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      position: sticky;
      top: 0;
      z-index: 100;
    }
    
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0;
    }
    
    .navbar-brand {
      display: flex;
      align-items: center;
      text-decoration: none;
      color: #2c3e50;
      font-weight: bold;
    }
    
    .logo {
      width: 450px;
      max-width: 100%;
    }
    
    .navbar-nav {
      display: flex;
      list-style: none;
      gap: 25px;
    }
    
    .nav-link {
      text-decoration: none;
      color: #555;
      font-weight: 500;
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
      background-color: #3498db;
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
    }
    
    .hero-content {
      position: absolute;
      top: 50%;
      left: 5%;
      transform: translateY(-50%);
      color: white;
      width: 50%;
      max-width: 600px;
    }
    
    .hero-heading {
      font-size: 36px;
      margin-bottom: 20px;
      line-height: 1.3;
    }
    
    .hero-body {
      font-size: 20px;
      margin-bottom: 30px;
      line-height: 1.5;
      font-weight: bold;
    }

    /* Two Columns Layout */
    .two-columns {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 50px;
      padding: 60px 0;
    }

    .text-column {
      flex: 1;
    }

    .text-column h1 {
      color: #780001;
      font-size: 36px;
      margin-bottom: 20px;
      line-height: 1.3;
    }

    .text-column p {
      font-size: 18px;
      line-height: 1.7;
      color: #555;
    }

    .image-column {
      flex: 1;
      border-radius: 8px;
      overflow: hidden;
    }

    /* Section Header */
    .section-header {
      text-align: center;
      margin: 60px 0 40px;
      color: #780001;
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
      height: 2px;
      background: #780001;
      transform: translateY(-50%);
    }

    /* Services Section */
    .services-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 30px;
      margin-bottom: 50px;
      padding: 0 20px;
    }
    
    .service-item {
      text-align: center;
    }
    
    .service-item img {
      width: 80px;
      height: 80px;
      margin-bottom: 20px;
    }
    
    .service-text {
      text-align: center;
      max-width: 250px;
      margin: 0 auto;
    }
    
    .service-item h3 {
      font-size: 20px;
      color: #780001;
      margin-bottom: 10px;
    }
    
    .service-item p {
      font-size: 16px;
      line-height: 1.5;
    }

    /* CTA Button */
    .cta-button {
      display: inline-block;
      color: #CB3A39;
      text-decoration: none;
      font-weight: 600;
      font-size: 18px;
      padding: 15px 30px;
      border: 2px solid #CB3A39;
      border-radius: 50px;
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
      z-index: 1;
      background-color: white;
      text-align: center;
    }

    .cta-button:hover {
      color: white;
      transform: translateY(-3px);
      box-shadow: 0 7px 15px rgba(203, 58, 57, 0.3);
    }
    
    .cta-button::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 0%;
      height: 100%;
      background-color: #CB3A39;
      transition: all 0.3s ease;
      z-index: -1;
    }
    
    .cta-button:hover::before {
      width: 100%;
    }
    
    .cta-button::after {
      content: '→';
      margin-left: 10px;
      transition: transform 0.3s ease;
      display: inline-block;
    }
    
    .cta-button:hover::after {
      transform: translateX(5px);
    }

    .button-container {
      text-align: center;
      margin: 40px 0;
    }

    /* Why Choose Us Section */
    .why-choose-grid {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 30px;
      margin-bottom: 50px;
      padding: 0 20px;
    }

    /* Tenaga Kerja Section */
    .tenaga-kerja {
      position: relative;
      text-align: center;
      margin: 60px 0;
      padding: 20px;
      background-image: url("{{ asset('assets/iat_tngkrjbg.png') }}");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      min-height: 400px; /* Set a minimum height */
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .tenaga-kerja-content {
      position: absolute;
      top: 50%;
      left: 10%;
      transform: translateY(-50%);
      color: white;
      text-align: left;
      max-width: 500px;
    }
    
    .tenaga-kerja h2 {
      font-size: 32px;
      margin-bottom: 15px;
    }
    
    .tenaga-kerja p {
      font-size: 20px;
      margin-bottom: 25px;
    }

    /* Clients Section */
    .clients {
      text-align: center;
      margin: 60px 0;
    }

    /* Tempat Section */
    .tempat {
      position: relative;
      margin: 60px 0;
    }
    
    .tempat-content {
      position: absolute;
      top: 50%;
      left: 6%;
      transform: translateY(-50%);
      color: white;
      max-width: 48%;
    }
    
    .tempat h2 {
      font-size: 28px;
      line-height: 1.3;
    }

    /* Footer */
    .footer {
      background-color: #780001;
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
        padding: 0;
      }
      
      .logo {
        width: 250px;
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
        font-size: 24px;
      }
      
      .hero-body {
        font-size: 16px;
      }

      /* Two Columns */
      .two-columns {
        flex-direction: column;
        gap: 30px;
        padding: 40px 0;
      }

      .text-column h1 {
        font-size: 28px;
      }

      .text-column p {
        font-size: 16px;
      }

      /* Section Header */
      .section-header {
        margin: 40px 0 30px;
      }
      
      .section-header h2 {
        font-size: 28px;
        padding: 0 20px;
      }

      /* Services Grid */
      .services-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        padding: 0 10px;
      }

      .service-item img {
        width: 60px;
        height: 60px;
      }

      .service-item h3 {
        font-size: 18px;
      }

      .service-item p {
        font-size: 14px;
      }

      /* Why Choose Grid */
      .why-choose-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        padding: 0 10px;
      }

      /* Tenaga Kerja */
      .tenaga-kerja-content {
        position: relative;
        top: auto;
        left: auto;
        transform: none;
        text-align: center;
        padding: 30px 20px;
        max-width: 100%;
      }
      
      .tenaga-kerja h2 {
        font-size: 24px;
      }
      
      .tenaga-kerja p {
        font-size: 16px;
      }

      /* Tempat Section */
      .tempat-content {
        position: relative;
        top: auto;
        left: auto;
        transform: none;
        text-align: center;
        padding: 30px 20px;
        background: rgba(120, 0, 1, 0.9);
        max-width: 100%;
      }
      
      .tempat h2 {
        font-size: 22px;
      }

      /* CTA Button */
      .cta-button {
        font-size: 16px;
        padding: 12px 25px;
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
        font-size: 20px;
      }

      .hero-body {
        font-size: 14px;
      }

      .two-columns {
        padding: 30px 0;
      }

      .text-column h1 {
        font-size: 24px;
      }

      .section-header h2 {
        font-size: 24px;
      }

      .services-grid,
      .why-choose-grid {
        grid-template-columns: 1fr;
      }

      .service-text {
        max-width: 100%;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <div class="navbar-container">
    <div class="container">
      <nav class="navbar">
        <a href="{{ url('/indodaya') }}" class="navbar-brand">
          <img src="{{ asset('assets/iat_logo.png') }}" class="logo" alt="Indodaya Alihtama Logo">
        </a>
        
        <div class="menu-toggle" id="menuToggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
        
        <ul class="navbar-nav" id="navbarNav">
          <li class="nav-item">
            <a href="{{ url('/indodaya') }}" class="nav-link active">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/indodaya/services') }}" class="nav-link">Services</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/indodaya/career') }}" class="nav-link">Career</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/indodaya/contactus') }}" class="nav-link">Contact Us</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <div class="hero">
    <img src="{{ asset('assets/iat_homebg.png') }}" alt="background Image" class="hero-bg">
    <div class="hero-content">
      <h1 class="hero-heading">Solusi Outsourcing Andal untuk SDM Profesional</h1>
      <p class="hero-body">Kami membantu perusahaan memenuhi kebutuhan tenaga kerja yang kompeten dan efisien di seluruh Indonesia.</p>
      <a href="{{ url('/indodaya/services') }}" class="cta-button">Pelajari Layanan Kami</a>
    </div>
  </div>

  <!-- About Section -->
  <div class="container">
    <div class="two-columns">
      <div class="image-column">
        <img src="{{ asset('assets/iat_ttgkami.png') }}" alt="Tentang Kami">
      </div>
      <div class="text-column">
        <h1>Tentang Kami</h1>
        <p>Sejak tahun 2000, PT Indodaya Alih Tama telah menjadi mitra terpecaya dalam menyediakan solusi <b>Business Process
            Outsourcing (BPO)</b> dan pemenuhan SDM profesional bagi berbagai perusahaan di <b>Jabodetabek</b> dan <b>Pulau Jawa.</b>
            <br>
            <br>
            Kami berkomitmen menghadirkan tenaga kerja yang tepat melalui proses rekrutmen terstruktur dan layanan yang profesional.
        </p>
      </div>
    </div>
  </div>

  <!-- Services Section -->
  <div class="section-header">
    <h2>Layanan Kami</h2>
  </div>

  <div class="container">
    <div class="services-grid">
      <div class="service-item">
        <img src="{{ asset('assets/iat_manpower.png') }}" alt="Manpower Outsourcing">
        <div class="service-text">
          <h3>Manpower Outsourcing</h3>
          <p>Tenaga kerja profesional siap kerja untuk berbagai bidang industri.</p>
        </div>
      </div>
      <div class="service-item">
        <img src="{{ asset('assets/iat_headhunter.png') }}" alt="Head Hunter Project">
        <div class="service-text">
          <h3>Head Hunter Project</h3>
          <p>Rekrutmen cepat dan akurat untuk posisi strategis Anda.</p>
        </div>
      </div>
      <div class="service-item">
        <img src="{{ asset('assets/iat_takeover.png') }}" alt="Take Over Karyawan">
        <div class="service-text">
          <h3>Take Over Karyawan</h3>
          <p>Efisiensi tim melalui pengalihan karyawan yang legal dan aman.</p>
        </div>
      </div>
      <div class="service-item">
        <img src="{{ asset('assets/iat_handover.png') }}" alt="Hand Over Karyawan">
        <div class="service-text">
          <h3>Hand Over Karyawan</h3>
          <p>Transisi tenaga kerja lancar dengan proses administrasi rapi.</p>
        </div>
      </div>
    </div>

    <div class="button-container">
      <a href="{{ url('/indodaya/services') }}" class="cta-button">Pelajari Lebih Lanjut</a>
    </div>
  </div>

  <!-- Tenaga Kerja Section -->
  <div class="tenaga-kerja">
    <!-- <img src="{{ asset('assets/iat_tngkrjbg.png') }}" alt="Butuh Tenaga Kerja Profesional"> -->
    <div class="tenaga-kerja-content">
      <h2>Butuh Tenaga Kerja Profesional?</h2>
      <p>Hubungi kami sekarang untuk konsultasi gratis.</p>
      <a href="#" class="cta-button" onclick="window.open('https://wa.me/6287777785464', '_blank')">Konsultasi Sekarang</a>
    </div>
  </div>

  <!-- Why Choose Us Section -->
  <div class="section-header">
    <h2>Mengapa Pilih Kami</h2>
  </div>

  <div class="container">
    <div class="why-choose-grid">
      <div class="service-item">
        <img src="{{ asset('assets/iat_respon.png') }}" alt="Respon Cepat & Efisien">
        <div class="service-text">
          <h3>Respon Cepat & Efisien</h3>
        </div>
      </div>
      <div class="service-item">
        <img src="{{ asset('assets/iat_profesional.png') }}" alt="Profesional & Berpengalaman">
        <div class="service-text">
          <h3>Profesional & Berpengalaman</h3>
        </div>
      </div>
      <div class="service-item">
        <img src="{{ asset('assets/iat_admin.png') }}" alt="Administrasi Terpusat">
        <div class="service-text">
          <h3>Administrasi Terpusat</h3>
        </div>
      </div>
      <div class="service-item">
        <img src="{{ asset('assets/iat_jangkauan.png') }}" alt="Jangkauan Nasional">
        <div class="service-text">
          <h3>Jangkauan Nasional</h3>
        </div>
      </div>
      <div class="service-item">
        <img src="{{ asset('assets/iat_komitmen.png') }}" alt="Komitmen terhadap Kualitas">
        <div class="service-text">
          <h3>Komitmen terhadap Kualitas</h3>
        </div>
      </div>
    </div>
  </div>

  <!-- Clients Section -->
  <div class="section-header">
    <h2>Klien & Mitra</h2>
  </div>

  <div class="container">
    <div class="clients">
      <img src="{{ asset('assets/iat_klien.png') }}" alt="Klien dan Mitra Kami">
    </div>
  </div>

  <!-- Tempat Section -->
  <div class="tempat">
    <img src="{{ asset('assets/iat_tempatbg.png') }}" alt="Tempat Tepat">
    <div class="tempat-content">
      <h2>Tempat Tepat Cari Karyawan, Tempat Tepat Cari Kerjaan</h2>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="company-info">
          <h3>Indodaya Alihtama</h3>
          <p>Graha Enka Deli, Jl. Buncit Raya</p>
          <p>No.12 12, RT.12/RW.12, Kalibata,</p>
          <p>Kec. Pancoran, Kota Jakarta Selatan,</p>
          <p>Daerah Khusus Ibukota Jakarta</p>
          <p>12740</p>
        </div>
        <div class="perusahaan">
          <h3>Perusahaan</h3>
          <p>Tentang Kami</p>
          <p>BursaKarir</p>
          <p>Alihdaya Digital</p>
        </div>
        <div class="contact-details">
          <h3>Contact Details</h3>
          <p>Phone : (021) 27534773</p>
          <p>Email : simon@indodaya-alihtama.com</p>
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