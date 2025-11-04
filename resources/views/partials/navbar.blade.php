<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar - Tridaya Dimensi Indonesia</title>
    <style>
        /* Reset dan styling dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            padding: 20px;
        }
        
        /* Container utama navbar */
        .navbar-container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        /* Navbar utama */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background-color: #fff;
        }
        
        /* Logo */
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #2c3e50;
            text-decoration: none;
        }
        
        /* Menu navigasi */
        .navbar-nav {
            display: flex;
            list-style: none;
        }
        
        .nav-item {
            margin-left: 30px;
        }
        
        .nav-link {
            text-decoration: none;
            color: #555;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
            padding: 5px 0;
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
            height: 2px;
            background-color: #3498db;
        }
        
        /* Menu toggle untuk mobile */
        .navbar-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #2c3e50;
        }
        
        /* Responsif */
        @media (max-width: 768px) {
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
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar-container">
        <nav class="navbar">
            <a href="{{ url('/') }}" class="navbar-brand">Tridaya Dimensi Indonesia</a>
            
            <button class="navbar-toggle" id="navbarToggle">
                ☰
            </button>
            
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

    <script>
        document.getElementById('navbarToggle').addEventListener('click', function() {
            document.getElementById('navbarNav').classList.toggle('show');
        });
    </script>
</body>
</html>