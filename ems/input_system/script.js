function checkErrors() {
	var errors = '';
	var product = document.getElementById('product').value;
	var price = document.getElementById('price').value;
	var quantity = document.getElementById('quantity').value;
	
	if (product == '') {
		errors += 'Please select a product.<br/>';
	}
	
	if (price == '' || price == 0 || price < 0) {
		errors += 'Please enter a valid price.<br/>';
	}
	
	if (quantity == '' || quantity == 0 || quantity < 0) {
		errors += 'Please enter a valid quantity.<br/>';
	}
	
	return errors;
	
}

function calculateTotal() {
	document.getElementById('errorBox').innerHTML = checkErrors();
	if (checkErrors() == '') {
		var price = document.getElementById('price').value;
		var quantity = document.getElementById('quantity').value;	
		document.getElementById('totalBox').innerHTML = quantity * price;
	} else {
		document.getElementById('totalBox').innerHTML = '&nbsp;';
	}

}

function submitData() {
	if(checkErrors()== '') {
		var submission = 'Data is valid.';
		var product = document.getElementById('product').value;
		var price = document.getElementById('price').value;
		var quantity = document.getElementById('quantity').value;
		var total = document.getElementById('totalBox').innerHTML;
		submission += '\n\nProduct: ' + product + '\nPrice: ' + price + '\nQuantity: ' + quantity + '\nTotal: ' + total;
		updateData(product, price, quantity, total);
		transactionTable();
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
	xmlhttp.open("POST","updateData.php", true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send(request);
}


function transactionTable() {

var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			var response = JSON.parse(this.responseText);
			var period = [];
			var product = [];
			var price = [];
			var quantity = [];
			var total = [];
			for (var i in response) {
				period.push(response[i].period);
				product.push(response[i].product);
				price.push(response[i].price);
				quantity.push(response[i].quantity);
				total.push(response[i].total);			
			}
			
			createTable(period, product, price, quantity, total);
			
			document.getElementById('statusMessage').innerHTML = 'Data displayed.';
		} else {
			document.getElementById('statusMessage').innerHTML = 'Requesting Data...';
		}
	}
	xmlhttp.open("GET","transactionTable.php", true);
	xmlhttp.send();
	
	
}


function createTable(period, product, price, quantity, total)
{
	var output = '<table class="w3-table w3-striped">';
	output += '<tr><th>Period</th><th>Product</th><th>Price</th><th>Quantity</th><th>Total</th></tr>';
	
	for (var i in period) {
		output +=
		'<tr><td>' + period[i] + '<tr><td>' + product[i] + '<tr><td>' + price[i] + '<tr><td>' + quantity[i] + '<tr><td>' + total[i] + '<tr><td>';
	}		
	
	output += '</table>';

 document






