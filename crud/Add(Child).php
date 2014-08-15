<?php exit; //prevent executing this File

// To Add a book object to an author object, simply do the following:

$book = new project\book(); //create a child object
$book->title = 'State of Fear';
$author = new project\author(); //create a parent object
$author->name = 'Michael Critchton';
$author->Addbook($book); //associate child to parent


?>
