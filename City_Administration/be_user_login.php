
<?php

$con=mysqli_connect("localhost","root",""); 
$db_select=mysqli_select_db($con,"CITY1");	

$a= $_POST["aadhar"];
$b= $_POST["password"];


$qry="SELECT * FROM citizen WHERE aadhar='$a'";
$eqry=mysqli_query($con,$qry);	
$row1 = mysqli_fetch_array($eqry);
$flg=$row1['flag'];

if($a==$row1['aadhar'] && $b==$row1['password'])
{

	
		session_start();
		$_SESSION['city_user']= $row1['name'];
		$_SESSION['aadhar1']= $row1['aadhar'];
		setcookie("nav",1);
	if($flg==0)
	{
		header("location:user.php");
	}
	else
	{
		header("location:admin.php");
	}
}
else
{
header("location:login.php");
}

mysqli_close($con);		
?>
