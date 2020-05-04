<?

// View

function showPage($viewIn) {
	$htmlBegin = include_once('htmlBegin.php');
	$htmlMenu = include_once('htmlMenu.php');
	$htmlEnd = include_once('htmlEnd.php');
	$htmlContent = htmlContent($viewIn);
	$viewOut = $htmlBegin . $htmlMenu . $htmlContent . '<hr/>'. getData($viewIn) . $htmlEnd;
	return $viewOut;	
}

function htmlContent($contentIn) {
	if ($contentIn == 'login') {
		return include_once('login.php');
	} else {
		if ($contentIn == 'Cricket') {
			return include_once('cricket.php');
		} else {
			return $contentIn;
		}
	}
}
