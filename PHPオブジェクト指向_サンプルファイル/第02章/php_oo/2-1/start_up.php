<?php
require_once "Human.php";

$h = new Human();

$h->name = "山田太郎";
$h->age = 23;

$h->introduce();
$h->walk();
$h->eat();
?>