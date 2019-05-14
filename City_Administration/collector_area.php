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
<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Collector's Area</title>
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
                        <div class="col-md-12">
                            
                            <div class="row">
                              
                                <div class="col-md-8 margin-bottom-10 ">
                                <h1 style="color:darkred;">Collector's Area</h1>
                                   <img src="assets/img/collector.jpg" alt="about-me" class="margin-top-10 img-responsive center-block" style="border-radius: 200px; width: 300px;height: 300px; ">
                                             <div class="clearfix"></div>
                                 <hr>
                                 <div align="center">
                                  <font size="5"> Dr. Dhavalkumar Patel, IAS</font>
                                  <br>
                                  
                          <font size="3">    <span class="fa-envelope-o" ></span>collector-and@gujarat.gov.in  </font>
                             <br>
                            <font size="3">   <span class="fa-phone"></span>+91 2692 262271 </font>
                            <br>
                            <font size="3"> <span class="fa-print"></span>+91 2692 261575</font>
                                 </div>
                          
                                    <hr>
                                    <h4>
                             <span class="fa-comments-o"></span>  <em>MESSAGE FROM THE COLLECTOR</em>
                                    </h4>
                               <font size="4">     
                               <p style="text-align:justify;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="fa-quote-left"></span>The state government appoints a Collector under section 8 of the Bombay Land Revenue Code, 1879. The Divisional Commissioner had been looking after the implementation and supervision of the land revenue code during ex-Bombay state. From 15th August, 1950 the post of divisional Commissioner was abolished and the powers of land revenue code and other acts were delegated to the collector by the government and with that the Collector was made responsible for the implementation of provisions of various Acts in the district.Day by day the work load of the collector has increased as he is an important link between the government and people. He, being a representative of state government at district level has to discharge most important duties and also has to play the role of Chief Co-coordinator of the District. The administration today has become more citizen centric and speedy. In order to meet the expectations of citizens from the district administration, efforts should be made to make administration much smoother, efficient, transparent and citizen friendly with the maximum use of Information and Communication Technology.&nbsp&nbsp<span class="fa-quote-right"></span>
                                    </p></font>
                                    </div>
                           
                           
                           
                             <div class="col-md-4">
                                 <?php
									include("relatedlink.php");
									?>
                                    
                                </div>
                           
                           
                            </div>
                         
                         
                        </div>
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