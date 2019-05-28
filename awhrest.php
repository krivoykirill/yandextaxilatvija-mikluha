<?php

if ( (isset($_POST["utm_campaign"])) && (isset($_POST["utm_medium"])) && (isset($_POST["utm_source"])) ){
    $campaign = $_POST["utm_campaign"];
    $medium = $_POST["utm_medium"];
    $source = $_POST["utm_source"];
}
else {
    $campaign='';
    $medium='';
    $source='';
}
if (isset($_POST["car_choice"])){
	$choice = $_POST["car_choice"];
	if ($choice == 'own'){
		$choice='savu mashinu';
	}
	if ($choice == 'company'){
		$choice='kompanijas mashinu';
	}
}

if ( (isset($_POST["name"])) && (isset($_POST["number"])) && (isset($_POST["lang"])) ){

	

	$name = $_POST["name"];
	$number= $_POST["number"];
	$lang=$_POST["lang"];
	$queryUrl = 'https://b24-b5f0f0.bitrix24.eu/rest/1/XXXXXXXXXXXXXXXXX/crm.lead.add/';
	$queryData = http_build_query(array(
		'fields' => array(
		"TITLE" => $name.' - '.$number.' ar '.$choice,
		"NAME" => $name,
		"STATUS_ID" => "NEW",
		"OPENED" => "Y",
		"ASSIGNED_BY_ID" => 1,
		"UTM_CAMPAIGN"=> $campaign,
		"UTM_SOURCE" => $source,
		"UTM_MEDIUM" => $medium,
		"PHONE" => array(array("VALUE" => $number, "VALUE_TYPE" => "WORK" ))
		),
		'params' => array("REGISTER_SONET_EVENT" => "Y")
	));

	$curl = curl_init();
	curl_setopt_array($curl, array(
	CURLOPT_SSL_VERIFYPEER => 0,
	CURLOPT_POST => 1,
	CURLOPT_HEADER => 0,
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => $queryUrl,
	CURLOPT_POSTFIELDS => $queryData,
	));
	
	

	$result = curl_exec($curl);
	curl_close($curl); 
	if ($lang=='ru'){
		//echo $lang,$name, $number;
		header ('Location: http://yandextaxilatvija.lv/rsuccess.html');
	}
	else if ($lang=='lv'){
		//echo $lang,$name, $number;
		header('Location: http://yandextaxilatvija.lv/success.html');
	}
	else {
		header('HTTP 1.1/404 Not Found');
	}
}
else {
	header('Location: http://yandextaxilatvija.lv/');
}


?>