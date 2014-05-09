<?php

$id_prefix = 'assessment-'.$this->id;
?>

<div id="section_Assessments" class="row">
  <div class="small-3 columns hiddenDiv">
    <button id="buttonToAddAssessment" type="button" class="small success button expand">Add Assessment</button>
  </div></br>
  <div class="assessmentsDiv multiInputDiv small-12 columns">


<div class="one_assessment_div dataRow row" data-jsonID="<?php echo $this->id; ?>" data-arrayIndex="<?php echo $assessmentIndex; ?>">
  <fieldset>
  <h3>Assessment ID: <?php echo $this->id; ?></h3>

<!-- commented out submittal of assessment ID -->
  <input class="assessmentIDHiddenRow" type="hidden" name="case_id" value="<?php echo $this->case_id; ?>"/>
  <div class="small-1 columns">
    <span data-tooltip class="has-tip [tip-bottom]" title="<?php echo $this->name_tooltip;?>">Name</span>
  </div>
  <div class="small-5 columns">
    <input class="assessmentName" name="name" type="text" value="<?php echo $this->name; ?>"/>
  </div>

  <div class="small-1 columns">
    <span data-tooltip class="has-tip [tip-bottom]" title="<?php echo $this->scale_tooltip;?>"><?php echo $this->scale_label;?></span>
  </div>

  <div class="small-2 columns">
    <select class="scale" name="scale">
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
    <input type="radio" checked id="<?php echo $id_prefix.'sct'; ?>" name="is_critical" value="true" /><label for="<?php echo $id_prefix.'sct'; ?>">Yes</label>
    <input type="radio" id="<?php echo $id_prefix.'scf'; ?>"  name= "is_critical" value="false" /><label for="<?php echo $id_prefix.'scf'; ?>">No</label>
  </div>
  <?php } else { ?>
  <div class="small-3 columns">
    <input type="radio"  id="<?php echo $id_prefix.'sct'; ?>" name="is_critical" value="true" /><label for="<?php echo $id_prefix.'sct'; ?>">Yes</label>
    <input type="radio" id="<?php echo $id_prefix.'scf'; ?>" checked name= "is_critical" value="false" /><label for="<?php echo $id_prefix.'scf'; ?>">No</label>
  </div>
  <?php } ?>


  </fieldset>
</div> <!--end of this assessment-->

</div>
</div>




