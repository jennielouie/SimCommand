
<?php
include_once('SimCommandTemplates.php');


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://private-1c15-scapi.apiary-mock.com/cases");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("SCAPI_AUTH_TOKEN: 659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020"));
$response = curl_exec($ch);
curl_close($ch);


$json = json_decode($response, true);
$response=$json["body"];

//Iterate through each key:value pair in the json response object for a particular case ID.  All keys should exist in the form, but I use an if statement to be safe.  Iterate to grab the corresponding template object from the form, and add case-specific data in that template object's attributes.  So, these attributes will be associated with the template object when it is rendered.


  $caseArray = [];
  $caseArray[] = $allcasesHeader;

    foreach($response as $caseIndex=>$case) {
      // create a new assessment, and then add to assessment array
      $oneCase = new Template('showallcases.php', array(

        'caseID'=>$case['id'],
        'number'=>$case['number'],
        'title'=>$case['title'],
        'authors'=>$case['authors'],
        'institutions'=>$case['institutions'],
        'instructionalGoals'=>$case['instructionalGoals'],
        'categories'=>$case['categories'],
        'published'=>$case['published'],
        'overview'=>$case['overview']
      ));

      $caseArray[] = $oneCase;
    };

  $caseArray[] = $allcasesClosing;


// Finally, render case summary.
render_allcases($caseArray);




?>