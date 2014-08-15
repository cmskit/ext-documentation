<?php exit; //prevent executing this File

$book = new project\book(); //create a book object
$book->Get(1)  //Gets book whose id is 1
echo $book->title;  //This should output the Title of the Book 

?>
