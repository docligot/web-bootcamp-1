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
	var errorBox = document.getElementById('errorBox');
	errorBox.innerHTML = checkErrors();
	if (errorBox != '') {
		return;
	} else {
		var price = Number(document.getElementById('price').value);
		var quantity = Number(document.getElementById('quantity').value);
		document.getElementById('totalBox').innerHTML = price * quantity);
	}
}