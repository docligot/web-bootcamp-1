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