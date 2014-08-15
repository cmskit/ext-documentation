<?php exit; //prevent executing this File

// EXAMPLES

// To get a list of all books from your database, simply do the following:
$book = new project\book(); //create a book-object

$bookList = $book->GetList();
foreach ($bookList as $book) {
    echo $book->title;
}


// If you want to get a list of books whose price > 10, you’d write something like this:
$book = new project\book();
$bookList = $user->GetList(array(array("price", ">", 10)));


/* AND - Filter
 * 
 * To get a list of books 
 * 
 * whose price > 10 AND 
 * who are sold more than 200 times
 * 
 * you’d write something like this:
 * */
$book = new project\book();
$bookList = $user->GetList(array(array("price", ">", 10), array("sold_counter", ">", 200)));

// see the same Structure unfolded:
$bookList = $user->GetList(
    array(
        array("price", ">", 10),
        array("sold_counter", ">", 200)
    )
);

/* AND / OR - Filter
 * 
 * To get a list of books
 * 
 * whose price > 10 AND
 * 
 * who are sold more than 200 times OR 
 * who are flagged as "Editors Choice" 
 * 
 * you’d write something like this:
 * */
$book = new project\book();
$bookList = $user->GetList(array(array("price", ">", 10), array(array("sold_counter", ">", 200), array("editors_choice", "=", 1))));

// see the same Structure unfolded:
$bookList = $user->GetList(
    array(
        array("price", ">", 10),
        array(
            array("sold_counter", ">", 200),
            array("editors_choice", "=", 1)
        )
    )
);


?>
