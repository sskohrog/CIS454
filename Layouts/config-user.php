<!-- Config.php 

Configures the database info
 -->

<!--<?php
	 // this will avoid mysql_connect() deprecation error.
 // 	error_reporting( ~E_DEPRECATED & ~E_NOTICE );

	// define('DB_SERVER','localhost');
	// define('DB_USERNAME','root');
	// define('DB_PASSWORD','scheduler');
	// define('DB_DATABASE','secure_login');
	// $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die(mysqli_error($db));
?>-->

<?php

	// this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
	 
	define('DB_SERVER','localhost');
	define('DB_USERNAME','ec2-user');
	define('DB_PASSWORD','scheduler');
	define('DB_DATABASE','secure_login');
	 
	$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysql_select_db(DBNAME);
	 
	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}
	 
	if ( !$dbcon ) {
	 	die("Database Connection failed : " . mysql_error());
	}
?>