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
							   <h1 style="color:darkred;">Establishment Branch</h1><br>
								<h4>  <p align="justify" style="line-height:1.5;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								The Establishment Branch deals with the service matters of the employees and officers of the collector office.
								It deals with employees promotion, transfer, retirement, higher grade pay, leave, seniority etc.
								Personal files of Gazetted Officers & Non-Gazetted officers and other employees of the office are maintained and 
								upgraded in this branch.
								</p></h4>
								
								<br>
								<div class="key_f">
								<h1 style="color:darkred;">Key Functions</h1><br>
								<font size="4">
								
								<h3 style="color:darkred;"><b>&nbsp&nbsp&nbsp&nbsp&nbspEstablishment-1</b></h3><br>
								<ul>
								<li>Appointment and transfer of Class – 3 & 4 employees</li>
								<li>Promotion of the employees</li>
								<li>Retirement of Class – 1 to 2 officers and other employees</li>
								<li>Upgrade the Service – sheet of employees</li>
								<li>Transfer of talati cum mantri of city area.</li>
								<li>Maintain Roster register</li>
								<li>Update the seniority List of employees</li>
								<li>Approve of Higher grade pay of employees</li>
								<li>Regularize the employees</li>
								<li>All Types of Departmental Exam & Training Programme</li>
								<li>Out district transfer and deputation of the employees</li>
								<li>Financial help to the family of the employee died on duty.</li>
								<li>Maintain personal file of all officers and employee of the district.</li>
								</ul>
								<br>
								<h3 style="color:darkred;"><b>&nbsp&nbsp&nbsp&nbsp&nbspEstablishment-2</b></h3><br>
								<ul>
								<li>To sanction leaves of class – 1 to 4 officers and employee</li>
								<li>To maintain records of Tangible & Intangible assets of employees</li>
								<li>To give N.O.C for passport</li>
								<li>To send confidential reports of officers to the government</li>
								<li>Primary Inquiry</li>
								<li>Department Inquiry</li>
								</ul>
								<br>
								
								</font>
								</div>
								
								<br>
								
							</div>
								
                           
                       <div class="col-md-4" >
                           		  
                           		    <?php
										include("branchsidebar.php");
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