
<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>MyBlog</title>
        <link rel="icon" type="image/x-icon" href="assets/images/logo1.jpg">

      <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
      <script src="assets/js/modernizr.min.js"></script>
        <!-- Summernote css -->
        <link href="../plugins/summernote/summernote.css" rel="stylesheet" />
     
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- Jquery filer css -->
        <link href="../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
      <script>
         function checkAvailability() {
         $("#loaderIcon").show();
         jQuery.ajax({
         url: "check_availability.php",
         data:'username='+$("#sadminusername").val(),
         type: "POST",
         success:function(data){
         $("#user-availability-status").html(data);
         $("#loaderIcon").hide();
         },
         error:function (){}
         });
         }
      </script>
   </head>            

   <body class="fixed-left">
      <!-- Begin page -->
      <div id="wrapper">
        <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                   
                
                   <a href="index.php" class="logo">
                       <span>
                           <img src="assets/images/logo1.jpg" alt="" height="60">
                       </span>
                      
                   </a>
            
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                           
                    
                        </ul>
                        <ul class="nav navbar-nav" style=" width: 50%; margin-top: 23px; color: red;"> 
                            
                           
                    
                        </ul>
                      
                       <div id="google_translate_element">
                                            
                                        </div>
                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                          

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
 
                                        <h5>Salut^_^</h5>
                                    </li>
                              
                                    <li><a href="change-password.php"><i class="ti-settings m-r-5"></i> Changer mot de passe</a></li>
                           
                                    <li><a href="logout.php"><i class="ti-power-off m-r-5"></i> Sortir</a></li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>