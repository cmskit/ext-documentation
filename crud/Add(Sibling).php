<?php exit; //prevent executing this File

//To Add a book object to an author object, simply do the following:

$magazine = new project\magazine(); //create a Magazine Object
$magazine->title = 'Popular Mechanics';

$subscriber = new project\subscriber(); //create a Subscriber Object
$subscriber->name = 'John Smith';
$subscriber->Addmagazine($magazine); //associate Magazine to subscriber

$subscriber->Save(); // save the Relation to the Database

?>
