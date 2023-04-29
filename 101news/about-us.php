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

    <title>VAWE | Sur Nous</title>
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
	
	<!-- Favicon  -->
    
    
  </head>

  <body>

    <!-- Navigation -->
    <?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">.<br><br>..<br>

            <?php 
            $pagetype='aboutus';
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
        <li class="breadcrumb-item active">Sur Nous</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">

          <p><?php echo $row['Description'];?></p>
        </div>
      </div>





      <!-- /.row -->
     <?php } ?>
     <br>
     <br>
       <div class="footer">
           <div class="container">
             <div class="row">
                     <div class="col-md-4">
                    
                     <div class="footer-col last">
                                <a href="includes/Presentation.pdf">
                                 <h4>Telecharger la documentation de vawe</h4>
                                 </a>
                            <span class="fa-stack">
                                <a href="includes/Presentation.pdf" backgroud-position="center">
                                  <i class="fas fa-circle fa-stack-2x"></i>
                                 <i class="bi bi-download "> <img class="card-image" src="includes/pdf.png" alt=""width ="100px">
                                </a></i>
                            </span>
                     </div>
                 </div>
            </div>
            </div>
        </div>


    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="durane/images/testimonials-2-men-talking.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <h2>MEMBRES</h2>

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="durane/images/testimonial-1.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">
                                            Branly est sociologue et environnementaliste. Enseignant-chercheur associé au Centre Africain
                                            d'Études Internationales Diplomatiques et Stratégiques (CEIDES), il est également consultant
                                            permanent au Centre de Recherche et d’Action pour le Développement en Afrique (CERAD).
                                            Il est détenteur d’un Master I en sociologie, (option Ruralité et Urbanité) et un Master II en Coopération
                                            Internationale, Action Humanitaire et Développement Durable, (option Management Environnementale
                                            et Développement Durable) tous de l'Institut des Relations Internationales du Cameroun (IRIC).
                                            Auteur d'ouvrages et de plusieurs articles, il est membre de plusieurs Think Thank. Sa très
                                            longue expérience dans le conseil en développement durable auprès des organisations
                                            publiques et non gouvernementales lui a value la reconnaissance de ses pairs.
                                                                                            </p>
                                            <p class="testimonial-author">Branly Fomekong Kenne</p>
                                            <p class="testimonial-author">Secrétaire Général</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="durane/images/testimonial-2.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">
                                                
                                            Eliane est consultante et responsable des Opérations au sein de Knowdys Cameroun.
                                                Technicienne supérieure en infographie, en photographie et en audiovisuelle, elle est par
                                                ailleurs promotrice de Joy Events Agency, entreprise spécialisée dans l’ évènementiel et les
                                                prestations de services dont le siège se trouve à Yaoundé.
                                                Elle est Diplômée en art graphique et en communication visuelle mais également en
                                                management responsable, obtenu en 2019 à l’Université Laval (Canada).
                                                Certes son cœur de métier repose principalement sur la communication visuelle, mais elle est
                                                rompue à la conduite et à la gestion de projets de promotion et d’autonomisation des femmes
                                                vulnérables, de par sa passion pour les approches interdisciplinaires.
                                            <p class="testimonial-author">Présidente</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="durane/images/testimonial-3.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Love their services and was so amazed with
                                                Georges est chargé de cours à la FSJP de l'Université de Yaoundé 2- Cameroun. Engagé pour la 
                                                cause environnementale, il est promoteur de l'association Environment Lover's (EL's) qui œuvre 
                                                dans la protection de l'environnement.
                                                Il est titulaire d'un doctorat PhD en droit privé obtenu en 2020 à l'Université de Maastricht 
                                                (Hollande). 
                                                Il est auteur de plusieurs publications notamment en droit pénal, en droit pénal de 
                                                l’environnement et en droit de l’environnement.
</p>
                                            <p class="testimonial-author">Georges Franck Ondoua Akoa PhD</p>
                                            <p class="testimonial-author">ecrétaire Général Adjoint</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->

                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="durane/images/testimonial-2.svg" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">
                                                
                                                Assiatou est enseignante et responsable administrative au groupe scolaire les Cherubin. Elle est
                                                également membre active de plusieurs associations et est engagée auprès des populations dans
                                                le cadre du comite de développement rural.
                                                Elle est Diplômée de l’École Normale d’Instituteurs de l’Enseignement Général, et détient la
                                                certification notamment dans le domaine de l’entrepreneuriat artisanal.

                                            <p class="testimonial-author">Assiatou Youape Njoya</p>
                                            <p class="testimonial-author">Trésorière</p>
                                        </div>
                                    </div>        
                                </div> 


                                <!-- end of slide -->
                               
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->


    <!-- About -->
    <div id="about" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Info sur Vawe</h2>


                    <p class="p-heading p-large">
                            VaWE est une organisation de développement 
                            pour la promotion de la femme. Elle prône le 
                            Développement Humain Durable par 
                            l'autopromotion à la base.
                            VaWE se concentre sur les petites entreprises en 
                            général et sur les initiatives de production qui 
                            génèrent des revenus et des emplois dans tous 
                            les secteurs. 
                            L'autonomisation va de la force personnelle au 
                           renforcement de l'efficacité des femmes.
                    
                    </p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->

       </div>
       </div>
                    
                   

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
               
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Lien important</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">???????? <a class="turquoise" href="#your-link">???????.com</a></div>
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

            </div>
    
    	
    <!-- Scripts -->
    <script src="durane/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
   
    <script src="durane/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="durane/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    
    <script src="durane/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="durane/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="durane/js/scripts.js"></script> <!-- Custom scripts -->



    <!-- /.container -->

    <!-- Footer -->
 <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
