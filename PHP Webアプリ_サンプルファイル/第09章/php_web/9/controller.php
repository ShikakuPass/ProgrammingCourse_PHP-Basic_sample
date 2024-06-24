<?php
require_once "./dao/DBConnection.php";
require_once "./dao/UserDAO.php";
require_once "./model/Login.php";
require_once "./model/Logout.php";

session_start();

$request = $_REQUEST;

$action = $request["ACTION"];

if ($action === "LOGIN") {
	$model = new Login();
	$url = $model->execute($request);
} else if ($action === "LOGOUT") {
	$model = new Logout();
	$url = $model->execute($request);
}

header("Location: {$url}");
?>