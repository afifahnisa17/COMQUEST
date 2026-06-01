<style>
    .footer-modern {
        background: linear-gradient(135deg, #4337F1, #2b2a6b);
        color: #fff;
        padding: 60px 20px 30px;
        position: relative;
        overflow: hidden;
    }

    /* subtle glow effect */
    .footer-modern::before {
        content: "";
        position: absolute;
        width: 400px;
        height: 400px;
        background: rgba(255,255,255,0.08);
        border-radius: 50%;
        top: -150px;
        right: -150px;
        filter: blur(20px);
    }

    .footer-title {
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 15px;
    }

    .footer-text {
        opacity: 0.85;
        margin-bottom: 8px;
        font-size: 14px;
    }

    .footer-divider {
        border: none;
        height: 1px;
        background: rgba(255,255,255,0.15);
        margin: 25px 0;
    }

    .footer-bottom {
        font-size: 12px;
        opacity: 0.75;
    }

    .footer-icon {
        margin-right: 8px;
        opacity: 0.9;
    }
</style>

<footer class="footer-modern text-center">

    <div class="container">

        <!-- TITLE -->
        <h5 class="footer-title">COMPQUEST</h5>

        <!-- ADDRESS -->
        <p class="footer-text">
            <i class="bi bi-geo-alt-fill footer-icon"></i>
            Jl. Soekarno Hatta No.9, Malang
        </p>

        <p class="footer-text">
            Politeknik Negeri Malang
        </p>

        <!-- CONTACT -->
        <p class="footer-text">
            <i class="bi bi-telephone-fill footer-icon"></i>
            +62 812 3456 7890
        </p>

        <hr class="footer-divider">

        <!-- COPYRIGHT -->
        <p class="footer-bottom mb-0">
            © 2025 COMPQUEST. All Rights Reserved.
        </p>

    </div>

</footer>
