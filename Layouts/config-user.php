<!-- Config.php 

Configures the database info
 -->
<?php
	$DB_SERVER = 'localhost';
	$DB_USERNAME = 'ec2-user';
	$DB_PASSWORD = 'scheduler';
	$DB_DATABASE = 'secure_login';
	 
	$conn = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
	$dbcon = mysqli_select_db($conn,$DB_DATABASE);
	 
	if ( !$conn ) {
		die("Connection failed : " . mysqli_error());
	}
	 
	if ( !$dbcon ) {
	 	die("Database Connection failed : " . mysqli_error());
	}

?>