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

      

                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Register Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                        
                        
                        
                        
                        
                            <form class="signup-page" method="post" action="be_user_signup.php">
                                <div class="signup-header">
                                    <h2>Register a new account</h2>
                                    <p>Already a member? Click
                                        <a href="login.php">HERE </a>to login to your account.</p>
                                </div>
                                        <div class="row">
                                    <div class="col-sm-6 col-xs-6">
                                <label>First Name<span class="color-red">*</span></label>
                                <input name="fname" class="form-control margin-bottom-20" type="text">
                                </div>
                                   <div class="col-sm-6 col-xs-6">
                                <label>Last Name<span class="color-red">*</span></label>
                                <input name="lname" class="form-control margin-bottom-20" type="text">
                                </div>
                                </div>
                                <label>Adhar Number<span class="color-red">*</span></label>
                                <input name="aadhar" class="form-control margin-bottom-20" type="text">
                                <label>Phone no</label>
                                <input name="phone" class="form-control margin-bottom-20" type="text">
                                <label>Email Address
                                    <span class="color-red">*</span>
                                </label>
                                <input name="email" class="form-control margin-bottom-20" type="text">
                        
                        <div class="row">
                                    <div class="col-sm-6">
                                        <label>Password
                                            <span class="color-red">*</span>
                                        </label>
                                        <input name="password" class="form-control margin-bottom-20" type="password">
                               </div>
                                   <div class="col-sm-6">
                                        <label>Confirm Password
                                            <span class="color-red">*</span>
                                        </label>
                                        <input name="cpassword" class="form-control margin-bottom-20" type="password">
                                   </div>
                                   </div>
                                    <label>Address</label>
                                 <textarea name="address" class="form-control margin-bottom-20" placeholder="Enter Address..."></textarea>
                              
								
                                <hr>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <label class="checkbox">
                                            <input type="checkbox">I read the
                                            <a href="#">Terms and Conditions</a>
                                        </label>
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <button class="btn btn-primary" type="submit" name="submit">Register</button>
                                    </div>
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