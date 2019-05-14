
<?php 
session_start();
include("user_navigation.php");
?>
<?php

$as=$_SESSION['city_user'];
$aa=$_SESSION['aadhar1'];

$con2=mysqli_connect("localhost","root",""); 
$db_select=mysqli_select_db($con2,"CITY1");	
$qry2="SELECT * FROM citizen WHERE aadhar='$aa'";
$eqry2=mysqli_query($con2,$qry2);	
$row2 = mysqli_fetch_array($eqry2);
$n1=$row2['phone'];
$n2=$row2['email'];
$n3=$row2['address'];

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>user</title>
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

            <!-- === BEGIN CONTENT === -->
   
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Main Column -->
                        
                          <div class="headline">
                             <h2><font  style="color:darkred;">wellcome</font> <?php  echo "$as";  ?></h2>
                          
                        
                            </div>
                        
                        <div class="col-md-12">
                            <!-- Main Content -->  
             <div class="col-md-6 col-sm-6 col-xs-12 text-center margin-top-30"> 
               <div class="row">
    		<form method="post" action="be_user_profilepic.php" enctype="multipart/form-data">
    		
    		
    		    				<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                                <input type="file" accept="image/*" name="photo" id="photo"/>    
                                            <button name="submit" class="btn btn-primary center-block" type="submit">Upload</button>
                                       
                                 
    	
    		</form>
    		   </div>
         <!--     <img src="assets/img/deep.JPG" style="border-radius:200px;" height="250px" width="250px"/>  -->
     
			</div>
			 
			     <div class="col-md-6 col-sm-6 col-xs-12 margin-top-50">
                            <!-- Recent Posts -->
                            <div class="panel panel-default background-white">
                      <!--          <div class="panel-heading" style="background-color:black;border-radius:50px 50px 0px 0px;">  -->
                                    <div class= "padding-top-20"> <font size="10" color="black"><?php 
                                  
                                         $as=$_SESSION['city_user'];
                                        echo "$as"; 
                                 
                                          ?></font></div>
                         <!--       </div>  -->
                         
                                <div class="panel-body" style="background-color:white;">
                                    <ul class="list-unstyled">
                                  <h3>    <li>
                                            <i class="fa-adn color-primary"></i><?php  echo "$aa";  ?></li>
                                        <li style="padding-top:15px;">
                                            <i class="fa-phone color-green"></i><?php  echo "$n1";  ?></li>
                                        <li style="padding-top:15px;">
                                            <i class="fa-envelope color-red"></i><?php  echo "$n2";  ?></li>
                                        <li style="padding-top:15px;">
                                            <i class="fa-home color-blue"></i><?php  echo "$n3";  ?></li>
                                      </h3>
                                    </ul>
                                 
                                </div>
                            </div>
                            <!-- End recent Posts -->
                        
                        </div>
			
			</div>
			
	
                </div>
            </div>
            <!-- === END CONTENT === -->

   
    </body>
</html>
<!-- === END FOOTER === -->


<?php

mysqli_close($con2);	
include("footer.php");


?>