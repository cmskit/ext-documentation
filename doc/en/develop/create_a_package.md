# How to create a package

cms-kit is extendable through packages.


A package is a folder, containing some functionalities whitch should contain


* readme.md => The main readme.md is placed in the package root so it can be displayed as the main package description (in package manager as well as in git-repositories like github). The description language should be english.
* composer.json => To distribute the package as composer package this is required.

In addition it is possible to place some folders inside of the package.

* doc/
    * en/
    * ../ => Language specific documentations (md-
* config/ => Configurations 


Depending of the package type 

## Extensions


*optional*

* hooks.php => This can be imported via package manager

## Templates

*required*

* backend.php => This is included from backend/backend.php building the interface for the template
* crud.php => This is included from backend/crud.php extending+providing the AJAC callbacks coming from backend.php



## Admin wizards

*required*

* index.php => This is called as a dialog building the interface for the wizard

## Wizards

*required*

* index.php => This is called as a dialog building the interface for the wizard
* include.php => This is included as a javascript file embedding the interface into the main edit area
