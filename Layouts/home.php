<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 if( !isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }

 $res=mysql_query("SELECT * FROM members WHERE id=".$_SESSION['user']);
 $userRow=mysqli_fetch_array($res);
?>

<div>
	HELLO <?php echo $userRow['username']; ?> !!!
	</br>
	<a href="logout.php?logout">&nbsp;Sign Out</a>
</div>