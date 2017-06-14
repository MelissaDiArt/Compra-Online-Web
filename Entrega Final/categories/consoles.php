<!DOCTYPE html>
<html lang="es">
    <link rel="stylesheet" type="text/css" href="category.css">
	<?php require 'navigation-bar.php'; ?>

	<body>
		
		<ul class="rig columns-3">

<?php
include '../config.php';

$query = sprintf("SELECT * FROM `products` WHERE category='consoles'");
$results = $mysqli->query($query);

if($results){
	while($row = $results->fetch_assoc()){
?>
		<li>
			<a href='<?php echo $row[url];?>'><img src='../<?php echo $row[image];?>'>
				<h3 style="margin-top: 15px; font-size: 23px;"><?php echo $row[name];?></h3></a>
			<p style="font-size: 30px"><?php echo $row[price];?>€</p>
		</li>
<?php
	}
}
?>
	
		</ul>

	</body>

	<?php require 'footer.php'; ?>

</html>