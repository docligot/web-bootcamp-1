function popup() {
	window.alert('This is an alert');
}

function heading_red() {
	document.getElementById('heading').style.color = 'red';
}

function heading_blue() {
	document.getElementById('heading').style.color = 'blue';	
}

function toggle_paragraph() {
	
	var paragraph = document.getElementById('paragraph');
	
	console.log(paragraph.style.display);
	
	if (paragraph.style.display == 'none') {
		paragraph.style.display = 'block';
	} else {
		paragraph.style.display = 'none';
	}
	
}

function say_hi() {
	var person = document.getElementById('selector').value;
	console.log(person);
	if (person != "") {
		var greeting = 'Hello ' + person;
		window.alert(greeting);
	}
}