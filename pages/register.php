<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NotePlus | Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/noteplus/assets/images/favicon.ico" />
    <link rel="stylesheet" href="/noteplus/assets/css/backend-plugin.min.css?v=1.0.0">
    <link rel="stylesheet" href="/noteplus/assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="/noteplus/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/noteplus/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="/noteplus/assets/vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="/noteplus/assets/vendor/@icon/dripicons/dripicons.css">
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

                            <h3 class="mb-2">Sign Up</h3>
                            <p id="step-description">Enter your email.</p>
                            <!-- Email Form -->
                            <form id="email-form">
                                <div class="col-lg-12">
                                    <div class="floating-label form-group">
                                        <input class="floating-input form-control" type="email" placeholder="" id="email">
                                        <label>Email</label>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" onclick="nextStep('email-form', 'otp-form')">Next</button>
                                <p class="mt-3 mb-0">Already have an Account <a href="/noteplus/pages/login.php" class="text-primary"><b>Sign In</b></a></p>
                            </form>

                            <!-- OTP Form -->
                            <form id="otp-form" style="display:none;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input class="floating-input form-control" type="number" placeholder="" id="otp" disabled>
                                            <label>OTP</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" onclick="nextStep('otp-form', 'password-form')">Verify OTP</button>
                                <p class="mt-3 mb-0"></p>
                            </form>
                            <form id="password-form" style="display:none;">
                                <p id="step-description">Enter your password.</p>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input class="floating-input form-control" type="password" placeholder="" disabled>
                                            <label>Password</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input class="floating-input form-control" type="password" placeholder="" disabled>
                                            <label>Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary">Submit</button>
                                <p class="mt-3 mb-0"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Your existing script tags -->
    <script src="/noteplus/assets/js/backend-bundle.min.js"></script>
    <script src="/noteplus/assets/js/flex-tree.min.js"></script>
    <script src="/noteplus/assets/js/tree.js"></script>
    <script src="/noteplus/assets/js/table-treeview.js"></script>
    <script src="/noteplus/assets/js/sweetalert.js"></script>
    <script src="/noteplus/assets/js/chart-custom.js"></script>
    <script src="/noteplus/assets/js/slider.js"></script>
    <script src="/noteplus/assets/js/app.js"></script>

    <script>
        function nextStep(currentFormId, nextFormId) {
            // Validate current form data if needed
            var isValid = true; // Add your validation logic

            if (isValid) {
                // Hide current form and show next form
                document.getElementById(currentFormId).style.display = 'none';
                document.getElementById(nextFormId).style.display = 'block';

                // Update step description
                if (nextFormId === 'otp-form') {
                    document.getElementById('step-description').innerText = 'Enter the OTP sent to your email.';
                } else if (nextFormId === 'password-form') {
                    document.getElementById('step-description').innerText = 'Create your account by setting a password.';
                }
            }
        }

        function verifyOTP() {
            // Add your logic to verify the OTP
            var isOTPVerified = true; // Change this to actual verification logic

            if (isOTPVerified) {
                // Update step description
                document.getElementById('step-description').innerText = 'OTP Verified. Enter your password.';

                // Hide OTP form and show Password form
                document.getElementById('otp-form').style.display = 'none';
                document.getElementById('password-form').style.display = 'block';
            } else {
                // Handle case where OTP is not verified
                alert('Invalid OTP. Please try again.');
            }
        }
    </script>
</body>

</html>