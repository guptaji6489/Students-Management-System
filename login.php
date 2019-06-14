<?php 
session_start();
		if(isset($_SESSION['uid']))
		{
			header('location:admin/admindash.php');
		}

		?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style1.css" rel='stylesheet' type='text/css' />
  <!--// Stylesheets -->
  <!--fonts-->
  <link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<title>Admin Login</title>
</head>
<body>
	 	 	<h1 style="float: left;"><a href="index.php" style="color: white;">Back</a></h1>

	<h1>Admin Login</h1>
    <div class="w3ls-login box box--big">
    <!-- form starts here -->
    <form action="login.php" method="POST">
      <div class="agile-field-txt">
        <label>UserName</label>
        <input type="text" name="uname" placeholder="Enter your Name" required="" />
      </div>
      <div class="agile-field-txt">
        <label>Password</label>
        <input type="password" name="pass" placeholder="Enter Password" required="" id="myInput" />
      </div>
      <input type="submit" value="LOGIN" name="login">
    </form>
  </div>


</body>
</html>

<?php
include('dbcon.php');

if(isset($_POST['login']))
{
	$username = $_POST['uname'];
	$password = $_POST['pass'];

	$query = "SELECT * FROM `admin` WHERE `username`='$username' AND `password` = '$password'";
	$run = mysqli_query($conn,$query);
	$row = mysqli_num_rows($run);
	if($row < 1)
	{
		?>
		<script> alert('Username and password not matched!!');
		window.open('login.php','_self'); 
	   </script>
	   <?php
	}
	else
	{
		$data  = mysqli_fetch_assoc($run);
		$id = $data['id'];

		$_SESSION['uid']= $id;
		header('location:admin/admindash.php');
	}
}

?>

