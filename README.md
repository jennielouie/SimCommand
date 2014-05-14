SimCommand
==========

index.php:  Welcome page.  Lets user view all cases (SimCommandGetAllCases.php) or start a new case (SimCommandNewCaseForm.php).

SimCommandGetAllCases.php:  Sends HTTP GET request for all cases and renders view displaying case summaries.  Includes links to view/edit one specific case.

SimCommandEditOneCaseForm.php:  contains definition of web form and code to pre-load a case from a HTTP GET response.  Renders form. Contains definitions for state, action, assessment objects that includes id and case/state ids. HTTP put/post (if add new elements) are handled by SimCommandPutCase.php.

SimCommandPutCase.php: json-encodes case data containing edits, as entered in SimCommandEditOneCaseForm.php; separates the inputs according to API endpoint (cases, states, actions, assessments, physicalexam) makes POST/PUT HTTP REQUESTS to corresponding API endpoints.

SimCommandNewCaseForm.php:  contains definition of web form and renders form.  HTTP post request made by SimCommandPostNewCase.php

SimCommandPostNewCase.php: sends HTTP POST request to API with json-encoded case data, as entered in SimCommandNewCaseForm.php.



formTemplateClass.php:  This file defines the "Template" class that the form objects (textareas, checkboxes, etc.) are based on.  Each Template object has an associated HTML render file and array of values used to render that object.

SimCommandTemplates.php:  This is the file where form objects are defined.  The array of template values includes some that are no longer (or not often) used such as entity, btnlabel, btnname.  The tooltips are placeholders for clarifications or instructions about a particular element; Pamela was to provide this information.

SimCommandConstants: where url root for API and authentication token are defined.  These are included in any file that includes an API call.

"mk**.php" files (several): these contain html templates for various form objects.  This includes input elements as well as headers, footers, navigation bar, etc.  Note there are separate mk* set files to render *existing* states, assessments, actions, and *new* states, assessments, actions.  The main difference is that the existing states/assessments/actions will have ids included as hidden inputs.

foundationSimCommand.css:  CSS file based on ZURB Foundation 5

simCommand.js: file where all custom js is defined (add/delete row)

Relative filepaths:  found in "SimCommandTemplates.php", "SimCommand" files, "mk" files.

Delete:  uses data-attributes to specify endpoint (data-endpoint) and id of record to be deleted (data-jsonid or data-actionjsonid).  These are in the mkassessment, mkonestate, mkoneaction, mkallstates, and simcommand.js files.

Notes
