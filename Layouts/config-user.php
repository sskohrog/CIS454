<!-- Config.php 

Configures the database info
 -->

<?php
	 // this will avoid mysql_connect() deprecation error.
 	error_reporting( ~E_DEPRECATED & ~E_NOTICE );

	define('DB_SERVER','localhost');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','scheduler');
	define('DB_DATABASE','secure_login');
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die(mysqli_error($db));
?>