
<?php




if($_FILES['photo1']['size'] > 0)
{

	$fileName = $_FILES['photo1']['name'];
	$tmpName  = $_FILES['photo1']['tmp_name'];
	$fileSize = $_FILES['photo1']['size'];
	$fileType = $_FILES['photo1']['type'];
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
	$fileSize=0;
}


$con=mysqli_connect("localhost","root",""); 
$db_select=mysqli_select_db($con,"CITY1");	
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}	    
      
  $flg=$_COOKIE["flag2"];
  

$a= $_POST["aadhar"];
$b= $_POST["title"]; 
$c= $_POST["desc"]; 

if($flg=="1")
{ 
$d= $_POST["id"];  
	 if($fileSize > 0)
 	{               
		$qry="UPDATE complaint SET aadhar='$a',title='$b',description='$c',image='$content' WHERE id=$d";
		$eqry=mysqli_query($con,$qry);	
	}
	else
	{
		$qry="UPDATE complaint SET aadhar='$a',title='$b',description='$c' WHERE id=$d";
		$eqry=mysqli_query($con,$qry);	
	}
}
else if($flg=="3")
{
	$d= $_POST["id"]; 
	$qry="DELETE FROM complaint WHERE id='$d'";
	$eqry=mysqli_query($con,$qry);	
}	    

mysqli_close($con);	

header("location:be_user_complaint_update.php");			   
?>

