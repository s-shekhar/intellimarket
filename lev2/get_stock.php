
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
		left:300px;
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

    <?php include("header.php");?>
<?php include("stock_function.php");?>
<?php include("functions.php");?>
<?php include("stock_data.php");?>

<div id="main">


          <br><br><br><br><br>

							<img src="images/logo.png" class="adder"/>
              <br><br>



              <?php
              	global $yahoo_finance_tags;
              	if ( isset($_POST["symbol"]) && !(trim($_POST["symbol"]) === "" )) {
              	 	$symbol = $_POST["symbol"];
              		// Getting Facebook Data
              		$stock_data = get_stock_data_from_yahoo_finance_pv($symbol, $e);

              	 }else{
              	 	redirect_to("../index.html");
              	 }

              ?>



              					<section class="place">
              						<div class="tablee">
              						<header><h2>Current Stock Quotes For <?php echo $stock_data["n"];?></h2></header>
              						<?php
              							if ($stock_data != -1) {
              	    				?>
              	    				<table>
              	    					<?php
              		    					foreach ($stock_data as $key => $value) {
              		    						$string = "<tr>";
              		    						$string .= "<td>" . $yahoo_finance_tags[$key] . "  : -</td>";
              		    						$string .= "<td>" . $value . "</td>";
              		    						$string .= "<tr>";
              		    						echo $string;
              		    					}
              	    					?>
              	    				</table>


              	    				<?php
              							} else{
              							    echo "<h2>No stock data is available. The detail of the error is: {$e}</h2>";
              							}
              						?>


						</div>
<div class="adjust">
							<!-- Start of Yahoo! Finance code -->
							<iframe allowtransparency="true" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" src="http://badge.finance.yahoo.com/instrument/1.0/GOOG,FB,MSFT,AMZN,IBM,AAPL,GE,TWTR/badge;chart=1y;news=5;quote/HTML?AppID=PGIdZ1QoWGOdXdhlFXcOUERCopTq&sig=4KGCIVjnjfEqOJ9lchD19WqNps8-&t=1399448920379" width="300px" height="1654px"><a href="http://finance.yahoo.com">Yahoo! Finance</a><br/><a href="http://finance.yahoo.com/q?s=GOOG">Quote for GOOG</a></iframe>
							<!-- End of Yahoo! Finance code -->

						</div>

					</section>










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
