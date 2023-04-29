<?php 
   session_start();
   include('includes/config.php');
   
       ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>MyBlog|Acceuil</title>
      <link rel="icon" type="image/x-icon" href="Admin/assets/images/logo1.jpg">
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/modern-business.css" rel="stylesheet">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

      
    <link rel="stylesheet" href="includes/alone/css/styles-merged.css">
    <link rel="stylesheet" href="includes/alone/css/style.min.css">
    
   </head>
   <body>
      <!-- Navigation -->

      <alone>


      <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white fixed-top">
   <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/logo.png" height="65"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
         <ul class="navbar-nav1">
            <li class="nav-item">
               <a class="nav-link" href="indexx.php"><i class="fa fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#"><i class="fa fa-info-circle"></i> About</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#"><i class="fa-newspaper-o fa"></i> News</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="contact-us.php"><i class="fa fa-phone"></i> Contact us</a>
            </li>
         </ul>
      </div>
      <div>
         <div id="google_translate_element"></div>
      </div>
   </div>
</nav>


</alone>


      <script src="js/foot.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script>
         $('#slider').owlCarousel({
           loop:true,
           margin:10,
           nav:false,
           dots:false,
           autoplay:true,
           animateOut: 'fadeOut',
           responsive:{
               0:{
                   items:1
               },
               600:{
                   items:1
               },
               1000:{
                   items:1
               }
           }
         });
         $('#slider2').owlCarousel({
           loop:true,
           margin:10,
           nav:false,
           dots:false,
           autoplay:true,
           animateOut: 'fadeOut',
           responsive:{
               0:{
                   items:1
               },
               600:{
                   items:1
               },
               1000:{
                   items:4
               }
           }
         });
      </script>

<script src="includes/alone/js/scripts.min.js"></script>
    <script src="includes/alone/js/custom.min.js"></script>

   </body>
</html>