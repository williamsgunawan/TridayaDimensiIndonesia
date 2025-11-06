<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Clients - Tridaya Dimensi Indonesia</title>
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

    /* Clients Hero Section */
    .clients-hero {
      background-color: #2C2C2C;
      color: #93D4F0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 200px;
      text-align: center;
    }

    .clients-hero h1 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    .clients-hero p {
      font-size: 18px;
    }

    .clients-hero span {
      color: white;
      text-decoration: underline;
    }

    /* Clients Info Section */
    .clients-info {
      text-align: center;
      color: #144E8F;
      padding: 60px 0 40px;
    }

    .clients-info h1 {
      font-size: 32px;
      margin-bottom: 20px;
      line-height: 1.3;
    }

    .clients-info p {
      font-size: 18px;
      line-height: 1.6;
      max-width: 800px;
      margin: 0 auto;
    }

    /* Clients Logo Section */
    .clients-logo {
      text-align: center;
      padding: 40px 0 60px;
    }

    .clients-logo img {
      max-width: 100%;
      border-radius: 8px;
    }

    /* Footer */
    .footer {
      background-color: #144E8F;
      color: white;
      padding: 60px 0 40px;
      margin-top: 40px;
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

      /* Clients Hero */
      .clients-hero {
        height: 150px;
      }

      .clients-hero h1 {
        font-size: 28px;
      }

      .clients-hero p {
        font-size: 16px;
      }

      /* Clients Info */
      .clients-info {
        padding: 40px 0 30px;
      }

      .clients-info h1 {
        font-size: 26px;
      }

      .clients-info p {
        font-size: 16px;
        padding: 0 10px;
      }

      /* Clients Logo */
      .clients-logo {
        padding: 30px 0 40px;
      }

      /* Footer */
      .footer {
        padding: 40px 0 30px;
      }
      
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
      .clients-hero {
        height: 130px;
      }

      .clients-hero h1 {
        font-size: 24px;
      }

      .clients-hero p {
        font-size: 14px;
      }

      .clients-info h1 {
        font-size: 22px;
      }

      .clients-info p {
        font-size: 15px;
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
            <a href="{{ url('/about') }}" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/our-clients') }}" class="nav-link active">Our Clients</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Clients Hero Section -->
  <div class="clients-hero">
    <div class="container">
      <div>
        <h1>Our Clients</h1>
        <p>Home / <span>Our Clients</span></p>
      </div>
    </div>
  </div>

  <!-- Clients Info Section -->
  <div class="container">
    <div class="clients-info">
      <h1>Bangun Tim Hebat dengan SDM Profesional</h1>
      <p>Dipercaya oleh perusahaan nasional dan multinasional di berbagai industri sebagai bukti komitmen TDI dalam menghadirkan solusi SDM terbaik.</p>
    </div>
  </div>

  <!-- Clients Logo Section -->
  <div class="container">
    <div class="clients-logo">
      <img src="{{ asset('assets/clients.png') }}" alt="Our Clients Logos">
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