<!-- text input box with button-->
<div class="row">
  <div id='<?php echo $this->__get('name').'Div'?>' class="large-12 columns">
    <div class="firstRow">
      <div class="large-2 small-12 columns">
        <span data-tooltip class="has-tip [tip-right]" title='<?php echo $this->__get('tooltip');?>'><?php echo $this->__get('label');?></span>
      </div>

      <div class="large-8 small-10 columns">
        <input id='<?php echo $this->__get('name');?>' name='<?php echo $this->__get('name').'[]';?>' type="text"/>
      </div>

      <div class="small-2 columns">
        <button type="button" class="small success button expand" id='<?php echo $this->__get('btnname');?>' data-name='<?php echo $this->__get('name').'[]';?>' data-newRowDiv = '<?php echo $this->__get('name').'addedRows'?>'>+</button>
      </div>
    </div>

    <div class='<?php echo $this->__get('name').'addedRows'?>'></div>

  </div>
</div>