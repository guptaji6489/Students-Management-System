<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <link href="css/style1.css" rel='stylesheet' type='text/css' />
  <!--// Stylesheets -->
  <!--fonts-->
  <link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<title>SIGN UP</title>
</head>
<body>
  <h1>SignUp Form </h1>
  <div class="w3ls-login box box--big">
    <!-- form starts here -->
    <form action="signup.php" method="POST">
      <div class="agile-field-txt">
        <label>UserName</label>
        <input type="text" name="uname" placeholder="Enter your Name" required="" />
      </div>
      <div class="agile-field-txt">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter Password" required="" id="myInput" />
      </div>
      <input type="submit" value="SIGN IN" name="submit">
    </form>
  </div>
	
</body>
</html>

<?php
$server = "localhost";
$username = "root";
$password= "";
$database = "project";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
	die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
	
	$username= $_POST['uname'];
	$password= $_POST['password'];

	$query = "insert into admin(username,password) values('$username','$password')";

	$run = mysqli_query($conn,$query);
	if($run == true)
       {
       	?>
       	<script>
       		alert('Signup successfully:');
          window.open('login.php','_self'); 

       
       	</script>
       	<?php
       }
}



?>
