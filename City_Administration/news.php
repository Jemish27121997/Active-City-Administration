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

<html lang="en">
 <head>
        <!-- Title -->
        <title>News</title>
        <!-- Meta -->
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
           <div id="content" class="bottom-border-shadow">  
                <div class="container background-white bottom-border" >
                    <div class=" margin-vert-30">
                        <!-- Register Box -->

                        <div class="col-md-12">
                
                        
			
                              
                                 



   <div class="col-md-8">
           <h1 style="color:darkred;">News</h1>
           <hr>
<?php 

	$con=mysqli_connect("localhost","root","");
	   
if(!$con)				  

{	
	die("Could not connect" . mysql_error());  
 }
	mysqli_select_db($con,"CITY");

	
	$query  = "SELECT * FROM news";
	$qqq=mysqli_query($con,$query) or  die("Error, query failed1");
//$row = mysqli_fetch_array($qqq)
$num_rows = mysqli_num_rows($qqq);
//echo $num_rows;
$nr=1;
while($num_rows>0)
{
	
//	$_SESSION['num_rows'] = $nr;
//	$var_value =$_SESSION['num_rows'];
 //	echo $num_rows;
	$query1  = "SELECT * FROM news WHERE id=$num_rows";
	$qqq1=mysqli_query($con,$query1) or  die("Error, query failed2");
	$row1 = mysqli_fetch_array($qqq1)

?>
	     
	 <div class="row">

		
	<div class="col-md-3">		
<!--	<img src="assets/img/deep.JPG" style="border-radius:20px;" height="150px" width="150px"/> 
 <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row1['img'] ).'" style="border-radius:20px;" height="150px" width="150px"/>'  ?>
	
	
	-->
	
	 <?php
             if($row1['img']!=NULL)
             {
             ?>        
             <?php echo '<img src="data:image/*;base64,'.base64_encode( $row1['img'] ).'" style="border-radius:200px;" height="150px" width="150px"/>'  ?>  
       		<?php
       		}
       		else
       		{
       		?>
       		 <img src="assets/img/pp.jpg" style="border-radius:200px;" height="150px" width="150px"/> 
       		<?php 
       		}
       		?>
	
	
	
	
	
	
	
	
	
	
	
	
	</div>
	<div class="col-md-9">	
	 <span class="whats-new" style="padding-right:40px;">
                                                  <?php echo $row1['time']; ?>
                                           </span><br>
     <p >
     	<h4 style="text-align:justify;">  <?php echo $row1['news']; ?>  </h4>
     	
     </p>                                    

	</div>
                
       </div>
      <hr>
       <?php
	$num_rows--;
	$nr++;
}
?>

 </div>
                    <!--end titles --> 
        <div class="col-md-4">
									<?php
									include("relatedlink.php");
									?>
                           </div>
                        
                         
                        </div>
                        <!-- End Register Box -->
                       </div>
                       </div>
        			</div>
    </body>
</html>





<?php

mysqli_close($con);

?>
<?php
include("footer.php");


?>
