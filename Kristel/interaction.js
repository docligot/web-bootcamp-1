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

function get_answer() {

	var name = document.getElementById('name').value;
	var age = document.getElementById('age').value;
	var food = document.getElementById('food').value;

	console.log(name);
	console.log(age);
	console.log(food);
	
	call_server(name, age, food);

}

function call_server(name, age, food) {

	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById('answer_box').innerHTML = this.responseText;
		} else {
			document.getElementById('answer_box').innerHTML = '<p>Loading...</p>';
		}
	}
	
	xmlhttp.open("GET", "answer.php?name=" + name + "&age=" + age + "&food=" + food, true);
	xmlhttp.send();

}