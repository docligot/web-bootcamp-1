<?php
if ($_GET) {
	$file_requested = $_GET['file'];
	switch ($file_requested) {
		case "covid_rt" :
			echo extractFile("covid_rt.csv");
			break;
		case "cfr4_ci" :
			echo extractFile("cfr4_ci_type2.csv");
			break;
		case "recov_rate" :
			echo extractFile("recov_rate.csv");
			break;
		case "pchange_cases" :
			echo extractFile("pchange_cases.csv");
			break;
		case "pchange_deaths" :
			echo extractFile("pchange_deaths.csv");
			break;
		case "pchange_recov" :
			echo extractFile("pchange_recov.csv");
			break;
		case "doubling_cases" :
			echo extractFile("doubling_cases.csv");
			break;
		case "doubling_deaths" :
			echo extractFile("doubling_deaths.csv");
			break;
		case "doubling_recov" :
			echo extractFile("doubling_recov.csv");
			break;
		case "active_cases" :
			echo extractFile("active_cases.csv");
			break;
		case "count_death_recov" :
			echo extractFile("count_death_recov.csv");
			break;
		case "diff_active" :
			echo extractFile("diff_active.csv");
			break;
		case "diff_death_recov" :
			echo extractFile("diff_death_recov.csv");
			break;
    case "tessa" :
      echo extractFile("tessa.csv");
      break;
		default:
			break;
	}
}

function extractFile($filename) {
	$file = fopen($filename, "r");
	while (! feof($file)) {
		$result[] = (fgetcsv($file));
	}
	return json_encode($result);
	fclose($file);
}
