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
        <title>Contact</title>
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
                        <!-- Main Column --><h1 style="color:darkred;">Contact</h1><br>
                        <div class="col-md-12">
                        
                          <div class="col-md-6" style="border: 1px solid; background-color:#fdf3e3;">
                    
                           		
                           		 <div class="col-md-6">
                           		  <font size="5px" class="row margin-vert-10"><u>Collector Office</u></font>
                           		<samp>
                           			<br>Near Borsad Chokdi,<br>
									Opp. DSP Office,<br>
									Anand,<br>
									Gujarat - 388540
								</samp>
								
										<div class="row margin-vert-10" style="font-size:16px;">
														<br><span class="fa-phone-square"></span>+91 2692 262271
														<br><span class="fa-print"></span>+91 2692 241575
														<br><span class="fa-envelope"></span><a href="mailto:collector-and@gujarat.gov.in">collector-and@gujarat.gov.in</a>
										</div>
                           		</div>
                           		
                       		    <div class="col-md-6">
                       		                  <font size="5px" class="row margin-vert-0"><u>Emergencies</u></font>
                       		                <div class="text-center">  
                       		           
                       		                <pre style="background-color:#fee3ee;"> <font size="3px">District Helpline </font><br><font color="red">Call : +91 2692 1077</font>
											</pre>
											<pre><font size="3px">Commissioner of <br>Rescue & Relief </font><br><font color="red">Call : 1070</font>
											</pre>
											<pre><font size="3px">District EOC</font><br><font color="red">Call : +91 2692 243222</font>
											</pre>
											</div>
                           			 </div>
                           </div>
                           
                             <div class="col-md-6" >
                           		
                           		<div class="row margin-vert-0" style="padding-left:10px;">
                           		
                           		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58957.675955438855!2d72.94627649844266!3d22.547113305644604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e4e7efd0c8885%3A0xa9a0b93c0c4b5215!2sAnand%2C+Gujarat!5e0!3m2!1sen!2sin!4v1490451466493" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" frameborder="0" style="width: 99%; height: 368px" allowfullscreen></iframe>
                           		
                           		</div>
                           		
                           		</div>
                        </div>
     
                        
                        <!-- End Main Column -->
                    </div>
                  </div>  
               </div>     
                    
               <div id="content" class="bottom-border-shadow">        
              <div class="container background-white bottom-border">       
                     <!-- start contact detail -->
                
                
                    <div class="row margin-vert-30">
                        <!-- Main Text -->
                        
<?php

$con=mysqli_connect("localhost","root",""); 
   
$db_select=mysqli_select_db($con,"CITY");	
        
?>


                         <!-- details -->
                        <div class="col-md-12">
                            <div class="tabs">
                                <ul class="nav nav-tabs text-center">
                                    <li class="active">
                                        <a href="#sample-1a" data-toggle="tab"><b>Collector</b></a>
                                    </li>
                                    <li>
                                        <a href="#sample-1b" data-toggle="tab"><b>Dpty. Collector</b></a>
                                    </li>
                                    <li>
                                        <a href="#sample-1c" data-toggle="tab"><b>Mamlatdar</b></a>
                                    </li>
                                    <li>
                                        <a href="#sample-1d" data-toggle="tab"><b>Branches</b></a>
                                    </li>
					
                                </ul>
                   <div class="tab-content">
               
                                
            <div class="tab-pane fade in active" id="sample-1a">
              							
              						
              						<div class="panel panel-blue">
  												<div class="panel-heading" align="center">
    												<h3 class="panel-title">Collector Anand</h3>
 												 </div>
<?php
 $qry="SELECT * FROM organization WHERE id=1";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
 											   <div class="panel-body">
 												<font size="4">
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['name'] ?></div>
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
 													  <div class="col-md-4 col-sm-4 col-xs-12"><a href="mailto:collector-and@gujarat.gov.in"><?php echo $row['email'] ?></a></div>
 													  
 													</font>
 													
 															 </div>
									</div>
									
									<div class="panel panel-blue">
 											 <div class="panel-heading" align="center">
   												 <h3 class="panel-title">Resident Add. Collector</h3>
 												 </div>
  											<?php
 $qry="SELECT * FROM organization WHERE id=2";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
 											   <div class="panel-body">
 												<font size="4">
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['name'] ?></div>
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
 													  <div class="col-md-4 col-sm-4 col-xs-12"><a href="mailto:collector-and@gujarat.gov.in"><?php echo $row['email'] ?></a></div>
 													  
 													</font>
 													
 															 </div>
										</div>
              				
    						     </div>
                              
						
              <div class="tab-pane fade in" id="sample-1b">
                                       
                                       
                                       
                                       
                                       <div class="panel panel-aqua">
                                          <div class="panel-heading" align="center">
                                                <h3 class="panel-title">	Dy. Collector Land Reform</h3>
                                           </div>
                                 <?php
 $qry="SELECT * FROM organization WHERE id=3";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
 											   <div class="panel-body">
 												<font size="4">
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['name'] ?></div>
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
 													  <div class="col-md-4 col-sm-4 col-xs-12"><a href="mailto:collector-and@gujarat.gov.in"><?php echo $row['email'] ?></a></div>
 													  
 													</font>
 													
 															 </div>
			        				</div>
			        				
			        				 <div class="panel panel-aqua">
                                          <div class="panel-heading" align="center">
                                                <h3 class="panel-title">Dy. Collector Stamp Duty</h3>
                                           </div>
                            <?php
 $qry="SELECT * FROM organization WHERE id=4";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
 											   <div class="panel-body">
 												<font size="4">
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['name'] ?></div>
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
 													  <div class="col-md-4 col-sm-4 col-xs-12"><a href="mailto:collector-and@gujarat.gov.in"><?php echo $row['email'] ?></a></div>
 													  
 													</font>
 													
 															 </div>
			        				</div>


                                      <div class="panel panel-aqua">
                                        <div class="panel-heading" align="center">
                                          <h3 class="panel-title">Dy. Collector and SDM Anand</h3>
                                        </div>
                        <?php
 $qry="SELECT * FROM organization WHERE id=5";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
 											   <div class="panel-body">
 												<font size="4">
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['name'] ?></div>
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
 													  <div class="col-md-4 col-sm-4 col-xs-12"><a href="mailto:collector-and@gujarat.gov.in"><?php echo $row['email'] ?></a></div>
 													  
 													</font>
 													
 															 </div>
                                      </div> 
                                        
                                    </div>
									
				
             <div class="tab-pane fade in" id="sample-1c">
                                       
                                       <div class="panel panel-orange">
                                  			<div class="panel-heading" align="center">
                                                               <h3 class="panel-title">Mamlatdar Anand (City)</h3>
                                              </div>
                                               <?php
 $qry="SELECT * FROM organization WHERE id=6";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
 											   <div class="panel-body">
 												<font size="4">
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['name'] ?></div>
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
 													  <div class="col-md-4 col-sm-4 col-xs-12"><a href="mailto:collector-and@gujarat.gov.in"><?php echo $row['email'] ?></a></div>
 													  
 													</font>
 													
 															 </div>
                                          </div>


                                              <div class="panel panel-orange" >
                                                <div class="panel-heading" align="center">
                                                  <h3 class="panel-title">Mamlatdar Anand (Rural)</h3>
                                                </div>
                                             <?php
 $qry="SELECT * FROM organization WHERE id=7";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
 											   <div class="panel-body">
 												<font size="4">
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['name'] ?></div>
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
 													  <div class="col-md-4 col-sm-4 col-xs-12"><a href="mailto:collector-and@gujarat.gov.in"><?php echo $row['email'] ?></a></div>
 													  
 													</font>
 													
 															 </div>
                                              </div>
                                    </div>
									
					
             <div class="tab-pane fade in" id="sample-1d">
                
                     <div class="panel panel-green">
                                                <div class="panel-heading" align="center">
                                                  <h3 class="panel-title">Accounts</h3>
                                                </div>
                                                <?php
 $qry="SELECT * FROM organization WHERE id=8";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
 											   <div class="panel-body">
 												<font size="4">
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['name'] ?></div>
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
 													  <div class="col-md-4 col-sm-4 col-xs-12"><a href="mailto:collector-and@gujarat.gov.in"><?php echo $row['email'] ?></a></div>
 													  
 													</font>
 													
 															 </div>
                                              </div>



                                              <div class="panel panel-green">
                                                <div class="panel-heading"  align="center">
                                                  <h3 class="panel-title">Administration</h3>
                                                </div>
                                                <?php
 $qry="SELECT * FROM organization WHERE id=9";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
 											   <div class="panel-body">
 												<font size="4">
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['name'] ?></div>
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
 													  <div class="col-md-4 col-sm-4 col-xs-12"><a href="mailto:collector-and@gujarat.gov.in"><?php echo $row['email'] ?></a></div>
 													  
 													</font>
 													
 															 </div>
                                              </div>
                                              
                                              
                                              
                                                <div class="panel panel-green" >
                                                <div class="panel-heading"  align="center">
                                                  <h3 class="panel-title">Establishment</h3>
                                                </div>
                                                 <?php
 $qry="SELECT * FROM organization WHERE id=10";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
 											   <div class="panel-body">
 												<font size="4">
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['name'] ?></div>
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
 													  <div class="col-md-4 col-sm-4 col-xs-12"><a href="mailto:collector-and@gujarat.gov.in"><?php echo $row['email'] ?></a></div>
 													  
 													</font>
 													
 															 </div>
                                              </div>
                                              
                                              
                                                <div class="panel panel-green">
                                                <div class="panel-heading"  align="center">
                                                  <h3 class="panel-title">Magisterial</h3>
                                                </div>
                                                 <?php
 $qry="SELECT * FROM organization WHERE id=11";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
 											   <div class="panel-body">
 												<font size="4">
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['name'] ?></div>
 													 <div class="col-md-4 col-sm-4 col-xs-12"><?php echo $row['phone'] ?></div>
 													  <div class="col-md-4 col-sm-4 col-xs-12"><a href="mailto:collector-and@gujarat.gov.in"><?php echo $row['email'] ?></a></div>
 													  
 													</font>
 													
 															 </div>
                                              </div>
                </div>
                       	
                            </div>
							
                        </div>
                    </div>
                    
<?php                    
                    mysqli_close($con);				   
?>
                     <!-- details END  -->
                </div>
       			
			 <!-- End contact detail -->
                    
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