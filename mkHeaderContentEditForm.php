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
      <form action="<?php echo $this->formAction;?>" method="<?php echo $this->formMethod;?>" novalidate>

      <!-- NAV -->
      <div class="row">
        <div class="small-12 columns">
          <div class="sticky">
            <nav class="top-bar" data-topbar>
              <ul class="title-area">
                <li class="name">
                  <h1><a class="alwaysShow" href="#"><?php echo $this->title; ?></a></h1>
                </li>
              </ul>

              <dl class="tabs" data-tab data-options="deep_linking: true">
                <dd class="active"><a href="#caseInfo">Case Info</a></dd>
                <dd><a href="#instructionalFoundation">Instructions</a></dd>
                <dd><a href="#assessment">Assessment</a></dd>
                <dd><a href="#preparation">Preparation</a></dd>
                <dd><a href="#caseDetails">Case Details</a></dd>
              </dl>
            </nav>


              <a class="alwaysShow button tiny" href="/SimCommandGetAllCases.php">Back to All Cases</a>
              <a class="alwaysShow button tiny" href="/SimCommandNewCaseForm.php">Create New Case</a>
              <a class="alwaysShow button tiny" href="/SimCommandGetCaseAssessments.php?case_id=<?php echo $this->caseID; ?>">Edit Case Assessments</a>
              <a class="alwaysShow button tiny" href="/SimCommandGetCaseStates.php?id=<?php echo $this->caseID; ?>">Edit Case States</a>
          </div>
        </div>
      </div>
