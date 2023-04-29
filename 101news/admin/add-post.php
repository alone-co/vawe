<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   


<?php 
   session_start();
   include('includes/config.php');
   error_reporting(0);
   if(strlen($_SESSION['login'])==0)
     { 
   header('location:index.php');
   }
   else{
   
   // For adding post  
   if(isset($_POST['submit']))
   {
   $posttitle=$_POST['posttitle'];
   $catid=$_POST['category'];
   $subcatid=$_POST['subcategory'];
   $postdetails=$_POST['postdescription'];
   $postedby=$_SESSION['login'];
   $arr = explode(" ",$posttitle);
   $url=implode("-",$arr);
   $imgfile=$_FILES["postimage"]["name"];
   // get the image extension
   $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
   // allowed extensions
   $allowed_extensions = array(".jpg","jpeg",".png",".gif");
   // Validation for allowed extensions .in_array() function searches an array for a specific value.
   if(!in_array($extension,$allowed_extensions))
   {
   echo "<script>alert('Format invalide. Only jpg / jpeg/ png /gif format allowed');</script>";
   }
   else
   {
   //rename the image file
   $imgnewfile=md5($imgfile).$extension;
   // Code for move image into directory
   move_uploaded_file($_FILES["postimage"]["tmp_name"],"postimages/".$imgnewfile);
   
   $status=1;
   $query=mysqli_query($con,"insert into tblposts(PostTitle,CategoryId,SubCategoryId,PostDetails,PostUrl,Is_Active,PostImage,postedBy) values('$posttitle','$catid','$subcatid','$postdetails','$url','$status','$imgnewfile','$postedby')");
   if($query)
   {
   $msg="Post successfully added ";
   }
   else{
   $error="Quelque chose c'est mal passé. Veuillez réessayer..";    
   } 
   
   }
   }
   ?>

         
         <!-- Top Bar Start -->
   <?php include('includes/topheader.php');?>
      <script>
         function getSubCat(val) {
           $.ajax({
           type: "POST",
           url: "get_subcategory.php",
           data:'catid='+val,
           success: function(data){
             $("#subcategory").html(data);
           }
           });
           }
           
      </script>
         <!-- ========== Left Sidebar Start ========== -->
         <?php include('includes/leftsidebar.php');?>
         <!-- Left Sidebar End -->
         <!-- ============================================================== -->
         <!-- Start right Content here -->
         <!-- ============================================================== -->
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12">
                        <div class="page-title-box">
                           <h4 class="page-title">Add Post </h4>
                           <ol class="breadcrumb p-0 m-0">
                             
                              <li class="active">
                                 Ajouter une publication
                              </li>
                           </ol>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
                  <div class="row">
                     <div class="col-sm-6">
                        <!---Success Message--->  
                        <?php if($msg){ ?>
                        <div class="alert alert-success" role="alert">
                           <strong>Well done!</strong> <?php echo htmlentities($msg);?>
                        </div>
                        <?php } ?>
                        <!---Error Message--->
                        <?php if($error){ ?>
                        <div class="alert alert-danger" role="alert">
                           <strong>Oh snap!</strong> <?php echo htmlentities($error);?>
                        </div>
                        <?php } ?>
                     </div>
                  </div>
                 
                        
                              <form name="addpost" method="post" class="row" enctype="multipart/form-data">
                                 <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Publication titre</label>
                                    <input type="text" class="form-control" id="posttitle" name="posttitle" placeholder="Entre un titre" required >
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Categorie</label>
                                    <select class="form-control" name="category" id="category" onChange="getSubCat(this.value);" required>
                                       <option value="">Selection d'une Categorie </option>
                                       <?php
                                          // Feching active categories
                                          $ret=mysqli_query($con,"select id,CategoryName from  tblcategory where Is_Active=1");
                                          while($result=mysqli_fetch_array($ret))
                                          {    
                                          ?>
                                       <option value="<?php echo htmlentities($result['id']);?>"><?php echo htmlentities($result['CategoryName']);?></option>
                                       <?php } ?>
                                    </select>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Sous categorie</label>
                                    <select class="form-control" name="subcategory" id="subcategory" required>
                                    </select> 
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="card-box">
                                          <h4 class="m-b-30 m-t-0 header-title"><b>Details sur la publications</b></h4>
                                          <textarea class="summernote" name="postdescription" required placeholder="vous pouvez modeler la zone de texte"></textarea>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="card-box">
                                          <h4 class="m-b-30 m-t-0 header-title"><b>Choix de  l'image</b></h4>
                                          <input type="file" class="form-control" id="postimage" name="postimage"  required>
                                       </div>
                                    </div>
                                 </div>
                                 <button type="submit" name="submit" class="btn btn-custom waves-effect waves-light btn-md">Sauvegader et poster</button>
                                 <button type="button" class="btn btn-danger waves-effect waves-light">Analation</button>
                              </form>
                    
               </div>
               <!-- container -->
            </div>
            <!-- content -->
            <?php include('includes/footer.php');?>
    
<?php } ?>
</body>
</html>