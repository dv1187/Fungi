<?php
/**
 * Created by PhpStorm.
 * User: Garrett
 * Date: 3/30/2017
 * Time: 4:20 PM
 */
include "../private_html/setup.php";
include "../private_html/session.php";

if(isset($_POST['submit'])) {
    $name = $_POST["name"];
} else {
    $name = $_GET["name"];
}
// Retrieve fungi info

$query = "Select Scientific_Name_Without, Common_Name, Name_Derivation, Phylum, Sp_Order, Family,
 Comments, Wood_Substrate, Dimensions, Edibility, URL, Authority_Name, Species_ID, Shape_FK, Description from species
 WHERE Scientific_Name_Without = :parameter";
$statement = $pdo->prepare($query);
$statement->bindParam(':parameter', $name, PDO::PARAM_STR);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);

$sciNameNone = $result['Scientific_Name_Without'];
$sciNameWith = $result['Scientific_Name_Without'] . " " . $result['Authority_Name'];
$commonName = $result['Common_Name'];
$nameDerivation = $result['Name_Derivation'];
$phylum = $result['Phylum'];
$spOrder = $result['Sp_Order'];
$family = $result['Family'];
$comment = $result['Comments'];
$woodSubstrate = $result['Wood_Substrate'];
$dimensions = $result['Dimensions'];
$edib = $result["Edibility"];
$url = $result["URL"];
$description = $result["Description"];
$shape_FK = $result["Shape_FK"];

// Retrieve images

$speciesID = $result['Species_ID'];

$query = "SELECT Photo_ID, Photo_Name, Caption FROM photo WHERE Species_FK = :id";
$statement = $pdo->prepare($query);
$statement->bindParam(':id', $speciesID, PDO::PARAM_STR);
$statement->execute();
$photos = array();

while($row = $statement->fetch(PDO::FETCH_ASSOC)){
    $photos[] = array (
        "Photo_Name" => $row['Photo_Name'],
        "Caption" => $row['Caption']
    );
}


//Returns the synonyms that have been selected.
$query3 = "SELECT Synonyms_Name, Synonyms_ID from synonyms Where Species_FK = :a";
$statement3 = $pdo->prepare($query3);
$statement3->bindParam(":a", $speciesID, PDO::PARAM_STR);
$statement3->execute();
$syn_pass = "";
$start = true; // this determines whether or not to append a comma, super janky and weird get over it
while($result3 = $statement3->fetch(PDO::FETCH_ASSOC)){
    if($start){
        $syn_pass .= $result3["Synonyms_Name"];
        $start = false;
    } else {
        $syn_pass = $syn_pass . ", " . $result3["Synonyms_Name"];
    }
}
//put it all into an array
$query3 = "SELECT Synonyms_Name, Synonyms_ID, synonyms_discoverer from synonyms Where Species_FK = :a";
$statement3 = $pdo->prepare($query3);
$statement3->bindParam(":a", $speciesID, PDO::PARAM_STR);
$statement3->execute();
$synArray = array();
$count = 0;
while($result3 =$statement3->fetch(PDO::FETCH_ASSOC)){
    $synArray[$count][0] = $result3["Synonyms_ID"];
    $synArray[$count][1] = $result3["Synonyms_Name"];
    $synArray[$count][2] = $result3["synonyms_discoverer"];
    $count++;
}

//return the shape of the species.
$queryShape = "Select Name from species
	JOIN shape on species.Shape_Fk = shape.Shape_Category_ID
    Where Species_ID = :i";
$statementShape = $pdo->prepare($queryShape);
$statementShape->bindParam(":i", $speciesID);
$statementShape->execute();
$shape = $statementShape->fetch(PDO::FETCH_ASSOC);

//this helps populate the next section
$query4 = "Select * from characteristic
	JOIN characteristic_option on Characteristic_ID = Characteristic_FK
    JOIN species_option on Option_ID = Option_FK
    where Species_FK = :i";
$statement4 = $pdo->prepare($query4);
$statement4->bindParam(":i", $result['Species_ID']);
$statement4->execute();

$e =0;
$checkVariable = array();
while($result4 = $statement4->fetch(PDO::FETCH_ASSOC)){
    $checkVariable[$e] = $result4['Option_Name'];
    $e++;
}


//This query returns all of the variable information for each species as long as it is in the database
$query2 = "Select * from characteristic
	JOIN characteristic_option on Characteristic_ID = Characteristic_FK
    where Category_FK = :id;";
$statement2 = $pdo->prepare($query2);
$statement2->bindParam(":id", $result["Shape_FK"]);
$statement2->execute();
$i = 0;
$q = 0;
$numberOfTypes = 0;
$checkName = "";
$variableData = array();

while($result2 = $statement2->fetch(PDO::FETCH_ASSOC)){
    if($result2["Name"] != $checkName){
        $variableData[$i][0] = "</br><strong>" . $result2["Name"] . ":</strong> </br>"; //this seems sketchy but it works. Live with it.
        $checkName = $result2["Name"];
        $numberOfTypes++;
    }

    $spacelessName = str_replace(" ","", $result2["Name"]);
    if($q == $e){
        $q = 0;
    }
    if($checkVariable[$q] == $result2["Option_Name"]) {
        $variableData[$i][1] = "<input type='radio' checked='checked' name='" . $spacelessName . "' value='"
            . $result2["Option_ID"] . "'> " . $result2['Option_Name'];
        $q++;
    } else {
        $variableData[$i][1] = "<input type='radio' name='" . $spacelessName . "' value='"
            . $result2["Option_ID"] . "'> " . $result2['Option_Name'];
    }
    $i++;
}

//-------- This section runs when the Update button is clicked--------------
if(isset($_POST['submit'])){

    //--------Updates the constants for every species------------
    $query = "UPDATE species
              SET Common_Name = :commonName, Name_Derivation = :nameDerivation,
              Scientific_name_without = :scientificName, Phylum = :phylum, Sp_Order = :order,
              Family = :family, Comments = :comments, Wood_Substrate = :woodSubstrate,
              Dimensions = :dimensions, URL = :url, Edibility = :edib, Description = :description
              WHERE Species_ID = :speciesID";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':commonName', $_POST['commonName']);
    $statement->bindValue(':nameDerivation', $_POST['nameDerivation']);
    $statement->bindValue(':scientificName', $_POST['scientificName']);
    $statement->bindValue(':phylum', $_POST['phylum']);
    $statement->bindValue(':order', $_POST['order']);
    $statement->bindValue(':family', $_POST['family']);
    $statement->bindValue(':comments', $_POST['comments']);
    $statement->bindValue(':woodSubstrate', $_POST['woodSubstrate']);
    $statement->bindValue(':dimensions', $_POST['dimensions']);
    $statement->bindValue(':url', $_POST['url']);
    $statement->bindValue(':edib', $_POST['edib']);
    $statement->bindValue(':description', $_POST["description"]);
    $statement->bindValue(':speciesID', $result['Species_ID']);
    $statement->execute();

    // ------------Update the variable portion --------------------
    $query6 = "SELECT * FROM characteristic where Category_FK = :o";
    $statement6 = $pdo->prepare($query6);
    $statement6->bindValue(':o', $result['Shape_FK']);
    $statement6->execute();

    $query7 = "Select Option_FK from species_option where Species_FK = :i";
    $statement7 = $pdo->prepare($query7);
    $statement7->bindValue(":i", $result["Species_ID"]);
    $statement7->execute();
    $i = 0;
    $optionFK = array();
    while($result7 = $statement7->fetch(PDO::FETCH_ASSOC)){
        $optionFK[$i] = $result7["Option_FK"];
        $i++;
    }

    $i = 0;
    while($result6 = $statement6->fetch(PDO::FETCH_ASSOC)) {

        $valueName = str_replace(" ","", $result6['Name']);
        $query5 = "UPDATE species_option
               SET Option_FK = :oi
               WHERE Species_FK = :si AND Option_FK = :oic";
        $statement5 = $pdo->prepare($query5);
        $statement5->bindValue(':si', $result['Species_ID']);
        $statement5->bindValue(':oi', $_POST[$valueName]);
        $statement5->bindValue(':oic', $optionFK[$i]);
        $statement5->execute();
        $i++;
    }


    //-----------Updates However many syns exist--------------
    foreach($synArray as $syn){
        $id = $syn[0];

        $synQ = "UPDATE synonyms set Synonyms_Name = :syn, synonyms_discoverer = :dis where Synonyms_ID = :sid";
        $stateQ = $pdo->prepare($synQ);
        $stateQ->bindValue(':syn', $_POST["sci" . $id]);
        $stateQ->bindValue(':dis', $_POST["dis" . $id]);
        $stateQ->bindValue(':sid', $id);
        $stateQ->execute();

        if($_POST['del' . $id] == "yes"){
            $synD = "DELETE FROM synonyms WHERE Species_FK = :si AND Synonyms_ID = :sn";
            $stateD = $pdo->prepare($synD);
            $stateD->bindValue(':si', $result['Species_ID']);
            $stateD->bindValue(':sn', $id);
            $stateD->execute();
        }
    }

    $all = $_POST['synonyms_discoverer'];
    $query = "INSERT INTO synonyms (Synonyms_ID, Species_FK, Synonyms_Name, Synonyms_Discoverer)
                  VALUES (DEFAULT, :speciesFK, :syn, :synonyms_discoverer)";
    $statement = $pdo->prepare($query);
    foreach($_POST['synonyms'] as $key => $new){
        $statement->bindParam(':speciesFK', $speciesID);
        $statement->bindParam(':syn', $new);
        $statement->bindParam(':synonyms_discoverer', $all[$key]);
        $statement->execute();
    }


    //---------------- run these pieces again to get the updates ----------------------
    $query = "Select Scientific_Name_Without, Common_Name, Name_Derivation, Phylum, Sp_Order, Family,
 Comments, Wood_Substrate, Dimensions, Edibility, URL, Authority_Name, Species_ID, Shape_FK, Description from species
 WHERE Scientific_Name_Without = :parameter";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':parameter', $_POST['scientificName'], PDO::PARAM_STR);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    $sciNameNone = $result['Scientific_Name_Without'];
    $sciNameWith = $result['Scientific_Name_Without'] . " " . $result['Authority_Name'];
    $commonName = $result['Common_Name'];
    $nameDerivation = $result['Name_Derivation'];
    $phylum = $result['Phylum'];
    $spOrder = $result['Sp_Order'];
    $family = $result['Family'];
    $comment = $result['Comments'];
    $woodSubstrate = $result['Wood_Substrate'];
    $dimensions = $result['Dimensions'];
    $edib = $result["Edibility"];
    $description = $result["Description"];
    $url = $result["URL"];

    $query3 = "SELECT Synonyms_Name, Synonyms_ID, synonyms_discoverer from synonyms Where Species_FK = :a";
    $statement3 = $pdo->prepare($query3);
    $statement3->bindParam(":a", $speciesID, PDO::PARAM_STR);
    $statement3->execute();
    $synArray = array();
    $count = 0;
    while($result3 =$statement3->fetch(PDO::FETCH_ASSOC)){
        $synArray[$count][0] = $result3["Synonyms_ID"];
        $synArray[$count][1] = $result3["Synonyms_Name"];
        $synArray[$count][2] = $result3["synonyms_discoverer"];
        $count++;
    }

    //varibale portion
    $query4 = "Select * from characteristic
	JOIN characteristic_option on Characteristic_ID = Characteristic_FK
    JOIN species_option on Option_ID = Option_FK
    where Species_FK = :i";
    $statement4 = $pdo->prepare($query4);
    $statement4->bindParam(":i", $result['Species_ID']);
    $statement4->execute();

    $e =0;
    $checkVariable = array();
    while($result4 = $statement4->fetch(PDO::FETCH_ASSOC)){
        $checkVariable[$e] = $result4['Option_Name'];
        $e++;
    }

    unset($variableData);
//This query returns all of the variable information for each species as long as it is in the database
    $query2 = "Select * from characteristic
	JOIN characteristic_option on Characteristic_ID = Characteristic_FK
    where Category_FK = :id;";
    $statement2 = $pdo->prepare($query2);
    $statement2->bindParam(":id", $result["Shape_FK"]);
    $statement2->execute();
    $i = 0;
    $q = 0;
    $numberOfTypes = 0;
    $checkName = "";
    $variableData = array();

    while($result2 = $statement2->fetch(PDO::FETCH_ASSOC)){
        if($result2["Name"] != $checkName){
            $variableData[$i][0] = "</br><strong>" . $result2["Name"] . ":</strong> </br>"; //this seems sketchy but it works. Live with it.
            $checkName = $result2["Name"];
            $numberOfTypes++;
        }

        $spacelessName = str_replace(" ","", $result2["Name"]);
        if($q == $e){
            $q = 0;
        }
        if($checkVariable[$q] == $result2["Option_Name"]) {
            $variableData[$i][1] = "<input type='radio' checked='checked' name='" . $spacelessName . "' value='"
                . $result2["Option_ID"] . "'> " . $result2['Option_Name'];
            $q++;
        } else {
            $variableData[$i][1] = "<input type='radio' name='" . $spacelessName . "' value='"
                . $result2["Option_ID"] . "'> " . $result2['Option_Name'];
        }
        $i++;
    }

}

$smarty->assign('synArray', $synArray);
$smarty->assign('variableData', $variableData);
$smarty->assign('shape', $shape['Name']);
$smarty->assign('photos', $photos);
$smarty->assign('commonName', $commonName);
$smarty->assign('nameDerivation', $nameDerivation);
$smarty->assign('phylum', $phylum);
$smarty->assign('spOrder', $spOrder);
$smarty->assign('family', $family);
$smarty->assign('comment', $comment);
$smarty->assign('woodSubstrate', $woodSubstrate);
$smarty->assign('dimensions', $dimensions);
$smarty->assign('sciNameNone', $sciNameNone);
$smarty->assign('sciNameWith', $sciNameWith);
$smarty->assign('edib', $edib);
$smarty->assign('url', $url);
$smarty->assign('syn', $syn_pass);
$smarty->assign('description', $description);
$smarty->display('speciesUpdate.tpl');

?>