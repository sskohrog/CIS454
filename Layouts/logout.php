<!-- logout.php
log out code -->

<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: login.php");
   }
?>