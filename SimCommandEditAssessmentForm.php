<?php
include_once('SimCommandTemplates.php');

//retrieve assessments for given case_id

if(isset($_GET["assessmentitem_id"])){
  $specificID = $_GET["assessmentitem_id"];
}
if(isset($_GET["case_id"])){
  $specificCaseID = $_GET["case_id"];
}
$url = "http://private-1c15-scapi.apiary-mock.com/assessmentitems/$specificID";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020"));
$httpresponse = curl_exec($ch);
curl_close($ch);



$json = json_decode($httpresponse, true);
$assessment=$json["body"];



// create form array

$form = array();
$form['header'] = $editAssessmentHeader;
//retrieve Case ID number to display in page heading
$editAssessmentHeader->caseID = $specificCaseID;
$action ="/simCommandPutAssessment.php?assessmentitem_id=$specificID";
$editAssessmentHeader->formAction = $action;

$form['assessmentTab'] = $assessmentTab;
$form['assessment_item'] = $assessmentToEdit;

$form['closing'] = $closingEditAssessment;

  //Iterate through each key:value pair in the json response object for a particular case ID.


    // create a new assessment, and then add to assessment array
    $assessmentToEdit = new Template('mkOneAssessmentObjectforEdit.php', array(
      'id'=>$assessment['id'],
      'case_id'=>$assessment['case_id'],
      'name'=>$assessment['name'],
      'is_critical'=>$assessment['is_critical'],
      'type'=>'oneAssessment',
      'name_tooltip'=>'',
      'scale_tooltip'=>'',
      'scale_label'=>'Scale',
      'namePrefix'=>'cases[assessment_items]',
      'values' => array('2'=>'', '3'=>'', '4'=>'', '5'=>'', '6'=>''),
      'critical_tooltip'=>'',
      'critical_label'=>'Critical Item?',
      'label'=>'Scale',
      'scale_values'=> array('2'=>'', '3'=>'', '4'=>'', '5'=>'', '6'=>''),
      'critical_values'=> array('True'=>'','False'=>'')
    ));

$form['assessment_item'] = $assessmentToEdit;


// Finally, render form with case-specific data pre-loaded in fields.
render_formarray($form);


?>