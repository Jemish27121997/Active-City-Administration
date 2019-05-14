
<?php 

	$fileName = $_FILES['userfile']['name'];
	$tmpName  = $_FILES['userfile']['tmp_name'];
	$fileSize = $_FILES['userfile']['size'];
	$fileType = $_FILES['userfile']['type'];
	$cat = $_POST['category'];
	$id = $_POST['id'];
	echo "$cat $id"
//	echo "<h3>File name = <font color='red'>$fileName</font> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp size = <font color='red'>$fileSize</font>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp type = <font color='red'>$fileType</font>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  category = <font color='red'>$cat</font> <br></h3>";
	$fpp = fopen($tmp_name, 'r');
	$content = fwrite($fpp, filesize($tmp_name));
	$content = addslashes($content);
	fclose($fpp);
	if(!get_magic_quotes_gpc())
	{
		$fileName = addslashes($fileName);
	}
	$con=mysqli_connect("localhost","root","");

	mysqli_select_db($con,"CITY1");
	$query = "UPDATE pdf SET name='$fileName', size='$fileSize',type='$fileType',content='$content' WHERE id=$id";

	$qqq=mysqli_query($con,$query) or  die("Error, query failed");

	mysqli_close($con);	

?>