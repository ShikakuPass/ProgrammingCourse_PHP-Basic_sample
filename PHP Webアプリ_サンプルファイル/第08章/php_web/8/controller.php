<?php
require_once "Model.php";

session_start();

$data1 = intVal($_REQUEST["DATA1"]);
$data2 = intVal($_REQUEST["DATA2"]);

$m = new Model();
$m->tasu($data1, $data2);

header("Location: view.php");
?>