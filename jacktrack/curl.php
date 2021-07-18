<?php
$cinit = curl_init(); curl_setopt($cinit, CURLOPT_URL,"http://domain.tld/");
#-- timeout posle 30 sekundi --#
curl_setopt($cinit, CURLOPT_TIMEOUT, 30); curl_setopt($cinit, CURLOPT_RETURNTRANSFER,1);
$result=curl_exec ($cinit); curl_close ($cinit);
#-- Pretrazuje rezultate iz url-a --#
if($result) {
	#-- TODO: Regularni izrazi, ali odraditi ovo samo za top domene :) --#
	$regex = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
	$regex2 = '/\b(?:(?:https?|ftp|file):\/\/|www\.|ftp\.)[-A-Z0-9+&@#\/%=~_|$?!:,.]*[A-Z0-9+&@#\/%=~_|$]/i';
	preg_match_all($regex, $result, $output, PREG_SET_ORDER);
 	foreach($output as $item) {
 		#-- Prikazuje linkove :) --#
 		echo "<pre>";var_dump($item[0]);echo "</pre>"; 	
		#-- TODO: Ubaciti ovo u bazu :) --#
 	}
}
?>
