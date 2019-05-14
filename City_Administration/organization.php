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
        <title>Organisation Chart</title>
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
        
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-20">
                        <!-- Main Column -->
                        <div class="col-md-12">
                           
                        
                           <div class="col-md-8">
                        
                  <h1 style="color:darkred;">Organization Chart</h1>
				  <br>
                <h3>
                    <ul id="uiorg">
                   		 <li>
                  			 <span class="fa-circle"><font color="red">Collector Anand</font>
                  	 		 <ul id="uiorg">
                  	 		 
                  	  				<li class="margin-vert-40">
                  	  				 <span class=" fa-circle-o"><font color="green">Dy. Collector and SDM Anand</font>
                  	  					<ul id="uiorg">
                  	  						
                  	  						
                  	  						<li class="margin-vert-20"><span class=" fa-dot-circle-o">
                  	  						<font color="lightblue">
                  	  						
                  	  						<span>Mamlatdar Anand (City)</span>
													<div class="div111" id="div111">
													
																<h2 align="center">Shri H. K. Shangvi (I/C)</h2>
																<hr class="hrorg">
																<span class="fa-phone-square">+91 2692 260264</span><br>
																<span class="fa-envelope">mam-anand@gujarat.gov.in,/span><br>
													</div>
                  	  						
                  	  						
                  	  						</font>
                  	  						</li>
                  	  						<li class="margin-vert-20"><span class=" fa-dot-circle-o">
                  	  						<font color="lightblue">
                  	  						
                  	  						
                  	  						<span>Mamlatdar Anand (Rural)</span>
													<div class="div111" id="div111">
													
																<h2 align="center">Shri H. K. Shangvi (I/C)</h2>
																<hr class="hrorg">
																<span class="fa-phone-square">+91 2692 260264</span><br>
																<span class="fa-envelope">mam-anand@gujarat.gov.in,/span><br>
													</div>
                  	  						
                  	  						
                  	  						
                  	  						</font></li>
                  	  					</ul>
                  	  				</li>
                  	  				
                  	  				<li class="margin-vert-40">
                  	  				 <span class=" fa-circle-o"><font color="green">Dy. Collector Election</font>
                  	  				</li>
                  	  				
                  	  				<li class="margin-vert-40">
                  	  				 <span class=" fa-circle-o"><font color="green">Dy. Collector Stamp Duty</font>
                  	  				</li>
                  	  				
                  	  				<li class="margin-vert-40">
                  	  				 <span class=" fa-circle-o"><font color="green">Dy. Collector MDM</font>
                  	  					<ul id="uiorg">
                  	  						<li class="margin-vert-20"><span class=" fa-dot-circle-o"><font color="lightblue">
                  	  						
                  	  						<span>Dy. Collector Land Aquisition</span>
													<div class="div111" id="div111">
													
																<h2 align="center">Shri H. K. Shangvi (I/C)</h2>
																<hr class="hrorg">
																<span class="fa-phone-square">+91 2692 260264</span><br>
																<span class="fa-envelope">mam-anand@gujarat.gov.in,/span><br>
													</div>
                  	  						
                  	  						
                  	  						</font>
                  	  						</li>
                  	  						<li class="margin-vert-20"><span class=" fa-dot-circle-o"><font color="lightblue">
                  	  						<span>District Planning Officer</span>
													<div class="div111" id="div111">
													
																<h2 align="center">Shri H. K. Shangvi (I/C)</h2>
																<hr class="hrorg">
																<span class="fa-phone-square">+91 2692 260264</span><br>
																<span class="fa-envelope">mam-anand@gujarat.gov.in,/span><br>
													</div>
                  	  						
                  	  						</font>
                  	  						</li>
                  	  					</ul>
                  	  				</li>
                  	  				
                  	  				<li class="margin-vert-40">
                  	  				 <span class=" fa-circle-o"><font color="green">District Supply Officer</font>
                  	  				</li>
                  	  				
                  	  				<li class="margin-vert-40">
                  	  				 <span class=" fa-circle-o"><font color="green">Dy. Collector Land Reform</font>
                  	  				</li>
                  	  				
                  	  				
                  	  				<li class="margin-vert-40">
                  	  				 <span class=" fa-circle-o"><font color="green">Public Relation Officer</font>
                  	  					<ul id="uiorg">
                  	  						<li class="margin-vert-20"><span class=" fa-dot-circle-o">
                  	  						<font color="lightblue">
                  	  						
                  	  						<span>Social Security</span>
													<div class="div111" id="div111">
													
																<h2 align="center">Shri H. K. Shangvi (I/C)</h2>
																<hr class="hrorg">
																<span class="fa-phone-square">+91 2692 260264</span><br>
																<span class="fa-envelope">mam-anand@gujarat.gov.in,/span><br>
													</div>
                  	  						</font></li>
                  	  						<li class="margin-vert-20"><span class=" fa-dot-circle-o">
                  	  						<font color="lightblue">
                  	  						
                  	  						<span>Record</span>
													<div class="div111" id="div111">
													
																<h2 align="center">Shri H. K. Shangvi (I/C)</h2>
																<hr class="hrorg">
																<span class="fa-phone-square">+91 2692 260264</span><br>
																<span class="fa-envelope">mam-anand@gujarat.gov.in,/span><br>
													</div>
                  	  						</font></li>
                  	  						<li class="margin-vert-20"><span class=" fa-dot-circle-o">
                  	  						<font color="lightblue">
                  	  						
                  	  						<span>Entertainment Tax</span>
													<div class="div111" id="div111">
													
																<h2 align="center">Shri H. K. Shangvi (I/C)</h2>
																<hr class="hrorg">
																<span class="fa-phone-square">+91 2692 260264</span><br>
																<span class="fa-envelope">mam-anand@gujarat.gov.in,/span><br>
													</div>
                  	  						</font></li>
                  	  						<li class="margin-vert-20"><span class=" fa-dot-circle-o">
                  	  						<font color="lightblue">
                  	  						
                  	  						<span>Village Panchayat Election</span>
													<div class="div111" id="div111">
													
																<h2 align="center">Shri H. K. Shangvi (I/C)</h2>
																<hr class="hrorg">
																<span class="fa-phone-square">+91 2692 260264</span><br>
																<span class="fa-envelope">mam-anand@gujarat.gov.in,/span><br>
													</div>
                  	  						</font></li>
                  	  						<li class="margin-vert-20"><span class=" fa-dot-circle-o">
                  	  						<font color="lightblue">
                  	  						
                  	  						<span>Registry</span>
													<div class="div111" id="div111">
													
																<h2 align="center">Shri H. K. Shangvi (I/C)</h2>
																<hr class="hrorg">
																<span class="fa-phone-square">+91 2692 260264</span><br>
																<span class="fa-envelope">mam-anand@gujarat.gov.in,/span><br>
													</div>
                  	  						</font></li>
                  	  					</ul>
                  	  				</li>
                  	  				
                   	 		</ul>
                    
                   		 </li>
                    
                    </ul>
                         </h3>
                           </div>
                           <div class="col-md-4">
									<?php
									include("relatedlink.php");
									?>
                           </div>
                        
                       
                       
                        
                        
                        
                         </div>
                        <!-- End Main Column -->
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
       
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>

<?php
include("footer.php");
?>
<!-- === END FOOTER === -->