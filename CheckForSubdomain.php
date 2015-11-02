<?php
checkSubdomain("http://google.com"); //Put domain name in here or $_SERVER['HTTP_HOST'] 


function checkSubdomain($url){
	$dotcount = substr_count($url,".");
	$urlParts = explode('.', $url);
	if ($urlParts[0] =="www" || $urlParts[0] == "http://www" || $urlParts[0] == "https://www") {
		if ($dotcount >= 3) {
			echo "Subdomain (http://www.test.domain.com)"; // http://www.subdomain.domain.com
		}else{
			echo "Domain (www.domain.com)"; // www.domain.com
		}
	}elseif($dotcount >= 2) {
			echo "Subdomain (subdomain.domain.com)"; // subdomain.domain.com
	}elseif($dotcount == 1){
			echo "Domain (domain.com)"; //domain.com
	}else{
			echo "Domain"; //domain (localhost)
	}
}



?>