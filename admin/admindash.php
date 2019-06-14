<?php 

session_start();
		if(isset($_SESSION['uid']))
		{
			echo "";
		}
		else
		{
			header('location: ../login.php');
		}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <link href="css/style1.css" rel='stylesheet' type='text/css' />
  <!--// Stylesheets -->
  <!--fonts-->
  <link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">

 	<title></title>
 </head>
 <body>
 	
     <h1>Welcome to Admin Dashboard</h1>
 	
 	 	  <div class="w3ls-login box box--big">
 	 	  	 	<form action="logout.php" method="post">
                 <div class="agile-field-txt">
               <label><a href="addstu.php" style="color: white;">Add Student Details</a></label>
 			</div>
 			<div class="agile-field-txt">
               <label><a href="updatestudent.php" style="color: white;">Update Student Details</a></label>
 			</div>
 			<div class="agile-field-txt">
               <label><a href="deletestudent.php" style="color: white;">Delete Student Details</a></label>
 			</div>
 			 <input type="submit" value="Logout" name="submit">
 			</form>
 			</div> 
 </body>
 </html>