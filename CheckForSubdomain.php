<?php
checkSubdomain("http://google.com"); //Put domain name in here or $_SERVER['HTTP_HOST'] 


function checkSubdomain($url){
	$dotcount = substr_count($url,".");
	$urlParts = explode('.', $url);
	if ($urlParts[0] =="www" || $urlParts[0] == "http://www" || $urlParts[0] == "https://www") {
		if ($dotcount >= 3) {
			echo "Subdomain"; // http://www.subdomain.domain.com
		}else{
			echo "Domain"; // www.domain.com
		}
	}else{
		if ($dotcount >= 2) {
			echo "Subdomain"; // subdomain.domain.com

		}else{
			echo "Domain"; //domain.com
		}
	}
}



?>