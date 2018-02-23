<?php
//Fungi Team 2017

session_start();
$smarty ->assign("pageName", "acknowledgements");

if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {

} else {
    header("Location: http://localhost/~fungi/public_html");
    die();
}
