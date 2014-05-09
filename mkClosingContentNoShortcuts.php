      <!-- SAVE BUTTON -->
    <div class="row">
      <input type="submit" class="small primary button" value='<?php echo $this->buttonlabel1; ?>'>
      <!-- <input type="submit" class="large primary button" value='<+?php echo $this->buttonlabel2; ?>'> -->
    </div>

    </form>
    <?php foreach($this->javascript as $script) { ?>
    <script src='<?php echo $script; ?>'></script>
    <?php } ?>

    <script>
      $(document).foundation();
    </script>
  </body>
</html>
