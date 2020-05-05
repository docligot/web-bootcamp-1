<!DOCTYPE HTML>
<html>

<head>
	<title>Input Output System</title>
	<link rel="stylesheet" href="w3.css" />
	
</head>

<body>

	<header>
		<div class="w3-bar w3-blue w3-top">
			<div class="w3-bar-item w3-padding-large">Input Output System</div>
			<div class="w3-bar-item w3-padding-large w3-right" id="statusMessage"></div>
		</div>
	</header>

	<div class="w3-row">
	
		<section class="w3-padding w3-half">
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
			<button class="w3-button w3-blue" onclick="submitData();">Submit</button>
			<br/><br/>
			<div class="w3-text-red" id="errorBox"></div>
			<div id="postedData"></div>
			<br/>
		</section>
	
		<section class="w3-padding w3-half">
			<br/><br/>
			<h2>Product Statistics</h2>
			<div id="transactionTable"></div>
		</section>
	
	</div>
	
	<footer>
		<div class="w3-small w3-black w3-padding w3-bottom">&copy; CirroLytix</div>
	</footer>

<script src="script.js"></script>

</body>

</html>