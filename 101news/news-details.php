<?php 
   session_start();
   include('includes/config.php');
   //Genrating CSRF Token
   if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
   }
   
   if(isset($_POST['submit']))
   {
     //Verifying CSRF Token
   if (!empty($_POST['csrftoken'])) {
       if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
   $name=$_POST['name'];
   $email=$_POST['email'];
   $comment=$_POST['comment'];
   $postid=intval($_GET['nid']);
   $st1='0';
   $query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
   if($query):
     echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
     unset($_SESSION['token']);
   else :
    echo "<script>alert('Something went wrong. Please try again.');</script>";  
   
   endif;
   
   }
   }
   }
   $postid=intval($_GET['nid']);
   
       $sql = "SELECT viewCounter FROM tblposts WHERE id = '$postid'";
       $result = $con->query($sql);
   
       if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               $visits = $row["viewCounter"];
               $sql = "UPDATE tblposts SET viewCounter = $visits+1 WHERE id ='$postid'";
       $con->query($sql);
   
           }
       } else {
           echo "no results";
       }
       
   
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>VaWe|Acceuil</title>
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
    
   </head>
   <body>
      <!-- Navigation -->
      <?php include('includes/header.php');?>
      <!-- Page Content -->
      <div class="container-fluid">
         <div class="row" style="margin-top: 4%">
            <!-- Blog Entries Column -->
            <div class="col-md-9 mt-5">
               <!-- Blog Post -->
               <?php
                  $pid=intval($_GET['nid']);
                  $currenturl="http://".$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];;
                   $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url,tblposts.postedBy,tblposts.lastUpdatedBy,tblposts.UpdationDate from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
                  while ($row=mysqli_fetch_array($query)) {
                  ?>
               <div class="card border-0">
                  <div class="card-body">
                    <a class="badge bg-success text-decoration-none link-light" href="category.php?catid=<?php echo htmlentities($row['cid'])?>" style="color:#fff"><?php echo htmlentities($row['category']);?></a>
                     <!--Subcategory--->
                     <a class="badge bg-warning text-decoration-none link-light"  style="color:#fff"><?php echo htmlentities($row['subcategory']);?></a>
                     <h1 class="card-title"><?php echo htmlentities($row['posttitle']);?></h1>
                     <!--category-->
                     
                     <p>
                         Poster par:  <?php echo htmlentities($row['postedBy']);?> on | <?php echo htmlentities($row['postingdate']);?>
                        <?php if($row['lastUpdatedBy']!=''):?>
                        Derniere mise à jour faite par  <?php echo htmlentities($row['lastUpdatedBy']);?> Le:<?php echo htmlentities($row['UpdationDate']);?>
                     </p>
                     <?php endif;?>
                     <p><strong>Partager sur:</strong> <a href="http://www.facebook.com/share.php?u=<?php echo $currenturl;?>" target="_blank">Facebook</a> | 
                        <a href="https://twitter.com/share?url=<?php echo $currenturl;?>" target="_blank">Twitter</a> |
                        <a href="https://web.whatsapp.com/send?text=<?php echo $currenturl;?>" target="_blank">Whatsapp</a> | 
                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $currenturl;?>" target="_blank">Linkedin</a>  <b>Visité:</b> <?php print $visits; ?>
                     </p>
                     <hr>
                     <img class="img-fluid w-100"  src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
                     <p class="card-text"><?php 
                        $pt=$row['postdetails'];
                                      echo  (substr($pt,0));?></p>
                  </div>
               
               </div>
               <?php } ?>
            </div>
            <!-- Sidebar Widgets Column -->
            <?php include('includes/sidebar.php');?>
         </div>
         <!-- /.row -->
          <!---Comment Display Section --->
          <div class="col-md-8">
               <?php 
                  $sts=1;
                  $query=mysqli_query($con,"select name,comment,postingDate from  tblcomments where postId='$pid' and status='$sts'");
                  while ($row=mysqli_fetch_array($query)) {
                  ?>
               <div class="media mb-4">
                  <img class="d-flex mr-3 rounded-circle" src="images/usericon.png" alt="">
                  <div class="media-body">
                     <h5 class="mt-0"><?php echo htmlentities($row['name']);?> <br />
                        <span style="font-size:11px;"><b>at</b> <?php echo htmlentities($row['postingDate']);?></span>
                     </h5>
                     <?php echo htmlentities($row['comment']);?>            
                  </div>
               </div>
               <?php } ?>
         <!---Comment Section --->
      </div>
            <div class="col-md-8">
               <hr>
               <div class="card my-4 bg-transparent border-0">
                  <h5 class="card-header bg-transparent border-0">Envoyer votre Commentaire</h5>
                  <div class="card-body">
                     <form name="Comment" method="post">
                        
                        <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
                        <div class="form-group">
                           <input type="text" name="name" class="form-control rounded-0" placeholder="Entrez votre nom" required>
                        </div>
                        <div class="form-group">
                           <input type="email" name="email" class="form-control rounded-0" placeholder="Entrez votre email" required>
                        </div>
                        <div class="form-group">
                           <textarea class="form-control rounded-0" name="comment" rows="3" placeholder="Commentaire" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger" name="submit">Valider</button>
                     </form>
                  </div>
               </div>
         </div>
      </div>
   <?php include('includes/footer.php');?>

 <script src="js/foot.js"></script>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Scripts -->
    <script src="durane/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
   
   <script src="durane/js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
   <script src="durane/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
   
   <script src="durane/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
   <script src="durane/js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
   <script src="durane/js/scripts.js"></script> <!-- Custom scripts -->

   </body>
</html>