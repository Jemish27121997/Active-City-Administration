<?php


if(!isset($_SESSION['city_user']))
{
session_start();
$_SESSION['city_user']=null;
session_destroy();
}

?>
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
    
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body-bg">
        
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html" title="">
							 
                                <img src="assets/img/india.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-12 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="index.php" class="fa-home active">Home</a>
                                    </li>
                                    <li>
                                        <span class="fa-stack-exchange">About Us</span>
                                        <ul>
                                            
											<li>
                                                <a href="aboutanand.php">About Anand</a>
                                            </li>
                                            <li>
                                                <a href="objective.php">Objectives</a>
                                            </li>
							
											<li>
                                                <a href="atvt.php">Programs</a>
                                            </li>
                                            <li>
                                                <a href="organization.php">Organizational Chart</a>
                                            </li>
                                            <li>
                                                <a href="collector_area.php">Collector's Area</a>
                                            </li>
                                            <li>
                                                <a href="news.php">News</a>
                                            </li>
                                            
                                            <li>
                                                <a href="photogallery.php">Photo Gallery</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="branch.php" class="fa-users">Branches</a>
                                    </li>
                                    <li>
                                        <span class="fa-keyboard-o">E-Citizen</span>
                                        <ul>
                                            <li>
                                                <a href="feedback.php">Feedback</a>
                                            </li>
                                           
                                        </ul>
                                    </li>
									<li>
                                        <a href="contact_us.php" class="fa-comment ">Contact</a>
                                    </li> 
									<li>
									
											<?php
												
 								 				$as=$_SESSION['city_user'];
 												 $ad=$_SESSION['aadhar1'];
													$con=mysqli_connect("localhost","root",""); 
													$db_select=mysqli_select_db($con,"CITY");	

													$qry="SELECT * FROM citizen WHERE aadhar='$ad'";
													$eqry=mysqli_query($con,$qry);	
													$row1 = mysqli_fetch_array($eqry);
													$flg=$row1['flag'];
													if($flg==0)
													{
											?>
                                       
                                        <a href="user.php" class="fa-user"><?php    echo "$as";   ?></a>
										 <?php
											 }
											 else
											 {
										 ?>
                                        		<a href="admin.php" class="fa-user"><?php  echo "$as";  ?></a>
 										<?php
												 }
 											?>                                         
                                    </li>
                                    
                     				
                                </ul>
                                   <ul style="float:right;" id="hornavmenu" class="nav navbar-nav"> <li >
                                        <a href="logout.php" class="fa-mail-reply">logout</a>
                                    </li>
                                </ul>
                            </div>
                      
                        </div>
                    
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
      </div>
	  
    </body>
</html>
<!-- === END FOOTER === -->