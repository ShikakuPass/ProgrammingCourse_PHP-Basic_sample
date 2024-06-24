<?php
$today = getdate();
echo $today["year"] . "年" . $today["mon"] . "月" . $today["mday"] . "日" . "（" . $today["weekday"] . "）<br>";
echo "[時刻] : " . $today["hours"] . ":" . $today["minutes"] . ":" . $today["seconds"] . "<br>";

$today = date("Y/m/d (D) H:i:s");
echo "[今日] : {$today} <br>";

$yesterday = date("Y-m-d (D)", strtotime("-1 day"));
echo "[昨日] : {$yesterday} <br>";

$tomorrow = date("Y-m-d (D)", strtotime("+1 day"));
echo "[明日] : {$tomorrow} <br>";

$lastWeek = date("Y-m-d (D)", strtotime("-1 week"));
echo "[先週] : {$lastWeek} <br>";

$nextWeek = date("Y-m-d (D)", strtotime("+1 week"));
echo "[来週] : {$nextWeek} <br>";

$lastMonth = date("Y-m-d (D)", strtotime("-1 month"));
echo "[先月] : {$lastMonth} <br>";

$nextMonth = date("Y-m-d (D)", strtotime("+1 month"));
echo "[来月] : {$nextMonth} <br>";

$lastYear = date("Y-m-d (D)", strtotime("-1 year"));
echo "[昨年] : {$lastYear} <br>";

$nextYear = date("Y-m-d (D)", strtotime("+1 year"));
echo "[来年] : {$nextYear} <br>";
?>