
<?php





$con=mysqli_connect("localhost","root",""); 
$db_select=mysqli_select_db($con,"CITY1");	
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}	    
      
  
  
 $a= $_POST["id"];
$b= $_POST["type"];
$c= $_POST["name"]; 
$d= $_POST["address"]; 
$e= $_POST["phone"];  

$flg=$_COOKIE["flag"];
//echo "$flg";
//echo "$a  $b  $c  $d  $e";
  
if($flg=="1")
{                     
$qry="UPDATE utility SET type='$b',name='$c',phone='$e',address='$d' WHERE id=$a";
$eqry=mysqli_query($con,$qry);		    
}
else if($flg=="2")
{
	$qry="INSERT INTO utility (id,type,name,phone,address) VALUES ($a,'$b','$c','$e','$d')";
	$eqry=mysqli_query($con,$qry);	
}
else
{
echo "sorry";
}

mysqli_close($con);	

header('Location:be_publicutility_update.php');			   
?>

