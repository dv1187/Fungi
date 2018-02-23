<?php
//Fungi Team 2015
include "../private_html/setup.php";
//---- Query to pull from glossary and glossary_image ----//

$display=false;
$hasTerms=false;
if(isset($_GET["q"])){
    $searchParam = $_REQUEST['q'] . "%";

    $query = "SELECT Term, Image_Name, Caption, Description FROM glossary
          LEFT JOIN glossary_image ON Glossary_FK = Glossary_ID WHERE Term like :a";
//WHERE 'Term' = $hello
    $statement = $pdo->prepare($query);
    $statement->bindParam(':a', $searchParam);
    $display = true;
}else{
    $query = "SELECT Term, Image_Name, Caption, Description FROM glossary
              LEFT JOIN glossary_image ON Glossary_FK = Glossary_ID";
    //WHERE 'Term' = $hello
    $statement = $pdo->prepare($query);
}


$statement ->execute();
$terms = array();
$tempPic = array();
$tempTerm = array();
$previous_term = -1;

//---- Retrieve images and assign them to given term ----//
while($row = $statement->fetch(PDO::FETCH_ASSOC)){
    $hasTerms=true;
    if($previous_term != $row['Term']) {
        if ($previous_term != -1) {
            $tempTerm["Images"] = $tempPic;
            $terms[] = $tempTerm;

        }
            $tempTerm = array(
                "Term" => $row['Term'],
                "Def" => $row['Description']
            );
            $previous_term = $row['Term'];
            $tempPic = array();
        }
        $tempPic[] = array(
            "Image_Name" => $row['Image_Name'],
            "Caption" => $row['Caption']
        );
}


$tempTerm["Images"] = $tempPic;
$terms[] = $tempTerm;

//$output = '';
//
////collect
//    if(isset($_POST['search'])){
//        $searchq = $_POST['search'];
//        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
//
//        $query = "SELECT * FROM Species WHERE Scientific_names LIKE :a";
//        $statement=$pdo->prepare($query);
//        $statement->":a";
//        $count = mysql_num_rows($query);
//        if($count == 0){
//            $output = 'there was no search result';
//        }else{
//            while($row = mysql_fetch_array($query)){
//                $sname = $row['Scientific_names'];
//
//                $output .= '<div>'.$sname.'</div>';
//            }
//        }
//    }


$smarty->assign('terms', $terms);
$smarty->assign('hasTerms', $hasTerms);
if($display == true){
    $smarty->display('glossarySearch.tpl');
} else {
    $smarty->display('glossary.tpl');
}
?>