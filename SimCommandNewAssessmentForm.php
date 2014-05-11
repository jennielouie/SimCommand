<?php
include_once('SimCommandTemplates.php');

//retrieve assessments for given case_id

if(isset($_GET["case_id"])){
  $specificCaseID = $_GET["case_id"];
}

// create a new assessment, and then add to assessment array
$newAssessment = new Template('mkOneAssessmentObjectforEdit.php', array(

  'case_id'=>$specificCaseID,
  'name'=>'',
  'is_critical'=>'',
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

// create form array

$form = array();
$form['header'] = $newAssessmentHeader;
$newAssessmentHeader->caseID = $specificCaseID;

$action ="/simCommandPostNewAssessment.php?case_id=$specificCaseID";
$newAssessmentHeader->formAction = $action;

$form['assessmentTab'] = $assessmentTab;
$form['assessment_item'] = $newAssessment;

$form['closing'] = $closingNewAssessment;




// Finally, render form with case-specific data pre-loaded in fields.
render_formarray($form);


?>