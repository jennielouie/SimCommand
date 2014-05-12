// Defines "add" buttons, "delete" links.  Generally, "add" button clicks will clone the item to be added, and increment array indices as necessary.  "Delete" link clicks will delete the selected row, and re-number remaining sibling elements.

$(document).ready(function() {

uniqueButtonIndex = 100000;
uniqueActionIndex = 100000;


//When "save" button clicked, posts form (without checking for completeness) and shows modal indicating that form has been posted.

// $('#simCommandForm').submit(function(event){
//   alert("Save button clicked!");
//   // event.preventDefault();
//   // $.ajax({
//   //   type: "POST",
//   //   url: 'https://private-1c15-scapi.apiary-mock.com',
//   //   beforeSend: function (request){
//   //       request.setRequestHeader("SCAPI_AUTH_TOKEN", "659d9194f1467c20d7a3a1fd6bbc6540e8ccf85498fad89f4988d85e8a718020");
//   //     },
//   //   data: $(this).serialize(),
//   //   success: function(response){
//   //       alert(response);
//   //       alert('done');
//   //   }
//   // });
// });


  $(".rowWithAddButton").on('click', 'button', function(e){

  // ADD NEW INPUT BAR BELOW BOTTOM ONE, AND INCLUDE REMOVE BUTTON FOR THAT ROW
    var newInputBarName = $(e.currentTarget).attr('data-name');
    var addedRowDivName = $(e.currentTarget).attr('data-newRowDiv');
   $("</br><div class='dataRow'><div class='large-8 small-10 large-offset-2 columns'><input name=" + newInputBarName+ " type='text' required/></div><div class='small-1 columns'><a href='#' class='delete'>Delete</a></div></div>").appendTo("." + addedRowDivName);
  });

  $(".rowWith2Buttons").on('click', 'button', function(e){

  // ADD NEW INPUT BAR BELOW BOTTOM ONE, AND INCLUDE REMOVE AND ADD FILE BUTTONS FOR THAT ROW
    var newInputBarName = $(e.currentTarget).attr('data-name');
    var addedRowDivName = $(e.currentTarget).attr('data-newRowDiv');


   $("</br><div class='dataRow'><div class='small-9 columns'><input name=" + newInputBarName+ " type='text' required/></div><div class='small-2 columns'><span>Upload</span><input type='file' class='upload'></div><div class='small-1 columns'><a href='#' class='delete'>Delete</a></div></div>").appendTo("." + addedRowDivName);
  });


/* DELETE FUNCTIONALITY INCLUDING RE-NUMBERING OF ARRAY INDICES */
  // DELEGATE LISTENER TO "MULTITEXTBAR" ROWS DIV, WHICH EXIST AT FIRST RENDER, TO REMOVE ROW WHEN "REMOVE" BUTTON IS CLICKED.
  $(".multiInputDiv").on('click', 'a.delete', function(e){
    e.preventDefault();
    console.log('clicked');
    var selectedRow = $(this).closest(".dataRow");
    //count sibling datarows, if total is 1, do not delete and show alert
    var siblingCount = $(selectedRow).siblings().length;
      if (siblingCount == 0) {
        alert("Sorry, cannot delete only instance of this data");
      }
      else {
        $(selectedRow).remove();
      }


    //loop through elements for a given set of assessments, actions, or states

        $('.one_assessment_div').each(function(rowIndex){
          $(this).attr('data-arrayIndex', rowIndex);
          $(this).find("input[name], select[name]").each(function(){
            var name = $(this).attr('name');
            var new_name = name.replace(/\[[0-9]+\]/g, '['+rowIndex+']');
            $(this).attr('name',new_name);
          });
        });

        $('.one_state_div').each(function(rowIndex){
      /// find each input with a name attribute inside each row.  This will change state index for embedded actions too.
          $(this).attr('data-arrayIndex', rowIndex);
          $(this).find("input[name], select[name], textarea[name]").each(function(){
            var name = $(this).attr('name');
            var new_name = name.replace(/\[states\]\[[0-9]+\]/g, '[states]['+rowIndex+']');
            // console.log('state regex');
            $(this).attr('name',new_name);
          });


          //NEED TO LIMIT RE-NUMBERING TO ACTIONS FOR THE SAME STATE. SO INVOKE WHEN LOOPING THROUGH STATES TO LIMIT SCOPE
          var childrenActions = $(this).find('.one_action_div');
          console.log(childrenActions.length);
          childrenActions.each(function(rowIndex){
            console.log('begin re-numbering actions');
            $(this).attr('data-arrayIndex', rowIndex);
            $(this).find("input[name], select[name], textarea[name]").each(function(){
              var name = $(this).attr('name');
              var new_name = name.replace(/\[actions\]\[[0-9]+\]/g, '[actions]['+rowIndex+']');
              $(this).attr('name',new_name);
            });
            //UPDATE IDS AND LABELS FOR RADIO BUTTONS
            var idHolder = 'radio' + statejsonID + 'action' + new_action_index;
            $(this).find("input:radio[id]").each(function() {
              var radio_id= $(this).attr('id');
              var new_radio_id = radio_id.replace(/radio[0-9]action[0-9]/g, idHolder);
              $(this).attr('id',new_radio_id);
            });

            $(this).find("label[for]").each(function() {
              var radio_id= $(this).attr('for');
              var new_radio_id = radio_id.replace(/radio[0-9]action[0-9]/g, idHolder);
               $(this).attr('for',new_radio_id);
            });

          });
        });
      });


//ADD ASSESSMENT

$('#footerAssessmentButton').on('click', function(){
  $('#buttonToAddAssessment').click();
  return false;
});
    $('#buttonToAddAssessment').on('click', function(){

        var last_index= parseInt($('.one_assessment_div').last().attr('data-arrayIndex'));
        var new_index = last_index +1;
        var new_index_string = new_index.toString();
        var last_jsonID = parseInt($('.one_assessment_div').last().attr('data-jsonID'));
        var new_jsonID = last_jsonID + 1;
        var newDiv = $(".one_assessment_div").last().clone();
//commented out assignation of ids 20140501
        // newDiv.attr('id','assessment_' + new_jsonID);

        //clear values from cloned form
        newDiv.find("[type=text]").val('');
        newDiv.find("[type=radio][value=false]").prop('checked', true);

        newDiv.attr('data-jsonID', new_jsonID);
        newDiv.attr('data-arrayIndex', new_index);
        newDiv.find('input.assessmentName').attr('value', '');
        newDiv.find('input.id').attr('value', 'new');
        newDiv.find('h3').text('Assessment ID: '+ new_jsonID);
        // newDiv.find('input.assessmentIDHiddenRow').attr('value', new_jsonID);


          uniqueButtonIndex += 1;
          newDiv.find("input:radio[id]").each(function() {
            var radio_id= $(this).attr('id');
            var new_radio_id = radio_id.replace(/assessment-[0-9]+/g, 'assessment-' + uniqueButtonIndex);
            $(this).attr('id',new_radio_id);
            console.log('new radio id is ', new_radio_id);

          })

          newDiv.find("label[for]").each(function() {
            var radio_id= $(this).attr('for');
            var new_radio_id = radio_id.replace(/assessment-[0-9]+/g, 'assessment-' + uniqueButtonIndex);
             $(this).attr('for',new_radio_id);
          })

        newDiv.find("input[name], select[name]").each(function(){
          var name = $(this).attr('name');
          var new_name = name.replace(/\[[0-9]+\]/g, '['+ new_index+']');
          $(this).attr('name',new_name);
        });

        newDiv.appendTo('.assessmentsDiv');
    });



//ADD NEW ACTION
    $('.allStatesDiv').on('click', 'button', function(){
      console.log('clicked add action button');
      event.stopPropagation();
      if($(this).hasClass("buttonClassToAddAction")){

        var statejsonID=$(this).attr('data-statejsonID');
        var stateIndex=$(this).attr('data-stateIndex');
        var action_divID = "#ActionsForState_" + statejsonID;
        var action_div = $(action_divID);
        var new_action_index;
        var new_action_jsonID;
        var newDiv;


//Count number of existing one_action_divs; if zero, need to copy from template and set index and json_ID
        var currentActionCount = action_div.children('.one_action_div').length;
        if (currentActionCount > 0) {
          var last_action = action_div.find('div.one_action_div').last();
          new_action_jsonID = parseInt(last_action.attr('data-actionjsonID')) +1 ;
          new_action_index = parseInt(last_action.attr('data-arrayIndex')) +1;
          newDiv = last_action.clone();

          newDiv.find("input[name], select[name], textarea[name]").each(function(){
            var name = $(this).attr('name');
            var new_name = name.replace(/\[actions\]\[[0-9]+\]/g, '[actions]['+ new_action_index +']');
            $(this).attr('name',new_name);
          });

        //clear values from cloned form
        newDiv.find("[type=text]").val('');
        newDiv.find("[type=radio][value=false]").prop('checked', true);

          var idHolder = 'radio'+uniqueButtonIndex+'action'+uniqueActionIndex;
          uniqueButtonIndex += 1;
          uniqueActionIndex += 1;
          newDiv.find("input:radio[id]").each(function() {
            var radio_id= $(this).attr('id');
            var new_radio_id = radio_id.replace(/radio[0-9]+action[0-9]+/g, idHolder);
            $(this).attr('id',new_radio_id);
            console.log('new radio id is ', new_radio_id);

          })

          newDiv.find("label[for]").each(function() {
            var radio_id= $(this).attr('for');
            var new_radio_id = radio_id.replace(/radio[0-9]+action[0-9]+/g, idHolder);
             $(this).attr('for',new_radio_id);
          })


        } else {
          newDiv = $('.templateForOneActionDiv').find('div.one_action_div').clone();
          new_action_jsonID = 100*(statejsonID-200) + 201;
          new_action_index = 0;

          newDiv.find("input[name], select[name], textarea[name]").each(function(){
            var name = $(this).attr('name');
            var new_name = name.replace(/\[placeholder\]/g, 'cases[states][' + stateIndex + '][actions]['+ new_action_index +']');
            $(this).attr('name',new_name);
          });

          var idHolder = 'radio'+uniqueButtonIndex+'action'+uniqueActionIndex;
          uniqueButtonIndex += 1;
          uniqueActionIndex += 1;
          newDiv.find("input:radio[id]").each(function() {
            var radio_id= $(this).attr('id');
            var new_radio_id = radio_id.replace(/IDholder/g, idHolder);
            console.log(new_radio_id);
            $(this).attr('id',new_radio_id);

          })

          newDiv.find("label[for]").each(function() {
            var radio_id= $(this).attr('for');
            var new_radio_id = radio_id.replace(/IDholder/g, idHolder);
            console.log(new_radio_id);
             $(this).attr('for',new_radio_id);
          })
        }

        newDiv.find('div.mce-tinymce').each(function(){
          var thistext =  $(this).next('textarea');
          thistext.attr('id', 'tempID');
          thistext.removeAttr('aria-hidden style');
          $(this).remove();
          thistext.removeAttr('id');
        });

      //commented out assignation and display of action and state IDs 20140501
        newDiv.attr('id', 'state_' + statejsonID + '_action_' + new_action_jsonID);
        newDiv.attr('data-arrayIndex', new_action_index);
        newDiv.attr('data-actionjsonID', new_action_jsonID);
        //newDiv.find('span.actionTitle').text('State ID: ' + statejsonID + ' Action ' + new_action_jsonID);
        newDiv.find('input.actionName').attr('value', '');
        newDiv.find('input.actionIDHiddenRow').attr('value', new_action_jsonID);


        newDiv.appendTo(action_div);
        loadTinyMCEEditor();
      }
    });

//ADD STATE

$('#footerAddStateButton').on('click', function(){
  $('#buttonToAddState').click();
  return false;
});


 $('#buttonToAddState').on('click', function(){

//GRAB MOST RECENT STATE DIV'S INDEX AND JSON ID, AND INCREMENT FOR NEW DIV
    var last_index_string=$('.one_state_div').last().attr('data-arrayIndex');
    var last_index= parseInt(last_index_string);
    var new_index = last_index +1;
    var new_index_string = new_index.toString();
    var last_jsonID_string = $('.one_state_div').last().attr('data-jsonID');
    var last_jsonID = parseInt(last_jsonID_string);
    var new_jsonID = last_jsonID + 1;
    var new_jsonID_string = new_jsonID.toString();

//CREATE CONTAINER DIV FOR STATE AND ITS ACTIONS
    var prefix = 'cases[states][' + new_index+ ']';
    $('<div id="" class="dataRow borderDiv one_state_div" data-arrayIndex="" data-jsonID=""></div>').appendTo('.allStatesDiv');
    container_div=$('.one_state_div').last();
    container_div.attr('data-jsonID', new_jsonID);
    container_div.attr('data-arrayIndex', new_index);
    container_div.attr('id', 'state_' + new_jsonID);

    var newDiv = $(".stateWithoutActionsSection").last().clone();
    newDiv.appendTo(container_div);

//clear form values from clone
    newDiv.find("[type=text]").val('');
    newDiv.find("h3").html('New State');


//MAKE CLONE OF ACTIONS_SECTION_CLASS DIV, APPEND TO CONTAINER_DIV, UPDATE INDICES AND JSON IDS
    $('<div id="section_state_' + new_jsonID +'_actions_div" class="actions_section_class row" data-stateIndex = "' +  new_index + '" datajsonID ="' + new_jsonID + '" ></div>').appendTo(container_div);
    newActionSection = $('.actions_section_class').last();
    newActionButtonSection = $('.DivWithAddActionButton').last().clone();
    newActionButtonSection.appendTo(newActionSection);
    $('<div id="ActionsForState_' + new_jsonID + '" class="divWithStateActions multiInputDiv row">').prependTo(newActionSection);

    newDiv.find('div.mce-tinymce').each(function(){
      var thistext =  $(this).next('textarea');
      thistext.attr('id', 'tempID');
      thistext.removeAttr('aria-hidden style');
      $(this).remove();
      thistext.removeAttr('id');
    });

//commented out display of jsonID and input of jsonID so they won't be sent to API; jsonID is still used to create unique divID
    newDiv.attr('data-jsonID', new_jsonID);
    newDiv.attr('data-arrayIndex', new_index);
    // newDiv.find('h3').text('State ID: '+ new_jsonID);
    newDiv.find('textarea').text('');
    // newDiv.find('input.hiddenStateJsonID').attr('value', new_jsonID);
//below were deleted before 20140501
    // newDiv.find('input.hiddenStateJsonID').attr('name', prefix + '[id]');
    // newDiv.find('input.assessmentName').attr('name', prefix + '[name]');
    // newDiv.find('input.assessmentName').attr('value', '');


    newDiv.find("input[name], select[name]").each(function(){
      var name = $(this).attr('name');
      var new_name = name.replace(/\[states\]\[[0-9]+\]/g, '[states]['+ new_index +']');
      $(this).attr('name',new_name);
      $(this).attr('value','');
    });

    // newActionSection.find('h3').text('Actions for State ID ' + new_jsonID);
    //grab button
    newButtonID = 'addActionButtonState_' + new_jsonID;
    newActionButtonSection.find('button').attr('id', newButtonID);
    $("#" + newButtonID).attr('data-statejsonID', new_jsonID);
    $("#" + newButtonID).attr('data-stateIndex', new_index);
    loadTinyMCEEditor();

  });
});