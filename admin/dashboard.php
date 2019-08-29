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
	<a href="../logout.php" style="float: right; text-decoration: none;">logout</a>
	<br>
             <center>
<h1 style="background-color: red; font-size: 80px;">welcome to dashboard</h1>

      <table border="1">
<tr>
	<th>Insert New Student detail</th>
	<td><a href="insert.php" style="text-decoration: none;">Insert data</a></td>
</tr>
<tr>
	<th>Update data of Student</th>
	<td><a href="update.php" style="text-decoration: none;">update data</a></td>
</tr>
 <tr>
 	<th>Delete data Student</th>
 	<td><a href="delete.php" style="text-decoration: none;">delete data</a></td>
 </tr>

</table>
</center>


</body>
</html>