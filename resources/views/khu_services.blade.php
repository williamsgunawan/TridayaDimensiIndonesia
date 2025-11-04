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
        width: 7vw;
        margin-right: 1vw;
    }

    .logo-container {
      display: flex;
      justify-content: center;
      align-items: center;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    }

    /* Navbar Styles */
    .navbar-container {
        background-color: #F9F5F6;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    
    .navbar {
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-right: 2vw;
    }
    
    .navbar-brand {
        font-size: 2vw;
        font-weight: bold;
        color: #008B4B;
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
        font-size: 1.3vw;
        font-weight: bold;
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
        background-color: #008B4B;
    }
    

    /* @media (max-width: 768px) {
        .navbar {
            flex-wrap: wrap;
        }
        
        .navbar-toggle {
            display: block;
        }
        
        .navbar-nav {
            display: none;
            width: 100%;
            flex-direction: column;
            margin-top: 15px;
        }
        
        .navbar-nav.show {
            display: flex;
        }
        
        .nav-item {
            margin: 10px 0;
            margin-left: 0;
        }
        
    } */

    /* Existing Styles */
    .about-bg {
        background-color: #00733E;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 13vw;
    }

    .about-bg-inner {
        text-align: center;
    }

    .about-bg h1 {
        font-size: 4vw;
        margin: 0;
    }

    .about-bg p {
        font-size: 1.3vw;
        margin: 0;
    }

    .line-with-text {
        display: flex;
        align-items: center;
        text-align: center;
        width: 100%;
        margin: 5vw 0;
        color: #008B4B;
    }

    .line-with-text::before,
    .line-with-text::after {
        content: '';
        flex: 1;
        border-bottom: 0.5vw solid #008B4B;
        margin: 0 2vw;
    } 

    .line-with-text span {
        padding: 0 2vw;
        font-size: 4vw;
        font-weight: bold;
        background-color: white;
        font-family: sans-serif;
    } 

    .subheading {
        text-align: center;
        font-size: 1.5vw;
    }

    .two-columns {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        margin: auto;
        padding: 2vw 6vw;

    }

    .text-column {
        line-height: 1.6;
    }

    .text-column h1 {
        font-size: 3vw;
        color: #017942;
        border-left: 0.5vw solid #017942; 
        padding-left: 1vw;
    }

    .text-column p {
        font-size: 1.2vw;
        margin-top: 0;
    }

    .image-column img {
      height: 29vw;
    }

    .service-item {
        display: flex;
        align-items: center;
        font-weight: bold;
        font-size: 1.3vw;
    }

    .service-item img {
        width: 4vw;
        margin-right: 1vw;
    }

    .footer {
        margin-top: 10vw;
        background-color: #00733E;
        height: 13vw;
        color: white;
        display: flex;
        justify-content: space-between;
        padding: 4vw;
    } 
    
    .footer h1 {
        font-size: 2vw;
    } 

    .footer p {
        font-size: 1.2vw;
        margin: 1vw 0;
    } 

    .tdi-footer {
        margin-right: 13vw;
    }
  </style>
</head>
<body>
  <div class="navbar-container">
    <nav class="navbar">
        <a href="{{ url('/kotakhijauutama') }}" class="navbar-brand">
            <div class="logo-container">
                <img src="{{ asset('assets/khu_logo.png') }}" class="logo" alt="logo">
                PT. KOTAK HIJAU UTAMA
            </div>
        </a>

        <ul class="navbar-nav" id="navbarNav">
            <li class="nav-item">
                <a href="{{ url('/kotakhijauutama') }}" class="nav-link {{ request()->is('kotakhijauutama') ? 'active' : '' }}">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/kotakhijauutama/program') }}" class="nav-link {{ request()->is('kotakhijauutama/program') ? 'active' : '' }}">Program</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/kotakhijauutama/services') }}" class="nav-link {{ request()->is('kotakhijauutama/services') ? 'active' : '' }}">Services</a>
            </li>
        </ul>
    </nav>
  </div>

  <div class="about-bg">
    <div class="about-bg-inner">
        <h1>Services</h1>
        <p style="margin-top: 0.5vw;"><span style="color: #5AB685;">Home /</span> <span style="text-decoration: underline;">Services</span></p>
    </div>
  </div>

  <p class="subheading" style="margin-top: 5vw;">
    Kami menyediakan berbagai layanan profesional untuk mendukung kebutuhan operasional perusahaan Anda.<br>
    Kami berkomitmen memberikan solusi tenaga kerja yang <b>andal, efisien,</b> dan <b>berkualitas</b> melalui beragam bidang layanan berikut.
  </p>

  
    <div class="two-columns" id="security">
        <div class="image-column"><img src="{{ asset('assets/khu_secservice.png') }}" alt="background Image"></div>
        <div class="text-column" style="margin-left: -5vw;">
            <h1>Security Services</h1>
            <p>KHU Team memiliki tenaga pengamanan terlatih dan berpengalaman, siap memenuhi kebutuhan keamanan Anda. <br>
                Menyediakan jasa pengamanan untuk kebutuhan pribadi maupun perusahaan dan telah dipercaya oleh berbagai perusahaan terkemuka di Indonesia.
            </p>
            <div class="service-item">
                <img src="{{ asset('assets/khu_secicon.png') }}">
                Security & Risk Assessment
            </div>
            <div class="service-item">
                <img src="{{ asset('assets/khu_physicon.png') }}">
                Physical Security System
            </div>
            <div class="service-item">
                <img src="{{ asset('assets/khu_invesicon.png') }}">
                Investigasi
            </div>
        </div>
    </div>

    <div class="two-columns" id="housekeeping">
        <div class="text-column" style="margin-right: -11vw;">
            <h1>Housekeeping Services</h1>
            <p>KHU Team siap membantu menciptakan lingkungan kerja yang bersih, nyaman, dan efisien melalui layanan perawatan menyeluruh di seluruh area kerja
                dan sekitarnya demi menjaga kebersihan serta kenyamanan ruang kerja agar menciptakan suasana positif bagi karyawan, tamu, dan klien.
                <br>Menyediakan layanan lengkap, meliputi:
            </p>
            <div class="service-item">
                <img src="{{ asset('assets/khu_genicon.png') }}">
                General Cleaning
            </div>
            <div class="service-item">
                <img src="{{ asset('assets/khu_cleanicon.png') }}">
                Cleaning Services
            </div>
            <div class="service-item">
                <img src="{{ asset('assets/khu_gardicon.png') }}">
                Gardening / Landscaping
            </div>
            <div class="service-item">
                <img src="{{ asset('assets/khu_wasteicon.png') }}">
                Waste Management
            </div>
            <div class="service-item">
                <img src="{{ asset('assets/khu_pesticon.png') }}">
                Pest & Rodent Control
            </div>
        </div>
        <div class="image-column"><img src="{{ asset('assets/khu_houseservice.png') }}" alt="background Image"></div>
    </div>

    <div class="two-columns" id="office">
        <div class="image-column"><img src="{{ asset('assets/khu_offservice.png') }}" alt="background Image"></div>
        <div class="text-column" style="margin-left: -24vw;">
            <h1>Office & Facility Support</h1>
            <p>KHU Team menyediakan tenaga terampil yang siap mendukung kegiatan operasional harian perusahaan Anda, terutama untuk bisnis dengan aktivitas tinggi.
                <br>Menyediakan layanan <b>Office & Facility Support</b> meliputi:
            </p>
            <div class="service-item">
                <img src="{{ asset('assets/khu_officon.png') }}">
                Office Boy / Girl
            </div>
            <div class="service-item">
                <img src="{{ asset('assets/khu_messicon.png') }}">
                Messenger
            </div>
            <div class="service-item">
                <img src="{{ asset('assets/khu_drivericon.png') }}">
                Driver
            </div>
        </div>
    </div>

    <div class="two-columns" id="front">
        <div class="text-column" style="margin-right: -11vw;">
            <h1>Front Office Services</h1>
            <p>KHU Team berpengalaman dalam menyediakan tenaga profesional untuk posisi front office dan administrasi, guna mendukung kelancaran operasional perusahaan Anda.
                <br>Menyediakan petugas Front Office meliputi:
            </p>
            <div class="service-item">
                <img src="{{ asset('assets/khu_recepicon.png') }}">
                Receptionist
            </div>
            <div class="service-item">
                <img src="{{ asset('assets/khu_custicon.png') }}">
                Customer Service Officer
            </div>
            <div class="service-item">
                <img src="{{ asset('assets/khu_phoneicon.png') }}">
                Phone Operator
            </div>
            <div class="service-item">
                <img src="{{ asset('assets/khu_infoicon.png') }}">
                Information Help Desk
            </div>
            <div class="service-item">
                <img src="{{ asset('assets/khu_dataicon.png') }}">
                Data Administration
            </div>
        </div>
        <div class="image-column"><img src="{{ asset('assets/khu_frontservice.png') }}" alt="background Image"></div>
    </div>
    
    
  <div class="line-with-text" style="margin-top: 10vw;">
    <span>Gallery</span>
  </div>

  <div style="text-align: center">
    <img src="{{ asset('assets/khu_gallery.png') }}" style="width: 85vw;"/>
  </div>

  
  <div class="footer"> 
    <div class="tdi-footer">
        <h1>Kotak Hijau Utama</h1>
        <p>Graha Enka Deli, Jl. Buncit Raya</p>
        <p>No.12 12, RT.12/RW.12, Kalibata,</p>
        <p>Kec. Pancoran, KOta Jakarta Selatan,</p>
        <p>Daerah Khusus Ibukota Jakarta</p>
        <p>12740</p>
    </div>
    <div class="perusahaan">
        <h1>Perusahaan</h1>
        <p>Tridaya Dimensi Indonesia</p>
        <p>Indodaya Alihtama</p>
        <p>BursaKarir</p>
    </div>
    <div class="contact-details">
        <h1>Contact Details</h1>
        <p>Phone : 0813-1146-5499</p>
        <p>Email : simon@kotak-hijau.com</p>
    </div>
  </div>
</body>