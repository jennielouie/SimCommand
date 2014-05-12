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
<!-- <script src="/js/tinymce/jquery.tinymce.min.js" type="text/javascript"></script> -->


  </head>

  <body>

    <div class="row">
      <!-- <form action="<#?php echo $this->formAction;?>" method="post" novalidate> -->


<!-- NAV -->
<div class="row">
  <div class="small-12 columns">
    <div class="sticky">
      <!-- <div class="contain-to-grid"> -->
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <!-- Title Area -->
          <li class="name">
            <h1><a href="#">SimCommand Summary of Cases</a></h1>
          </li>
          <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
          <!-- <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li> -->
        </ul>

        <!-- <section class="top-bar-section"> -->

          <!-- Right Nav Section -->
          <!--           <ul class="right">
                      <li class="divider hide-for-small"></li>
                      <li><a href="#">Main Item 1</a></li>
                    </ul>
                  </section> -->

      </nav>

      <a class="alwaysShow button tiny" href="SimCommandNewCaseForm.php">Create New Case</a>
<!-- </div> -->
    </div>
  </div>
</div>

