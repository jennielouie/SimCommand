<?php
header('Content-Type: application/json');
$jsondata = json_encode($_POST);
echo $jsondata;

// print_r($_FILES);

?>

