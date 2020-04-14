<!DOCTYPE HTML>
<html>

<head>
	<title>Input Output System</title>
	<link rel="stylesheet" href="w3.css" />
	
</head>

<body>

	<header>
		<div class="w3-blue w3-padding-large w3-top">Input Output System</div>
	</header>
	
	<section class="w3-padding">
		<br/><br/>
		<h2>Submission Form</h2>
		<select id="product" class="w3-select" onchange="calculateTotal();">
			<option value="">Select Product:</option>
			<option value="Big Mac">Big Mac</option>
			<option value="Cheeseburger">Cheeseburger</option>
			<option value="McChicken">McChicken</option>
			<option value="French Fries">French Fries</option>
		</select><br/><br/>
		Enter price: <input id="price" class="w3-input" type="number" min="0" onchange="calculateTotal();"></input><br/>
		Enter quantity: <input id="quantity" class="w3-input" type="number" min="0" onchange="calculateTotal();"></input><br/>
		Total Sales: <div id="totalBox" class="w3-input">&nbsp;</div><br/>
		<button class="w3-button w3-blue">Submit</button>
		<br/><br/>
		<div class="w3-text-red" id="errorBox"></div>
		<br/><br/><br/><br/><hr/>
	</section>

	<section class="w3-padding">
		<br/><br/>
		<h2>Product Statistics</h2>
		<br/><br/><br/><br/>
	</section>
	
	<footer>
		<div class="w3-small w3-black w3-padding w3-bottom">&copy; CirroLytix</div>
	</footer>

<script src="script.js"></script>

</body>

</html>