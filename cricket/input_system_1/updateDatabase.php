<?php

$product = $_POST['product'];
$price = $_POST['price']; 
$quantity = $_POST['quantity']; 
$total = $_POST['total']; 
$date = date("yy-m-d h:i:sa");
include('dbconnect.php');
$query = "INSERT INTO doc.product_input_1 (period, product, price, quantity, total_sales) VALUES ('$date', '$product', $price, $quantity, $total)";
$result = pg_query($dbc, $query); 
if ($result) {
	$response = "<div class=\"w3-center\">Submitted:</div><table class='w3-table w3-bordered w3-striped'><tr><th>Product</th><th>Price</th><th>Quantity</th><th>Total</th></tr>";
	$response .= "<tr><td>$product</td><td>$price</td><td>$quantity</td><td>$total</td></tr></table>";
	echo $response;
} else {
	echo 'Error in query.';
}

pg_close($dbc);
exit();