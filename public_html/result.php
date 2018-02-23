<?php
//Fungi Team 2015
include "../private_html/setup.php";

$name = $_GET["name"];

session_start();
$smarty->assign("admin", "false");
if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    $smarty->assign("admin", "true");
}

// Retrieve fungi info

$query = "Select Scientific_Name_Without, Common_Name, Name_Derivation, Phylum, Sp_Order, Family,
 Comments, Wood_Substrate, Dimensions, Edibility, URL, Authority_Name, Species_ID, Description from species
 WHERE Scientific_Name_Without = :parameter";
$statement = $pdo->prepare($query);
$statement->bindParam(':parameter', $name, PDO::PARAM_STR);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);

$sciNameNone = $result['Scientific_Name_Without'];
$sciNameWith = $result['Scientific_Name_Without'];
$authName = $result['Authority_Name'];
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


$query3 = "SELECT Synonyms_Name, Synonyms_Discoverer from synonyms Where Species_FK = :a";
$statement3 = $pdo->prepare($query3);
$statement3->bindParam(":a", $speciesID, PDO::PARAM_STR);
$statement3->execute();
$syn_pass = "";
$start = true; // this determines whether or not to append a comma, super janky and weird get over it
while($result3 = $statement3->fetch(PDO::FETCH_ASSOC)){
    if($start){
        $syn_pass .= $result3["Synonyms_Name"] . " " . $result3["Synonyms_Discoverer"];
        $start = false;
    } else {
        $syn_pass = $syn_pass . ", " . $result3["Synonyms_Name"] . " ". $result3["Synonyms_Discoverer"];
    }
}

$queryShape = "Select Name from species
	JOIN shape on species.Shape_Fk = shape.Shape_Category_ID
    Where Species_ID = :i";
$statementShape = $pdo->prepare($queryShape);
$statementShape->bindParam(":i", $speciesID);
$statementShape->execute();
$shape = $statementShape->fetch(PDO::FETCH_ASSOC);

$variableData = array();

$query2 = "Select Option_Name, name from species
	JOIN species_option on Species_FK = Species_ID
    JOIN characteristic_option on Option_FK = Option_ID
    JOIN characteristic on Characteristic_FK = Characteristic_ID
    where Species_ID = :id";
$statement2 = $pdo->prepare($query2);
$statement2->bindParam(":id", $result["Species_ID"]);
$statement2->execute();
$i = 0;
while($result2 = $statement2->fetch(PDO::FETCH_ASSOC)){
    $variableData[$i][0] = "<strong>" . $result2["name"] . ":</strong>"; //this seems sketchy but it works. Live with it.
    $variableData[$i][1] = $result2["Option_Name"];
    $i++;
}

$smarty->assign('authName', $authName);
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
$smarty->assign('description', $description);
$smarty->assign('url', $url);
$smarty->assign('syn', $syn_pass);
$smarty->display('result.tpl');
?>