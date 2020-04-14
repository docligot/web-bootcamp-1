<!DOCTYPE HTML>

<html>

<head>
	<title>This is a practice website.</title>

	<link rel="stylesheet" href="formatting.css" />
	<link rel="stylesheet" href="w3.css" />
	

</head>

<body>

	<section id="menubar" class="w3-bar w3-black w3-top">
			<a href="another.html"><div class="w3-bar-item w3-button">Another Page</div></a>
			<a href="#"><div class="w3-bar-item w3-button">Home</div></a>
	</section>

	<section id="header" class = "w3-center">
	
		<img src="virus.png" style="width: 100%; max-height: 500px;"/>
		
		<h1 class="w3-center">This is a practice website.</h1>
			
		<div class ="w3-button w3-indigo" onclick = "showPopup();">Show popup</div>
	</section>
	
	<section id="mainbody" class="w3-row">
	
		<div class="w3-half w3-padding">
			<div class = "w3-padding w3-red"><p>Red</p></div>
			<div class = "w3-padding w3-orange"><p>Orange</p></div>
			<div class = "w3-padding w3-yellow"><p>Yellow</p></div>
			<div class = "w3-padding w3-green"><p>Green</p></div>
		</div>

		<div class="w3-half w3-padding">
			<div class = "w3-padding w3-blue"><p>Blue</p></div>
			<div class = "w3-padding w3-indigo"><p>Indigo</p></div>
			<div class = "w3-padding w3-deep-purple"><p>Violet</p></div>
			<div class = "w3-padding w3-amber"><p>Gold</p></div>
		</div>
	
	</section>

	<section class="w3-row">
		
		<div class="w3-third w3-padding">
			<p>This is a Chart i'd like you to see.</p></div>
		
		<div class="w3-twothird w3-padding">
			<? include('./charts/index.html'); ?>
			</div>
	
	
	</section>

	<section class="w3-row">
	
		<div class="w3-quarter w3-padding">
			<p id="first-paragraph" class="blue-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		</div>
		
		<div class="w3-half w3-padding">
			<? include("./maps/index.html");?>
			</div>
	
		
		<div class="w3-quarter w3-padding">
			<p class="yellow-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		</div>
	
	
	</section>
	
	
	<section class="w3-row">
		
		<div class="w3-third w3-padding">
			<p>This is a Chart i'd like you to see.</p></div>
		
		<div class="w3-twothird w3-padding">
			<? include('./db_chart/index.html'); ?>
			</div>
	
	
	</section>

	<footer class = "w3-black w3-padding w3-center">
		<p>&copy; 2020 Sample Website</p>
		
	<section id= "popup" class = "w3-modal">
		<div class = "w3-modal-content">
			<div class="w3-bar w3-black">
				<div class= "w3-bar-item w3-right w3-button" onclick ="hidePopup();">
				X</div>
			
			</div>
			<div class = 'w3-padding'>
				<p>This is the main body of the popup.</p>
			</div>
		</div>
		
	</section>
	
	
	
	
<script>
	
	function showPopup() {
		document.getElementById('popup').style.display = 'block';
	
	}

	function hidePopup() {
		document.getElementById('popup').style.display = 'none';
	
	}



</script>
</body>

</html>