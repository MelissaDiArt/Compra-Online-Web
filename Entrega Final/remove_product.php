<?php
session_start();
include 'item.php';
 
// get the product id
$id = isset($_POST['id']) ? $_POST['id'] : "";
$cart = unserialize(serialize($_SESSION['cart']));
for($i=0; $i<count($cart); $i++){
	if($cart[$i]->id == $id){
		unset($cart[$i]);
		$cart = array_values($cart);
		$_SESSION['cart'] = $cart;
		break;
	}
}
 

$_SESSION['cart'] = $cart;
 
// redirect to product list and tell the user it was added to cart
header('Location: cart.php');
?>