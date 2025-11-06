<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Career - Indodaya Alihtama</title>
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

    /* Recruitment Text */
    .recruitment-text {
      text-align: center;
      font-size: 18px;
      margin-bottom: 50px;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
      padding: 0 20px;
    }

    .recruitment-image {
      text-align: center;
      margin: 40px 0;
    }
    
    .recruitment-image img {
      max-width: 100%;
    }

    /* Principles Section */
    .principles-section {
      text-align: center;
      margin: 60px 0;
    }
    
    .principles-circle {
      margin-bottom: 60px;
    }
    
    .principles-circle img {
      max-width: 100%;
    }
    
    .principles-snake img {
      max-width: 100%;
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

      /* Recruitment Text */
      .recruitment-text {
        font-size: 16px;
        margin-bottom: 40px;
        padding: 0 15px;
      }

      .recruitment-image {
        margin: 30px 0;
      }

      /* Principles Section */
      .principles-section {
        margin: 40px 0;
      }
      
      .principles-circle {
        margin-bottom: 40px;
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

      .recruitment-text {
        font-size: 14px;
      }

      .principles-circle img {
        max-width: 90%;
      }
      
      .principles-snake img {
        max-width: 95%;
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
            <a href="{{ url('/indodaya') }}" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/indodaya/services') }}" class="nav-link">Services</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/indodaya/career') }}" class="nav-link active">Career</a>
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
    <img src="{{ asset('assets/iat_careerbg.png') }}" alt="Career Background" class="hero-bg">
    <div class="hero-title">
      <h1>Career</h1>
    </div>
  </div>

  <!-- Recruitment Process Section -->
  <div class="container">
    <div class="section-header">
      <h2>5 Recruitment Process</h2>
    </div>

    <div class="recruitment-text">
      <p>Kami menerapkan 5 Steps Recruitment Process secara profesional sesuai SOP untuk memastikan The Right Person for The Right Job.</p>
    </div>

    <div class="recruitment-image">
      <img src="{{ asset('assets/iat_recruitprocess.png') }}" alt="Recruitment Process">
    </div>
  </div>

  <!-- Principles Section -->
  <div class="container">
    <div class="section-header">
      <h2>The Principles of Recruitment</h2>
    </div>

    <div class="principles-section">
      <div class="principles-circle">
        <img src="{{ asset('assets/iat_principlecircle.png') }}" alt="Recruitment Principles Circle">
      </div>
      <div class="principles-snake">
        <img src="{{ asset('assets/iat_principlesnake.png') }}" alt="Recruitment Principles Snake">
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
          <p>Phone : +62 888-8387-551</p>
          <p>Email : marketing@indodaya-alihtama.id</p>
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