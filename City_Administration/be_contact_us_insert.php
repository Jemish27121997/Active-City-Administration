



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
          
                    <div class=" margin-vert-30">
                        <!-- Register Box -->
                     
                        <div class="col-md-12">
                        <font size="7">Backend : Contact Us</font><br><br><br>
                       <div class="row text-center"><font size="5">Insert</font></div>
                              <br><br>
                              
                <!-- titles -->  
                  <div class="row text-center">
             <div class="col-sm-1 col-xs-1">
                                <label>id</label>                 
             </div>
               <div class="col-sm-2 col-xs-2">
                                <label>post</label>                 
             </div>
               <div class="col-sm-3 col-xs-3">
                                <label>name</label>                 
             </div>
               <div class="col-sm-2 col-xs-2">
                                <label>phone</label>                 
             </div>
               <div class="col-sm-3 col-xs-3">
                                <label>email</label>                 
             </div>
                    <div class="col-sm-1 col-xs-1">
                                                
             </div>                
                        
       </div>                    



   <?php
		setcookie("flag",2);
		?>

	 <div class="row">
 	 <form action="be_contact_us_1.php" method="POST">
             <div class="col-sm-1 col-xs-1">
                                <input name="id" class="form-control margin-bottom-20" type="text" >
             </div>
          <div class="col-sm-2 col-xs-2">
                                <input name="post" class="form-control margin-bottom-20" type="text"  >
             </div>
               <div class="col-sm-3 col-xs-3">
                                <input name="name" class="form-control margin-bottom-20" type="text" >
             </div>
               <div class="col-sm-2 col-xs-2">
                                <input name="phone" class="form-control margin-bottom-20" type="text"  >
             </div>
               <div class="col-sm-3 col-xs-3">
                                <input name="email" class="form-control margin-bottom-20" type="text" >
             </div>  
             <div class="col-sm-1 col-xs-1">
                           <input type="submit" value="<--" >
             </div> 
             
          
     </form>                 
       </div>



                    <!--end titles --> 
      
                
                        </div>
                        <!-- End Register Box -->
                       
        			</div>
        			
        			<br><br>
        			<div class="col-md-12">
                          <p class="text-center"> <font size="6">  
                           <a href="admin.php"><span type="span" class="label label-warning">Home</span></a>
                          <a href="be_contact_us_update.php"><span type="span" class="label label-warning">back</span></a></font></p>
                            </div>
    </body>
</html>


<!--// application/pdf
//application/vnd.openxmlformats-officedocument.wordprocessingml.document
application/msword
-->