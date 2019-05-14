



<html lang="en">
 <head>
        <!-- Title -->
        <title>Backend_feedback</title>
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
                      
                           <font size="7">Backend : feedback</font>
                        
                            <br>
                             <br> <br>
                                 <p class="text-right"> <font size="6"> 
                           <a href="admin.php"><span type="span" class="label label-warning">Home</span></a>  
                          </font></p>
                        <div class="col-md-12">
                      
                              
                <!-- titles -->  
                  <div class="row text-center">
             <div class="col-sm-1 col-xs-1">
                                <label>id</label>                 
             </div>
               <div class="col-sm-2 col-xs-2">
                                <label>name</label>                 
             </div>
               <div class="col-sm-2 col-xs-2">
                                <label>email</label>                 
             </div>
               <div class="col-sm-7 col-xs-7">
                                <label>feedback</label>                 
             </div>
                            
                        
       </div>                    
		</div>



<?php 

	$con=mysqli_connect("localhost","root","");
	   
if(!$con)				  

{	
	die("Could not connect" . mysql_error());  
 }
	mysqli_select_db($con,"CITY1");

	
	$query  = "SELECT * FROM feedback";
	$qqq=mysqli_query($con,$query) or  die("Error, query failed1");
//$row = mysqli_fetch_array($qqq)
$num_rows = mysqli_num_rows($qqq);
//echo $num_rows;
$nr=1;
	setcookie("flag",1);
while($num_rows>0)
{
	
//	$_SESSION['num_rows'] = $nr;
	
	
//	$var_value =$_SESSION['num_rows'];
//	echo $var_value;
	$query1  = "SELECT * FROM feedback WHERE id=$nr";
	$qqq1=mysqli_query($con,$query1) or  die("Error, query failed2");
	$row1 = mysqli_fetch_array($qqq1)

?>
 <div class="col-md-12">
	 <div class="row">
 	 <form >
             <div class="col-sm-1 col-xs-1">
                                <input name="id" class="form-control margin-bottom-20" type="text" value="<?php echo $row1['id']; ?>">
             </div>
          <div class="col-sm-2 col-xs-2">
                                <input name="type" class="form-control margin-bottom-20" type="text" value="<?php echo $row1['name']; ?>" >
             </div>
               <div class="col-sm-2 col-xs-2">
                                <input name="name" class="form-control margin-bottom-20" type="text" value="<?php echo $row1['email']; ?>" >
             </div>
               <div class="col-sm-7 col-xs-7">
                                <input name="address" type="text" class="form-control margin-bottom-20" value="<?php echo $row1['feedback']; ?>"> 
                                
     </form>                 
       </div>
       <?php
	$num_rows--;
	$nr++;
}
?>


                    <!--end titles --> 
      
                    
                        </div>
                        <!-- End Register Box -->
                       
        			</div>
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