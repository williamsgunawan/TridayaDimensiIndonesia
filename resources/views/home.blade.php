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
    
    .tim-img {
        position: absolute;
        top: -2%;
        left: 46%;
        width: 54%;
        height: auto;
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

    .contact-button {
        position: absolute;
        top: 77%;
        left: 4%;
        display: block;
        background-color: #144E8F;
        color: white;
        padding: 1vw 2vw;
        border: none;
        border-radius: 2vw;
        font-size: 1.5vw;
        cursor: pointer;
        width: 20vw;
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

    .reasons-container {
        display: flex;
        justify-content: space-between;
        padding: 2vw 0;
    } 

    .reason-item {
        color: #144E8F;
        font-family: sans-serif;
        text-align: center;
        flex: 1;
        margin: 0 0.6vw;
    } 
    
    .reason-item h1 {
        font-size: 2vw;
    } 

    .reason-item p {
      font-size: 1.3vw;
    }

    .circle {
        height: 5vw;
        width: 5vw;
        background-color: #93D4F0;
        border-radius: 50%;
        display: inline-block;
    } 

    .circle img {
        height: 3vw;
        width: auto;
        margin-top: 1vw;
    } 

    .visimisistrat {
      position: relative;
      background-color: #144E8F;
      height: 24vw;
      padding-top: 8vw;
      padding-left: 6vw;
    } 

    .selection {
      width: 38vw;
      text-align: center;
    }

    .menu {
      display: flex;
      background-color: #34495e;
      border-bottom: 1px solid #2c3e50;
      padding: 0.6vw;
      border-radius: 1vw;
    }
    
    .menu-item {
      flex: 1;
      padding: 1vw;
      text-align: center;
      color: white;
      cursor: pointer;
      transition: all 0.3s ease;
      font-weight: bold;
      border-bottom: 0.2vw solid transparent;
      font-size: 2vw;
    }
    
    .menu-item:hover {
        background-color: #3d566e;
        border-radius: 1vw;
    }
    
    .menu-item.active {
        background-color: #3498db;
        border-bottom: 0.2vw solid #2980b9;
        border-radius: 1vw;
    }

    .content {
        padding: 3vw 2vw;
    }
    
    .content-section {
        display: none;
        animation: fadeIn 0.5s ease;
        font-size: 1.8vw;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .content-section.active {
        display: block;
    }

    .content-section p {
      color: white;
    }

    .visi-img {
        position: absolute;
        top: 5vw;
        left: 52vw;
        height: auto;
        width: 41vw;
    } 

    .proses {
        text-align: center;
        margin: 5vw 0;
    } 

    .kerjaan-container {
        display: flex;
        justify-content: space-between;
        gap: 1.8vw;
        padding: 0 4vw;
    } 

    .kerjaan-item {
        flex: 1;
        padding: 1.6vw;
        text-align: left;
        position: relative;
        height: 5vw;
    } 

    .kerjaan-inner {
        display: flex;
        align-items: center;
        height: 10vh;
    } 

    .kerjaan-inner img {
        width: 5vw;
        height: auto;
    }

    .kerjaan {
        color: #144E8F;
        font-weight: bold;
        font-size: 3vw;
        position: absolute;
        margin-left: 8vw;
        font-family: sans-serif;
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
        font-size: 1.2vw;
        margin: 0.4vw 0;
    } 

    .tdi-footer {
        margin-right: 13vw;
    }

    .dropdown-container {
        padding: 2vw;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.8vw;
    }
    
    .dropdown {
      margin-bottom: 1.2vw;
      border-radius: 0.3vw;
      overflow: hidden;
      transition: all 0.3s ease;
      background-color: white;
    }
    
    .dropdown:hover {
      border-color: #cbd5e0;
    }
    
    .dropdown-header {
      background-color: white;
      color: #2d3748;
      padding: 1.6vw 1.8vw;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-weight: 600;
      font-size: 1.1rem;
      transition: all 0.3s;
      border-bottom: 1px solid transparent;
    }
    
    .dropdown-header h1 {
      font-size: 2.7vw;
      color: #144E8F;
    }

    .dropdown-header:hover {
      background-color: #f7fafc;
    }
    
    .dropdown-header.active {
      background-color: #f7fafc;
      color: #2c5282;
      border-bottom: 1px solid #e2e8f0;
    }
    
    .dropdown-icon {
      transition: transform 0.3s ease;
      color: #718096;
      font-size: 2vw;
    }
    
    .dropdown-header.active .dropdown-icon {
      transform: rotate(180deg);
      color: #2c5282;
    }
    
    .dropdown-content {
      background-color: #f8fafc;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease, padding 0.3s ease;
    }
    
    .dropdown-content.show {
      max-height: 8vw;
      padding: 2vw;
    }

    .service-info {
      font-size: 1.3vw;
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

  <div class="bg-container">
    <img src="{{ asset('assets/bg.png') }}" alt="background Image" class="responsive-img">
    <img src="{{ asset('assets/tim.png') }}" alt="tim Image" class="tim-img">
    <div class="bg-heading">
      <h1>Solusi SDM Terpecaya untuk Pertumbuhan Bisnis Anda</h1>
    </div>
    <div class="bg-body">
      <p>Sejak 2007, mendukung ratusan perusahaan dengan layanan HR, rekrutmen, outsourcing, dan IT services.</p>
    </div>
    <button class="contact-button" onclick="window.open('https://wa.me/6287777785464', '_blank')">
        Hubungi Kami
    </button>
  </div> 

  <div class="line-with-text">
    <span>Why Choose Us</span>
  </div>

  <div class="reasons-container">
    <div class="reason-item">
      <span class="circle"><img src="{{ asset('assets/prof_icon.png') }}" alt="icon Image"></span>
      <br>
      <h1>Professional</h1>
      <p>Berkomitmen memberikan layanan yang professional dengan standar kualitas tinggi di setiap bidang.</p>
    </div>
    <div class="reason-item">
      <span class="circle"><img src="{{ asset('assets/exp_icon.png') }}" alt="icon Image"></span>
      <br>
      <h1>Experienced</h1>
      <p>Lebih dari 17 tahun pengalaman dalam SDM, outsourcing, training, dan event management.</p>
    </div>
    <div class="reason-item">
      <span class="circle"><img src="{{ asset('assets/net_icon.png') }}" alt="icon Image"></span>
      <br>
      <h1>Extensive Network</h1>
      <p>Mengelola lebih dari 5.000 karyawan yang terserbar di berbagai wilayah Indonesia.</p>
    </div>
    <div class="reason-item">
      <span class="circle"><img src="{{ asset('assets/trust_icon.png') }}" alt="icon Image"></span>
      <br>
      <h1>Trusted Partner</h1>
      <p>Dipercaya oleh ratusan perusahaan nasional maupun multinasional sebagai mitra strategis.</p>
    </div>
  </div>
  <div class="reasons-container">
    <div class="reason-item">
      <span class="circle"><img src="{{ asset('assets/compr_icon.png') }}" alt="icon Image"></span>
      <br>
      <h1>Comprehensive Services</h1>
      <p>Satu pintu solusi untuk HR Management, Security, Housekeeping, hingga, Event Organiser.</p>
    </div>
    <div class="reason-item">
      <span class="circle"><img src="{{ asset('assets/data_icon.png') }}" alt="icon Image"></span>
      <br>
      <h1>Strong Database</h1>
      <p>Didukung portal rekrutmen AlihdayaDigital.com dengan 52.000+ kandidat aktif & 1.200+ perusahaan.</p>
    </div>
    <div class="reason-item">
      <span class="circle"><img src="{{ asset('assets/team_icon.png') }}" alt="icon Image"></span>
      <br>
      <h1>Expert Team</h1>
      <p>Tim profesional yang kompeten, siap membantu menemukan solusi tepat sesuai kebutuhan klien.</p>
    </div>
    <div class="reason-item">
      <span class="circle"><img src="{{ asset('assets/cust_icon.png') }}" alt="icon Image"></span>
      <br>
      <h1>Customer Satisfaction</h1>
      <p>Selalu berorientasi pada kepuasan klien dengan perbaikan layanan berkelanjutan.</p>
    </div>
  </div>

  <div class="visimisistrat">
    <div class="selection">
      <div class="menu">
        <div class="menu-item active" data-target="visi">Visi</div>
        <div class="menu-item" data-target="misi">Misi</div>
        <div class="menu-item" data-target="strategi">Strategi</div>
      </div>

      <div class="content">
        <div id="visi" class="content-section active">
          <p>Menjadi Partner yang Terpecaya</p>
        </div>

        <div id="misi" class="content-section">
          <p>Memberikan Superior Service yang menghasilkan Peningkatan Produktivitas Kerja dari Client</p>
        </div>

        <div id="strategi" class="content-section">
          <p>Terus meningkatkan kemampuan individu dan team serta selalu belajar dari pengalaman agar Menjadi lebih Ahli</p>
        </div>
    </div>

    <img src="{{ asset('assets/visi.png') }}" alt="visi Image" class="visi-img">
  </div>
    </div>
    

  <div class="line-with-text">
    <span>Layanan Kami</span>
  </div>

  <div class="dropdown-container">
    <div class="dropdown">
      <div class="dropdown-header" onclick="toggleDropdown(this)">
        <h1>HR Management</h1>
        <span class="dropdown-icon">▼</span>
      </div>
      <div class="dropdown-content">
        <div class="service-info">
          <p>Menyediakan solusi komprehensif dalam pengelolaan sumber daya manusia, mulai dari administrasi personalia, penyusunan kebajikan HR,
            manajemen kinerja, hingga program pengembangan karyawan. Tujuannya adalah meningkatkan produktivitas dan efektivitas kerja secara
            berkelanjutan.
          </p>
        </div>
      </div>
    </div>
    
    <div class="dropdown">
      <div class="dropdown-header" onclick="toggleDropdown(this)">
        <h1>IT Services</h1>
        <span class="dropdown-icon">▼</span>
      </div>
      <div class="dropdown-content">
        <div class="service-info">
          <p>Menyediakan layanan tekonologi informasi untuk mendukung kebutuhan perusahaan, mulai dari pengembangan sistem, integrasi aplikasi,
            hingga layanan digital yang meningkatkan efisiensi operasional. Dengan solusi IT yang tepat, perusahaan dapat lebih adaptif menghadapi
            era digital.
          </p>
        </div>
      </div>
    </div>
    
    <div class="dropdown">
      <div class="dropdown-header" onclick="toggleDropdown(this)">
        <h1>Manpower Outsourcing</h1>
        <span class="dropdown-icon">▼</span>
      </div>
      <div class="dropdown-content">
        <div class="service-info">
          <p>Menyediakan tenaga kerja terampil dan berpengalaman sesuai kebutuhan spesifik perusahaan Anda. TDI mengelola seluruh proses mulai dari
            perekrutan, administrasi, hingga penggajian, sehingga perusahaan dapat fokus pada pengembangan bisnis inti tanpa terganggu oleh urusan
            operasional tenaga kerja.
          </p>
        </div>
      </div>
    </div>
    
    <div class="dropdown">
      <div class="dropdown-header" onclick="toggleDropdown(this)">
        <h1>Job Portal</h1>
        <span class="dropdown-icon">▼</span>
      </div>
      <div class="dropdown-content">
        <div class="service-info">
        <p>Melalui portal rekrutmen AlihdayaDigital.com, TDI menghadirkan akses ke lebih dari 52.000 kandidat aktif dan 1.200+ perusahaan.
          Portal ini memudahkan proses rekrutmen baik bagi pencari kerja maupun perusahaan, dengan fitur pencarian, posting lowongan, dan
          manajemen kandidat yang efisien.
        </p>
        </div>
      </div>
    </div>
    
    <div class="dropdown">
      <div class="dropdown-header" onclick="toggleDropdown(this)">
        <h1>Recruitment Services</h1>
        <span class="dropdown-icon">▼</span>
      </div>
      <div class="dropdown-content">
        <div class="service-info">
          <p>Menyadiakan layanan perencanaan dan pelaksanaan acara perusahaan secara profesional, mulai dari seminar, pelatihan, gathering,
            hingga launching produk. Dengan dukungan tim berpengalaman, TDI memastikan setiap detail acara terkelola dengan baik sehingga
            tercipta pengalaman yang berkesan dan sesuai tujuan perusahaan.
          </p>
        </div>
      </div>
    </div>

    <div class="dropdown">
      <div class="dropdown-header" onclick="toggleDropdown(this)">
        <h1>Event Management</h1>
        <span class="dropdown-icon">▼</span>
      </div>
      <div class="dropdown-content">
        <div class="service-info">
          <p>Menyediakan layanan perencanaan dan pelaksanaan acara perusahaan secara profesional, mulai dari seminar, pelatihan,
            gathering, hingga launching produk. Dengan dukungan tim berpengalaman, TDI memastikan setiap detail acara terkelola
            dengan baik sehingga tercipta pengalaman yang berkesan dan sesuai tujuan perusahaan.
          </p>
        </div>
      </div>
    </div>
    
  </div>

  <div class="line-with-text">
    <span>Proses Rekrutmen</span>
  </div>
  <div class="proses">
    <img style="width: 95vw;" src="{{ asset('assets/proses.png') }}" alt="proses Image">
  </div>

  <div class="line-with-text">
    <span>Perkerjaan yang Kami Salurkan</span>
  </div>

  <div class="kerjaan-container">
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/resep.png') }}" alt="icon Image">
            <span class="kerjaan">Resepsionis</span>
        </span>
    </div>
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/dataentry.png') }}" alt="icon Image">
            <span class="kerjaan">Data Entry</span>
        </span>
    </div>
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/sales.png') }}" alt="icon Image">
            <span class="kerjaan">Sales</span>
        </span>
    </div>
  </div>

  <div class="kerjaan-container">
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/admin.png') }}" alt="icon Image">
            <span class="kerjaan">Admin</span>
        </span>
    </div>
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/accounting.png') }}" alt="icon Image">
            <span class="kerjaan">Accounting</span>
        </span>
    </div>
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/marketing.png') }}" alt="icon Image">
            <span class="kerjaan">Marketing</span>
        </span>
    </div>
  </div>

  <div class="kerjaan-container">
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/custserv.png') }}" alt="icon Image">
            <span class="kerjaan">Customer Service</span>
        </span>
    </div>
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/spg.png') }}" alt="icon Image">
            <span class="kerjaan">SPG/SPB</span>
        </span>
    </div>
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/merch.png') }}" alt="icon Image">
            <span class="kerjaan">Merchandiser</span>
        </span>
    </div>
  </div>

  <div class="kerjaan-container">
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/call.png') }}" alt="icon Image">
            <span class="kerjaan">Call Center</span>
        </span>
    </div>
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/security.png') }}" alt="icon Image">
            <span class="kerjaan">Security</span>
        </span>
    </div>
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/it.png') }}" alt="icon Image">
            <span class="kerjaan">IT</span>
        </span>
    </div>
  </div>

  <div class="kerjaan-container">
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/supervisor.png') }}" alt="icon Image">
            <span class="kerjaan">Supervisor</span>
        </span>
    </div>
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/finance.png') }}" alt="icon Image">
            <span class="kerjaan">Finance</span>
        </span>
    </div>
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/driver.png') }}" alt="icon Image">
            <span class="kerjaan">Driver</span>
        </span>
    </div>
  </div>

  <div class="kerjaan-container">
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/staff.png') }}" alt="icon Image">
            <span class="kerjaan">Staff Gudang</span>
        </span>
    </div>
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/kurir.png') }}" alt="icon Image">
            <span class="kerjaan">Kurir</span>
        </span>
    </div>
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/checker.png') }}" alt="icon Image">
            <span class="kerjaan">Checker</span>
        </span>
    </div>
  </div>

  <div class="kerjaan-container">
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/helper.png') }}" alt="icon Image">
            <span class="kerjaan">Helper</span>
        </span>
    </div>
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/picker.png') }}" alt="icon Image">
            <span class="kerjaan">Picker</span>
        </span>
    </div>
    <div class="kerjaan-item">
        <span class="kerjaan-inner">
            <img src="{{ asset('assets/operator.png') }}" alt="icon Image">
            <span class="kerjaan">Operator Forklift</span>
        </span>
    </div>
  </div>

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
        function toggleDropdown(element) {
            // Close all other dropdowns
            const allDropdowns = document.querySelectorAll('.dropdown-content');
            const allHeaders = document.querySelectorAll('.dropdown-header');
            
            allDropdowns.forEach(dropdown => {
                if (dropdown !== element.nextElementSibling) {
                    dropdown.classList.remove('show');
                }
            });
            
            allHeaders.forEach(header => {
                if (header !== element) {
                    header.classList.remove('active');
                }
            });
            
            // Toggle current dropdown
            const content = element.nextElementSibling;
            content.classList.toggle('show');
            element.classList.toggle('active');
        }
        
        // Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.matches('.dropdown-header') && !event.target.closest('.dropdown-content')) {
                const allDropdowns = document.querySelectorAll('.dropdown-content');
                const allHeaders = document.querySelectorAll('.dropdown-header');
                
                allDropdowns.forEach(dropdown => {
                    dropdown.classList.remove('show');
                });
                
                allHeaders.forEach(header => {
                    header.classList.remove('active');
                });
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const menuItems = document.querySelectorAll('.menu-item');
            const contentSections = document.querySelectorAll('.content-section');
            
            menuItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Remove active class from all menu items and content sections
                    menuItems.forEach(i => i.classList.remove('active'));
                    contentSections.forEach(section => section.classList.remove('active'));
                    
                    // Add active class to clicked menu item
                    this.classList.add('active');
                    
                    // Show corresponding content section
                    const targetId = this.getAttribute('data-target');
                    document.getElementById(targetId).classList.add('active');
                });
            });
        });
    </script>
</body>
</html>