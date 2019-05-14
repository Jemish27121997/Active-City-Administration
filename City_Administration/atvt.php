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
							   <h1 style="color:darkred;">Apno Taluko Vibrant Taluko (ATVT)</h1>
							   
								<img src="assets/img/banner_atvt.jpg" style="width:100%;height:275px">
							   
							   <br><br>
							   
							   
								<h4>  <p align="justify" style="line-height:1.5;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                           		Govt. of Gujarat launched Apno Taluko, Vibrant Taluko (ATVT) in order to empower people locally to guide the growth process 
								through Taluka Sarkar – a sub district citizen-centric approach where governance and development is activated at the grass root level.
								
								<br><br><font size="5" color="darkred"><b>ATVT Scheme</b></font><br>
								
								<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								The district administration is keen to enhance quality of service rendered to community.
								To enhance the quality level, State Government is trying to bring transparency as much as possible for Developmental work undertaken by ATVT programme 
								so that various schemes get implemented timely and successfully.
								To meet this objective of government, an integrated web base application for ATVT scheme and Planning is developed and implemented successfully. 
								State Government has sanctioned yearly Rs. 1 to 1.5 Crore to each Prant Officer for developmental work under ATVT Scheme.
								Further discretionary grant of Rs. 25 Lakh is also given to each Prant Officer for the same purpose.
								If monitoring of this scheme is done on pattern of existing iOjN system it may definitely strengthen ATVT scheme.
								
								<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								To fully implement this front end may be developed under ATVT module where Cluster head will submit a plan online through ATVT module. 
								After that Prant Officer will finalise the plan and submit it in form of PROPOSAL to DPO. 
								This entire Back End process will be taken care of by iOjN system with necessary modification.
								Public Grievances Redressal : To provide villagers a quick solution to their complaints,
								a village level public grievance redressal mechanism is formulated. 
								Prant officer alongwith ATVT team will camp at villages for redressing grievances of villagers. 
								Using e-Gram network, video conferences is conducted with district officials.
								
								
								<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								Prant officer, Mamlatdars, TDO and all ATVT officers remain present at village.
								At district level, District Collector along with district officers will run video conference for online redressal of grievances of villagers.
								</p></h4>
								
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