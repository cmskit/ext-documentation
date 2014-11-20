<?php exit; //prevent executing this File

// To retrieve a list of books associated with an author, simply do the following:

$author = new project\author(); //create a parent book
$author->name = 'Michael Critchton';
$author->Save();

$book = new project\book(); //create a child book
$book->title = 'Jurassic Park';
$book->Setauthor($author); //associate child book to parent and save
$book->Save();

$book = new project\book(); //create a second child book
$book->title = 'State of Fear';
$author->Addbook($book); //associate 2nd child to parent book
$book->Save();

$bookList = $author->GetbookList(); //returns a list of children
foreach ($bookList as $book) {
    echo $book->title;
}

?>
