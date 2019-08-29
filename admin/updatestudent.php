<?php
session_start();
if(isset($_SESSION['uid'])) {
	echo "";
}

else   {
	header('location: ../adlogin.php');
}
?>
<?php 
include('../dbconn.php');

$sid = $_GET['sid'];

$sql = "SELECT * FROM students where id = $sid ";
$run = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
<html>
<head>
	<title>updatestudent</title>
</head>
<body>

	<h1 style="background-color: red; font-size: 100px;">dashboard</h1>
<form action="updatedata.php" method="post" enctype="multipart/form-data">
	
	<center>

      <table border="1" style="width: 60%;">
      	<tr>
      		<th colspan="2">Edit student detail</th>
      	</tr>
      	<tr>
      		<th>rollno:</th>
      		<td><input type="text" name="rollno" value="<?php echo $data['rollno'] ?>"></td>
      	</tr>
      	<tr>
      		<th>name:</th>
      		<td><input type="text" name="sname" value="<?php echo $data['name'] ?>" ></td>
      	</tr>
      	<tr>
      		<th>city:</th>
      		<td><input type="text" name="city" value="<?php echo $data['city'] ?>"></td>
      	</tr>
      	<tr>
      		<th>contact:</th>
      		<td><input type="text" name="contact" value="<?php echo $data['pcont'] ?>"></td>
      	</tr>
      	<tr>
      		<th>standerd:</th>
      		<td><input type="number" name="standerd" value="<?php echo $data['standerd'] ?>"></td>
      	</tr>
      	<tr>
      		<th>image:</th>
      		<td><input type="file" name="simg"></td>
      	</tr>
      	
      		<input type="hidden" name="sid" value="<?php echo $data['id'];?>">
      	
      	<tr>
      		<th colspan="2"><input type="submit" name="submit" value="submit"></th>
      	</tr>
	
          </table>
	</center>
</form>

</body>
</html>

