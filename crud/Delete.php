<?php exit; //prevent executing this File

$book = new project\book(); // create a book object
$book->Get(1); // gets book whose id is 1
$book->Delete(); // deletes the record from the database.

?>
