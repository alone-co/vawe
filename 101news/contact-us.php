<?php
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VAWE | Contactez-Nous </title>
    <link rel="icon" type="image/x-icon" href="Admin/assets/images/logo1.jpg">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    
    
    <link rel="stylesheet" href="css/icons.css">


    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="durane/css/bootstrap.css" rel="stylesheet">
    <link href="durane/css/fontawesome-all.css" rel="stylesheet">
    <link href="durane/css/swiper.css" rel="stylesheet">
	<link href="durane/css/magnific-popup.css" rel="stylesheet">
	<link href="durane/css/styles.css" rel="stylesheet">
	
  </head>

  <body>

    <!-- Navigation -->
    <?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">

<?php 
$pagetype='contactus';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
      <h1 class="mt-5 mb-3 text-center"><?php echo htmlentities($row['PageTitle'])?>
  
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Acceuil</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">

          <p><?php 
          
          //echo $row['Description'];?></p>
        </div>
      </div>
      <!-- /.row -->
<?php } ?>
    
    </div>
    <!-- /.container -->

 <!-- Contact -->
 <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contactez-Nous</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Vulnerable Women’s Empowerment</li>
                        <li><i class="fas fa-map-marker-alt"></i>Nouvelle route Bastos, B.P: 35605 Yaounde , Cameroun</li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:+237 675 00 45 40">+237 675 00 45 40</a></li>
                        <li><i class="fas fa-envelope"></i><a class="turquoise" href="vwomenempowerment@gmail.com">vwomenempowerment@gmail.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/#" allowfullscreen></iframe>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    
                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Nom</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Votre message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Envoyer votre  MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>VAWE</h4>
                        <p>Vulnerable Women’s Empowerment</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Lien important</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">??? <a class="turquoise" href="#your-link">?????.com</a></div>
                            </li>
                            
                        </ul>
                    </div>
                </div> <!-- end of col -->
                
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Suivez-Nous sur les reseaux sociaux</h4>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google-plus-g fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    
     <!-- Scripts -->
     <script src="durane/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
   
   <script src="durane/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
   <script src="durane/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
   
   <script src="durane/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
   <script src="durane/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
   <script src="durane/js/scripts.js"></script> <!-- Custom scripts -->






















    <!-- Footer -->
 <?php include('includes/footer.php');?>

 <script src="js/foot.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
