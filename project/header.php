<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- jQuery and JS bundle w/ Popper.js -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark" style="font-family:'Segoe UI Regular';">
		<div class="container">
			<a href="" class="navbar-brand text-warning font-weight-bold">OHO</a>
			<button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#collapsenavbar">
				<span class="navbar-toggler-icon"></span>	
			</button>
			
			<div class="collapse navbar-collapse text-center "id="collapsenavbar">
				<ul class="navbar-nav ml-auto ">
					<?php	
						if(isset($_SESSION["email"]))
     					{
					?> 
							<li class="nav-item">
								<a href="index.php"class="nav-link text-white ">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
										<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
									</svg>
								<span style="position:relative;top:33%;">Home</span>										
								</a>
							</li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Brands
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									
									<a class="dropdown-item" href="amazon.php">Amazon</a>
									<a class="dropdown-item" href="flipcart.php">Flipcart</a>
									<a class="dropdown-item" href="kfc.php">KFC</a>
									<a class="dropdown-item" href="pizzahut.php">Pizza Hut</a>
									<a class="dropdown-item" href="myntra.php">Myntra</a>
									<a class="dropdown-item" href="#">bigbasket</a>
									<a class="dropdown-item" href="#">Dominos</a>
									<a class="dropdown-item" href="allcards.php">Show All</a>
								</div>
							</li>

							<li class="nav-item">
								<a href=""class="nav-link text-white">About Us</a>
							</li>

							<li class="nav-item">
								<a href=""class="nav-link text-white">Contact Us</a>
							</li>

							<li class="nav-item">
								<a href="logout.php"class="nav-link text-white">Log Out</a>
							</li>
					<?php
						}
						else
						{
					?>
							

							<li class="nav-item">
								<a href="signup.php"class="nav-link text-white">SignUp</a>
							</li>

							<li class="nav-item">
								<a href="login.php"class="nav-link text-white">LogIn</a>
							</li>
					<?php
						}
					?>
				</ul>
			</div>
		</div>
	</nav>
</body>
</html>

