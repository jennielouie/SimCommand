<!doctype html>
<?php
header('Content-Type: application/json');
$jsondata = json_encode($_POST);

$specificAssessmentID = urldecode($_GET['assessmentitem_id']);
$url = "http://private-1c15-scapi.apiary-mock.com/assessmentitems/$specificAssessmentID";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsondata);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020"));
$jsonresponse = curl_exec($ch);
$response = json_decode($jsonresponse);
curl_close($ch);
// var_dump($response);
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
                <h1><a class="alwaysShow" href="#">SimCommand HTTP Response: Edit Assessment</a></h1>
              </li>
            </ul>
          </nav>

        </div>
      </div>
    </div>

    <div class="row requestbox">
      <h3>Request</h3>
      <p><?php print_r($jsondata); ?></p>
    </div>

    <div class="row responsebox">
      <h3>Response to PUT request</h3>
      <p><?php print_r($response->result); ?></p>
    </div>

    <div class="row">
      <a class="alwaysShow button tiny" href="/SimCommandGetAllCases.php">Back to All Cases</a>
      <a class="alwaysShow button tiny" href="/SimCommandNewCaseForm.php">Create New Case</a>
      <a class="alwaysShow button tiny" href="/SimCommandGetCaseAssessments.php?case_id=<?php echo $_POST['case_id']; ?>">Edit Case Assessments</a>
      <a class="alwaysShow button tiny" href="/SimCommandGetCaseStates.php?id=<?php echo $_POST['case_id']; ?>">Edit Case States</a>
    </div>

  </body>
</html>