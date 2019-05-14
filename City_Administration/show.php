<?php 


	$con=mysqli_connect("localhost","root","");
	   
if(!$con)				  

{	
	die("Could not connect" . mysql_error());  
 }
 
 
 
 
	mysqli_select_db($con,"my_db");


	$c=$_GET['id'];
	
	$query  = "SELECT type,content FROM files WHERE id=$c";
	$qqq=mysqli_query($con,$query) or  die("Error, query failed");

$row = mysqli_fetch_array($qqq);
header("Content-type:image/jpeg");
echo $row["content"];

	mysqli_close($con);	

?>

<!--// application/pdf
//application/vnd.openxmlformats-officedocument.wordprocessingml.document
application/msword
-->



