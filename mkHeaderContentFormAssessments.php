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
                  <h1><a class="alwaysShow" href="#"><?php echo "$this->title $this->caseID"; ?></a></h1>
                </li>
              </ul>

            </nav>

            <a class="alwaysShow button tiny" href="/SimCommandGetAllCases.php">Back to All Cases</a>
            <a class="alwaysShow button tiny" href="/SimCommandEditCaseForm.php?case_id=<?php echo $this->caseID; ?>">Back to Edit This Case</a>
            <a class="alwaysShow button tiny" href="/SimCommandGetCaseAssessments.php?case_id=<?php echo $this->caseID; ?>">Assessments List</a>

          </div>
        </div>
      </div>

        <div class="small-6 columns">
    <a href="SimCommandNewAssessmentForm.php?case_id=<?php echo $this->caseID; ?>" type="button" class="small success button expand">Add Assessment</a>
  </div></br>

