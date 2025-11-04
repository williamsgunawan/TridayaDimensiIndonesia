<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    .logo {
      width: 5vw;
      margin-right: 1vw;
    }

    .logo-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Navbar Styles */
    .navbar-container {
        background-color: #ffffff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    
    .navbar {
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.8vw 1vw;
    }
    
    .navbar-brand {
        font-size: 2vw;
        font-weight: bold;
        color: #2c3e50;
        text-decoration: none;
    }
    
    .navbar-nav {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .nav-item {
        margin-left: 1.5vw;
        display: flex;
        align-items: center;
    }
    
    .nav-link {
        text-decoration: none;
        color: #555;
        font-size: 1.2vw;
        font-weight: 500;
        padding: 0.7vw 1vw;
        transition: all 0.3s;
        position: relative;
    }
    
    .nav-link:hover {
        color: #3498db;
    }
    
    .nav-link.active {
        color: #2c3e50;
        font-weight: 600;
    }
    
    .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 0.2vw;
        background-color: #3498db;
    }

    .clients-bg {
        background-color: #2C2C2C;
        color: #93D4F0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 13vw;
    }

    .clients-bg-inner {
        text-align: center;
    }

    .clients-bg h1 {
        font-size: 4vw;
        margin: 0;
    }

    .clients-bg p {
        font-size: 1.3vw;
        margin: 0;
    }

    .clients-info {
        text-align: center;
        color: #144E8F;
    }

    .clients-info h1 {
        font-size: 2.5vw;
    }

    .clients-info p {
        font-size: 1.2vw;
    }

    .footer {
        margin-top: 10vw;
        background-color: #144E8F;
        height: 13vw;
        color: white;
        display: flex;
        justify-content: space-between;
        font-family: sans-serif;
        padding: 4vw;
    } 
    
    .footer h1 {
        font-size: 2vw;
    } 

    .footer p {
        margin: 0.4vw 0;
        font-size: 1.2vw;
    } 

    .tdi-footer {
        margin-right: 13vw;
    } 

  </style>
</head>
<body>
  <!-- Navbar -->
  <div class="navbar-container">
    <nav class="navbar">
      <a href="{{ url('/') }}" class="navbar-brand">
        <div class="logo-container">
          <img src="{{ asset('assets/logo.png') }}" class="logo" alt="logo">
          Tridaya Dimensi Indonesia
        </div>
        <!-- <span><img src="{{ asset('assets/logo.png') }}" class="logo" alt="logo"></span>Tridaya Dimensi Indonesia -->
      </a>

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

  <div class="clients-bg">
    <div class="clients-bg-inner">
      <h1>Our Clients</h1>
      <p>Home / <span style="color: white; text-decoration: underline">Our Clients</span></p>
    </div>
  </div>

  <div class="clients-info" style="text-align: center;">
    <h1>Bangun Tim Hebat dengan SDM Profesional</h1>
    <p>Dipercaya oleh perusahaan nasional dan multinasional di berbagai industri sebagai bukti<br>
        komitmen TDI dalam menghadirkan solusi SDM terbaik.</p>
  </div>

  <div style="text-align: center; margin-top: 7vw;"><img style="width: 90vw;" src="{{ asset('assets/clients.png') }}" alt="clients Image"></div>

  <div class="footer"> 
    <div class="tdi-footer">
        <h1>Tridaya Dimensi Indonesia</h1>
        <p>Graha Enka Deli, Jl. Buncit Raya</p>
        <p>No.12 12, RT.12/RW.12, Kalibata,</p>
        <p>Kec. Pancoran, KOta Jakarta Selatan,</p>
        <p>Daerah Khusus Ibukota Jakarta</p>
        <p>12740</p>
    </div>
    <div class="contact-details">
        <h1>Contact Details</h1>
        <p>Phone : (021) 7919 8909</p>
        <p>Fax : (021) 798 5408</p>
        <p>Email : yadi@tridaya-dimensi.com</p>
    </div>
    <div class="perusahaan">
        <h1>Perusahaan</h1>
        <p>Tentang Kami</p>
        <p>BursaKarir</p>
        <p>Alihdaya Digital</p>
    </div>
    <div class="social-media">
        <h1>Social Media</h1>
        <p>Instagram</p>
        <p>Facebook</p>
    </div>
  </div>
</body>