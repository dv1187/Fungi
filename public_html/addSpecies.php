<?php
session_start();
include "../private_html/setup.php";


//------ Build Associative Shape Array ------
$query = "SELECT Shape_Category_ID, Name FROM shape";

$statement = $pdo->prepare($query);
$statement->execute();
$shapeResults = array();
if ($statement->rowCount() > 0) {
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $shapeResults[$row['Shape_Category_ID']] = $row['Name'];
    }
} else {
    $smarty->assign("error1", 'Database Error');
}

$smarty->assign("shapeArray", $shapeResults);

//----- Check if the add species submit button was hit ----
if (!empty($_GET['addSpecies'])) {
    $query = "SELECT Shape_Category_ID, Name FROM shape";

    $statement = $pdo->prepare($query);
    $statement->execute();
    $shapeResults = array();
    if ($statement->rowCount() > 0) {
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $shapeResults[$row['Shape_Category_ID']] = $row['Name'];
        }
    } else {
        $smarty->assign("error1", 'Database Error');
    }
    $smarty->assign("shapeArray", $shapeResults);
    // ------ Input Error Checking ------

    $errorFlag = false;
    $smarty->assign('errorFlag', $errorFlag);

    $msg = "<strong>An error occurred!</strong>";
    $msg2 = "<strong>Add failed!</strong><br>";


    if ($_GET["scientificName"] == "") {
        $errorFlag = true;
        $smarty->assign("msgSci", 'Scientific Name Missing');
    }


    //--- To repopulate the form upon submit or refresh ---//
    $smarty->assign('scientificName', $_GET["scientificName"]);
    
    $smarty->assign('authorityName', $_GET["authorityName"]);
    $smarty->assign('commonName', $_GET["commonName"]);
    $smarty->assign('nameDerivation', $_GET["nameDerivation"]);
    $smarty->assign('synonyms', $_GET["synonyms"]);

    $smarty->assign('synonyms_discoverer', $_GET["synonyms_discoverer"]);

    $smarty->assign('phylum', $_GET["phylum"]);
    $smarty->assign('order', $_GET["order"]);
    $smarty->assign('family', $_GET["family"]);
    $smarty->assign('woodSubstrate', $_GET["woodSubstrate"]);
    $smarty->assign('dimensions', $_GET["dimensions"]);
    $smarty->assign('edibility', $_GET["edibility"]);
    $smarty->assign('description', $_GET["description"]);
    $smarty->assign('comments', $_GET["comments"]);
    $smarty->assign('moreInfo', $_GET["moreInfo"]);
    $smarty->assign('shape', $_GET["shape"]);

    //Create Array to store Char Option values
    $optionArray = array();

    //--- Cup-and-Saucer Info --//
    if (isset($_GET["fertileSurfaceColor"])) {
        $smarty->assign('color', $_GET["fertileSurfaceColor"]);
        $optionArray[] = $_GET["fertileSurfaceColor"];
    }
    if (isset($_GET["conspicuousStalk"])) {
        $smarty->assign('stalk', $_GET["conspicuousStalk"]);
        $optionArray[] = $_GET["conspicuousStalk"];
    }
    if (isset($_GET["conspicuousHair"])) {
        $smarty->assign('hair', $_GET["conspicuousHair"]);
        $optionArray[] = $_GET["conspicuousHair"];
    }
    if (isset($_GET["fruitBody"])) {
        $smarty->assign('fruit', $_GET["fruitBody"]);
        $optionArray[] = $_GET["fruitBody"];
    }
    if (isset($_GET["unusual"])) {
        $smarty->assign('unusual', $_GET["unusual"]);
        $optionArray[] = $_GET["unusual"];
    }

    $query = 'SELECT Scientific_Name_Without FROM species WHERE Scientific_Name_Without = "'.$_GET['scientificName'].'"';
    $statement = $pdo->prepare($query);
    $statement->execute();

    if ($statement->rowCount() > 0) {
        $errorFlag = true;
        $smarty->assign("dup", 'This species already exists within the database.');
    }

    $msg = $msg . "<br>";
    if ($errorFlag) {
        $smarty->assign('msg', $msg);
        $smarty->display('addSpeciesNew.tpl');
        exit();
    } else {

        // ------ Queries ------//
        $query = "INSERT INTO species (Species_ID, Common_Name, Name_Derivation, Scientific_Name_Without, Phylum, Sp_Order, Family,
               Comments, Wood_substrate, Dimensions, Shape_FK, URL, Authority_Name, Edibility, Description)
              VALUES (DEFAULT, :commonName, :nameDerivation, :scientificName, :phylum, :order, :family,
               :comments, :woodSubstrate, :dimensions, :shapefk, :url, :authorityName, :edibility, :description)";


        $statement = $pdo->prepare($query);
        $statement->bindParam(':scientificName', $_GET['scientificName']);
        $statement->bindParam(':authorityName', $_GET['authorityName']);
        $statement->bindParam(':nameDerivation', $_GET['nameDerivation']);
        $statement->bindParam(':commonName', $_GET['commonName']);
        $statement->bindParam(':phylum', $_GET['phylum']);
        $statement->bindParam(':order', $_GET['order']);
        $statement->bindParam(':family', $_GET['family']);
        $statement->bindParam(':woodSubstrate', $_GET['woodSubstrate']);
        $statement->bindParam(':dimensions', $_GET['dimensions']);
        $statement->bindParam(':shapefk', $_GET['shape']);
        $statement->bindParam(':url', $_GET['moreInfo']);
        $statement->bindParam(':edibility', $_GET['edibility']);
	$statement->bindParam(':description', $_GET['description']);
        $statement->bindParam(':comments', $_GET['comments']);
        $statement->execute();
        $speciesFK = $pdo->lastInsertId();

        $smarty->assign('speciesFK', $speciesFK);

        //---Insert Synonyms Table---//
	$all = $_GET['synonyms_discoverer'];
        $query = "INSERT INTO synonyms (Synonyms_ID, Species_FK, Synonyms_Name, Synonyms_Discoverer)
                  VALUES (DEFAULT, :speciesFK, :syn, :synonyms_discoverer)";
        $statement = $pdo->prepare($query);
	foreach($_GET['synonyms'] as $key => $new){
        $statement->bindParam(':speciesFK', $speciesFK);
        $statement->bindParam(':syn', $new);
	$statement->bindParam(':synonyms_discoverer', $all[$key]);
        $statement->execute();
	}



        //----Species_Option Table----//
        $query_string = "INSERT INTO species_option (Species_FK, Option_FK) VALUES (:speciesFK, :charOption)";
        $statement = $pdo->prepare($query_string);
        foreach($optionArray as $option) {
            $statement->bindParam(':speciesFK', $speciesFK);
            $statement->bindParam(':charOption', $option);
            $statement->execute();
        }



        /* $query = "INSERT INTO species_option (Species_FK, Option_FK)
              VALUES (:speciesFK, :stalk), (:speciesFK, :hair), (:speciesFK, :fruit), (:speciesFK, :unusual), (:speciesFK, :color)";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':speciesFK', $speciesFK);
        $statement->bindParam(':stalk', $_GET['conspicuousStalk']);
        $statement->bindParam(':hair', $_GET['conspicuousHair']);
        $statement->bindParam(':fruit', $_GET['fruitBody']);
        $statement->bindParam(':unusual', $_GET['unusual']);
        $statement->bindParam(':color', $_GET['fertileSurfaceColor']);
        $statement->execute();
        $casID = $pdo->lastInsertId(); */

        $msg3 = "Add Successful!";
    }


    if (isset($msg3)) {
        $smarty->assign('msg3', $msg3);
    }


}
$smarty->display('addSpeciesNew.tpl');
