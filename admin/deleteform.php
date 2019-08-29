<?php 

	include('../dbconn.php');
     
     $id = $_REQUEST['sid'];


     $qry = "DELETE FROM students WHERE id = $id;";

	$run = mysqli_query($conn,$qry);

	if($run==true){
		?>
	<script>
		alert('delete  successfully');
         window.open('delete.php', '_self');
	</script>
	<?php
	}
	else{
		echo "error!!";
	}

?>