            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                   
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="dashboard.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Panneau d'accueil </span> </a>
                         
                            </li>
<?php if($_SESSION['utype']=='1'):?>

  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti ti-user"></i> <span> colaborateur </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subadmins.php">Ajouter un colaborateur</a></li>
                                    <li><a href="manage-subadmins.php">Gestion colaborateur(s)</a></li>
                                </ul>
                            </li>
<?php endif;?>
               


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Categorie </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="add-category.php">Ajouter une categorie</a></li>
                                    <li><a href="manage-categories.php">Gestion Categorie(s)</a></li>
                                </ul>
                            </li>

    <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti ti-layout-list-thumb"></i> <span>Sous Categorie </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subcategory.php">Ajouter une sous Categorie(s)</a></li>
                                    <li><a href="manage-subcategories.php">Gestion Sous Categorie(s)</a></li>
                                </ul>
                            </li>               
  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-newspaper"></i> <span> Publications </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-post.php">Ajouter un Posts</a></li>
                                    <li><a href="manage-posts.php">Gestion Posts</a></li>
                                     <li><a href="trash-posts.php">Publication taggée</a></li>
                                </ul>
                            </li>  
                     

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti ti-files"></i> <span>info page</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="aboutus.php">Sur Nous</a></li>
                                    <li><a href="contactus.php">Contactez Nous</a></li>
                                </ul>
                            </li>
   <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-comment-account-outline"></i> <span> Commentaire(s) </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                  <li><a href="unapprove-comment.php">En attente d'approbation </a></li>
                                    <li><a href="manage-comments.php">Commentaire approuvés</a></li>
                                </ul>
                            </li>   
 
                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    

                </div>
                <!-- Sidebar -left -->

            </div>