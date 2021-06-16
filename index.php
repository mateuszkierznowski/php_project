<?php
session_start();
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (file_exists("../config/config.php")) include_once("../config/config.php");

if (file_exists("config/con.fig.php")) include_once("config/con.fig.php");


if (file_exists("header.php")) include("header.php");
if (file_exists("main.php")) include("main.php");
if (file_exists("footer.php")) include("footer.php");
?>