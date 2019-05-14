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
							   <h1 style="color:darkred;">Supply Branch</h1><br>
								<h4>  <p align="justify" style="line-height:1.5;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                           		Food and Civil Supply Department has been established on 8th November, 1965. 
								The department works on Public Distribution System (PDS).
								It regulates the stock of Essential Commodities provided by the State Government for supplying to the public through PDS.
								</p></h4>
								
								<br>
								<div class="key_f">
								<h1 style="color:darkred;">Key Functions</h1><br>
								<font size="4">
								<ul>
								
								<li>Provide the stock of Essential Commodities like wheat, rice, kerosene, salt and sugar with reasonable price.</li>
								<li>Provide the stock of Essential Commodities to the ration card holders according to their category like AAY, BPL, APL-1, APL-2</li>
								<li>Provide the stock of Essential Commodities regularly to the widows, weak persons, handicapped and the sufferers by Leprosy, AIDS and Cancer under the project of "Antyodaya Ann Yojana".</li>
								<li>District Supply Officer (DSO) works as 'Consumer Protection Officer' for the welfare of consumers under the Consumer Protection Act-1986.</li>
								<li>DSO inspects the FPSs, Kerosene Agencies, Petrol/Diesel pumps Gas stations and LPG agencies under various Acts to regulate the Public Distribution System.
								He also inspects shops, stalls, stores etc. as a consumer Protection Officer.</li>
								<li>DSO issues the Licence of FPSs, Oil mills and Petroliam products. He renews various licences, gives duplicate licences, and also changes in replacement of place, name and partnership and succession.</li>

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