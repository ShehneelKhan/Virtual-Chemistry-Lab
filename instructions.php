<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labs Instruction Page</title>
    <style>
        body {
            background-color: #1a1a1a;
        }
        
        .buttonDownload {
            display: inline-block;
            position: relative;
            padding: 10px 25px;
          
            background-color: #4CC713;
            color: white;
          
            font-family: sans-serif;
            text-decoration: none;
            font-size: 0.9em;
            text-align: center;
            text-indent: 15px;
        }
        
        .buttonDownload:hover {
            background-color: #333;
            color: white;
        }
        
        .buttonDownload:before, .buttonDownload:after {
            content: ' ';
            display: block;
            position: absolute;
            left: 15px;
            top: 52%;
        }
        
        /* Download box shape  */
        .buttonDownload:before {
            width: 10px;
            height: 2px;
            border-style: solid;
            border-width: 0 2px 2px;
        }
        
        /* Download arrow shape */
        .buttonDownload:after {
            width: 0;
            height: 0;
            margin-left: 3px;
            margin-top: -7px;
          
            border-style: solid;
            border-width: 4px 4px 0 4px;
            border-color: transparent;
            border-top-color: inherit;
            
            animation: downloadArrow 2s linear infinite;
            animation-play-state: paused;
        }
        
        .buttonDownload:hover:before {
            border-color: #4CC713;
        }
        
        .buttonDownload:hover:after {
            border-top-color: #4CC713;
            animation-play-state: running;
        }
        
        /* keyframes for the download icon anim */
        @keyframes downloadArrow {
            /* 0% and 0.001% keyframes used as a hackish way of having the button frozen on a nice looking frame by default */
            0% {
                margin-top: -7px;
                opacity: 1;
            }
            
            0.001% {
                margin-top: -15px;
                opacity: 0;
            }
            
            50% {
                opacity: 1;
            }
            
            100% {
                margin-top: 0;
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <!doctype html>
<html lang="en">

<head>
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

<body style="background-color: #f3f3f3;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">CHEMISTRY LAB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="labs.php">Labs</a>
                </li>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="studentprogressindex.php">Progress</a>
                </li>


        </div>



        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="mx-2">
            <button class="btn btn-success" data-toggle="modal" data-target="#loginModal">Login</button>
            <button class="btn btn-success" data-toggle="modal" data-target="#signupModal">SignUp</button>
        </div> -->
        <a class="btn btn-success" href="Loginpage.php" role="button">Login</a>&nbsp;&nbsp;
        <a class="btn btn-success" href="NEWSIGNUP.php" role="button">Sign-Up</a>
        </div>
    </nav>



    <!-- Login Modal -->
    <!-- <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login to Virtual Chemistry Lab</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-success">Login</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> -->


    <!-- Sign Up Modal -->
    <!-- <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Get an Virtual Chemsirty Lab Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="cexampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" id="cexampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-success">Creat Account</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> -->


    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Chemistry</strong>
                        <h3 class="mb-0">Lab 1</h3>
                        <!-- <div class="mb-1 text-muted">FEB 11</div> -->
                        <p class="mb-auto" style="color: #1b4402;;">EXPERIMENT NO 1: <br> TO CUT AND BEND A GLASS TUBE AND DRAW A JET.</p>
                        <a href="record-Page-1.php" class="stretched-link">VCL-1</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="images/lab-image12.png" alt="">

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Chemistry</strong>
                        <h3 class="mb-0">Lab 2</h3>
                        <!-- <div class="mb-1 text-muted">Nov 11</div> -->
                        <p class="mb-auto" style="color: #1b4402;;">EXPERIMENT NO 2: <br> TO DETERMINE THE BOILING POINT OF GIVEN LIQUID.</p>
                        <a href="#" class="stretched-link">VCL-2</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="images/lab-image14.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Chemistry</strong>
                        <h3 class="mb-0">Lab 3</h3>
                        <!-- <div class="mb-1 text-muted">Nov 11</div> -->
                        <p class="mb-auto" style="color: #1b4402;;">EXPERIMENT NO 3: <br> TO DETERMINE BOILING POINT OF A GIVEN LIQUID. </p>
                        <a href="#" class="stretched-link">VCL-3</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="images/lab-image6.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Chemistry</strong>
                        <h3 class="mb-0">Lab 4</h3>
                        <!-- <div class="mb-1 text-muted">Nov 11</div> -->
                        <p class="mb-auto" style="color: #1b4402;;">EXPERIMENT NO 4: <br> TO PURIFY THE GIVEN SAMPLE OF COPPER SULPHATE BY CRYSTALLIZATION.</p>
                        <a href="#" class="stretched-link">VCL-4</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="images/lab-image8.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Chemistry</strong>
                        <h3 class="mb-0">Lab 5</h3>
                        <!-- <div class="mb-1 text-muted">Nov 11</div> -->
                        <p class="mb-auto" style="color: #1b4402;;">EXPERIMENT NO 5: <br> TO PERPARE THE STANDARD SOLUTION OF OXALIC ACID.</p>
                        <a href="#" class="stretched-link">VCL-5</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="images/lab-image3.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Chemistry</strong>
                        <h3 class="mb-0">Lab 6</h3>
                        <!-- <div class="mb-1 text-muted">Nov 11</div> -->
                        <p class="mb-auto" style="color: #1b4402;;">EXPERIMENT NO 6: <br> TO STANDADIZED THE GIVEN SOLUTION OF SODIUM HYDROXIDE USING OXALIC ACID.</p>
                        <a href="#" class="stretched-link">VCL-6</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="images/lab-image2.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Chemistry</strong>
                        <h3 class="mb-0">Lab 7</h3>
                        <!-- <div class="mb-1 text-muted">Nov 11</div> -->
                        <p class="mb-auto" style="color: #1b4402;;">EXPERIMENT NO 7: <br> TO TEST THE PASSAGE OF ELECTRIC CURRENT THROUGH ELETROLYTIC AND NON-ELECTROLYTIC SOLUTIONS.</p>
                        <a href="#" class="stretched-link">VCL-7</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="images/lab-image10.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Chemistry</strong>
                        <h3 class="mb-0">Lab 8</h3>
                        <!-- <div class="mb-1 text-muted">Nov 11</div> -->
                        <p class="mb-auto" style="color: #1b4402;;">EXPERIMENT NO 8: <br> GENERAL LAB .</p>
                        <a href="#" class="stretched-link">VCL-8</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="images/lab-image9.jpg" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
<!-- Footer -->
<footer class="page-footer font-medium unique-color-dark">

    <div style="background-color: #49AD09;">
        <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h2 class="mb-0">We will help you how to perform labs!</h2>
                </div>
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
    <!-- <a href="#" class="buttonDownload">Download</a> -->
</body>
</html>