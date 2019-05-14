<html>
<body>

<div class="panel panel-default">
                                <div class="panel-heading">
                                    <h1 class="panel-title text-center"><a href="news.php" class="text-center">What's new..!</a></h1>
                                </div>
                                <?php 

	$con=mysqli_connect("localhost","root","");
	   
if(!$con)				  

{	
	die("Could not connect" . mysql_error());  
 }
	mysqli_select_db($con,"CITY1");

	
	$query  = "SELECT * FROM news";
	$qqq=mysqli_query($con,$query) or  die("Error, query failed1");
//$row = mysqli_fetch_array($qqq)
$num_rows = mysqli_num_rows($qqq);
//echo $num_rows;
$nr=1;
?>
                                <div class="panel-body">
                                    <ul class="posts-list">
<?php								
      while($nr<4)
{
	
//	$_SESSION['num_rows'] = $nr;
//	$var_value =$_SESSION['num_rows'];
//	echo $var_value;
	$query1  = "SELECT * FROM news WHERE id=$num_rows";
	$qqq1=mysqli_query($con,$query1) or  die("Error, query failed2");
	$row1 = mysqli_fetch_array($qqq1)

?>                                
                                        <li>
                                            
                                                <span class="whats-new">
                                                   <?php echo $row1['time']; ?>
                                                </span><br>
											<div class="elips">
												<a href="news.php" >
                                             <?php echo $row1['news']; ?>
                                            
                                            </a>
                                        </li>
										<br>
										
                                         <hr style="margin-top: 0em; margin-bottom: 1em;">     
				
				
       <?php
	$num_rows--;
	$nr++;
}
?>										     
                                    </ul>
						<!--		<h4 class="text-right" ><a href="#" style="color:darkblue;text-decoration:underline;"><b>MORE...</b></a></h4>          -->
						
							<a href="news.php"><span class="label label-primary" type="span" style="float:right;margin-top:17px;">More
	<i class="fa fa-chevron-circle-right"></i></a>
</span>
                                </div>
                                <?php
mysqli_close($con);
?>
                            </div>
							
</body>
</html>