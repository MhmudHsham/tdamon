<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- Viewport metatags -->
        <meta name="HandheldFriendly" content="true" />
        <meta name="MobileOptimized" content="320" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- iOS webapp metatags -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />

        <!-- iOS webapp icons -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/ios/fickle-logo-72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ios/fickle-logo-72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ios/fickle-logo-114.png" />

        <!-- TODO: Add a favicon -->
        <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" /> </head>

    <title>Tdamon Umrah | Login Page</title>

    <!--Page loading plugin Start -->
    {!! HTML::style('assets/login/css/pace-rtl.css') !!}
    {!! HTML::script('assets/login/js/pace.min.js') !!}
    <!--Page loading plugin End   -->

    <!-- Plugin Css Put Here -->
    {!! HTML::style('assets/login/css/bootstrap-rtl.css') !!}
    {!! HTML::style('assets/login/css/bootstrap-switch.min.css') !!}
    {!! HTML::style('assets/login/css/ladda-themeless.min.css') !!}

    {!! HTML::style('assets/login/css/bigbox.css') !!}
    {!! HTML::style('assets/login/css/libnotify.css') !!}
    {!! HTML::style('assets/login/css/jackedup.css') !!}

    <!-- Plugin Css End -->
    <!-- Custom styles Style -->
    {!! HTML::style('assets/login/css/style-rtl.css') !!}
    <!-- Custom styles Style End-->

    <!-- Responsive Style For-->
    {!! HTML::style('assets/login/css/responsive-rtl.css') !!}
    <!-- Responsive Style For-->

</head>
<body class="login-screen">
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="login-box">
                        <div class="login-content">
                            <div class="login-user-icon">
                                <i class="glyphicon glyphicon-user"></i>

                            </div>
                            <h3>Tdamon Umrah | Login Page</h3>
                            <!--                            <div class="social-btn-login">
                                                            <ul>
                                                                <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="javascript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="javascript:void(0)" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                                <li><a href="javascript:void(0)" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="javascript:void(0)" target="_blank"><i class="fa fa-github"></i></a></li>
                                                                <li><a href="javascript:void(0)" target="_blank"><i class="fa fa-bitbucket"></i></a></li>
                                                            </ul>
                                                        </div>-->
                        </div>

                        <div class="login-form">
                            <form id="form-login" action="{{ route('login') }}" method="POST" class="form-horizontal ls_form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="input-group ls-group-input">
                                    <input class="form-control" type="email" name="email" placeholder="E-Mail">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                </div>


                                <div class="input-group ls-group-input">

                                    <input type="password" placeholder="Password" name="password" class="form-control" value="">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                </div>
                                <div class="remember-me">
                                    <input name="remember" class="switchCheckBox"  type="checkbox" checked data-size="mini"
                                           data-on-text="<i class='fa fa-check'><i>"
                                           data-off-text="<i class='fa fa-times'><i>"
                                           >
                                    <span>Remember me</span>
                                </div>
                                <div class="input-group ls-group-input login-btn-box">
                                    <button type="submit" class="btn ls-dark-btn ladda-button col-md-12 col-sm-12 col-xs-12" data-style="slide-down">
                                        <span class="ladda-label"><i class="fa fa-key"></i></span>
                                    </button>

                                    <!--<a class="forgot-password" href="{{ route('password.request') }}">Forgot password</a>-->
                                </div>
                            </form>
                        </div>
                        <!--                        <div class="forgot-pass-box">
                                                    <form action="#" class="form-horizontal ls_form">
                                                        <div class="input-group ls-group-input">
                                                            <input class="form-control" type="text" placeholder="someone@mail.com">
                                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                        </div>
                                                        <div class="input-group ls-group-input login-btn-box">
                                                            <button class="btn ls-dark-btn col-md-12 col-sm-12 col-xs-12">
                                                                <i class="fa fa-rocket"></i> Send
                                                            </button>

                                                            <a class="login-view" href="javascript:void(0)">Login</a> & <a class="" href="registration.html">Registration</a>

                                                        </div>
                                                    </form>
                                                </div>-->

                    </div>
                </div>
            </div>
        </div>
        <p class="copy-right big-screen hidden-xs hidden-sm">
            <span>&#169;</span> Tdamon Umrah <span class="footer-year">2018</span>
        </p>
    </section>

</body>
{!! HTML::script('assets/login/js/jquery-2.1.1.min.js') !!}
{!! HTML::script('assets/login/js/jquery.easing.js') !!}
{!! HTML::script('assets/login/js/bootstrap-switch.min.js') !!}
{!! HTML::script('assets/login/js/spin.js') !!}
{!! HTML::script('assets/login/js/ladda.js') !!}
{!! HTML::script('assets/login/js/humane.min.js') !!}
{!! HTML::script('assets/login/js/login.js') !!}
</html>