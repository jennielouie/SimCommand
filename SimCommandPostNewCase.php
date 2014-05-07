<?php
header('Content-Type: application/json');
$jsondata = json_encode($_POST);
echo $jsondata;


// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, "http://private-1c15-scapi.apiary-mock.com/cases");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
// curl_setopt($ch, CURLOPT_HEADER, FALSE);
// curl_setopt($ch, CURLOPT_POST, TRUE);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020"));
// $response = curl_exec($ch);
// curl_close($ch);

// var_dump($response);
// print_r($_FILES);

?>

