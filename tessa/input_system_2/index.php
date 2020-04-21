<!DOCTYPE HTML>
<html>

<head>
	<title>Input Output System</title>
	<link rel="stylesheet" href="w3.css" />
</head>

<style>
.lds-ring {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-ring div {
  box-sizing: border-box;
  display: block;
  position: absolute;
  width: 64px;
  height: 64px;
  margin: 8px;
  border: 8px solid #fcf;
  border-radius: 50%;
  animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  border-color: #fcf transparent transparent transparent;
}
.lds-ring div:nth-child(1) {
  animation-delay: -0.45s;
}
.lds-ring div:nth-child(2) {
  animation-delay: -0.3s;
}
.lds-ring div:nth-child(3) {
  animation-delay: -0.15s;
}
@keyframes lds-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

</style>


<body>

	<header>
		<div class="w3-pink w3-padding-large w3-top">
      <div class="w3-bar-item">Input Output System</div>
      <div id="statusMessage" class="w3-bar-item w3-right"></div>

    </div>
	</header>

  <div class="w3-row w3-padding-large">

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
		<button class="w3-button w3-green" onclick="submitData();">Submit</button>
		<br/><br/>
		<div class="w3-text-red" id="errorBox"></div>
    <div id="postedData"></div>
	</section>

  <section class="w3-padding w3-half" style="margin-bottom:10px">
    <br/><br/>
    <h2>Transaction Log</h2>
    <br/>
    <div id="spinner" class="w3-center"></div>
    <div id="transactionTable" style="overflow: hidden;" class="w3-center"></div>
  </section>
</div>
  <footer>
    <div class="w3-small w3-black w3-padding w3-bottom">&copy; CirroLytix</div>
  </footer>

  <script src="script.js"></script>

</body>
</html>
