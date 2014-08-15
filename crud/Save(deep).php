<?php exit; //prevent executing this File

// To Save an object "deep", simply do the following:
$book = new project\book(); //create a child object
$book->title = 'State of Fear';
$author = new project\author (); //create a parent object
$author->name = 'Michael Critchton';
$author->Addbook($book);
$author->Save(true); //Saves both author and book objects
// Note: Save(true) is the same as Save():

// To Save an object "shallow", simply do the following:
$book = new project\book(); //create a child object
$book->title = 'State of Fear';
$author = new project\author(); //create a parent object
$author->name = 'Michael Critchton';
$author->Addbook($book);
$author->Save(false); //Saves only the author object
// Note: Save(false) is different from Save():

?>
