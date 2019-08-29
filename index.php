<!DOCTYPE html>
<html>
<head>
	<title>student management system</title>
     <meta charset="utf-8">
     <style type="text/css">
     	
     	h1{
     		background-color: red;
     		text-align: center;
     		font-size: 100px;
     		margin: 30px;
     	}
     	img{
        width: 150px;
        height: 150px;

      }
      table{
        width: 60%;
        text-align: center;
      }
     </style>
</head>
<body>

	<a href="adlogin.php" style="float: right; text-decoration: none; font-size: 20px;"> login </a>

  <br><br>

	<h1>student management system</h1>

	<form action="index.php" method="post">
		   <center>
<table border="1">
  <tr>
    <th>rollno:</th>
    <td><input type="text" name="rollno" placeholder="enter the rollno" ></td>
  </tr>
			 
    <tr>
      <th>standerd</th>
      <td><select name="std">
       <option value="1">1st</option>
       <option value="2">2nd</option>
       <option value="3">3rd</option>
       <option value="4">4th</option>
       <option value="5">5th</option>
       <option value="6">6th</option>       
            </select></td>
    </tr>
			 
			<tr>
        <th colspan="2"><input type="submit" name="submit" value="show"></th>
      </tr>
            
          </table>
                  </center>
                </form>
                <br><br>
</body>
</html>

<?php

if(isset($_POST['submit'])){
  
 $roll = $_POST['rollno'];
 $std = $_POST['std'];
include('dbconn.php');
$sql = "SELECT * FROM students WHERE rollno=$roll AND standerd=$std";
$run = mysqli_query($conn, $sql);

while ($data=mysqli_fetch_assoc($run)) {


  ?>

  <center>
  <table border="1">

    <tr>
      <th colspan="3">Students detail</th>
    </tr>

    <tr>
      <td rowspan="6"><img src="dataimg/<?php echo $data['image']; ?>"/></td>
      <th>id</th>
      <td><?php echo $data['sid']; ?></td>
    </tr>
<tr>
  <th>rollno</th>
      <td><?php echo $data['rollno']; ?></td>
</tr>
<tr>
  <th>name</th>
      <td><?php echo $data['name']; ?></td>
</tr>
<tr>
  <th>city</th>
      <td><?php echo $data['city']; ?></td>
</tr>
<tr>
  <th>parent contact</th>
      <td><?php echo $data['pcont']; ?></td>
</tr>
<tr>
  <th>standerd</th>
      <td><?php echo $data['standerd']; ?></td>
</tr>


  </table>
  </center>
 <?php
}
}
?> 
