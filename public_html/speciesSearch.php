<?php

include "../private_html/setup.php";


// get the q parameter from URL
$q = $_REQUEST["q"];
$q .= "%"; //this sets q up to grab the names in alphabetical order, starting from the left most.

$query = "SELECT Scientific_Name, URL, Common_Name, Phylum, Sp_Order, Family, Synonyms FROM species WHERE Scientific_Name LIKE :a ORDER BY Scientific_Name";

$statement = $pdo->prepare($query);
$statement-> bindParam(":a", $q);
$statement->execute();

$result = $statement->fetchAll();
$tableIndex = 0;

$newdata = array();
for ($k = 0; $k < count($result); $k++) {

    $urlToBePassed = urlencode($result[$k][0]);

    //add scientific name
    $newdata[$k][$tableIndex] = "<a href='result.php?name=".$urlToBePassed."'>"
        .$result[$k][0]."</a>";
    $tableIndex++;

    //common name
    $newdata[$k][$tableIndex] = $result[$k][2];
    $tableIndex++;

    //phylum
    $newdata[$k][$tableIndex] = $result[$k][3];
    $tableIndex++;

    //sp_order
    $newdata[$k][$tableIndex] = $result[$k][4];
    $tableIndex++;

    //family
    $newdata[$k][$tableIndex] = $result[$k][5];
    $tableIndex++;

    //synonyms
    $newdata[$k][$tableIndex] = $result[$k][6];
    $tableIndex++;

}
$name = "test";
$data = $newdata;

$smarty->assign('resultCount', count($result));
$smarty->assign('name', $name);
$smarty->assign('data', $data);
$smarty->assign('newdata', $newdata);
$smarty->display('speciesSearch.tpl');

//foreach($newdata as $fungus){
//    foreach($fungus as $info) {
//        echo $info . " ";
//    }
//    echo "</br>";
//}
