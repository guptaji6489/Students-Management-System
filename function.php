<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    body{
      background-image: url(a.jpg);
        background-size: cover;

    }
  </style>
</head>
<body>


<br><br><br>

<?php
if(isset($_POST['submit']))
{
  $standard = $_POST['standard'];
  $rollno = $_POST['rollno'];

  include('dbcon.php');


  function 	showdetails($standard,$rollno)
  {
  	include('dbcon.php');
  	$sql ="SELECT * FROM `student1` WHERE `rollno`='$rollno' AND `standard` = '$standard'";
  	$run = mysqli_query($conn,$sql);

  	if(mysqli_num_rows($run)>0)
  	{
      $data = mysqli_fetch_assoc($run);
      ?>
      <center>
       <table  border="5" width="50%">


       	<tr>
       		<th colspan="2">Student Details</th>
       	</tr><br>
       	<tr>
       		<th>Roll No.</th>
       		<td><?php echo $data['rollno'];  ?></td>
       	</tr>

       	<tr>
       		<th>Name</th>
       		<td><?php echo $data['name'];  ?></td>
       	</tr>

       	<tr>
       		<th>City</th>
       		<td><?php echo $data['city'];  ?></td>
       	</tr>

       	<tr>
       		<th>Contact No.</th>
       		<td><?php echo $data['cno'];  ?></td>
       	</tr>

       	<tr>
       		<th>Standard</th>
       		<td><?php echo $data['standard'];  ?></td>
       	</tr>

       </table>
    </center>

      <?php
  	}
  	else
  	{
  		echo "<script>alert('No Student Found!!');
  		window.open('index.php','_self'); </script>";
  	}
  }
    showdetails($standard,$rollno);

}
?>
</body>
</html>