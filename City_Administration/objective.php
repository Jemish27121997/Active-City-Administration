<?php 
session_start();
//echo $_COOKIE["nav"];
if(isset($_COOKIE["nav"])) 
{
//echo "yes";
include("user_navigation.php");
}
else
{
include("navigation.php");
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
        <title>About Anand</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    
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
       
             <div id="content" class="bottom-border-shadow">  
                <div class="container background-white bottom-border" >
              		 <div class="row margin-vert-20">
                        <!-- Main Column -->
                         <div class="col-md-12">
                        
                       
                        
                       		   <div class="col-md-8">
							   <h1 style="color:darkred;">Objectives</h1><br>
                  <h4>  <p align="justify" style="line-height:1.5;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                           	District Collectorate is a direct representative of the state government at the district level. 
							It is at this level that the policies of the Government are translated into practice.
							Almost every citizen of a district comes in contact with District Administration. 
							A Collector is the highest functionary in hierarchy of a district. 
							Hence, As a central institution of district administration, the main objectives of the Collectorate are,
							</p></h4>
								<br>
								
								
								
								<img src="assets/img/time_delivery.png" style="float:left">
								<font size="4px">
								<br>
								Time bound delivery of essential services to the citizens of the district.
								</font>
							    <br><br>
								<br>
	
								<img src="assets/img/cordination_icon.png" style="float:left">
								<font size="4px">
								<br>
								To play a key role as a coordinator of all the government offices of the district.
								</font>
								<br><br>
								<br>
								<img src="assets/img/latest_technology.png" style="float:left">
								<font size="4px">
								<br>
								To strive for efficient, transparent and citizen centric administration with the use of latest technologies available.
								</font>
							    <br><br>
								<br>
								<img src="assets/img/narture_icon.png" style="float:left">
								<font size="4px"><br>
								To resolve the issues related to land and to preserve and nurture all the government assets.
								</font>
								
					
								
								
								<br><br><br>
								</div>
								
                           
                        <div class="col-md-4" >
                           		  
                           	
									 <?php
										include("relatedlink.php");
									?>
									
                       	   
                      </div>
     
                        
                        <!-- End Main Column -->
                    </div>
                  </div>  
               </div>     
                    
            
         
         
          <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            
    </body>
</html>
<!-- === END FOOTER === -->


<?php 
include("footer.php");
?>