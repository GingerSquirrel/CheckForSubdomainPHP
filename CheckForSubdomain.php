<?php
checkSubdomain("http://google.com"); //Put domain name in here or $_SERVER['HTTP_HOST'] 

function checkSubdomain($url){
	$dotcount = substr_count($url,"."); //Counts the dots in the URL
	$urlParts = explode('.', $url); // Breaks down the URL
	if (($urlParts[0] == "www" OR "http://www" OR "https://www")) { //Checks the first part of the URL
		if ($dotcount >= 3) {
			echo "Subdomain";
		}else{
			if ($dotcount >= 2) {
				echo "Subdomain";
			}else{
				echo "Domain";
			}
		}
	}else{
		echo "Something has gone wrong...";
	}
}


?>