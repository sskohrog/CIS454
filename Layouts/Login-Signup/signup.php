<?php
  include("config.php");
  session_start();

  if(isset($_POST['action'])) {
    if($_POST['action'] == "signup") {
      $name = mysqli_real_escape_string($connection,$_POST['name']);
      $email = mysqli_real_escape_string($connection,$_POST['email']);
      $password = mysqli_real_escape_string($connection,$_POST['password']);
      $query = "SELECT email FROM users where email='".$email."'";
      $result = mysqli_query($connection,$query);
      $numResults = mysqli_num_rows($result);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $message =  "Invalid email, please type a valid one!";
      }
      elseif($numResults>=1) {
          $message = $email." Email already exist!";
      }
      else {
          mysql_query("Insert into users(name,email,password) values('".$name."','".$email."','".md5($password)."')");
          $message = "Sign up successful!";
      }
    }
  }
