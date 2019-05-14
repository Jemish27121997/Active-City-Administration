



<html lang="en">
 <head>
        <!-- Title -->
        <title>Backend_news</title>
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
        
        
        
        <script type="text/javascript">
 function Submit(){

var tym = document.form.time.value;
var dat = document.form.date.value;
var nws = document.form.news.value;

	
		 if(tym==null ||  tym=="")
	{
			 document.form.time.focus();
		   document.getElementById("errorBox1").innerHTML = "please enter time";
		//   alert("please enter time");
   			return false;
	}
	else
	{
	 document.getElementById("errorBox1").innerHTML = "";
	}
	 if( dat==null || dat=="")
	{
			 document.form.date.focus();
		   document.getElementById("errorBox1").innerHTML = "please enter date";
   		//	 alert("please enter date");
   			return false;
	}
	else
	{
	 document.getElementById("errorBox1").innerHTML = "";
	}
	
	if(tym > dat)
	{
			 document.form.date.focus();
		   document.getElementById("errorBox1").innerHTML = "date should be before the 'date' field";
   		//	 alert("date should be before the 'date' field");
   			return false;		
	}
	else
	{
	 document.getElementById("errorBox1").innerHTML = "";
	}

	
	if(nws==null || nws=="")
	{
		 document.form.news.focus();
		   document.getElementById("errorBox1").innerHTML = "enter news...";
   		//	 alert("enter news...");
   			return false;
	}
	else
	{
	 document.getElementById("errorBox1").innerHTML = "";
	}

	  
}

</script>

    </head>
    <body>

      
            <!-- === BEGIN CONTENT === -->
          
                    <div class=" margin-vert-30">
                        <!-- Register Box -->
                     
                        <div class="col-md-12">
                        <font size="7">Backend : News</font><br><br><br>
                       <div class="row text-center"><font size="5">Insert</font></div>
                              <br><br>
                              
                <!-- titles -->  
                  <div class="row text-center">
        
               <div class="col-sm-2 col-xs-2">
                                <label>time</label>                 
             </div>
               <div class="col-sm-2 col-xs-2">
                                <label>date</label>                 
             </div>
               <div class="col-sm-4 col-xs-4">
                                <label>news</label>                 
             </div>
               <div class="col-sm-3 col-xs-3">
                                <label>Photo</label>                 
             </div>
                    <div class="col-sm-1 col-xs-1">
                                                
             </div>                
                        
       </div>                    



   <?php
		setcookie("flag2",2);
		?>

	 <div class="row">
	 		       <br>
                 <div id="errorBox1"></div>
                     <div id="errorBox2"></div>
                         <div id="errorBox3"></div>
                          <div id="errorBox4"></div>
        			<br><br>
 	<form action="be_news_1.php" method="POST" enctype="multipart/form-data" name="form">
<div id="errorBox"></div>
          <div class="col-sm-2 col-xs-2">
                                <input name="time" class="form-control margin-bottom-20" type="date">
             </div>
               <div class="col-sm-2 col-xs-2">
                                <input name="date" class="form-control margin-bottom-20" type="date" >
             </div>
               <div class="col-sm-4 col-xs-4">
                                <textarea name="news" type="text" class="form-control margin-bottom-20" ></textarea>
             </div>
               <div class="col-sm-3 col-xs-3">
               <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                                <input name="photo1" id="photo1" class="form-control margin-bottom-20" type="file" accept="image/*" >
             </div>  
             <div class="col-sm-1 col-xs-1">
           
                    <button type="submit"> ok </button>
                           
             </div>
           
     </form>  
                   <br>    <p  onClick="Submit()"><button> validate </button> </p>             
       </div>



                    <!--end titles --> 
      
                
                        </div>
                        <!-- End Register Box -->
                       
        			</div>
        	
        				<div class="col-md-12">
                          <p class="text-center"> <font size="6"> 
                           <a href="admin.php"><span type="span" class="label label-warning">Home</span></a>
                           <a href="be_news_update.php"><span type="span" class="label label-warning">back</span></a></font></p>
                            </div>
    </body>
</html>




<!--// application/pdf
//application/vnd.openxmlformats-officedocument.wordprocessingml.document
application/msword
-->