<?php
include('formTemplateClass.php');

//This file contains definitions for all form objects.  These are all of class Template, and contain an html template and inputs for that template.  There are templates for checkboxes, selection boxes, text bars, text areas, etc.

//CHECKBOXES

  $library_categories = new Template('mkCheckbox.php',
    array(
      'type'=>'checkbox',
      'entity'=>'',
      'label' => 'Clinical Area (Click on labels for all that apply)',
      'name' => 'categories',
      'values' => array('Obstetrics/Gynecology'=> '', 'Emergency medicine - pediatric'=> '', 'Emergency medicine - adult'=> '', 'Orthopaedic surgery'=> '', 'General surgery'=> '', 'Internal medicine'=> '', 'Family medicine'=> '', 'Pediatric medicine'=> '', 'Nursing'=> '','Midwifery'=> '','EMS'=> '' )  )
    );

  $participants = new Template('mkCheckbox.php',
    array(
    'type'=>'checkbox',
    'entity'=>'',
    'name' => 'participants',
    'label' => 'Participants (Click on labels for all that apply)',
    'values' => array('Medicine - specialist'=> '', 'Medicine - attending/staff'=> '','Medicine - resident'=> '', 'Medicine - student'=> '','Nursing - specialist'=> '', 'Nursing - staff'=> '','Nursing - student'=> '','Social work'=> '','Physical therapist'=> '', 'Occupational therapist'=> '', 'Respiratory therapist'=> '', 'EMS'=> '', 'Psychiatric specialist'=> '', 'Pharmacist'=> '','Other'=> '' )
    )
  );

  // $simulators = new Template('mkCheckbox.php',
  //   array(
  //   'type'=>'checkbox',
  //   'entity'=>'',
  //   'name' => 'simulators',
  //   'label' => 'Simulators (Click on labels for all that apply)',
  //   'tooltip' => 'Click all that apply',
  //   'values' => array('Mannequin - adult' => '', 'Mannequin - OB' => '', 'Mannequin - pediatric' => '', 'Mannequin - neonatal' => '', 'Mannequin - trauma' => '', 'Task trainer - airway' => '', 'Task trainer - surgical' => '', 'Task trainer - catheter' => '', 'Simulated patient - adult male' => '', 'Simulated patient - adult female' => '', 'Simulated patient - pediatric male' => '', 'Simulated patient - pediatric female' => '')
  //   )
  // );


// DROPDOWNS  $ = new Template('mkDropdown.php',array('type'=>'dropdown','entity'=>'','name' => '','label' => '','values' => array('option'=>'selected/[blank]'), 'tooltip'=>''));

  $actionScale = new Template('mkDropdown.php',
    array(
      'entity'=>'',
    'type' => 'dropdown',
    'name' => 'action_scale',
    'label' => 'Performance Evaluation Scale (2-6)',
    'values' => array('2'=>'', '3'=>'', '4'=>'', '5'=>'', '6'=>'')
    )
  );

  $gender = new Template('mkDropdown.php',
    array(
    'type' => 'dropdown',
    'entity'=>'',
    'name' => 'gender',
    'label' => 'Gender',
    'values' => array(
      'Male'=>'','Female'=>'', 'Transgender'=>'', 'Unknown'=>''
      )
    )
  );


// TEXT AREA $ = new Template('mkTextarea.php', array('type'=>'singletext', 'entity'=>'','label'=>'', 'name' =>'', 'tooltip'=>'', 'value'=>'')));

$authors = new Template('mkTextbarwBtnMultiple.php', array('type' => 'textarray','entity'=>'','label' =>'Author(s)', 'name' => 'authors','tooltip'=>'[add text]','btnname' =>'addAuthor', 'btnlabel'=>'Add author','values'=>array('')));

$background = new Template('mkTextarea.php', array('type'=>'singletext','entity'=>'','label'=>'Background', 'name' =>'background', 'value'=>'<ul> <li></li> </ul>','tooltip'=>'background tooltip'));

$instGoals = new Template('mkTextarea.php', array('type' => 'singletext','entity'=>'','label'=>'Instructional goals', 'name'=>'instructional_goals', 'tooltip'=>'[add text]', 'value' =>'<ul> <li></li> </ul>'));

$institutions = new Template('mkTextbarwBtnMultiple.php', array('type' => 'textarray','entity'=>'','label' =>'Institution(s)', 'name' => 'institutions', 'tooltip'=>'Institutions that participants are associated with','btnname' =>'addInstitution', 'btnlabel'=>'Add institution','values'=>array('')));

$medEqmt = new Template('mkTextarea.php',
  array('type' => 'singletext', 'entity'=>'','label' =>'Medical Equipment & Instruments', 'name' => 'medical_equipment','tooltip'=>'[add text]', 'value'=>'<ul> <li></li> </ul>'));

$medications = new Template('mkTextarea.php',array('type' => 'singletext','entity'=>'','label' =>'Medications', 'name' => 'medications','tooltip'=>'[add text]','btnname' =>'addMedication', 'btnlabel'=>'Add row', 'value'=>'<ul> <li></li> </ul>'));

$obj1 = new Template('mkTextarea.php', array('type' => 'singletext','entity'=>'','label'=>'Objective 1 - Medical Knowledge', 'name'=>'obj1_medical_knowledge', 'btnname'=>'addobj1', 'btnlabel'=>'+', 'tooltip'=>'[add text]', 'value'=>'<ul> <li></li> </ul>'));

$obj2 = new Template('mkTextarea.php', array('type' => 'singletext','entity'=>'','label'=>'Objective 2 - Patient Care', 'name'=>'obj2_patient_care', 'btnname'=>'addpatCase', 'btnlabel'=>'+', 'tooltip'=>'[add text]', 'value'=>'<ul> <li></li> </ul>'));

$obj3 = new Template('mkTextarea.php', array('type' => 'singletext','entity'=>'','label'=>'Obejctive 3 - Safety & Risk Management', 'name'=>'obj3_safety_risk_management', 'btnname'=>'addsafety', 'btnlabel'=>'+', 'tooltip'=>'[add text]', 'value' =>'<ul> <li></li> </ul>'));

$obj4 = new Template('mkTextarea.php', array('type' => 'singletext','entity'=>'','label'=>'Objective 4 - Interpersonal', 'name'=>'obj4_interpersonal', 'btnname'=>'addinterpersonal', 'btnlabel'=>'+', 'tooltip'=>'[add text]', 'value'=>'<ul> <li></li> </ul>'));

$obj5 = new Template('mkTextarea.php', array('type' => 'singletext','entity'=>'','label'=>'Objective 5 - Professionalism', 'name'=>'obj5_professionalism', 'btnname'=>'addprofessional', 'btnlabel'=>'+', 'tooltip'=>'[add text]', 'value'=>'<ul> <li></li> </ul>'));

$obj6 = new Template('mkTextarea.php', array('type' => 'singletext','entity'=>'','label'=>'Objective 6 - Systems-based Practice', 'name'=>'obj6_systems_based_practice', 'btnname'=>'addsysPrac', 'btnlabel'=>'+', 'tooltip'=>'[add text]', 'value'=>'<ul> <li></li> </ul>'));

$overview = new Template('mkTextarea.php', array('type'=>'singletext','entity'=>'','label'=>'Case Overview', 'name' =>'overview', 'value'=>'<ul> <li></li> </ul>','tooltip'=>'overview tooltip'));

$simulatorPrograms = new Template('mkTextarea.php', array('type'=>'singletext','entity'=>'','label'=>'Simulator Programs', 'name' =>'simulator programs', 'value'=>'<ul> <li></li> </ul>'));



// SINGLE TEXTBAR   $ = new Template('mkTextbar.php', array('type'=>'singletext','label'=>'', 'name'=>'', 'value'=>''));
$action_scale = new Template('mkTextbar.php', array('type'=>'singletext','label'=>'', 'name'=>'', 'value'=>''));

$caseID =  new Template('mkTextbar.php', array('type'=>'singletext','label'=>'Case ID', 'name'=>'id','entity'=>'', 'value'=>''));

$caseNumber = new Template('mkTextbar.php', array('type'=>'singletext','label'=>'Case Number', 'entity'=>'','name'=>'number', 'value'=>''));

$publishedDate = new Template('mkTextbar.php', array('type'=>'singletext','label'=>'Last Published', 'entity'=>'', 'name'=>'published_date', 'value'=>''));

$title = new Template('mkTextbar.php', array('type' => 'singletext','entity'=>'','label'=>'Case Title', 'name'=>'title', 'tooltip' => 'Enter the name to be used for case searches', 'value'=>''));



//SHORT TEXTBAR $ = new Template('mkShortTextbar.php', array('type' => 'singletext', 'entity'=>'','label'=>'', 'name'=>'', 'tooltip'=>'','value'=>'<ul> <li></li> </ul>'));

$age = new Template('mkshortTextbarAge.php', array('type' => 'singletext', 'entity'=>'','label'=>'Age', 'name'=>'age','value'=>''));



//MULTIPLE TEXT BARS $ = new Template('mkTextbarwBtnMultiple.php',array('type' => 'textarray','entity'=>'','label' =>'', 'name' => '','tooltip'=>'[add text]','btnname' =>'addmedEqmt', 'btnlabel'=>'Add row','values'=>array('')));

$addAnotherCategory = new Template('mkTextbarwBtnMultiple.php', array('type' => 'textarray','entity'=>'','label' =>'Other Category (describe)', 'name' => 'categories', 'btnname' =>'addCategory', 'btnlabel'=>'Add category','tooltip'=>'[Add text]','values'=>array('')));

$addAnotherParticipant = new Template('mkTextbarwBtnMultiple.php', array('type' => 'textarray','entity'=>'','label' =>'Other Participant (describe)', 'name' => 'participants', 'btnname' =>'addParticipant', 'btnlabel'=>'Add participant','tooltip'=>'[Add text]','values'=>array('')));

// $addAnotherSim = new Template('mkTextbarwBtnMultiple.php', array('type' => 'textarray','entity'=>'','label' =>'Other Simulator (describe)', 'name' => 'simulators', 'btnname' =>'addotherSim', 'btnlabel'=>'Add simulator','tooltip'=>'[Add text]','values'=>array('')));

$notes = new Template('mkTextbarwBtnMultiple.php', array('type' => 'textarray','label'=>'Notes', 'name'=>'notes', 'btnname' =>'addnotes', 'btnlabel'=>'+', 'tooltip'=>'[add text]', 'values' =>array('')));



// TEXT AREA WITH UPLOAD$ = new Template('mkTextarea.php', array('type'=>'singletext', 'entity'=>'','label'=>'', 'name' =>'', 'tooltip'=>'', 'value'=>'')));
$abdomen = new Template('mkTextarea.php', array('type' => 'singletext','entity'=>'initial_patient_examination','label'=>'Abdomen', 'name'=>'initial_patient_examination[abdomen]', 'btnname'=>'addabdomen', 'btnlabel'=>'+', 'tooltip'=>'[add text]', 'value' =>'<ul> <li></li> </ul>'));

$briefing = new Template('mkTextarea.php', array('type' =>'singletext','entity'=>'','label' =>'Briefing', 'name' => 'briefing', 'btnname1' =>'addbriefing', 'btnlabel1'=>'Add row', 'btnname2'=>'uploadbriefing', 'btnlabel2'=>'Add file', 'value' =>'<ul> <li></li> </ul>'));

$debriefing = new Template('mkTextarea.php', array('type' =>'singletext','entity'=>'','label' =>'Debriefing', 'name' => 'debriefing', 'btnname1' =>'adddebriefing', 'btnlabel1'=>'Add row', 'btnname2'=>'uploaddebriefing', 'btnlabel2'=>'Add file', 'values' =>'<ul> <li></li> </ul>'));

$extremities = new Template('mkTextarea.php', array('type' => 'singletext','entity'=>'initial_patient_examination','label'=>'Extremities', 'name'=>'initial_patient_examination[extremities]', 'btnname'=>'addextremities', 'btnlabel'=>'+', 'tooltip'=>'[add text]', 'value' =>'<ul> <li></li> </ul>'));

$generalIPE = new Template('mkTextarea.php', array('type' => 'singletext','entity'=>'initial_patient_examination','label'=>'General', 'name'=>'initial_patient_examination[general]', 'btnname' =>'addgeneralIPE', 'btnlabel'=>'+', 'tooltip'=>'[add text]', 'value' =>'<ul> <li></li> </ul>'));

$heart = new Template('mkTextarea.php', array('type' => 'singletext','entity'=>'initial_patient_examination','label'=>'Heart', 'name'=>'initial_patient_examination[heart]', 'btnname'=>'addheart', 'btnlabel'=>'+', 'tooltip'=>'[add text]', 'value' =>'<ul> <li></li> </ul>'));

$heent = new Template('mkTextarea.php', array('type' => 'singletext','entity'=>'initial_patient_examination','label'=>'HEENT', 'name'=>'initial_patient_examination[heent]', 'btnname' =>'addheent', 'btnlabel'=>'+', 'tooltip'=>'[add text]', 'value' =>'<ul> <li></li> </ul>'));

$lungs = new Template('mkTextarea.php', array('type' => 'singletext','entity'=>'initial_patient_examination','label'=>'Lungs', 'name'=>'initial_patient_examination[lungs]', 'btnname'=>'addlung', 'btnlabel'=>'+', 'tooltip'=>'[add text]', 'value' =>'<ul> <li></li> </ul>'));

$moulage = new Template('mkTextarea.php', array('type' =>'singletext','entity'=>'','label' =>'Moulage', 'name' => 'moulage', 'btnname1' =>'addMoulage', 'btnlabel1'=>'Add row', 'btnname2'=>'uploadMoulage', 'btnlabel2'=>'Add file', 'value' =>'<ul> <li></li> </ul>'));

$neck = new Template('mkTextarea.php', array('type' => 'singletext','entity'=>'initial_patient_examination','label'=>'Neck', 'name'=>'initial_patient_examination[neck]', 'btnname' =>'addneck', 'btnlabel'=>'+', 'tooltip'=>'[add text]', 'value' =>'<ul> <li></li> </ul>'));

$neurological = new Template('mkTextarea.php', array('type' => 'singletext','entity'=>'initial_patient_examination','label'=>'Neuro', 'name'=>'initial_patient_examination[neurological]', 'btnname' =>'addneuro', 'btnlabel'=>'+', 'tooltip'=>'[add text]', 'value' =>'<ul> <li></li> </ul>'));

$otherIPE = new Template('mkTextarea.php', array('type' => 'singletext','entity'=>'initial_patient_examination','label'=>'Other', 'name'=>'initial_patient_examination[otherIPE]', 'btnname' =>'addotherIPE', 'btnlabel'=>'+', 'tooltip'=>'[add text]', 'value' =>'<ul> <li></li> </ul>'));

$resources = new Template('mkTextarea.php', array('type' =>'singletext','entity'=>'','label' =>'Resources', 'name' => 'resources', 'btnname1' =>'addResource', 'btnlabel1'=>'Add resource', 'btnname2'=>'uploadResource', 'btnlabel2'=>'Add file', 'value' =>'<ul> <li></li> </ul>'));

$simulators = new Template('mkTextarea.php',
    array(
    'type'=>'singletext',
    'entity'=>'',
    'name' => 'simulators',
    'label' => 'Simulators',
    'tooltip' => 'Click all that apply',
    'value' => '<ul> <li></li> </ul>'
    )
  );

$studyQs = new Template('mkTextarea.php', array('type' =>'singletext','entity'=>'','label' =>'Study Questions', 'name' => 'study_questions', 'btnname1' =>'addstudyQs', 'btnlabel1'=>'Add question', 'btnname2'=>'uploadstudyQs', 'btnlabel2'=>'Add file', 'value' =>'<ul> <li></li> </ul>'));

$supplies = new Template('mkTextarea.php', array('type' =>'singletext','entity'=>'','label' =>'Supplies', 'name' => 'supplies', 'value' =>'<ul> <li></li> </ul>'));


//HEADER CONTENT $= new Template('mkHeaderContentAccordion.php', array('tabTitle' => '', 'title' => '', 'formAction'=>'', 'javascript'=>array('modernizrSimCommand.js','//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', 'simCommand.js') ,'stylesheet' => 'foundationSimCommand.css'));

$allCasesHeader= new Template('mkHeaderContentAllCases.php', array('tabTitle' => 'SimCommand | Case List', 'title' => 'SimCommand','formAction'=>'/showAllCases.php', 'javascript'=>array('modernizrSimCommand.js','//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', 'simCommand.js','//tinymce/js/tinymce/tinymce.min.js','http://cdn.foundation5.zurb.com/foundation.js'),'stylesheet' => 'foundationSimCommand.css', 'caseTitle'=>'', 'caseID'=>''));

$newCaseHeader= new Template('mkHeaderContentForm.php', array('tabTitle' => 'SimCommand | Case Information', 'title' => 'SimCommand New Case', 'formMethod'=>'post','formAction'=>'/simCommandPostNewCase.php', 'javascript'=>array('modernizrSimCommand.js','//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', 'simCommand.js','tinymce/js/tinymce/tinymce.min.js','http://cdn.foundation5.zurb.com/foundation.js','functionTinyMCE.js'),'stylesheet' => 'foundationSimCommand.css', 'caseTitle'=>'', 'caseID'=>''));

// $getCaseHeader= new Template('mkHeaderContentShow.php', array('tabTitle' => 'SimCommand | Show Single Case', 'title' => 'SimCommand OneCase', 'javascript'=>array('modernizrSimCommand.js','//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', 'simCommand.js','tinymce/js/tinymce/tinymce.min.js','http://cdn.foundation5.zurb.com/foundation.js','functionTinyMCE.js'),'stylesheet' => 'foundationSimCommand.css', 'caseTitle'=>'', 'caseID'=>''));

$editCaseHeader= new Template('mkHeaderContentEditForm.php', array('tabTitle' => 'SimCommand | Edit Case', 'title' => 'SimCommand Edit Case', 'formMethod'=>'post','formAction'=>'/simCommandPutCase.php?case_id=', 'javascript'=>array('modernizrSimCommand.js','//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', 'simCommand.js','tinymce/js/tinymce/tinymce.min.js','http://cdn.foundation5.zurb.com/foundation.js','functionTinyMCE.js'),'stylesheet' => 'foundationSimCommand.css', 'caseTitle'=>'', 'caseID'=>''));

// $getAssessmentsHeader= new Template('mkHeaderContentFormAssessments.php', array('tabTitle' => 'Edit Assessments', 'title' => 'List of Assessments for Case', 'formMethod'=>'post','formAction'=>'/simCommandPutAssessment.php', 'javascript'=>array('modernizrSimCommand.js','//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', 'simCommand.js','http://cdn.foundation5.zurb.com/foundation.js'),'stylesheet' => 'foundationSimCommand.css', 'caseTitle'=>'', 'caseID'=>'9'));

// $getStatesHeader= new Template('mkHeaderContentFormStates.php', array('tabTitle' => 'Edit States', 'title' => 'List of States for Case', 'formMethod'=>'post','formAction'=>'/simCommandPutState.php', 'javascript'=>array('modernizrSimCommand.js','//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', 'simCommand.js','http://cdn.foundation5.zurb.com/foundation.js'),'stylesheet' => 'foundationSimCommand.css', 'caseTitle'=>'', 'caseID'=>''));

// $getActionsHeader= new Template('mkHeaderContentShowActions.php', array('tabTitle' => 'Edit Actions', 'title' => 'List of Actions for State', 'javascript'=>array('modernizrSimCommand.js','//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', 'simCommand.js','http://cdn.foundation5.zurb.com/foundation.js'),'stylesheet' => 'foundationSimCommand.css', 'caseTitle'=>'', 'caseID'=>'', 'stateID'=>''));

// $editAssessmentHeader= new Template('mkHeaderContentFormAssessments.php', array('tabTitle' => 'Edit Assessments', 'title' => 'Edit Assessment ', 'formMethod'=>'post','formAction'=>'/simCommandPutAssessment.php', 'javascript'=>array('modernizrSimCommand.js','//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', 'simCommand.js','http://cdn.foundation5.zurb.com/foundation.js'),'stylesheet' => 'foundationSimCommand.css', 'caseTitle'=>'', 'caseID'=>''));

// $newAssessmentHeader= new Template('mkHeaderContentFormAssessments.php', array('tabTitle' => 'New Assessment', 'title' => 'New Assessment ', 'formMethod'=>'post','formAction'=>'/simCommandPostAssessment.php', 'javascript'=>array('modernizrSimCommand.js','//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', 'simCommand.js','http://cdn.foundation5.zurb.com/foundation.js'),'stylesheet' => 'foundationSimCommand.css', 'caseTitle'=>'', 'caseID'=>''));

// $editStateHeader= new Template('mkHeaderContentFormStates.php', array('tabTitle' => 'Edit State', 'title' => 'Edit State ', 'formMethod'=>'post','formAction'=>'/simCommandPutState.php', 'javascript'=>array('modernizrSimCommand.js','//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', 'simCommand.js','tinymce/js/tinymce/tinymce.min.js','http://cdn.foundation5.zurb.com/foundation.js','functionTinyMCE.js'),'stylesheet' => 'foundationSimCommand.css', 'caseTitle'=>'', 'caseID'=>'', 'stateID'=>''));

// $editAssessmentsLink = new Template('mkEditSectionLink.php', array('title'=>'Edit this Case\'s Assessments','link'=>'/SimCommandGetCaseAssessments.php', 'caseID'=>''));

// $editStatesLink = new Template('mkEditSectionLink.php', array('title'=>'Edit this Case\'s States','link'=>'/SimCommandGetCaseStates.php', 'caseID'=>''));
// //TAB HEADER $ = new Template('mkTabHeader.php', array('tabID'=>'', 'tabTitle'=>''));

$assessmentTab = new Template('mkTabHeader.php', array('tabID'=>'assessment', 'tabTitle'=>'Assessment'));

$caseDetailsTab = new Template('mkTabHeader.php', array('tabID'=>'caseDetails', 'tabTitle'=>'Case Details'));

$caseInfoTab = new Template('mkFirstTabHeader.php', array('tabID'=>'caseInfo', 'tabTitle'=>'Case Information'));

$endTabs = new Template('mkEndLastTab.php', array());

$expectedActionsTab = new Template('mkTabHeader.php', array('tabID'=>'expectedActions', 'tabTitle'=>'Expected Actions'));

$instructionalTab = new Template('mkTabHeader.php', array('tabID'=>'instructionalFoundation', 'tabTitle'=>'Instructional Foundation'));

$preparationTab = new Template('mkTabHeader.php', array('tabID'=>'preparation', 'tabTitle'=>'Preparation'));



//CLOSING CONTENT
$closing = new Template('mkClosingContent.php', array('buttonlabel1'=>'Save', 'javascript'=>array("js/vendor/jquery.js", "js/vendor/foundation.min.js")));
// $closingEditCase = new Template('mkClosingContent.php', array('buttonlabel1'=>'Update this Case', 'javascript'=>array("js/vendor/jquery.js", "js/vendor/foundation.min.js")));

// $closingOneCase = new Template('mkClosingContentOneCase.php', array('javascript'=>array("js/vendor/jquery.js", "js/vendor/foundation.min.js")));

// $closingNoShortcuts = new Template('mkClosingContentNoShortcuts.php', array('buttonlabel1'=>'Save','javascript'=>array("js/vendor/jquery.js", "js/vendor/foundation.min.js")));

// $closingEditAssessment = new Template('mkClosingContentNoShortcuts.php', array('buttonlabel1'=>'Update', 'javascript'=>array("js/vendor/jquery.js", "js/vendor/foundation.min.js")));

// $closingNewAssessment = new Template('mkClosingContentNoShortcuts.php', array('buttonlabel1'=>'Create Assessment', 'javascript'=>array("js/vendor/jquery.js", "js/vendor/foundation.min.js")));

// $closingEditState = new Template('mkClosingContentNoShortcuts.php', array('buttonlabel1'=>'Update', 'javascript'=>array("js/vendor/jquery.js", "js/vendor/foundation.min.js")));

// $closingReadOnly = new Template('mkClosingContentReadOnly.php', array('buttonlabel1'=>'Update', 'javascript'=>array("js/vendor/jquery.js", "js/vendor/foundation.min.js")));

// $allcasesHeader = new Template('mkallCasesHeaderContent.php', array('foo'=>'bar'));
$allCasesClosing = new Template('mkallCasesClosingContent.php', array('foo'=>'bar'));


//STATE AND ACTIONS OBJECTS

$action1 = new Template('mkOneActionNew.php', array(
  'is_critical_item'=>'',
  'name'=>'',
  'results'=>'',
  'critical_item_label'=>'Critical Item?',
  'critical_item_tooltip'=>'',
  'critical_item_values'=>array('True'=>'','False'=>''),
  'timer_tooltip'=>'',
  'timer_label'=>'Include Timer?',
  'timer_values'=>array('True'=>'','False'=>'')
  ));

$action2 = new Template('mkOneActionNew.php', array(
  'is_critical_item'=>'',
  'name'=>'',
  'results'=>null,
  'critical_item_label'=>'Critical Item?',
  'critical_item_tooltip'=>'',
  'critical_item_values'=>array('True'=>'','False'=>''),
  'timer_tooltip'=>'',
  'timer_label'=>'Include Timer?',
  'timer_values'=>array('True'=>'','False'=>'')
  ));

$stateNew = new Template('mkOneStateObjectNew.php', array('startcounter'=>'3333333333','notes'=>'','general'=>'','temp_celcius'=>'','resp_rate'=>'','heart_rate'=>'','notes'=>'','general'=>'','bp_systolic'=>'','bp_diastolic'=>'', 'spo2'=>'','weight'=>'','pain_score'=>'','other'=>'','discussion_items'=>'','type'=>'oneState','actions'=>array($action1, $action2)));

$allStates = new Template('mkAllStates.php', array('type'=>'allStates','statesArray'=>array($stateNew), 'is_critical_item'=>'','critical_item_label'=>'Critical Item?','critical_item_tooltip'=>'','critical_item_values'=>array('True'=>'','False'=>''),'timer_tooltip'=>'','timer_label'=>'Include Timer?','timer_values'=>array('True'=>'','False'=>'')));


//ASSESSMENT OBJECTS

$assessmentNew = new Template('mkOneAssessmentObjectNew.php', array('startcounter'=>'999999','name'=>'','is_critical_item'=>'','namePrefix'=>'assessment_items', 'name_tooltip'=>'',
  'scale_tooltip'=>'',
  'scale_label'=>'Scale',
  'namePrefix'=>'assessment_items',
  'values' => array('2'=>'', '3'=>'', '4'=>'', '5'=>'', '6'=>''),
  'critical_tooltip'=>'',
  'critical_label'=>'Critical Item?',
  'label'=>'Scale',
  'scale_values'=> array('2'=>'', '3'=>'', '4'=>'', '5'=>'', '6'=>''),
  'critical_values'=> array('True'=>'','False'=>'')));

$allAssessments = new Template('mkAllAssessments.php', array('type'=>'allAssessments','assessmentsArray'=>array($assessmentNew)));

// $oneCaseSummary = new Template('showallcases.php', array('caseID'=>'test','number'=>'testnumber','title'=>'testtitle','authors'=>array(),'institutions'=>array(), 'instructionalGoals'=>array(), 'categories'=>array(), 'published'=>'testpublishdate','overview'=>'testOverview'));

$hiddenIPEid = new Template('mkHiddenInput.php', array('name'=>'initial_patient_examination[id]','value'=>''));

$globalRatingScale = new Template('mkshortTextbarAge.php', array('type' => 'singletext', 'entity'=>'','label'=>'Global Rating Scale', 'name'=>'global_rating_scale','value'=>''));

$assessmentItemScale = new Template('mkshortTextbarAge.php', array('type' => 'singletext', 'entity'=>'','label'=>'Assessment Item Scale', 'name'=>'assessment_item_scale','value'=>''));
?>