<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
    <title>Login Page</title>
</head>
<body>
    <div class="container" id="container">
        <!-- Sign Up Form -->
        <div class="sign-up">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Create Account</h1>
                <div class="icons">
                    <a href="#" class="icon"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                </div>
                <span>or use email for registration</span>
                <input type="text" name="name" placeholder="Name" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
                <button type="submit">Sign Up</button>
            </form>
        </div>

        <!-- Sign In Form -->
        <div class="sign-in">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Sign In</h1>
                <div class="icons">
                    <a href="#" class="icon"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                </div>
                <span>or use email and password</span>
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <a href="#">Forgot password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>

        <!-- Toggle Panel -->
        <div class="toogle-container">
            <div class="toogle">
                <div class="toogle-panel toogle-left">
                    <h1>Welcome User!</h1>
                    <p>If you already have an account</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toogle-panel toogle-right">
                    <h1>Hello, User!</h1>
                    <p>If you don't have an account</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/login.js') }}"></script>
    <script>
        document.getElementById('login').addEventListener('click', function() {
            document.querySelector('.sign-up').style.display = 'none';
            document.querySelector('.sign-in').style.display = 'block';
            document.querySelector('.toogle-left').classList.add('hidden');
            document.querySelector('.toogle-right').classList.remove('hidden');
        });

        document.getElementById('register').addEventListener('click', function() {
            document.querySelector('.sign-in').style.display = 'none';
            document.querySelector('.sign-up').style.display = 'block';
            document.querySelector('.toogle-left').classList.remove('hidden');
            document.querySelector('.toogle-right').classList.add('hidden');
        });
    </script>
</body>
</html>
