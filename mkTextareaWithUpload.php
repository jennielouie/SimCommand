<!-- text area box -->
<div class="row">
  <div class="large-12 columns">
    <div class="row">
      <div class="large-2 small-10 columns">
        <span data-tooltip class="has-tip [tip-bottom]" title='<?php echo $this->__get('tooltip');?>'><?php echo $this->__get('label');?></span>
      </div>
      <div class="small-8 columns">
        <textarea class="textareaMCE" id='<?php echo $this->__get('name');?>' name="<?php echo $this->__get('name'); ?>"><?php echo $this->__get('value');?></textarea>
      </div>

<!--       <div class="small-2 columns">

            <label>
            <input id="uploadBtn" type="file" display="none" class="upload" />Upload File</label>

      </div> -->
    </div>
  </div>
</div>
</br>
