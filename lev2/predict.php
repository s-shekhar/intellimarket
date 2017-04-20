
<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">


    <title>Rolling - Freelancer Portfolio Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">

    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css1/plugin.css">

    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css1/styleroll.css">

    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>

	  <link rel="stylesheet" href="css1/additional.css" />

    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
	.adder{
		height:108px;
		width:394px;
		position:relative;
		left:800px;
	}
	</style>

 </head>

  <body>



	<!-- Preloader Start -->

    <!-- Preloader End -->



    <!-- Home & Menu Section Start -->
    <header id="home" class="home-section" >

        <div class="header-top-area" style=" background-color: black">
            <div class="container">
                <div class="row">

                    <div class="col-sm-3">
                        <div class="logo">
                            <img src="images/logo.png" style="height:40px;width:160px;">
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse" >
                                    <ul class="nav navbar-nav navbar-right" style=" background-color: black">
                                       <li class="active"><a class="smoth-scroll" href="../index.html">Home <div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="../index.html#portfolio" >Predicting the future</a>
                                        </li>

                                        <li><a class="smoth-scroll" href="../index.html#testimonials">Testimonial</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </header>
    <!-- Home & Menu Section End-->




<div class="position" role="main">

					<section id="top" class="one">


          <br><br><br><br><br><br>

						<img src="images/logo.png" class="adder"/>
              <br><br>
							<hr/>

                                 <?php include("header.php");?>
<?php include("db_connection.php");?>
<?php include("functions.php");?>


              					<section id="top" class="one">
              						<div class="container">
              						<header><h3>Opening Price Prediction For <?php echo $_GET["stock"];?> : -</h3></header>
              						<?php

              							if (isset($_GET["stock"])) {
              								$stock = $_GET["stock"];
              								predict_for_opening_price($stock);
              							}

              						?>

              						</div>
              					</section>
              					<section id="closing" class="two">
              						<div class="container">
              						<header><h3>Closing Price Prediction For <?php echo $_GET["stock"];?> : -</h3></header>
              						<?php

              							if (isset($_GET["stock"])) {
              								$stock = $_GET["stock"];
              								predict_for_closing_price($stock);
              							}

              						?>

              						</div>
              					</section>
						</div>


					</section>


          <section id="portfolio" class="two">
          <div class="container">


          </div>

    <!-- About Start -->

    <!-- Footer End -->


    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- Back to Top End -->


    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min2.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0HAKwKinpoFKNGUwRBgkrKhF-sIqFUNA"></script>

    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>


  </body>
 </html>
