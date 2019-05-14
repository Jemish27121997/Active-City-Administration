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
        <title>About Us</title>
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
                            <h1 style="color:darkred;">About Us</h1>
                            <div class="row">
                              
                                <div class="col-md-6 margin-bottom-10 ">
                        <img src="assets/img/deep.JPG" alt="about-me" class="margin-top-10 img-responsive center-block" style=" border-radius: 200px; width: 300px;
    height: 300px; ">
                                             <div class="clearfix"></div>
                                 <hr>
                                 <div align="center">
                                  <font size="5">Deep Patel</font>
                                  <br>
                                  
                          <font size="3">    <span class="fa-envelope-o" ></span>deeppatel2223@gmail.com</font>
                             <br>
                            <font size="3">   <span class="fa-phone"></span>9016585890</font>
                            <br>
                          
                                 </div>
                          
                                    <hr>
                                   
                                    </div>
                           
                           
                                <div class="col-md-6 margin-bottom-10 ">
                                
                               <img src="assets/img/jemish.jpg" alt="about-me" class="margin-top-10 img-responsive center-block" style="border-radius: 200px; width: 300px;
    height: 300px;">
                                             <div class="clearfix"></div>
                                 <hr>
                                 <div align="center">
                                  <font size="5">Jemish Paghadar</font>
                                  <br>
                                  
                          <font size="3">    <span class="fa-envelope-o" ></span>jemish.paghadar27@gmail.com</font>
                             <br>
                            <font size="3">   <span class="fa-phone"></span>9979958630</font>
                            <br>
                           
                                 </div>
                          
                                    <hr>
                                   
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