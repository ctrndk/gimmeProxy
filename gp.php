<?php
function h3ader(){
	echo "\n#################################################";
	echo "\n        GiMMe PROXY | By @CTRNDK  @[V.01]";
	echo "\n               [Support HTTPS]";
	echo "\n#################################################";
}
function getProxy(){
$url = "https://gimmeproxy.com/api/getProxy?get=true&supportsHttps=true&maxCheckPeriod=300";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$exe = curl_exec($ch);
curl_close($ch); 
$obj = json_decode($exe);
$info = $obj;
if($info){
	if ($obj->{'status_code'}!=NULL) {
		echo "\n#################################################";
		echo "\n KENA LIMIT BOSS, COBA MODE PESAWAT DULU :)";
		echo "\n STATUS CODE : ".$obj->{'status_code'}."\n PESAN : ".$obj->{'status_message'};
		echo "\n#################################################\n";
	}else{
		$supportsHttps 		= $obj->{'supportsHttps'}; 
		$country 			= $obj->{'country'}; 
		$ipPort 			= $obj->{'ipPort'}; 
		$type 				= $obj->{'type'};
		$curl 				= $obj->{'curl'};
		$speed 				= $obj->{'speed'};
		$verifiedSecondsAgo = $obj->{'verifiedSecondsAgo'};
		echo "\n RESULT :";
		echo "\n HTTPS       = ".$supportsHttps;
		echo "\n KODE NEGARA = ".$country;
		echo "\n IP:PORT     = ".$ipPort;
		echo "\n JENIS PROXY = ".$type;
		echo "\n CURL        = ".$curl;
		echo "\n KECEPATAN   = ".$speed;
		echo "\n VERIFIKASI  = ".$verifiedSecondsAgo." DETIK YANG LALU";
		echo "\n#################################################";
		echo "\n	       @CTRNDK - PENAT MEDIA 	";
		echo "\n#################################################\n";
	}
}
else{

		echo '\n      TIDAK DAPAT TERHUBUNG KE SERVER!';
		echo '\n    Cobalah kembali setelah beberapa menit!';
		echo '\n  Jika masih melihat PESAN INI setelah mencoba';
		echo '\n  sampai beberapa kali silahkan hubungi Kang SC';
		echo "\n#################################################\n";
}
		}
		system('clear');
		echo h3ader();
		echo getProxy();

