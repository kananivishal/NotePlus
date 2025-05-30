<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NotePlus</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/noteplus/assets/images/favicon.ico" />
    <link rel="stylesheet" href="/noteplus/assets/css/backend-plugin.min.css?v=1.0.0">
    <link rel="stylesheet" href="/noteplus/assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="/noteplus/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/noteplus/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="/noteplus/assets/vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="/noteplus/assets/vendor/@icon/dripicons/dripicons.css">

    <script src="/noteplus/js/init.js"></script>
</head>

<body class="">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <div class="wrapper">
        <section class="login-content">
            <div class="container h-100">
                <div class="row justify-content-center align-items-center height-self-center">
                    <div class="col-md-5 col-sm-12 col-12 align-self-center">
                        <div class="sign-user_card" id="signup-form">
                            <div class="logo-detail">
                                <div class="d-flex align-items-center">
                                    <img src="/noteplus/assets/images/logo.png" class="img-fluid rounded-normal light-logo logo" alt="logo">
                                    <h4 class="logo-title ml-3">NotePlus</h4>
                                </div>
                            </div>

                            <h3 class="mb-2">Reset Password</h3>
                            <!-- Email Form -->
                            <form id="reset-email">
                                <p id="step-description">Enter your email.</p>
                                <div class="col-lg-12">
                                    <div class="floating-label form-group">
                                        <input class="floating-input form-control" type="email" placeholder="" id="email">
                                        <label>Email</label>
                                    </div>
                                    <div id="EmailError"></div>
                                </div>
                                <button type="button" id="btnresetemail" class="btn btn-primary" onclick="resetEmail()">Next</button>
                            </form>
                            <!-- OTP Form -->
                            <form id="otp-form" style="display:none;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input class="floating-input form-control" type="number" placeholder="" id="otp">
                                            <label>OTP</label>
                                        </div>
                                        <div id="OtpError"></div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary mr-2" onclick="goBack('otp-form')">Back</button>
                                <button type="button" id="btnotp" class="btn btn-primary" onclick="verifyOTP()">Verify OTP</button>
                                <button type="button" id="btnotp" class="btn btn-primary" onclick="">Resend OTP</button>
                                <p class="mt-3 mb-0"></p>
                            </form>
                            <!-- Password Form -->
                            <form id="reset-password" style="display:none;">
                                <p id="step-description">Enter your password.</p>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input class="floating-input form-control" type="password" placeholder="" id="password">
                                            <label>Password</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input class="floating-input form-control" type="password" placeholder="" id="confirmPassword">
                                            <label>Confirm Password</label>
                                        </div>
                                        <div id="PasswordError"></div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary mr-2" onclick="goBack('reset-password')">Back</button>
                                <button type="button" id="btnresetpassword" class="btn btn-primary" onclick="resetPassword()">Submit</button>
                                <p class="mt-3 mb-0"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="/noteplus/js/resetpassword.js"></script>

    <script src="/noteplus/assets/js/backend-bundle.min.js"></script>
    <script src="/noteplus/assets/js/flex-tree.min.js"></script>
    <script src="/noteplus/assets/js/tree.js"></script>
    <script src="/noteplus/assets/js/table-treeview.js"></script>
    <script src="/noteplus/assets/js/sweetalert.js"></script>
    <script src="/noteplus/assets/js/chart-custom.js"></script>
    <script src="/noteplus/assets/js/slider.js"></script>
    <script src="/noteplus/assets/js/app.js"></script>

    <script>
        function goBack(formId) {
            document.getElementById(formId).style.display = "none";
            document.getElementById('email-form').style.display = "none";
            document.getElementById('otp-form').style.display = "none";
            document.getElementById('password-form').style.display = "none";

            if (formId === 'otp-form') {
                document.getElementById('email-form').style.display = "block";
            } else if (formId === 'password-form') {
                document.getElementById('otp-form').style.display = "block";
            }
        }
    </script>
</body>

</html>