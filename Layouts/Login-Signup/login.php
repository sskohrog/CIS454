<!--<?php
   //  include("config.php");
   //  session_start();

   //  if($_SERVER["REQUEST_METHOD"] == "POST") {
      
   //    $un = mysqli_real_escape_string($db,$_POST['username']);
   //    $pw = mysqli_real_escape_string($db,$_POST['password']); 
      
   //    $sql = "SELECT id FROM admin WHERE username = '$un' and passcode = '$pw'";
   //    $result = mysqli_query($db,$sql);
   //    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   //    $active = $row['active'];
      
   //    $count = mysqli_num_rows($result);
      
   //    if($count == 1) {
   //       session_register("un");
   //       $_SESSION['login_user'] = $un;
         
   //       header("location: welcome.php");
   //    } else {
   //       $error = "The Email or Password you used is invalid. Please try again";
   //    }
   // }
?>-->

<?php
  include("config.php");
  session_start();

  if(isset($_POST['action'])) {
    if($_POST['action'] == "login") {
      $email = mysqli_real_escape_string($connection,$_POST['email']);
      $password = mysqli_real_escape_string($connection,$_POST['password']);
      $strSQL = mysqli_query($connection,"select name from users where email='".$email."' and password='".md5($password)."'");
      $Results = mysqli_fetch_array($strSQL);
      
      if(count($Results)>=1) {
        $message = $Results['name']." Login Sucessfully!!";
      }
      else {
        $message = "The Email or Password you used is invalid. Please try again";
      }        
  }