<html><body>
<?php
session_destroy();
?>
</body></html>

<table cellpadding="2" cellspacing="2" border="1">
		<tr>
			<th>OPCIÓN</th>
			<th>ID</th>
			<th>NAME</th>
			<th>PRICE</th>
			<th>QUANTITY</th>
			<th>SUBTOTAL</th>
		</tr>
		<?php
			$cart = unserialize(serialize($_SESSION['cart']));
			for($i=0; $i<count($cart); $i++){ 
				$sum += $cart[$i]->price * $cart[$i]->quantity;
			?>
			<tr>
				<td><a href="cart.php?id=<?php echo $cart[$i]->id;?>&action=delete">Borrar</a></td>
				<td><?php echo $cart[$i]->id;?></td>
				<td><?php echo $cart[$i]->name;?></td>
				<td><?php echo $cart[$i]->price;?></td>
				<td><?php echo $cart[$i]->quantity;?></td>
				<td><?php echo $cart[$i]->price * $cart[$i]->quantity;?></td>
			</tr>
		<?php
		} ?>
		<tr>
			<td colspan="5" align="right">Total</td>
			<td><?php echo $sum; ?></td>
		</tr>
	</table>
	<br>
	<a href="index.php">Continuar Comprando</a>
	
	<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<form action="cart.php?id=<?php echo $cart[$i]->id;?>&action=delete">
									<input type="submit" value="Borrar">
								</form>							
							</td>
							
							
							
							
							
							
							
							
							
	<div class="slideshow" onclick="oc('droplist')">
			<img src="img/5.jpg" align="middle">
   			<img src="img/6.jpg" align="middle">
   			<img src="img/7.jpg" align="middle">
		</div>
		<script>
			$(function(){
				$('.slideshow img:gt(0)').hide();
					setInterval(function(){
					$('.slideshow :first-child').fadeOut()
					.next('img').fadeIn()
					.end().appendTo('.slideshow');},
					3000);
			});
		</script>
		
		
		
		
		
		
		
		
		<table cellspacing="0" cellpadding="4">
			  				<?php
				  				$cart = unserialize(serialize($_SESSION['cart']));
				  				for($i=0; $i<count($cart); $i++){ 
							?>
							<tr>
								<td class="quantity"><?php echo $cart[$i]->quantity;?></td>
								<td class="name"><?php echo $cart[$i]->name;?></td>
								<td class="delete"><a href="index.php?id=<?php echo $cart[$i]->id;?>&action=delete" class="myButton"><i class="fa fa-trash-o"></i></a></td>
							</tr>
							<?php } ?>
						</table>
						
						
						
						
						
						
						
						
						
						<li class="clearfix">
										<img src="<?php echo $cart[$i]->image;?>" alt="<?php echo $cart[$i]->name;?>"/>
										<span class="item-name"><?php echo $cart[$i]->name;?></span>
										<span class="item-price"><?php echo $cart[$i]->price.$currency;?></span>
										<span class="item-quantity">Cantidad: <?php echo $cart[$i]->quantity;?></span>
									</li>
									
									<tr class="row">
											<td><img src="<?php echo $cart[$i]->image;?>" alt="<?php echo $cart[$i]->name;?>"/></td>
											<td><span class="item-name"><?php echo $cart[$i]->name;?></span></td>
											<td><span class="item-price"><?php echo $cart[$i]->price.$currency;?></span></td>
											<td><span class="item-quantity">Cantidad: <?php echo $cart[$i]->quantity;?></span></td>
										</tr>
										
										
										
										
										
										
										
										
										<a href="cart.php?id=<?php echo $cart[$i]->id;?>" name="action" class="myButton"><i class="fa fa-trash-o"></i></a>
										
										<a value="add" class="myButton"><i class="fa fa-shopping-cart"></i></a>
										
										
										
	<?php
	session_start();
	include 'config.php';
	include 'item.php';
	
	if (isset($_POST['action']) || isset($_GET['id'])){
		$action = $_POST['action'];
		$id = $_GET['id'];
		$cart = unserialize(serialize($_SESSION['cart']));
		
		if (isset($_POST['quantity'])) {
			for($i=0; $i<count($cart); $i++)
					if ($cart[$i]->id == $id){
						$cart[$i]->quantity = $_POST['quantity'];
						$_SESSION['cart'] = $cart;
						break;
					}
		}
		if ($action == 'delete'){
			for($i=0; $i<count($cart); $i++){
				if($cart[$i]->id == $id){
					unset($cart[$i]);
					$cart = array_values($cart);
					$_SESSION['cart'] = $cart;
					break;
				}
			}
		}
		else if ($action == 'add'){
			echo "hole";
			$cart = unserialize(serialize($_SESSION['cart']));
			if (in_array($item, $_SESSION['cart'])){
				
				for($i=0; $i<count($cart); $i++)
					if ($cart[$i]->id == $item->id)
						break;
						
				if (isset($_POST['quantity']))
					$cart[$i]->quantity = $_POST['quantity'];
				else
					$cart[$i]->quantity++;
				
			}
			else {
				$product = $mysqli->query("SELECT * FROM products WHERE id = '$id'")->fetch_object();
		
				$item = new Item();
				$item->id = $product->id;
				$item->name = $product->name;
				$item->category = $product->category;
				$item->image = $product->image;
				$item->price = $product->price;
				$item->url = $product->url;
				$item->quantity = 1;
				
				$_SESSION['cart'][] = $item;
				
			}
		}
	}