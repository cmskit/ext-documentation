<?php exit; //prevent executing this File

/*
 * The Singleton Pattern is one of the GoF (Gang of Four) Patterns. 
 * This particular pattern provides a method for limiting the number of instances of an object to just one. 
 * It's an easy pattern to grasp once you get past the strange syntax used.
 * If you prefer to use this Pattern (some People don't) have a look below
 * */

include 'objects/class.book.php';

// creates the Object book. 
// it behaves like: 
// $obj1 = new project\book();
$obj1 = project\book::instance();

// create another Object using the same Instance
// it behaves like: 
// $obj2 = new project\book();
$obj2 = project\book::instance();

// now you can operate on the two Objects...

?>
