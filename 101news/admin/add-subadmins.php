<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contactez-Nous</title>
   <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="durane/css/bootstrap.css" rel="stylesheet">
    <link href="durane/css/fontawesome-all.css" rel="stylesheet">
    <link href="durane/css/swiper.css" rel="stylesheet">
	<link href="durane/css/magnific-popup.css" rel="stylesheet">
	<link href="durane/css/styles.css" rel="stylesheet">
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
   
   // Code for Add New Sub Admi
   if(isset($_POST['submit'])){
   $username=$_POST['sadminusername'];
   $email=$_POST['emailid'];
   $password=md5($_POST['pwd']);
   $usertype='0';
   $query=mysqli_query($con,"insert into tbladmin(AdminUserName,AdminEmailId,AdminPassword,userType ) values('$username','$email','$password','$usertype')");
   if($query){
   echo "<script>alert('Colaborateur cree avec success.');</script>";
   echo "<script type='text/javascript'> document.location = 'add-subadmins; </script>";
   } else {
   echo "<script>alert('Quelque chose c'est mal passé. Veuillez réessayer.');</script>";
   }
   }
   
   ?>
 

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
                           <h4 class="page-title">Ajouter un colaborateur</h4>
                           <ol class="breadcrumb p-0 m-0">
                             
                              <li class="active">
                              Ajouter un colaborateur
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
                           <h4 class="m-t-0 header-title"><b>Ajouter un colaborateur </b></h4>
                           <hr />
                           <div class="row"> 
                              <form class="row" name="addsuadmin" method="post">
                                 <div class="form-group col-md-6">
                                    <label for="exampleInputusername">Nom (Pour sa Connexion)</label>
                                    <input type="text" placeholder="Entre un nom du colaborateur"  name="sadminusername" id="sadminusername" class="form-control" pattern="^[a-zA-Z][a-zA-Z0-9-_.]{5,12}$" title="Username must be alphanumeric 6 to 12 chars" onBlur="checkAvailability()"  required>
                                    <span id="user-availability-status" style="font-size:14px;"></span>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="emailid">Email </label>
                                    <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Entre email" required>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Entre votre mot de passe" required>
                                 </div>
                                 <div class="form-group">
                                    <div class="col-md-12">
                                       <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" id="submit" name="submit">
                                       Valider</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
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