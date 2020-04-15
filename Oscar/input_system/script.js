function checkErrors() {
	var errors = '';
	var product = document. getElementById('product')
	value;
	var price = document.getElementById('price').value
	var quantity = document.getElementById('quantity').value;
	
	if (product == '') {
		errors += 'Please select a product. <br/>';
	}
	
	if (price == '' || price == 0 || price < 0) {
		errors += 'Please enter a valid price.<br/>';
	}
	
	if (quantity == '' || quantity == 0 || quantity <0
	) {
		errors += 'Please enter a valid quantity.<br/>';
	}
	
	return errors;
}

function calculateTotal () {
	var errorBox = document.getElementById('errorBox'
	);
	ver totalBox = document.getElementById('totalBox'
	);
	errorBox.innerHTML = checkErrors();
	
	if (errorBox == '') {
		var price = document.getElementById('price').value;
		var quantity = document. getElementById('quantity').value;
		totalBox.innerHTML = (price * quantity).toString();
	} else {
		totalBox.innerHTML = '&nbsp;';
	}
}
