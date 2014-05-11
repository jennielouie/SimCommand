

<!-- mkAllStates -->
<div class="states_section row">
  <div class="small-12 columns hiddenDiv end">
    <button id="buttonToAddState" type="button" class="small success button expand" data-nameprefix='cases[states]' data-newRowDiv ='addStates_Div'>Add State</button>
  </div>
</div>
</br>

<div class="allStatesDiv multiInputDiv">
<!-- Beginning of hidden single action -->

  <div class="templateForOneActionDiv hiddenDiv">
    <div id="" class="one_action_div borderDiv dataRow row" class="" data-arrayIndex ="0" data-statejsonID = "" data-actionjsonID="">

      <!-- <input class="actionIDHiddenRow" type="hidden" name="[placeholder][id]" value=""/> -->

      <div class="small-12 columns">
        <span class="actionTitle" >Name</span>
        <input class="actionName" name="[placeholder][name]" type="text" value="" />
      </div>

      </br>

      <div class="row">
        <div class="actionTextArea small-12 columns">
          <span>Results</span>
          <div class="MCEDivToRemove"><textarea class="textareaMCE actionResult" name="[placeholder][results]"></textarea>
          </div>
        </div>
      </div>

      </br>

      <div class="row">
        <div class="small-1 columns">
          <span data-tooltip class="has-tip [tip-bottom]" title="<?php echo $this->critical_item_tooltip;?>">Critical Item?</span>
        </div>

        <div class="small-3 columns">
          <input type="radio"  id="IDholder-ct" name="[placeholder][is_critical_item]" value="true" /><label for="IDholder-ct">Yes</label>
          <input type="radio" checked id="IDholder-cf"  name= "[placeholder][is_critical_item]" value="false" /><label for="IDholder-cf">No</label>
        </div>

<!--         <div class="small-4 columns uploadRow">
          <span>Upload</span>
          <input id="uploadBtn" type="file" class="upload" />
        </div> -->

        <div class="small-1 columns">
          <span data-tooltip class="has-tip [tip-bottom]" title="<?php echo $this->timer_tooltip;?>"><?php echo $this->timer_label;?></span>
        </div>

        <div class="small-2 columns">
          <input type="radio" id="IDholder-tt" name="[placeholder][is_timeable]" value="true" /><label for="IDholder-tt">Yes</label>
          <input type="radio" checked id="IDholder-tf"  name= "[placeholder][is_timeable]"  value="false" /><label for="IDholder-tf">No</label>
        </div>

        <div class="small-1 columns" ><a href="#"  class="delete" >Delete this action</a>
        </div>
      </div>

    </div>
  </div>

<!-- End of hidden single action -->

<?php foreach($this->statesArray as $stateIndex=>$state) {
  //$stateIndex should be defined one-level up
  $state->renderstate($stateIndex);
  echo "</br>";
} ?>

</div> <!--multiInputDiv-->

</br>
<div class="row">
  <input id="footerAddStateButton" type="button" class="small success button expand" value="Add State"/>
</div>
