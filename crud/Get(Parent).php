<?php exit; //prevent executing this File

// To get the parent object of a child object:

$author = new project\author(); //create a parent object
$author->name = 'Michael Critchton';
$book = new project\book(); //create a child object
$book->title = 'State of Fear';
$author->Addbook($book); // ( see below) .
$author->Save(true);
$author = $book->Getauthor(); // retrieves the parent of the book object
echo $author->name; // prints “Michael Critchton 

?>
