<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: arial;
    }

    .logo {
        width: 30vw;
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
        padding: 0 1vw;
    }
    
    .navbar-brand {
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
        margin-left: 2vw;
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

    .bg {
        position: relative;
    }

    .bg img {
        width: 100%;
    }

    .bg-title {
        color: white;
        position: absolute;
        top: 14vw;
        left: 6vw;
        border-left: 0.3vw solid white;
        padding-left: 1vw;
        font-size: 3.7vw;
        padding-top: 1vw;
    }

    .bg-title h1 {
        margin: 0;
    }

    .line-with-text {
        display: flex;
        align-items: center;
        text-align: center;
        width: 100%;
        margin: 5vw 0;
        color: #780001;
    }

    .line-with-text::before,
    .line-with-text::after {
        content: '';
        flex: 1;
        border-bottom: 2px solid #780001;
        margin: 0 2vw;
    } 

    .line-with-text span {
        padding: 0 2vw;
        font-size: 4vw;
        font-weight: bold;
        background-color: white;
        font-family: sans-serif;
    } 

    .recruitment-text {
        text-align: center;
        font-size: 1.8vw;
    }
    
    .recruitment-text img {
        width: 86%;
    }

    .footer {
        margin-top: 10vw;
        background-color: #780001;
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
        font-size: 1.2vw;
        margin: 0.4vw 0;
    } 

    .tdi-footer {
        margin-right: 13vw;
    }
  </style>
</head>
<body>
  <div class="navbar-container">
    <nav class="navbar">
        <a href="{{ url('/indodaya') }}" class="navbar-brand">
            <div class="logo-container">
                <img src="{{ asset('assets/iat_logo.png') }}" class="logo" alt="logo">
            </div>
        </a>
        
        <ul class="navbar-nav" id="navbarNav">
            <li class="nav-item">
                <a href="{{ url('/indodaya') }}" class="nav-link {{ request()->is('indodaya') ? 'active' : '' }}">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/indodaya/services') }}" class="nav-link {{ request()->is('indodaya/services') ? 'active' : '' }}">Services</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/indodaya/career') }}" class="nav-link {{ request()->is('indodaya/career') ? 'active' : '' }}">Career</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/indodaya/contactus') }}" class="nav-link {{ request()->is('indodaya/contactus') ? 'active' : '' }}">Contact Us</a>
            </li>
        </ul>
    </nav>
  </div>

  <div class="bg">
    <img src="{{ asset('assets/iat_careerbg.png') }}">
    <div class="bg-title">
      <h1>Career</h1>
    </div>
  </div>

  <div class="line-with-text">
    <span>5 Recruitment Process</span>
  </div>

  <div class="recruitment-text">
    <p>Kami menerapkan 5 Steps Recruitment Process secara profesional sesuai SOP untuk memastikan
        <br>
        The Right Person for The Right Job.
    </p>
    <img src="{{ asset('assets/iat_recruitprocess.png') }}">
  </div>

  <div class="line-with-text" style="margin-top: 10vw;">
    <span>The Principles of Recruitment</span>
  </div>

  <div style="text-align: center;">
    <img src="{{ asset('assets/iat_principlecircle.png') }}" style="margin-bottom: 7vw; width: 60%">
    <img src="{{ asset('assets/iat_principlesnake.png') }}" style="width: 80%;">
  </div>

  <div class="footer"> 
    <div class="tdi-footer">
        <h1>Indodaya Alihtama</h1>
        <p>Graha Enka Deli, Jl. Buncit Raya</p>
        <p>No.12 12, RT.12/RW.12, Kalibata,</p>
        <p>Kec. Pancoran, KOta Jakarta Selatan,</p>
        <p>Daerah Khusus Ibukota Jakarta</p>
        <p>12740</p>
    </div>
    <div class="perusahaan">
        <h1>Perusahaan</h1>
        <p>Tentang Kami</p>
        <p>BursaKarir</p>
        <p>Alihdaya Digital</p>
    </div>
    <div class="contact-details">
        <h1>Contact Details</h1>
        <p>Phone : (021) 27534773</p>
        <p>Email : simon@indodaya-alihtama.com</p>
    </div>
  </div>
</body>