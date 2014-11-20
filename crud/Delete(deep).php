<?php exit; //prevent executing this File

// To Delete an object ‘deep’, simply do the following:
$book = new project\book(); // create a child object
$book->title = 'State of Fear';
$author = new project\author (); // create a parent object
$author->name = 'Michael Critchton';
$author->Addbook($book);
$author->Delete(true); // deletes both author and book

// Note: Delete(true) different from Delete():

// To Delete an object ‘shallow’, simply do the following:
$book = new project\book(); // create a child object
$book->title = 'State of Fear';
$author = new project\author(); // create a parent object
$author->name = 'Michael Critchton';
$author->Addbook($book);
$author->Delete(false); // Deletes only author object

// Note: Delete(false) is the same as Delete() 

?>
