<?php exit; //prevent executing this File

//To associate a list of books associated with an author, simply do the following:
$author = new project\author(); //create a parent object
$author->name = 'Michael Critchton';
$author->Save();
$book = new project\book(); //create a child object
$book->title = 'Jurassic Park';
$book2 = new project\book(); //create a second child object
$book2->title = 'State of Fear';

$bookList = array();
$bookList[] = $book;
$bookList[] = $book2;

$author->SetbookList($bookList); //sets the children list
$author->Save(); //Save and commit the changes to the database 

?>
