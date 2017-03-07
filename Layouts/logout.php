<!-- logout.php
	log out code -->

<?php
	session_start();

	if (!isset($_SESSION['members'])) {
		header("Location: Login-Signup/Login_Register.php");
	} else if(isset($_SESSION['members'])!="") {
		header("Location: home.php");
	}

	if (isset($_GET['logout'])) {
		unset($_SESSION['members']);
		session_unset();
		session_destroy();
		header("Location: Login-Signup/Login_Register.php");
		exit;
	}
?>