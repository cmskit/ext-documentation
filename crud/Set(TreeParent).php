<?php exit; //prevent executing this File

/*
Note:
* child->Setparent is almost equivalent to parent->Addchild.
* The main difference is that SetParent requires that the parent object be previously saved before associating a child to it. 
* Depending on the code context, the developer can choose which method is most convenient to him/her.
*/

$pageobject1 = new project\page();
$pageobject2 = new project\page();

$parent = $pageobject1->Get(1);
$child = $pageobject2->Get(5);

// adds child-branch to parent simply do the following:
$child->Setpage($parent);

?>
