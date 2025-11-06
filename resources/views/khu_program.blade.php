<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Program - Kotak Hijau Utama</title>
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
    .program-hero {
      background-color: #00733E;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 200px;
      text-align: center;
    }

    .program-hero h1 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    .program-hero p {
      font-size: 18px;
    }

    .program-hero span {
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

    /* Support Rows */
    .support-section {
      margin: 60px 0;
    }

    .support-row {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 50px;
      margin-bottom: 80px;
      padding: 0 20px;
    }
    
    .support-row.reverse {
      flex-direction: row-reverse;
    }
    
    .support-image {
      flex: 1;
      max-width: 400px;
    }
    
    .support-text {
      flex: 1;
      max-width: 600px;
    }
    
    .support-text h3 {
      font-size: 32px;
      color: #008B4B;
      margin-bottom: 20px;
      line-height: 1.3;
    }
    
    .support-text p {
      font-size: 18px;
      line-height: 1.7;
    }

    /* Recruitment Process */
    .recruitment-section {
      margin: 60px 0;
    }

    .recruitment-image {
      text-align: center;
      margin: 40px 0;
    }
    
    .recruitment-image img {
      max-width: 100%;
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
      .program-hero {
        height: 150px;
      }

      .program-hero h1 {
        font-size: 28px;
      }

      .program-hero p {
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

      /* Support Rows */
      .support-section {
        margin: 40px 0;
      }

      .support-row {
        flex-direction: column;
        gap: 30px;
        margin-bottom: 60px;
        padding: 0 15px;
      }
      
      .support-row.reverse {
        flex-direction: column;
      }
      
      .support-image {
        max-width: 100%;
      }
      
      .support-text h3 {
        font-size: 24px;
        text-align: center;
      }
      
      .support-text p {
        font-size: 16px;
        text-align: center;
      }

      /* Recruitment Section */
      .recruitment-section {
        margin: 40px 0;
      }

      .recruitment-image {
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
      .program-hero {
        height: 130px;
      }

      .program-hero h1 {
        font-size: 24px;
      }

      .program-hero p {
        font-size: 14px;
      }

      .section-header h2 {
        font-size: 24px;
      }

      .subheading {
        font-size: 14px;
      }

      .support-text h3 {
        font-size: 20px;
      }

      .support-text p {
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
            <a href="{{ url('/kotakhijauutama') }}" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/kotakhijauutama/program') }}" class="nav-link active">Program</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/kotakhijauutama/services') }}" class="nav-link">Services</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Program Hero Section -->
  <div class="program-hero">
    <div class="container">
      <div>
        <h1>Program</h1>
        <p><span>Home /</span> <span style="text-decoration: underline;">Program</span></p>
      </div>
    </div>
  </div>

  <!-- Maintenance Section -->
  <div class="container">
    <div class="section-header">
      <h2>Maintenance</h2>
    </div>

    <div class="subheading">
      <p>Untuk menjaga pelayanan terbaik dan hubungan yang solid antara KHU, klien, dan karyawan, kami memiliki berbagai program pendukung berikut:</p>
    </div>

    <div class="support-section">
      <!-- Relation Officer -->
      <div class="support-row">
        <div class="support-image">
          <img src="{{ asset('assets/iat_01.png') }}" alt="Relation Officer">
        </div>
        <div class="support-text">
          <h3>Relation Officer</h3>
          <p>Karyawan <b>PT Kotak Hijau Utama (KHU)</b> berperan sebagai <b>mediator</b> antara <b>user</b> dan <b>karyawan outsourcing</b>, memastikan kebutuhan terkait evaluasi kinerja terpenuhi dengan baik. Dengan komunikasi yang efektif dan pendekatan solutif, tim KHU menjaga agar <b>kerja sama antara kedua pihak</b> berjalan harmonis, produktif, dan berkelanjutan.</p>
        </div>
      </div>

      <!-- Administrasi -->
      <div class="support-row reverse">
        <div class="support-image">
          <img src="{{ asset('assets/iat_02.png') }}" alt="Administrasi">
        </div>
        <div class="support-text">
          <h3>Administrasi</h3>
          <p>Berfungsi untuk <b>mengadministrasikan seluruh data ketenagakerjaan</b>, meliputi <b>daftar kehadiran atau absensi, pengajuan cuti, data entry, rekapitulasi kinerja harian</b>, serta <b>penyusunan laporan terkait tunjangan dasar.</b> Seluruh proses ini dilakukan secara terstruktur guna memastikan pengelolaan tenaga kerja berjalan <b>efisien, akurat,</b> dan <b>sesuai dengan ketentuan perusahaan.</b></p>
        </div>
      </div>

      <!-- Training bagi Karyawan -->
      <div class="support-row">
        <div class="support-image">
          <img src="{{ asset('assets/iat_03.png') }}" alt="Training bagi Karyawan">
        </div>
        <div class="support-text">
          <h3>Training bagi Karyawan</h3>
          <p>Training yang difasilitasi oleh PT Kotak Hijau Utama berfokus pada pengembangan <b>soft skill</b> yang berperan penting dalam peningkatan kinerja individu maupun tim. Program pelatihan kami mencakup berbagai topik seperti <b>selling and motivation skill, positive mental attitude, teamwork, leadership,</b> dan <b>communication skill.</b></p>
        </div>
      </div>

      <!-- Reward dan Retention bagi Karyawan -->
      <div class="support-row reverse">
        <div class="support-image">
          <img src="{{ asset('assets/iat_04.png') }}" alt="Reward dan Retention bagi Karyawan">
        </div>
        <div class="support-text">
          <h3>Reward dan Retention bagi Karyawan</h3>
          <p><b>PT Kotak Hijau Utama (KHU)</b> juga memiliki <b>program apresiasi karyawan berprestasi,</b> yang disesuaikan dengan <b>kesepakatan bersama klien</b> sebagai bentuk penghargaan atas kinerja dan dedikasi mereka. Selain itu, kami secara rutin menyelenggarakan kegiatan <b>gathering, team building,</b> dan <b>outing</b> untuk mempererat kebersamaan, meningkatkan motivasi kerja, serta menciptakan lingkungan kerja yang positif dan harmonis.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Recruitment Process Section -->
  <div class="container">
    <div class="section-header">
      <h2>5 Recruitment Process</h2>
    </div>

    <div class="subheading">
      <p>Kami menerapkan 5 Steps Recruitment Process secara profesional sesuai SOP untuk memastikan The Right Person for The Right Job.</p>
    </div>

    <div class="recruitment-section">
      <div class="recruitment-image">
        <img src="{{ asset('assets/khu_process.png') }}" alt="5 Recruitment Process">
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