<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login to Hakido Food</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">   
</head>
<body>
<!-------------- Header của trang Login ---------------->
    @include('layout.header')

<!-------------- Body của trang Login ---------------->
<section id="body">
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Create Account</h1>
                <input type="text" placeholder="Name">
                <input type="password" placeholder="Password">
                <input type="password" placeholder="Repassword">
                <button>Đăng ký</button>
                <div class="social-icons">
                    <a href=""><i class="fa-brands fa-facebook"></i> Login width facebook</a>
                    <a href=""><i class="fa-brands fa-google"></i>Login width google</a>
                </div>
            </form>
        </div>

        <div class="form-container sign-in">
            <form>
                <h1>SIGN IN</h1>
                <input type="text" placeholder="Name">
                <input type="password" placeholder="Password">
                <button>Đăng nhập</button>
                <a href="">Forget your password ?</a>
                <div class="social-icons">
                    <a href=""><i class="fa-brands fa-facebook"></i> Login width facebook</a>
                    <a href=""><i class="fa-brands fa-google"></i>Login width google</a>
                </div>
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Wellcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>

                <div class="toggle-panel toggle-right">
                    <h1>Hello my Friends!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>

    </div>
</section>
<script src="{{ url('js/login.js') }}"></script>
</body>
</html>