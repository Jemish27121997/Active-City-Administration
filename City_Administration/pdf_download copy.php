    
    <?php 
	$con=mysqli_connect("localhost","root","");
	   
if(!$con)
{	
	die("Could not connect" . mysql_error());  
 }

mysqli_select_db($con,"my_db");
	$query = "SELECT type,content FROM files WHERE id=2";

$qqq=mysqli_query($con,$query) or  die("Error, query failed");

$row = mysqli_fetch_assoc($qqq);
header("Content-type:application/pdf");
echo $row["content"];

	mysqli_close($con);	

?>

