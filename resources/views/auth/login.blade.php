<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | COMPQUEST</title>

    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        * {
            font-family: 'Urbanist', sans-serif;
        }

        body {
            margin: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #4337F1, #1b1b3a);
            overflow: hidden;
        }

        /* floating glow */
        body::before {
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            background: rgba(255,255,255,0.08);
            border-radius: 50%;
            top: -120px;
            left: -120px;
            animation: float 8s infinite ease-in-out;
        }

        body::after {
            content: "";
            position: absolute;
            width: 400px;
            height: 400px;
            background: rgba(255,255,255,0.05);
            border-radius: 50%;
            bottom: -120px;
            right: -120px;
            animation: float 10s infinite ease-in-out;
        }

        @keyframes float {
            0%,100% { transform: translateY(0); }
            50% { transform: translateY(25px); }
        }

        /* LOGIN CARD */
        .login-card {
            width: 100%;
            max-width: 420px;
            padding: 40px;
            border-radius: 18px;
            background: rgba(255,255,255,0.12);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255,255,255,0.2);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
            color: white;
            z-index: 2;
        }

        .login-title {
            font-weight: 700;
            text-align: center;
            margin-bottom: 25px;
            letter-spacing: 1px;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px;
            border: none;
            outline: none;
            transition: 0.3s;
        }

        .form-control:focus {
            box-shadow: 0 0 0 3px rgba(255,255,255,0.2);
        }

        label {
            font-size: 14px;
            margin-bottom: 6px;
        }

        .btn-login {
            background: #fff;
            color: #4337F1;
            font-weight: 600;
            border-radius: 12px;
            padding: 12px;
            transition: 0.3s;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .error-text {
            font-size: 12px;
            color: #ffb4b4;
            margin-top: 5px;
        }
    </style>
</head>

<body>

<div class="login-card">

    <h3 class="login-title">COMPQUEST</h3>

    <form id="form-login" action="{{ url('login') }}" method="POST">
        @csrf

        <!-- Username -->
        <div class="mb-3">
            <label>Username</label>
            <input type="text" id="username" class="form-control" placeholder="Enter username">
            <div class="error-text d-none" id="err-username"></div>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label>Password</label>
            <input type="password" id="password" class="form-control" placeholder="Enter password">
            <div class="error-text d-none" id="err-password"></div>
        </div>

        <button type="submit" class="btn btn-login w-100" id="btn-login">
            Login
        </button>
    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
$(document).ready(function () {

    const showError = (id, msg) => {
        $(`#${id}`).removeClass('d-none').text(msg);
    };

    const clearErrors = () => {
        $('.error-text').addClass('d-none').text('');
    };

    $('#form-login').on('submit', function (e) {
        e.preventDefault();

        clearErrors();

        let username = $('#username').val().trim();
        let password = $('#password').val().trim();
        let valid = true;

        // validation
        if (username.length < 4 || username.length > 20) {
            showError('err-username', 'Username must be 4–20 characters');
            valid = false;
        }

        if (password.length < 5 || password.length > 20) {
            showError('err-password', 'Password must be 5–20 characters');
            valid = false;
        }

        if (!valid) return;

        // loading state
        let btn = $('#btn-login');
        btn.prop('disabled', true).text('Logging in...');

        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: {
                username,
                password,
                _token: $('input[name="_token"]').val()
            },
            success: function (res) {
                Swal.fire({
                    icon: 'success',
                    title: 'Login Success',
                    text: res.message
                }).then(() => {
                    window.location.replace(res.redirect);
                });
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Login Failed',
                    text: 'Invalid username or password'
                });
            },
            complete: function () {
                btn.prop('disabled', false).text('Login');
            }
        });

    });

});
</script>

</body>
</html>
