<?php
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: Loginpage.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FYP-FRONTEND-DESIGN</title>
    <meta name="description" content="Welcome to Virtual Chemistry Lab.">

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
    <style>
        .divv1 {
            background-color: rgb(1, 106, 25);
            color: rgb(250, 250, 250);
        }
        
        .divv2 {
            background-color: rgb(1, 106, 25);
            color: rgb(250, 250, 250);
        }
        
        .divv3 {
            background-color: rgb(1, 106, 25);
            color: rgb(250, 250, 250);
        }
        
        .divv4 {
            background-color: rgb(1, 106, 25);
            color: rgb(250, 250, 250);
        }
        
        .divv5 {
            background-color: rgb(1, 106, 25);
            color: rgb(250, 250, 250);
        }
        
        .divv6 {
            background-color: rgb(1, 106, 25);
            color: rgb(250, 250, 250);
            
        }
    </style>

</head>

<body style="background-color: #f3f3f3;">

<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src=""  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['name']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['studentorteacher']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>

<!-- <h1 align="center" style="color: #49AD09;">Virtual Chemistry Lab</h1> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="color: rgb(1, 1, 15);">
        <a class="navbar-brand" href="#">VIRTUAL CHEMISTRY LAB</a>
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
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>

                <li>
                    <a class="nav-link active" href="labs.php">Labs</a>
                </li>

                




            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form> -->
            <!-- <div class="mx-2">
                <button class="btn btn-success" data-toggle="modal" data-target="#loginModal">Login</button>
                <button class="btn btn-success" data-toggle="modal" data-target="#signupModal">SignUp</button>
            </div> -->
            <a class="btn btn-success" href="Loginpage.php" role="button">Login</a>&nbsp;&nbsp;
            <a class="btn btn-success" href="NEWSIGNUP.php" role="button">Sign Up</a>
        </div>
    </nav>




    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/ipagepic.jpg" height="470"  class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 style="color: rgb(255,255, 255); font-size: 40px;">
                    <b>Welcome To Virtual Chemisty Lab <br>We Will Help You To Provide a Platform Where You Can Practice Chemistry Lab For Exam.</h2></b>

                    <!-- <button class="btn-primary">Python</button>
                    <button class="btn-success">Technology</button>
                    <button class="btn-danger">Code</button> -->
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <div class="carousel-item">
                <img src="images/picc5.jpg" class="d-block w-100" alt="...">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h2>Design Hard</h2>
                    <p>Coding and design skills are more in demand today than ever before, but both learning and executing web design can be daunting for beginners, novices, and professionals alike.</p>

                </div> -->
            </div>
            <div class="carousel-item">
                <img src="images/picc5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h2>Content Strategy</h2>
                    <p>Content strategy focuses on the planning, creation, delivery, and governance of content. ... Ensuring that you have useful and usable content, that is well structured, and easily found is vital to improving the user experience of a
                        website.
                    </p> -->
                </div>
            </div>
        </div>

    </div>

    </div><br>
    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Chemistry</strong>
                        <h3 class="mb-0">Lab 1</h3>
                        <!-- <div class="mb-1 text-muted">FEB 11</div> -->
                        <p class="mb-auto" style="color: #1b4402;">EXPERIMENT NO 1: <br> TO CUT AND BEND A GLASS TUBE AND DRAW A JET.</p>
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
                        <p class="mb-auto" style="color: #1b4402;">EXPERIMENT NO 2: <br> TO DETERMINE THE BOILING POINT OF GIVEN LIQUID.</p>
                        <a href="record-Page-1.php" class="stretched-link">VCL-2</a>
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
                        <p class="mb-auto" style="color: #1b4402;">EXPERIMENT NO 3: <br> TO DETERMINE BOILING POINT OF A GIVEN LIQUID. </p>
                        <a href="record-Page-1.php" class="stretched-link">VCL-3</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="images/lab-image-4.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Chemistry</strong>
                        <h3 class="mb-0">Lab 4</h3>
                        <!-- <div class="mb-1 text-muted">Nov 11</div> -->
                        <p class="mb-auto" style="color: #1b4402;">EXPERIMENT NO 4: <br> TO PURIFY THE GIVEN SAMPLE OF COPPER SULPHATE BY CRYSTALLIZATION.</p>
                        <a href="record-Page-1.php" class="stretched-link">VCL-4</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="images/lab-image9.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Chemistry</strong>
                        <h3 class="mb-0">Lab 5</h3>
                        <!-- <div class="mb-1 text-muted">Nov 11</div> -->
                        <p class="mb-auto" style="color: #1b4402;">EXPERIMENT NO 5: <br> TO PERPARE THE STANDARD SOLUTION OF OXALIC ACID.</p>
                        <a href="record-Page-1.php" class="stretched-link">VCL-5</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="images/lab-image1.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Chemistry</strong>
                        <h3 class="mb-0">Lab 6</h3>
                        <!-- <div class="mb-1 text-muted">Nov 11</div> -->
                        <p class="mb-auto" style="color: #1b4402;">EXPERIMENT NO 6: <br> TO STANDADIZED THE GIVEN SOLUTION OF SODIUM HYDROXIDE USING OXALIC ACID.</p>
                        <a href="record-Page-1.php" class="stretched-link">VCL-6</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="images/lab-image5.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Chemistry</strong>
                        <h3 class="mb-0">Lab 7</h3>
                        <!-- <div class="mb-1 text-muted">Nov 11</div> -->
                        <p class="mb-auto" style="color: #1b4402;">EXPERIMENT NO 7: <br> TO TEST THE PASSAGE OF ELECTRIC CURRENT THROUGH ELETROLYTIC AND NON-ELECTROLYTIC SOLUTIONS.</p>
                        <a href="record-Page-1.php" class="stretched-link">VCL-7</a>
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
                        <h3 class="mb-0">Lab 8</h3>
                        <!-- <div class="mb-1 text-muted">Nov 11</div> -->
                        <p class="mb-auto" style="color: #1b4402;">EXPERIMENT NO 8: <br> GENERAL LAB .</p>
                        <a href="record-Page-1.php" class="stretched-link">VCL-8</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="images/lab-image11.png" alt="">

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

    <!-- gallery portion aim project goal -->
    <div class="bar text-light bg-black">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo mt-2 ml-0">
                        <img width="1520px" height="200" class="circle" src="images/indexpicc6.jpg" alt="">
                    </div>

                </div>
                <div class="col-md-3 head-button  ">
                    <!-- <button type="button" class="btn btn1 btn-outline-light ml-3">REGISTER</button> -->
                    <button type="button" class="btn  btn2 btn-outline-dark ml-3">PROJECT</button>
                    <p style="color: #1b4402;">This project is based on the practical part of chemistry <br> but of course it is linked with theoretical chemistry as well because <br> there would be nothing to experiment on when there is not theories or concepts. </p>
                </div>

                <div class="col-md-3 head-button  ">
                    <!-- <button type="button" class="btn btn1 btn-outline-light ml-3">REGISTER</button> -->
                    <button type="button" class="btn  btn2 btn-outline-dark ml-3">AIM</button>
                    <p style="color: #1b4402">The main aim of the project is to provide the opportunity for those students who either lives in the remote areas of the country or may not be able to physically attend the lab sessions in the colleges/schools.</p>
                </div>
                <div class="col-md-3 head-button  ">
                    <!-- <button type="button" class="btn btn1 btn-outline-light ml-3">REGISTER</button> -->
                    <button type="button" class="btn  btn2 btn-outline-dark ml-3">GOAL</button>
                    <p style="color: #1b4402">“Virtual Chemistry Lab” project goal is to keep all those flaws in observation and make this a better platform for students to learn and for teachers to evaluate by fulfilling the flaws and adding more innovative features to make it
                        interesting. </p>
                </div>

            </div>
        </div>

    </div>
    <br>


</body>

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

<!-- Footer -->
<footer class="page-footer font-medium unique-color-dark">

    <div style="background-color: #49AD09; width: 1px;" >
        <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <!-- <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0" style="width: 30;">
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
            <!-- <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"> -->

                <!-- Links -->
                <!-- <h3 class="text-uppercase font-weight-bold">Products</h3>
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

            </div> -->
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



</html>