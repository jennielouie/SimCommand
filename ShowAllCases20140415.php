<?php
include('SimCommandTemplates20140401.php');

include('sample_json20140415.json');

print "API returns array of associative arrays.  Need to generate $form for each case in the array.";

// create form array
foreach($caseArray as $json) {
  $form = array();
  $form['header'] = $allCasesHeader;

  $form['id']=$caseID;
  $form['authors'] = $authors;
  $form['categories'] = $library_categories;
  $form['institutions'] = $institutions;
  $form['instructional_goals'] = $instGoals;
  $form['case_number'] = $caseNumber;
  $form['overview'] = $overview;
  $form['published_date']=$publishedDate;
  $form['title'] = $title;

  $form['closing'] = $closing;


  //Iterate through each key:value pair in the json response object for a particular case ID.  All keys should exist in the form, but I use an if statement to be safe.  Iterate to grab the corresponding template object from the form, and add case-specific data in that template object's attributes.  So, these attributes will be associated with the template object when it is rendered.

  foreach($json as $jkey => $jvalue) {
    if (array_key_exists($jkey, $form)) {
      $spec_form_template = $form[$jkey];

      switch ($spec_form_template->type) {
        case "checkbox":
          foreach($jvalue as $isacheckedvalue) {
            $spec_form_template->addselected($isacheckedvalue, 'checked');
          };
          break;

        case "textinput":
          foreach($jvalue as $textbarvalue) {
            $spec_form_template->addvalue($textbarvalue);
          };
          break;
          // need to check that only one value specified for the parameters below

        case "singletext":
          $spec_form_template->addsingletext($jvalue);
          break;

        case "dropdown":
          $spec_form_template->addselected($jvalue, 'selected');
          break;
      }
    }

  };

  // Finally, render form with case-specific data pre-loaded in fields.
  render_formarray($form);

}


?>