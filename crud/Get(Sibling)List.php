<?php exit; //prevent executing this File

//To retrieve a list of magazines associated with a subscriber, simply do the following:
$magazine = new project\magazine();
$magazine->title = 'Newsweek';
$subscriber = new project\subscriber();
$subscriber->name = 'John';
$subscriber->Addmagazine($magazine);
$subscriber->Save();

$magazine2 = new project\magazine();
$magazine2->title = 'Popular Mechanics';
$subscriber->Addmagazine($book);
$magazineList = $subscriber->GetmagazineList();
foreach ($magazineList as $magazine) {
    echo $magazine->title;
}

?>
