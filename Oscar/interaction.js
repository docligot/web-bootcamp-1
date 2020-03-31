

	function popup() {
		window.alert('this is an alert');
	}

	function heading_red() {
		document.getElementById('heading').style.color = 'red';
	}
	
	function heading_blue() {
		document.getElementById('heading').style.color = 'blue';
	}
	
	function toggle_paragraph() {
		var paragraph = document.getElementById('paragraph');
		if (paragraph.style.display == 'none') {
			paragraph.style.display = 'block';
		}else{
			paragraph.style.display = 'none';
		}	
	}
	
	function say_hi() {
		var person = document.getElementById('selector').value;
		
		if (person != "") {
			var person = document.getElementById(
			'selector').value;
			var greeting = 'Hello ' + person;
			window.alert(greeting);
		}
	}