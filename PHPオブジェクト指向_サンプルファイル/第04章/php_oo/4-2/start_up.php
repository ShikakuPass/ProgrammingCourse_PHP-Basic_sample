<?php
require_once "Human.php";

$h = new Human();
$h->setName("山田太郎");
$h->setAge(23);

$name = $h->getName();
$age = $h->getAge();

echo "名前 : {$name}<br>";
echo "年齢 : {$age}<br>";
?>