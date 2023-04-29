<?php 
   session_start();
   include('includes/config.php');
   
       ?>
<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>VAWE|Acceuil</title>
      
<link rel="icon" type="image/x-icon" href="Admin/assets/images/logo1.jpg">
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="css/icons.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="durane/css/bootstrap.css" rel="stylesheet">
    <link href="durane/css/fontawesome-all.css" rel="stylesheet">
    <link href="durane/css/swiper.css" rel="stylesheet">
	<link href="durane/css/magnific-popup.css" rel="stylesheet">
	<link href="durane/css/styles.css" rel="stylesheet">

      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
      
    <link rel="stylesheet" href="includes/alone/css/styles-merged.css">
    
    <link rel="stylesheet" href="includes/alone/css/style.css">
    
   </head>
   <body>
      <!-- Navigation -->

      <?php include('includes/header.php');?>
      <?php include('includes/alone2.php');?>
      <!-- Page Content -->
      <div class="container-fluid">
         <div class="row" style="margin-top: 4%">
            <!-- Blog Entries Column -->
            <div class="col-md-2 mt-4">
               <!-- Categories Widget -->
               <div class="card my-4 border-0" >
                  <h5 class="card-header bg-white border-0">Categories</h5>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-lg-12">
                           <ul class="list-unstyled mb-0">
                              <?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
                                 while($row=mysqli_fetch_array($query))
                                 {
                                 ?>
                              <li class=" mb-2">
                                 <a href="category.php?catid=<?php echo htmlentities($row['id'])?>" class="text-secondary"><?php echo htmlentities($row['CategoryName']);?></a>
                              </li>
                              <?php } ?>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


            
            <div class="col-md-7">
               <!-- Blog Post -->

               <div class="row">
                  <div class="owl-carousel owl-theme" id="slider">
                     <div class="card mb-4 border-0">
                        <div class="card-body">
                           <p class="m-0">

             <div class="container">
             <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <h2 class="primary-heading">Actualités</h2>
                  <h4 class="secondary-heading">VAWE</h4>
                </div>
              </div>
             </div>
             </div>
                 </p>
                           
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                     <div class="card mb-4 border-0">
                        

                        <div class="card-body">
                           <p class="m-0">
                           <div class="container">
             <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <h4 class="primary-heading">Actualités</h4>
                  <h4 class="secondary-heading">VAWE</h4>
                </div>
              </div>
             </div>
             </div>
                            
                           </p>
                           

                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                     <div class="card mb-4 border-0">
                        

                        <div class="card-body">
                           <p class="m-0">
                           <div class="container">
             <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <h4 class="primary-heading">Actualités</h4>
                  <h4 class="secondary-heading">VAWE</h4>
                </div>
              </div>
             </div>
             </div>
                           </p>
                           
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                  </div>

                  <?php 
                     if (isset($_GET['pageno'])) {
                            $pageno = $_GET['pageno'];
                        } else {
                            $pageno = 1;
                        }
                        $no_of_records_per_page = 8;
                        $offset = ($pageno-1) * $no_of_records_per_page;
                     
                     
                        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
                        $result = mysqli_query($con,$total_pages_sql);
                        $total_rows = mysqli_fetch_array($result)[0];
                        $total_pages = ceil($total_rows / $no_of_records_per_page);
                     
                     
                     $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
                     while ($row=mysqli_fetch_array($query)) {
                     ?>
                  <div class="col-md-6">
                     <div class="card mb-4 border-0">
                        <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>" height="200px">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <a class="badge bg-success text-decoration-none link-light" href="category.php?catid=<?php echo htmlentities($row['cid'])?>" style="color:#fff"><?php echo htmlentities($row['category']);?></a>
                              <!--Subcategory--->
                              <a class="badge bg-warning text-decoration-none link-light"  style="color:#fff"><?php echo htmlentities($row['subcategory']);?></a>
                           </p>
                           <p class="m-0"><small> Publié le <?php echo htmlentities($row['postingdate']);?></small></p>
                           <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title"><?php echo htmlentities($row['posttitle']);?></h5>
                           </a>
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                  </div>
                  <?php } ?>
                  <div class="col-md-12">
                    
                     <!-- Pagination -->
                     <!-- <ul class="pagination justify-content-center mb-4">
                        <li class="page-item"><a href="?pageno=1"  class="page-link border-0">First</a></li>
                        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
                           <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link border-0">Prev</a>
                        </li>
                        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
                           <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link border-0">Next</a>
                        </li>
                        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link border-0">Last</a></li>
                        </ul> -->
                  </div>
                  <!-- Static -->
                  <div class="col-md-12">
                     <div class="card mb-4 mt-5 border-0">
                        <img class="card-img-top" src="admin/postimages/bg.jpg" alt="" width="50px">
                        <div class="card-body">
                           <p class="m-0">
                              <!--category-->
                              <a class="badge bg-success text-decoration-none link-light" href="#" style="color:#fff">Vawe</a>
                              <!--Subcategory--->
                              <a class="badge bg-warning text-decoration-none link-light"  style="color:#fff">Vawe</a>
                           </p>
                           <p class="m-0"><small> Posté le 2023-11-11 00:20:09</small></p>
                           <a href="#" class="card-title text-decoration-none text-dark">
                              <h5 class="card-title">la Navigation est trés simple.................. made in cameroon ......
                              </h5>
                           </a>
                           <!-- <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="">Read More &rarr;</a> -->
                        </div>
                     </div>
                  </div>
               </div>
                  <!--
               <img src="images/logo1.jpg" class="img-fluid" height="5"></a>
                     -->
            </div>
            <!-- Sidebar Widgets Column -->
            <?php include('includes/sidebar.php');?>
         </div>
         
      </div>
      <!-- /.row -->
      </div>
      <!-- /.container -->
      <!-- Footer -->
      <?php include('includes/footer.php');?>
   
      <script src="js/foot.js"></script>
      <!-- Bootstrap core JavaScript -->
     
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
    <script src="js/foot.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="includes/alone/js/scripts.js"></script>
    <script src="includes/alone/js/custom.js"></script>


   
    
   
    <script src="durane/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="durane/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
   
    <script src="durane/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
     <script src="durane/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="durane/js/scripts.js"></script> <!-- Custom scripts -->

   





   </body>
</html>
