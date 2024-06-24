<?php
require_once "Mobile.php";

$m = new Mobile();

$m->ch = 4;
$m->telNo = "090-0000-1111";

$m->show();
$m->talk();
?>