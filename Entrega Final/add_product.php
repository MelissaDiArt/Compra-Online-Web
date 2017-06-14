<?php
session_start();
include 'item.php';
include 'config.php';

// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
/*
 * check if the 'cart' session array was created
 * if it is NOT, create the 'cart' session array
 */
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

$cart = unserialize(serialize($_SESSION['cart']));
$bool = false;

foreach($cart as $element)
	if($element->id == $id)
		$bool = true;
 
// check if the item is in the array, if it is, do not add
if($bool){
	for($i=0; $i<count($cart); $i++)
		if($cart[$i]->id == $id)
			break;

	if(isset($_POST['quantity']))
		$cart[$i]->quantity = $_POST['quantity'];
	else
		$cart[$i]->quantity++;
}
 
// else, add the item to the array
else{
	$product = $mysqli->query("SELECT * FROM products WHERE id = '$id'")->fetch_object();
	
	$item = new Item();
	$item->id = $product->id;
	$item->name = $product->name;
	$item->category = $product->category;
	$item->image = $product->image;
	$item->price = $product->price;
	$item->url = $product->url;
	$item->quantity = 1;
    $cart[]=$item;    
}

$_SESSION['cart'] = $cart;

header('Location: cart.php');
die();

?>