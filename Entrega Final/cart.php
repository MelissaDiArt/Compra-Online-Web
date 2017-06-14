<!DOCTYPE html>
<html lang="es">
	
<?php require 'navigation-bar.php'; ?>
	
	<link rel="stylesheet" type="text/css" href="cart.css">

	<div class="container">
	<table id="cart-page" cellspacing="0" cellpadding="4">
    				<thead>
						<tr class="columns">
							<th style="width:0%; text-align: left">Producto</th>
							<th style="width:10%">Precio</th>
							<th style="width:8%">Cantidad</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%">Opciones</th>
						</tr>
					</thead>
					<tbody>
	
<?php
	session_start();
	$cart = unserialize(serialize($_SESSION['cart']));
	$sum = 0;
	for($i=0; $i<count($cart); $i++){
		$sum += $cart[$i]->price * $cart[$i]->quantity;
		
?>

						<tr class="content">
							<td class="product">
								<div class="row">
									<div class="product-image"><img src="<?php echo $cart[$i]->image;?>" class="img-responsive"></div>
									<div class="text-column">
										<h3 class="product-name"><?php echo $cart[$i]->name;?></h3>
									</div>
								</div>
							</td>
							<td class="product-price"><?php echo $cart[$i]->price;?> €</td>
							<td class="product-quantity">
								<form action="add_product.php?id=<?php echo $cart[$i]->id; ?>" method="post">
									<input type="text" name="quantity" autocomplete="off" placeholder="<?php echo $cart[$i]->quantity; ?>" />
								</form>
							</td>
							<td class="product-subtotal" class="text-center"><?php echo $cart[$i]->price * $cart[$i]->quantity;?> €</td>
							<td class="options">
								<form action="remove_product.php" method="post">
									<button type="submit" name="id" value="<?php echo $cart[$i]->id; ?>"><i class="fa fa-trash"></i></button>
								</form>
							</td>
							
							
						</tr>
<?php } ?>

					</tbody>
					<tfoot>
						<tr>
							<td><a href="index.php" class="myButton1">Continuar Comprando</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center" style="text-align: center; font-family: sans-serif; font-size: large;"><strong>Total <?php echo $sum." €"; ?></strong></td>
							<td><a href="formulario.php" class="btn btn-success btn-block myButton2">Checkout</a></td>
						</tr>
					</tfoot>
				</table>
				<form action="session_end.php">
					<button type="submit"></button>
				</form>
	</div>
	
	<?php require 'footer.php'; ?>
	
</html>