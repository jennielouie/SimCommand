  <?php
      $name_prefix = 'states['.$stateIndex.']';
      $state_jsonID = $this->id;
  ?>

<div id="<?php echo "state_".$state_jsonID; ?>" class="dataRow borderDiv one_state_div" data-jsonID="<?php echo $state_jsonID; ?>" data-arrayIndex="<?php echo $stateIndex; ?>">

  <div class="stateWithoutActionsSection" data-jsonID="<?php echo $state_jsonID; ?>" data-arrayIndex="<?php echo $stateIndex; ?>">

    <div class="row">
      <div class="small-3 columns">
        <h3>State ID: <?php echo $this->id; ?> </h3>
      </div>


    <div class="small-2 small-offset-4 columns" ><a class="button success tiny" href=<?php echo "/SimCommandEditStateForm.php?state_id=$this->id&case_id=$this->case_id"; ?> >Edit this State</a>
    </div>

    <div class="small-2  columns" ><a href=<?php echo "/SimCommandDeleteState.php?state_id=$this->id"; ?> >Delete</a>
    </div>




    </div>

    <div class="row">
      <!-- commented out submittal of state id -->

      <div class="large-2 small-10 columns">
        <span data-tooltip class="has-tip [tip-bottom]" title="add text">Notes</span>
      </div>
      <div class="small-10 columns">
        <div class="MCEDivToRemove"><textarea class="textareaMCE actionNotes" disabled="true" name="<?php echo $name_prefix.'[notes]'; ?>"><?php echo $this->notes;?></textarea></div>
      </div>
    </div>
    </br>

    <div class="row">
      <div class="large-2 small-10 columns">
        <span data-tooltip class="has-tip [tip-bottom]" title='add text'>General</span>
      </div>
      <div class="small-10 columns">
        <div class="MCEDivToRemove"><textarea class="textareaMCE actionGeneral" disabled="true" name="<?php echo $name_prefix.'[general]'; ?>"><?php echo $this->general;?></textarea></div>
      </div>
    </div>
    </br>

    <div class="row">
      <div class="small-2 columns">
        <span>Temperature</span>
      </div>
      <div class="small-2 columns">
        <input class="actionTemp" disabled="true" name="<?php echo $name_prefix.'[temp_celcius]'; ?>"type="text" value='<?php echo $this->temp_celcius; ?>'/>
      </div>

      <div class="small-2 columns">
        <span>Respiration Rate</span>
      </div>
      <div class="small-2 columns">
        <input class="actionRespRate" disabled="true" name="<?php echo $name_prefix.'[resp_rate]'; ?>"type="text" value='<?php echo $this->resp_rate; ?>'/>
      </div>

      <div class="small-2 columns">
        <span>Heart Rate</span>
      </div>
      <div class="small-2 columns">
        <input class="actionHeartRate" disabled="true" name="<?php echo $name_prefix.'[heart_rate]'; ?>"type="text" value='<?php echo $this->heart_rate ;?>'/>
      </div>
    </div>

    <div class="row">
      <div class="small-2 columns">
        <span >BP Systolic</span>
      </div>
      <div class="small-2 columns">
        <input class="actionBPSys" disabled="true" name="<?php echo $name_prefix.'[bp_systolic]'; ?>"type="text" value='<?php echo $this->bp_systolic; ?>'/>
      </div>

      <div class="small-2 columns">
        <span >BP Diastolic</span>
      </div>
      <div class="small-2 columns">
        <input class="actionBPDia" disabled="true" name="<?php echo $name_prefix.'[bp_diastolic]'; ?>"type="text" value='<?php echo $this->bp_diastolic; ?>'/>
      </div>

      <div class="small-2 columns">
        <span >SpO2</span>
      </div>
      <div class="small-2 columns">
        <input class="actionSpO2" disabled="true" name="<?php echo $name_prefix.'[spo2]'; ?>"type="text" value='<?php echo $this->spo2; ?>'/>
      </div>
    </div>

    <div class="row">
      <div class="small-2 columns">
        <span >Weight</span>
      </div>
      <div class="small-2 columns">
        <input class="actionWeight" disabled="true" name="<?php echo $name_prefix.'[weight]'; ?>"type="text" value='<?php echo $this->weight; ?>'/>
      </div>

      <div class="small-2 columns">
        <span>Pain Score</span>
      </div>
      <div class="small-2 columns">
        <input class="actionPainScore" disabled="true" name="<?php echo $name_prefix.'[pain_score]'; ?>" type="text" value="<?php echo $this->pain_score; ?>"/>
      </div>

      <div class="small-2 columns">
        <span>Other</span>
      </div>

      <div class="small-2 columns">
        <input class="actionOther" disabled="true" name="<?php echo $name_prefix.'[other]'; ?>" type="text" value="<?php echo $this->other; ?>"/>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <div class="row">
          <div class="large-2 small-10 columns">
            <span data-tooltip class="has-tip [tip-bottom]" title='add text'>Discussion Items</span>
          </div>
          <div class="small-10 columns">
            <div class="MCEDivToRemove">
              <textarea class="textareaMCE actionDiscussionItems" disabled="true" name="<?php echo $name_prefix.'[discussion_items]'; ?>"><?php echo $this->discussion_items;?>
              </textarea>
            </br></br>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <a href=<?php echo "/SimCommandGetStateActions.php?state_id=$this->id"; ?>><h4 style="color:purple">Edit Actions for State <?php echo $this->id;?></h4></a>
    </div>
  </div> <!--end of StatesWithoutActionsSection -->


</div> <!-- End of State -->




