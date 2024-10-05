<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up US Insurance Jobs</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/assets/colorlib/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/assets/colorlib/css/style.css">
</head>
<body>

<div class="main">

    @include('partials/messages')
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="/assets/colorlib/images/signin-image.jpg" alt="sing up image"></figure>
                    <a href="#" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign up</h2>
                    <form action="<?= url('register') ?>" method="post" id="registration-form" autocomplete="off" class="register-form">
                        <input type="hidden" value="<?= csrf_token() ?>" name="_token">

                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-account material-email"></i></label>
                            <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <label for="username"><i class="zmdi zmdi-account material-account-circle"></i></label>
                            <input type="text" name="username" id="username" value="{{ old('username') }}" placeholder="Your Username"/>
                        </div>
                        <div class="form-group">
                            <label for="first_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="email" id="first_name" value="{{ old('first_name') }}" placeholder="Your First Name"/>
                        </div>
                        <div class="form-group">
                            <label for="last_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="email" id="last_name" value="{{ old('last_name') }}" placeholder="Your Lat Name"/>
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="tos" id="tos" class="agree-term" />
                            <label for="tos" class="label-agree-term"><span><span></span></span>I accept <a href="#tos-modal" data-toggle="modal">@lang('Terms of Service')</a></label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                        </div>
                    </form>
{{--                    <div class="social-login">--}}
{{--                        <span class="social-label">Or login with</span>--}}
{{--                        <ul class="socials">--}}
{{--                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>--}}
{{--                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>--}}
{{--                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>

</div>

<!-- JS -->
<script src="/assets/colorlib/jquery/jquery.min.js"></script>
<script src="/assets/colorlib/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
