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
        <title>Photo Gallery</title>
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
        
            <!-- End Top Menu -->
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <div class="col-md-12">
                           <h1 style="color:darkred;"><b>Photo Gallery</b></h1><br>
                            <!-- Filter Buttons -->
                            <div class="portfolio-filter-container margin-top-20">
                                <ul class="portfolio-filter">
                                    <li class="portfolio-filter-label label label-primary">
                                       <font size="3.5"> Category BY:</font>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".*"> <font size="3.5">All</font></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".sad"> <font size="3.5">Sadbhavna</font></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".run"><font size="3.5">Run for Unity</font></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".garib"><font size="3.5">Garib Kalyan Mela</font></a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-default" data-filter=".collect"><font size="3.5">Collector Office Inauguration</font></a>
                                    </li>
									<li>
                                        <a href="#" class="btn btn-default" data-filter=".krushi"><font size="3.5">Krushi Mahotsav 2014</font></a>
                                    </li>
									<li>
                                        <a href="#" class="btn btn-default" data-filter=".lok"><font size="3.5">Lokdarbar</font></a>
                                    </li>
									
                                </ul>
                            </div>
							<br>
                            <!-- End Filter Buttons -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 portfolio-group no-padding">
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40 sad">
                                <div>
                                    <a href="assets/img/portfolio/sadbhavna_1.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/sadbhavna_1.jpg" alt="image1">
                                            
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							
							<div class="col-md-4 portfolio-item margin-bottom-40 sad">
                                <div>
                                    <a href="assets/img/portfolio/sadbhavna_2.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/sadbhavna_2.jpg" alt="image1">
                                            
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 sad">
                                <div>
                                    <a href="assets/img/portfolio/sadbhavna_3.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/sadbhavna_3.jpg" alt="image1">
                                            
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
                            <!-- Portfolio Item -->
                            <div class="col-md-4 portfolio-item margin-bottom-40 run">
                                <div>
                                    <a href="assets/img/portfolio/run_for_unity1.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/run_for_unity1.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 run">
                                <div>
                                    <a href="assets/img/portfolio/run_for_unity2.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/run_for_unity2.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 run">
                                <div>
                                    <a href="assets/img/portfolio/run_for_unity3.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/run_for_unity3.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 run">
                                <div>
                                    <a href="assets/img/portfolio/run_for_unity4.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/run_for_unity4.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 run">
                                <div>
                                    <a href="assets/img/portfolio/run_for_unity5.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/run_for_unity5.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 run">
                                <div>
                                    <a href="assets/img/portfolio/run_for_unity6.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/run_for_unity6.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 run">
                                <div>
                                    <a href="assets/img/portfolio/run_for_unity7.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/run_for_unity7.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 run">
                                <div>
                                    <a href="assets/img/portfolio/run_for_unity8.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/run_for_unity8.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->
							<!-- Portfolio Item -->
							<div class="col-md-4 portfolio-item margin-bottom-40 garib">
                                <div>
                                    <a href="assets/img/portfolio/garib_1.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/garib_1.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 garib">
                                <div>
                                    <a href="assets/img/portfolio/garib_2.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/garib_2.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 garib">
                                <div>
                                    <a href="assets/img/portfolio/garib_3.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/garib_3.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 garib">
                                <div>
                                    <a href="assets/img/portfolio/garib_4.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/garib_4.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 garib">
                                <div>
                                    <a href="assets/img/portfolio/garib_5.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/garib_5.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<!-- End Portfolio Item -->
							<!-- Portfolio Item -->
							<div class="col-md-4 portfolio-item margin-bottom-40 collect">
                                <div>
                                    <a href="assets/img/portfolio/collect_1.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/collect_1.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 collect">
                                <div>
                                    <a href="assets/img/portfolio/collect_2.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/collect_2.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 collect">
                                <div>
                                    <a href="assets/img/portfolio/collect_3.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/collect_3.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 collect">
                                <div>
                                    <a href="assets/img/portfolio/collect_4.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/collect_4.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 collect">
                                <div>
                                    <a href="assets/img/portfolio/collect_5.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/collect_5.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							<!-- End Portfolio Item -->
							<!-- Portfolio Item -->
							<div class="col-md-4 portfolio-item margin-bottom-40 krushi">
                                <div>
                                    <a href="assets/img/portfolio/krushi_1.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/krushi_1.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 krushi">
                                <div>
                                    <a href="assets/img/portfolio/krushi_2.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/krushi_2.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 krushi">
                                <div>
                                    <a href="assets/img/portfolio/krushi_3.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/krushi_3.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 krushi">
                                <div>
                                    <a href="assets/img/portfolio/krushi_4.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/krushi_4.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 krushi">
                                <div>
                                    <a href="assets/img/portfolio/krushi_5.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/krushi_5.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 krushi">
                                <div>
                                    <a href="assets/img/portfolio/krushi_6.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/krushi_6.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 krushi">
                                <div>
                                    <a href="assets/img/portfolio/krushi_7.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/krushi_7.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							<!-- End Portfolio Item -->
							<!-- Portfolio Item -->
							<div class="col-md-4 portfolio-item margin-bottom-40 lok">
                                <div>
                                    <a href="assets/img/portfolio/lok_1.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/lok_1.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 lok">
                                <div>
                                    <a href="assets/img/portfolio/lok_2.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/lok_2.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 lok">
                                <div>
                                    <a href="assets/img/portfolio/lok_3.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/lok_3.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 lok">
                                <div>
                                    <a href="assets/img/portfolio/lok_4.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/lok_4.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							
							<div class="col-md-4 portfolio-item margin-bottom-40 lok">
                                <div>
                                    <a href="assets/img/portfolio/lok_5.jpg">
                                        <figure>
                                            <img src="assets/img/portfolio/lok_5.jpg" alt="image2">
                                           
                                        </figure>
                                    </a>
                                </div>
                            </div>
							<!-- End Portfolio Item -->
							
							
	
                           </div>
                    </div>
                </div>
            </div>
            
    </body>
</html>
<!-- === END FOOTER === -->


<?php 
include("footer.php");
?>