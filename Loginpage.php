<?php include('functions.php'); ?>





<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Page 1</title>
    <link rel="stylesheet" href="css/NEWSIGNUP.css" media="screen">
    <link rel="stylesheet" href="css/NewloginPage-1.css" media="screen">
    <!-- <script class="u-script" type="text/javascript" src="js/NEWSIGNUPjquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/NEWSIGNUP.js" defer=""></script> -->
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Welcome to Virtual Chemistry Lab">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Virtual Chemistry Lab</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logovcl.jpeg" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/logovcl.jpeg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" href="bootstrap/bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Chemistry Labs</title>
</head>


<body class="u-body" style="background-color: #f3f3f3;">
    <section class="u-clearfix u-section-1" id="sec-42b3">
        <div class="u-clearfix u-sheet u-sheet-1">
            <img class="u-image u-image-circle u-preserve-proportions u-image-1" src="images/logovcl.jpeg" alt="" data-image-width="73" data-image-height="75">
            <h1 class="u-text u-text-custom-color-2 u-text-1">
                <span class="u-text-custom-color-1">PERFORM CHEMISTRY LAB ANYWHERE</span>
            </h1>
            <a href="index.php" class="u-border-2 u-border-custom-color-3 u-border-hover-custom-color-1 u-btn u-btn-round u-button-style u-hover-custom-color-3 u-none u-radius-50 u-btn-2">HOME</a>
            <img class="u-image u-image-default u-image-2" src="images/loginimage.png" alt="" data-image-width="225" data-image-height="225">
            <div class="u-form u-form-1">
                <form action="Loginpage.php" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
                    <?php echo display_error(); ?>
                    <input type="hidden" id="siteId" name="siteId" value="86215091">
                    <input type="hidden" id="pageId" name="pageId" value="154507076">
                    <!-- <h4 class="u-text u-text-3"> &nbsp;&nbsp; Name</h4> -->
                    <!-- <div class="u-form-group u-form-group-1">
                        <label for="text-9899" class="u-form-control-hidden u-label"></label>
                        <input type="text" placeholder="NAME" id="text-9899" name="text" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                    </div> -->
                    <h4 class="u-text u-text-3">&nbsp; &nbsp;Email</h4>
                    <div class="u-form-group u-form-group-2">
                        <label for="text-b611" class="u-form-control-hidden u-label"></label>
                        <input type="email" placeholder="ENTER EMAIL" id="text-b611" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                    </div> <br>
                    <h4 class="u-text u-text-3">&nbsp; &nbsp;Password</h4>
                    <div class="u-form-group u-form-group-3">
                        <label for="text-7960" class="u-form-control-hidden u-label"></label>
                        <input type="password" placeholder="PASSWORD" id="text-7960" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                    </div>
                    <!-- <h4 class="u-text u-text-3">&nbsp; &nbsp;Confirm Password</h4>
                    <div class="u-form-group u-form-group-4">
                        <label for="text-dc36" class="u-form-control-hidden u-label"></label>
                        <input type="text" placeholder="CONFIRM PASSWORD" id="text-dc36" name="text-3" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                    </div> -->
                    <div class="u-align-left u-form-group u-form-submit">
                        <br>
                        <button type="submit" class="btn btn-success" name="login">Login</button>
              </a>
                        
                    </div>

                </form>
            </div> <br>
            <br><br>
            <br>
            <br>
            <br>
           
               &nbsp; <h3 class="u-text u-text-2">Dont have an account?</h3>
                <a href="NEWSIGNUP.php" class="u-border-2 u-border-custom-color-3 u-border-hover-custom-color-1 u-btn u-btn-round u-button-style u-hover-custom-color-3 u-none u-radius-50 u-btn-2">Create Account</a>
    
       </div>
    </section>



</body>

</html>

<!-- Footer -->
<footer class="page-footer font-medium unique-color-dark">

    <div style="background-color: #49AD09;">
        <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <!-- <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h2 class="mb-0">We will help you how to perform labs!</h2>
                </div> -->
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">

                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i class="fab fa-facebook-f white-text mr-4"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                        <i class="fab fa-twitter white-text mr-4"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic">
                        <i class="fab fa-google-plus-g white-text mr-4"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                        <i class="fab fa-linkedin-in white-text mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fab fa-instagram white-text"> </i>
                    </a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

        <!-- Grid row -->
        <div class="row mt-3">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                <!-- Content -->
                <h3 class="text-uppercase font-weight-bold">VCL</h3>
                <hr class="deep-green accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p style="color: #49AD09;">The Virtual Chemistry Lab is fully interactive simulation in which student perform experiment without physically trying them on. <br> The Virtual Chemistry Lab are fully interactive simulation in which student perform experiment, collect
                    data for most users.</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h3 class="text-uppercase font-weight-bold">Products</h3>
                <hr class="deep-green accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!" style="color: #49AD09;">Video Tutorial</a>
                </p>
                <p>
                    <a href="#!" style="color: #49AD09;">Manuals</a>
                </p>
                <p>
                    <a href="#!" style="color: #49AD09;">Help</a>
                </p>
                <p>
                    <a href="#!" style="color: #49AD09;">Contact</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h3 class="text-uppercase font-weight-bold">Useful links</h3>
                <hr class="deep-green accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!" style="color: #49AD09;">Register</a>
                </p>
                <p>
                    <a href="#!" style="color: #49AD09;">About</a>
                </p>
                <p>
                    <a href="#!" style="color: #49AD09;">Labs</a>
                </p>
                <p>
                    <a href="#!" style="color: #49AD09;">Help</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h3 class="text-uppercase font-weight-bold">Contact</h3>
                <hr class="deep-green accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p style="color: #49AD09;">
                    <i class="fas fa-home mr-3"></i> UIT UNIVERSITY,PAK</p>
                <p style="color: #49AD09;">
                    <i class="fas fa-envelope mr-3"></i>vcl@gmail.com</p>
                <p style="color: #49AD09;">
                    <i class="fas fa-phone mr-3"></i>03352069952</p>
                <p style="color: #49AD09;">
                    <i class="fas fa-print mr-3"></i>03472802815</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="background-color: hsl(97, 48%, 85%);"> © 2022 Copyright:
        <a href="https://virtualchemistry.com/" style="color: #49AD09;">Virtual Chemistry Lab</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->