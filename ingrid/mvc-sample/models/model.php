<?

// Model

function getData($dataIn) {	
	switch ($dataIn) {
		case "Title":
			$dataOut = "List of Titles.";
			break;
		case "Author":
			$dataOut = "List of Authors.";
			break;
		case "Cricket":
			$dataOut = "Cricket's Data.";
			break;
		case "Home":
			$dataOut = "Home";
		default:
			$dataOut = "Home";
			break;
	}
	return $dataOut;
}