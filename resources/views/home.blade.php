<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tridaya Dimensi Indonesia</title>
  <style>
    /* Reset and base styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: sans-serif;
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
      font-size: 25px;
      min-width: 300px;
    }
    
    .logo {
      width: 60px;
      margin-right: 15px;
    }
    
    .navbar-nav {
      display: flex;
      list-style: none;
      gap: 40px;
    }
    
    .nav-link {
      text-decoration: none;
      color: #555;
      font-weight: 500;
      padding: 8px 0;
      transition: all 0.3s;
      position: relative;
      font-size: 15px;
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
    }
    
    .menu-toggle span {
      height: 3px;
      width: 25px;
      background: #2c3e50;
      margin-bottom: 4px;
      border-radius: 2px;
    }

    /* Hero Section */
    .hero {
      position: relative;
      width: 100%;
      height: 70vh;
      min-height: 500px;
      max-height: 600px;
      overflow: hidden;
      max-height: 600px;
    }
    
    .hero-bg {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .hero-tim {
      position: absolute;
      right: 0;
      bottom: 0;
      width: 50%;
      max-width: 600px;
      height: auto;
    }
    
    .hero-content {
      position: absolute;
      top: 50%;
      left: 5%;
      transform: translateY(-50%);
      color: white;
      width: 45%;
      max-width: 600px;
    }
    
    .hero-heading {
      font-size: 40px;
      margin-bottom: 20px;
      line-height: 1.3;
    }
    
    .hero-body {
      font-size: 20px;
      margin-bottom: 30px;
      line-height: 1.5;
    }
    
    .contact-button {
      display: inline-block;
      background-color: #144E8F;
      color: white;
      padding: 15px 30px;
      border: none;
      border-radius: 30px;
      font-size: 20px;
      cursor: pointer;
      text-decoration: none;
      transition: background-color 0.3s;
      min-width: 180px;
    }

    .contact-button-text {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
    .contact-button:hover {
      background-color: #0d3a6d;
    }

    /* Section Headers */
    .section-header {
      text-align: center;
      margin: 60px 0 40px;
      color: #144E8F;
      position: relative;
    }
    
    .section-header h2 {
      font-size: 50px;
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

    /* Reasons Section */
    .reasons-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 30px;
      margin-bottom: 50px;
    }
    
    .reason-item {
      text-align: center;
      color: #144E8F;
      padding: 20px;
    }
    
    .circle {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 80px;
      height: 80px;
      background-color: #93D4F0;
      border-radius: 50%;
      margin-bottom: 20px;
    }
    
    .circle img {
      width: 45px;
      height: auto;
    }
    
    .reason-item h3 {
      font-size: 20px;
      margin-bottom: 15px;
      min-height: 60px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .reason-item p {
      font-size: 15px;
      line-height: 1.5;
    }

    /* Vision Mission Strategy Section */
    .visimisistrat {
      background-color: #144E8F;
      padding: 80px 0;
      position: relative;
      margin: 60px 0;
    }
    
    .visimisistrat .container {
      position: relative;
      display: flex;
      align-items: center;
    }
    
    .selection {
      width: 50%;
      max-width: 500px;
    }
    
    .menu {
      display: flex;
      background-color: #34495e;
      border-radius: 10px;
      overflow: hidden;
      margin-bottom: 30px;
    }
    
    .menu-item {
      flex: 1;
      padding: 20px;
      text-align: center;
      color: white;
      cursor: pointer;
      transition: all 0.3s ease;
      font-weight: bold;
      font-size: 20px;
    }
    
    .menu-item:hover,
    .menu-item.active {
      background-color: #3498db;
    }
    
    .content-section {
      display: none;
      animation: fadeIn 0.5s ease;
      color: white;
      font-size: 20px;
      text-align: center;
      padding: 20px 0;
      line-height: 1.6;
    }
    
    .content-section.active {
      display: block;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .visi-img {
      position: absolute;
      right: 18px;
      top: 50%;
      transform: translateY(-50%);
      width: 45%;
      max-width: 500px;
    }

    /* Services Section */
    .dropdown-container {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 25px;
      margin-bottom: 60px;
    }
    
    .dropdown {
      border-radius: 8px;
      overflow: hidden;
      transition: all 0.3s ease;
      background-color: white;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    
    .dropdown-header {
      background-color: white;
      color: #2d3748;
      padding: 25px;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-weight: 600;
      transition: all 0.3s;
    }
    
    .dropdown-header h3 {
      font-size: 25px;
      color: #144E8F;
      margin: 0;
    }
    
    .dropdown-header:hover {
      background-color: #f7fafc;
    }
    
    .dropdown-header.active {
      background-color: #f7fafc;
      border-bottom: 1px solid #e2e8f0;
    }
    
    .dropdown-icon {
      transition: transform 0.3s ease;
      color: #718096;
      font-size: 20px;
    }
    
    .dropdown-header.active .dropdown-icon {
      transform: rotate(180deg);
      color: #2c5282;
    }
    
    .dropdown-content {
      background-color: #f8fafc;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease, padding 0.3s ease;
    }
    
    .dropdown-content.show {
      max-height: 200px;
      padding: 25px;
    }
    
    .service-info p {
      font-size: 15px;
      line-height: 1.6;
    }

    /* Recruitment Process */
    .proses {
      text-align: center;
      margin: 60px 0;
    }
    
    .proses img {
      max-width: 100%;
      height: auto;
    }

    /* Job Positions */
    .kerjaan-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 25px;
      margin-bottom: 40px;
    }
    
    .kerjaan-item {
      padding: 25px;
      text-align: left;
      border: 1px solid #eaeaea;
      border-radius: 8px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .kerjaan-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .kerjaan-inner {
      display: flex;
      align-items: center;
    }
    
    .kerjaan-inner img {
      width: 60px;
      height: auto;
      margin-right: 20px;
    }
    
    .kerjaan {
      color: #144E8F;
      font-weight: bold;
      font-size: 20px;
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
        position: relative;
        padding: 10px 0;
      }
      
      .navbar-brand {
        font-size: 18px;
        min-width: auto;
      }
      
      .logo {
        width: 40px;
        margin-right: 10px;
      }
      
      .menu-toggle {
        display: flex;
        z-index: 1002;
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
        z-index: 1001;
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
        padding: 20px;
        font-size: 18px;
        width: 100%;
        text-align: left;
      }

      /* Overlay when menu is open */
      .nav-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        z-index: 1000;
        display: none;
      }
      
      .nav-overlay.active {
        display: block;
      }

      
      /* Mobile Hero */
      .hero {
        height: 45vh;
        min-height: 300px;
      }
      
      .hero-tim {
        width: 70%;
        display: none;
      }
      
      .hero-content {
        width: 90%;
        left: 2%;
        top: 52%;
      }
      
      .hero-heading {
        font-size: 20px;
      }
      
      .hero-body {
        font-size: 14px;
        margin-bottom: 20px;
      }
      
      .contact-button {
        font-size: 14px;
        padding: 12px 25px;
        min-width: 150px;
      }
      
      /* Mobile Section Headers */
      .section-header {
        margin: 40px 0 30px;
      }
      
      .section-header h2 {
        font-size: 24px;
        padding: 0 20px;
      }
      
      /* Mobile Reasons */
      .reasons-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
      }
      
      .reason-item h3 {
        font-size: 16px;
        min-height: auto;
        margin-bottom: 10px;
      }
      
      .reason-item p {
        font-size: 14px;
      }
      
      .circle {
        width: 60px;
        height: 60px;
        margin-bottom: 15px;
      }
      
      .circle img {
        width: 35px;
      }
      
      /* Mobile Vision Mission */
      .visimisistrat {
        padding: 40px 0;
      }
      
      .visimisistrat .container {
        flex-direction: column;
      }
      
      .selection {
        width: 100%;
        margin-bottom: 30px;
      }
      
      .menu-item {
        font-size: 14px;
        padding: 15px;
      }
      
      .content-section {
        font-size: 16px;
      }
      
      .visi-img {
        position: relative;
        width: 80%;
        right: 0;
        max-width: 300px;
        transform: none;
        margin: 0 auto;
      }
      
      /* Mobile Services */
      .dropdown-container {
        grid-template-columns: 1fr;
        gap: 15px;
      }
      
      .dropdown-header h3 {
        font-size: 16px;
      }
      
      .dropdown-header {
        padding: 20px;
      }
      
      .dropdown-content.show {
        padding: 20px;
        max-height: 300px;
      }
      
      .service-info p {
        font-size: 14px;
      }
      
      .dropdown-icon {
        font-size: 14px;
      }
      
      /* Mobile Jobs */
      .kerjaan-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
      }
      
      .kerjaan-item {
        padding: 15px;
      }
      
      .kerjaan-inner img {
        width: 40px;
        margin-right: 15px;
      }
      
      .kerjaan {
        font-size: 16px;
      }
      
      /* Mobile Footer */
      .footer-content {
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
      }
      
      .footer h3 {
        font-size: 16px;
      }
      
      .footer p {
        font-size: 14px;
      }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
      .reasons-grid {
        grid-template-columns: 1fr;
      }
      
      .kerjaan-grid {
        grid-template-columns: 1fr;
      }
      
      .footer-content {
        grid-template-columns: 1fr;
      }
      
      .hero-content {
        width: 95%;
      }
      
      .hero-heading {
        font-size: 18px;
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
          <img src="{{ asset('assets/logo.png') }}" class="logo" alt="logo">
          Tridaya Dimensi Indonesia
        </a>
        
        <div class="menu-toggle" id="menuToggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
        
        <ul class="navbar-nav" id="navbarNav">
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/about') }}" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/our-clients') }}" class="nav-link {{ request()->is('our-clients') ? 'active' : '' }}">Our Clients</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <div class="hero">
    <img src="{{ asset('assets/bg.png') }}" alt="background Image" class="hero-bg">
    <img src="{{ asset('assets/tim.png') }}" alt="tim Image" class="hero-tim">
    <div class="hero-content">
      <h1 class="hero-heading">Solusi SDM Terpecaya untuk Pertumbuhan Bisnis Anda</h1>
      <p class="hero-body">Sejak 2007, mendukung ratusan perusahaan dengan layanan HR, rekrutmen, outsourcing, dan IT services.</p>
      <a class="contact-button" href="https://wa.me/6287777785464" target="_blank">
        <div class="contact-button-text">
          Hubungi Kami
        </div>
      </a>
    </div>
  </div>

  <!-- Why Choose Us Section -->
  <div class="container">
    <div class="section-header">
      <h2>Why Choose Us</h2>
    </div>

    <div class="reasons-grid">
      <div class="reason-item">
        <span class="circle"><img src="{{ asset('assets/prof_icon.png') }}" alt="Professional Icon"></span>
        <h3>Professional</h3>
        <p>Berkomitmen memberikan layanan yang professional dengan standar kualitas tinggi di setiap bidang.</p>
      </div>
      <div class="reason-item">
        <span class="circle"><img src="{{ asset('assets/exp_icon.png') }}" alt="Experienced Icon"></span>
        <h3>Experienced</h3>
        <p>Lebih dari 17 tahun pengalaman dalam SDM, outsourcing, training, dan event management.</p>
      </div>
      <div class="reason-item">
        <span class="circle"><img src="{{ asset('assets/net_icon.png') }}" alt="Network Icon"></span>
        <h3>Extensive Network</h3>
        <p>Mengelola lebih dari 5.000 karyawan yang terserbar di berbagai wilayah Indonesia.</p>
      </div>
      <div class="reason-item">
        <span class="circle"><img src="{{ asset('assets/trust_icon.png') }}" alt="Trusted Icon"></span>
        <h3>Trusted Partner</h3>
        <p>Dipercaya oleh ratusan perusahaan nasional maupun multinasional sebagai mitra strategis.</p>
      </div>
    </div>

    <div class="reasons-grid">
      <div class="reason-item">
        <span class="circle"><img src="{{ asset('assets/compr_icon.png') }}" alt="Comprehensive Icon"></span>
        <h3>Comprehensive Services</h3>
        <p>Satu pintu solusi untuk HR Management, Security, Housekeeping, hingga, Event Organiser.</p>
      </div>
      <div class="reason-item">
        <span class="circle"><img src="{{ asset('assets/data_icon.png') }}" alt="Database Icon"></span>
        <h3>Strong Database</h3>
        <p>Didukung portal rekrutmen AlihdayaDigital.com dengan 52.000+ kandidat aktif & 1.200+ perusahaan.</p>
      </div>
      <div class="reason-item">
        <span class="circle"><img src="{{ asset('assets/team_icon.png') }}" alt="Team Icon"></span>
        <h3>Expert Team</h3>
        <p>Tim profesional yang kompeten, siap membantu menemukan solusi tepat sesuai kebutuhan klien.</p>
      </div>
      <div class="reason-item">
        <span class="circle"><img src="{{ asset('assets/cust_icon.png') }}" alt="Customer Icon"></span>
        <h3>Customer Satisfaction</h3>
        <p>Selalu berorientasi pada kepuasan klien dengan perbaikan layanan berkelanjutan.</p>
      </div>
    </div>
  </div>

  <!-- Vision Mission Strategy Section -->
  <div class="visimisistrat">
    <div class="container">
      <div class="selection">
        <div class="menu">
          <div class="menu-item active" data-target="visi">Visi</div>
          <div class="menu-item" data-target="misi">Misi</div>
          <div class="menu-item" data-target="strategi">Strategi</div>
        </div>

        <div class="content">
          <div id="visi" class="content-section active">
            <p>Menjadi Partner yang Terpecaya</p>
          </div>

          <div id="misi" class="content-section">
            <p>Memberikan Superior Service yang menghasilkan Peningkatan Produktivitas Kerja dari Client</p>
          </div>

          <div id="strategi" class="content-section">
            <p>Terus meningkatkan kemampuan individu dan team serta selalu belajar dari pengalaman agar Menjadi lebih Ahli</p>
          </div>
        </div>
      </div>
      <img src="{{ asset('assets/visi.png') }}" alt="visi Image" class="visi-img">
    </div>
  </div>

  <!-- Services Section -->
  <div class="container">
    <div class="section-header">
      <h2>Layanan Kami</h2>
    </div>

    <div class="dropdown-container">
      <div class="dropdown">
        <div class="dropdown-header" onclick="toggleDropdown(this)">
          <h3>HR Management</h3>
          <span class="dropdown-icon">▼</span>
        </div>
        <div class="dropdown-content">
          <div class="service-info">
            <p>Menyediakan solusi komprehensif dalam pengelolaan sumber daya manusia, mulai dari administrasi personalia, penyusunan kebajikan HR,
              manajemen kinerja, hingga program pengembangan karyawan. Tujuannya adalah meningkatkan produktivitas dan efektivitas kerja secara
              berkelanjutan.
            </p>
          </div>
        </div>
      </div>
      
      <div class="dropdown">
        <div class="dropdown-header" onclick="toggleDropdown(this)">
          <h3>IT Services</h3>
          <span class="dropdown-icon">▼</span>
        </div>
        <div class="dropdown-content">
          <div class="service-info">
            <p>Menyediakan layanan tekonologi informasi untuk mendukung kebutuhan perusahaan, mulai dari pengembangan sistem, integrasi aplikasi,
              hingga layanan digital yang meningkatkan efisiensi operasional. Dengan solusi IT yang tepat, perusahaan dapat lebih adaptif menghadapi
              era digital.
            </p>
          </div>
        </div>
      </div>
      
      <div class="dropdown">
        <div class="dropdown-header" onclick="toggleDropdown(this)">
          <h3>Manpower Outsourcing</h3>
          <span class="dropdown-icon">▼</span>
        </div>
        <div class="dropdown-content">
          <div class="service-info">
            <p>Menyediakan tenaga kerja terampil dan berpengalaman sesuai kebutuhan spesifik perusahaan Anda. TDI mengelola seluruh proses mulai dari
              perekrutan, administrasi, hingga penggajian, sehingga perusahaan dapat fokus pada pengembangan bisnis inti tanpa terganggu oleh urusan
              operasional tenaga kerja.
            </p>
          </div>
        </div>
      </div>
      
      <div class="dropdown">
        <div class="dropdown-header" onclick="toggleDropdown(this)">
          <h3>Job Portal</h3>
          <span class="dropdown-icon">▼</span>
        </div>
        <div class="dropdown-content">
          <div class="service-info">
          <p>Melalui portal rekrutmen AlihdayaDigital.com, TDI menghadirkan akses ke lebih dari 52.000 kandidat aktif dan 1.200+ perusahaan.
            Portal ini memudahkan proses rekrutmen baik bagi pencari kerja maupun perusahaan, dengan fitur pencarian, posting lowongan, dan
            manajemen kandidat yang efisien.
          </p>
          </div>
        </div>
      </div>
      
      <div class="dropdown">
        <div class="dropdown-header" onclick="toggleDropdown(this)">
          <h3>Recruitment Services</h3>
          <span class="dropdown-icon">▼</span>
        </div>
        <div class="dropdown-content">
          <div class="service-info">
            <p>Menyediakan layanan rekrutmen yang komprehensif untuk membantu perusahaan menemukan talenta terbaik sesuai dengan kebutuhan spesifik.</p>
          </div>
        </div>
      </div>

      <div class="dropdown">
        <div class="dropdown-header" onclick="toggleDropdown(this)">
          <h3>Event Management</h3>
          <span class="dropdown-icon">▼</span>
        </div>
        <div class="dropdown-content">
          <div class="service-info">
            <p>Menyediakan layanan perencanaan dan pelaksanaan acara perusahaan secara profesional, mulai dari seminar, pelatihan,
              gathering, hingga launching produk. Dengan dukungan tim berpengalaman, TDI memastikan setiap detail acara terkelola
              dengan baik sehingga tercipta pengalaman yang berkesan dan sesuai tujuan perusahaan.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Recruitment Process Section -->
  <div class="container">
    <div class="section-header">
      <h2>Proses Rekrutmen</h2>
    </div>
    
    <div class="proses">
      <img src="{{ asset('assets/proses.png') }}" alt="proses Image">
    </div>
  </div>

  <!-- Job Positions Section -->
  <div class="container">
    <div class="section-header">
      <h2>Pekerjaan yang Kami Salurkan</h2>
    </div>

    <div class="kerjaan-grid">
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/resep.png') }}" alt="Resepsionis Icon">
          <span class="kerjaan">Resepsionis</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/dataentry.png') }}" alt="Data Entry Icon">
          <span class="kerjaan">Data Entry</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/sales.png') }}" alt="Sales Icon">
          <span class="kerjaan">Sales</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/admin.png') }}" alt="Admin Icon">
          <span class="kerjaan">Admin</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/accounting.png') }}" alt="Accounting Icon">
          <span class="kerjaan">Accounting</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/marketing.png') }}" alt="Marketing Icon">
          <span class="kerjaan">Marketing</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/custserv.png') }}" alt="Customer Service Icon">
          <span class="kerjaan">Customer Service</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/spg.png') }}" alt="SPG/SPB Icon">
          <span class="kerjaan">SPG/SPB</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/merch.png') }}" alt="Merchandiser Icon">
          <span class="kerjaan">Merchandiser</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/call.png') }}" alt="Call Center Icon">
          <span class="kerjaan">Call Center</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/security.png') }}" alt="Security Icon">
          <span class="kerjaan">Security</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/it.png') }}" alt="IT Icon">
          <span class="kerjaan">IT</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/supervisor.png') }}" alt="Supervisor Icon">
          <span class="kerjaan">Supervisor</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/finance.png') }}" alt="Finance Icon">
          <span class="kerjaan">Finance</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/driver.png') }}" alt="Driver Icon">
          <span class="kerjaan">Driver</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/staff.png') }}" alt="Staff Gudang Icon">
          <span class="kerjaan">Staff Gudang</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/kurir.png') }}" alt="Kurir Icon">
          <span class="kerjaan">Kurir</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/checker.png') }}" alt="Checker Icon">
          <span class="kerjaan">Checker</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/helper.png') }}" alt="Helper Icon">
          <span class="kerjaan">Helper</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/picker.png') }}" alt="Picker Icon">
          <span class="kerjaan">Picker</span>
        </div>
      </div>
      <div class="kerjaan-item">
        <div class="kerjaan-inner">
          <img src="{{ asset('assets/operator.png') }}" alt="Operator Forklift Icon">
          <span class="kerjaan">Operator Forklift</span>
        </div>
      </div>
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
    
    // Dropdown functionality
    function toggleDropdown(element) {
      // Close all other dropdowns
      const allDropdowns = document.querySelectorAll('.dropdown-content');
      const allHeaders = document.querySelectorAll('.dropdown-header');
      
      allDropdowns.forEach(dropdown => {
        if (dropdown !== element.nextElementSibling) {
          dropdown.classList.remove('show');
        }
      });
      
      allHeaders.forEach(header => {
        if (header !== element) {
          header.classList.remove('active');
        }
      });
      
      // Toggle current dropdown
      const content = element.nextElementSibling;
      content.classList.toggle('show');
      element.classList.toggle('active');
    }
    
    // Vision/Mission/Strategy tabs
    document.addEventListener('DOMContentLoaded', function() {
      const menuItems = document.querySelectorAll('.menu-item');
      const contentSections = document.querySelectorAll('.content-section');
      
      menuItems.forEach(item => {
        item.addEventListener('click', function() {
          // Remove active class from all menu items and content sections
          menuItems.forEach(i => i.classList.remove('active'));
          contentSections.forEach(section => section.classList.remove('active'));
          
          // Add active class to clicked menu item
          this.classList.add('active');
          
          // Show corresponding content section
          const targetId = this.getAttribute('data-target');
          document.getElementById(targetId).classList.add('active');
        });
      });
    });
  </script>
</body>
</html>