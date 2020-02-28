<!--
	will setup session variables user id and product id
	start_session();
	this way i can use user id and product id in pages : modal or add-cart
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="main.css"> 
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>Checkerzz</title>
</head>
<body>
	<!-- Setting up the navigation bar with drop down menus -->
	<nav class="navbar fixed-top navbar-expand-md bg-light">
		<a href="#" class="navbar-brand" id="logo" style="font-size: 35px">Checkerzz</a>
		<ul class="navbar-nav">
			<!-- Each Nav Item is a dropdown in itself -->
			<li class="nav-item">
				<div class="dropdown"> 
					<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">Men</button>
					<div class="dropdown-menu">
						<a href="#" class="dropdown-item">Shirts</a>
						<a href="#" class="dropdown-item">Lowers</a>
						<a href="#" class="dropdown-item">Shoes</a>
					</div>
				</div>
			</li>
			<li class="nav-item">
				<div class="dropdown"> 
					<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">Women</button>
					<div class="dropdown-menu">
						<a href="#" class="dropdown-item">Shirts</a>
						<a href="#" class="dropdown-item">Lowers</a>
						<a href="#" class="dropdown-item">Shoes</a>
					</div> 
				</div>
			</li>
			<li class="nav-item">
				<div class="dropdown"> 
					<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">Accesories</button>
					<div class="dropdown-menu">
						<a href="#" class="dropdown-item">Shirts</a>
						<a href="#" class="dropdown-item">Lowers</a>
						<a href="#" class="dropdown-item">Shoes</a>
					</div>
				</div>
			</li>
		</ul>

		<ul class="navbar-nav ml-auto">
	      <li class="nav-item"><a href="final-cart.php"><i class="fas fa-shopping-cart"></i>Cart</a></li>
	      <li class="nav-item"><a href="#"><i class='fas fa-user'></i>Login</a></li>
    	</ul>
	</nav>

	<!-- setting background image -->
	<div id="background-image">
		
	</div>
	
	

	<div class="container">
		<br>
	<h4>Featured Products =></h4>
	<br>

		<!-- row 1 featuring 4 products -->
		<div class="row">
			<div class="col-md-3">
				<div class="card" id="thumb">
	            <img src="imgs/watch.png" alt="thumbnail2" id="thumb-img">
	            <div class="card-body">
	                <h5>Foo Bar</h5>
	                <p>This is a smple thumbnail for testing my website.</p>
	                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#view-watch">Details</a>
	            </div>
	        	</div>
			</div>
			<div class="col-md-3">
				<div class="card" id="thumb">
	            <img src="imgs/dell_inspiron.jpg" alt="thumbnail2" id="thumb-img">
	            <div class="card-body">
	                <h5>Foo Bar</h5>
	                <p>This is a smple thumbnail for testing my website.</p>
	                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#view-dell">Details</a>
	            </div>
	        	</div>
			</div>
			<div class="col-md-3">
				<div class="card" id="thumb">
	            <img src="imgs/oneplus7T.jpg" alt="thumbnail2" id="thumb-img">
	            <div class="card-body">
	                <h5>Foo Bar</h5>
	                <p>This is a smple thumbnail for testing my website.</p>
	                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#view-oneplus">Details</a>
	            </div>
	        	</div>
			</div>
			<div class="col-md-3">
				<div class="card" id="thumb">
	            <img src="imgs/book.jpg" alt="thumbnail2" id="thumb-img">
	            <div class="card-body">
	                <h5>Foo Bar</h5>
	                <p>This is a smple thumbnail for testing my website.</p>
	                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#view-book">Details</a>
	            </div>
	        	</div>
			</div>
		</div>

		<!-- row 2 featuring 4 products -->
		<br>
		<div class="row">
			<div class="col-md-3">
				<div class="card" id="thumb">
	            <img src="imgs/watch.png" alt="thumbnail2" id="thumb-img">
	            <div class="card-body">
	                <h5>Foo Bar</h5>
	                <p>This is a smple thumbnail for testing my website.</p>
	                <a href="#" class="btn btn-primary">Details</a>
	            </div>
	        	</div>
			</div>
			<div class="col-md-3">
				<div class="card" id="thumb">
	            <img src="imgs/watch.png" alt="thumbnail2" id="thumb-img">
	            <div class="card-body">
	                <h5>Foo Bar</h5>
	                <p>This is a smple thumbnail for testing my website.</p>
	                <a href="#" class="btn btn-primary">Details</a>
	            </div>
	        	</div>
			</div>
			<div class="col-md-3">
				<div class="card" id="thumb">
	            <img src="imgs/watch.png" alt="thumbnail2" id="thumb-img">
	            <div class="card-body">
	                <h5>Foo Bar</h5>
	                <p>This is a smple thumbnail for testing my website.</p>
	                <a href="#" class="btn btn-primary">Details</a>
	            </div>
	        	</div>
			</div>
			<div class="col-md-3">
				<div class="card" id="thumb">
	            <img src="imgs/watch.png" alt="thumbnail2" id="thumb-img">
	            <div class="card-body">
	                <h5>Foo Bar</h5>
	                <p>This is a smple thumbnail for testing my website.</p>
	                <a href="#" class="btn btn-primary">Details</a>
	            </div>
	        	</div>
			</div>
		</div>
	</div>


	<!-- including product files ( conataining modals ) -->
    <?php
    include "modal-watch.php";
    include "modal-dell.php";
    include "modal-oneplus.php";
    include "modal-book.php";
    ?>
 
	<!-- Adds footer to the website; &copy gives the copyright symbol -->
	<footer class="text-center" id="footer">&copy;Copyright 2020-2021 Checkerzz Shoppe</footer>
</body>
</html>