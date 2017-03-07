<?php
include "../config-user.php";
session_start();

// it will never let you open index(login) page if session is set
if ( isset($_SESSION['user'])!="" ) {
  header("Location: home.php");
  exit;
}

$error = false;

if( isset($_POST['signup']) ) { 
  $name = trim($_POST['name']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);

  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);

// basic name validation
  if (empty($name)) {
    $error = true;
    $nameError = "Please enter your full name.";
  } else if (strlen($name) < 3) {
    $error = true;
    $nameError = "Name must have atleat 3 characters.";
  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
    $error = true;
    $nameError = "Name must contain alphabets and space.";
  }

//basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
    $error = true;
    $emailError = "Please enter valid email address.";
  } else {
// check email exist or not
    $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
    $result = mysql_query($query);
    $count = mysql_num_rows($result);
    if($count!=0){
      $error = true;
      $emailError = "Provided Email is already in use.";
    }
  } 
// password validation
  if (empty($pass)){
    $error = true;
    $passError = "Please enter password.";
  } else if(strlen($pass) < 6) {
    $error = true;
    $passError = "Password must have atleast 6 characters.";
  }

  $password = hash('sha256', $pass);

// if there's no error, continue to signup
  if( !$error ) {

    $query = "INSERT INTO users(userName,userEmail,userPass) VALUES('$name','$email','$password')";
    $res = mysql_query($query);

    if ($res) {
      $errTyp = "success";
      $errMSG = "Successfully registered!";
      unset($name);
      unset($email);
      unset($pass);
    } else {
      $errTyp = "danger";
      $errMSG = "Account was not created, please try again later ..."; 
    } 
  }
}
?>