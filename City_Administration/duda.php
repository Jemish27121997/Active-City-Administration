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
        <title>Branches</title>
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
							   <h1 style="color:darkred;">District Urban Development Agency (DUDA)</h1><br>
								<h4>  <p align="justify" style="line-height:1.5;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                           		Rapid urbanization has led to basic infrastructural issues in urban areas.
								To mitigate these problems and facilitate urban populace with the superior quality of Infrastructure 
								as well as to materialize the Dream of "Clean Gujarat-Nirmal Gujarat"
								- The Integration & coordination of various urban development polices and schemes was quit essential.
								Hence, there was a need for a coordinating agency at the District level in the line of the District Rural Development Agency (DRDA).
								Accordingly, The District Urban Development Authority, Anand came in to existence on 6/5/1999. 
								The Agency Comprises of 16 members, a member secretary and a Chairman.
								By virtue of his post, Collector, Anand is the Chairman of DUDA, Anand.
								</p></h4>
								
								<br>
								
								<font size="5" color="darkred">Classification Of Municipalities in Different Class :</font><br>
								<br>
								<img src="assets/img/muni_diff_class.jpg" style="width:90%;height:500px">
								
								
								<div class="key_f">
								<h1 style="color:darkred;">Key Functions</h1><br>
								<font size="4">
								<ul>
								<li>To allocate grants to all 11 Municipalities of the district under various urban development schemes.</li>
								<li>Monitoring and Supervision of the urban development schemes-implemented by the Municipalities.</li>
								<li>Ensure quality standards of developmental & Infrastructural works in Municipal Areas.</li>
								<li>Regular Review and Evaluation of various urban development schemes and works at district level.</li>
								<li>To follow the orders and Instructions from State Level Nodal Agency for Urban Development.</li>
								<li>To check progress of the Infrastructural works at regular interval.</li>
								<li>To Coordinate and correspond with banks for the speedy sanctioning of loans/subsidies to the urban Poor.</li>
								<li>To ensure effective and efficient utilization of allocated Grants & resources in achieving desired outcome with respect to various urban development schemes.</li>
								</ul>
								</font>
								</div>
								
								<br>
								
							
								<div class="key_f">
								<h1 style="color:darkred;">Key Schemes</h1><br>
								<font size="4">
								<ul>
								<li><b>SJMMSVY (Swarnim Jayanti Mukhymantri Saheri Vikas Yojana) :</b><br>
								The main objective of the Scheme is to provide Basic Infrastructural Facilities in urban areas.</li>
								<li><b>Nirmal Gujarat Shauchalay Yojana : </b><br>
								The main objective of the Scheme is to facilitate the urban poor with the subsidy for the construction of the toilets.</li>
								<li><b>Kailashdham Yojana :</b><br>
								The objective of the scheme is to modernize the cremation centers in municipal areas with Electrical /Gas based facilities.</li>
								<li><b>Mission Manglam (Urban) Scheme : </b><br>
								The Scheme helps the poor urban Self help Groups and "Sakhi Mandals" by linking them with the banks for easy and speedy financial assistance.</li>
								<li><b>National Urban Livelihood Mission :</b><br>
								The Scheme is improved version of "Swarnajayanti Saheri Rojgar Yojana" and known as National Urban Livelihood Mission (NULM). The main objective of the scheme is to provide employment to skilled & unskilled urban poor.</li>
								</ul>
								</font>
								</div>
								
								<br>
								
								
								
							</div>
								
                           
                       <div class="col-md-4" >
                           		  
                           		    <?php
										include("programsidebar.php");
									?>
									
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