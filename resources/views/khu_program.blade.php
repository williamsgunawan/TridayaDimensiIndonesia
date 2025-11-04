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

    
    .support-row {
        display: flex;
        justify-content: center;
        gap: 0;
    }

    .support-row img{
        width: 25%;
    }

    .support-text {
        display: flex;
        align-items: center;
        width: 69%;
    }

    .support-text h1 {
        font-size: 3vw;
        margin: 0;
    }

    .support-text p {
        font-size: 1.7vw;
        margin: 0;
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
        <h1>Program</h1>
        <p style="margin-top: 0.5vw;"><span style="color: #5AB685;">Home /</span> <span style="text-decoration: underline;">Program</span></p>
    </div>
  </div>

  <div class="line-with-text">
    <span>Maintenance</span>
  </div>  

  <p class="subheading">
    Untuk menjaga pelayanan terbaik dan hubungan yang solid antara KHU, klien,<br>
    dan karyawan, kami memiliki berbagai program pendukung berikut:
  </p>

  <div class="support-row">
    <img src="{{ asset('assets/iat_01.png') }}">
    <div class="support-text">
        <div>
            <h1>Relation Officer</h1>
            <p>Karyawan <b>PT Kotak Hijau Utama (KHU)</b> berperan sebagai <b>mediator</b> antara <b>user</b> dan <br>
                <b>karyawan outsourcing</b>, memastikan kebutuhan terkait evaluasi kinerja terpenuhi dengan<br>
                baik. Dengan komunikasi yang efektif dan pendekatan solutif, tim KHU menjaga agar<br>
                <b>kerja sama antara kedua pihak</b> berjalan harmonis, produktif, dan berkelanjutan.
            </p>
        </div>
    </div>
  </div>

  <div class="support-row">
    <div class="support-text">
        <div>
            <h1>Administrasi</h1>
            <p>Berfungsi untuk <b>mengadministrasikan seluruh data ketenagakerjaan</b>, meliputi <b>daftar<br>
                kehadiran atau absensi, pengajuan cuti, data entry, rekapitulasi kinerja harian</b>, serta<br>
                <b>penyusunan laporan terkait tunjangan dasar.</b> Seluruh proses ini dilakukan secara<br>
                terstruktur guna memastikan pengelolaan tenaga kerja berjalan <b>efisien, akurat,</b> dan<br>
                <b>sesuai dengan ketentuan perusahaan.</b>
            </p>
        </div>
    </div>
    <img src="{{ asset('assets/iat_02.png') }}">
  </div>

  <div class="support-row">
    <img src="{{ asset('assets/iat_03.png') }}">
    <div class="support-text">
        <div>
            <h1>Training bagi Karyawan</h1>
            <p>Training yang difasilitasi oleh PT Kotak Hijau Utama berfokus pada pengembangan <b>soft<br>
                skill</b> yang berperan penting dalam peningkatan kinerja individu maupun tim. Program<br>
                pelatihan kami mencakup berbagai topik seperti <b>selling and motivation skill, positive<br>
                mental attitude, teamwork, leadership,</b> dan <b>communication skill.</b>
            </p>
        </div>
    </div>
  </div>

  <div class="support-row">
    <div class="support-text">
        <div>
            <h1>Reward dan Retention bagi Karyawan</h1>
            <p><b>PT Kotak Hijau Utama (KHU)</b> juga memiliki <b>program apresiasi karyawan berprestasi,</b><br>
                yang disesuaikan dengan <b>kesepakatan bersama klien</b> sebagai bentuk penghargaan atas<br>
                kinerja dan dedikasi mereka. Selain itu, kami secara rutin menyelenggarakan kegiatan<br>
                <b>gathering, team building,</b> dan <b>outing</b> untuk mempererat kebersamaan, meningkatkan<br>
                motivasi kerja, serta menciptakan lingkungan kerja yang positif dan harmonis.
            </p>
        </div>
    </div>
    <img src="{{ asset('assets/iat_04.png') }}">
  </div>

  <div class="line-with-text" style="margin-top: 10vw;">
    <span>5 Recruitment Process</span>
  </div>

  <p class="subheading">
    Kami menerapkan 5 Steps Recruitment Process secara profesional sesuai SOP untuk memastikan<br>
    The Right Person for The Right Job.
  </p>

  <div style="text-align: center">
    <img src="{{ asset('assets/khu_process.png') }}" style="width: 85%">

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