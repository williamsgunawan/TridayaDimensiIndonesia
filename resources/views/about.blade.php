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

    /* Existing Styles */
    .about-bg {
        background-color: #2C2C2C;
        color: #93D4F0;
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

    .two-columns {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        gap: 6vw;
        max-width: 80%;
        padding: 1vw 0;
        margin: auto;
    }

    .text-column {
      flex: 1;
      font-family: Arial, sans-serif;
      line-height: 1.6;
    }

    .text-column h2 {
        font-size: 2vw;
        color: #93D4F0;
    }

    .text-column h1 {
        color: #144E8F;
        font-size: 2.5vw;
    }

    .text-column h3 {
        color: #144E8F;
        margin: 0;
        font-size: 1.5vw;
    }

    .text-column p {
        margin-top: 0;
        font-size: 1.3vw;
    }

    .image-column {
      flex: 1;
    }

    .image-column img {
      width: 100%;
      height: auto;
    }

    .line-with-text {
        display: flex;
        align-items: center;
        text-align: center;
        width: 100%;
        margin: 5vw 0;
        color: #144E8F
    }

    .line-with-text::before,
    .line-with-text::after {
        content: '';
        flex: 1;
        border-bottom: 2px solid #144E8F;
        margin: 0 2vw;
    } 

    .line-with-text span {
        padding: 0 2vw;
        font-size: 4vw;
        font-weight: bold;
        background-color: white;
    } 

    .map {
        text-align: center;
    }

    .sumatra {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        gap: 1vw;
        padding: 0 21vw;
        font-size: 1.3vw;
    }

    .pic-item {
        background-color: #144E8F;
        color: white;
        font-weight: bold;
        padding: 0.5vw 1vw;
        border-radius: 0.4vw;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    .jawa {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        padding: 0 27vw;
        gap: 1vw;
        font-size: 1.3vw;
    }

    .kali-sula {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        gap: 6vw;
        max-width: 44vw;
        margin: auto;
        font-size: 1.3vw;
    }

    .kalimantan {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        padding: 0;
        gap: 1vw;
    }

    .sulawesi {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        padding: 0;
        gap: 1vw;
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

    <!-- Existing Content -->
    <div class="about-bg">
        <div class="about-bg-inner">
            <h1>About</h1>
            <p>Home / <span style="color: white; text-decoration: underline">About us</span></p>
        </div>
    </div>

    <div class="two-columns">
        <div class="image-column"><img src="{{ asset('assets/about-pic1.png') }}" alt="background Image"></div>
        <div class="text-column">
            <h2>Who Are We</h2>
            <h1>Professional HR Solutions for Your Business.</h1>
            <p>Tridaya Dimensi Indonesia adalah mitra strategis dalam pengelolaan SDM, menghadirkan layanan yang terintegrasi untuk mendukung pertumbuhan perusahaan Anda.</p>
        </div>
    </div>

    <div class="two-columns">
        <div class="text-column">
            <h2>Why Choose Us</h2>
            <h1>We always give the best.</h1>
            <h3>Tenaga Ahli Professional</h3>
            <p>Didukung tim yang kompeten, berpengalaman, dan memahami kebutuhan bisnis secara mendalam.</p>
            <h3>Jaringan Talenta Luas</h3>
            <p>Akses ke database kandidat berkualitas yang siap disesuaikan dengan kebutuhan perusahaan.</p>
        </div>
        <div class="image-column"><img src="{{ asset('assets/about-pic2.png') }}" alt="background Image"></div>
    </div>

    <div class="two-columns">
        <div class="image-column"><img src="{{ asset('assets/about-pic3.png') }}" alt="background Image"></div>
        <div class="text-column">
            <h2>Our Main Office</h2>
            <h1>Jakarta</h1>
            <p>Jakarta adalah jantung bisnis dan pusat peluang terbesar di Indonesia. Kehadiran Tridaya Dimensi Indonesia di kota ini menjadi 
                bukti komitmen kami dalam mendukung perusahaan dan talenta terbaik untuk bertumbuh bersama.</p>
        </div>
    </div>

    <div class="two-columns">
        <div class="text-column">
            <h2>Our Branch Office</h2>
            <h1>Bandung</h1>
            <p>Bandung dikenal sebagai kota kreatif dengan ekosistem bisnis yang terus berkembang. Kehadiran Tridaya Dimensi Indonesia di kota ini
                menjadi komitmen kami dalam mendukung pertumbuhan perusahaan serta talenta unggul yang lahir dari inovasi dan kolaborasi.
            </p>
            <h1>Surabaya</h1>
            <p>Surabaya adalah pusat perdagangan dan industri terbesar di Indonesia timur. Kehadiran Tridaya Dimensi Indonesia di kota ini menunjukkan
                dedikasi kami untuk mendukung perusahaan dan talenta terbaik agar terus maju dan berkembang bersama.
            </p>
        </div>
        <div class="image-column"><img src="{{ asset('assets/about-pic4.png') }}" alt="background Image"></div>
    </div>

    <div class="line-with-text">
        <span>Regional Representative</span>
    </div>
    <div class="map"><img style="width: 95vw" src="{{ asset('assets/map.png') }}" alt="background Image"></div>

    <div style="text-align: center; font-size: 1.4vw;"><h1>PIC Sumatra</h1></div>
    <div class="sumatra">
        <div class="pic-item">Aceh</div>
        <div class="pic-item">Medan</div>
        <div class="pic-item">Batam</div>
        <div class="pic-item">Pekanbaru</div>
        <div class="pic-item">Padang</div>
        <div class="pic-item">Jambi</div>
        <div class="pic-item">Palembang</div>
        <div class="pic-item">Lampung</div>
    </div>

    <div style="text-align: center; font-size: 1.4vw;"><h1>PIC Jawa</h1></div>
    <div class="jawa">
        <div class="pic-item">Bandung</div>
        <div class="pic-item">Semarang</div>
        <div class="pic-item">Tegal</div>
        <div class="pic-item">Yogyakarta</div>
        <div class="pic-item">Surabaya</div>
        <div class="pic-item">Malang</div>
    </div>

    <div class="kali-sula">
        <div class="kali-container">
            <div style="text-align: center; font-size: 1.4vw;"><h1>PIC Kalimantan</h1></div>
            <div class="kalimantan"> 
                <div class="pic-item">Banjarmasin</div>
                <div class="pic-item">Samarinda</div>
            </div>
        </div>
        <div class="sula-container">
            <div style="text-align: center; font-size: 1.4vw;"><h1>PIC Sulawesi</h1></div>
            <div class="sulawesi">
                <div class="pic-item">Manado</div>
                <div class="pic-item">Makassar</div>
            </div>
        </div>
    </div>

    <div class="line-with-text" style="margin-top: 5vw">
        <span>Our Documentation</span>
    </div>

    <div style="text-align: center;"><img style="width: 80vw;" src="{{ asset('assets/documentation.png') }}" alt="background Image"></div>

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

    <script>
        // JavaScript untuk toggle menu mobile
        document.getElementById('navbarToggle').addEventListener('click', function() {
            document.getElementById('navbarNav').classList.toggle('show');
        });
    </script>
</body>
</html>