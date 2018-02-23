<?php
include "../private_html/setup.php";
session_start();
session_unset();
header("Location: index.php");
die();