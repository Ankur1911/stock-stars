<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="zxx"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">
  
  <meta name="author" content="Themefisher.com">

  <title>Bit-Bank</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font.v-2/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  

</head>

<body id="body">

 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class="preloader">
      <div class="sk-circle1 sk-child"></div>
      <div class="sk-circle2 sk-child"></div>
      <div class="sk-circle3 sk-child"></div>
      <div class="sk-circle4 sk-child"></div>
      <div class="sk-circle5 sk-child"></div>
      <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
      <div class="sk-circle8 sk-child"></div>
      <div class="sk-circle9 sk-child"></div>
      <div class="sk-circle10 sk-child"></div>
      <div class="sk-circle11 sk-child"></div>
      <div class="sk-circle12 sk-child"></div>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->


  

<!--
Fixed Navigation
==================================== -->
<?php include 'api.php' ?>
<?php include 'header.php' ?>

<!-- Srart Contact Us
		=========================================== -->		
	<section class="contact-us section bg-gray" id="contact">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="title text-center">
						<h4>Drop us a note</h4>
						<h2>Contact Us.</h2>
						<span class="border"></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum reiciendis quasi itaque, obcaecati atque sit!</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Contact Form -->
				<div class="contact-form col-12 col-md-6  mx-auto" >
					<form id="contact-form" method="post" action="sendmail.php" role="form">
					
						<div class="form-group">
							<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
						</div>
						
						<div class="form-group">
							<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
						</div>
						
						<div class="form-group">
							<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
						</div>
						
						<div class="form-group">
							<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
						</div>
						
						<div id="mail-success" class="success">
							Thank you. The Mailman is on His Way :)
						</div>
						
						<div id="mail-fail" class="error">
							Sorry, don't know what happened. Try later :(
						</div>
						
						<div id="cf-submit">
							<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
						</div>						
						
					</form>
				</div>
				<!-- ./End Contact Form -->
			</div> <!-- end row -->
			
		</div> <!-- end container -->
	</section> <!-- end section -->

<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>INFORMATION</h3>
          <ul>
            <li><a href="#">Payment Option</a></li>
            <li><a href="#">Free Schedule</a></li>
            <li><a href="#">Getting Started</a></li>
            <li><a href="#">Bitcoin Calculator</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>Our Services</h3>
          <ul>
            <li><a href="#">Graphic Design</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="#">Partners</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">FAQ’s</a></li>
            <li><a href="#">Badges</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>Follow Us</h3>
          <ul>
              <li>
                  <a href="">
                      Facebook
                  </a>
              </li>
              <li>
                  <a href="">
                      Twitter
                  </a>
              </li>
              <li>
                  <a href="">
                      Linkedin
                  </a>
              </li>
              <li>
                  <a href="">
                      Google PLus
                  </a>
              </li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5>Copyright 2017. All rights reserved.</h5>
    <h6>Design and Developed by <a href="">Themefisher</a></h6>
  </div>
</footer> <!-- end footer -->


    <!-- end Footer Area
    ========================================== -->


    
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/dist/js/popper.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    
    <!-- Custom js -->
    <script src="js/script.js"></script>

  </body>
  </html>