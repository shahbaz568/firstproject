<?php
session_start();
if(isset($_SESSION['uid'])){

	header('location: admin/cadmin.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Student management system</title>
</head>
<body>
<form action="" method="post">
	  <center>
        <table border="1" style="margin-top: 250px;">

            <tr>
                <th colspan="2">admin login</th>
            </tr>
            <tr>
                <th>username:</th>
                <td><input type="text" name="uname" placeholder=" entre the username" required ></td>
            </tr>
            <tr>
             <th>password:</th>
             <td> <input type="password" name=" pass" placeholder="enter the password" required></td>   
            </tr>
            <tr>
                <th colspan="2"><input type="submit" name="login" value="login"></th>
            </tr>

</table>
                  </center>
</form>

</body>
</html>

<?php

include('dbconn.php');
if(isset($_POST['login'])){
$username = $_POST['uname'];
$password = $_POST['pass'];
$count=0;
$qry = "SELECT * FROM `admin`";

$run = mysqli_query($conn,$qry);

while($data=mysqli_fetch_assoc($run)){ 

	  $user=$data['username'];
	  $pass=$data['password'];
	  if($user==$username & $pass==$password)  {
	   $id = $data['id'];
       
       $_SESSION['uid'] = $id;
        header('location: admin/dashboard.php');

	   $count = 1+$count;  }
     }
     if($count==0){

     	?>
     	<script>
     		alert('username and password are not match');
     		window.open('adlogin.php', '_self');
     	</script>
     	<?php
     }
}
?>
