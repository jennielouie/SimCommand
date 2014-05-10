<?php
include_once('SimCommandTemplates.php');

//retrieve assessments for given case_id

if(isset($_GET["state_id"])){
  $stateID = $_GET["state_id"];
}
if(isset($_GET["case_id"])){
  $specificCaseID = $_GET["case_id"];
}
$url = "http://private-1c15-scapi.apiary-mock.com/states/$stateID";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020"));
$httpresponse = curl_exec($ch);
curl_close($ch);

$json = file_get_contents('sampleGETonestate.json');
$jsondecoded=json_decode($json, true);
// $json = json_decode($httpresponse, true);
$state=$jsondecoded["body"];

// create form array

$form = array();
$form['header'] = $editStateHeader;
//retrieve Case ID number to display in page heading
$editStateHeader->caseID = $specificCaseID;
$action ="/simCommandPutState.php?state_id=$stateID";
$editStateHeader->formAction = $action;
$editStateHeader->stateID = $stateID;

// $form['stateTab'] = $stateTab;
$form['state'] = $stateToEdit;

$form['closing'] = $closingEditState;

  //Iterate through each key:value pair in the json response object for a particular case ID.


    // create a new assessment, and then add to assessment array
    $stateToEdit = new Template('mkOneStateObjectforEdit.php', array(
      'caseID'=>$state['case_id'],
      'id'=>$state['id'],
      'notes'=>$state['notes'],
      'general'=>$state['general'],
      'temp_celcius'=>$state['temp_celcius'],
      'resp_rate'=>$state['resp_rate'],
      'heart_rate'=>$state['heart_rate'],
      'bpSystolic'=>$state['bp_systolic'],
      'bpDiastolic'=>$state['bp_diastolic'],
      'spo2'=>$state['spo2'],
      'weight'=>$state['weight'],
      'pain_score'=>$state['pain_score'],
      'other'=>$state['other'],
      'discussion_items'=>$state['discussion_items'],
      'type'=>'oneState'
    ));

$form['state'] = $stateToEdit;


// Finally, render form with case-specific data pre-loaded in fields.
render_formarray($form);


?>