<!DOCTYPE HTML>

<html>

<head>
<title>H Sample Webapp</title>

</head>

<style>
.lds-heart {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  transform: rotate(45deg);
  transform-origin: 40px 40px;
}
.lds-heart div {
  top: 32px;
  left: 32px;
  position: absolute;
  width: 32px;
  height: 32px;
  background: #fff;
  animation: lds-heart 1.2s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
}
.lds-heart div:after,
.lds-heart div:before {
  content: " ";
  position: absolute;
  display: block;
  width: 32px;
  height: 32px;
  background: #fff;
}
.lds-heart div:before {
  left: -24px;
  border-radius: 50% 0 0 50%;
}
.lds-heart div:after {
  top: -24px;
  border-radius: 50% 50% 0 0;
}
@keyframes lds-heart {
  0% {
    transform: scale(0.95);
  }
  5% {
    transform: scale(1.1);
  }
  39% {
    transform: scale(0.85);
  }
  45% {
    transform: scale(1);
  }
  60% {
    transform: scale(0.95);
  }
  100% {
    transform: scale(0.9);
  }
}
</style>

<!--<link rel="stylesheet" href="styling.css" />-->
<link rel="stylesheet" href="w3.css" />

<body>
	<header class="w3-top w3-padding w3-indigo">
		<div class="w3-large">H Sample Web App</div>
	</header>

	<section>
		<img  src="virus.png" style="width: 100%"; max-height=300px; />
	</section>

	<section class="w3-padding-large w3-center">
		<h1>This is a sample website</h1>
	</section>

	<section class="w3-padding-large">
		<div class="w3-row">
		<div><p class="w3-half w3-padding">Lorem ipsum keme keme keme 48 years quality control ng at bakit urky kirara urky tungril tamalis lulu chapter oblation shonget makyonget pinkalou otoko at bakit ganders waz jongoloids bakit sa at nang otoko jongoloids sudems at bakit na mashumers kasi lulu 48 years at nang chopopo na ang krang-krang chipipay keme Gino wiz Mike ano wrangler bakit bakit buya jongoloids warla bakit at ang ganda lang pamentos thunder shala ano katagalugan makyonget jutay pranella at nang at bakit at bakit at bakit katagalugan jowabella sangkatuts pranella ng ugmas ano sa shokot nang shonga shonget sudems pinkalou bella Cholo na ang neuro antibiotic ano at nang krang-krang makyonget pamin daki antibiotic na na ang otoko chuckie na jupang-pang jowabelles bakit at nang at bakit jowa cheapangga.</p></div>

		<div><p class="w3-half w3-padding">Lorem ipsum keme keme keme 48 years quality control ng at bakit urky kirara urky tungril tamalis lulu chapter oblation shonget makyonget pinkalou otoko at bakit ganders waz jongoloids bakit sa at nang otoko jongoloids sudems at bakit na mashumers kasi lulu 48 years at nang chopopo na ang krang-krang chipipay keme Gino wiz Mike ano wrangler bakit bakit buya jongoloids warla bakit at ang ganda lang pamentos thunder shala ano katagalugan makyonget jutay pranella at nang at bakit at bakit at bakit katagalugan jowabella sangkatuts pranella ng ugmas ano sa shokot nang shonga shonget sudems pinkalou bella Cholo na ang neuro antibiotic ano at nang krang-krang makyonget pamin daki antibiotic na na ang otoko chuckie na jupang-pang jowabelles bakit at nang at bakit jowa cheapangga.</p></div>
		</div>
		<div class="w3-center">
		<button class="w3-button w3-blue" onclick="show_hidden();">Toggle Hidden</button>
		</div>
	</section>

	<section id="hidden-section" class="w3-padding-large w3-center w3-black" style="display:none;">
		<div class="w3-xxlarge">This is the hidden section</div>
	</section>

		<section class="w3-grey w3-padding-large">
				<div class="w3-third w3-padding">
			<select id="food" class="w3-select" onchange="get_food();">
				<option value="">Select Option</option>
				<option value="strawberries">Strawberries</option>			
				<option value="orange">Orange</option>
				<option value="grapes">Grapes</option>	
			</select>
		</div>

		<div class="w3-row">
		<div id="food_facts" class="w3-third w3-padding">&nbsp; </div>


		<div><p class="w3-third w3-padding">Lorem ipsum keme keme keme 48 years quality control ng at bakit urky kirara urky tungril tamalis lulu chapter oblation shonget makyonget pinkalou otoko at bakit ganders waz jongoloids bakit sa at nang otoko jongoloids sudems at bakit na mashumers kasi lulu 48 years at nang chopopo na ang krang-krang chipipay keme Gino wiz Mike ano wrangler bakit bakit buya jongoloids warla bakit at ang ganda lang pamentos thunder shala ano katagalugan makyonget jutay pranella at nang at bakit at bakit at bakit katagalugan jowabella sangkatuts pranella ng ugmas ano sa shokot nang shonga shonget sudems pinkalou bella Cholo na ang neuro antibiotic ano at nang krang-krang makyonget pamin daki antibiotic na na ang otoko chuckie na jupang-pang jowabelles bakit at nang at bakit jowa cheapangga.</p></div>

		<div><p class="w3-third w3-padding">Lorem ipsum keme keme keme 48 years quality control ng at bakit urky kirara urky tungril tamalis lulu chapter oblation shonget makyonget pinkalou otoko at bakit ganders waz jongoloids bakit sa at nang otoko jongoloids sudems at bakit na mashumers kasi lulu 48 years at nang chopopo na ang krang-krang chipipay keme Gino wiz Mike ano wrangler bakit bakit buya jongoloids warla bakit at ang ganda lang pamentos thunder shala ano katagalugan makyonget jutay pranella at nang at bakit at bakit at bakit katagalugan jowabella sangkatuts pranella ng ugmas ano sa shokot nang shonga shonget sudems pinkalou bella Cholo na ang neuro antibiotic ano at nang krang-krang makyonget pamin daki antibiotic na na ang otoko chuckie na jupang-pang jowabelles bakit at nang at bakit jowa cheapangga.</p></div>
		</div>
		</div>
	</section>

		<section class="w3-dark-grey w3-padding-large">
		<div class="w3-row">
		<div><p class="w3-half w3-padding"><img  src="virus.png" style="width: 100%"; max-height=300px; /></p></div>

		<div><p class="w3-quarter w3-padding">Lorem ipsum keme keme keme 48 years quality control ng at bakit urky kirara urky tungril tamalis lulu chapter oblation shonget makyonget pinkalou otoko at bakit ganders waz jongoloids bakit sa at nang otoko jongoloids sudems at bakit na mashumers kasi lulu 48 years at nang chopopo na ang krang-krang chipipay keme Gino wiz Mike ano wrangler bakit bakit buya jongoloids warla bakit at ang ganda lang pamentos thunder shala ano katagalugan makyonget jutay pranella at nang at bakit at bakit at bakit katagalugan jowabella sangkatuts pranella ng ugmas ano sa shokot nang shonga shonget sudems pinkalou bella Cholo na ang neuro antibiotic ano at nang krang-krang makyonget pamin daki antibiotic na na ang otoko chuckie na jupang-pang jowabelles bakit at nang at bakit jowa cheapangga.</p></div>

		<div><p class="w3-quarter w3-padding">Lorem ipsum keme keme keme 48 years quality control ng at bakit urky kirara urky tungril tamalis lulu chapter oblation shonget makyonget pinkalou otoko at bakit ganders waz jongoloids bakit sa at nang otoko jongoloids sudems at bakit na mashumers kasi lulu 48 years at nang chopopo na ang krang-krang chipipay keme Gino wiz Mike ano wrangler bakit bakit buya jongoloids warla bakit at ang ganda lang pamentos thunder shala ano katagalugan makyonget jutay pranella at nang at bakit at bakit at bakit katagalugan jowabella sangkatuts pranella ng ugmas ano sa shokot nang shonga shonget sudems pinkalou bella Cholo na ang neuro antibiotic ano at nang krang-krang makyonget pamin daki antibiotic na na ang otoko chuckie na jupang-pang jowabelles bakit at nang at bakit jowa cheapangga.</p></div>

		</div>
	</section>

	<footer class="w3-bottom w3-black w3-padding">
		<div>&copy; Cirrolytix</div>
	</footer>


<!-- Use the ID hidden-section to show here -->
<!-- Asynchronous Javascript and XML --> 
	<script>
		function show_hidden() {
			var hidden_section=document.getElementById('hidden-section').style.display;
			if(hidden_section=='none') {
				document.getElementById('hidden-section').style.display='block';
			}
			else {
				document.getElementById('hidden-section').style.display='none';
			}

		}

		function get_food() {
			var food = document.getElementById('food').value;
			console.log(food);
			if(food) {
				get_food_facts(food);
			}
		}


		function get_food_facts(food) {
			console.log(food + 'sending');
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					document.getElementById('food_facts').innerHTML = this.responseText;
				} else {
					document.getElementById('food_facts').innerHTML = 'Loading food facts...';
				}
			}
			xmlhttp.open("GET","food.php?food=" + food, true)
			xmlhttp.send();
		}

	</script>


</body>

</html>
