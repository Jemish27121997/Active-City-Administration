
<?php





$con=mysqli_connect("localhost","root",""); 
$db_select=mysqli_select_db($con,"CITY1");	
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}	    
      

 $a= $_POST["id"];
 $b= $_POST["post"];
$c= $_POST["name"]; 
$d= $_POST["phone"]; 
$e= $_POST["email"]; 
 
$flg=$_COOKIE["flag"];
//echo "$flg";

if($flg=="1")
{                     
$qry="UPDATE organization SET post='$b',name='$c',phone='$d',email='$e' WHERE id=$a";
$eqry=mysqli_query($con,$qry);		    
}
else if($flg=="2")
{
	$qry="INSERT INTO organization (id,post,name,phone,email) VALUES ($a,'$b','$c','$d','$e')";
	$eqry=mysqli_query($con,$qry);	
}
else
{
echo "sorry";
}

mysqli_close($con);	

header('Location:be_contact_us_update.php');			   
?>

