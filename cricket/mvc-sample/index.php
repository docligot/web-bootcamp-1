<?

include_once('views/view.php');
include_once('models/model.php');

// Front Controller

function check_user($page) {
	if (isset($_SESSION["user_name"]) && $_SESSION["user_name"] == 'CIRROLYTIX') {
		echo showPage($page);
	} else {
		if (!empty($_POST["user_pass"])) {
			if ($_POST["user_pass"] == 'CIRROLYTIX!') {
				$_SESSION["user_name"] = 'CIRROLYTIX';
				$_SESSION["login_message"] = ' ';
				echo showPage($page);
			} else {
				$_SESSION["login_message"] = 'Invalid passcode';
				echo showPage('login');
			}
		} else {
			$_SESSION["login_message"] = ' ';
			echo showPage('login');
		}
	}
}

function getPage() {
	if (isset($_GET["page"])) {
		$pageIn = $_GET["page"];
		switch ($pageIn) {
			case "title":
				$pageOut = "Title";
				break;
			case "author":
				$pageOut = "Author";
				break;	
			case "cricket":
				$pageOut = "Cricket";
				break;	
			case "logout":
				$pageOut = "Home";
				session_unset();
				session_destroy();
				break;
			default:
				$pageOut = "Home";
				break;
		}
	} else {
		$pageOut = "Home";
	}
	return $pageOut;
}

if (!isset($_SESSION)) session_start();
$page = getPage();
check_user($page);