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
 	<h1 style="float: left;"><a href="admindash.php" style="color: white;">Back</a></h1>

 	 <h1 style="float: right;"><a href="logout.php" style="color: white;">Logout</a></h1>
     <h1>Welcome to Admin Dashboard</h1>
     <?php  include('../dbcon.php'); 
      $sid = $_GET['sid'];
      $sql = "SELECT * FROM `student1` WHERE `id` ='$sid'";
      $run =mysqli_query($conn,$sql);
      $data= mysqli_fetch_assoc($run);
     
     ?>
 	<br>
 	 		<div class="w3ls-login box box--big">

 	<form action="updatedata.php" method="post" enctype="multipart/form-data">

 			<div class="agile-field-txt">
        <label>Roll No.</label>
 				<input type="text" name="rollno" value=<?php echo $data['rollno'];  ?> required>
 			</div>
 			<div class="agile-field-txt">
        <label>Name</label>
 				<input type="text" name="name" value=<?php echo $data['name'];  ?> required>
 			</div>
      <div class="agile-field-txt">
        <label>Email</label>
        <input type="text" name="email" value=<?php echo $data['email'];  ?> required />
      </div>
 			<div class="agile-field-txt">
        <label>City</label>
 				<input type="text" name="city" value=<?php echo $data['city'];  ?> required>
 			</div>
 			<div class="agile-field-txt">
        <label>Your Hostel Name</label>
        <input type="text" name="hostel" value=<?php echo $data['hostel'];  ?> required >
      </div>
 			<div class="agile-field-txt">
        <label>Contact No.</label>
 				<input type="text" name="pcon" value=<?php echo $data['cno'];  ?> required>
 			</div>
 			<div class="agile-field-txt">
        <label>Standard</label>
 				<input type="text" name="std" value=<?php echo $data['standard'];  ?> required>
 			</div>
 			
 			
 					<input type="hidden" name="sid" value="<?php echo $data['id']; ?>" >
 					<input type="submit" name="submit" value="Submit"></td>
 		
 	</form>
 </div>