<?php
session_start();
if(isset($_SESSION['uid'])) {
	echo "";
}

else   {
	header('location: ../adlogin.php');
}
?>

<!DOCTYPE html>   
<html>
<head>
	<title>student management system</title>

</head>
<body>

	<h1 style="background-color: red; font-size: 100px;">welcome to dashboard</h1>
	
<form action="insert.php" method="post" enctype="multipart/form-data">
	
	<center>
          <table border="1">
          	<tr>
          		<th>rollno:</th>
          		<td>  <input type="text" name="rollno"></td>
          	</tr>
    <tr>
    	<th>name:</th>
    	<td><input type="text" name="sname"></td>
    </tr>
	 <tr>
	 	<th>city:</th>
	 	<td><input type="text" name="city"></td>
	 </tr>
	<tr>
		<th>contact:</th>
		<td><input type="text" name="contact"></td>
	</tr>
	 <tr>
	 	<th>standerd:</th>
	 	<th> <input type="number" name="standerd"></th>
	 </tr>
	 <tr>
	 	<th>image:</th>
	 	<td><input type="file" name="simg"></td>
	 </tr>
	 <tr>
	 	<th colspan="2"><input type="submit" name="submit" value="submit"></th>
	 </tr>
	 	
             </table>
	</center>
</form>

</body>
</html>
<?php 

if(isset($_POST['submit'])){
	include('../dbconn.php');

	$rollno = $_POST['rollno'];
	$sname = $_POST['sname'];
	$city = $_POST['city'];
	$contact = $_POST['contact'];
	$standerd = $_POST['standerd'];
	$imgname = $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name'];

	move_uploaded_file($tempname, "../dataimg/$imgname");


    /* $imgname = $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name'];
	$filetype = $_FILES['simg']['type'];

    $filepath = "../dataimg/".$imgname;

	move_uploaded_file($tempname, $filepath);*/



	$qry = "INSERT INTO students ( rollno, name, city, pcont, standerd , image) VALUES ('$rollno', '$sname', '$city', '$contact', '$standerd' , '$imgname')";

	$run = mysqli_query($conn,$qry);

	if($run==true){
		?>
	<script>
		alert('insert successfully');
	</script>
	<?php
	}
	else{
		echo "error!!";
	}
}
?>