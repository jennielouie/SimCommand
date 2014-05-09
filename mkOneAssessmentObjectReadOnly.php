<?php
$name_prefix = "$this->namePrefix[$assessmentIndex]";
$id_prefix = 'assessment-'.$this->id;
?>
<div class="one_assessment_div dataRow row" data-jsonID="<?php echo $this->id; ?>" data-arrayIndex="<?php echo $assessmentIndex; ?>">
  <fieldset>
  <h3>Assessment ID: <?php echo $this->id; ?></h3>

<!-- commented out submittal of assessment ID -->
 <!--  <input class="assessmentIDHiddenRow" type="hidden" name="<#?php echo $name_prefix.'[id]'; ?>" value="<#?php echo $this->id; ?>"/> -->
  <div class="small-1 columns">
    <span data-tooltip class="has-tip [tip-bottom]" title="<?php echo $this->name_tooltip;?>">Name</span>
  </div>
  <div class="small-5 columns">
    <input disabled="true" class="assessmentName" name="<?php echo $name_prefix.'[name]';?>" type="text" value="<?php echo $this->name; ?>"/>
  </div>

  <div class="small-1 columns">
    <span data-tooltip class="has-tip [tip-bottom]" title="<?php echo $this->scale_tooltip;?>"><?php echo $this->scale_label;?></span>
  </div>

  <div class="small-2 columns">
    <select disabled="true" class="scale" name="<?php echo $name_prefix.'[scale]';?>">
      <?php
        foreach($this->scale_values as $item=>$selected){
      ?>
      <option value="<?php echo $item; ?>" <?php echo $selected;?>><?php echo $item; ?></br>
        <?php
          };
        ?>
      </option>
    </select>
  </div>

  <div class="small-1 columns">
    <span data-tooltip class="has-tip [tip-bottom]" title="<?php echo $this->critical_tooltip;?>"><?php echo $this->critical_label;?></span>
  </div>

<!-- Render radio buttons based on value of is_critical -->
  <?php if ($this->is_critical  =="true") { ?>
  <div class="small-3 columns">
    <input disabled="true" type="radio" checked id="<?php echo $id_prefix.'sct'; ?>" name="<?php echo $name_prefix.'[is_critical]'; ?>" value="true" /><label for="<?php echo $id_prefix.'sct'; ?>">Yes</label>
    <input disabled="true" type="radio" id="<?php echo $id_prefix.'scf'; ?>"  name= "<?php echo $name_prefix.'[is_critical]'; ?>" value="false" /><label for="<?php echo $id_prefix.'scf'; ?>">No</label>
  </div>
  <?php } else { ?>
  <div class="small-3 columns">
    <input disabled="true" type="radio"  id="<?php echo $id_prefix.'sct'; ?>" name="<?php echo $name_prefix.'[is_critical]'; ?>" value="true" /><label for="<?php echo $id_prefix.'sct'; ?>">Yes</label>
    <input disabled="true" type="radio" id="<?php echo $id_prefix.'scf'; ?>" checked name= "<?php echo $name_prefix.'[is_critical]'; ?>" value="false" /><label for="<?php echo $id_prefix.'scf'; ?>">No</label>
  </div>
  <?php } ?>

  <div class="row">
    <div class="small-2 small-offset-10 columns" ><a class="button success tiny" href=<?php echo "/SimCommandEditAssessmentForm.php?assessmentitem_id=$this->id&case_id=$this->case_id"; ?> >Edit</a>
    </div>
  </div>

  <div class="row">
    <div class="small-2 small-offset-10 columns" ><a href=<?php echo "/SimCommandDeleteAssessment.php?assessmentitem_id=$this->id"; ?> >Delete</a>
    </div>
  </div>

  </fieldset>
</div> <!--end of this assessment-->



