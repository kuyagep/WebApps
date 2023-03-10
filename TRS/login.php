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
    <?php include("header.php") ?>

    <!-- Main content -->
    <div class="main-content ">
        <!-- Login Form  -->
        <div id="login-box">
            <!-- Header -->
            <div class="header  py-8 py-lg-9 pt-lg-3" id="login">
                <div class="container">
                    <div class="header-body text-center mb-3">
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
                        <div class="card bg-gray border rounded-4 border-soft mb-0 shadow">

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
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <!-- <a href="#" class="text-gray" id="forgot-link"><small>Forgot password?</small></a> -->
                                            <input class="custom-control-input" id="customCheckRegister" type="checkbox" value="remember_me">
                                        <!-- <input class="custom-control-input" type="checkbox" value="remember-me"> -->
                                        <label class="custom-control-label" for=" customCheckLogin">
                                            <span >Remember me</span>
                                        </label>

                                        </div>
                                        <div class="col-6 text-right">
                                            <!-- <a href="#" class="text-gray" id="register-link"><small>Register</small></a> -->
                                            <a href="#" class="text-gray" id="forgot-link"><small>Forgot
                                                    password?</small></a>

                                        </div>
                                    </div>
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id="customCheckRegister" type="checkbox" value="remember_me">
                                        <!-- <input class="custom-control-input" type="checkbox" value="remember-me"> -->
                                        <label class="custom-control-label" for=" customCheckLogin">
                                            <span >Remember me</span>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="w-100  btn btn-lg  btn-primary mt-3 animate-up-2"
                                            id="login-btn"> <i class="fas fa-sign-in-alt mr-2"></i>Sign
                                            in</button>
                                        <!-- <button type="button" class="btn btn-primary my-4" id="login-btn"> <i
                                                class="fas fa-sign-in-alt mr-2"></i>Sign
                                            in</button> -->
                                    </div>
                                    <hr class="my-4">
                                    <div class="text-center">
                                        <button type="button"
                                            class="w-100 mb-2 btn btn-lg  btn-white  animate-up-2 text-success"
                                            id="register-link"> <i
                                                class="fas fa-paper-plane mr-2 "></i>Register</button>
                                        <!-- <button type="button" class="btn btn-primary my-4" id="login-btn"> <i
                                                class="fas fa-sign-in-alt mr-2"></i>Sign
                                            in</button> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Form End  -->

     

        <!-- Forgot Password  -->
        <div id="forgot-box" style="display: none;">
            <!-- Header -->
            <div class="header  py-7 py-lg-8 pt-lg-9">
                <div class="container">
                    <div class="header-body text-center mb-5">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                                <!-- <img src="./dashboard/assets/img/logo/logo.png" alt="brand-logo" width="100px"> -->
                                <h1 class="text-dark">Reset Password</h1>
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
                        <div class="card bg-gray border border-soft mb-0">
                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center mb-4 text-white">
                                    <small>To reset your password, enter the registered email address and we will send
                                        you the reset instruction on your email!</small>
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
                                    <div class="text-center ">
                                        <button type="button " id="forgot-btn" class="w-100 mb-2 btn btn-lg btn-primary mt-4">Reset
                                            Password</button>
                                    </div>
                                    <hr>
                                    
                                </form>
                                <div class="text-center ">
                                        <button type="button " class="w-100 mb-2 btn btn-lg btn-white " id="back-link">Back</button>
                                    </div>
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
        // $("#register-btn").click(function(e) {
        //     if ($("#register-form")[0].checkValidity()) {
        //         e.preventDefault();
        //         $("#register-btn").val('Please Wait...');
        //         if ($("#rpassword").val() != $("#cpassword").val()) {
        //             $("#passError").text("* Password did not matched!");
        //             $("#register-btn").val('Sign Up');
        //         } else {
        //             $("#passError").text("");
        //             $.ajax({
        //                 url: 'assets/php/action.php',
        //                 method: 'post',
        //                 data: $("#register-form").serialize() + '&action=register',
        //                 success: function(response) {
        //                     console.log(response);
        //                     $("#register-btn").val('Sign Up');
        //                 }

        //             });
        //         }
        //     }
        // });
        $("#register-form").submit(function(e) {
            if ($("#register-form")[0].checkValidity()) {
                e.preventDefault();
                $("#register-btn").val('Please Wait...');
                if ($("#rpassword").val() != $("#cpassword").val()) {
                    $("#passError").text("* Password did not matched!");
                    $("#register-btn").val('Sign Up');
                } else {
                    $("#passError").text("");
                    $.ajax({
                        url: 'assets/php/action.php',
                        method: 'post',
                        data: $("#register-form").serialize() + '&action=register',
                        success: function(response) {
                            console.log(response);
                            $("#register-btn").val('Sign Up');
                        }

                    });
                }
            }
        });

    });
    </script>

</body>

</html>