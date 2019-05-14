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
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}

$a = $_GET["name"];
$b = $_GET["email"]; 
$c = $_GET["feedback"]; 
//echo "$a $b"; 

	$qry="INSERT INTO feedback (name,email,feedback) VALUES ('$a','$b','$c')";
	$eqry=mysqli_query($con,$qry);	

mysqli_close($con);				   
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
        <title>feedback</title>
        <!-- Meta -->
      </head>
    <body>

      
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                <br><br>
                  <div class="text-center margin-top-60 margin-bottom-60">
                <h2><font color="maroon">Thank You For Your Feedback </font></h2>
               <h3> Your feedback has been submited successfully.....</h3><br>
              <a href="feedback.php">  <font color="purple">Give another feedback here...</font></a>
                </div>
                </div>
      
            <!-- === END CONTENT === -->
        
    </body>
</html>
<!-- === END FOOTER === -->


<?php
include("footer.php");
?>