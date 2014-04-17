<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://private-1c15-scapi.apiary-mock.com/cases");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020"));
$response = curl_exec($ch);
curl_close($ch);

$json = json_decode($response);
var_dump($json);

?>