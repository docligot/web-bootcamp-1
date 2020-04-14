<!DOCTYPE HTML>	
<html>

<head>
	<title>Input Output Web System</title>
	<link rel="stylesheet" href="w3.css" />
</head>

<body>

<header>
	<div class="w3-red w3-padding-large w3-top">Input Output Web System</div>
</header>

	<section class="w3-padding">
		<br/><br/>
		<h2>Submission Form</h2>
		<select id="product" class="w3-select">
			<option value="">Select Product</option>
			<option value="Cheeseburger">Cheeseburger</option>
			<option value="Chicken">Chicken</option>
			<option value="Fries">Fries</option>
		</select><br/><br/>
		Enter Price:<input id="price" class="w3-input"></input><br/>
		Enter Quantity:<input id="quantity" class="w3-input" type="number" min="0"></input><br/>
		Total Sales:<div id="totalBox" class="w3-input">&nbsp;</div><br/>
		<button class="w3-button w3-red">Submit</button>
		<br/><br/>
		<div></div>
		<br></br><br></br>
	</section>

	<section class="w3-padding">
		<br/><br/>
		<h2>Product Statistics</h2>
		<br></br><br></br>
	</section>

	<footer>
	<div class="w3-small w3-red w3-padding w3-bottom">
	&copy; Cirrolytix Research Services
	</div>
	</footer>

<script src="script.js">
</body>

</html>