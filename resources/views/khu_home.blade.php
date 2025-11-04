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
    
    .bg-container {
        position: relative;
        width: 100%;
        height: auto;
    }

    .responsive-img {
        width: 100%;
        display: block;
        height: 45vw;      /* Set your desired height */
        object-fit: cover;  /* Crops the image to fit */
        object-position: bottom; /* Shows the bottom part */
    }

    .bg-text {
        color: white;
        position: absolute;
        top: 15vw;
        padding-left: 3vw;
        width: 76vw;
    }

    .bg-text h1 {
        font-size: 5.2vw;
        margin: 0;
    }

    .bg-text p {
        font-size: 2vw;
        margin: 0;
    }

    .bg-heading {
        position: absolute;
        top: 10%;
        left: 4%;
        color: white;
        width: 43%;
        font-family: sans-serif;
        font-size: 1.75vw;
    } 
    
    .bg-body {
        position: absolute;
        top: 58%;
        left: 4%;
        color: white;
        width: 45%;
        font-family: sans-serif;
        font-size: 1.3vw;
    }

    .visi-misi-strat {
        display: flex;
        justify-content: space-evenly;
        margin-top: -6vw;
    }

    .visi-misi-strat-item {
        text-align: center;
        width: 28%;
    }

    .visi-misi-strat-item img {
        width: 13vw;
    }

    
    .visi-misi-strat-item h1 {
        color: #008B4B;
        font-size: 3vw;
        margin: 0;
    }

    .visi-misi-strat-item p {
        font-size: 1.5vw;
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

    .values-text {
        text-align: center;
        font-size: 1.5vw;
        padding: 0 16vw;
        margin: 0;
    }

    .values {
        margin-top: 5vw;
        display: flex;
        justify-content: space-around;
        padding: 0 4vw;
    }

    .values-item {
        text-align: center;
        width: 16%;
    }

    .values-item img {
        width: 10vw;
    }

    .values-item h1 {
        color: #036E3C;
        font-weight: normal;
        margin-top: -2vw;
        font-size: 1.7vw;
    }

    .values-item p {
        font-size: 1vw;
    }

    .scope-text {
        text-align: center;
        font-size: 1.5vw;
        margin: 0;
    }

    .scope {
        display: flex;
        justify-content: space-around;
        padding: 0 3vw;
    }

    .security-card {
        margin-top: 4vw;
        width: 20%;
        color: black;
        padding: 0 1vw;
        border-radius: 1vw;
        border: 0.2vw solid #008B4B;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        padding-bottom: 1vw;
    }

    .security-card img {
        width: 5.5vw;
    }

    .security-card h1 {
        color: #008B4B;
        font-size: 1.5vw;
        font-weight: bold;
    }

    .security-card p {
        font-size: 1vw;
        line-height: 1.6;
        opacity: 0.9;
        margin: 0;
    }

    .learn-more {
        color: #27ae60;
        text-decoration: none;
        font-weight: bold;
        font-size: 1vw;
        transition: all 0.3s ease;
        display: inline-block;
        margin-left: 7vw;
    }

    .learn-more:hover {
        color: #219653;
        text-decoration: underline;
        transform: translateX(5px);
    }

    .learn-more:active {
        transform: translateX(0);
    }

    .scope-title {
        display: flex;
        align-items: center;
    }

    .map {
        text-align: center;
    }

    .map img {
        width: 90%;
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

  <div class="bg-container">
    <img src="{{ asset('assets/khu_homebanner.png') }}" alt="background Image" class="responsive-img">
    <div class="bg-text">
        <h1>People. Service. Performance.</h1>
        <p>Kami menyediakan tenaga kerja profesional dan layanan pendukung operasional yang berfokus pada kualitas, efisiensi, dan kepercayaan.</p>
  </div> 

  <div class="visi-misi-strat">
    <div class="visi-misi-strat-item">
        <img src="{{ asset('assets/khu_visi.png') }}" alt="visi icon">
        
        <h1>Visi</h1>
        <p>Menjadi perushaan yang terus berkembang dan diakui sebagai perusahaan penyedia jasa yang berkualitas di Indonesia.</p>

    </div>
    <div class="visi-misi-strat-item">
        <img src="{{ asset('assets/khu_misi.png') }}" alt="misi icon">

        <h1>Misi</h1>
        <p>Memberikan jasa pelayanan yang berkualitas kepada setiap partner kerja dengan efisiensi dan efektivitas.</p>

    </div>
    <div class="visi-misi-strat-item">
        <img src="{{ asset('assets/khu_strat.png') }}" alt="strat icon">

        <h1>Strategi</h1>
        <p>Terus meningkatkan kemampuan individu dan tim serta selalu belajar dari pengalaman agar menjadi lebih ahli.</p>

    </div>
  </div>
  
  <div class="line-with-text">
    <span>Our Values</span>
  </div>

  <p class="values-text">Di balik setiap layanan yang kami berikan, terdapat nilai-nilai yang kami pegang teguh sebagai pedoman bekerja dan melayani dengan sepenuh hati.</p>
  
  <div class="values">
    <div class="values-item">
        <img src="{{ asset('assets/khu_01.png') }}" alt="01"/>
        <h1>Kualitas & Profesionalisme</h1>
        <p>Kami berkomitmen memberikan pelayanan terbaik dengan standar profesional tinggi di setiap langkah kerja.</p>
    </div>
    <div class="values-item">
        <img src="{{ asset('assets/khu_02.png') }}" alt="02"/>
        <h1>Pembelajaran & Pengambangan</h1>
        <p>Kami terus tumbuh melalui pembelajaran, inovasi, dan pengalaman agar selalu menjadi yang terdepan di bidang kami.</p>
    </div>
    <div class="values-item">
        <img src="{{ asset('assets/khu_03.png') }}" alt="03"/>
        <h1>Kepuasan Pelanggan</h1>
        <p>Kami mendengar, memahami, dan melayani dengan sepenuh hati agar terciptanya kepercayaan dan kepuasasan mitra kerja.</p>
    </div>
    <div class="values-item">
        <img src="{{ asset('assets/khu_04.png') }}" alt="04"/>
        <h1>Perbaikan Berkelanjutan</h1>
        <p>Kami percaya kesuksesan berawal dari keberanian untuk selalu memperbaiki dan menyempurnakan setiap proses.</p>
    </div>
    <div class="values-item">
        <img src="{{ asset('assets/khu_05.png') }}" alt="05"/>
        <h1>Tanggung Jawab & Keanddalan</h1>
        <p>Kami menjalankan setiap tugas dengan integritas, ketepatan, dan tanggung jawab penuh terhadap hasil yang kami berikan.</p>
    </div>
  </div>

  <div class="line-with-text" style="margin-top: 10vw;">
    <span>Scope of Services</span>
  </div>

  <p class="scope-text">Kami menyediakan berbagai layanan profesional untuk mendukung kebutuhan operasional perusahaan Anda.<br>
    Kami berkomitmen memberikan solusi tenaga kerja yang <b>andal, efisien,</b> dan <b>berkualitas</b> melalui beragam bidang layanan berikut.
  </p>

  <div class="scope">
    <div class="security-card">
        <div class="scope-title">
            <img src="{{ asset('assets/khu_security.png') }}" alt="icon"/>
            <h1>Security Services</h1>
        </div>
        <p>Perlindungan aset dan personel secara komprehensif 24/7 untuk memastikan lingkungan kerja dan property yang aman.</p>
        <a href="{{ url('/kotakhijauutama/services') }}#security" class="learn-more">Pelajari Lebih Lanjut →</a>
    </div>
    <div class="security-card">
        <div class="scope-title">
            <img src="{{ asset('assets/khu_housekeeping.png') }}" alt="icon"/>
            <h1>Housekeeping Services</h1>
        </div>
        <p>Layanan kebersihan profesional dan menyeluruh untuk menjaga keindahan, sanitasi, dan kenyamanan lingkungan Anda.</p>
        <a href="{{ url('/kotakhijauutama/services') }}#housekeeping" class="learn-more">Pelajari Lebih Lanjut →</a>
    </div>
    <div class="security-card">
        <div class="scope-title">
            <img src="{{ asset('assets/khu_office.png') }}" alt="icon"/>
            <h1>Office & Facility Services</h1>
        </div>
        <p>Pengelolaan operasional dan pemeliharaan fasilitas kantor (gedung, AC, listrik) agar berfungsi optimal setiap saat.</p>
        <a href="{{ url('/kotakhijauutama/services') }}#office" class="learn-more">Pelajari Lebih Lanjut →</a>
    </div>
    <div class="security-card">
        <div class="scope-title">
            <img src="{{ asset('assets/khu_front.png') }}" alt="icon"/>
            <h1>Front Office Services</h1>
        </div>
        <p>Layanan penyambutan dan administrasi profesional yang menciptakan kesan positif pertama bagi tamu Anda.<br><br></p>
        <a href="{{ url('/kotakhijauutama/services') }}#front" class="learn-more">Pelajari Lebih Lanjut →</a>
    </div>
  </div>

  <div class="line-with-text" style="margin-top: 10vw;">
    <span>Our Office</span>
  </div>

  <div class="map">
    <img src="{{ asset('assets/khu_officemap.png') }}" alt="map"/>
  </div>

  <div class="line-with-text" style="margin-top: 10vw;">
    <span>Our Clients</span>
  </div>

  <p class="scope-text">Telah dipercaya oleh <b>berbagai perusahaan</b> sebagai <b>mitra profesional</b> dalam penyediaan<br>
    layanan tenaga kerja dan operasional kantor.
  </p>

  <div class="map" style="margin-top: 5vw;">
    <img src="{{ asset('assets/khu_clients.png') }}" alt="clients"/>
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