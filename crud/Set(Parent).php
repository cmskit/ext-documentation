<?php exit; //prevent executing this File

/*
Note:
* child->Setparent is almost equivalent to parent->Addchild.
* The main difference is that SetParent requires that the parent object be previously saved before associating a child to it. 
* Depending on the code context, the developer can choose which method is most convenient to him/her.
*/

//To set an author object as the parent of a child object:
$author = new project\author(); //create a parent object
$author->name = 'Michael Critchton';
$author->Save();
$book = new project\book(); //create a child object
$book->title = 'State of Fear';
$book->Setauthor($author); // this associates the parent to the child
$book->Save();


?>
