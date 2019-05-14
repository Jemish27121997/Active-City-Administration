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
<?php 
$con=mysqli_connect("localhost","root",""); 
   
$db_select=mysqli_select_db($con,"CITY1");	
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
        <title>Mamlatdar Office</title>
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
                        
                        <h1 style="color:darkred;">Mamlatdar Office</h1>
                        <div class="col-md-12">
                        
                       		   <div class="col-md-8"><br>
                  <h4>  <p align="justify" style="line-height:1.5;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                           		The office of Mamlatdar has assumed important status from ancient times. 
                           		The word "Mamlatdar" is derived from original Arabic World MUAMLA (Mamla) 
                           		means complicated matter or case and the officer who solves such matters 
                           		or issues is Mamlatdar. The Mamlatdar is the Head of revenue administration 
                           		consisting of average 50 or more groups of villages.
									<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								The state government appoints Mamlatdar under section-12 of Land Revenue Code.
								 Mamlatdar is also an executive magistrate under section-20 of the Indian Criminal
								  Procedure Code 1973. The Mamlatdar is a gazetted officer of the State Government.
								   As the collector is the head of the district so Mamlatdar plays role of head of Taluka.
								    He is responsible to Prant officer and collector and he solves problems of people by 
								    coming in direct contact of the people. Thus the Mamlatdar has a multipurpose role to 
								    play at Taluka level.</p></h4>
                          		 </div>
                           
                           		  <div class="col-md-4" >
                           		  
                           		  
                           		  
                           		  <div id="accordion" class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title" align="center">
                                            <a class="accordion-toggle" href="#collapse-One" data-parent="#accordion" data-toggle="collapse">
                                               <span class="fa-plus-square" style="float:left;"></span> Anand (Rural)
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-One" class="accordion-body collapse in">
                <?php
 $qry="SELECT * FROM organization WHERE id=7";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
                                        <div class="panel-body">
                                            
                                             <h3 align="center"><?php echo $row['name'] ?></h3>
                                             <h4 align="center"></span><?php echo $row['post'] ?></h4>
                                           <p align="center"><span class="fa fa-home"></span>Mamlatdar Office, District Seva Sadan, Near Ganesh Chokadi, Dist. Anand.</p>
                                              <p align="left" style="margin-top:-10px;padding-left:15px;"><span class="fa fa-phone"></span><?php echo $row['phone'] ?></p>
                                          
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title" align="center">
                                            <a class="accordion-toggle" href="#collapse-Two" data-parent="#accordion" data-toggle="collapse">
                                              <span class="fa-plus-square" style="float:left;"></span>  Anand (city)
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-Two" class="accordion-body collapse">
                                                  <?php
 $qry="SELECT * FROM organization WHERE id=6";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
                                        <div class="panel-body">
                                       
                                            <h3 align="center"></span><?php echo $row['name'] ?></h3>
                                             <h4 align="center"></span><?php echo $row['post'] ?></h4>
                                           <p align="center"><span class="fa fa-home"></span>Mamlatdar Office, Anand, District Seva Sadan, Near Ganesh Chokadi, Anand.</p>
                                              <p align="left" style="margin-top:-10px;padding-left:15px;"><span class="fa fa-phone"></span></span><?php echo $row['phone'] ?></p>
                                          
                                           
                                           </div>
                                    </div>
                                </div>
                           
                           
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title" align="center">
                                            <a class="accordion-toggle" href="#collapse-Three" data-parent="#accordion" data-toggle="collapse">
                                             <span class="fa-plus-square" style="float:left;"></span>  Petlad
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-Three" class="accordion-body collapse">
                                                  <?php
 $qry="SELECT * FROM organization WHERE id=12";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
                                        <div class="panel-body">
                                         
                                          <h3 align="center"></span><?php echo $row['name'] ?></h3>
                                             <h4 align="center"></span><?php echo $row['post'] ?></h4>
                                           <p align="center"><span class="fa fa-home"></span>Mamlatdar Office, Ta. Petlad, Dist. Anand</p>
                                              <p align="left" style="margin-top:-10px;padding-left:15px;"><span class="fa fa-phone"></span></span><?php echo $row['phone'] ?></p>
                                          
            
                                          
                                            </div>
                                        </div>
                                    </div>
                            
                           		  
                           		  
                           		    <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title" align="center">
                                            <a class="accordion-toggle" href="#collapse-four" data-parent="#accordion" data-toggle="collapse">
                                           <span class="fa-plus-square" style="float:left;"></span>   Borsad
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-four" class="accordion-body collapse">
                                                  <?php
 $qry="SELECT * FROM organization WHERE id=13";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
                                        <div class="panel-body">
                                          
                                          <h3 align="center"></span><?php echo $row['name'] ?></h3>
                                             <h4 align="center"></span><?php echo $row['post'] ?></h4>
                                           <p align="center"><span class="fa fa-home"></span>Mamlatdar Office, Ta. Borsad, Dist. Anand.</p>
                                              <p align="left" style="margin-top:-10px;padding-left:15px;"><span class="fa fa-phone"></span></span><?php echo $row['phone'] ?></p>
                                          
                                            </div>
                                        </div>
                                    </div>
                            
                                
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title" align="center">
                                            <a class="accordion-toggle" href="#collapse-five" data-parent="#accordion" data-toggle="collapse">
                                           <span class="fa-plus-square" style="float:left;"></span>     Umreth
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-five" class="accordion-body collapse">
                                                  <?php
$qry="SELECT * FROM organization WHERE id=14";
$eqry=mysqli_query($con,$qry);		    
$row = mysqli_fetch_array($eqry)             
?>
                                        <div class="panel-body">
                                            <h3 align="center"></span><?php echo $row['name'] ?></h3>
                                             <h4 align="center"></span><?php echo $row['post'] ?></h4>
                                           <p align="center"><span class="fa fa-home"></span>Mamlatdar Office, Ta. Umreth, Dist. Anand.</p>
                                              <p align="left" style="margin-top:-10px;padding-left:15px;"><span class="fa fa-phone"></span></span><?php echo $row['phone'] ?></p>
                                          
                                            </div>
                                        </div>
                                    </div>
                      
                           		  
                           		  
                           		  
                           		  
                           		  
                           		  
                   
                           		</div>
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
mysqli_close($con);
?>