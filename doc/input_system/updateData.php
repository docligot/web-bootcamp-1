<?php
sleep(3);
$product = $_POST['product'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$total = $_POST['total'];
$date = date("yy-m-d h:i:sa");

$response = "<div class=\"w3-center\">Submitted on: " . $date . "</div>";
$response .= "<table class=\"w3-table w3-bordered w3-striped\"><tr><th>Product</th><th>Price</th><th>Quantity</th><th>Total</th></tr>";
$response .= "<tr><td>$product</td><td>$price</td><td>$quantity</td><td>$total</td></tr></table>";

echo $response;
exit();