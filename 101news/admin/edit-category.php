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
   $catid=intval($_GET['cid']);
   $category=$_POST['category'];
   $description=$_POST['description'];
   $query=mysqli_query($con,"Update  tblcategory set CategoryName='$category',Description='$description' where id='$catid'");
   if($query)
   {
   $msg="Category Updated successfully ";
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
                           <h4 class="page-title">Modifier Categorie</h4>
                           <ol class="breadcrumb p-0 m-0">
                             
                              <li class="active">
                                 Modifier Categorir
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
                           <h4 class="m-t-0 header-title"><b>Modifier Categorie </b></h4>
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
                           <?php 
                              $catid=intval($_GET['cid']);
                              $query=mysqli_query($con,"Select id,CategoryName,Description,PostingDate,UpdationDate from  tblcategory where Is_Active=1 and id='$catid'");
                              $cnt=1;
                              while($row=mysqli_fetch_array($query))
                              {
                              ?>
                                 <form class="row" name="category" method="post">
                                    <div class="form-group col-md-6">
                                       <label class="control-label">Categorie</label>
                                          <input type="text" class="form-control" value="<?php echo htmlentities($row['CategoryName']);?>" name="category" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label class="control-label">Categorie Description</label>
                                          <textarea class="form-control" rows="5" name="description" required><?php echo htmlentities($row['Description']);?></textarea>
                                    </div>
                                    <?php } ?>
                                    <div class="form-group col-md-12">
                                          <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                         Mettre a jour
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