<!DOCTYPE HTML>

<html>

<head>
	<title>Sample Webapp</title>
	<!--<link rel="stylesheet" href="styling.css" />-->
	<link rel="stylesheet" href="w3.css" />
</head>

<style>
.lds-hourglass {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-hourglass:after {
  content: " ";
  display: block;
  border-radius: 50%;
  width: 0;
  height: 0;
  margin: 8px;
  box-sizing: border-box;
  border: 32px solid #fff;
  border-color: #fff transparent #fff transparent;
  animation: lds-hourglass 1.2s infinite;
}
@keyframes lds-hourglass {
  0% {
    transform: rotate(0);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
  }
  50% {
    transform: rotate(900deg);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  100% {
    transform: rotate(1800deg);
  }
}
</style>


<body>

	<header class="w3-top w3-padding w3-indigo">
		<div class="w3-large">Sample Web App</div>
	</header>
	
	<section>
		<img src="virus.png" style="width: 100%; max-height: 300px;"/>	
	</section>

	<section class="w3-padding-large w3-center">
		<h1>This is a sample website</h1>
	</section>

	<section class="w3-padding-large">
		<div class="w3-row">
			<div class="w3-half w3-padding"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>
			<div class="w3-half w3-padding"><img src="virus.png" style="width: 100%; max-height: 300px;"/></div>
		</div>
		<div class="w3-center"><button class="w3-button w3-blue" onclick="show_hidden();">Toggle Hidden</button></div>
	</section>
	
	<section id="hidden-section" class="w3-padding-large w3-center w3-black" style="display: none;">

		<div class="w3-xxlarge">This is the hidden section</div>
	
	</section>

	<section class="w3-grey w3-padding-large">
		<div class="w3-row">
			<div class="w3-third w3-padding"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>
			<div class="w3-third w3-padding"><img src="virus.png" style="width: 100%; max-height: 300px;"/></div>
			<div class="w3-third w3-padding"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>
		</div>
	</section>

	<section class="w3-dark-grey w3-padding-large">
		<div class="w3-padding">
			<select id="food" class="w3-select" onchange="get_food();">
				<option value="">Select Product:</option>
				<option value="hamburger">Hamburger</option>
				<option value="cheeseburger">Cheeseburger</option>
				<option value="mcchicken">McChicken</option>
				<option value="big-mac">Big Mac</option>		
			</select>
		</div>
		<div class="w3-row">
			<div id="food_facts" class="w3-third w3-padding">&nbsp; </div>
			<div class="w3-third w3-padding"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>
			<div class="w3-third w3-padding"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>
		</div>
	</section>

	<footer class="w3-bottom w3-black w3-padding">
		<div>&copy; Cirrolytix</div>
	</footer>

<script>
	function show_hidden() {
		var hidden_section = document.getElementById('hidden-section').style.display;
		if (hidden_section == 'none') {
			document.getElementById('hidden-section').style.display = 'block';
		} else {
			document.getElementById('hidden-section').style.display = 'none';
		}
	}
	
	function get_food() {
		var food = document.getElementById('food').value;
		console.log(food);
		if (food) {
			get_food_facts(food);
		}		
	}

	function get_food_facts(food) {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
				document.getElementById('food_facts').innerHTML = this.responseText;
			} else {
				document.getElementById('food_facts').innerHTML = '<div class="lds-hourglass"></div>';
			}	
		};
		xmlhttp.open("GET", "food.php?food=" + food, true);
		xmlhttp.send();
	}

</script>

</body>

</html>