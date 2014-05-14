      <!-- SAVE BUTTON -->
<!--     <div class="row">
      <input type="submit" class="small primary button" value='<#?php echo $this->buttonlabel1; ?>'>

    </div> -->
    <p>Shortcut to:
    <a href="#caseInfo">Case Info</a> |
    <a href="#instructionalFoundation">Instructions</a> |
    <a href="#assessment">Assessment</a> |
    <a href="#preparation">Preparation</a> |
    <a href="#caseDetails">Case Details</a></p>
    </form>
    <?php foreach($this->javascript as $script) { ?>
    <script src='<?php echo $script; ?>'></script>
    <?php } ?>

    <script>
      $(document).foundation();
    </script>
  </body>
</html>
