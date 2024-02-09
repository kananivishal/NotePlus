<!doctype html>
<html lang="en">

<?php
if (isset($_COOKIE['TOKEN'])) {
   header("Location: /noteplus/");
}
?>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>NotePlus</title>

   <!-- Favicon -->
   <link rel="shortcut icon" href="../assets/images/favicon.ico" />
   <link rel="stylesheet" href="../assets/css/backend-plugin.min.css?v=1.0.0">
   <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.0">
   <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
   <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
   <link rel="stylesheet" href="../assets/vendor/@icon/dripicons/dripicons.css">

   <script src="/noteplus/js/init.js"></script>
</head>

<body class=" ">
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
                  <div class="sign-user_card">
                     <div class="logo-detail">
                        <div class="d-flex align-items-center"><img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo logo" alt="logo">
                           <h4 class="logo-title ml-3">NotePlus</h4>
                        </div>
                     </div>
                     <h3 class="mb-2">Sign In</h3>
                     <p>Login to stay connected.</p>
                     <form onsubmit="login(); return false;">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="email" id="email" placeholder=" ">
                                 <label>Email</label>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="floating-label form-group">
                                 <input class="floating-input form-control" type="password" id="password" placeholder=" ">
                                 <label>Password</label>
                              </div>
                              <div id="message"></div>
                           </div>
                           <div class="col-lg-6">
                              <!-- <div class="custom-control custom-checkbox mb-3 text-left">
                                 <input type="checkbox" class="custom-control-input" id="customCheck1">
                                 <label class="custom-control-label" for="customCheck1">Remember Me</label>
                              </div> -->
                           </div>
                           <div class="col-lg-6">
                              <a href="/noteplus/pages/forgot-password.php" class="text-primary float-right">Forgot Password?</a>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign In</button>
                        <p class="mt-3 mb-0">
                           Create an Account <a href="/noteplus/pages/register.php" class="text-primary"><b>Sign Up</b></a>
                        </p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>

   <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
   <script src="/noteplus/js/login.js"></script>

   <!-- Backend Bundle JavaScript -->
   <script src="../assets/js/backend-bundle.min.js"></script>

   <!-- Flextree Javascript-->
   <script src="../assets/js/flex-tree.min.js"></script>
   <script src="../assets/js/tree.js"></script>

   <!-- Table Treeview JavaScript -->
   <script src="../assets/js/table-treeview.js"></script>

   <!-- SweetAlert JavaScript -->
   <script src="../assets/js/sweetalert.js"></script>

   <!-- Chart Custom JavaScript -->
   <script src="../assets/js/chart-custom.js"></script>

   <!-- slider JavaScript -->
   <script src="../assets/js/slider.js"></script>

   <!-- app JavaScript -->
   <script src="../assets/js/app.js"></script>

   <script type="text/javascript">
      function preventBack() {
         window.history.forward();
      }
      setTimeout("preventBack()", 0);
      window.onunload = function() {
         null
      };
   </script>



</body>

</html>