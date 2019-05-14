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
							   <h1 style="color:darkred;">Accounts Branch</h1><br>
								<h4>  <p align="justify" style="line-height:1.5;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                           		Accounts Branch deals with the district establishment of Revenue Department in the matters 
								related to grants, pension, income tax, budget, audit and other accounting related matters.
								</p></h4>
								
								<br>
								<div class="key_f">
								<h1 style="color:darkred;">Key Functions</h1><br>
								<font size="4">
								
								<h3 style="color:darkred;"><b>&nbsp&nbsp&nbsp&nbsp&nbspBills</b></h3><br>
								<ul>
								<li>Pay Bills</li>
								<li>Contingency Bills</li>
								<li>Refund Bills</li>
								<li>T.A. Bills</li>
								<li>Advance Bills</li>
								<li>Govt. Insurance Scheme Bills</li>
								<li>Abstract Bill</li>
								</ul>
								<br>
								<h3 style="color:darkred;"><b>&nbsp&nbsp&nbsp&nbsp&nbspPension Case</b></h3><br>
								<ul>
								<li>Regular Pension</li>
								<li>Temporary Pension</li>
								<li>Family Pension</li>
								</ul>
								<br>
								<h3 style="color:darkred;"><b>&nbsp&nbsp&nbsp&nbsp&nbspOther Functions</b></h3><br>
								<ul>
								<li>Dealing with the Treasury Office</li>
								<li>About Audit Para</li>
								<li>Distributing grants from the govt. departments</li>
								<li>Maintaining P.R.B. Registers</li>
								<li>Maintaining the expenditure sheets</li>
								<li>Making District Budget</li>
								<li>Maintain the Cashbook</li>
								<li>Deals with the reconciliation at the A.G.Rajkot / Ahmedabad Office</li>
								<li>Income Tax Deduction</li>
								<li>Maintaining Service Books</li>
								<li>Pay fixation and Increment</li>
								<li>G.P.F. And C.P.F. related works</li>
								<li>Prepare Monthly Reports</li>
								<li>Implementation of National Pension Scheme.</li>
								</ul>
								
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