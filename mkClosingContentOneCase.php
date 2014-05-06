
    <p>Shortcut to:
    <a class="alwaysShow" href="#caseInfo">Case Info</a> |
    <a class="alwaysShow" href="#instructionalFoundation">Instructions</a> |
    <a class="alwaysShow" href="#assessment">Assessment</a> |
    <a class="alwaysShow" href="#preparation">Preparation</a> |
    <a class="alwaysShow" href="#caseDetails">Case Details</a></p>

    <?php foreach($this->javascript as $script) { ?>
    <script src='<?php echo $script; ?>'></script>
    <?php } ?>

    <script>
      $(document).foundation();
    </script>
  </body>
</html>
