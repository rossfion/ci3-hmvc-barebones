# ci3-hmvc-barebones
 
Initial set up files for Smarty developers creating Codeigniter 3 projects using HMVC principles.

This is a barebones setup which includes the following:

1. Codeigniter web framework - version 3.1.6 (MIT License)
2. Smarty templating engine - version 3.1.30 (LGPL License)
3. Modular Extensions - version 5.5 from Wiredesignz (MIT License - er...I think).

The idea came from a blog post by Tariqul Islam - (phpclasses.org). My setup does NOT include Doctrine ORM. The version of Codeigniter used then was version 2.2.0. The Codeigniter welcome screen includes directions to the controller and view file, which are now located in the modules folder. The view file extension is .tpl.

An issue that appears to be ongoing is an error (perhaps this has been fixed?) is an object_to_array error in the Loader.php file from the Modular Extensions project. A fix has been applied and the source can be found within the file.