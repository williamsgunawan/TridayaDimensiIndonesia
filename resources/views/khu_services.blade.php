<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services - Kotak Hijau Utama</title>
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
    .services-hero {
      background-color: #00733E;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 200px;
      text-align: center;
    }

    .services-hero h1 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    .services-hero p {
      font-size: 18px;
    }

    .services-hero span {
      color: #5AB685;
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

    /* Subheading */
    .subheading {
      text-align: center;
      font-size: 18px;
      margin-bottom: 50px;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
      padding: 0 20px;
      line-height: 1.6;
    }

    /* Service Sections */
    .service-section {
      margin: 80px 0;
    }

    .service-row {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 50px;
      margin-bottom: 80px;
    }
    
    .service-row.reverse {
      flex-direction: row-reverse;
    }
    
    .service-image {
      flex: 1;
      max-width: 500px;
    }
    
    .service-image img {
      width: 100%;
      border-radius: 10px;
    }
    
    .service-content {
      flex: 1;
      max-width: 600px;
    }
    
    .service-title {
      font-size: 32px;
      color: #017942;
      border-left: 5px solid #017942;
      padding-left: 15px;
      margin-bottom: 20px;
      line-height: 1.3;
    }
    
    .service-description {
      font-size: 18px;
      line-height: 1.7;
      margin-bottom: 25px;
    }

    /* Service Items */
    .service-items {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    
    .service-item {
      display: flex;
      align-items: center;
      font-weight: bold;
      font-size: 16px;
    }
    
    .service-item img {
      width: 40px;
      height: 40px;
      margin-right: 15px;
    }

    /* Gallery Section */
    .gallery-section {
      margin: 60px 0;
    }

    .gallery-image {
      text-align: center;
      margin: 40px 0;
    }
    
    .gallery-image img {
      max-width: 100%;
      border-radius: 8px;
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
      .services-hero {
        height: 150px;
      }

      .services-hero h1 {
        font-size: 28px;
      }

      .services-hero p {
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

      /* Subheading */
      .subheading {
        font-size: 16px;
        margin-bottom: 40px;
        padding: 0 15px;
      }

      /* Service Sections */
      .service-section {
        margin: 60px 0;
      }

      .service-row {
        flex-direction: column;
        gap: 30px;
        margin-bottom: 60px;
      }
      
      .service-row.reverse {
        flex-direction: column;
      }
      
      .service-image {
        max-width: 100%;
      }
      
      .service-title {
        font-size: 24px;
        border-left-width: 4px;
        padding-left: 12px;
      }
      
      .service-description {
        font-size: 16px;
      }

      /* Service Items */
      .service-item {
        font-size: 14px;
      }
      
      .service-item img {
        width: 35px;
        height: 35px;
        margin-right: 12px;
      }

      /* Gallery Section */
      .gallery-section {
        margin: 40px 0;
      }

      .gallery-image {
        margin: 30px 0;
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
      .services-hero {
        height: 130px;
      }

      .services-hero h1 {
        font-size: 24px;
      }

      .services-hero p {
        font-size: 14px;
      }

      .section-header h2 {
        font-size: 24px;
      }

      .subheading {
        font-size: 14px;
      }

      .service-title {
        font-size: 20px;
      }

      .service-description {
        font-size: 14px;
      }

      .service-item {
        font-size: 13px;
      }
      
      .service-item img {
        width: 30px;
        height: 30px;
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
            <a href="{{ url('/kotakhijauutama') }}" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/kotakhijauutama/program') }}" class="nav-link">Program</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/kotakhijauutama/services') }}" class="nav-link active">Services</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Services Hero Section -->
  <div class="services-hero">
    <div class="container">
      <div>
        <h1>Services</h1>
        <p><span>Home /</span> <span style="text-decoration: underline;">Services</span></p>
      </div>
    </div>
  </div>

  <!-- Services Introduction -->
  <div class="container">
    <div class="subheading" style="margin-top: 20px;">
      <p>Kami menyediakan berbagai layanan profesional untuk mendukung kebutuhan operasional perusahaan Anda. Kami berkomitmen memberikan solusi tenaga kerja yang <b>andal, efisien,</b> dan <b>berkualitas</b> melalui beragam bidang layanan berikut.</p>
    </div>
  </div>

  <!-- Security Services -->
  <div class="container">
    <div class="service-section" id="security">
      <div class="service-row">
        <div class="service-image">
          <img src="{{ asset('assets/khu_secservice.png') }}" alt="Security Services">
        </div>
        <div class="service-content">
          <h3 class="service-title">Security Services</h3>
          <p class="service-description">KHU Team memiliki tenaga pengamanan terlatih dan berpengalaman, siap memenuhi kebutuhan keamanan Anda. Menyediakan jasa pengamanan untuk kebutuhan pribadi maupun perusahaan dan telah dipercaya oleh berbagai perusahaan terkemuka di Indonesia.</p>
          <div class="service-items">
            <div class="service-item">
              <img src="{{ asset('assets/khu_secicon.png') }}" alt="Security & Risk Assessment">
              Security & Risk Assessment
            </div>
            <div class="service-item">
              <img src="{{ asset('assets/khu_physicon.png') }}" alt="Physical Security System">
              Physical Security System
            </div>
            <div class="service-item">
              <img src="{{ asset('assets/khu_invesicon.png') }}" alt="Investigasi">
              Investigasi
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Housekeeping Services -->
  <div class="container">
    <div class="service-section" id="housekeeping">
      <div class="service-row reverse">
        <div class="service-image">
          <img src="{{ asset('assets/khu_houseservice.png') }}" alt="Housekeeping Services">
        </div>
        <div class="service-content">
          <h3 class="service-title">Housekeeping Services</h3>
          <p class="service-description">KHU Team siap membantu menciptakan lingkungan kerja yang bersih, nyaman, dan efisien melalui layanan perawatan menyeluruh di seluruh area kerja dan sekitarnya demi menjaga kebersihan serta kenyamanan ruang kerja agar menciptakan suasana positif bagi karyawan, tamu, dan klien. Menyediakan layanan lengkap, meliputi:</p>
          <div class="service-items">
            <div class="service-item">
              <img src="{{ asset('assets/khu_genicon.png') }}" alt="General Cleaning">
              General Cleaning
            </div>
            <div class="service-item">
              <img src="{{ asset('assets/khu_cleanicon.png') }}" alt="Cleaning Services">
              Cleaning Services
            </div>
            <div class="service-item">
              <img src="{{ asset('assets/khu_gardicon.png') }}" alt="Gardening / Landscaping">
              Gardening / Landscaping
            </div>
            <div class="service-item">
              <img src="{{ asset('assets/khu_wasteicon.png') }}" alt="Waste Management">
              Waste Management
            </div>
            <div class="service-item">
              <img src="{{ asset('assets/khu_pesticon.png') }}" alt="Pest & Rodent Control">
              Pest & Rodent Control
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Office & Facility Support -->
  <div class="container">
    <div class="service-section" id="office">
      <div class="service-row">
        <div class="service-image">
          <img src="{{ asset('assets/khu_offservice.png') }}" alt="Office & Facility Support">
        </div>
        <div class="service-content">
          <h3 class="service-title">Office & Facility Support</h3>
          <p class="service-description">KHU Team menyediakan tenaga terampil yang siap mendukung kegiatan operasional harian perusahaan Anda, terutama untuk bisnis dengan aktivitas tinggi. Menyediakan layanan <b>Office & Facility Support</b> meliputi:</p>
          <div class="service-items">
            <div class="service-item">
              <img src="{{ asset('assets/khu_officon.png') }}" alt="Office Boy / Girl">
              Office Boy / Girl
            </div>
            <div class="service-item">
              <img src="{{ asset('assets/khu_messicon.png') }}" alt="Messenger">
              Messenger
            </div>
            <div class="service-item">
              <img src="{{ asset('assets/khu_drivericon.png') }}" alt="Driver">
              Driver
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Front Office Services -->
  <div class="container">
    <div class="service-section" id="front">
      <div class="service-row reverse">
        <div class="service-image">
          <img src="{{ asset('assets/khu_frontservice.png') }}" alt="Front Office Services">
        </div>
        <div class="service-content">
          <h3 class="service-title">Front Office Services</h3>
          <p class="service-description">KHU Team berpengalaman dalam menyediakan tenaga profesional untuk posisi front office dan administrasi, guna mendukung kelancaran operasional perusahaan Anda. Menyediakan petugas Front Office meliputi:</p>
          <div class="service-items">
            <div class="service-item">
              <img src="{{ asset('assets/khu_recepicon.png') }}" alt="Receptionist">
              Receptionist
            </div>
            <div class="service-item">
              <img src="{{ asset('assets/khu_custicon.png') }}" alt="Customer Service Officer">
              Customer Service Officer
            </div>
            <div class="service-item">
              <img src="{{ asset('assets/khu_phoneicon.png') }}" alt="Phone Operator">
              Phone Operator
            </div>
            <div class="service-item">
              <img src="{{ asset('assets/khu_infoicon.png') }}" alt="Information Help Desk">
              Information Help Desk
            </div>
            <div class="service-item">
              <img src="{{ asset('assets/khu_dataicon.png') }}" alt="Data Administration">
              Data Administration
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Gallery Section -->
  <div class="container">
    <div class="section-header">
      <h2>Gallery</h2>
    </div>

    <div class="gallery-section">
      <div class="gallery-image">
        <img src="{{ asset('assets/khu_gallery.png') }}" alt="Gallery">
      </div>
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
          <p>Phone : 0813-1146-5499</p>
          <p>Email : simon@kotak-hijau.com</p>
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