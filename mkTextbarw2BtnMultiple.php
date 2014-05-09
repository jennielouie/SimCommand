<!-- text input box with 'add' and 'add file' button-->

<div class="row">
  <div id='<?php echo $this->__get('name').'Div'?>' class="large-12 columns">

    <div class="rowWith2Buttons">
      <div class="row">
        <div class="small-8 columns">
          <span data-tooltip class="has-tip [tip-bottom]" title='<?php echo $this->__get('tooltip');?>'><?php echo $this->__get('label');?></span>
        </div>
        <div class="small-1 columns">
          <button type="button" class="small success button expand" data-name="<?php echo $this->__get('name').'[]'; ?>" data-newRowDiv = '<?php echo $this->__get('name').'DataRows'?>'><?php echo $this->__get('btnlabel1'); ?></button>
        </div>
      </div>
    </div>

    <div class="row">
      <div class='multiInputDiv'>
        <?php
          foreach($this->values as $item) {
        ?>
        <div class="dataRow">
          <div class="small-9 columns">
            <textarea name="<?php echo $this->__get('name').'[]'; ?>"><?php echo $item; ?></textarea>
          </div>
<!--           <div class="small-2 columns uploadRow">
            <span>Upload</span>
            <input id="uploadBtn" type="file" class="upload" />
          </div> -->

          <div class="small-1 columns">
            <a href='#' class="delete">Delete</a>
          </div>
        </div>
        <?php
          }
        ?>
        <div class='<?php echo $this->__get('name').'DataRows'?>'>
        </div>
      </div>

    </div>

  </div>
</div>