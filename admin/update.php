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
	<title>update</title>
	<style type="text/css">
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>

</body>
</html>
<form action="update.php" method="post" >
	
	<center>
		<table border="1">
			<tr>
				<th>Standerd</th>
				<td><input type="number" name="standerd" placeholder="enter the standerd"></td>
			</tr>
  <tr>
  	<th>name</th>
  	<td><input type="text" name="stdname" placeholder="enter the name"></td>
  </tr>

 <tr>
 	<th colspan="2"><input type="submit" name="submit" value="search"></th>
 </tr>


</table>
</center>
</form>

<?php

if(isset($_POST['submit']))  {
include('../dbconn.php');

$std = $_POST['standerd'];
$name = $_POST['stdname'];

/*$sql = "SELECT * FROM `student` WHERE 'standerd' = '$std' AND 'name' LIKE '%$name' ";*/
$sql = "SELECT * FROM `students` ";

$run = mysqli_query($conn, $sql);

$count=0;
while($data=mysqli_fetch_assoc($run)){ 

	  $user=$data['standerd'];
	  $pass=$data['name'];
	  if($user==$std & $pass==$name)  {
	  	 ?>
	  	 <center>
        <table border="1" style="width: 60%;">

         <tr>
         	<th>rollno</th>
         	<td><?php echo $data['rollno']; ?><td>
         </tr>
         <tr>
         	<th>name</th>
         	<td><?php echo $data['name']; ?><td>
         </tr>
         <tr>
         	<th>standerd</th>
         	 <td><?php echo $data['standerd']; ?><td>
         </tr>
         <tr>
         	<th>city</th>
         	<td> <?php echo $data['city']; ?><td>
         </tr>
         <tr>
         <td colspan="2" style="text-align: center;"><a href="updatestudent.php?sid=<?php echo $data['id'] ?>">Edit</a></td>	
         </tr>
	     </table>
	     </center>
	  		<?php
	   $count = 1+$count;  }
     }
     if($count==0){

     	?>
     	<script>
     		alert('not');
     		
     	</script>
     	<?php
     }
}
?>