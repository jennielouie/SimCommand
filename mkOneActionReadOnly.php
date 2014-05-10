<!-- Beginning of single action -->
  <?php
      $name_prefix = '';
      $state_jsonID = '9090' // dummy value, not needed for readonly view
      $actionIndex = '4444' //dummy value
      $id_prefix = 'radio'.$state_jsonID.'action'.$actionIndex.'-';
  ?>

<div>


    <div class="small-12 columns">

        <input class="actionName" disabled="true" type="text" value="<?php echo $this->name ?>" />
    </div>
    </br>

    <div class="row">
      <div class="actionTextArea small-12 columns">
        <span>Results</span>
        <div class="MCEDivToRemove"><textarea class="textareaMCE actionResult" disabled="true" name="<?php echo $name_prefix.'[results]'; ?>"><?php echo $this->results;?></textarea>
        </div>
      </div>
    </div>
    </br>

    <div class="row">

      <div class="small-1 columns">
        <span data-tooltip class="has-tip [tip-bottom]" title="<?php echo $this->critical_item_tooltip;?>"><?php echo $this->critical_item_label;?></span>
      </div>

      <?php if ($this->is_critical_item  =="true") { ?>
      <div class="small-3 columns">
        <input type="radio" disabled="true" checked id="<?php echo $id_prefix.'ct'; ?>" name="<?php echo $name_prefix.'[is_critical_item]'; ?>" value="true" /><label for="<?php echo $id_prefix.'ct'; ?>">Yes</label>
        <input type="radio" disabled="true" id="<?php echo $id_prefix.'cf'; ?>"  name= "<?php echo $name_prefix.'[is_critical_item]'; ?>" value="false" /><label for="<?php echo $id_prefix.'cf'; ?>">No</label>
      </div>
      <?php } else { ?>
      <div class="small-3 columns">
        <input type="radio"  disabled="true" id="<?php echo $id_prefix.'ct'; ?>" name="<?php echo $name_prefix.'[is_critical_item]'; ?>" value="true" /><label for="<?php echo $id_prefix.'ct'; ?>">Yes</label>
        <input type="radio" disabled="true" id="<?php echo $id_prefix.'cf'; ?>" checked name= "<?php echo $name_prefix.'[is_critical_item]'; ?>" value="false" /><label for="<?php echo $id_prefix.'cf'; ?>">No</label>
      </div>
      <?php } ?>

      <div class="small-1 columns">
        <span data-tooltip class="has-tip [tip-bottom]" title="<?php echo $this->timer_tooltip;?>"><?php echo $this->timer_label;?></span>
      </div>

       <!-- Display radio buttons based on is_timeable value -->
    <?php if ($this->is_timeable =="true") { ?>
      <div class="small-2 columns">
        <input type="radio" disabled="true" checked id="<?php echo $id_prefix.'tt'; ?>" name="<?php echo $name_prefix.'[is_timeable]'; ?>" value="true" /><label for="<?php echo $id_prefix.'tt'; ?>">Yes</label>
        <input type="radio" disabled="true" id="<?php echo $id_prefix.'tf'; ?>"  name= "<?php echo $name_prefix.'[is_timeable]'; ?>" value="false" /><label for="<?php echo $id_prefix.'tf'; ?>">No</label>
      </div>
      <?php } else { ?>
      <div class="small-2 columns">
        <input type="radio"  disabled="true" id="<?php echo $id_prefix.'tt'; ?>" name="<?php echo $name_prefix.'[is_timeable]'; ?>" value="true" /><label for="<?php echo $id_prefix.'tt'; ?>">Yes</label>
        <input type="radio" disabled="true" id="<?php echo $id_prefix.'tf'; ?>" checked name= "<?php echo $name_prefix.'[is_timeable]'; ?>" value="false" /><label for="<?php echo $id_prefix.'tf'; ?>">No</label>
      </div>
      <?php } ?>

  <div class="row">
    <div class="small-2 small-offset-10 columns" ><a class="button success tiny" href=<?php echo "/SimCommandEditActionForm.php?action_id=$this->id&case_id=$this->case_id"; ?> >Edit</a>
    </div>
  </div>

  <div class="row">
    <div class="small-2 small-offset-10 columns" ><a href=<?php echo "/SimCommandDeleteAction.php?action_id=$this->id"; ?> >Delete</a>
    </div>
  </div>
    </div>


</div>
<!-- End of single action -->



