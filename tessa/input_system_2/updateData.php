<?php

$product = $_POST['product'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$total = $_POST['total'];
$date = date("yy-m-d h:i:sa");
include('dbConnect.php');


$query = "INSERT INTO tessa.product_input (period, product, price, quantity, total) VALUES ('$date', '$product', $price, $quantity, $total);";
$result = pg_query($dbc, $query);

if ($result) {
  $response = "<div class=\"w3-center\">Submitted on:" . $date . "</div>";
  $response .= "<table class=\"w3-table w3-bordered w3-striped\"><tr><th>Product</th><th>Quantity</th><th>Total</th></tr>";
  $response .= "<tr><td>$product</td><td>$price</td><td>$quantity</td><td>$total</td></tr></table>";
  echo $response;

} else {
  echo 'Error in query.';
}

pg_close($dbc);
exit();
