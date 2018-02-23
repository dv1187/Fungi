<?php
//Fungi Team 2015
include "../private_html/setup.php";

session_start();
$smarty->assign("admin", "false");
if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    $smarty->assign("admin", "true");
}

$smarty ->assign("pageName", "about");

$smarty->display('about.tpl');
?>