<?php
include_once('SimCommandTemplates.php');

//retrieve states for given case_id

if(isset($_GET["case_id"])){
  $specificCaseID = $_GET["case_id"];
}
$url = "http://private-1c15-scapi.apiary-mock.com/states?case_id=$specificCaseID";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020"));
$httpresponse = curl_exec($ch);

curl_close($ch);

$json=file_get_contents('sampleGETstates.json');

$jsondecoded = json_decode($json, true);
$states=$jsondecoded["body"];


// create form array

$form = array();
$form['header'] = $getStatesHeader;
//retrieve Case ID number to display in page heading
$getStatesHeader->caseID = $specificCaseID;

$form['stateTab'] = $caseDetailsTab;
$form['states'] = $allStates;

$form['closing'] = $closingReadOnly;

  //Iterate through each key:value pair in the json response object for a particular case ID.  All keys should exist in the form, but I use an if statement to be safe.  Iterate to grab the corresponding template object from the form, and add case-specific data in that template object's attributes.  So, these attributes will be associated with the template object when it is rendered.


  $statesArray = [];
  //$jvalue is an array of states, so loop through all states in json response
  foreach($states as $stateIndex=>$state) {
    // $actions = array();
    // //loop though actions and add to the state's "actions" array
    // foreach($state['actions'] as $actionIndex=>$action) {
    //   $actions[] = new Template('mkOneActionReadOnly.php', array(
    //     'id'=>$action['id'],
    //     'is_critical_item'=>$action['is_critical_item'],
    //     'name'=>$action['name'],
    //     'results'=>$action['results'],
    //     'critical_item_label'=>'Critical Item?',
    //     'critical_item_tooltip'=>'',
    //     'critical_item_values'=>array('True'=>'','False'=>''),
    //     'timer_tooltip'=>'',
    //     'timer_label'=>'Include Timer?',
    //     'timer_values'=>array('True'=>'','False'=>'')
    //   ));
    // }
    //create a new state
    $newState = new Template('mkOneStateObjectReadOnly.php', array(
      'id'=>$state['id'],
      'case_id'=>$state['case_id'],
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
      // 'actions'=>$actions
    ));

    //add states to array of states
    $statesArray[] = $newState;
  }

  //update the form's $allStates 'statesArray' array
  //$spec_form_template['statesArray'] = $statesArray;
  $allStates = new Template('mkAllStatesReadOnly.php', array('type'=>'allStates','statesArray'=>$statesArray,'is_critical_item'=>'','critical_item_label'=>'','critical_item_tooltip'=>'','critical_item_values'=>array('True'=>'','False'=>''),'timer_tooltip'=>'','timer_label'=>'Include Timer?','timer_values'=>array('True'=>'','False'=>'')));
  $form['states'] = $allStates;

// Finally, render form with case-specific data pre-loaded in fields.
render_formarray($form);


?>