<?php session_start(); ?>
<?php require("config.php"); ?>
<?php require("classes/Bootstrap.php");?>
<?php require("classes/Controller.php");?>
<?php require("classes/Model.php");?>

<?php require("controllers/home.php");?>
<?php require("controllers/shares.php");?>
<?php require("controllers/users.php");?>

<?php require("models/home.php");?>
<?php require("models/share.php");?>
<?php require("models/user.php");?>
<?php

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if($controller){
	$controller->executeAction();
}
