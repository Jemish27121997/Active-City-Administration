

<?php

session_start();
$con=mysqli_connect("localhost","root",""); 
$db_select=mysqli_select_db($con,"CITY1");	
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}	    

$aa1=$_SESSION['aadhar1'];     
$a= $_POST["title"];
$c= $_POST["complaint"];


if($_FILES['image3']['size'] > 0)
{

	$fileName = $_FILES['image3']['name'];
	$tmpName  = $_FILES['image3']['tmp_name'];
	$fileSize = $_FILES['image3']['size'];
	$fileType = $_FILES['image3']['type'];
	$fp      = fopen($tmpName, 'r');

	$content = fread($fp, filesize($tmpName));
	$content = addslashes($content);
	fclose($fp);
	if(!get_magic_quotes_gpc())
	{
		$fileName = addslashes($fileName);
	}
}
else
{
$content = null;
}


$qry="INSERT INTO complaint (aadhar,title,description,image) VALUES ('$aa1','$a','$c','$content')";
$eqry=mysqli_query($con,$qry);	
header("location:user.php");

mysqli_close($con);		
?>
