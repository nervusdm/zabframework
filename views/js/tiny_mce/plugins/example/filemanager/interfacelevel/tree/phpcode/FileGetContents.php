<?php
/****
É necessário ter a lib do curl instalada no servidor
*****/
function FileGetContents($url)
{
	$ch = curl_init();

	curl_setopt ($ch, CURLOPT_URL, $url);
	curl_setopt ($ch, CURLOPT_HEADER, 0);

	ob_start();

	curl_exec ($ch);
	curl_close ($ch);
	$string = ob_get_contents();

	ob_end_clean();
	
	return $string;     
}
?>