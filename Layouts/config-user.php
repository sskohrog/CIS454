<!-- Config.php 

Configures the database info
 -->

<?php

	// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
	 
	define('DB_SERVER','localhost');
	define('DB_USERNAME','ec2-user');
	define('DB_PASSWORD','password');
	define('DB_DATABASE','secure_login');
	 
	$conn = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
	$dbcon = mysql_select_db(DB_DATABASE);
	 
	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}
	 
	if ( !$dbcon ) {
	 	die("Database Connection failed : " . mysql_error());
	}
?>