<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <title>CompQuest</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}"/>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <style>
        * {
            font-family: 'Urbanist', sans-serif !important;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #f6f7fb;
        }

        /* HERO */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #4337F1, #1a1a3d);
        }

        .hero::before,
        .hero::after {
            content: "";
            position: absolute;
            width: 400px;
            height: 400px;
            background: rgba(255,255,255,0.08);
            border-radius: 50%;
            animation: float 8s infinite ease-in-out;
        }

        .hero::before {
            top: -120px;
            left: -120px;
        }

        .hero::after {
            bottom: -120px;
            right: -120px;
            animation-delay: 2s;
        }

        @keyframes float {
            0%,100% { transform: translateY(0); }
            50% { transform: translateY(25px); }
        }

        /* CARD */
        .modern-card {
            border: none;
            border-radius: 16px;
            transition: 0.3s ease;
        }

        .modern-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.12);
        }

        /* REVEAL */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: 0.8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* BUTTON */
        .btn-modern {
            border-radius: 12px;
            padding: 12px 24px;
        }

        /* SECTION TITLE */
        .section-title {
            font-weight: 700;
            text-align: center;
            margin-bottom: 40px;
        }
    </style>

    @stack('styles')
</head>

<body>

@include('layout.topbar-general')

<!-- HERO -->
<section class="hero">
    <div class="container reveal">
        <h1 class="display-3 fw-bold">COMPQUEST</h1>
        <p class="lead mt-3" style="opacity:0.85;">
            Empower Your Vision. Drive Your Success.
        </p>

        <a href="#tentang" class="btn btn-light btn-lg btn-modern mt-3">
            Explore Platform
        </a>
    </div>
</section>

<!-- TENTANG -->
<section id="tentang" class="py-5">
    <div class="container reveal text-center">

        <h2 class="section-title">
            Tentang <span style="color:#4337F1;">COMPQUEST</span>
        </h2>

        <p class="text-secondary mx-auto mb-5" style="max-width:750px;">
            COMPQUEST adalah platform kompetisi digital untuk mahasiswa Jurusan Teknologi Informasi dalam berinovasi dan berkembang.
        </p>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="p-4 bg-white modern-card">
                    🚀
                    <h5 class="mt-2">Growth</h5>
                    <p class="text-secondary">Upgrade skill lebih cepat</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-white modern-card">
                    💡
                    <h5 class="mt-2">Innovation</h5>
                    <p class="text-secondary">Ide kreatif tanpa batas</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-white modern-card">
                    🤝
                    <h5 class="mt-2">Collaboration</h5>
                    <p class="text-secondary">Networking mahasiswa</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- LEADERBOARD -->
<section id="prestasi" class="py-5 bg-white">
    <div class="container reveal">

        <h2 class="section-title">Leaderboard Mahasiswa</h2>

        <div class="row g-4 justify-content-center">

            <div class="col-md-4">
                <div class="card modern-card text-center p-4">
                    <div style="font-size:40px;">🥇</div>
                    <img src="assets/img/90x90.jpg" class="rounded-circle mx-auto my-3" width="80">
                    <h5>Shaun</h5>
                    <p class="text-secondary">640 Points</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card modern-card text-center p-4">
                    <div style="font-size:40px;">🥈</div>
                    <img src="assets/img/90x90.jpg" class="rounded-circle mx-auto my-3" width="80">
                    <h5>Sheep</h5>
                    <p class="text-secondary">320 Points</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card modern-card text-center p-4">
                    <div style="font-size:40px;">🥉</div>
                    <h5 class="mt-3">Timmy</h5>
                    <p class="text-secondary">160 Points</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-5">
    <div class="container reveal">

        <h2 class="section-title text-start">FAQ</h2>

        <div class="accordion" id="faqAcc">

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#q1">
                        Apa itu COMPQUEST?
                    </button>
                </h2>
                <div id="q1" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        COMPQUEST adalah platform kompetisi digital mahasiswa.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#q2">
                        Siapa yang bisa ikut?
                    </button>
                </h2>
                <div id="q2" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Semua mahasiswa aktif di Indonesia.
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

@include('layout.footer')

<!-- SCRIPT -->
<script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

<script>
    const reveals = document.querySelectorAll('.reveal');

    function revealOnScroll() {
        reveals.forEach(el => {
            const top = el.getBoundingClientRect().top;
            if (top < window.innerHeight - 100) {
                el.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll();
</script>

</body>
</html>
