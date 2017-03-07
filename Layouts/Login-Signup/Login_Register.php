<?php
include_once "../config-user.php";
ob_start();
session_start();

// it will never let you open index(login) page if session is set
if ( isset($_SESSION['user'])!="" ) {
  header("Location: home.php");
  exit;
}

$error = false;


//SIGN UP PHP
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

//LOGIN PHP

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


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Class Scheduler | Registration</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/stylesheet.css" type="text/css"/>
</head>

<body>
  <?php include 'navbar-login.php'; ?>

  <!-- HEADER -->
  <!--  <header> -->
  <div class="jumbotron">

    <div class="form">
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>

          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

            <div class="field-wrap">
              <label>
                Full Name<span class="req">*</span>
              </label>
              <input name="name" type="text" required autocomplete="off" />
            </div>

            <div class="field-wrap">
              <label>
                Email Address<span class="req">*</span>
              </label>
              <input name="email" type="email"required autocomplete="off"/>
            </div>

            <div class="field-wrap">
              <label>
                Set A Password<span class="req">*</span>
              </label>
              <input name="pass" type="password"required autocomplete="off"/>
            </div>

            <div class="top-row">
              <div class = "field-wrap">
               <label>
                Class<span class="req">*</span>
              </label>
              <br>
              <br><select>
              <option>2017</option>
              <option>2018</option>
              <option>2019</option>
              <option>2020</option>
              <option>2021</option>
              <option>2022</option>
              <option>2023</option>
              <option>2024</option>
              <option>2025</option>
            </select>
          </div>

          <div class="field-wrap college">
            <label>
              College<span class="req">*</span>
            </label>
            <br>
            <br><select>
            <option>School of Architecture</option>
            <option>The College of Arts and Sciences</option>
            <option>School of Education</option>
            <option>College of Engineering and Computer Science</option>
            <option>Falk College of Sportand Human Dynamics</option>
            <option>Whitman School of Management</option>
            <option>Maxwell School of Citizenship and Public Affairs</option>
            <option>Newhouse School of Public Communications</option>
            <option>College of Visual and Performing Arts</option>
            <option>Part-Time Study at Syracuse: University College</option>
            <option>College of Law</option>
            <option>Graduate School</option>
          </select> 
        </div>
      </div>

      <input type="submit" value="Signup" class="button button-block" name="signup"/>Get Started</input>

    </form>

  </div>

  <div id="login">   
    <h1>Welcome Back!</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

      <div class="field-wrap">
        <label>
          Email Address<span class="req">*</span>
        </label>
        <input name="email" type="email"required autocomplete="off"/>
      </div>

      <div class="field-wrap">
        <label>
          Password<span class="req">*</span>
        </label>
        <input name="pass" type="password"required autocomplete="off"/>
      </div>

      <p class="forgot"><a href="#">Forgot Password?</a></p>

      <input type="submit" value="Create Account" class="button button-block" name="login"/>Log In</input>

    </form>

  </div>

</div>
</div>

<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © MyWebsite. All rights reserved.</p>
      </div>
    </div>
  </div>
  <!-- / FOOTER --> 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="../js/jquery-1.11.3.min.js"></script> 
  <!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script src="../js/bootstrap.js"></script>
</footer>

</body>
</html>

<?php ob_end_flush(); ?>