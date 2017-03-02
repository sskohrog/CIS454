<!-- Config.php 

Configures the database info
 -->

<?php
	define('DB_SERVER','localhost');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','scheduler');
	define('DB_DATABASE','user_database');
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die(mysqli_error($db));
?>