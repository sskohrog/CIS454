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
  include "../config-user.php";
  session_start();

  // it will never let you open index(login) page if session is set
  if ( isset($_SESSION['user'])!="" ) {
    header("Location: home.php");
    exit;
  }

  $error = false;

  if( isset($_POST['login']) ) { 
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);

    if(empty($email)){
      $error = true;
      $emailError = "Please enter your email address.";
    } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
      $error = true;
      $emailError = "Please enter valid email address.";
    }

    if(empty($pass)){
      $error = true;
      $passError = "Please enter your password.";
    }

    // if there's no error, continue to login
    if (!$error) {

      $password = hash('sha256', $pass); 

      $res=mysql_query("SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
      $row=mysql_fetch_array($res);
      $count = mysql_num_rows($res); 

      if( $count == 1 && $row['userPass']==$password ) {
        $_SESSION['user'] = $row['userId'];
        header("Location: home.php");
      } else {
        $errMSG = "Incorrect email & password combination, Try again...";
      }

    }
  }
?>
  