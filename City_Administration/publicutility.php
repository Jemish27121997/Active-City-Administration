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
        <title>Public Utility</title>
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
         
         
         
         <?php

$con=mysqli_connect("localhost","root",""); 
   
$db_select=mysqli_select_db($con,"CITY");	
        
?>

            <!-- === BEGIN CONTENT === -->
    
       
             <div id="content" class="bottom-border-shadow">  
                <div class="container background-white bottom-border" >
              		<div class="row margin-vert-20">
                        <!-- Main Column -->
                         
                        
								<div class="col-md-8">
								<h1 style="color:darkred;">Public Utilities</h1><br>
								<font size="4">  <p align="justify" style="line-height:1.5;">
                           		We serve the public interest by ensuring the provision of reliable utilities and infrastructure with a commitment to environmental enhancement and a district-wide health.
								</p></font>
								</div>
								<div class="col-md-12">
								<br>
								 <div class="row tabs">
                                <div class="col-sm-3">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li class="active">
                                            <a href="#sample-3a" data-toggle="tab">
                                               <b>Colleges</b></a>
                                        </li>
                                        <li>
                                            <a href="#sample-3b" data-toggle="tab">
                                               <b>NGOs</b></a>
                                        </li>
                                        <li>
                                            <a href="#sample-3c" data-toggle="tab">
                                               <b>Passport & Visas</b></a>
                                        </li>
                                        <li>
                                            <a href="#sample-3d" data-toggle="tab">
                                               <b>Banks</b></a>
                                        </li>
										<li>
                                            <a href="#sample-3e" data-toggle="tab">
                                               <b>Telecom</b></a>
                                        </li>
										<li>
                                            <a href="#sample-3f" data-toggle="tab">
                                               <b>Hospitals</b></a>
                                        </li>
										<li>
                                            <a href="#sample-3g" data-toggle="tab">
                                               <b>Municipality</b></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-9">
            
                                    <div class="tab-content">
									
                                        <div class="tab-pane fade in active" id="sample-3a">
                                            <div class="row">
                                                <div class="col-md-12">
											
											
											
					
					
					
					
					
					
					
						
												
												
												<div class="panel panel-blue">
<?php
 $qry="SELECT * FROM utility WHERE id=1";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>
														
												</div>
												
												<br>
												
												
												
												
												
												
												
												<div class="panel panel-aqua">

<?php
 $qry="SELECT * FROM utility WHERE id=2";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>
														
																								
												
												
												
												</div>
												
												<br>
												
												
												
												<div class="panel panel-blue">
									
<?php
 $qry="SELECT * FROM utility WHERE id=3";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>
														
												
														
												</div>
												
												<br>
												
												<div class="panel panel-aqua">
									
<?php
 $qry="SELECT * FROM utility WHERE id=4";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>
														
												
														
												</div>
												
												<br> 
												
												
												
												
												
												
												</div>
											</div>
											
											
                                        </div>
                                        
										
										
									<div class="tab-pane fade in" id="sample-3b">
                                            <div class="row">
                                                <div class="col-md-12">
												
												
												<div class="panel panel-blue">
<?php
 $qry="SELECT * FROM utility WHERE id=5";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>
												</div>
												
												<br>
												
												<div class="panel panel-aqua">
<?php
 $qry="SELECT * FROM utility WHERE id=6";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>
														
												</div>
												
												<br>
												
											
												
												</div>
											</div>
											
											
                                        </div>	
										
										
										
										
										
										<div class="tab-pane fade in" id="sample-3c">
                                            <div class="row">
                                                <div class="col-md-12">
												
												
												<div class="panel panel-blue">
<?php
 $qry="SELECT * FROM utility WHERE id=7";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>
														
												</div>
												
												
												
												<br>
												
											
												
												</div>
											</div>
											
											
                                        </div>	
										
										
										
										<div class="tab-pane fade in" id="sample-3d">
                                            <div class="row">
                                                <div class="col-md-12">
												
												
												<div class="panel panel-blue">
<?php
 $qry="SELECT * FROM utility WHERE id=8";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>	
												</div>
												<br>
												<div class="panel panel-aqua">
<?php
 $qry="SELECT * FROM utility WHERE id=9";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>	
												</div>
												
												
												<br>
												
												<div class="panel panel-blue">
<?php
 $qry="SELECT * FROM utility WHERE id=10";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>	
												</div>
												<br>
												<div class="panel panel-aqua">
	<?php
 $qry="SELECT * FROM utility WHERE id=11";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>
														
												</div>
												
											
												
												</div>
											</div>
											
											
                                        </div>	
										
										
										
										
										<div class="tab-pane fade in" id="sample-3e">
                                            <div class="row">
                                                <div class="col-md-12">
												
												
												<div class="panel panel-blue">
<?php
 $qry="SELECT * FROM utility WHERE id=12";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>	
												</div>
												<br>
												<div class="panel panel-aqua">
<?php
 $qry="SELECT * FROM utility WHERE id=13";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>	
												</div>
												
												
												<br>
												
												<div class="panel panel-blue">
<?php
 $qry="SELECT * FROM utility WHERE id=14";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>
												</div>
												<br>
												<div class="panel panel-aqua">
<?php
 $qry="SELECT * FROM utility WHERE id=15";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>
														
												</div>
												
											
												
												</div>
											</div>
											
											
                                        </div>	
										
										
										<div class="tab-pane fade in" id="sample-3f">
                                            <div class="row">
                                                <div class="col-md-12">
												
												
												<div class="panel panel-blue">
<?php
 $qry="SELECT * FROM utility WHERE id=16";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>
														
												</div>
												<br>
												<div class="panel panel-aqua">
<?php
 $qry="SELECT * FROM utility WHERE id=17";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>
														
												</div>
												
												
												<br>
												
												<div class="panel panel-blue">
<?php
 $qry="SELECT * FROM utility WHERE id=18";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>
												</div>
												<br>
												<div class="panel panel-aqua">
<?php
 $qry="SELECT * FROM utility WHERE id=19";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>
														
												</div>
												
											
												
												</div>
											</div>
											
											
                                        </div>	
										
										
										
										<div class="tab-pane fade in" id="sample-3g">
                                            <div class="row">
                                                <div class="col-md-12">
												
												
												<div class="panel panel-blue">
<?php
 $qry="SELECT * FROM utility WHERE id=20";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
														<div class="panel-heading" align="center">
															<h3 class="panel-title"><?php echo $row['name'] ?></h3>
														 </div>
														<div class="panel-body">
														<font size="4">
															 <div class="col-md-8 col-sm-4 col-xs-12">
															 <?php echo $row['address'] ?>
															 </div>
															 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
															
															  
														</font>
															
														</div>
														
												</div>
												
											
												
												</div>
											</div>
											
											
                                        </div>
										
										
										
										
										
										
                                    </div>
                                </div>
                            </div>
							
								
								
     
                        
                        <!-- End Main Column -->
						</div>
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
mysqli_close($con);
?>