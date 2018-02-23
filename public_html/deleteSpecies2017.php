<?php
include "../private_html/setup.php";

$deletevar = $_GET['deletevar'];
$editvar = $_GET['editvar'];
$query = "DELETE FROM species_option WHERE Species_FK = :removedSpecies";

$statement = $pdo->prepare($query);
$statement->bindValue(':removedSpecies', $deletevar);
$statement->execute();

$query = "DELETE FROM species WHERE Species_ID = :removedSpecies";

$statement = $pdo->prepare($query);
$statement->bindValue(':removedSpecies', $deletevar);
$statement->execute();

$data = array();
$newdata = array();
$tableIndex=0;

$query = "SELECT Scientific_Name_Without, URL, Common_Name, Phylum, Sp_Order, Family, Species_ID FROM species ORDER BY Scientific_Name_Without";

$statement = $pdo->prepare($query);
$name = "Complete";
$statement->execute();
$result = $statement->fetchAll();

$tableIndex = 0;

$urlToBePassed = array();

//loop through list of species
for ($k = 0; $k < count($result); $k++) {

    $urlToBePassed = urlencode($result[$k][0]);

    //add scientific name
    $newdata[$k][$tableIndex] = "<a href='result.php?name=" . $urlToBePassed . "'>"
        . $result[$k][0] . "</a>";
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
    $syn = $result[$k][6];
    $query3 = "SELECT Synonyms_Name from synonyms Where Species_FK = :a";
    $statement3 = $pdo->prepare($query3);
    $statement3->bindParam(":a", $result[$k]['Species_ID']);
    $statement3->execute();
    $syn_pass = "";
    $start = true; // this determines whether or not to append a comma, super janky and weird get over it
    while ($result3 = $statement3->fetch(PDO::FETCH_ASSOC)) {
        if ($start) {
            $syn_pass .= $result3["Synonyms_Name"];
            $start = false;
        } else {
            $syn_pass = $syn_pass . ", " . $result3["Synonyms_Name"];
        }
    }
    $newdata[$k][$tableIndex] = $syn_pass;
    $tableIndex++;

    //delete data
    $deletevar = $result[$k][6];
    $newdata[$k][$tableIndex] = "<a href = 'deleteSpecies2017.php?deletevar=$deletevar' class=\"btn btn-default btn-md add form-control\"> Delete </a>";
    $tableIndex++;
	
    //Edit data
    $editvar = $result[$k][7];
    $newdata[$k][$tableIndex] = "<a href = 'speciesUpdate.php?name=$editvar' class=\"btn btn-default btn-md add form-control\"> Edit </a>";
    $tableIndex++;

}

$tableIndex2=0;

$query2 = "SELECT Name, Description, Shape_Category_ID FROM shape ORDER BY Name";

$statement2 = $pdo->prepare($query2);
$shapename = "Complete";
$statement2->execute();
$result2 = $statement2->fetchAll();

$tableIndex2 = 0;


//loop through list of shapes
for ($i = 0; $i < count($result2); $i++) {

    //shape name
    $data[$i][$tableIndex2] = $result2[$i][0];
    $tableIndex2++;

    //description
    $data[$i][$tableIndex2] = $result2[$i][1];
    $tableIndex2++;

    //delete data
    $deleteshapevar = $result2[$i][2];
    $data[$i][$tableIndex2] = "<a href = 'deleteShape.php?deleteshapevar=$deleteshapevar' class=\"btn btn-default btn-md add form-control\"> Delete </a>";
    $tableIndex2++;
    }

$smarty->assign('resultCount', count($result));
$smarty->assign('resultCount2', count($result2));
$smarty->assign('name', $name);
$smarty->assign('shapename', $shapename);
$smarty->assign('data', $data);
$smarty->assign('newdata', $newdata);
$smarty->display("admin.tpl");

?>