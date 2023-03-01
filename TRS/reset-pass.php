<?php 
   require_once('assets/php/auth.php');
   $user = new Auth();
   $msg = '';
   if (isset($_GET['email']) && isset($_GET['token'])) {
        $email = $user->check_input($_GET['email']);
        $token = $user->check_input($_GET['token']);

        $auth_user = $user->reset_password_auth($email, $token);

        if($auth_user != null){
            if(isset($_POST['submit'])){
                $newpass = $_POST['pass'];
                $cnewpass = $_POST['cpass'];

                $hash_new_pass = password_hash($newpass, PASSWORD_DEFAULT);

                if ($newpass == $cnewpass) {
                    $user->update_new_pass($hash_new_pass, $email);
                    $msg = 'Password Changed Successfully! <br> <a href="index.php">Login Here</a>';
                }else{
                    $msg = 'Password did not matched!';
                }
            }
        }else {
            header('Location:index.php');
            exit();
        }

    }else{
        header('Location:index.php');
            exit();
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Reset Password | WebApps</title>

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


    <style>
    .form-bg {
        background-color: #161B22;
    }

    .btn-bg {
        background-color: #29AC47;
    }
    </style>

</head>


<body class="bg-white">
    <?php include("header.php") ?>

    <!-- Main content -->
    <div class="main-content ">
        <!-- Login Form  -->
        <div >
            <!-- Header -->
            <div class="header  py-8 py-lg-9 pt-lg-3" >
                <div class="container">
                    <div class="header-body text-center mb-3">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                                <h1 class="text-dark">New Password</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt--9 pb-5 text-gray">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-7">
                        <div class="card form-bg  rounded-4  mb-0 ">

                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center text-white mb-4">
                                    <small>Type your new password.</small>
                                </div>
                                <form role="form" method="post">
                                    <div class="text-center text-danger"><?= $msg; ?></div>
                                    <div class="form-group">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="New Password" type="password"
                                                name="pass" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-merge input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Confirm New Password" type="password"
                                                name="cpass" required>
                                        </div>
                                    </div>
                                    
                                    <div class="text-center">
                                        <input type="submit" class="w-100 btn btn-lg  btn-primary mt-3 animate-up-2"
                                          value="Reset Password" name="submit" > 
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Form End  -->

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

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
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
        $("#register-btn").click(function(e) {
            if ($("#register-form")[0].checkValidity()) {
                e.preventDefault();

                var name = $("#name").val();
                var remail = $("#remail").val();
                var rpassword = $("#rpassword").val();
                var cpassword = $("#cpassword").val();
                $("#register-btn").html(
                    '<img src="dashboard/assets/img/loading/loading.gif"/> &nbsp; Please wait...');

                if (name === '' || remail === '' || rpassword === '' || cpassword === '') {
                    $("#register-btn").html('Register');
                    $("#regAlert").html(
                        '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>All fields are required!</strong></div>'
                    );

                } else {
                    if ($("#rpassword").val() != $("#cpassword").val()) {
                        $("#passError").text("* Password did not matched!");
                        $("#register-btn").val('Register');
                    } else {

                        $("#passError").text("");
                        $.ajax({
                            url: 'assets/php/action.php',
                            method: 'post',
                            data: $("#register-form").serialize() + '&action=register',
                            success: function(response) {

                                $("#register-btn").val('Register');

                                if (response === 'register') {
                                    $("#register-btn").html(
                                        '<img src="dashboard/assets/img/loading/loading.gif"/> &nbsp; Please wait...'
                                    );
                                    setTimeout(' window.location.href = "home.php"; ',
                                        2000);
                                } else {
                                    $("#regAlert").html(response);
                                }
                            }
                        });
                    }
                }
            }
        });

        //Login Ajax Request
        $("#login-btn").click(function(e) {
            e.preventDefault();
            var email = $("#email").val();
            var password = $("#password").val();

            $("#login-btn").html(
                '<img src="dashboard/assets/img/loading/loading.gif"/> &nbsp; Please wait...');
            if (email === '' && password === '') {
                $("#login-btn").html('Login');
                $("#loginAlert").html(
                    '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>All fields are required!</strong></div>'
                );

            } else {
                $.ajax({
                    url: 'assets/php/action.php',
                    method: 'post',
                    data: $("#login-form").serialize() + '&action=login',
                    success: function(response) {

                        $("#login-btn").html('Login');

                        if (response === 'login') {
                            $("#login-btn").html(
                                '<img src="dashboard/assets/img/loading/loading.gif"/> &nbsp; Please wait...'
                            );
                            setTimeout(' window.location.href = "home.php"; ', 2000);
                        } else {
                            $("#loginAlert").html(response);
                            $("#login-btn").html('Login');
                        }
                    }
                });
            }

        });

        //Forgot Password
        $("#forgot-btn").click(function(e) {
            if ($("#forgot-form")[0].checkValidity()) {
                e.preventDefault();
                var femail = $("#femail").val();
                $("#forgot-btn").html(
                    '<img src="dashboard/assets/img/loading/loading.gif"/> &nbsp; Please wait...');

                if (femail === '') {
                    $("#forgot-btn").html('Reset Password');
                    $("#forgotAlert").html(
                        '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Registered is required!</strong></div>'
                    );
                } else {
                    $.ajax({
                        url: 'assets/php/action.php',
                        method: 'post',
                        data: $("#forgot-form").serialize() + '&action=forgot',
                        success: function(response) {

                            $("#forgot-btn").html('Reset Password');

                            if (response === 'forgot') {
                                $("#forgot-btn").html('Reset Password');
                                $("#forgot-form")[0].reset();
                                $("#forgotAlert").html(response);
                            } else {
                                $("#forgotAlert").html(response);
                                $("#forgot-btn").html('Reset Password');
                            }
                        }
                    });
                }
            }
        });

    });
    </script>

</body>

</html>