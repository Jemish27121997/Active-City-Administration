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
							   <h1 style="color:darkred;">Municipality Branch</h1><br>
								<h4>  <p align="justify" style="line-height:1.5;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								District Municipal Office (DMO) functions as per the provisions of the Gujarat Municipality 
								Act, 1963 which includes Administrative as well as supervisory control over Municipalities of
								the district under the overall supervision of the Directorate of Muncipalities, Gandhinagar. 
								Moreover it plays cardinl role in implementing urban devlopement schemes and policies of Government at municipality level 
								and guide municipalities in the matters of legal administrative and developmental relevance.
								</p></h4>
								
								<br>
								<div class="key_f">
								<h1 style="color:darkred;">Key Functions</h1><br>
								<font size="4">
								<ul>
								<li>Annual inspection/audit of Municipalities of the district.</li>
								<li>Suppervision and Control over the chief officers of Municipalities.</li>
								<li>Monitaring an Inspection of Municipalities under Section - 257 of Gujarat Municipalities Act, 1963.</li>
								<li>Review of resolutions passed by the Municipalities as per section 258 of Gujarat Municipality Act, 1963 and Section 6(B) of The Town planning Act.</li>
								<li>Maintain Service Books Of Chief Officers, Sanctioning leaves, Arrangemant for charge, Traing etc.</li>
								<li>Submit vigilance referances to The Directorate of Municipalities Gandhinagar.</li>
								<li>Any Other work ordered / instructed by the Directorate of the Municipalities, Gandhinagar.</li>
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