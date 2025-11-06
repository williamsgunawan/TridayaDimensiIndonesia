<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About - Tridaya Dimensi Indonesia</title>
  <style>
    /* Reset and base styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
      padding: 15px 0;
    }
    
    .navbar-brand {
      display: flex;
      align-items: center;
      text-decoration: none;
      color: #2c3e50;
      font-weight: bold;
      font-size: 22px;
    }
    
    .logo {
      width: 50px;
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

    /* About Hero Section */
    .about-hero {
      background-color: #2C2C2C;
      color: #93D4F0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 200px;
      text-align: center;
    }

    .about-hero h1 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    .about-hero p {
      font-size: 18px;
    }

    .about-hero span {
      color: white;
      text-decoration: underline;
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

    .text-column h2 {
      font-size: 20px;
      color: #93D4F0;
      margin-bottom: 10px;
    }

    .text-column h1 {
      color: #144E8F;
      font-size: 32px;
      margin-bottom: 20px;
      line-height: 1.3;
    }

    .text-column h3 {
      color: #144E8F;
      margin: 25px 0 10px;
      font-size: 20px;
    }

    .text-column p {
      font-size: 16px;
      line-height: 1.7;
      color: #555;
    }

    .image-column {
      flex: 1;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* Section Header */
    .section-header {
      text-align: center;
      margin: 60px 0 40px;
      color: #144E8F;
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
      background: #144E8F;
      transform: translateY(-50%);
    }

    /* Map Section */
    .map-container {
      text-align: center;
      margin-bottom: 50px;
    }

    /* PIC Sections */
    .pic-section {
      margin-bottom: 50px;
    }

    .pic-title {
      text-align: center;
      font-size: 24px;
      color: #144E8F;
      margin-bottom: 25px;
    }

    .pic-grid {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 15px;
      max-width: 900px;
      margin: 0 auto;
    }

    .pic-item {
      background-color: #144E8F;
      color: white;
      font-weight: bold;
      padding: 12px 20px;
      border-radius: 6px;
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
      text-align: center;
      min-width: 120px;
    }

    .dual-pic-container {
      display: flex;
      justify-content: center;
      gap: 80px;
      max-width: 800px;
      margin: 0 auto;
    }

    .dual-pic-section {
      flex: 1;
    }

    /* Documentation */
    .documentation {
      text-align: center;
      margin: 60px 0;
    }

    .documentation img {
      max-width: 100%;
      border-radius: 8px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* Footer */
    .footer {
      background-color: #144E8F;
      color: white;
      padding: 60px 0 40px;
      margin-top: 80px;
    }
    
    .footer-content {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 40px;
    }
    
    .footer h3 {
      font-size: 20px;
      margin-bottom: 20px;
    }
    
    .footer p {
      font-size: 15px;
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
        padding: 12px 0;
      }
      
      .navbar-brand {
        font-size: 18px;
      }
      
      .logo {
        width: 40px;
        margin-right: 10px;
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

      /* About Hero */
      .about-hero {
        height: 150px;
      }

      .about-hero h1 {
        font-size: 28px;
      }

      .about-hero p {
        font-size: 16px;
      }

      /* Two Columns */
      .two-columns {
        flex-direction: column;
        gap: 30px;
        padding: 40px 0;
      }

      .text-column h1 {
        font-size: 26px;
      }

      .text-column h2 {
        font-size: 18px;
      }

      .text-column h3 {
        font-size: 18px;
      }

      /* Section Header */
      .section-header {
        margin: 40px 0 30px;
      }
      
      .section-header h2 {
        font-size: 28px;
        padding: 0 20px;
      }

      /* PIC Sections */
      .pic-title {
        font-size: 20px;
      }

      .pic-grid {
        gap: 10px;
        padding: 0 10px;
      }

      .pic-item {
        padding: 10px 15px;
        font-size: 14px;
        min-width: 100px;
      }

      .dual-pic-container {
        flex-direction: column;
        gap: 40px;
      }

      /* Footer */
      .footer-content {
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
      }
      
      .footer h3 {
        font-size: 18px;
      }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
      .about-hero {
        height: 130px;
      }

      .about-hero h1 {
        font-size: 24px;
      }

      .about-hero p {
        font-size: 14px;
      }

      .two-columns {
        padding: 30px 0;
      }

      .text-column h1 {
        font-size: 22px;
      }

      .section-header h2 {
        font-size: 24px;
      }

      .pic-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .footer-content {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <div class="navbar-container">
    <div class="container">
      <nav class="navbar">
        <a href="{{ url('/') }}" class="navbar-brand">
          <img src="{{ asset('assets/logo.png') }}" class="logo" alt="Tridaya Dimensi Indonesia Logo">
          Tridaya Dimensi Indonesia
        </a>
        
        <div class="menu-toggle" id="menuToggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
        
        <ul class="navbar-nav" id="navbarNav">
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/about') }}" class="nav-link active">About</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/our-clients') }}" class="nav-link">Our Clients</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- About Hero Section -->
  <div class="about-hero">
    <div class="container">
      <div>
        <h1>About</h1>
        <p>Home / <span>About us</span></p>
      </div>
    </div>
  </div>

  <!-- Who We Are Section -->
  <div class="container">
    <div class="two-columns">
      <div class="image-column">
        <img src="{{ asset('assets/about-pic1.png') }}" alt="Professional HR Solutions">
      </div>
      <div class="text-column">
        <h2>Who Are We</h2>
        <h1>Professional HR Solutions for Your Business.</h1>
        <p>Tridaya Dimensi Indonesia adalah mitra strategis dalam pengelolaan SDM, menghadirkan layanan yang terintegrasi untuk mendukung pertumbuhan perusahaan Anda.</p>
      </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="two-columns">
      <div class="text-column">
        <h2>Why Choose Us</h2>
        <h1>We always give the best.</h1>
        <h3>Tenaga Ahli Professional</h3>
        <p>Didukung tim yang kompeten, berpengalaman, dan memahami kebutuhan bisnis secara mendalam.</p>
        <h3>Jaringan Talenta Luas</h3>
        <p>Akses ke database kandidat berkualitas yang siap disesuaikan dengan kebutuhan perusahaan.</p>
      </div>
      <div class="image-column">
        <img src="{{ asset('assets/about-pic2.png') }}" alt="Why Choose Us">
      </div>
    </div>

    <!-- Main Office Section -->
    <div class="two-columns">
      <div class="image-column">
        <img src="{{ asset('assets/about-pic3.png') }}" alt="Jakarta Office">
      </div>
      <div class="text-column">
        <h2>Our Main Office</h2>
        <h1>Jakarta</h1>
        <p>Jakarta adalah jantung bisnis dan pusat peluang terbesar di Indonesia. Kehadiran Tridaya Dimensi Indonesia di kota ini menjadi bukti komitmen kami dalam mendukung perusahaan dan talenta terbaik untuk bertumbuh bersama.</p>
      </div>
    </div>

    <!-- Branch Offices Section -->
    <div class="two-columns">
      <div class="text-column">
        <h2>Our Branch Office</h2>
        <h1>Bandung</h1>
        <p>Bandung dikenal sebagai kota kreatif dengan ekosistem bisnis yang terus berkembang. Kehadiran Tridaya Dimensi Indonesia di kota ini menjadi komitmen kami dalam mendukung pertumbuhan perusahaan serta talenta unggul yang lahir dari inovasi dan kolaborasi.</p>
        <h1>Surabaya</h1>
        <p>Surabaya adalah pusat perdagangan dan industri terbesar di Indonesia timur. Kehadiran Tridaya Dimensi Indonesia di kota ini menunjukkan dedikasi kami untuk mendukung perusahaan dan talenta terbaik agar terus maju dan berkembang bersama.</p>
      </div>
      <div class="image-column">
        <img src="{{ asset('assets/about-pic4.png') }}" alt="Branch Offices">
      </div>
    </div>
  </div>

  <!-- Regional Representative Section -->
  <div class="section-header">
    <h2>Regional Representative</h2>
  </div>

  <div class="container">
    <div class="map-container">
      <img src="{{ asset('assets/map.png') }}" alt="Indonesia Map">
    </div>

    <!-- Sumatra PIC -->
    <div class="pic-section">
      <div class="pic-title">PIC Sumatra</div>
      <div class="pic-grid">
        <div class="pic-item">Aceh</div>
        <div class="pic-item">Medan</div>
        <div class="pic-item">Batam</div>
        <div class="pic-item">Pekanbaru</div>
        <div class="pic-item">Padang</div>
        <div class="pic-item">Jambi</div>
        <div class="pic-item">Palembang</div>
        <div class="pic-item">Lampung</div>
      </div>
    </div>

    <!-- Jawa PIC -->
    <div class="pic-section">
      <div class="pic-title">PIC Jawa</div>
      <div class="pic-grid">
        <div class="pic-item">Bandung</div>
        <div class="pic-item">Semarang</div>
        <div class="pic-item">Tegal</div>
        <div class="pic-item">Yogyakarta</div>
        <div class="pic-item">Surabaya</div>
        <div class="pic-item">Malang</div>
      </div>
    </div>

    <!-- Kalimantan & Sulawesi PIC -->
    <div class="dual-pic-container">
      <div class="dual-pic-section">
        <div class="pic-title">PIC Kalimantan</div>
        <div class="pic-grid">
          <div class="pic-item">Banjarmasin</div>
          <div class="pic-item">Samarinda</div>
        </div>
      </div>
      <div class="dual-pic-section">
        <div class="pic-title">PIC Sulawesi</div>
        <div class="pic-grid">
          <div class="pic-item">Manado</div>
          <div class="pic-item">Makassar</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Documentation Section -->
  <div class="section-header">
    <h2>Our Documentation</h2>
  </div>

  <div class="container">
    <div class="documentation">
      <img src="{{ asset('assets/documentation.png') }}" alt="Company Documentation">
    </div>
  </div>

  <!-- Footer -->
  <div class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="tdi-footer">
          <h3>Tridaya Dimensi Indonesia</h3>
          <p>Graha Enka Deli, Jl. Buncit Raya</p>
          <p>No.12 12, RT.12/RW.12, Kalibata,</p>
          <p>Kec. Pancoran, Kota Jakarta Selatan,</p>
          <p>Daerah Khusus Ibukota Jakarta</p>
          <p>12740</p>
        </div>
        <div class="contact-details">
          <h3>Contact Details</h3>
          <p>Phone : (021) 7919 8909</p>
          <p>Fax : (021) 798 5408</p>
          <p>Email : yadi@tridaya-dimensi.com</p>
        </div>
        <div class="perusahaan">
          <h3>Perusahaan</h3>
          <p>Tentang Kami</p>
          <p>BursaKarir</p>
          <p>Alihdaya Digital</p>
        </div>
        <div class="social-media">
          <h3>Social Media</h3>
          <p>Instagram</p>
          <p>Facebook</p>
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