<?php
include_once "config-user.php";
ob_start();
session_start();
 
 if( !isset($_SESSION['members']) ) {
  header("Location: Login-Signup/Login_Register.php");
  exit;
 }

 $res=mysqli_query($conn,"SELECT * FROM members WHERE id=".$_SESSION['members']);
 $userRow=mysqli_fetch_array($res);
?>

<div>
	HELLO <?php echo $userRow['username']; ?> !!!
	</br>
	<a href="logout.php?logout">&nbsp;Sign Out</a>
</div>