<!-- === BEGIN HEADER === -->
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
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->




<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Active City Administration</title>
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
        
            <!-- === BEGIN CONTENT === -->
            <div id="slideshow" class="bottom-border-shadow">
                <div class="container no-padding background-white bottom-border">
                    <div class="row">
                        <!-- Carousel Slideshow -->
                        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example" data-slide-to="1"></li>
                                <li data-target="#carousel-example" data-slide-to="2"></li>
								<li data-target="#carousel-example" data-slide-to="3"></li>
                                <li data-target="#carousel-example" data-slide-to="4"></li>
                            </ol>
                            <div class="clearfix"></div>
                            <!-- End Carousel Indicators -->
                            <!-- Carousel Images -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="assets/img/slideshow/banner_1.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/banner_2.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/banner_3.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/banner_4.jpg">
                                </div>
								<div class="item">
                                    <img src="assets/img/slideshow/banner_5.jpg">
                                </div>
                            </div>
                            <!-- End Carousel Images -->
                            <!-- Carousel Controls -->
                            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            <!-- End Carousel Controls -->
                        </div>
                        <!-- End Carousel Slideshow -->
                    </div>
                </div>
            </div>
			
            <div id="icons" class="bottom-border-shadow">
                <div class="container background-grey bottom-border">
                    <div class="row padding-vert-60">
                        <!-- Icons -->
                      
                         <div class="col-md-6 text-center ">
				<!--		<table border="3" cellspacing="2" cellpadding="2" width=100% height=100%>
						<tr><td width=33%>365<br> VILLAGES</td>
						<td width=33% colspan="2"><font>ANAND<br>2941 sq. km area</font>
						<img src="assets/img/gujarat_map.png"></td>
						</tr>
						<tr>
						<td width=33%>8<br>TALUKAS</td>
						<td width=33%>20.93lacs<br>POPULATION</td>
						<td width=33%>74.13%<br>LITERACY RATE</td>
						</tr>
						</table>   -->
						
						
						<div class="banner_blocks mobile_hide" style="font-size: 12px;"> 
						
							<div class="villages_block" style="font-size: 12px;"> 
								<div class="box_content" style="font-size: 12px;"> 
									<span class="font_30px" style="font-size: 30px;">365</span><br>
									<span class="uppercase" style="font-size: 12px;">Villages</span>
								</div> 
							</div> 
						<a href="aboutanand.php">
						<div class="map_block" style="font-size: 12px;">
								<div class="gujarat_map_block" style="font-size: 12px; padding:3.5px">&nbsp;
								<img src="assets/img/gujarat_map.png">
								</div> </a>
								<div class="map_text_block" style="font-size: 13px;"><span class="font_30px" style="font-size: 30px;">
							&nbsp Anand</span><br>&nbsp&nbsp2941 sq. km area
								</div> 
							</div> 
							<div class=" taluka_block" style="font-size: 12px;"> 
								
									<div class="box_content" style="font-size: 12px; display: block;"> 
										<span class="font_30px" style="font-size: 30px;">8</span><br>
										<span class="uppercase" style="font-size: 12px;">Talukas</span> 
									</div>
							
						</div> 
						<div class=" population_block" style="font-size: 12px;"> 
							
							<div class="box_content" style="font-size: 12px; display: block;"> 
								<span class="font_30px" style="font-size: 30px;">20.93</span>lacs<br>
								<span class="uppercase" style="font-size: 12px;">Population</span> 
							</div>
							
						</div> 
						<div class=" literacy_block" style="font-size: 12px;">
							
							<div class="box_content" style="font-size: 12px; display: block;"> 
								<span class="font_30px" style="font-size: 30px;">74.13%</span><br>
								<span class="uppercase" style="font-size: 12px;">Literacy Rate</span> 
							</div> 
							
						</div> 
						<div class="block_detail" style="font-size: 12px;"> 
							<div class="block_detail_content" style="font-size: 12px;"> 
								<div class="close_block" style="font-size: 12px;">&nbsp;
								</div> 
							</div>
						</div>
					</div>
						
						
						
						
						


						</div>
                        <div class="col-md-3 text-center">
                          <img src="assets/img/vijay.jpg" class="img-circle" width="140" height="140" style="padding-top:9px;">
							  <h2 class="padding-top-10 animate fadeIn">Chief Minister</h2>
                            <p class="animate fadeIn">Vijaybhai Rupani<br>C.M<br>(GUJARAT)</p>
                        </div>
						
						
						
						 <div class="col-md-3 text-center">
                          <img src="assets/img/collector.png" class="img-circle" width="140" height="140" style="padding-top:9px;">
							  <h2 class="padding-top-10 animate fadeIn">Collector</h2>
                            <p class="animate fadeIn">Dr.Dhavalkumar Patel<br>IAS<br>(ANAND)</p>
                        </div>
						
						
						
                        <!-- End Icons -->
                    </div>
                </div>
            </div>

			
			
			
			
			
			 <div id="icons" class="bottom-border-shadow">
                <div class="container background-grey bottom-border">
                    <div class="row padding-vert-30">
                        <!-- Icons -->
                      
                         <div class="col-md-4 text-left">
								
								<?php
								  include("whatsnew.php");
								 ?>
			                       
						</div>
                        <div class="col-md-4 text-center">
								<div class="panel panel-default">
                                <div class="panel-heading">
                                    <h1 class="panel-title"><a>Disaster Plan</a></h1>
                                </div>
                                <div class="panel-body">
                                    <ul class="posts-list margin-top-9" style="font-size:16px;">
                                       
									<a name="id" href="pdf_download.php?id=1" target="_blank">  Volume of DDMP-1</a>
									  <hr>
									  
									<a name="id" href="pdf_download.php?id=2" target="_blank">  Volume of DDMP-2</a>

									  <hr>
									  
									  
									<a name="id" href="pdf_download.php?id=3" target="_blank"> District Resource Inventory</a>

									  <hr>
									  
									  
								<a name="id" href="pdf_download.php?id=4" target="_blank">	 Emergency Telephone Directory(English)</a>

									  <hr>
									  
								<a name="id" href="pdf_download.php?id=5" target="_blank">	  Emergency Telephone Directory(Gujarati)</a>

									  
                                       
                                    </ul>
                                </div>
							</div>
                        </div>
						<div class="col-md-4 text-center">
							<div class="panel panel-default">
                                <div class="panel-heading">
                                    <h1 class="panel-title"><a>Most Popular</a></h1>
                                </div>
                                <div class="panel-body">
                                    <ul class="posts-list margin-top-9" style="font-size:16px;">
                                      
                                        
							<a href="publicutility.php">Public Utilities</a> 										<hr>
										
									<a href="M_Office.php">	Mamlatdar Office</a>
										<hr>
										
									<a href="atvt.php">	Programs</a>
										<hr>
										
									<a href="janseva.php">	Jan Seva Kendra</a>
										<hr>
										
									<a href="objective.php">Objectives</a>
										
                                    </ul>
                                </div>
							</div>
						 	
                        </div>
						
					 

                        <!-- End Icons -->
                    </div>
                </div>
            </div>
			
			
			
			
			
			
			
			
			
			
			
			
			
            <div id="content" class="bottom-border-shadow">
                <div class="container background-white bottom-border">
                    <div class="row margin-vert-30">
                        <!-- Main Text -->
                        <div class="col-md-12">
                            <div class="tabs">
                                <ul class="nav nav-tabs text-center">
                                    <li class="active">
                                        <a href="#sample-1a" data-toggle="tab"><b>Certificate</b></a>
                                    </li>
                                    <li>
                                        <a href="#sample-1b" data-toggle="tab"><b>Revenue</b></a>
                                    </li>
                                    <li>
                                        <a href="#sample-1c" data-toggle="tab"><b>Miscellaneous</b></a>
                                    </li>
                                    <li>
                                        <a href="#sample-1d" data-toggle="tab"><b>RTI</b></a>
                                    </li>
									 <li>
                                        <a href="#sample-1e" data-toggle="tab"><b>Social Security</b></a>
                                    </li>
									<li>
                                        <a href="#sample-1f" data-toggle="tab"><b>Supply</b></a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="sample-1a">
               <p><h3>Four services offered in Certificate. Click on the service of your choice to know application details.</h3></p>
                                        <ul>
												<li><a name="id" href="pdf_download.php?id=9" target="_blank">સોલવન્સી સર્ટીફીકેટ મેળવવા બાબત</a></li>
                                         <br>   <li><a name="id" href="pdf_download.php?id=7" target="_blank">આવક અંગેનું પ્રમાણપત્ર મેળવવા બાબત</a></li>
										 <br>	<li><a name="id" href="pdf_download.php?id=6" target="_blank">ધાર્મિક અને ભાષાકીય લઘુમતી અંગેનું પ્રમાણપત્ર મેળવવા બાબત</a></li>
                                         <br>   <li><a name="id" href="pdf_download.php?id=8" target="_blank">સામાજીક અને શૈક્ષણિક રીતે પછાત વર્ગનું પ્રમાણપત્ર મેળવવા બાબત</a></li>
                                            
                                        </ul>
                                    </div>
									
									
									
                                    <div class="tab-pane fade in" id="sample-1b">
                                          <p><h3>Four services offered in Revenue. Click on the service of your choice to know application details.</h3></p>
                                        <ul>
												<li><a name="id" href="pdf_download.php?id=11" target="_blank">ગામ તળ માટે જમીન નીમ કરવા બાબત</a></li>
                                         <br>   <li><a name="id" href="pdf_download.php?id=12" target="_blank">સરકારી ખાતા / કચેરીઓને જમીનની માંગણી બાબત</a></li>
                                         <br> 	<li><a name="id" href="pdf_download.php?id=10" target="_blank">સરકારી પડતર જમીન ખેતીના હેતુ માટે સહકારી મંડળીઓની માંગણી બાબત</a></li>
                                         <br>  	<li><a name="id" href="pdf_download.php?id=13" target="_blank">સામાજીક વનીકરણ કરવા માટે જમીનની માંગણી બાબત</a></li>
                                        </ul>
                                    </div>
									
									

                                    <div class="tab-pane fade in" id="sample-1c">
                                       <p><h3>Four services offered in Miscellaneous. Click on the service of your choice to know application details.</h3></p>
                                        <ul>
												<li><a name="id" href="pdf_download.php?id=17" target="_blank">મહિલા પ્રધાન ક્ષેત્રિય બચત યોજનાની એજન્સી મળવા બાબત</a></li>
                                            <br><li><a name="id" href="pdf_download.php?id=16" target="_blank">સોગંદનામું (એફીડેવીટ)</a></li>
                                            <br><li><a name="id" href="pdf_download.php?id=15" target="_blank">સીનીયર સીટીઝન હોવા અંગેનું પ્રમાણપત્ર મેળવવા અંગે. (તા.આણંદ)</a></li>
                                            <br><li><a name="id" href="pdf_download.php?id=14" target="_blank">શૈક્ષણિક હેતુ માટે નેશનાલીટી સર્ટીફીકેટ મેળવવા બાબત</a></li>
                                        </ul>
                                    </div>
									
									
                                    <div class="tab-pane fade in" id="sample-1d">
                                        <p><h3>One service offered in RTI. Click on the service of your choice to know application details.</h3></p>
                                        <ul>
                                            <li><a name="id" href="pdf_download.php?id=18" target="_blank">માહિતી મેળવવા માટેની અરજીનો નમુનો</a></li>
                                         
                                        </ul>
										<br><br><br>
                                    </div>
                             
								
								
								  <div class="tab-pane fade in" id="sample-1e">
                                        <p><h3>One service offered in Social Security. Click on the service of your choice to know application details.</h3></p>
                                        <ul>
                                            <li><a name="id" href="pdf_download.php?id=19" target="_blank">વિધવા સહાય મેળવવા બાબત</a></li>
                                        </ul>
										<br><br><br>
                                    </div>
                               
								
								  <div class="tab-pane fade in" id="sample-1f">
                                        <p><h3>Four services offered in Supply. Click on the service of your choice to know application details.</h3></p>
                                        <ul>
												<li><a name="id" href="pdf_download.php?id=23" target="_blank">નવું રેશન કાર્ડ મેળવવા બાબત</a></li>
                                          <br>  <li><a name="id" href="pdf_download.php?id=20" target="_blank">ડુપ્લીકેટ રેશન કાર્ડ મેળવવા બાબત</a></li>
                                          <br>  <li><a name="id" href="pdf_download.php?id=21" target="_blank">રેશન કાર્ડમાં નામ દાખલ કરવા બાબત</a></li>
                                           <br> <li><a name="id" href="pdf_download.php?id=22" target="_blank">રેશન કાર્ડમાંથી નામ કમી કરવા બાબત</a></li>
                                        </ul>
                                    </div>
                             
								
								
								
								
                            </div>
							
							
							
							
							
							
							
							
							
                        </div>
                    </div>
                </div>
            </div>
			
			
			
		
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            
    </body>
</html>
<!-- === END FOOTER === -->


<?php

include("footer.php");
		
?>