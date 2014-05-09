<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $this->tabTitle; ?></title>
    <link rel="stylesheet" href="<?php echo $this->stylesheet; ?>" />

    <?php foreach($this->javascript as $script) {?>
    <script src="<?php echo $script; ?>"></script>
    <?php } ?>

  </head>

  <body>

    <div class="row">



<!-- NAV -->
<div class="row">
  <div class="small-12 columns">
    <div class="sticky">
      <!-- <div class="contain-to-grid"> -->
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <!-- Title Area -->
          <li class="name">
            <h1><a class="alwaysShow" href="#"><?php echo $this->title; ?></a></h1>
          </li>

        </ul>



        <dl class="tabs" data-tab data-options="deep_linking: true">
          <dd class="active"><a class="alwaysShow" href="#caseInfo">Case Info</a></dd>
          <dd><a class="alwaysShow" href="#instructionalFoundation">Instructions</a></dd>
          <dd><a class="alwaysShow" href="#assessment">Assessment</a></dd>
          <dd><a class="alwaysShow" href="#preparation">Preparation</a></dd>
          <dd><a class="alwaysShow" href="#caseDetails">Case Details</a></dd>
          <!-- <dd><a href="#expectedActions">States and Expected Actions</a></dd> -->
        </dl>

      </nav>
<!-- </div> -->
<a class="alwaysShow button tiny" href="/SimCommandGetAllCases.php">Back to All Cases</a>
<a class="alwaysShow button tiny" href="/SimCommandNewCaseForm.php">Create New Case</a>
<a class="alwaysShow button tiny" href="/SimCommandEditCaseForm.php?id=<?php echo $this->caseID; ?>">Edit This Case</a>
<a class="alwaysShow button tiny" href="/SimCommandGetCaseAssessments.php?case_id=<?php echo $this->caseID; ?>">Edit Case Assessments</a>
<a class="alwaysShow button tiny" href="/SimCommandGetCaseStates.php?id=<?php echo $this->caseID; ?>">Edit Case States</a>
    </div>
  </div>
</div>

