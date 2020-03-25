<?php
    include 'functions.php';
	include 'simple_html_dom.php';
	
	if ($_POST['itemToParse'] == 'https://ru.wikipedia.org') {
		$answer = curlQuery('https://ru.wikipedia.org/wiki/%D0%97%D0%B0%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0');
	} else {
		$answer = curlQuery($_POST['itemToParse']);
	}
	/* file_put_contents('code.txt', $answer); */
	
	$dom = str_get_html($answer);
	
	if ($_POST['dataType'] == 'картинки'){
		$kk = $dom->find('img');
		foreach ($kk as $element){
			if ($_POST['itemToParse'] == 'http://www.simzikov.site/'){
				echo "<img style=\"width:70px\" src=\"http://www.simzikov.site/".$element->src."\">".'<br>';
			} else if ($_POST['itemToParse'] == 'https://habr.com/ru/'){
				if (substr(strrev($element->src),3,1) != '.' && substr(strrev($element->src),4,1) != '.') {
					
				} else if(substr($element->src,0,4) == 'http' || substr($element->src,0,2) == '//'){
					echo "<img style=\"width:70px\" src=\"".$element->src."\">".'<br>';
				} else {
					echo "<img style=\"width:70px\" src=\"https://habr.com".$element->src."\">".'<br>';
				}
			} else {
				if (substr(strrev($element->src),3,1) != '.' && substr(strrev($element->src),4,1) != '.') {
					
				} else if(substr($element->src,0,4) == 'http' || substr($element->src,0,2) == '//'){
					echo "<img style=\"width:70px\" src=\"".$element->src."\">".'<br>';
				} else {
					echo "<img style=\"width:70px\" src=\"https://ru.wikipedia.org".$element->src."\">".'<br>';
				}
			}
	    }		
	} else if ($_POST['dataType'] == 'ссылки'){
		$kk = $dom->find('a');
		foreach ($kk as $element){
			if (trim($element->plaintext) == ''){
				continue;
			}
			if ($_POST['itemToParse'] == 'https://ru.wikipedia.org'){
				if (substr($element->href,0,4) == 'http' || substr($element->href,0,2) == '//'){
					echo "<a href=\"".$element->href."\" target=\"_blank\">".$element->plaintext.'</a><br>';
				} else {
					echo "<a href=\"https://ru.wikipedia.org".$element->href."\" target=\"_blank\">".$element->plaintext.'</a><br>';
				}
			} else {
				echo "<a href=\"".$element->href."\" target=\"_blank\">".$element->plaintext.'</a><br>';
			}
	    }	
	}