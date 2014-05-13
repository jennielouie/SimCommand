<!doctype html>
<?php
header('Content-Type: application/json');
$case = $_POST;

// $httpresponse = $_POST['origCaseData'];
// $origCaseData=$httpresponse['body'];
// $origAssessments = $origCaseData['assessment_items'];
// $origStates = $origCaseData['states'];
// unset($origStates['actions']);
// $origActions = $origCaseData['states']['actions'];


$case_id = $_POST["id"];

$states = $_POST['states'];


$jsonipe = json_encode($ipe);

$assessment_items = $_POST['assessment_items'];

//REMOVE nested objects from case
unset($case['states']);
unset($case['assessment_items']);
// unset($case['origCaseData']);
// $jsoncase = json_encode($case);
// echo $jsoncase;


// //PUT ACTIONS
// foreach($states as $state)
// {
//   $state_id = $state['id'];
//   $actions = $state['actions'];
//   foreach($actions as $action)
//   {
//     $action['state_id'] = $state_id;
//     if (array_key_exists('id', $action))
//     {
//       $action_id = $action['id'];
//       $url = "private-1c15-scapi.apiary-mock.com/actions/$action_id";
//       unset($action['id']);
//       $jsonaction = json_encode($action);
//       $ch = curl_init();
//       curl_setopt($ch, CURLOPT_URL, $url);
//       curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//       curl_setopt($ch, CURLOPT_HEADER, FALSE);
//       curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
//       curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonaction);
//       // curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: bac44f0517415a56043c20261a9916feb87e092dd9fdb35118707e70876510cb"));
//       curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020"));
//       $putCaseResponseJson = curl_exec($ch);
//       $putCaseResponse = json_decode($putCaseResponseJson);
//       curl_close($ch);
//     } else
//     {
//       $url = "private-1c15-scapi.apiary-mock.com/actions";
//       $jsonaction = json_encode($action);
//       $ch = curl_init();
//       curl_setopt($ch, CURLOPT_URL, $url);
//       curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//       curl_setopt($ch, CURLOPT_HEADER, FALSE);
//       curl_setopt($ch, CURLOPT_POST, TRUE);
//       curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonaction);
//       // curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: bac44f0517415a56043c20261a9916feb87e092dd9fdb35118707e70876510cb"));
//       curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020"));
//       $putCaseResponseJson = curl_exec($ch);
//       $putCaseResponse = json_decode($putCaseResponseJson);
//       curl_close($ch);
//     }
//   }
// }


// //PUT STATES

// foreach($states as $state){

//   unset($state['actions']);
// unset($state['physical_exam']);

//   $state['case_id'] = $case_id;

//   if (array_key_exists('id', $state))
//   {
//     $state_id = $state['id'];
//     $url = "private-1c15-scapi.apiary-mock.com/states/$state_id";
//     unset($state['id']);
//     $jsonstate = json_encode($state);
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//     curl_setopt($ch, CURLOPT_HEADER, FALSE);
//     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonstate);
//     // curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: bac44f0517415a56043c20261a9916feb87e092dd9fdb35118707e70876510cb"));
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020"));
//     $putCaseResponseJson = curl_exec($ch);
//     $putCaseResponse = json_decode($putCaseResponseJson);
//     curl_close($ch);
//   }
//   else
//   {
//     $url = "private-1c15-scapi.apiary-mock.com/states";
//     $jsonstate = json_encode($state);
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//     curl_setopt($ch, CURLOPT_HEADER, FALSE);
//     curl_setopt($ch, CURLOPT_POST, TRUE);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonstate);
//     // curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: bac44f0517415a56043c20261a9916feb87e092dd9fdb35118707e70876510cb"));
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020"));
//     $putCaseResponseJson = curl_exec($ch);
//     $putCaseResponse = json_decode($putCaseResponseJson);
//     curl_close($ch);
//   }
// }


// //PUT ASSESSMENTS

// foreach($assessment_items as $assessment){

//   unset($assessment['scale']);
//   $assessment['case_id'] = $case_id;
//   if (array_key_exists('id', $assessment)){
//     $assessment_id = $assessment['id'];
//     $url = "private-1c15-scapi.apiary-mock.com/assessmentitems/$assessment_id";
//     unset($assessment['id']);
//     $jsonassessment = json_encode($assessment);
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//     curl_setopt($ch, CURLOPT_HEADER, FALSE);
//     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonassessment);
//     // curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: bac44f0517415a56043c20261a9916feb87e092dd9fdb35118707e70876510cb"));
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020"));
//     $putCaseResponseJson = curl_exec($ch);
//     $putCaseResponse = json_decode($putCaseResponseJson);
//     curl_close($ch);
//   } else {
//       $url = "private-1c15-scapi.apiary-mock.com/assessmentitems";
//       $jsonassessment = json_encode($assessment);
//       $ch = curl_init();
//       curl_setopt($ch, CURLOPT_URL, $url);
//       curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//       curl_setopt($ch, CURLOPT_HEADER, FALSE);
//       curl_setopt($ch, CURLOPT_POST, TRUE);
//       curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonassessment);
//       // curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: bac44f0517415a56043c20261a9916feb87e092dd9fdb35118707e70876510cb"));
//       curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020"));
//       $putCaseResponseJson = curl_exec($ch);
//       $putCaseResponse = json_decode($putCaseResponseJson);
//       curl_close($ch);
//     }
// }



// // PUT CASE EDITS

// $putCaseUrl = "private-1c15-scapi.apiary-mock.com/cases/$case_id";
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $putCaseUrl);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
// curl_setopt($ch, CURLOPT_HEADER, FALSE);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
// curl_setopt($ch, CURLOPT_POSTFIELDS, $jsoncase);
// // curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: bac44f0517415a56043c20261a9916feb87e092dd9fdb35118707e70876510cb"));
// curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020"));
// $putCaseResponseJson = curl_exec($ch);
// $putCaseResponse = json_decode($putCaseResponseJson);
// curl_close($ch);



// PUT PHYSICAL EXAM EDITS
foreach($states as $state){
  $physical_exam = $state['physical_exam'];
  $physical_exam['state_id'] = $state['id'];

echo $physical_exam['state_id'];
  if (array_key_exists('id', $physical_exam)) {
    echo "start";
    $pe_id = $physical_exam['id'];
    unset($physical_exam['id']);
    echo $pe_id;
    $url = "private-1c15-scapi.apiary-mock.com/physicalexams/$pe_id";
    $jsonphysical_exam = json_encode($physical_exam);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonphysical_exam);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020", "Content-Type: application/json"));
    $putCaseResponseJson = curl_exec($ch);
    $putCaseResponse = json_decode($putCaseResponseJson);
    curl_close($ch);
  } else {
      $url = "private-1c15-scapi.apiary-mock.com/physicalexams";
      $jsonphysical_exam = json_encode($physical_exam);
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt($ch, CURLOPT_HEADER, FALSE);
      curl_setopt($ch, CURLOPT_POST, TRUE);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonphysical_exam);
      // curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: bac44f0517415a56043c20261a9916feb87e092dd9fdb35118707e70876510cb"));
      curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020"));
      $putCaseResponseJson = curl_exec($ch);
      $putCaseResponse = json_decode($putCaseResponseJson);
      curl_close($ch);

  }
}


?>

<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="foundationSimCommand.css" />
    <script src="modernizrSimCommand.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="simCommand.js"></script>
    <script src="http://cdn.foundation5.zurb.com/foundation.js"></script>
  </head>

  <body>
    <div class="row">
      <div class="small-12 columns">
        <div class="sticky">
          <nav class="top-bar" data-topbar>
            <ul class="title-area">
              <li class="name">
                <h1><a class="alwaysShow" href="#">SimCommand HTTP Response: PUT Case</a></h1>
              </li>
            </ul>
          </nav>

        </div>
      </div>
    </div>


    <div class="row responsebox">
      <h3>Response to PUT request</h3>

      <p>Result:<?php print_r($putCaseResponse->result); ?></p>
    </div>

    <div class="row">
      <a class="alwaysShow button tiny" href="SimCommandGetAllCases.php">Back to All Cases</a>
      <a class="alwaysShow button tiny" href="SimCommandNewCaseForm.php">Create New Case</a>
      <a class="alwaysShow button tiny" href="SimCommandEditOneCaseForm.php?case_id=<?php echo $case_id; ?>">Continue to Edit this Case</a>

    </div>

  </body>
</html>
