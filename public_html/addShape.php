<?php
session_start();
include "../private_html/setup.php";

//if(!isset($_SESSION['admin'])){
//    $smarty->display('index.tpl');
//    exit();
//}


$smarty->assign("isAdmin", true);
$smarty->assign("adminActive", "active");
$smarty->assign("title", "Admin");

//----- Check if the add shape submit button was hit ----
if (!empty($_POST["addShape"])) {

    $errorFlag = false;
    $smarty->assign('errorFlag', $errorFlag);

    $msg = "";

    // ------ Input Error Checking ------
    if ($_POST["shapeName"] == "") {
        $errorFlag = true;
        $msg .= "<br>Shape Name must be entered";
    } else {
        $smarty->assign('shapeName', $_POST["shapeName"]);
    }
    if ($_POST["description"] == "") {
        $errorFlag = true;
        $msg .= "<br>Shape Description must be entered";
    } else {
        $smarty->assign('description', $_POST["description"]);
    }
    if (isset($_POST["newCharName"])) {
        $smarty->assign('charName', $_POST['newCharName']);
    }
    if (isset($_POST["newOptName"])) {
        $smarty->assign('optName', $_POST['newOptName']);
    }

    $path = 'Images/';
    $filepath = $path . $_FILES["myimage"]["name"];
    
    copy($_FILES["myimage"]["tmp_name"], $filepath);

    $query = 'SELECT Name FROM shape WHERE Name = "'.$_POST['shapeName'].'"';
    $statement = $pdo->prepare($query);
    $statement->execute();

    if ($statement->rowCount() > 0) {
        $errorFlag = true;
        $smarty->assign("dup", 'This shape already exists within the database.');
    }

    if ($errorFlag) {
        $msg = $msg . "<br>";
        $smarty->assign('msg', $msg);
        $smarty->display('addShape.tpl');
        exit();
    }

    $IDArray = array();
    // ------ Queries ------
    $query = "INSERT INTO shape (Shape_Category_ID, Name, Description, Image)
              VALUES (DEFAULT, :shapeName, :description, :image)";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':shapeName', $_POST["shapeName"]);
    $statement->bindValue(':description', $_POST["description"]);
    $statement->bindValue(':image', $_FILES["myimage"]["name"]);
    $statement->execute();
    $shapeID = $pdo->lastinsertid();

    if (!empty($_POST["newCharName"]) && $_POST["newCharName"] != '') {
        $query = "INSERT INTO characteristic (Characteristic_ID , Name, Category_FK )
              VALUES (DEFAULT, :newCharName, :shapeID)";
        $statement = $pdo->prepare($query);
        foreach($_POST["newCharName"] as $new) {
            if ($new != '') {
                $statement->bindValue(':newCharName', $new);
                $statement->bindValue(':shapeID', $shapeID);
                $statement->execute();

                $charID = $pdo->lastInsertId();
                $IDArray[] = $charID;
            }
        }

        if(!empty($_POST["newOptName"])) {
            $query = "INSERT INTO characteristic_option (Option_ID , Option_Name, Characteristic_FK)
              VALUES (DEFAULT, :newOptName, :charID)";
            $statement = $pdo->prepare($query);
            foreach ($_POST["newOptName"] as $key => $value) {
                foreach((array)$value as $k => $result) {
                    $statement->bindValue(':newOptName', $result);
                    $statement->bindValue(':charID', $IDArray[$key]);
                    $statement->execute();
                }
            }
        }

    }

    $msg .= "Add Successful!";
    $smarty->assign('msg', $msg);
}

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
if (isset($msg3)) {
    $smarty->assign('success', $msg3);
}
$smarty->display('addShape.tpl');

