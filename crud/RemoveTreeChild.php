<?php exit; //prevent executing this File

// to remove a Branch from a Parent Node of a Tree/Graph simply do the following:

$pageobject1 = new project\page();
$pageobject2 = new project\page();

$parent = $pageobject1->Get(1);
$child = $pageobject2->Get(5);

// removes the child-branch from parent-object (child-branch becomes orphans)
$parent->Removepage($child);

?>
