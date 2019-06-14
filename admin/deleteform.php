<?php

    include('../dbcon.php');

   	   
   	  $id = $_REQUEST['sid'];

       $qry = "DELETE FROM `student1` WHERE `id`='$id'";
       $run = mysqli_query($conn,$qry);

       if($run == true)
       {
       	?>
       	<script>
       		alert('Data Delete successfully:');
       		window.open('admindash.php' ,'_self')
       	</script>
       	<?php
       }


       ?>