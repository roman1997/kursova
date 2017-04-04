<?php 
 session_start();
ini_set('display_errors','1');
error_reporting(E_ALL);

 require_once 'layout/header.php';    
 require_once 'layout/left-menu.php';     

if(isset($_GET["action"]) && file_exists('./views/' . $_GET["action"] . '.php')){ 
	include_once('./views/' . $_GET["action"] . '.php'); 
} 
else { 
	include_once("views/main.php"); 
}
?>