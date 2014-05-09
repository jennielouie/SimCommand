SimCommand
==========

WebFormSimCommand.php: contains definition of web form and code to pre-load a case from a json file.  Renders form.  When Save button is clicked, it outputs json data to simCommandOutput.php.  This will eventually post to the API.

formTemplateClass.php:  This file defines the "Template" class that the form objects (textareas, checkboxes, etc.) are based on.  Each Template object has an associated HTML render file and array of values used to render that object.

SimCommandTemplates.php:  This is the file where form objects are defined.

"mk**.php" files (several): these contain html templates for various form objects.  This includes input elements as well as headers, footers, navigation bar, etc.

foundationSimCommand.css:  CSS file based on ZURB Foundation 5

simCommand.js: file where all custom js is defined


