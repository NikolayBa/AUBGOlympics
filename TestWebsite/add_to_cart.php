<?php
session_start();
 
// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "";
/*
 * check if the 'cart' session array was created
 * if it is NOT, create the 'cart' session array
 */
 
// check if the item is in the array, if it is, do not add
if(array_key_exists($id, $_SESSION['cart_items'])){
    // redirect to product list and tell the user it was added to cart
    echo "<script type='text/javascript'>alert('Този артикул вече е в кошницата Ви!');window.location.href = document.referrer;</script>";
}
 
// else, add the item to the array
else{
    $_SESSION['cart_items'][$id] = array('quantity' => $quantity);
    //var_dump($_SESSION['cart_items']);
 
    // redirect to product list and tell the user it was added to cart
    echo "<script type='text/javascript'>alert('Артикулът беше успешно добавен в кошницата!');window.location.href = document.referrer;</script>";
}
?>