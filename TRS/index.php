<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>WebApps - Login</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="dashboard/assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="dashboard/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="dashboard/assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="dashboard/assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="dashboard/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="dashboard/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="dashboard/assets/vendor/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="dashboard/assets/vendor/sweetalert2/dist/sweetalert2.min.css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="dashboard/assets/css/dashboard.css" type="text/css">

    <!-- Prism -->
    <link type="text/css" href="./vendor/prismjs/themes/prism.css" rel="stylesheet">

    <!-- Front CSS -->
    <link type="text/css" href="./front/css/front.css" rel="stylesheet">


</head>


<body class="bg-white">
    <header class="header-global fixed-top bg-dark ">
        <nav id="navbar-main "
            class="navbar navbar-main navbar-expand-lg headroom py-lg-3 px-lg-6 navbar-light navbar-theme-default ">
            <div class="container my-3">
                <a class="navbar-brand @@logo_classes" href="../../index.html">
                    <!-- <img class="navbar-brand-dark common" src="./dashboard/assets/img/brand/light.svg" height="35"
                        alt="Logo light">
                    <img class="navbar-brand-light common" src="./dashboard/assets/img/brand/dark.svg" height="35"
                        alt="Logo dark"> -->
                        <img class="navbar-brand-light common" src="./dashboard/assets/img/logo/deped-logo-white.png" height="70"
                        alt="Logo dark">

                </a>
                <div class="navbar-collapse collapse" id="navbar_global">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="../../index.html">
                                    <img src="./dashboard/assets/img/brand/dark.svg" height="35" alt="Logo Impact">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <a href="#navbar_global" role="button" class="fas fa-times" data-toggle="collapse"
                                    data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                    aria-label="Toggle navigation"></a>
                            </div>
                        </div>
                    </div>
                    <!-- <ul class="navbar-nav navbar-nav-hover justify-content-center">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">Overview</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" aria-controls="pages_submenu"
                                aria-expanded="false" aria-label="Toggle pages menu item">
                                <span class="nav-link-inner-text">Front pages</span>
                                <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                            </a>
                            <ul class="dropdown-menu" id="pages_submenu">
                                <li><a class="dropdown-item" href="../pages/index.html">Landing</a></li>
                                <li><a class="dropdown-item" href="../pages/about.html">About</a></li>
                                <li><a class="dropdown-item" href="../pages/pricing.html">Pricing</a></li>
                                <li><a class="dropdown-item" href="../pages/contact.html">Contact</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown" aria-controls="pages_submenu"
                                aria-expanded="false" aria-label="Toggle pages menu item">
                                <span class="nav-link-inner-text">App pages</span>
                                <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                            </a>
                            <ul class="dropdown-menu" id="pages_submenu">
                                <li><a class="dropdown-item"
                                        href="../../dashboard/pages/dashboards/dashboard.html">Dashboard</a></li>
                                <li><a class="dropdown-item" href="../../dashboard/pages/examples/login.html">Login</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="../../dashboard/pages/examples/register.html">Register</a></li>
                                <li><a class="dropdown-item"
                                        href="../../dashboard/pages/examples/profile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="../../dashboard/pages/tables/tables.html">Tables</a>
                                </li>
                                <li><a class="dropdown-item" href="../../dashboard/pages/maps/google.html">Maps</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" aria-expanded="false" data-toggle="dropdown">
                                <span class="nav-link-inner-text mr-1">Support</span>
                                <i class="fas fa-angle-down nav-link-arrow"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg">
                                <div class="col-auto px-0" data-dropdown-content>
                                    <div class="list-group list-group-flush">
                                        <a href="https://demos.creative-tim.com/impact-design-system-pro/docs/getting-started/overview/"
                                            class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                            <span class="icon icon-sm icon-secondary"><i
                                                    class="fas fa-file-alt"></i></span>
                                            <div class="ml-4">
                                                <span class="text-dark d-block">Documentation<span
                                                        class="badge badge-sm badge-secondary ml-2">v1.0</span></span>
                                                <span class="small">Examples and guides</span>
                                            </div>
                                        </a>
                                        <a href="https://github.com/creativetimofficial/impact-design-system/issues"
                                            target="_blank"
                                            class="list-group-item list-group-item-action d-flex align-items-center p-0 py-3 px-lg-4">
                                            <span class="icon icon-sm icon-primary"><i
                                                    class="fas fa-microphone-alt"></i></span>
                                            <div class="ml-4">
                                                <span class="text-dark d-block">Support</span>
                                                <span class="small">Found a bug? Create an issue!</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul> -->
                </div>
                <!-- <div class="d-none d-lg-block @@cta_button_classes">
                    <a href="https://demos.creative-tim.com/impact-design-system-pro/docs/dashboard/alerts/"
                        class="btn btn-md btn-docs btn-outline-white animate-up-2 mr-3"><i
                            class="fas fa-th-large mr-2"></i> Components</a>
                    <a href="https://www.creative-tim.com/product/impact-design-system-pro" target="_blank"
                        class="btn btn-md btn-secondary animate-up-2"><i class="fas fa-paper-plane mr-2"></i> Upgrade to
                        Pro</a>
                </div> -->
                <div class="d-flex d-lg-none align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                        aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main content -->
    <div class="main-content ">
        <!-- Login Form  -->
        <div id="login-box">
            <!-- Header -->
            <div class="header  py-7 py-lg-8 pt-lg-3" id="login">
                <div class="container">
                    <div class="header-body text-center mb-5">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                                <!-- <img src="./dashboard/assets/img/logo/logo.png" alt="brand-logo" width="100px"> -->
                                <h1 class="text-dark">Login Account</h1>
                                <!-- <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="separator separator-bottom separator-skew zindex-100">
                    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div> -->
            </div>
            <!-- Page content -->
            <div class="container mt--9 pb-5 text-gray">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-7">
                        <div class="card bg-secondary border border-soft mb-0">

                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center mb-4">
                                    <small>Please enter your Email and Password.</small>
                                </div>
                                <form role="form">
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Email" type="email" id="email"
                                                name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Password" type="password"
                                                name="password" id="password">
                                        </div>

                                    </div>
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id="customCheckLogin" type="checkbox">
                                        <label class="custom-control-label" for=" customCheckLogin">
                                            <span>Remember me</span>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary my-4" id="login-btn"> <i
                                                class="fas fa-sign-in-alt mr-2"></i>Sign
                                            in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <!-- <a href="#" class="text-gray" id="forgot-link"><small>Forgot password?</small></a> -->
                                <a href="#" class="btn btn-md btn-secondary animate-up-2" id="forgot-link"></i> Forgot
                                    password?</a>
                            </div>
                            <div class="col-6 text-right">
                                <!-- <a href="#" class="text-gray" id="register-link"><small>Register</small></a> -->
                                <a href="#" class="btn btn-md btn-primary animate-up-2" id="register-link"><i
                                        class="fas fa-paper-plane mr-2"></i> Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Form End  -->

        <!-- Register Form  -->
        <div id="register-box" style="display: none;">
            <!-- Header -->
            <div class="header   py-lg-8 pt-lg-3">
                <div class="container">
                    <div class="header-body text-center mb-5">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                                <!-- <img src="./dashboard/assets/img/logo/logo.png" alt="brand-logo" width="100px"> -->
                                <h1 class="text-dark">Create an account</h1>
                                <!-- <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="separator separator-bottom separator-skew zindex-100">
                    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div> -->
            </div>
            <!-- Page content -->
            <div class="container mt--9 pb-5">
                <!-- Table -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="card bg-secondary border border-soft">

                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center text-muted mb-4">
                                    <small>Sign up with credentials</small>
                                </div>
                                <form role="form" id="register-form">
                                    <div class="form-group">
                                        <div class="input-group input-group-merge input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Name" type="text" id="name"
                                                name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-merge input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Email" type="email" id="remail"
                                                name="remail" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Password" type="password"
                                                id="rpassword" name="rpassword" minlength="5" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Confirm-Password" type="password"
                                                id="cpassword" name="cpassword" minlength="5" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div id="passError" class="text-danger font-weight-bolder"></div>
                                    </div>
                                    <!-- <div class="text-muted font-italic"><small>password strength: <span
                                                class="text-success font-weight-700">strong</span></small></div> -->
                                    <div class="row my-4">
                                        <div class="col-12">
                                            <div class="custom-control custom-control-alternative custom-checkbox">
                                                <input class="custom-control-input" id="customCheckRegister"
                                                    type="checkbox">
                                                <label class="custom-control-label" for="customCheckRegister">
                                                    <span class="text-muted">I agree with the <a href="#!">Privacy
                                                            Policy</a></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary mt-4" id="register-btn">Create account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <!-- <div class="col-6">
                                <a href="#" class="text-gray"><small>Forgot password?</small></a>
                            </div> -->
                            <div class="col-12 text-right">
                                <!-- <a href="#" class="text-gray" id="login-link"><small>Login</small></a> -->
                                <a href="#" class="btn btn-md btn-primary animate-up-2" id="login-link"> <i
                                        class="fas fa-sign-in-alt mr-2"></i></i></i>Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Register Form End  -->

        <!-- Forgot Password  -->
        <div id="forgot-box" style="display: none;">
            <!-- Header -->
            <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
                <div class="container">
                    <div class="header-body text-center mb-5">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                                <!-- <img src="./dashboard/assets/img/logo/logo.png" alt="brand-logo" width="100px"> -->
                                <h1 class="text-white">Reset Password</h1>
                                <!-- <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="separator separator-bottom separator-skew zindex-100">
                    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div> -->
            </div>
            <!-- Page content -->
            <div class="container mt--9 pb-5 text-gray">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-7">
                        <div class="card bg-secondary border border-soft mb-0">
                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center mb-4 text-success">
                                    <small>To reset your password, enter the registered email address and we will send
                                        you
                                        the reset instruction on your email!</small>
                                </div>
                                <form role="form">
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Email" type="email" id="femail"
                                                name="email" required>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="button " id="forgot-btn" class="btn btn-primary my-4">Reset
                                            Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <!-- <div class="col-6">
                                <a href="#" class="text-gray"><small>Forgot password?</small></a>
                            </div> -->
                            <div class="col-12 text-right">
                                <!-- <a href="#" class="text-gray" id="back-link"><small>Back</small></a> -->
                                <a href="#" class="btn btn-md btn-secondary animate-up-2" id="back-link">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Forgot Password End    -->








    </div>
    <!-- Footer -->

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="./dashboard/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="./dashboard/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./dashboard/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="./dashboard/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="./dashboard/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>

     <!-- Core -->
<script src="./vendor/headroom.js/dist/headroom.min.js"></script>

<!-- Vendor JS -->
<script src="./vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="./vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="./vendor/jarallax/dist/jarallax.min.js"></script>
<script src="./vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Impact JS -->
<script src="./front/assets/js/front.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script> -->
    <script>
    $(document).ready(function() {
        $("#register-link").click(function() {
            $("#login-box").hide();
            $("#register-box").show();
        });
        $("#login-link").click(function() {
            $("#login-box").show();
            $("#register-box").hide();
        });
        $("#forgot-link").click(function() {
            $("#login-box").hide();
            $("#forgot-box").show();
        });
        $("#back-link").click(function() {
            $("#login-box").show();
            $("#forgot-box").hide();
        });

        //Register Ajax Request
        $("#register-btn").click(function(e){
            if($("#register-form")[0].checkValidity()){
                e.preventDefault();
                $("#register-btn").val('Please Wait...');
            }
        });

    });
    </script>

</body>

</html>