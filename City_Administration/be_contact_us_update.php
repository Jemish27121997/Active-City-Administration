



<html lang="en">
 <head>
        <!-- Title -->
        <title>Backend_contact</title>
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
          
                    <div class=" margin-vert-30">
                        <!-- Register Box -->
                     
                        <div class="col-md-12">
                         <div class="col-md-6">
                           <font size="7">Backend : contact us</font>
                           </div>
                            <div class="col-md-6">
                          <p class="text-right"> <font size="6"> 
                           <a href="admin.php"><span type="span" class="label label-warning">Home</span></a>
                           <a href="be_contact_us_insert.php"><span type="span" class="label label-warning">insert</span></a></font></p>
                            </div>
                            <br>
                             <br> <br>
                            <div class="col-md-12">
                            <form>
                              
                <!-- titles -->  
                  <div class="row text-center">
             <div class="col-sm-1 col-xs-1">
                                <label>id</label>                 
             </div>
               <div class="col-sm-2 col-xs-2">
                                <label>post</label>                 
             </div>
               <div class="col-sm-3 col-xs-3">
                                <label>name</label>                 
             </div>
               <div class="col-sm-2 col-xs-2">
                                <label>phone</label>                 
             </div>
               <div class="col-sm-3 col-xs-3">
                                <label>email</label>                 
             </div>
                    <div class="col-sm-1 col-xs-1">
                                                
             </div>                
                        
       </div>                    




<?php 

	$con=mysqli_connect("localhost","root","");
	   
if(!$con)				  

{	
	die("Could not connect" . mysql_error());  
 }
	mysqli_select_db($con,"CITY1");

	
	$query  = "SELECT * FROM organization";
	$qqq=mysqli_query($con,$query) or  die("Error, query failed1");
//$row = mysqli_fetch_array($qqq)
$num_rows = mysqli_num_rows($qqq);
//echo $num_rows;
$nr=1;

setcookie("flag",1);
while($num_rows>0)
{
	
	
	
	
//	echo $var_value;
	$query1  = "SELECT * FROM organization WHERE id=$nr";
	$qqq1=mysqli_query($con,$query1) or  die("Error, query failed2");
	$row1 = mysqli_fetch_array($qqq1)

?>
	 <div class="row">
 	 <form action="be_contact_us_1.php" method="POST">
             <div class="col-sm-1 col-xs-1">
                                <input name="id" class="form-control margin-bottom-20" type="text" value="<?php echo $row1['id']; ?>">
             </div>
          <div class="col-sm-2 col-xs-2">
                                <input name="post" class="form-control margin-bottom-20" type="text" value="<?php echo $row1['post']; ?>" >
             </div>
               <div class="col-sm-3 col-xs-3">
                                <input name="name" class="form-control margin-bottom-20" type="text" value="<?php echo $row1['name']; ?>" >
             </div>
               <div class="col-sm-2 col-xs-2">
                                <input name="phone" class="form-control margin-bottom-20" type="text" value="<?php echo $row1['phone']; ?>" >
             </div>
               <div class="col-sm-3 col-xs-3">
                                <input name="email" class="form-control margin-bottom-20" type="text" value="<?php echo $row1['email']; ?>">
             </div>  
             <div class="col-sm-1 col-xs-1">
                           <input type="submit" value="<--" >
             </div> 
     </form>                 
       </div>
       <?php
	$num_rows--;
	$nr++;
}

?>


                    <!--end titles --> 
      
                                 
                            </form>
                        </div>
                        <!-- End Register Box -->
                       
        			</div>
        			
        			
        			
        			
        			
    </body>
</html>





<?php
mysqli_close($con);
?>
<!--// application/pdf
//application/vnd.openxmlformats-officedocument.wordprocessingml.document
application/msword
-->