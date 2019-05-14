
<?php 
session_start();
include("user_navigation.php");
?>
<?php

$as=$_SESSION['city_user'];
$aa=$_SESSION['aadhar1'];

$con2=mysqli_connect("localhost","root",""); 
$db_select=mysqli_select_db($con2,"CITY1");	
$qry2="SELECT * FROM citizen WHERE aadhar='$aa'";
$eqry2=mysqli_query($con2,$qry2);	
$row2 = mysqli_fetch_array($eqry2);
$n1=$row2['phone'];
$n2=$row2['email'];
$n3=$row2['address'];

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>user</title>
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
   
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Main Column -->
                        
                          <div class="headline">
                             <h2><font  style="color:darkred;">wellcome</font> <?php  echo "$as";  ?></h2>
                          
                        
                            </div>
                        
                        <div class="col-md-12">
                            <!-- Main Content -->  
             <div class="col-md-6 col-sm-6 col-xs-12 text-center margin-top-30"> 
            
    <a href="user_profilepic.php">
             <?php
             if($row2['profilepic']!=NULL)
             {
             ?>        
             <?php echo '<img src="data:image/*;base64,'.base64_encode( $row2['profilepic'] ).'" style="border-radius:200px;" height="250px" width="250px"/>'  ?>  
       		<?php
       		}
       		else
       		{
       		?>
       		 <img src="assets/img/pp.jpg" style="border-radius:200px;" height="250px" width="250px"/> 
       		<?php 
       		}
       		?>
       		
       	</a>
         <!--     <img src="assets/img/deep.JPG" style="border-radius:200px;" height="250px" width="250px"/>  -->
     
			</div>
			 
			     <div class="col-md-6 col-sm-6 col-xs-12 margin-top-50">
                            <!-- Recent Posts -->
                            <div class="panel panel-default background-white">
                      <!--          <div class="panel-heading" style="background-color:black;border-radius:50px 50px 0px 0px;">  -->
                                    <div class= "padding-top-20"> <font size="10" color="black"><?php 
                                  
                                         $as=$_SESSION['city_user'];
                                        echo "$as"; 
                                 
                                          ?></font></div>
                         <!--       </div>  -->
                         
                                <div class="panel-body" style="background-color:white;">
                                    <ul class="list-unstyled">
                                  <h3>    <li>
                                            <i class="fa-adn color-primary"></i><?php  echo "$aa";  ?></li>
                                        <li style="padding-top:15px;">
                                            <i class="fa-phone color-green"></i><?php  echo "$n1";  ?></li>
                                        <li style="padding-top:15px;">
                                            <i class="fa-envelope color-red"></i><?php  echo "$n2";  ?></li>
                                        <li style="padding-top:15px;">
                                            <i class="fa-home color-blue"></i><?php  echo "$n3";  ?></li>
                                      </h3>
                                    </ul>
                                 
                                </div>
                            </div>
                            <!-- End recent Posts -->
                        
                        </div>
			
			</div>
			
			
			
			  <div class="col-md-12 col-sm-12 margin-top-40">
			  <hr>
                   <h2 class="text-center" style="color:darkblue;">Enter New Complaint</h2>
            <hr>         <!-- Contact Form -->
                            <form method="post" action="be_user_complaint_insert.php" enctype="multipart/form-data">
                                <label>Title <span class="color-red">*</span></label>
                                <div class="row margin-bottom-20">
                                    <div class="col-md-6 col-md-offset-0">
                                        <input class="form-control" type="text" name="title">
                                    </div>
                                </div>
                                <label>photo
                                 
                                </label>
                                <div class="row margin-bottom-20">
                                    <div class="col-md-6 col-md-offset-0">
                                      <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                                        <input class="form-control" type="file" accept="image/*" name="image3" id="image3">
                                    </div>
                                </div>
                                <label>Complaint<span class="color-red">*</span></label>
                                <div class="row margin-bottom-20">
                                    <div class="col-md-8 col-md-offset-0">
                                        <textarea name="complaint" rows="8" class="form-control" placeholder="Enter your complaint here.."></textarea>
                                    </div>
                                </div>
                                <p>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </p>
                            </form>
                           
                            <!-- End Contact Form -->
                            <!-- End Main Content -->
                        </div>
                        <!-- End Main Column -->
                        
                        
  <div class="col-md-12 col-sm-12 margin-top-10">  
          <hr>
                   <h2 class="text-center" style="color:darkblue;">Your Complaints</h2>
            <hr> 
         
          <div class="row text-center" style="margin-bottom:30px;">
    <h4>
    		 <div class="col-sm-2 col-xs-2">	
    		 Title
    		 </div>
              <div class="col-sm-2 col-xs-2">	
    		 Time
    		 </div>
    		  <div class="col-sm-4 col-xs-4">	
    		 Description
    		 </div>
              <div class="col-sm-3 col-xs-3">			 
               Image
					</div> 
				 <div class="col-sm-1 col-xs-1">			 
               
					</div> 
         </h4> 
              
       </div>
         
       

<?php 

	$con4=mysqli_connect("localhost","root","");

	mysqli_select_db($con4,"CITY");

	
	$query4  = "SELECT * FROM complaint WHERE  aadhar=$aa";
	
	$qqq4=mysqli_query($con4,$query4) or  die("Error, query failed1");
//$row = mysqli_fetch_array($qqq)
$num_rows4 = mysqli_num_rows($qqq4);

//echo $num_rows;

$nr=1;
while($num_rows4>0)
{
	
//	$_SESSION['num_rows'] = $nr;
//	$var_value =$_SESSION['num_rows'];
//	echo $var_value;
	$query1  = "SELECT * FROM complaint WHERE id=$num_rows4";
	$qqq1=mysqli_query($con4,$query1) or  die("Error, query failed2");
	$row1 = mysqli_fetch_array($qqq1)

?>
	 <div class="row text-center">
    
    		 <div class="col-sm-2 col-xs-12">	
    		 	<?php echo $row1['title']; ?>
    		 </div>
              <div class="col-sm-2 col-xs-12">	
    		 	<?php echo $row1['time']; ?>
    		 </div>
    		  <div class="col-sm-4 col-xs-12">	
    		 	<?php echo $row1['description']; ?>
    		 </div>
              <div class="col-sm-3 col-xs-12">			 
               			<?php echo '<img src="data:image/*;base64,'.base64_encode($row1['image']).'" style="border-radius:200px;" height="150px" width="150px"/>'  ?>
					
					</div> 
          	 <div class="col-sm-1 col-xs-12">	
    		  
    		 </div>
    		
              
       </div>
        <hr>
       <?php
	$num_rows4--;
	//$nr++;
}
?>

<?php
mysqli_close($con4);
?>
  </div>              
                        <!-- Side Column -->           
                        <!-- End Side Column -->
                </div>
            </div>
            <!-- === END CONTENT === -->

   
    </body>
</html>
<!-- === END FOOTER === -->


<?php
mysqli_close($con2);	
include("footer.php");


?>