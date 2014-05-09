<!-- mkAllStates -->

<div class="allStatesDiv multiInputDiv">


<?php foreach($this->statesArray as $stateIndex=>$state) {
  //$stateIndex should be defined one-level up
  $state->renderstate($stateIndex);
  echo "</br>";
} ?>

</div> <!--multiInputDiv-->

