<?php exit; //prevent executing this File

$book = new project\book(); //create a book object
$book->title = 'Php is cool'; //assign a title to the book
$book->Save(); //this will insert the this object into the table
$book->title = 'Php is very cool'; //modify the title of the book
$book->SaveNew(); //this will create a 2nd record.

?>
