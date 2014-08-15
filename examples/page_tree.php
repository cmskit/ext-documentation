<?php exit; //prevent executing this File
/*
 * simple Example to build a UL-List out of a Tree-Object
 * 
 * */

// define Object
$tree = new project\mytree();

// get the Tree-Array: no Filter (empty fcv-array), with max-Depth 5, from root-Level ("id"=0)
$list = $tree->GetTreeList(array(), 5, 0);

// first define the Level below Root-Level (0)
$level = -1;

//define the starting-Level as false
$entryLevel = false;

// HTML-Holder
$html = '';


foreach ($list as $item) {

    // record the Start-Level
    if (!$entryLevel) {
        $entryLevel = $item->treelevel;
    }

    // actual Level is below previous one => we have to close ULs
    if ($item->treelevel < $level) {
        $html .= '</li>';
        $html .= str_repeat('</ul></li>', ($level - $item->treelevel));
    }

    // actual Level is bigger than previous one => we have to open ULs
    if ($item->treelevel > $level) {
        $html .= str_repeat('<ul>', ($item->treelevel - $level));
    }

    // actual Level is the same => we only have to close a LI
    if ($item->treelevel == $level) {
        $html .= '</li>';
    }

    // open LI and create a Link (we assume a Column called "name" here)
    $html .= '<li><a href="?page=' . $item->id . '">' . $item->name . '</a>';

    // store actual Level for the next Round
    $level = $item->treelevel;

}

// If the Level is >= 0 we have to close town to Start-Level
if ($level >= $entryLevel) {
    $html .= str_repeat('</li></ul>', $level - $entryLevel);
}

// and close the whole UL-List
$html .= '</li></ul>';

echo $html;

?>
