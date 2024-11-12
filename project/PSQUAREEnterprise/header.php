
<?php

function active($currect_page){
	  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
	  $url = end($url_array);  
	  if($currect_page == $url){
		  echo 'active'; //class name in css 
	  } 
	}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PSQUARE ENTERPRISE - Packaging Material</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>29 Gopal charan, Odhav, Gujarat</small>
                </div>
                <a class="h-100 d-inline-flex align-items-center py-3">
                    <small class=""><img src="img/slider/logo.png"> </small>
                    <a href="https://IndiaMART.in/YERdXgnQ">https://IndiaMART.in/YERdXgnQ</a>
                
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+91 9574512698</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                    <?php
					if(isset($_SESSION['userid']))
					{
					?>
					<a href="profile">
						<i class="fa fa-2x fa-user text-primary mr-3"></i>
						<div class="text-left">
							<h6 class="font-weight-semi-bold mb-1">
								Hi ..<?php echo $_SESSION['username']?>/ MyAccount
							</h6>
						</div>
					</a>
					<?php	
					}
					?>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
					<a href="">
                        <img src="img/psquare_logo.png"/>
								</a>
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">PSQUARE ENTERPRISE</h2>
        </a>    
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
             <a href="index" class="nav-item nav-link <?php active('index')?>">Home</a>
             <br>
             <a href="about" class="nav-item nav-link <?php active('about')?>">About</a>
             <br>
             <!--<a href="service" class="nav-item nav-link <?php active('servic')?>">Service</a>-->
             <br>
             <div class="nav-item dropdown">
             <a href="categories" class="nav-link  <?php active('categories')?>">Categories</a>
                    </div>
             <br> 

             <a href="getquote" class="nav-link  <?php active('getquote')?>">get quote</a>
             
             <br>
             <a href="contact" class="nav-item nav-link <?php active('contact')?>">Contact</a>
            </div>
 

            <?php
						if(isset($_SESSION['userid']))
						{
						?>
							 <a href="userlogout" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Logout</a>
						<?php
						}
						else
						{
						?>
							 <a href="login" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login</a>
						<?php
						}
						?>
        </div>
    </nav>
    <!-- Navbar End -->