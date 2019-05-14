<?php
include("navigation.php");
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
        <title>login</title>
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
    
                <div class="container background-white">
                    <div class="container">
                        <div class="row margin-vert-20">
                            <!-- Login Box -->
                            <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                <form class="login-page" method="post" action="be_user_login.php">
                                    <div class="login-header margin-bottom-30">
                                        <h2>Login to your account</h2>
                                    </div>
                                    <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input name="aadhar" placeholder="Addhar Number" class="form-control" type="text">
                                    </div>
                                    <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        <input name="password" placeholder="Password" class="form-control" type="password">
                                    </div>
                                    <div class="row">
                                        
                                            <button name="submit" class="btn btn-primary center-block" type="submit">Login</button>
                                       
                                    </div>
                                    <hr>
                                    <h4>New User ?</h4>
                                    <p>
                                        <a href="signup.php">Click here</a> to create new account.</p>
                                </form>
                            </div>
                            <!-- End Login Box -->
                        </div>
                    </div>
     			</div>
            <!-- === END CONTENT === -->
           
    </body>
</html>
<!-- === END FOOTER === -->


<?php
include("footer.php");
?>