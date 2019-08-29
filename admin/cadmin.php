<?php
session_start();
if(isset($_SESSION['uid'])) {
	echo "You are already login";
}

else   {
	header('location: adlogin.php');
}
?>