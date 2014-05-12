<?php
include('SimCommandTemplates.php');

$form = array();
$form['header'] = $newCaseHeader;

//CASE INFO TAB
$form['startTab'] = $caseInfoTab;
$form['title'] = $title;
// $form['id']=$caseID;
$form['case_number'] = $caseNumber;
$form['published_date']=$publishedDate;
$form['categories'] = $library_categories;
$form['addCategory']= $addAnotherCategory;
$form['overview'] = $overview;
$form['participants'] = $participants;
$form['addParticipant']=$addAnotherParticipant;
$form['institutions'] = $institutions;
$form['authors'] = $authors;
$form['resources'] = $resources;
$form['action_scale']=$actionScale;
$form['global_rating_scale'] = $globalRatingScale;
$form['assessment_item_scale'] = $assessmentItemScale;

//INSTRUCTIONAL FOUNDATION TAB
$form['ddd'] = $instructionalTab;
$form['instructional_goals'] = $instGoals;
$form['obj1_medical_knowledge'] = $obj1;
$form['obj2_patient_care'] = $obj2;
$form['obj3_safety_risk_management'] = $obj3;
$form['obj4_interpersonal'] = $obj4;
$form['obj5_professionalism'] = $obj5;
$form['obj6_systems_based_practice'] = $obj6;
$form['study_questions'] = $studyQs;
$form['briefing'] = $briefing;
$form['debriefing'] = $debriefing;

//ASSESSMENT TAB
$form['assessmentTab'] = $assessmentTab;
$form['assessment_items'] = $allAssessments;

// PREPARATION TAB
$form['prepTab'] = $preparationTab;
$form['simulators'] = $simulators;
$form['simulator_programs'] = $simulatorPrograms;
$form['medical_equipment'] = $medEqmt;
$form['medications'] = $medications;
$form['moulage'] = $moulage;
$form['supplies'] = $supplies;
$form ['fsdfsdf'] = $expectedActionsTab;

//CASE DETAILS TAB
$form['caseDetailsTab'] = $caseDetailsTab;
$form['background']=$background;
$form['gender']=$gender;
$form['age']=$age;

// Initial Patient Examinations
//id
$form['general']=$generalIPE;
$form['heent']=$heent;
$form['neck']=$neck;
$form['lungs']=$lungs;
$form['heart']=$heart;
$form['abdomen']=$abdomen;
$form['extremeties']=$extremities;
$form['neurological']=$neurological;
$form['other']=$otherIPE;
//end of IPE fields

$form['states'] = $allStates;

$form['end tab'] = $endTabs;
$form['closing'] = $closing;


// Finally, render form with case-specific data pre-loaded in fields.
render_formarray($form);


?>