<?php
define("FILE_NAME", "data.txt");

echo "ファイルへの書き込み処理を行います。<br>";

$fp = fopen(FILE_NAME, "w");
fwrite($fp, "おはようございます。\n");
fwrite($fp, "こんにちは。\n");
fwrite($fp, "こんばんわ。\n");
fclose($fp);

echo "ファイルへの書き込み処理を終了します。<br>";
?>