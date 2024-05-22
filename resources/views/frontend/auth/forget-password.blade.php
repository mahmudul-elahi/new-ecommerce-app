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

    <section class="forget-password-page account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="block text-center">
                        <a class="logo" href="index.html">
                            <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="">
                        </a>
                        <h2 class="text-center">Welcome Back</h2>
                        <form class="text-left clearfix">
                            <p>Please enter the email address for your account. A verification code will be sent to you.
                                Once you have received the verification code, you will be able to choose a new password
                                for your account.</p>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Account email address">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-main text-center">Request password reset</button>
                            </div>
                        </form>
                        <p class="mt-20"><a href="{{ route('login') }}">Back to log in</a></p>
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
