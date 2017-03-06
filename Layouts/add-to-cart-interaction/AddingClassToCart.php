<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
<link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="../css/style.css"> <!-- Resource style -->
  	
<title>Class Scheduler | Adding Classes</title>

<!-- Bootstrap -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php include 'navbar-add.php'; ?>

<!-- HEADER -->
<header>
  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <main>
			<h1>Class</h1>
			<a href="#0" class="cd-add-to-cart">Add To Cart</a>
			<br>
			<h1>Class</h1>
			<a href="#0" class="cd-add-to-cart">Add To Cart</a>
			</main>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="cd-cart-container empty">
	<a href="#0" class="cd-cart-trigger">
		Cart
		<ul class="count"> <!-- cart items count -->
			<li>0</li>
			<li>0</li>
		</ul> <!-- .count -->
	</a>

	<div class="cd-cart">
		<div class="wrapper">
			<header>
				<h2>Cart</h2>
				<span class="undo">Item removed. <a href="#0">Undo</a></span>
			</header>
			
			<div class="body">
				<ul>
					<!-- products added to the cart will be inserted here using JavaScript -->
				</ul>
			</div>

			<footer>
				<a href="#0" class="checkout btn"><em>Make Schedule</em></a>
			</footer>
		</div>
	</div> <!-- .cd-cart -->
</div> <!-- cd-cart-container -->

<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © MyWebsite. All rights reserved.</p>
      </div>
    </div>
  </div>
  
  
</footer>
<!-- / FOOTER --> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="../js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="../js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="../js/main.js"></script> <!-- Resource jQuery -->

</body>
</html>
