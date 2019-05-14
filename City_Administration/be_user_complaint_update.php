



<html lang="en">
 <head>
        <!-- Title -->
        <title>Backend_Complaints</title>
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
                           <font size="7">Backend : Complaints</font>
                           </div>
                            <div class="col-md-6">
                          <p class="text-right"> <font size="6"> 
                           <a href="admin.php"><span type="span" class="label label-warning">Home</span></a>  
                           <a href="be_user_complaint_delete.php"><span type="span" class="label label-warning">delete</span></a>
                           </font></p>
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
                                <label>time</label>                 
             </div>
              <div class="col-sm-2 col-xs-2">
                                <label>Addhar card</label>                 
             </div>
               <div class="col-sm-1 col-xs-1">
                                <label>tile</label>                 
             </div>
               <div class="col-sm-2 col-xs-2">
                                <label>description</label>                 
             </div>
               <div class="col-sm-1 col-xs-1">
                                <label>upload</label>                 
             </div>
             <div class="col-sm-2 col-xs-2">
                                <label>photo</label>                 
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

	
	$query  = "SELECT * FROM complaint";
	$qqq=mysqli_query($con,$query) or  die("Error, query failed1");
//$row = mysqli_fetch_array($qqq)
$num_rows = mysqli_num_rows($qqq);
echo $num_rows;
setcookie("flag2",1);
$nr=1;
while($num_rows>0)
{
	
//	$_SESSION['num_rows'] = $nr;
//	$var_value =$_SESSION['num_rows'];
//	echo $var_value;
	$query1  = "SELECT * FROM complaint WHERE id=$nr";
	$qqq1=mysqli_query($con,$query1) or  die("Error, query failed2");
	$row1 = mysqli_fetch_array($qqq1)

?>
	 <div class="row">
 	 <form action="be_user_complaint_1.php" method="POST" enctype="multipart/form-data">
             <div class="col-sm-1 col-xs-1">
                                <input name="id" class="form-control margin-bottom-20" type="text" value="<?php echo $row1['id']; ?>">
             </div>
          <div class="col-sm-2 col-xs-2">
                                <input name="time" class="form-control margin-bottom-20" type="text" value="<?php echo $row1['time']; ?>" >
             </div>
               <div class="col-sm-2 col-xs-2">
                                <input name="card" class="form-control margin-bottom-20" type="text" value="<?php echo $row1['aadhar']; ?>" >
             </div>
             <div class="col-sm-1 col-xs-1">
                                <input name="title" class="form-control margin-bottom-20" type="text" value="<?php echo $row1['title']; ?>" >
             </div>
          
               <div class="col-sm-2 col-xs-2">
                                <textarea name="desc" type="text" class="form-control margin-bottom-20"> <?php echo $row1['description']; ?>
                                </textarea>
             </div>
               <div class="col-sm-1 col-xs-1">
               <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
               					  <input name="photo1" id="photo1" class="form-control margin-bottom-20" type="file" accept="image/*">
               	   
                          
             </div> 
             
              <div class="col-sm-2 col-xs-2">			 
               				 <?php echo '<img src="data:image/*;base64,'.base64_encode( $row1['image'] ).'" style="border-radius:20px;" height="150px" width="150px"/>'  ?>
					  <br><br>
					</div> 
             <div class="col-sm-1 col-xs-1">
                           <input id="upload" name="upload" type="submit" value="<--" >
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