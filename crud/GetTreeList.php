<?php exit; //prevent executing this File


// function GetTreeList ($fcv = array(), $depth = 999, $parentId = 0) { ... }

// EXAMPLES
$page = new project\pages();

// If you want to get a hierarchical list of pages whitch are active, you’d write something like this:
$pageList = $page->GetTreeList(array(array("active", "=", "1")));

// If you want to limit the depth of the tree with no filter
$pageList = $page->GetTreeList(array(), 5);

// If you want to get the direct Children (depth=1) with no filter below Node-ID 5
$pageList = $page->GetTreeList(array(), 1, 5);

// getting a whole Tree as UL-List is described in examples/page_tree.php

?>
