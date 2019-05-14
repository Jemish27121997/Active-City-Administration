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
							   <h1 style="color:darkred;">Mid Day Meal (MDM)</h1>
							   
								<img src="assets/img/banner_mdm.jpg" style="width:100%;height:275px">
							   <br><br>
								<h4>  <p align="justify" style="line-height:1.5;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                           		Mid day meal scheme was started in 1984 in Gujarat.
								In this scheme the share of central government is of 75% and the share of State government is of 25%.
								it involves provision for free lunch on working days for children in primary &
								upper primary classes in government aided, local body school.
								</p></h4>
								
								<br>
								
								
								<div class="key_f">
								<h1 style="color:darkred;">Key Functions</h1><br>
								<font size="4">
								<ul>
								<li>To provide hot cooked meal to children.</li>
								<li>To improve nutritional status of children.</li>
								<li>To encourage poor children belonging to disadvantaged sections, to attend school more regularly &
								help them concentrate on classroom activities, thereby increasing the enrollment, retention & attendance rates.</li>
								<li>To Decrease the drop out ratio of the students in school.</li>
								<li>The subsidiary aim is to provide the employment in Rural Sector.</li>
								</ul>
								</font>
								</div>
								
								<br>
								<div class="key_f">
								<font size="4">
								<ul type="square">
								<li><b>Service Category : </b>Monitoring on District Level.</li>
							
								<li><b>Associated branches : </b>MDM Branch at Taluka Level.</li>
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