<?php 

	$con=mysqli_connect("localhost","root","");
	   
if(!$con)				  

{	
	die("Could not connect" . mysql_error());  
 }
 
 
 
 
	mysqli_select_db($con,"my_db");

	
	$query  = "SELECT id FROM files WHERE name='3.JPG'";
	$qqq=mysqli_query($con,$query) or  die("Error, query failed");
	


?>





<HTML>
<HEAD>
<TITLE>List BLOB Images</TITLE>

</HEAD>
<BODY>
<?php
while($row = mysqli_fetch_array($qqq)) 
{
?>
<img name="id" src="show.php?id=<?php echo $row['id'] ?>" width="200px" height="200px" style="border-radius:200px;"/><br/>
<?php		
}
mysqli_close($con);
?>
</BODY>
</HTML>

<!--// application/pdf
//application/vnd.openxmlformats-officedocument.wordprocessingml.document
application/msword
-->