

<?php

unset($_COOKIE["nav"]);
setcookie("nav",-1,time()-3600);
//echo $_COOKIE["nav"];
//session_write_close();
unset($_SESSION['city_user']);

$_SESSION['city_user']=null;
session_destroy();

 // header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  //  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
  
  
  
header("location:index.php");
	
?>
