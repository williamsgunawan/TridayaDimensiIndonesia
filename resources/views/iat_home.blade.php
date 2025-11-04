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

    .bg-container {
        position: relative;
        width: 100%;
        height: auto;
    }

    .responsive-img {
        width: 100%;
        height: auto;
        display: block;
    }
    
    .bg-heading {
        position: absolute;
        top: 21%;
        left: 4%;
        color: white;
        width: 50%;
        font-family: sans-serif;
        font-size: 2.5vw;
    }
    
    .bg-body {
        position: absolute;
        top: 58%;
        left: 4%;
        color: white;
        width: 53%;
        font-family: sans-serif;
        font-size: 1.6vw;
        font-weight: bold;
    }

    .layanan-button {
        position: absolute;
        top: 71%;
        left: 4%;
    }

    .two-columns {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        gap: 3vw;
        padding: 5vw 0;
        margin: auto;
        max-width: 90%;
    }

    .text-column {
      flex: 1;
      font-family: Arial, sans-serif;
      font-size: 1rem;
      line-height: 1.6;
    }

    .text-column h1 {
        color: #780001;
        font-size: 4vw;
        margin: 0;
    }

    .text-column p {
        margin-top: 0;
        font-size: 1.5vw;
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
    } 

    .reasons-container {
        display: flex;
        justify-content: space-between;
        padding: 1vw 8vw;
    } 

    .reason-item {
        text-align: center;
        flex: 1;
        margin: 0;
    } 

    .reason-item img {
      width: 10vw;
    }
    
    .reason-item h1 {
        font-size: 2vw;
        color: #780001;
    } 

    .reason-item p {
      font-size: 1.2vw;
    }

    .reason-text {
        text-align: center;
        width: 15vw;
        margin: 0 auto;
    }

    .learn-more-link {
        display: inline-block;
        color: #CB3A39;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.2vw;
        padding: 1vw 2vw;
        border: 0.1vw solid #CB3A39;
        border-radius: 50px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        z-index: 1;
        background-color: white;
    }

    /* Hover Effects */
    .learn-more-link:hover {
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 7px 15px rgba(203, 58, 57, 0.3);
    }
    
    .learn-more-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0%;
        height: 100%;
        background-color: #CB3A39;
        transition: all 0.3s ease;
        z-index: -1;
    }
    
    .learn-more-link:hover::before {
        width: 100%;
    }
    
    /* Arrow Animation */
    .learn-more-link::after {
        content: '→';
        margin-left: 0.7vw;
        transition: transform 0.3s ease;
        display: inline-block;
    }
    
    .learn-more-link:hover::after {
        transform: translateX(5px);
    }

    .link {
        text-align: center;
    }

    .tenaga-kerja {
        position: relative;
        text-align: center;
        margin-top: 8vh;
    }

    .tenaga-kerja img {
        width: 90%;
    }

    .tenaga-kerja h1 {
        position: absolute;
        top: 5vw;
        left: 10vw;
        color: white;
        font-size: 3.5vw;
        margin: 0;
    }

    .tenaga-kerja p {
        position: absolute;
        color: white;
        top: 8vw;
        left: 10vw;
        font-size: 2vw;
    }

    .tenaga-kerja a {
        position: absolute;
        top: 13vw;
        left: 10vw;
        background-color: white;
    }

    .klien {
        text-align: center;
    }

    .klien img {
        width: 90%;
    }

    .tempat {
        position: relative;
        margin-top: 10vw;
    }

    .tempat img {
        width: 100%;
    }

    .tempat-text {
        position: absolute;
        top: 7vw;
        left: 6vw;
        color: white;
        font-size: 1.7vw;
        width: 48%;
    }

    .footer {
        margin-top: 10vw;
        background-color: #780001;
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

  <div class="bg-container">
    <img src="{{ asset('assets/iat_homebg.png') }}" alt="background Image" class="responsive-img">
    <div class="bg-heading">
      <h1>Solusi Outsourcing Andal untuk SDM Profesional</h1>
    </div>
    <div class="bg-body">
      <p>Kami membantu perusahaan memenuhi kebutuhan tenaga kerja yang kompeten dan efisien di seluruh Indonesia.</p>
    </div>
    <div class="link layanan-button">
        <a href="{{ url('/indodaya/services') }}" class="learn-more-link">Pelajari Layanan Kami</a>
    </div>
  </div>

  <div class="two-columns">
    <div class="image-column"><img src="{{ asset('assets/iat_ttgkami.png') }}"></div>
    <div class="text-column">
        <h1>Tentang Kami</h1>
        <p>Sejak tahun 2000, PT Indodaya Alih Tama telah menjadi mitra terpecaya dalam menyediakan solusi <b>Business Process
            Outsourcing (BPO)</b> dan pemenuhan SDM profesional bagi berbagai perusahaan di <b>Jabodetabek</b> dan <b>Pulau Jawa.</b>
            <br>
            <br>
            Kami berkomitmen menghadirkan tenaga kerja yang tepat melalui proses rekrutmen terstruktur dan layanan yang profesional.
        </p>
    </div>
  </div>

  <div class="line-with-text">
    <span>Layanan Kami</span>
  </div>

  <div class="reasons-container">
    <div class="reason-item">
      <img src="{{ asset('assets/iat_manpower.png') }}">
      <br>
      <div class="reason-text">
        <h1>Manpower Outsourcing</h1>
        <p>Tenaga kerja profesional siap kerja untuk berbagai bidang industri.</p>
      </div>
    </div>
    <div class="reason-item">
      <img src="{{ asset('assets/iat_headhunter.png') }}">
      <br>
      <div class="reason-text">
        <h1>Head Hunter Project</h1>
        <p>Rekrutmen cepat dan akurat untuk posisi strategis Anda.</p>
      </div>
    </div>
    <div class="reason-item">
      <img src="{{ asset('assets/iat_takeover.png') }}">
      <br>
      <div class="reason-text">
        <h1>Take Over Karyawan</h1>
        <p>Efisiensi tim melalui pengalihan karyawan yang legal dan aman.</p>
      </div>
    </div>
    <div class="reason-item">
      <img src="{{ asset('assets/iat_handover.png') }}">
      <br>
      <div class="reason-text">
        <h1>Hand Over Karyawan</h1>
        <p>Transisi tenaga kerja lancar dengan proses administrasi rapi.</p>
      </div>
    </div>
  </div>

  <div class="link">
    <a href="{{ url('/indodaya/services') }}" class="learn-more-link">Pelajari Lebih Lanjut</a>
  </div>

  <div class="tenaga-kerja">
    <img src="{{ asset('assets/iat_tngkrjbg.png') }}">
    <h1>Butuh Tenaga Kerja Profesional?</h1>
    <p>Hubungi kami sekarang untuk konsultasi gratis.</p>
    <a href="#" class="learn-more-link" onclick="window.open('https://wa.me/6287777785464', '_blank')">Konsultasi Sekarang</a>
  </div>

  <div class="line-with-text">
    <span>Mengapa Pilih Kami</span>
  </div>

  <div class="reasons-container">
    <div class="reason-item">
      <img src="{{ asset('assets/iat_respon.png') }}">
      <br>
      <div class="reason-text">
        <h1>Respon Cepat & Efisien</h1>
      </div>
    </div>
    <div class="reason-item">
      <img src="{{ asset('assets/iat_profesional.png') }}">
      <br>
      <div class="reason-text">
        <h1>Profesional & Berpengalaman</h1>
      </div>
    </div>
    <div class="reason-item">
      <img src="{{ asset('assets/iat_admin.png') }}">
      <br>
      <div class="reason-text">
        <h1>Administrasi Terpusat</h1>
      </div>
    </div>
    <div class="reason-item">
      <img src="{{ asset('assets/iat_jangkauan.png') }}">
      <br>
      <div class="reason-text">
        <h1>Jangkauan Nasional</h1>
      </div>
    </div>
    <div class="reason-item">
      <img src="{{ asset('assets/iat_komitmen.png') }}">
      <br>
      <div class="reason-text">
        <h1>Komitmen terhadap Kualitas</h1>
      </div>
    </div>
  </div>

  <div class="line-with-text">
    <span>Klien & Mitra</span>
  </div>

  <div class="klien">
    <img src="{{ asset('assets/iat_klien.png') }}">
  </div>

  <div class="tempat">
    <img src="{{ asset('assets/iat_tempatbg.png') }}">
    <div class="tempat-text">
        <h1>Tempat Tepat Cari Karyawan, Tempat Tepat Cari Kerjaan</h1>
    </div>
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