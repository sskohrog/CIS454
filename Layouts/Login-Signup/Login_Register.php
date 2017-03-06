
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

          <form action="signup.php" method="POST">

            <div class="top-row">
              <div class="field-wrap">
                <label>
                  First Name<span class="req">*</span>
                </label>
                <input type="text" required autocomplete="off" />
              </div>

              <div class="field-wrap">
                <label>
                  Last Name<span class="req">*</span>
                </label>
                <input type="text"required autocomplete="off"/>
              </div>
            </div>

            <div class="field-wrap">
              <label>
                Email Address<span class="req">*</span>
              </label>
              <input type="email"required autocomplete="off"/>
            </div>

            <div class="field-wrap">
              <label>
                Set A Password<span class="req">*</span>
              </label>
              <input type="password"required autocomplete="off"/>
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

          <div class = "field-wrap">
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

      <input name="action" type="hidden" value="signup"/>
      <button type="submit" value="Signup" class="button button-block" />Get Started</button>

    </form>

  </div>

  <div id="login">   
    <h1>Welcome Back!</h1>

    <form action="login.php" method="POST">

      <div class="field-wrap">
        <label>
          Email Address<span class="req">*</span>
        </label>
        <input type="email"required autocomplete="off"/>
      </div>

      <div class="field-wrap">
        <label>
          Password<span class="req">*</span>
        </label>
        <input type="password"required autocomplete="off"/>
      </div>

      <p class="forgot"><a href="#">Forgot Password?</a></p>

      <input name="action" type="hidden" value="login"/>
      <button type="submit" value="Create Account" class="button button-block"/>Log In</button>

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