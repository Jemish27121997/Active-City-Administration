<?php 
session_start();
//echo $_COOKIE["nav"];
if(isset($_COOKIE["nav"])) 
{
//echo "yes";
include("user_navigation.php");
}
else
{
include("navigation.php");
}

?>
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Signup</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
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
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Register Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                            <form  action="feedbackty.php" mothod="get" class="signup-page">
                                <div class="signup-header">
                                    <h2>Give your feedback</h2>
                                </div>
                                      
                                <label>Name<span class="color-red">*</span></label>
                                <input name="name" id="name" class="form-control margin-bottom-20" type="text">
                           
                                  
                    
                                
                                <label>Email Address
                                    <span class="color-red">*</span>
                                </label>
                                <input name="email" id="email" class="form-control margin-bottom-20" type="email">
                        
                       
                                    <label>Feedback   <span class="color-red">*</span></label>
                                 <textarea name="feedback" id="feedback" class="form-control margin-bottom-20" placeholder="Enter Your feedback here..."></textarea>
                              
								
                                <hr>
                                <div class="row text-center">
                                  
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                         <button class="btn btn-primary" type="reset">Reset</button>
                                
                                </div>
                            </form>
                        </div>
                        <!-- End Register Box -->
                    </div>
                </div>
      
            <!-- === END CONTENT === -->
        
    </body>
</html>
<!-- === END FOOTER === -->


<?php
include("footer.php");
?>