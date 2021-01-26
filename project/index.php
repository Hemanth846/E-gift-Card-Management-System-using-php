<!DOCTYPE html>
<html>
<head>
	<title> E-gift cards</title>
	<link rel ="stylesheet" type="text/css" href="e.css">

	
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<?php
		include 'includes/db.php';
		include 'header.php';
	?>
	
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/slide1.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="images/slide2.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="images/slide3.jpg" class="d-block w-100" alt="...">
			</div>
		</div>
	</div>

	<br>
	<div class="container">
	<table border="0" width="100%">
      <tr>
        <?php
			$count = 0;
			$query = mysqli_query($conn,"SELECT * FROM giftcard LIMIT 9");
			foreach($query as $row){
			$count++;
        ?>
		<td width="25%" style="padding:5px;font-family:'Segoe UI Regular';">
			<div class="card" style="padding:8px;">
				<a href="login.php">
					<img src="images/<?php echo $row['name']; ?>.jpg" class="card-img-top" alt="...">
				</a>
				<div class="card-body">
					<p class="card-text"><?php echo $row['message']; ?></p>
					
				</div>
			</div>
			
			<br>
			<br>
        </td>
        <?php
			if($count ==3) 
			{ // three items in a row
			echo '</tr><tr>';
			$count = 0;
			}
		} 
		?>
</tr>
</table>    
	</div>
</body>
</html>
