


<html lang="en">
 <head>
        <!-- Title -->
        <title>Backend_contact</title>
        <!-- Meta -->
       <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>

      
            <!-- === BEGIN CONTENT === -->
          
                    <div class=" margin-vert-50">
                        <!-- Register Box -->
                       <div class="col-md-12 margin-bottom-10">
                        
                           <font size="7">Backend : PDF </font>
                            <br>
                             <br> <br>
                    <p class="text-right"> <font size="6"> 
                           <a href="admin.php"><span type="span" class="label label-warning">Home</span></a>  
                          </font></p>
                       <div class="row text-center"><font size="5">Insert</font></div>
                              <br><br>
                        </div>
                        <div class="col-md-12">
                   
                              
                <!-- titles -->  
                  

	 <div class="row">
 	 <form  method="POST" enctype="multipart/form-data" action="be_pdf_insert.php">
 	
           
           <div class="col-sm-4 col-xs-12">
                                <input placeholder="category" id="category" name="category" class="form-control margin-bottom-20" type="text">
             </div>
             <div class="col-sm-4 col-xs-12">
                                <input id="userfile" name="userfile" class="form-control margin-bottom-20" type="file">
             </div>
        
             <div class="col-sm-4 col-xs-12">
                           <font size="5"> <button id="upload" name="upload" class="label label-warning">submit</button></font>
                             
             </div> 
     </form>                 
       </div>

                    <!--end titles --> 
      
                                 
                       
                        </div>
                        <!-- End Register Box -->
                       
        			</div>
    </body>
</html>

<!--// application/pdf
//application/vnd.openxmlformats-officedocument.wordprocessingml.document
application/msword
-->

<?php 

if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{

	$fileName = $_FILES['userfile']['name'];
	$tmpName  = $_FILES['userfile']['tmp_name'];
	$fileSize = $_FILES['userfile']['size'];
	$fileType = $_FILES['userfile']['type'];
	$cat = $_POST['category'];
	echo "<h3>File name = <font color='red'>$fileName</font> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp size = <font color='red'>$fileSize</font>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp type = <font color='red'>$fileType</font>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  category = <font color='red'>$cat</font> <br></h3>";
	$fp      = fopen($tmpName, 'r');

	$content = fread($fp, filesize($tmpName));
	$content = addslashes($content);
	fclose($fp);
	if(!get_magic_quotes_gpc())
	{
		$fileName = addslashes($fileName);
	}
	$con=mysqli_connect("localhost","root","");
	   
if(!$con)				  

{	
	die("Could not connect" . mysql_error());  
 }
 
 
 if (($fileType == "application/pdf"))
{      

 
	mysqli_select_db($con,"CITY1");
	$query = "INSERT INTO pdf (category ,name, size, type, content ) VALUES ('$cat','$fileName', '$fileSize', '$fileType', '$content')";

	$qqq=mysqli_query($con,$query) or  die("Error, query failed");

	echo "<br><br><br><h1>File <font color='blue'>$fileName</font> uploaded</h1>";
	
	
}
else
{
echo "<br><br><br>Invalid file. Upload only [.pdf]";
}
	mysqli_close($con);	
}

?>

