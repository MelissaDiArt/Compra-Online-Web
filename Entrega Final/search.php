<!DOCTYPE html>
<html lang="es">
	
<?php require 'navigation-bar.php'; ?>

	<body>
	
		<ul class="rig columns-3">

<?php
	session_start();
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$query = "SELECT * FROM products WHERE name LIKE '%$name%'";
		$results = $mysqli->query($query);
	}
    if($results){
        while ($row = $results->fetch_assoc()){
?>
			<li>
				<a href='<?php echo $row[url];?>'><img style="padding-top: 20px" src='../<?php echo $row[image];?>'>
					<h3 style="margin-top: 15px; font-size: 23px; text-decoration: none;"><?php echo $row[name];?></h3></a>
				<p style="font-size: 30px"><?php echo $row[price];?>€</p>
			</li>
<?php 	}
	}
?>	
		</ul>

	</body>

	<?php require 'footer.php'; ?>

</html>