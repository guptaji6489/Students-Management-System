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
 	  <div class="w3ls-login box box--big">
 	<form action="deletestudent.php" method="post">
 		<div class="agile-field-txt">
        <label>Enter Standard</label>
        <input type="text" name="standard" placeholder="Enter your Standard" required="" />
      </div>
 		<div class="agile-field-txt">
        <label>Enter Student Name</label>
        <input type="text" name="stuname" placeholder="Enter your Name" required="" />
      </div>
      <input type="submit" value="submit" name="submit">
	</form>
</div><br><br> 
<table align="center" width="70%" style="margin-top: 15px" border="4">
	<tr>
	<th style="color: white">No</th>
	
	<th style="color: white">Name</th>
	<th style="color: white">RollNo.</th>
	<th style="color: white">Delete</th>
</tr>

<?php
if (isset($_POST['submit']))
 {
	include('dbcon.php');

    $standard = $_POST['standard'];
	$name = $_POST['stuname'];
	$sql = "SELECT * FROM `student1` WHERE `standard`='$standard' AND `name` LIKE '%$name%'";

	$run = mysqli_query($conn,$sql);

	if(mysqli_num_rows($run)<1)
	{
		echo "<tr><td colspan='5'>No Record found</td></tr>";
	}
	else
	{    
		$count = 0;
		while ($data = mysqli_fetch_assoc($run)) 
		{
			$count++;
			?>
             
             <tr align="center" >
	             <td style="color: white"><?php echo $count; ?></td>
	             
	             <td style="color: white"><?php echo $data['name']; ?></td>
	             <td style="color: white"><?php echo $data['standard']; ?></td>
	             <td style="color: white"><a href="deleteform.php?sid= <?php echo $data['id']; ?>">Delete</a></td>
             </tr>


			<?php
		}
	}
}

?>

</table>