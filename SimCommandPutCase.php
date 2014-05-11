<!doctype html>
<?php
header('Content-Type: application/json');
$case = $_POST;

//print_r($_POST);
$states = $_POST['states'];
foreach($states as $stateIndex=>$state) {
  unset($states[$stateIndex]['actions']);
};

$assessment_items = $_POST['assessment_items'];
$actions = $_POST['states']['actions'];
$ipe = $_POST['initial_patient_examination'];

unset($case['states']);
unset($case['assessment_items']);
unset($case['initial_patient_examination']);
$jsoncase = json_encode($case);


// PUT CASE EDITS
$specificCaseID = urldecode($_GET["case_id"]);
$putCaseUrl = "private-1c15-scapi.apiary-mock.com/cases/$specificCaseID";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $putCaseUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsoncase);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: bac44f0517415a56043c20261a9916feb87e092dd9fdb35118707e70876510cb"));
curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020"));
$putCaseResponseJson = curl_exec($ch);
$putCaseResponse = json_decode($putCaseResponseJson);
curl_close($ch);

// // PUT IPE EDITS
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, "http://private-1c15-scapi.apiary-mock.com/initialpatientexaminations/{initialpatientexamination_id}");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
// curl_setopt($ch, CURLOPT_HEADER, FALSE);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
// curl_setopt($ch, CURLOPT_POSTFIELDS, );
// curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020"));
// $response = curl_exec($ch);
// curl_close($ch)
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
      <p><?php echo $jsoncase; ?></p>
      <p>Result:<?php print_r($putCaseResponse->result); ?></p>
    </div>

    <div class="row">
      <a class="alwaysShow button tiny" href="/SimCommandGetAllCases.php">Back to All Cases</a>
      <a class="alwaysShow button tiny" href="/SimCommandNewCaseForm.php">Create New Case</a>
      <a class="alwaysShow button tiny" href="/SimCommandEditOneCaseForm.php?case_id=<?php echo $specificCaseID; ?>">Continue to Edit this Case</a>

    </div>

  </body>
</html>