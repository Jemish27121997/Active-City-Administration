

<?php


$con=mysqli_connect("localhost","root",""); 
$db_select=mysqli_select_db($con,"CITY1");	
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}	    
      

$a= $_POST["fname"];
$b= $_POST["lname"];
$c= $_POST["aadhar"];

if(isset($_POST["phone"]))
{
$d= $_POST["phone"];
}
else
{
$d= null;
}

$e= $_POST["email"];
$f= $_POST["password"];
$g= $_POST["cpassword"];

if(isset($_POST["address"]))
{
$h= $_POST["address"];
}
else
{
$h= null;
}
$pp=null;
$n=$a." ".$b;
// echo "$a $b $c $d $e $f $g $h $n";
if($f==$g)
{
$qry="INSERT INTO citizen (aadhar,name,email,password,phone,address,profilepic) VALUES ($c,'$n','$e','$f','$d','$h','$pp')";
$eqry=mysqli_query($con,$qry);	
header("location:login.php");
}else
{
header("location:signup.php");
}
mysqli_close($con);		
?>
