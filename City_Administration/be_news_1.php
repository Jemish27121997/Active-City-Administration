
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
      
  
  

$a= $_POST["time"];
$b= $_POST["date"]; 
$c= $_POST["news"]; 
 

$flg=$_COOKIE["flag2"];
//echo "$flg";
//echo "$a  $b  $c  $d  $e";
  
if($flg=="1")
{     
	$d= $_POST["id"]; 
	 if($fileSize > 0)
 	{               
		$qry="UPDATE news SET time='$a',date='$b',news='$c',img='$content' WHERE id=$d";
		$eqry=mysqli_query($con,$qry);	
	}
	else
	{
		$qry="UPDATE news SET time='$a',date='$b',news='$c' WHERE id=$d";
		$eqry=mysqli_query($con,$qry);	
	}
	    
}
else if($flg=="2")
{	
	$qry="INSERT INTO news (time,date,news,img) VALUES ('$a','$b','$c','$content')";
	$eqry=mysqli_query($con,$qry);	
}
else if($flg=="3")
{
	$d= $_POST["id"]; 
	$qry="DELETE FROM news WHERE id='$d'";
	$eqry=mysqli_query($con,$qry);	
}
else
{
echo "sorry";
}

mysqli_close($con);	

header("location:be_news_update.php");			   
?>

