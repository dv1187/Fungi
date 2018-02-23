<?php

include "../private_html/setup.php";

$urlToBePassed = array();
$count = 1;


if(isset($_GET['val'])){
    $id = $_GET['id'];

    if($_GET['val'] != "none"){

    $arr = explode(",", $_GET['val']);

    $times = 0; //this works as checking for first time and how many times through
    $build = "";
    foreach($arr as $key => $value){
        if($times == 0){
            $build .= "Option_FK = " . $value;
            $times++;
        } else {
            $build .= " OR Option_FK = " . $value;
            $times++;
        }
    }

    $build2 = " HAVING opt_Num = " . $times;
    if($arr[0] == ""){
        echo "lel no";
        $times = 0;
        $build = "";
        $build2 = "";
    }
    //echo $build . " " . $times;
    //------ Queries for shortened list of species based on chosen options-------
    $query = "SELECT Species_ID, k.Scientific_Name_Without, count(*) as opt_Num
			FROM species_option LEFT JOIN species k ON Species_ID = Species_FK
			WHERE $build AND Shape_FK = :p
			GROUP BY Species_ID
			$build2";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':p', $id);
    $stmt->execute();

    //----- Populate the rows with url of Scientific Names of chosen species----

    $scientificName = array();

    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //if ($row2['Scientific_Name'] == )
            $urlToBePassed[$count] = urlencode($row['Scientific_Name_Without']);
            $scientificName[$count] = $row['Scientific_Name_Without'];
            $count = $count + 1;
        }
    }else{

        $smarty->assign("error1", 'Database Error');
    }

    $smarty->assign("url",$urlToBePassed);
    $smarty->assign("sciName", $scientificName);
} else {
        //------ Queries for full list of species -------
        $query4 = "SELECT * FROM species WHERE Shape_FK = :parameter2";

        $stmt4 = $pdo->prepare($query4);
        $stmt4->bindParam(':parameter2', $id, PDO::PARAM_STR);
        $stmt4->execute();

        $sciName = array();
        $url = array();
        $count1 = 1;

        //---- Populate rows with url of full list of species ----
        while ($row2 = $stmt4->fetch(PDO::FETCH_ASSOC)) {
            $url[$count1] = urlencode($row2['Scientific_Name_Without']);
            $sciName[$count1] = $row2['Scientific_Name_Without'];
            $count1 = $count1 + 1;
        }

        $smarty->assign("sciName", $sciName);
        $smarty->assign("url", $url);
    }
}

$smarty->display('multiKeyList.tpl');
?>