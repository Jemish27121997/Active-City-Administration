
<?php






$con=mysqli_connect("localhost","root",""); 
$db_select=mysqli_select_db($con,"CITY1");	
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}	    
      
  $flg=$_COOKIE["flag2"];




if($flg=="1")
{ 
$a= $_POST["aadhar"];
$b= $_POST["name"]; 
$c= $_POST["email"]; 
$d= $_POST["phone"]; 
$e= $_POST["address"]; 
 
              
		$qry="UPDATE citizen SET name='$b',email='$c',phone='$d',address='$e' WHERE aadhar='$a'";
		$eqry=mysqli_query($con,$qry);	

}
else if($flg=="3")
{
$a= $_POST["aadhar"];
	$f= $_POST["id"]; 
	$qry="DELETE FROM citizen WHERE id=$f";
	$eqry=mysqli_query($con,$qry);	
}	    

mysqli_close($con);	

header("location:be_citizen_update.php");			   
?>

