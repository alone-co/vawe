<?php
   session_start();
   include('includes/config.php');
   error_reporting(0);
   if(strlen($_SESSION['login'])==0)
     { 
   header('location:index.php');
   }
   else{
   
   if(isset($_POST['submit']))
   {
   $category=$_POST['category'];
   $description=$_POST['description'];
   $status=1;
   $query=mysqli_query($con,"insert into tblcategory(CategoryName,Description,Is_Active) values('$category','$description','$status')");
   if($query)
   {
   $msg="Categorie crée ";
   }
   else{
   $error="Quelque chose c'est mal passé. Veuillez réessayer..";    
   } 
   }
   
   
   ?>

         <!-- Top Bar Start -->
         <?php include('includes/topheader.php');?>
         <!-- Top Bar End -->
         <!-- ========== Left Sidebar Start ========== -->
         <?php include('includes/leftsidebar.php');?>
         <!-- Left Sidebar End -->
         <div class="content-page">
            <!-- Start content -->
            <div class="content">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12">
                        <div class="page-title-box">
                           <h4 class="page-title">Ajouter Categorie</h4>
                           <ol class="breadcrumb p-0 m-0">
                              
                              <li class="active">
                                 Ajouter Categorie
                              </li>
                           </ol>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card-box">
                           <h4 class="m-t-0 header-title"><b>Ajouter Categorie </b></h4>
                           <hr />
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
                                 <form class="row" name="category" method="post">
                                    <div class="form-group col-md-6">
                                       <label class="control-label">Categorie</label>
                                          <input type="text" class="form-control" value="" name="category" required placeholder ="nom de la categorie">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label class=" control-label"> Description de categorie</label>
                                          <textarea class="form-control" rows="5" name="description" required placeholder="entre un description"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                          <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                          Valider
                                          </button>
                                    </div>
                                 </form>
                        </div>
                     </div>
                  </div>
                  <!-- end row -->
               </div>
               <!-- container -->
            </div>
            <!-- content -->
            <?php include('includes/footer.php');?>
 
<?php } ?>