<?php
$server = "localhost";
$username = "root";
$password= "";
$database = "project";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
  die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['Submit']))
{
  $rollno= $_POST['rollno'];
  $name= $_POST['name'];
   $std= $_POST['std'];
  $city= $_POST['city'];
  $pcon= $_POST['pcon'];
  
    $query = "INSERT INTO `student1`( `rollno`, `name`, `city`, `cno`, `standard`) VALUES ('$rollno','$name','$city','$pcon','$std')";
    $run = mysqli_query($conn,$query);
  if($run == true)
       {
        ?>
        <script>
          alert('Data inserted successfully:');
          window.open('../index.php','_self');
        </script>
        <?php
       }
}
?>