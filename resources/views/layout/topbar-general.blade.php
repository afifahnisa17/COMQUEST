<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* GLASS NAVBAR (CORK STYLE INSPIRED) */
        .navbar-glass {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999;
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            background: rgba(255,255,255,0.7);
            border-bottom: 1px solid rgba(0,0,0,0.06);
            transition: 0.3s ease;
        }

        .navbar-brand {
            font-weight: 700;
            letter-spacing: 0.5px;
            color: #4337F1 !important;
        }

        .nav-link {
            position: relative;
            font-weight: 500;
            color: #333 !important;
            transition: 0.3s ease;
        }

        /* hover underline animation */
        .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -4px;
            width: 0%;
            height: 2px;
            background: #4337F1;
            transition: 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: #4337F1 !important;
        }

        /* ACTIVE STYLE */
        .nav-link.active {
            color: #4337F1 !important;
        }

        .nav-link.active::after {
            width: 100%;
        }

        /* LOGIN BUTTON */
        .btn-login {
            background: #4337F1;
            color: white;
            border-radius: 12px;
            padding: 8px 16px;
            transition: 0.3s ease;
            border: none;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(67,55,241,0.3);
            color: white;
        }

        /* MOBILE OFFCANVAS */
        .offcanvas {
            backdrop-filter: blur(10px);
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-glass px-3">

    <a class="navbar-brand" href="#">COMPQUEST</a>

    <!-- MOBILE BUTTON -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- DESKTOP MENU -->
    <div class="collapse navbar-collapse justify-content-center d-none d-lg-flex">
        <ul class="navbar-nav gap-4">

            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/#beranda') }}">Beranda</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/#tentang') }}">Tentang</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/#prestasi') }}">Prestasi</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/#faq') }}">FAQ</a>
            </li>

        </ul>
    </div>

    <!-- LOGIN -->
    <a href="{{ route('login') }}" class="btn btn-login d-none d-lg-inline-block">
        Login
    </a>

</nav>

<!-- MOBILE OFFCANVAS MENU -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">

        <div class="d-flex flex-column gap-3">

            <a class="nav-link" href="{{ url('/#beranda') }}">Beranda</a>
            <a class="nav-link" href="{{ url('/#tentang') }}">Tentang</a>
            <a class="nav-link" href="{{ url('/#prestasi') }}">Prestasi</a>
            <a class="nav-link" href="{{ url('/#faq') }}">FAQ</a>

            <hr>

            <a href="{{ route('login') }}" class="btn btn-login text-center">
                Login
            </a>

        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
