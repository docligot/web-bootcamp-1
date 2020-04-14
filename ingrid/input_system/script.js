function checkErrors() {
	var errors = '';
	var product = document.getElementById('product').value;
	var price = document.getElementById('price').value;
	var quantity = document.getElementById('quantity').value;
	
	if (product == '') {
		errors += 'Please select item.<br/>';
	}
	
	if (price == '' || price == 0 || price < 0) {
		errors += 'Please enter valid price.<br/>';
	}
	
	if (quantity == '' || quantity == 0 || quantity < 0) {
		errors += 'Please enter valid quantity.<br/>';
	}

	return errors;
	
}


function calculateTotal() {
	var errorBox = document.getElementById('errorBox');
	errorBox.innerHTML = checkErrors();
	var totalBox = document.getElementById('totalBox');
	errorBox.innerHTML = checkErrors();
	
	if (errorBox == '') {
		var price = document.getElementById('price').value;
		var quantity = document.getElementById('quantity').value;
		totalBox.innerHTML = price * quantity;		
	} else {
		totalBox.innerHTML = '&nbsp;';
	}
	
}