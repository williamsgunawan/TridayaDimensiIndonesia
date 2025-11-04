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

    .maintenance-text {
        text-align: center;
        font-size: 1.8vw;
    }

    .support-row {
        display: flex;
        justify-content: center;
        gap: 2vw;
    }

    .support-row img{
        width: 25%;
    }

    .support-text {
        display: flex;
        align-items: center;
        width: 55%;
    }

    .support-text h1 {
        font-size: 3vw;
        margin: 0;
    }

    .support-text p {
        font-size: 1.7vw;
        margin: 0;
    }

    .business-program {
        text-align: center;
    }

    .service {
        display: flex;
        justify-content: center;
        padding: 0 10vw;
        font-size: 1.5vw;
    }

    .service-item h1 {
        font-size: 6vw;
        margin-bottom: 0;
    }

    .service-item h2 {
        font-size: 3vw;
        margin-top: 1vw;
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

  <div class="bg">
    <img src="{{ asset('assets/iat_servicesbg.png') }}">
    <div class="bg-title">
      <h1>Our Services</h1>
    </div>
  </div>

  <div class="line-with-text">
    <span>Maintenance & Employee Support</span>
  </div>

  <div class="maintenance-text">
    <p>Kami memastikan komunikasi antara klien, karyawan, dan tim Indodaya tetap berjalan efektif
        <br>
        melalui program berikut:
    </p>
  </div>

  <div class="support-row">
    <img src="{{ asset('assets/iat_01.png') }}">
    <div class="support-text">
        <div>
            <h1>Relation Officer</h1>
            <p>Tim kami memiliki kemampuan dan dedikasi tinggi sebagai mediator
                <br>antara karyawan dan user. Relation Officer berperan dalam 
                <br>pemenuhan kebutuhan tenaga kerja sesuai permintaan client, 
                <br>melakukan evaluasi kinerja, serta menjadi koordinator lapangan agar 
                <br>komunikasi dan kerja sama antara pihak terkait berjalan efektif dan 
                <br>harmonis.
            </p>
        </div>
    </div>
  </div>

  <div class="support-row">
    <div class="support-text">
        <div>
            <h1>Cepat dan Tata Tertib Administrasi</h1>
            <p>Kami menjalankan fungsi administrasi dengan profesional, mulai dari
                <br>pengelolaan absensi dan cuti, penerbitan slip gaji tepat waktu,
                <br>hingga pengurusan BPJS Kesehatan dan Ketenagakerjaan. Setiap 
                <br>proses dilakukan secara tertib dan akurat untuk memastikan semua 
                <br>urusan administrasi karyawan berjalan lancar.
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
            <p>Kami menyediakan berbagai program pelatihan yang dirancang
                <br>untuk meningkatkan kompetensi karyawan. Program ini meliputi
                <br>pengembangan soft skill seperti komunikasi, motivasi kerja, dan
                <br>pembentukan karakter, sehingga karyawan dapat tumbuh secara
                <br>profesional dan personal di lingkungan kerja.
            </p>
        </div>
    </div>
  </div>

  <div class="support-row">
    <div class="support-text">
        <div>
            <h1>Reward dan Retention bagi Karyawan</h1>
            <p>Kami memiliki program apresiasi bagi karyawan berprestasi melalui
                <br>pemberian reward sesuai kesepakatan dengan client. Selain itu,
                <br>terdapat kegiatan seperti gathering, team building, dan outing yang
                <br>diselenggarakan untuk mempererat hubungan tim serta mendukung
                <br>kenyamanan dan loyalitas kerja.
            </p>
        </div>
    </div>
    <img src="{{ asset('assets/iat_04.png') }}">
  </div>
  
  <div class="line-with-text" style="margin-top: 10vw;">
    <span>Business Program</span>
  </div>

  <div class="business-program">
    <img src="{{ asset('assets/iat_business.png') }}" style="width: 100%">
  </div>

  <div class="line-with-text" style="margin-top: 10vw;">
    <span>Service Experience</span>
  </div>

  <div class="service">
    <div class="service-item" style="flex: 1;">
      <h1>01/</h1>
      <h2>Retail</h2>
      Sales Executive <br>
      Sales Counter <br>
      Sales Exhibition <br>
      Direct Sales <br>
      Merchandiser <br>
      Sales Promotion <br>
      Team Leader <br>
      Telemarketing <br>
      Sales Advisor <br>
      Marketing <br>
      Executive <br>
    </div>
    <div class="service-item" style="flex: 1;">
      <h1>02/</h1>
      <h2>Banking</h2>
      Teller <br>
      CRO <br>
      Account Officer <br>
      Account <br>
      Executive <br>
      CSO <br>
      Desk Collection <br>
      Telemarketing <br>
      ASM <br>
      Finance <br>
      Controller <br>
    </div>
    <div class="service-item" style="flex: 1;">
      <h1>03/</h1>
      <h2>Logistic</h2>
      Checker  <br>
      Picker <br>
      Helper <br>
      Operator Forklift <br>
      Driver Logistic <br>
      Admin Logistic <br>
      Data Record <br>
      Team Leader <br>
      Coordinator <br>
      Gardener <br>
    </div>
    <div class="service-item" style="flex: 1;">
      <h1>04/</h1>
      <h2>General</h2>
      Admin <br>
      Data Entry <br>
      Receptionist <br>
      Call Center <br>
      Customer Service <br>
      Office Boy <br>
      Office Girl <br>
      IT Support <br>
      Ticketing <br>
      Kasir <br>
    </div>
  </div>

  <div class="service">
    <div class="service-item" style="flex: 1;">
      <h1>05/</h1>
      <h2>F&B</h2>
      Waiter <br>
      Runner <br>
      Barista <br>
      Cook <br>
      Cook Helper <br>
      Steward <br>
    </div>
    <div class="service-item" style="flex: 1;">
      <h1>06/</h1>
      <h2>Hospitality & Healthcare</h2>
      Call Center <br>
      Asisten <br>
      Apoteker <br>
      Juru Racik <br>
      Housekeeping <br>
      Front Office <br>
      Room Attendant <br>
    </div>
    <div class="service-item" style="flex: 2;">
      <h1>07/</h1>
      <h2>Telecommunication & Advertising</h2>
      Account Executive <br>
      Junior Programmer <br>
      Sales Support <br>
      Junior Data Analyst <br>
      Project Management <br>
      Recruitment Officer <br>
      Officer <br>
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