<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services - Indodaya Alihtama</title>
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

    /* Navbar - Updated to match homepage */
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
      height: 50vh;
      min-height: 400px;
      overflow: hidden;
    }
    
    .hero-bg {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .hero-title {
      color: white;
      position: absolute;
      top: 50%;
      left: 6%;
      transform: translateY(-50%);
      border-left: 4px solid white;
      padding-left: 20px;
      font-size: 48px;
    }
    
    .hero-title h1 {
      margin: 0;
      font-size: 48px;
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

    /* Maintenance Text */
    .maintenance-text {
      text-align: center;
      font-size: 18px;
      margin-bottom: 50px;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
      padding: 0 20px;
    }

    /* Support Rows */
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
    
    .support-text h2 {
      font-size: 32px;
      color: #780001;
      margin-bottom: 20px;
      line-height: 1.3;
    }
    
    .support-text p {
      font-size: 18px;
      line-height: 1.7;
    }

    /* Business Program */
    .business-program {
      text-align: center;
      margin: 60px 0;
    }

    /* Service Experience */
    .service-section {
      margin: 60px 0;
    }
    
    .service-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 30px;
      padding: 0 20px;
      margin-bottom: 40px;
    }
    
    .service-item {
      text-align: left;
    }
    
    .service-item h3 {
      font-size: 48px;
      color: #780001;
      margin-bottom: 10px;
    }
    
    .service-item h4 {
      font-size: 24px;
      color: #780001;
      margin-bottom: 15px;
    }
    
    .service-item p {
      font-size: 16px;
      line-height: 1.6;
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
      
      /* Mobile Navbar - Updated to match homepage */
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
        height: 40vh;
        min-height: 300px;
      }
      
      .hero-title {
        left: 5%;
        padding-left: 15px;
        border-left-width: 3px;
      }
      
      .hero-title h1 {
        font-size: 32px;
      }

      /* Section Header */
      .section-header {
        margin: 40px 0 30px;
      }
      
      .section-header h2 {
        font-size: 28px;
        padding: 0 20px;
      }

      /* Maintenance Text */
      .maintenance-text {
        font-size: 16px;
        margin-bottom: 40px;
        padding: 0 15px;
      }

      /* Support Rows */
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
      
      .support-text h2 {
        font-size: 24px;
        text-align: center;
      }
      
      .support-text p {
        font-size: 16px;
        text-align: center;
      }

      /* Service Grid */
      .service-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        padding: 0 15px;
      }
      
      .service-item h3 {
        font-size: 36px;
      }
      
      .service-item h4 {
        font-size: 20px;
      }
      
      .service-item p {
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
        height: 30vh;
        min-height: 250px;
      }
      
      .hero-title h1 {
        font-size: 24px;
      }

      .section-header h2 {
        font-size: 24px;
      }

      .maintenance-text {
        font-size: 14px;
      }

      .support-text h2 {
        font-size: 20px;
      }

      .support-text p {
        font-size: 14px;
      }

      .service-grid {
        grid-template-columns: 1fr;
      }
      
      .service-item h3 {
        font-size: 32px;
      }
      
      .service-item h4 {
        font-size: 18px;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar - Updated to match homepage -->
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
            <a href="{{ url('/indodaya') }}" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/indodaya/services') }}" class="nav-link active">Services</a>
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
    <img src="{{ asset('assets/iat_servicesbg.png') }}" alt="Services Background" class="hero-bg">
    <div class="hero-title">
      <h1>Our Services</h1>
    </div>
  </div>

  <!-- Maintenance & Employee Support Section -->
  <div class="container">
    <div class="section-header">
      <h2>Maintenance & Employee Support</h2>
    </div>

    <div class="maintenance-text">
      <p>Kami memastikan komunikasi antara klien, karyawan, dan tim Indodaya tetap berjalan efektif melalui program berikut:</p>
    </div>

    <!-- Support Rows -->
    <div class="support-row">
      <div class="support-image">
        <img src="{{ asset('assets/iat_01.png') }}" alt="Relation Officer">
      </div>
      <div class="support-text">
        <h2>Relation Officer</h2>
        <p>Tim kami memiliki kemampuan dan dedikasi tinggi sebagai mediator antara karyawan dan user. Relation Officer berperan dalam pemenuhan kebutuhan tenaga kerja sesuai permintaan client, melakukan evaluasi kinerja, serta menjadi koordinator lapangan agar komunikasi dan kerja sama antara pihak terkait berjalan efektif dan harmonis.</p>
      </div>
    </div>

    <div class="support-row reverse">
      <div class="support-image">
        <img src="{{ asset('assets/iat_02.png') }}" alt="Cepat dan Tata Tertib Administrasi">
      </div>
      <div class="support-text">
        <h2>Cepat dan Tata Tertib Administrasi</h2>
        <p>Kami menjalankan fungsi administrasi dengan profesional, mulai dari pengelolaan absensi dan cuti, penerbitan slip gaji tepat waktu, hingga pengurusan BPJS Kesehatan dan Ketenagakerjaan. Setiap proses dilakukan secara tertib dan akurat untuk memastikan semua urusan administrasi karyawan berjalan lancar.</p>
      </div>
    </div>

    <div class="support-row">
      <div class="support-image">
        <img src="{{ asset('assets/iat_03.png') }}" alt="Training bagi Karyawan">
      </div>
      <div class="support-text">
        <h2>Training bagi Karyawan</h2>
        <p>Kami menyediakan berbagai program pelatihan yang dirancang untuk meningkatkan kompetensi karyawan. Program ini meliputi pengembangan soft skill seperti komunikasi, motivasi kerja, dan pembentukan karakter, sehingga karyawan dapat tumbuh secara profesional dan personal di lingkungan kerja.</p>
      </div>
    </div>

    <div class="support-row reverse">
      <div class="support-image">
        <img src="{{ asset('assets/iat_04.png') }}" alt="Reward dan Retention bagi Karyawan">
      </div>
      <div class="support-text">
        <h2>Reward dan Retention bagi Karyawan</h2>
        <p>Kami memiliki program apresiasi bagi karyawan berprestasi melalui pemberian reward sesuai kesepakatan dengan client. Selain itu, terdapat kegiatan seperti gathering, team building, dan outing yang diselenggarakan untuk mempererat hubungan tim serta mendukung kenyamanan dan loyalitas kerja.</p>
      </div>
    </div>
  </div>

  <!-- Business Program Section -->
  <div class="section-header">
    <h2>Business Program</h2>
  </div>

  <div class="container">
    <div class="business-program">
      <img src="{{ asset('assets/iat_business.png') }}" alt="Business Program">
    </div>
  </div>

  <!-- Service Experience Section -->
  <div class="section-header">
    <h2>Service Experience</h2>
  </div>

  <div class="container">
    <div class="service-section">
      <div class="service-grid">
        <div class="service-item">
          <h3>01/</h3>
          <h4>Retail</h4>
          <p>
            Sales Executive<br>
            Sales Counter<br>
            Sales Exhibition<br>
            Direct Sales<br>
            Merchandiser<br>
            Sales Promotion<br>
            Team Leader<br>
            Telemarketing<br>
            Sales Advisor<br>
            Marketing<br>
            Executive
          </p>
        </div>
        <div class="service-item">
          <h3>02/</h3>
          <h4>Banking</h4>
          <p>
            Teller<br>
            CRO<br>
            Account Officer<br>
            Account<br>
            Executive<br>
            CSO<br>
            Desk Collection<br>
            Telemarketing<br>
            ASM<br>
            Finance<br>
            Controller
          </p>
        </div>
        <div class="service-item">
          <h3>03/</h3>
          <h4>Logistic</h4>
          <p>
            Checker<br>
            Picker<br>
            Helper<br>
            Operator Forklift<br>
            Driver Logistic<br>
            Admin Logistic<br>
            Data Record<br>
            Team Leader<br>
            Coordinator<br>
            Gardener
          </p>
        </div>
        <div class="service-item">
          <h3>04/</h3>
          <h4>General</h4>
          <p>
            Admin<br>
            Data Entry<br>
            Receptionist<br>
            Call Center<br>
            Customer Service<br>
            Office Boy<br>
            Office Girl<br>
            IT Support<br>
            Ticketing<br>
            Kasir
          </p>
        </div>
      </div>

      <div class="service-grid">
        <div class="service-item">
          <h3>05/</h3>
          <h4>F&B</h4>
          <p>
            Waiter<br>
            Runner<br>
            Barista<br>
            Cook<br>
            Cook Helper<br>
            Steward
          </p>
        </div>
        <div class="service-item">
          <h3>06/</h3>
          <h4>Hospitality & Healthcare</h4>
          <p>
            Call Center<br>
            Asisten<br>
            Apoteker<br>
            Juru Racik<br>
            Housekeeping<br>
            Front Office<br>
            Room Attendant
          </p>
        </div>
        <div class="service-item">
          <h3>07/</h3>
          <h4>Telecommunication & Advertising</h4>
          <p>
            Account Executive<br>
            Junior Programmer<br>
            Sales Support<br>
            Junior Data Analyst<br>
            Project Management<br>
            Recruitment Officer<br>
            Officer
          </p>
        </div>
      </div>
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