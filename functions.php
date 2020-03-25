<?php
    function curlQuery($url, $ref='https://www.google.com.ua/'){
		$qq = curl_init();
		curl_setopt($qq, CURLOPT_URL, $url);
		curl_setopt($qq, CURLOPT_HEADER, 0);
		curl_setopt($qq, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:74.0) Gecko/20100101 Firefox/74.0");
		curl_setopt($qq, CURLOPT_REFERER, $ref);
		curl_setopt($qq, CURLOPT_RETURNTRANSFER, true);
		$data = curl_exec($qq);
		curl_close($qq);
		return $data;
	}
	
	
	
	
	
	
	