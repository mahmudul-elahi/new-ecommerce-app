<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Aviato | E-commerce template</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Constra HTML Template v1.0">

    <!-- theme meta -->
    <meta name="theme-name" content="aviato" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/images/favicon.png') }}" />

    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/themefisher-font/style.css') }}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/animate/animate.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

</head>

<body id="body">

    <section class="signin-page account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="block text-center">
                        <a class="logo" href="{{ route('home') }}">
                            <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="">
                        </a>
                        <h2 class="text-center">Welcome Back</h2>
                        <form class="text-left clearfix" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group @error('email') has-error @enderror">
                                <input name="email" type="text" class="form-control" placeholder="Email">
                                @error('email')
                                    <div class="help-block with-errors">
                                        <p class="text-danger">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group @error('password') has-error @enderror">
                                <input name="password" type="password" class="form-control" placeholder="Password">
                                @error('password')
                                    <div class="help-block with-errors">
                                        <p class="text-danger">{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-main text-center">Login</button>
                            </div>
                        </form>
                        <p class="mt-20">New in this site ?<a href="{{ route('register') }}"> Create New Account</a>
                        </p>
                        <p><a href="{{ route('forgot-password') }}"> Forgot your password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Main jQuery -->
    <script src="{{ asset('assets/frontend/plugins/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap 3.1 -->
    <script src="{{ asset('assets/frontend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Bootstrap Touchpin -->
    <script src="{{ asset('assets/frontend/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}">
    </script>

    <!-- Main Js File -->
    <script src="{{ asset('assets/frontend/js/script.js') }}"></script>



</body>

</html>
