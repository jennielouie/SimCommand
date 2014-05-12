SimCommand
==========
SimCommandGetAllCases.php;  Sends HTTP GET request for all cases and renders view displaying case summaries.  Includes links to view/edit one specific case.

SimCommandEditOneCaseForm.php:  contains definition of web form and code to pre-load a case from a HTTP GET response.  Renders form. Contains definitions for state, action, assessment objects that includes id and case/state ids. 

SimCommandPutCase.php: json-encodes case data containing edits; compares edited data to pre-edit json string, makes POST/PUT HTTP REQUESTS to corresponding API endpoints.

SimCommandNewCaseForm.php:  contains definition of web form and renders form.

SimCommandPostNewCase.php: sends HTTP POST request to API with json-encoded case data.



formTemplateClass.php:  This file defines the "Template" class that the form objects (textareas, checkboxes, etc.) are based on.  Each Template object has an associated HTML render file and array of values used to render that object.

SimCommandTemplates.php:  This is the file where form objects are defined.

"mk**.php" files (several): these contain html templates for various form objects.  This includes input elements as well as headers, footers, navigation bar, etc.

foundationSimCommand.css:  CSS file based on ZURB Foundation 5

simCommand.js: file where all custom js is defined

Relative filepaths:  found in "SimCommandTemplates.php", "SimCommand" files, "mk" files.

Delete:  uses data-attributes to specify endpoint (data-endpoint) and id of record to be deleted (data-jsonid or data-actionjsonid).  These are in the mkassessment, mkonestate, mkoneaction, mkallstates, and simcommand.js files.

