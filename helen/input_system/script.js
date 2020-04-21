function checkErrors() {
	var errors = '';
	var product = document.getElementById('product').value;
	var price = document.getElementById('price').value;
	var quantity = document.getElementById('quantity').value;

	if (product == '') {
		errors += 'Please select a product.<br/>';
	}
	if (price == '' || price <= 0) {
		errors += 'Please select a valid price.<br/>';
	}
	if (quantity == '' || quantity <= 0) {
		errors += 'Please select a valid quantity.<br/>';
	}
	return errors;

}

function calculateTotal() {
	document.getElementById('errorBox').innerHTML = checkErrors();
	if(checkErrors() == '') {
		var price = document.getElementById('price').value;
		var quantity = document.getElementById('quantity').value;
		document.getElementById('totalBox').innerHTML = price*quantity;			
	}
	else {
		document.getElementById('totalBox').innerHTML = '&nbsp;';

	}
}


function submitData() {
	if(checkErrors() == '') {
		var submission = 'Data is valid.';
		var product = document.getElementById('product').value;
		var price = document.getElementById('price').value;
		var quantity = document.getElementById('quantity').value;
		var total = document.getElementById('totalBox').innerHTML;
		submission += '\n\nProduct:' + product + '\nPrice: ' + price + '\nQuantity: ' + quantity + '\nTotal: ' + total;

	} else {
		var submission = 'Please complete the data';
		}
	window.alert(submission);

}
