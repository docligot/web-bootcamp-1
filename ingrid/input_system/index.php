<!DOCTYPE HTML>	
<html>

<head>
	<title>Input Output Web System</title>
	<link rel="stylesheet" href="w3.css" />
</head>

<body>

	<header>
		<div class="w3-red w3-padding-large w3-top">
			<div class="w3-bar-item">Online Ordering System</div>
			<div id="statusMessage" class="w3-bar-item w3-right"></div>
		</div>
	</header>

	<div class="w3-row">

		<section class="w3-padding w3-half">
			<br/><br/>
			<h2>Submission Form</h2>
			<select id="product" class="w3-select" onchange="calculateTotal();">
				<option value="">Select Product</option>
				<option value="Cheeseburger">Cheeseburger</option>
				<option value="Chicken">Chicken</option>
				<option value="Fries">Fries</option>
				<option value="Spaghetti">Spaghetti</option>
				<option value="Float">Float</option>
				<option value="Ice Cream">Ice Cream</option>
			</select><br/><br/>
			Enter Price: <input id="price" class="w3-input" type="number" min="0" onchange="calculateTotal();"></input><br/>
			Enter Quantity: <input id="quantity" class="w3-input" type="number" min="0" onchange="calculateTotal();"></input><br/>
			Total Sales: <div id="totalBox" class="w3-input">&nbsp;</div><br/>
			<button class="w3-button w3-red" onclick="submitData();">Submit</button>
			<br/><br/>
			<div id="errorBox" class="w3-text-red"></div>
			<div id="postedData"> </div>
			
			<!--<br></br><br></br><hr/>-->
		</section>

		<section class="w3-padding w3-half">
		<br/><br/>
		<h2>Transaction Log</h2>
		<br/>
		<div id="transactionTable"></div>
		</section>
		
		<section class="w3-padding w3-half">
			<br/><br/>
			<h2>Product Statistics</h2>
			<br></br><br></br>
		</section>
	</div>

	<footer>
	<div class="w3-small w3-red w3-padding w3-bottom">
	&copy; Cirrolytix Research Services
	</div>
	</footer>

<script src="script.js"></script>
</body>

</html>


