<!DOCTYPE html>
<html>
<head>
	<title> MYNTRA cards</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php
		include 'includes/db.php';
		include 'header.php';
	?>
	
	<br>
	<div class="container" style="font-family:'Segoe UI Regular';">
		<table border="0" width="100%">
			<tr>
				<?php
					$count = 0;
					$query = mysqli_query($conn,"SELECT * FROM giftcard WHERE category='myntra'");
					foreach($query as $row){
					$count++;
				?>
				<td width="25%" style="padding:5px;">
					<a href="result.php?var=<?php echo $row['name']; ?>">
						<div class="card" style="padding:8px;">
							<img src="images/<?php echo $row['name']; ?>.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text"><?php echo $row['message']; ?></p>
							</div>
						</div>
					</a>	
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
