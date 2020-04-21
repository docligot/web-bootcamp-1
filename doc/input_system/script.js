function checkErrors() {
	var errors = '';
	var product = document.getElementById('product').value;
	var price = document.getElementById('price').value;
	var quantity = document.getElementById('quantity').value;	
	if (product == '') {
		errors += 'Please select a product.<br/>';
	}	
	if (price == '' || price <= 0) {
		errors += 'Please enter a valid price.<br/>';
	}
	if (quantity == '' || quantity <= 0) {
		errors += 'Please enter a valid quantity.<br/>';
	}
	return errors;
}

function calculateTotal() {
	document.getElementById('errorBox').innerHTML = checkErrors();
	if (checkErrors() == '') {
		var price = document.getElementById('price').value;
		var quantity = document.getElementById('quantity').value;	
		document.getElementById('totalBox').innerHTML = price * quantity;
	} else {
		document.getElementById('totalBox').innerHTML = '&nbsp;';	
	}
}

function submitData() {
	if (checkErrors() == '') {
		var submission = 'Data is valid.';
		var product = document.getElementById('product').value;
		var price = document.getElementById('price').value;
		var quantity = document.getElementById('quantity').value;
		var total = document.getElementById('totalBox').innerHTML;
		submission += '\n\nProduct: ' + product + '\nPrice: ' + price + '\nQuantity: ' + quantity + '\nTotal: ' + total;
		updateData(product, price, quantity, total); 
	} else {
		var submission = 'Please complete the data.';
	}
	window.alert(submission);
}

function updateData(product, price, quantity, total) {
	var request = "product=" + product + "&price=" + price + "&quantity=" + quantity + "&total=" + total;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var response = this.responseText;
			document.getElementById('postedData').innerHTML = response; 
			document.getElementById('statusMessage').innerHTML = 'Data updated.';
		} else {
			document.getElementById('statusMessage').innerHTML = 'Sending request...';
		}
	}
	xmlhttp.open("POST", "updateData.php", true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send(request); 
}
