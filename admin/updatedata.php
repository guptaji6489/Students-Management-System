<?php

    include('../dbcon.php');
       $rollno = $_POST['rollno'];
   	   $name = $_POST['name'];
   	   $city = $_POST['city'];
   	   $pcon = $_POST['pcon'];
   	   $std = $_POST['std'];
   	   $id = $_POST['sid'];
   	   
   	

       $qry = "UPDATE `student1` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city',`cno` = '$pcon',`standard` = '$std' WHERE `student1`.`id` = $id;";
       $run = mysqli_query($conn,$qry);

       if($run == true)
       {
       	?>
       	<script>
       		alert('Data Update successfully:');
       		window.open('updateform.php?sid=<?php  echo $id; ?>' ,'_self')
       	</script>
       	<?php
       }


       ?>