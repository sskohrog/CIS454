<?php
  echo   
    '<nav class="navbar navbar-default">
      <div class="container-fluid"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="#">CLASS SCHEDULER</a> </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search for Class...">
              </div>
              <button type="Submit" class="btn btn-default">GO</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="../UserView.php">About Us</a> </li>
              <li><a href="#">My Schedule</a> </li>
              <li><a href="#">Generate</a> </li>
              <li><a href="../add-to-cart-interaction/AddingClassToCart.php">Browse</a> </li>
              <li><a href="#">My Cart</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>';
?>