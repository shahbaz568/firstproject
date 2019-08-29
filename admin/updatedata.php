<?php 

	include('../dbconn.php');

	$rollno = $_POST['rollno'];
	$sname = $_POST['sname'];
	$city = $_POST['city'];
	$contact = $_POST['contact'];
	$standerd = $_POST['standerd'];
	$sid = $_POST['sid'];
                                                   
	$imgname = $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name'];

	move_uploaded_file($tempname, "../dataimg/$imgname");


	  $qry = "UPDATE students SET rollno = '$rollno', name = '$sname',standerd = '$standerd', pcont = '$contact', city = '$city',
	  image = '$imgname'   WHERE id = '$sid' ";

	$run = mysqli_query($conn,$qry);

	if($run==true){
		?>
	<script>
		alert('update successfully');
	</script>
	<?php
	}
	else{
		echo "error!!";
	}

?>